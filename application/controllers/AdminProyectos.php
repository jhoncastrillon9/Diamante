<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
controlador Para los clientes

*/
class AdminProyectos extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		// cargar la libreria del rud grocery
		
		$this->load->library("grocery_CRUD");
		$this->TblProyectosImagenes= "proyectosimagenes";
		$this->TblProyectos= "proyectos";
		$this->load->model('Proyectos_model');	
		$this->load->model('Presupuestos_model');	

		if (!$this->session->userdata("IdUsuario")) {
			redirect('login');
		}
	}


	public function Index()
	{	
		$crud=new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$crud->set_table('proyectos'); 
		$crud->set_subject('Proyecto');	
		//Relaciones entre tablas
		$crud->set_relation("IdCiudad","ciudades","Nombre");
		//Los campos que el usuario verá en forma de agregar y editar.
		$crud->fields("Nombre","Direccion","IdCiudad", "Logo");
		//Los campos que el usuario verá en forma de agregar y editar Y SON OBLIGATORIOS.
		$crud->required_fields("Nombre","Direccion","IdCiudad", "Logo");		
		$crud->unique_fields(array("Nombre"));
		//Cambiar el nombre del campo por otro
		$crud->display_as("Direccion","Dirección");		
		$crud->display_as("IdCiudad","Ciudad");
		//Las columnas mostradas que son visibles para el usuario finalmente en el datagrid o tabla principal
		$crud->columns("Logo","Nombre","Direccion","IdCiudad");
		//iNDICAR QUEES UN CAMNPO PARA CARGAR ARCHIVO
		$crud->set_field_upload("Logo","assets/uploads/Proyectos/Logos/");
		//desactivar opcion de clonar 
		$crud->unset_clone();
		$crud->add_action('Galeria de Imagenes', base_url()."/assets/Icon/Icon_Img.png", 'AdminProyectos/Galeria');

		$tabla=$crud->render();
		$vector['tabla']=$tabla->output;
		$vector['css_files']=$tabla->css_files;
		$vector['js_files']=$tabla->js_files;
		$vector["Documento"]=$this->session->userdata("Documento");
		$vector["Nombre"]=$this->session->userdata("Nombre");
		$vector["Telefono"]=$this->session->userdata("Telefono");
		$vector["Direccion"]=$this->session->userdata("Direccion");
		$vector["IdProyecto"]=$this->session->userdata("IdProyecto");
		$this->load->view('AdminProyectos',$vector);
	}

	public function Galeria($id)
	{		
		$vector["Imagenes"]=$this->Proyectos_model->Imagenes($id);
		$vector["Proyecto"] = $this->Presupuestos_model->Proyecto($id);	

		$this->load->view('AdminProyectosGaleria',$vector);
	}

	public function AddImagenesGaleria()
	{	
		$crud=new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$crud->set_table('proyectosimagenes'); 
		$crud->set_subject('Imagen de Proyecto');	
		//Relaciones entre tablas
		$crud->set_relation("IdProyecto","proyectos","Nombre");
		//Los campos que el usuario verá en forma de agregar y editar.
		$crud->fields("IdProyecto","UrlImagen","Descripcion");
		//Los campos que el usuario verá en forma de agregar y editar Y SON OBLIGATORIOS.
		$crud->required_fields("IdProyecto","UrlImagen","Descripcion");		
		$crud->unique_fields(array("UrlImagen"));
		//Cambiar el nombre del campo por otro
		$crud->display_as("UrlImagen","Imagen");		
		$crud->display_as("Descripcion","Descripción");
		//Las columnas mostradas que son visibles para el usuario finalmente en el datagrid o tabla principal
		$crud->columns("IdProyecto","UrlImagen","Descripcion");
		//iNDICAR QUEES UN CAMNPO PARA CARGAR ARCHIVO
		$crud->set_field_upload("UrlImagen","assets/uploads/Proyectos/Generales/");
		//desactivar opcion de clonar 
		$crud->unset_clone();
		$crud->unset_edit();		

		$tabla=$crud->render();
		$vector['tabla']=$tabla->output;
		$vector['css_files']=$tabla->css_files;
		$vector['js_files']=$tabla->js_files;
		$vector["Documento"]=$this->session->userdata("Documento");
		$vector["Nombre"]=$this->session->userdata("Nombre");
		$vector["Telefono"]=$this->session->userdata("Telefono");
		$vector["Direccion"]=$this->session->userdata("Direccion");
		$vector["IdProyecto"]=$this->session->userdata("IdProyecto");
		$this->load->view('AdminProyectosAddImagen',$vector);
	}

}





