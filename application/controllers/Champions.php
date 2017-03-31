<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Champions extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/space');
		$this->load->view('champions/index');
		$this->load->view('common/content');
		$this->load->view('common/footer');
	}

}

/* End of file Champions.php */
/* Location: ./application/controllers/Champions.php */