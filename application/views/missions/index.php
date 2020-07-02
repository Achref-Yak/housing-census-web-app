 
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