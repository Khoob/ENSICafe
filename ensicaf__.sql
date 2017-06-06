-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 06 juin 2017 à 11:29
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
-- Base de données :  `ensicafé`
--

-- --------------------------------------------------------

--
-- Structure de la table `actu`
--

CREATE TABLE `actu` (
  `id` int(11) NOT NULL,
  `auteur` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL,
  `nbLike` int(11) DEFAULT NULL,
  `nbDislike` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `actu`
--

INSERT INTO `actu` (`id`, `auteur`, `type`, `date`, `contenu`, `nbLike`, `nbDislike`) VALUES
(1, 1, 'Actu', '2017-05-31 13:56:00', 'Premier remplissage de la base de données', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `actuclubs`
--

CREATE TABLE `actuclubs` (
  `idC` int(11) DEFAULT NULL,
  `idA` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `aenvoyé`
--

CREATE TABLE `aenvoyé` (
  `idP` int(11) DEFAULT NULL,
  `idM` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `amisactu`
--

CREATE TABLE `amisactu` (
  `idP` int(11) DEFAULT NULL,
  `idA` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `amisactu`
--

INSERT INTO `amisactu` (`idP`, `idA`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `amiscommentaire`
--

CREATE TABLE `amiscommentaire` (
  `idP` int(11) DEFAULT NULL,
  `idCom` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `appartient`
--

CREATE TABLE `appartient` (
  `idP` int(11) DEFAULT NULL,
  `idC` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `appartient`
--

INSERT INTO `appartient` (`idP`, `idC`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `areçu`
--

CREATE TABLE `areçu` (
  `idM` int(11) DEFAULT NULL,
  `idD` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `clubs`
--

CREATE TABLE `clubs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `membres` int(11) DEFAULT NULL,
  `president` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `realisations` text COLLATE utf8_unicode_ci NOT NULL,
  `evenements` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `clubs`
--

INSERT INTO `clubs` (`id`, `nom`, `description`, `photo`, `membres`, `president`, `realisations`, `evenements`) VALUES
(1, 'XID', 'Club Informatique', '', NULL, '', '', ''),
(2, 'Club JDR', 'Club de jeux de rôles', '', NULL, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `auteur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL,
  `nbLike` int(11) DEFAULT NULL,
  `nbDislike` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `idA` int(11) DEFAULT NULL,
  `idCom` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `auteur` int(11) NOT NULL,
  `destinataire` int(11) NOT NULL,
  `dateEnvoi` datetime NOT NULL,
  `contenu` text CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateNaissance` date NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parcours` text COLLATE utf8_unicode_ci NOT NULL,
  `interview` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `connected` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`id`, `nom`, `prenom`, `mail`, `dateNaissance`, `genre`, `fonction`, `mdp`, `parcours`, `interview`, `photo`, `connected`) VALUES
(1, 'Blangero', 'Thomas', 'thomas.blangero@uha.fr', '1995-11-10', 'Homme', 'Etudiant', 'mdp', '1A info', '', '', 0),
(2, 'Bernard', 'Nolwenn', 'nolwenn.bernard@uha.fr', '1996-09-25', 'Femme', 'Etudiant', 'nolwennbernard', '', '', '', 0),
(3, 'Baptiste', 'Refalo', 'baptiste.refalo@uha.fr', '1994-06-19', 'Homme', 'Etudiant', 'baptisterefalo', '', '', '', 0),
(4, 'Benard', 'Antoine', 'antoine.benard@uha.fr', '1996-06-07', 'Homme', 'Etudiant', 'ensisa2017', '', '', '', 0),
(5, 'Tinh', 'Olivier', 'olivier.tinh@uha.fr', '1995-03-24', 'Homme', 'Etudiant', 'ensisa', '1A info \r\n2A info', '', '', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actu`
--
ALTER TABLE `actu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `actuclubs`
--
ALTER TABLE `actuclubs`
  ADD UNIQUE KEY `idA` (`idA`);

--
-- Index pour la table `aenvoyé`
--
ALTER TABLE `aenvoyé`
  ADD UNIQUE KEY `idM` (`idM`);

--
-- Index pour la table `amisactu`
--
ALTER TABLE `amisactu`
  ADD UNIQUE KEY `idC` (`idA`);

--
-- Index pour la table `amiscommentaire`
--
ALTER TABLE `amiscommentaire`
  ADD UNIQUE KEY `idCom` (`idCom`);

--
-- Index pour la table `areçu`
--
ALTER TABLE `areçu`
  ADD UNIQUE KEY `idM` (`idM`);

--
-- Index pour la table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contient`
--
ALTER TABLE `contient`
  ADD UNIQUE KEY `idCom` (`idCom`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actu`
--
ALTER TABLE `actu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
