-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 09 jan 2023 om 09:57
-- Serverversie: 5.7.31
-- PHP-versie: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BE-J2-P2-toets`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Auto`
--

DROP TABLE IF EXISTS `Auto`;
CREATE TABLE IF NOT EXISTS `Auto` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Kenteken` varchar(8) NOT NULL,
  `Type` varchar(150) NOT NULL,
  `InstructeurId` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Instructeur` (`InstructeurId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Instructeur`
--

DROP TABLE IF EXISTS `Instructeur`;
CREATE TABLE IF NOT EXISTS `Instructeur` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(51) NOT NULL,
  `Email` varchar(150) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Mankement`
--

DROP TABLE IF EXISTS `Mankement`;
CREATE TABLE IF NOT EXISTS `Mankement` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `AutoId` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `Mankement` varchar(300) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Auto` (`AutoId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `Auto`
--
ALTER TABLE `Auto`
  ADD CONSTRAINT `Instructeur` FOREIGN KEY (`InstructeurId`) REFERENCES `Instructeur` (`Id`);

--
-- Beperkingen voor tabel `Mankement`
--
ALTER TABLE `Mankement`
  ADD CONSTRAINT `Auto` FOREIGN KEY (`AutoId`) REFERENCES `Auto` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
