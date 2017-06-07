-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 07 juin 2017 à 14:25
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `testImage`
--

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `url` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `stockage` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `url`, `stockage`) VALUES
(1, 'https://media.senscritique.com/media/000006491241/source_big/Gurren_Lagann.jpg', 'url'),
(2, 'http://www.nautiljon.com/images/anime/00/76/steins_gate_1967.jpg?1446742749', 'url'),
(3, 'https://vignette3.wikia.nocookie.net/neptunia/images/2/24/4GO_Slider.jpg/revision/latest/scale-to-width-down/670?cb=20161101031831', 'url'),
(7, 'http://galerie.nautiljon.com/07/84/medaka_box_639948.jpg', 'url'),
(11, 'http://blog.textile-alsace.com/wp-content/uploads/2014/11/ensisa-mulhouse-logo.jpeg', 'url'),
(14, '1a4d354e387795ab6212fb47e3bb00e3.jpg', 'disque'),
(15, 'http://hdqwalls.com/download/dva-overwatch-artwork-lu-2048x1152.jpg', 'url'),
(16, '9a80866e4f9878f3b710d4e1ab8d05a1.png', 'disque'),
(17, '0a2f67619fd8041da4946f2e5ed844fe.jpg', 'disque'),
(18, 'https://www.jvfrance.com/wp-content/uploads/2015/06/vanquish_large.jpeg', 'url'),
(19, '5827bb835df6ae23e165fb749dfb49b3.jpeg', 'disque');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `url` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `stockage` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`id`, `url`, `stockage`) VALUES
(15, '[HorribleSubs] Atom - The Beginning - 07 [720p]_HD.mp4', 'disque'),
(14, 'eromanga-sensei_9_HD.mp4', 'disque'),
(16, 'https://www.youtube.com/watch?v=g6oUwk-5eyg', 'url'),
(18, 'https://www.youtube.com/watch?v=a9jFnUJenzg', 'url');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
