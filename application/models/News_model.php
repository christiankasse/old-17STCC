<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

	private $title;
	private $description;
	private $url;
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
	 * @param mixed $description
	 *
	 * @return self
	 */
	public function setDescription($description) {

		$this->description = $description;

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

	public function createNews() {

		$data = array(

			'title'   		=> $this->title,
			'description'   => $this->description,
			'url'	 		=> $this->url,
			'slug'        	=> $this->slug,
			'post'        	=> $this->post,
			'created_at' 	=> $this->created_at,
		);

		$this->db->insert('news', $data);
		return $this->db->insert_id();
	}

	public function updateNews() {

		$data = array(

			'title'   			=> $this->title,
			'description'   	=> $this->description,
			'url'	 			=> $this->url,
			'slug'        		=> $this->slug,
			'post'        		=> $this->post,
			'created_at' 		=> $this->created_at,
		);

		$this->db->where('slug', $this->input->post('slug'));
		return $this->db->update('news', $data);
	}

	public function News() {

		$this->db->select('*');
		$this->db->from('news');
		$this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}

	public function getAllNews() {

		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('post', 1);
		$this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}

	public function getLastNews() {

		$this->db->select('*');
		$this->db->from('news');
		$this->db->limit(5);
		$this->db->where('post', 1);
		$this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}

	public function get_News($slug = FALSE){

		if ($slug === FALSE) {	

			$this->db->order_by('id','DESC');
			$query = $this->db->get('news');

			return $query->result_array();
		}

		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}

	public function getNews($slug){

		$query = $this->db->get_where('news', array('slug' => $slug, 'post' => 1));
		return $query->row_array();
	}

	public function activeNews(){

		$data = array(
	        'post' => $this->post
		);

		$this->db->where('slug', $this->slug);
		return $this->db->update('news', $data);
	}

	public function deleteNews(){

		$this->db->where('slug', $this->slug);
		return $this->db->delete('news');
	}
}