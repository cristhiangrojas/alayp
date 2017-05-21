<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connect extends CI_Controller 
{
	function __construct(){
		parent::__construct(); 
		if(!is_logued()){redirect('login','refresh');}
	}

	public function index(){
		$data['content'] 	= 'connect';
		$data['listado_panel_centro_sponsors'] = $this->newsfeed_ml->listado_panel_centro_sponsors();
		$data['listado_panel_centro_connect'] = $this->newsfeed_ml->listado_panel_centro_connect();
		$data['list_interest'] = $this->newsfeed_ml->listado_intereses();
		$data['list_skills'] = $this->newsfeed_ml->listado_skills();
		$data['countries'] = $this->work_employability_ml->paises_validos();
		$data['industries'] = $this->newsfeed_ml->listado_industrias();
		$data['languages'] = $this->newsfeed_ml->listado_lenguajes();
		$data['education'] = $this->newsfeed_ml->listado_education();
		$this->load->view('template/index',$data);

	}
	public function user(){
		$data['content'] 	= 'connect_user';
		$data['listado_panel_centro_sponsors'] = $this->newsfeed_ml->listado_panel_centro_sponsors();
		$data['listado_panel_centro_connect'] = $this->newsfeed_ml->listado_panel_centro_connect();
		$uri = $this->uri->segment(3);
		if($uri != null){
			$id_user = $uri;
		}else {
			$id_user = $_SESSION['id_usuario'];
		}
		$data['usuario'] = $this->main_model->get_user($id_user);
		$data['info'] = $this->main_model->get_user_info($id_user);
		$data['interests'] = $this->main_model->get_interests_user_profile($id_user);
		$data['skills'] = $this->main_model->get_skills_user_profile($id_user);
		$this->load->view('template/index',$data);
	}
	public function connect_modal(){
		$data['content'] 	= 'connect_modal';
		$data['listado_panel_centro_sponsors'] = $this->newsfeed_ml->listado_panel_centro_sponsors();
		$data['listado_panel_centro_connect'] = $this->newsfeed_ml->listado_panel_centro_connect();
		$this->load->view('template/connect_modal');
	}
	// Comentario prueba con apoyo
}