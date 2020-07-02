<?php
/* Classe de  */
class calcul_objet_model extends CI_model{
   public function __construct()
 {
  $this->load->database();
 }  
 
/* clacul TVA */
  function calculTvaObjet($objet,$sousObjet,$idObjet)
    {
    	$this->db->select('sum( `tva`*  (`prix` * `quantite` -(`prix` * `quantite` * `remise_prd`/ 100 )) /100) as somm , `tva` as tva ');
		$this->db->from($sousObjet);
		$this->db->where(array($idObjet => $objet->getId()));
		$this->db->group_by("tva"); 
		$query = $this->db->get();
		return $query;
					
}

/* calcul Total Ht */
  function calculTotalHt($objet,$sousObjet,$idObjet)
    {

 
    	$this->db->select('sum( `prix` * `quantite` -(`prix` * `quantite` * `remise_prd`/ 100 )) as somm ');
		$this->db->from($sousObjet);
		$this->db->where(array($idObjet => $objet->getId()));
		$query = $this->db->get();
		return $query;
					
}

/* calcul sous Total Ht */
  function calculsousTotalHt($objet,$sousObjet,$idObjet)
    {

		$this->db->select('sum( `prix` * `quantite` -(`prix` * `quantite` * `remise_prd`/ 100 )) as somm');
		$this->db->from($sousObjet);
		$this->db->where(array($idObjet => $objet->getId()));
        $query = $this->db->get();
	    return $query;
					
}

 

}
 ?>