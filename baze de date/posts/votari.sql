-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 16, 2018 at 03:18 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posts`
--

-- --------------------------------------------------------

--
-- Table structure for table `votari`
--

DROP TABLE IF EXISTS `votari`;
CREATE TABLE IF NOT EXISTS `votari` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `idpost` int(255) DEFAULT NULL,
  `cinedalike` varchar(255) DEFAULT NULL,
  `sus` int(255) DEFAULT NULL,
  `jos` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votari`
--

INSERT INTO `votari` (`id`, `idpost`, `cinedalike`, `sus`, `jos`) VALUES
(33, 2, 'test', 1, 0),
(82, 3, 'test', 1, 0),
(81, 2, 'Ana', 1, 0),
(84, 4, 'test', 1, 0),
(85, 1, 'test', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
