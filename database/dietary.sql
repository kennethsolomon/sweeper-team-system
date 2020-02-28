-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 10:01 AM
-- Server version: 10.4.11-MariaDB
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
  `month` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `breakfast` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lunch` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dinner` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `1` date DEFAULT NULL,
  `2` date DEFAULT NULL,
  `3` date DEFAULT NULL,
  `4` date DEFAULT NULL,
  `5` date DEFAULT NULL,
  `6` date DEFAULT NULL,
  `7` date DEFAULT NULL,
  `8` date DEFAULT NULL,
  `9` date DEFAULT NULL,
  `10` date DEFAULT NULL,
  `11` date DEFAULT NULL,
  `12` date DEFAULT NULL,
  `13` date DEFAULT NULL,
  `14` date DEFAULT NULL,
  `15` date DEFAULT NULL,
  `16` date DEFAULT NULL,
  `17` date DEFAULT NULL,
  `18` date DEFAULT NULL,
  `19` date DEFAULT NULL,
  `20` date DEFAULT NULL,
  `21` date DEFAULT NULL,
  `22` date DEFAULT NULL,
  `23` date DEFAULT NULL,
  `24` date DEFAULT NULL,
  `25` date DEFAULT NULL,
  `26` date DEFAULT NULL,
  `27` date DEFAULT NULL,
  `28` date DEFAULT NULL,
  `29` date DEFAULT NULL,
  `30` date DEFAULT NULL,
  `31` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patientsubsistence`
--

INSERT INTO `patientsubsistence` (`id`, `pId`, `month`, `year`, `date`, `breakfast`, `lunch`, `dinner`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`) VALUES
(21, 'k75j52f63675bsbjxsh', '', '', '2020-02-28', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'k75j52f63675bsbjxsh', '', '', '2020-02-29', 'on', 'on', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'k75j52f63675bsbjxsh', '', '', '2020-02-27', '', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'k75j52f63675bsbjxsh', '', '', '2020-03-28', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'k75j52f63675bsbjxsh', '', '', '2020-01-28', 'on', 'on', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
