-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 09 Avril 2015 à 23:38
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `clientsoo`
--
CREATE DATABASE IF NOT EXISTS `clientsoo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `clientsoo`;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITRE` varchar(12) NOT NULL DEFAULT 'Monsieur',
  `NOM` varchar(30) NOT NULL,
  `PRENOM` varchar(30) NOT NULL,
  `ADRESSERUE1` varchar(40) NOT NULL,
  `ADRESSERUE2` varchar(40) DEFAULT NULL,
  `CP` varchar(6) NOT NULL,
  `VILLE` varchar(30) NOT NULL,
  `TEL` varchar(14) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`ID`, `TITRE`, `NOM`, `PRENOM`, `ADRESSERUE1`, `ADRESSERUE2`, `CP`, `VILLE`, `TEL`) VALUES(1, 'Monsieur', 'Tienun', 'Jean', '112, rue du Départ', NULL, '13000 ', 'Marseille', '0404040404');
INSERT INTO `client` (`ID`, `TITRE`, `NOM`, `PRENOM`, `ADRESSERUE1`, `ADRESSERUE2`, `CP`, `VILLE`, `TEL`) VALUES(2, 'Madame', 'Terrature', 'Julie', 'Résidence Mermoz', '1234 Boulevard des Aviateurs', '14000 ', 'Caen', '0202020202');
INSERT INTO `client` (`ID`, `TITRE`, `NOM`, `PRENOM`, `ADRESSERUE1`, `ADRESSERUE2`, `CP`, `VILLE`, `TEL`) VALUES(3, 'Mademoiselle', 'Morizet', 'Patricia', 'Hameau de Pau', '23 Boulevard du Lycée', '33000 ', 'Bordeaux', '0250505052');
INSERT INTO `client` (`ID`, `TITRE`, `NOM`, `PRENOM`, `ADRESSERUE1`, `ADRESSERUE2`, `CP`, `VILLE`, `TEL`) VALUES(4, 'Monsieur', 'Nolapin', 'Jean', '12 quai des Brumes', NULL, '83000 ', 'Toulon', '0404505050');
INSERT INTO `client` (`ID`, `TITRE`, `NOM`, `PRENOM`, `ADRESSERUE1`, `ADRESSERUE2`, `CP`, `VILLE`, `TEL`) VALUES(5, 'Monsieur', 'Entete', 'Martel', 'Résidence du Faron', '30 rue du téléphérique', '83000 ', 'Toulon', '0250505050');
INSERT INTO `client` (`ID`, `TITRE`, `NOM`, `PRENOM`, `ADRESSERUE1`, `ADRESSERUE2`, `CP`, `VILLE`, `TEL`) VALUES(6, 'Monsieur', 'Entete', 'Martel', '12 Avenue de Lille', NULL, '59140 ', 'Dunkerque', '0250905057');
INSERT INTO `client` (`ID`, `TITRE`, `NOM`, `PRENOM`, `ADRESSERUE1`, `ADRESSERUE2`, `CP`, `VILLE`, `TEL`) VALUES(7, 'Madame', 'DUMANS', 'Henriette', 'Corniche des Bolides', 'Villa Ferrari', '49000 ', 'Angers', '0250765357');
INSERT INTO `client` (`ID`, `TITRE`, `NOM`, `PRENOM`, `ADRESSERUE1`, `ADRESSERUE2`, `CP`, `VILLE`, `TEL`) VALUES(8, 'Madame', 'Cerf', 'Paulette', '343 Avenue Henri Barbusse', NULL, '33000 ', 'Bordeaux', '0550505050');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDCLIENT` int(11) NOT NULL,
  `DATECDE` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_COMMANDE_CLIENT` (`IDCLIENT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`ID`, `IDCLIENT`, `DATECDE`) VALUES(1, 1, '2014-09-07');
INSERT INTO `commande` (`ID`, `IDCLIENT`, `DATECDE`) VALUES(2, 2, '2014-09-08');
INSERT INTO `commande` (`ID`, `IDCLIENT`, `DATECDE`) VALUES(3, 3, '2014-09-10');
INSERT INTO `commande` (`ID`, `IDCLIENT`, `DATECDE`) VALUES(4, 2, '2014-10-01');
INSERT INTO `commande` (`ID`, `IDCLIENT`, `DATECDE`) VALUES(5, 3, '2014-10-01');
INSERT INTO `commande` (`ID`, `IDCLIENT`, `DATECDE`) VALUES(6, 4, '2014-10-01');
INSERT INTO `commande` (`ID`, `IDCLIENT`, `DATECDE`) VALUES(7, 5, '2014-10-01');

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `IDCOMMANDE` int(11) NOT NULL,
  `IDPRODUIT` int(11) NOT NULL DEFAULT '0',
  `QTELIGNE` int(11) NOT NULL,
  PRIMARY KEY (`IDCOMMANDE`,`IDPRODUIT`),
  KEY `FK_LIGNE_PRODUIT` (`IDPRODUIT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(1, 1, 2);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(1, 4, 1);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(2, 1, 3);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(2, 2, 2);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(2, 3, 4);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 1, 4);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 2, 2);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 3, 5);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 4, 3);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 5, 12);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 6, 7);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 7, 5);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 8, 9);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(4, 3, 6);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(4, 4, 6);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 1, 6);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 2, 2);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 3, 5);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 4, 3);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 5, 13);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 6, 7);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 7, 5);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 8, 9);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(6, 4, 5);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(6, 5, 12);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(7, 5, 9);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(7, 7, 3);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DESIGNATION` varchar(50) DEFAULT NULL,
  `PUHT` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(1, 'CARS 2 - MARTIN - Voiture radiocommandée 1/16ème', '29.99');
INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(2, 'Lego Super Héros - La poursuite De Catwoman', '11.19');
INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(3, 'Titeuf, L''Ecole En Folie', '5.49');
INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(4, 'Robot Tankbot Compatible Smartphone', '13.99');
INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(5, 'Vélo VTT homme', '67.99');
INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(6, 'Vélo VTT femme', '59.99');
INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(7, 'Train électrique', '45.99');
INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(8, 'Pompe Vélo', '18.85');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_COMMANDE_CLIENT` FOREIGN KEY (`IDCLIENT`) REFERENCES `client` (`ID`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `FK_LIGNE_PRODUIT` FOREIGN KEY (`IDPRODUIT`) REFERENCES `produit` (`ID`),
  ADD CONSTRAINT `FK_LIGNE_COMMANDE` FOREIGN KEY (`IDCOMMANDE`) REFERENCES `commande` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;