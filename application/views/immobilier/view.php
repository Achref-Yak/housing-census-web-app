 

<?php echo validation_errors(); ?>

<?php foreach($locaux as $local) : ?>
<div>	
<a href="http://localhost/snittest/local/<?php echo $local['id']  ?>">Visit W3Schools</a>

 <h2>  <?php echo $local['codelocal'];?> </h2>
</div>
<?php endforeach ?>

<?php foreach($propbiens as $propbien) : ?>
<div>	
 
 <h2>  <?php echo $propbien['proprietaire'];?> </h2>
</div>




<?php endforeach ?>

<?php foreach($propregs as $propreg) : ?>
<div>	
 
 <h2>  <?php echo $propreg['proprietaire'];?> </h2>
</div>

<?php endforeach ?>


 
 

  


 





<div class="fluid-container">
  <div class="row">
    <div class="col-2">
      <div class="sidenav">

      
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
      </div>
    </div>
    <div class="col-8">
      <div class="con">
    <?php echo form_open('immobilier/updategestion/'.$gestion['immeuble']); ?>
    <div class="form-group">
        
        <input type="hidden" class="form-control" name="id" value="<?php echo $gestion['id'];?>">
      </div>
      <h3>Gestion</h3>
      <div class="row">
  
   
  
 
            <div class="col-3">
                <div class="form-group">
                    <label>TF</label>
                    <input type="text" class="form-control" name="TF" placeholder="TF" value="<?php echo $gestion['TF'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                  <label>TypeTF</label>
                  <input type="text" class="form-control" name="TypeTF" placeholder="TypeTF" value="<?php echo $gestion['TypeTF'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                  <label>TypeTF</label>
                  <input type="text" class="form-control" name="TypeTF" placeholder="TypeTF" value="<?php echo $gestion['TypeTF'];?>">
                </div>
            </div>
            <div class="col-3">
            <div class="form-group">
              <label>NatureConst</label>
              <input type="text" class="form-control" name="NatureConst" placeholder="NatureConst" value="<?php echo $gestion['NatureConst'];?>">
              </div>
            </div>
    </div>

    <div class="row">
            <div class="col-3">
                <div class="form-group">
                <label>AnneConst</label>
                <input type="date" class="form-control" name="AnneConst" placeholder="AnneConst" value="<?php echo $gestion['AnneConst'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>AdresseFR</label>
                <input type="text" class="form-control" name="AdresseFR" placeholder="AdresseFR" value="<?php echo $gestion['AdresseFR'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>AdresseAR</label>
                <input type="text" class="form-control" name="AdresseAR" placeholder="AdresseAR" value="<?php echo $gestion['AdresseAR'];?>">
                </div>
            </div>
            <div class="col-3">
            <div class="form-group">
              <label>Zone</label>
              <input type="text" class="form-control" name="Zone" placeholder="Zone" value="<?php echo $gestion['Zone'];?>" >
              </div>
            </div>
    </div>

    <div class="row">
            <div class="col-3">
                <div class="form-group">
                <label>Localite</label>
    <input type="text" class="form-control" name="Localite" placeholder="Localite" value="<?php echo $gestion['Localite'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>Governorat</label>
    <input type="text" class="form-control" name="Governorat" placeholder="Governorat" value="<?php echo $gestion['Governorat'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>CodePostal</label>
    <input type="text" class="form-control" name="CodePostal" placeholder="CodePostal" value="<?php echo $gestion['CodePostal'];?>" >
                </div>
            </div>
            <div class="col-3">
            <div class="form-group">
            <label>EtapeGestionTitre</label>
    <input type="text" class="form-control" name="EtapeGestionTitre" placeholder="EtapeGestionTitre" value="<?php echo $gestion['EtapeGestionTitre'];?>">
              </div>
            </div>
    </div>
 
    <div class="row">
            <div class="col-3">
                <div class="form-group">
                <label>Bureau</label>
    <input type="text" class="form-control" name="Bureau" placeholder="Bureau" value="<?php echo $gestion['Bureau'];?>" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>PlanConst</label>
    <input type="text" class="form-control" name="PlanConst" placeholder="PlanConst" value="<?php echo $gestion['PlanConst'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>NombreLocaux</label>
    <input type="text" class="form-control" name="NombreLocaux" placeholder="NombreLocaux" value="<?php echo $gestion['NombreLocaux'];?>">
                </div>
            </div>
            <div class="col-3">
            <div class="form-group">
            <label>ContenanceTF</label>
    <input type="text" class="form-control" name="ContenanceTF" placeholder="ContenanceTF" value="<?php echo $gestion['ContenanceTF'];?>">
  </div>
          
    </div>
 
    
  <div class="form-group">
    <input type="hidden" class="form-control" name="immeuble" value="<?php echo $gestion['immeuble'] ?>">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>

 </form>
    </div>
      </div>
  


       <div class="con">
    <?php echo form_open('immobilier/updateachat/'.$gestion['immeuble']); ?> 
    <h3>Achat</h3>
    <div class="row" >
    
      <input type="hidden" class="form-control" name="id" placeholder="devise" value="<?php echo $achat['id'];?>" >
   
 
            <div class="col-3">
                <div class="form-group">
                <label>devise</label>
                <input type="text" class="form-control" name="devise" placeholder="devise" value="<?php echo $achat['devise'];?>" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>prixAchat</label>
   <input type="text" class="form-control" name="prixAchat" placeholder="prixAchat" value="<?php echo $achat['prixAchat'];?>"  >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>tauxDeChange</label>
   <input type="text" class="form-control" name="tauxDeChange" placeholder="tauxDeChange" value="<?php echo $achat['tauxDeChange'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>Date Sign SNIF</label>
   <input type="text" class="form-control" name="dateSignSnif" placeholder="dateSignSnif" value="<?php echo $achat['dateSignSnif'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>dateTransferProp</label>
   <input type="text" class="form-control" name="dateTransferProp" placeholder="dateTransferProp" value="<?php echo $achat['dateTransferProp'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>QuoteParteEtat</label>
                 <input type="text" class="form-control" name="QuoteParteEtat" placeholder="QuoteParteEtat" value="<?php echo $achat['QuoteParteEtat'];?>">
            </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>DateTransEtat</label>
   <input type="date" class="form-control" name="DateTransEtat" placeholder="DateTransEtat" value="<?php echo $achat['DateTransEtat'];?>">
            </div>
            </div>
                        <div class="col-3">
                <div class="form-group">
                <label>NDecisionGerance</label>
   <input type="text" class="form-control" name="NDecisionGerance" placeholder="NDecisionGerance" value="<?php echo $achat['NDecisionGerance'];?>">
            </div>
                        </div>
            <div class="col-3">
                <div class="form-group">
                <label>DateDecision</label>
   <input type="date" class="form-control" name="DateDecision" placeholder="DateDecision" value="<?php echo $achat['DateDecision'];?>">
      </div>
            </div>
      <div class="col-3">
                <div class="form-group">
                <label>DateAnnulation</label>
   <input type="date" class="form-control" name="DateAnnulation" placeholder="DateAnnulation" value="<?php echo $achat['DateAnnulation'];?>">
      </div>

     
      </div>
  

