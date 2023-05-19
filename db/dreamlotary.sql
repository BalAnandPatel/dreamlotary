-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2023 at 03:45 AM
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
-- Table structure for table `payment_history`
--

CREATE TABLE IF NOT EXISTS `payment_history` (
`id` int(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `bankName` varchar(50) NOT NULL,
  `branchName` varchar(50) NOT NULL,
  `accountNum` varchar(100) NOT NULL,
  `accountHolder` varchar(50) NOT NULL,
  `ifscCode` varchar(50) NOT NULL,
  `paymentMode` varchar(50) NOT NULL,
  `slipNum` varchar(50) NOT NULL,
  `ticketAmount` varchar(255) NOT NULL,
  `lotteryAmount` varchar(255) NOT NULL,
  `lotteryNum` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdOn` timestamp NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updatedOn` timestamp NOT NULL,
  `updatedBy` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
`id` int(255) NOT NULL,
  `ticketAmount` varchar(255) NOT NULL,
  `lotteryAmount` varchar(255) NOT NULL,
  `lotteryNum` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdOn` timestamp NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` timestamp NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `ticketAmount`, `lotteryAmount`, `lotteryNum`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(18, '500', '5000', 'DREAM1684228037', 3, '2023-05-16 09:07:17', 'Admin', '2023-05-17 06:20:00', 'Admin'),
(17, '200', '20000', 'DREAM1684214347', 3, '2023-05-16 05:19:07', 'Admin', '2023-05-18 06:33:00', 'Admin'),
(16, '50', '500', 'DREAM1684214327', 2, '2023-05-16 05:18:47', 'Admin', '2023-05-18 06:31:00', 'Admin'),
(15, '100', '1000', 'DREAM1684214295', 1, '2023-05-16 05:18:15', 'Admin', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_purchase`
--

CREATE TABLE IF NOT EXISTS `ticket_purchase` (
`id` int(255) NOT NULL,
  `ticketId` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `ticketAmount` varchar(255) NOT NULL,
  `lotteryAmount` varchar(255) NOT NULL,
  `lotteryNum` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdOn` timestamp NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` timestamp NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `ticket_purchase`
--

INSERT INTO `ticket_purchase` (`id`, `ticketId`, `userId`, `ticketAmount`, `lotteryAmount`, `lotteryNum`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(11, '18', '3', '500', '5000', 'DREAM1684228037', 3, '2023-05-17 06:20:00', 'Admin', '0000-00-00 00:00:00', ''),
(9, '18', '3', '500', '5000', 'DREAM1684228037', 2, '2023-05-16 23:22:00', 'Mrityunjay Singh', '0000-00-00 00:00:00', ''),
(12, '17', '3', '200', '20000', 'DREAM1684214347', 2, '2023-05-17 06:27:00', 'Mrityunjay Singh', '0000-00-00 00:00:00', ''),
(13, '16', '3', '50', '500', 'DREAM1684214327', 2, '2023-05-18 06:31:00', 'Mrityunjay Singh', '0000-00-00 00:00:00', ''),
(14, '17', '3', '200', '20000', 'DREAM1684214347', 3, '2023-05-18 06:33:00', 'Admin', '0000-00-00 00:00:00', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `userId`, `accountHolder`, `bankName`, `branchName`, `ifscCode`, `accountNum`, `googlePayNum`, `phonePayNum`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(1, '3', 'Mrityunjay singh', 'bank of baruda', 'mungra', 'bob255', '55555555', '236547956', '25695475', 1, '2023-05-11 20:47:38', 'Mrityunjay singh', '0000-00-00 00:00:00', ''),
(2, '4', 'Dhananjay Singh', 'sbi', 'mungra badshahpur', 'ubino222', '12365852600', '3658956200', '2365896500', 1, '2023-05-11 20:55:07', 'Dhananjay singh', '2023-05-15 18:30:00', '4'),
(3, '5', 'Yash kumar', 'sbi', 'mungra', 'UBI00256', '2569854855', '365896589', '369875698', 1, '2023-05-15 22:17:23', 'Yash', '2023-05-15 18:30:00', '5');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `userType`, `userRole`, `userName`, `userMobile`, `userEmail`, `userPass`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(4, 1, 'Admin', 'Admin', '25232522', 'admin@gmail.com', '12345', 1, '2023-05-11 20:55:07', 'Admin', '0000-00-00 00:00:00', ''),
(3, 2, 'User', 'Mrityunjay singh', '12233', 'ms@gmail.com', '12345', 1, '2023-05-11 20:11:03', 'Mrityunjay singh', '0000-00-00 00:00:00', ''),
(5, 2, 'User', 'Yash', '3698565489', 'yash@gmail.com', '123456', 1, '2023-05-15 22:17:23', 'Yash', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
 ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `payment_history`
--
ALTER TABLE `payment_history`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `ticket_purchase`
--
ALTER TABLE `ticket_purchase`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
