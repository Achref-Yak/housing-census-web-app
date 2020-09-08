<?php
	class User_model extends CI_Model{
		public function register($enc_password){
			// User data array
			$data = array(
				'nom' => $this->input->post('nom'),
				'prenom' => $this->input->post('prenom'),
				'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $enc_password,
                'type' => $this->input->post('type')
			);

			if( $this->input->post('type')=='tech')
			{
				$data = array(
					'UserName' => $this->input->post('username'),
					'Password' =>  $enc_password,
					'nom' => $this->input->post('nom'),
					'prenom' => $this->input->post('prenom'),
					'email' => $this->input->post('email'),
					 
				);
				return $this->db->insert('technicien', $data);
			}

			// Insert user
			return $this->db->insert('users', $data);
		}
	 
		// Log user in
		public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('users');

			if($result->num_rows() == 1){
				return $result->row(0)->id;
			} else {
				return false;
			}
		}

		public function getTypeById($id)
		{
			$this->db->select('type'); 
			$this->db->from('users');   
			$this->db->where('id', $id);
			return $this->db->get()->result();
		}

		public function getUserById($id)
		{
			$query = $this->db->get_where('users', array('id' => $id));
        	return $query->row_array();
		}


		
		// Check username exists
		public function check_username_exists($username){
			$query = $this->db->get_where('users', array('username' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		public function get_technicien_byid($id){
			
			$query = $this->db->get_where('technicien', array('id' => $id));

        

			return $query->row_array();
	}

	public function get_techs_all()
    {
        $query = $this->db->get('technicien');
        return $query->result_array();
    }

}