<?php

class Position extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->layout->setLayout('layout');
	}

	public function view()
	{
		if (!file_exists('application/views/position/view.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->layout->view('view');
	}

}