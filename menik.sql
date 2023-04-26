-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 06:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menik`
--

-- --------------------------------------------------------

--
-- Table structure for table `uporabniki`
--

CREATE TABLE `uporabniki` (
  `id` int(11) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `priimek` varchar(30) NOT NULL,
  `gmail` varchar(50) DEFAULT NULL,
  `telefon` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uporabniki`
--

INSERT INTO `uporabniki` (`id`, `ime`, `priimek`, `gmail`, `telefon`) VALUES
(1, 'Tinkara', 'Čelesnik', 'tinkara.celesnik1@gmail.com', '123 456 7'),
(2, 'Alojz', 'Novak', 'alojz.novak@gmail.com', '124 467 3'),
(3, 'Milena', 'Lovan', 'milenalovan3k@gmail.com', '124 467 3'),
(4, 'Denis', 'Benis', 'benis,denis@gmail.com', '124 467 3'),
(5, 'Alojz', 'Bregar', 'alojz.bregark@gmail.com', '124 467 3'),
(6, 'Luka', 'Novak', 'lukanovak123@gmail.com', '124 467 3'),
(7, 'Tinkara', 'Kovač', 'tinkaraak@gmail.com', '124 467 3'),
(8, 'Anton', 'Podbevšek', 'antonpodbevsek@siol.net', '253564747'),
(9, 'Bina', 'Kobila', 'binakobila@gmail.com', '456346363'),
(10, 'Monika', 'Čelesnik', 'monikac123@gmail.com', '134235254'),
(11, 'Lojze', 'Gašperšič', 'gaspersic555@gmail.com', '123456789'),
(12, 'Denisa', 'Poje', 'pojedenisa@siol.net', '123675424'),
(13, 'Denis', 'Čelesnik', 'denis.celesnik@gmail.com', '123456785'),
(14, 'Anja', 'Cvetnik', '', '165278557'),
(15, 'Ina', 'Cvetnik', 'inacvetnik@siol.net', '453456627'),
(16, 'Ana', 'Bojec', 'ancikaboj@gmail.com', '345678934'),
(17, 'Klemen', 'Novak', 'klemennovak@gmail.com', '456346363'),
(18, 'Antea', 'Čirnik', '', '153656858'),
(19, 'Anton', 'Petrič', 'antonpetric<@gmail.com', '124252262'),
(20, 'Bina', 'Cvetnik', 'binacvetnik@gmail.com', '345678934'),
(21, 'Mia', 'Podbevšek', 'miapodbevsek@siol.net', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uporabniki`
--
ALTER TABLE `uporabniki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uporabniki`
--
ALTER TABLE `uporabniki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
