<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assumption extends CI_Controller {

	public function index()
	{
		
		$this->load->view('common/header');
		$this->load->view('common/space');
		$this->load->view('tournament/assumption');
		$this->load->view('common/content');
		$this->load->view('common/footer');
	}

}

/* End of file Assumption.php */
/* Location: ./application/controllers/Assumption.php */