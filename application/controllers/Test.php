<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/space');
		$this->load->view('common/sitebar');
		$this->load->view('common/test1');
	}

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */