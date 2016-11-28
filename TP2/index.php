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
    // FIND ALL CLIENTS
    echo "  <h4>Find all clients</h4>";
    $allClients = new ClientRepository($Connexion); dump($allClients->findAll());
  // FIND ALL COMMANDES
      echo "  <h4>Find all Commandes</h4>";
    $allCommandes = new CommandeRepository($Connexion); dump($allCommandes->findAll());

   // $unClient = new Client(7, "M", "Jean", "Bernard", "100 rue Joséphine", "bat2", "83000", "Toulon", "06665544");
    // dump($unClient);
  ?>

  </body>

  <?php
} catch(Exception $ex){
  echo $ex->getMessage();
}
   ?>
</html>
