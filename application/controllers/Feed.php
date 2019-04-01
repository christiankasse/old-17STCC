<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feed extends CI_Controller {
	
	public function index() {

		$this->load->view('layout/header');
		$this->load->view('index');
		$this->load->view('layout/news_letter');
		$this->load->view('layout/footer');
	}

	public function mission($slug) {

		$data['mission'] = $this->mission->get_mission($slug);

		$this->load->view('layout/header');
		$this->load->view('feed/mission', $data);
		$this->load->view('layout/footer');
	}

	public function society() {

		$this->load->view('layout/header');
		$this->load->view('feed/society');
		$this->load->view('layout/footer');
	}

	public function privacy() {

		$this->load->view('layout/header');
		$this->load->view('feed/privacy');
		$this->load->view('layout/footer');
	}


	public function community($slug) {

		$data['community'] = $this->community->getOneCommunity($slug);

		$this->load->view('layout/header');
		$this->load->view('feed/community', $data);
		$this->load->view('layout/footer');
	}

	public function speech($slug) {

		$data['speech'] = $this->speech->getLastSpeech($slug);

		$this->load->view('layout/header');
		$this->load->view('feed/speech',$data);
		$this->load->view('layout/footer');
	}

	

}

