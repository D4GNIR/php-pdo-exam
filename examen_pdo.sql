-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 20 avr. 2022 à 10:32
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `examen_pdo`
--

-- --------------------------------------------------------

--
-- Structure de la table `examen_pdo`
--

DROP TABLE IF EXISTS `examen_pdo`;
CREATE TABLE IF NOT EXISTS `examen_pdo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(7) NOT NULL,
  `type` varchar(10) NOT NULL,
  `diametre` mediumint(9) NOT NULL,
  `gravite` float NOT NULL,
  `lien_nasa` varchar(180) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `examen_pdo`
--

INSERT INTO `examen_pdo` (`id`, `nom`, `type`, `diametre`, `gravite`, `lien_nasa`) VALUES
(1, 'Mercure', 'Tellurique', 4879, 3.7, 'https://solarsystem.nasa.gov/planets/mercury/overview/'),
(3, 'Vénus', 'Tellurique', 12104, 8.888, 'https://solarsystem.nasa.gov/planets/venus/overview/'),
(4, 'Terre', 'Tellurique', 12576, 9.789, 'https://solarsystem.nasa.gov/planets/earth/overview/'),
(5, 'Mars', 'Tellurique', 6792, 3.71, 'https://solarsystem.nasa.gov/planets/mars/overview/'),
(6, 'Jupiter', 'Gazeuse', 142984, 24.79, 'https://solarsystem.nasa.gov/planets/jupiter/overview/'),
(7, 'Saturne', 'Gazeuse', 120536, 10.44, 'https://solarsystem.nasa.gov/planets/saturn/overview/'),
(8, 'Uranus', 'Gazeuse', 51118, 8.87, 'https://solarsystem.nasa.gov/planets/uranus/overview/'),
(9, 'Neptune', 'Gazeuse', 49528, 11.15, 'https://solarsystem.nasa.gov/planets/neptune/overview/');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
