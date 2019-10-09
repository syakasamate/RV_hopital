-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 09 Octobre 2019 à 10:19
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
  `Nom_Dom_Domaine` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Contenu de la table `Patient`
--

INSERT INTO `Patient` (`id_P_Patient`, `Nom_p`, `Prenom_p`, `Age_p`, `Genre_P`, `Tel_p`, `Adresse_p`, `Email_p`) VALUES
(2, 'cisse', 'falou', '21 ans', 'masculin', '774569887', 'Dakar', 'falou@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `Planning`
--

CREATE TABLE `Planning` (
  `Id_Pl_Planning` int(40) NOT NULL,
  `Date_Pl_Planning` varchar(40) DEFAULT NULL,
  `Heure_Deb_Planning` time DEFAULT NULL,
  `Heure_Fin_Planning` time DEFAULT NULL,
  `Id_Med_Medcin` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Rv`
--

CREATE TABLE `Rv` (
  `Id_rv_rv` int(40) NOT NULL,
  `Heure_rv_rv` time DEFAULT NULL,
  `Date_rv_rv` date DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Structure de la table `Service`
--

CREATE TABLE `Service` (
  `Id_Serv_Service` int(40) NOT NULL,
  `Nom_Serv_Service` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `pasword` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `pasword`) VALUES
(1, 'samate015@gmail.com', 'samate');

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
  MODIFY `Id_Dom_Domaine` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Medcin`
--
ALTER TABLE `Medcin`
  MODIFY `Id_Med_Medcin` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Patient`
--
ALTER TABLE `Patient`
  MODIFY `id_P_Patient` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Planning`
--
ALTER TABLE `Planning`
  MODIFY `Id_Pl_Planning` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Rv`
--
ALTER TABLE `Rv`
  MODIFY `Id_rv_rv` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `secretaire`
--
ALTER TABLE `secretaire`
  MODIFY `Id_Secret_sercretaire` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Service`
--
ALTER TABLE `Service`
  MODIFY `Id_Serv_Service` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
