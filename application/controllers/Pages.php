<?php
	class Pages extends CI_Controller{
		public function view($page = 'users/login'){
			$var = $this->session->userdata;
 
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php' || $var['logged_in']!=false)){
				show_404();
			}
		
			$data['title'] = 'snitadmin';
	
		 
		 
          
			$this->load->view('pages/'.$page, $data);

 
 
		}
	}


