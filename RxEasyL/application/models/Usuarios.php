<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {

	

	
	public function verusuarios()
	{
        $usuarios= $this->db->query("SELECT * FROM usuarios1");
        $data=$usuarios->result_array();
		return $data;
	}
	public function insertarusuarios_model($ID,$username,$password)
	{
        $ejecutar_consulta= $this->db->query("INSERT INTO usuarios1(ID, username, passwor) VALUES ('$ID','$username','$password')");
	}

	public function eliminar_model($ID)
	{
	$ejecutar_consulta = $this->db->query("DELETE FROM usuarios WHERE ID=$ID ORDER BY Nombre, Correo,Pass1");
	}
	
	public function editar_model($ID, $Nombre,$Correo,$pass1)
	{
	$ejecutar_consulta = $this->db->query("UPDATE usuarios SET Nombre='$Nombre',Correo='$Correo',Pass1='$pass1'	WHERE ID='$ID'");
	}
	
}
?>