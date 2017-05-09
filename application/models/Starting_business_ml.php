<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Starting_business_ml extends CI_Model {
	
	function __construct() 
    {
		parent::__construct();
	}

    function agregar_panel_centro($data = array())
    {
        $this->db->insert('starting_business_panel_centro', $data);
        return $this->db->insert_id();
    }

    function filas_panel_centro()
    {
        $consulta = $this->db->get('starting_business_panel_centro');
        return  $consulta->num_rows() ;
    }


    function total_paginados_panel_centro($por_pagina,$segmento) 
    {
        $consulta = $this->db->get('starting_business_panel_centro',$por_pagina,$segmento);
        if($consulta->num_rows()>0)
        {
            foreach($consulta->result() as $fila)
        {
            $data[] = $fila;
        }
                    return $data;
            }
    }

    function listado_starting_business() 
    {
        $this->db->select('starting_business_panel_centro.*', FALSE);

        $this->db->order_by('starting_business_panel_centro.id_starting_business_panel_centro', 'ASC');
        
        $consulta = $this->db->get('starting_business_panel_centro');

        if($consulta->num_rows()>0)
        {
            foreach($consulta->result() as $fila)
            {
                $data[] = $fila;
            }
                return $data;
        }
    }

    function get_panel_centro($id_starting_business_panel_centro) 
    {
        $this->db->select('starting_business_panel_centro.*', FALSE);

        $this->db->where('starting_business_panel_centro.id_starting_business_panel_centro', $id_starting_business_panel_centro);
        
        $consulta = $this->db->get('starting_business_panel_centro');

        if ($consulta->num_rows() > 0)
        {
            return $consulta->row();
        }else{
            return null;
        }
    }

    function editar_panel_centro($data = array())
    {
        $this->db->where('id_starting_business_panel_centro',$data['id_starting_business_panel_centro']);
        return $this->db->update('starting_business_panel_centro', $data);
    }

    function eliminar_panel_centro($id_starting_business_panel_centro)
    {
        $this->db->where('id_starting_business_panel_centro',$id_starting_business_panel_centro);
        return $this->db->delete('starting_business_panel_centro');
    }

    function listado_panel_centro_sponsors() 
    {
        $this->db->select('starting_business_panel_derecha_sponsors.*', FALSE);
        
        $consulta = $this->db->get('starting_business_panel_derecha_sponsors');

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
        $this->db->where('id_starting_business_panel_derecha_sponsors',$data['id_starting_business_panel_derecha_sponsors']);
        return $this->db->update('starting_business_panel_derecha_sponsors', $data);
    }

}
?>