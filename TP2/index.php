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
  <?php
    ClientRepository::findAll(); 
   ?>

  </body>

  <?php
} catch(Exception $ex){
  echo $ex->getMessage();
}
   ?>
</html>
