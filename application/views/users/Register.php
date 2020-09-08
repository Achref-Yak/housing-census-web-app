 
 

<div class="col-8">
       <!-- Fin menu principal -->
       <?php if($this->session->flashdata('user_create')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_create').'</p>'; ?>
      <?php endif; ?>
<div class="con">
  <div class="alert alert-info" role="alert">
   <b> Ajouter utilisateur </b>
</div>
<?php echo form_open('users/inscription'); ?>
  <div class="row">
  <div class="col-3">
<div class="form-group">
<label>Nom</label>
<input type="text" class="form-control" name="nom" placeholder="Nom" >
</div>
</div>
<div class="col-3">
<div class="form-group">
<label>Prenom</label>
<input type="text" class="form-control" name="prenom" placeholder="prenom">
</div>
</div>
<div class="col-4">
<div class="form-group">
<label>Email</label>
<input type="text" class="form-control" name="email" placeholder="email">
</div>
</div>
 
 
  
<div class="col-3">
<div class="form-group">
<label>Username</label>
<input type="text" class="form-control" name="username" placeholder="Username">
</div>
</div>

<div class="col-3">
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" name="password" placeholder="Password">
</div>
</div>

<div class="col-3">
<div class="form-group">
            <label for="usr">Statut</label>
            <select class="form-control" id="sel1" name="type">

                 <option value="">choisir</option>
                 <option value="ad">Administratif</option>
                 <option value="tech">Technicien</option>
           </select>
      </div>
 
</div>
 
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  </div>
</form>
    </div>


</div>

</div>