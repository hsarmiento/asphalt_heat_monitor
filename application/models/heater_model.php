<?php

class Heater_model extends CI_Model {

	var $iSensorId = 0;
    var $iStatus = 0;
    var $dCreatedAt = NULL;
    var $dStoppedAt = NULL;



    public function __construct()
    {
        parent::__construct();
    }

    public function initialize($sensor_id, $status, $created_at, $stopped_at)
    {
        $this->iSensorId = $sensor_id;
        $this->iStatus = $status;
        $this->dCreatedAt = $created_at;
        $this->dStoppedAt = $stopped_at;
    }

    public function save_heater_status()
    {
        $data = array('sensor_id'=>$this->iSensorId, 'status'=>$this->iStatus, 'created_at'=>$this->dCreatedAt, 'stopped_at'=> $this->dStoppedAt);
        $this->db->insert('heaters',$data);
        if($this->db->affected_rows() == '1')
        {
            return TRUE;
        }
        return FALSE;
    }

    public function get_last_id_with_sensor_id($sensor_id)
    {
        $this->db->select('id')
        ->from('heaters')
        ->where('sensor_id',$sensor_id)
        ->order_by('created_at','desc')
        ->limit(1);
        $aResult = $this->db->get()->row_array();
        return $aResult['id'];
    }

    public function update_heater_status($sensor_id, $stopped_at)
    {
        $data = array('status' => 0, 'stopped_at' => $stopped_at);
        $iHeaterId = $this->get_last_id_with_sensor_id($sensor_id);

        if ($this->db->where('id',$iHeaterId)->update('heaters',$data)){
            return TRUE;
        }

        return FALSE;
    }

}