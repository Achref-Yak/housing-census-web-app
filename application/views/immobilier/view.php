 

<?php echo validation_errors(); ?>
<h3>Gestion</h3>
<?php echo form_open('immobilier/updategestion'.$gestion['immeuble']); ?>
<div class="form-group">
    
    <input type="text" class="form-control" name="id" value="<?php echo $gestion['id'];?>">
  </div>
  <div class="form-group">
    <label>TF</label>
    <input type="text" class="form-control" name="TF" placeholder="TF" value="<?php echo $gestion['TF'];?>">
  </div>

  <div class="form-group">
    <label>TypeTF</label>
    <input type="text" class="form-control" name="TypeTF" placeholder="TypeTF" value="<?php echo $gestion['TypeTF'];?>">
  </div>
  <div class="form-group">
    <label>NatureConst</label>
    <input type="text" class="form-control" name="NatureConst" placeholder="NatureConst" value="<?php echo $gestion['NatureConst'];?>">
  </div>
  <div class="form-group">
    <label>AnneConst</label>
    <input type="text" class="form-control" name="AnneConst" placeholder="AnneConst" value="<?php echo $gestion['AnneConst'];?>">
  </div>c
  <div class="form-group">
    <label>AdresseFR</label>
    <input type="text" class="form-control" name="AdresseFR" placeholder="AdresseFR" value="<?php echo $gestion['AdresseFR'];?>">
  </div>
  <div class="form-group">
    <label>AdresseAR</label>
    <input type="text" class="form-control" name="AdresseAR" placeholder="AdresseAR" value="<?php echo $gestion['AdresseAR'];?>">
  </div>
  <div class="form-group">
    <label>Zone</label>
    <input type="text" class="form-control" name="Zone" placeholder="Zone" value="<?php echo $gestion['Zone'];?>" >
  </div>
  <div class="form-group">
    <label>Localite</label>
    <input type="text" class="form-control" name="Localite" placeholder="Localite" value="<?php echo $gestion['Localite'];?>">
  </div>
  <div class="form-group">
    <label>Governorat</label>
    <input type="text" class="form-control" name="Governorat" placeholder="Governorat" value="<?php echo $gestion['Governorat'];?>">
  </div>
  <div class="form-group">
    <label>CodePostal</label>
    <input type="text" class="form-control" name="CodePostal" placeholder="CodePostal" value="<?php echo $gestion['CodePostal'];?>" >
  </div>
  <div class="form-group">
    <label>Bureau</label>
    <input type="text" class="form-control" name="Bureau" placeholder="Bureau" value="<?php echo $gestion['Bureau'];?>" >
  </div>
  <div class="form-group">
    <label>EtapeGestionTitre</label>
    <input type="text" class="form-control" name="EtapeGestionTitre" placeholder="EtapeGestionTitre" value="<?php echo $gestion['EtapeGestionTitre'];?>">
  </div>
  <div class="form-group">
    <label>PlanConst</label>
    <input type="text" class="form-control" name="PlanConst" placeholder="PlanConst" value="<?php echo $gestion['PlanConst'];?>">
  </div>
  <div class="form-group">
    <label>NombreEtage</label>
    <input type="text" class="form-control" name="NombreEtage" placeholder="NombreEtage" value="<?php echo $gestion['NombreEtage'];?>" >
  </div>
  <div class="form-group">
    <label>NombreLocaux</label>
    <input type="text" class="form-control" name="NombreLocaux" placeholder="NombreLocaux" value="<?php echo $gestion['NombreLocaux'];?>">
  </div>
  <div class="form-group">
    <label>ContenanceTF</label>
    <input type="text" class="form-control" name="ContenanceTF" placeholder="ContenanceTF" value="<?php echo $gestion['ContenanceTF'];?>">
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control" name="immeuble" value="<?php echo $gestion['immeuble'] ?>">
  </div>
  <div class="form-group">
    <label>CodeImmeubilier</label>
    <input type="text" class="form-control" name="CodeImmeubilier" placeholder="CodeImmeublier" value="<?php echo $gestion['CodeImmeubilier'];?>">
  </div>
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