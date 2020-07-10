<?php

class Local_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }


    public function get_local_all($immeuble_id = FALSE, $limit = FALSE, $offset = FALSE){
 
        /*
                    $this->db
                    ->select('gestion.*')
                    ->from('gestion')
                    ->join('gestion','gestion.immeuble = immeuble.id')
                    ->where('gestion', array('immeuble' => $immeuble_id));
                    $query = $this->db->get(); */
        
                    $this->db->order_by('localadmin.datecreation', 'DESC');
                    $query = $this->db->get_where('localadmin', array('immeuble' => $immeuble_id));
                    return $query->result_array();
          
            }


    public function get_propbien_all($immeuble_id = FALSE, $limit = FALSE, $offset = FALSE){
 
                /*
                            $this->db
                            ->select('gestion.*')
                            ->from('gestion')
                            ->join('gestion','gestion.immeuble = immeuble.id')
                            ->where('gestion', array('immeuble' => $immeuble_id));
                            $query = $this->db->get(); */
                
                
                            $query = $this->db->get_where('proprietairebienimmobilier', array('immeuble' => $immeuble_id));
                            return $query->result_array();
                  
    }  

    public function get_propimmob_all($immeuble_id = FALSE, $limit = FALSE, $offset = FALSE){
 
        /*
                    $this->db
                    ->select('gestion.*')
                    ->from('gestion')
                    ->join('gestion','gestion.immeuble = immeuble.id')
                    ->where('gestion', array('immeuble' => $immeuble_id));
                    $query = $this->db->get(); */
        
        
                    $query = $this->db->get_where('reglementproprietaire', array('immeuble' => $immeuble_id));
                    return $query->result_array();
          
} 
    public function get_localgestion_all($id = FALSE, $limit = FALSE, $offset = FALSE){
 
/*
            $this->db
            ->select('gestion.*')
            ->from('gestion')
            ->join('gestion','gestion.immeuble = immeuble.id')
            ->where('gestion', array('immeuble' => $immeuble_id));
            $query = $this->db->get(); */


            $query = $this->db->get_where('localgestion', array('local' => $id));
            return $query->row_array();
  
    }

    public function get_dependance_all($id = FALSE){
        $query = $this->db->get_where('dependance', array('localgestion' => $id));
        return $query->result_array();
          
            }

         
    public function create_dependance($id = FALSE){
        $datadep= array(
            'localgestion' => $id,
            'dependancebat' => $this->input->post('dependancebat'),
            'surfacebat' => $this->input->post('surfacebat'),
            'dependancenonbat' => $this->input->post('dependancenonbat'),
            'surfacenonbat' => $this->input->post('surfacenonbat')
            
        );
        
 
 


        $this->db->insert('dependance', $datadep);
     

                  
    }


    
    public function get_occupants_all($id = FALSE, $limit = FALSE, $offset = FALSE){
 
        /*
                    $this->db
                    ->select('gestion.*')
                    ->from('gestion')
                    ->join('gestion','gestion.immeuble = immeuble.id')
                    ->where('gestion', array('immeuble' => $immeuble_id));
                    $query = $this->db->get(); */
        
        
                    $query = $this->db->get_where('occupant', array('local' => $id));
                    return $query->result_array();
          
            }

 
            public function update_dependance($id)
            {
                 
                $data = array(
        
                   
                    'dependancebat' => $this->input->post('dependancebat'),
                    'surfacebat' => $this->input->post('surfacebat'),
                    'dependancenonbat' => $this->input->post('dependancenonbat'),
                    'surfacenonbat' => $this->input->post('surfacenonbat'),
     
           
                );
        
        
                $this->db->where('id', $id);
        
         
        
                return $this->db->update('dependance', $data);
        
        
        
        
         
        
            }
        

    public function update_gestion($id)
    {
         
        $data = array(

           
            'disponibilite' => $this->input->post('disponibilite'),
            'netage' => $this->input->post('netage'),
            'codelocal' => $this->input->post('codelocal'),
            'naturelocal' => $this->input->post('naturelocal'),
            'numeroplan' => $this->input->post('numeroplan'),
            'surface' => $this->input->post('surface'),
            'usag' => $this->input->post('usag'),
 
   
        );


        $this->db->where('id', $id);

 

        return $this->db->update('localgestion', $data);




 

    }


    public function create_occupant()
    {
         
   

        $dataO = array(
            'nomoccupant' => $this->input->post('nomoccupant'),
            'cinpassport' => $this->input->post('cinpassport'),
            'lieuemission' => $this->input->post('lieuemission'),
            'dateemission' => $this->input->post('dateemission'),
            'typeoccupant' => $this->input->post('typeoccupant'),
            'codeeoccupant' => $this->input->post('codeeoccupant'),
            'contradatedebut' => $this->input->post('contradatedebut'),
            'contradatefin' => $this->input->post('contradatefin'),
            'periodecorresdu' => $this->input->post('periodecorresdu'),
            'periodecorrespau' => $this->input->post('periodecorrespau'),
            'naturepiececon' => $this->input->post('naturepiececon'),
            'montantloyerencaisse' => $this->input->post('montantloyerencaisse'),
            'loyerdedepart' => $this->input->post('loyerdedepart'),
            'loyeractuel' => $this->input->post('loyeractuel'),
            'fraisocc' => $this->input->post('fraisocc'),
            'fraisrecu' => $this->input->post('fraisrecu'),
            'tauxact' => $this->input->post('tauxact'),
            'local' => $this->input->post('local'),

        );
        $this->db->insert('occupant', $dataO);




 

    }

    public function create_local()
    {
        // INSERT INTO LOCAL (TECHNIQUE)
        $datalocaT = array(
        
            'Immeuble_id' => $this->input->post('immeuble'),
            'Code_Local' => $this->input->post('codelocal')
            
        );
        $this->db->insert('local', $datalocaT);

        // INSERT INTO LOCAL (ADMIN)
        $dataloca = array(
            'datecreation' => date("Y-m-d H:i:s"),
            'immeuble' => $this->input->post('immeuble'),
            'codelocal' => $this->input->post('codelocal')
            
        );
        $this->db->insert('localadmin', $dataloca);
        $insert_id = $this->db->insert_id();


     

        //INSERT INTO GESTION (LOCAL)
        $dataG = array(

           
            'disponibilite' => $this->input->post('disponibilite'),
            'netage' => $this->input->post('netage'),
            'codelocal' => $this->input->post('codelocal'),
            'naturelocal' => $this->input->post('naturelocal'),
            'numeroplan' => $this->input->post('numeroplan'),
            'surface' => $this->input->post('surface'),
            'usag' => $this->input->post('usag'),
            'local' =>  $insert_id,
            'immeuble' => $this->input->post('immeuble')
        );
        $this->db->insert('localgestion', $dataG);

 

    }

   
}









?>