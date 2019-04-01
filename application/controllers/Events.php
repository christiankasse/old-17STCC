<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	
	public function index() {

		$this->load->view('layout/header');
		$this->load->view('events/index');
		$this->load->view('layout/news_letter');
		$this->load->view('layout/footer');
	}

	public function show($slug) {

		$data['events'] = $this->events->getEvents($slug);

		$this->load->view('layout/header');
		$this->load->view('events/show', $data);
		$this->load->view('layout/news_letter');
		$this->load->view('layout/footer');
	}

}

