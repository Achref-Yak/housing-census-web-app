<?php

class Etat extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_etat_all()
    {
         
            $query = $this->db->select('*')

            ->from('etat')
            ->get();

          

            return $query->result_array();
        


    }

    public function get_etat_byid($id)
    {

        $query = $this->db->select('*')

        ->from('etat')
        ->where('id',$id)
        ->get();

        

        return $query->row_array();


    }
 

    public function create_etat($imId)
    {
 
        $arr['Entree'] = $this->input->post('Entree');
        $arr['FacadeTerrase'] = $this->input->post('FacadeTerrase');
        $arr['PartieCom'] = $this->input->post('PartieCom');
        $arr['PartieMure'] = $this->input->post('PartieMure');
        $arr['PartieBalcon'] = $this->input->post('PartieBalcon');
        $arr['Terras'] = $this->input->post('Terras');
        $arr['Platon'] = $this->input->post('Platon');
        $arr['Evacuation'] = $this->input->post('Evacuation');
        $arr['Electrique'] = $this->input->post('Electrique');
        $arr['Gaz'] = $this->input->post('Gaz');
        $arr['Eau'] = $this->input->post('Eau');
        $arr['EtageB'] = $this->input->post('EtageB');
        $arr['EtageM'] = $this->input->post('EtageM');
        $arr['EtageR'] = $this->input->post('EtageR');
        $arr['EtageMC'] = $this->input->post('EtageMC');
        $arr['NbrBienB'] = $this->input->post('NbrBienB');
        $arr['NbrBienMC'] = $this->input->post('NbrBienMC');
        $arr['Immeuble_id'] = $imId;
 
        #$arr['immeuble_id'] = $this->input->post('EclairageN');
 
 
        $this->db->insert('etat', $arr);

    }

    public function update_etat($id)
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
        $this->db->update("etat", $arr);




    }
}









?>