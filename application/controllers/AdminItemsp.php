<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
controlador Para los clientes

*/
class AdminItemsp extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		// cargar la libreria del rud grocery
		$this->TblItemsp= "itemspresupuestos";
		$this->ViewItemsp= "view_itemspresupuesto";
		$this->load->model('Items_model');			
		$this->load->library("grocery_CRUD");

		if (!$this->session->userdata("IdUsuario")) {
			redirect('login');
		}
	}


	public function Index()
	{	
		$crud=new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$crud->set_table('itemspresupuestos'); 
		$crud->set_subject('Item de Presupuesto');
		$crud->unique_fields(array("Nombre"));
		$crud->set_relation("IdCategoria","categoriapresupuestos","Nombre");
		$crud->set_relation("IdMedida","medidaitem","Nombre");

		//Los campos que el usuario verá en forma de agregar y editar.
		$crud->fields("Nombre","IdCategoria","IdMedida","ValorSugerido");
		//Los campos que el usuario verá en forma de agregar y editar Y SON OBLIGATORIOS.
		$crud->required_fields("Nombre","IdCategoria","IdMedida","ValorSugerido");
		//Cambiar el nombre del campo por otro
		$crud->display_as("IdCategoria","Categoria")->display_as("ValorSugerido","Valor Sugerido")->display_as("IdMedida","UN");				

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
		
		$this->load->view('AdminItemsp',$vector);
	}

	public function GetItemsByCategory($Id)
	{			
		$Items['Items']= $this->Items_model->GetAllItemsByCategory($Id);		
		echo json_encode($Items);		
	}

	public function GetItemById($Id)
	{			
		$Item['Item']= $this->Items_model->GetItemById($Id);		
		echo json_encode($Item);		
	}
	
}





