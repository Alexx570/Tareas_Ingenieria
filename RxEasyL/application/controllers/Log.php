<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}


	public function index()
	{
		if($this->session->userdata('username')){
			redirect('Inicio');
		}

		if(isset($_POST['passwor'])){
			$this->load->model('usuario_model');
			if($this->usuario_model->login($_POST['username'],md5($_POST['passwor']))){
				$this->session->set_userdata('username',$_POST['username']);
				redirect('Inicio');
			}else{
				redirect('Log#bad-pass');
				
			}
		
		}
		$this->load->view('Log');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Inicio');
	}
	public function insertarusuarios()
	{
		$this->load->view('Confir/hecho');
		$ID=$this->input->post('ID');
		$username=$this->input->post('username');
		$password=$this->input->post('passwor');
		$guardar_datos=$this->Usuarios->insertarusuarios_model($ID,$username,$password);
}
	
}
