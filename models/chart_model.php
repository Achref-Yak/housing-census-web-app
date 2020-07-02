<?php
/* Classe de  */
class chart_model extends CI_model{
   public function __construct()
 {
  $this->load->database();
 }  
 
/*   */
  function chiffreYear($annee,$idste)
    {

     
    	$this->db->select('*');
		$this->db->from('facture');
		$this->db->where(array('YEAR(Date_creation)' => $annee , 'id_ste' => $idste));
		 
		$query = $this->db->get();
		return $query;
					
}

/*   */
  function chiffreMonth($annee,$mois1,$idste)
    {
 
     
    	$this->db->select('*');
		$this->db->from('facture');
		$this->db->where(array('YEAR(Date_creation)' => $annee , 'MONTH(Date_creation)'=> $mois1, 'id_ste' => $idste));
		 
		$query = $this->db->get();
		return $query;
					
}

/*   */
  function comparaison_chiffre($devise,$idste)
    {
 

		$this->db->select('year(Date_creation) as annee , sum(  if(remise=0 and remise_prd =0,(`prix` * `quantite`)+((`prix` * `quantite`) * `tva`/100) , if(remise=0 and remise_prd <>0,(`prix` * `quantite`)
			-((`prix` * `quantite`) * `remise_prd`/100)
			+
			 (((`prix` * `quantite`)-((`prix` * `quantite`) * `remise_prd`/100))* tva /100), if(remise<>0 and remise_prd =0,(`prix` * `quantite`)
			-((`prix` * `quantite`) * `remise`/100)
			+
 			(((`prix` * `quantite`)-((`prix` * `quantite`) * `remise`/100))* tva /100), (((`prix` * `quantite`)
 			-((`prix` * `quantite`) * remise_prd /100 ))-(((`prix` * `quantite`)
 			-((`prix` * `quantite`) * remise_prd /100 )) * remise /100)
 			+((((`prix` * `quantite`)
 			-((`prix` * `quantite`) * remise_prd /100 ))-(((`prix` * `quantite`)
 			-((`prix` * `quantite`) * remise_prd /100 )) * remise /100)) * tva / 100 ) )))))as somm');
		$this->db->from('facture_produit as p,facture as f' );
		$this->db->where('p.id_facture = f.id');
		$this->db->where('devise', $devise);
		$this->db->where( 'f.id_ste',  $idste );
		$this->db->group_by("year(Date_creation)"); 
		$this->db->order_by("year(Date_creation)", "asc"); 
        $query = $this->db->get();
	    return $query;
					
}

/*   */
  function totalchiffre($annee,$devise,$idste,$i)
    {
 

		$this->db->select('month(Date_creation) as mois ,  sum( `prix` * `quantite` -(`prix` * `quantite` * `remise_prd`/ 100 )-(`prix` * `quantite` -(`prix` * `quantite` * `remise_prd`/ 100 ))* 
 			remise /100) as somm ');
		$this->db->from('facture_produit as p,facture as f' );
		$this->db->where('p.id_facture = f.id');
		$this->db->where(array('YEAR(Date_creation)'=> $annee, 'month(Date_creation)' => $i ,'devise'=>$devise ,'f.id_ste'=> $idste ));
		 
        $query = $this->db->get();
	    return $query;
					
}

  function totalpaiemet($annee,$devise,$idste,$i)
    {
 

		$this->db->select('month(Date_creation) as mois , sum(`montant_ttc`) as somm  ');
		$this->db->from('paiement as p,facture as f' );
		$this->db->where('p.id_facture = f.id');
		$this->db->where(array('YEAR(Date_creation)' => $annee, 'month(Date_creation)'=> $i ,'devise'=>$devise ,'f.id_ste'=> $idste ));
		 
        $query = $this->db->get();
	    return $query;
					
}

  function paiementClt($annee,$devise,$idste,$cltlimit)
    {
 

		$this->db->select(' sum( p.`montant_ttc`) as somm , f.`id_clt` as clt , f.`clt_passager` as passager');
		$this->db->from('paiement as p,facture as f' );
		$this->db->where('p.id_facture = f.id');
		$this->db->where(array('YEAR(Date_creation)' => $annee ,'devise'=>$devise ,'f.id_ste'=> $idste ));
		$this->db->group_by('f.`id_clt`'); 
		$this->db->order_by("sum( p.`montant_ttc`)", "desc");
		$this->db->limit($cltlimit, 0);
		 
        $query = $this->db->get();

	    return $query;
					
}

 function facturesste($annee,$devise,$idste)
    {
 
/*$queryf = $this->db->query('select * from facture   where  year(Date_creation) ='.$annee.'  and id_ste = '. $idste);*/
		$this->db->select('*');
		$this->db->from('facture');
	  	$this->db->where(array('YEAR(Date_creation)' => $annee ,'devise'=>$devise ,'id_ste'=> $idste ));
		$query = $this->db->get();

	    return $query;
					
}

 function facturesClt($annee,$devise,$idste,$clt)
    {
 
 
		 $this->db->select()->from('facture')
    			  ->where( 'id_clt = "'. $clt.'" or  clt_passager ="'. $clt.'" ')
                  ->where('year(Date_creation)', $annee)
                  ->where('id_ste', $idste);
         $query = $this->db->get();

	    return $query;
					
}
  
 

  
  
 
 

}
 ?>