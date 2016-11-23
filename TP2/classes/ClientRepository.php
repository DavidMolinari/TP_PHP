<?php
include_once('interfaces/IRepository.php');
/**
 *
 */
class ClientRepository implements IRepository
{
  public function findById($id)
  {
    # code... TODO
  }
  public static function findAll()
  {
    $Connexion = Connexion::getInstance();

    $sql = "select * from CLIENT";
    $lignes = $Connexion->dbh->query($sql);
    $result = $lignes->fetchAll();
    dump($result);


}

  public function findByCp($unCp)
  {
    # code...
  }
  public function findByVille($ville)
  {
    # code...
  }

}
