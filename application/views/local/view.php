 
 
     

    <div class="col-8 marginspace" style="margin-top:10px">


 
 

<h2></h2>
 
 
 
<a href="<?php echo site_url('/missions'); ?>" class="btn btn-secondary" role="button" aria-pressed="true">Immobiliers</a>
<a href="<?php echo site_url('/immobilier/'.$gestion['immeuble'].'/'.$immeuble['TF'])?>" class="btn btn-secondary" role="button" aria-pressed="true">Immeuble</a>

<a class="btn btn-primary active"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Local
  </a>
  
<li class="list-group-item"> <div class="row">
    
    <div class="col-4">	
       <label>Code TF : </label><b> <?php  echo $fichetechnique['Code_TF']; ?></b>

</div>
<div class="col-4">	
<label>Adresse : </label><b> <?php  echo $fichetechnique['AdresseAdmin']; ?></b>


</div>
<div class="col-4">	
<label>Créé : </label><b> <?php echo $immeuble_id['Created_date']; ?></b>

</div>
 
 </li>
<div class="con">
   


<?php echo form_open('local/updatelocal/'.$gestion['id']); ?>
<div class="form-group">
<div class="alert alert-primary" role="alert">
Dossier Gestion
</div>
 
  </div> 

<div class="row">
  
<input type="hidden" class="form-control" name="local" value="<?php echo $gestion['local'];?>">
<input type="hidden" class="form-control" name="immeuble" value="<?php echo $gestion['immeuble'];?>">
<div class="col-3">
<div class="form-group">
<label>Code Local</label>
<input type="text" class="form-control" name="codelocal" placeholder="Code Local" value="<?php echo $gestion["codelocal"];?>">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Nombre detage</label>
<input type="text" class="form-control" name="netage" placeholder="Nombre detage" value="<?php echo $gestion["netage"];?>">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Disponibilite</label>
<input type="text" class="form-control" name="disponibilite" placeholder="Disponibilite" value="<?php echo $gestion["disponibilite"];?>">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Suface</label>
<input type="text" class="form-control" name="surface" placeholder="Suface" value="<?php echo $gestion["surface"];?>">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Usage</label>
<input type="text" class="form-control" name="usag" placeholder="Usage" value="<?php echo $gestion["usag"];?>">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Numero Plan</label>
<input type="text" class="form-control" name="numeroplan" placeholder="Numero Plan" value="<?php echo $gestion["numeroplan"];?>" >
</div>
</div>



 
 
</div>
    
<div class="form-group">
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  </div>
  

 
 </form>
 <div class="form-group">
  <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ajouter Dépendance</button>
  </div>
  

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title">Ajouter Dependance</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open('local/create_dependance/'.$gestion['id'].'/'.$gestion['immeuble']); ?>
<div class="row">
<input type="hidden" class="form-control" name="local" value="<?php echo $gestion["local"];?>">
<input type="hidden" class="form-control" name="id" value="<?php echo $gestion["id"];?>">
<input type="hidden" class="form-control" name="immeuble" value="<?php echo $gestion["immeuble"];?>">
<div class="col-3">
<div class="form-group">

<label>Dependance bat</label>
<input type="text" class="form-control" name="dependancebat" placeholder="Dependance bat"  >
</div>
</div>
<div class="col-2">
<div class="form-group">
<label>Surface bat</label>
<input type="text" class="form-control" name="surfacebat" placeholder="Surface Bat"  >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Dependance non bat</label>
<input type="text" class="form-control" name="dependancenonbat" placeholder="Dependance non bat" >
</div>
</div>
<div class="col-2">
<div class="form-group">
<label>Surface non bat</label>
<input type="text" class="form-control" name="surfacenonbat" placeholder="Surfacenonbat" >
</div>
</div>
<div class="col-2">
<label>&nbsp;</label>
<div class="form-group">
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  </div> 
  </form>  
  </div>
 
 
 

 
      </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Quitter</button>
      </div>
    </div>

  </div>
</div>
</div>





</div>

<div class="con">
<div class="alert alert-primary" role="alert">
Dépendances
</div>
 
