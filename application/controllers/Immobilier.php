<?php
	class Immobilier extends CI_Controller{
		public function index($offset = 0){	
	 
			$data['gestion'] = $this->Immobiliere_model->get_gestion_all();
			
			$this->load->view('templates/header', $data);
			$this->load->view('fichetechnique/index', $data);
		}

		public function create(){


			$data['title'] = 'Create Post';

			$data['gestion'] = $this->Immobiliere_model->get_gestion_all();

			$this->form_validation->set_rules('TF', 'TF', 'required');
			$this->form_validation->set_rules('Zone', 'Zone', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('immobilier/create', $data);
		 
			} else {

				$this->Immobiliere_model->create_immeuble();
				redirect("immobilier/create");
			
			}
		}
		
		public function create_prop_bien($im){
		 

				$this->Immobiliere_model->create_prop_bien($im);
				redirect("immobilier/$im");
			
	 
		}
   
		public function create_prop_reglement($im){
		 

			$this->Immobiliere_model->create_prop_reglement($im);
			redirect("immobilier/$im");
		
 
	}		

        public function view($immeuble = NULL){
			$data['locaux'] = $this->Local_model->get_local_all($immeuble);
			$data['propbiens'] = $this->Local_model->get_propbien_all($immeuble);
			$data['propregs'] = $this->Local_model->get_propimmob_all($immeuble);
			$data['gestion'] = $this->Immobiliere_model->get_gestion_all($immeuble);
			$data['achat'] = $this->Immobiliere_model->get_achat_all($immeuble);

			if(empty($data['gestion'])){
				show_404();
			}
 

			$this->load->view('templates/header');
			$this->load->view('immobilier/view', $data);
 
		}


		

		public function updategestion($im){
		

			$this->Immobiliere_model->update_gestion();

			// Set message
			$this->session->set_flashdata('post_updated', 'Your post has been updated');

			redirect('local/'.$im);
		}

		public function updateachat($im){
		

			$this->Immobiliere_model->update_achat();

			// Set message
			$this->session->set_flashdata('post_updated', 'Your post has been updated');

			redirect('immobilier/'.$im);
		}

		 
	}