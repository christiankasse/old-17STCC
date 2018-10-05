<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Presentation_model extends CI_Model {

	private $historique;
	private $status;
	private $mission;
	private $symbole;
	private $vision;
	private $created_at ;
	private $post;
	private $slug;

	/**
	 * @param mixed $historique
	 *
	 * @return self
	 */
	public function setHistorique($historique) {

		$this->historique = $historique;

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
	 * @param mixed $mission
	 *
	 * @return self
	 */
	public function setMission($mission) {

		$this->mission = $mission;

		return $this;
	}

	/**
	 * @param mixed $mission
	 *
	 * @return self
	 */
	public function setSymbole($symbole) {

		$this->symbole = $symbole;

		return $this;
	}

	/**
	 * @param mixed $mission
	 *
	 * @return self
	 */
	public function setVision($vision) {

		$this->vision = $vision;

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

	public function createPresentation() {

		$data = array(

			'historique'   		=> $this->historique,
			'status'   			=> $this->status,
			'mission'	 		=> $this->mission,
			'slug'        		=> $this->slug,
			'symbole'     		=> $this->symbole,
			'vision'     		=> $this->vision,
			'created_at' 		=> $this->created_at,
			'post' 				=> $this->post,
		);

		$this->db->insert('about_presentation', $data);
		return $this->db->insert_id();
	}

	public function updatePresentation() {

		$data = array(

			'historique'   		=> $this->historique,
			'status'   			=> $this->status,
			'mission'	 		=> $this->mission,
			'slug'        		=> $this->slug,
			'symbole'     		=> $this->symbole,
			'vision'     		=> $this->vision,
			'created_at' 		=> $this->created_at,
			'post' 				=> $this->post,
		);

		$this->db->where('slug', $this->input->post('slug'));
		return $this->db->update('about_presentation', $data);
	}

	public function presentation() {

		$this->db->select('*');
		$this->db->from('about_presentation');
		$this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}

	public function get_presentation($slug = FALSE){

		if ($slug === FALSE) {	

			$this->db->order_by('id','DESC');
			$query = $this->db->get('about_presentation');

			return $query->result_array();
		}

		$query = $this->db->get_where('about_presentation', array('slug' => $slug));
		return $query->row_array();
	}

	public function activePresentation(){

		$data = array(
	        'post' => $this->post
		);

		$this->db->where('slug', $this->slug);
		return $this->db->update('about_presentation', $data);
	}

	public function deletePresentation(){

		$this->db->where('slug', $this->slug);
		return $this->db->delete('about_presentation');
	}
}