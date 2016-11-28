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
    $clientRepo = new ClientRepository($Connexion);
    dump($clientRepo->findAll());
  // FIND ALL COMMANDES
    $allCommandes = new CommandeRepository($Connexion); dump($allCommandes->findAll());
   // Insert d'un client
   //$unClient = new Client("M", "Jean", "Bernard", "100 rue Joséphine", "bat2", "83000", "Toulon", "06665544");
   // dump($unClient);
  $clientRepo->insert($unClient);

  ?>

  </body>

  <?php
} catch(Exception $ex){
  echo $ex->getMessage();
}
   ?>
</html>
