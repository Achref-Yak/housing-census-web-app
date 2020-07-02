<?php
/* Classe de  */
class parametrage_model extends CI_model{
   public function __construct()
 {
  $this->load->database();
 } 
 
 /* Afficher les paramètres de la base */
 public function afficherParamsMail()
 	{
	$query = $this->db ->select()->from('param_mail');
	$res = $this->db->get()->result();
	if 	(count($res)==1) return $res[0];
	}
	
 /* Mettre à jour le paramètrage SMTP */
 public function majParamsMail($data)
 	{
	return $this->db->update('param_mail',$data);		
	}
 
}
?>