 

<?php echo validation_errors(); ?>
<h3>Gestion</h3>
<?php echo form_open('immobilier/create'); ?>
  <div class="form-group">
    <label>TF</label>
    <input type="text" class="form-control" name="TF" placeholder="TF" >
  </div>

  <div class="form-group">
    <label>TypeTF</label>
    <input type="text" class="form-control" name="TypeTF" placeholder="TypeTF" >
  </div>
  <div class="form-group">
    <label>NatureConst</label>
    <input type="text" class="form-control" name="NatureConst" placeholder="NatureConst" >
  </div>
  <div class="form-group">
    <label>AnneConst</label>
    <input type="date" class="form-control" name="AnneConst" placeholder="AnneConst" >
  </div>c
  <div class="form-group">
    <label>AdresseFR</label>
    <input type="text" class="form-control" name="AdresseFR" placeholder="AdresseFR" >
  </div>
  <div class="form-group">
    <label>AdresseAR</label>
    <input type="text" class="form-control" name="AdresseAR" placeholder="AdresseAR">
  </div>
  <div class="form-group">
    <label>Zone</label>
    <input type="text" class="form-control" name="Zone" placeholder="Zone">
  </div>
  <div class="form-group">
    <label>Localite</label>
    <input type="text" class="form-control" name="Localite" placeholder="Localite">
  </div>
  <div class="form-group">
    <label>Governorat</label>
    <input type="text" class="form-control" name="Governorat" placeholder="Governorat" >
  </div>
  <div class="form-group">
    <label>CodePostal</label>
    <input type="text" class="form-control" name="CodePostal" placeholder="CodePostal">
  </div>
  <div class="form-group">
    <label>Bureau</label>
    <input type="text" class="form-control" name="Bureau" placeholder="Bureau" >
  </div>
  <div class="form-group">
    <label>EtapeGestionTitre</label>
    <input type="text" class="form-control" name="EtapeGestionTitre" placeholder="EtapeGestionTitre" >
  </div>
  <div class="form-group">
    <label>PlanConst</label>
    <input type="text" class="form-control" name="PlanConst" placeholder="PlanConst" >
  </div>
  <div class="form-group">
    <label>NombreEtage</label>
    <input type="text" class="form-control" name="NombreEtage" placeholder="NombreEtage" >
  </div>
  <div class="form-group">
    <label>NombreLocaux</label>
    <input type="text" class="form-control" name="NombreLocaux" placeholder="NombreLocaux">
  </div>
  <div class="form-group">
    <label>ContenanceTF</label>
    <input type="text" class="form-control" name="ContenanceTF" placeholder="ContenanceTF">
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control" name="immeuble" value="<?php echo $gestion['immeuble'] ?>">
  </div>
  <div class="form-group">
    <label>CodeImmeubilier</label>
    <input type="text" class="form-control" name="CodeImmeubilier" placeholder="CodeImmeublier">
  </div>
 
  
 <h3>Achat</h3>
 
  <div class="form-group">
    <label>devise</label>
    <input type="text" class="form-control" name="devise" placeholder="devise" >
  </div>

  <div class="form-group">
    <label>prixAchat</label>
    <input type="text" class="form-control" name="prixAchat" placeholder="prixAchat" >
  </div>
  <div class="form-group">
    <label>tauxDeChange</label>
    <input type="text" class="form-control" name="tauxDeChange" placeholder="tauxDeChange" >
  </div>
  <div class="form-group">
    <label>Date Sign SNIF</label>
    <input type="text" class="form-control" name="dateSignSnif" placeholder="dateSignSnif" >
  </div>c
  <div class="form-group">
    <label>dateTransferProp</label>
    <input type="text" class="form-control" name="dateTransferProp" placeholder="dateTransferProp" >
  </div>
  <div class="form-group">
    <label>QuoteParteEtat</label>
    <input type="text" class="form-control" name="QuoteParteEtat" placeholder="QuoteParteEtat">
  </div>
  <div class="form-group">
    <label>DateTransEtat</label>
    <input type="date" class="form-control" name="DateTransEtat" placeholder="DateTransEtat">
  </div>
  <div class="form-group">
    <label>NDecisionGerance</label>
    <input type="text" class="form-control" name="NDecisionGerance" placeholder="NDecisionGerance">
  </div>
  <div class="form-group">
    <label>DateDecision</label>
    <input type="date" class="form-control" name="DateDecision" placeholder="DateDecision" >
  </div>
  <div class="form-group">
    <label>DateAnnulation</label>
    <input type="date" class="form-control" name="DateAnnulation" placeholder="DateAnnulation">
  </div>
   
 
  <button type="submit" class="btn btn-default">Submit</button>
 
  </form>
 

  