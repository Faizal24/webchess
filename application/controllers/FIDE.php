<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FIDE extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/space');
		$this->load->view('chessratings/fide');
		$this->load->view('common/content');
		$this->load->view('common/footer');
	}

}

/* End of file FIDE.php */
/* Location: ./application/controllers/FIDE.php */