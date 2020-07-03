 

<?php echo validation_errors(); ?>
<h3>Gestion</h3>
<?php echo form_open('local/updatelocal/'.$gestion['id']); ?>
<div class="form-group">
    
    <input type="text" class="form-control" name="id" value="<?php echo $gestion['id'];?>">
  </div>
  <div class="form-group">
    <label>disponibilite</label>
    <input type="text" class="form-control" name="disponibilite" placeholder="disponibilite" value="<?php echo $gestion['disponibilite'];?>">
  </div>
  <div class="form-group">
    <label>netage</label>
    <input type="text" class="form-control" name="netage" placeholder="netage" value="<?php echo $gestion['netage'];?>">
  </div>
  <div class="form-group">
    <label>codelocal</label>
    <input type="text" class="form-control" name="codelocal" placeholder="codelocal" value="<?php echo $gestion['codelocal'];?>">
  </div>
  <div class="form-group">
    <label>naturelocal</label>
    <input type="text" class="form-control" name="naturelocal" placeholder="naturelocal" value="<?php echo $gestion['naturelocal'];?>">
  </div>c
  <div class="form-group">
    <label>numeroplan</label>
    <input type="text" class="form-control" name="numeroplan" placeholder="numeroplan" value="<?php echo $gestion['numeroplan'];?>">
  </div>
  <div class="form-group">
    <label>surface</label>
    <input type="text" class="form-control" name="surface" placeholder="surface" value="<?php echo $gestion['surface'];?>">
  </div>
  <div class="form-group">
    <label>usag</label>
    <input type="text" class="form-control" name="usag" placeholder="usage" value="<?php echo $gestion['usag'];?>" >
  </div>
  <div class="form-group">
    <label>dependancebat</label>
    <input type="text" class="form-control" name="dependancebat" placeholder="dependancebat" value="<?php echo $gestion['dependancebat'];?>">
  </div>
  <div class="form-group">
    <label>surfacebat</label>
    <input type="text" class="form-control" name="surfacebat" placeholder="surfacebat" value="<?php echo $gestion['surfacebat'];?>">
  </div>
  <div class="form-group">
    <label>dependancenonbat</label>
    <input type="text" class="form-control" name="dependancenonbat" placeholder="dependancenonbat" value="<?php echo $gestion['dependancenonbat'];?>" >
  </div>
  <div class="form-group">
    <label>surfacenonbat</label>
    <input type="text" class="form-control" name="surfacenonbat" placeholder="surfacenonbat" value="<?php echo $gestion['surfacenonbat'];?>" >
  </div>
  <input type="text" class="form-control" name="immeuble" placeholder="immeuble" value="<?php echo $gestion['immeuble'];?>" >
  <button type="submit" class="btn btn-default">Submit</button>

 </form>
 
 

 <h3>Gestion</h3>
<?php echo form_open('local/updatehistorique/'.$histo['id']); ?>
<div class="form-group">
    
    <input type="text" class="form-control" name="id" value="<?php echo $histo['id'];?>">
  </div>
  <div class="form-group">
    <label>nomoccupant</label>
    <input type="text" class="form-control" name="nomoccupant" placeholder="nomoccupant" value="<?php echo $histo['nomoccupant'];?>">
  </div>
  <div class="form-group">
    <label>cinpassport</label>
    <input type="text" class="form-control" name="cinpassport" placeholder="cinpassport" value="<?php echo $histo['cinpassport'];?>">
  </div>
  <div class="form-group">
    <label>lieuemission</label>
    <input type="text" class="form-control" name="lieuemission" placeholder="lieuemission" value="<?php echo $histo['lieuemission'];?>">
  </div>
  <div class="form-group">
    <label>dateemission</label>
    <input type="text" class="form-control" name="dateemission" placeholder="dateemission" value="<?php echo $histo['dateemission'];?>">
  </div>c
  <div class="form-group">
    <label>typeoccupant</label>
    <input type="text" class="form-control" name="typeoccupant" placeholder="typeoccupant" value="<?php echo $histo['typeoccupant'];?>">
  </div>
  <div class="form-group">
    <label>codeoccupant</label>
    <input type="text" class="form-control" name="codeoccupant" placeholder="codeoccupant" value="<?php echo $histo['codeeoccupant'];?>">
  </div>
  <div class="form-group">
    <label>contradatedebut</label>
    <input type="date" class="form-control" name="contradatedebut" placeholder="contradatedebut" value="<?php echo $histo['contradatedebut'];?>" >
  </div>
  <div class="form-group">
    <label>dependancebat</label>
    <input type="date" class="form-control" name="contradatefin" placeholder="contradatefin" value="<?php echo $histo['contradatefin'];?>">
  </div>
  <div class="form-group">
    <label>surfacebat</label>
    <input type="date" class="form-control" name="periodecorresdu" placeholder="periodecorresdu" value="<?php echo $histo['periodecorresdu'];?>">
  </div>
  <div class="form-group">
    <label>dependancenonbat</label>
    <input type="date" class="form-control" name="naturepiececon" placeholder="naturepiececon" value="<?php echo $histo['naturepiececon'];?>" >
  </div>
  <div class="form-group">
    <label>dependancenonbat</label>
    <input type="text" class="form-control" name="naturepiececon" placeholder="naturepiececon" value="<?php echo $histo['naturepiececon'];?>" >
  </div>
  <div class="form-group">
    <label>naturepiececon</label>
    <input type="text" class="form-control" name="naturepiececon" placeholder="naturepiececon" value="<?php echo $histo['naturepiececon'];?>" >
  </div>
  <div class="form-group">
    <label>montantloyerencaisse</label>
    <input type="text" class="form-control" name="montantloyerencaisse" placeholder="montantloyerencaisse" value="<?php echo $histo['montantloyerencaisse'];?>" >
  </div>
  <div class="form-group">
    <label>loyerdedepart</label>
    <input type="text" class="form-control" name="loyerdedepart" placeholder="loyerdedepart" value="<?php echo $histo['loyerdedepart'];?>" >
  </div>
  <div class="form-group">
    <label>loyeractuel</label>
    <input type="text" class="form-control" name="loyeractuel" placeholder="loyeractuel" value="<?php echo $histo['loyeractuel'];?>" >
  </div>
  <div class="form-group">
    <label>fraisocc</label>
    <input type="text" class="form-control" name="fraisocc" placeholder="fraisocc" value="<?php echo $histo['fraisocc'];?>" >
  </div>
  <div class="form-group">
    <label>fraisrecu</label>
    <input type="text" class="form-control" name="fraisrecu" placeholder="fraisrecu" value="<?php echo $histo['fraisrecu'];?>" >
  </div>
  <div class="form-group">
    <label>tauxact</label>
    <input type="text" class="form-control" name="tauxact" placeholder="tauxact" value="<?php echo $histo['tauxact'];?>" >
  </div>
  <input type="text" class="form-control" name="immeuble" placeholder="immeuble" value="<?php echo $histo['immeuble'];?>" >
  <button type="submit" class="btn btn-default">Submit</button>

 </form>
 
 