<?php echo form_open('local/update_dependance/'.$gestion['local'].'/'.$gestion['immeuble']); ?>
<div class="row">

 
<?php foreach($dependances as $depen) : ?>
  
<div class="col-3">
<div class="form-group">
<input type="hidden" class="form-control" name="id" value="<?php echo $depen["id"];?>">
<label>Dependance bat</label>
<input type="text" class="form-control" name="dependancebat" placeholder="Dependance bat" value="<?php echo $depen["dependancebat"];?>">
</div>
</div>
<div class="col-2">
<div class="form-group">
<label>Surface bat</label>
<input type="text" class="form-control" name="surfacebat" placeholder="Surface Bat" value="<?php echo $depen["surfacebat"];?>">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Dependance non bat</label>
<input type="text" class="form-control" name="dependancenonbat" placeholder="Dependance non bat" value="<?php echo $depen["dependancenonbat"];?>">
</div>
</div>
<div class="col-2">
<div class="form-group">
<label>Surface non bat</label>
<input type="text" class="form-control" name="surfacenonbat" placeholder="Surfacenonbat" value="<?php echo $depen["surfacenonbat"];?>">
</div>
</div>
<div class="col-1">
<label>&nbsp;</label>
<div class="form-group">
  <button type="submit" class="btn btn-primary"><svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></button>
  </div>   
  </div>


 </form>
 

<?php endforeach ?>
 
</form>
</div>
</div>
 
<div class="con">
   

<div class="form-group">
<div class="alert alert-primary" role="alert">
Historique Gestion de Local
</div>

  </div> 

<div class="row">
<div class="col-3">
<?php echo form_open('local/createoccupant'); ?>
<input type="hidden" class="form-control" name="immeuble" value="<?php echo $gestion['immeuble'];?>">
<input type="hidden" class="form-control" name="local" value="<?php echo $gestion['local'];?>">
<div class="form-group">
<label>Nom d'occupant</label>
<input type="text" class="form-control" name="nomoccupant" placeholder="Nom d'occupant">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Code Occupant</label>
<input type="text" class="form-control" name="codeeoccupant" placeholder="Code Occupant">
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
<input type="text" class="form-control" name="montantloyerencaisse" placeholder="Montant Loyer Encaissé">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Loyer De Depart</label>
<input type="text" class="form-control" name="loyerdedepart" placeholder="Loyer De Depart">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Loyer Actuel</label>
<input type="text" class="form-control" name="loyeractuel" placeholder="Loyer Actuel">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Frais contentieux rrécupérés</label>
<input type="text" class="form-control" name="fraisrecu" placeholder="Frais contentieux rrécupérés">
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>frais contentieux occasionnés</label>
<input type="text" class="form-control" name="fraisocc" placeholder="frais contentieux occasionnés">
</div>
</div>

<div class="col-3">
<div class="form-group">
<label>Taux act</label>
<input type="text" class="form-control" name="tauxact" placeholder="Taux act">
</div>
</div>

</div>
<div class="form-group">
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  </div>   

 
 </form>


<ul class="list-group">
 <?php if(empty($occups)) echo  "   <div class='alert alert-danger' role='alert'>
  Liste vide
</div> ";
else echo '<li class="list-group-item"> <div class="row">
      
<div class="col-3">	
   <b>Nom Occupant</b>

</div>
 
<div class="col-2">	
<b>Cin ou Passport</b>

</div>
<div class="col-2">	
<b>Lieu Mission</b>

</div>
<div class="col-2">	
<b>Date Mission</b>

</div>
</div></li>' ?>
  
  <h2></h2>
  <?php foreach($occups as $occup) : ?>
  
  <a   class="list-group-item list-group-item-action list-group-item-primary">
  <div class="row">
  
  <div class="col-3">	
       <?php echo $occup['nomoccupant'];?> 
  
  </div>
  <div class="col-2">	
       <?php echo $occup['cinpassport'];?> 
  
  </div>
  <div class="col-2">	
       <?php echo $occup['lieuemission'];?> 
  
  </div>
  <div class="col-2">	
       <?php echo $occup['dateemission'];?> 
    
  </div>
 
  

 
      
  </div>
    </a>
  <?php endforeach ?>
  </ul>
   
  </div>     
 

