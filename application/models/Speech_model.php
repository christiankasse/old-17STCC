<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Speech_model extends CI_Model {

	private $speaker;
	private $role;
	private $description;
	private $color_text;
	private $color_description;
	private $created_at ;
	private $post;
	private $slug;

	/**
	 * @param mixed $speaker
	 *
	 * @return self
	 */
	public function setSpeaker($speaker) {

		$this->speaker = $speaker;

		return $this;
	}

	/**
	 * @param mixed $role
	 *
	 * @return self
	 */
	public function setRole($role) {

		$this->role = $role;

		return $this;
	}

	/**
	 * @param mixed $description
	 *
	 * @return self
	 */
	public function setDescription($description) {

		$this->description = $description;

		return $this;
	}


	/**
	 * @param mixed $color
	 *
	 * @return self
	 */
	public function setColorTitle($color_text) {

		$this->color_text = $color_text;

		return $this;
	}

	/**
	 * @param mixed $color
	 *
	 * @return self
	 */
	public function setColorDescription($color_description) {

		$this->color_description = $color_description;

		return $this;
	}

	/**
	 * @param mixed $color
	 *
	 * @return self
	 */
	public function setSlug($slug) {

		$this->slug = $slug;

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

	public function createSpeech() {

		$data = array(

			'speaker'   			=> $this->speaker,
			'role'   				=> $this->role,
			'description'	 		=> $this->description,
			'slug'        			=> $this->slug,
			'created_at' 			=> $this->created_at,
		);

		$this->db->insert('speech', $data);
		return $this->db->insert_id();
	}

	public function updateSpeech() {

		$data = array(

			'speaker'   			=> $this->speaker,
			'role'   				=> $this->role,
			'description'	 		=> $this->description,
			'slug'        			=> $this->slug,
			'created_at' 			=> $this->created_at,
		);

		$this->db->where('slug', $this->input->post('slug'));
		return $this->db->update('speech', $data);
	}

	public function speech() {

		$this->db->select('*');
		$this->db->from('speech');
		$this->db->limit(3);
		$this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}

	public function getOnSpeech() {

		$this->db->select('*');
		$this->db->from('speech');
		$this->db->limit(1);
		$this->db->where('post',1);
		$this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}

	public function get_speech($slug = FALSE){

		if ($slug === FALSE) {	

			$this->db->order_by('id','DESC');
			$query = $this->db->get('speech');

			return $query->result_array();
		}

		$query = $this->db->get_where('speech', array('slug' => $slug));
		return $query->row_array();
	}

	public function getLastSpeech($slug){

		$query = $this->db->get_where('speech', array('slug' => $slug));
		return $query->row_array();
	}

	public function activeSpeech(){

		$data = array(
	        'post' => $this->post
		);

		$this->db->where('slug', $this->slug);
		return $this->db->update('speech', $data);
	}

	public function deleteSpeech(){

		$this->db->where('slug', $this->slug);
		return $this->db->delete('speech');
	}
}