<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function slides() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->load->view('admin/layout/header');
		$this->load->view('crud/slides/index');
		$this->load->view('admin/layout/footer');
	}

	public function edit_slides($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['slide'] = $this->slide->get_slides($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/slides/edit', $data);
		$this->load->view('admin/layout/footer');
	}


	public function mission() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->load->view('admin/layout/header');
		$this->load->view('crud/mission/index');
		$this->load->view('admin/layout/footer');
	}

	public function view_mission($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['mission'] = $this->mission->get_mission($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/mission/view', $data);
		$this->load->view('admin/layout/footer');
	}

	public function edit_mission($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['mission'] = $this->mission->get_mission($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/mission/edit', $data);
		$this->load->view('admin/layout/footer');
	}

	public function cpart() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->load->view('admin/layout/header');
		$this->load->view('crud/cpart/index');
		$this->load->view('admin/layout/footer');
	}

	public function view_cpart($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['cpart'] = $this->feed->get_feed($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/cpart/view', $data);
		$this->load->view('admin/layout/footer');
	}

	public function edit_cpart($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['cpart'] = $this->feed->get_feed($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/cpart/edit', $data);
		$this->load->view('admin/layout/footer');
	}

	public function speech() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->load->view('admin/layout/header');
		$this->load->view('crud/speech/index');
		$this->load->view('admin/layout/footer');
	}

	public function edit_speech($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['speech'] = $this->speech->get_speech($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/speech/edit', $data);
		$this->load->view('admin/layout/footer');
	}

	public function community() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->load->view('admin/layout/header');
		$this->load->view('crud/community/index');
		$this->load->view('admin/layout/footer');
	}

	public function view_community($name){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['community'] = $this->community->get_community($name);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/community/view', $data);
		$this->load->view('admin/layout/footer');
	}

	public function edit_community($name){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['community'] = $this->community->get_community($name);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/community/edit', $data);
		$this->load->view('admin/layout/footer');
	}

	public function fonctionnement() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->load->view('admin/layout/header');
		$this->load->view('crud/fonctionnement/index');
		$this->load->view('admin/layout/footer');
	}

	public function edit_fonctionnement($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['fonctionnement'] = $this->fonctionnement->get_fonctionnement($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/fonctionnement/edit', $data);
		$this->load->view('admin/layout/footer');
	}


	public function view_fonctionnement($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['fonctionnement'] = $this->fonctionnement->get_fonctionnement($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/fonctionnement/view', $data);
		$this->load->view('admin/layout/footer');
	}

	public function presentation() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->load->view('admin/layout/header');
		$this->load->view('crud/presentation/index');
		$this->load->view('admin/layout/footer');
	}

	public function edit_presentation($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['presentation'] = $this->presentation->get_presentation($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/presentation/edit', $data);
		$this->load->view('admin/layout/footer');
	}


	public function view_presentation($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['presentation'] = $this->presentation->get_presentation($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/presentation/view', $data);
		$this->load->view('admin/layout/footer');
	}


	public function hierachie() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->load->view('admin/layout/header');
		$this->load->view('crud/hierachie/index');
		$this->load->view('admin/layout/footer');
	}

	public function edit_hierachie($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['hierachie'] = $this->hierachie->get_hierachie($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/hierachie/edit', $data);
		$this->load->view('admin/layout/footer');
	}


	public function view_hierachie($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['hierachie'] = $this->hierachie->get_hierachie($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/hierachie/view', $data);
		$this->load->view('admin/layout/footer');
	}

	public function news() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->load->view('admin/layout/header');
		$this->load->view('crud/news/index');
		$this->load->view('admin/layout/footer');
	}

	public function edit_news($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['news'] = $this->news->get_news($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/news/edit', $data);
		$this->load->view('admin/layout/footer');
	}


	public function view_news($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['news'] = $this->news->get_news($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/news/view', $data);
		$this->load->view('admin/layout/footer');
	}

	public function events() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->load->view('admin/layout/header');
		$this->load->view('crud/events/index');
		$this->load->view('admin/layout/footer');
	}

	public function edit_events($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['events'] = $this->events->get_events($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/events/edit', $data);
		$this->load->view('admin/layout/footer');
	}


	public function view_events($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['events'] = $this->events->get_events($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/events/view', $data);
		$this->load->view('admin/layout/footer');
	}

	public function archives() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->load->view('admin/layout/header');
		$this->load->view('crud/archives/index');
		$this->load->view('admin/layout/footer');
	}

	public function edit_archives($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['archives'] = $this->archives->get_archives($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/archives/edit', $data);
		$this->load->view('admin/layout/footer');
	}


	public function view_archives($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$data['archives'] = $this->archives->get_archives($slug);

		$this->load->view('admin/layout/header');
		$this->load->view('crud/archives/view', $data);
		$this->load->view('admin/layout/footer');
	}

	public function newsletter() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->session->set_flashdata('newsletter', 'Verfier les nouveaux emails enregistrer');

		$this->load->view('admin/layout/header');
		$this->load->view('crud/newsletter/index');
		$this->load->view('admin/layout/footer');
	}

	public function manage_users() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->load->view('admin/layout/header');
		$this->load->view('crud/manage_users');
		$this->load->view('admin/layout/footer');
	}

	//******************************************//
				//UPLOADING SLIDES//
	//******************************************//
	public function upload_slide() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$config['upload_path']          = './uploads/slides';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']			= TRUE;
        $config['file_ext_tolower']		= TRUE;

        $this->load->library('upload', $config);

		$this->form_validation->set_rules('title', 'Titre', 'trim');
		$this->form_validation->set_rules('content', 'Contenue', 'trim|required');
			
		if (!$this->upload->do_upload('url') && $this->form_validation->run() == FALSE) {

			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/layout/header');
			$this->load->view('crud/slides/index',$error);
			$this->load->view('admin/layout/footer');

		} else {

			$title     	= $this->input->post('title');
			$content 	= $this->input->post('content');

			$this->slide->setUrl($this->upload->data('file_name'));
			$this->slide->setTitle($title);
			$this->slide->setContent($content);
			$this->slide->setSlug(url_title(uniqid()));
			$this->slide->setPost(FALSE);
			$this->slide->setDate();

			$this->slide->createSlide();

			redirect('admin/slides');
		}
	}

	public function update_slide(){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$config['upload_path']          = './uploads/slides';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']			= TRUE;
        $config['file_ext_tolower']		= TRUE;

        $this->load->library('upload', $config);

		$this->form_validation->set_rules('title', 'Titre', 'trim');
		$this->form_validation->set_rules('content', 'Contenue', 'trim|required');
			
		if (!$this->upload->do_upload('url') && $this->form_validation->run() == FALSE) {

			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/layout/header');
			$this->load->view('crud/slides/index',$error);
			$this->load->view('admin/layout/footer');

		} else {

			$title     	= $this->input->post('title');
			$content 	= $this->input->post('content');

			$this->slide->setUrl($this->upload->data('file_name'));
			$this->slide->setTitle($title);
			$this->slide->setContent($content);
			$this->slide->setSlug(url_title(uniqid()));
			$this->slide->setPost(FALSE);
			$this->slide->setDate();

			$this->slide->updateSlide();

			redirect('admin/slides');
		}
	}


	public function active_slide($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->slide->setPost(TRUE);
		$this->slide->setSlug($slug);
		$this->slide->activeSlide();
		
		redirect('admin/slides');
	}

	public function desactive_slide($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->slide->setPost(FALSE);
		$this->slide->setSlug($slug);
		$this->slide->activeSlide();
		
		redirect('admin/slides');
	}

	public function delete_slide($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->slide->setSlug($slug);
		$this->slide->deleteSlide();
		
		redirect('admin/slides');
	}

	//******************************************//
				//UPLOADING MISSIONS//
	//******************************************//

	public function upload_mission() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$config['upload_path']          = './uploads/mission';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']			= TRUE;
        $config['file_ext_tolower']		= TRUE;

        $this->load->library('upload', $config);

		$this->form_validation->set_rules('title', 'Titre', 'trim|required');
		$this->form_validation->set_rules('categorie', 'Categorie', 'trim|required');
		$this->form_validation->set_rules('description', 'Contenue', 'trim|required');
			
		if (!$this->upload->do_upload('url') && $this->form_validation->run() == FALSE) {

			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/layout/header');
			$this->load->view('crud/mission/index',$error);
			$this->load->view('admin/layout/footer');

		} else {

			$title     		= $this->input->post('title');
			$categorie     	= $this->input->post('categorie');
			$description 	= $this->input->post('description');

			$this->mission->setUrl($this->upload->data('file_name'));
			$this->mission->setTitle($title);
			$this->mission->setCategorie($categorie);
			$this->mission->setDescription($description);
			$this->mission->setPost(FALSE);
			$this->mission->setSlug(uniqid());
			$this->mission->setDate();

			$this->mission->createMission();

			redirect('admin/mission');
		}
	}

	public function update_mission() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$config['upload_path']          = './uploads/mission';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']			= TRUE;
        $config['file_ext_tolower']		= TRUE;

        $this->load->library('upload', $config);

		$this->form_validation->set_rules('title', 'Titre', 'trim|required');
		$this->form_validation->set_rules('categorie', 'Categorie', 'trim|required');
		$this->form_validation->set_rules('description', 'Contenue', 'trim|required');
			
		if (!$this->upload->do_upload('url') && $this->form_validation->run() == FALSE) {

			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/layout/header');
			$this->load->view('crud/mission/index',$error);
			$this->load->view('admin/layout/footer');

		} else {

			$title     		= $this->input->post('title');
			$categorie     	= $this->input->post('categorie');
			$description 	= $this->input->post('description');

			$this->mission->setUrl($this->upload->data('file_name'));
			$this->mission->setTitle($title);
			$this->mission->setCategorie($categorie);
			$this->mission->setDescription($description);
			$this->mission->setPost(FALSE);
			$this->mission->setSlug(uniqid());
			$this->mission->setDate();

			$this->mission->updateMission();

			redirect('admin/mission');
		}
	}

	public function active_mission($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->mission->setPost(TRUE);
		$this->mission->setSlug($slug);
		$this->mission->activeMission();
		
		redirect('admin/mission');
	}

	public function desactive_mission($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->mission->setPost(FALSE);
		$this->mission->setSlug($slug);
		$this->mission->activeMission();
		
		redirect('admin/mission');
	}

	public function delete_mission($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->mission->setSlug($slug);
		$this->mission->deleteMission();
		
		redirect('admin/mission');
	}


	//******************************************//
				//UPLOADING SPEECH//
	//******************************************//

	public function upload_speech() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->form_validation->set_rules('speaker', 'Nom', 'trim|required');
		$this->form_validation->set_rules('role', 'Role', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
			
		if ($this->form_validation->run() == FALSE) {


			$this->load->view('admin/layout/header');
			$this->load->view('crud/speech/index');
			$this->load->view('admin/layout/footer');
		} else {

			$speaker     			= $this->input->post('speaker');
			$role     				= $this->input->post('role');
			$description 			= $this->input->post('description');
			$color_text 			= $this->input->post('color_text');
			$color_description 		= $this->input->post('color_description');

			$this->speech->setSpeaker($speaker);
			$this->speech->setRole($role);
			$this->speech->setDescription($description);
			$this->speech->setColorTitle($color_text);
			$this->speech->setColorDescription($color_description);
			$this->speech->setPost(FALSE);
			$this->speech->setSlug(uniqid());
			$this->speech->setDate();

			$this->speech->createSpeech();

			redirect('admin/speech');
		}
	}

	public function update_speech() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->form_validation->set_rules('speaker', 'Nom', 'trim|required');
		$this->form_validation->set_rules('role', 'Role', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
			
		if ($this->form_validation->run() == FALSE) {


			$this->load->view('admin/layout/header');
			$this->load->view('crud/speech/index');
			$this->load->view('admin/layout/footer');
		} else {

			$speaker     			= $this->input->post('speaker');
			$role     				= $this->input->post('role');
			$description 			= $this->input->post('description');
			$color_text 			= $this->input->post('color_text');
			$color_description 		= $this->input->post('color_description');

			$this->speech->setSpeaker($speaker);
			$this->speech->setRole($role);
			$this->speech->setDescription($description);
			$this->speech->setColorTitle($color_text);
			$this->speech->setColorDescription($color_description);
			$this->speech->setPost(FALSE);
			$this->speech->setSlug(uniqid());
			$this->speech->setDate();

			$this->speech->updateSpeech();

			redirect('admin/speech');
		}
	}

	public function active_speech($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->speech->setPost(TRUE);
		$this->speech->setSlug($slug);
		$this->speech->activeSpeech();
		
		redirect('admin/speech');
	}

	public function desactive_speech($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->speech->setPost(FALSE);
		$this->speech->setSlug($slug);
		$this->speech->activeSpeech();
		
		redirect('admin/speech');
	}

	public function delete_speech($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->speech->setSlug($slug);
		$this->speech->deleteSpeech();
		
		redirect('admin/speech');
	}

	//******************************************//
				//UPLOADING CPART//
	//******************************************//

	public function upload_cpart() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$config['upload_path']          = './uploads/feed';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']			= TRUE;
        $config['file_ext_tolower']		= TRUE;

        $this->load->library('upload', $config);

		$this->form_validation->set_rules('title', 'Titre', 'trim|required');
		$this->form_validation->set_rules('categorie', 'Categorie', 'trim|required');
		$this->form_validation->set_rules('description', 'Contenue', 'trim|required');
			
		if (!$this->upload->do_upload('url') && $this->form_validation->run() == FALSE) {

			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/layout/header');
			$this->load->view('crud/cpart/index',$error);
			$this->load->view('admin/layout/footer');

		} else {

			$title     		= $this->input->post('title');
			$categorie     	= $this->input->post('categorie');
			$description 	= $this->input->post('description');

			$this->feed->setUrl($this->upload->data('file_name'));
			$this->feed->setTitle($title);
			$this->feed->setCategorie($categorie);
			$this->feed->setDescription($description);
			$this->feed->setPost(FALSE);
			$this->feed->setSlug(uniqid());
			$this->feed->setDate();

			$this->feed->createFeed();

			redirect('admin/cpart');
		}
	}

	public function update_cpart() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$config['upload_path']          = './uploads/feed';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']			= TRUE;
        $config['file_ext_tolower']		= TRUE;

        $this->load->library('upload', $config);

		$this->form_validation->set_rules('title', 'Titre', 'trim|required');
		$this->form_validation->set_rules('categorie', 'Categorie', 'trim|required');
		$this->form_validation->set_rules('description', 'Contenue', 'trim|required');
			
		if (!$this->upload->do_upload('url') && $this->form_validation->run() == FALSE) {

			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/layout/header');
			$this->load->view('crud/cpart/index',$error);
			$this->load->view('admin/layout/footer');

		} else {

			$title     		= $this->input->post('title');
			$categorie     	= $this->input->post('categorie');
			$description 	= $this->input->post('description');

			$this->feed->setUrl($this->upload->data('file_name'));
			$this->feed->setTitle($title);
			$this->feed->setCategorie($categorie);
			$this->feed->setDescription($description);
			$this->feed->setPost(FALSE);
			$this->feed->setSlug(uniqid());
			$this->feed->setDate();

			$this->feed->updateFeed();

			redirect('admin/cpart');
		}
	}

	public function active_cpart($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->feed->setPost(TRUE);
		$this->feed->setSlug($slug);
		$this->feed->activeFeed();
		
		redirect('admin/cpart');
	}

	public function desactive_cpart($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->feed->setPost(FALSE);
		$this->feed->setSlug($slug);
		$this->feed->activeFeed();
		
		redirect('admin/cpart');
	}

	public function delete_cpart($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->feed->setSlug($slug);
		$this->feed->deleteFeed();
		
		redirect('admin/cpart');
	}

	//******************************************//
				//UPLOADING COMMUNITY//
	//******************************************//

	public function upload_community() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$config['upload_path']          = './uploads/community';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']			= TRUE;
        $config['file_ext_tolower']		= TRUE;

        $this->load->library('upload', $config);

		$this->form_validation->set_rules('name', 'Nom', 'trim|required');
		$this->form_validation->set_rules('denomination', 'Denomination', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
			
		if (!$this->upload->do_upload('url') && $this->form_validation->run() == FALSE) {

			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/layout/header');
			$this->load->view('crud/community/index',$error);
			$this->load->view('admin/layout/footer');

		} else {

			$name     			= $this->input->post('name');
			$denomination     	= $this->input->post('denomination');
			$description 		= $this->input->post('description');

			$this->community->setUrl($this->upload->data('file_name'));
			$this->community->setName($name);
			$this->community->setDenomination($denomination);
			$this->community->setDescription($description);
			$this->community->setPost(FALSE);
			$this->community->setDate();

			$this->community->createCommunity();

			redirect('admin/community');
		}
	}

		public function update_community() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$config['upload_path']          = './uploads/community';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']			= TRUE;
        $config['file_ext_tolower']		= TRUE;

        $this->load->library('upload', $config);

		$this->form_validation->set_rules('name', 'Nom', 'trim|required');
		$this->form_validation->set_rules('denomination', 'Denomination', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
			
		if (!$this->upload->do_upload('url') && $this->form_validation->run() == FALSE) {

			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/layout/header');
			$this->load->view('crud/community/index',$error);
			$this->load->view('admin/layout/footer');

		} else {

			$name     			= $this->input->post('name');
			$denomination     	= $this->input->post('denomination');
			$description 		= $this->input->post('description');

			$this->community->setUrl($this->upload->data('file_name'));
			$this->community->setName($name);
			$this->community->setDenomination($denomination);
			$this->community->setDescription($description);
			$this->community->setPost(FALSE);
			$this->community->setDate();

			$this->community->updateCommunity();

			redirect('admin/community');
		}
	}


	public function active_community($name){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->community->setPost(TRUE);
		$this->community->setName($name);
		$this->community->activecommunity();
		
		redirect('admin/community');
	}

	public function desactive_community($name){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->community->setPost(FALSE);
		$this->community->setName($name);
		$this->community->activeCommunity();
		
		redirect('admin/community');
	}

	public function delete_community($name){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->community->setName($name);
		$this->community->deleteCommunity();
		
		redirect('admin/community');
	}


	//******************************************//
				//UPLOADING ABOUT PRESENTATION//
	//******************************************//

	public function upload_about_presentation() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->form_validation->set_rules('historique', 'Historique', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('mission', 'Mission', 'trim|required');
		$this->form_validation->set_rules('symbole', 'Symbole', 'trim|required');
		$this->form_validation->set_rules('vision', 'Vision', 'trim|required');
			
		if ($this->form_validation->run() == FALSE) {


			$this->load->view('admin/layout/header');
			$this->load->view('crud/presentation/index');
			$this->load->view('admin/layout/footer');
		} else {

			$historique     = $this->input->post('historique');
			$status     	= $this->input->post('status');
			$mission 		= $this->input->post('mission');
			$symbole 		= $this->input->post('symbole');
			$vision 		= $this->input->post('vision');

			$this->presentation->setHistorique($historique);
			$this->presentation->setStatus($status);
			$this->presentation->setMission($mission);
			$this->presentation->setSymbole($symbole);
			$this->presentation->setVision($vision);
			$this->presentation->setPost(FALSE);
			$this->presentation->setSlug(uniqid());
			$this->presentation->setDate();

			$this->presentation->createPresentation();

			redirect('admin/about');
		}
	}

	public function update_about_presentation() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->form_validation->set_rules('historique', 'Historique', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('mission', 'Mission', 'trim|required');
		$this->form_validation->set_rules('symbole', 'Symbole', 'trim|required');
		$this->form_validation->set_rules('vision', 'Vision', 'trim|required');
			
		if ($this->form_validation->run() == FALSE) {


			$this->load->view('admin/layout/header');
			$this->load->view('crud/presentation/index');
			$this->load->view('admin/layout/footer');
		} else {

			$historique     = $this->input->post('historique');
			$status     	= $this->input->post('status');
			$mission 		= $this->input->post('mission');
			$symbole 		= $this->input->post('symbole');
			$vision 		= $this->input->post('vision');

			$this->presentation->setHistorique($historique);
			$this->presentation->setStatus($status);
			$this->presentation->setMission($mission);
			$this->presentation->setSymbole($symbole);
			$this->presentation->setVision($vision);
			$this->presentation->setPost(FALSE);
			$this->presentation->setSlug(uniqid());
			$this->presentation->setDate();

			$this->presentation->updatePresentation();

			redirect('admin/about');
		}
	}

	public function active_about_presentation($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->presentation->setPost(TRUE);
		$this->presentation->setSlug($slug);
		$this->presentation->activepresentation();
		
		redirect('admin/about');
	}

	public function desactive_about_presentation($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->presentation->setPost(FALSE);
		$this->presentation->setSlug($slug);
		$this->presentation->activepresentation();
		
		redirect('admin/about');
	}

	public function delete_about_presentation($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->presentation->setSlug($slug);
		$this->presentation->deletepresentation();
		
		redirect('admin/about');
	}


	//******************************************//
				//UPLOADING ABOUT FONCTIONNEMENT//
	//******************************************//

	public function upload_about_fonctionnement() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->form_validation->set_rules('structure', 'structure', 'trim|required');
		$this->form_validation->set_rules('departement', 'departement', 'trim|required');
		$this->form_validation->set_rules('organisme', 'organisme', 'trim|required');
		
			
		if ($this->form_validation->run() == FALSE) {


			$this->load->view('admin/layout/header');
			$this->load->view('crud/fonctionnement/index');
			$this->load->view('admin/layout/footer');
		} else {

			$structure     = $this->input->post('structure');
			$departement    = $this->input->post('departement');
			$organisme 		= $this->input->post('organisme');
			$symbole 		= $this->input->post('symbole');
			$vision 		= $this->input->post('vision');

			$this->fonctionnement->setStructure($structure);
			$this->fonctionnement->setDepartement($departement);
			$this->fonctionnement->setOrganisme($organisme);
			$this->fonctionnement->setPost(FALSE);
			$this->fonctionnement->setSlug(uniqid());
			$this->fonctionnement->setDate();

			$this->fonctionnement->createfonctionnement();

			redirect('admin/about');
		}
	}

	public function update_about_fonctionnement() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->form_validation->set_rules('structure', 'Historique', 'trim|required');
		$this->form_validation->set_rules('departement', 'Status', 'trim|required');
		$this->form_validation->set_rules('organisme', 'organisme', 'trim|required');
		
			
		if ($this->form_validation->run() == FALSE) {


			$this->load->view('admin/layout/header');
			$this->load->view('crud/fonctionnement/index');
			$this->load->view('admin/layout/footer');
		} else {

			$structure     = $this->input->post('structure');
			$departement     	= $this->input->post('departement');
			$organisme 		= $this->input->post('organisme');
			$symbole 		= $this->input->post('symbole');
			$vision 		= $this->input->post('vision');

			$this->fonctionnement->setStructure($structure);
			$this->fonctionnement->setDepartement($departement);
			$this->fonctionnement->setOrganisme($organisme);
			$this->fonctionnement->setPost(FALSE);
			$this->fonctionnement->setSlug(uniqid());
			$this->fonctionnement->setDate();

			$this->fonctionnement->updateFonctionnement();

			redirect('admin/about');
		}
	}

	public function active_about_fonctionnement($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->fonctionnement->setPost(TRUE);
		$this->fonctionnement->setSlug($slug);
		$this->fonctionnement->activeFonctionnement();
		
		redirect('admin/about');
	}

	public function desactive_about_fonctionnement($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->fonctionnement->setPost(FALSE);
		$this->fonctionnement->setSlug($slug);
		$this->fonctionnement->activeFonctionnement();
		
		redirect('admin/about');
	}

	public function delete_about_fonctionnement($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->fonctionnement->setSlug($slug);
		$this->fonctionnement->deleteFonctionnement();
		
		redirect('admin/about');
	}

	//******************************************//
				//UPLOADING ABOUT HIERACHIE//
	//******************************************//

	public function upload_hierachie() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$config['upload_path']          = './uploads/hierachie';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']			= TRUE;
        $config['file_ext_tolower']		= TRUE;

        $this->load->library('upload', $config);

		$this->form_validation->set_rules('nom', 'Nom', 'trim|required');
		$this->form_validation->set_rules('fonction', 'Fonction', 'trim|required');
		$this->form_validation->set_rules('presentation', 'Présentation', 'trim|required');
			
		if (!$this->upload->do_upload('profile') && $this->form_validation->run() == FALSE) {

			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/layout/header');
			$this->load->view('crud/hierachie/index',$error);
			$this->load->view('admin/layout/footer');

		} else {

			$nom     		= $this->input->post('nom');
			$fonction     	= $this->input->post('fonction');
			$presentation 	= $this->input->post('presentation');

			$this->hierachie->setProfile($this->upload->data('file_name'));
			$this->hierachie->setNom($nom);
			$this->hierachie->setFonction($fonction);
			$this->hierachie->setPresentation($presentation);
			$this->hierachie->setPost(FALSE);
			$this->hierachie->setSlug(uniqid());
			$this->hierachie->setDate();

			$this->hierachie->createHierachie();

			redirect('admin/about');
		}
	}

	public function update_hierachie() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$config['upload_path']          = './uploads/hierachie';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']			= TRUE;
        $config['file_ext_tolower']		= TRUE;

        $this->load->library('upload', $config);

		$this->form_validation->set_rules('nom', 'Nom', 'trim|required');
		$this->form_validation->set_rules('fonction', 'Fonction', 'trim|required');
		$this->form_validation->set_rules('presentation', 'Présentation', 'trim|required');
			
		if (!$this->upload->do_upload('profile') && $this->form_validation->run() == FALSE) {

			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/layout/header');
			$this->load->view('crud/hierachie/index',$error);
			$this->load->view('admin/layout/footer');

		} else {

			$nom     		= $this->input->post('nom');
			$fonction     	= $this->input->post('fonction');
			$presentation 	= $this->input->post('presentation');
			
			$this->hierachie->setProfile($this->upload->data('file_name'));
			$this->hierachie->setNom($nom);
			$this->hierachie->setFonction($fonction);
			$this->hierachie->setPresentation($presentation);
			$this->hierachie->setPost(FALSE);
			$this->hierachie->setSlug(uniqid());
			$this->hierachie->setDate();

			$this->hierachie->updateHierachie();

			redirect('admin/about');
		}
	}

	public function active_hierachie($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->hierachie->setPost(TRUE);
		$this->hierachie->setSlug($slug);
		$this->hierachie->activeHierachie();
		
		redirect('admin/about');
	}

	public function desactive_hierachie($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->hierachie->setPost(FALSE);
		$this->hierachie->setSlug($slug);
		$this->hierachie->activeHierachie();
		
		redirect('admin/about');
	}

	public function delete_hierachie($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->hierachie->setSlug($slug);
		$this->hierachie->deleteHierachie();
		
		redirect('admin/about');
	}


	//******************************************//
				//UPLOADING ABOUT NEWS//
	//******************************************//

	public function upload_news() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$config['upload_path']          = './uploads/news';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']			= TRUE;
        $config['file_ext_tolower']		= TRUE;

        $this->load->library('upload', $config);

		$this->form_validation->set_rules('title', 'Titre', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
			
		if (!$this->upload->do_upload('url') && $this->form_validation->run() == FALSE) {

			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/layout/header');
			$this->load->view('crud/news/index',$error);
			$this->load->view('admin/layout/footer');

		} else {

			$title     		= $this->input->post('title');
			$description     	= $this->input->post('description');

			$this->news->setUrl($this->upload->data('file_name'));
			$this->news->setTitle($title);
			$this->news->setDescription($description);
			$this->news->setPost(FALSE);
			$this->news->setSlug(uniqid());
			$this->news->setDate();

			$this->news->createNews();

			redirect('admin/news');
		}
	}

	public function update_news() {

	if ($this->session->userdata('logged_in') == FALSE && 
		is_null($this->session->userdata('username'))) {redirect('login');
	} 

		$config['upload_path']          = './uploads/news';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']			= TRUE;
        $config['file_ext_tolower']		= TRUE;

        $this->load->library('upload', $config);

		$this->form_validation->set_rules('title', 'Titre', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
			
		if (!$this->upload->do_upload('url') && $this->form_validation->run() == FALSE) {

			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/layout/header');
			$this->load->view('crud/news/index',$error);
			$this->load->view('admin/layout/footer');

		} else {

			$title     		= $this->input->post('title');
			$description     	= $this->input->post('description');

			$this->news->setUrl($this->upload->data('file_name'));
			$this->news->setTitle($title);
			$this->news->setDescription($description);
			$this->news->setPost(FALSE);
			$this->news->setSlug(uniqid());
			$this->news->setDate();

			$this->news->updateNews();

			redirect('admin/news');
		}
	}

	public function active_news($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->news->setPost(TRUE);
		$this->news->setSlug($slug);
		$this->news->activeNews();
		
		redirect('admin/news');
	}

	public function desactive_news($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->news->setPost(FALSE);
		$this->news->setSlug($slug);
		$this->news->activeNews();
		
		redirect('admin/news');
	}

	public function delete_news($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->news->setSlug($slug);
		$this->news->deleteNews();
		
		redirect('admin/news');
	}


	//******************************************//
			//UPLOADING ABOUT EVENTS//
	//******************************************//

	public function upload_events() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->form_validation->set_rules('title', 'Titre', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
		$this->form_validation->set_rules('location', 'Localisation', 'trim|required');
		$this->form_validation->set_rules('categorie', 'categorie', 'trim|required');
			
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('admin/layout/header');
			$this->load->view('crud/events/index');
			$this->load->view('admin/layout/footer');
		} else {

			$title     		= $this->input->post('title');
			$description    = $this->input->post('description');
			$location 		= $this->input->post('location');
			$categorie 		= $this->input->post('categorie');
			$date_events 	= $this->input->post('date_events');
			

			$this->events->setTitle($title);
			$this->events->setDescription($description);
			$this->events->setlocation($location);
			$this->events->setCategorie($categorie);
			$this->events->setDateEvents($date_events);
			$this->events->setPost(FALSE);
			$this->events->setSlug(uniqid());
			$this->events->setDate();

			$this->events->createEvents();

			redirect('admin/events');
		}
	}

	public function update_events() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->form_validation->set_rules('title', 'Titre', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
		$this->form_validation->set_rules('location', 'Localisation', 'trim|required');
		$this->form_validation->set_rules('categorie', 'categorie', 'trim|required');
			
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('admin/layout/header');
			$this->load->view('crud/events/index');
			$this->load->view('admin/layout/footer');
		} else {

			$title     		= $this->input->post('title');
			$description    = $this->input->post('description');
			$location 		= $this->input->post('location');
			$categorie 		= $this->input->post('categorie');
			$date_events 	= $this->input->post('date_events');
			

			$this->events->setTitle($title);
			$this->events->setDescription($description);
			$this->events->setlocation($location);
			$this->events->setCategorie($categorie);
			$this->events->setDateEvents($date_events);
			$this->events->setPost(FALSE);
			$this->events->setSlug(uniqid());
			$this->events->setDate();

			$this->events->updateEvents();

			redirect('admin/events');
		}
	}

	public function active_events($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->events->setPost(TRUE);
		$this->events->setSlug($slug);
		$this->events->activeevents();
		
		redirect('admin/events');
	}

	public function desactive_events($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->events->setPost(FALSE);
		$this->events->setSlug($slug);
		$this->events->activeEvents();
		
		redirect('admin/events');
	}

	public function delete_events($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->events->setSlug($slug);
		$this->events->deleteEvents();
		
		redirect('admin/events');
	}

	//******************************************//
				//UPLOADING MISSIONS//
	//******************************************//

	public function upload_archives() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$config['upload_path']          = './uploads/archives';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']			= TRUE;
        $config['file_ext_tolower']		= TRUE;

        $this->load->library('upload', $config);

		$this->form_validation->set_rules('title', 'Titre', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
		$this->form_validation->set_rules('location', 'Location', 'trim|required');
			
		if (!$this->upload->do_upload('image') && $this->form_validation->run() == FALSE) {

			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/layout/header');
			$this->load->view('crud/archives/index',$error);
			$this->load->view('admin/layout/footer');

		} else {

			$title     		= $this->input->post('title');
			$description    = $this->input->post('description');
			$location 		= $this->input->post('location');

			$this->archives->setImage($this->upload->data('file_name'));
			$this->archives->setTitle($title);
			$this->archives->setDescription($description);
			$this->archives->setlocation($location);
			$this->archives->setPost(FALSE);
			$this->archives->setSlug(uniqid());
			$this->archives->setDate();

			$this->archives->createArchives();

			redirect('admin/archives');
		}
	}

	public function update_archives() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$config['upload_path']          = './uploads/archives';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']			= TRUE;
        $config['file_ext_tolower']		= TRUE;

        $this->load->library('upload', $config);

		$this->form_validation->set_rules('title', 'Titre', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
		$this->form_validation->set_rules('location', 'Location', 'trim|required');
			
		if (!$this->upload->do_upload('image') && $this->form_validation->run() == FALSE) {

			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/layout/header');
			$this->load->view('crud/archives/index',$error);
			$this->load->view('admin/layout/footer');

		} else {

			$title     		= $this->input->post('title');
			$description    = $this->input->post('description');
			$location 		= $this->input->post('location');

			$this->archives->setImage($this->upload->data('file_name'));
			$this->archives->setTitle($title);
			$this->archives->setDescription($description);
			$this->archives->setlocation($location);
			$this->archives->setPost(FALSE);
			$this->archives->setSlug(uniqid());
			$this->archives->setDate();

			$this->archives->updateArchives();

			redirect('admin/archives');
		}
	}

	public function active_archives($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->archives->setPost(TRUE);
		$this->archives->setSlug($slug);
		$this->archives->activeArchives();
		
		redirect('admin/archives');
	}

	public function desactive_archives($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->archives->setPost(FALSE);
		$this->archives->setSlug($slug);
		$this->archives->activeArchives();
		
		redirect('admin/archives');
	}

	public function delete_archives($slug){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->archives->setSlug($slug);
		$this->archives->deleteArchives();
		
		redirect('admin/archives');
	}

	//******************************************//
				//UPLOADING NEWSLETTER//
	//******************************************//

	public function upload_newsletter() {

		$this->form_validation->set_rules('name', 'Nom', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'callback_check_email_exists|trim|required');
			
		if ($this->form_validation->run() == FALSE) {

			$newdata = array(

		        'name'  		=> $this->input->post('name') ,
		        'email'     	=> $this->input->post('email'),
		        'error_email' 	=> TRUE
			);
			$this->session->set_userdata($newdata);

			redirect('feed?msg=error_email#email_error');

		} else {

			$name     		= $this->input->post('name');
			$email    		= $this->input->post('email');
			$status 		= $this->input->post('status');

			$this->newsletter->setName($name);
			$this->newsletter->setEmail($email);
			$this->newsletter->setStatus($status);
			$this->newsletter->setPost(FALSE);
			$this->newsletter->setDate();

			$this->newsletter->createNewsletter();

			$newdata = array(

		        'name'  		=> $name ,
		        'email'     	=> $email,
		        'news_accept' 	=> TRUE
			);
			
			$this->session->set_userdata($newdata);

			redirect('feed?msg=news_accept#newsletter');
		}
	}

	public function update_newsletter() {

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->form_validation->set_rules('name', 'Nom', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
			
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('admin/layout/header');
			$this->load->view('crud/newsletter/index',$error);
			$this->load->view('admin/layout/footer');

		} else {

			$name     		= $this->input->post('name');
			$email    		= $this->input->post('email');
			$status 		= $this->input->post('status');

			$this->newsletter->setName($name);
			$this->newsletter->setEmail($email);
			$this->newsletter->setStatus($status);
			$this->newsletter->setPost(FALSE);
			$this->newsletter->setDate();

			$this->newsletter->updateNewsletter();

			redirect('admin/newsletter');
		}
	}

	public function active_newsletter($email){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->newsletter->setPost(TRUE);
		$this->newsletter->setEmail($email);
		$this->newsletter->activeNewsletter();
		
		redirect('admin/newsletter');
	}

	public function desactive_newsletter($email){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->newsletter->setPost(FALSE);
		$this->newsletter->setEmail($email);
		$this->newsletter->activeNewsletter();
		
		redirect('admin/newsletter');
	}

	public function delete_newsletter($email){

		if ($this->session->userdata('logged_in') == FALSE && 
			is_null($this->session->userdata('username'))) {redirect('login');
		} 

		$this->newsletter->setEmail($email);
		$this->newsletter->deletENewsletter();
		
		redirect('admin/newsletter');
	}

	function check_email_exists($email){

		$this->form_validation->set_message('check_email_exists', 'Ce email est déjà utilisé');

		if ($this->newsletter->check_email_exists($email)) {
			
			return true;
		}else{

			return false;
		}
	}
}
