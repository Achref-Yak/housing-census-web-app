
    <div class="col-8 marginspace"  style="margin-top:10px">
 


<div class="con">
<div class="alert alert-light" role="alert">
<b>Immobiliers Non Affectées</b>
 
</div>
 
<div class="row" >

</div>
<div class="row" style='margin-bottom:20px'>

<div class="col-4">	
    <b>Titre Foncier</b>

</div>
<div class="col-4">	
     <b>Adresse</b>

</div>
<div class="col-4">	
    <b>Créé</b>

</div>
 
</div>
<?php foreach($missionsNf as $immeuble) : ?>

<a href="<?php echo site_url('/immobilier/'.$immeuble['Immeuble_id'].'/'.$immeuble['Code_TF']); ?>" class="list-group-item list-group-item-action list-group-item-light">
<div class="row">

<div class="col-4">	
<img src='<?php echo base_url(); ?>assets/imm.png'>
     <?php echo $immeuble['Code_TF'];?> 

</div>
<div class="col-4">	
<img src='<?php echo base_url(); ?>assets/gps.png'>
     <?php echo $immeuble['Adresse'];?> 

</div>
<div class="col-4">	
<img src='<?php echo base_url(); ?>assets/heu.png'>
<?php echo $immeuble['Created_date'];?> 

</div>
 
</div>

</a>
<h2>   </h2>


<?php endforeach ?>

</div>



<div class="con">
<div class="alert alert-light" role="alert">
<b>Immobiliers  Affectées</b>
</div>
 

<div class="row" style='margin-bottom:20px'>

<div class="col-4">	
    <b>Titre Foncier</b>

</div>
<div class="col-4">	
     <b>Adresse</b>

</div>
<div class="col-2">	
    <b>Technicien</b>

</div>
<div class="col-2">	
    <b>Créé</b>

</div>
 
</div>

<?php foreach($missionsAf as $mission) : ?>

<a href="<?php echo site_url('/immobilier/'.$mission['Immeuble_id'].'/'.$mission['Code_TF']); ?>" class="list-group-item list-group-item-action list-group-item-light">
<div class="row">

<div class="col-4">	
     <img src='<?php echo base_url(); ?>assets/imm.png'>
     <?php echo $mission['Code_TF'];?> 

</div>
<div class="col-4">	
 
<img src='<?php echo base_url(); ?>assets/gps.png'>
     <?php echo $mission['Adresse'];?> 

</div>
<div class="col-2">	
<img src='<?php echo base_url(); ?>assets/imm.png'>
     <?php echo $mission['Nom'];?> 

</div>

<div class="col-2">	
<img src='<?php echo base_url(); ?>assets/heu.png'>
     <?php echo $mission['Created_date'];?> 

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
 