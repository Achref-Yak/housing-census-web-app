<?php
class prime_model extends CI_Model{
   public function __construct()
 {
  $this->load->database();
 }  
public function findAllPrimeSalarie()
{
    $idste=$this->session->userdata('societe');

    return  $this->db->get_where('pai_param_primes_salaries',array('id_ste'=>$idste))->result();
   
    
}



public function findAllPrimeUtilisateur()
{
    $idste=$this->session->userdata('societe');

    return  $this->db->get_where('pai_liste_primes_utilisateur',array('id_ste'=>$idste))->result();
 
}
}