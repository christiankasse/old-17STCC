<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Archives_model extends CI_Model {

	private $title;
	private $location;
	private $description;
	private $image;
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
	 * @param mixed $location
	 *
	 * @return self
	 */
	public function setLocation($location) {

		$this->location = $location;

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
	 * @param mixed $image
	 *
	 * @return self
	 */
	public function setImage($image) {

		$this->image = $image;

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

	public function createArchives() {

		$data = array(

			'title'   			=> $this->title,
			'location'   		=> $this->location,
			'description'	 	=> $this->description,
			'image'        		=> $this->image,
			'slug'        		=> $this->slug,
			'post'        		=> $this->post,
			'created_at' 		=> $this->created_at,
		);

		$this->db->insert('archives', $data);
		return $this->db->insert_id();
	}

	public function updateArchives() {

		$data = array(

			'title'   			=> $this->title,
			'location'   		=> $this->location,
			'description'	 	=> $this->description,
			'image'        		=> $this->image,
			'slug'        		=> $this->slug,
			'post'        		=> $this->post,
			'created_at' 		=> $this->created_at,
		);

		$this->db->where('slug', $this->input->post('slug'));
		return $this->db->update('archives', $data);
	}

	public function archives() {

		$this->db->select('*');
		$this->db->from('archives');
		$this->db->limit(3);
		$this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}

	public function get_archives($slug = FALSE){

		if ($slug === FALSE) {	

			$this->db->order_by('id','DESC');
			$query = $this->db->get('archives');

			return $query->result_array();
		}

		$query = $this->db->get_where('archives', array('slug' => $slug));
		return $query->row_array();
	}

	public function activeArchives(){

		$data = array(
	        'post' => $this->post
		);

		$this->db->where('slug', $this->slug);
		return $this->db->update('archives', $data);
	}

	public function deleteArchives(){

		$this->db->where('slug', $this->slug);
		return $this->db->delete('archives');
	}
}