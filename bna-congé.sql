-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 juin 2022 à 19:09
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bna-congé`
--

-- --------------------------------------------------------

--
-- Structure de la table `absence`
--

CREATE TABLE `absence` (
  `id` int(255) NOT NULL,
  `date-debut` date NOT NULL,
  `date-fin` date NOT NULL,
  `type-congé` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `absence`
--

INSERT INTO `absence` (`id`, `date-debut`, `date-fin`, `type-congé`, `type`) VALUES
(0, '2022-06-03', '2022-06-12', 'anuelle', '0'),
(1, '2022-06-04', '2022-06-07', 'anuelle', '0'),
(2, '2022-06-01', '2022-06-05', 'abs-mission', '0'),
(3, '2022-06-05', '2022-06-06', 'abs-mission', '0'),
(4, '2022-06-05', '2022-06-06', 'abs-mission', '0'),
(5, '2022-06-05', '2022-06-06', 'abs-mission', '0'),
(6, '2022-06-05', '2022-06-06', 'abs-mission', '0'),
(7, '2022-06-05', '2022-06-06', 'abs-mission', '0'),
(8, '2022-06-08', '2022-06-11', 'abs-formation', '0'),
(9, '2022-06-08', '2022-06-11', 'abs-formation', '0'),
(10, '2022-06-08', '2022-06-11', 'abs-formation', '0'),
(11, '2022-06-08', '2022-06-11', 'abs-formation', '0'),
(12, '2022-06-08', '2022-06-11', 'abs-formation', '0'),
(13, '2022-06-08', '2022-06-11', 'abs-formation', '0'),
(14, '2022-06-08', '2022-06-11', 'abs-formation', '0'),
(15, '2022-06-08', '2022-06-11', 'abs-formation', '0'),
(16, '2022-06-08', '2022-06-11', 'abs-formation', '0'),
(17, '2022-06-05', '2022-06-25', 'matérnité', '0'),
(20, '2022-06-03', '2022-06-05', 'anuelle', '0'),
(71, '2022-06-03', '2022-06-12', 'annuel', 'etranger'),
(72, '2022-06-03', '2022-06-12', 'annuel', 'etranger'),
(73, '2022-06-03', '2022-06-12', 'annuel', 'Visa'),
(74, '2022-06-03', '2022-06-12', 'annuel', 'algérie'),
(75, '2022-06-03', '2022-06-12', 'annuel', 'algérie'),
(76, '2022-06-03', '2022-06-12', 'annuel', 'algérie'),
(77, '2022-06-03', '2022-06-12', 'annuel', 'algérie'),
(78, '2022-06-03', '2022-06-05', 'annuel', 'algérie'),
(79, '2022-06-03', '2022-06-05', 'annuel', 'algérie'),
(211, '2022-06-01', '2022-06-10', 'annuel', 'Visa'),
(212, '2022-06-01', '2022-06-10', 'annuel', 'Visa'),
(213, '2022-06-01', '2022-06-10', 'annuel', 'Visa'),
(231, '2022-06-09', '2022-06-08', 'abs-formation', '0'),
(291, '2022-06-01', '2022-06-10', 'annuel', 'Visa'),
(292, '2022-06-01', '2022-06-10', 'annuel', 'Visa'),
(311, '2022-06-03', '2022-06-12', 'annuel', 'Visa'),
(312, '2022-06-03', '2022-06-12', 'annuel', 'algérie'),
(321, '2022-06-02', '2022-06-03', 'abs-formation', '0'),
(323, '2022-06-03', '2022-06-12', 'annuel', 'algérie'),
(324, '2022-06-03', '2022-06-12', 'annuel', 'algérie'),
(325, '2022-06-03', '2022-06-12', 'annuel', 'algérie'),
(326, '2022-06-03', '2022-06-12', 'annuel', 'algérie'),
(331, '2022-06-03', '2022-06-12', 'annuel', 'algérie'),
(332, '2022-06-03', '2022-06-12', 'annuel', 'algérie'),
(333, '2022-06-03', '2022-06-12', 'annuel', 'algérie'),
(334, '2022-06-03', '2022-06-12', 'annuel', 'algérie'),
(335, '2022-06-03', '2022-06-12', 'annuel', 'algérie'),
(336, '2022-06-03', '2022-06-12', 'annuel', 'algérie'),
(413, '2022-06-02', '2022-06-05', 'anuelle', '0'),
(441, '2022-06-04', '2022-06-09', 'abs-mission', '0'),
(1233, '2022-06-04', '2022-06-08', 'anuelle', '0'),
(1254, '2022-06-04', '2022-06-09', 'abs-mission', '0'),
(4413, '2022-06-02', '2022-06-05', 'anuelle', '0'),
(4415, '2022-06-02', '2022-06-05', 'anuelle', '0'),
(123213, '2022-06-04', '2022-06-19', 'abs-formation', '0');

-- --------------------------------------------------------

--
-- Structure de la table `annulation`
--

CREATE TABLE `annulation` (
  `id` int(255) NOT NULL,
  `date-saisie` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annulation`
