<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Study extends CI_Controller 
{
	function __construct()
	{
		parent::__construct(); 

		$this->header 	= 'template/header';
		$this->footer 	= 'template/footer';

		/*VIEW*/
		$this->content_study = 'template/study/study';
	}

	function index()
	{
		/*if($this->session->userdata('is_logued_in') == true)
		{*/
			$header 					= $this->header;
			$content_study 	= $this->content_study;
			$footer 					= $this->footer;

			$pages=10;
			$config['base_url'] = base_url()."/study/index";
			$config['total_rows'] = $this->study_ml->filas_panel_centro();
			$config['per_page'] = $pages;
	        $config['num_links'] = 10;
	 		$config['first_link'] = 'Primera';
			$config['last_link'] = 'Última';
	        $config["uri_segment"] = 3;
			$config['next_link'] = 'Siguiente';
			$config['prev_link'] = 'Anterior';
			$this->pagination->initialize($config);	
			$data["pagin"] = $this->study_ml->total_paginados_panel_centro($config['per_page'],$this->uri->segment(3));

			$data['listado_panel_centro_sponsors'] = $this->study_ml->listado_panel_centro_sponsors();

			$this->load->view($header);
			$this->load->view($content_study,$data);
			$this->load->view($footer);

		/*}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}*/
	}
}