-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 01 Novembre 2019 à 11:08
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rdvp`
--

-- --------------------------------------------------------

--
-- Structure de la table `Domaine`
--

CREATE TABLE `Domaine` (
  `Id_Dom_Domaine` int(40) NOT NULL,
  `code_D` varchar(45) NOT NULL,
  `Nom_Dom_Domaine` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Domaine`
--

INSERT INTO `Domaine` (`Id_Dom_Domaine`, `code_D`, `Nom_Dom_Domaine`) VALUES
(13, 'DOM-00001', 'Insuffisance_cardiaque'),
(14, 'DOM-00002', 'transplantation'),
(15, 'DOM-00003', 'cardiologue');

-- --------------------------------------------------------

--
-- Structure de la table `Medcin`
--

CREATE TABLE `Medcin` (
  `Id_Med_Medcin` int(40) NOT NULL,
  `code_Med` varchar(45) NOT NULL,
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

INSERT INTO `Medcin` (`Id_Med_Medcin`, `code_Med`, `Nom_Med_Medcin`, `Prenom_Med_Medcin`, `Tel_Med_Medcin`, `Email_Med_Medcin`, `Id_Serv_Service`, `Id_Dom_Domaine`) VALUES
(1, 'MD-00001', 'gueye', 'aba', '778944556', 'gueya@gmail.com', 9, 13),
(2, 'MD-00002', 'sow', 'aby', '769801254', 'sow@gmail.com', 10, 14);

-- --------------------------------------------------------

--
-- Structure de la table `Patient`
--

CREATE TABLE `Patient` (
  `id_P_Patient` int(40) NOT NULL,
  `Cod_p` varchar(45) NOT NULL,
  `Nom_p` varchar(40) DEFAULT NULL,
  `Prenom_p` varchar(40) DEFAULT NULL,
  `Age_p` varchar(40) DEFAULT NULL,
  `Genre_P` varchar(45) NOT NULL,
  `Tel_p` varchar(40) DEFAULT NULL,
  `Adresse_p` varchar(40) DEFAULT NULL,
  `Email_p` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Patient`
--

INSERT INTO `Patient` (`id_P_Patient`, `Cod_p`, `Nom_p`, `Prenom_p`, `Age_p`, `Genre_P`, `Tel_p`, `Adresse_p`, `Email_p`) VALUES
(1, 'PA-00001', 'cisse', 'fatou', '21ans', 'M', '783119445', 'plateau', 'falou@gmail.com'),
(3, 'PA-00002', 'mmm', 'falou', '21ans', 'M', '774569887', 'plateau', 'parcellessire14@gmail.com'),
(4, 'PA-00003', 'cisse', 'falou', '21ans', 'M', '774569887', 'pikine', 'fatim@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `Planning`
--

CREATE TABLE `Planning` (
  `Id_Pl_Planning` int(40) NOT NULL,
  `code_Pl` varchar(40) NOT NULL,
  `Date_Pl_Planning` date DEFAULT NULL,
  `Heure_Deb_Planning` time DEFAULT NULL,
  `Heure_Fin_Planning` time DEFAULT NULL,
  `Id_Med_Medcin` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Planning`
--

INSERT INTO `Planning` (`Id_Pl_Planning`, `code_Pl`, `Date_Pl_Planning`, `Heure_Deb_Planning`, `Heure_Fin_Planning`, `Id_Med_Medcin`) VALUES
(1, 'MD-00001', '2019-10-27', '08:00:00', '14:00:00', 1),
(2, 'PL-00002', '2019-10-10', '11:22:00', '11:22:00', 2);

-- --------------------------------------------------------

--
-- Structure de la table `Rv`
--

CREATE TABLE `Rv` (
  `Id_rv_rv` int(40) NOT NULL,
  `code_Rv` varchar(45) NOT NULL,
  `Date_Heur_Rv` datetime NOT NULL,
  `Id_Med_Medcin` int(40) DEFAULT NULL,
  `id_P_Patient` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Rv`
--

INSERT INTO `Rv` (`Id_rv_rv`, `code_Rv`, `Date_Heur_Rv`, `Id_Med_Medcin`, `id_P_Patient`) VALUES
(8, 'RV-00001', '2019-11-02 04:44:00', 1, 1),
(9, 'RV-00001', '2019-11-01 14:25:00', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `secretaire`
--

CREATE TABLE `secretaire` (
  `Id_Secret_sercretaire` int(40) NOT NULL,
  `code_Sec` varchar(45) NOT NULL,
  `Nom_Secret_sercretaire` varchar(40) DEFAULT NULL,
  `Prenom_Secret_sercretaire` varchar(40) DEFAULT NULL,
  `Tel_Secret_sercretaire` varchar(40) DEFAULT NULL,
  `Email_Secret_sercretaire` varchar(40) DEFAULT NULL,
  `Id_Serv_Service` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `secretaire`
--

INSERT INTO `secretaire` (`Id_Secret_sercretaire`, `code_Sec`, `Nom_Secret_sercretaire`, `Prenom_Secret_sercretaire`, `Tel_Secret_sercretaire`, `Email_Secret_sercretaire`, `Id_Serv_Service`) VALUES
(8, 'SC-00001', 'ndour', 'amy', '773114557', 'amy@gmail.com', 9),
(10, 'SC-00002', 'ndoure', 'amy', '773114557', 'amy@gmail.com', 9);

-- --------------------------------------------------------

--
-- Structure de la table `Service`
--

CREATE TABLE `Service` (
  `Id_Serv_Service` int(40) NOT NULL,
  `code_S` varchar(45) NOT NULL,
  `Nom_Serv_Service` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Service`
--

INSERT INTO `Service` (`Id_Serv_Service`, `code_S`, `Nom_Serv_Service`) VALUES
(9, 'SR-00001', 'cardilogue'),
(10, 'SR-00002', 'chirurgien');

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
(1, 'secret015@gmail.com', '123', 'secretaire'),
(2, 'admin@gmail.com', 'admin', 'admin'),
(3, 'medcin@gmail.com', '123', 'medcin');

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
  MODIFY `Id_Dom_Domaine` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `Medcin`
--
ALTER TABLE `Medcin`
  MODIFY `Id_Med_Medcin` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Patient`
--
ALTER TABLE `Patient`
  MODIFY `id_P_Patient` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Planning`
--
ALTER TABLE `Planning`
  MODIFY `Id_Pl_Planning` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Rv`
--
ALTER TABLE `Rv`
  MODIFY `Id_rv_rv` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `secretaire`
--
ALTER TABLE `secretaire`
  MODIFY `Id_Secret_sercretaire` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `Service`
--
ALTER TABLE `Service`
  MODIFY `Id_Serv_Service` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
