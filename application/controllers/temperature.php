<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Temperature extends CI_Controller {

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
        $this->load->model('temperature_model');
	}
	
	public function index()
	{
		$this->layout->view('index');
	}

	public function get_temperature_value()
	{
		/* site.com/temperature/sensor_id/value */
		$iSensorId = $this->uri->segment(3,0);
		$iValue = $this->uri->segment(4,0);
		$this->temperature_model->initialise($iSensorId,$iValue);
		$this->temperature_model->save_temperature_value();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */