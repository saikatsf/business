-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2021 at 01:16 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workreq`
--

-- --------------------------------------------------------

--
-- Table structure for table `challans`
--

DROP TABLE IF EXISTS `challans`;
CREATE TABLE IF NOT EXISTS `challans` (
  `challan_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`challan_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `challans`
--

INSERT INTO `challans` (`challan_id`, `date`, `status`) VALUES
(15, '2021-05-15', 'unpaid'),
(3, '2021-05-01', 'unpaid'),
(12, '2021-05-13', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `record_id` int(50) NOT NULL AUTO_INCREMENT,
  `challan_id` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `size` int(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `classes` int(50) NOT NULL,
  `rate` int(50) NOT NULL,
  `total` int(250) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`record_id`, `challan_id`, `quantity`, `size`, `type`, `classes`, `rate`, `total`, `note`) VALUES
(23, 3, 5, 10, 'wnrf', 300, 250, 1250, 'heavy welding'),
(22, 3, 1, 8, 'sorf', 150, 50, 50, 'no note'),
(24, 3, 2, 12, 'sorf', 150, 800, 1600, 'no note'),
(28, 15, 3, 20, 'slipon', 150, 600, 1800, 'no note'),
(27, 15, 5, 20, 'sorf', 150, 500, 2500, 'no note'),
(29, 15, 4, 18, 'sorf', 150, 700, 2800, 'no note'),
(30, 15, 3, 12, 'sorf', 150, 100, 300, 'no note');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
