<?php 

class fnparam {
 
 function calcul_redevance($salaire_net){
 	$redevance=0;
   if($salaire_net >=2000){
 	$redevance =$salaire_net *1 /100;
   
    }

 return $redevance;
 }
}
?>