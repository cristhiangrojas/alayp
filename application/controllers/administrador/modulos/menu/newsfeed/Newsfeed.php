<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsfeed extends CI_Controller 
{
	function __construct()
	{
		parent::__construct(); 

		date_default_timezone_set('America/Caracas');

		/*VIEW PANEL CENTRO*/
		$this->header 			= 'dashboard/header';
		$this->content_centro 	= 'dashboard/modulos/menu/newsfeed/panel_centro/panel_centro';
		$this->footer 			= 'dashboard/footer';

		$this->content_agregar_panel_centro 	= 'dashboard/modulos/menu/newsfeed/panel_centro/agregar_panel_centro';
		$this->content_visualizar_panel_centro 	= 'dashboard/modulos/menu/newsfeed/panel_centro/visualizar_panel_centro';
		$this->content_editar_panel_centro 		= 'dashboard/modulos/menu/newsfeed/panel_centro/editar_panel_centro';
		/*FIN VIEW PANEL CENTRO*/

		/*VIEW PANEL DERECHO*/
		$this->header 			= 'dashboard/header';
		$this->content_derecha 	= 'dashboard/modulos/menu/newsfeed/panel_derecha/panel_derecha';
		$this->footer 			= 'dashboard/footer';
	}

	/**********************************PANEL CENTRO***********************************************************************************/
	function panel_centro()
	{
		if($this->session->userdata('is_logued_in') == true)
		{
			$header 		= $this->header;
			$content_centro = $this->content_centro;
			$footer 		= $this->footer;

			$data['listado_panel_centro'] = $this->newsfeed_ml->listado_panel_centro();

			$this->load->view($header);
			$this->load->view($content_centro,$data);
			$this->load->view($footer);

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}

	function agregar_panel_centro()
	{
		if($this->session->userdata('is_logued_in') == true)
		{
			$header 						= $this->header;
			$content_agregar_panel_centro 	= $this->content_agregar_panel_centro;
			$footer 						= $this->footer;

			$this->load->view($header);
			$this->load->view($content_agregar_panel_centro);
			$this->load->view($footer);

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}

	function procesar_agregar_panel_centro()
	{
		if($this->session->userdata('is_logued_in') == true)
		{
		    if ($_FILES['userfile']['name'] == true)
		    {
		    	$config['upload_path'] 		= 'uploads/newsfeed/panel_centro/';
	        	$config['allowed_types'] 	= 'jpg|jpeg|png|JPG|JPEG|PNG';
	        	$config['remove_spaces']	= TRUE;
	        	$config['max_size']    		= '1024';

	        	$this->load->library('upload', $config);

	        	if (!$this->upload->do_upload()) 
			    {
			    	$this->session->set_flashdata('error_imagen','No se ha subido imagen');
					redirect('administrador/modulos/menu/newsfeed/newsfeed/panel_centro', 'refresh');

			    }else{

			    	$titulo 			= $this->input->post('titulo');
		           	$descripcion 		= $this->input->post('descripcion');
					$f_registro 		= date('m-d-Y H:i:s');

					$file_info = $this->upload->data();

	           		$archivo = $file_info['file_name'];

	           		$data['imagen'] = $archivo;
						
					$data = array
					(
						'fecha_hora'		=> $f_registro,
						'titulo'			=> $titulo,
						'descripcion'		=> $descripcion,
						'imagen'			=> $archivo
					);

					$agregar_panel_centro = $this->newsfeed_ml->agregar_panel_centro($data);

					if ($agregar_panel_centro == true) 
					{
						$this->session->set_flashdata('agregar_panel_centro','Se registro con exito!');
						redirect('administrador/modulos/menu/newsfeed/newsfeed/panel_centro', 'refresh');
					}
			    }
			    
		    }else{

		    	$titulo 		= $this->input->post('titulo');
		    	$link 			= $this->input->post('link');
	           	$descripcion 	= $this->input->post('descripcion');
				$f_registro 	= date('m-d-Y H:i:s');
					
				$data = array
				(
					'fecha_hora'		=> $f_registro,
					'titulo'			=> $titulo,
					'link'				=> $link,
					'descripcion'		=> $descripcion
				);

				$agregar_panel_centro = $this->newsfeed_ml->agregar_panel_centro($data);

				if ($agregar_panel_centro == true) 
				{
					$this->session->set_flashdata('agregar_panel_centro','Se registro con exito!');
					redirect('administrador/modulos/menu/newsfeed/newsfeed/panel_centro', 'refresh');
				}
		    }

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}

	function visualizar_newsfeed()
	{
		if($this->session->userdata('is_logued_in') == true)
		{
			$header 			= $this->header;
			$content_visualizar_panel_centro = $this->content_visualizar_panel_centro;
			$footer 			= $this->footer;

			$id_newsfeed_panel_centro 		= $this->input->get('id_newsfeed_panel_centro');

			$row = $this->newsfeed_ml->get_panel_centro($id_newsfeed_panel_centro);

			$data['row'] = $row;

			$this->load->view($header);
			$this->load->view($content_visualizar_panel_centro,$data);
			$this->load->view($footer);

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}

	function editar_newsfeed()
	{
		if($this->session->userdata('is_logued_in') == true)
		{
			$header 			= $this->header;
			$content_editar_panel_centro 	= $this->content_editar_panel_centro;
			$footer 			= $this->footer;

			$id_newsfeed_panel_centro 		= $this->input->get('id_newsfeed_panel_centro');

			$row = $this->newsfeed_ml->get_panel_centro($id_newsfeed_panel_centro);

			$data['row'] = $row;

			$this->load->view($header);
			$this->load->view($content_editar_panel_centro,$data);
			$this->load->view($footer);

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}

	function procesar_edit_panel_centro()
	{
		if($this->session->userdata('is_logued_in') == true)
		{
			$id_newsfeed_panel_centro 	= $this->input->post('id_newsfeed_panel_centro');
		    $titulo 					= $this->input->post('titulo');
		    $link 						= $this->input->post('link');
	        $descripcion 				= $this->input->post('descripcion');
			$f_registro 				= date('m-d-Y H:i:s');

		    if (empty($_FILES['userfile']['name']))
			{
				$data = array
				(
					'id_newsfeed_panel_centro'	=> $id_newsfeed_panel_centro,
					'fecha_hora'				=> $f_registro,
					'titulo'					=> $titulo,
					'link'						=> $link,
					'descripcion'				=> $descripcion
				);

				$editar_panel_centro = $this->newsfeed_ml->editar_panel_centro($data);

				if ($editar_panel_centro == true) 
				{
					$this->session->set_flashdata('editar_panel_centro','Se registro con exito!');
					redirect('administrador/modulos/menu/newsfeed/newsfeed/panel_centro', 'refresh');
				}
			    
		    }else{
				
				$config['upload_path'] 		= 'uploads/newsfeed/panel_centro/';
	        	$config['allowed_types'] 	= 'jpg|jpeg|png|JPG|JPEG|PNG';
	        	$config['remove_spaces']	= TRUE;
	        	$config['max_size']    		= '1024';

	        	$this->load->library('upload', $config);

	        	if (!$this->upload->do_upload()) 
			    {
			    	$this->session->set_flashdata('error_imagen','No se ha subido imagen');
					redirect('administrador/modulos/menu/newsfeed/newsfeed/panel_centro', 'refresh');

			    }else{

			    	$id_newsfeed_panel_centro 	= $this->input->post('id_newsfeed_panel_centro');
			    	$titulo 					= $this->input->post('titulo');
		           	$descripcion 				= $this->input->post('descripcion');
					$f_registro 				= date('m-d-Y H:i:s');

					$file_info = $this->upload->data();

	           		$archivo = $file_info['file_name'];

	           		$data['imagen'] = $archivo;
						
					$data = array
					(
						'id_newsfeed_panel_centro'	=> $id_newsfeed_panel_centro,
						'fecha_hora'				=> $f_registro,
						'titulo'					=> $titulo,
						'descripcion'				=> $descripcion,
						'imagen'					=> $archivo
					);

					$editar_panel_centro = $this->newsfeed_ml->editar_panel_centro($data);

					if ($editar_panel_centro == true) 
					{
						$this->session->set_flashdata('editar_panel_centro','Se registro con exito!');
						redirect('administrador/modulos/menu/newsfeed/newsfeed/panel_centro', 'refresh');
					}
				}
				    	
		    }

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}

	function eliminar_panel_centro()
	{
		if($this->session->userdata('is_logued_in') == true)
		{
			$id_newsfeed_panel_centro = $this->input->post('id_newsfeed_panel_centro');

			$eliminar_panel_centro = $this->newsfeed_ml->eliminar_panel_centro($id_newsfeed_panel_centro);

		    $this->session->set_flashdata('eliminar_panel_centro','Eliminado con exito!');
			redirect('administrador/modulos/menu/newsfeed/newsfeed/panel_centro', 'refresh');

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}
	/**********************************FIN PANEL CENTRO***********************************************************************************/

	/**********************************PANEL DERECHA***********************************************************************************/
	function panel_derecha()
	{
		if($this->session->userdata('is_logued_in') == true)
		{
			$header 	= $this->header;
			$content_derecha 	= $this->content_derecha;
			$footer 	= $this->footer;

			$data['listado_panel_centro_sponsors'] = $this->newsfeed_ml->listado_panel_centro_sponsors();
			$data['listado_panel_centro_connect'] = $this->newsfeed_ml->listado_panel_centro_connect();

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
			$config['upload_path'] 		= 'uploads/newsfeed/panel_derecha/sponsors/';
        	$config['allowed_types'] 	= 'jpg|jpeg|png|JPG|JPEG|PNG';
        	$config['remove_spaces']	= TRUE;
        	$config['max_size']    		= '1024';

        	$this->load->library('upload', $config);

        	if (!$this->upload->do_upload()) 
		    {
		    	$this->session->set_flashdata('error_imagen','No se ha subido imagen');
				redirect('administrador/modulos/menu/newsfeed/newsfeed/panel_derecha', 'refresh');

		    }else{

				$file_info = $this->upload->data();

           		$archivo = $file_info['file_name'];

           		$data['imagen'] = $archivo;
					
				$data = array
				(
					'id_newsfeed_panel_derecha_sponsors'	=> '1',
					'imagen'								=> $archivo
				);

				$edit_panel_derecha_sponsors = $this->newsfeed_ml->edit_panel_derecha_sponsors($data);

				if ($edit_panel_derecha_sponsors == true) 
				{
					$this->session->set_flashdata('edit_panel_derecha_sponsors','Se modifico con exito!');
					redirect('administrador/modulos/menu/newsfeed/newsfeed/panel_derecha', 'refresh');
				}
		    }

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}

	function procesar_connect()
	{
		if($this->session->userdata('is_logued_in') == true)
		{
			$config['upload_path'] 		= 'uploads/newsfeed/panel_derecha/connect/';
        	$config['allowed_types'] 	= 'jpg|jpeg|png|JPG|JPEG|PNG';
        	$config['remove_spaces']	= TRUE;
        	$config['max_size']    		= '1024';

        	$this->load->library('upload', $config);

        	if (!$this->upload->do_upload()) 
		    {
		    	$this->session->set_flashdata('error_imagen1','No se ha subido imagen');
				redirect('administrador/modulos/menu/newsfeed/newsfeed/panel_derecha', 'refresh');

		    }else{

				$file_info = $this->upload->data();

           		$archivo = $file_info['file_name'];

           		$data['imagen'] = $archivo;
					
				$data = array
				(
					'id_newsfeed_panel_derecha_connect'	=> '1',
					'imagen'								=> $archivo
				);

				$edit_panel_derecha_connect = $this->newsfeed_ml->edit_panel_derecha_connect($data);

				if ($edit_panel_derecha_connect == true) 
				{
					$this->session->set_flashdata('edit_panel_derecha_connect','Se modifico con exito!');
					redirect('administrador/modulos/menu/newsfeed/newsfeed/panel_derecha', 'refresh');
				}
		    }

		}else{

			$this->session->set_flashdata('login_usuario','Usted no se encuentra logeado');
			redirect('login', 'refresh');
		}
	}
	/**********************************FIN PANEL DERECHA***********************************************************************************/
}
