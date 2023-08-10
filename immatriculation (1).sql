-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 28 nov. 2019 à 19:01
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
  `Num_série` varchar(100) NOT NULL,
  `id_statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `demandeur`
--

INSERT INTO `demandeur` (`id_Demandeur`, `Prenom`, `Nom`, `profession`, `id_rep`, `Num_série`, `id_statut`) VALUES
(7, 'gg', 'kemini', 'dd', 1, 'D', 1);

-- --------------------------------------------------------

--
-- Structure de la table `immatriculer`
--

CREATE TABLE `immatriculer` (
  `id_mat` int(11) NOT NULL,
  `id_v` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `id_rep` int(11) NOT NULL,
  `Num_série` varchar(100) NOT NULL,
  `id_statut` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `immatriculer`
--

INSERT INTO `immatriculer` (`id_mat`, `id_v`, `matricule`, `id_rep`, `Num_série`, `id_statut`, `date`) VALUES
(5, 3, '1 - CMD - 113', 1, 'D', 1, '2019-11-28 17:58:06');

-- --------------------------------------------------------

--
-- Structure de la table `représentation`
--

CREATE TABLE `représentation` (
  `id_rep` int(11) NOT NULL,
  `code_mission` varchar(100) NOT NULL,
  `mission` varchar(100) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `représentation`
--

INSERT INTO `représentation` (`id_rep`, `code_mission`, `mission`, `mail`, `Adresse`, `Tel`, `id_type`) VALUES
(1, '1', 'AMBASSADE DE FRANCE', '', '1, Rue El Hadji Amadou Assane NDOYE', '', 1),
(2, '001(1)', 'CONSULAT G?N?RAL DE FRANCE ? DAKAR', '', '1, Rue Amadou Assane NDOYE', '', 3),
(3, '001(2)', 'CONSULAT G?N?RAL DE FRANCE ? SAINT-LOUIS', '', '146, Avenue Jean Mermoz', '', 3),
(4, '2', 'AMBASSADE DE  DE LA REPUBLIQUE ARABE D\'EGYPTE', '', 'Chancellerie 22, Rue Bri?re de l’Isle', '', 1),
(5, '002(1)', 'BUREAU COMMERCIAL DE L\'AMBASSADE D\'EGYPTE', '', '10, Rue Jules Ferry 4?me Etage', '', 5),
(6, '3', 'AMBASSADE  DE  LA REPUBLIQUE  FEDERALE  D\'Allemagne', '', '20, Avenue Pasteur', '', 1),
(7, '4', 'AMBASSADE D\'ISRAEL', '', 'Immeuble SDIH, 3 Place de l\'Ind?pendance 3?me Etage', '', 1),
(8, '6', 'AMBASSADE DE GRANDE BRETAGNE', '', '20 Rue Docteur Guillet', '', 1),
(9, '7', 'AMBASSADE DE BELGIQUE', '', 'Route de la Petite Corniche Est', '', 1),
(10, '8', 'AMBASSADE DES ETATS UNIS D\'AMERIQUE', '', 'Avenue Jean XXIII', '', 1),
(11, '10', 'AMBASSADE ROYALE DES PAYS BAS', '', '37, Rue Jacques Bugnicourt (ex Rue Kl?ber)', '', 1),
(12, '11', 'AMBASSADE DE LA REPUBLIQUE BOLIVARIENNE DE VENEZUELA', '', '', '', 1),
(13, '12', 'AMBASSADE DU ROYAUME DU MAROC', '', 'Avenue Cheikh Anta DIOP X Bouguiba', '', 1),
(14, '14', 'AMBASSADE D\'ITALIE', '', 'Rue Alpha Hachamiyou TALL', '', 1),
(15, '15', 'AMBASSADE DU LIBAN', '', '56, Avenue Jean XXIII', '', 1),
(16, '16', 'AMBASSADE DE LA REPUBLIQUE FEDERATIVE DU BRESIL', '', 'Boulevard Djily Mbaye x Rue Macodou Ndiaye, Immeuble Fondation Fahd– 4?me ?tage', '', 1),
(17, '17', 'AMBASSADE DU ROYAUME D\'ARABIE SAOUDITE', '', 'Route de la Corniche Ouest (face Olympique Club)', '', 1),
(18, '19', 'AMBASSADE DE LA REPUBLIQUE DE L\'INDE', '', '5, Avenue Carde', '', 1),
(19, '20', 'AMBASSADE DE SUISSE', '', 'Rue Ren? NDIAYE X Seydou Nourou TALL', '', 1),
(20, '21', 'AMBASSADE DU SAINT SIEGE', '', '1, Rue Aim? C?saire x Corniche Ouest Fann R?sidence', '', 1),
(21, '22', 'AMBASSADE DE LA REPUBLIQUE FEDERALE DU NIGERIA', '', 'Avenue Cheikh Anta DIOP', '', 1),
(22, '23', 'AMBASSADE DE LA REPUBLIQUE TUNISIENNE', '', 'Rue Alpha Hachamiyou TALL', '', 1),
(23, '24', 'AMBASSADE DU JAPON', '', 'Boulevard, Martin Luther King Corniche Ouest', '', 1),
(24, '25', 'AMBASSADE DE LA REPUBLIQUE ISLAMIQUE DE MAURITANIE', '', '37, Boulevard du G?n?ral De Gaulle', '', 1),
(25, '025(1)', 'CONSULAT GENERAL DE LA REPUBLIQUE ISLAMIQUE DE MAURITANIE', '', '39, Boulevard G?n?ral De Gaulle', '', 3),
(26, '26', 'AMBASSADE DE LA F?D?RATION DE RUSSIE', '', 'Avenue Jean Jaur?s X Rue Carnot', '', 1),
(27, '27', 'AMBASSADE DU ROYAUME D\'ESPAGNE', '', '18-20, Avenue Nelson Mandela', '', 1),
(28, '28', 'AMBASSADE DE LA REPUBLIQUE DE POLOGNE', '', 'Fann R?sidence X Corniche Ouest', '', 1),
(29, '29', 'AMBASSADE DE LA REPUBLIQUE DE TURQUIE', '', 'Avenue des Ambassadeurs Fann R?sidence', '', 1),
(30, '30', 'AMBASSADE DE LA REPUBLIQUE DU MALI', '', 'Corniche Ouest N° 23 Fann R?sidence', '', 1),
(31, '31', 'AMBASSADE  DE  LA  REPUBLIQUE  ALGERIENNE  DEMOCRATIQUE  ET  POPULAIRE', '', '5, Rue Mermoz -Plateau', '', 1),
(32, '32', 'AMBASSADE D\'AUTRICHE', '', '18, Rue Emile Zola', '', 1),
(33, '33', 'HAUT COMMISSARIAT DE GAMBIE', '', '11, Rue de Thiong', '', 1),
(34, '34', 'AMBASSADE DE LA REPUBLIQUE DEMOCRATIQUE DU CONGO', '', '16, Rue L?o Frob?nius – Fann-R?sidence', '', 1),
(35, '36', 'AMBASSADE DE LA REPUBLIQUE FEDERALE ET DEMOCRATIQUE D\'ETHIOPIE', '', '18, Boulevard de la R?publique, au 1er ?tage', '', 1),
(36, '37', 'AMBASSADE DU CANADA', '', 'Chancellerie Immeuble Galli?ni, Avenue Amadou Ciss? Dia x Bri?re de l’Isle', '', 1),
(37, '38', 'AMBASSADE DE LA REPUBLIQUE ISLAMIQUE DU PAKISTAN', '', 'Villa N° 7062, St?le Mermoz', '', 1),
(38, '40', 'AMBASSADE DE L\'ORDRE SOUVERAIN MILITAIRE DE MALTE', '', 'S/C COTOA Km 2,5 Bd du Centenaire de la Commune de Dakar', '', 1),
(39, '42', 'AMBASSADE DE LA REPUBLIQUE ISLAMIQUE D\'IRAN', '', '17, Avenue des Ambassadeurs Fann R?sidence', '', 1),
(40, '43', 'AMBASSADE DE ROUMANIE', '', 'Rue A prolong?e, Point E', '', 1),
(41, '46', 'AMBASSADE DE LA REPUBLIQUE GABONAISE', '', 'Avenue Cheikh Anta Diop', '', 1),
(42, '47', 'AMBASSADE DE LA REPUBLIQUE DU CONGO', '', 'St?le Mermoz – Pyrotechnie', '', 1),
(43, '5', 'AMBASSADE DE  LA R?PUBLIQUE POPULAIRE DE CHINE', '', 'Rue 18 Prolong?e, Fann R?sidence', '', 1),
(44, '52', 'AMBASSADE DE LA REPUBLIQUE DE GUINEE BISSAU', '', 'Rue 6 X B POINT E', '', 1),
(45, '54', 'AMBASSADE DU PORTUGAL', '', '6, Avenue des Ambassadeurs, Villa Martha, Fann R?sidence', '', 1),
(46, '55', 'AMBASSADE DE LA REPUBLIQUE DU CAP VERT', '', '3, Boulevard Djily Mbaye – Immeuble Fahd – 13?me ?tage', '', 1),
(47, '58', 'AMBASSADE DE LA GRANDE JAMAHIRIYA ARABE LIBYENNE POPULAIRE SOCIALISTE', '', 'Route des Almadies 2?me Porte M?ridien Pr?sident', '', 1),
(48, '59', 'AMBASSADE DE LA REPUBLIQUE ARABE SYRIENNE', '', 'Rue des Ecrivains X Boulevard de l\'Est Point E', '', 1),
(49, '60', 'AMBASSADE DE LA REPUBLIQUE DE COTE D\'IVOIRE', '', 'Avenue Birago DIOP ou All?es Seydou Nourou TALL X G – Point E Villa N° 4252', '', 1),
(50, '63', 'AMBASSADE DE LA REPUBLIQUE DE GUINEE', '', 'Rue 7 X B et D Point E', '', 1),
(51, '64', 'AMBASSADE DE L\'ETAT DU KOWEIT', '', 'Boulevard Martin Luther KING x Rue Aim? C?saire', '', 1),
(52, '67', 'AMBASSADE DE L\'ETAT DE PALESTINE', '', 'Boulevard de l\'Est-Sud Point E', '', 1),
(53, '68', 'AMBASSADE ROYALE DE THAILANDE', '', '10, Rue L?on Gontran Damas Fann R?sidence Dakar', '', 1),
(54, '70', 'AMBASSADE D\'INDON?SIE', '', 'Avenue Cheikh Anta Diop', '', 1),
(55, '72', 'AMBASSADE DE LA REPUBLIQUE DU CAMEROUN', '', '157, Rue Joseph T. Gomis', '', 1),
(56, '77', 'AMBASSADE DE MALAISIE', '', '7, VDN Fann Mermoz', '', 1),
(57, '78', 'AMBASSADE DE LA REPUBLIQUE D\'AFRIQUE DU SUD', '', 'Mermoz Sud – Lotissement Ecole de Police – Lot N° 5', '', 1),
(58, '79', 'AMBASSADE DE SUEDE', '', '18, Rue Emile Zola', '', 1),
(59, '80', 'AMB.REP. DU SOUDAN', '', '31, Route de la Pyrotechnie Mermoz Dakar', '', 1),
(60, '81', 'AMBASSADE DU BURKINA FASO', '', 'Sicap Sacr? Cœur 3 Extension VDN N° 10628 BI', '', 1),
(61, '97', 'AMBASSADE DE LA REPUBLIQUE DE CUBA', '', '43, Rue Aim? C?saire- Fann R?sidence', '', 1),
(62, '98', 'AMBASSADE DE L\'ETAT DU QATAR', '', '52 Boulevard Martin Luther King', '', 1),
(63, '99', 'AMBASSADE  DE LA REP. DE MADAGASCAR', '', 'Villa n° 104, Route de Ouakam, Mermoz Sotrac', '', 1),
(64, '1 NU', 'PROGRAMME DES NATIONS UNIES POUR LE D?VELOPPEMENT (PNUD)', '', '19, Rue Parchappe', '', 2),
(65, '10 NU', 'EQUIPE D\'APPUI TECHNIQUE DU FNUAP', '', '', '', 2),
(66, '10 NU(1)', '***************************************************************************************', '', '', '', 2),
(67, '100', 'AMBASSADE DE LA REPUBLIQUE DU GHANA', '', 'Lot 27 Parcelle B - Almadies', '', 1),
(68, '11 NU', '***************************************************************************************', '', '', '', 2),
(69, '12', 'AMBASSADE DE LA REPUBLIQUE CENTRAFRICAINE', '', 'Mamelles Villa N° 3', '', 1),
(70, '12 NU', '***************************************************************************************', '', '', '', 2),
(71, '13 NU', 'FONDS DES NATIONS UNIES POUR LA POPULATION (FNUAP)', '', 'Immeuble Fay?al, 19 Rue Parchappe', '', 2),
(72, '14', 'D?L?GATION DE LA COMMISSION EUROP?ENNE', '', '12, Avenue Albert Sarraut', '', 1),
(73, '14 NU', 'PROGRAMME ALIMENTAIRE MONDIAL (PAM)', '', '10,  Avenue Pasteur X Rue Gallieni', '', 2),
(74, '15 NU', 'ORGANISATION DES NATIONS UNIES POUR LE DEVELOPPEMENT INDUSTRIEL (ONUDI)', '', '', '', 2),
(75, '16 NU', '***************************************************************************************', '', '', '', 2),
(76, '17', 'AMBASSADE DE LA REPUBLIQUE DE COREE', '', '19, Rue Parchappe, Immeuble Fay?al – 4?me ?tage', '', 1),
(77, '17 NU', 'BUREAU DES NATIONS UNIES POUR L’AFRIQUE DE L’OUEST (UNOA)', '', '5, Avenue Carde, Immeuble Caisse de S?curit? Sociale', '', 2),
(78, '18 NU', '***************************************************************************************', '', '', '', 2),
(79, '2 NU', 'FONDS DES NATIONS UNIES POUR L\'ENFANCE (UNICEF)', '', '43, Avenue Albert Sarraut', '', 2),
(80, '3 NU', 'ORGANISATION MONDIALE DE LA SANTE (OIM)', '', '55, Avenue Albert Sarraut', '', 2),
(81, '4 NU', 'ORGANISATION DE L\'AVIATION CIVILE INTERNATIONALE (OACI)', '', '15, Boulevard de la R?publique', '', 2),
(82, '5 NU', 'ORGANISATION DES NATIONS UNIES POUR L\'EDUCATION, LA SCIENCE ET LA CULTURE (UNESCO)', '', '12, Avenue Roume', '', 2),
(83, '6 NU', 'HAUT COMMISSARIAT DES NATIONS UNIES POUR LES REFUGI?S (HCR)', '', '59, Rue du Docteur Th?ze', '', 2),
(84, '7 NU', 'BUREAU SOUS-REGIONAL DE L\'ORGANISATION  INTERNATIONALE DU TRAVAIL (BIT)', '', '22, Rue Amadou Assane NDOYE', '', 2),
(85, '7o', 'ORGANISATION DES NATIONS UNIES POUR LA LUTTE CONTRE LE SIDA (ONUSIDA)', '', 'Boulevard de l’Est x Rue III - Point E', '', 2),
(86, '7u', 'FONDS DES NATIONS UNIES POUR L\'ENFANCE (BUREAU R?GIONAL)', '', '', '', 2),
(87, '8 NU', 'ORGANISATION DES NATIONS UNIES POUR L\'ALIMENTATION ET L\'AGRICULTURE (FAO)', '', '15, Rue Calmette', '', 2),
(88, '9 NU', 'Fond Monetaire Internationale (FMI)', '', '', '', 2),
(89, 'ASNA', 'AGENCE POUR LA SECURITE DE LA NAVIGATION AERIENNE EN AFRIQUE ET A MADAGASCAR', '', '32 - 38 Avenue Jean Jaur?s', '', 2),
(90, 'AUF', 'AGENCE UNIVERSITAIRE DE LA FRANCOPHONIE', '', 'Corniche Ouest en face R?sidence Ambassadeur du Br?sil', '', 2),
(91, 'BC', 'BANQUE CENTRALE DES ETATS DE L\'AFRIQUE DE L\'OUEST (BCEAO)', '', 'Avenue Abdoulaye Fadiga', '', 2),
(92, 'BM', 'BANQUE MONDIALE', '', 'Immeuble SDIH - 5?me ?tage - 3, Place de l\'Ind?pendance', '', 2),
(93, 'BOAD', 'Banque  Ouest- Africaine de D?veloppement (BOAD)', '', '', '', 2),
(94, 'CDA', 'CONSEIL POUR LE DEVELOPPEMENT DE LA RECHERCHE EN SCIENCES SOCIALES EN AFRIQUE (CODESRIA)', '', 'Avenue Cheikh Anta Diop x Canal IV', '', 2),
(95, 'CFJ', '***************************************************************************************', '', '', '', 2),
(96, 'CICR', 'COMITE INTERNATIONAL DE LA CROIX ROUGE (CICR)', '', 'Rue 6 x A - Point E', '', 2),
(97, 'CINU', 'CENTRE D\'INFORMATION DES NATIONS UNIES', '', '10, Rue de Thann x Dagorne', '', 2),
(98, 'CRDI', 'CENTRE DE RECHERCHES POUR LE DEVELOPPEMENT INTERNATIONAL', '', '', '', 2),
(99, 'EIV', 'ECOLE INTER-ETATS DES SCIENCES ET MEDECINE VETERINAIRES', '', 'Avenue Cheikh Anta DIOP', '', 2),
(100, 'EMT', 'ECOLE SUPERIEURE MULTINATIONALE DES TELECOMMUNICATIONS', '', '', '', 2),
(101, 'ER', 'ORGANISATION POUR LA MISE EN VALEUR DU FLEUVE SENEGAL (OMVS)', '', '', '', 2),
(102, 'FICR', 'F?d?ration Internationale des Soci?t?s de la Croix Rouge (FICR)', '', '', '', 2),
(103, 'GAB', 'Groupe Intergouvernemental d\'Action contre le Blanchiment d\'Argent  en Afrique (GIABA)', '', '', '', 2),
(104, 'IAR', 'INSTITUT AFRICAINE DE READAPTATION (BUREAU  R?GIONAL POUR L\'AFRIQUE DE L\'OUEST)', '', '14?me Etage Imm. Fahd - 3, Boulevard El hadji Djily MBAYE', '', 2),
(105, 'IFC', 'Bureau R?gional du S?n?gal de la Soci?t? Financi?re Internationale (SFI)', '', '', '', 2),
(106, 'OIF', 'Organisation Internationale de la Francophonie (OIF)', '', '', '', 2),
(107, 'OIM', 'ORGANISATION INTERNATIONALE POUR LES MIGRATIONS (OIM)', '', 'Villa Djamila - Rue 5 x J  - POINT E - BP 16838 - DAKAR FANN - Tel : 865 19 00 - FAX : 865 19 33', '', 2),
(108, 'TA', 'TrustAfrica', '', '', '', 2),
(109, 'WAM', 'West African Museums Programme', '', '', '', 2),
(110, 'WV', 'WORLD VISION INTERNATIONAL (W V I)', '', '', '', 2);

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE `statut` (
  `id_Statut` int(11) NOT NULL,
  `libelle_statut` varchar(100) DEFAULT NULL,
  `abreviation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`id_Statut`, `libelle_statut`, `abreviation`) VALUES
