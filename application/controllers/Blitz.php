<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blitz extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/space');
		$this->load->view('chessratings/blitz');
		$this->load->view('common/content');
		$this->load->view('common/footer');
	}
}

/* End of file Blitz.php */
/* Location: ./application/controllers/Blitz.php */