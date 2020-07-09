-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 09, 2020 at 10:28 PM
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
  `immeuble` int(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `immeuble` (`immeuble`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `achat`
--

INSERT INTO `achat` (`id`, `devise`, `prixAchat`, `tauxDeChange`, `dateSignSnif`, `dateTransferProp`, `QuoteParteEtat`, `DateTransEtat`, `immeuble`) VALUES
(1, '14141.000', '42142.000', '0.000', '0000-00-00', '0000-00-00', 'dfdsf', '0000-00-00', 2),
(13, '0.000', '2121.000', '0.000', '2020-07-17', '2020-07-15', '', '0000-00-00', 33),
(12, '0.000', '4242.000', '0.000', '0000-00-00', '0000-00-00', '', '0000-00-00', 32),
(11, '0.000', '0.000', '0.000', '0000-00-00', '0000-00-00', '', '0000-00-00', 31),
(10, '0.000', '0.000', '0.000', '0000-00-00', '0000-00-00', '', '0000-00-00', 30),
(14, '0.000', '0.000', '0.000', '0000-00-00', '0000-00-00', '', '0000-00-00', 34),
(15, '0.000', '0.000', '0.000', '0000-00-00', '0000-00-00', '', '0000-00-00', 35),
(16, '0.000', '0.000', '0.000', '0000-00-00', '0000-00-00', '', '0000-00-00', 36),
(17, '0.000', '0.000', '0.000', '0000-00-00', '0000-00-00', '', '0000-00-00', 37);

-- --------------------------------------------------------

--
-- Table structure for table `dependance`
--

DROP TABLE IF EXISTS `dependance`;
CREATE TABLE IF NOT EXISTS `dependance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `localgestion` int(11) NOT NULL,
  `dependancebat` varchar(255) NOT NULL,
  `surfacebat` decimal(8,3) NOT NULL,
  `dependancenonbat` varchar(255) NOT NULL,
  `surfacenonbat` decimal(8,3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dependance`
--

INSERT INTO `dependance` (`id`, `localgestion`, `dependancebat`, `surfacebat`, `dependancenonbat`, `surfacenonbat`) VALUES
(1, 11, 'xcwxcsdsd12', '242.000', 'fgfftruy', '4545.000'),
(3, 11, 'xcwxcsddcvdsd12', '242.000', 'fgfftruy', '4545.000'),
(19, 9, 'xcvcxv', '35.000', 'sdsvsdv', '53.000'),
(18, 9, 'xwcwxc', '24.000', 'wxcwxc', '24.000'),
(17, 9, 'xcvxcv', '1213.000', 'sqqfdf', '43.000'),
(16, 9, 'wvcv', '213.000', 'wcxxw', '12.000'),
(15, 2, 'rzgfg', '245.000', 'fhjhfj', '4525.000'),
(14, 11, 'sdg', '42.000', 'jhk', '76.000'),
(13, 8, 'sd', '12.000', 'gfh', '423.000'),
(12, 2, 'drfgdfgh', '99999.999', 'fgjh', '543.000'),
(20, 9, 'wcvwx', '12.000', 'cxvxc', '23432.000'),
(21, 9, 'xcvxc', '2.000', 'wxcw', '0.000'),
(22, 14, 'dep', '4242.000', 'sgs', '4242.000'),
(23, 14, 'dqfdf', '424.000', 'sdsf', '2.000'),
(24, 9, '', '0.000', '', '0.000');

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
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fichetechnique`
--

INSERT INTO `fichetechnique` (`id`, `Code_TF`, `Adresse`, `CodeImmeuble`, `Nordre`, `Categorie`, `Plan`, `NumImmeuble`, `NumLocal`, `NumEtage`, `CodeMunicipal`, `Etat`, `Immeuble_id`, `GPS`, `DateAq`, `DateTrans`, `DateCons`, `DecisionGestion`, `AdresseAdmin`) VALUES
(1, 'TF1', 'Manouba 2011 مدرسة الطفولة', 'IM123', '5153', 1, 0, 0, 556, 0, '', NULL, 1, '10.1121762 + 36.8093384', '', '', '', '', ''),
(65, 'TF1412', 'Manouba 2011 مدرسة الطفولة', 'IM784', '5421', 2, 1, 0, 0, 0, '', NULL, 2, '10.1119864 + 36.8092591', '', '', '', '', 'tunis'),
(82, 'Lmmmm', '', '', NULL, 0, 0, 0, NULL, NULL, '', NULL, 30, '', '', '', '', '', ''),
(83, 'dcdfdfwb', '', '', NULL, 0, 0, 0, NULL, NULL, '', NULL, 31, '', '', '', '', '', ''),
(84, 'gfhdsf', '', '', NULL, 0, 0, 0, NULL, NULL, '', NULL, 32, '', '', '', '', '', ''),
(85, 'neww', 'sdfsdf', '', NULL, 0, 0, 0, NULL, NULL, '', NULL, 33, '', '', '', '', '', 'sdfsdf'),
(86, 'sfsdf', '', '', NULL, 0, 0, 0, NULL, NULL, '', NULL, 34, '', '', '', '', '', ''),
(87, 'fbfdb', '', '', NULL, 0, 0, 0, NULL, NULL, '', NULL, 35, '', '', '', '', '', ''),
(88, 'svsvcxv', '', '', NULL, 0, 0, 0, NULL, NULL, '', NULL, 36, '', '', '', '', '', ''),
(89, 'dsfsdss', '', '', NULL, 0, 0, 0, NULL, NULL, '', NULL, 37, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gerance`
--

DROP TABLE IF EXISTS `gerance`;
CREATE TABLE IF NOT EXISTS `gerance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `decisionGer` int(12) NOT NULL,
  `dateDec` date NOT NULL,
  `dateAnnul` date NOT NULL,
  `achat` int(11) NOT NULL,
  `immeuble` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gerance`
--

INSERT INTO `gerance` (`id`, `decisionGer`, `dateDec`, `dateAnnul`, `achat`, `immeuble`) VALUES
(3, 23213, '2020-07-20', '2020-07-23', 1, 2);

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
  `AdresseFR` varchar(255) NOT NULL,
  `AdresseAR` varchar(255) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gestion`
--

INSERT INTO `gestion` (`id`, `TF`, `TypeTF`, `NatureConst`, `ContenanceTF`, `AnneConst`, `AdresseFR`, `AdresseAR`, `Zone`, `Localite`, `Governorat`, `CodePostal`, `Bureau`, `EtapeGestionTitre`, `PlanConst`, `NombreEtage`, `NombreLocaux`, `immeuble`, `CodeImmeubilier`) VALUES
(18, 'TF1412', 'dfgdf', 'fdgfd', '', '2020-06-03', 'Tunis', 'sdfdf', 'dsf', 'sdfdsf', 'sdfds', 0, '', 'jlkjl', '', '14', 0, 2, ''),
(32, 'neww', '', '', '', '0000-00-00', 'sdfsdf', 'arab', 'sdfsdf', '', 'tunis', 0, '', '', '', '', 0, 33, ''),
(31, 'gfhdsf', '', '', '', '0000-00-00', '', 'hammamet', 'sdf', '', '', 0, '', '', '', '', 0, 32, ''),
(30, 'dcdfdfwb', '', '', '', '0000-00-00', 'dfdf', '', 'fdfq', '', '', 0, '', '', '', '', 0, 31, ''),
(29, 'Lmmmm', '', '', '', '0000-00-00', '', '', 'dfdf', '', '', 0, '', '', '', '', 0, 30, ''),
(33, 'sfsdf', 'b,j', '', '', '0000-00-00', '', '', 'wxc', '', '', 0, '', '', '', '', 0, 34, ''),
(34, 'fbfdb', '', '', '', '0000-00-00', '', '', 'fb', '', '', 0, '', '', '', '', 0, 35, ''),
(35, 'svsvcxv', '242', '', '', '0000-00-00', '', '', 'ddfdv', '', '', 0, '', '', '', '', 0, 36, ''),
(36, 'dsfsdss', '', '', '', '0000-00-00', '', '', 'sdfsf', '', '', 0, '', '', '', '', 0, 37, '');

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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `immeuble`
--

INSERT INTO `immeuble` (`id`, `Update_by`, `Update_date`, `Created_by`, `Created_date`) VALUES
(1, NULL, '2020-05-04 00:00:00', 1, '2020-05-04 00:00:00'),
(2, NULL, NULL, 1, NULL),
(3, NULL, NULL, 1, NULL),
(30, NULL, NULL, NULL, '2020-07-07 17:28:31'),
(31, NULL, NULL, NULL, '2020-07-07 17:29:55'),
(32, NULL, NULL, NULL, '2020-07-07 17:50:48'),
(33, NULL, NULL, NULL, '2020-07-07 17:52:50'),
(34, NULL, NULL, NULL, '2020-07-09 15:50:35'),
(35, NULL, NULL, NULL, '2020-07-09 15:51:34'),
(36, NULL, NULL, NULL, '2020-07-09 15:52:02'),
(37, NULL, NULL, NULL, '2020-07-09 15:55:01');

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
  `NomFamilleOccupant` varchar(255) DEFAULT '0',
  `CuisineInde` int(11) DEFAULT 0,
  `SalleEau` int(11) DEFAULT 0,
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
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;

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
(105, 'local_TF_0', '', '', '', 0, '', 2, 1, '', 0, '', 0, 0, 0, '', '', '', '', 0, 0, 2, 'Commercial', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(106, 'local_TF_1', '', '', '', 0, '', 2, 1, '', 0, '', 0, 0, 0, '', '', '', '', 0, 0, 2, 'Commercial', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(107, 'local_TF_2', '', '', '', 0, '', 2, 1, '', 0, '', 0, 0, 0, '', '', '', '', 0, 0, 2, 'Commercial', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(108, 'local_TF_3', '', '', '', 0, '', 2, 1, '', 0, '', 0, 0, 0, '', '', '', '', 0, 0, 2, 'Commercial', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(111, 'NewLocal', '114433', 'etage', '', 0, '', 2, 1, '', 0, '7', 0, 0, NULL, 'Faible', 'Suffisant', 'Suffisant', 'Legere', 0, 0, 2, 'Professionnel', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(112, 'neww', '86666', 'bjkkc', '89655', 99688, 'vhjjjnn', 2, 1, '', 0, '8', 1, 1, NULL, 'Bon', 'Insuffisant', 'Insuffisant', 'Important', 2, 3, 2, 'Professionnel', 0, 1, 1, 1, 0, 0, 1, 1, 0),
(113, 'new', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 37, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(114, 'loooc', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 37, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `localadmin`
--

INSERT INTO `localadmin` (`id`, `codelocal`, `datecreation`, `immeuble`) VALUES
(24, 'dsfdsw', '2020-07-02', 2),
(35, 'dvdgv', '2020-07-05', 2),
(42, 'neww', '2020-07-07', 2),
(38, 'vvvbbb', '2020-07-06', 2),
(37, 'locaal', '2020-07-06', 2),
(36, 'Local21hjkjhhhp', '2020-07-05', 2),
(41, 'NewLocal', '2020-07-07', 2),
(43, 'new', '2020-07-09', 37),
(44, 'loooc', '2020-07-09', 37);

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
  `immeuble` int(11) NOT NULL,
  `local` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `localgestion`
--

INSERT INTO `localgestion` (`id`, `netage`, `codelocal`, `disponibilite`, `naturelocal`, `numeroplan`, `surface`, `usag`, `immeuble`, `local`) VALUES
(2, '12', 'qsdsdgwvwv', 'qssfq', '', 12, '177.000', 'dqfdqf', 2, 24),
(8, '744', 'dvdgv', 'hfjh', 'dfgdfg', 0, '0.000', 'hgjyh', 2, 35),
(9, '', 'Local21hjkjhhhp', '', '', 12, '151.000', '', 2, 36),
(10, '', 'locaal', '', '', 0, '0.000', '', 2, 37),
(11, '', 'vvvbbb', '', '', 12, '1212.000', 'sqd', 2, 38),
(14, '', 'neww', '', '', 0, '0.000', '', 2, 42),
(13, '', 'NewLocal', '', '', 0, '0.000', '', 2, 41),
(15, '', 'new', '', '', 42, '0.000', 'fsdg', 37, 43),
(16, '', 'loooc', '', '', 252, '0.000', '', 37, 44);

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
  `Tech` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Tech` (`Tech`),
  KEY `Immeuble_id` (`Immeuble_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `Adresse`, `Etat`, `Immeuble_id`, `Tech`) VALUES
(1, 'Tunis', 2, 1, 2),
(2, 'Manouba', 2, 2, 2),
(3, 'Ariana', 2, 3, 2),
(5, '', 0, 31, NULL),
(6, '', 0, 32, NULL),
(7, 'sdfsdf', 0, 33, NULL),
(8, '', 0, 34, NULL),
(9, '', 0, 35, NULL),
(10, '', 0, 36, NULL),
(11, '', 0, 37, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `occupant`
--

DROP TABLE IF EXISTS `occupant`;
CREATE TABLE IF NOT EXISTS `occupant` (
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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `occupant`
--

INSERT INTO `occupant` (`id`, `nomoccupant`, `cinpassport`, `lieuemission`, `dateemission`, `typeoccupant`, `codeeoccupant`, `contradatedebut`, `contradatefin`, `periodecorresdu`, `periodecorrespau`, `naturepiececon`, `montantloyerencaisse`, `loyerdedepart`, `loyeractuel`, `fraisocc`, `fraisrecu`, `tauxact`, `immeuble`, `local`) VALUES
(22, 'dsfsdf', '4242', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '0.000', '0.000', '0.000', '0.000', '0.000', '0.000', 0, 44);

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
  `Code_Local` varchar(255) NOT NULL,
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
(105, '1593098242609.jpg', '/immeuble_1123_local_/1593098242609.jpg', 'TF1412', ''),
(104, '1593098126051.jpg', '/immeuble_1123_local_/1593098126051.jpg', 'TF1412', ''),
(103, '1593072571788.jpg', '/immeuble_1123_local_Local21hjkjhhhp/1593072571788.jpg', 'TF1412', 'Local21hjkjhhhp'),
(102, '1593037997459.jpg', '/immeuble_1123_local_Local2 you kkk/1593037997459.jpg', 'TF1412', 'Local2 you kkk'),
(97, '1592917844113.jpg', '/immeuble_1123_local_Local2new/1592917844113.jpg', 'TF1412', 'Local2 you kkk'),
(98, '1593000633977.jpg', '/immeuble_1123_local_Local21hjkjhhhp/1593000633977.jpg', 'TF1412', 'Local21hjkjhhhp'),
(100, '1593035740055.jpg', '/immeuble_1123_local_Local2 you kkk/1593035740055.jpg', 'TF1412', 'Local2 you kkk'),
(101, '1593035814450.jpg', '/immeuble_1123_local_Local2 you kkk/1593035814450.jpg', 'TF1412', 'Local2 you kkk'),
(106, '1593103227547.jpg', '/immeuble_1123_local_local_TF_1/1593103227547.jpg', 'TF1412', 'local_TF_1'),
(107, '1593103288073.jpg', '/immeuble_1123_local_Local2kkk/1593103288073.jpg', 'TF1412', 'Local2kkk'),
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proprietairebienimmobilier`
--

INSERT INTO `proprietairebienimmobilier` (`id`, `proprietaire`, `nationalite`, `quotepart`, `adresse`, `rip`, `immeuble`) VALUES
(1, 'foulen2', '54254', 'sdds', 'sdf', 0, 2),
(2, 'foulen3', 'sdfdsf', 'sdfsdf', 'sdfds', 0, 2),
(3, 'foulen4', 'sddsds', 'sssd', 'dsfdsf', 0, 2),
(4, 'foulen1', '425', 'sdfs', 'dsfdsf', 0, 2),
(5, 'cvbvxb', 'xcvcv', 'fbfb', 'xcvfb', 0, 2),
(6, 'rterfg', '', '', '', 0, 24),
(8, 'prop', 'tunisien', '1/2', 'tunis', 12, 33),
(10, 'dfdqf', 'dqfd', '42', 'sdf', 0, 33),
(11, 'proprop', 'algerien', '1/2', '', 0, 33);

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reglementproprietaire`
--

INSERT INTO `reglementproprietaire` (`id`, `proprietaire`, `du`, `au`, `mentantReglement`, `immeuble`) VALUES
(1, 'foulen1', '0000-00-00', '0000-00-00', '0.000', 2),
(2, 'foulen2', '0000-00-00', '0000-00-00', '0.000', 2),
(3, 'sfgfs', '0000-00-00', '0000-00-00', '141.000', 24),
(4, 'popop', '2020-07-14', '2020-07-16', '4242.000', 33),
(5, 'essdf', '2020-07-21', '2020-07-23', '2535.000', 33),
(6, 'fghfg', '2020-07-14', '2020-07-29', '535.000', 33),
(7, 'dfqdfq', '2020-07-13', '2020-07-30', '234.000', 33);

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
