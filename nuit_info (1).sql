-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 05 déc. 2024 à 20:03
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nuit_info`
--

-- --------------------------------------------------------

--
-- Structure de la table `lier`
--

DROP TABLE IF EXISTS `lier`;
CREATE TABLE IF NOT EXISTS `lier` (
  `ref_question` int NOT NULL,
  `ref_score` int NOT NULL,
  KEY `fk_lier_question` (`ref_question`),
  KEY `fk_lier_score` (`ref_score`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id_question` int NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `ref_reponse` int NOT NULL,
  PRIMARY KEY (`id_question`),
  KEY `fk_question_responce` (`ref_reponse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `id_reponse` int NOT NULL AUTO_INCREMENT,
  `contenu` varchar(255) NOT NULL,
  `correction` tinyint NOT NULL,
  PRIMARY KEY (`id_reponse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `id_score` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `score` int NOT NULL,
  PRIMARY KEY (`id_score`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `lier`
--
ALTER TABLE `lier`
  ADD CONSTRAINT `fk_lier_question` FOREIGN KEY (`ref_question`) REFERENCES `question` (`id_question`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_lier_score` FOREIGN KEY (`ref_score`) REFERENCES `score` (`id_score`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `fk_question_responce` FOREIGN KEY (`ref_reponse`) REFERENCES `reponse` (`id_reponse`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
