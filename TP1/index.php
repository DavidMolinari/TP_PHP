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
    <h1>Veuillez vous connecter !</h1>
    <form action="demo.php" method = "post">

    <input placeholder="Username"/>
    <input type="password" placeholder="Password"/>
    <input name="rememberMe" type="checkbox"/>
    <label for="rememberMe">Remember me</label><a>Mot de passe oublié </a>

    <input id="login" href="#" class="btn" type="submit" value="Home">
  </form>

</div>
    <div class="message">//TODO</div>

  </body>

  <?php
} catch(Exception $ex){
  echo $ex->getMessage();
}
   ?>
</html>
