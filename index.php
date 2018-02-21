<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>

<div class="login-page">
    <div class="text-center">
   
      <h1>Bienvenido</h1>
       <p>Iniciar sesión </p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Usuario</label>
              <input type="name" class="form-control" name="username" placeholder="Usuario">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Contraseña</label>
            <input type="password" name= "password" class="form-control" placeholder="Contraseña">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-primary pull-right">Entrar</button>
        </div>

    </form>
    <div class="copyright"><!-- FOOTER COPYRIGHT START -->
        <p>  <img class="img-responsive" width="10%" src="img/lc.png" alt=""> <a href="https://landercorp.com.mx">landercorp.mx</a> Es una empresa de desarrollo de software y sistemas web.</p>
    </div><!-- FOOTER COPYRIGHT END -->

</div>
<?php include_once('layouts/header.php'); ?>
<?php include_once('layouts/footer.php'); ?>
