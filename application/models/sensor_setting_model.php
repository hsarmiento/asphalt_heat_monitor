<?php

class Sensor_setting_model extends CI_Model {

	var $iMaxValue = 0;

    public function __construct()
    {
        parent::__construct();
    }

    public function initialize($max_value)
    {
        $this->iMaxValue = $max_value;
    }

    public function save_max_value(){
        $this->load->model('sensor_model');
        $aSensor = $this->sensor_model->get_all();
        $aData = array();
        foreach ($aSensor as $sensor) {
            $aData[] = array('sensor_id' => $sensor['id'], 'max_temperature' => $this->iMaxValue);
        }
        $this->db->insert_batch('sensors_settings',$aData);
        if($this->db->affected_rows() == count($aSensor))
        {
            return TRUE;
        }
        return FALSE;
    }

}