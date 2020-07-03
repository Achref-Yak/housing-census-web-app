 

<?php echo validation_errors(); ?>
<h3>Gestidgfon</h3>
 
<div class="form-group">
    
<?php foreach($gestions as $gestion) : ?>
  </div>
  <div class="form-group">
    <label>codelocal</label>
    <input type="text" class="form-control" name="codelocal" placeholder="codelocal"  value="<?php echo $gestion['codelocal'];?>" >
  </div>
  <?php endforeach; ?>