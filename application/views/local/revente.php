 
 
     

    <div class="col-8 marginspace" style="margin-top:10px">


 
 

<h2></h2>
 
 
 


  
<a href="<?php echo site_url('/missions'); ?>" class="btn btn-secondary" role="button" aria-pressed="true">Immobiliers</a>
<a href="<?php echo site_url('/immobilier/'.$gestion['immeuble'].'/'.$immeuble['TF'])?>" class="btn btn-secondary" role="button" aria-pressed="true">Immeuble</a>

<a class="btn btn-primary active"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Local
  </a>
  
<li class="list-group-item"> <div class="row">
    
    <div class="col-4">	
       <label>Code TF : </label><b> <?php  echo $fichetechnique['Code_TF']; ?></b>

</div>
<div class="col-4">	
<label>Adresse : </label><b> <?php  echo $fichetechnique['AdresseAdmin']; ?></b>


</div>
<div class="col-4">	
<label>Créé : </label><b> <?php echo $immeuble_id['Created_date']; ?></b>

</div>
 
 </li>
<div class="con">
   
<?php echo form_open('local/updaterevente/'.$revente['id']); ?>
<div class="form-group">
<div class="alert alert-primary" role="alert">
Dossier Revente
</div>
 
  </div> 

<div class="row">
  
<input type="hidden" class="form-control" name="local" value="<?php echo $gestion['local'];?>">
<input type="hidden" class="form-control" name="immeuble" value="<?php echo $gestion['immeuble'];?>">
<div class="col-3">
<div class="form-group">
<label>N°Dossier Revente</label>
<input type="text" class="form-control" name="NdossierRevente" placeholder="N°Dossier Revente" value="<?php echo $revente["NdossierRevente"];?>">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>N°Decision</label>
<input type="text" class="form-control" name="Ndecision" placeholder="N°Decision" value="<?php echo $revente["Ndecision"];?>">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Type de Vente</label>
<input type="text" class="form-control" name="TypeVente" placeholder="Type de Vente" value="<?php echo $revente["TypeVente"];?>">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Nature Occupant</label>
<input type="text" class="form-control" name="NatureOccupant" placeholder="Nature Occupant" value="<?php echo $revente["NatureOccupant"];?>">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Code Occupant</label>
<input type="text" class="form-control" name="CodeOccupant" placeholder="Code Occupant" value="<?php echo $revente["CodeOccupant"];?>">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Nom & Prenom</label>
<input type="text" class="form-control" name="NomPrenom" placeholder="Nom & Prenom" value="<?php echo $revente["NomPrenom"];?>" >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>CIN</label>
<input type="text" class="form-control" name="CIN" placeholder="CIN" value="<?php echo $revente["CIN"];?>" >
</div>
</div>

<div class="col-3">
<div class="form-group">
<label>PrixExpertise</label>
<input type="text" class="form-control" name="PrixExpertise" placeholder="PrixExpertise" value="<?php echo $revente["PrixExpertise"];?>" >
</div>
</div>
 

<div class="col-3">
<div class="form-group">
<label>PrixSocial</label>
<input type="text" class="form-control" name="PrixSocial" placeholder="PrixSocial" value="<?php echo $revente["PrixSocial"];?>" >
</div>
</div>

<div class="col-3">
<div class="form-group">
<label>PrixSocialActualise</label>
<input type="text" class="form-control" name="PrixSocialActualise" placeholder="PrixSocialActualise" value="<?php echo $revente["PrixSocialActualise"];?>" >
</div>
</div>
 
</div>
    
<div class="form-group">
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  </div>
  

  </div>
 </form>
 

 


 <div class="con">
 
 <?php echo form_open('local/create_commission_national/'.$gestion['local']); ?>
<div class="form-group">
<div class="alert alert-primary" role="alert">
Commision Nationale De Cession
</div>
 
  </div> 

<div class="row">
  
<input type="hidden" class="form-control" name="local" value="<?php echo $gestion['local'];?>">
<input type="hidden" class="form-control" name="immeuble" value="<?php echo $gestion['immeuble'];?>">
<div class="col-3">
   <div class="form-group">
<label>Objet</label>
<input type="text" class="form-control" name="Objet" placeholder="Nom d'occupant">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>NPV</label>
<input type="text" class="form-control" name="NPV" placeholder="NPV">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>PV</label>
<input type="text" class="form-control" name="PV" placeholder="PV">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Date</label>
<input type="date" class="form-control" name="Date" placeholder="Date">
</div>
</div>

 
    

</div>
<div class="form-group">
  <button type="submit" class="btn btn-primary">Ajouter</button>
  </div>
  
 </form>
 
 <ul class="list-group" style="margin-bottom: 50px">
 <?php if(empty($com_nats)) echo  "   <div class='alert alert-danger' role='alert'>
  Liste vide
</div> ";
else echo '<li class="list-group-item"> <div class="row" >
      
<div class="col-3">	
   <b>Objet</b>

</div>
 
<div class="col-2">	
<b>NPV</b>

</div>
<div class="col-2">	
<b>PV</b>

</div>
<div class="col-2">	
<b>Date</b>

</div>
</div></li>' ?>
  
  <h2></h2>
  <?php foreach($com_nats as $com_nat) : ?>
  
  <a   class="list-group-item list-group-item-action list-group-item-primary">
  <div class="row">
  
  <div class="col-3">	
       <?php echo $com_nat['Objet'];?> 
  
  </div>
  <div class="col-2">	
       <?php echo $com_nat['NPV'];?> 
  
  </div>
  <div class="col-2">	
       <?php echo $com_nat['PV'];?> 
  
  </div>
  <div class="col-2">	
       <?php echo $com_nat['Date'];?> 
    
  </div>
 
    </div>
  </a>
 
  
  <?php endforeach ?>
  </ul>


 <?php echo form_open('local/create_resultat_nat/'.$res_nat['id']); ?>
