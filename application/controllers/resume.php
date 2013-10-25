<?php

class Position extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->layout->setLayout('layout');
        $this->load->model('Asphalt_model');        
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
}