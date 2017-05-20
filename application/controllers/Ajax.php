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

	public function agregar_skill() {
		$data['title'] = $this->input->post('title');
		$this->db->insert('skills', $data);
		$this->db->order_by('id','desc');
		$sql = $this->db->get('skills',1);
		$this->response['data'] = $sql->result();
		echo json_encode($this->response);		
	}
	public function editar_skill() {

		$data['title'] = $this->input->post('title');
		$data['id'] = $this->input->post('id');
		$this->db->select('skills.*', FALSE);
		$this->db->where('skills.id', $data['id']);
		$upd = $this->db->update('skills', $data);
		if ($upd == true) {
			$this->db->select('skills.*', FALSE)
					->where('id',$data['id']);
			$sql = $this->db->get('skills',1);
			$this->response['data'] = $sql->result();
			echo json_encode($this->response);
		}	
	}
	public function eliminar_skill() {
		$data['id'] = $this->input->post('id');
		$delete = $this->db->delete('skills', $data);
		if ($delete == true) {
			$this->response['data'] = $data;
			echo json_encode($this->response);
		}	
	}
	public function agregar_interest() {
		$data['title'] = $this->input->post('title');
		$this->db->insert('interest', $data);
		$this->db->order_by('id','desc');
		$sql = $this->db->get('interest',1);
		$this->response['data'] = $sql->result();
		echo json_encode($this->response);		
	}
	public function editar_interest() {

		$data['title'] = $this->input->post('title');
		$data['id'] = $this->input->post('id');
		$this->db->select('interest.*', FALSE);
		$this->db->where('interest.id', $data['id']);
		$upd = $this->db->update('interest', $data);
		if ($upd == true) {
			$this->db->select('interest.*', FALSE)
					->where('id',$data['id']);
			$sql = $this->db->get('interest',1);
			$this->response['data'] = $sql->result();
			echo json_encode($this->response);
		}	
	}
	public function eliminar_interest() {
		$data['id'] = $this->input->post('id');
		$delete = $this->db->delete('interest', $data);
		if ($delete == true) {
			$this->response['data'] = $data;
			echo json_encode($this->response);
		}	
	}
	public function agregar_industria() {
		$data['title'] = $this->input->post('title');
		$this->db->insert('industries', $data);
		$this->db->order_by('id','desc');
		$sql = $this->db->get('industries',1);
		$this->response['data'] = $sql->result();
		echo json_encode($this->response);		
	}
	public function editar_industria() {
		$data['title'] = $this->input->post('title');
		$data['id'] = $this->input->post('id');
		$this->db->select('industries.*', FALSE);
		$this->db->where('industries.id', $data['id']);
		$upd = $this->db->update('industries', $data);
		if ($upd == true) {
			$this->db->select('industries.*', FALSE)
					->where('id',$data['id']);
			$sql = $this->db->get('industries',1);
			$this->response['data'] = $sql->result();
			echo json_encode($this->response);
		}	
	}
	public function eliminar_industria() {
		$data['id'] = $this->input->post('id');
		$delete = $this->db->delete('industries', $data);
		if ($delete == true) {
			$this->response['data'] = $data;
			echo json_encode($this->response);
		}	
	}
	public function agregar_lenguaje() {
		$data['title'] = $this->input->post('title');
		$this->db->insert('languages', $data);
		$this->db->order_by('id','desc');
		$sql = $this->db->get('languages',1);
		$this->response['data'] = $sql->result();
		echo json_encode($this->response);		
	}
	public function editar_lenguaje() {
		$data['title'] = $this->input->post('title');
		$data['id'] = $this->input->post('id');
		$this->db->select('languages.*', FALSE);
		$this->db->where('languages.id', $data['id']);
		$upd = $this->db->update('languages', $data);
		if ($upd == true) {
			$this->db->select('languages.*', FALSE)
					->where('id',$data['id']);
			$sql = $this->db->get('languages',1);
			$this->response['data'] = $sql->result();
			echo json_encode($this->response);
		}	
	}
	public function eliminar_lenguaje() {
		$data['id'] = $this->input->post('id');
		$delete = $this->db->delete('languages', $data);
		if ($delete == true) {
			$this->response['data'] = $data;
			echo json_encode($this->response);
		}	
	}
	public function agregar_education() {
		$data['title'] = $this->input->post('title');
		$this->db->insert('educational_background', $data);
		$this->db->order_by('id','desc');
		$sql = $this->db->get('educational_background',1);
		$this->response['data'] = $sql->result();
		echo json_encode($this->response);		
	}
	public function editar_education() {
		$data['title'] = $this->input->post('title');
		$data['id'] = $this->input->post('id');
		$this->db->select('educational_background.*', FALSE);
		$this->db->where('educational_background.id', $data['id']);
		$upd = $this->db->update('educational_background', $data);
		if ($upd == true) {
			$this->db->select('educational_background.*', FALSE)
					->where('id',$data['id']);
			$sql = $this->db->get('educational_background',1);
			$this->response['data'] = $sql->result();
			echo json_encode($this->response);
		}	
	}
	public function eliminar_education() {
		$data['id'] = $this->input->post('id');
		$delete = $this->db->delete('educational_background', $data);
		if ($delete == true) {
			$this->response['data'] = $data;
			echo json_encode($this->response);
		}	
	}
	public function editar_pais() {
		$data['id'] = $this->input->post('id');
		$data['accept'] = $this->input->post('accept');
		$this->db->select('countries.*', FALSE);
		$this->db->where('countries.id', $data['id']);
		$upd = $this->db->update('countries', $data);
		if ($upd == true) {
			$this->db->select('countries.*', FALSE)
					->where('id',$data['id']);
			$sql = $this->db->get('countries',1);
			$this->response['data'] = $sql->result();
			echo json_encode($this->response);
		}	
	}
	public function insert_event() {
		$data= $_POST;
		$config['upload_path'] 		= 'uploads/events/backgrounds/';
		$config['allowed_types'] 	= 'jpg|jpeg|png|JPG|JPEG|PNG';
		$config['remove_spaces']	= TRUE;
		$config['max_size']    		= '1024';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('image_background')) { 
			$file_info = $this->upload->data();
			$data['image'] = $file_info['file_name'];
			$this->db->insert('events', $data);
			$this->db->order_by('id','desc');
			$sql = $this->db->get('events',1);
			$this->response['data'] = $sql->result();
			echo json_encode($this->response);
		}		
	}

	public function insert_speaker() {
		// $data['title'] = $this->input->post('title');
			$config['upload_path'] 		= 'uploads/events/speakers/';
			$config['allowed_types'] 	= 'jpg|jpeg|png|JPG|JPEG|PNG';
			$config['remove_spaces']	= TRUE;
			$config['max_size']    		= '1024';

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('photo')) { 
				$file_info = $this->upload->data();
				$archivo = $file_info['file_name'];
				$data = array
					(
						'sid'			=> $this->input->post('sid'),
						'photo'			=> $archivo,
						'name'			=> $this->input->post('name'),
						'profession'	=> $this->input->post('profession'),
						'description'	=> $this->input->post('description')
					);
				$this->db->insert('speakers', $data);
				$this->db->order_by('id','desc');
				$sql = $this->db->get('speakers',1);
				$this->response['data'] = $sql->result();
				echo json_encode($this->response);
			}
				
	}
	public function info_speaker(){
		$id = $this->input->post('id_speaker');
		$this->db->select('speakers.*');
		$this->db->where('id',$id);
		$sql = $this->db->get('speakers',1);
		$this->response['data'] = $sql->result();
		echo json_encode($this->response);
	}
	public function actualizar_speaker(){
		$id_speaker = $this->input->post('id_speaker');
		if ($_FILES['photo']['name'] != "") {

			$config['upload_path'] 		= 'uploads/events/speakers/';
			$config['allowed_types'] 	= 'jpg|jpeg|png|JPG|JPEG|PNG';
			$config['remove_spaces']	= TRUE;
			$config['max_size']    		= '1024';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('photo')) { 
				$file_info = $this->upload->data();
				$archivo = $file_info['file_name'];
				$data = array 
					(
						'photo' => $archivo,
						'name' => $this->input->post('name'),
						'profession' => $this->input->post('profession'),
						'description' => $this->input->post('description'),
						'sid' => $this->input->post('sid'),
					);
			}
		}else {
			$data = array 
				(
					'name' => $this->input->post('name'),
					'profession' => $this->input->post('profession'),
					'description' => $this->input->post('description'),
					'sid' => $this->input->post('sid'),
				);
		}


		$this->db->select('speakers.id', FALSE);
		$this->db->where('speakers.id', $id_speaker);
		$upd = $this->db->update('speakers', $data);
		if ($upd == true) {
			$this->db->select('speakers.*', $data);
			$this->db->where('id',$id_speaker);
			$sql = $this->db->get('speakers',1);
			$this->response['data'] = $sql->result();
			echo json_encode($this->response);
		}else {
			echo 0;
		}
	}
	public function delete_speaker() {
		$data['id'] = $this->input->post('id');
		$image_delete = $this->input->post('image_delete');
		$delete = $this->db->delete('speakers', $data);
		unlink('uploads/events/speakers/'.$image_delete);
		if ($delete == true) {
			$this->response['data'] = $data;
			echo $data['id'];
		}	
	}
	public function update_event() {
		$data = $_POST;
		$this->db->select('events.*', FALSE);
		$this->db->where('events.id', $data['id']);
		$upd = $this->db->update('events', $data);
		if ($upd == true) {
			$this->db->select('events.*', FALSE)
					->where('id',$data['id']);
			$sql = $this->db->get('events',1);
			$this->response['data'] = $sql->result();
			echo json_encode($this->response);
		}	
	}
	public function check_description() {
		$id = $this->input->post('id');
		$this->db->select('events.description');
		$this->db->where('events.id', $id);
		$sql = $this->db->get('events',1);
		$this->response['data'] = $sql->result();
		echo json_encode($this->response);
	}
	public function delete_event() {
		$data['id'] = $this->input->post('id');
		$this->db->select('events.image');
		$this->db->where('events.id', $data['id']);
		$sql = $this->db->get('events',1);
		$imagen = $sql->result();
		foreach ($imagen as $row ) {
			$delete = $row->image;
		}
		unlink('uploads/events/backgrounds/'.$delete);
		$delete = $this->db->delete('events', $data);
		if ($delete == true) {
			$this->response['data'] = $data;
			echo json_encode($this->response);
		}	
	}
	public function images_work() {
			$config['upload_path'] 		= 'uploads/work_employability/image_works/';
			$config['allowed_types'] 	= 'jpg|jpeg|png|JPG|JPEG|PNG';
			$config['remove_spaces']	= TRUE;
			$config['max_size']    		= '1024';

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('images')) { 
				$file_info = $this->upload->data();
				$archivo = $file_info['file_name'];
				$data = array
					(
						'sid'		=> $this->input->post('sid'),
						'name'		=> $archivo,
					);
				$this->db->insert('images_work', $data);
				$sql = $this->db->get('images_work',1);
				$this->response['data'] = $sql->result();
				echo json_encode($this->response);	
			}
	}
	public function agregar_trabajo() {
		$data = $_POST;
		$data['skills'] = json_encode($this->input->post('skills'));
		$this->db->insert('works', $data);
		$this->db->order_by('id','desc');
		$sql = $this->db->get('works',1);
		$this->response['data'] = $sql->result();
		echo json_encode($this->response);
	}
	public function busqueda() {
		$data = array_keys($_POST);
		$location = $this->input->post('location');
		$industry = $this->input->post('industry');
		$languages = $this->input->post('languages');
		$education = $this->input->post('education');
		$professional = $this->input->post('professional');
		$entrepreneur = $this->input->post('entrepreneur');
		$company = $this->input->post('company');
		// print_r($data);
		$interest = "";
		$skills = "";
		$lang = "";
		for ($i=0; $i < count($data) ; $i++) { 
			$string = $data[$i];
			$find = 's_';
			$pos = strpos($string, $find);
			if ($pos === false) {
				$interest .= '"'.$data[$i].'"'."|";
			}else {
				$skills .= '"'.substr($data[$i], 2).'"'."|";
			}
		}
		$interest = substr($interest, 0, -1);
		if ($interest == "") {
			$interest = "'0'";
		}
		$skills = substr($skills, 0, -1);
		if ($skills == "") {
			$skills = "'0'";
		}

		if ($location != "" || $industry != "" || $languages != "" || $education != "") {
			if ($interest == "'0'") {
				$interest = "''";
			}
			if ($skills == "'0'") {
				$skills = "''";
			}
			if ($lang == "'0'") {
				$lang = "''";
			}
		}
		for ($i=0; $i < count($languages) ; $i++) { 
			$lang .= '"'.$languages[$i].'"'."|";
		}
		$lang = substr($lang, 0, -1);
		if ($lang == "") {
			$lang = "'0'";
		}
		$this->db->select('usuario.*,countries.country AS "nombre_pais",industries.title AS "nombre_industria", educational_background.title AS "nombre_educacion"')
				->join('countries', 'countries.id = usuario.country')
				->join('industries', 'industries.id = usuario.industry')
				->join('educational_background', 'educational_background.id = usuario.educational')
				->where('id_rol != 1 AND (interests REGEXP '.$interest.' OR skills REGEXP '.$skills.')');
				// ->or_where('interests REGEXP',$interest)
				// ->or_where('skills REGEXP',$skills)
		if ($location) {
			$this->db->where_in('usuario.country',$location);
		}
		if ($industry) {
			$this->db->where_in('usuario.industry',$industry);
		}
		if ($languages) {
			$this->db->where('languages REGEXP '.$lang.'');
		}
		if ($education) {
			$this->db->where_in('usuario.educational',$education);
		}
		if ($professional == 1) {
			$this->db->or_where('usuario.level like "single"');
		}
		if ($entrepreneur == 1) {
			$this->db->or_where('usuario.level like "entrepreneur"');
		}
		if ($company == 1) {
			$this->db->or_where('usuario.level like "company"');
		}
		$this->db->order_by('id_usuario','ASC');
		$consulta = $this->db->get('usuario');

		if($consulta->num_rows()>0)
		{
			$i = 0;
			foreach($consulta->result() as $fila)
				{
					$datos[] = $fila;
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
			echo json_encode($datos);
		}else{
			echo "0";
		}

		
	}
	public function nombre_pais(){
		$id = $this->input->post('id');
		$this->db->select('countries.*');
		$this->db->where('id', $id);
		$sql = $this->db->get('countries',1);
		$this->response['data'] = $sql->result();
		echo json_encode($this->response);
	}
	/* Comentario */
}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */