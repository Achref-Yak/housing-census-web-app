
    <div class="col-8 marginspace"  style="margin-top:10px">
 


<div class="con">
<div class="alert alert-primary" role="alert">
Immobiliers  Non Affectée
</div>
 
<div class="row">

</div>

<?php foreach($missionsNf as $immeuble) : ?>

<a href="<?php echo site_url('/immobilier/'.$immeuble['Immeuble_id'].'/'.$immeuble['Code_TF']); ?>" class="list-group-item list-group-item-action list-group-item-primary">
<div class="row">

<div class="col-4">	
     <?php echo $immeuble['Code_TF'];?> 

</div>
<div class="col-4">	
     <?php echo $immeuble['Adresse'];?> 

</div>
<div class="col-4">	
     <?php echo $immeuble['Adresse'];?> 

</div>
 
</div>

</a>
<h2>   </h2>


<?php endforeach ?>

</div>


<div class="con">
<div class="alert alert-primary" role="alert">
Immobiliers  Affectées
</div>

<div class="row">

<div class="col-4">	
    Titre Foncier

</div>
<div class="col-4">	
     Adresse

</div>
<div class="col-4">	
    Technicien

</div>
 
</div>

<?php foreach($missionsAf as $mission) : ?>

<a href="<?php echo site_url('/immobilier/'.$mission['Immeuble_id'].'/'.$mission['Code_TF']); ?>" class="list-group-item list-group-item-action list-group-item-primary">
<div class="row">

<div class="col-4">	
     <?php echo $mission['Code_TF'];?> 

</div>
<div class="col-4">	
     <?php echo $mission['Adresse'];?> 

</div>
<div class="col-4">	
     <?php echo $mission['Nom'];?> 

</div>
 
</div>

</a>
<h2>   </h2>


<?php endforeach ?>
</ul>
  </div>
      </div>
	</div>
  </div>
</div>
 