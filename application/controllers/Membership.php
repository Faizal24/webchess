<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/space');
		$this->load->view('about/membership');
		$this->load->view('common/content');
		$this->load->view('common/footer');
	}

}

/* End of file Membership.php */
/* Location: ./application/controllers/Membership.php */