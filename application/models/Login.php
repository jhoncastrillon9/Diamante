<?php 
/*
Modelo para el login o acceso al sistema
Todos los modelos heredan del CI_Model que es el coreo Principal
o la capa logica con la que CI interactua con la base de datos
*/
class Login_model extends CI_Model
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
	function validar_usuario() {
		// con el helper security vamos a formatear los dos campos que necesitamos
		//1. Para recuperar una variable que viene en un formulario
		//$correo=$_POST['correo'];
		$pass=$this->input->post("Pass");
		$email=$this->input->post("Email");
		//2. Aplicarle la libreria security
		$email=$this->security->xss_clean($email);
		$pass=$this->security->xss_clean($pass);
		// buscar el usuario
		//select * from tblusuarios where correo='$correo' and clave=sha1('$clave')
		// en vez de pasar el query, usaremos la funcion de la base de datos que se llama get_where que pide la tabla y en un vector los parametros a consultar. Este tipo de consultas siempre devuelven un resultado en vector

		$vector=array("email"=>$email,"pass"=>sha1($pass));
		$query=$this->db->get_where("usuarios",$vector);
		// cuando realice la consulta que devuelve el resultado
		return $query->result_array();

	}
}
?>
