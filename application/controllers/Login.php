<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$this->load->model('Login_model', 'login');
		$this->load->library('form_validation');
	}

	public function index() {

		$this->load->view('login/layout/header.php');
		$this->load->view('login/index');
		$this->load->view('login/layout/footer.php');
	}

	public function register() {

		$this->load->view('login/layout/header.php');
		$this->load->view('login/register');
		$this->load->view('login/layout/footer.php');
	}

	// Logout
	public function logout() {

		// $this->session->unset_userdata('user_id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");

		redirect('/login');
	}

	// Action Register
	public function actionRegister() {

		// field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Votre nom', 'callback_check_name_exists|trim|required|min_length[4]');
		$this->form_validation->set_rules('lastname', 'Votre prénom', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('email', 'Votre Email', 'callback_check_email_exists|trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Votre mot de passe', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('confirm_password', 'Confirmez votre mot de passe', 'trim|required|matches[password]');

		if ($this->form_validation->run() == FALSE) {

			$this->register();

		} else {

			// post values
			$name     = $this->input->post('name');
			$lastname = $this->input->post('lastname');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');

			$this->login->setName($name);
			$this->login->setLastname($lastname);
			$this->login->setUsername(strtolower($lastname.''.$name));
			$this->login->setEmail($email);
			$this->login->setPassword(password_hash($password, PASSWORD_DEFAULT));
			$this->login->setRole('r0');
			$this->login->setSlug(uniqid());
			$this->login->setAdmin(NULL);
			$this->login->setStatus(NULL);
			$this->login->setDate();

			//$check = $this->login->checkEmail($email);

			if (!is_null($check['email'])) {

				redirect('login/register?msg=email_adress');

			} else {

				$this->login->createUser();

				//$this->login->checkEmail($email);

				$data['login'] = $this->login->get_user($this->input->post('email'));

				$session_input = array(

						'logged_in' 	=> TRUE, 
						'role' 			=> $data['login']['role'], 
						'username' 		=>$data['login']['username'],
						'lastname' 		=>$data['login']['lastname'],
						'name' 			=>$data['login']['name'],
						'email' 		=>$data['login']['email'],
						'admin' 		=>$data['login']['admin'],
					);

				$this->session->set_userdata($session_input);
			
				if ($data['login']['role'] === 'r0') {

					redirect('feed?connect=user');
				}else{

					redirect('admin/feed');
				}

			}
		}
	}

	public function doLogin() {

		$this->form_validation->set_rules('email', 'Votre Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Votre mot de passe', 'trim|required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('login/layout/header.php');
			$this->load->view('login/index');
			$this->load->view('login/layout/footer.php');

		} else {

			$email    = $this->input->post('email');
			$password = $this->input->post('password');

			$this->login->setEmail($email);
			$this->login->setPassword($password);

			$result = $this->login->login();

			if ($result) {

				$checked_password = password_verify($password, $result[0]->password);

				if ($checked_password) {

					$sessArray = array(
						'name'      	=> $result[0]->name,
						'email'      	=> $result[0]->email,
						'username'     	=> $result[0]->username,
						'lastname'     	=> $result[0]->lastname,
						'role'      	=> $result[0]->role,
						'admin'      	=> $result[0]->admin,
						'logged_in' 	=> TRUE,
					);

					$role = $sessArray['role'];

					$this->session->set_userdata($sessArray);

					if ($role != 'r1') {

						redirect('login?msg=1');
					}

					redirect('admin/feed');

				} else {

					redirect('login?msg=1');
				}

			} else {

				redirect('login?msg=1');
			}
		}
	}

	public function active_user_r0($slug){

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');} 

		$this->login->setRole('r0');
		$this->login->setSlug($slug);
		$this->login->activeR0();
		
		redirect('admin/manager_users');
	}

	public function active_user_r1($slug){

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');} 

		$this->login->setRole('r1');
		$this->login->setSlug($slug);
		$this->login->activeR1();
		
		redirect('admin/manager_users');
	}

	public function active_user($slug){

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');} 

		$this->login->setStatus(TRUE);
		$this->login->setSlug($slug);
		$this->login->activeUser();
		
		redirect('admin/manager_users');
	}

	public function active_admin($slug){

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');} 

		$this->login->setAdmin(TRUE);
		$this->login->setSlug($slug);
		$this->login->activeAdmin();
		
		redirect('admin/manager_users');
	}

	public function desactive_admin($slug){

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');} 

		$this->login->setAdmin(FALSE);
		$this->login->setSlug($slug);
		$this->login->activeAdmin();
		
		redirect('admin/manager_users');
	}

	public function desactive_user($slug){

		if ($this->session->userdata('logged_in') == FALSE && is_null($this->session->userdata('username'))) {redirect('login');} 

		$this->login->setStatus(FALSE);
		$this->login->setSlug($slug);
		$this->login->activeUser();
		
		redirect('admin/manager_users');
	}

	function check_name_exists($name){

		$this->form_validation->set_message('check_name_exists', 'this name is tokeen');

		if ($this->login->check_name_exists($name)) {
			
			return true;
		}else{

			return false;
		}
	}

	function check_email_exists($email){

		$this->form_validation->set_message('check_email_exists', 'this email is tokeen');

		if ($this->login->check_email_exists($email)) {
			
			return true;
		}else{

			return false;
		}
	}

}
