<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Feed_model extends CI_Model {

	private $title;
	private $url;
	private $description;
	private $categorie;
	private $post;
	private $created_at ;
	private $slug;

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
	 * @param mixed $url
	 *
	 * @return self
	 */
	public function setUrl($url) {

		$this->url = $url;

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
	 * @param mixed $categorie
	 *
	 * @return self
	 */
	public function setCategorie($categorie) {

		$this->categorie = $categorie;

		return $this;
	}

	/**
	 * @param mixed $post
	 *
	 * @return self
	 */
	public function setPost($post) {

		$this->post = $post;

		return $this;
	}

	/**
	 * @param mixed $post
	 *
	 * @return self
	 */
	public function setSlug($slug) {

		$this->slug = $slug;

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

	public function createFeed() {

		$data = array(

			'title'   			=> $this->title,
			'url'   			=> $this->url,
			'description'	 	=> $this->description,
			'categorie'        	=> $this->categorie,
			'slug'        		=> $this->slug,
			'post'        		=> $this->post,
			'created_at' 		=> $this->created_at,
		);

		$this->db->insert('feed', $data);
		return $this->db->insert_id();
	}

	public function updateFeed() {

		$data = array(

			'title'   			=> $this->title,
			'url'   			=> $this->url,
			'description'	 	=> $this->description,
			'categorie'        	=> $this->categorie,
			'slug'        		=> $this->slug,
			'post'        		=> $this->post,
			'created_at' 		=> $this->created_at,
		);

		$this->db->where('slug', $this->input->post('slug'));
		return $this->db->update('feed', $data);
	}

	public function feed() {

		$this->db->select('*');
		$this->db->from('feed');
		$this->db->limit(4);

		return $query = $this->db->get();
	}

	public function getAllFeed() {

		$this->db->select('*');
		$this->db->from('feed');
		$this->db->where('post', 1);
		$this->db->limit(4);

		return $query = $this->db->get();
	}

	public function get_feed($slug = FALSE){

		if ($slug === FALSE) {	

			$this->db->order_by('id','DESC');
			$query = $this->db->get('feed');

			return $query->result_array();
		}

		$query = $this->db->get_where('feed', array('slug' => $slug));
		return $query->row_array();
	}

	public function getFeed($slug){

		$query = $this->db->get_where('feed', array('slug' => $slug));
		return $query->row_array();
	}

	public function activeFeed(){

		$data = array(
	        'post' => $this->post
		);

		$this->db->where('slug', $this->slug);
		return $this->db->update('feed', $data);
	}

	public function deleteFeed(){

		$this->db->where('slug', $this->slug);
		return $this->db->delete('feed');
	}
}