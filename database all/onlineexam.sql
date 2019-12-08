-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 03:48 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlineexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `examuser`
--

CREATE TABLE IF NOT EXISTS `examuser` (
  `loginid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `marks` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examuser`
--

INSERT INTO `examuser` (`loginid`, `password`, `sname`, `fname`, `marks`) VALUES
('farhan', '123', 'Farhan Ali', 'Abdul Ghafoor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `qid` int(4) NOT NULL,
  `q` varchar(200) NOT NULL,
  `op1` varchar(50) NOT NULL,
  `op2` varchar(50) NOT NULL,
  `op3` varchar(50) NOT NULL,
  `op4` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `q`, `op1`, `op2`, `op3`, `op4`, `ans`, `subject`) VALUES
(1, 'What does HTML stand for?', 'Home Tool Markup Language', 'Hyperlinks and Text Markup Language', 'Hyper Text Markup Language', 'None of the above', 'Hyper Text Markup Language', 'HTML'),
(2, 'Who is making the Web standards?', 'The World Wide Web Consortium', 'Google', 'Yahoo', 'Microsoft', 'The World Wide Web Consortium', 'HTML'),
(3, 'Choose the correct HTML element for the largest heading:', '<head>', 'heading', 'h1', '<h6>', '<h1>', 'HTML'),
(4, 'What is the correct HTML element for inserting a line break?', '<br>', 'lb', 'break', 'None of these', '<br>', 'HTML'),
(1, ' Inside which HTML element do we put the JavaScript?', '<javascript>', 'scripting', 'script', '<js>', '<script>', 'JAVA SCRIPTING'),
(2, 'What is the correct JavaScript syntax to change the content of the HTML element below?<br><p id="demo">This is a demonstration.</p>', 'document.getElementByName("p").innerHTML = "Hello ', '#demo.innerHTML = "Hello World!";', 'document.getElementById("demo").innerHTML = "Hello', 'document.getElement("p").innerHTML = "Hello World!', 'document.getElementById("demo").innerHTML = "Hello', 'JAVA SCRIPTING');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
