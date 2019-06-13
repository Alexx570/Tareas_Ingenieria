<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {

	
	public function verusuarios()
	{
        $usuarios= $this->db->query("SELECT * FROM nombres");
        $data=$usuarios->result_array();
		return $data;
	}
	public function insertarusuarios_model($ID,$Nombre,$Ap_Paterno,$Ap_Materno)
	{
        $ejecutar_consulta= $this->db->query("INSERT INTO nombres (ID, Nombre, Ap_Paterno, Ap_Materno) VALUES ('$ID','$Nombre','$Ap_Paterno','$Ap_Materno')");
	}

	public function eliminar_model($ID)
	{
	$ejecutar_consulta = $this->db->query("DELETE FROM nombres WHERE ID=$ID ORDER BY Nombre, Ap_Paterno, Ap_Materno");
	}
	
	public function editar_model($ID,$Nombre,$Ap_Paterno,$Ap_Materno)
	{
	$ejecutar_consulta = $this->db->query("UPDATE nombres SET Nombre='$Nombre',Ap_Paterno='$Ap_Paterno',Ap_Materno='$Ap_Materno' 
	WHERE ID='$ID'");
	}
	
}
