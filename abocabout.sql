-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2018 at 07:01 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abocabout`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

DROP TABLE IF EXISTS `aboutus`;
CREATE TABLE IF NOT EXISTS `aboutus` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`ID`, `description`) VALUES
(1, 'We are a professional team, working around the world since 2014. Our motive is that every customer is 100% satisfied with our work without adding additional costs.\r\n\r\nHard working, delivery project on time and acceptable price are our advantages.\r\n\r\nWe offer --> Creating a professional website, mobile applications (Android and iOS), data entry, software programs, and making/editing videos.\r\n\r\n--- 4+ years of experience\r\n--- Best prices with 100% satisfaction\r\n--- Work 6 days a week - if necessary 7 days\r\n--- We are available for work 24/7 every day');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `image1` longblob NOT NULL,
  `image2` longblob NOT NULL,
  `image3` longblob NOT NULL,
  `image4` longblob NOT NULL,
  `image5` longblob NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`ID`, `image1`, `image2`, `image3`, `image4`, `image5`, `name`, `description`, `link`) VALUES
(1, '', '', '', '', '', 'BTT', 'juhu', '...');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `type` varchar(250) NOT NULL,
  `programs` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`ID`, `type`, `programs`) VALUES
(1, 'Front-end', 'HTML'),
(2, 'Front-end', 'CSS'),
(3, 'Front-end', 'SASS'),
(4, 'Front-end', 'BOOTSTRAP'),
(5, 'Front-end', 'JAVASCRIPT'),
(6, 'Front-end', 'JQUERY'),
(7, 'Front-end', 'ANGULAR'),
(8, 'Front-end', 'WORDPRESS'),
(9, 'Back-end', 'PHP'),
(10, 'Back-end', 'NODE.JS'),
(11, 'Back-end', 'JAVASCRIPT'),
(12, 'Back-end', 'JQUERY'),
(13, 'Back-end', 'ANGULAR'),
(14, 'Back-end', 'MYSQL'),
(15, 'Back-end', 'SQL'),
(16, 'Back-end', 'MONGODB'),
(17, 'Android-app', 'ANDROID STUDIO'),
(18, 'Android-app', 'JAVA'),
(19, 'IOS', 'SWIFT'),
(20, 'Software programming', 'C'),
(21, 'Software programming', 'C++'),
(22, 'Software programming', 'C#'),
(23, 'Software programming', 'PYTHON'),
(24, 'Software programming', 'JAVA'),
(25, 'Data entry', 'EXCEL'),
(26, 'Data entry', 'MYSQL'),
(27, 'Data entry', 'SQL'),
(28, 'Data entry', 'MONGODB'),
(29, 'Video making and editing', 'ADOBE AFTER EFFECTS'),
(30, 'Video making and editing', 'ADOBE PREMIERE PRO'),
(31, 'Software programming', 'Qt Framework'),
(32, 'Hybrid Crossplatform Apps', 'Adobe PhoneGap framework'),
(33, 'Hybrid Crossplatform Apps', 'Apache Cordova framework'),
(34, 'Hybrid Crossplatform Apps', 'Electron framework');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `image` longblob NOT NULL,
  `name` varchar(250) NOT NULL,
  `position` varchar(250) NOT NULL,
  `education` varchar(250) NOT NULL,
  `educationLink` varchar(250) NOT NULL,
  `github` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`ID`, `image`, `name`, `position`, `education`, `educationLink`, `github`, `linkedin`) VALUES
(1, '', 'ABDULRAHMAN A.', 'Full-stack dev', 'IBU', 'https://www.ibu.edu.ba/', 'https://github.com/devAbu', 'https://www.linkedin.com/in/abdurahman-almonajed-2b4842138/'),
(2, '', 'OMAR H.', 'Back-end dev', 'IUS', 'https://www.ius.edu.ba/', 'https://github.com/omar97hassan', '...'),
(3, '', 'BAKIR B.', 'Front-end dev.', 'IUS', '...https://www.ius.edu.ba/', 'https://github.com/Bakirbrkic', '...'),
(4, '', 'OBADA A.', 'CEO', 'IBU', 'https://www.ibu.edu.ba/', '...', 'https://www.linkedin.com/in/obada-almonajed-75b472121/');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
