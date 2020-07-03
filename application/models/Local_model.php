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

    public function get_historique_all($id = FALSE, $limit = FALSE, $offset = FALSE){
 
        /*
                    $this->db
                    ->select('gestion.*')
                    ->from('gestion')
                    ->join('gestion','gestion.immeuble = immeuble.id')
                    ->where('gestion', array('immeuble' => $immeuble_id));
                    $query = $this->db->get(); */
        
        
                    $query = $this->db->get_where('local_historique_gestion', array('local' => $id));
                    return $query->row_array();
          
            }

 
 

    public function update_gestion()
    {
         
        $data = array(

           
            'disponibilite' => $this->input->post('disponibilite'),
            'netage' => $this->input->post('netage'),
            'codelocal' => $this->input->post('codelocal'),
            'naturelocal' => $this->input->post('naturelocal'),
            'numeroplan' => $this->input->post('numeroplan'),
            'surface' => $this->input->post('surface'),
            'usag' => $this->input->post('usag'),
            'dependancebat' => $this->input->post('dependancebat'),
            'surfacebat' => $this->input->post('surfacebat'),
            'dependancenonbat' => $this->input->post('dependancenonbat'),
            'surfacenonbat' => $this->input->post('surfacenonbat'),
   
        );


        $this->db->where('id', $this->input->post('id'));

 

        return $this->db->update('localgestion', $data);




 

    }


    public function update_historique()
    {
         
   

        $dataA = array(
            'nomoccupant' => $this->input->post('nomoccupant'),
            'cinpassport' => $this->input->post('cinpassport'),
            'lieuemission' => $this->input->post('lieuemission'),
            'dateemission' => $this->input->post('dateemission'),
            'typeoccupant' => $this->input->post('typeoccupant'),
            'codeeoccupant' => $this->input->post('codeeoccupant'),
            'contradatedebut' => $this->input->post('datedebut'),
            'contradatefin' => $this->input->post('datefin'),
            'periodecorresdu' => $this->input->post('periodecorresdu'),
            'periodecorrespau' => $this->input->post('periodecorrespau'),
            'naturepiececon' => $this->input->post('naturepiececon'),
            'montantloyerencaisse' => $this->input->post('montantloyerencaisse'),
            'loyerdedepart' => $this->input->post('loyerdedepart'),
            'loyeractuel' => $this->input->post('loyeractuel'),
            'fraisocc' => $this->input->post('fraisocc'),
            'fraisrecu' => $this->input->post('fraisrecu'),
            'tauxact' => $this->input->post('tauxact'),

        );
        $this->db->where('id', $this->input->post('id'));

        return $this->db->update('local_historique_gestion', $dataA);




 

    }

    public function create_local()
    {

        $dataloca = array(
            'datecreation' => date("Y-m-d H:i:s"),
            'immeuble' => $this->input->post('immeuble')
            
        );
        
 
 


        $this->db->insert('localadmin', $dataloca);
        $insert_id = $this->db->insert_id();



        $dataH = array(
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
            'local' => $insert_id,
            'immeuble' => $this->input->post('immeuble')

        );
        $this->db->insert('local_historique_gestion', $dataH);

        $dataG = array(

           
            'disponibilite' => $this->input->post('disponibilite'),
            'netage' => $this->input->post('netage'),
            'codelocal' => $this->input->post('codelocal'),
            'naturelocal' => $this->input->post('naturelocal'),
            'numeroplan' => $this->input->post('numeroplan'),
            'surface' => $this->input->post('surface'),
            'usag' => $this->input->post('usag'),
            'dependancebat' => $this->input->post('dependancebat'),
            'surfacebat' => $this->input->post('surfacebat'),
            'dependancenonbat' => $this->input->post('dependancenonbat'),
            'surfacenonbat' => $this->input->post('surfacenonbat'),
            'local' =>  $insert_id,
            'immeuble' => $this->input->post('immeuble')
        );
        $this->db->insert('localgestion', $dataG);

 

    }

    public function create_prop_bien($im){
        $dataP = array(
       
            'proprietaire' => $this->input->post('proprietaire'),
            'nationalite' => $this->input->post('nationalite'),
            'quotepart' => $this->input->post('quotepart'),
            'adresse' => $this->input->post('adresse'),
            'rip' => $this->input->post('rip'),
            'immeuble' => $im
        );
        $this->db->insert('proprietairebienimmobilier', $dataP);

    }

    public function create_prop_reglement($im){
        $dataP = array(
       
            'proprietaire' => $this->input->post('proprietaire'),
            'du' => $this->input->post('du'),
            'au' => $this->input->post('au'),
            'mentantReglement' => $this->input->post('mentantReglement'),
            'immeuble' => $im
        );
        $this->db->insert('reglementproprietaire', $dataP);

    }
}









?>