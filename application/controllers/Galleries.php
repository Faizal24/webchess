<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galleries extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/space');
		$this->load->view('galleries/open');
		$this->load->view('common/content');
		$this->load->view('common/footer');
	}

}

/* End of file Galleries.php */
/* Location: ./application/controllers/Galleries.php */