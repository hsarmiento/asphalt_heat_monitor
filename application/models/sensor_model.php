<?php

class Sensor_model extends CI_Model {

	var $strIdentifier = '';
    var $iPcbId = 0;

    public function __construct()
    {
        parent::__construct();
    }

    public function initialize($identifier,$pcb_id)
    {
        $this->strIdentifier = $identifier;
        $this->iPcbId = $pcb_id;
    }

    public function get_all(){
        $query = $this->db->get('sensors');
        return $query->result_array();
    }

}