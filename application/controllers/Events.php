<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	
	public function index() {

		$this->load->view('layout/header');
		$this->load->view('events/index');
		$this->load->view('layout/news_letter');
		$this->load->view('layout/footer');
	}

}

