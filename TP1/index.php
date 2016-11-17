<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <?php
  try {
    define('RACINE', __DIR__);
    include_once('config/conf.php');
    include_once(INCLUDE_PATH . 'connect.inc.php');
    $conn = connectionBd();
    echo "CONNEXION OP";
   ?>

  <body>
<h1>CONTENU</h1>
<p>
  <?php
  include_once(INCLUDE_PATH . 'traitements.inc.php');
  recuperationUnClient($conn, 123);
  afficheTousClients($conn);
  ?>
</p>
  </body>

  <?php
} catch(Exception $ex){
  echo $ex->getMessage();
}
   ?>
</html>
