<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
controlador Para los clientes

*/
class ApiProyectos extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		// cargar la libreria del rud grocery
		
		$this->load->library("grocery_CRUD");
		$this->TblProyectosImagenes= "proyectosimagenes";
		$this->TblProyectos= "proyectos";
		$this->load->model('Proyectos_model');	
		$this->load->model('Presupuestos_model');	
	}

	public function Proyectos()
	{	
		print_r(json_encode($this->Proyectos_model->FullProyectos()));
	}

	public function ImagenesProyectos($id)
	{	
		print_r(json_encode($this->Proyectos_model->ApiImagenesProyecto($id)));
	}
	

}





