<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter_model extends CI_Model {

	private $email;
	private $name;
	private $status;
	private $created_at ;
	private $post;


	/**
	 * @param mixed $name
	 *
	 * @return self
	 */
	public function setName($name) {

		$this->name = $name;

		return $this;
	}

	/**
	 * @param mixed $status
	 *
	 * @return self
	 */
	public function setStatus($status) {

		$this->status = $status;

		return $this;
	}



	/**
	 * @param mixed $color
	 *
	 * @return self
	 */
	public function setEmail($email) {

		$this->email = $email;

		return $this;
	}

	/**
	 * @param mixed 
	 *
	 * @return self
	 */
	public function setPost($post) {

		$this->post = $post;

		return $this;
	}

	/**
	 * @param mixed $created_at
	 *
	 * @return self
	 */
	public function setDate() {

		return $this->created_at = date("Y-m-d H:i:s");
	}

	public function createNewsletter() {

		$data = array(
			'name'   			=> $this->name,
			'status'	 		=> $this->status,
			'email'        		=> $this->email,
			'created_at' 		=> $this->created_at,
			'post' 				=> $this->post,
		);

		$this->db->insert('newsletter', $data);
		return $this->db->insert_id();
	}

	public function updateNewsletter() {

		$data = array(
			'name'   			=> $this->name,
			'status'	 		=> $this->status,
			'email'        		=> $this->email,
			'created_at' 		=> $this->created_at,
			'post' 				=> $this->post,
		);

		$this->db->where('email', $this->input->post('email'));
		return $this->db->update('newsletter', $data);
	}

	public function newsletter() {

		$this->db->select('*');
		$this->db->from('newsletter');
		$this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}

	public function get_newsletter($email = FALSE){

		if ($email === FALSE) {	

			$this->db->order_by('id','DESC');
			$query = $this->db->get('newsletter');

			return $query->result_array();
		}

		$query = $this->db->get_where('newsletter', array('email' => $email));
		return $query->row_array();
	}

	public function activeNewsletter(){

		$data = array(
	        'post' => $this->post
		);

		$this->db->where('email', $this->email);
		return $this->db->update('newsletter', $data);
	}

	public function deleteNewsletter(){

		$this->db->where('email', $this->email);
		return $this->db->delete('newsletter');
	}

	public function check_email_exists($email){

		$query = $this->db->get_where('newsletter', array('email' => $email ));
		
		if (empty($query->row_array())) {
			
			return true;
		}else{

			return false;
		}
	}
}