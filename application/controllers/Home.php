<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/landing');		
		$this->load->view('home/index');
		$this->load->view('common/content');
		$this->load->view('common/footer');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */