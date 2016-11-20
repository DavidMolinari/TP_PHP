<?php

class Connexion
{
    public $dbh; // Objet dbh

    private static $instance;

    private function __construct()
    {
        // Construction des infos
        // & Recupération depuis un fichier de config externe
        $dsn = 'mysql:host=' . Config::read('db.host') .
               ';dbname='    . Config::read('db.basename');
               // Au besoin :
               //';port='      . Config::read('db.port') .
               //';connect_timeout=15';
        // Recup du nom d'utilisateur
        $user = Config::read('db.user');
        // recup du pwd
        $password = Config::read('db.password');
        // Gestion des Options :
        $options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";

                // Création du pdo
        $this->dbh = new PDO($dsn, $user, $password, $options);
    }
    // SINGLETOOOOOOOOOOOOOOOOOOON
    public static function getInstance()
    {
        if (!isset(self::$instance))
        {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }
}