<div class="con">
<div class="alert alert-primary" role="alert">
Photos du local
</div>
 
<div class="row">
 

<?php foreach($photos as $photo) : ?>
 
      <figure class="col-md-4">
        <a href="http://localhost/snitapp<?php echo $photo['URL'] ?>" data-size="1600x1067">
          <img alt="picture" src="http://localhost/snitapp<?php echo $photo['URL'] ?>"
            class="img-fluid">
        </a>
      </figure>

     

      <?php endforeach ?>  
</div>
</div>
<div class="con">
<div class="alert alert-info" role="alert">
<b>Local Fichetechnique - Technicien</b>

</div>
<div class="row">
<div class="col-12">
<ul class="list-group">
  <li class="list-group-item">N°Local :<?php   echo $fichetechnique_local['Nlocal'];  ?></li>
  <li class="list-group-item">Nom Locataire : <?php echo $fichetechnique_local['Nomlocataire']; ?></li>
  <li class="list-group-item">NonBatis : <?php echo $fichetechnique_local['NonBatis'] ?></li>
  <li class="list-group-item">Batis : <?php echo $fichetechnique_local['Batis'] ?></li>
  <li class="list-group-item">NatureLocal : <?php echo $fichetechnique_local['NatureLocal'] ?></li>
  <li class="list-group-item">ValeurLocation :<?php echo $fichetechnique_local['ValeurLocation']  ?></li>
  <li class="list-group-item">Nombre des Familles Occupants :<?php echo $fichetechnique_local['NomFamilleOccupant'] ?></li>
  <li class="list-group-item">CuisineInde : <?php if ($fichetechnique_local['CuisineInde']=='0') echo "Non"; else echo "Oui" ?></li>
  <li class="list-group-item">SalleEau : <?php if ($fichetechnique_local['SalleEau']=='0') echo "Non"; else echo "Oui" ?></li>
  <li class="list-group-item">EclairageN : <?php echo $fichetechnique_local['EclairageN'] ?></li>
  <li class="list-group-item">Moyen Chauffage : <?php echo $fichetechnique_local['MoyenChauffage'] ?></li>
  <li class="list-group-item">Ventillation : <?php echo $fichetechnique_local['Ventillation'] ?></li>
  <li class="list-group-item">SalleEau : <?php echo $fichetechnique_local['SalleEau'] ?></li>
  <li class="list-group-item">DistEau : <?php echo $fichetechnique_local['DistEau'] ?></li>
  <li class="list-group-item">EvacC : <?php echo $fichetechnique_local['EvacC'] ?></li>
  <li class="list-group-item">Usag : <?php echo $fichetechnique_local['Usag'] ?></li>
  <li class="list-group-item">Structurelle : <?php echo $fichetechnique_local['Structurelle'] ?></li>
  <li class="list-group-item">Electrique : <?php echo $fichetechnique_local['Electrique'] ?></li>
  <li class="list-group-item">Plomberie : <?php echo $fichetechnique_local['Plomberie'] ?></li>
  <li class="list-group-item">Enduit : <?php echo $fichetechnique_local['Enduit'] ?></li>
  <li class="list-group-item">Ouvertures : <?php echo $fichetechnique_local['Ouvertures'] ?></li>
  <li class="list-group-item">Fonctionelle : <?php echo $fichetechnique_local['Fonctionelle'] ?></li>
  <li class="list-group-item">Spacial : <?php echo $fichetechnique_local['Spacial'] ?></li>
  <li class="list-group-item">Peinture : <?php echo $fichetechnique_local['Peinture'] ?></li>

</ul>

</div>

</div>

</div>

 
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Précédente</a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('/local/revente/'.$gestion['local'].'/'.$gestion['codelocal']);  ?>">2</a></li>
    <li class="page-item">
      <a class="page-link" >Suivante</a>
    </li>
  </ul>
</nav>
 
 </div>

 
<div class="col-2">
 
    </div>
      </div>


    
    
      </div>
      
   
  </div>
</div>


 
 
 