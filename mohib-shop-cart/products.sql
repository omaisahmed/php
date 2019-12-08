-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 04:10 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoppingsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(5) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pdescription` varchar(50) NOT NULL,
  `pqty` int(50) NOT NULL,
  `pprice` int(50) NOT NULL,
  `pimage` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pdescription`, `pqty`, `pprice`, `pimage`) VALUES
(1001, 'Samsung Mobile', 'abc', 100, 7000, 'images/1.jpg'),
(1002, 'Apple Mobile', 'abc', 100, 9000, 'images/2.jpg'),
(1003, 'Huwei Mobile', 'abc', 100, 9500, 'images/3.jpg'),
(1004, 'Lenovo Mobile', 'abc', 100, 9000, 'images/4.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
