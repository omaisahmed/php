-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 08:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(12) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `firstname`, `middlename`, `lastname`) VALUES
(1, 'admin', '123', 'Private', '', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sno` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `createdate` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sno`, `title`, `description`, `createdby`, `createdate`, `status`) VALUES
(1, 'test 4', 'test 4', 'Mohsin Ishtiaq', '2019-09-11', 'Not Approved'),
(2, 'Medical 3rd Year', 'Medical 3rd Year', 'Mohsin Ishtiaq', '09-11-2019', 'Not Approved'),
(4, 'test 6 ', 'test 6', 'Mohsin Ishtiaq', '2019-09-11', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `sno` int(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `periodno` int(50) NOT NULL,
  `periodtime` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`sno`, `day`, `class`, `subject`, `teacher`, `periodno`, `periodtime`, `description`) VALUES
(1, 'Thursday', '1st year A2', 'Chemistry', 'Sir Ali', 6, '00:12', 'sdsd'),
(2, 'Tuesday', '1st year B1', 'English', 'Dr. Gohar Alam', 5, '02:12', 'descrp'),
(3, 'Friday', '1st year B1', 'Biology', 'Sir Ali', 6, '00:12', 'description'),
(4, 'Wednesday', '1st year B1', 'Biology', 'Miss Nadia', 6, '00:12', 'description'),
(5, 'Thursday', '1st year B1', 'Biology', 'Miss Nadia', 5, '12:31', 'description'),
(6, 'Sunday', '1st year B2', 'Urdu', 'Sir Ali', 4, '00:23', 'description'),
(7, 'Thursday', '1st year B2', 'Biology', 'Dr. Qureshi', 6, '11:21', 'description'),
(8, 'Friday', '1st year A1', 'Biology', 'Dr. Mushtaq', 6, '00:12', 'zzzzz'),
(9, 'Saturday', '1st year A1', 'Physics', 'Miss Nadia', 4, '00:12', 'description');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
