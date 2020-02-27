-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2020 at 04:40 PM
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
(29, 'k74gqrdqyllhbq7p3ni', 'Lim', 'Kenneth', 'Lim', '1997-07-12', '2020-02-27 16:05:45.392913', 'Pedia/Surgery'),
(30, 'k74gqrdqyllhbq7p3ni', 'Solomon', 'Mark', 'Lim', '1997-07-12', '2020-02-27 16:05:45.392913', 'Pedia/Surgery'),
(31, 'k74gqrdqyllhbq7p3ni', 'Huenda', 'Aldrin', 'Lim', '1997-07-12', '2020-02-27 16:05:45.392913', 'Pedia/Surgery'),
(32, 'k74h2tqeebrz3g4plvo', 'te', '2', '2', '2020-02-06', '2020-02-27 16:15:08.311929', 'General'),
(33, 'k74h8zparvy5wft1xdg', '', '', '', '1997-07-12', '2020-02-27 16:19:55.985122', 'General'),
(34, 'k74hzt68j8iv4ola68', 'test', 'test', 'test', '0000-00-00', '2020-02-27 16:40:47.224760', 'General'),
(35, 'k74ibsdi6mzobuhfdmy', 'Solomon', 'Kenneth', 'Lim', '1998-07-12', '2020-02-27 16:50:06.070600', 'General'),
(37, 'k74iep53z1i0rb14pf9', '', '', '', '0000-00-00', '2020-02-27 16:52:21.846632', 'General'),
(38, 'k74ikkw1yqfnh1lwo4', '', '', '', '0000-00-00', '2020-02-27 16:56:56.275398', 'General'),
(39, 'k74im43sessem0zbnbl', 'a', '', '', '0000-00-00', '2020-02-27 16:58:07.832012', ''),
(40, 'k74it85lguk1oent8kg', 'ssssss', '', '', '0000-00-00', '2020-02-27 17:03:39.674843', 'General'),
(41, 'k74j7akxe0g0163ien', 'ss', 's', 's', '0023-12-31', '2020-02-27 17:14:36.005045', 'General'),
(42, 'k74j7tjn97mtuwhcfj8', '', 's', 's', '0123-12-31', '2020-02-27 17:15:00.584783', 'General'),
(43, 'k74j7ydln5bqio2k80h', 'qwe', 'qwe', 'ewq', '0023-12-31', '2020-02-27 17:15:06.843602', ''),
(44, 'k74j8n4xtit2bxg6r0h', 'Solomon', 'Kenneth2', 'my update', '2020-02-26', '2020-02-27 17:15:38.934596', 'General'),
(45, 'k74j8w96x34oxk6a89f', '', '', '', '0132-12-31', '2020-02-27 17:15:50.747571', 'General'),
(46, 'k74j9hwxkn8eh92i95g', '', '', '', '0023-12-31', '2020-02-27 17:16:18.819210', 'General'),
(47, 'k74uusr5vtdevk6dg3d', 'test', 'test2', 'test', '2020-02-20', '2020-02-27 22:40:48.415193', 'General'),
(48, 'k74uv2t83icnk210klz', 'Solomon', 'Kenneth', '123', '2020-02-19', '2020-02-27 22:41:01.451001', 'General'),
(49, 'k74uwm2uapc9y39d2u7', 'Solomon', 'Kenneth', '2', '2020-02-20', '2020-02-27 22:42:13.075251', 'General'),
(50, 'k74uwyul8w4fmzi8v0e', 'Solomon', 'Kenneth2', 's', '2020-02-12', '2020-02-27 22:42:29.622490', 'General');

-- --------------------------------------------------------

--
-- Table structure for table `patientSubsistence`
--

CREATE TABLE `patientSubsistence` (
  `id` int(12) NOT NULL,
  `pId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `breakfast` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lunch` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dinner` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patientSubsistence`
--

INSERT INTO `patientSubsistence` (`id`, `pId`, `date`, `breakfast`, `lunch`, `dinner`) VALUES
(1, 'k74uwyul8w4fmzi8v0e', NULL, '', '', ''),
(2, '', '2020-02-27', '', '', ''),
(3, '', '2020-02-27', 'on', '', ''),
(4, '', '2020-02-27', 'on', '', ''),
(5, '', '2020-02-27', '', '', ''),
(6, '', '2020-02-27', '', '', ''),
(7, '', '2020-02-27', '', '', ''),
(8, '', '2020-02-27', 'on', 'on', 'on'),
(9, 'k74ibsdi6mzobuhfdmy', '2020-02-27', 'on', 'on', 'on'),
(10, 'k74ibsdi6mzobuhfdmy', '2020-02-27', 'on', '', ''),
(11, 'k74ibsdi6mzobuhfdmy', '2020-02-28', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientSubsistence`
--
ALTER TABLE `patientSubsistence`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `patientSubsistence`
--
ALTER TABLE `patientSubsistence`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
