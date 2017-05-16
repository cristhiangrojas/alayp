<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	function __construct()
	{
		parent::__construct(); 

		$this->header 	= 'dashboard/header';
		$this->content 	= 'dashboard/content';
		$this->footer 	= 'dashboard/footer';
	}

	function index()
	{
		if($this->session->userdata('is_logued_in') == true)
		{
			$header 	= $this->header;
			$content 	= $this->content;
			$footer 	= $this->footer;

			$this->load->view($header);
			$this->load->view($content);
			$this->load->view($footer);

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}
	function skills() {
		if($this->session->userdata('is_logued_in') == true)
		{

			$datos['lista_skills'] = $this->newsfeed_ml->listado_skills();
			$header 	= $this->header;
			$content 	= "dashboard/modulos/menu/skills";
			$footer 	= $this->footer;

			$this->load->view($header);
			$this->load->view($content, $datos);
			$this->load->view($footer);

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}
	function interest() {
		if($this->session->userdata('is_logued_in') == true)
		{

			$datos['lista_interest'] = $this->newsfeed_ml->listado_intereses();
			$header 	= $this->header;
			$content 	= "dashboard/modulos/menu/interest";
			$footer 	= $this->footer;

			$this->load->view($header);
			$this->load->view($content, $datos);
			$this->load->view($footer);

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}
	function countries() {
		if($this->session->userdata('is_logued_in') == true)
		{

			$datos['lista_paises'] = $this->newsfeed_ml->listado_paises();
			$header 	= $this->header;
			$content 	= "dashboard/modulos/menu/countries";
			$footer 	= $this->footer;

			$this->load->view($header);
			$this->load->view($content, $datos);
			$this->load->view($footer);

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}
	function events_upcoming() {
		if($this->session->userdata('is_logued_in') == true)
		{

			$datos['events_upcoming'] = $this->newsfeed_ml->events_upcoming();
			$datos['last_id_speakers'] = $this->newsfeed_ml->last_id_speakers();
			$header 	= $this->header;
			$content 	= "dashboard/modulos/menu/events/events_upcoming";
			$footer 	= $this->footer;

			$this->load->view($header);
			$this->load->view($content, $datos);
			$this->load->view($footer);

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}
	function logout()
	{
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	   redirect(base_url().'login');
	}
}
