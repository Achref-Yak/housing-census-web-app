<?php

class Fichetechnique_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function get_fichetechnique_all($slug = FALSE, $limit = FALSE, $offset = FALSE){
        if($limit){
            $this->db->limit($limit, $offset);
        }
        if($slug === FALSE){
            $this->db->order_by('fichetechnique.id', 'DESC');
       
            $query = $this->db->get('fichetechnique');
            return $query->result_array();
        }

        $query = $this->db->get_where('fichetechnique', array('Code_TF' => $slug));
        return $query->row_array();
    }

 
    public function get_fichetechnique_byimmeuble($id)
    {

        $query = $this->db->get_where('fichetechnique', array('Immeuble_id' => $id));
        return $query->row_array();


    }

    public function get_fichetechnique_byid($id)
    {

        $query = $this->db->select('*');

        $this->db->from('fichetechnique');
        $this->db->where('id',$id);
        $this->db->get();

        

        return $query->row_array();


    }
    public function update_fichetechnique()
    {
         
        $data = array(
            'Code_TF' => $this->input->post('title'),
            'Adresse' => $this->input->post('Adresse'),
            'CodeImmeuble' => $this->input->post('body'),
            'Categorie' => $this->input->post('Categorie'),
            'Plan' => $this->input->post('Plan'),
            'NumImmeuble' => $this->input->post('NumImmeuble'),
            'NumEtage' => $this->input->post('NumEtage'),
            'CodeMunicipal' => $this->input->post('CodeMunicipal'),
            'Etat' => $this->input->post('Etat'),
            'Immeuble_id' => $this->input->post('Immeuble_id'),

            'DateAq' => $this->input->post('DateAq'),
            'DateTrans' => $this->input->post('DateTrans'),
            'DateCons' => $this->input->post('DateCons'),
            'DecisionGestion' => $this->input->post('DecisionGestion'),
            'AdresseAdmin' => $this->input->post('AdresseAdmin'),
        );

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('posts', $data);
    
        $this->db->insert('fichetechnique', $data);

    }

    public function create_fichetechnique($Immeuble_id)
    {
 
        $data = array(
            'Code_TF' => $this->input->post('TF'),
            'Adresse' => $this->input->post('AdresseFR'),
            'CodeImmeuble' => $this->input->post('CodeImmeubilier'),
            'Categorie' => '0',
            'Plan' => '0',
            'NumImmeuble' => '0',
            'CodeMunicipal' => '',
            'Immeuble_id' => $Immeuble_id,
    
            'DateCons' => $this->input->post('AnneConst'),
            'AdresseAdmin' => $this->input->post('Adresse'),
        );
    $this->db->insert('fichetechnique', $data);

    }
}









?>