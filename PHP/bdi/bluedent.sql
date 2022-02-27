-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2013 at 12:35 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bluedent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('bdiadmin', 'bluedent@india');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `oid` int(6) DEFAULT NULL,
  `product` varchar(225) DEFAULT NULL,
  `quantity` int(3) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `oid` int(6) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`oid`, `address`, `phone`, `email`, `date`) VALUES
(328796, 'dsdsdesd', 323232, 'dssdsds', '2013-11-18 06:51:19'),
(621795, 'fdfdfdfd', 32232, 'dsfsfsds', '2013-11-18 06:51:49'),
(357513, 'sdsdsdsd', 322323, 'dsdsdsdsdsd', '2013-11-18 06:55:39'),
(982513, 'fdfgfsdg', 3232, 'dsdsfgfds', '2013-11-19 08:05:14'),
(451782, 'ewewewew', 3232323, 'xcdsdsdsdsd', '2013-11-19 08:12:51'),
(328430, 'no.1, 3rd st, alabama', 234567890123, 'mutant@xmen.com', '2013-11-19 09:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `oid` int(6) DEFAULT NULL,
  `product` varchar(225) DEFAULT NULL,
  `quantity` int(3) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `product`, `quantity`, `date`) VALUES
(328796, 'IONTOPHORESIS UNIT', 2, '2013-11-18 06:51:19'),
(621795, 'AXE MICRO SURGERY KIT', 3, '2013-11-18 06:51:49'),
(357513, 'IONTOPHORESIS UNIT', 2, '2013-11-18 06:55:39'),
(982513, 'IONTOPHORESIS UNIT', 2, '2013-11-19 08:05:13'),
(451782, 'DISPOSABLE VAGINAL SPECULUM', 2, '2013-11-19 08:12:51'),
(328430, 'Hidrex GS400 Iontophoresis Machine', 2, '2013-11-19 09:31:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
