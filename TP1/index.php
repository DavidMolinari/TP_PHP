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
    <h1>Connexion</h1>
    <form action="loginPost.php" method = "post">

    <label for="username"> Username :</label><input type="text" name="username" id="username" placeholder="Username"/>
    <label for="password"> Password :</label><input type="password" name="password" id="password" placeholder="Password"/>
    <input name="rememberMe" type="checkbox"/>
    <label for="rememberMe">Remember me</label><a>Mot de passe oublié </a>

    <input id="login" href="#" class="btn" type="submit" value="Home">
    <a href="register.php">Vous n'avez pas de compte ?</a>

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
