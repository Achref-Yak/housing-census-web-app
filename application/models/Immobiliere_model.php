<?php

class Immobiliere_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function affecter($id, $tech)
    {
        $data = array(
            'Tech' => $tech,
            'Etat' => 1,
   
        );

        $this->db->where('Immeuble_id', $id);
        return $this->db->update('mission', $data);
    }
    public function get_fichetechnique($immeuble_id = FALSE, $limit = FALSE, $offset = FALSE){
 
        /*
                    $this->db
                    ->select('gestion.*')
                    ->from('gestion')
                    ->join('gestion','gestion.immeuble = immeuble.id')
                    ->where('gestion', array('immeuble' => $immeuble_id));
                    $query = $this->db->get(); */
        
        
                    $query = $this->db->get_where('fichetechnique', array('Immeuble_id' => $immeuble_id));
                    return $query->row_array();
          
            }

            
            public function get_props($immeuble_id = FALSE, $limit = FALSE, $offset = FALSE){
 
                /*
                            $this->db
                            ->select('gestion.*')
                            ->from('gestion')
                            ->join('gestion','gestion.immeuble = immeuble.id')
                            ->where('gestion', array('immeuble' => $immeuble_id));
                            $query = $this->db->get(); */
                
                
                            $query = $this->db->get_where('proprietaire', array('Immeuble_id' => $immeuble_id));
                            return $query->result_array();
                  
                    }


            public function get_etat($immeuble_id = FALSE, $limit = FALSE, $offset = FALSE){
 
                /*
                            $this->db
                            ->select('gestion.*')
                            ->from('gestion')
                            ->join('gestion','gestion.immeuble = immeuble.id')
                            ->where('gestion', array('immeuble' => $immeuble_id));
                            $query = $this->db->get(); */
                
                
                            $query = $this->db->get_where('etat', array('Immeuble_id' => $immeuble_id));
                            return $query->row_array();
                  
                    }

    public function get_immeuble($immeuble_id = FALSE, $limit = FALSE, $offset = FALSE){
 
        /*
                    $this->db
                    ->select('gestion.*')
                    ->from('gestion')
                    ->join('gestion','gestion.immeuble = immeuble.id')
                    ->where('gestion', array('immeuble' => $immeuble_id));
                    $query = $this->db->get(); */
        
        
                    $query = $this->db->get_where('immeuble', array('id' => $immeuble_id));
                    return $query->row_array();
          
            }

    public function get_gestion_all($immeuble_id = FALSE, $limit = FALSE, $offset = FALSE){
 
/*
            $this->db
            ->select('gestion.*')
            ->from('gestion')
            ->join('gestion','gestion.immeuble = immeuble.id')
            ->where('gestion', array('immeuble' => $immeuble_id));
            $query = $this->db->get(); */


            $query = $this->db->get_where('gestion', array('immeuble' => $immeuble_id));
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
            'immeuble' => $this->input->post('immeuble'),
            'CodeImmeubilier' => $this->input->post('CodeImmeubilier'),
        );


        $this->db->where('id', $this->input->post('id'));

 

        $this->db->update('gestion', $data);


        $dataF = array(
        'AdresseAdmin' => $this->input->post('AdresseFR'),
        );

        $this->db->where('Immeuble_id', $this->input->post('immeuble'));
        return $this->db->update('fichetechnique', $dataF);
 

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
      
 
            'immeuble' => $insert_id,
        );
        $this->db->insert('achat', $dataA);

        $dataDe = array(
            'Immeuble_id' => $insert_id,
   
        );
        $this->db->insert('descg', $dataDe);

        $dataF = array(
            'Code_TF' => $this->input->post('TF'),
            'Adresse' => $this->input->post('AdresseFR'),
            'CodeImmeuble' => $this->input->post('CodeImmeubilier'),
            'Categorie' => '0',
            'Plan' => '0',
            'NumImmeuble' => '0',
            'CodeMunicipal' => '',
            'Immeuble_id' => $insert_id,
            
            'DateCons' => $this->input->post('AnneConst'),
            'AdresseAdmin' => $this->input->post('AdresseFR'),
        );
        $this->db->insert('fichetechnique', $dataF);


        $dataM = array(
            'Adresse' => $this->input->post('AdresseFR'),
            'Etat' => '0',
            'Immeuble_id' => $insert_id,
 
        );
        $this->db->insert('mission', $dataM);

        $dataM = array(

            'Immeuble_id' => $insert_id,
 
        );
        $this->db->insert('etat', $dataM);


        redirect('immobilier/'.$insert_id.'/'.$this->input->post('TF'));

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
    public function get_gerance_all($id)
    {
        $query = $this->db->get_where('gerance', array('immeuble' => $id));
        return $query->result_array();

    }
    public function create_gerance($id,$im)
    {
 
        $data = array(
            'decisionGer' => $this->input->post('decisionGer'),
            'dateDec' => $this->input->post('dateDec'),
            'dateAnnul' => $this->input->post('dateAnnul'),
            'achat' => $id,
            'immeuble' => $im,

        );

    $this->db->insert('gerance', $data);
  

    }
    
}









?>