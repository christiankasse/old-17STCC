<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index() {

		$this->load->view('layout/header');
		$this->load->view('news/index');
		$this->load->view('layout/news_letter');
		$this->load->view('layout/footer');
	}

	public function show($slug) {

		$data['news'] = $this->news->getNews($slug);

		$this->load->view('layout/header');
		$this->load->view('news/show',$data);
		$this->load->view('layout/footer');
	}

}

