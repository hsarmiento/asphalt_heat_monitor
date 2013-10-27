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

		$this->layout->css(array(base_url().'public/css/general.css'));
		$this->layout->setTitle('Sistema control asfalto | Resumen');
		$this->layout->view('add');
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

		$this->layout->css(array(base_url().'public/css/general.css'));
		$this->layout->setTitle('Sistema control asfalto | Resumen');
		$this->layout->view('show',compact('aResume'));
	}
}