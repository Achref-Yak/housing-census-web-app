 

<?php echo validation_errors(); ?>

 




 
 

  


 





    <div class="col-8 marginspace" style="margin-top:10px">
    <?php if($this->session->flashdata('prop_reglement')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('prop_reglement').'</p>'; ?>
      <?php endif; ?>
      <?php if($this->session->flashdata('prop_bien')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('prop_bien').'</p>'; ?>
      <?php endif; ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
 
    <li class="breadcrumb-item"><a href="<?php echo site_url('/missions'); ?>">Immobiliers</a></li>
    <li class="breadcrumb-item active" aria-current="page">Immeuble</li>
    <li class="breadcrumb-item" aria-current="page"> <a   data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Local
  </a></li>
  <li class="breadcrumb-item" aria-current="page">   <a href="<?php echo site_url('/local/create/'.$gestion['immeuble'].'/'.$gestion['TF']); ?>">Ajouter Local</a></li>

   
 
  </ol>
 
</nav>

<li class="list-group-item"> <div class="row">
    
    <div class="col-4">	
       <label>Code TF : </label><b> <?php  echo $gestion['TF']; ?></b>

</div>
<div class="col-4">	
<label>Adresse : </label><b> <?php  echo $gestion['AdresseFR']; ?></b>


</div>
<div class="col-4">	
<label>Créé : </label><b> <?php  echo "7/5/2020" ?></b>

</div>
 
 </li>

<div class="collapse marginspace con" id="collapseExample">
     
<h4>Liste des locaux</h4> 
 
 


<ul class="list-group">
<?php if(empty($locaux)) echo  "   <div class='alert alert-danger' role='alert'>
  Liste vide
</div>"; else echo "<li class='list-group-item'> <div class='row'>
    
   
<div class='col-6'>	
<b>Code Local</b>

</div>
<div class='col-6'>	
<b>Date Creation</b>

</div>

</div></li>
<h2>   </h2>";?>
<?php foreach($locaux as $local) : ?>


    <a href="http://localhost/snittest/local/<?php echo $local['id']."/".$local['codelocal'] ?>" class="list-group-item list-group-item-action list-group-item-primary">
<div class="row">
    
    <div class="col-6">	
         <?php echo $local['codelocal'];?> 

</div>
<div class="col-6">	
         <?php echo $local['datecreation'];?> 

</div>
 
 
</div>

</a>
<h2>   </h2>


<?php endforeach ?>
</ul>



 
 
  
      </div>      
      <div class="con">
    
    <?php echo form_open('immobilier/updategestion/'.$gestion['immeuble'].'/'.$gestion['TF']); ?>
    <div class="form-group">
        
        <input type="hidden" class="form-control" name="id" value="<?php echo $gestion['id'];?>">
      </div>
      <div class="form-group">
      <div class="alert alert-info" role="alert">
<b>Dossier Gestion</b>
</div>
 
     
      </div>
    
      <div class="row">
  
   
  
 
            <div class="col-3">
                <div class="form-group">
                    <label>TF</label>
                    <input type="text" class="form-control" name="TF" placeholder="TF" value="<?php echo $gestion['TF'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                  <label>TypeTF</label>
                  <input type="text" class="form-control" name="TypeTF" placeholder="TypeTF" value="<?php echo $gestion['TypeTF'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                  <label>NombreEtage</label>
                  <input type="text" class="form-control" name="NombreEtage" placeholder="NombreEtage" value="<?php echo $gestion['NombreEtage'];?>">
                </div>
            </div>
            <div class="col-3">
            <div class="form-group">
              <label>NatureConst</label>
              <input type="text" class="form-control" name="NatureConst" placeholder="NatureConst" value="<?php echo $gestion['NatureConst'];?>">
              </div>
            </div>
    </div>

    <div class="row">
            <div class="col-3">
                <div class="form-group">
                <label>AnneConst</label>
                <input type="date" class="form-control" name="AnneConst" placeholder="AnneConst" value="<?php echo $gestion['AnneConst'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>AdresseFR</label>
                <input type="text" class="form-control" name="AdresseFR" placeholder="AdresseFR" value="<?php echo $gestion['AdresseFR'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>AdresseAR</label>
                <input type="text" class="form-control" name="AdresseAR" placeholder="AdresseAR" value="<?php echo $gestion['AdresseAR'];?>">
                </div>
            </div>
            <div class="col-3">
            <div class="form-group">
              <label>Zone</label>
              <input type="text" class="form-control" name="Zone" placeholder="Zone" value="<?php echo $gestion['Zone'];?>" >
              </div>
            </div>
    </div>

    <div class="row">
            <div class="col-3">
                <div class="form-group">
                <label>Localite</label>
    <input type="text" class="form-control" name="Localite" placeholder="Localite" value="<?php echo $gestion['Localite'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>Governorat</label>
    <input type="text" class="form-control" name="Governorat" placeholder="Governorat" value="<?php echo $gestion['Governorat'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>CodePostal</label>
    <input type="text" class="form-control" name="CodePostal" placeholder="CodePostal" value="<?php echo $gestion['CodePostal'];?>" >
                </div>
            </div>
            <div class="col-3">
            <div class="form-group">
            <label>EtapeGestionTitre</label>
    <input type="text" class="form-control" name="EtapeGestionTitre" placeholder="EtapeGestionTitre" value="<?php echo $gestion['EtapeGestionTitre'];?>">
              </div>
            </div>
    </div>
 
    <div class="row">
            <div class="col-3">
                <div class="form-group">
                <label>Bureau</label>
    <input type="text" class="form-control" name="Bureau" placeholder="Bureau" value="<?php echo $gestion['Bureau'];?>" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>PlanConst</label>
    <input type="text" class="form-control" name="PlanConst" placeholder="PlanConst" value="<?php echo $gestion['PlanConst'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>NombreLocaux</label>
    <input type="text" class="form-control" name="NombreLocaux" placeholder="NombreLocaux" value="<?php echo $gestion['NombreLocaux'];?>">
                </div>
            </div>
            <div class="col-3">
            <div class="form-group">
            <label>ContenanceTF</label>
    <input type="text" class="form-control" name="ContenanceTF" placeholder="ContenanceTF" value="<?php echo $gestion['ContenanceTF'];?>">
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control" name="immeuble" value="<?php echo $gestion['immeuble'] ?>">
  </div>


    </div>

   
  </div>
  <div class="row">
    <div class="form-group">
  <button type="submit" class="btn btn-primary enre">Enregistrer</button>
  </div>   

 
 </form>
    </div>
      </div>
  


       <div class="con marginspace">
    <?php echo form_open('immobilier/updateachat/'.$gestion['immeuble'].'/'.$gestion['TF']) ?> 
    <div class="form-group">
    <div class="alert alert-info" role="alert">
    <b>Dossier Achat</b>
  </div>

  </div> 
   
    <div class="row" >
    
      <input type="hidden" class="form-control" name="id" placeholder="devise" value="<?php echo $achat['id'];?>" >
   
 
            <div class="col-3">
                <div class="form-group">
                <label>devise</label>
                <input type="text" class="form-control" name="devise" placeholder="devise" value="<?php echo $achat['devise'];?>" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>prixAchat</label>
   <input type="text" class="form-control" name="prixAchat" placeholder="prixAchat" value="<?php echo $achat['prixAchat'];?>"  >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>tauxDeChange</label>
   <input type="text" class="form-control" name="tauxDeChange" placeholder="tauxDeChange" value="<?php echo $achat['tauxDeChange'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>Date Sign SNIF</label>
   <input type="date" class="form-control" name="dateSignSnif" placeholder="dateSignSnif" value="<?php echo $achat['dateSignSnif'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>dateTransferProp</label>
   <input type="date" class="form-control" name="dateTransferProp" placeholder="dateTransferProp" value="<?php echo $achat['dateTransferProp'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>QuoteParteEtat</label>
                 <input type="text" class="form-control" name="QuoteParteEtat" placeholder="QuoteParteEtat" value="<?php echo $achat['QuoteParteEtat'];?>">
            </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>DateTransEtat</label>
   <input type="date" class="form-control" name="DateTransEtat" placeholder="DateTransEtat" value="<?php echo $achat['DateTransEtat'];?>">
            </div>
            </div>
                        
         
     
  
  <input type="hidden" class="form-control" name="immeuble"  value="<?php echo $gestion['immeuble'];?>">
  </div>
  <div class="row">
<button type="submit" class="btn btn-primary enre" style="margin-bottom: 50px;">Enregister</button>
</div>  
</form>
<?php echo form_open('immobilier/create_gerance/'.$gestion['immeuble'].'/'.$achat['id'].'/'.$gestion['TF']); ?> 
<div class="row" >
<div class="col-3">
                <div class="form-group">
                <label>N°Décision Gérance</label>
   <input type="text" class="form-control" name="decisionGer" placeholder="N°Décision Gérance">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>Date Décision</label>
   <input type="date" class="form-control" name="dateDec" placeholder="Date Décision">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>Date d'annulation</label>
                 <input type="date" class="form-control" name="dateAnnul" placeholder="Date d'annulation"  >
            </div>
            </div>
             


 
 
             
     
             </div>
             <button type="submit" class="btn btn-primary">Ajouter</button>

             </form>   
      
             <ul class="list-group">
  <?php if(empty($gerances)) echo  "   <div class='alert alert-danger' role='alert'>
  Liste vide
</div> ";
else echo '<li class="list-group-item"> <div class="row">
      
<div class="col-3">	
   <b>Proprietaire</b>

</div>
<div class="col-2">	
<b>Nationalite</b>

</div>
<div class="col-2">	
<b>Quote Part</b>

</div>
<div class="col-2">	
<b>Adresse</b>

</div>
<div class="col-2">	
<b>Rip</b>

</div>
</div></li>' ?>
  
  <h2></h2>
  <?php foreach($gerances as $gerance) : ?>
  
  <a   class="list-group-item list-group-item-action list-group-item-primary">
  <div class="row">
  
  <div class="col-3">	
       <?php echo $gerance['decisionGer'];?> 
  
  </div>
  <div class="col-2">	
       <?php echo $gerance['dateDec'];?> 
  
  </div>
  <div class="col-2">	
       <?php echo $gerance['dateAnnul'];?> 
  
  </div>
   
  </div>
  
  </a>
  <h2>   </h2>
  
  
  <?php endforeach ?>
  </ul>
<div class="collapse show marginspace" id="collapseExamplce1">
  
  <?php echo form_open('immobilier/create_prop_bien/'.$gestion["immeuble"].'/'.$gestion['TF']); ?> 
  <div class="alert alert-info" role="alert"  style="margin-top:20px">
  <b>Proprietaire du Bien Immobilier</b>
  </div>
  <div class="row">
        <input type="hidden" class="form-control" name="id" placeholder="devise" value="<?php echo $achat['id'];?>" >
     
   
              <div class="col-3">
                  <div class="form-group">
                  <label>proprietaire</label>
                  <input type="text" class="form-control" name="proprietaire" placeholder="proprietaire" >
                  </div>
              </div>
              <div class="col-3">
                  <div class="form-group">
                  <label>Nationalite</label>
   
                  <input type="text" class="form-control" name="nationalite" placeholder="nationalite" >
                  </div>
              </div>
              <div class="col-3">
                  <div class="form-group">
                  <label>Quotepart</label>
                  <input type="text" class="form-control" name="quotepart" placeholder="quotepart" >
                  </div>
              </div>
              <div class="col-3">
                  <div class="form-group">
                  <label>Adresse</label>
                  <input type="text" class="form-control" name="adresse" placeholder="adresse" >
                  </div>
              </div>
              <div class="col-3">
                  <div class="form-group">
                  <label>Rip</label>
                  <input type="text" class="form-control" name="rip" placeholder="rip" >
                  </div>
              </div>
             
                  <input type="hidden" class="form-control" name="immeuble" placeholder="immeuble" value="<?php echo $gestion['immeuble'] ?>">
                  </div>
                  <button type="submit" class="btn btn-primary">Ajouter</button>
  
                  </form>
                  <ul class="list-group">
  <?php if(empty($propbiens)) echo  "   <div class='alert alert-danger' role='alert'>
  Liste vide
</div> ";
else echo '<li class="list-group-item"> <div class="row">
      
<div class="col-3">	
   <b>Proprietaire</b>

</div>
<div class="col-2">	
<b>Nationalite</b>

</div>
<div class="col-2">	
<b>Quote Part</b>

</div>
<div class="col-2">	
<b>Adresse</b>

</div>
<div class="col-2">	
<b>Rip</b>

</div>
</div></li>' ?>
  
  <h2></h2>
  <?php foreach($propbiens as $propbien) : ?>
  
  <a   class="list-group-item list-group-item-action list-group-item-primary">
  <div class="row">
  
  <div class="col-3">	
       <?php echo $propbien['proprietaire'];?> 
  
  </div>
  <div class="col-2">	
       <?php echo $propbien['nationalite'];?> 
  
  </div>
  <div class="col-2">	
       <?php echo $propbien['quotepart'];?> 
  
  </div>
  <div class="col-2">	
       <?php echo $propbien['adresse'];?> 
    
  </div>
  <div class="col-2">	
       <?php echo $propbien['rip'];?> 
       
  </div>
  </div>
  
  </a>
  <h2>   </h2>
  
  
  <?php endforeach ?>
  </ul>
   
  </div>    
<div class="collapse show marginspace" id="collapseExample">

<?php echo form_open('immobilier/create_prop_reglement/'.$gestion["immeuble"].'/'.$gestion['TF']); ?> 
<div class="alert alert-info" role="alert">
<b>Reglement du Proprietaire</b>

</div>
   
<div class="row">
      <input type="hidden" class="form-control" name="id" placeholder="devise" value="<?php echo $achat['id'];?>" >
   
 
            <div class="col-3">
                <div class="form-group">
                <label>proprietaire</label>
                <input type="text" class="form-control" name="proprietaire" placeholder="proprietaire" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>Du</label>
 
   <input type="date" class="form-control" name="du" placeholder="du" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>Au</label>
                <input type="date" class="form-control" name="au" placeholder="au" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>Mentant Reglement</label>
                <input type="text" class="form-control" name="mentantReglement" placeholder="mentantReglement" >
                </div>
            </div>
            
      </div>
      <button type="submit" class="btn btn-primary">Ajouter</button>
       
</form>
 


<ul class="list-group">
<?php if(empty($propregs)) echo  "   <div class='alert alert-danger' role='alert'>
  Liste vide
</div> ";

else echo '
<li class="list-group-item"> <div class="row">
    
    <div class="col-3">	
       <b>Proprietaire</b>

</div>
<div class="col-3">	
<b>Du</b>

</div>
<div class="col-3">	
<b>Au</b>

</div>
<div class="col-3">	
<b>Mentant Reglement</b>

</div>
</div></li>'
?>
<h2>   </h2>
<?php foreach($propregs as $propreg) : ?>

    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">
<div class="row">
    
    <div class="col-3">	
         <?php echo $propreg['proprietaire'];?> 

</div>
<div class="col-3">	
         <?php echo $propreg['du'];?> 

</div>
<div class="col-3">	
         <?php echo $propreg['au'];?> 

</div>
<div class="col-3">	
         <?php echo $propreg['mentantReglement'];?> 

</div>
</div>

</a>
<h2>   </h2>


<?php endforeach ?>
</ul>



 
 
  
      </div>

      </div>
<div class="con">
<div class="alert alert-info" role="alert">
<b>Photos d'immeuble</b>

</div>
<div class="row">
  
<?php foreach($photos as $photo) : ?>
 
 <figure class="col-md-4">
   <a href="http://localhost/snitapp<?php echo $photo['URL'] ?>" data-size="1600x1067">
     <img alt="picture" src="http://localhost/snitapp<?php echo $photo['URL'] ?>"
       class="img-fluid">
   </a>
 </figure>



 <?php endforeach ?>  

</div>
</div>
      
<div class="col-2">
      
    </div>
      </div>


    
    
      </div>
      
   
  </div>
</div>