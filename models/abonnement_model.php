<?php
/* Classe de  */
class abonnement_model extends CI_model{
   public function __construct()
 {
  $this->load->database();
 }  
 
/* Afficher les abonnements */
public function afficherAbonnements($cla_id=null)
    {
		
		$query = $this->db ->select(" cla_id,
							cla_cl_id,
							cl.raison_sociale,
							cla_prd_id,
							cla_date_deb,
							cla_date_fin,
							DATE_FORMAT(cla_date_deb ,'%d-%m-%Y') as date_deb,
							DATE_FORMAT(cla_date_fin ,'%d-%m-%Y') as date_fin,
							datediff( cla_date_fin, cla_date_deb) as difference,
							prd.designation as libelle", false)
                    ->from('clients_abonnements')
                    ->join('clients cl', 'cla_cl_id = cl.id', 'left')
					->join('produits prd', 'prd.id = cla_prd_id','left')
					->order_by('cla_date_deb');
                    
		if ($cla_id){
		$query	= $this->db->where("cla_id",$cla_id);
		}
		
		$res = $this->db->get()
                    ->result();
		if ($cla_id) {
			if 	(count($res)==1) return $res[0];
		}
		return $res;
					
}

/* Afficher les clients */
public function afficherClients()
{
	return $this->db ->select("id, raison_sociale",false)
				->from('clients')
				->get()
                ->result();
}

/* Sauvegarder un nouvel abonnement */
public function enregistrerAbonnement($data)
	{
		return $this->db->insert('clients_abonnements',$data);
	}

/* Mettre à jour un abonnement existant */
public function majAbonnement($data,$cla_id)
{
	return $this->db->update('clients_abonnements',$data,array('cla_id'=>$cla_id));		
	//var_dump($this->db->last_query());exit;
}

}
 ?>