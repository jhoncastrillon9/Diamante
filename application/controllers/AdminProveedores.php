<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
controlador Para los clientes

*/
class AdminProveedores extends CI_Controller {

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
		$crud->set_table('proveedores'); 
		$crud->set_subject('Proveedor');	
		//Relaciones entre tablas		
		$crud->set_relation("IdTipoDocumento","tiposdocumento","Nombre");
		$crud->set_relation("IdCiudad","ciudades","Nombre");
		//Los campos que el usuario verá en forma de agregar y editar.
		$crud->fields("IdTipoDocumento","Documento","Nombre","Telefono","Direccion","IdCiudad");
		//Los campos que el usuario verá en forma de agregar y editar Y SON OBLIGATORIOS.
		$crud->required_fields("IdTipoDocumento","Documento","Nombre","Telefono", "IdCiudad");		
		$crud->unique_fields(array("Documento"));
		//Cambiar el nombre del campo por otro
		$crud->display_as("IdTipoDocumento","Tipo de Documento");
		$crud->display_as("Telefono","Teléfono");
		$crud->display_as("Direccion","Dirección");		
		$crud->display_as("IdCiudad","Ciudad");
		//Las columnas mostradas que son visibles para el usuario finalmente en el datagrid o tabla principal
		$crud->columns("Documento","Nombre","Telefono","IdCiudad");

		$tabla=$crud->render();
		$vector['tabla']=$tabla->output;
		$vector['css_files']=$tabla->css_files;
		$vector['js_files']=$tabla->js_files;
		$vector["Documento"]=$this->session->userdata("Documento");
		$vector["Nombre"]=$this->session->userdata("Nombre");
		$vector["Telefono"]=$this->session->userdata("Telefono");
		$vector["Direccion"]=$this->session->userdata("Direccion");
		$vector["IdProyecto"]=$this->session->userdata("IdProyecto");
		$vector["Imagen"]=$this->session->userdata("Imagen");
		$vector["IdUsuario"]=$this->session->userdata("IdUsuario");
		
		$this->load->view('AdminProveedores',$vector);
	}

}





