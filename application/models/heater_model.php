<?php

class Heater_model extends CI_Model {

	var $iSensorId = 0;
    var $iStatus = 0;


    public function __construct()
    {
        parent::__construct();
    }

    public function initialize($sensor_id, $status)
    {
        $this->iSensorId = $sensor_id;
        $this->iStatus = $status;
    }


}