-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 16 Mars 2017 à 19:36
-- Version du serveur :  5.7.11-0ubuntu6
-- Version de PHP :  7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `meal`
--

-- --------------------------------------------------------

--
-- Structure de la table `event_diet`
--

CREATE TABLE `event_diet` (
  `id_event` int(11) NOT NULL,
  `id_diet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `event_diet`
--

INSERT INTO `event_diet` (`id_event`, `id_diet`) VALUES
(1, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `event_diet`
--
ALTER TABLE `event_diet`
  ADD PRIMARY KEY (`id_event`,`id_diet`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_diet` (`id_diet`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `event_diet`
--
ALTER TABLE `event_diet`
  ADD CONSTRAINT `event_diet_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `event_diet_ibfk_2` FOREIGN KEY (`id_diet`) REFERENCES `diets` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
