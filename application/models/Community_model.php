<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Community_model extends CI_Model {

	private $name;
	private $url;
	private $description;
	private $denomination;
	private $post;
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
			'post'        		=> $this->post,
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
			'post'        		=> $this->post,
			'created_at' 		=> $this->created_at,
		);

		$this->db->where('name', $this->input->post('name'));
		return $this->db->update('community', $data);
	}

	public function community() {

		$this->db->select('*');
		$this->db->from('community');
		$this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}

	public function get_community($name = FALSE){

		if ($name === FALSE) {	

			$this->db->order_by('id','DESC');
			$query = $this->db->get('community');

			return $query->result_array();
		}

		$query = $this->db->get_where('community', array('name' => $name));
		return $query->row_array();
	}

	public function activeCommunity(){

		$data = array(
	        'post' => $this->post
		);

		$this->db->where('name', $this->name);
		return $this->db->update('community', $data);
	}

	public function deleteCommunity(){

		$this->db->where('name', $this->name);
		return $this->db->delete('community');
	}
}