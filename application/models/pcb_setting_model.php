<?php

class Pcb_setting_model extends CI_Model {

	var $iMaxComLossTime = 0;

    public function __construct()
    {
        parent::__construct();
    }

    public function initialize($max_com_loss_time)
    {
        $this->iMaxComLossTime = $max_com_loss_time;
    }

    public function save_max_value(){
        $this->load->model('pcb_model');
        $aPcb = $this->pcb_model->get_all();
        $aData = array();
        foreach ($aPcb as $pcb) {
            $aData[] = array('pcb_id' => $pcb['id'], 'max_com_loss_time' => $this->iMaxComLossTime);
        }
        $this->db->insert_batch('pcb_settings',$aData);
        if($this->db->affected_rows() == count($aPcb))
        {
            return TRUE;
        }
        return FALSE;
    }

    public function get_last_value($pcb_id)
    {
        $this->db->select('max_com_loss_time');
        $this->db->from('pcb_settings');
        $this->db->where('pcb_id', $pcb_id);
        $this->db->order_by('created_at', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row_array();
    }

}