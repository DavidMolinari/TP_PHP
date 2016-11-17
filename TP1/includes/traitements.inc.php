<?php
function recuperationUnClient($unObjetPdo, $id){
  $sql = "select * from CLIENT where NOCLI=:pnocli";
  $ligne = $unObjetPdo->prepare($sql);
  $ligne->bindValue('pnocli',$id,PDO::PARAM_INT);
  $ligne->execute();
  $unClient = $ligne->fetch(PDO::FETCH_OBJ);
  var_dump($unClient);
}

function afficheTousClients($unObjetPdo)
{
  $sql = "select * from CLIENT";
  $lignes = $unObjetPdo->query($sql);
  $lignes->setFetchMode(PDO::FETCH_OBJ);
  while ($unClient = $lignes->fetch()) {
    echo "Numéro du client : " . '<strong>' . $unClient->NOCLI . '</strong>' . " Nom du client : " .  '<strong>' .$unClient->NOMCLI . '</strong>'
    . " Prénom du client " . '<strong>' .$unClient->PRENOMCLI . '</strong>'. "<br>";
  }
  # code...
}
?>
