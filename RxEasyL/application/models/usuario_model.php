<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
public $variable;

	public function __construct(){
		parent::__construct();
	}

	public function login($username,$password){

		$this->db->where('username',$username);
		$this->db->where('passwor',$password);
		$q=$this->db->get('usuarios1');
		if($q->num_rows()>0){
			return true;
		}else{
			return false;
		}
    }
    public function verusuarios()
	{
        $username= $this->db->query("SELECT * FROM usuarios1");
        $data=$username->result_array();
		return $data;
	}
	
}