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
        //$this->load->model('alarm_event_model');
	}
	
	public function index()
	{

	}

	public function save_heater_temperature(){
		/* /temperature/function/sensor_identifier/status/temp */
		/* primer valor es function y comienza desde 1*/
		/* status 1 es que esta prendido el calefactor */
		// $this->load->model('sensor_model');
		// $this->load->model('temperature_model');
		// $iSensorId = $iStatus = $fTemp = 0;
		// $iSensorId = $this->sensor_model->get_sensor_id_with_identifier($this->uri->segment(3,0));
		// $iStatus = $this->uri->segment(4,0);
		// $fTemp = $this->uri->segment(5,0);
		// if ($iStatus == 1){
			
		// 	$this->temperature_model->initialize($iSensorId,$fTemp);
		// 	$this->temperature_model->save_temperature_value();
		// }else if($iStatus == 0){

		// }
		
		
		// echo $this->uri->segment(3,0);


	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */