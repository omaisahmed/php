-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 07:13 AM
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
-- Database: `csc_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Middlename` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Score` int(11) NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  `Imagename` varchar(255) NOT NULL,
  `Imagepath` varchar(255) NOT NULL,
  `Imagetype` varchar(255) NOT NULL,
  `Deleted` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`ID`, `Firstname`, `Lastname`, `Middlename`, `Address`, `Gender`, `Age`, `Score`, `Remarks`, `Imagename`, `Imagepath`, `Imagetype`, `Deleted`) VALUES
(58, 'Janine', 'Antenor', 'Monterey', 'Pili, Mogpog', 'FEMALE', 20, 19, 'PASSED', 'default.png', 'uploaded_pic/default.png', 'PNG', 0),
(59, 'Keylyn', 'Falsceso', 'Narvas', 'Masiga, Gasan', 'FEMALE', 29, 17, 'PASSED', 'default.png', 'uploaded_pic/default.png', 'PNG', 1),
(60, 'Glenda', 'Soberano', 'Madrigal', 'Sta. Barbara, San Mateo Rizal', 'FEMALE', 34, 2, 'FAILED', 'default.png', 'uploaded_pic/default.png', 'PNG', 0),
(61, 'John Wilson', 'Marapya', 'Macalintal', 'Lipa, Batangas', 'MALE', 21, 2, 'FAILED', 'default.png', 'uploaded_pic/default.png', 'PNG', 0),
(62, 'Angelica Rose', 'Naling', 'Quinto', 'Pawa, Boac', 'FEMALE', 20, 17, 'PASSED', 'default.png', 'uploaded_pic/default.png', 'PNG', 0),
(64, 'Rertertre', 'Reyeryreet', 'Reytry', 'Ertyery', 'FEMALE', 18, 8, 'FAILED', '19.jpg', 'uploaded_pic/19.jpg', 'image/jpeg', 0),
(65, 'tyrtyet', 'ertyry', 'reyrt', 'rrrrrrrrrrrrrrrr', 'MALE', 21, 8, 'FAILED', 'ayala6.jpg', 'uploaded_pic/ayala6.jpg', 'image/jpeg', 0),
(66, 'gfdfgfg', 'dfgdfg', 'dgdfgfgdf', 'dfgdfgfg', 'FEMALE', 24, 8, 'FAILED', 'default.png', 'uploaded_pic/default.png', 'PNG', 0),
(67, 'John Matthews', 'Mascarenas', 'Cruzado', 'Balimbing,Boac', 'MALE', 21, 18, 'PASSED', 'default.png', 'uploaded_pic/default.png', 'PNG', 0),
(68, 'erteerte', 'rtet', 'ete', 'erte', 'MALE', 23, 1, 'FAILED', 'default.png', 'uploaded_pic/default.png', 'PNG', 0),
(69, 'rwer', 'ewr', 'wer', 'erwr', 'FEMALE', 23, 0, 'FAILED', 'default.png', 'uploaded_pic/default.png', 'PNG', 0),
(70, 'John Matthews', 'Mascarenas', 'Cruzado', 'Balimbing, Boac', 'MALE', 21, 15, 'PASSED', 'ACER - matty.png', 'uploaded_pic/ACER - matty.png', 'image/png', 0),
(71, 'John Matthew', 'Mascarenas', 'Cruzado', 'Balimbing', 'MALE', 19, 3, 'FAILED', 'matthews mascarenas.jpg', 'uploaded_pic/matthews mascarenas.jpg', 'image/jpeg', 0),
(72, 'Janine', 'Antenor', 'Monterey', 'Pili', 'FEMALE', 19, 6, 'FAILED', 'default.png', 'uploaded_pic/default.png', 'PNG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`) VALUES
(2, 'matthew', 'matthew');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
