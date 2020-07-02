 

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
    <input type="text" class="form-control" name="usag" placeholder="usage" value="<?php echo $gestion['Zone'];?>" >
  </div>
  <div class="form-group">
    <label>dependancebat</label>
    <input type="text" class="form-control" name="dependancebat" placeholder="dependancebat" value="<?php echo $gestion['Localite'];?>">
  </div>
  <div class="form-group">
    <label>surfacebat</label>
    <input type="text" class="form-control" name="surfacebat" placeholder="surfacebat" value="<?php echo $gestion['Governorat'];?>">
  </div>
  <div class="form-group">
    <label>dependancenonbat</label>
    <input type="text" class="form-control" name="dependancenonbat" placeholder="dependancenonbat" value="<?php echo $gestion['CodePostal'];?>" >
  </div>
  <div class="form-group">
    <label>surfacenonbat</label>
    <input type="text" class="form-control" name="surfacenonbat" placeholder="surfacenonbat" value="<?php echo $gestion['CodePostal'];?>" >
  </div>
  <input type="text" class="form-control" name="immeuble" placeholder="immeuble" value="<?php echo $gestion['immeuble'];?>" >
  <button type="submit" class="btn btn-default">Submit</button>

 </form>
 
 

  <h3>Achat</h3>
  <?php echo form_open('immobilier/updateachat/'.$gestion['immeuble']); ?> 
  <input type="hidden" class="form-control" name="id" placeholder="devise" value="<?php echo $achat['id'];?>" >
 <div class="form-group">
   <label>devise</label>
   <input type="text" class="form-control" name="devise" placeholder="devise" value="<?php echo $achat['devise'];?>" >
 </div>

 <div class="form-group">
   <label>prixAchat</label>
   <input type="text" class="form-control" name="prixAchat" placeholder="prixAchat" value="<?php echo $achat['prixAchat'];?>"  >
 </div>
 <div class="form-group">
   <label>tauxDeChange</label>
   <input type="text" class="form-control" name="tauxDeChange" placeholder="tauxDeChange" value="<?php echo $achat['tauxDeChange'];?>">
 </div>
 <div class="form-group">
   <label>Date Sign SNIF</label>
   <input type="text" class="form-control" name="dateSignSnif" placeholder="dateSignSnif" value="<?php echo $achat['dateSignSnif'];?>">
 </div>c
 <div class="form-group">
   <label>dateTransferProp</label>
   <input type="text" class="form-control" name="dateTransferProp" placeholder="dateTransferProp" value="<?php echo $achat['dateTransferProp'];?>">
 </div>
 <div class="form-group">
   <label>QuoteParteEtat</label>
   <input type="text" class="form-control" name="QuoteParteEtat" placeholder="QuoteParteEtat" value="<?php echo $achat['QuoteParteEtat'];?>">
 </div>
 <div class="form-group">
   <label>DateTransEtat</label>
   <input type="date" class="form-control" name="DateTransEtat" placeholder="DateTransEtat" value="<?php echo $achat['DateTransEtat'];?>">
 </div>
 <div class="form-group">
   <label>NDecisionGerance</label>
   <input type="text" class="form-control" name="NDecisionGerance" placeholder="NDecisionGerance" value="<?php echo $achat['NDecisionGerance'];?>">
 </div>
 <div class="form-group">
   <label>DateDecision</label>
   <input type="date" class="form-control" name="DateDecision" placeholder="DateDecision" value="<?php echo $achat['DateDecision'];?>">
 </div>
 <div class="form-group">
   <label>DateAnnulation</label>
   <input type="date" class="form-control" name="DateAnnulation" placeholder="DateAnnulation" value="<?php echo $achat['DateAnnulation'];?>">
 </div>
 <input type="hidden" class="form-control" name="immeuble"  value="<?php echo $gestion['immeuble'];?>">

 <button type="submit" class="btn btn-default">Submit</button>

 </form>


 <h3>Proprietaire du Bien Immobilier</h3>
 <?php echo form_open('immobilier/create_prop_bien/'.$gestion["immeuble"].''); ?> 
 <div class="form-group">
   <label>proprietaire</label>
   <input type="text" class="form-control" name="proprietaire" placeholder="proprietaire" >
 </div>
 <div class="form-group">
   <label>prixAchat</label>
 
   <input type="text" class="form-control" name="nationalite" placeholder="nationalite" >
   <input type="text" class="form-control" name="quotepart" placeholder="quotepart" >
   <input type="text" class="form-control" name="adresse" placeholder="adresse" >
   <input type="text" class="form-control" name="rip" placeholder="rip" >
   <input type="hidden" class="form-control" name="immeuble" placeholder="immeuble" value="<?php echo $gestion['immeuble'] ?>">
 </div>
 <button type="submit" class="btn btn-default">Submit</button>

</form>



<h3>Reglement du Proprietaire</h3>
 <?php echo form_open('immobilier/create_prop_reglement/'.$gestion["immeuble"].''); ?> 
 <div class="form-group">
   <label>proprietaire</label>
   <input type="text" class="form-control" name="proprietaire" placeholder="proprietaire" >
 </div>
 <div class="form-group">
   <label>prixAchat</label>
 
   <input type="text" class="form-control" name="du" placeholder="du" >
   <input type="text" class="form-control" name="au" placeholder="au" >
   <input type="text" class="form-control" name="mentantReglement" placeholder="mentantReglement" >
 
   <input type="hidden" class="form-control" name="immeuble" placeholder="immeuble" value="<?php echo $gestion['immeuble'] ?>">
 </div>
 <button type="submit" class="btn btn-default">Submit</button>

</form>