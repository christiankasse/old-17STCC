<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hierachie_model extends CI_Model {

	private $profile;
	private $nom;
	private $fonction;
	private $provenance;
	private $post;
	private $created_at ;
	private $slug;
	private $mandat;

	/**
	 * @param mixed $profile
	 *
	 * @return self
	 */
	public function setProfile($profile) {

		$this->profile = $profile;

		return $this;
	}

	/**
	 * @param mixed $mandat
	 *
	 * @return self
	 */
	public function setMandat($mandat) {

		$this->mandat = $mandat;

		return $this;
	}

	/**
	 * @param mixed $nom
	 *
	 * @return self
	 */
	public function setNom($nom) {

		$this->nom = $nom;

		return $this;
	}

	/**
	 * @param mixed $fonction
	 *
	 * @return self
	 */
	public function setFonction($fonction) {

		$this->fonction = $fonction;

		return $this;
	}

	/**
	 * @param mixed $provenance
	 *
	 * @return self
	 */
	public function setProvenance($provenance) {

		$this->provenance = $provenance;

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

	public function createHierachie() {

		$data = array(

			'profile'   		=> $this->profile,
			'nom'   			=> $this->nom,
			'fonction'	 		=> $this->fonction,
			'provenance'      	=> $this->provenance,
			'slug'        		=> $this->slug,
			'post'        		=> $this->post,
			'mandat'        	=> $this->mandat,
			'created_at' 		=> $this->created_at,
		);

		$this->db->insert('about_hierachie', $data);
		return $this->db->insert_id();
	}

	public function updateHierachie() {

		$data = array(

			'profile'   		=> $this->profile,
			'nom'   			=> $this->nom,
			'fonction'	 		=> $this->fonction,
			'provenance'      	=> $this->provenance,
			'slug'        		=> $this->slug,
			'post'        		=> $this->post,
			'mandat'        	=> $this->mandat,
			'created_at' 		=> $this->created_at,
		);

		$this->db->where('slug', $this->input->post('slug'));
		return $this->db->update('about_hierachie', $data);
	}

	public function hierachie() {

		$this->db->select('*');
		$this->db->from('about_hierachie');
		// $this->db->limit(5);
		$this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}

	public function getHierachie() {

		$this->db->select('*');
		$this->db->from('about_hierachie');
		$this->db->where('post', 1);
		$this->db->where('mandat', 'MN');
		return $query = $this->db->get();
	}

	public function getProvinceHierachie() {

		$this->db->select('*');
		$this->db->from('about_hierachie');
		$this->db->where('post', 1);
		$this->db->where('mandat', 'MP');
		return $query = $this->db->get();
	}

	public function get_hierachie($slug = FALSE){

		if ($slug === FALSE) {	

			$this->db->order_by('id','DESC');
			$query = $this->db->get('about_hierachie');

			return $query->result_array();
		}

		$query = $this->db->get_where('about_hierachie', array('slug' => $slug));
		return $query->row_array();
	}


	public function getProfile($slug){

		$query = $this->db->get_where('about_hierachie', array('slug' => $slug, 'post' => 1));
		return $query->row_array();
	}

	public function activeHierachie(){

		$data = array(
	        'post' => $this->post
		);

		$this->db->where('slug', $this->slug);
		return $this->db->update('about_hierachie', $data);
	}

	public function deleteHierachie(){

		$this->db->where('slug', $this->slug);
		return $this->db->delete('about_hierachie');
	}
}