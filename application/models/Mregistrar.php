<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mregistrar extends CI_Model {

	public $variable;

	public function __construct(){
		parent::__construct();
	}

	public function registrar($cedula,$nombres,$pass,$dato1,$dato2,$dato3,$dato4,$dato5,$dato6){
		$query=$this->db->get('AUTENTICAR');
		foreach ($query->result_array() as $row){
			$id=$row['ID_AUT'];
		}

		$id=$id+1;

		$data = array('ID_AUT' => $id,
			'DATO1' => $dato1,
			'DATO2' => $dato2,
			'DATO3' => $dato3,
			'DATO4' => $dato4,
			'DATO5' => $dato5,
			'DATO6' => $dato6,
			);

		$this->db->insert('AUTENTICAR', $data);


		$data = array('CEDULA' => $cedula,
			'NOMBRE' => $nombres,
			'PASSWORD' => $pass,
			'ID_AUT' => $id
			);

		$this->db->insert('USUARIO', $data);

		return true;
	}

}