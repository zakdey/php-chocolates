-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2016 at 07:13 AM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mvchocolates-doctrine`
--

-- --------------------------------------------------------

--
-- Table structure for table `ordini`
--

CREATE TABLE IF NOT EXISTS `ordini` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codice_prodotto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `totale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome_utente` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cognome_utente` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_utente` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `indirizzo_utente` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F720A0AD922F9B2B` (`codice_prodotto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `ordini`
--

INSERT INTO `ordini` (`id`, `codice_prodotto`, `totale`, `nome_utente`, `cognome_utente`, `email_utente`, `indirizzo_utente`) VALUES
(1, 'MILKA', '12.80', 'zak', 'dey', 'zak@info-era.com', '123123'),
(15, 'Maiiasd', '1.50', 'Dem', 'Sky', 'dem@mail.com', 'hello'),
(16, 'NUT', '12.80', 'Dem', 'Sky', 'dem@mail.com', 'vai mia 4'),
(17, 'NERO', '12.80', 'Dem', 'Dey', 'dem@mail.com', 'vai mia 4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
