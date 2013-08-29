<?php

class Temperature_model extends CI_Model {

	var $iSensorId = 0;
	var $iValue = 0;

    public function __construct()
    {
        parent::__construct();
    }

    public function initialise($sensor_id, $value)
    {
    	$this->iSensorId = $sensor_id;
    	$this->iValue = $value;

    }

    public function save_temperature_value()
    {
    	$data = array('sensor_id' => $this->iSensorId ,'value'=>$this->iValue);
		$this->db->insert('temperature', $data);
    }
}