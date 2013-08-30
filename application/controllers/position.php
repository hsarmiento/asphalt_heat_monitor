<?php

class Position extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->layout->setLayout('layout');
        $this->load->model('Position_model');
	}

	public function view($iPcbId)
	{
		if (!file_exists('application/views/position/view.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		//si trata de ver la posicion de un pcb que no registra posiciones
		if ($this->Position_model->exist_pcbid($iPcbId) === false)
		{
			show_error('No se registran posiciones para este pcb');
		}

        $aData['query'] = $this->Position_model->get_last_position($iPcbId);
		$this->layout->view('view', $aData);
	}

	public function index()
	{
		if (!file_exists('application/views/position/index.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->layout->view('index');
	}

}