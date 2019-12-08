-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 07:14 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` varchar(50) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `pstock` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `description`, `image`, `pstock`, `category`, `price`) VALUES
('1', 'Bata Shoes', 'xyz', '1.jpg', '200', 'Shoes', 500),
('2', 'Service Shoes', 'xyz', '2.jpg', '200', 'shoes', 600),
('3', 'English Boot', 'xyz', '3.jpg', '200', 'Shoes', 700),
('4', 'Sanaullah Boot', 'xyz', '4.jpg', '200', 'shoes', 800),
('5', 'Aerosoft Shoes', 'xyz', '5.jpg', '100', 'Shoes', 900),
('6', 'Panthar Shoes', 'xyz', '6.jpg', '0', 'shoes', 1000),
('7', 'Watch', 'Xyz', '7.jpg', '200', 'Watches', 1200),
('8', 'Delicious Pizza', 'xyz', '8.png', '200', 'Pizza', 1300),
('9', 'Pizza Max', 'xyz', '9.png', '200', 'Pizza', 1400);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
