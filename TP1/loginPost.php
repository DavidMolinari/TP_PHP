<?php

  include_once('config/head.php');
  // AutoLoader


  // Debug Symfony
  require_once('vendor/autoload.php');
  use Symfony\Component\Debug\Debug;
  Debug::enable();

  try {
    include_once('index.php');

    include_once(INCLUDE_PATH . 'traitements.inc.php');
    $Connexion = Connexion::getInstance();
    	session_start();
    $username = $_POST['username'];
    $password = hash('sha256',$_POST['password']);


    $result = $Connexion->dbh->prepare("SELECT * FROM user WHERE username=:username AND password=:password");
    $result->bindParam(':username', $username);
    $result->bindParam(':password', $password);
    $result->execute();
    $rows = $result->fetch(PDO::FETCH_NUM);
    if($rows > 0) {
      header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . '/TP1/demo.php?registered:succeed');
    }
    else{
      header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . '/TP1/index.php?registered:failed');

    }

    } catch(Exception $ex){
        echo $ex->getMessage();
      }
         ?>
