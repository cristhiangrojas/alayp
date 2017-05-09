<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work_employability extends CI_Controller 
{
	function __construct()
	{
		parent::__construct(); 

		$this->header 	= 'template/header';
		$this->footer 	= 'template/footer';

		/*VIEW*/
		$this->content_work_employability = 'template/work_employability/work_employability';
	}

	function index()
	{
		/*if($this->session->userdata('is_logued_in') == true)
		{*/
			$header 					= $this->header;
			$content_work_employability 	= $this->content_work_employability;
			$footer 					= $this->footer;

			$this->load->view($header);
			$this->load->view($content_work_employability);
			$this->load->view($footer);

		/*}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}*/
	}
}