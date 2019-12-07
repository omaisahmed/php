-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 02:41 PM
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
-- Database: `rainbow`
--

-- --------------------------------------------------------

--
-- Table structure for table `customertable`
--

CREATE TABLE `customertable` (
  `uid` int(4) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `upassword` varchar(100) NOT NULL,
  `unumber` varchar(13) NOT NULL,
  `uaddress` varchar(100) NOT NULL,
  `upostcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customertable`
--

INSERT INTO `customertable` (`uid`, `uname`, `uemail`, `upassword`, `unumber`, `uaddress`, `upostcode`) VALUES
(29, 'anas', 'anas@eds.jij', 'jujujjujuju', '12365241', 'pakistan', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pcode` int(15) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pdescription` varchar(2000) NOT NULL,
  `pimages` varchar(100) NOT NULL,
  `pprice` int(6) NOT NULL,
  `pstock` int(6) NOT NULL,
  `pcatagoey` varchar(100) NOT NULL,
  `pdrand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pcode`, `pname`, `pdescription`, `pimages`, `pprice`, `pstock`, `pcatagoey`, `pdrand`) VALUES
(1, 'Pahchan Mart', 'xyz', 'img\\men\\1.jpg', 2500, 20, 'Men Clothes', 'Men Facation'),
(2, 'Shalwar kameez', 'xyz', 'img\\men\\2.jpg', 7000, 10, 'Men Clothes', 'Men Faction '),
(3, 'Waistcoat', 'xyz', 'img\\men\\3.jpg', 5000, 15, 'Men Clothes', 'Men Faction '),
(4, 'Shalwar kameez', 'xyz', 'img\\men\\4.jpg', 4590, 15, 'Men Clothes', 'Men Faction '),
(5, 'Sherwani', 'xyz', 'img\\men\\5.jpg', 1599, 20, 'Men Clothes', 'Men Faction '),
(6, 'Waistcoat', 'xyz', 'img\\men\\9.jpg', 2599, 30, 'Men Clothes', 'Men Faction '),
(7, 'Urban Sole Casual Shoes', 'xyz', 'img\\men\\s1.jpg', 2999, 15, 'Men Shoes', 'Men Facation'),
(8, 'white stylish casual shoes for men', 'xyz', 'img\\men\\s2.jpg', 2500, 10, 'Men Shoes', 'Men Faction '),
(9, 'Stylish Nagra Brown Color for Man', 'xyz', 'img\\men\\s3.jpg', 3999, 15, 'Men Shoes', 'Men Faction '),
(10, 'Black Rubber Moccasins For Men', 'xyz', 'img\\men\\s4.jpg', 199, 40, 'Men Shoes', 'Men Faction '),
(11, 'Stylish Gucci Mens Fancy Shoes', 'xyz', 'img\\men\\s5.jpg', 7599, 20, 'Men Shoes', 'Men Faction '),
(12, 'Mardan Shoes Buy One Black', 'xyz', 'img\\men\\s6.jpg', 1999, 30, 'Men Shoes', 'Men Faction '),
(13, 'Manjolica Floret Unstitched Single Shirt Grey Lawn ', 'xyz', 'img\\women\\wo1.jpg', 990, 50, 'Women Clothes', 'Women Facation'),
(14, 'New Stylish Chiffon Embroided Suit For Women (Unstitched)', 'xyz', 'img\\women\\wo2.jpg', 4199, 40, 'Women Clothes', 'Women Faction '),
(15, 'Daraz Select Red 3PC Printed Unstitched Lawn', 'xyz', 'img\\women\\wo3.jpg', 2299, 15, 'Women Clothes', 'Women Faction  '),
(16, 'E Passion Heavy Embrodered Chiffon Bridal Maxy', 'xyz', 'img\\women\\wo4.jpg', 24999, 5, 'Women Clothes', 'Women Faction '),
(17, 'Designer Embroidered Chiffon Bridal Dress ', 'xyz', 'img\\women\\wo5.jpg', 9999, 8, 'Women Clothes', 'Women Faction '),
(18, 'Pakistani Bridal Dress 2018 - 2019 Peach', 'xyz', 'img\\women\\wo6.jpg', 7599, 15, 'Women Clothes', 'Women Faction '),
(19, '4 Inches - Blue Velvet Heel For Her - Blue Colour', 'xyz', 'img\\women\\ws1.jpg', 1600, 50, 'Women Shoes', 'Women Facation'),
(20, 'Fashion Formal Leena Red KN-W-122', 'xyz', 'img\\women\\ws2.jpg', 599, 40, 'Women Shoes', 'Women Faction '),
(21, 'Leather Hand Made Pink Color Multani Khusa For Women', 'xyz', 'img\\women\\ws3.jpg', 1299, 15, 'Women Shoes', 'Women Faction  '),
(22, 'Fashion Summer Women Slip On Bow Jelly Flats Sandals Beach Clear ', 'xyz', 'img\\women\\ws4.jpg', 1498, 15, 'Women Shoes', 'Women Faction '),
(23, '3\'\'/8cm Ladies Heel Ivory Lace Crystal Pearls Wedding Bridal Shoes ', 'xyz', 'img\\women\\ws5.jpg', 5155, 12, 'Women Shoes', 'Women Faction '),
(24, '\r\nWomen \"Pearl\" Closed Pointed Toe Patent Suede Upper Closed Heel Cu', 'xyz', 'img\\women\\ws6.jpg', 3899, 15, 'Women Shoes', 'Women Faction '),
(25, 'LED Sports Watch - Black - for Men Watch', 'xyz', 'img\\watches\\watch1.jpg', 99, 50, 'Watches', 'Men / women Facation'),
(26, 'Kenneth Cole 15095003 - Stainless Steel Wrist Watch', 'xyz', 'img\\watches\\watch2.jpg', 25000, 10, 'Watches', 'Men / women Facation'),
(27, 'Rado Integral Mother of Pearl Watch for Men', 'xyz', 'img\\watches\\watch3.jpg', 473000, 15, 'Watches', 'Men / women Facation'),
(28, '\r\nBrown Leather Double Bracelet Love Watch For Girls', 'xyz', 'img\\watches\\watch4.jpg', 299, 15, 'Watches', 'Men / women Facation'),
(29, 'Stylish Brecelet Watch For Women/Girls', 'xyz', 'img\\watches\\watch5.jpg', 399, 20, 'Watches', 'Men / women Facation'),
(30, 'Buy FAP Analog Paris Design Pink For Women/Girls', 'xyz', 'img\\watches\\watch6.jpg', 1989, 30, 'Watches', 'Men / women Facation'),
(31, 'Huawei Y7 Prime 2019 - 6.26\" -3GB - 32GB -Blue and Black', 'xyz', 'img\\mobile\\mobile1.jpg', 27998, 10, 'Mobile', 'Men / women Facation'),
(32, 'Poplikdfr For Samsung A7 2018 3D Coloured Painted Leather Protective ', 'xyz', 'img\\mobile\\mobile2.jpg', 710, 15, 'Mobile', 'Men / women Facation'),
(33, 'Original Phone Nokia 216 White and 216 Dual Sim - Black / White', 'xyz', 'img\\mobile\\mobile3.jpg', 7000, 15, 'Mobile', 'Men / women Facation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customertable`
--
ALTER TABLE `customertable`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customertable`
--
ALTER TABLE `customertable`
  MODIFY `uid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pcode` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
