-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2019 at 11:23 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siescoms_events_portal`
--
CREATE DATABASE IF NOT EXISTS `siescoms_events_portal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `siescoms_events_portal`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(255) NOT NULL,
  `admin_username` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE IF NOT EXISTS `committee` (
  `committee_id` int(255) NOT NULL,
  `committee_name` varchar(255) NOT NULL,
  `committee_members` int(255) NOT NULL,
  `events_conducted` int(255) NOT NULL,
  PRIMARY KEY (`committee_id`),
  KEY `committee_id` (`committee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`committee_id`, `committee_name`, `committee_members`, `events_conducted`) VALUES
(1, 'Academic Committee', 3, 3),
(2, 'Alumni Committee', 4, 4),
(3, 'Cultural Committee', 0, 0),
(4, 'Placement Committee', 2, 14),
(5, 'Sahyog Committee', 3, 3),
(6, 'Sponsorship Committee', 2, 2),
(7, 'Sports Committee', 2, 3),
(8, 'Students Council', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `committee_head`
--

CREATE TABLE IF NOT EXISTS `committee_head` (
  `committee_head_id` int(255) NOT NULL AUTO_INCREMENT,
  `committee_head_username` varchar(255) DEFAULT NULL,
  `committee_head_password` varchar(255) DEFAULT NULL,
  `committee_head_name` varchar(255) NOT NULL,
  `committee_head_department` varchar(255) NOT NULL,
  `committee_head_class` varchar(255) NOT NULL,
  `committee_id` int(255) NOT NULL,
  PRIMARY KEY (`committee_head_id`),
  KEY `committee_id` (`committee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `committee_head`
--

INSERT INTO `committee_head` (`committee_head_id`, `committee_head_username`, `committee_head_password`, `committee_head_name`, `committee_head_department`, `committee_head_class`, `committee_id`) VALUES
(1, 'sau123', 'sau123', 'Saurabh Dhuri', 'MMS', 'FY', 3),
(2, 'aadesh123', 'aadesh123', 'Aadesh Dudhane', 'mms', 'FY', 1),
(3, 'niraj123', 'niraj123', 'Niraj Nandi', 'biotech', 'FY', 2),
(4, 'abhi123', 'xyz', 'Abhijeet Todkar', 'MCA', 'FY', 4),
(5, 'ra123', 'ra123', 'Ramesh Panvadi', 'AIMA', 'FY', 5),
(6, 'akki123', 'akki123', 'Akash Rajput', 'PGDM-Pharma', 'FY', 6),
(7, 'sur123', 'sur123', 'Suresh Sharma', 'MCA', 'FY', 7),
(8, 'slowboy789', 'slowboy789', 'Akshay Madrikar', 'MCA', 'FY', 2);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(255) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  `event_description` varchar(5000) NOT NULL,
  `event_date_from` date NOT NULL,
  `event_date_to` date NOT NULL,
  `committee_id` int(255) NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `committee_id` (`committee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_description`, `event_date_from`, `event_date_to`, `committee_id`) VALUES
(1, 'Singing Competition', 'acacsacsacsc adasd \r\nadadada wdawdawd', '2018-11-15', '2018-11-22', 3),
(2, 'Singing Competition 2', 'Singing, Songwriting and Talent Competitions are staged worldwide and cater for Amateur to Professional Vocalists.   There are competitions for all ages, styles, genres and standards some of which are available online. ', '2018-11-24', '2018-11-27', 3),
(3, 'Singing Competition 3', 'Singing, Songwriting and Talent Competitions are staged worldwide and cater for Amateur to Professional Vocalists.   There are competitions for all ages, styles, genres and standards some of which are available online. ', '2018-12-11', '2018-12-26', 3),
(5, 'dadasd', 'adasdasdsadsadsdsdasdsa', '2018-10-31', '2018-11-08', 1),
(6, 'Brain Game', 'asasdsdsadsadsadsads', '2018-11-09', '2018-11-15', 1),
(7, 'Brain Game 2', 'Apart from counting words and characters, our online editor can help you to improve word choice and writing style, and, optionally', '2018-11-23', '2018-11-29', 1),
(8, 'Alumni Workshop', 'present a performance of (a dramatic work), using intensive group discussion and improvisation in order to explore aspects of the production prior to formal staging.', '2018-11-22', '2018-11-21', 2),
(9, 'Alumni Workshop 2', 'present a performance of (a dramatic work), using intensive group discussion and improvisation in order to explore aspects of the production prior to formal staging. 2!@##$$', '2018-11-15', '2018-11-16', 2),
(10, 'Alumni Workshop 3', 'present a performance of (a dramatic work), using intensive group discussion and improvisation in order to explore aspects of the production prior to formal staging.!*@#&@(@(@#*#(@@*@(@(@&*%*&^&^$&W', '2018-11-23', '2018-11-21', 2),
(11, 'Capgemini Workshop', 'Capgemini SE is a French multinational professional services and business consulting corporation headquartered in Paris, France.', '2018-11-16', '2018-11-17', 4),
(12, 'HTC Workshop', 'HTC Corporation is a Taiwanese consumer electronics company headquartered in Xindian District, New Taipei City, Taiwan. Founded in 1997, HTC began as an original design manufacturer and original equipment manufacturer, designing and manufacturing laptop computers.', '2018-11-17', '2018-11-18', 4),
(14, 'LnT Workshop', 'assaacascsacascsac', '2018-11-23', '2018-11-20', 4),
(15, 'asasasdd', 'adsadasds', '2018-11-15', '2018-11-30', 4),
(16, 'asdsadasd', 'sadsdsasd', '2018-11-08', '2018-11-23', 4),
(28, 'Children Fund', 'ccdmmdiw qdqwdwdwqd qwd@(*&!)*#!)(@#*!@)(#*!@(&@!^$', '2018-11-17', '2018-11-18', 5),
(29, 'Children Fund 2', 'accscasasc asasaskm', '2018-11-17', '2018-11-19', 5),
(30, 'Blood Donation Camp', 'Blood sanqjd IJDLISDIJJdijaldinadla asdnasdajndals saknd', '2018-11-16', '2018-11-17', 5),
(31, 'Mcd Stall', 'akscascn naslaks klaslkxasn', '2018-11-17', '2018-11-17', 6),
(32, 'Dominos Stall', 'kbkasbcasub kdnasljsan dnasldasnd', '2018-11-17', '2018-11-20', 6),
(34, 'Tug of War', 'sdsald nadsajjdalsij adas asdjasd', '2018-11-17', '2018-11-14', 7),
(35, 'Rugby', 'adaskdj asdasjdla aslidijasldij asdjaslid', '2018-11-17', '2018-11-26', 7),
(36, 'Football', 'adlasd adasdlas laidj aldjasildj alidjasl ja', '2018-11-20', '2018-11-24', 7);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(255) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(255) NOT NULL,
  `member_department` varchar(255) NOT NULL,
  `member_class` varchar(255) NOT NULL,
  `committee_id` int(255) NOT NULL,
  PRIMARY KEY (`member_id`),
  KEY `committee_id` (`committee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `member_department`, `member_class`, `committee_id`) VALUES
(1, 'Aadesh Dudhane', 'MCA', 'FY', 3),
(2, 'Keval Majethiya', 'MCA', 'SY', 3),
(3, 'Akshay Madrikar	', 'MCA', 'SY', 3),
(4, 'Shivabalan Nadar', 'MCA', 'FY', 1),
(5, 'Niraj Nandi', 'MMS', 'SY', 1),
(6, 'Affan Ansari', 'MBA-Pharma', 'SY', 1),
(8, 'Akshay Deshpande', 'PGD-BA', 'FY', 2),
(9, 'Yash Jadhav', 'AIMA', 'SY', 2),
(10, 'adasdasda', 'MCA', 'SY', 2),
(11, 'Alankar Chavan', 'MCA', 'SY', 4),
(12, 'Akash Mohite', 'MMS', 'SY', 4),
(13, 'Aryan Benbanci', 'MMS', 'FY', 5),
(14, 'Saumit Baneerji', 'MCA', 'FY', 5),
(15, 'Pranam Kamble', 'PGDM', 'SY', 5),
(16, 'Kunal Avhad', 'AIMA', 'FY', 6),
(17, 'Pratik Gujjar', 'PGDM-Pharma', 'SY', 6),
(18, 'Cristiano Ronaldo', 'MCA', 'FY', 7),
(19, 'Lionel Messi', 'PGDM-Biotech', 'SY', 7),
(20, 'Akshya Madriakr', 'MCA', 'FY', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
