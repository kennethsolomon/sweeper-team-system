-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 10:22 AM
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
  `dateOfBirth` date NOT NULL,
  `date` date DEFAULT NULL,
  `createdAt` datetime(6) DEFAULT current_timestamp(6),
  `ward` varchar(255) NOT NULL,
  `breakfast` varchar(255) NOT NULL,
  `lunch` varchar(255) NOT NULL,
  `dinner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `uId`, `lastName`, `firstName`, `middleName`, `dateOfBirth`, `date`, `createdAt`, `ward`, `breakfast`, `lunch`, `dinner`) VALUES
(29, 'k74gqrdqyllhbq7p3ni', 'Lim', 'Kenneth', 'Lim', '1997-07-12', NULL, '2020-02-27 16:05:45.392913', 'Pedia/Surgery', '', '', ''),
(30, 'k74gqrdqyllhbq7p3ni', 'Solomon', 'Mark', 'Lim', '1997-07-12', NULL, '2020-02-27 16:05:45.392913', 'Pedia/Surgery', '', '', ''),
(31, 'k74gqrdqyllhbq7p3ni', 'Huenda', 'Aldrin', 'Lim', '1997-07-12', NULL, '2020-02-27 16:05:45.392913', 'Pedia/Surgery', '', '', ''),
(32, 'k74h2tqeebrz3g4plvo', 'te', '', '', '0000-00-00', NULL, '2020-02-27 16:15:08.311929', 'General', '', '', ''),
(33, 'k74h8zparvy5wft1xdg', 'Solomon', 'Kenneth', 'Lim', '1997-07-12', NULL, '2020-02-27 16:19:55.985122', 'OB', '', '', ''),
(34, 'k74hzt68j8iv4ola68', 'test', 'test', 'test', '0000-00-00', NULL, '2020-02-27 16:40:47.224760', 'General', '', '', ''),
(35, 'k74ibsdi6mzobuhfdmy', 'Solomon', 'Kenneth', 'Lim', '1998-07-12', NULL, '2020-02-27 16:50:06.070600', 'General', '', '', ''),
(37, 'k74iep53z1i0rb14pf9', '', '', '', '0000-00-00', NULL, '2020-02-27 16:52:21.846632', 'General', '', '', ''),
(38, 'k74ikkw1yqfnh1lwo4', 's', '', '', '0000-00-00', NULL, '2020-02-27 16:56:56.275398', 'General', '', '', ''),
(39, 'k74im43sessem0zbnbl', 'a', '', '', '0000-00-00', NULL, '2020-02-27 16:58:07.832012', '', '', '', ''),
(40, 'k74it85lguk1oent8kg', 'ssssss', '', '', '0000-00-00', NULL, '2020-02-27 17:03:39.674843', 'General', '', '', ''),
(41, 'k74j7akxe0g0163ien', 'ss', 's', 's', '0023-12-31', NULL, '2020-02-27 17:14:36.005045', 'General', '', '', ''),
(42, 'k74j7tjn97mtuwhcfj8', 's', 's', 's', '0123-12-31', NULL, '2020-02-27 17:15:00.584783', 'General', '', '', ''),
(43, 'k74j7ydln5bqio2k80h', 'qwe', 'qwe', 'ewq', '0023-12-31', NULL, '2020-02-27 17:15:06.843602', '', '', '', ''),
(44, 'k74j8n4xtit2bxg6r0h', 's', 's', 's', '0023-12-31', NULL, '2020-02-27 17:15:38.934596', 'General', '', '', ''),
(45, 'k74j8w96x34oxk6a89f', '123', '123', '123', '0132-12-31', NULL, '2020-02-27 17:15:50.747571', '', '', '', ''),
(46, 'k74j9hwxkn8eh92i95g', 'test', 'test', 'test', '0023-12-31', NULL, '2020-02-27 17:16:18.819210', 'OB', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
