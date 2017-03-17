-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 17 Mars 2017 à 13:13
-- Version du serveur :  5.7.11-0ubuntu6
-- Version de PHP :  7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bonne_sante`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(63) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `long_desc` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `article_comment`
--

CREATE TABLE `article_comment` (
  `id_user` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `article_diet`
--

CREATE TABLE `article_diet` (
  `id_article` int(11) NOT NULL,
  `id_diet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `diets`
--

CREATE TABLE `diets` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `long_desc` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `diets`
--

INSERT INTO `diets` (`id`, `name`, `short_desc`, `long_desc`, `picture`, `thumbnail`) VALUES
(1, 'régime1', 'le régime1', 'le régime1', 'https://source.unsplash.com/category/food', 'https://source.unsplash.com/category/food'),
(2, 'régime2', 'le régime2', 'le régime2', 'https://source.unsplash.com/category/food', 'https://source.unsplash.com/category/food');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(63) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `long_desc` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `id_user_maker` int(11) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `event_date` date NOT NULL,
  `telepresential` tinyint(1) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zipcode` varchar(6) DEFAULT NULL,
  `city` varchar(63) DEFAULT NULL,
  `places_nb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `title`, `short_desc`, `long_desc`, `picture`, `thumbnail`, `id_user_maker`, `add_date`, `event_date`, `telepresential`, `address`, `zipcode`, `city`, `places_nb`) VALUES
(1, 'event1', 'event1', 'event1', 'https://source.unsplash.com/category/people', 'https://source.unsplash.com/category/people', 1, '2017-03-16 18:35:05', '2017-03-31', 0, NULL, NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Structure de la table `event_comment`
--

CREATE TABLE `event_comment` (
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Structure de la table `event_user`
--

CREATE TABLE `event_user` (
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'editor'),
(3, 'member');

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

CREATE TABLE `role_user` (
  `id_role` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zipcode` varchar(6) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `birth_date`, `address`, `city`, `zipcode`, `phone`, `email`, `password`) VALUES
(1, 'julien', 'arauzo', '1991-10-03', NULL, NULL, NULL, NULL, '', 'd9ed7694f0cdbc0ce83246bc1db2d789');

-- --------------------------------------------------------

--
-- Structure de la table `user_diet`
--

CREATE TABLE `user_diet` (
  `id_user` int(11) NOT NULL,
  `id_diet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `article_comment`
--
ALTER TABLE `article_comment`
  ADD PRIMARY KEY (`id_user`,`id_article`,`add_date`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD KEY `id_article` (`id_article`);

--
-- Index pour la table `article_diet`
--
ALTER TABLE `article_diet`
  ADD KEY `id_article` (`id_article`),
  ADD KEY `id_diet` (`id_diet`);

--
-- Index pour la table `diets`
--
ALTER TABLE `diets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user_maker`);

--
-- Index pour la table `event_comment`
--
ALTER TABLE `event_comment`
  ADD PRIMARY KEY (`id_user`,`id_event`,`add_date`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_event` (`id_event`);

--
-- Index pour la table `event_diet`
--
ALTER TABLE `event_diet`
  ADD PRIMARY KEY (`id_event`,`id_diet`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_diet` (`id_diet`);

--
-- Index pour la table `event_user`
--
ALTER TABLE `event_user`
  ADD PRIMARY KEY (`id_event`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id_role`,`id_user`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `user_diet`
--
ALTER TABLE `user_diet`
  ADD PRIMARY KEY (`id_user`,`id_diet`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_diet` (`id_diet`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `diets`
--
ALTER TABLE `diets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `auteurArticles` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `article_comment`
--
ALTER TABLE `article_comment`
  ADD CONSTRAINT `article_comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `article_comment_ibfk_2` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id`);

--
-- Contraintes pour la table `article_diet`
--
ALTER TABLE `article_diet`
  ADD CONSTRAINT `article_diet_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `article_diet_ibfk_2` FOREIGN KEY (`id_diet`) REFERENCES `diets` (`id`);

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `creator_user` FOREIGN KEY (`id_user_maker`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `event_comment`
--
ALTER TABLE `event_comment`
  ADD CONSTRAINT `event_comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `event_comment_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `events` (`id`);

--
-- Contraintes pour la table `event_diet`
--
ALTER TABLE `event_diet`
  ADD CONSTRAINT `event_diet_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `event_diet_ibfk_2` FOREIGN KEY (`id_diet`) REFERENCES `diets` (`id`);

--
-- Contraintes pour la table `event_user`
--
ALTER TABLE `event_user`
  ADD CONSTRAINT `event_user_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `event_user_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `user_diet`
--
ALTER TABLE `user_diet`
  ADD CONSTRAINT `user_diet_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_diet_ibfk_2` FOREIGN KEY (`id_diet`) REFERENCES `diets` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
