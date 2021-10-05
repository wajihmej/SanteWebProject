-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 05 oct. 2021 à 13:49
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_sante`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(11) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Depression'),
(3, 'Psycho'),
(6, 'Autre...');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `com` varchar(255) COLLATE utf8_bin NOT NULL,
  `etat` int(11) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `categorie` varchar(20) COLLATE utf8_bin NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `sujet` varchar(20) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `forum`
--

INSERT INTO `forum` (`id`, `categorie`, `id_utilisateur`, `sujet`, `description`, `etat`) VALUES
(10, 'Psycho', 1, 'Quelque trouble', 'fea', 1),
(11, 'Autre...', 1, 'Quelque trouble', 'ok', 1),
(12, 'Autre...', 1, 'Quelque trouble', 'desc', 1),
(13, 'Autre...', 1, 'Quelque trouble', 'fea', 0);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question1` varchar(100) COLLATE utf8_bin NOT NULL,
  `question2` varchar(100) COLLATE utf8_bin NOT NULL,
  `question3` varchar(100) COLLATE utf8_bin NOT NULL,
  `question4` varchar(100) COLLATE utf8_bin NOT NULL,
  `question5` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `question1`, `question2`, `question3`, `question4`, `question5`) VALUES
(1, 'age', 'Taille', 'Votre probleme', 'Depuis quand', 'Autre chose a ajouter '),
(10, 'Probleme de quoi ', 'Combien ça dure', 'Quelque chose a ajouter', 'Avez vous des douleurs', 'Avez-vous mal');

-- --------------------------------------------------------

--
-- Structure de la table `suivi`
--

CREATE TABLE `suivi` (
  `id` int(200) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `question1` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `question2` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `question3` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `question4` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `question5` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `reponse1` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `reponse2` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `reponse3` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `reponse4` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `reponse5` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `commentaire1` varchar(255) DEFAULT NULL,
  `commentaire2` varchar(255) DEFAULT NULL,
  `commentaire3` varchar(255) DEFAULT NULL,
  `commentaire4` varchar(255) DEFAULT NULL,
  `commentaire5` varchar(255) DEFAULT NULL,
  `etat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `suivi`
--

INSERT INTO `suivi` (`id`, `id_utilisateur`, `nom`, `prenom`, `question1`, `question2`, `question3`, `question4`, `question5`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `reponse5`, `commentaire1`, `commentaire2`, `commentaire3`, `commentaire4`, `commentaire5`, `etat`) VALUES
(44, 1, 'Mokhtar', 'Saanoun', 'Probleme de quoi ', 'Combien ça dure', 'Votre probleme', 'Avez vous des douleurs', 'Avez-vous mal', '23', 'okk', 'okkk', 'okkk', 'ok', 'fea', 'fea', 'fea', 'fea', 'egrzf', 2),
(45, 1, 'Mokhtar', 'Saanoun', 'age', 'Taille', 'Votre probleme', 'Depuis quand', 'Autre chose a ajouter ', 'aa', 'fea', 'fea', 'fea', 'fea', NULL, NULL, NULL, NULL, NULL, 1),
(42, 1, 'Mokhtar', 'Saanoun', 'Age', 'Taille', 'Votre probleme', 'Depuis quand', 'Autre chose a ajouter ', '23', '1,90', 'rep3', 'Hier', 'ok', 'okk', 'ok', 'ok', 'ok', 'ok', 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`) VALUES
(1, 'Mokhtar', 'Saanoun');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `suivi`
--
ALTER TABLE `suivi`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `suivi`
--
ALTER TABLE `suivi`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
