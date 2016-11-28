<?php
include_once('interfaces/IRepository.php');
/**
 *
 */
class ClientRepository implements IRepository
{

    private $co;

    /**
     * ClientRepository constructor.
     * @param $co
     */
    public function __construct($connexion)
    {
        $this->co = $connexion;
    }

    public function findById($id)
  {
    # code... TODO
  }

  public function findAll()
  {
      return $this->co->dbh->query("SELECT * FROM Client")->fetchAll(\PDO::FETCH_ASSOC);
/*
      $resu = array();
      $sql = "select * from CLIENT";
      $lignes = $this->co->dbh->query($sql);
      //return $lignes->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Client");
      foreach ($lignes->fetchObject(Client::class) as $ligne) {
          array_push($resu, $ligne);
      }
      return $resu;

      //return $lignes->fetchAll();
*/
  }

  public function findByCp($unCp)
  {
    # code...
  }
  public function findByVille($ville)
  {
    # code...
  }

    public function insert( $cli)
    {

        try{
            $req = $this->co->dbh->prepare("INSERT INTO Client (id, titre, nom, prenom, adresserue1, adresserue2,cp, ville, tel) 
                                    VALUES (:id, :titre, :nom, :prenom, :adresserue1, :adresserue2,:cp, :ville, :tel)");
            $req->execute(array(
                "id" => $cli->getId(),
                "titre" => $cli->getTitre(),
                "nom" => $cli->getNom(),
                "prenom" => $cli->getPrenom(),
                "adresserue1" => $cli->getAdresserue1(),
                "adresserue2" => $cli->getAdresserue2(),
                "cp" => $cli->getCp(),
                "ville" => $cli->getVille(),
                "tel" => $cli->getTel()
            ));

            echo 'Insert done';
        } catch (Exception $e){
            echo 'Erreur à l\'insertion du client ' . $e->getMessage();
        }


    }
}
