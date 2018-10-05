<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feed extends CI_Controller {
	
	public function index() {

		$this->load->view('layout/header');
		$this->load->view('index');
		$this->load->view('layout/news_letter');
		$this->load->view('layout/footer');
	}

	public function mission() {

		$this->load->view('layout/header');
		$this->load->view('feed/mission');
		$this->load->view('layout/footer');
	}

	public function society() {

		$this->load->view('layout/header');
		$this->load->view('feed/society');
		$this->load->view('layout/footer');
	}


	public function community() {

		$this->load->view('layout/header');
		$this->load->view('feed/community');
		$this->load->view('layout/footer');
	}

	public function speech() {

		$this->load->view('layout/header');
		$this->load->view('feed/speech');
		$this->load->view('layout/footer');
	}

	

}