<div class="form-group">
<div class="alert alert-primary" role="alert">
Resultat de Commission Nationale De Cession
</div>
 
  </div> 

<div class="row">
  
<input type="hidden" class="form-control" name="local" value="<?php echo $gestion['local'];?>">
<input type="hidden" class="form-control" name="immeuble" value="<?php echo $gestion['immeuble'];?>">

 
<div class="col-3">
<div class="form-group">
<label>Nom de l'acquéreur</label>
<input type="text" class="form-control" name="NomAcq" placeholder="Nom de l'acquéreur" value="<?php echo $res_nat['NomAcq'];?>" >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Prénom</label>
<input type="text" class="form-control" name="Prenom" placeholder="Prénom"  value="<?php echo $res_nat['Prenom'];?>">
</div>
</div>
<div class="col-4">
<div class="form-group">
<label>Type De Prix</label>
<div class="btn-group btn-group-toggle" data-toggle="buttons">

 
  <?php  if ($res_nat['typeprix']=="Prix Social") echo '<label class="btn btn-secondary  active"> <input type="radio" name="typeprix" id="option2" autocomplete="off" value="Prix Social" checked> Prix Social   </label>'  ;
         else echo '<label class="btn btn-secondary "> <input type="radio" name="typeprix" id="option2" autocomplete="off" value="Prix Social" > Prix Social   </label>';
  
  
  if ($res_nat['typeprix']=="Prix Expertisé") echo '<label class="btn btn-secondary  active"><input type="radio" name="typeprix" id="option3" autocomplete="off" value="Prix Expertisé" checked>  Prix Expertisé </label>'  ;
         else echo  '<label class="btn btn-secondary "> <input type="radio" name="typeprix" id="option" autocomplete="off" value="Prix Expertisé">Prix Expertisé   </label>';
  
  ?>
 
</div> 
</div>
</div>
</div>

<div class="form-group">
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  </div>
  

 
 </form>

 </div>
<div class="con">
 
 <?php echo form_open('local/create_commission_interne/'.$gestion['local']); ?>
<div class="form-group">
<div class="alert alert-primary" role="alert">
Commision Interne de Prix
</div>
 
  </div> 

<div class="row">
  
<input type="hidden" class="form-control" name="local" value="<?php echo $gestion['local'];?>">
<input type="hidden" class="form-control" name="immeuble" value="<?php echo $gestion['immeuble'];?>">
<div class="col-3">
<div class="form-group">

<label>Objet</label>
<input type="text" class="form-control" name="Objet" placeholder="Nom d'occupant" >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>NPV</label>
<input type="text" class="form-control" name="NPV" placeholder="NPV" >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>PV</label>
<input type="text" class="form-control" name="PV" placeholder="PV">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Date</label>
<input type="date" class="form-control" name="Date" placeholder="Date">
</div>
</div>

<div class="col-3">
<div class="form-group">
 
<button type="submit" class="btn btn-primary">Ajouter</button>
</div>
</div>
    
 
  
</div>
 
 </form>


<ul class="list-group" style="margin-bottom: 50px">
 <?php if(empty($com_nats)) echo  "   <div class='alert alert-danger' role='alert'>
  Liste vide
</div> ";
else echo '<li class="list-group-item"> <div class="row" >
      
<div class="col-3">	
   <b>Objet</b>

</div>
 
<div class="col-2">	
<b>NPV</b>

</div>
<div class="col-2">	
<b>PV</b>

</div>
<div class="col-2">	
<b>Date</b>

</div>
</div></li>' ?>
  
  <h2></h2>
  <?php foreach($com_inters as $com_inter) : ?>
  
  <a   class="list-group-item list-group-item-action list-group-item-primary">
  <div class="row">
  
  <div class="col-3">	
       <?php echo $com_inter['Objet'];?> 
  
  </div>
  <div class="col-2">	
       <?php echo $com_inter['NPV'];?> 
  
  </div>
  <div class="col-2">	
       <?php echo $com_inter['PV'];?> 
  
  </div>
  <div class="col-2">	
       <?php echo $com_inter['Date'];?> 
    
  </div>
 
    </div>
  </a>
 
  
  <?php endforeach ?>
  </ul>
 
 <?php echo form_open('local/create_resultat_interne/'.$res_inter['id']); ?>
<div class="form-group">
<div class="alert alert-primary" role="alert">
Resultat De Commission Interne De Prix
</div>
 
  </div> 

<div class="row">
  
<input type="hidden" class="form-control" name="local" value="<?php echo $gestion['local'];?>">
<input type="hidden" class="form-control" name="immeuble" value="<?php echo $gestion['immeuble'];?>">
 
<div class="col-3">
<div class="form-group">
<label>Prix Definitife</label>
<input type="text" class="form-control" name="PrixDef" placeholder="Prix Definitife"  value="<?php echo $res_inter['PrixDef'];?>">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Date</label>
<input type="date" class="form-control" name="Date" placeholder="Date" value="<?php echo $res_inter['Date'];?>">
</div>
</div> 
</div>
 
<div class="form-group">
 
<button type="submit" class="btn btn-primary">Enregistrer</button>
 
</div> 
    
 
  

 
 </form>



 
</div>



<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Précédente</a>
    </li>
    
    <li class="page-item"><a class="page-link" href="<?php echo site_url('/local/'.$gestion['local'].'/'.$gestion['codelocal']);  ?>">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item">
      <a class="page-link" >Suivante</a>
    </li>
  </ul>
</nav>

 
</div>
  