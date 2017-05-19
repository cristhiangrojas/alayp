<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work_employability extends CI_Controller 
{
	function __construct()
	{
		$this->content 	= 'work_employability/work_employability';
		parent::__construct(); 

	}

	function index()
	{
		$data['content'] 	= $this->content;
		$data['listado_panel_centro_sponsors'] = $this->work_employability_ml->listado_panel_centro_sponsors();
		$data['list_jobs']		= $this->work_employability_ml->list_jobs();
		$this->load->view('template/index',$data);
	}
}