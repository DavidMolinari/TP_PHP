<?php

  include_once('config/head.php');
  // AutoLoader
  AutoLoader::Register();

  // Debug Symfony
  require_once('vendor/autoload.php');
  use Symfony\Component\Debug\Debug;
  Debug::enable();

  try {
    include_once('config/conf.php');
    include_once(INCLUDE_PATH . 'traitements.inc.php');
    $Connexion = Connexion::getInstance();


	$username = $_POST ['username'];
	$password = $_POST ['password'];
	$cpassword = $_POST ['cpassword'];
  $email = $_POST ['email'];

  // lister les erreurs
	$error = Array();

	if(strlen($username) < 3)
		$error [] = 'Mot de passe trop court ( < 3 )';

	if(!preg_match('/^[A-Za-z][A-Za-z0-9]*(?:_[A-Za-z0-9]+)*$/', $username))
		$error [] = 'Caractères interdits.';

	if(strlen($password) < 5)
		$error [] = 'Mot de passe trop faible';

	if($password != $cpassword)
		$error [] = 'Les mots de passe ne correspondent pas.';
/*
  // test si l'utilisateur existe déjà
	$cquery = $Connexion->dbh->prepare('SELECT * FROM user WHERE username=' . $username);
	$cquery->execute();

	if($cquery->rowCount() == 1)
		$error [] = 'L\'utilisateur existe déjà';
}
    */

	// Si tout se passe bien
	if(count($error) == 0){
		$query = $Connexion->dbh->prepare('INSERT INTO user (username, password, email) VALUES (:username, :password, :email)');
		$query->execute(
			array(
				':username' => $username,
				':password' => hash('sha1', $password),
        ':email' => $email

			)
		);
    header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . '/TP1/register.php?registered:succeed');
	} else {
		$_SESSION ['errors'] = $error;
    header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . '/TP1/register.php?registered:failed');
	}

	$pdo = null;


} catch(Exception $ex){
  echo $ex->getMessage();
}
   ?>
