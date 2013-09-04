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

    public function get_sensors_with_pcb($pcb_id)
    {
        $this->db->select('id');
        $this->db->from('sensors');
        $this->db->where('pcb_id',$pcb_id);
        $this->db->order_by('id','asc');
        $query = $this->db->get();
        return $query->result_array();
    }

}