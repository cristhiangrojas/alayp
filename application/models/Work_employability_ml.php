<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Work_employability_ml extends CI_Model {
	
	function __construct() 
	{
		parent::__construct();
	}
	function listado_panel_centro_sponsors() 
	{
		$this->db->select('work_employability_sponsors.*', FALSE);
		
		$consulta = $this->db->get('work_employability_sponsors');

		if($consulta->num_rows()>0)
		{
			foreach($consulta->result() as $fila)
			{
				$data[] = $fila;
			}
				return $data;
		}
	}
    function edit_panel_derecha_sponsors($data = array())
    {
        $this->db->where('id_work_employability_sponsors',$data['id_work_employability_sponsors']);
        return $this->db->update('work_employability_sponsors', $data);
    }
	function last_sid()
	{
		$this->db->select('works.images')
				->order_by('works.images','DESC')
				->limit(1);
		$consulta = $this->db->get('works');
		if ($consulta->num_rows() > 0) {
			foreach ($consulta->result() as $row) {
				$data[] = $row;
			}
		}else {
			$data = 0;
		}
		return $data;
	}
	function list_jobs() {
		$this->db->select('works.*')
				->order_by('works.id','ASC');
		$consulta = $this->db->get('works');
		if ($consulta->num_rows() > 0) {
			foreach ($consulta->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function paises_validos() {
		$this->db->select('countries.*')
				->where('accept',1)
				->order_by('countries.id','ASC');
		$consulta = $this->db->get('countries');
		if ($consulta->num_rows() > 0) {
			foreach ($consulta->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
}
?>