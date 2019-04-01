<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archives extends CI_Controller {
	
	public function index() {

		$this->load->view('layout/header');
		$this->load->view('archives/index');
		$this->load->view('layout/news_letter');
		$this->load->view('layout/footer');
	}

	public function show($slug) {

		$data['archives'] = $this->archives->getArchive($slug);

		$this->load->view('layout/header');
		$this->load->view('archives/show',$data);
		$this->load->view('layout/footer');
	}

}

