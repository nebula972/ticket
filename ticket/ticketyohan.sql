-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 07 avr. 2022 à 20:06
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ticketyohan`
--

-- --------------------------------------------------------

--
-- Structure de la table `sav`
--

DROP TABLE IF EXISTS `sav`;
CREATE TABLE IF NOT EXISTS `sav` (
  `idc` int(11) NOT NULL AUTO_INCREMENT,
  `prbl` varchar(50) NOT NULL,
  `etat` varchar(20) NOT NULL,
  `actions` varchar(20) NOT NULL,
  PRIMARY KEY (`idc`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sav`
--

INSERT INTO `sav` (`idc`, `prbl`, `etat`, `actions`) VALUES
(1, 'Reproduction graph', 'En attente', ''),
(2, 'Probleme de connexion', 'En cours', ''),
(3, 'developpement de la page d\'accueil', 'Termine', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idu`, `pseudo`, `mdp`) VALUES
(1, 'prof', 'prof'),
(2, 'eleve', 'eleve'),
(3, 'prof', 'prof'),
(4, 'eleve', 'eleve');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
