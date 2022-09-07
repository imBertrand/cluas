-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2022 at 09:38 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cluas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staffId` varchar(11) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`staffId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `firstName`, `LastName`, `username`, `password`) VALUES
('CLUAS001', 'Onen', 'Sensy', 'sensy', 'sensy'),
('CLUAS002', 'Manzi', 'Hilbert', 'manzi', 'manzi'),
('CLUAS003', 'Apollo', 'malomo', 'malz', 'malz'),
('CLUAS004', 'Bertrand', 'T', 'bert', 'bert');

-- --------------------------------------------------------

--
-- Table structure for table `useLog`
--

DROP TABLE IF EXISTS `useLog`;
CREATE TABLE IF NOT EXISTS `useLog` (
  `clientId` varchar(20) NOT NULL,
  `clientName` varchar(25) NOT NULL,
  `time` time NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `duration` varchar(10) NOT NULL,
  PRIMARY KEY (`clientId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useLog`
--

INSERT INTO `useLog` (`clientId`, `clientName`, `time`, `purpose`, `duration`) VALUES
('', '', '20:59:07', '', ''),
('1', 'Surundu', '16:55:36', 'Research', '2 hours'),
('Log001', 'Opio', '17:07:36', 'Experiment', '4 hours'),
('Log002', 'Okuku', '17:20:37', 'Research', '1 hour');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;