-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 29, 2020 at 12:02 PM
-- Server version: 10.4.12-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dietary`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(12) NOT NULL,
  `uId` varchar(25) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `createdAt` datetime(6) DEFAULT current_timestamp(6),
  `ward` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `uId`, `lastName`, `firstName`, `middleName`, `dateOfBirth`, `createdAt`, `ward`) VALUES
(54, 'k77iunnlbxih271e95f', 'Solomon', 'Kenneth', 'Lim', '1997-07-12', '2020-02-29 19:28:04.935123', 'OB'),
(55, 'k77jcywurnxnvyu94j8', 'Huenda', 'Aldrin', 'Borja', '1997-07-13', '2020-02-29 19:42:19.333243', 'General');

-- --------------------------------------------------------

--
-- Table structure for table `patientsubsistence`
--

CREATE TABLE `patientsubsistence` (
  `id` int(12) NOT NULL,
  `pId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `breakfast` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lunch` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dinner` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patientsubsistence`
--

INSERT INTO `patientsubsistence` (`id`, `pId`, `month`, `year`, `date`, `breakfast`, `lunch`, `dinner`) VALUES
(90, 'k77jcywurnxnvyu94j8', NULL, NULL, '2020-02-29', 'on', 'on', ''),
(91, 'k77iunnlbxih271e95f', NULL, NULL, '2020-02-29', '', 'on', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(12) NOT NULL,
  `pId` varchar(25) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `day01` varchar(255) DEFAULT NULL,
  `day02` varchar(255) DEFAULT NULL,
  `day03` varchar(255) DEFAULT NULL,
  `day04` varchar(255) DEFAULT NULL,
  `day05` varchar(255) DEFAULT NULL,
  `day06` varchar(255) DEFAULT NULL,
  `day07` varchar(255) DEFAULT NULL,
  `day08` varchar(255) DEFAULT NULL,
  `day09` varchar(255) DEFAULT NULL,
  `day10` varchar(255) DEFAULT NULL,
  `day11` varchar(255) DEFAULT NULL,
  `day12` varchar(255) DEFAULT NULL,
  `day13` varchar(255) DEFAULT NULL,
  `day14` varchar(255) DEFAULT NULL,
  `day15` varchar(255) DEFAULT NULL,
  `day16` varchar(255) DEFAULT NULL,
  `day17` varchar(255) DEFAULT NULL,
  `day18` varchar(255) DEFAULT NULL,
  `day19` varchar(255) DEFAULT NULL,
  `day20` varchar(255) DEFAULT NULL,
  `day21` varchar(255) DEFAULT NULL,
  `day22` varchar(255) DEFAULT NULL,
  `day23` varchar(255) DEFAULT NULL,
  `day24` varchar(255) DEFAULT NULL,
  `day25` varchar(255) DEFAULT NULL,
  `day26` varchar(255) DEFAULT NULL,
  `day27` varchar(255) DEFAULT NULL,
  `day28` varchar(255) DEFAULT NULL,
  `day29` varchar(255) DEFAULT NULL,
  `day30` varchar(255) DEFAULT NULL,
  `day31` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `pId`, `lastName`, `firstName`, `middleName`, `ward`, `date`, `day01`, `day02`, `day03`, `day04`, `day05`, `day06`, `day07`, `day08`, `day09`, `day10`, `day11`, `day12`, `day13`, `day14`, `day15`, `day16`, `day17`, `day18`, `day19`, `day20`, `day21`, `day22`, `day23`, `day24`, `day25`, `day26`, `day27`, `day28`, `day29`, `day30`, `day31`) VALUES
(61, 'k77jcywurnxnvyu94j8', 'Huenda', 'Aldrin', 'Borja', 'General', '2020-02-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bl', NULL, NULL),
(62, 'k77iunnlbxih271e95f', 'Solomon', 'Kenneth', 'Lim', 'OB', '2020-02-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dl', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientsubsistence`
--
ALTER TABLE `patientsubsistence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `patientsubsistence`
--
ALTER TABLE `patientsubsistence`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
