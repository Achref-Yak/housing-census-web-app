
<div class="fluid-container">
  <div class="row">
    <div class="col-2">
    
    <div id="mySidenav" class="sidenav">
      
    <a class="nav-link active " href="<?php echo base_url(); ?>missions"><img src="<?php echo base_url(); ?>/assets/logo.png"></a>
    <a class="nav-link active " href="<?php echo base_url(); ?>missions">Dashboard</a>

    <?php $var = $this->session->userdata; 
    if($var['type']==0)
    
    echo "  <a class='nav-link active' href='".base_url()."immobilier/create'>Ajouter Immeuble  </a>";
 
    
    ?>
  
    <a class="nav-link active " href="<?php echo base_url(); ?>users/logout">Déconnecter</a>
 
</div>
      
    </div>