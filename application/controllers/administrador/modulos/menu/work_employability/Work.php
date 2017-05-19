<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends CI_Controller 
{
	function __construct()
	{
		parent::__construct(); 

		/*VIEW PANEL DERECHO*/
		$this->header 			= 'dashboard/header';
		$this->content_derecha 	= 'dashboard/modulos/menu/work_employability/panel_derecho';
		$this->footer 			= 'dashboard/footer';
	}

	function panel_derecho()
	{
		if($this->session->userdata('is_logued_in') == true)
		{
			$header 			= $this->header;
			$content_derecha 	= $this->content_derecha;
			$footer 			= $this->footer;

			$data['listado_panel_centro_sponsors'] = $this->work_employability_ml->listado_panel_centro_sponsors();

			$this->load->view($header);
			$this->load->view($content_derecha,$data);
			$this->load->view($footer);

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}

	function procesar_sponsors()
	{
		if($this->session->userdata('is_logued_in') == true)
		{
			$config['upload_path'] 		= 'uploads/work_employability/sponsors/';
        	$config['allowed_types'] 	= 'jpg|jpeg|png|JPG|JPEG|PNG';
        	$config['remove_spaces']	= TRUE;
        	$config['max_size']    		= '1024';

        	$this->load->library('upload', $config);

        	if (!$this->upload->do_upload()) 
		    {
		    	$this->session->set_flashdata('error_imagen','No se ha subido imagen');
				redirect('administrador/modulos/menu/work_employability/work/panel_derecho', 'refresh');

		    }else{

				$file_info = $this->upload->data();

           		$archivo = $file_info['file_name'];

           		$data['imagen'] = $archivo;
					
				$data = array
				(
					'id_work_employability_sponsors'	=> '1',
					'imagen'									=> $archivo
				);

				$edit_panel_derecha_sponsors = $this->work_employability_ml->edit_panel_derecha_sponsors($data);

				if ($edit_panel_derecha_sponsors == true) 
				{
					$this->session->set_flashdata('edit_panel_derecha_sponsors','Se modifico con exito!');
					redirect('administrador/modulos/menu/work_employability/work/panel_derecho', 'refresh');
				}
		    }

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}
	function new_work(){
		if($this->session->userdata('is_logued_in') == true)
		{
			$header 				= $this->header;
			$content_derecha 		= 'dashboard/modulos/menu/work_employability/new_work';
			$data['list_skills'] 	= $this->newsfeed_ml->listado_skills();
			$data['list_jobs']		= $this->work_employability_ml->list_jobs();
			$data['last_sid']		= $this->work_employability_ml->last_sid();
			$footer 				= $this->footer;

			$this->load->view($header);
			$this->load->view($content_derecha,$data);
			$this->load->view($footer);

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}
}
?>