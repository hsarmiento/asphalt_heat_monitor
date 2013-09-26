<?php

class Alarm_event_model extends CI_Model {

	var $iEventTypeId = 0;
    var $iPcbId = 0;
    var $iSensorId = 0;


    public function __construct()
    {
        parent::__construct();
    }

    public function initialize($event_type_id, $pcb_id = null, $sensor_id = null)
    {
        $this->iEventTypeId = $event_type_id;
        $this->iPcbId = $pcb_id;
        $this->iSensorId = $sensor_id;
    }

    public function save_alert(){
        $data = array('event_type_id' => $this->iEventTypeId, 'pcb_id' => $this->iPcbId, 'sensor_id' => $this->iSensorId);
        $this->db->insert('alarms_events', $data);
        if($this->db->affected_rows() == '1')
        {
            return TRUE;
        }
        return FALSE; 
    }
    
    public function get_all_alarm(){
        $this->db->select('t2.pcb_id as pcb_id, t2.sensor_id as sensor_id,t5.created_at as created_at,t1.identifier as pcb_identifier, t3.text as text')
        ->from('pcb as t1')
        ->join('alarms_events as t2', 't1.id = t2.pcb_id', 'left')
        ->join('event_type as t3', 't2.event_type_id = t3.id')
        ->join('sensors as t4', 't1.id = t4.pcb_id')
        ->join('heaters as t5', 't4.id = t5.sensor_id')
        ->where('t4.id', '2')
        ->order_by('t5.created_at','desc');
        $query = $this->db->get();
        return $query->result_array();

    }

}