<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test_model extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }

    function guardar_registro($data){
    	$this->db->insert('registro', $data);
    	return TRUE;
    }

    function buscar_registro($correo, $password){
    	$this->db->where('correo', $correo);
    	$this->db->where('password', $password);
    	$query = $this->db->get('registro');
    	if ($query->num_rows > 0) {
    		return $query;
    	}else{
    		return FALSE;		
    	}
    }
}