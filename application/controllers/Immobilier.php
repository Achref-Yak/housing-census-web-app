<?php
	class Immobilier extends CI_Controller{
		public function index($offset = 0){	
	 
			$data['gestion'] = $this->Immobiliere_model->get_gestion_all();
			
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidenav');
			$this->load->view('fichetechnique/index', $data);
		}

		public function create(){
			$this->session->set_flashdata('imm_created', 'Immobiliere ajouté');

			$data['title'] = 'Create Post';

			$data['gestion'] = $this->Immobiliere_model->get_gestion_all();

			$this->form_validation->set_rules('TF', 'TF', 'required');
			$this->form_validation->set_rules('Zone', 'Zone', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('templates/sidenav');
				$this->load->view('immobilier/create', $data);
		 
			} else {

				$this->Immobiliere_model->create_immeuble();
				redirect("immobilier/create");
			
			}
		}
		
		public function create_prop_bien($im, $tf){
		 
				$this->session->set_flashdata('prop_bien', 'Proprietaire du bien immobiliere ajouté');
				$this->Immobiliere_model->create_prop_bien($im);
				redirect("immobilier/$im/$tf");
			
	 
		}
   
		public function create_prop_reglement($im, $tf){
		 

			$this->Immobiliere_model->create_prop_reglement($im);
			$this->session->set_flashdata('prop_reglement', 'Reglement Proprietaire ajouté');
			redirect("immobilier/$im/$tf");
		
 
	}	
	
	   
	public function create_gerance($im,$id,$tf){
		 

		$this->Immobiliere_model->create_gerance($id,$im);
		$this->session->set_flashdata('create_gerance', 'Gérance ajouté');
		redirect("immobilier/$im/$tf");
	

}

        public function view($immeuble = NULL,$code_tf){
			$data['locaux'] = $this->Local_model->get_local_all($immeuble);
			$data['propbiens'] = $this->Local_model->get_propbien_all($immeuble);
			$data['propregs'] = $this->Local_model->get_propimmob_all($immeuble);
			$data['gestion'] = $this->Immobiliere_model->get_gestion_all($immeuble);
			$data['achat'] = $this->Immobiliere_model->get_achat_all($immeuble);
			$data['gerances'] = $this->Immobiliere_model->get_gerance_all($immeuble);
			$data['photos'] = $this->Photo_model->get_photos_immeuble_all($code_tf);
			

			if(empty($data['gestion'])){
				show_404();
			}
 

			$this->load->view('templates/header');
			$this->load->view('templates/sidenav');
			$this->load->view('immobilier/view', $data);
 
		}


		

		public function updategestion($im, $tf){
		

			$this->Immobiliere_model->update_gestion();

			// Set message
			$this->session->set_flashdata('post_updated', 'Your post has been updated');

			redirect("immobilier/$im/$tf");
		}

		public function updateachat($im, $tf){
		

			$this->Immobiliere_model->update_achat();

			// Set message
			$this->session->set_flashdata('post_updated', 'Your post has been updated');

			redirect("immobilier/$im/$tf");
		}

		 
	}