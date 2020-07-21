<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="bghome">
 
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
	<img class="logo" src="<?php echo base_url(); ?>/assets/logo.png">
    </div>

    <!-- Login Form -->
    <?php echo form_open('users/login'); ?>
    <input type="text" id="login" class="fadeIn second in" name="username" placeholder="login">
      <input type="password" id="password" class="fadeIn third in" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

 

  </div>
</div>
</div>
 
 
<?php echo form_close(); ?>