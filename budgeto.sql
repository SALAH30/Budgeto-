-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 23 Juin 2016 à 15:04
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `budgeto`
--

-- --------------------------------------------------------

--
-- Structure de la table `categoriepersonnel`
--

CREATE TABLE IF NOT EXISTS `categoriepersonnel` (
  `idCat` int(11) NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(60) NOT NULL,
  `prix_estime` int(11) NOT NULL,
  PRIMARY KEY (`idCat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `categoriepersonnel`
--

INSERT INTO `categoriepersonnel` (`idCat`, `nomCategorie`, `prix_estime`) VALUES
(1, 'Sécurité', 0),
(2, 'Categorie1', 0),
(3, 'personne1', 0),
(4, 'cat test', 2000),
(5, 'agent_type_1', 30000);

-- --------------------------------------------------------

--
-- Structure de la table `categorieressource`
--

CREATE TABLE IF NOT EXISTS `categorieressource` (
  `idCRes` int(11) NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(60) NOT NULL,
  PRIMARY KEY (`idCRes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `categorieressource`
--

INSERT INTO `categorieressource` (`idCRes`, `nomCategorie`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, 'salah'),
(5, 'New Catégorie '),
(6, 'categor4'),
(7, 'categor6');

-- --------------------------------------------------------

--
-- Structure de la table `colloque`
--

CREATE TABLE IF NOT EXISTS `colloque` (
  `idCol` int(11) NOT NULL AUTO_INCREMENT,
  `nomCol` varchar(60) NOT NULL,
  `dateColDebut` date NOT NULL,
  `dateColFin` date NOT NULL,
  `lieuCol` varchar(100) NOT NULL,
  `descCol` varchar(200) DEFAULT NULL,
  `nbParticipants` int(11) DEFAULT NULL,
  `droitCol` int(11) DEFAULT '0',
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idCol`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `colloque`
--

INSERT INTO `colloque` (`idCol`, `nomCol`, `dateColDebut`, `dateColFin`, `lieuCol`, `descCol`, `nbParticipants`, `droitCol`, `idUser`) VALUES
(1, 'KDDA', '2016-06-26', '2016-06-30', 'Souk_Ahrass', 'INformatique', 56, 200, 1),
(2, 'SALAHCOL', '2016-06-15', '2016-06-17', 'OUARGL', 'RIiennn ', 560, 200, 1),
(3, 'SALAHCOLLOQUE', '2016-06-13', '2016-06-21', 'OUARGLA', 'RI', 56, 200, 1),
(12, 'asus', '2016-06-25', '2016-06-29', 'Alger', 'asus_col', 100000, 5000, 2);

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `idDate` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`idDate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `distribuer`
--

CREATE TABLE IF NOT EXISTS `distribuer` (
  `idDist` int(11) NOT NULL AUTO_INCREMENT,
  `idCol` int(11) NOT NULL DEFAULT '0',
  `idGoo` int(11) NOT NULL DEFAULT '0',
  `nbGoo` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `prix_reel` int(11) NOT NULL,
  PRIMARY KEY (`idDist`,`idCol`,`idGoo`),
  KEY `idGoo` (`idGoo`),
  KEY `distribuer_ibfk_1` (`idCol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `distribuer`
--

INSERT INTO `distribuer` (`idDist`, `idCol`, `idGoo`, `nbGoo`, `date`, `prix_reel`) VALUES
(1, 1, 1, 200, '2016-02-17', 15),
(2, 1, 2, 200, '2016-06-15', 1200),
(3, 2, 2, 150, '2016-06-11', 350);

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE IF NOT EXISTS `equipement` (
  `idEqui` int(11) NOT NULL AUTO_INCREMENT,
  `nomEquipement` varchar(60) NOT NULL,
  `cout_estime` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEqui`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `equipement`
--

INSERT INTO `equipement` (`idEqui`, `nomEquipement`, `cout_estime`) VALUES
(1, 'Table', 2000),
(2, 'EQUI1', 800);

-- --------------------------------------------------------

--
-- Structure de la table `equiper`
--

CREATE TABLE IF NOT EXISTS `equiper` (
  `idEqui` int(11) NOT NULL,
  `idCol` int(11) NOT NULL DEFAULT '0',
  `nomEquipement` varchar(60) NOT NULL,
  `nbexemplaire` int(11) DEFAULT NULL,
  `prix_reel` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `LivraisonEqui` int(11) NOT NULL,
  PRIMARY KEY (`idCol`,`idEqui`),
  KEY `idEqui` (`idEqui`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `equiper`
--

INSERT INTO `equiper` (`idEqui`, `idCol`, `nomEquipement`, `nbexemplaire`, `prix_reel`, `date`, `LivraisonEqui`) VALUES
(1, 1, '0', 100, 2500, '2016-02-18', 3000),
(2, 1, '0', 23, 566, '2016-06-01', 266),
(1, 2, 'Table', 100, 1200, '2016-06-02', 2000),
(1, 12, 'Table', 1000, 2000, '2016-06-24', 2500);

-- --------------------------------------------------------

--
-- Structure de la table `goodies`
--

CREATE TABLE IF NOT EXISTS `goodies` (
  `idGoo` int(11) NOT NULL AUTO_INCREMENT,
  `nomGoo` varchar(60) DEFAULT NULL,
  `coutGoo` int(11) DEFAULT '0',
  PRIMARY KEY (`idGoo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `goodies`
--

INSERT INTO `goodies` (`idGoo`, `nomGoo`, `coutGoo`) VALUES
(1, 'stylo', 20),
(2, 'Goodies3', 300);

-- --------------------------------------------------------

--
-- Structure de la table `hebergement`
--

CREATE TABLE IF NOT EXISTS `hebergement` (
  `idH` int(11) NOT NULL AUTO_INCREMENT,
  `nomH` varchar(60) DEFAULT NULL,
  `prix_estime` int(11) DEFAULT '0',
  `classe` varchar(60) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `formule` varchar(60) DEFAULT NULL,
  `duree` int(11) DEFAULT NULL,
  PRIMARY KEY (`idH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `hebergement`
--

INSERT INTO `hebergement` (`idH`, `nomH`, `prix_estime`, `classe`, `adresse`, `formule`, `duree`) VALUES
(1, 'HOTEL', 40000, NULL, 'ALGER', NULL, 4),
(2, 'hotel', 3000, NULL, 'alger', NULL, 5),
(3, '', 0, NULL, '', NULL, 0),
(4, '', 0, NULL, '', NULL, 0),
(5, '', 0, NULL, '', NULL, 0),
(6, 'hot1', 90000, NULL, 'ouargla', NULL, 7),
(7, 'HEB', 2300, NULL, 'SOUKAHRESS', NULL, 4),
(8, 'HOTEL TASSILI', 40000, NULL, 'OUARGLA', NULL, 4),
(9, 'hot2', 40000, NULL, 'Alger', NULL, 4),
(10, '', 0, NULL, '', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `heberger`
--

CREATE TABLE IF NOT EXISTS `heberger` (
  `idHeb` int(11) NOT NULL AUTO_INCREMENT,
  `idIntervenant` int(11) NOT NULL,
  `idH` int(11) NOT NULL,
  `prix_reel` int(11) DEFAULT '0',
  `dateDebut` date DEFAULT '0000-00-00',
  `dateFin` date DEFAULT '0000-00-00',
  PRIMARY KEY (`idHeb`,`idIntervenant`,`idH`),
  KEY `idH` (`idH`),
  KEY `heberger_ibfk_1` (`idIntervenant`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `heberger`
--

INSERT INTO `heberger` (`idHeb`, `idIntervenant`, `idH`, `prix_reel`, `dateDebut`, `dateFin`) VALUES
(1, 1, 2, 3000, '0000-00-00', '0000-00-00'),
(2, 1, 3, 0, '0000-00-00', '0000-00-00'),
(3, 1, 4, 0, '0000-00-00', '0000-00-00'),
(4, 2, 5, 0, '0000-00-00', '0000-00-00'),
(5, 3, 6, 90000, '0000-00-00', '0000-00-00'),
(6, 4, 7, 2300, '0000-00-00', '0000-00-00'),
(7, 1, 8, 40000, '0000-00-00', '0000-00-00'),
(8, 5, 9, 40000, '0000-00-00', '0000-00-00'),
(9, 3, 10, 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `intervenant`
--

CREATE TABLE IF NOT EXISTS `intervenant` (
  `idIntervenant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(60) DEFAULT NULL,
  `prenome` varchar(60) DEFAULT NULL,
  `remuneration` int(11) DEFAULT '0',
  PRIMARY KEY (`idIntervenant`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `intervenant`
--

INSERT INTO `intervenant` (`idIntervenant`, `nom`, `prenome`, `remuneration`) VALUES
(1, 'Boukhetta', 'Salah Eddine', 0),
(2, 'Boukhetta', 'Zeid', 0),
(3, 'boukhetta', 'khalil', 0),
(4, 'mecharnia', 'thamer', 0),
(5, 'Mecharnia', 'Thamer', 20000);

-- --------------------------------------------------------

--
-- Structure de la table `intervenir`
--

CREATE TABLE IF NOT EXISTS `intervenir` (
  `idInt` int(11) NOT NULL AUTO_INCREMENT,
  `idCol` int(11) NOT NULL DEFAULT '0',
  `idIntervenant` int(11) DEFAULT NULL,
  `dateDebut` date NOT NULL DEFAULT '0000-00-00',
  `dateFin` date DEFAULT NULL,
  `renumInt` int(11) NOT NULL,
  PRIMARY KEY (`idInt`,`idCol`,`dateDebut`),
  KEY `idIntervenant` (`idIntervenant`),
  KEY `intervenir_ibfk_1` (`idCol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `intervenir`
--

INSERT INTO `intervenir` (`idInt`, `idCol`, `idIntervenant`, `dateDebut`, `dateFin`, `renumInt`) VALUES
(1, 1, 1, '2016-06-07', '2016-06-09', 200),
(2, 1, 2, '2016-06-03', '2016-06-25', 3000),
(3, 1, 3, '2016-06-01', '2016-06-06', 12000),
(4, 1, 4, '2016-06-16', '2016-06-24', 3000),
(5, 2, 1, '2016-06-02', '2016-06-04', 30000),
(6, 2, 5, '2016-06-09', '2016-06-24', 25000),
(7, 2, 3, '2016-06-02', '2016-06-25', 3000),
(8, 2, 4, '0000-00-00', '0000-00-00', 0),
(9, 2, 2, '2016-06-10', '2016-06-25', 2000);

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `idLoc` int(11) NOT NULL AUTO_INCREMENT,
  `idCol` int(11) NOT NULL DEFAULT '0',
  `idSalle` int(11) NOT NULL,
  `dateS` date NOT NULL DEFAULT '0000-00-00',
  `duree` int(4) DEFAULT NULL,
  `prix_reel` int(11) DEFAULT '0',
  PRIMARY KEY (`idLoc`,`idCol`,`idSalle`),
  KEY `idSalle` (`idSalle`),
  KEY `location_ibfk_1` (`idCol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `location`
--

INSERT INTO `location` (`idLoc`, `idCol`, `idSalle`, `dateS`, `duree`, `prix_reel`) VALUES
(1, 1, 1, '2016-02-15', 3, 0),
(2, 1, 1, '0000-00-00', 3, 12000),
(3, 1, 3, '0000-00-00', 3, 12000),
(4, 1, 4, '2016-06-17', 5, 2000),
(5, 1, 2, '2016-01-01', 6, 20000),
(6, 2, 3, '2016-06-10', 4, 3000),
(7, 2, 4, '2016-06-09', 2, 29900),
(8, 3, 1, '2016-06-03', 4, 300);

-- --------------------------------------------------------

--
-- Structure de la table `publicite`
--

CREATE TABLE IF NOT EXISTS `publicite` (
  `idPub` int(11) NOT NULL AUTO_INCREMENT,
  `typePub` varchar(100) NOT NULL,
  `prix_estime` int(11) NOT NULL,
  PRIMARY KEY (`idPub`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `publicite`
--

INSERT INTO `publicite` (`idPub`, `typePub`, `prix_estime`) VALUES
(1, 'TV', 12000),
(2, 'journale', 4900),
(3, 'journale3', 4900);

-- --------------------------------------------------------

--
-- Structure de la table `publier`
--

CREATE TABLE IF NOT EXISTS `publier` (
  `idPubl` int(11) NOT NULL AUTO_INCREMENT,
  `idCol` int(11) NOT NULL,
  `idPub` int(11) NOT NULL,
  `prix_reel` int(11) NOT NULL,
  PRIMARY KEY (`idPubl`,`idCol`,`idPub`),
  KEY `idPub` (`idPub`),
  KEY `publier_ibfk_1` (`idCol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `publier`
--

INSERT INTO `publier` (`idPubl`, `idCol`, `idPub`, `prix_reel`) VALUES
(1, 1, 1, 12000),
(2, 2, 3, 5000),
(3, 2, 1, 20000);

-- --------------------------------------------------------

--
-- Structure de la table `repas`
--

CREATE TABLE IF NOT EXISTS `repas` (
  `idRepas` int(11) NOT NULL AUTO_INCREMENT,
  `nomRepas` varchar(60) NOT NULL,
  `prix_estime` int(11) DEFAULT '0',
  PRIMARY KEY (`idRepas`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `repas`
--

INSERT INTO `repas` (`idRepas`, `nomRepas`, `prix_estime`) VALUES
(1, 'Déjeuner.', 800),
(2, 'Petit déjeuner.', 3000),
(3, 'Pause-café', 20),
(4, 'Dîner', 1000);

-- --------------------------------------------------------

--
-- Structure de la table `ressource`
--

CREATE TABLE IF NOT EXISTS `ressource` (
  `idRes` int(11) NOT NULL AUTO_INCREMENT,
  `idCRes` int(11) NOT NULL,
  `nomRessource` varchar(60) NOT NULL,
  `prix_estime` int(11) DEFAULT '0',
  PRIMARY KEY (`idRes`),
  KEY `idCRes` (`idCRes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `ressource`
--

INSERT INTO `ressource` (`idRes`, `idCRes`, `nomRessource`, `prix_estime`) VALUES
(1, 1, 'ressource', 0),
(2, 1, 'ressource', 0),
(3, 1, 'ressource', 0),
(4, 1, 'ressource', 0),
(5, 1, 'ressource', 0),
(6, 1, 'ressource', 0),
(7, 1, 'ressource', 0),
(8, 1, 'ressource', 0),
(9, 1, '', 0),
(10, 1, '', 0),
(11, 1, 'qf', 0),
(12, 1, 'Res1', 0),
(13, 6, 'cate4', 0),
(14, 7, 'NOM', 0),
(15, 5, 'NEW', 0);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `idSalle` int(11) NOT NULL AUTO_INCREMENT,
  `nomSalle` varchar(60) NOT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `prix_estime` int(11) DEFAULT '0',
  `capacite` int(11) NOT NULL,
  `typeSalle` varchar(60) DEFAULT NULL,
  `surface` int(11) NOT NULL,
  PRIMARY KEY (`idSalle`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`idSalle`, `nomSalle`, `adresse`, `prix_estime`, `capacite`, `typeSalle`, `surface`) VALUES
(1, 'Ibn Khaldoune', 'ALger', 200, 1200, 'cénema', 200),
(2, 'SALLEtest1', 'Ouargla', 100, 400, 'test1', 300),
(3, 'SALLEtest2', 'Setif', 500, 900, 'test2', 400),
(4, 'Salouh', 'ouargla', 1200, 2000, 'Type', 200);

-- --------------------------------------------------------

--
-- Structure de la table `servir`
--

CREATE TABLE IF NOT EXISTS `servir` (
  `idServ` int(11) NOT NULL AUTO_INCREMENT,
  `idCol` int(11) NOT NULL DEFAULT '0',
  `idRepas` int(11) NOT NULL DEFAULT '0',
  `dateR` date NOT NULL,
  `menu` varchar(500) DEFAULT NULL,
  `concernes` varchar(100) DEFAULT NULL,
  `nbRepas` int(11) NOT NULL DEFAULT '1',
  `prix_reel` int(11) DEFAULT '0',
  PRIMARY KEY (`idServ`,`idCol`,`idRepas`),
  KEY `idRepas` (`idRepas`),
  KEY `servir_ibfk_1` (`idCol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `servir`
--

INSERT INTO `servir` (`idServ`, `idCol`, `idRepas`, `dateR`, `menu`, `concernes`, `nbRepas`, `prix_reel`) VALUES
(1, 1, 1, '2016-02-16', NULL, NULL, 200, 750),
(2, 1, 2, '2016-06-23', NULL, NULL, 200, 123),
(3, 2, 1, '2016-06-09', NULL, NULL, 200, 800),
(4, 12, 1, '2016-06-25', NULL, NULL, 1000, 1000),
(5, 1, 3, '2016-06-28', NULL, NULL, 100, 20),
(6, 1, 4, '2016-06-28', NULL, NULL, 1000, 900);

-- --------------------------------------------------------

--
-- Structure de la table `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
  `idTransport` int(11) NOT NULL AUTO_INCREMENT,
  `classe` varchar(32) DEFAULT NULL,
  `cout` int(11) DEFAULT NULL,
  `lieuDepart` varchar(60) DEFAULT NULL,
  `escale` varchar(60) DEFAULT NULL,
  `lieuArrivee` varchar(60) DEFAULT NULL,
  `typeTransport` varchar(60) DEFAULT NULL,
  `dateDepart` date DEFAULT NULL,
  `dateArrivee` date DEFAULT NULL,
  PRIMARY KEY (`idTransport`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `transport`
--

INSERT INTO `transport` (`idTransport`, `classe`, `cout`, `lieuDepart`, `escale`, `lieuArrivee`, `typeTransport`, `dateDepart`, `dateArrivee`) VALUES
(1, 'A', 50000, 'PARIS', NULL, 'ALGER', 'AVION', NULL, NULL),
(2, 'A', 50000, 'PARIS', NULL, 'ALGER', 'AVION', NULL, NULL),
(3, '', 0, '', NULL, '', '', NULL, NULL),
(4, '', 0, '', NULL, '', '', NULL, NULL),
(5, '', 0, '', NULL, '', '', NULL, NULL),
(6, 'A', 2000, 'Alger', NULL, 'ouargla', 'Avion', NULL, NULL),
(7, 'B', 4000, 'ALGER', NULL, 'SOUKHAHRES', 'AVION', NULL, NULL),
(8, 'A', 5000, 'ALGER', NULL, 'OUARGLA', 'AVION', NULL, '2016-06-05'),
(9, 'economie', 10000, 'alger', NULL, 'ouargla', 'avion', NULL, '2016-06-04'),
(10, '', 0, '', NULL, '', '', NULL, '2016-06-04');

-- --------------------------------------------------------

--
-- Structure de la table `travailler`
--

CREATE TABLE IF NOT EXISTS `travailler` (
  `idTrav` int(11) NOT NULL AUTO_INCREMENT,
  `idCol` int(11) NOT NULL DEFAULT '0',
  `idCat` int(11) NOT NULL,
  `nbrCategorie` int(11) DEFAULT NULL,
  `remuneration` int(11) DEFAULT '0',
  PRIMARY KEY (`idTrav`,`idCol`,`idCat`),
  KEY `idCat` (`idCat`),
  KEY `travailler_ibfk_1` (`idCol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `travailler`
--

INSERT INTO `travailler` (`idTrav`, `idCol`, `idCat`, `nbrCategorie`, `remuneration`) VALUES
(1, 1, 2, 200, 2000),
(2, 1, 3, 200, 1200),
(3, 1, 1, 0, 0),
(4, 2, 2, 200, 3000),
(5, 2, 4, 200, 3000),
(6, 1, 5, 2, 2),
(7, 1, 4, 3, 2),
(8, 12, 1, 20, 3000);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nomuser` varchar(30) NOT NULL,
  `motpasse` varchar(60) NOT NULL,
  `adressemail` varchar(30) NOT NULL,
  `numtel` int(11) DEFAULT NULL,
  `active` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `nomuser`, `motpasse`, `adressemail`, `numtel`, `active`) VALUES
(1, 'test', 'test', 'test', '$2y$10$zN5iwTEMWHP0WE4pJij/ieFfu6OriU3pSPxgfx2ZjB9BDAlCn/dPa', 'ds_boukhetta@esi.dz', 999999999, 'Yes'),
(2, 'abc', 'def', 'azerty', '$2y$10$ZtFK0GbBL6Mob4rgeOUIGefNCXRodHHtU8ojG.xxzCyKCNHFbgQJi', 'a@g.com', 2147483647, 'Yes');

-- --------------------------------------------------------

--
-- Structure de la table `utiliser`
--

CREATE TABLE IF NOT EXISTS `utiliser` (
  `idUse` int(11) NOT NULL AUTO_INCREMENT,
  `idRes` int(11) NOT NULL,
  `idCol` int(11) NOT NULL,
  `nbRessource` int(11) NOT NULL,
  `prix_reel` int(11) DEFAULT '0',
  `date` date DEFAULT NULL,
  PRIMARY KEY (`idUse`,`idRes`,`idCol`),
  KEY `idRes` (`idRes`),
  KEY `idCol` (`idCol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `utiliser`
--

INSERT INTO `utiliser` (`idUse`, `idRes`, `idCol`, `nbRessource`, `prix_reel`, `date`) VALUES
(1, 11, 1, 0, 0, '0000-00-00'),
(2, 12, 1, 20, 400, '2016-02-17'),
(3, 13, 1, 200, 3000, '2016-06-16'),
(4, 14, 1, 120, 210, '2016-12-30'),
(5, 15, 2, 200, 300, '2016-06-15');

-- --------------------------------------------------------

--
-- Structure de la table `voyager`
--

CREATE TABLE IF NOT EXISTS `voyager` (
  `idVoyager` int(11) NOT NULL AUTO_INCREMENT,
  `idIntervenant` int(11) NOT NULL DEFAULT '0',
  `idTransport` int(11) NOT NULL DEFAULT '0',
  `prix_reel` int(11) NOT NULL,
  PRIMARY KEY (`idVoyager`,`idIntervenant`,`idTransport`),
  KEY `idTransport` (`idTransport`),
  KEY `voyager_ibfk_1` (`idIntervenant`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `voyager`
--

INSERT INTO `voyager` (`idVoyager`, `idIntervenant`, `idTransport`, `prix_reel`) VALUES
(1, 1, 2, 0),
(2, 1, 3, 0),
(3, 1, 4, 0),
(4, 2, 5, 0),
(5, 3, 6, 2000),
(6, 4, 7, 4000),
(7, 1, 8, 5000),
(8, 5, 9, 10000),
(9, 3, 10, 0);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `colloque`
--
ALTER TABLE `colloque`
  ADD CONSTRAINT `colloque_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `distribuer`
--
ALTER TABLE `distribuer`
  ADD CONSTRAINT `distribuer_ibfk_1` FOREIGN KEY (`idCol`) REFERENCES `colloque` (`idCol`),
  ADD CONSTRAINT `distribuer_ibfk_2` FOREIGN KEY (`idGoo`) REFERENCES `goodies` (`idGoo`);

--
-- Contraintes pour la table `equiper`
--
ALTER TABLE `equiper`
  ADD CONSTRAINT `equiper_ibfk_1` FOREIGN KEY (`idCol`) REFERENCES `colloque` (`idCol`),
  ADD CONSTRAINT `equiper_ibfk_2` FOREIGN KEY (`idEqui`) REFERENCES `equipement` (`idEqui`);

--
-- Contraintes pour la table `heberger`
--
ALTER TABLE `heberger`
  ADD CONSTRAINT `heberger_ibfk_1` FOREIGN KEY (`idIntervenant`) REFERENCES `intervenant` (`idIntervenant`),
  ADD CONSTRAINT `heberger_ibfk_2` FOREIGN KEY (`idH`) REFERENCES `hebergement` (`idH`);

--
-- Contraintes pour la table `intervenir`
--
ALTER TABLE `intervenir`
  ADD CONSTRAINT `intervenir_ibfk_1` FOREIGN KEY (`idCol`) REFERENCES `colloque` (`idCol`),
  ADD CONSTRAINT `intervenir_ibfk_2` FOREIGN KEY (`idIntervenant`) REFERENCES `intervenant` (`idIntervenant`);

--
-- Contraintes pour la table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`idCol`) REFERENCES `colloque` (`idCol`),
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`idSalle`) REFERENCES `salle` (`idSalle`);

--
-- Contraintes pour la table `publier`
--
ALTER TABLE `publier`
  ADD CONSTRAINT `publier_ibfk_1` FOREIGN KEY (`idCol`) REFERENCES `colloque` (`idCol`),
  ADD CONSTRAINT `publier_ibfk_2` FOREIGN KEY (`idPub`) REFERENCES `publicite` (`idPub`);

--
-- Contraintes pour la table `ressource`
--
ALTER TABLE `ressource`
  ADD CONSTRAINT `Ressource_ibfk_1` FOREIGN KEY (`idCRes`) REFERENCES `categorieressource` (`idCRes`);

--
-- Contraintes pour la table `servir`
--
ALTER TABLE `servir`
  ADD CONSTRAINT `servir_ibfk_1` FOREIGN KEY (`idCol`) REFERENCES `colloque` (`idCol`),
  ADD CONSTRAINT `servir_ibfk_2` FOREIGN KEY (`idRepas`) REFERENCES `repas` (`idRepas`);

--
-- Contraintes pour la table `travailler`
--
ALTER TABLE `travailler`
  ADD CONSTRAINT `travailler_ibfk_1` FOREIGN KEY (`idCol`) REFERENCES `colloque` (`idCol`),
  ADD CONSTRAINT `travailler_ibfk_2` FOREIGN KEY (`idCat`) REFERENCES `categoriepersonnel` (`idCat`);

--
-- Contraintes pour la table `utiliser`
--
ALTER TABLE `utiliser`
  ADD CONSTRAINT `Utiliser_ibfk_1` FOREIGN KEY (`idCol`) REFERENCES `colloque` (`idCol`),
  ADD CONSTRAINT `Utiliser_ibfk_2` FOREIGN KEY (`idRes`) REFERENCES `ressource` (`idRes`);

--
-- Contraintes pour la table `voyager`
--
ALTER TABLE `voyager`
  ADD CONSTRAINT `voyager_ibfk_1` FOREIGN KEY (`idIntervenant`) REFERENCES `intervenant` (`idIntervenant`),
  ADD CONSTRAINT `voyager_ibfk_2` FOREIGN KEY (`idTransport`) REFERENCES `transport` (`idTransport`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
