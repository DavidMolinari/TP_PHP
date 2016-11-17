<?php
class Client{
  private $NOCLI;
  private $TITRECLIENT;
  private $NOMCLI;
  private $PRENOMCLI;
  private $ADRESSERUE1CLI;
  private $ADRESSERUE2CLI;
  private $CPCLI;
  private $VILLECLI;
  private $TELCLI;

  public function afficheUnClient(){
    return "Le client dont le numéro est égal à " . $this->NOCLI . "s'appelle " .$this->TITRECLIENT . " " .$this->NOMCLI . " " . $this->PRENOMCLI . "<br>";
  }
} ?>
