<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
controlador Para los clientes

*/
class AdminCategoriasp extends CI_Controller {

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
		$crud->set_table('categoriapresupuestos'); 
		$crud->set_subject('Categoria de Presupuesto');			

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
		
		$this->load->view('AdminCategoriasp',$vector);
	}

}





