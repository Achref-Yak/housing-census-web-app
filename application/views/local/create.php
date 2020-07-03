 

<?php echo validation_errors(); ?>
<h3>Gestidgfon</h3>
<?php echo form_open('local/createlocal/'.$id); ?>
<div class="form-group">
    
 
  </div>
  <div class="form-group">
    <label>disponibilite</label>
    <input type="text" class="form-control" name="immeuble"  value="<?php echo $id;?>" >
    <input type="text" class="form-control" name="disponibilite" placeholder="disponibilite"  >
  </div>
  <div class="form-group">
    <label>netage</label>
    <input type="text" class="form-control" name="netage" placeholder="netage" >
  </div>
  <div class="form-group">
    <label>codelocal</label>
    <input type="text" class="form-control" name="codelocal" placeholder="codelocal" >
  </div>
  <div class="form-group">
    <label>naturelocal</label>
    <input type="text" class="form-control" name="naturelocal" placeholder="naturelocal" >
  </div>c
  <div class="form-group">
    <label>numeroplan</label>
    <input type="text" class="form-control" name="numeroplan" placeholder="numeroplan" >
  </div>
  <div class="form-group">
    <label>surface</label>
    <input type="text" class="form-control" name="surface" placeholder="surface"  >
  </div>
  <div class="form-group">
    <label>usag</label>
    <input type="text" class="form-control" name="usag" placeholder="usage">
  </div>
  <div class="form-group">
    <label>dependancebat</label>
    <input type="text" class="form-control" name="dependancebat" placeholder="dependancebat"  >
  </div>
  <div class="form-group">
    <label>surfacebat</label>
    <input type="text" class="form-control" name="surfacebat" placeholder="surfacebat" 
  </div>
  <div class="form-group">
    <label>dependancenonbat</label>
    <input type="text" class="form-control" name="dependancenonbat" placeholder="dependancenonbat"   >
  </div>
  <div class="form-group">
    <label>surfacenonbat</label>
    <input type="text" class="form-control" name="surfacenonbat" placeholder="surfacenonbat"   >
    
   
</div>

 

 <h3>histo</h3>

<div class="form-group">
 
  </div>
  <div class="form-group">
    <label>nomoccupant</label>
    <input type="text" class="form-control" name="nomoccupant" placeholder="nomoccupant"  >
  </div>
  <div class="form-group">
    <label>cinpassport</label>
    <input type="text" class="form-control" name="cinpassport" placeholder="cinpassport"  >
  </div>
  <div class="form-group">
    <label>lieuemission</label>
    <input type="text" class="form-control" name="lieuemission" placeholder="lieuemission" >
  </div>
  <div class="form-group">
    <label>dateemission</label>
    <input type="text" class="form-control" name="dateemission" placeholder="dateemission" >
  </div>c
  <div class="form-group">
    <label>typeoccupant</label>
    <input type="text" class="form-control" name="typeoccupant" placeholder="typeoccupant" >
  </div>
  <div class="form-group">
    <label>codeoccupant</label>
    <input type="text" class="form-control" name="codeeoccupant" placeholder="codeoccupant"  >
  </div>
  <div class="form-group">
    <label>contradatedebut</label>
    <input type="date" class="form-control" name="contradatedebut" placeholder="contradatedebut"  >
  </div>

  <div class="form-group">
    <label>dependancebat</label>
    <input type="date" class="form-control" name="periodecorrespau" placeholder="contradatefin" >
  </div>
  <div class="form-group">
    <label>surfacebat</label>
    <input type="date" class="form-control" name="periodecorresdu" placeholder="periodecorresdu" >
  </div>

  <div class="form-group">
    <label>contradatefin</label>
    <input type="date" class="form-control" name="contradatefin" placeholder="contradatefin"  >
  </div>
  
  <div class="form-group">
    <label>dependancenonbat</label>
    <input type="date" class="form-control" name="naturepiececon" placeholder="naturepiececon"  >
  </div>
  <div class="form-group">
    <label>dependancenonbat</label>
    <input type="text" class="form-control" name="naturepiececon" placeholder="naturepiececon"  >
  </div>
  <div class="form-group">
    <label>naturepiececon</label>
    <input type="text" class="form-control" name="naturepiececon" placeholder="naturepiececon"  >
  </div>
  <div class="form-group">
    <label>montantloyerencaisse</label>
    <input type="text" class="form-control" name="montantloyerencaisse" placeholder="montantloyerencaisse"  >
  </div>
  <div class="form-group">
    <label>loyerdedepart</label>
    <input type="text" class="form-control" name="loyerdedepart" placeholder="loyerdedepart"   >
  </div>
  <div class="form-group">
    <label>loyeractuel</label>
    <input type="text" class="form-control" name="loyeractuel" placeholder="loyeractuel"   >
  </div>
  <div class="form-group">
    <label>fraisocc</label>
    <input type="text" class="form-control" name="fraisocc" placeholder="fraisocc" >
  </div>
  <div class="form-group">
    <label>fraisrecu</label>
    <input type="text" class="form-control" name="fraisrecu" placeholder="fraisrecu"  >
  </div>
  <div class="form-group">
    <label>tauxact</label>
    <input type="text" class="form-control" name="tauxact" placeholder="tauxact"   >
  </div>
   
  <button type="submit" class="btn btn-default">Submit</button>

 </form>
 
 