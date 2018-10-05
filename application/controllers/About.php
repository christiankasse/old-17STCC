<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	
	public function index() {

		$this->load->view('layout/header');
		$this->load->view('about/index');
		$this->load->view('layout/news_letter');
		$this->load->view('layout/footer');
	}

	public function fonctionnement() {

		$this->load->view('layout/header');
		$this->load->view('about/fonctionnement');
		$this->load->view('layout/footer');
	}

}

