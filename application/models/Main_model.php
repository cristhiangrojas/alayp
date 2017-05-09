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

}

/* End of file Main_model.php */
/* Location: ./application/models/Main_model.php */