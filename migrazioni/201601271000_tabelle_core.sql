-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2016 at 12:52 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mvchocolates`
--

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

CREATE TABLE IF NOT EXISTS `clienti` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cognome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `indirizzo` varchar(100) NOT NULL,
  `citta` varchar(100) NOT NULL,
  `cap` varchar(5) NOT NULL,
  `provincia` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordini`
--

CREATE TABLE IF NOT EXISTS `ordini` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `data` date NOT NULL,
  `totale` int(11) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_clienteid` (`cliente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordini_dettagli`
--

CREATE TABLE IF NOT EXISTS `ordini_dettagli` (
  `id` int(11) NOT NULL,
  `ordine_id` int(11) NOT NULL,
  `codice_prodotto` varchar(20) NOT NULL,
  `prezzo` int(11) NOT NULL,
  `quantita` int(11) NOT NULL,
  `totale` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_ordine` (`ordine_id`),
  KEY `idx_prodottocodice` (`codice_prodotto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prodotti`
--

CREATE TABLE IF NOT EXISTS `prodotti` (
  `codice` varchar(20) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `descrizione` text,
  `ingredienti` text NOT NULL,
  `conservazione` text NOT NULL,
  `scadenza` varchar(100) NOT NULL,
  `dimensioni` varchar(100) NOT NULL,
  `peso_netto` int(11) NOT NULL,
  `prezzo` int(11) NOT NULL,
  `url_immagine` varchar(200) NOT NULL,
  PRIMARY KEY (`codice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ordini`
--
ALTER TABLE `ordini`
  ADD CONSTRAINT `fk_ordini_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `clienti` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ordini_dettagli`
--
ALTER TABLE `ordini_dettagli`
  ADD CONSTRAINT `fk_ordinidettagli_ordine` FOREIGN KEY (`ordine_id`) REFERENCES `ordini` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ordinidettagli_prodotto` FOREIGN KEY (`codice_prodotto`) REFERENCES `prodotti` (`codice`) ON DELETE NO ACTION ON UPDATE NO ACTION;
