<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mission extends CI_Controller {

	public function show($slug) {

		$data['feed'] = $this->feed->getFeed($slug);

		$this->load->view('layout/header');
		$this->load->view('mission/show',$data);
		$this->load->view('layout/footer');
	}

	public function education() {

		$this->load->view('layout/header');
		$this->load->view('mission/education');
		$this->load->view('layout/footer');
	}

	public function familly() {

		$this->load->view('layout/header');
		$this->load->view('mission/familly');
		$this->load->view('layout/footer');
	}

	public function social_work() {

		$this->load->view('layout/header');
		$this->load->view('mission/social_work');
		$this->load->view('layout/footer');
	}

}