--

INSERT INTO `annulation` (`id`, `date-saisie`) VALUES
(1, '2009-06-22'),
(22, '2009-06-22'),
(91, '2009-06-22'),
(92, '2009-06-22'),
(93, '2009-06-22'),
(99, '2009-06-22'),
(556, '2009-06-22');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`username`, `password`, `Profile`) VALUES
('b.houria', '1234', 'admin'),
('c.ikram', '145', 'admin'),
('c.tiziri', '789', 'admin'),
('k.chaima', '123', 'drh'),
('maroi', '345', 'drh');

-- --------------------------------------------------------

--
-- Structure de la table `droitcong`
--

CREATE TABLE `droitcong` (
  `id` int(11) NOT NULL,
  `exercice-actuel` int(255) NOT NULL,
  `exercice-antérieur` int(255) NOT NULL,
  `Matricule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `droitcong`
--

INSERT INTO `droitcong` (`id`, `exercice-actuel`, `exercice-antérieur`, `Matricule`) VALUES
(1, 10, 12, 0),
(2, 10, 12, 2345);

-- --------------------------------------------------------

--
-- Structure de la table `intérime`
--

CREATE TABLE `intérime` (
  `id` int(255) NOT NULL,
  `nbr-intérime` int(255) NOT NULL,
  `nomint1` varchar(255) NOT NULL,
  `prenomint1` varchar(255) NOT NULL,
  `date-debut1` date NOT NULL,
  `date-fin1` date NOT NULL,
  `post1` varchar(255) NOT NULL,
  `nomint2` varchar(255) NOT NULL,
  `prenomint2` varchar(255) NOT NULL,
  `debut2` date NOT NULL,
  `fin2` date NOT NULL,
  `post2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `intérime`
--

INSERT INTO `intérime` (`id`, `nbr-intérime`, `nomint1`, `prenomint1`, `date-debut1`, `date-fin1`, `post1`, `nomint2`, `prenomint2`, `debut2`, `fin2`, `post2`) VALUES
(2, 0, 'IKRAM', '1', '2022-06-02', '2022-06-04', 'SG', '', '', '0000-00-00', '0000-00-00', ''),
(3, 0, 'IKRAM', '1', '2022-06-05', '2022-06-07', 'DRH', '', '', '0000-00-00', '0000-00-00', ''),
(4, 0, 'IKRAM', '1', '2022-06-05', '2022-06-07', 'DRH', '', '', '0000-00-00', '0000-00-00', ''),
(5, 0, 'IKRAM', '1', '2022-06-05', '2022-06-07', 'DRH', '', '', '0000-00-00', '0000-00-00', ''),
(6, 0, 'IKRAM', '1', '2022-06-05', '2022-06-07', 'DRH', '', '', '0000-00-00', '0000-00-00', ''),
(7, 0, 'IKRAM', '1', '2022-06-05', '2022-06-07', 'DRH', '', '', '0000-00-00', '0000-00-00', ''),
(8, 0, 'chaima', '2', '2022-06-24', '2022-06-18', 'DRH', 'cyhbt', 'xsdfz', '2022-06-30', '2022-06-24', 'dfe'),
(9, 0, 'chaima', '2', '2022-06-24', '2022-06-18', 'sg', 'cyhbt', 'xsdfz', '2022-06-30', '2022-06-24', 'dfe'),
(10, 0, 'chaima', '2', '2022-06-24', '2022-06-18', 'sg', 'cyhbt', 'xsdfz', '2022-06-30', '2022-06-24', 'dfe'),
(11, 0, 'chaima', '2', '2022-06-24', '2022-06-18', 'sg', 'cyhbt', 'xsdfz', '2022-06-30', '2022-06-24', 'dfe'),
(12, 0, 'chaima', '2', '2022-06-24', '2022-06-18', 'sg', 'cyhbt', 'xsdfz', '2022-06-30', '2022-06-24', 'dfe'),
(13, 0, 'chaima', '2', '2022-06-24', '2022-06-18', 'sg', 'cyhbt', 'xsdfz', '2022-06-30', '2022-06-24', 'dfe'),
(14, 0, 'chaima', '2', '2022-06-24', '2022-06-18', 'sg', 'cyhbt', 'xsdfz', '2022-06-30', '2022-06-24', 'dfe'),
(15, 0, 'chaima', '2', '2022-06-24', '2022-06-18', 'sg', 'cyhbt', 'xsdfz', '2022-06-30', '2022-06-24', 'dfe'),
(16, 0, 'chaima', '2', '2022-06-24', '2022-06-18', 'sg', 'cyhbt', 'xsdfz', '2022-06-30', '2022-06-24', 'dfe'),
(17, 0, 'mouad', '2', '2022-06-05', '2022-06-15', 'sg', 'chbti', 'ikram', '2022-06-15', '2022-06-25', 'SG'),
(231, 0, 'mouad', '1', '0000-00-00', '0000-00-00', 'sg', '', '', '0000-00-00', '0000-00-00', ''),
(321, 0, 'mouad', '1', '2022-06-03', '2022-06-04', 'sg', '', '', '0000-00-00', '0000-00-00', ''),
(441, 0, 'mouad', '2', '2022-06-04', '2022-06-07', 'sg', 'chbti', 'cha', '2022-06-07', '2022-06-09', 'dfe'),
(1254, 0, 'mouad', '1', '2022-06-04', '2022-06-07', 'sg', 'chbti', 'cha', '2022-06-07', '2022-06-09', 'dfe'),
(123213, 0, 'chaima', '2', '0000-00-00', '0000-00-00', 'sg', 'chbti', 'ikram', '2022-06-17', '2022-06-26', 'dfe');

-- --------------------------------------------------------

--
-- Structure de la table `ordre-service`
--

CREATE TABLE `ordre-service` (
  `id` int(255) NOT NULL,
  `ref` int(255) NOT NULL,
  `signataire` varchar(255) NOT NULL,
  `date-saisie` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `date-debut` date NOT NULL,
  `date-fin` date NOT NULL,
  `Matricule` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ordre-service`
--

INSERT INTO `ordre-service` (`id`, `ref`, `signataire`, `date-saisie`, `type`, `date-debut`, `date-fin`, `Matricule`) VALUES
(2, 2, 'dgmmrh', '2012-06-22', 'abs-mission', '2022-06-01', '2022-06-05', 0),
(3, 3, 'dgmmrh', '2012-06-22', 'abs-mission', '2022-06-05', '2022-06-06', 213),
(4, 4, 'dgmmrh', '2012-06-22', 'abs-mission', '2022-06-05', '2022-06-06', 213),
(5, 4, 'dgmmrh', '2012-06-22', 'abs-mission', '2022-06-05', '2022-06-06', 213),
(6, 4, 'dgmmrh', '2012-06-22', 'abs-mission', '2022-06-05', '2022-06-06', 213),
(7, 4, 'dgmmrh', '2012-06-22', 'abs-mission', '2022-06-05', '2022-06-06', 213),
(8, 5, 'SG', '2012-06-22', 'abs-formation', '2022-06-08', '2022-06-11', 31),
(9, 5, 'SG', '2012-06-22', 'abs-formation', '2022-06-08', '2022-06-11', 31),
(10, 5, 'SG', '2012-06-22', 'abs-formation', '2022-06-08', '2022-06-11', 31),
(11, 5, 'SG', '2012-06-22', 'abs-formation', '2022-06-08', '2022-06-11', 31),
(12, 5, 'SG', '2012-06-22', 'abs-formation', '2022-06-08', '2022-06-11', 31),
(13, 5, 'SG', '2012-06-22', 'abs-formation', '2022-06-08', '2022-06-11', 31),
(14, 5, 'SG', '2012-06-22', 'abs-formation', '2022-06-08', '2022-06-11', 31),
(15, 5, 'SG', '2012-06-22', 'abs-formation', '2022-06-08', '2022-06-11', 31),
(16, 5, 'SG', '2012-06-22', 'abs-formation', '2022-06-08', '2022-06-11', 31),
(17, 30, 'DG', '2013-06-22', 'matérnité', '2022-06-05', '2022-06-25', 31),
(65, 123, 'SG', '2014-06-22', 'abs-formation', '2022-06-10', '2022-06-17', 31),
(71, 0, 'dgmmrh', '2014-06-22', 'etranger', '0000-00-00', '0000-00-00', 2345),
(72, 0, 'dgmmrh', '2014-06-22', 'etranger', '0000-00-00', '0000-00-00', 2345),
(73, 0, 'dgmmrh', '2014-06-22', 'Visa', '0000-00-00', '0000-00-00', 2345),
(74, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(75, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(76, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(77, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(78, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(79, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(211, 0, 'dgmmrh', '2014-06-22', 'Visa', '0000-00-00', '0000-00-00', 123),
(212, 0, 'dgmmrh', '2014-06-22', 'Visa', '0000-00-00', '0000-00-00', 123),
(213, 0, 'dgmmrh', '2014-06-22', 'Visa', '0000-00-00', '0000-00-00', 123),
(231, 234, 'DG', '2014-06-22', 'abs-formation', '2022-06-09', '2022-06-08', 31),
(291, 0, 'dgmmrh', '2014-06-22', 'Visa', '0000-00-00', '0000-00-00', 123),
(292, 0, 'dgmmrh', '2014-06-22', 'Visa', '0000-00-00', '0000-00-00', 123),
(311, 0, 'dgmmrh', '2014-06-22', 'Visa', '0000-00-00', '0000-00-00', 2345),
(312, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(321, 321, 'dgmmrh', '2013-06-22', 'abs-formation', '2022-06-02', '2022-06-03', 213),
(323, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(324, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(325, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(326, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(331, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(332, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(333, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(334, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(335, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(336, 0, 'dgmmrh', '2014-06-22', 'algérie', '0000-00-00', '0000-00-00', 2345),
(441, 123, 'SG', '2014-06-22', 'abs-mission', '2022-06-04', '2022-06-09', 31),
(653, 123, 'SG', '2014-06-22', 'abs-formation', '2022-06-10', '2022-06-17', 31),
(1254, 123, 'dgmmrh', '2014-06-22', 'abs-mission', '2022-06-04', '2022-06-09', 31),
(6533, 123, 'SG', '2014-06-22', 'abs-formation', '2022-06-10', '2022-06-17', 31),
(123213, 30, 'dgmmrh', '2014-06-22', 'abs-formation', '2022-06-04', '2022-06-19', 31);

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `matricule` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `date-entree` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `date-naiss` date DEFAULT NULL,
  `lieu-naiss` varchar(255) NOT NULL,
  `sit-fam` text NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `structure` varchar(255) NOT NULL,
  `structure parent` int(11) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`matricule`, `nom`, `prenom`, `poste`, `date-entree`, `email`, `date-naiss`, `lieu-naiss`, `sit-fam`, `sexe`, `structure`, `structure parent`) VALUES
(456, 'bendeladj', 'houria', 'drh', '2021-06-03', 'chaima@gmail.com', '2022-06-22', 'el-harache', 'mariee', 'female', '16', 0),
(2345, 'khoudri', 'chaima', 'drh', '0000-00-00', 'chaima@gmail.com', '2013-06-07', 'el-harache', 'celebataire', 'femme', 'alger', 0);

-- --------------------------------------------------------

--
-- Structure de la table `remplacement`
--

CREATE TABLE `remplacement` (
  `id` int(255) NOT NULL,
  `date-saisie` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `remplacement`
--

INSERT INTO `remplacement` (`id`, `date-saisie`) VALUES
(12, '2009-06-22'),
(56, '2009-06-22');

-- --------------------------------------------------------

--
-- Structure de la table `structure`
--

CREATE TABLE `structure` (
  `code` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `structure`
--

INSERT INTO `structure` (`code`, `nom`) VALUES

/*(180, 'DRE BECHAR' );               

(412, 'Agence Ple de BECHAR (AP)');

(250, 'Agence de ADRAR (A)');

(251, 'Agence de IMIMOUN (B)');

(410, 'Agence de  BENI OUNIF (B);'

(411, 'Agence de  TINDOUF (B)');

(413, 'Agence de  AOULEF (B)');

(414, 'Agence de DEBDABA (B)');

(415, 'Agence de  BECHAR (C)');

(181, 'DRE  TLEMCEN');

(512, 'Agence Ple. de );TLEMCEN (AP)'

(527, 'Agence Ple. de TL);EMCEN (AP)'

(526, 'Agence Ple de ABOUT);ACHEFINE  (AP)'

(514, 'Agence de MEGHNIA (B));'

(528, 'Agence de  SEBDOU (B)');

(530, 'Agence de  REMCHI  (B)');

(725, 'Agence de MECHERIA (B)');

(727, 'Agence de AIN-SEFRA (B)');

(730, 'Agence NAAMA');

);
(531, 'Agence de HENNAYA (C)');

(533, 'Agence EL KIFFANE (C)');

(532, 'Agence  GHAZAOUET (C) ');

(529,'Agence de  NEDROMA  (C)');

(525,'Agence de BENI SAF (C)');

(182, 'DRE d’ORAN');

(951,  'Agence  Ple d’ORAN  (AP) ');

(960, 'Agence  Ple d’ORAN  (AP)');

(966, 'Agence  Ple. de DJILLALI  (AP)' );

(952, 'Agence ORAN (A)');

(954, 'Agence d’ARZEW (A)');

(953, 'Agence d’ORAN (B)');

(957, 'Agence ‘E‘ ORAN (B)  ' );

(958, 'Agence ORAN PLATEAU (B)');

(965, 'Agence ES SENIA (B)');

(967, 'Agence  AIN TURCK (C)');

(955, 'Agence  MISSERGHIN (C)');

(962, 'Agence ES SENIA   (C)');

(900, 'Agence HAIESSALEM (C)');

(963, 'Agence de OUED TLELAT (C)');

(969, 'Agence OUED-TLELAT (C)');

(183, 'DRE  T. OUZOU');

(581,'Agence Ple. TIZI- OUZOU (AP)');

(643,'Agence de B/ MENAIEL (B)');

(460,'Agence de  BOUIRA (B)');

(577,  'Agence  de  BOGHNI (B)');

(583, 'Agence de  T.OUZOU N.Ville (B)');

(584, ' Agence de Draa Ben Khedda  (B) ');

(642, 'Agence de DELLYS     ( C )');

(582, 'Agence OUADHIAS ( C )');

(578, 'Agence de  Laebaa Nath IRATHEN ( C )');

(462, ' Agence  AZZAZGA ( C )');

(576, 'Agence de LAKHDARIA ( C )');

(580, 'Agence TIZI OUZOU');

(184, 'DRE   OUARGLA');

(946, 'Agence Ple de OUARGLA (AP)');

(473, 'Agence de TAMANRASSET (A)');


(941, 'Agence de TOUGGOURT (A)');

(945, 'Agence de  DJANET (B)');

(947, 'Agence de Hassi-Messaoud  (B)');

(944, 'Agence de OUARGLA (SI EL HOUES) (C) ');

(943, 'Agence de  OUARGLA (C)');

(948, 'Agence ILLLIZI (C)');

(185, 'DRE de CONSTANTINE ');

(840, 'Agence Ple  AIN-SMARA (AP)');

(845, 'Agence  de CONSTANTINE  (AP)');

(832, 'Agence  LA PYRAMIDE  (A)');

(835, 'Agence d’ EL- KHROUB (B)');

(841, 'Agence de EL MILIA (B)');

(848, 'Agence de H.BOUZIANE (B)');

(850, 'Agence de  FILALI (B)');

(846, 'Agence de MILA  (B) ');

(844, 'Agence DAKSI ( C )');

(833, 'Agence de TADJENANET( C )');

(843, 'Agence de CHELGHOUM  EL AID ( C )');

(834, 'Agence de AIN EL BEY( C )');

(325, 'Agence d’AIN-M’LILA  ( C )');

(186, 'DRE  ANNABA');

(810, 'Agence Ple ANNABA (AP)');

(811, 'Agence Ple.    ANNABA  (AP)');

(743, 'Agence Ple.     SKIKDA  (AP)');

(816, 'Agence de GUELMA ( A ) ');

(487, 'Agence   COLLO  (B)  ');

(813, 'Agence ANNABA (C )');

(488, 'Agence de OUED-ZENATI (C)');

(812, 'Agence d EL-KALA  (C )');

(814, 'Agence de  S/ AHRAS (C )');

(485, 'Agence de  AZZABA (C )');

(744, 'Agence de  SKIKDA (C )');

(815, 'Agence de   EL-BOUNI (C )');

(482, 'Agence de    ANNABA (C )');

(489, 'Agence EL-TARF (C )');

(187, 'DRE  GARIDI');

(616, 'AP  d’ EL-HARRACH (AP)');

(633, 'Agence .Ple. de BIRKHADEM   (AP)');

(647, 'Agence .Ple. d’  EL-HAMIZ     (AP)    ');

(634, 'Agence .Ple. de OUED  SMAR  (AP)');

(612, 'Agence de DAR-EL-BEIDA (A)');

(624, 'Agence  PINS-MARITIMES (A)');

(619, 'Agence d’EL-HARRACH  Agence (C )');

(625, 'Agence  KOUBA (C )');

(648, 'Agence de  MOHAMMADIA (C )');

(637, 'Agence GUE-DE CONSTANTINE (C ');

(613, 'Agence de  DAR-EL-BEIDA (C )');

(636, 'Agence BARAKI (C )');

(638, 'Agence  BIRKHADEM (c )');

(188, 'DRE DE  KOLEA');

(141, 'Agence .Ple. de  KOLEA (AP)');

(630, 'Agence de  AIN- BENIAN (A)');

(438, 'Agence de TIPAZA (B) ');

(440, 'Agence de  STAOUELI (C )');

(439, 'Agence de HADJOUT (C )');

(436, 'Agence de BABA HASSEN (C )');

(427, 'Agence de CHERCHELL (B)');

(428, 'Agence de ZERALDA (C )');

(444, 'Agence de B/ISMAÎL (C )');

(189, 'DRE  BLIDA');

(442, ' Agence .Ple. de BLIDA (AP)');

(654, 'Agence .Ple. de  DJELFA (AP)');

(851, 'Agence .Ple. de  MEDEA  (AP)');

(430, 'Agence .Ple. de  BOUFARIK (AP)');

(653, 'Agence  AIN OUESSARA (A)');

(849, 'Agence de   BERROUAGHIA (B)');

(445, ' Agence   BLIDA (C )');

(858, 'KSAR EL BOUKHARI  (C )');

(431, 'Agence de  BLIDA (C )');

(437, 'Agence EL-AFFROUN  (C )');

(190, 'DRE ROUIBA');

(632, 'Agence de ROUIBA (AP)');

(641, 'Agence de ROUIBA (SNVI) (AP)');

(640, 'Agence de  B-EL-KIFFAN (AP)');

(631, 'Agence de THENIA (B)');

(645, 'Agence de    BOUMERDES (B)');

(646, 'Agence de    AIN-TAYA (B)');

(644, 'Agence de    REGHAIA   (B)');

(649, 'Agence de  EL-HAMIZ   (C )');

(650, 'Agence de   REGHAIA   (C )');

(651, ' Agence de  EL-HAMIZ   (C )');

(639, 'Agence de B.El-BAHRI (C)');

(191, 'Agence SNVI');

(191, 'DRE BEJAIA');

(356, 'Agence Ple de BEJAIA  (AP)');

(671, 'Agence de JIJEL  (B) ');

(585, 'Agence d’ EL-KSEUR (B)');

(586, 'Agence de TAZMALT (B)');

(587, 'Agence de BEJAIA (Ihaddadene) (C )');

(588, 'Agence de  BEJAIA (C )');

(589, 'Agence d’  AOKAS (C )');
 
(590, 'Agence AKBOU');

(192 , 'DRE  GHIARDAIA ');

(291, 'Agence de GHARDAIA (A)');

(301, 'Agence Ple  de LAGHOUAT (AP)');

(296, 'Agence de METLILI CHAAMBA (A)');

(295, 'Agence de GUERRARA (B)');

(297, ' Agence d’AFLOU (B)');

(292, 'Agence de GHARDAIA ( C )');

(294, 'Agence de BERRIANE ( C )');

(193, 'DRE TEBESSA ');

(315, ' Agence de KHENCHELA ( C )');

(316, 'Agence d’OUM-EL-BOUAGHI ( C )');

(321, 'Agence de AIN-BEIDA  (A)');

(323, 'Agence de KHENCHELA (A)');

(491, 'Agence Ple. TEBESSA (AP)');

(483, 'Agence de TEBESSA (B)');

(486, 'Agence de BIR-EL-ATER (B)');

(484, 'Agence d OUENZA (C )');

(800, 'Agence de AIN-EL-BEIDA (C)');

(842, 'Agence  OUM EL BOUAGHI (B)');

(194, 'DRE BOUZAREAH');

(605, 'Agence Ple de  LIBERTE (AP)');

(620, ' Agence Ple de ZIROUT Youcef (AP)');

(599, 'Agence .Ple de GUEVARA (AP)');

(602, 'Agence .Ple de Krim Belkacem (AP)');

(627, 'Agence .Ple de BOUZAREAH (AP)');

(608, 'Agence   BOLOGHINE (A)');

(608, 'Agence   BOLOGHINE (A)');

(628, 'Agence PORT-SAID (C )');

(629, 'Agence   BAB-EL-OUED (C )');

(195, 'DRE  EL BIAR');

(601, ' Agence .Ple de DIDOUCHE (AP)');

(623, 'Agence .Ple de ALGER CENTRE (AP)');

(610, '  Agence .Ple de LES HALLES (AP)');

(611, 'Agence .Ple de HUSSEIN-DEY (AP)');

(626, ' Agence .Ple de AGHA (AP)');

(621, ' Agence .Ple deEL BIAR  (AP)');

(609, ' Agence de DIDOUCHE  ‘D‘   (A)');

(614, 'Agence de EL MOURADIA ‘N’ (A)');

(617, ' Agence de R EL FETH (A)');
 
(607, ' Agence de H.B.BOUALI  (B)');

(615, ' Agence de   BELAHDJEL (B)');

(622, ' Agence de  EL-QODS (C )');

(635, ' Agence de HUSSEIN-DEY (C )');

(603, 'Agence de HYDRA (C )');

(196, 'DRE DE CHLEF');

(275, 'Agence Ple de CHLEF (AP)');

(268, 'Agence Ple de AIN-DEFLA (AP)');

(260, 'Agence de  CHLEF   (A) ');

(262, 'Agence de  MILIANA  (B)');
 
(272, 'Agence d’   EL-ATTAF  (C )');

(277, 'Agence de TISSEMSILT   (C ) ');

(276, 'Agence de    OUED-RHIOU (C ) ');

(279, 'Agence de    TENES (C )');

(278, 'Agence de KHEMISMILIANA (C )');

(261, 'Agence Chlef ENDVP ');

(197, 'Agence Chlef ENDVP ');

(704, 'Agence Ple de SETIF  (AP)');

(901, ' Agence de M’ SILA (A)');

(705, 'Agence de B.B.ARRERIDJ (B) ');

(706, 'Agence de  EL-EULMA (B)');

(707, 'Agence de AIN EL MELH   (B) ');

(701, 'Agence de BOUSAADA  (C )');

(702, 'Agence de  A.EL-KEBIRA (C )');

(703, 'Agence de   MAABOUDA (C )');

(708, 'Agence de  SIDI-AISSA (C )');

(711, 'Agence de  SETIF  (C )');
 
(338, 'Agence de   AMOUCHA (C )');

(712, 'Agence PARK MALL (C )');

(198, 'DRE MOSTAGANEM');

(876, 'Agence Ple MOSTAGANEM (AP) ');

(540, 'Agence Ple  TIARET (AP)');

(869, 'Agence de RELIZANE  (A )');

(871, 'Agence de  MOSTAGANEM (B)');

(548, 'Agence de SNVI TIARET  (C )');

(877, 'Agence de   TIGHENIF  (C )');

(545, 'Agence de      TIARET  (C )');

(878, 'Agence de  MOSTAGANEM  (C )');

(921, 'Agence de MOHAMMADIA  (C )');

(546, 'Agence de SIG  (C )');

(870, 'Agence de TELAGH ');

(199, 'DRE SIDI BEL ABBES ');

(920, '  AG   MASCARA  (A)');

(773, 'Agence S.BEL-ABBES  (AP)');

(724, 'Agence de SAIDA (B)');

(728, 'Agence   AIN-TEMOUCHENT (C )');

(771, 'Agence  EL-MALLAH (C )');

(726, 'Agence d’EL-BAYADH (B)');

(774, 'Agence  Sidi Bel Abbes ');

(159, 'DRE  BISKRA');

(709, 'Agence de TOLGA (C )');

(710, ' Agence de EL- OUED (B)');

(386, 'Agence de  BISKRA (A) );       '

(387, 'Agence de  BISKRA ‘B‘ (C )');

(335, 'Agence Ple de BATNA (AP)');

(336, 'Agence de  BATNA (C )');

(340, 'Agence de  BARIKA  (B)');

(713, 'Agence de ZERIBET EL OUED');

(105, 'La Direction Générale 105');

(179, 'Direction de l Organisation des Méthodes et Procédures');

(138, 'Direction de la Conformité ');

(118, 'Direction de l’ Audit Interne');

(118, 'Cellule Audit  de Conformité Charia ');

(140, 'Inspection Générale');

(140, 'Inspection Etudes, Analyse et Intrevention ratachée à l Inspection Générale');

(140, 'Inspection Exploitation des rapports  ratachée à l Inspection Générale');

(144, 'Inspection Régionale d ALGER I');

(149, 'Inspection Régionale d ALGER II');

(141, 'Inspection Régionale de Blida');

(142, 'Inspection Régionale de Constantine');

(143, 'Inspection Régionale d Oran');

(147, 'Inspection Régionale de Bejaia');

(148, 'Inspection Régionale du Grand Sud');

(128, ' Division Risques, Contrôle permanent');

(128, 'Cellule Sécurité des Systèmes d Information "CSSI" ratachée à la DRCP 128');

(104, 'Direction  du Contrôle Permanent' );

(119, 'Direction Gestion des Risques');

(107, 'Division DGMMRH');

(145, 'Direction des Ressources Humaines');

(170, 'Direction de la  Formation');

(152, 'Centre de Gestion des Œuvres Sociales');

(150, 'Direction des Moyens Généraux');

(160, 'Direction de la Préservation du Patrimoine');

(151, 'Direction du Développement du Patrimoine Immobilier');

(106, 'Division des Engagements');

(115, 'Direction  des Grandes Entreprises');

(177, 'Direction des Petites et Moyennes Entreprises');

(116, 'Direction des crédits aux particuliers et spécifiques ');

(1061,'Direction de l Administration et du Suivi des Crédits');

(109, 'DEAC');

(137, 'Direction du Marketing et Communication');

(136, 'Direction Support au Réseau d Exploitation');

(129, 'Direction Animation Commerciale ');

(111, 'Division Internationale');

(135, 'Direction des Relations Internationales et du Commerce' );

(100, 'Direction des Mouvements Financiers avec l’Etranger ');

(101, 'Direction des Opérations Documentaires');

(102, 'Division des systèmes d information');

(102, 'Direction Projet d Assainissement de la Fiche Client');

(123, 'Direction de la production et des services');

(124, 'Direction des technologies et de l architecture');

(125, 'Direction du Développement, Etudes & Projets');

(127, 'Direction  Global  Banking ');

(108, 'Division Financière');

(120, 'Direction de la Comptabilité');

(156 'Direction des Reportings comptables légaux et réglementaires DRCLR');

(175, 'Direction du Contrôle de Gestion');

(176, 'Direction  des Marchés Financiers');

(126, 'Division du Recouvrement, des Etudes Juridiques et du Contentieux');

(139, 'Direction des Recouvrements  des Créances');

(130, 'Direction des Études Juridiques et du Contentieux');

(103, 'Direction, Etudes, Validation et Suivi des Garanties');

(157, 'Division des Instruments de Paiement et de la Monétique');

(122, 'Direction  de la Monétique');

(158, 'Direction des Instruments de Paiement');
 
(161, 'Division Stratégie et Developpement');

(1163, 'Direction du développement des Talent');

(1164, 'Direction des Filiales et Participations ');

(1162, 'Direction du développement des Performances');

(1161, 'Direction de la Stratégie et Management de Projets ');

(132, 'Division de la Finance Islamique');

(1322, 'Direction  Financière Contrôle et Gestion des Risques Islamiques   DFI');

(1321, 'Direction d Exploitation Islamique DEI');

(1323, 'Direction Animation Commerciale et Ressources Humaines  Islamique  DACRHI');*/

-- --------------------------------------------------------

--
-- Structure de la table `titreconge`
--

CREATE TABLE `titreconge` (
  `id` int(255) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `signataire` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `date-debut` date NOT NULL,
  `date-fin` date NOT NULL,
  `Matricule` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `titreconge`
--

INSERT INTO `titreconge` (`id`, `ref`, `type`, `signataire`, `adresse`, `signature`, `date-debut`, `date-fin`, `Matricule`) VALUES
(0, '', 'anuelle', 'DRH', 'algérie', 'P.NOM ', '2022-06-03', '2022-06-12', 0),
(20, '546', 'anuelle', 'DRH', 'algérie', 'P.NOM ', '2022-06-03', '2022-06-05', 0),
(71, '22', 'etranger', 'SG', 'FRANCE ', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(72, '22', 'etranger', 'SG', 'FRANCE ', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(73, '22', 'Visa', 'SG', 'FRANCE ', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(74, '22', 'algérie', 'SG', 'FRANCE ', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(75, '22', 'algérie', 'SG', 'FRANCE ', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(76, '22', 'algérie', 'SG', 'FRANCE ', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(77, '22', 'algérie', 'SG', 'FRANCE ', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(78, '30', 'algérie', 'DRH', 'algerie', 'P.NOM ', '2022-06-03', '2022-06-05', 2345),
(79, '30', 'algérie', 'DRH', 'algerie', 'P.NOM ', '2022-06-03', '2022-06-05', 2345),
(211, '21', 'Visa', 'DRH', '', 'P.NOM ', '2022-06-01', '2022-06-10', 123),
(212, '21', 'Visa', 'DRH', '', 'P.NOM ', '2022-06-01', '2022-06-10', 123),
(213, '21', 'Visa', 'DRH', 'FRANCE', 'P.NOM ', '2022-06-01', '2022-06-10', 123),
(291, '21', 'Visa', 'DRH', 'FRANCE', 'P.NOM ', '2022-06-01', '2022-06-10', 123),
(292, '21', 'Visa', 'DRH', 'FRANCE', 'P.NOM ', '2022-06-01', '2022-06-10', 123),
(311, '22', 'Visa', 'SG', 'FRANCE ', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(312, '22', 'algérie', 'SG', 'algerie', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(323, '22', 'algérie', 'SG', 'algerie', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(324, '22', 'algérie', 'SG', 'algerie', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(325, '22', 'algérie', 'SG', 'algerie', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(326, '22', 'algérie', 'SG', 'algerie', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(331, '22', 'algérie', 'SG', 'algerie', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(332, '22', 'algérie', 'SG', 'algerie', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(333, '22', 'algérie', 'SG', 'algerie', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(334, '22', 'algérie', 'SG', 'algerie', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(335, '22', 'algérie', 'SG', 'algerie', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(336, '22', 'algérie', 'SG', 'algerie', 'P.NOM ', '2022-06-03', '2022-06-12', 2345),
(413, '30', 'anuelle', 'DRH', 'Visa', 'P.NOM ', '2022-06-02', '2022-06-05', 0),
(1233, '546', 'anuelle', 'DRH', 'algérie', 'P.NOM ', '2022-06-04', '2022-06-08', 0),
(4413, '30', 'anuelle', 'DRH', 'Visa', 'P.NOM ', '2022-06-02', '2022-06-05', 0),
(4415, '30', 'anuelle', 'DRH', 'algérie', 'P.NOM ', '2022-06-02', '2022-06-05', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `absence`
--
ALTER TABLE `absence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `annulation`
--
ALTER TABLE `annulation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `droitcong`
--
ALTER TABLE `droitcong`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `intérime`
--
ALTER TABLE `intérime`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ordre-service`
--
ALTER TABLE `ordre-service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `structure` (`structure`);

--
-- Index pour la table `remplacement`
--
ALTER TABLE `remplacement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`code`);

--
-- Index pour la table `titreconge`
--
ALTER TABLE `titreconge`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
