<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newsfeed_ml extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	function agregar_panel_centro($data = array()){
		$this->db->insert('newsfeed_panel_centro', $data);
		return $this->db->insert_id();
	}

	function filas_panel_centro(){
		$consulta = $this->db->get('newsfeed_panel_centro');
		return  $consulta->num_rows() ;
	}


	function total_paginados_panel_centro($por_pagina,$segmento) {
		$consulta = $this->db->get('newsfeed_panel_centro',$por_pagina,$segmento);
		if($consulta->num_rows()>0)
		{
			foreach($consulta->result() as $fila)
		{
			$data[] = $fila;
		}
					return $data;
			}
	}

	function listado_panel_centro() {
		$this->db->select('newsfeed_panel_centro.*', FALSE);

		$this->db->order_by('newsfeed_panel_centro.id_newsfeed_panel_centro', 'DESC');
		
		$consulta = $this->db->get('newsfeed_panel_centro');

		if($consulta->num_rows()>0)
		{
			foreach($consulta->result() as $fila)
			{
				$data[] = $fila;
			}
				return $data;
		}
	}

	function get_panel_centro($id_newsfeed_panel_centro) {
		$this->db->select('newsfeed_panel_centro.*', FALSE);

		$this->db->where('newsfeed_panel_centro.id_newsfeed_panel_centro', $id_newsfeed_panel_centro);
		
		$consulta = $this->db->get('newsfeed_panel_centro');

		if ($consulta->num_rows() > 0)
		{
			return $consulta->row();
		}else{
			return null;
		}
	}

	function editar_panel_centro($data = array()){
		$this->db->where('id_newsfeed_panel_centro',$data['id_newsfeed_panel_centro']);
		return $this->db->update('newsfeed_panel_centro', $data);
	}

	function eliminar_panel_centro($id_newsfeed_panel_centro){
		$this->db->where('id_newsfeed_panel_centro',$id_newsfeed_panel_centro);
		return $this->db->delete('newsfeed_panel_centro');
	}

	function listado_panel_centro_sponsors() {
		$this->db->select('newsfeed_panel_derecha_sponsors.*', FALSE);
		
		$consulta = $this->db->get('newsfeed_panel_derecha_sponsors');

		if($consulta->num_rows()>0)
		{
			foreach($consulta->result() as $fila)
			{
				$data[] = $fila;
			}
				return $data;
		}
	}

	function edit_panel_derecha_sponsors($data = array()){
		$this->db->where('id_newsfeed_panel_derecha_sponsors',$data['id_newsfeed_panel_derecha_sponsors']);
		return $this->db->update('newsfeed_panel_derecha_sponsors', $data);
	}

	function listado_panel_centro_connect() {
		$this->db->select('newsfeed_panel_derecha_connect.*', FALSE);
		
		$consulta = $this->db->get('newsfeed_panel_derecha_connect');

		if($consulta->num_rows()>0)
		{
			foreach($consulta->result() as $fila)
			{
				$data[] = $fila;
			}
				return $data;
		}
	}

	function edit_panel_derecha_connect($data = array()){
		$this->db->where('id_newsfeed_panel_derecha_connect',$data['id_newsfeed_panel_derecha_connect']);
		return $this->db->update('newsfeed_panel_derecha_connect', $data);
	}

	function listado_skills() {
		$this->db->select('skills.*', FALSE);

		$this->db->order_by('skills.id', 'ASC');
		
		$consulta = $this->db->get('skills');

		if($consulta->num_rows()>0)
		{
			foreach($consulta->result() as $fila)
			{
				$data[] = $fila;
			}
				return $data;
		}
	}
	function listado_intereses() {
		$this->db->select('interest.*', FALSE);

		$this->db->order_by('interest.id', 'ASC');
		
		$consulta = $this->db->get('interest');

		if($consulta->num_rows()>0)
		{
			foreach($consulta->result() as $fila)
			{
				$data[] = $fila;
			}
				return $data;
		}
	}
	function listado_paises() {
		$this->db->select('countries.*', FALSE);

		$this->db->order_by('countries.id', 'ASC');
		
		$consulta = $this->db->get('countries');

		if($consulta->num_rows()>0)
		{
			foreach($consulta->result() as $fila)
			{
				$data[] = $fila;
			}
				return $data;
		}
	}
	function events_upcoming() {
		$date = date('Y-m-d');
		$this->db->select('events.*', FALSE)
				->where('date >=',$date)
				->order_by('events.id', 'ASC');
		
		$consulta = $this->db->get('events');

		if($consulta->num_rows()>0)
		{
			foreach($consulta->result() as $fila)
			{
				$data[] = $fila;
			}
				return $data;
		}
	}
	function last_id_speakers() {
		$this->db->select('speakers.sid', FALSE)
				->order_by('speakers.sid', 'ASC')
				->limit(1);
		$consulta = $this->db->get('speakers');
		return $consulta->num_rows();
	}
	function fecha_principal() {
		$date = date('Y-m-d');
		$this->db->select('events.date', FALSE)
				->where('date >=',$date)
				->order_by('events.id', 'ASC')
				->limit(1);
		$consulta = $this->db->get('events');
		if($consulta->num_rows()>0)
		{
			foreach($consulta->result() as $fila)
			{
				$data[] = $fila;
			}
				return $data;
		}
	}
}
?>