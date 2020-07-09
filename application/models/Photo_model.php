<?php

class Photo_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function get_photos_all($code_local = FALSE){
  
        $query = $this->db->get_where('photo', array( 'Code_Local' => $code_local));

        

        return $query->result_array();
 


       
    }

    public function get_photos_immeuble_all($code_tf = FALSE){
  
        $query = $this->db->get_where('photo', array( 'Code_TF' => $code_tf, 'Code_Local' => ''));

        

        return $query->result_array();
 


       
    }

 
 
}