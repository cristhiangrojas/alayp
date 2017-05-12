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
	public function add_forum(){
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$id_user = $_SESSION['id_usuario'];
		$fecha = date('Y-m-d H:i:s');
		$data = array(
			'date' => $fecha,
			'title' => $title,
			'content' => $content,
			'type' => 'head',
			'id_user' => $id_user
		);
		$this->db->insert('forum',$data);
		$this->db->select('U.nombres, forum.*');
		$this->db->join('usuario AS U','U.id_usuario=forum.id_user');
		$this->db->where('id_user',$id_user);
		$this->db->where('type','head');
		$this->db->order_by('date','desc');
		$sql = $this->db->get('forum',1);
		$this->response['data'] = $sql->result();
		echo json_encode($this->response);
	}
	public function reply_forum(){
		$content = $this->input->post('content');
		$id_forum = $this->input->post('id');
		$id_user = $_SESSION['id_usuario'];
		$data = array(
			'date' => date('Y-m-d H:i:s'),
			'content' => $content,
			'parent' => $id_forum,
			'type' => 'reply',
			'id_user' => $id_user
		);
		$this->db->insert('forum',$data);
		$this->db->select('U.nombres, forum.*');
		$this->db->join('usuario AS U','U.id_usuario=forum.id_user');
		$this->db->where('id_user',$id_user);
		$this->db->where('type','reply');
		$this->db->order_by('date','desc');
		$sql = $this->db->get('forum',1);
		$this->response['data'] = $sql->result();
		echo json_encode($this->response);
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