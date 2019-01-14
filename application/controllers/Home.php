<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('statis/header');
		$this->load->view('home/home');
		$this->load->view('statis/footer');
	}

	public function FunctionName($value='')
	{
		# code...
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */