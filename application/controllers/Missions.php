<?php
	class Missions extends CI_Controller{
		public function index($offset = 0){	
	 
			$data['missions'] = $this->Missions_model->get_missions_all();

			$this->load->view('templates/header', $data);
			$this->load->view('missions/index', $data);
		}

		public function create(){


			$data['title'] = 'Create Post';

 

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('missions/create', $data);
		 
			} else {
				

				$this->Missions_model->create_immeuble();

			
			}
        }
        

        public function view($id = NULL){
            $data['mission'] = $this->Missions_model->get_missions_all($id);
            $id = $data['mission']['Tech'];
            $data['user'] = $this->User_model->getUserById($id);
	 

			if(empty($data['mission'])){
				show_404();
			}
 

			$this->load->view('templates/header');
			$this->load->view('missions/view', $data);
 
		}

		 
	}