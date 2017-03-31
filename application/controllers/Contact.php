<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/space');
		$this->load->view('contact/index');
		$this->load->view('common/content');
		$this->load->view('common/footer');
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */