-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 01:35 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it210-domaci9-markoj4494`
--

-- --------------------------------------------------------

--
-- Table structure for table `robaprodavnice`
--

CREATE TABLE `robaprodavnice` (
  `sifra` int(6) NOT NULL,
  `naziv` varchar(20) NOT NULL,
  `cena` double NOT NULL,
  `kolicina` int(11) NOT NULL,
  `proizvodjac` varchar(20) NOT NULL,
  `vrsta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `robaprodavnice`
--

INSERT INTO `robaprodavnice` (`sifra`, `naziv`, `cena`, `kolicina`, `proizvodjac`, `vrsta`) VALUES
(1, 'Žvakaća guma', 39.99, 5, 'Wrigley', 'prehrana'),
(2, 'Žvakaća guma-malina', 59.99, 10, 'Wrigley', 'prehrana'),
(3, 'Žvakaća guma-jagoda', 59.99, 12, 'Wrigley', 'prehrana'),
(4, 'Twix', 120, 36, 'Mars', 'prehrana'),
(5, 'Deterdžent za posuđe', 179.99, 50, 'Mer', 'neprehrana'),
(6, 'Deterdžent za posuđe', 199.99, 60, 'Fairy', 'prehrana'),
(7, 'Deterdžent za posuđe', 89.99, 20, 'Taš', 'neprehrana'),
(8, 'Coca-Cola 0.5L', 64.99, 300, 'Coca-Cola Company', 'prehrana'),
(9, 'Fanta 0.5L', 64.99, 303, 'Coca-Cola Company', 'prehrana'),
(10, 'Pasta za zube', 320, 404, 'Colgate', 'neprehrana');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
