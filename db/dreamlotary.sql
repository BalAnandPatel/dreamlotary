-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2023 at 12:25 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `ticketAmount`, `lotaryAmount`, `lotaryNum`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(9, '100', '100000', 'DREAM1683962913', 2, '2023-05-13 07:28:33', 'Admin', '0000-00-00 00:00:00', ''),
(8, '55', '5000', 'DREAM1683794705', 1, '2023-05-11 08:45:05', 'Admin', '0000-00-00 00:00:00', ''),
(10, '100', '1000', 'DREAM1684143039', 1, '2023-05-15 09:30:39', 'Admin', '0000-00-00 00:00:00', ''),
(11, '300', '3000', 'DREAM1684143665', 1, '2023-05-15 09:41:05', 'Admin', '0000-00-00 00:00:00', ''),
(12, '200', '5000', 'DREAM1684143893', 1, '2023-05-15 09:44:53', 'Admin', '0000-00-00 00:00:00', ''),
(13, '100', '100000', 'DREAM1683962913', 1, '2023-05-15 00:21:00', '', '0000-00-00 00:00:00', ''),
(14, '100', '100000', 'DREAM1683962913', 1, '2023-05-15 00:22:00', '9', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_purchase`
--

CREATE TABLE IF NOT EXISTS `ticket_purchase` (
`id` int(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `ticketAmount` varchar(255) NOT NULL,
  `lotaryAmount` varchar(255) NOT NULL,
  `lotaryNum` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdOn` timestamp NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` timestamp NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(2, '4', 'Dhananjay singh', 'sbi', 'mungra badshahpur', 'ubino222', '12365852600', '3658956200', '2365896500', 1, '2023-05-11 20:55:07', 'Dhananjay singh', '2023-05-12 18:30:00', '4');

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
(4, 1, 'Admin', 'Admin', '25232522', 'admin@gmail.com', '12345', 1, '2023-05-11 20:55:07', 'Admin', '0000-00-00 00:00:00', ''),
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
-- Indexes for table `ticket_purchase`
--
ALTER TABLE `ticket_purchase`
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
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `ticket_purchase`
--
ALTER TABLE `ticket_purchase`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
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
