-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2023 at 05:01 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dreamlotary`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
`id` int(255) NOT NULL,
  `ticketAmount` varchar(255) NOT NULL,
  `lotaryAmount` varchar(255) NOT NULL,
  `lotaryNum` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdOn` timestamp NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` timestamp NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `ticketAmount`, `lotaryAmount`, `lotaryNum`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(8, '55', '5000', 'DREAM1683794705', 1, '2023-05-11 08:45:05', 'Admin', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
`id` int(255) NOT NULL,
  `userId` varchar(200) NOT NULL,
  `accountHolder` varchar(50) NOT NULL,
  `bankName` varchar(100) NOT NULL,
  `branchName` varchar(100) NOT NULL,
  `ifscCode` varchar(10) NOT NULL,
  `accountNum` varchar(20) NOT NULL,
  `googlePayNum` varchar(12) NOT NULL,
  `phonePayNum` varchar(12) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdOn` timestamp NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` timestamp NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `userId`, `accountHolder`, `bankName`, `branchName`, `ifscCode`, `accountNum`, `googlePayNum`, `phonePayNum`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(1, '3', '', '', '', '', '', '', '', 1, '2023-05-11 20:47:38', 'Mrityunjay singh', '0000-00-00 00:00:00', ''),
(2, '4', '', '', '', '', '', '', '', 1, '2023-05-11 20:55:07', 'Dhananjay singh', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
`id` int(255) NOT NULL,
  `userType` int(5) NOT NULL,
  `userRole` varchar(20) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `userMobile` varchar(12) NOT NULL,
  `userEmail` varchar(250) NOT NULL,
  `userPass` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdOn` timestamp NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` timestamp NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `userType`, `userRole`, `userName`, `userMobile`, `userEmail`, `userPass`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(4, 2, 'User', 'Dhananjay singh', '25232522', 'dhananjay@gmail.com', '12345', 1, '2023-05-11 20:55:07', 'Dhananjay singh', '0000-00-00 00:00:00', ''),
(3, 2, 'User', 'Mrityunjay singh', '12233', 'ms@gmail.com', '12345', 1, '2023-05-11 20:11:03', 'Mrityunjay singh', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
