-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2013 at 05:23 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rentcarpark`
--

-- --------------------------------------------------------

--
-- Table structure for table `carparks`
--

CREATE TABLE IF NOT EXISTS `carparks` (
  `CPID` int(11) NOT NULL AUTO_INCREMENT,
  `AdName` varchar(80) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `AdDescription` varchar(300) NOT NULL,
  `Price` int(11) NOT NULL,
  `Picture` mediumblob NOT NULL,
  `Location` varchar(200) NOT NULL,
  PRIMARY KEY (`CPID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `carparks`
--

INSERT INTO `carparks` (`CPID`, `AdName`, `Username`, `AdDescription`, `Price`, `Picture`, `Location`) VALUES
(1, 'Test', '', 'Test', 1, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
