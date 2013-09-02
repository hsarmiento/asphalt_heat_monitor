<?php

class Temperature_model extends CI_Model {

	var $iSensorId = 0;
	var $iValue = 0;

    public function __construct()
    {
        parent::__construct();
    }

    public function initialize($sensor_id, $value)
    {
        $this->iSensorId = $sensor_id;
        $this->iValue = $value;

    }

    public function save_temperature_value()
    {
        $data = array('sensor_id' => $this->iSensorId ,'value'=>$this->iValue);
        $this->db->insert('temperature', $data);
        if($this->db->affected_rows() == '1')
        {
            return TRUE;
        }
        return FALSE;       
    }

    public function get_last_temperatures($iPcbId)
    {
        $this->db->select('sensor_id,value');
        $this->db->from('temperature');
        $this->db->join('sensors', 'sensors.id = temperature.sensor_id and sensors.pcb_id ='.$iPcbId);        
        $query = $this->db->get();
        // esta linea muestra la ultima consulta ejecutada en la db
        // echo $this->db->last_query();        
        return $query->result_array();
    }
}