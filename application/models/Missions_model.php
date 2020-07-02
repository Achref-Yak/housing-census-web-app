<?php

class Missions_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function get_missions_all($immeuble_id = FALSE, $limit = FALSE, $offset = FALSE){
        if($limit){
            $this->db->limit($limit, $offset);
        }
        if($immeuble_id === FALSE){
            /*$this->db->order_by('mission.id', 'DESC');
 
            $query = $this->db->get('mission');
            
            return $query->result_array();

            $id = $data['missions']['Tech'];
            $data['missions']['user'] = $this->User_model->getUserById($id);*/


            $this->db
            ->select('mission.*, technicien.*, immeuble.*, fichetechnique.*')
            ->from('mission')
            ->join('technicien','technicien.id = mission.Tech')
            ->join('immeuble','immeuble.id = mission.Immeuble_id')
            ->join('fichetechnique','fichetechnique.Immeuble_id = immeuble.id');
            $query = $this->db->get(); 
            return $query->result_array();
        }

        $query = $this->db->get_where('mission', array('immeuble_id' => $immeuble_id));

        

        return $query->row_array();
 


       
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