-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2023 at 12:15 PM
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
  `ticketId` varchar(255) NOT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `payment_history`
--

INSERT INTO `payment_history` (`id`, `userId`, `ticketId`, `userName`, `bankName`, `branchName`, `accountNum`, `accountHolder`, `ifscCode`, `paymentMode`, `slipNum`, `ticketAmount`, `lotteryAmount`, `lotteryNum`, `remark`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(11, '6', '20', 'Mrityunjay Singh', 'State Bank Of India', 'Mungra Badshahpur ', '213654785625', 'Mrityunjay Singh', 'UBINO0025', 'Online', '123456', '200', '20000', 'DREAM1684579712', 'Lottery Amount Successfully sent your Account.                        ', 1, '2023-05-20 11:40:25', 'Admin', '0000-00-00 00:00:00', ''),
(12, '7', '19', 'Yash', 'Bob', 'Mungra', '326545636541', 'Yash Kumar', 'BOB00123', 'Online', '1225', '100', '10000', 'DREAM1684579650', ' hi yash                       ', 1, '2023-05-20 11:49:22', 'Admin', '0000-00-00 00:00:00', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `ticketAmount`, `lotteryAmount`, `lotteryNum`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(21, '50', '5000', 'DREAM1684579768', 2, '2023-05-20 10:49:28', 'Admin', '2023-05-19 22:51:00', 'Mrityunjay Singh'),
(20, '200', '20000', 'DREAM1684579712', 3, '2023-05-20 10:48:32', 'Admin', '2023-05-19 23:13:00', 'Admin'),
(19, '100', '10000', 'DREAM1684579650', 3, '2023-05-20 10:47:30', 'Admin', '2023-05-19 23:48:00', 'Admin');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `ticket_purchase`
--

INSERT INTO `ticket_purchase` (`id`, `ticketId`, `userId`, `ticketAmount`, `lotteryAmount`, `lotteryNum`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(18, '20', '6', '200', '20000', 'DREAM1684579712', 3, '2023-05-19 23:13:00', 'Admin', '0000-00-00 00:00:00', ''),
(17, '19', '7', '100', '10000', 'DREAM1684579650', 2, '2023-05-19 23:04:00', 'Yash', '0000-00-00 00:00:00', ''),
(16, '20', '6', '200', '20000', 'DREAM1684579712', 2, '2023-05-19 22:52:00', 'Mrityunjay Singh', '0000-00-00 00:00:00', ''),
(15, '21', '6', '50', '5000', 'DREAM1684579768', 2, '2023-05-19 22:51:00', 'Mrityunjay Singh', '0000-00-00 00:00:00', ''),
(19, '19', '7', '100', '10000', 'DREAM1684579650', 3, '2023-05-19 23:48:00', 'Admin', '0000-00-00 00:00:00', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `userId`, `accountHolder`, `bankName`, `branchName`, `ifscCode`, `accountNum`, `googlePayNum`, `phonePayNum`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(5, '7', 'Yash Kumar', 'Bob', 'Mungra', 'BOB00123', '326545636541', '2365456325', '2365425632', 1, '2023-05-19 22:57:08', 'Yash', '2023-05-19 18:30:00', '7'),
(4, '6', 'Mrityunjay Singh', 'State Bank Of India', 'Mungra Badshahpur ', 'UBINO0025', '213654785625', '2365475654', '2365475456', 1, '2023-05-19 21:24:39', 'Mrityunjay Singh', '2023-05-19 18:30:00', '6');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `userType`, `userRole`, `userName`, `userMobile`, `userEmail`, `userPass`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(1, 1, 'Admin', 'Admin', '3256325632', 'admin@gmail.com', 'admin@123', 1, '2023-05-20 09:29:53', 'Admin', '2023-05-20 09:29:53', ''),
(6, 2, 'User', 'Mrityunjay Singh', '2365478965', 'ms@gmail.com', 'ms@123', 1, '2023-05-19 21:24:39', 'Mrityunjay Singh', '0000-00-00 00:00:00', ''),
(7, 2, 'User', 'Yash', '3654785635', 'yash@gmail.com', 'yash@123', 1, '2023-05-19 22:57:08', 'Yash', '0000-00-00 00:00:00', '');

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
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `ticket_purchase`
--
ALTER TABLE `ticket_purchase`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
