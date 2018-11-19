<?php 
/*
Modelo para el login o acceso al sistema
Todos los modelos heredan del CI_Model que es el coreo Principal
o la capa logica con la que CI interactua con la base de datos
*/
class Presupuestos_model extends CI_Model
{

	function __construct()
	{
		// como este modelo recibe parametros desde un formulario
		// se recomienda que los datos pasen por la libreria o helper security
		// este helper permite validar sql injection, CSFS, XSS, entre otros
		$this->load->helper('security');
	}
	// crear una funcion que nos permita validar la existencia del usuario
	// en el modelo lo unico que se hara es una consulta a la tabla
	// y el resultado sea positivo o negativo lo evalua el controlador
	function HeaderPresupuesto($id)
	{
		$data=array("id"=>$id);
		$query = $this->db->get_where($this->TblPresupuestos,$data);
		return $query->result_array();
	}

	function Proyecto($id)
	{
		$data=array("id"=>$id);
		$query = $this->db->get_where($this->TblProyectos,$data);
		return $query->result_array();
	}

	function DetallesPresupuesto($id)
	{
		$data=array("IdPresupuesto"=>$id);
		$query = $this->db->get_where($this->TblDetallePresupuestos,$data);
		return $query->result_array();
	}

	function agregar_detalle()
	{	

		// como ese esta suando ajax podemos enviar un echo o un print.r o un conetido html para que 
		//muestre en la capa que selecionemos o en el f12 del explorador
		//print_r($_POST);		
			$idpresupuesto = $this->input->post("idpresupuesto");
			$categoria = $this->input->post("categoria");
			$item = $this->input->post("item");
			$valor = $this->input->post("valor");
			$cantidad = $this->input->post("cantidad");
			$total = $this->input->post("total");	
	
			// //peveri uinyesion de codigo
			$idpresupuesto = $this->security->xss_clean($idpresupuesto);
			$categoria = $this->security->xss_clean($categoria);
			$item = $this->security->xss_clean($item);
			$valor = $this->security->xss_clean($valor);
			$cantidad = $this->security->xss_clean($cantidad);
			$total = $this->security->xss_clean($total);

			$data=array(
					"IdPresupuesto"=>$idpresupuesto,					
					"Idcategoria"=>$categoria,
					"IdItem"=>$item,
					"ValorUnitario"=>$valor,
					"Cantidad"=>$cantidad,
					"ValorTotal"=>$total
			);

			$this->db->insert($this->TblDetalle,$data);

			return true;		
	}

	function Categorias()
	{		
		$query = $this->db->get($this->TblCategorias);
		return $query->result_array();
	}

	function total_presupuesto($id){
		if ($id==null) 
		{
			$idpresupuesto = $this->input->post("idpresupuesto");		
			$idpresupuesto = $this->security->xss_clean($idpresupuesto);

		}else{
			$idpresupuesto = $id;		
			$idpresupuesto = $this->security->xss_clean($idpresupuesto);

		}
		$total=0;	
		$data=array("IdPresupuesto"=>$idpresupuesto);
		$query = $this->db->get_where($this->TblDetalle,$data);
		$res=$query->result_array();
		foreach ($res as $fila) {
			$total = $total+$fila["ValorTotal"];
		}
		return	$total;
	}
	
	function eliminar_detalle()
	{	
		$idregistro = $this->input->post("idregistro");
		$idregistro = $this->security->xss_clean($idregistro);

		$query = $this->db->delete($this->TblDetalle, array('IdDetalle' => $idregistro));			
		
	}

}
?>
