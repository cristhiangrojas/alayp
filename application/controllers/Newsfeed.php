<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsfeed extends CI_Controller 
{
	function __construct()
	{
		parent::__construct(); 

	}

	function index()
	{
		/*if($this->session->userdata('is_logued_in') == true)
		{*/

			/*$data['listado_newsfeed'] = $this->newsfeed_ml->listado_newsfeed();*/

			$pages=10;
			$config['base_url'] = base_url()."/newsfeed/index";
			$config['total_rows'] = $this->newsfeed_ml->filas_panel_centro();
			$config['per_page'] = $pages;
	        $config['num_links'] = 10;
	 		$config['first_link'] = 'Primera';
			$config['last_link'] = 'Última';
	        $config["uri_segment"] = 3;
			$config['next_link'] = 'Siguiente';
			$config['prev_link'] = 'Anterior';
			$this->pagination->initialize($config);	
			$data["pagin"] = $this->newsfeed_ml->total_paginados_panel_centro($config['per_page'],$this->uri->segment(3));

			$data['listado_panel_centro_sponsors'] = $this->newsfeed_ml->listado_panel_centro_sponsors();
			$data['listado_panel_centro_connect'] = $this->newsfeed_ml->listado_panel_centro_connect();

			$data['content'] 	= 'newsfeed/newsfeed';
			$this->load->view('template/index',$data);

		/*}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}*/
	}
}