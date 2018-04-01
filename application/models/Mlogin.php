<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model {

	public $variable;

	public function __construct(){
		parent::__construct();
	}

	public function verificar($cedula,$dato1,$dato2,$dato3,$dato4,$dato5,$dato6){
		/*
		Necesito el id de autenticación del usuario
		 */
		$this->db->where('CEDULA', $cedula);
		$query=$this->db->get('USUARIO');
		foreach ($query->result_array() as $row) {
			$id=$row['ID_AUT'];
		}

		$this->db->where('dato1', $dato1);
		$this->db->where('dato2', $dato2);
		$this->db->where('dato3', $dato3);
		$this->db->where('dato4', $dato4);
		$this->db->where('dato5', $dato5);
		$this->db->where('dato6', $dato6);
		$this->db->where('ID_AUT', $id);
		$query=$this->db->get('AUTENTICAR');

		$pass=false;
		foreach ($query->result() as $row) {
			$pass=true;
		}

		return $pass;
	}

	public function passLogin($cedula, $passwd){
		$this->db->where('CEDULA', $cedula);
		$this->db->where('PASSWORD', $passwd);
		$query=$this->db->get('USUARIO');
		$pass=false;
		foreach ($query->result_array() as $row) {
			$pass=true;
		}

		return $pass;
	}

	public function devNombre($cedula){
		$this->db->where('CEDULA', $cedula);
		$query=$this->db->get('USUARIO');
		foreach ($query->result_array() as $row) {
			$id=$row['NOMBRE'];
		}
		return $id;
	}
}

/* End of file Mlogin.php */
/* Location: ./application/models/Mlogin.php */