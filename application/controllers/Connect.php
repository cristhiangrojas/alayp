<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connect extends CI_Controller 
{
	function __construct(){
		parent::__construct(); 
	}

	public function index(){
		$data['content'] 	= 'connect';
		$data['listado_panel_centro_sponsors'] = $this->newsfeed_ml->listado_panel_centro_sponsors();
		$data['listado_panel_centro_connect'] = $this->newsfeed_ml->listado_panel_centro_connect();
		$this->load->view('template/index',$data);

	}
<<<<<<< HEAD
=======
	public function user(){
		$data['content'] 	= 'connect_user';
		$data['listado_panel_centro_sponsors'] = $this->newsfeed_ml->listado_panel_centro_sponsors();
		$data['listado_panel_centro_connect'] = $this->newsfeed_ml->listado_panel_centro_connect();
		$this->load->view('template/index',$data);
	}
	public function connect_modal(){
		$data['content'] 	= 'connect_modal';
		$data['listado_panel_centro_sponsors'] = $this->newsfeed_ml->listado_panel_centro_sponsors();
		$data['listado_panel_centro_connect'] = $this->newsfeed_ml->listado_panel_centro_connect();
		$this->load->view('template/connect_modal');
	}
>>>>>>> refs/remotes/origin/apoyo
	// Comentario prueba con apoyo
}