-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 07:15 AM
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
-- Database: `registration-form`
--

-- --------------------------------------------------------

--
-- Table structure for table `myform`
--

CREATE TABLE `myform` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `dateofbirth` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirmpassword` varchar(30) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `mobilenumber` varchar(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(500) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postalcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myform`
--

INSERT INTO `myform` (`firstname`, `lastname`, `dateofbirth`, `email`, `password`, `confirmpassword`, `cnic`, `mobilenumber`, `gender`, `address`, `country`, `city`, `postalcode`) VALUES
('omais', 'ahmed', '1996-09-19', 'decentomais90@gmail.com', '03152230228', '03152230228', '4220145421371', '03101095316', 'male', 'MC-1017 Green Town Shah Faisal Colony Karachi.', 'Pakistan', 'Karachi', '75230'),
('', '', '', '', '', '', '', '', '', '', '----None----', '----None----', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
