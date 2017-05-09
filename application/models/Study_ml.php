<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Study_ml extends CI_Model {
	
	function __construct() 
    {
		parent::__construct();
	}

    function agregar_panel_centro($data = array())
    {
        $this->db->insert('study_panel_centro', $data);
        return $this->db->insert_id();
    }

    function filas_panel_centro()
    {
        $consulta = $this->db->get('study_panel_centro');
        return  $consulta->num_rows() ;
    }


    function total_paginados_panel_centro($por_pagina,$segmento) 
    {
        $consulta = $this->db->get('study_panel_centro',$por_pagina,$segmento);
        if($consulta->num_rows()>0)
        {
            foreach($consulta->result() as $fila)
        {
            $data[] = $fila;
        }
                    return $data;
            }
    }

    function listado_study() 
    {
        $this->db->select('study_panel_centro.*', FALSE);

        $this->db->order_by('study_panel_centro.id_study_panel_centro', 'ASC');
        
        $consulta = $this->db->get('study_panel_centro');

        if($consulta->num_rows()>0)
        {
            foreach($consulta->result() as $fila)
            {
                $data[] = $fila;
            }
                return $data;
        }
    }

    function get_panel_centro($id_study_panel_centro) 
    {
        $this->db->select('study_panel_centro.*', FALSE);

        $this->db->where('study_panel_centro.id_study_panel_centro', $id_study_panel_centro);
        
        $consulta = $this->db->get('study_panel_centro');

        if ($consulta->num_rows() > 0)
        {
            return $consulta->row();
        }else{
            return null;
        }
    }

    function editar_panel_centro($data = array())
    {
        $this->db->where('id_study_panel_centro',$data['id_study_panel_centro']);
        return $this->db->update('study_panel_centro', $data);
    }

    function eliminar_panel_centro($id_study_panel_centro)
    {
        $this->db->where('id_study_panel_centro',$id_study_panel_centro);
        return $this->db->delete('study_panel_centro');
    }

    function listado_panel_centro_sponsors() 
    {
        $this->db->select('study_panel_derecha_sponsors.*', FALSE);
        
        $consulta = $this->db->get('study_panel_derecha_sponsors');

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
        $this->db->where('id_study_panel_derecha_sponsors',$data['id_study_panel_derecha_sponsors']);
        return $this->db->update('study_panel_derecha_sponsors', $data);
    }
}
?>