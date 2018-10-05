<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fonctionnement_model extends CI_Model {

	private $structure;
	private $departement;
	private $organisme;
	private $created_at ;
	private $post;
	private $slug;

	/**
	 * @param mixed $structure
	 *
	 * @return self
	 */
	public function setStructure($structure) {

		$this->structure = $structure;

		return $this;
	}

	/**
	 * @param mixed $departement
	 *
	 * @return self
	 */
	public function setDepartement($departement) {

		$this->departement = $departement;

		return $this;
	}

	/**
	 * @param mixed $organisme
	 *
	 * @return self
	 */
	public function setOrganisme($organisme) {

		$this->organisme = $organisme;

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

	public function createFonctionnement() {

		$data = array(

			'structure'   		=> $this->structure,
			'departement'   			=> $this->departement,
			'organisme'	 		=> $this->organisme,
			'slug'        		=> $this->slug,
			'created_at' 		=> $this->created_at,
			'post' 				=> $this->post,
		);

		$this->db->insert('about_fonctionnement', $data);
		return $this->db->insert_id();
	}

	public function updateFonctionnement() {

		$data = array(

			'structure'   		=> $this->structure,
			'departement'   			=> $this->departement,
			'organisme'	 		=> $this->organisme,
			'slug'        		=> $this->slug,
			'created_at' 		=> $this->created_at,
			'post' 				=> $this->post,
		);

		$this->db->where('slug', $this->input->post('slug'));
		return $this->db->update('about_fonctionnement', $data);
	}

	public function fonctionnement() {

		$this->db->select('*');
		$this->db->from('about_fonctionnement');
		$this->db->order_by('id', 'DESC');

		return $query = $this->db->get();
	}

	public function get_fonctionnement($slug = FALSE){

		if ($slug === FALSE) {	

			$this->db->order_by('id','DESC');
			$query = $this->db->get('about_fonctionnement');

			return $query->result_array();
		}

		$query = $this->db->get_where('about_fonctionnement', array('slug' => $slug));
		return $query->row_array();
	}

	public function activeFonctionnement(){

		$data = array(
	        'post' => $this->post
		);

		$this->db->where('slug', $this->slug);
		return $this->db->update('about_fonctionnement', $data);
	}

	public function deleteFonctionnement(){

		$this->db->where('slug', $this->slug);
		return $this->db->delete('about_fonctionnement');
	}
}