<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	public function index()
	{
		$this->load->view('login');
	}

	public function procesar_login()
	{
		$usuario 	= $this->input->post('usuario');
		$password 	= md5($this->input->post('password'));

		$check_user = $this->login_ml->login_user($usuario,$password);

		if($check_user == TRUE)
		{
           $data = array(
	            'is_logued_in' 	=> 	TRUE,
	            'id_usuario' 	=> 	$check_user->id_usuario,
				'apellidos'		=>	$check_user->apellidos,
				'nombres'		=>	$check_user->nombres,
				'email' 		=> 	$check_user->email,
				'usuario'		=> 	$check_user->usuario,
				'password'		=>	$check_user->password,
				'id_rol'		=>	$check_user->id_rol,
				'estado'		=>	$check_user->estado,
            );

			$this->session->set_userdata($data);
			if($check_user->id_rol == 1){
				redirect(base_url().'administrador/dashboard','refresh');
			} else {
				redirect(base_url(),'refresh');
			}

		}else{

			$this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
            redirect(base_url().'login','refresh');
		}
	}
	function logout(){
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	   redirect(base_url().'login');
	}
}
