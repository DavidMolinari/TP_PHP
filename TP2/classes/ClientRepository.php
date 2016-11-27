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
    $sql = "select * from CLIENT";
    $lignes = $this->co->dbh->query($sql);
    return $lignes->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Client");


}

  public function findByCp($unCp)
  {
    # code...
  }
  public function findByVille($ville)
  {
    # code...
  }

    public function insert($pArgs)
    {

        // TODO: Implement insert() method.
    }
}
