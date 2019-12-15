-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 15 déc. 2019 à 12:24
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `bateau`
--

CREATE TABLE `bateau` (
  `idBateau` int(11) NOT NULL,
  `marqueBateau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `longueurCoqueBateau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `longueurFlottaisonBateau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `largeurMaxiBateau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `TirantAirBateau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `TirantEauMinBateau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `TypeCoqueBateau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `AnneeBateau` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `DeplacementLegeBateau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `idLocation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `bateau`
--

INSERT INTO `bateau` (`idBateau`, `marqueBateau`, `longueurCoqueBateau`, `longueurFlottaisonBateau`, `largeurMaxiBateau`, `TirantAirBateau`, `TirantEauMinBateau`, `TypeCoqueBateau`, `AnneeBateau`, `DeplacementLegeBateau`, `idLocation`) VALUES
(1, '1', '2', '3', '4', '5', '6', '7', '8', '9', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `nomClient` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prenomClient` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `numTelClient` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ageClient` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nomClient`, `prenomClient`, `numTelClient`, `ageClient`) VALUES
(1, 'Mulot', 'Mathieu', '0606060606', '54');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `idLocation` int(11) NOT NULL,
  `PrixJourLocation` int(11) NOT NULL,
  `DureeLocation` int(11) NOT NULL,
  `idClient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`idLocation`, `PrixJourLocation`, `DureeLocation`, `idClient`) VALUES
(1, 1500, 2, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bateau`
--
ALTER TABLE `bateau`
  ADD PRIMARY KEY (`idBateau`),
  ADD KEY `BATEAU_LOCATION_FK` (`idLocation`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`idLocation`),
  ADD KEY `LOCATION_CLIENT_FK` (`idClient`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bateau`
--
ALTER TABLE `bateau`
  MODIFY `idBateau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `location`
--
ALTER TABLE `location`
  MODIFY `idLocation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bateau`
--
ALTER TABLE `bateau`
  ADD CONSTRAINT `FK_A664B05AD3DA390` FOREIGN KEY (`idLocation`) REFERENCES `location` (`idLocation`);

--
-- Contraintes pour la table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `FK_5E9E89CBA455ACCF` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
