<?php

class Missions_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function get_missions_affecte_all($immeuble_id = FALSE, $limit = FALSE, $offset = FALSE){
  
            $this->db
            ->select('mission.*, technicien.*, immeuble.*, fichetechnique.*')
            ->from('mission')
            ->join('technicien','technicien.id = mission.Tech')
            ->join('immeuble','immeuble.id = mission.Immeuble_id')
            ->join('fichetechnique','fichetechnique.Immeuble_id = immeuble.id');
            $query = $this->db->get(); 
            return $query->result_array();
        
 
       
    }

    public function get_missions_non_affecte_all($immeuble_id = FALSE, $limit = FALSE, $offset = FALSE){
  
        $this->db
        ->select('mission.*, immeuble.*, fichetechnique.*')
        ->from('mission')
        ->join('immeuble','immeuble.id = mission.Immeuble_id')
        ->join('fichetechnique','fichetechnique.Immeuble_id = immeuble.id');
        $query = $this->db->get(); 
        return $query->result_array();
    }

 

    public function update_mission()
    {
         
        $data = array(
            'Adresse' => $this->input->post('Adresse'),
            'Etat' => $this->input->post('Etat'),
            'Immeuble_id' => $this->input->post('Immeuble_id'),
            'Tech' => $this->input->post('Tech'),
        );

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('mission', $data);
 

    }

    public function create_mission()
    {
 
        $data = array(
            'Adresse' => $this->input->post('Adresse'),
            'Etat' => $this->input->post('Etat'),
            'Immeuble_id' => $this->input->post('Immeuble_id'),
            'Tech' => $this->input->post('Tech'),

        );
    $this->db->insert('mission', $data);

    }
}









?>