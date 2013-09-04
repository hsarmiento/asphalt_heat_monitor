<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sensor_setting extends CI_Controller {

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
        $this->load->model('sensor_setting_model');
	}
	
	public function index()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->form_validation->set_rules('max_temperature', 'Valor maximo de temperatura', 'required');
		$this->form_validation->set_message('required', 'Favor ingrese valor');
		$msg = '';
		if($this->form_validation->run() == TRUE)
		{
			$this->sensor_setting_model->initialize(set_value('max_temperature'));
			if($this->sensor_setting_model->save_max_value() == TRUE){
				$msg = 'Se ha guardado la configuración';
			}else{
				$msg = 'Ha ocurrido un error';
			}
		}else{
			// $msg = 'no se han validado todos los datos';
		}
		$this->layout->view('index', compact('msg'));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */