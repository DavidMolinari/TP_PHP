<?php
include_once('interfaces/IRepository.php');
/**
 *
 */
class CommandeRepository implements IRepository
{

    private $co;

    /**
     * CommandeRepository constructor.
     * @param $co
     */
    public function __construct($co)
    {
        $this->co = $co;
    }

    public function findByDate($date)
  {
    # code...
  }
  public function findByIntervalleDate($dateDepart, $dateFin)
  {

  }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function findAll()
    {
        // TODO: Implement findAll() method.
        $sql = "select * from COMMANDE";
        $lignes = $this->co->dbh->query($sql);
        return $lignes->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Commande");
    }

    public function insert($pArgs)
    {
        // TODO: Implement insert() method.
    }
}
