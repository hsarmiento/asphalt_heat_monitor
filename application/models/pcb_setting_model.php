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

}