(1, 'Chef de Mission Diplomatique', 'CMD'),
(2, 'Corps Diplomatique', 'CD'),
(3, 'Corps Consulaire', 'CC'),
(4, 'Consul Honoraire', 'CH'),
(5, 'Personnel Administratif et Technique', 'PAT');

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
(1, 'Ambassade'),
(5, 'Bureau Commercial'),
(4, 'Consulat'),
(3, 'Consulat Général'),
(7, 'Consulat Général Honoraire'),
(6, 'Consulat Honoraire'),
(2, 'Organisation Internationale');

-- --------------------------------------------------------

--
-- Structure de la table `véhicule`
--

CREATE TABLE `véhicule` (
  `ID_vehicule` int(11) NOT NULL,
  `Code_type` varchar(100) NOT NULL,
  `Num_serie` varchar(45) DEFAULT NULL,
  `Date_premier_mise_en_circ` varchar(100) DEFAULT NULL,
  `Code_marque` varchar(45) DEFAULT NULL,
  `Code_genre` varchar(45) DEFAULT NULL,
  `Code_carosserie` varchar(45) DEFAULT NULL,
  `Puissance` varchar(45) DEFAULT NULL,
  `Energie` varchar(45) DEFAULT NULL,
  `Places` int(11) DEFAULT NULL,
  `PV` varchar(45) DEFAULT NULL,
  `provenance` varchar(100) NOT NULL,
  `CU` int(11) NOT NULL,
  `PT` int(11) NOT NULL,
  `Mutations` varchar(200) NOT NULL,
  `Observations` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `véhicule`
--

INSERT INTO `véhicule` (`ID_vehicule`, `Code_type`, `Num_serie`, `Date_premier_mise_en_circ`, `Code_marque`, `Code_genre`, `Code_carosserie`, `Puissance`, `Energie`, `Places`, `PV`, `provenance`, `CU`, `PT`, `Mutations`, `Observations`) VALUES
(3, 'DD&&é', 'D', '1111', 'acura', 'Moto', '12', 'D', '2', 2, '2', '12/12/2019', 0, 2, '                                                        %', '                                                        ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demandeur`
--
ALTER TABLE `demandeur`
  ADD PRIMARY KEY (`id_Demandeur`),
  ADD UNIQUE KEY `Num_série` (`Num_série`),
  ADD KEY `id_véhicule` (`Num_série`),
  ADD KEY `id_statut` (`id_statut`),
  ADD KEY `id_rep` (`id_rep`);

--
-- Index pour la table `immatriculer`
--
ALTER TABLE `immatriculer`
  ADD PRIMARY KEY (`id_mat`),
  ADD UNIQUE KEY `matricule` (`matricule`),
  ADD UNIQUE KEY `Num_série` (`Num_série`),
  ADD KEY `id_v` (`id_v`);

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
-- AUTO_INCREMENT pour la table `demandeur`
--
ALTER TABLE `demandeur`
  MODIFY `id_Demandeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `immatriculer`
--
ALTER TABLE `immatriculer`
  MODIFY `id_mat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `représentation`
--
ALTER TABLE `représentation`
  MODIFY `id_rep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT pour la table `statut`
--
ALTER TABLE `statut`
  MODIFY `id_Statut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `type_rep`
--
ALTER TABLE `type_rep`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `véhicule`
--
ALTER TABLE `véhicule`
  MODIFY `ID_vehicule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
