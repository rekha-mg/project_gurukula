-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 05:23 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab1`
--

CREATE TABLE `tab1` (
  `id` int(11) NOT NULL,
  `img_name` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab1`
--

INSERT INTO `tab1` (`id`, `img_name`, `url`, `status`) VALUES
(97, 'logo4.jpg', 'http://localhost/e_class_php_project/WebSite/images/logo4.jpg', 1),
(98, 'logo2.jpg', 'http://localhost/e_class_php_project/WebSite/images/logo2.jpg', 1),
(99, 'logo3.jpg', 'http://localhost/e_class_php_project/WebSite/images/logo3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(50) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Email_id`, `Password`) VALUES
('Divya', 'Divya@123.com', 'Divya123'),
('Kavitha', 'Kavitha@123.com', 'kavi123'),
('Nancy', 'Nancy@123.com', 'nancy123'),
('Rekha', 'Rekha@123.com', 'rekha123'),
('rekha', 'rekhamg@123.com', 'rekha123'),
('Roopa', 'Roopa@123.com', 'roopa123'),
('sharukhan', 'sharukhan@123.com', 'khan123'),
('Sunny', 'sunny@123.com', 'sunny123'),
('Thoshit', 'thoshith@yahoo.com', 'soch123');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `v_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`v_id`, `name`, `email_id`, `message`, `status`) VALUES
(32, 'Harish ', 'vaiharish@gmail.com', 'hello ...\r\n', 1),
(33, 'rekha', 'rekhamg12@gmail.com', 'jsdksl ssls', 1),
(34, 'Ramya', 'ramya.mg@gmail.com', 'hi .. its a good n  informative..', 1),
(35, 'Harish ', 'vaiharish@gmail.com', 'hi dkdkd', 1),
(36, 'rekha', 'rekhamg12@gmail.com', 'hello..', 1),
(37, 'Sunny', 'rekhamg12@gmail.com', 'hi...', 1),
(38, 'Harish ', 'vaiharish@gmail.com', 'hi..', 1),
(39, 'Harish Y Acharya', 'vaiharish@gmail.com', 'hi ..... ', 1),
(40, 'Rekha MYS', 'rekhamg12@gmail.com', 'hi...\r\n', 1),
(41, 'Ramya lakshmi', 'ramya.mg@gmail.com', 'hi...', 1),
(42, 'rekha', 'rekhamg12@gmail.com', 'sjdksdksdf ', 1),
(43, 'Ramya', 'ramya.mg@gmail.com', 'hello friday... ', 1),
(44, 'Rekha MYS', 'rekhamg12@gmail.com', 'hello hru', 1),
(45, 'Ramya', 'rekha12@gmail.com', 'ssdsd', 1),
(46, 'Ramya', 'ramya.mg@gmail.com', 'hi its a friday ... ', 1),
(47, 'Ramya', 'ramya.mg@gmail.com', 'hi dldld', 1),
(48, 'Harish Y Acharya', 'vaiharish@gmail.com', 'hi sir... ', 1),
(49, 'Renukesh', 'renukesh.mg@gmail.com', 'hi .. ', 1),
(50, 'Ramya lakshmi', 'ramya.mg@gmail.com', 'hi ... ', 1),
(57, 'Rekha MYS', 'rekhamg12@gmail.com', 'asdasd', 1),
(58, 'Rekha', 'rekha@123.com', 'hi', 1),
(59, 'Rekha', 'rekha@123.com', 'hi', 1),
(60, 'Thoshit', 'thoshith@yahoo.com', 'hello ...', 1),
(61, 'Rekha', 'rekhamg12@gmail.com', 'sfsdfsd', 1),
(62, 'Rekha', 'rekhamg12@gmail.com', 'dsdsd ', 1),
(63, 'Soch', 'thoshith@yahoo.com', 'hi ..', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab1`
--
ALTER TABLE `tab1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab1`
--
ALTER TABLE `tab1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `v_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
