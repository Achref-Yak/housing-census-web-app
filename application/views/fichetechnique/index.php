 
<?php foreach($fiches as $fiche) : ?>
	
	<div class="row"  >
	
		<div class="col-md-9">
		<div class="col-md-3">
		<h3><?php echo "TF : ".$fiche['Code_TF']; ?></h3>
		</div>
			<small class="post-date">Posted on: <?php echo $fiche['Code_TF']; ?>  </small><br>
		<?php echo word_limiter($fiche['Code_TF'], 60); ?>
		<br><br>
		<p><a class="btn btn-default" href="<?php echo site_url('/fichetechnique/'.$fiche['Code_TF']); ?>">Read More</a></p>
		</div>
	</div>
<?php endforeach; ?>
<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>