
<div class="fluid-container">
  <div class="row">
    <div class="col-2">
    
    <div id="mySidenav" class="sidenav">
      
    <a class="nav-link active " href="<?php echo base_url(); ?>missions"><img src="<?php echo base_url(); ?>assets/logo.png"></a>
    <a class="nav-link active " href="<?php echo base_url(); ?>missions"><img  class='navicon' src="<?php echo base_url(); ?>assets/dashboard.png"> Dashboard</a>

    <?php $var = $this->session->userdata; 
    if($var['type']==0)
    
    echo "  <a class='nav-link active' href='".base_url()."immobilier/create'><img class='navicon' src='".base_url()."/assets/addim.png'>Ajouter Immeuble  </a>";
 
    else 
    echo "  <a class='nav-link active' href='".base_url()."users/register'><img class='navicon' src='".base_url()."/assets/add_utilisateur.png'>Ajouter Utilisateur  </a>";
    ?>
  
    <a class="nav-link active " href="<?php echo base_url(); ?>users/logout"><img  class='navicon' src="<?php echo base_url(); ?>/assets/dashboard.png">Déconnecter</a>
 
</div>
      
    </div>