<?php

class Immeuble extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_immeuble_all($id)
    {
         
            $query = $this->db->select('*');
            $this->db->from('immeuble');
            $this->db->get();

          

            return $query->result_array();
        


    }

    public function get_immeuble_byId($id)
    {

        $query = $this->db->select('*');

        $this->db->from('immeuble');
        $this->db->where('id',$id);
        $this->db->get();

        

        return $query->row_array();


    }
    public function update_immeuble()
    {
  
    
        $this->db->insert('immeuble', $arr);

    }

    public function create_immeuble()
    {
 
    
    $this->db->insert('immeuble', $arr);

    }
    public function create_immeuble()
    {
 
    
    $this->db->insert('immeuble', $arr);

    }
}









?>