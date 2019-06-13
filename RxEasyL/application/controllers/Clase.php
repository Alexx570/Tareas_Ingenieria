<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
class Inicio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuarios');
		$this->load->database('default');
	}

	public function index()
	{
		$this->load->view('inicio');
	}
	
	public function Craneo(){
		$this->load->view('partes/Craneo');
	}
	public function Columna(){
		$this->load->view('partes/Columna');
	}
	public function Torax(){
		$this->load->view('partes/Torax');
	}
	public function Pelvis(){
		$this->load->view('partes/Pelvis');
	}


	public function Login(){
		$this->load->view('Login/Login');
	}
	

	public function usuarios()
	{
		$this->load->view('usuarios');
	}
	
	public function agregarusuarios()
	{
		$this->load->view('nuevo_usuario');
	}
	
	public function insertarusuarios()
	{
		$this->load->view('Confir/hecho');
		$ID=$this->input->post('ID');
		$Nombre=$this->input->post('Nombre');
		$Ap_Paterno=$this->input->post('Ap_Paterno');
		$Ap_Materno=$this->input->post('Ap_Materno');
		$guardar_datos=$this->Usuarios->insertarusuarios_model($ID,$Nombre,$Ap_Paterno,$Ap_Materno);
	}

	public function editar()
	{
		$this->load->view('editar');
	}

	public function editarusuarios()
	{
		$this->load->view('Confir/hecho');
		$ID=$this->input->post('ID');
		$Nombre=$this->input->post('Nombre');
		$Ap_Paterno=$this->input->post('Ap_Paterno');
		$Ap_Materno=$this->input->post('Ap_Materno');
		$guardar_datos=$this->Usuarios->editar_model($ID,$Nombre,$Ap_Paterno,$Ap_Materno);
	}
	
	public function eliminar()
	{
		$this->load->view('eliminar');
	}

	public function eliminarusuarios()
	{
		$this->load->view('Confir/hecho');
		$ID=$this->input->post('ID');
		$guardar_datos = $this->Usuarios->eliminar_model($ID);
	}



}
