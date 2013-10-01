<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Heater extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
        $this->layout->setLayout('layout');
        $this->load->model('heater_model');
	}
	
	public function index()
	{

	}

	public function save_heater_status(){
		/* /temperature/function/sensor_identifier/status/timestamp */
		/* primer valor es function y comienza desde 1*/
		/* status 1 es que esta prendido el calefactor */

		// $this->load->model('sensor_model');
		// $this->load->model('alarm_event_model');
		// $iSensorId = $iStatus = 0;
		// $iSensorId = $this->sensor_model->get_sensor_id_with_identifier($this->uri->segment(3,0));
		// $iStatus = $this->uri->segment(4,0);
		// $dTimestamp = urldecode($this->uri->segment(5,0));
		// $aSensorData = $this->sensor_model->get_sensor_data($iSensorId);
		
		// if ($iStatus == 1){
		// 	$this->heater_model->initialize($iSensorId,$iStatus,$dTimestamp,null);
		// 	$this->heater_model->save_heater_status();
		// 	$this->alarm_event_model->initialize(1,$aSensorData['pcb_id'],null);
		// }else if($iStatus == 0){
		// 	$this->heater_model->update_heater_status($iSensorId,$dTimestamp);
		// 	$this->alarm_event_model->initialize(2,$aSensorData['pcb_id'],null);
		// }
		// $this->alarm_event_model->save_alert();

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */