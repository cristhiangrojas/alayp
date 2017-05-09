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
	// Comentario prueba con apoyo
}