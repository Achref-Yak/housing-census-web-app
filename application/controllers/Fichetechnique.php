<?php
	class Fichetechnique extends CI_Controller{
		public function index($offset = 0){	
	 
			$data['fiches'] = $this->Fichetechnique_model->get_fichetechnique_all();
			$this->load->view('templates/header', $data);
			$this->load->view('fichetechnique/index', $data);
		}

		public function create(){


			$data['title'] = 'Create Post';

 

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('fichetechnique/create', $data);
		 
			} else {
				

				$this->Fichetechnique_model->create_immeuble();

			
			}
        }
        

        public function view($slug = NULL){
			$data['fichetechnique'] = $this->Fichetechnique_model->get_fichetechnique_all($slug);
	 

			if(empty($data['fichetechnique'])){
				show_404();
			}
 

			$this->load->view('templates/header');
			$this->load->view('fichetechnique/view', $data);
 
		}

		 
	}