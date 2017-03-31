<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controllername extends CI_Controller {

	public function index()
	{
		$this->load->view('View File', $data, FALSE);
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */