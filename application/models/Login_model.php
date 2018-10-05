<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	private $_id;
	private $_name;
	private $_lastname;
	private $_username;
	private $_email;
	private $_password;
	private $_role;
	private $_create_at;
	private $_admin;
	private $_slug;
	private $_status;

	public function setId($id) {
		$this->_id = $id;
	}

	public function setAdmin($admin) {
		$this->_admin = $admin;
	}

	public function setStatus($status) {
		$this->_status = $status;
	}

	public function setSlug($slug) {
		$this->_slug = $slug;
	}

	public function setName($name) {
		$this->_name = $name;
	}

	public function setLastname($lastname) {
		$this->_lastname = $lastname;
	}

	public function setUsername($username) {
		$this->_username = $username;
	}

	public function setEmail($email) {
		$this->_email = $email;
	}

	public function setPassword($password) {
		$this->_password = $password;
	}

	public function setRole($role) {

		$this->_role = $role;
	}

	public function setDate() {

		$this->_create_at = date("Y-m-d H:i:s");
	}

	public function createUser() {

		$data = array(
			'name'      => $this->_name,
			'lastname'  => $this->_lastname,
			'username'  => $this->_username,
			'email'     => $this->_email,
			'password'  => $this->_password,
			'role'      => $this->_role,
			'create_at' => $this->_create_at,
			'admin' 	=> $this->_admin,
			'slug' 		=> $this->_slug,
			'status' 	=> $this->_status,
		);

		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}

	public function get_user($email = FALSE){

		if ($email === FALSE) {	

			$this->db->order_by('id','DESC');
			$query = $this->db->get('users');


			return $query->result_array();
		}

		$query = $this->db->get_where('users', array('email' => $this->_email));
		return $query->row_array();
	}

	public function checkEmail($email) {

		$this->db->select('email');
		$this->db->from('users as u');
		$this->db->where('u.email', $this->_email);
		$query = $this->db->get();

		return $query->row_array();

	}

	public function login() {

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email', $this->_email);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows() == 1) {

			return $query->result();

		} else {

			return false;
		}
	}

	public function activeR1(){

		$data = array(
	        'role' => $this->_role
		);

		$this->db->where('slug', $this->_slug);
		return $this->db->update('users', $data);
	}

	public function activeRmax(){

		$data = array(
	        'role' => $this->_role
		);

		$this->db->where('slug', $this->_slug);
		return $this->db->update('users', $data);
	}

	public function activeR0(){

		$data = array(
	        'role' => $this->_role
		);

		$this->db->where('slug', $this->_slug);
		return $this->db->update('users', $data);
	}

	public function activeUser(){

		$data = array(
	        'status' => $this->_status
		);

		$this->db->where('slug', $this->_slug);
		return $this->db->update('users', $data);
	}

	public function activeAdmin(){

		$data = array(
	        'admin' => $this->_admin
		);

		$this->db->where('slug', $this->_slug);
		return $this->db->update('users', $data);
	}

	public function check_name_exists($name){

		$query = $this->db->get_where('users', array('name' => $name ));
		
		if (empty($query->row_array())) {
			
			return true;
		}else{

			return false;
		}
	}

	public function check_email_exists($email){

		$query = $this->db->get_where('users', array('email' => $email ));
		
		if (empty($query->row_array())) {
			
			return true;
		}else{

			return false;
		}
	}
}
?>