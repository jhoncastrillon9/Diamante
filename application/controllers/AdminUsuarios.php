<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
controlador Para los clientes

*/
class AdminUsuarios extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		// cargar la libreria del rud grocery
		
		$this->load->library("grocery_CRUD");

		if (!$this->session->userdata("IdUsuario")) {
			redirect('login');
		}
	}


	public function Index()
	{	
		$crud=new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$crud->set_table('usuarios'); 
		$crud->set_subject('Usuario');	
		//Relaciones entre tablas		
		$crud->set_relation("IdRol","roles","Nombre");		
		//Los campos que el usuario verá en forma de agregar y editar.
		$crud->fields("Nombre","IdRol","Email","Imagen");
		//Los campos que el usuario verá en forma de agregar y editar Y SON OBLIGATORIOS.
		$crud->required_fields("Nombre","IdRol","Email","Imagen");		
		$crud->unique_fields(array("Email","Imagen"));
		//Cambiar el nombre del campo por otro
		$crud->display_as("IdRol","Tipo de Usuario");
		//Las columnas mostradas que son visibles para el usuario finalmente en el datagrid o tabla principal
		$crud->columns("Imagen","Nombre","Email","IdRol");
		//iNDICAR QUEES UN CAMNPO PARA CARGAR ARCHIVO
		$crud->set_field_upload("Imagen","assets/uploads/Usuarios/");

		$crud->unset_clone();

		$tabla=$crud->render();
		$vector['tabla']=$tabla->output;
		$vector['css_files']=$tabla->css_files;
		$vector['js_files']=$tabla->js_files;
		$vector["Documento"]=$this->session->userdata("Documento");
		$vector["Nombre"]=$this->session->userdata("Nombre");
		$vector["Imagen"]=$this->session->userdata("Imagen");
		$vector["Telefono"]=$this->session->userdata("Telefono");
		$vector["Direccion"]=$this->session->userdata("Direccion");
		$vector["IdProyecto"]=$this->session->userdata("IdProyecto");
		$vector["Imagen"]=$this->session->userdata("Imagen");
		$vector["IdUsuario"]=$this->session->userdata("IdUsuario");
		
		$this->load->view('AdminUsuarios',$vector);
	}

}





