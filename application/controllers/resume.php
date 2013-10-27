<?php

class Resume extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->layout->setLayout('layout');
        $this->load->model('asphalt_model');        
	}

	public function add()
	{
		if (!file_exists('application/views/resume/add.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('driver_full_name','driver_full_name', 'required');
		$this->form_validation->set_rules('driving_hours','driving_hours', 'required');
		$this->form_validation->set_rules('trailer_identifier','trailer_identifier', 'required');
		$this->form_validation->set_rules('heater_type','heater_type', 'required');
		$this->form_validation->set_rules('number_injector','number_injector', 'required');
		$this->form_validation->set_rules('upload_date','upload_date', 'required');
		$this->form_validation->set_rules('upload_time','upload_time', 'required');
		$this->form_validation->set_rules('upload_temp','upload_temp', 'required');
		$this->form_validation->set_rules('download_date','download_date', 'required');
		$this->form_validation->set_rules('download_time','download_time', 'required');
		$this->form_validation->set_rules('download_temp','download_temp', 'required');
		$this->form_validation->set_rules('travel_time','travel_time', 'required');
		$this->form_validation->set_rules('heater_usage_hour','heater_usage_hour', 'required');
		$this->form_validation->set_rules('average_hourly_temp','average_hourly_temp', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->layout->css(array(base_url().'public/css/general.css'));
			$this->layout->setTitle('Sistema control asfalto | Resumen');
			$this->layout->view('add');
		}
		else
		{
			$this->Asphalt_model->save();
			$this->layout->view('success');
		}			
	}

	public function show($trailer_id)
	{
		if (!file_exists('application/views/resume/show.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$this->load->model('trailer_model');
		$aTrailer = $this->trailer_model->get_trailer_data($trailer_id);
		$aResume = $this->asphalt_model->get_asphalt_data($aTrailer['identifier']);
		// print_r($aResume);

		$this->layout->css(array(base_url().'public/css/resume.css'));
		$this->layout->setTitle('Sistema control asfalto | Resumen');
		$this->layout->view('show',compact('trailer_id'));
	}

	public function partial_datagrid($trailer_id)
	{
		// $this->load->model('trailer_model');
		// $aTrailer = $this->trailer_model->get_trailer_data($trailer_id);
		// $aResume = $this->asphalt_model->get_asphalt_data($aTrailer['identifier']);

		// $this->layout->css(array(base_url().'public/css/resume.css'));
		// $this->layout->setTitle('Sistema control asfalto | Resumen');
		// $this->layout->view('show',compact('aResume'));
		$this->load->model('trailer_model');
		$aTrailer = $this->trailer_model->get_trailer_data($trailer_id);
		$aResume = $this->asphalt_model->get_asphalt_data($aTrailer['identifier']);
		$this->layout->css(array(base_url().'public/css/partial_datagrid.css'));
		$this->layout->view('partial_datagrid',compact('aResume'));
	}

	public function hidden_show($trailer_id)
	{
		if (!file_exists('application/views/resume/hidden_show.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		// print_r($aResume);

		$this->layout->css(array(base_url().'public/css/resume.css'));
		$this->layout->setTitle('Sistema control asfalto | Resumen');
		$this->layout->view('hidden_show',compact('trailer_id'));
	}

	public function hidden_partial_datagrid($trailer_id)
	{
		// $this->load->model('trailer_model');
		// $aTrailer = $this->trailer_model->get_trailer_data($trailer_id);
		// $aResume = $this->asphalt_model->get_asphalt_data($aTrailer['identifier']);

		// $this->layout->css(array(base_url().'public/css/resume.css'));
		// $this->layout->setTitle('Sistema control asfalto | Resumen');
		// $this->layout->view('show',compact('aResume'));
		$this->load->model('trailer_model');
		$aTrailer = $this->trailer_model->get_trailer_data($trailer_id);
		$aResume = $this->asphalt_model->get_asphalt_data($aTrailer['identifier']);
		$this->layout->css(array(base_url().'public/css/partial_datagrid.css'));
		$this->layout->view('hidden_partial_datagrid',compact('aResume'));
	}
}