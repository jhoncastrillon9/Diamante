<?php 
/*
Modelo para el login o acceso al sistema
Todos los modelos heredan del CI_Model que es el coreo Principal
o la capa logica con la que CI interactua con la base de datos
*/
class Proyectos_model extends CI_Model
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
	function Imagenes($id)
	{
		$data=array("IdProyecto"=>$id);
		$query = $this->db->get_where($this->TblProyectosImagenes,$data);
		return $query->result_array();
	}

}
?>
