-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  ven. 14 sep. 2018 à 11:50
-- Version du serveur :  5.6.38
-- Version de PHP :  7.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `simen_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet_bailleurs`
--

CREATE TABLE `projet_bailleurs` (
  `id_projet_bailleurs` int(11) NOT NULL,
  `id_projet` int(10) UNSIGNED NOT NULL,
  `code_bailleurs` int(10) UNSIGNED NOT NULL,
  `montant_finance` varchar(250) NOT NULL,
  `etat_projet_bailleurs` enum('1','-1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet_bailleurs`
--

INSERT INTO `projet_bailleurs` (`id_projet_bailleurs`, `id_projet`, `code_bailleurs`, `montant_finance`, `etat_projet_bailleurs`) VALUES
(1, 5, 1, '10300000000', '1'),
(2, 10, 1, '443945430', '1'),
(3, 7, 2, '7871483796', '1'),
(4, 4, 6, '5864838990', '1'),
(6, 8, 5, '3279150000', '1'),
(8, 6, 2, '6559000000', '1'),
(9, 12, 1, '4644000000', '1'),
(11, 11, 3, '5000000000', '1'),
(13, 15, 9, '1530431481', '1'),
(17, 13, 11, '21301567642', '1'),
(18, 19, 12, '200000000', '1'),
(19, 20, 1, '5000000000', '1'),
(20, 21, 1, '5000000000', '1'),
(21, 23, 1, '5000000000', '1'),
(22, 24, 1, '5000000000', '1'),
(23, 26, 11, '13845863850', '1'),
(24, 28, 1, '1000000000', '1');

-- --------------------------------------------------------

--
-- Structure de la table `projet_financement`
--

CREATE TABLE `projet_financement` (
  `id_projet_part` int(10) UNSIGNED NOT NULL,
  `id_planification` int(10) UNSIGNED NOT NULL,
  `code_bailleurs` int(10) UNSIGNED NOT NULL,
  `montant_financer` varchar(250) DEFAULT NULL,
  `id_projet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `projet_programme`
--

CREATE TABLE `projet_programme` (
  `id_projet` int(10) UNSIGNED NOT NULL,
  `code_projet` varchar(50) NOT NULL,
  `libelle_projet` varchar(250) NOT NULL,
  `description_projet` varchar(250) DEFAULT NULL,
  `annee_debut` int(4) NOT NULL,
  `duree_projet` int(4) DEFAULT NULL,
  `id_responsable_projet` int(11) DEFAULT '0',
  `code_couleur` varchar(20) NOT NULL,
  `etat_projet` enum('1','-1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet_programme`
--

INSERT INTO `projet_programme` (`id_projet`, `code_projet`, `libelle_projet`, `description_projet`, `annee_debut`, `duree_projet`, `id_responsable_projet`, `code_couleur`, `etat_projet`) VALUES
(3, 'HD32G', 'PROZAP', 'PROGRAMME ZERO ABRI PROVISOIRE', 2017, 2, 46, '#800080', '1'),
(4, 'VH3UV', 'PASEB', 'Programme d\'Appui au educatif de Base du SÃ©nÃ©gal', 2018, 2, 0, '#F0E36B', '1'),
(5, 'AYWKV', 'PAMOD', 'Projet d\'Appui Ã  la Modernisation desDaara', 2012, 4, 44, '#800000', '1'),
(6, '2VQQF', 'PAEBCA', 'Projet dâ€™AmÃ©lioration de lâ€™Education de Base en Casamance', 2014, 4, 36, '#80D0D0', '1'),
(7, '87WMM', 'ADEM/DK', 'Projet d\'appui  Ã  l\'amÃ©lioration de l\'enseignement moyen de DAKaR', 2014, 4, 43, '#FF0000', '1'),
(8, 'APNEN', 'RAP', 'Renforcement de lâ€™appui Ã  la protection des enfants dans lâ€™Ã©ducation au SÃ©nÃ©gal', 2017, 5, 12, '#FF00FF', '1'),
(10, 'WPM57', 'BCI DÃ©centralisÃ©', 'Budget ConsolidÃ© d\'Investissement DÃ©centralisÃ©', 2017, 1, 21, '#00FFFF', '1'),
(11, 'PLH7R', 'JICA', 'Don non remboursable', 2017, 1, 0, '#000080', '1'),
(12, 'BQ9E3', 'BCI Etat', 'Budget ConsolidÃ© d\'Investissement niveau central ', 2018, 1, 19, '#008000', '1'),
(13, 'HCH4T', 'PAQEEB', 'programme d\'amÃ©lioration de la qualitÃ© et de l\'Ã©quitÃ© de l\'Education de Base', 2013, 4, 48, '#808080', '1'),
(15, '58B22', 'Matching', 'Construction de collÃ¨ges', 2007, 10, 0, '#0000FF', '1'),
(19, 'LS3Y9', 'FM/KDG', 'Fond  Minier', 2015, 1, 0, '#808000', '1'),
(20, 'DWWEK', 'BCI ETAT', 'RÃ©alisation des Travaux d\'extension de bÃ¢timents dans les lycÃ©es dÃ©partementaux des rÃ©gions de Dakar,ThiÃ¨s,Fatick et Kaoalck', 2016, 1, 0, '#008080', '1'),
(21, 'NJNAU', 'BCI ETAT', 'Travaux de construction de trois lycÃ©es dans les rÃ©gions de KÃ©dougou,Logua et SÃ©dhiou', 2015, 1, 0, '#00FF00', '1'),
(23, '9Y57S', 'BCI ETAT', 'Travaux de construction de 18 collÃ¨ges de proximitÃ© dans les rÃ©gions de  Fatick, ThiÃ©s, Diourbel, Kaffrine, Kaolack, Louga, Matam, SÃ©dhiou et Ziguinchor', 2014, 1, 0, '#000000', '1'),
(24, 'JPSH2', 'BCI ETAT', 'Travaux de construction de trois lycÃ©es dans les rÃ©gions de Matam et de Fatick', 2013, 1, 0, '#C0C0C0', '1'),
(25, '2D7TP', 'FONSIS/PASEB', 'FONSIS/PASEB/ETAT', 2018, 2, 0, '#D1B606', '1'),
(26, 'FB2NV', 'FAST TRACK', 'BM', 2011, 4, 0, '#8B6C42', '1'),
(27, 'UPPAM', 'BCI ETAT', 'BCI ETAT', 2017, 1, 0, '#FFFF00', '1'),
(28, '7KYWG', 'PAEPD', 'BCI ETAT', 2015, 1, 0, '#AE642D', '1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projet_bailleurs`
--
ALTER TABLE `projet_bailleurs`
  ADD PRIMARY KEY (`id_projet_bailleurs`),
  ADD UNIQUE KEY `id_projet` (`id_projet`,`code_bailleurs`),
  ADD UNIQUE KEY `id_projet_2` (`id_projet`,`code_bailleurs`),
  ADD KEY `code_bailleurs` (`code_bailleurs`);

--
-- Index pour la table `projet_financement`
--
ALTER TABLE `projet_financement`
  ADD PRIMARY KEY (`id_projet_part`),
  ADD UNIQUE KEY `id_planification` (`id_planification`,`code_bailleurs`),
  ADD KEY `projet_partenaire_FKIndex1` (`code_bailleurs`),
  ADD KEY `projet_partenaire_FKIndex2` (`id_planification`);

--
-- Index pour la table `projet_programme`
--
ALTER TABLE `projet_programme`
  ADD PRIMARY KEY (`id_projet`),
  ADD UNIQUE KEY `projet_code_projet` (`code_projet`),
  ADD UNIQUE KEY `code_projet` (`code_projet`),
  ADD KEY `id_responsable_projet` (`id_responsable_projet`),
  ADD KEY `annee_debut` (`annee_debut`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projet_bailleurs`
--
ALTER TABLE `projet_bailleurs`
  MODIFY `id_projet_bailleurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `projet_financement`
--
ALTER TABLE `projet_financement`
  MODIFY `id_projet_part` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projet_programme`
--
ALTER TABLE `projet_programme`
  MODIFY `id_projet` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `projet_bailleurs`
--
ALTER TABLE `projet_bailleurs`
  ADD CONSTRAINT `projet_bailleurs_ibfk_1` FOREIGN KEY (`id_projet`) REFERENCES `projet_programme` (`id_projet`),
  ADD CONSTRAINT `projet_bailleurs_ibfk_2` FOREIGN KEY (`code_bailleurs`) REFERENCES `bailleurs` (`code_bailleurs`);

--
-- Contraintes pour la table `projet_financement`
--
ALTER TABLE `projet_financement`
  ADD CONSTRAINT `projet_financement_ibfk_1` FOREIGN KEY (`id_planification`) REFERENCES `planification_projet` (`id_planification`),
  ADD CONSTRAINT `projet_financement_ibfk_2` FOREIGN KEY (`code_bailleurs`) REFERENCES `bailleurs` (`code_bailleurs`);

--
-- Contraintes pour la table `projet_programme`
--
ALTER TABLE `projet_programme`
  ADD CONSTRAINT `projet_programme_ibfk_1` FOREIGN KEY (`annee_debut`) REFERENCES `type_annees` (`annee`) ON UPDATE CASCADE;
