<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pcb extends CI_Controller {

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
		$this->load->model('pcb_model');
        $this->layout->setLayout('layout');
	}
	
	public function index()
	{
		$this->layout->js(array('public/js/highcharts.js','public/js/modules/exporting.js','public/js/highcharts-more.js'));

		$this->layout->view('index');
	}

	public function trending($pcb_id)
	{
		$this->load->model('sensor_model');
		$aSensorId = $this->sensor_model->get_sensors_with_pcb($pcb_id);
		$aTemp = $this->pcb_model->get_trending_temperature($pcb_id);
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

		$this->layout->view('trending', compact('aData1','aData2','strIdentifier1', 'strIdentifier2'));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */