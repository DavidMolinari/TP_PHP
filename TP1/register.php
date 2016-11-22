<!DOCTYPE html>
<html>

  <?php
  include_once('config/head.php');
  // AutoLoader
  require 'autoload.php';
  AutoLoader::Register();

  // Debug Symfony
  require_once('vendor/autoload.php');
  use Symfony\Component\Debug\Debug;
  Debug::enable();

  try {
    define('RACINE', __DIR__);
    include_once('config/conf.php');
    include_once('registerPost.php');

    include_once(INCLUDE_PATH . 'traitements.inc.php');
    $Connexion = Connexion::getInstance();
   ?>

  <body>

    <?php
    session_start();
    if(isset($_GET ['registered'])){
      if($_GET ['registered'] == 'succes')
      echo '<h3>Registratie succesvol!</h3>';
      elseif($_GET ['registered'] == 'failed'){
        $array = $_SESSION ['errors'];
        for($i = 0; $i < count($array); $i++){
          echo '<strong>Fout '. $i . ': </strong>' . $array[$i] . '<br />';
        }
} else {
die('Deze value kennen we niet...');
}
} else {
    		?>
  <div class="login">
    <h1>Créer votre compte.</h1>
    <form action="register.php" method="post">
  				<label for="username">Username :</label>
  				<input type="text" name="username" id="username" />
  				<label for="password">Password :</label>
  				<input type="password" name="password" id="password" />
          <label for="cpassword">Confirmez Password :</label>
          <input type="password" name="cpassword" id="cpassword" />
          <label for="email">Email :</label>
          <input type="text" name="email" id="email" />
          <input type="submit" />
          <a href="index.php">Vous avez déjà un compte ?</a>
  			</form>
</div>
<?php } ?>
  </body>

  <?php
} catch(Exception $ex){
  echo $ex->getMessage();
}
   ?>
</html>
