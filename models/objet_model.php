<?php
/* Classe de  */
class objet_model extends CI_model{
   public function __construct()
 {
  $this->load->database();
 }  
 
/*   */
  function maxNum($objet,$config,$idste)
    {
    		$mois=date('m');
    		$annee=date('Y');
    		$this->db->select(' max(num) as max');
		$this->db->from($objet);
 $datecreation='Date_creation';
 
    if($objet =='livraison_achat' || $objet =='livraison'){
      $datecreation='date_livrer';


    }
    	if($config=="annee"){


    	 
		$this->db->where(array('YEAR('.$datecreation.')' => $annee , 'id_ste' => $idste));
    	}
    	else if($config== "mois"){
     
    	
		$this->db->where(array('month('.$datecreation.')' => $mois ,'YEAR('.$datecreation.')' => $annee , 'id_ste' => $idste));
		 }
		 else{


    	 
		$this->db->where(array('id_ste' => $idste));
		 }
		$query = $this->db->get();
		return $query;
					
}

  function maxId($objet)
    {
        
   
        $max=1;
        $this->db->select_max('id');
        $query = $this->db->get($objet);
 
          if($query->num_rows() > 0) {
             $max= $query->row()->id; //return the row as an associative array ->array()
        } 
       return $max; 
          
} 

    function maxAttribut($objet,$attribut)
    {
        
   
        $max=0;
        $this->db->select_max($attribut);
        $query = $this->db->get($objet);
 
          if($query->num_rows() > 0) {
               $row = $query->result_array();
               if($row[0][$attribut]!=NULL){
             $max=$row[0][$attribut] ;//$query->row()->id; //return the row as an associative array ->array()
     }   } 
       return $max; 
          
}   
 
 
 function nbr_num_transfer($objet,$idmag)
    {
      $this->db->select("num_transfert , day(date_creartion) as jour,month(date_creartion) as mois, year(date_creartion) as annee ");
    $this->db->from($objet);
    
    $this->db->group_by("num_transfert"); 
    $query = $this->db->get();
    return $query;
          
}

 function sum_prd_transfer($idmag,$idnumtransfert)
    {
      $this->db->select("sum(qte) as qte,num_transfert , day(date_creartion) as jour,month(date_creartion) as mois, year(date_creartion) as annee,id_livprd_achat ");
    $this->db->from('magasin_prd_stock m  , fournisseur_produit f');
    $this->db->where('m.prix_prd = f.id');
    $this->db->where('m.num_transfert', $idnumtransfert);
     $this->db->where("m.id_mgs",$idmag);
    $this->db->group_by("prix_prd"); 
    $query = $this->db->get();
    return $query;
          
}
}
 ?>