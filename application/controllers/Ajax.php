<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	private $response;
	public function __construct(){
		parent::__construct();
		$this->response = array('status'=>0,'data'=>array());
	}

	public function index()	{
			
	}
	public function check_user(){
		$user = $_POST['user'];
		$this->db->select('usuario');
		$this->db->where('usuario',$user);
		$sql = $this->db->get('usuario');
		if($sql->num_rows() > 0){
			$this->response['status'] = 1;
		}
		echo json_encode($this->response);
	}

	public function register_user(){
		$this->response['data'] = $_POST;
		$this->main_model->add_user($this->response['data']);
		echo json_encode($this->response);
	}

	/* Comentario */
}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */