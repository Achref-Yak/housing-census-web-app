<?php
/* Classe de  */
class user_model extends CI_model{
   public function __construct()
 {
  $this->load->database();
 }  


public function insertdbaa($login,$password,$nom, $prenom,$Etat,$groupe_utilisateur){

	$dataAuth = array(
            'Etat'=>$Etat,
           'groupe_id'=>$groupe_utilisateur,
            
            
   //'Email' => 'emailU' ,
   'login' => $login,
   'password' =>$password ,
    'nom' => $nom,
   'prenom' =>$prenom 
   
);



$this->db->insert('utilisateurs', $dataAuth);
$str = $this->db->last_query();
print_r($str);


}

/* */
public function afficherUtilisateurs()
    {
    return   $this->db->get('utilisateurs')->result();
}

public function modifierUser($id,$data){
$res= $this->db->where('id',$id)->update('utilisateurs', $data);
$str = $this->db->last_query();
//print_r($str);
//die();
return $res;

}



}
