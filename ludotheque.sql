-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 13, 2022 at 02:04 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ludotheque`
--
CREATE DATABASE IF NOT EXISTS `ludotheque` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ludotheque`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--
-- Creation: Jan 12, 2022 at 02:23 PM
-- Last update: Jan 13, 2022 at 02:02 AM
-- Last check: Jan 12, 2022 at 02:23 PM
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `ID_Member` int(11) NOT NULL,
  `ID_Game` int(11) NOT NULL,
  `Date` date NOT NULL,
  `ReturnDate` date NOT NULL,
  PRIMARY KEY (`ID_Member`,`ID_Game`),
  KEY `ID_Game` (`ID_Game`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID_Member`, `ID_Game`, `Date`, `ReturnDate`) VALUES
(2, 6, '2022-01-13', '2022-02-12'),
(2, 10, '2022-01-13', '2022-02-12'),
(2, 11, '2022-01-13', '2022-02-12'),
(2, 12, '2022-01-13', '2022-02-12'),
(2, 4, '2022-01-13', '2022-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--
-- Creation: Jan 12, 2022 at 02:31 PM
-- Last update: Jan 13, 2022 at 02:00 AM
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `ID_Game` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `p_key_word` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`ID_Game`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`ID_Game`, `type`, `p_key_word`, `name`, `description`, `img`, `age`) VALUES
(4, 'Aventure', 'MMORPG', 'MMORPG', 'Tire de balle', 'MMORPG.jpg', 20),
(5, 'Aventure', 'call of duty', 'Call Of Duty', 'guerre', 'CALL.jpg', 20),
(6, 'Combat', 'storm', 'Storm', 'tiré de la serie Naruto', 'Storm.jpeg', 16),
(10, 'Aventure', 'sangoku', 'Sangoku', 'Tire de balle', 'Sangoku.jpeg', 20),
(11, 'Aventure', 'madagascar', 'Madagascar', 'guerre', 'Madagascar.webp', 20),
(12, 'Combat', 'fortnite', 'Fortnite', 'tiré de la serie Naruto', 'Fornite.webp', 16),
(13, 'Aventure', 'Retro', 'Retro', 'Tire de balle', 'Retro.webp', 20),
(14, 'Aventure', 'aventure', 'Aventure', 'guerre', 'Aventure.png', 20);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--
-- Creation: Jan 12, 2022 at 04:55 PM
-- Last update: Jan 12, 2022 at 11:54 PM
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `ID_Member` int(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Adress` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `Mot_De_Passe` varchar(20) NOT NULL,
  `Confirmation_Mot_De_Passe` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_Member`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID_Member`, `Name`, `FirstName`, `Email`, `Adress`, `img`, `Mot_De_Passe`, `Confirmation_Mot_De_Passe`) VALUES
(1, 'Eben', 'Lass', 'ebenezerlassem@gmail.com', '256 rue st jose', '', '1234', '1234'),
(2, 'Ebenezer', 'Lassem', 'ebenezerlass@gmail.com', '22 rue djoudja ', 'pp.jpeg', '123456789', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--
-- Creation: Dec 20, 2021 at 04:43 PM
-- Last update: Dec 20, 2021 at 04:43 PM
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `ID_Game` int(5) NOT NULL AUTO_INCREMENT,
  `Number` int(10) NOT NULL,
  `Available` int(2) NOT NULL,
  PRIMARY KEY (`ID_Game`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
