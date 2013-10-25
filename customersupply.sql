-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2013 at 03:06 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.19

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customersupply`
--

INSERT INTO `customersupply` (`CSID`, `Firstname`, `Surname`, `Emailaddress`, `Password`, `Phonenumber`, `StateorTerritory`, `StreetNum`, `StreetName`, `Suburb`, `Postcode`) VALUES
(1, 'Test', 'Test', 'Test@Test.com', 'Test', 11111111, 'QLD', 1, 'Test', 'Test', 1111),
(2, 'Test', 'Test', 'Test@Test.com', 'Test', 1111111111, 'QLD', 1, 'Test', 'Test', 1111),
(3, 'Yancie', 'Ng', 'yancieng@gmail.com', 'qwertyu', 42545828, 'QLD', 70, 'Mary', 'Brisbane', 4109),
(4, 'Jason', 'USANG', 'jasonusa2005@hotmail.com', 'qwertyu', 41552999, 'QLD', 70, 'Mary', 'Brisbane', 4000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
