<?php

class Position_model extends CI_Model
{
	var $iPcbId = 0;
	var $fLatitude = 0.0;
	var $fLongitude = 0.0;

	public function __construct()
    {
        parent::__construct();
    }

    public function exist_pcbid($iPcbId)
    {
    	$query = $this->db->get_where('position',array('pcb_id' => $iPcbId));
    	if ($query->num_rows() > 0)    		
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    public function get_last_position($iPcbId)
    {
    	$this->db->order_by('id','desc');
    	$this->db->limit(1);
    	$query = $this->db->get_where('position',array('pcb_id' => $iPcbId));    	
    	return $query->row_array();
    }

}