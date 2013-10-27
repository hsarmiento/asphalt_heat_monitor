<?php

class Asphalt_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }

    public function get_asphalt_data($trailer_identifier)
    {
    	$this->db->select('*')
        ->from('asphalt')
        ->where('trailer_identifier',$trailer_identifier);
        return $this->db->get()->result_array();
    }

    

}