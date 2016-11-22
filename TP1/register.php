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
    include_once(INCLUDE_PATH . 'traitements.inc.php');
    $Connexion = Connexion::getInstance();
   ?>

  <body>

  <div class="login">
    <h1>Créer votre compte.</h1>
    <form action="demo.php" method = "post">
      <label for="username"> Username : </label><input placeholder="Username"/>
      <label for="password">Password :</label><input type="password" placeholder="Password"/>
      <label for="mail">Email :</label><input type="text" placeholder="email"/>
      <input id="login" href="#" class="btn" type="submit" value="S'enrengistrer">
      <a href="./">Vous avez déjà un compte ?</a>


</form>
</div>

  </body>

  <?php
} catch(Exception $ex){
  echo $ex->getMessage();
}
   ?>
</html>
