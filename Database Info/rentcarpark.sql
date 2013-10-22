-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2013 at 04:50 AM
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
CREATE DATABASE IF NOT EXISTS `rentcarpark` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rentcarpark`;

-- --------------------------------------------------------

--
-- Table structure for table `carparks`
--

CREATE TABLE IF NOT EXISTS `carparks` (
  `CPID` int(11) NOT NULL AUTO_INCREMENT,
  `AdName` varchar(80) NOT NULL,
  `AdDescription` varchar(300) NOT NULL,
  `Price` int(11) NOT NULL,
  `Picture` mediumblob NOT NULL,
  `Location` varchar(200) NOT NULL,
  PRIMARY KEY (`CPID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `carparks`
--

INSERT INTO `carparks` (`CPID`, `AdName`, `AdDescription`, `Price`, `Picture`, `Location`) VALUES
(1, 'Test', 'Test', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customersupply`
--

CREATE TABLE IF NOT EXISTS `customersupply` (
  `CSID` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Emailaddress` varchar(60) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Phonenumber` int(11) NOT NULL,
  `StateorTerritory` varchar(10) NOT NULL,
  `StreetNum` int(11) NOT NULL,
  `StreetName` varchar(30) NOT NULL,
  `Suburb` varchar(30) NOT NULL,
  `Postcode` int(11) NOT NULL,
  PRIMARY KEY (`CSID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customersupply`
--

INSERT INTO `customersupply` (`CSID`, `Firstname`, `Surname`, `Emailaddress`, `Password`, `Phonenumber`, `StateorTerritory`, `StreetNum`, `StreetName`, `Suburb`, `Postcode`) VALUES
(1, 'Test', 'Test', 'Test@Test.com', 'Test', 11111111, 'QLD', 1, 'Test', 'Test', 1111),
(2, 'Test', 'Test', 'Test@Test.com', 'Test', 1111111111, 'QLD', 1, 'Test', 'Test', 1111);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `TestID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  PRIMARY KEY (`TestID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`TestID`, `Name`) VALUES
(1, 'Test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
