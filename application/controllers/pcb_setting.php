<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pcb_setting extends CI_Controller {

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
        $this->load->model('pcb_setting_model');
	}
	
	public function index()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->form_validation->set_rules('max_loss_time', 'Valor maximo de pérdida de comunicación', 'required');
		$this->form_validation->set_message('required', 'Favor ingrese valor');
		if($this->form_validation->run() == TRUE)
		{
			//$aFormData = array('max_temperature' => set_value('max_temperature'));
			$this->pcb_setting_model->initialize(set_value('max_loss_time'));
			if($this->pcb_setting_model->save_max_value() == TRUE){
				// redirect('sensor_setting/index');
			}else{
				echo 'ha ocurrido un error';
			}
		}else{
			// $this->layout->view('index');
		}
		$this->layout->view('index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */