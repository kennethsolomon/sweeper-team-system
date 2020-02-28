-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2020 at 02:18 PM
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
(51, 'k75j52f63675bsbjxsh', 'Solomon', 'Kenneth', 'Lim', '1997-07-12', '2020-02-28 10:00:38.292321', 'General');

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
  `dinner` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day16` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day17` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day18` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day19` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day20` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day21` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day22` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day23` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day24` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day25` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day26` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day27` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day28` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day29` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day30` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day31` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patientsubsistence`
--

INSERT INTO `patientsubsistence` (`id`, `pId`, `month`, `year`, `date`, `breakfast`, `lunch`, `dinner`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`, `day7`, `day8`, `day9`, `day10`, `day11`, `day12`, `day13`, `day14`, `day15`, `day16`, `day17`, `day18`, `day19`, `day20`, `day21`, `day22`, `day23`, `day24`, `day25`, `day26`, `day27`, `day28`, `day29`, `day30`, `day31`) VALUES
(31, 'k75j52f63675bsbjxsh', NULL, NULL, '2020-02-28', '', 'on', '', 'bld', 'b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'l', NULL, NULL, NULL);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `patientsubsistence`
--
ALTER TABLE `patientsubsistence`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
