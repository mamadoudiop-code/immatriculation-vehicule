-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 14 sep. 2018 à 14:53
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `simen_batimen`
--

-- --------------------------------------------------------

--
-- Structure de la table `bailleurs`
--

CREATE TABLE `bailleurs` (
  `code_bailleurs` int(10) UNSIGNED NOT NULL,
  `code_type_part` int(10) UNSIGNED NOT NULL,
  `libelle_bailleurs` varchar(250) DEFAULT NULL,
  `etat_bailleurs` enum('-1','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bailleurs`
--
ALTER TABLE `bailleurs`
  ADD PRIMARY KEY (`code_bailleurs`),
  ADD KEY `bailleurs_FKIndex1` (`code_type_part`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bailleurs`
--
ALTER TABLE `bailleurs`
  MODIFY `code_bailleurs` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bailleurs`
--
ALTER TABLE `bailleurs`
  ADD CONSTRAINT `bailleurs_ibfk_1` FOREIGN KEY (`code_type_part`) REFERENCES `type_partenaire` (`code_type_part`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
