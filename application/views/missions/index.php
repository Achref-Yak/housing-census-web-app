<div class="fluid-container">
  <div class="row">
    <div class="col-2">
      <div class="sidenav" style="position:fixed">

      
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
      </div>
    </div>
    <div class="col-8 marginspace">
	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
 
    <li class="breadcrumb-item"><a href="http://localhost/snittest/missions">Missions</a></li>
    <li class="breadcrumb-item active" aria-current="page">Immobilier</li>
    <li class="breadcrumb-item active" aria-current="page"> 
    Local
   </li>
  </ol>
</nav>

<div class="con">

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
<?php foreach($missions as $mission) : ?>

<a href="<?php echo site_url('/immobilier/'.$mission['Immeuble_id']); ?>" class="list-group-item list-group-item-action list-group-item-primary">
<div class="row">

<div class="col-4">	
     <?php echo $mission['Code_TF'];?> 

</div>
<div class="col-4">	
     <?php echo $mission['Adresse'];?> 

</div>
<div class="col-4">	
     <?php echo $mission['UserName'];?> 

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
<?php foreach($missions as $mission) : ?>
	
	<div class="row"  >
	
		<div class="col-md-3">
		<h3><?php echo "TF : ".$mission['Code_TF']; ?></h3>
		<div class="col-md-3">
		<h3><?php echo "Lieu : ".$mission['Adresse']; ?></h3>
		
		</div>
			<small class="post-date">Posted on: <?php echo $mission['UserName']; ?>  </small><br>
		<?php echo word_limiter($mission['Adresse'], 60); ?>
		<br><br>
		<p><a class="btn btn-default" href="<?php echo site_url('/immobilier/'.$mission['Immeuble_id']); ?>">Read More</a></p>
		</div>
	</div>
<?php endforeach; ?>
<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>