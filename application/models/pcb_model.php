<?php

class Pcb_model extends CI_Model {

	var $strIdentifier = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function initialize($identifier)
    {
        $this->strIdentifier = $identifier;
    }

    public function get_all()
    {
        $query = $this->db->get('pcb');
        return $query->result_array();
    }

    public function get_trending_temperature($pcb_id)
    {
        $this->db->select('pcb.id as pcb_id, sensors.id as sensor_id, sensors.identifier as sensor_identifier, temperature.value as t_value, temperature.created_at as created_at');
        $this->db->from('pcb');
        $this->db->join('sensors','pcb.id = sensors.pcb_id','left');
        $this->db->join('temperature', 'sensors.id = temperature.sensor_id');
        $this->db->where('pcb.id',$pcb_id);
        $this->db->where('date_sub(now(),interval 1 day) <', 'temperature.created_at');
        $this->db->order_by('sensors.id','asc');
        $this->db->order_by('temperature.created_at', 'asc');
        $query = $this->db->get();
        return $query->result_array();
        // echo $this->db->last_query();
    }

}