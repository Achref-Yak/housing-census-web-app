 


 
     
    <div class="col-8 marginspace" style="margin-top:10px">
 

    <div class="con">
    <div class="alert alert-light" role="alert">
    <?php echo validation_errors(); ?>
  </div>
    <div class="alert alert-light" role="alert">
    <b>Ajouter Immeuble</b>
  </div>
    <div class="alert alert-primary" role="alert">
    Gestion
</div>
    <?php echo form_open('immobilier/create'); ?>
    <div class="row">
    <div class="col-3">
<div class="form-group">
<label>TF</label>
<input type="text" class="form-control" name="TF" placeholder="TF" >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>TypeTF</label>
<input type="text" class="form-control" name="TypeTF" placeholder="TypeTF" >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Nature Construction</label>
<select class="form-control" id="sel1" name="NatureConst">
                       
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                      </select>
 
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Anné Construction</label>
<input type="text" class="form-control" name="AnneConst" placeholder="Anné Construction">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>AdresseFR</label>
<input type="text" class="form-control" name="AdresseFR" placeholder="AdresseFR" >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>AdresseAR</label>
<input type="text" class="form-control" name="AdresseAR" placeholder="AdresseAR">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Zone</label>
<input type="text" class="form-control" name="Zone" placeholder="Zone">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Governorat</label>
<input type="text" class="form-control" name="Governorat" placeholder="Governorat">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>CodePostal</label>
<input type="text" class="form-control" name="CodePostal" placeholder="CodePostal">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Bureau</label>
<input type="text" class="form-control" name="Bureau" placeholder="Bureau">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>EtapeGestionTitre</label>
<input type="text" class="form-control" name="EtapeGestionTitre" placeholder="EtapeGestionTitre">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>PlanConst</label>
<select class="form-control" id="sel1" name="PlanConst">
                              <option value=""></option>
                              <option value="oui">Oui</option>
                              <option value="non">Non</option>
                      </select>
 
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>NombreEtage</label>
<input type="text" class="form-control" name="NombreEtage" placeholder="NombreEtage" >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>NombreLocaux</label>
<input type="text" class="form-control" name="NombreLocaux" placeholder="NombreLocaux">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Localité</label>
<input type="text" class="form-control" name="Localite" placeholder="Localité">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>ContenanceTF</label>
<input type="text" class="form-control" name="ContenanceTF" placeholder="ContenanceTF">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>CodeImmeubilier</label>
<input type="text" class="form-control" name="CodeImmeubilier" placeholder="CodeImmeubilier">
</div>
</div>
    </div>


  
 
    </div>



  <div class="con">
  <div class="alert alert-primary" role="alert">
    Achat
</div>
  <div class="row">
  <div class="col-3">
<div class="form-group">
<label>Devise</label>
<input type="text" class="form-control" name="devise" placeholder="Devise" >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Prix Achat</label>
<input type="text" class="form-control" name="prixAchat" placeholder="Prix Achat">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Taux De Change</label>
<input type="text" class="form-control" name="tauxDeChange" placeholder="Taux De Change">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Date Signature SNIF</label>
<input type="date" class="form-control" name="dateSignSnif" placeholder="Date Signature SNIF">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Date Transfer Proprieté</label>
<input type="date" class="form-control" name="dateTransferProp" placeholder="Date Transfer Proprieté">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Quote Parte Etat</label>
<input type="text" class="form-control" name="QuoteParteEtat" placeholder="Quote Parte Etat">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Date Transfer Etat</label>
<input type="date" class="form-control" name="DateTransEtat" placeholder="Date Transfer Etat">
</div>
</div>

 
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  </div>
</form>
    </div>


</div>
