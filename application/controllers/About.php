<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/space');
		$this->load->view('about/index');
		$this->load->view('common/content');
		$this->load->view('common/footer');
	}

	

}

/* End of file About-us.php */
/* Location: ./application/controllers/About-us.php */