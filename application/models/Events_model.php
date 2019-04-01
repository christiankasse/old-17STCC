<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Events_model extends CI_Model {

	private $title;
	private $description;
	private $location;
	private $categorie;
	private $created_at ;
	private $post;
	private $slug;
	private $date_events;

	/**
	 * @param mixed $title
	 *
	 * @return self
	 */
	public function setTitle($title) {

		$this->title = $title;

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
	 * @param mixed $location
	 *
	 * @return self
	 */
	public function setLocation($location) {

		$this->location = $location;

		return $this;
	}

	/**
	 * @param mixed $location
	 *
	 * @return self
	 */
	public function setCategorie($categorie) {

		$this->categorie = $categorie;

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
	 * @param mixed $color
	 *
	 * @return self
	 */
	public function setDateEvents($date_events) {

		$this->date_events = $date_events;

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

	public function createEvents() {

		$data = array(

			'title'   		=> $this->title,
			'description'   			=> $this->description,
			'location'	 		=> $this->location,
			'slug'        		=> $this->slug,
			'categorie'     		=> $this->categorie,
			'created_at' 		=> $this->created_at,
			'post' 				=> $this->post,
			'date_events' 		=> $this->date_events,
		);

		$this->db->insert('events', $data);
		return $this->db->insert_id();
	}

	public function getLastEvents() {

		$this->db->select('*');
		$this->db->from('events');
		$this->db->limit(5);
		$this->db->where('post', 1);
		$this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}

	public function updateEvents() {

		$data = array(

			'title'   		=> $this->title,
			'description'   			=> $this->description,
			'location'	 		=> $this->location,
			'slug'        		=> $this->slug,
			'categorie'     		=> $this->categorie,
			'created_at' 		=> $this->created_at,
			'post' 				=> $this->post,
		);

		$this->db->where('slug', $this->input->post('slug'));
		return $this->db->update('events', $data);
	}

	public function events() {

		$this->db->select('*');
		$this->db->from('events');
		$this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}

	public function getAllEvents() {

		$this->db->select('*');
		$this->db->from('events');
		$this->db->order_by('id', 'DESC');
		$this->db->where('post', 1);

		return $query = $this->db->get();
	}

	public function getLastestEvents() {

		$this->db->select('*');
		$this->db->from('events');
		$this->db->order_by('id', 'DESC');
		$this->db->limit(1);
		$this->db->where('post', 1);

		return $query = $this->db->get();
	}

	public function getEvents($slug){

		
		$query = $this->db->get_where('events', array('slug' => $slug));
		return $query->row_array();
	}

	public function get_events($slug = FALSE){

		if ($slug === FALSE) {	

			$this->db->order_by('id','DESC');
			$query = $this->db->get('events');

			return $query->result_array();
		}

		$query = $this->db->get_where('events', array('slug' => $slug));
		return $query->row_array();
	}

	public function activeEvents(){

		$data = array(
	        'post' => $this->post
		);

		$this->db->where('slug', $this->slug);
		return $this->db->update('events', $data);
	}

	public function deleteEvents(){

		$this->db->where('slug', $this->slug);
		return $this->db->delete('events');
	}
}