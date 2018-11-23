<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
controlador principal
para entrar a este controlador le podemos desde el constrcutor que valide si esta logueado
o que es lo mismo que exista la variable de session

*/
class AdminDiamante extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		if (!$this->session->userdata("IdUsuario")) {
			redirect('login');
		}
	}


	public function index()
	{
		//Variables o vectores a enviar a la lista
		$vector["usuario"]=$this->session->userdata("Nombe");
		$vector["Documento"]=$this->session->userdata("Documento");
		$vector["Nombre"]=$this->session->userdata("Nombre");
		$vector["Telefono"]=$this->session->userdata("Telefono");
		$vector["Direccion"]=$this->session->userdata("Direccion");
		$vector["IdProyecto"]=$this->session->userdata("IdProyecto");
		$vector["Imagen"]=$this->session->userdata("Imagen");
		$vector["IdUsuario"]=$this->session->userdata("IdUsuario");

		$this->load->view('AdminDiamante',$vector);
	}

}
