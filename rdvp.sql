-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 30 Octobre 2019 à 02:48
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.3.9-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `RV_hopital`
--

-- --------------------------------------------------------

--
-- Structure de la table `Domaine`
--

CREATE TABLE `Domaine` (
  `Id_Dom_Domaine` int(40) NOT NULL,
  `Nom_Dom_Domaine` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Domaine`
--

INSERT INTO `Domaine` (`Id_Dom_Domaine`, `Nom_Dom_Domaine`) VALUES
(1, 'Insuffisance cardiaque'),
(2, 'Génétique cardiaque et maladies rares'),
(3, 'Transplantation et assistance cardiaque'),
(4, 'Médico-chirurgicale'),
(5, 'Obstétrique'),
(6, 'Echographie'),
(7, 'Chirurgie pédiatrique'),
(8, 'Neuropédiatrie'),
(9, 'Urgences pédiatriques'),
(10, 'Endoscopie urologique'),
(11, 'Urodynamique et Uro-gynécologie'),
(12, 'Urologie pédiatrique');

-- --------------------------------------------------------

--
-- Structure de la table `Medcin`
--

CREATE TABLE `Medcin` (
  `Id_Med_Medcin` int(40) NOT NULL,
  `Nom_Med_Medcin` varchar(40) DEFAULT NULL,
  `Prenom_Med_Medcin` varchar(40) DEFAULT NULL,
  `Tel_Med_Medcin` varchar(40) DEFAULT NULL,
  `Email_Med_Medcin` varchar(40) DEFAULT NULL,
  `Id_Serv_Service` int(40) DEFAULT NULL,
  `Id_Dom_Domaine` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Medcin`
--

INSERT INTO `Medcin` (`Id_Med_Medcin`, `Nom_Med_Medcin`, `Prenom_Med_Medcin`, `Tel_Med_Medcin`, `Email_Med_Medcin`, `Id_Serv_Service`, `Id_Dom_Domaine`) VALUES
(1, 'SY ', 'Mame Mor', '778521486', 'mor@mame.sn', 1, 1),
(2, 'Sall', 'Fallou', '785245621', 'sall@fallou.sn', 1, 2),
(3, 'Dione', 'Abdou Khadre', '752142356', 'dione@abdou.sn', 1, 3),
(4, 'Sarr', 'Fatou', '779582145', 'sarr@fatou.sn', 2, 4),
(5, 'Diop', 'Amy', '765412369', 'amy@diop.sn', 2, 5),
(6, 'Seye', 'Nafy', '768412369', 'seye@nafy.sn', 2, 6),
(7, 'Diouf ', 'Awa', '775896321', 'diouf@awa.sn', 3, 7),
(8, 'Faye', 'Birame', '772365453', 'faye@birame.sn', 3, 8),
(9, 'Ndiaye', 'Maïmouna', '7758956241', 'nass@ndiaye.sn', 3, 9),
(10, 'Touré', 'Yoro', '778964125', 'yoro@touré.sn', 4, 10),
(11, 'Sow', 'Kadia', '775248796', 'sow@kadia.sn', 4, 11),
(12, 'Samaté', 'Siaka', '773664125', 'siaka@samate.sn', 4, 12);

-- --------------------------------------------------------

--
-- Structure de la table `Patient`
--

CREATE TABLE `Patient` (
  `id_P_Patient` int(40) NOT NULL,
  `Nom_p` varchar(40) DEFAULT NULL,
  `Prenom_p` varchar(40) DEFAULT NULL,
  `Age_p` varchar(40) DEFAULT NULL,
  `Genre_P` varchar(45) NOT NULL,
  `Tel_p` varchar(40) DEFAULT NULL,
  `Adresse_p` varchar(40) DEFAULT NULL,
  `Email_p` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Planning`
--

CREATE TABLE `Planning` (
  `Id_Pl_Planning` int(40) NOT NULL,
  `Jour_Pl_Planning` varchar(50) DEFAULT NULL,
  `Heure_Deb_Planning` time DEFAULT NULL,
  `Heure_Fin_Planning` time DEFAULT NULL,
  `Id_Med_Medcin` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Planning`
--

INSERT INTO `Planning` (`Id_Pl_Planning`, `Jour_Pl_Planning`, `Heure_Deb_Planning`, `Heure_Fin_Planning`, `Id_Med_Medcin`) VALUES
(1, 'Lundi', '08:00:00', '12:00:00', 1),
(2, 'Lundi', '15:00:00', '17:00:00', 2),
(3, 'Mardi', '08:00:00', '12:00:00', 2),
(4, 'Mardi', '15:00:00', '17:00:00', 1),
(5, 'Mercredi', '08:00:00', '12:00:00', 3),
(6, 'Mercredi', '15:00:00', '17:00:00', 3),
(7, 'Jeudi', '08:00:00', '12:00:00', 2),
(8, 'Jeudi', '15:00:00', '17:00:00', 3),
(9, 'Vendredi', '08:00:00', '12:00:00', 1),
(10, 'Vendredi', '15:00:00', '17:00:00', 3),
(11, 'Lundi', '08:00:00', '12:00:00', 4),
(12, 'Lundi', '15:00:00', '17:00:00', 5),
(13, 'Mardi', '08:00:00', '12:00:00', 5),
(14, 'Mardi', '15:00:00', '17:00:00', 4),
(15, 'Mercredi', '08:00:00', '12:00:00', 6),
(16, 'Mercredi', '15:00:00', '17:00:00', 6),
(17, 'Jeudi', '08:00:00', '12:00:00', 5),
(18, 'Jeudi', '15:00:00', '17:00:00', 6),
(19, 'Vendredi', '08:00:00', '12:00:00', 4),
(20, 'Vendredi', '15:00:00', '17:00:00', 6),
(21, 'Lundi', '08:00:00', '12:00:00', 7),
(22, 'Lundi', '15:00:00', '17:00:00', 8),
(23, 'Mardi', '08:00:00', '12:00:00', 8),
(24, 'Mardi', '15:00:00', '17:00:00', 7),
(25, 'Mercredi', '08:00:00', '12:00:00', 9),
(26, 'Mercredi', '15:00:00', '17:00:00', 9),
(27, 'Jeudi', '08:00:00', '12:00:00', 8),
(28, 'Jeudi', '15:00:00', '17:00:00', 9),
(29, 'Vendredi', '08:00:00', '12:00:00', 7),
(30, 'Vendredi', '15:00:00', '17:00:00', 9),
(31, 'Lundi', '08:00:00', '12:00:00', 10),
(32, 'Lundi', '15:00:00', '17:00:00', 11),
(33, 'Mardi', '08:00:00', '12:00:00', 11),
(34, 'Mardi', '15:00:00', '17:00:00', 10),
(35, 'Mercredi', '08:00:00', '12:00:00', 12),
(36, 'Mercredi', '15:00:00', '17:00:00', 12),
(37, 'Jeudi', '08:00:00', '12:00:00', 11),
(38, 'Jeudi', '15:00:00', '17:00:00', 12),
(39, 'Vendredi', '08:00:00', '12:00:00', 10),
(40, 'Vendredi', '15:00:00', '17:00:00', 12);

-- --------------------------------------------------------

--
-- Structure de la table `Rv`
--

CREATE TABLE `Rv` (
  `Id_rv_rv` int(40) NOT NULL,
  `Heure_rv` time DEFAULT NULL,
  `Date_rv` date DEFAULT NULL,
  `Id_Med_Medcin` int(40) DEFAULT NULL,
  `id_P_Patient` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `secretaire`
--

CREATE TABLE `secretaire` (
  `Id_Secret_sercretaire` int(40) NOT NULL,
  `Nom_Secret_sercretaire` varchar(40) DEFAULT NULL,
  `Prenom_Secret_sercretaire` varchar(40) DEFAULT NULL,
  `Tel_Secret_sercretaire` varchar(40) DEFAULT NULL,
  `Email_Secret_sercretaire` varchar(40) DEFAULT NULL,
  `Id_Serv_Service` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `secretaire`
--

INSERT INTO `secretaire` (`Id_Secret_sercretaire`, `Nom_Secret_sercretaire`, `Prenom_Secret_sercretaire`, `Tel_Secret_sercretaire`, `Email_Secret_sercretaire`, `Id_Serv_Service`) VALUES
(1, 'Sy', 'Fatou', '771819895', 'sy@fatou.sn', 1),
(2, 'Diop', 'Aïcha', '771496589', 'aïcha@diop.sn', 2),
(3, 'Sow', 'Oumou', '778963214', 'sow@oumou.sn', 3),
(4, 'Sall', 'Maman', '78563214', 'sall@maman.sn', 4);

-- --------------------------------------------------------

--
-- Structure de la table `Service`
--

CREATE TABLE `Service` (
  `Id_Serv_Service` int(40) NOT NULL,
  `Nom_Serv_Service` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Service`
--

INSERT INTO `Service` (`Id_Serv_Service`, `Nom_Serv_Service`) VALUES
(1, 'Cardiologie'),
(2, 'Gynécologie - Obstétrique '),
(3, 'Pédiatrie'),
(4, 'Urologie');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `pasword` varchar(45) NOT NULL,
  `profil` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `pasword`, `profil`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin'),
(2, 'secretaire1@gmail.com', 'secretaire1', 'secretaire'),
(3, 'secretaire2@gmail.com', 'secretaire2', 'secretaire'),
(4, 'secretaire3@gmail.com', 'secretaire3', 'secretaire'),
(5, 'secretaire4@gmail.com', 'secretaire4', 'secretaire'),
(6, 'medecin1@gmail.com', 'medecin1', 'medecin'),
(7, 'medecin2@gmail.com', 'medecin2', 'medecin'),
(8, 'medecin3@gmail.com', 'medecin3', 'medecin'),
(9, 'medecin4@gmail.com', 'medecin4', 'medecin'),
(10, 'medecin5@gmail.com', 'medecin5', 'medecin'),
(11, 'medecin6@gmail.com', 'medecin6', 'medecin'),
(12, 'medecin7@gmail.com', 'medecin7', 'medecin'),
(13, 'medecin8@gmail.com', 'medecin8', 'medecin'),
(14, 'medecin9@gmail.com', 'medecin9', 'medecin'),
(15, 'medecin10@gmail.com', 'medecin10', 'medecin'),
(16, 'medecin11@gmail.com', 'medecin11', 'medecin'),
(17, 'medecin12@gmail.com', 'medecin12', 'medecin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Domaine`
--
ALTER TABLE `Domaine`
  ADD PRIMARY KEY (`Id_Dom_Domaine`);

--
-- Index pour la table `Medcin`
--
ALTER TABLE `Medcin`
  ADD PRIMARY KEY (`Id_Med_Medcin`),
  ADD KEY `FK_Medcin_Id_Serv_Service` (`Id_Serv_Service`),
  ADD KEY `FK_Medcin_Id_Dom_Domaine` (`Id_Dom_Domaine`);

--
-- Index pour la table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`id_P_Patient`);

--
-- Index pour la table `Planning`
--
ALTER TABLE `Planning`
  ADD PRIMARY KEY (`Id_Pl_Planning`),
  ADD KEY `FK_Planning_Id_Med_Medcin` (`Id_Med_Medcin`);

--
-- Index pour la table `Rv`
--
ALTER TABLE `Rv`
  ADD PRIMARY KEY (`Id_rv_rv`),
  ADD KEY `FK_Rv_Id_Med_Medcin` (`Id_Med_Medcin`),
  ADD KEY `FK_Rv_id_P_Patient` (`id_P_Patient`);

--
-- Index pour la table `secretaire`
--
ALTER TABLE `secretaire`
  ADD PRIMARY KEY (`Id_Secret_sercretaire`),
  ADD KEY `FK_secretaire_Id_Serv_Service` (`Id_Serv_Service`);

--
-- Index pour la table `Service`
--
ALTER TABLE `Service`
  ADD PRIMARY KEY (`Id_Serv_Service`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Domaine`
--
ALTER TABLE `Domaine`
  MODIFY `Id_Dom_Domaine` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `Medcin`
--
ALTER TABLE `Medcin`
  MODIFY `Id_Med_Medcin` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `Patient`
--
ALTER TABLE `Patient`
  MODIFY `id_P_Patient` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Planning`
--
ALTER TABLE `Planning`
  MODIFY `Id_Pl_Planning` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT pour la table `Rv`
--
ALTER TABLE `Rv`
  MODIFY `Id_rv_rv` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `secretaire`
--
ALTER TABLE `secretaire`
  MODIFY `Id_Secret_sercretaire` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Service`
--
ALTER TABLE `Service`
  MODIFY `Id_Serv_Service` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Medcin`
--
ALTER TABLE `Medcin`
  ADD CONSTRAINT `FK_Medcin_Id_Dom_Domaine` FOREIGN KEY (`Id_Dom_Domaine`) REFERENCES `Domaine` (`Id_Dom_Domaine`),
  ADD CONSTRAINT `FK_Medcin_Id_Serv_Service` FOREIGN KEY (`Id_Serv_Service`) REFERENCES `Service` (`Id_Serv_Service`);

--
-- Contraintes pour la table `Planning`
--
ALTER TABLE `Planning`
  ADD CONSTRAINT `FK_Planning_Id_Med_Medcin` FOREIGN KEY (`Id_Med_Medcin`) REFERENCES `Medcin` (`Id_Med_Medcin`);

--
-- Contraintes pour la table `Rv`
--
ALTER TABLE `Rv`
  ADD CONSTRAINT `FK_Rv_Id_Med_Medcin` FOREIGN KEY (`Id_Med_Medcin`) REFERENCES `Medcin` (`Id_Med_Medcin`),
  ADD CONSTRAINT `FK_Rv_id_P_Patient` FOREIGN KEY (`id_P_Patient`) REFERENCES `Patient` (`id_P_Patient`);

--
-- Contraintes pour la table `secretaire`
--
ALTER TABLE `secretaire`
  ADD CONSTRAINT `FK_secretaire_Id_Serv_Service` FOREIGN KEY (`Id_Serv_Service`) REFERENCES `Service` (`Id_Serv_Service`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
