<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autenticar extends CI_Controller {

	


	public function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin');
	}



	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('autenticar/index');
		$this->load->view('layout/footer');
		$this->load->view('autenticar/script');

	}

	public function validar(){
		/*
		LA CEDULA VIENE DE LA VARIABLE DE SESIÓN.
		 */
		$cedula=$this->session->userdata('cedula');


		/*
		DATOS QUE VIENEN DESDE LA VISTA
		 */

		$dato1=$_POST['dato1'];
		$dato2=$_POST['dato2'];
		$dato3=$_POST['dato3'];
		$dato4=$_POST['dato4'];
		$dato5=$_POST['dato5'];
		$dato6=$_POST['dato6'];


		/*
		ENVIO A VERIFICAR
		 */
		$pass= $this->mlogin->verificar($cedula,$dato1,$dato2,$dato3,$dato4,$dato5,$dato6);


		if($pass){
			$response="true";
		}else
		{
			$response="false";
		}


		echo $response;


	}


}
