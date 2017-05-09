<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller 
{
	function __construct()
	{
		parent::__construct(); 
		$this->content_detalles_forum = 'template/forum/detalles_forum';
	}

	function index()	{
		/*if($this->session->userdata('is_logued_in') == true)
		{*/
		$data['content'] 	= 'forum/forum';
		$this->load->view('template/index',$data);

		/*}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}*/
	}

	function detalles_forum()
	{
		/*if($this->session->userdata('is_logued_in') == true)
		{*/
			$data['content'] 	= 'forum/detalles_forum';
			$this->load->view('template/index',$data);

		/*}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}*/
	}
}