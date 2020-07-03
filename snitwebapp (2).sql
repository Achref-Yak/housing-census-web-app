-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2020 at 09:11 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snitwebapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE IF NOT EXISTS `achat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `devise` decimal(8,3) NOT NULL,
  `prixAchat` decimal(8,3) NOT NULL,
  `tauxDeChange` decimal(8,3) NOT NULL,
  `dateSignSnif` date NOT NULL,
  `dateTransferProp` date NOT NULL,
  `QuoteParteEtat` varchar(255) NOT NULL,
  `DateTransEtat` date NOT NULL,
  `NDecisionGerance` varchar(255) NOT NULL,
  `DateDecision` date NOT NULL,
  `DateAnnulation` date NOT NULL,
  `immeuble` int(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `immeuble` (`immeuble`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `achat`
--

INSERT INTO `achat` (`id`, `devise`, `prixAchat`, `tauxDeChange`, `dateSignSnif`, `dateTransferProp`, `QuoteParteEtat`, `DateTransEtat`, `NDecisionGerance`, `DateDecision`, `DateAnnulation`, `immeuble`) VALUES
(1, '14141.000', '0.000', '0.000', '0000-00-00', '0000-00-00', 'dfdsf', '0000-00-00', 'sdf', '2020-06-10', '2020-06-26', 2),
(2, '65.200', '25.500', '145.300', '0000-00-00', '0000-00-00', 'sqd', '2020-06-08', '', '2020-06-09', '2020-06-09', 16),
(3, '0.000', '0.000', '0.000', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '2020-07-26', '2020-07-15', 17);

-- --------------------------------------------------------

--
-- Table structure for table `descg`
--

DROP TABLE IF EXISTS `descg`;
CREATE TABLE IF NOT EXISTS `descg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Immeuble_id` int(11) DEFAULT NULL,
  `descG` int(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_977634FBE5EA01E8` (`Immeuble_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `descg`
--

INSERT INTO `descg` (`id`, `Immeuble_id`, `descG`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `URL` varchar(255) DEFAULT NULL,
  `Immeuble_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_211FE820E5EA01E8` (`Immeuble_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `etat`
--

DROP TABLE IF EXISTS `etat`;
CREATE TABLE IF NOT EXISTS `etat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Entree` varchar(11) DEFAULT NULL,
  `FacadeTerrase` varchar(255) NOT NULL,
  `PartieCom` varchar(11) DEFAULT NULL,
  `PartieMure` varchar(11) DEFAULT NULL,
  `PartieBalcon` varchar(11) DEFAULT NULL,
  `Terras` varchar(11) DEFAULT NULL,
  `Platon` varchar(11) DEFAULT NULL,
  `Evacuation` varchar(11) DEFAULT NULL,
  `Electrique` varchar(11) DEFAULT NULL,
  `Gaz` varchar(11) DEFAULT NULL,
  `Eau` varchar(11) DEFAULT NULL,
  `EtageB` int(11) DEFAULT NULL,
  `EtageM` int(11) DEFAULT NULL,
  `EtageR` int(11) DEFAULT NULL,
  `EtageMC` int(11) DEFAULT NULL,
  `NbrBienB` int(11) DEFAULT NULL,
  `NbrBienM` int(11) DEFAULT NULL,
  `NbrBienR` int(11) DEFAULT NULL,
  `NbrBienMC` int(11) DEFAULT NULL,
  `Immeuble_id` int(11) DEFAULT NULL,
  `EtageRepa` int(11) NOT NULL,
  `NbrBienRepa` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F5F8585CE5EA01E8` (`Immeuble_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etat`
--

INSERT INTO `etat` (`id`, `Entree`, `FacadeTerrase`, `PartieCom`, `PartieMure`, `PartieBalcon`, `Terras`, `Platon`, `Evacuation`, `Electrique`, `Gaz`, `Eau`, `EtageB`, `EtageM`, `EtageR`, `EtageMC`, `NbrBienB`, `NbrBienM`, `NbrBienR`, `NbrBienMC`, `Immeuble_id`, `EtageRepa`, `NbrBienRepa`) VALUES
(1, 'Choisir', 'Choisir', 'Choisir', 'Choisir', 'Choisir', 'Choisir', 'Choisir', '', 'Choisir', 'Choisir', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(2, 'Choisir', 'Choisir', 'Choisir', 'Choisir', 'Choisir', 'Choisir', 'Choisir', '', 'Choisir', 'Choisir', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0),
(3, 'Choisir', 'Choisir', 'Choisir', 'Choisir', 'Choisir', 'Choisir', 'Choisir', '', 'Choisir', 'Choisir', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fichetechnique`
--

DROP TABLE IF EXISTS `fichetechnique`;
CREATE TABLE IF NOT EXISTS `fichetechnique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Code_TF` varchar(255) DEFAULT NULL,
  `Adresse` varchar(500) DEFAULT NULL,
  `CodeImmeuble` varchar(255) DEFAULT NULL,
  `Nordre` varchar(255) DEFAULT NULL,
  `Categorie` int(11) DEFAULT NULL,
  `Plan` int(11) DEFAULT NULL,
  `NumImmeuble` int(11) DEFAULT NULL,
  `NumLocal` int(11) DEFAULT NULL,
  `NumEtage` int(11) DEFAULT NULL,
  `CodeMunicipal` varchar(255) DEFAULT NULL,
  `Etat` int(11) DEFAULT NULL,
  `Immeuble_id` int(11) DEFAULT NULL,
  `GPS` varchar(255) DEFAULT NULL,
  `DateAq` varchar(100) NOT NULL,
  `DateTrans` varchar(100) NOT NULL,
  `DateCons` varchar(100) NOT NULL,
  `DecisionGestion` varchar(100) NOT NULL,
  `AdresseAdmin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D0701DCBE5EA01E8` (`Immeuble_id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fichetechnique`
--

INSERT INTO `fichetechnique` (`id`, `Code_TF`, `Adresse`, `CodeImmeuble`, `Nordre`, `Categorie`, `Plan`, `NumImmeuble`, `NumLocal`, `NumEtage`, `CodeMunicipal`, `Etat`, `Immeuble_id`, `GPS`, `DateAq`, `DateTrans`, `DateCons`, `DecisionGestion`, `AdresseAdmin`) VALUES
(1, '2525', 'Manouba 2011 مدرسة الطفولة', 'IM123', '5153', 1, 0, 0, 556, 0, '', NULL, 1, '10.1121762 + 36.8093384', '', '', '', '', ''),
(65, '1123', 'Manouba 2011 مدرسة الطفولة', 'IM784', '5421', 2, 1, 0, 0, 0, '', NULL, 2, '10.1119864 + 36.8092591', '', '', '', '', 'tunis'),
(70, 'tf155', 'sazaze', '', NULL, 0, 0, 0, NULL, NULL, '', NULL, 15, '', '', '', '2020-06-09', '', 'sazaze'),
(71, 'hello', 'aaaa', 'dsfdf', NULL, 0, 0, 0, NULL, NULL, '', NULL, 16, '', '', '', '2020-06-19', '', 'aaaa'),
(72, 'ssqsqsq', 'qsdds', 'sdf', NULL, 0, 0, 0, NULL, NULL, '', NULL, 17, '', '', '', '2020-07-24', '', 'qsdds');

-- --------------------------------------------------------

--
-- Table structure for table `gestion`
--

DROP TABLE IF EXISTS `gestion`;
CREATE TABLE IF NOT EXISTS `gestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TF` varchar(255) NOT NULL,
  `TypeTF` varchar(255) NOT NULL,
  `NatureConst` varchar(255) NOT NULL,
  `ContenanceTF` varchar(255) NOT NULL,
  `AnneConst` date NOT NULL,
  `AdresseFR` date NOT NULL,
  `AdresseAR` date NOT NULL,
  `Zone` varchar(255) NOT NULL,
  `Localite` varchar(255) NOT NULL,
  `Governorat` varchar(255) NOT NULL,
  `CodePostal` int(8) NOT NULL,
  `Bureau` varchar(255) NOT NULL,
  `EtapeGestionTitre` varchar(255) NOT NULL,
  `PlanConst` varchar(20) NOT NULL,
  `NombreEtage` varchar(255) NOT NULL,
  `NombreLocaux` int(8) NOT NULL,
  `immeuble` int(11) NOT NULL,
  `CodeImmeubilier` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `immeuble` (`immeuble`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gestion`
--

INSERT INTO `gestion` (`id`, `TF`, `TypeTF`, `NatureConst`, `ContenanceTF`, `AnneConst`, `AdresseFR`, `AdresseAR`, `Zone`, `Localite`, `Governorat`, `CodePostal`, `Bureau`, `EtapeGestionTitre`, `PlanConst`, `NombreEtage`, `NombreLocaux`, `immeuble`, `CodeImmeubilier`) VALUES
(18, 'tf155fgh', 'dfgdf', 'fdgfd', '', '2020-06-09', '0000-00-00', '0000-00-00', 'dsf', 'sdfdsf', 'sdfds', 0, '', '', '', '', 0, 2, ''),
(19, 'hello', 'sdfdsf', 'dsf', 'dfdsfdsf', '2020-06-19', '0000-00-00', '0000-00-00', 'sdfsdf', 'dvdfsd', 'dsfs', 0, 'sdfxc', 'sdfsd', 'zef', '25575', 5242, 16, 'dsfdf'),
(20, 'ssqsqsq', 'qsdqs', 'qsdsqd', 'dsf', '2020-07-24', '0000-00-00', '0000-00-00', 'sqdwxsq', 'qszaa', 'df', 0, 'qfafea', 'sdf', 'wx', '4254', 0, 17, 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `immeuble`
--

DROP TABLE IF EXISTS `immeuble`;
CREATE TABLE IF NOT EXISTS `immeuble` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Update_by` int(11) DEFAULT NULL,
  `Update_date` datetime DEFAULT NULL,
  `Created_by` int(11) DEFAULT NULL,
  `Created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `immeuble`
--

INSERT INTO `immeuble` (`id`, `Update_by`, `Update_date`, `Created_by`, `Created_date`) VALUES
(1, NULL, '2020-05-04 00:00:00', 1, '2020-05-04 00:00:00'),
(2, NULL, NULL, 1, NULL),
(3, NULL, NULL, 1, NULL),
(15, NULL, NULL, NULL, '2020-06-30 09:43:11'),
(16, NULL, NULL, NULL, '2020-06-30 09:46:44'),
(17, NULL, NULL, NULL, '2020-07-02 20:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `local`
--

DROP TABLE IF EXISTS `local`;
CREATE TABLE IF NOT EXISTS `local` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Code_Local` varchar(255) DEFAULT NULL,
  `CodeLocataire` varchar(255) NOT NULL,
  `Etage` varchar(255) DEFAULT NULL,
  `Surface` varchar(255) DEFAULT NULL,
  `Nlocal` int(11) DEFAULT NULL,
  `Nomlocataire` varchar(255) DEFAULT NULL,
  `NonBatis` int(11) DEFAULT NULL,
  `Batis` int(11) DEFAULT NULL,
  `NatureLocal` varchar(255) DEFAULT NULL,
  `ValeurLocation` int(11) DEFAULT NULL,
  `NomFamilleOccupant` varchar(255) DEFAULT NULL,
  `CuisineInde` int(11) DEFAULT NULL,
  `SalleEau` int(11) DEFAULT NULL,
  `Accessibilite` int(11) DEFAULT NULL,
  `EclairageN` varchar(11) DEFAULT NULL,
  `MoyenChauffage` varchar(11) DEFAULT NULL,
  `Ventillation` varchar(11) DEFAULT NULL,
  `Humidite` varchar(11) DEFAULT NULL,
  `DistEau` int(11) DEFAULT NULL,
  `EvacC` int(11) DEFAULT NULL,
  `Immeuble_id` int(11) DEFAULT NULL,
  `Usag` varchar(20) DEFAULT NULL,
  `Structurelle` int(2) NOT NULL DEFAULT 0,
  `Electrique` int(2) NOT NULL DEFAULT 0,
  `Plomberie` int(2) NOT NULL DEFAULT 0,
  `Enduit` int(2) NOT NULL DEFAULT 0,
  `Ouvertures` int(2) NOT NULL DEFAULT 0,
  `Fonctionelle` int(2) NOT NULL DEFAULT 0,
  `Spacial` int(11) NOT NULL DEFAULT 0,
  `Peinture` int(11) NOT NULL DEFAULT 0,
  `etatlocal` int(2) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `IDX_4A17A7ECE5EA01E8` (`Immeuble_id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `local`
--

INSERT INTO `local` (`id`, `Code_Local`, `CodeLocataire`, `Etage`, `Surface`, `Nlocal`, `Nomlocataire`, `NonBatis`, `Batis`, `NatureLocal`, `ValeurLocation`, `NomFamilleOccupant`, `CuisineInde`, `SalleEau`, `Accessibilite`, `EclairageN`, `MoyenChauffage`, `Ventillation`, `Humidite`, `DistEau`, `EvacC`, `Immeuble_id`, `Usag`, `Structurelle`, `Electrique`, `Plomberie`, `Enduit`, `Ouvertures`, `Fonctionelle`, `Spacial`, `Peinture`, `etatlocal`) VALUES
(1, 'yyyyyu', '555885', 'vbjjj', '', NULL, 'Foulen1', 0, 0, '', 0, '', 0, 0, 0, '', '', '', '', 0, 0, 1, 'Commercial', 1, 0, 1, 1, 0, 1, 0, 1, 0),
(47, 'Local2kkk', '74863', 'Liverpool', '9663588', 88552, 'lllmm', 3, 3, '1kkllvjklll', 144463, 'pourquoi', 1, 1, 0, '', '', '', '', 3, 1, 2, 'Professionnel', 0, 0, 1, 1, 0, 1, 0, 0, 0),
(80, 'Local1', '', '', '', NULL, 'Foulen1', 0, 0, '', 0, '', 0, 0, 0, '', '', '', '', 0, 0, 3, 'Habitation', 1, 1, 1, 0, 1, 1, 0, 1, 4),
(82, 'Local21hjk', '142', 'nippon', '1', 8866, '1', 1, 1, '1llommm', 1, '1', 1, 1, 0, '', '', '', '', 1, 1, 2, 'Commercial', 0, 0, 1, 0, 0, 1, 0, 0, 0),
(83, 'Local21h', '', 'billfffv', '1', 0, '1', 2, 1, '1', 1, '1', 1, 1, 0, '', '', '', '', 1, 1, 2, 'Commercial', 0, 0, 1, 0, 0, 1, 0, 0, 0),
(86, 'cbnml', '6633366', 'vhhhhj', '', NULL, 'cceeghhhbv', 0, 0, '', 0, '', 0, 0, NULL, '', '', '', '', 0, 0, 1, 'Commercial', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 'local_TF_1', '', 'bnnkk', '', 0, '', 2, 1, '', 0, '', 0, 0, 0, '', '', '', '', 0, 0, 2, 'Commercial', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(105, 'local_TF_0', '', '', '', 0, '', 0, 0, '', 0, '', 0, 0, 0, '', '', '', '', 0, 0, 2, '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(106, 'local_TF_1', '', '', '', 0, '', 0, 0, '', 0, '', 0, 0, 0, '', '', '', '', 0, 0, 2, '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(107, 'local_TF_2', '', '', '', 0, '', 0, 0, '', 0, '', 0, 0, 0, '', '', '', '', 0, 0, 2, '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(108, 'local_TF_3', '', '', '', 0, '', 0, 0, '', 0, '', 0, 0, 0, '', '', '', '', 0, 0, 2, '', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `localadmin`
--

DROP TABLE IF EXISTS `localadmin`;
CREATE TABLE IF NOT EXISTS `localadmin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `codelocal` varchar(100) NOT NULL,
  `datecreation` date NOT NULL,
  `immeuble` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `localadmin`
--

INSERT INTO `localadmin` (`id`, `codelocal`, `datecreation`, `immeuble`) VALUES
(25, 'dsfdsw', '2020-07-02', 2),
(24, 'dsfdsf', '2020-07-02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `localgestion`
--

DROP TABLE IF EXISTS `localgestion`;
CREATE TABLE IF NOT EXISTS `localgestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `netage` varchar(255) NOT NULL,
  `codelocal` varchar(255) NOT NULL,
  `disponibilite` varchar(255) NOT NULL,
  `naturelocal` varchar(255) NOT NULL,
  `numeroplan` int(255) NOT NULL,
  `surface` decimal(8,3) NOT NULL,
  `usag` varchar(255) NOT NULL,
  `dependancebat` varchar(255) NOT NULL,
  `surfacebat` decimal(8,3) NOT NULL,
  `dependancenonbat` varchar(255) NOT NULL,
  `surfacenonbat` decimal(8,3) NOT NULL,
  `immeuble` int(11) NOT NULL,
  `local` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `localgestion`
--

INSERT INTO `localgestion` (`id`, `netage`, `codelocal`, `disponibilite`, `naturelocal`, `numeroplan`, `surface`, `usag`, `dependancebat`, `surfacebat`, `dependancenonbat`, `surfacenonbat`, `immeuble`, `local`) VALUES
(2, '12', 'qsd', 'qssfq', 'qsdsq', 457, '177.000', 'dqfdqf', '', '0.000', '', '0.000', 2, 24),
(3, '7114', 'qsdsqd', 'sqdq', 'qsd', 0, '424.000', 'sqd', '', '0.000', '', '0.000', 2, 25);

-- --------------------------------------------------------

--
-- Table structure for table `local_historique_gestion`
--

DROP TABLE IF EXISTS `local_historique_gestion`;
CREATE TABLE IF NOT EXISTS `local_historique_gestion` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nomoccupant` varchar(255) NOT NULL,
  `cinpassport` varchar(255) NOT NULL,
  `lieuemission` varchar(255) NOT NULL,
  `dateemission` date NOT NULL,
  `typeoccupant` varchar(255) NOT NULL,
  `codeeoccupant` varchar(100) NOT NULL,
  `contradatedebut` date NOT NULL,
  `contradatefin` date NOT NULL,
  `periodecorresdu` date NOT NULL,
  `periodecorrespau` date NOT NULL,
  `naturepiececon` varchar(255) NOT NULL,
  `montantloyerencaisse` decimal(8,3) NOT NULL,
  `loyerdedepart` decimal(8,3) NOT NULL,
  `loyeractuel` decimal(8,3) NOT NULL,
  `fraisocc` decimal(8,3) NOT NULL,
  `fraisrecu` decimal(8,3) NOT NULL,
  `tauxact` decimal(8,3) NOT NULL,
  `immeuble` int(11) NOT NULL,
  `local` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `local_historique_gestion`
--

INSERT INTO `local_historique_gestion` (`id`, `nomoccupant`, `cinpassport`, `lieuemission`, `dateemission`, `typeoccupant`, `codeeoccupant`, `contradatedebut`, `contradatefin`, `periodecorresdu`, `periodecorrespau`, `naturepiececon`, `montantloyerencaisse`, `loyerdedepart`, `loyeractuel`, `fraisocc`, `fraisrecu`, `tauxact`, `immeuble`, `local`) VALUES
(2, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '0.000', '4254.000', '41.000', '410.000', '4141.000', '424.000', 2, 24),
(3, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '0.000', '7241.000', '2721.000', '72742.000', '4140.000', '40.000', 2, 25);

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

DROP TABLE IF EXISTS `mission`;
CREATE TABLE IF NOT EXISTS `mission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Adresse` varchar(255) DEFAULT NULL,
  `Etat` int(11) DEFAULT NULL,
  `Immeuble_id` int(11) DEFAULT NULL,
  `Tech` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Tech` (`Tech`),
  KEY `Immeuble_id` (`Immeuble_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `Adresse`, `Etat`, `Immeuble_id`, `Tech`) VALUES
(1, 'Tunis', 2, 1, 2),
(2, 'Manouba', 2, 2, 2),
(3, 'Ariana', 2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `Code_TF` varchar(255) NOT NULL,
  `Code_Local` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `Title`, `URL`, `Code_TF`, `Code_Local`) VALUES
(78, '1592910568229.jpg', '/immeuble2525/1592910568229.jpg', '2525', ''),
(75, '1592817143354.jpg', '/immeuble1123/1592817143354.jpg', '1123', ''),
(76, '1592910075391.jpg', '/immeuble2525/1592910075391.jpg', '2525', ''),
(77, '1592910107337.jpg', '/immeuble2525/1592910107337.jpg', '2525', ''),
(74, '1592813361898.jpg', '/immeuble2525/1592813361898.jpg', '2525', ''),
(85, '1592915931635.jpg', '/immeuble2525/1592915931635.jpg', '2525', ''),
(105, '1593098242609.jpg', '/immeuble_1123_local_/1593098242609.jpg', '1123', ''),
(104, '1593098126051.jpg', '/immeuble_1123_local_/1593098126051.jpg', '1123', ''),
(103, '1593072571788.jpg', '/immeuble_1123_local_Local21hjkjhhhp/1593072571788.jpg', '1123', 'Local21hjkjhhhp'),
(102, '1593037997459.jpg', '/immeuble_1123_local_Local2 you kkk/1593037997459.jpg', '1123', 'Local2 you kkk'),
(97, '1592917844113.jpg', '/immeuble_1123_local_Local2new/1592917844113.jpg', '1123', 'Local2 you kkk'),
(98, '1593000633977.jpg', '/immeuble_1123_local_Local21hjkjhhhp/1593000633977.jpg', '1123', 'Local21hjkjhhhp'),
(100, '1593035740055.jpg', '/immeuble_1123_local_Local2 you kkk/1593035740055.jpg', '1123', 'Local2 you kkk'),
(101, '1593035814450.jpg', '/immeuble_1123_local_Local2 you kkk/1593035814450.jpg', '1123', 'Local2 you kkk'),
(106, '1593103227547.jpg', '/immeuble_1123_local_local_TF_1/1593103227547.jpg', '1123', 'local_TF_1'),
(107, '1593103288073.jpg', '/immeuble_1123_local_Local2kkk/1593103288073.jpg', '1123', 'Local2kkk'),
(108, '1593103309063.jpg', '/immeuble_1123_local_local_TF/1593103309063.jpg', '1123', 'local_TF'),
(109, '1593104478454.jpg', '/immeuble_1123_local_local_TF_1/1593104478454.jpg', '1123', 'local_TF_1');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `created_at`) VALUES
(1, 'hello', 'hello', 'dsfdsfdsfdsf', '2020-06-27 14:00:19'),
(0, 'sdfdsf', 'sdfdsf', 'dsfdsf', '2020-06-27 22:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `proprietaire`
--

DROP TABLE IF EXISTS `proprietaire`;
CREATE TABLE IF NOT EXISTS `proprietaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Identite` varchar(255) DEFAULT NULL,
  `Nationalite` varchar(255) DEFAULT NULL,
  `QuotPar` varchar(255) DEFAULT NULL,
  `DateTrans` varchar(255) DEFAULT NULL,
  `DateCons` varchar(255) DEFAULT NULL,
  `DateAq` varchar(255) DEFAULT NULL,
  `DecisionGestion` varchar(255) DEFAULT NULL,
  `Immeuble_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_71D2422EE5EA01E8` (`Immeuble_id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proprietaire`
--

INSERT INTO `proprietaire` (`id`, `Identite`, `Nationalite`, `QuotPar`, `DateTrans`, `DateCons`, `DateAq`, `DecisionGestion`, `Immeuble_id`) VALUES
(118, '66663333', 'ghjjjj', 'bnnn', NULL, NULL, NULL, NULL, NULL),
(119, '5666', 'bbn', 'klklk', NULL, NULL, NULL, NULL, NULL),
(120, '8999', 'jnn', 'çn', NULL, NULL, NULL, NULL, NULL),
(129, '1414', 'ghb', 'vnnn', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `proprietairebienimmobilier`
--

DROP TABLE IF EXISTS `proprietairebienimmobilier`;
CREATE TABLE IF NOT EXISTS `proprietairebienimmobilier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proprietaire` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `quotepart` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `rip` int(11) NOT NULL,
  `immeuble` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proprietairebienimmobilier`
--

INSERT INTO `proprietairebienimmobilier` (`id`, `proprietaire`, `nationalite`, `quotepart`, `adresse`, `rip`, `immeuble`) VALUES
(1, 'foulen2', '54254', 'sdds', 'sdf', 0, 2),
(2, 'foulen3', 'sdfdsf', 'sdfsdf', 'sdfds', 0, 2),
(3, 'foulen4', 'sddsds', 'sssd', 'dsfdsf', 0, 2),
(4, 'foulen1', '425', 'sdfs', 'dsfdsf', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reglementproprietaire`
--

DROP TABLE IF EXISTS `reglementproprietaire`;
CREATE TABLE IF NOT EXISTS `reglementproprietaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proprietaire` varchar(255) NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `mentantReglement` decimal(12,3) NOT NULL,
  `immeuble` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reglementproprietaire`
--

INSERT INTO `reglementproprietaire` (`id`, `proprietaire`, `du`, `au`, `mentantReglement`, `immeuble`) VALUES
(1, 'foulen1', '0000-00-00', '0000-00-00', '0.000', 2),
(2, 'foulen2', '0000-00-00', '0000-00-00', '0.000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `technicien`
--

DROP TABLE IF EXISTS `technicien`;
CREATE TABLE IF NOT EXISTS `technicien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `Prenom` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `JoinedDate` varchar(255) DEFAULT NULL,
  `LastConnectDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technicien`
--

INSERT INTO `technicien` (`id`, `UserName`, `Password`, `Nom`, `Prenom`, `Email`, `JoinedDate`, `LastConnectDate`) VALUES
(2, 'Achref', 'koala', 'Yakdhane', 'Achref', 'achref.yak@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `register_date`) VALUES
(1, 'ach', '', '', 'ach', '128ecf542a35ac5270a87dc740918404', '2020-06-28 16:39:27');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `descg`
--
ALTER TABLE `descg`
  ADD CONSTRAINT `FK_977634FBE5EA01E8` FOREIGN KEY (`Immeuble_id`) REFERENCES `immeuble` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `FK_211FE820E5EA01E8` FOREIGN KEY (`Immeuble_id`) REFERENCES `immeuble` (`id`);

--
-- Constraints for table `etat`
--
ALTER TABLE `etat`
  ADD CONSTRAINT `FK_F5F8585CE5EA01E8` FOREIGN KEY (`Immeuble_id`) REFERENCES `immeuble` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fichetechnique`
--
ALTER TABLE `fichetechnique`
  ADD CONSTRAINT `FK_D0701DCBE5EA01E8` FOREIGN KEY (`Immeuble_id`) REFERENCES `immeuble` (`id`);

--
-- Constraints for table `local`
--
ALTER TABLE `local`
  ADD CONSTRAINT `FK_4A17A7ECE5EA01E8` FOREIGN KEY (`Immeuble_id`) REFERENCES `immeuble` (`id`);

--
-- Constraints for table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `FK_5FDACBA0E5EA01E8` FOREIGN KEY (`Immeuble_id`) REFERENCES `immeuble` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_F` FOREIGN KEY (`Tech`) REFERENCES `technicien` (`id`);

--
-- Constraints for table `proprietaire`
--
ALTER TABLE `proprietaire`
  ADD CONSTRAINT `FK_71D2422EE5EA01E8` FOREIGN KEY (`Immeuble_id`) REFERENCES `immeuble` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
