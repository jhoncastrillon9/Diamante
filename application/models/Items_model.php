<?php 
/*
Modelo para el login o acceso al sistema
Todos los modelos heredan del CI_Model que es el coreo Principal
o la capa logica con la que CI interactua con la base de datos
*/
class Items_model extends CI_Model
{

	function __construct()
	{
		// como este modelo recibe parametros desde un formulario
		// se recomienda que los datos pasen por la libreria o helper security
		// este helper permite validar sql injection, CSFS, XSS, entre otros
		$this->load->helper('security');
	}

	function GetAllItemsByCategory($id)
	{
		$data=array("IdCategoria"=>$id);
		$query = $this->db->get_where($this->TblItemsp,$data);
		return $query->result_array();
	}

	function GetItemById($id)
	{
		$data=array("Id"=>$id);
		$query = $this->db->get_where($this->ViewItemsp,$data);
		return $query->result_array();
	}

}
?>
