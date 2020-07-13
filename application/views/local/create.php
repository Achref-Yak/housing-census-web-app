 

 


    <div class="col-8 marginspace" style="margin-top:10px">
    <a href="<?php echo site_url('/missions'); ?>" class="btn btn-secondary " role="button" aria-pressed="true">Immobiliers</a>
      
      <a  href="<?php echo site_url('immobilier/'.$id.'/'.$tf); ?>" class="btn btn-secondary" role="button" aria-pressed="true">
      Immeuble
  </a>
  <a  href="<?php echo site_url('immobilier/'.$id.'/'.$tf); ?>" class="btn btn-primary active" role="button" aria-pressed="true">
      Ajouter Local
  </a>
  
  
<div class="con">
   
<?php echo form_open('local/createlocal/'.$id.'/'.$tf); ?>
<div class="form-group">
<h4>Dossier Gestion</h4>
  </div> 

<div class="row">
  
<input type="hidden" class="form-control" name="local"  >
<input type="hidden" class="form-control" name="immeuble" value="<?php echo $id ?>">
<div class="col-3">
<div class="form-group">
<label>Code Local</label>
<input type="text" class="form-control" name="codelocal" placeholder="Code Local" >
</div>
</div> 
<div class="col-3">
<div class="form-group">
<label>Nature Local</label>
<input type="text" class="form-control" name="naturelocal" placeholder="Nature Local"  >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Nature Plan</label>
<input type="text" class="form-control" name="numeroplan" placeholder="Numero Plan"  >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Nombre detage</label>
<input type="text" class="form-control" name="netage" placeholder="Nombre detage"  >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Disponibilite</label>
<input type="text" class="form-control" name="disponibilite" placeholder="Disponibilite" >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Suface</label>
<input type="text" class="form-control" name="surface" placeholder="Suface"  >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Usage</label>
<input type="text" class="form-control" name="usag" placeholder="Usage" >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Dependance bat</label>
<input type="text" class="form-control" name="dependancebat" placeholder="Dependance bat">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Surface Bat</label>
<input type="text" class="form-control" name="surfacebat" placeholder="Surface Bat" >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Dependance non bat</label>
<input type="text" class="form-control" name="dependancenonbat" placeholder="Dependance non bat">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Surfacenonbat</label>
<input type="text" class="form-control" name="surfacenonbat" placeholder="Surfacenonbat">
</div>
 
</div>
       

 
</div>
 


 

<div class="form-group">
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  </div> 

  
 </form>
</div>

</div>

 
 
 