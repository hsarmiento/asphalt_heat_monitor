<?php

class Trailer_model extends CI_Model {

	var $strIdentifier = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function initialize($identifier)
    {
        $this->strIdentifier = $identifier;
    }

    public function get_trailer_data($trailer_id)
    {
    	$this->db->select('*')
        ->from('trailers')
        ->where('id',$trailer_id);
        return $this->db->get()->row_array();
    }
}