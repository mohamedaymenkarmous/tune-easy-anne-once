-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 24 Avril 2014 à 18:54
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `annonce`
--
CREATE DATABASE IF NOT EXISTS `annonce` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `annonce`;

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE IF NOT EXISTS `annonce` (
  `bdd_id` int(10) NOT NULL AUTO_INCREMENT,
  `bdd_type_annonce` text NOT NULL,
  `bdd_titre` text NOT NULL,
  `bdd_texte` text NOT NULL,
  `bdd_rubrique` text NOT NULL,
  `bdd_pays` text NOT NULL,
  `bdd_gouvernorat` text NOT NULL,
  `bdd_prix` float NOT NULL,
  `bdd_url_image` text NOT NULL,
  `bdd_date_insertion` text NOT NULL,
  `bdd_heure_insertion` text NOT NULL,
  `bdd_date_modification` text NOT NULL,
  `bdd_heure_modification` text NOT NULL,
  `bdd_proprietaire` int(10) NOT NULL,
  `bdd_etat` int(2) NOT NULL DEFAULT '1',
  UNIQUE KEY `bdd_id` (`bdd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`bdd_id`, `bdd_type_annonce`, `bdd_titre`, `bdd_texte`, `bdd_rubrique`, `bdd_pays`, `bdd_gouvernorat`, `bdd_prix`, `bdd_url_image`, `bdd_date_insertion`, `bdd_heure_insertion`, `bdd_date_modification`, `bdd_heure_modification`, `bdd_proprietaire`, `bdd_etat`) VALUES
(1, 'immobilier', 'insat', 'description', 'Terrain', 'Senegal', 'Kaffrine', 1, 'upload/DSCF33592.JPG', '2014-04-24', '18:53', '2014-04-24', '18:53', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `annonce_immobilier`
--

CREATE TABLE IF NOT EXISTS `annonce_immobilier` (
  `bdd_id_annonce` int(10) NOT NULL,
  `bdd_type` text NOT NULL,
  `bdd_surface` text NOT NULL,
  `bdd_adresse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonce_immobilier`
--

INSERT INTO `annonce_immobilier` (`bdd_id_annonce`, `bdd_type`, `bdd_surface`, `bdd_adresse`) VALUES
(1, 'Terrain agricole', '10000', 'adresse');

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE IF NOT EXISTS `connexion` (
  `bdd_session` text NOT NULL,
  `bdd_id` int(10) NOT NULL,
  `bdd_etat` int(2) NOT NULL COMMENT '3:non_connecté_absent; -1:non_connecté; 0:deconnecté; 1:connecté; -2:bloqué; 2:connecté_absent; ',
  `bdd_ip_visite` text NOT NULL,
  `bdd_heure_visite` text NOT NULL,
  `bdd_date_visite` text NOT NULL,
  `bdd_browser` text NOT NULL,
  `bdd_http_accept_el` text NOT NULL,
  `bdd_captcha_login` int(1) NOT NULL DEFAULT '0',
  `bdd_connexion` int(1) NOT NULL DEFAULT '0' COMMENT '0:non_connecté;1:connecté_non_securisé;2:connecté_securisé',
  KEY `bdd_id` (`bdd_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contenu_messages`
--

CREATE TABLE IF NOT EXISTS `contenu_messages` (
  `bdd_id` int(10) NOT NULL AUTO_INCREMENT,
  `bdd_id_expediteur` int(10) NOT NULL,
  `bdd_id_destinataire` int(10) NOT NULL,
  `bdd_message` text NOT NULL,
  `bdd_date` text NOT NULL,
  `bdd_heure` text NOT NULL,
  `bdd_etat_expediteur` int(2) NOT NULL COMMENT '0:non_lu; 1:lu; -1:supprimé',
  `bdd_etat_destinataire` int(2) NOT NULL COMMENT '0:non_lu; 1:lu; -1:supprimé',
  `bdd_entete_message` int(10) NOT NULL,
  PRIMARY KEY (`bdd_id`),
  UNIQUE KEY `bdd_id` (`bdd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `entete_messages`
--

CREATE TABLE IF NOT EXISTS `entete_messages` (
  `bdd_id` int(10) NOT NULL AUTO_INCREMENT,
  `bdd_id_annonce` int(10) NOT NULL,
  `bdd_signature` text NOT NULL COMMENT 'forme:id_personne1-id_personne2; avec personne(i)=(destinataire ou expediteur)',
  PRIMARY KEY (`bdd_id`),
  UNIQUE KEY `bdd_id` (`bdd_id`),
  UNIQUE KEY `bdd_id_2` (`bdd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `bdd_id` int(11) NOT NULL AUTO_INCREMENT,
  `bdd_login` text NOT NULL,
  `bdd_mdp` text NOT NULL,
  `bdd_mail` text NOT NULL,
  `bdd_nom` text NOT NULL,
  `bdd_prenom` text NOT NULL,
  `bdd_sexe` int(1) NOT NULL,
  `bdd_birthday_day` int(2) NOT NULL,
  `bdd_birthday_month` int(2) NOT NULL,
  `bdd_birthday_year` int(4) NOT NULL,
  `bdd_pays` int(3) NOT NULL,
  `bdd_qs` text NOT NULL,
  `bdd_rs` text NOT NULL,
  `bdd_telephone` text NOT NULL,
  `bdd_portable` text NOT NULL,
  `bdd_fax` text NOT NULL,
  `bdd_ip_inscription` text NOT NULL,
  `bdd_heure_inscription` text NOT NULL,
  `bdd_date_inscription` text NOT NULL,
  PRIMARY KEY (`bdd_id`),
  UNIQUE KEY `bdd_id` (`bdd_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`bdd_id`, `bdd_login`, `bdd_mdp`, `bdd_mail`, `bdd_nom`, `bdd_prenom`, `bdd_sexe`, `bdd_birthday_day`, `bdd_birthday_month`, `bdd_birthday_year`, `bdd_pays`, `bdd_qs`, `bdd_rs`, `bdd_telephone`, `bdd_portable`, `bdd_fax`, `bdd_ip_inscription`, `bdd_heure_inscription`, `bdd_date_inscription`) VALUES
(1, 'admin', 'mdpminadfstni', 'admin@gmail.com', 'admin', 'admin', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
