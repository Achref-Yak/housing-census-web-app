<?php
	class Local extends CI_Controller{


		public function create($im){


			$data['id'] =  $im;

		 

			$this->form_validation->set_rules('TF', 'TF', 'required');
			$this->form_validation->set_rules('Zone', 'Zone', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('local/create', $data);
		 
			} else {
				

				$this->Local_model->create_local();
				$this->load->view('templates/header');
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

        public function view($immeuble = NULL){
			$data['gestion'] = $this->Local_model->get_localgestion_all($immeuble);
            $data['histo'] = $this->Local_model->get_historique_all($immeuble);
            
			if(empty($data['gestion'])){
				show_404();
			}
 

			$this->load->view('templates/header');
			$this->load->view('local/view', $data);
 
        }
        


        public function createlocal($imId)
        {
     

			$this->Local_model->create_local();

			// Set message
			$this->session->set_flashdata('post_updated', 'Your post has been updated');

			redirect('local/create/'.$imId);
    
        }

		public function updatelocal($id){
		

			$this->Local_model->update_gestion();

			// Set message
			$this->session->set_flashdata('post_updated', 'Your post has been updated');

			redirect('local/'.$id);
        }
        

        public function updatehistorique($id){
		

			$this->Local_model->update_historique();

			// Set message
			$this->session->set_flashdata('post_updated', 'Your post has been updated');

			redirect('local/'.$id);
        }
        


		 
	}