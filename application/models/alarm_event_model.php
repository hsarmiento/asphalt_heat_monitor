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
        $this->db->select('alarms_events.pcb_id as pcb_id, alarms_events.sensor_id as sensor_id,alarms_events.created_at as created_at,sensors.identifier as sensor_identifier, event_type.text as text');
        $this->db->from('sensors');
        $this->db->join('alarms_events', 'sensors.id = alarms_events.sensor_id', 'left');
        $this->db->join('event_type', 'alarms_events.event_type_id = event_type.id');
        $this->db->order_by('created_at','desc');
        $query = $this->db->get();
        return $query->result_array();

    }

}