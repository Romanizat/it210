-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 09:32 PM
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
-- Database: `it210_domaci15_markoj4494`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `username`, `password`, `admin`) VALUES
(1, 'Marko', 'c28aa76990994587b0e907683792297c', 1),
(2, 'pera', 'd8795f0d07280328f80e59b1e8414c49', 0),
(3, 'dzoni', '9ea03e44749bde2eb90a6b0f13498112', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pesma`
--

CREATE TABLE `pesma` (
  `id_pesma` int(11) NOT NULL,
  `naslov` text NOT NULL,
  `autor` text NOT NULL,
  `embed` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesma`
--

INSERT INTO `pesma` (`id_pesma`, `naslov`, `autor`, `embed`) VALUES
(1, 'Ne vraćam se na staro', 'Kija Kockar feat. Ministarke', 'g9PZOnU0w4I'),
(2, 'Mi Gente', 'J Balvin, Willy William', 'wnJ6LuUFpMo'),
(3, 'Faith (Original Mix)', 'DJ Junior CNYTFK', 'B6GJF46SmbU'),
(4, 'Lane moje', 'Željko Joksimović', 'z7OvpjplJ_8'),
(5, 'Shevechvie Landebs', 'Giga Papaskiri Edit', 'GI6T-F5MQyw'),
(6, 'Twist In My Sobriety', 'Tanita Tikaram', '7s8glZ-efMg'),
(7, 'Bombe Devedesetih', 'MM, BD Rejv 1', 'a6c7lvjN0os'),
(8, 'Rave', 'Sam Paganini', 'WWuDiwr30SI'),
(9, 'PRATI ME', 'MIA & MARINA VISKOVIC', '2Iiuk94YOW0'),
(10, 'Roma - Bangkok', 'Baby K', 'GCPQ6_F-xfo'),
(11, 'Oh My Gawd', 'Mr Eazi & Major Lazer feat. Nicki Minaj & K4mo', 'yM56t64NOXY'),
(12, 'Like Glue', 'Sean Paul', 'a8XXj9McbIQ'),
(13, 'DROGU U PIĆE', 'TATULA', 'qpMJOPyB93U'),
(14, 'Faded', 'ZHU', '7373VBAN9eU'),
(15, 'MAMBA', 'DJ SHONE X FOX', 'O7uU--GEoI4'),
(16, 'Vrati me', 'Voyage x Breskvica', 'sjuvHe6yqs0'),
(17, 'Дай мне руку', 'JONY', '0gRepLIu7OE'),
(18, 'Houston\'s Groove', 'Ren Phillips & YINGYANG (UK)', 'hQz1geUd9Ic'),
(19, 'It\'s Not Right But It\'s Okay', 'Whitney Houston', '6J538b-OLRU'),
(20, 'SPEEDFIGHT', 'Inas', 'l5WZBKwgcTc'),
(21, 'No Limit', 'G-Eazy', 'PGfSaVDymjk'),
(22, 'Ljubi Se Istok i Zapad', 'Plavi Orkestar', '35nw9Su5pG0'),
(23, 'California Dreamin\'', 'The Mamas & The Papas', 'N-aK6JnyFmk'),
(24, 'Snežana', 'Kruševac Geto ', 'Ws4ypXmx5Xs'),
(25, 'Susanna', 'THE ART COMPANY', 'GB2Sf4g_PIg');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `id_sample` int(11) NOT NULL,
  `embed_kopija` text NOT NULL,
  `embed_original` text NOT NULL,
  `id_k` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`id_sample`, `embed_kopija`, `embed_original`, `id_k`) VALUES
(1, 'g9PZOnU0w4I', 'wnJ6LuUFpMo', 1),
(3, 'B6GJF46SmbU', 'z7OvpjplJ_8', 2),
(4, 'GI6T-F5MQyw', '7s8glZ-efMg', 1),
(5, 'a6c7lvjN0os', 'WWuDiwr30SI', 1),
(6, '2Iiuk94YOW0', 'GCPQ6_F-xfo', 1),
(7, 'yM56t64NOXY', 'a8XXj9McbIQ', 1),
(8, 'qpMJOPyB93U', '7373VBAN9eU', 3),
(9, 'O7uU--GEoI4', 'wnJ6LuUFpMo', 3),
(10, 'sjuvHe6yqs0', '0gRepLIu7OE', 3),
(11, 'hQz1geUd9Ic', '6J538b-OLRU', 1),
(12, 'l5WZBKwgcTc', 'PGfSaVDymjk', 1),
(13, '35nw9Su5pG0', 'N-aK6JnyFmk', 1),
(14, 'Ws4ypXmx5Xs', 'GB2Sf4g_PIg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- Indexes for table `pesma`
--
ALTER TABLE `pesma`
  ADD PRIMARY KEY (`id_pesma`),
  ADD UNIQUE KEY `embed` (`embed`) USING HASH;

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`id_sample`),
  ADD UNIQUE KEY `embed_kopija` (`embed_kopija`,`embed_original`) USING HASH,
  ADD KEY `id_k` (`id_k`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesma`
--
ALTER TABLE `pesma`
  MODIFY `id_pesma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `id_sample` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sample`
--
ALTER TABLE `sample`
  ADD CONSTRAINT `sample_ibfk_1` FOREIGN KEY (`id_k`) REFERENCES `korisnik` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
