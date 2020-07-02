<?php

class Propprietaire extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_prop_all()
    {
         
            $query = $this->db->select('*');

            $this->db->from('proprietaire');
            $this->db->get();

          

            return $query->result_array();
        


    }

    public function get_prop_byid($id)
    {

        $query = $this->db->select('*');

        $this->db->from('proprietaire');
        $this->db->where('id',$id);
        $this->db->get();

        

        return $query->row_array();


    }
 

    public function create_prop($imId)
    {
 
        $arr['Identite'] = $this->input->post('Code_local');
        $arr['Nationalite'] = $this->input->post('Etage');
        $arr['QuotPar'] = $this->input->post('Surface');
        $arr['DateTrans'] = $this->input->post('Nlocal');
        $arr['DateCons'] = $this->input->post('Nomlocataire');
        $arr['DateAq'] = $this->input->post('Nomlocataire');
        $arr['DecisionGestion'] = $this->input->post('Batis');
        $arr['Immeuble_id'] = $imId;
 
 
 
        $this->db->insert('proprietaire', $arr);

    }

    public function update_prop($id)
    {
        $arr['Identite'] = $this->input->post('Code_local');
        $arr['Nationalite'] = $this->input->post('Etage');
        $arr['QuotPar'] = $this->input->post('Surface');
        $arr['DateTrans'] = $this->input->post('Nlocal');
        $arr['DateCons'] = $this->input->post('Nomlocataire');
        $arr['DateAq'] = $this->input->post('Nomlocataire');
        $arr['DecisionGestion'] = $this->input->post('Batis');
        $arr['Immeuble_id'] = $this->input->post('NatureLocal');
 
        #$arr['immeuble_id'] = $this->input->post('EclairageN');
 
 

        $this->db->where('id', $id);
        $this->db->update("proprietaire", $arr);




    }
}









?>