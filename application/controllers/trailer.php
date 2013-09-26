<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trailer extends CI_Controller 
{	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('trailer_model');
        $this->layout->setLayout('layout');
	}

	public function index($trailer_id = 1)
	{
		$this->load->model('pcb_model');
		$this->load->model('position_model');
		$this->load->model('temperature_model');
		$this->load->model('alarm_event_model');
		$iPcbId = $this->pcb_model->get_pcb_id_with_trailer($trailer_id);	
		$aPos = $this->position_model->get_last_positions($iPcbId,1);
		$aTemp = $this->temperature_model->get_last_temperatures($iPcbId);
		$aAlarmsEvents = $this->alarm_event_model->get_all_alarm();
		$this->layout->view('index',compact('aPos','aTemp','aAlarmsEvents'));
	}


	public function trending($trailer_id)
	{
		$this->load->model('sensor_model');
		$this->load->model('pcb_model');
		$this->load->model('position_model');
		$this->load->model('temperature_model');

		$iPcbId = $this->pcb_model->get_pcb_id_with_trailer($trailer_id);
		$aSensorId = $this->sensor_model->get_sensors_with_pcb($iPcbId);
		$aTemp = $this->pcb_model->get_trending_temperature($iPcbId);
		$aTrailerData = $this->trailer_model->get_trailer_data($trailer_id);
		$aData1 = array();
		$aData2 = array();
		foreach ($aTemp as $temp) {
			if($temp['sensor_id'] == $aSensorId[0]['id'] ){
				$aData1[] = "[".(mktime(date("H", strtotime($temp['created_at']))-4, date("i", strtotime($temp['created_at'])), date("s", strtotime($temp['created_at'])), date("m", strtotime($temp['created_at'])), date("d", strtotime($temp['created_at'])), date("Y", strtotime($temp['created_at'])))*1000).",".$temp['t_value']."]";
				$strIdentifier1 = $temp['sensor_identifier'];
			}
			if($temp['sensor_id'] == $aSensorId[1]['id'] ){
				$aData2[] = "[".(mktime(date("H", strtotime($temp['created_at']))-4, date("i", strtotime($temp['created_at'])), date("s", strtotime($temp['created_at'])), date("m", strtotime($temp['created_at'])), date("d", strtotime($temp['created_at'])), date("Y", strtotime($temp['created_at'])))*1000).",".$temp['t_value']."]";
				$strIdentifier2 = $temp['sensor_identifier'];
			}
		}		
		$aPos = $this->position_model->get_last_positions($iPcbId,1);
		$aTemp = $this->temperature_model->get_last_temperatures($iPcbId);
		$aHeater = $this->pcb_model->get_sensor_heater_with_pcb($iPcbId);
		$this->layout->view('trending', compact('aData1','aData2','strIdentifier1', 'strIdentifier2','aPos','aTemp','aHeater','aTrailerData'));
	}

	public function view($trailer_id)
	{
		if (!file_exists('application/views/pcb/view.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		//si trata de ver la posicion de un pcb que no registra posiciones
		if ($this->position_model->exist_pcbid($iPcbId) === false)
		{
			show_error('No se registran posiciones para este pcb');
		}

		$this->load->model('sensor_model');
		$this->load->model('pcb_model');
		$this->load->model('position_model');
		$this->load->model('temperature_model');
		$iPcbId = $this->pcb_model->get_pcb_id_with_trailer($trailer_id);
        $aData['pos'] = $this->position_model->get_last_positions($iPcbId,1);
        $aData['temp'] = $this->temperature_model->get_last_temperatures($iPcbId);
        $aData['heater'] = $this->pcb_model->get_sensor_heater_with_pcb($iPcbId);
		$this->layout->view('view', $aData);
	}

	public function ajax_refresh_heater_status($pcb_id)
	{
		$this->layout->setLayout('ajax_layout');
		$this->load->model('pcb_model');
		$aData = $this->pcb_model->get_sensor_heater_with_pcb($pcb_id);
		$this->layout->view('ajax_refresh_heater_status', compact('aData'));
	}

}