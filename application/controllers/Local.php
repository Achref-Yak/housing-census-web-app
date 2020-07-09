<?php
	class Local extends CI_Controller{


		public function create($im,$tf){


			$data['id'] =  $im;
			$data['tf'] =  $tf;

		 

			$this->form_validation->set_rules('TF', 'TF', 'required');
			$this->form_validation->set_rules('Zone', 'Zone', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('templates/sidenav');
				$this->load->view('local/create', $data);
		 
			} else {
				

				$this->Local_model->create_local();
				$this->load->view('templates/header');
				$this->load->view('templates/sidenav');
				$this->load->view('local/create', $data);
			
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

        public function view($id = NULL, $code_local = NULL){
 
			$data['gestion'] = $this->Local_model->get_localgestion_all($id);
			$data['dependances'] = $this->Local_model->get_dependance_all($data['gestion']['id']);
			$data['fichetechnique'] = $this->Fichetechnique_model->get_fichetechnique_byimmeuble($data['gestion']['immeuble']);
			$data['occups'] = $this->Local_model->get_occupants_all($id);
			$data['immeuble'] = $this->Immobiliere_model->get_gestion_all($data['gestion']['immeuble']);
            $data['photos'] = $this->Photo_model->get_photos_all($code_local);
			if(empty($data['gestion'])){
				show_404();
			}
 

			$this->load->view('templates/header');
			$this->load->view('templates/sidenav');
			$this->load->view('local/view', $data);
 
		}
		
		public function create_dependance($id,$im)
		{
			$this->Local_model->create_dependance($id);
			redirect('local/'.$this->input->post('local').'/'.$im);
		}

		public function update_dependance($id,$im){
		

			$this->Local_model->update_dependance($this->input->post('id'));

			// Set message
			$this->session->set_flashdata('post_updated', 'Your post has been updated');

			redirect('local/'.$id.'/'.$im);
        }
        


        public function createlocal($imId,$tf)
        {
     

			$this->Local_model->create_local();

			// Set message
			$this->session->set_flashdata('post_updated', 'Your post has been updated');

			redirect('immobilier/'.$imId.'/'.$tf);
    
        }

		public function updatelocal($id){
		

			$this->Local_model->update_gestion($id);

			// Set message
			$this->session->set_flashdata('post_updated', 'Your post has been updated');

			redirect('local/'.$this->input->post('local').'/'.$this->input->post('immeuble'));
        }
        

        public function createoccupant(){
		

			$this->Local_model->create_occupant();

			// Set message
			$this->session->set_flashdata('post_updated', 'Your post has been updated');

			redirect('local/'.$this->input->post('local').'/'.$this->input->post('immeuble'));
        }
        


		 
	}