<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller 
{
	function __construct()
	{
		parent::__construct(); 

		$this->header 	= 'template/header';
		$this->footer 	= 'template/footer';

		/*VIEW*/
		$this->content_forum = 'template/forum/forum';
		$this->content_detalles_forum = 'template/forum/detalles_forum';
	}

	function index()
	{
		/*if($this->session->userdata('is_logued_in') == true)
		{*/
			$header 					= $this->header;
			$content_forum 	= $this->content_forum;
			$footer 					= $this->footer;

			$this->load->view($header);
			$this->load->view($content_forum);
			$this->load->view($footer);

		/*}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}*/
	}

	function detalles_forum()
	{
		/*if($this->session->userdata('is_logued_in') == true)
		{*/
			$header 					= $this->header;
			$content_detalles_forum 	= $this->content_detalles_forum;
			$footer 					= $this->footer;

			$this->load->view($header);
			$this->load->view($content_detalles_forum);
			$this->load->view($footer);

		/*}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}*/
	}
}