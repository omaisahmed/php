-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2019 at 04:24 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `examstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `popularproduct`
--

CREATE TABLE IF NOT EXISTS `popularproduct` (
  `pcode` varchar(20) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `popularproduct`
--

INSERT INTO `popularproduct` (`pcode`, `id`) VALUES
('C-0001', 1),
('C-0002', 2),
('C-0003', 3),
('C-0004', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pcode` varchar(10) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pdescription` varchar(200) NOT NULL,
  `pstock` int(5) NOT NULL,
  `pprice` int(5) NOT NULL,
  `pcategory` varchar(20) NOT NULL,
  `pimage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pcode`, `pname`, `pdescription`, `pstock`, `pprice`, `pcategory`, `pimage`) VALUES
('C-0001', 'Casual Shoes 1', 'xyz', 200, 1200, 'Casual Shoes', 'imgs/catimgs/1.jpg'),
('C-0002', 'Casual Shoes 2', 'xyz', 200, 1200, 'Casual Shoes', 'imgs/catimgs/2.jpg'),
('C-0003', 'Casual Shoes 3', 'xyz', 200, 1200, 'Casual Shoes', 'imgs/catimgs/3.jpg'),
('C-0004', 'Casual Shoes 4', 'xyz', 200, 1200, 'Casual Shoes', 'imgs/catimgs/5.jpg'),
('C-0005', 'Casual Shoes 5', 'xyz', 200, 1200, 'Casual Shoes', 'imgs/catimgs/5.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
