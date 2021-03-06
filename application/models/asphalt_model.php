<?php

class Asphalt_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }

    public function save()
    {    	
    	$aData = array(
    		"driver_full_name" => $this->input->post('driver_full_name'),
			"driving_hours" => $this->input->post('driving_hours'),
			"trailer_identifier" => $this->input->post('trailer_identifier'),
			"heater_type" => $this->input->post('heater_type'),
			"number_injector" => $this->input->post('number_injector'),
			"upload_date" => $this->input->post('upload_date'),
			"upload_time" => $this->input->post('upload_time'),
			"upload_temp" => $this->input->post('upload_temp'),
			"download_date" => $this->input->post('download_date'),
			"download_time" => $this->input->post('download_time'),
			"download_temp" => $this->input->post('download_temp'),
			"travel_time" => $this->input->post('travel_time'),
			"heater_usage_hour" => $this->input->post('heater_usage_hour'),
			"average_hourly_temp" => $this->input->post('average_hourly_temp')
    	);    	

    	return $this->db->insert('asphalt', $aData);
    }

    public function update($iAsphaltId)
    {       
        $aData = array(
            "driver_full_name" => $this->input->post('driver_full_name'),
            "driving_hours" => $this->input->post('driving_hours'),
            "trailer_identifier" => $this->input->post('trailer_identifier'),
            "heater_type" => $this->input->post('heater_type'),
            "number_injector" => $this->input->post('number_injector'),
            "upload_date" => $this->input->post('upload_date'),
            "upload_time" => $this->input->post('upload_time'),
            "upload_temp" => $this->input->post('upload_temp'),
            "download_date" => $this->input->post('download_date'),
            "download_time" => $this->input->post('download_time'),
            "download_temp" => $this->input->post('download_temp'),
            "travel_time" => $this->input->post('travel_time'),
            "heater_usage_hour" => $this->input->post('heater_usage_hour'),
            "average_hourly_temp" => $this->input->post('average_hourly_temp')
        );
        $this->db->where('id', $iAsphaltId);
        return $this->db->update('asphalt', $aData);
    }

	public function get_asphalt_data($trailer_identifier)
    {
    	$this->db->select('*')
        ->from('asphalt')
        ->where('trailer_identifier',$trailer_identifier);
        return $this->db->get()->result_array();
    }

    public function find($iAsphaltId)
    {
        $this->db->select('*')
        ->from('asphalt')
        ->where('id',$iAsphaltId);
        return $this->db->get()->result_array();
    }



}