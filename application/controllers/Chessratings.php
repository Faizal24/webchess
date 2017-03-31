<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chessratings extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/space');
		$this->load->view('common/content');
		$this->load->view('chessratings/index');
		$this->load->view('common/footer');
	}

	
}

/* End of file Chessratings.php */
/* Location: ./application/controllers/Chessratings.php */