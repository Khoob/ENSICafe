-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 01 Juin 2017 à 11:27
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tuto`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `id` int(11) NOT NULL,
  `auteur` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `chat`
--

INSERT INTO `chat` (`id`, `pseudo`, `message`) VALUES
(10, 'Robert', 'Quelqu\'un est là ?'),
(11, 'jean', 'bonjour'),
(12, 'nolwenn', 'Salut les copains, oui je suis là'),
(13, 'Antoine', 'Vous etes trop marrants lol'),
(14, 'Robert', 'Vous êtes les meilleurs :D'),
(15, 'Michel', 'Robert tu m\'entends ?'),
(16, 'Robert', 'Salut mcihel'),
(17, 'Michel', 'Qu\'est que t\'as boloss ?'),
(18, 'Michel', 'Prout'),
(19, 'Robert', 'coucou nolwenn'),
(20, 'Robert', 'salut'),
(21, 'Robert', 'Allez dégage antoine'),
(22, 'Jacky', 'Coucou on se fait une pétanque ?'),
(23, 'Jacky', 'wesh les gars');

-- --------------------------------------------------------

--
-- Structure de la table `chatv2`
--

CREATE TABLE `chatv2` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `chatv2`
--

INSERT INTO `chatv2` (`id`, `pseudo`, `message`, `date`) VALUES
(1, 'Jacky', 'On se fait du tuning ?', '2017-05-31 15:25:48'),
(2, 'Jacky', 'On se fait du tuning ?', '2017-05-31 15:26:54'),
(3, 'Jacky', 'On se fait du tuning ?', '2017-05-31 15:28:54'),
(4, 'Jacky', 'Bah alors y\'a personne ?\r\n', '2017-05-31 15:29:07'),
(5, 'Jacky', 'Bah alors y\'a personne ?\r\n', '2017-05-31 15:29:48'),
(6, 'Nolwenn', 'COucou Jacky', '2017-05-31 15:31:49'),
(7, 'titouan', 'wtf les potes', '2017-05-31 15:51:05'),
(8, 'titouan', 'salut saad', '2017-05-31 15:51:22'),
(9, 'titouan', 'jzfouerhe', '2017-05-31 15:52:10'),
(10, 'titouan', 'feygfef', '2017-05-31 15:52:54'),
(11, 'nolwenn', 'bon réunion ?\r\n', '2017-06-01 09:48:28'),
(12, 'nolwenn', 'bon réunion ?\r\n', '2017-06-01 09:50:43'),
(13, 'thomas', 'bonjour', '2017-06-01 09:55:48'),
(14, 'thomas', 'bonjour', '2017-06-01 10:07:19'),
(15, 'thomas', 'prout', '2017-06-01 10:07:28'),
(16, 'thomas', 'coucou', '2017-06-01 10:07:37'),
(17, 'thomas', 'coucou', '2017-06-01 10:08:12'),
(18, 'thomas', 'prout', '2017-06-01 10:08:19'),
(19, 'thomas', 'test2', '2017-06-01 10:08:31'),
(20, 'thomas', 'test2', '2017-06-01 10:09:50'),
(21, 'thomas', 'izjfouerhguierg', '2017-06-01 10:09:57'),
(22, 'thomas', 'ze ', '2017-06-01 10:10:12'),
(23, 'thomas', 'rzerg', '2017-06-01 10:12:18'),
(24, 'thomas', 'message2155', '2017-06-01 10:55:09');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chatv2`
--
ALTER TABLE `chatv2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `chatv2`
--
ALTER TABLE `chatv2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
