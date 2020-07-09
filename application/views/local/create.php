 

 


    <div class="col-8 marginspace" style="margin-top:10px">
    
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
 
    <li class="breadcrumb-item"><a href="<?php echo site_url('/missions'); ?>">Immobiliers</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo site_url('/immobilier/'.$id.'/'.$tf); ?>" >Immeuble</a></li>
    <li class="breadcrumb-item" aria-current="page"> Local</li>
  </ol>
</nav>
<div class="con">
   
<?php echo form_open('local/createlocal/'.$id.'/'.$tf); ?>
<div class="form-group">
<h4>Dossier Gestion</h4>
  </div> 

<div class="row">
  
<input type="hidden" class="form-control" name="local"  >
<input type="hidden" class="form-control" name="immeuble"  >
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
</div>



<div class="con">
   
 
<div class="form-group">
<h4>Historique Gestion de Local</h4>
  </div> 

<div class="row">
<div class="col-3">
<input type="hidden" class="form-control" name="immeuble" value="<?php echo $id ?>">
<input type="hidden" class="form-control" name="local"  >
<div class="form-group">
<label>Nom d'occupant</label>
<input type="text" class="form-control" name="nomoccupant" placeholder="Nom d'occupant">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Cin ou Passport</label>
<input type="text" class="form-control" name="cinpassport" placeholder="Cin ou Passport">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Lieu Mission</label>
<input type="text" class="form-control" name="lieuemission" placeholder="Lieu Mission">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Date Mission</label>
<input type="date" class="form-control" name="dateemission" placeholder="Date Mission">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Type Occupant</label>
<input type="text" class="form-control" name="typeoccupant" placeholder="Type Occupant">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Contra Date Debut</label>
<input type="date" class="form-control" name="contradatedebut" placeholder="Contra Date Debut">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Date Fin de Contrat</label>
<input type="date" class="form-control" name="contradatefin" placeholder="Date Fin de Contrat">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Periode Correspondant Du</label>
<input type="text" class="form-control" name="periodecorresdu" placeholder="Periode Correspondant Du">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Code Occupant</label>
<input type="text" class="form-control" name="codeeoccupant" placeholder="Code Occupant"  >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Periode Correspondant Au</label>
<input type="text" class="form-control" name="periodecorrespau" placeholder="Periode Correspondant Au">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Nature piece contractuelle</label>
<input type="text" class="form-control" name="naturepiececon" placeholder="Nature de la piece contractuelle">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Montant Loyer Encaissé</label>
<input type="text" class="form-control" name="montantloyerencaisse" placeholder="Montant Loyer Encaissé" >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Loyer De Depart</label>
<input type="text" class="form-control" name="loyerdedepart" placeholder="Loyer De Depart" >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Loyer Actuel</label>
<input type="text" class="form-control" name="loyeractuel" placeholder="Loyer Actuel">
</div>
</div> 
<div class="col-4">
<div class="form-group">
<label>Frais contentieux récupérés</label>
<input type="text" class="form-control" name="fraisrecu" placeholder="Frais contentieux récupérés">
</div>
</div>
<div class="col-4">
<div class="form-group">
<label>frais contentieux occasionnés</label>
<input type="text" class="form-control" name="fraisocc" placeholder="frais contentieux occasionnés">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Taux act</label>
<input type="text" class="form-control" name="tauxact" placeholder="Taux act" >
</div>
</div>
</div>

<div class="form-group">
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  </div> 

  
 </form>
</div>

</div>

 
 
 