</form>
<input type="hidden" class="form-control" name="immeuble"  value="<?php echo $gestion['immeuble'];?>">

<button type="submit" class="btn btn-default">Submit</button>
      </div>
       </div>
      
 
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Proprietaire du Bien Immobilier
  </button>

  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
  Proprietaire du Bien Immobilier
  </button>
</p>
<div class="collapse" id="collapseExample">
<?php echo form_open('immobilier/create_prop_reglement/'.$gestion["immeuble"].''); ?> 
<h4>Reglement du Proprietaire</h4>      
<div class="row">
      <input type="hidden" class="form-control" name="id" placeholder="devise" value="<?php echo $achat['id'];?>" >
   
 
            <div class="col-3">
                <div class="form-group">
                <label>proprietaire</label>
                <input type="text" class="form-control" name="proprietaire" placeholder="proprietaire" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>prixAchat</label>
 
   <input type="text" class="form-control" name="du" placeholder="du" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>tauxDeChange</label>
                <input type="text" class="form-control" name="au" placeholder="au" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>Date Sign SNIF</label>
                <input type="text" class="form-control" name="mentantReglement" placeholder="mentantReglement" >
                </div>
            </div>
            
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
</form>

     
      </div>
      <div class="collapse" id="collapseExample1">
<?php echo form_open('immobilier/create_prop_bien/'.$gestion["immeuble"].''); ?> 
<h4>Proprietaire du Bien Immobilier</h4> 
<div class="row">
      <input type="hidden" class="form-control" name="id" placeholder="devise" value="<?php echo $achat['id'];?>" >
   
 
            <div class="col-3">
                <div class="form-group">
                <label>proprietaire</label>
                <input type="text" class="form-control" name="proprietaire" placeholder="proprietaire" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>Nationalite</label>
 
                <input type="text" class="form-control" name="nationalite" placeholder="nationalite" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>Quotepart</label>
                <input type="text" class="form-control" name="quotepart" placeholder="quotepart" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>Adresse</label>
                <input type="text" class="form-control" name="adresse" placeholder="adresse" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                <label>Rip</label>
                <input type="text" class="form-control" name="rip" placeholder="rip" >
                </div>
            </div>
           
                <input type="hidden" class="form-control" name="immeuble" placeholder="immeuble" value="<?php echo $gestion['immeuble'] ?>">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
</form>
            
      </div>

     
      </div>
</div>
      </div>


       
   
      </div>
      
    <div class="col-2">
      One of three columns
    </div>
  </div>
</div>