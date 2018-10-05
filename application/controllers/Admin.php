<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');}

		redirect('admin/feed');
		
	}

	public function feed() {

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');} 

		$data['user'] = $this->login->get_user($this->session->userdata('email'));

		$this->load->view('admin/layout/header');
		$this->load->view('admin/index', $data);
		$this->load->view('admin/layout/footer');
		
	}

	public function slides() {

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');}

		$slides = $this->slide->slides();

		$this->load->view('admin/layout/header');
		$this->load->view('admin/slides', $slides);
		$this->load->view('admin/layout/footer');

		
	}

	public function mission() {
		
		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');}

		$this->load->view('admin/layout/header');
		$this->load->view('admin/mission');
		$this->load->view('admin/layout/footer');
		

	}

	public function cpart() {

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');}

		$this->load->view('admin/layout/header');
		$this->load->view('admin/cpart');
		$this->load->view('admin/layout/footer');
		

	}

	public function speech() {

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');}

		$this->load->view('admin/layout/header');
		$this->load->view('admin/speech');
		$this->load->view('admin/layout/footer');
		

	}

	public function community() {

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');}

		$this->load->view('admin/layout/header');
		$this->load->view('admin/community');
		$this->load->view('admin/layout/footer');
		

	}

	public function about() {

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');}

		$this->load->view('admin/layout/header');
		$this->load->view('admin/about');
		$this->load->view('admin/layout/footer');
	}


	public function news() {

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');}

		$this->load->view('admin/layout/header');
		$this->load->view('admin/news');
		$this->load->view('admin/layout/footer');
		

	}

	public function events() {

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');}

		$this->load->view('admin/layout/header');
		$this->load->view('admin/events');
		$this->load->view('admin/layout/footer');
		

	}

	public function archives() {

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');}

		$this->load->view('admin/layout/header');
		$this->load->view('admin/archives');
		$this->load->view('admin/layout/footer');
	
	}

	public function newsletter() {

		if ($this->session->userdata('logged_in') == FALSE) {redirect('login');}

		$this->load->view('admin/layout/header');
		$this->load->view('admin/newsletter');
		$this->load->view('admin/layout/footer');
		

	}

	public function manager_users() {

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');}

		$this->load->view('admin/layout/header');
		$this->load->view('admin/manager_users');
		$this->load->view('admin/layout/footer');
		

	}

	public function users() {

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');}

		$this->load->view('admin/layout/header');
		$this->load->view('admin/users');
		$this->load->view('admin/layout/footer');
	}

}
