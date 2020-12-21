-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 16, 2018 at 03:08 PM
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
-- Table structure for table `posturi`
--

DROP TABLE IF EXISTS `posturi`;
CREATE TABLE IF NOT EXISTS `posturi` (
  `username` varchar(35) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titlu` char(255) DEFAULT NULL,
  `text` varchar(1500) DEFAULT NULL,
  `profil` int(3) DEFAULT NULL,
  `ora` time(6) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `likeuri` int(255) DEFAULT '0',
  `dislikeuri` int(255) DEFAULT '0',
  `comentarii` int(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posturi`
--

INSERT INTO `posturi` (`username`, `id`, `titlu`, `text`, `profil`, `ora`, `data`, `likeuri`, `dislikeuri`, `comentarii`) VALUES
('Ana', 1, 'Succes', '\"All your ideas may be solid or even good .. But you have to Actually EXECUTE on them for them to matter.â€ â€“ Gary Vaynerchuk', 1, '18:10:00.000000', '2018-01-21', 1, 0, 0),
('Ana', 2, 'Succes', '\"All your ideas may be solid or even good .. But you have to Actually EXECUTE on them for them to matter.â€ â€“ Gary Vaynerchuk', 1, '18:10:00.000000', '2018-01-21', 2, 0, 0),
('test', 3, 'al doilea post', 'test', 1, '08:13:18.000000', '2018-01-10', 1, 0, 1),
('test', 4, 'primul post', '', 1, '08:12:50.000000', '2018-01-21', 1, 0, 0),
('test', 5, 'testez ceva', 'blablablablablablablablablablablablabla blablablablablablablablablablablablabla blablablablablablablablablablablablabla blablablablablablablablablablablablabla blablablablablablablablablablablablabla blablablablablablablablablablablablabla blablablablablablablablablablablablabla blablablablablablablablablablablablabla blablablablablablablablablablablablabla blablabla', 1, '05:47:38.000000', '2018-01-23', 0, 0, 3),
('test', 6, 'titlu', '', 1, '06:33:07.000000', '2018-01-23', 0, 0, 1),
('maria', 13, 'test cont maria', '', 1, '04:13:09.000000', '2018-05-09', 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
