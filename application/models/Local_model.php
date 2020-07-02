<?php

class Immobiliere_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function get_local_all($id = FALSE, $limit = FALSE, $offset = FALSE){
 
/*
            $this->db
            ->select('gestion.*')
            ->from('gestion')
            ->join('gestion','gestion.immeuble = immeuble.id')
            ->where('gestion', array('immeuble' => $immeuble_id));
            $query = $this->db->get(); */


            $query = $this->db->get_where('local', array('id' => $id));
            return $query->row_array();
  
    }

    public function get_achat_all($immeuble_id = FALSE, $limit = FALSE, $offset = FALSE){
 
        /*
                    $this->db
                    ->select('gestion.*')
                    ->from('gestion')
                    ->join('gestion','gestion.immeuble = immeuble.id')
                    ->where('gestion', array('immeuble' => $immeuble_id));
                    $query = $this->db->get(); */
        
        
                    $query = $this->db->get_where('achat', array('immeuble' => $immeuble_id));
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

 

        return $this->db->update('gestion', $data);




 

    }


    public function update_achat()
    {
         
   

        $dataA = array(
            'devise' => $this->input->post('devise'),
            'prixAchat' => $this->input->post('prixAchat'),
            'tauxDeChange' => $this->input->post('tauxDeChange'),
            'dateSignSnif' => $this->input->post('dateSignSnif'),
            'dateTransferProp' => $this->input->post('dateTransferProp'),
            'QuoteParteEtat' => $this->input->post('QuoteParteEtat'),
            'DateTransEtat' => $this->input->post('DateTransEtat'),
            'NDecisionGerance' => $this->input->post('NDecisionGerance'),
            'DateDecision' => $this->input->post('DateDecision'),
            'DateAnnulation' => $this->input->post('DateAnnulation'),
            'immeuble' => $this->input->post('immeuble'),
        );
        $this->db->where('id', $this->input->post('id'));

        return $this->db->update('achat', $dataA);




 

    }

    public function create_immeuble()
    {

        $dataim = array(
            'created_date' => date("Y-m-d H:i:s"),
        );
        
 
 


        $this->db->insert('immeuble', $dataim);
        $insert_id = $this->db->insert_id();



        $dataG = array(
            'TF' => $this->input->post('TF'),
            'TypeTF' => $this->input->post('TypeTF'),
            'NatureConst' => $this->input->post('NatureConst'),
            'ContenanceTF' => $this->input->post('ContenanceTF'),
            'AnneConst' => $this->input->post('AnneConst'),
            'AdresseAR' => $this->input->post('AdresseAR'),
            'AdresseFR' => $this->input->post('AdresseFR'),
            'Zone' => $this->input->post('Zone'),
            'Localite' => $this->input->post('Localite'),
            'Governorat' => $this->input->post('Governorat'),
            'CodePostal' => $this->input->post('CodePostal'),
            'Bureau' => $this->input->post('Bureau'),
            'EtapeGestionTitre' => $this->input->post('EtapeGestionTitre'),
            'PlanConst' => $this->input->post('PlanConst'),
            'NombreEtage' => $this->input->post('NombreEtage'),
            'NombreLocaux' => $this->input->post('NombreLocaux'),
            'immeuble' => $insert_id,
            'CodeImmeubilier' => $this->input->post('CodeImmeubilier'),
        );
        $this->db->insert('gestion', $dataG);

        $dataA = array(
            'devise' => $this->input->post('devise'),
            'prixAchat' => $this->input->post('prixAchat'),
            'tauxDeChange' => $this->input->post('tauxDeChange'),
            'dateSignSnif' => $this->input->post('dateSignSnif'),
            'dateTransferProp' => $this->input->post('dateTransferProp'),
            'QuoteParteEtat' => $this->input->post('QuoteParteEtat'),
            'DateTransEtat' => $this->input->post('DateTransEtat'),
            'NDecisionGerance' => $this->input->post('NDecisionGerance'),
            'DateDecision' => $this->input->post('DateDecision'),
            'DateAnnulation' => $this->input->post('DateAnnulation'),
 
            'immeuble' => $insert_id,
        );
        $this->db->insert('achat', $dataA);

        $dataF = array(
            'Code_TF' => $this->input->post('TF'),
            'Adresse' => $this->input->post('AdresseFR'),
            'CodeImmeuble' => $this->input->post('CodeImmeubilier'),
            'Categorie' => '0',
            'Plan' => '0',
            'NumImmeuble' => '0',
            'CodeMunicipal' => '',
            'Immeuble_id' => $insert_id,
            'GPS' => '',
            'DateCons' => $this->input->post('AnneConst'),
            'AdresseAdmin' => $this->input->post('AdresseFR'),
        );
        $this->db->insert('fichetechnique', $dataF);

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