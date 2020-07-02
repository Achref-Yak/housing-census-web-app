 
<?php foreach($missions as $mission) : ?>
	
	<div class="row"  >
	
		<div class="col-md-9">
		<div class="col-md-3">
		<h3><?php echo "TF : ".$mission['Adresse']; ?></h3>
		</div>
			<small class="post-date">Posted on: <?php echo $mission['Etat']; ?>  </small><br>
		<?php echo word_limiter($mission['Code_TF'], 60); ?>
		<br><br>
		<p><a class="btn btn-default" href="<?php echo site_url('/missions/'.$mission['Etat']); ?>">Read More</a></p>
		</div>
	</div>
<?php endforeach; ?>
<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>