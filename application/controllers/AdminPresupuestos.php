<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
controlador Para los clientes

*/
class AdminPresupuestos extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		// cargar la libreria del rud grocery
		
		$this->load->library("grocery_CRUD");
		$this->TblPresupuestos= "presupuestos";	
		$this->TblProyectos= "proyectos";
	 	$this->load->model('Presupuestos_model');	

		if (!$this->session->userdata("IdUsuario")) {
			redirect('login');
		}
	}


	public function Index()
	{	
		$crud=new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$crud->set_table('presupuestos'); 
		$crud->set_subject('Presupuesto');	
		//Relaciones entre tablas
		$crud->set_relation("IdProyecto","proyectos","Nombre");		
		//Los campos que el usuario verá en forma de agregar y editar.
		$crud->fields("Nombre","IdProyecto");
		//Los campos que el usuario verá en forma de agregar y editar Y SON OBLIGATORIOS.
		$crud->required_fields("Nombre","IdProyecto");		
		$crud->unique_fields(array("Nombre"));
		//Cambiar el nombre del campo por otro
		$crud->display_as("IdTipoDocumento","Tipo de Documento");		
		//Las columnas mostradas que son visibles para el usuario finalmente en el datagrid o tabla principal
		$crud->columns("Nombre","Valor","IdProyecto");

		$tabla=$crud->render();
		$vector['tabla']=$tabla->output;
		$vector['css_files']=$tabla->css_files;
		$vector['js_files']=$tabla->js_files;
		$vector["Documento"]=$this->session->userdata("Documento");
		$vector["Nombre"]=$this->session->userdata("Nombre");
		$vector["Telefono"]=$this->session->userdata("Telefono");
		$vector["Direccion"]=$this->session->userdata("Direccion");
		$vector["IdProyecto"]=$this->session->userdata("IdProyecto");
		$this->load->view('AdminPresupuestos',$vector);
	}

	public function Detalle($id)
	{

		$vector["Header_Presupuesto"] = $this->Presupuestos_model->HeaderPresupuesto($id);
		$IdProyecto= $vector["Header_Presupuesto"][0]["IdProyecto"];
		$vector["NombreProyecto"] = $this->Presupuestos_model->NombreProyecto($IdProyecto);      

		$this->load->view('AdminPresupuestoDetalle',$vector);
	}

}





