<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_ml extends CI_Model {
	
	function __construct() 
    {
		parent::__construct();
	}

    function login_user($usuario,$password)
    {
        $this->db->where('usuario',$usuario);
        $this->db->where('password',$password);
        $query = $this->db->get('usuario');
        
        if($query->num_rows() == 1)
        {
            return $query->row();
        }else{
            $this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
            redirect(base_url().'login','refresh');
        }
    }
}
?>