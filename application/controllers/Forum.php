<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller 
{
	function __construct()	{
		parent::__construct(); 
		if(!is_logued()){
			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}

	function index(){
		if(isset($_POST['form_value'])){
			$value = $this->input->post('form_value');
			$data['foros'] = $this->main_model->find_forum($value);
		}else {
			$data['foros'] = $this->main_model->last_foros();
		}
		$data['content'] 	= 'forum/forum';
		$this->load->view('template/index',$data);
	}

	function detalles_forum(){
		$id = $this->uri->segment(3);
		$data['head'] = $this->main_model->forum_by_id($id)->result()[0];
		$data['replys'] = $this->main_model->replys_forum($id);
		$data['content'] 	= 'forum/detalles_forum';
		$this->load->view('template/index',$data);
	}
}