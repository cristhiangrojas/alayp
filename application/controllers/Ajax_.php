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
		$data['user'] = $this->main_model->get_user($id_user);
		$data['country'] = $this->main_model->get_countries();
		$data['skills'] = $this->main_model->get_skills();
		$data['interests'] = $this->main_model->get_interests();
		$data['languages'] = $this->newsfeed_ml->listado_lenguajes();
		$data['education'] = $this->newsfeed_ml->listado_education();
		$data['industries'] = $this->newsfeed_ml->listado_industrias();
		$this->load->view('template/edit_profile',$data);
	}
	public function edit_user(){
		parse_str($_POST['form'], $data);
		$id_user = $_SESSION['id_usuario'];
		$this->main_model->edit_user($data,$id_user);
	}
	public function change_photo(){
		$this->db->select('usuario.foto_perfil');
		$this->db->where('id_usuario',$this->input->post('user_id'));
		$consulta = $this->db->get('usuario');
		$consulta = $consulta->result()[0];
		unlink('uploads/fotos_perfil/'.$consulta->foto_perfil);
		$config['upload_path'] 		= 'uploads/fotos_perfil/';
		$config['allowed_types'] 	= 'jpg|jpeg|png|JPG|JPEG|PNG';
		$config['remove_spaces']	= TRUE;
		$config['max_size']    		= '1024';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('profile_photo')) {
			$file_info = $this->upload->data();
			$data['foto_perfil'] = $file_info['file_name'];
			$this->db->select('usuario.*', FALSE);
			$this->db->where('usuario.id_usuario', $this->input->post('user_id'));
			$upd = $this->db->update('usuario', $data);
			if ($upd == true) {
				$this->db->select('usuario.*', FALSE)
						->where('usuario.id_usuario', $this->input->post('user_id'));
				$sql = $this->db->get('usuario',1);
				$this->response['data'] = $sql->result();
				echo json_encode($this->response);
			}	
		}
	}
	public function change_photo_cover(){
		$this->db->select('usuario.foto_portada');
		$this->db->where('id_usuario',$this->input->post('user_id'));
		$consulta = $this->db->get('usuario');
		$consulta = $consulta->result()[0];
		unlink('uploads/fotos_perfil/'.$consulta->foto_portada);
		$config['upload_path'] 		= 'uploads/fotos_perfil/';
		$config['allowed_types'] 	= 'jpg|jpeg|png|JPG|JPEG|PNG';
		$config['remove_spaces']	= TRUE;
		$config['max_size']    		= '1024';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('cover_photo')) {
			$file_info = $this->upload->data();
			$data['foto_portada'] = $file_info['file_name'];
			$this->db->select('usuario.*', FALSE);
			$this->db->where('usuario.id_usuario', $this->input->post('user_id'));
			$upd = $this->db->update('usuario', $data);
			if ($upd == true) {
				$this->db->select('usuario.*', FALSE)
						->where('usuario.id_usuario', $this->input->post('user_id'));
				$sql = $this->db->get('usuario',1);
				$this->response['data'] = $sql->result();
				echo json_encode($this->response);
			}	
		}
	}

	/* Comentario */
}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */