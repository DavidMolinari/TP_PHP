<?php
interface IRepository
{
    /**
     * Methode qui permet de chercher un Objet grace à son id
     * @param $id
     * @return un objet
     */
    public function findById($id);

    /** Méthode qui permet de retourner tous les objets d'une table
     * @return mixed
     */
    public function findAll();

    /**
     * Méthide qui permet d'insérer un objet dans la table.
     * @param $pArgs
     * @return mixed
     */
    public function insert(Client $pArgs);
}

