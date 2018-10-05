<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Slide_model extends CI_Model {

	private $title;
	private $url;
	private $content;
	private $slug;
	private $post;
	private $created_at ;

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
	 * @param mixed $content
	 *
	 * @return self
	 */
	public function setContent($content) {

		$this->content = $content;

		return $this;
	}

	/**
	 * @param mixed $slug
	 *
	 * @return self
	 */
	public function setSlug($slug) {

		$this->slug = $slug;

		return $this;
	}

	/**
	 * @param mixed $slug
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

	public function createSlide() {

		$data = array(

			'title'   		=> $this->title,
			'url'   		=> $this->url,
			'content'	 	=> $this->content,
			'slug'        	=> url_title(uniqid()),
			'post'        	=> $this->post,
			'created_at' 	=> $this->created_at,
		);

		$this->db->insert('slides', $data);
		return $this->db->insert_id();
	}

	public function updateSlide() {

		$data = array(

			'title'   		=> $this->title,
			'url'   		=> $this->url,
			'content'	 	=> $this->content,
			'slug'        	=> url_title(uniqid()),
			'post'        	=> $this->post,
			'created_at' 	=> $this->created_at,
		);

		$this->db->where('slug', $this->input->post('slug'));
		return $this->db->update('slides', $data);
	}

	public function slides() {

		$this->db->select('*');
		$this->db->from('slides');
		$this->db->limit(6);
		$this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}

	public function get_slides($slug = FALSE){

		if ($slug === FALSE) {	

			$this->db->order_by('id','DESC');
			$query = $this->db->get('slides');

			return $query->result_array();
		}

		$query = $this->db->get_where('slides', array('slug' => $slug));
		return $query->row_array();
	}

	public function activeSlide(){

		$data = array(
	        'post' => $this->post
		);

		$this->db->where('slug', $this->slug);
		return $this->db->update('slides', $data);
	}

	public function deleteSlide(){

		$this->db->where('slug', $this->slug);
		return $this->db->delete('slides');
	}
}