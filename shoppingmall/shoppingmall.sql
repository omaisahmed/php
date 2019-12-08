-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 03:57 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoppingmall`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(4) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pdescription` varchar(500) NOT NULL,
  `pqty` int(4) NOT NULL,
  `pprice` int(4) NOT NULL,
  `pimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pdescription`, `pqty`, `pprice`, `pimage`) VALUES
(1, 'Mobile 1', 'xyz', 100, 5000, 'images/1.jpg'),
(2, 'Mobile 2', 'xyz', 100, 6000, 'images/2.jpg'),
(3, 'Mobile 3', 'xyz', 100, 7000, 'images/3.jpg'),
(4, 'Mobile 4', 'xyz', 100, 8000, 'images/4.jpg'),
(5, 'Mobile 5', 'xyz', 100, 8000, 'images/5.jpg'),
(6, 'Mobile 6', 'Xyz', 100, 9000, 'images/6.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
