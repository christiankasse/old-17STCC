<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Community_model extends CI_Model {

	private $name;
	private $url;
	private $description;
	private $denomination;
	private $siege;
	private $email;
	private $post;
	private $representant;
	private $slug;
	private $created_at ;


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
	 * @param mixed $name
	 *
	 * @return self
	 */
	public function setRepresentant($representant) {

		$this->representant = $representant;

		return $this;
	}

	/**
	 * @param mixed $name
	 *
	 * @return self
	 */
	public function setSlug($slug) {

		$this->slug = $slug;

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
	 * @param mixed $denomination
	 *
	 * @return self
	 */
	public function setDenomination($denomination) {

		$this->denomination = $denomination;

		return $this;
	}

	/**
	 * @param mixed $siege
	 *
	 * @return self
	 */
	public function setSiege($siege) {

		$this->siege = $siege;

		return $this;
	}

	/**
	 * @param mixed $email
	 *
	 * @return self
	 */
	public function setEmail($email) {

		$this->email = $email;

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
	 * @param mixed $created_at
	 *
	 * @return self
	 */
	public function setDate() {

		return $this->created_at = date("Y-m-d H:i:s");
	}

	public function createCommunity() {

		$data = array(

			'name'   			=> $this->name,
			'url'   			=> $this->url,
			'description'	 	=> $this->description,
			'denomination'      => $this->denomination,
			'siege'      		=> $this->siege,
			'email'      		=> $this->email,
			'representant'      => $this->representant,
			'post'        		=> $this->post,
			'slug'        		=> $this->slug,
			'created_at' 		=> $this->created_at,
		);

		$this->db->insert('community', $data);
		return $this->db->insert_id();
	}

	public function updateCommunity() {

		$data = array(

			'name'   			=> $this->name,
			'url'   			=> $this->url,
			'description'	 	=> $this->description,
			'denomination'      => $this->denomination,
			'siege'      		=> $this->siege,
			'email'      		=> $this->email,
			'post'        		=> $this->post,
			'representant'      => $this->representant,
			'slug'        		=> $this->slug,
			'created_at' 		=> $this->created_at,
		);

		$this->db->where('slug', $this->input->post('slug'));
		return $this->db->update('community', $data);
	}

	public function community() {

		$this->db->select('*');
		$this->db->from('community');
		$this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}


	public function getAllcommunity() {

		$this->db->select('*');
		$this->db->from('community');
		$this->db->where('post', 1);
		// $this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}

	public function get_community($slug){


		$query = $this->db->get_where('community', array('slug' => $slug));
		return $query->row_array();
	}

	public function getOneCommunity($slug){

		$query = $this->db->get_where('community', array('slug' => $slug, 'post' => 1));
		return $query->row_array();
	}

	public function activeCommunity(){

		$data = array(
	        'post' => $this->post
		);

		$this->db->where('slug', $this->slug);
		return $this->db->update('community', $data);
	}

	public function deleteCommunity(){

		$this->db->where('slug', $this->slug);
		return $this->db->delete('community');
	}
}