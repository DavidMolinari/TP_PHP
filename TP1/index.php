<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?php
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
  //  include_once(INCLUDE_PATH . 'connect.inc.php');
    include_once(INCLUDE_PATH . 'traitements.inc.php');

    $conn = ConnexionBD::connectionBd();
    echo "CONNEXION OP";
   ?>

  <body>
  <div>
    <p><?php recuperationUnClient($conn, 123); ?></p>
    <p><?php afficheTousClients($conn);?> </p>
    <p><?php $unClient=recupUnObjetClient($conn,123); ?></p>
    <p><?php dump($unClient->afficheUnClient());?></p>
    <p><?php afficheTousClientsObjet($conn); ?></p>
  </div>
  <?php


  dump($unClient->afficheUnClient());
  ?>
</p>
  </body>

  <?php
} catch(Exception $ex){
  echo $ex->getMessage();
}
   ?>
</html>
