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
		$this->TblDetallePresupuestos= "view_detallepresupuesto";
		$this->TblDetalle= "detallepresupuestos";	
		$this->TblProyectos= "proyectos";
		$this->TblCategorias= "categoriapresupuestos";		
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
		
		$crud->add_action('Detallar Presupuesto', base_url()."/assets/Icon/list.png", 'AdminPresupuestos/Detalle');
		$crud->unset_read();
		$crud->unset_clone();
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
		$vector["Proyecto"] = $this->Presupuestos_model->Proyecto($IdProyecto);			
		$vector["Detalles"]= $this->Presupuestos_model->DetallesPresupuesto($id);
		$vector["Categorias"]= $this->Presupuestos_model->Categorias();
		$vector["total"]=$this->Presupuestos_model->total_presupuesto($id);	

		$this->load->view('AdminPresupuestoDetalle',$vector);
	}

	public function AgregarDetalle()
	{		
		//si devuelve una respeusta positiv ejecutar otra funcion del mismo modelo que se llame carrito y esa respuesta la usaremso apra pintar el control html que dice "el pedido va en tanto ...."
		$respuesta = $this->Presupuestos_model->agregar_detalle();
		//si el proceso se realiza la idea es devolverle al ajax en cuandot va la compra para listarlo en la parte de //arriba
		if ($respuesta) {
			$total=$this->Presupuestos_model->total_presupuesto(null);	
		}

		echo ", Valor : $".$total;
	}

	public function TotalPresupuesto()
	{		
		//si devuelve una respeusta positiv ejecutar otra funcion del mismo modelo que se llame carrito y esa respuesta la usaremso apra pintar el control html que dice "el pedido va en tanto ...."
		$total = $this->Presupuestos_model->total_presupuesto(null);
		echo ", Valor : $".$total;
	}

	public function eliminarDetalle()
	{	
		$respuesta = $this->Presupuestos_model->eliminar_detalle();

		return true;
	}

}





