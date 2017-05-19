<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_ extends CI_Controller {

	private $response;
	public function __construct(){
		parent::__construct();
		$this->response = array('status'=>0,'data'=>array());
	}

	public function edit_profile(){
		$uri = $this->uri->segment(3);
		if($uri != null){
			$id_user = $uri;
		}else {
			$id_user = $_SESSION['id_usuario'];
		}
		$data['u'] = $this->main_model->get_user($id_user)->result()[0];
		$data['country'] = $this->main_model->get_countries();
		$data['skills'] = $this->main_model->get_skills();
		$data['interests'] = $this->main_model->get_interests();
		$this->load->view('template/edit_profile',$data);
	}
	public function edit_user(){
		parse_str($_POST['form'], $data);
		$id_user = $_SESSION['id_usuario'];
		$this->main_model->edit_user($data,$id_user);
	}

	/* Comentario */
}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */