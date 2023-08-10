-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 20 nov. 2019 à 18:32
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `immatriculation`
--

-- --------------------------------------------------------

--
-- Structure de la table `demandeur`
--

CREATE TABLE `demandeur` (
  `id_Demandeur` int(11) NOT NULL,
  `Prenom` varchar(45) DEFAULT NULL,
  `Nom` varchar(45) DEFAULT NULL,
  `profession` varchar(45) DEFAULT NULL,
  `id_rep` int(11) NOT NULL,
  `id_véhicule` int(11) NOT NULL,
  `id_statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `représentation`
--

CREATE TABLE `représentation` (
  `id_rep` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE `statut` (
  `id_Statut` int(11) NOT NULL,
  `libelle_statut` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`id_Statut`, `libelle_statut`) VALUES
(4, 'Ambassade (CMD -CD)'),
(2, 'Conjoint-diplomate (CD)'),
(1, 'Diplomate (CD)'),
(3, 'Perso Admin (IT)');

-- --------------------------------------------------------

--
-- Structure de la table `type_rep`
--

CREATE TABLE `type_rep` (
  `id_type` int(11) NOT NULL,
  `libelle_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_rep`
--

INSERT INTO `type_rep` (`id_type`, `libelle_type`) VALUES
(1, 'Ambassades'),
(4, 'Cons gener'),
(2, 'Consulats'),
(3, 'ONG');

-- --------------------------------------------------------

--
-- Structure de la table `véhicule`
--

CREATE TABLE `véhicule` (
  `ID_vehicule` int(11) NOT NULL,
  `Code_type` varchar(100) NOT NULL,
  `Num_serie` varchar(45) DEFAULT NULL,
  `Date_premier_mise_en_circ` date DEFAULT NULL,
  `Code_marque` varchar(45) DEFAULT NULL,
  `Code_genre` varchar(45) DEFAULT NULL,
  `Code_carosserie` varchar(45) DEFAULT NULL,
  `Puissance` int(45) DEFAULT NULL,
  `Cylindre` int(45) DEFAULT NULL,
  `Energie` int(45) DEFAULT NULL,
  `Places` int(11) DEFAULT NULL,
  `PV` varchar(45) DEFAULT NULL,
  `provenance` date NOT NULL,
  `CU` int(11) NOT NULL,
  `PT` int(11) NOT NULL,
  `Mutations` varchar(200) NOT NULL,
  `Observations` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demandeur`
--
ALTER TABLE `demandeur`
  ADD PRIMARY KEY (`id_Demandeur`),
  ADD KEY `id_véhicule` (`id_véhicule`),
  ADD KEY `id_statut` (`id_statut`),
  ADD KEY `id_rep` (`id_rep`);

--
-- Index pour la table `représentation`
--
ALTER TABLE `représentation`
  ADD PRIMARY KEY (`id_rep`),
  ADD KEY `id_type` (`id_type`);

--
-- Index pour la table `statut`
--
ALTER TABLE `statut`
  ADD PRIMARY KEY (`id_Statut`),
  ADD UNIQUE KEY `libelle_statut` (`libelle_statut`);

--
-- Index pour la table `type_rep`
--
ALTER TABLE `type_rep`
  ADD PRIMARY KEY (`id_type`),
  ADD UNIQUE KEY `libelle_type` (`libelle_type`);

--
-- Index pour la table `véhicule`
--
ALTER TABLE `véhicule`
  ADD PRIMARY KEY (`ID_vehicule`),
  ADD UNIQUE KEY `Code_type` (`Code_type`),
  ADD UNIQUE KEY `Num_serie` (`Num_serie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `représentation`
--
ALTER TABLE `représentation`
  MODIFY `id_rep` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `statut`
--
ALTER TABLE `statut`
  MODIFY `id_Statut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `type_rep`
--
ALTER TABLE `type_rep`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `demandeur`
--
ALTER TABLE `demandeur`
  ADD CONSTRAINT `demandeur_ibfk_2` FOREIGN KEY (`id_véhicule`) REFERENCES `véhicule` (`ID_vehicule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
