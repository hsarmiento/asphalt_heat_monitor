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
        $query = $this->db->query('SELECT pcb.id as pcb_id, sensors.id as sensor_id, sensors.identifier 
                as sensor_identifier, temperature.value as t_value, temperature.created_at as created_at 
                FROM (pcb) LEFT JOIN sensors ON pcb.id = sensors.pcb_id 
                JOIN temperature ON sensors.id = temperature.sensor_id WHERE pcb.id = '.$pcb_id.' 
                and temperature.created_at >= NOW() - INTERVAL 2 DAY 
                ORDER BY sensors.id asc, temperature.created_at asc'
            );
        return $query->result_array();
        
    }

    public function get_pcb_id_with_identifier($identifier)
    {
        $this->db->select('id')
        ->from('pcb')
        ->where('identifier', $identifier);
        $aQuery = $this->db->get()->row_array();
        return $aQuery['id'];
    }

}