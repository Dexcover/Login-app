<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mregistrar');
	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('registrar/index');
		$this->load->view('layout/footer');
	}

	public function registro(){
		$cedula=$_POST['cedula'];
		$nombres=$_POST['nombres'];
		$passwd=$_POST['pass'];

		$this->session->set_userdata('cedula', $cedula);
		$this->session->set_userdata('nombres', $nombres);
		$this->session->set_userdata('passwd', $passwd);

		$data['nombre']=$nombres;

		$this->load->view('layout/header');
		$this->load->view('autenticar/index2',$data);
		$this->load->view('layout/footer');
		$this->load->view('registrar/script');

	}

	public function paso2()
	{
		/*
		LA CEDULA VIENE DE LA VARIABLE DE SESIÓN.
		 */
		$cedula=$this->session->userdata('cedula');
		$nombres=$this->session->userdata('nombres');
		$pass=$this->session->userdata('passwd');
		$pass=md5($pass);

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
		$pass= $this->mregistrar->registrar($cedula,$nombres,$pass,$dato1,$dato2,$dato3,$dato4,$dato5,$dato6);

		if($pass){
			$response="true";
		}else{
			$response="false";
		}

		echo $response;
	}

	public function home(){
		$this->load->view('layout/header');
		$this->load->view('login/home');
		$this->load->view('layout/footer');

		$this->session->sess_destroy();
	}

	public function destruir(){
		$this->session->sess_destroy();
		$this->index();
	}

}
