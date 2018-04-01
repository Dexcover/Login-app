<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mlogin');
	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('login/index');

		$this->load->view('layout/footer');
		$this->load->view('login/script');
	}

	public function verificar(){
		$cedula=$_POST['cedula'];
		$passwd=$_POST['pass'];
		$passwd=md5($passwd);

		$pass=$this->mlogin->passLogin($cedula, $passwd);

		if($pass){
			$this->mostrarAut($cedula);
		}else{
			$data['mensaje']="<div style='text-align: center'> <div class='alert alert-danger' role='alert'>Cedula o clave incorrectas</div></div>";
			$this->load->view('layout/header');
			$this->load->view('login/index', $data);
			$this->load->view('layout/footer');


		}
	}

	public function mostrarAut($cedula){
		$nom=$this->mlogin->devNombre($cedula);
		$data['nombre']=$nom;
		$this->session->set_userdata('cedula', $cedula);
		$this->session->set_userdata('nombres', $nom);

		$this->load->view('layout/header');
		$this->load->view('autenticar/index', $data);
		$this->load->view('layout/footer');
		$this->load->view('autenticar/script');
	}

	public function home(){
		$cedula=$this->session->userdata('cedula');
		$nom=$this->mlogin->devNombre($cedula);
		$data['nombre']=$nom;
		$this->load->view('layout/header');
		$this->load->view('login/home',$data);
		$this->load->view('layout/footer');
	}


	public function destruir(){
		$this->session->sess_destroy();
		$this->index();
	}
}
