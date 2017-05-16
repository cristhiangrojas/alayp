<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	
	function add_user($a){
		$data = array(
			'nombres'=>$a['name'],
			'email'=>$a['email'],
			'usuario'=>$a['user'],
			'password'=> md5($a['password']),
			'id_rol'=>2,
			'country'=>$a['country'],
			'date_born'=>$a['date_born'],
			'educational'=>$a['educational'],
			'industry'=>$a['industry'],
			'interests'=>$a['interests'],
			'languages'=>$a['languages'],
			'level'=>$a['level_user'],
			'plan'=>$a['level_single'],
			'occupation'=>$a['occupation'],
		);
		$this->db->insert('usuario',$data);
		return true;
	}
	function forum_by_id($id){
		$this->db->select('U.nombres, forum.*');
		$this->db->join('usuario AS U','U.id_usuario=forum.id_user');
		$this->db->where('forum.id',$id);
		$this->db->order_by('date','desc');
		$sql = $this->db->get('forum',15);
		return $sql;
	}
	function get_user($id){
		$this->db->where('id_usuario',$id);
		$sql = $this->db->get('usuario');
		return $sql;
	}
	function last_foros(){
		$this->db->select('U.nombres, forum.*');
		$this->db->join('usuario AS U','U.id_usuario=forum.id_user');
		$this->db->where('type','head');
		$this->db->order_by('date','desc');
		$sql = $this->db->get('forum',15);
		return $sql;
	}
	function find_forum($val){
		$this->db->select('U.nombres, forum.*');
		$this->db->join('usuario AS U','U.id_usuario=forum.id_user');
		$this->db->like('title',$val);
		$this->db->order_by('date','desc');
		$sql = $this->db->get('forum');
		return $sql;
	}
	function replys_forum($id){
		$this->db->select('U.nombres, forum.*');
		$this->db->join('usuario AS U','U.id_usuario=forum.id_user');
		$this->db->where('forum.parent',$id);
		$this->db->order_by('date','asc');
		$sql = $this->db->get('forum');
		return $sql;
	}
	function get_countries(){
		$this->db->where('accept',1);
		$this->db->order_by('country desc');
		$sql =  $this->db->get('countries');
		return $sql;
	}
	function get_skills(){
		$sql =  $this->db->get('skills');
		return $sql;
	}

}

/* End of file Main_model.php */
/* Location: ./application/models/Main_model.php */