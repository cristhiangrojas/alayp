<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	
	function add_user($a){

		$fotos_perfil = $this->subir_perfil();
		$foto_portada = $this->subir_portada();
		if ($fotos_perfil != "0" && $foto_portada != "0") {
			$data = array(
				'foto_perfil'=>$fotos_perfil,
				'foto_portada'=>$foto_portada,
				'nombres'=>$a['name'],
				'email'=>$a['email'],
				'usuario'=>$a['user'],
				'password'=> md5($a['password']),
				'id_rol'=>2,
				'country'=>$a['country'],
				'date_born'=>$a['date_born'],
				'educational'=>$a['educational'],
				'industry'=>$a['industry'],
				'interests'=>json_encode($a['interests']),
				'skills'=>json_encode(array()),
				'languages'=>json_encode($a['languages']),
				'level'=>$a['level_user'],
				'plan'=>$a['level_single'],
				'occupation'=>$a['occupation'],
			);
			$this->db->insert('usuario',$data);
			return true;
		}
	}
	function forum_by_id($id){
		$this->db->select('U.nombres, forum.*');
		$this->db->join('usuario AS U','U.id_usuario=forum.id_user');
		$this->db->where('forum.id',$id);
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
	function get_user($id){
		$this->db->select('usuario.*,countries.country AS "nombre_pais",industries.title AS "nombre_industria", educational_background.title AS "nombre_educacion"')
				->join('countries', 'countries.id = usuario.country')
				->join('industries', 'industries.id = usuario.industry')
				->join('educational_background', 'educational_background.id = usuario.educational')
			->where('id_usuario',$id);
		$consulta = $this->db->get('usuario');
		if($consulta->num_rows()>0)
		{
			$i = 0;
			foreach($consulta->result() as $fila)
				{
					$datos[] = $fila;
					$datos[$i]->lang = $datos[$i]->languages;
					$lenguajes = explode(",",substr($datos[$i]->languages , 1 ,-1));
					$cont = count($lenguajes);
					$leng_fin = "";
					for ($a=0; $a < $cont ; $a++) { 
						$valor = explode('"',$lenguajes[$a]);
						$valor = $valor[1];
						$this->db->select('languages.*')
										->where('languages.id = '.$valor.'');
						$sel =  $this->db->get('languages');
						if ($sel->num_rows() > 0) {
							foreach ($sel->result() as $lenguage) {
								$leng_fin .= " ".$lenguage->title." /";
							}
						}
						$datos[$i]->languages = substr($leng_fin,0,-1);
					}					
					$i ++;
				}
			return $datos;
		}
	}
	function get_interests_user_profile($id){
		$sql1 = json_decode($this->db->query('SELECT interests FROM usuario WHERE id_usuario="'.$id.'" LIMIT 1')->result()[0]->interests,true);
		if (count($sql1) > 0) {
			$this->db->where_in('id',$sql1);
			$sql2 =  $this->db->get('interest')->result();
			return $sql2;
		}
	}
	function get_skills_user_profile($id){
		$sql1 = json_decode($this->db->query('SELECT skills FROM usuario WHERE id_usuario="'.$id.'" LIMIT 1')->result()[0]->skills,true);
		if (count($sql1) > 0) {
			$this->db->where_in('id',$sql1);
			$sql2 =  $this->db->get('skills')->result();
			return $sql2;
		}
	}
	function get_countries(){
		$this->db->where('accept',1);
		$this->db->order_by('country desc');
		$sql =  $this->db->get('countries');
		return $sql;
	}
	function get_interests(){
		$sql = $this->db->get('interest');
		return $sql;
	}
	function get_skills(){
		$sql =  $this->db->get('skills');
		return $sql;
	}
	function get_user_info($id){
		$this->db->where('id_user',$id);
		$sql = $this->db->get('user_info');
	}
	function last_foros(){
		$this->db->select('U.nombres, forum.*');
		$this->db->join('usuario AS U','U.id_usuario=forum.id_user');
		$this->db->where('type','head');
		$this->db->order_by('date','desc');
		$sql = $this->db->get('forum',15);
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
	function edit_user($data,$id){
		$skills = json_encode($data['skills']);
		$intereses = json_encode($data['interests']);
		$languages = json_encode($data['languages']);
		$data['interests'] = $intereses;
		$data['skills'] = $skills;
		$data['languages'] = $languages;
		// echo "<pre>";
		// var_dump($languages);
		// echo "</pre>";
		$this->db->where('id_usuario',$id);
		$this->db->update('usuario',$data);
		$sql1 = $this->db->query('SELECT id_user FROM user_info WHERE id_user="'.$id.'"');
		echo 1;
	}
	function subir_portada() {
		$config2['upload_path'] 		= 'uploads/fotos_perfil/';
		$config2['allowed_types'] 	= 'jpg|jpeg|png|JPG|JPEG|PNG';
		$config2['remove_spaces']	= TRUE;
		$config2['max_size']    		= '1024';
		$this->load->library('upload', $config2);
		if ($this->upload->do_upload('cover_photo')) {
			$file_info = $this->upload->data();
			return $file_info['file_name'];
		}else {
			return 0;
		}
	}
	function subir_perfil() {
		$config['upload_path'] 		= 'uploads/fotos_perfil/';
		$config['allowed_types'] 	= 'jpg|jpeg|png|JPG|JPEG|PNG';
		$config['remove_spaces']	= TRUE;
		$config['max_size']    		= '1024';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('profile_photo')) {
			$file_info = $this->upload->data();
			return $file_info['file_name'];
		}else {
			return 0;
		}
	}
}

/* End of file Main_model.php */
/* Location: ./application/models/Main_model.php */