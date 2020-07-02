<?php

class Local extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_local_all()
    {
         
            $query = $this->db->select('*');

            $this->db->from('local');
            $this->db->get();

          

            return $query->result_array();
        


    }

    public function get_local_byid($id)
    {

        $query = $this->db->select('*');

        $this->db->from('local');
        $this->db->where('id',$id);
        $this->db->get();

        

        return $query->row_array();


    }
    public function update_immeuble()
    {
  
        $arr['Code_local'] = $this->input->post('Code_local');
        $arr['Etage'] = $this->input->post('Etage');
        $arr['Surface'] = $this->input->post('Surface');
        $arr['Nlocal'] = $this->input->post('Nlocal');
        $arr['Nomlocataire'] = $this->input->post('Nomlocataire');
        $arr['NonBatis'] = $this->input->post('Nomlocataire');
        $arr['Batis'] = $this->input->post('Batis');
        $arr['NatureLocal'] = $this->input->post('NatureLocal');
        $arr['ValeurLocation'] = $this->input->post('ValeurLocation');
        $arr['NonFamilleOccupant'] = $this->input->post('NonFamilleOccupant');
        $arr['SalleEau'] = $this->input->post('SalleEau');
        $arr['EclairageN'] = $this->input->post('EclairageN');
        $arr['MoyenChauffahe'] = $this->input->post('MoyenChauffahe');
        $arr['Ventillation'] = $this->input->post('Ventillation');
        $arr['Humidite'] = $this->input->post('Humidite');
        $arr['DistEau'] = $this->input->post('DistEau');
        $arr['EvacC'] = $this->input->post('EvacC');
        $arr['Usag'] = $this->input->post('EclairageN');
        
        $this->db->where('id', $this->input->post('id'));
        return $this->db->insert('local', $arr);

    }

    public function create_local()
    {
 
        $arr['Code_local'] = $this->input->post('Code_local');
        $arr['Etage'] = $this->input->post('Etage');
        $arr['Surface'] = $this->input->post('Surface');
        $arr['Nlocal'] = $this->input->post('Nlocal');
        $arr['Nomlocataire'] = $this->input->post('Nomlocataire');
        $arr['NonBatis'] = $this->input->post('Nomlocataire');
        $arr['Batis'] = $this->input->post('Batis');
        $arr['NatureLocal'] = $this->input->post('NatureLocal');
        $arr['ValeurLocation'] = $this->input->post('ValeurLocation');
        $arr['NonFamilleOccupant'] = $this->input->post('NonFamilleOccupant');
        $arr['SalleEau'] = $this->input->post('SalleEau');
        $arr['EclairageN'] = $this->input->post('EclairageN');
        $arr['MoyenChauffahe'] = $this->input->post('MoyenChauffahe');
        $arr['Ventillation'] = $this->input->post('Ventillation');
        $arr['Humidite'] = $this->input->post('Humidite');
        $arr['DistEau'] = $this->input->post('DistEau');
        $arr['EvacC'] = $this->input->post('EvacC');
        $arr['Usag'] = $this->input->post('EclairageN');

        
 
        return $this->db->insert('local', $arr);

    }

    public function update_local()
    {
        $arr['Code_local'] = $this->input->post('Code_local');
        $arr['Etage'] = $this->input->post('Etage');
        $arr['Surface'] = $this->input->post('Surface');
        $arr['Nlocal'] = $this->input->post('Nlocal');
        $arr['Nomlocataire'] = $this->input->post('Nomlocataire');
        $arr['NonBatis'] = $this->input->post('Nomlocataire');
        $arr['Batis'] = $this->input->post('Batis');
        $arr['NatureLocal'] = $this->input->post('NatureLocal');
        $arr['ValeurLocation'] = $this->input->post('ValeurLocation');
        $arr['NonFamilleOccupant'] = $this->input->post('NonFamilleOccupant');
        $arr['SalleEau'] = $this->input->post('SalleEau');
        $arr['EclairageN'] = $this->input->post('EclairageN');
        $arr['MoyenChauffahe'] = $this->input->post('MoyenChauffahe');
        $arr['Ventillation'] = $this->input->post('Ventillation');
        $arr['Humidite'] = $this->input->post('Humidite');
        $arr['DistEau'] = $this->input->post('DistEau');
        $arr['EvacC'] = $this->input->post('EvacC');
        $arr['Usag'] = $this->input->post('EclairageN');

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('posts', $arr);




    }
}









?>