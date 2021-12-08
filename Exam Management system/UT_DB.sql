-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2021 at 05:37 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cot_hospital`
--
CREATE DATABASE IF NOT EXISTS `cot_hospital` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cot_hospital`;
--
-- Database: `ut_db`
--
CREATE DATABASE IF NOT EXISTS `ut_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ut_db`;

-- --------------------------------------------------------

--
-- Table structure for table `blockassign`
--

DROP TABLE IF EXISTS `blockassign`;
CREATE TABLE IF NOT EXISTS `blockassign` (
  `block` varchar(30) DEFAULT NULL,
  `seat` varchar(30) DEFAULT NULL,
  `class` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blockassign`
--

INSERT INTO `blockassign` (`block`, `seat`, `class`) VALUES
('2', '44', 'SE'),
('6', '88', 'TE'),
('6', '33', 'TE'),
('6', '44', 'TE'),
('8', '23', 'TE'),
('6', '88', 'SE'),
('8', '12', 'TE'),
('7', '55', 'TE'),
('7', '44', 'TE'),
('33', '44', 'SE');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `name` varchar(30) DEFAULT NULL,
  `roll` varchar(30) DEFAULT NULL,
  `mark` varchar(30) DEFAULT NULL,
  `sem` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`name`, `roll`, `mark`, `sem`) VALUES
('khushboo kanojiya', '17co03', '22', '0'),
('khushboo kanojiya', '17co03', '', 'sem2'),
('Farheen master', '17co05', '34', 'sem6'),
('talha shaikh', '18co50', '63', 'sem6'),
('talha shaikh', '18co50', '23', 'sem6'),
('Hasan shaikh', '18co52', '24', 'sem6'),
('talha shaikh', '18co52', '34', 'sem6'),
('Sakshi kanojiya', '18co09', '19', 'sem6'),
('Janvi karia', '18co08', '12', 'sem6'),
('Hasan shaikh', '18co52', '22', 'sem6'),
('55', '345', 'ff', 'sem1');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

DROP TABLE IF EXISTS `supervisor`;
CREATE TABLE IF NOT EXISTS `supervisor` (
  `date_time` varchar(30) DEFAULT NULL,
  `staffname` varchar(30) DEFAULT NULL,
  `tilltime` varchar(30) DEFAULT NULL,
  `fromTime` varchar(50) DEFAULT NULL,
  `Block` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`date_time`, `staffname`, `tilltime`, `fromTime`, `Block`) VALUES
('2021-05-27', 'mukhtar Ansari', '10', '11', '101'),
('2021-05-29', 'Javed shaikh', '9', '11', '102'),
('2021-05-31', 'kalpana Bodke', '9', '10', '102'),
('2021-05-29', 'Reehal qureshi', '10', '11', '103'),
('2021-06-05', 'kalpana Bodke', '10', '11', '104'),
('2021-06-02', 'mukhtar Ansari', '10', '11', '103'),
('2021-05-29', 'mukhtar Ansari', '10', '11', '102'),
('2021-12-07', 'mukhtar Ansari', '9', '12', '101');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `date` varchar(30) DEFAULT NULL,
  `subname` varchar(30) DEFAULT NULL,
  `session` varchar(30) DEFAULT NULL,
  `stime` varchar(50) DEFAULT NULL,
  `ttime` varchar(30) DEFAULT NULL,
  `scheme` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`date`, `subname`, `session`, `stime`, `ttime`, `scheme`) VALUES
('2021-05-28', 'ML', 'MORNING', '09:00:00', '10:00:00', 'SEM3'),
('2021-05-29', 'SPCC', 'MORNING', '09:00:00', '10:00:00', 'SEM6'),
('2021-05-30', 'DWM', 'MORNING', '09:00:00', '10:00:00', 'SEM6'),
('2021-06-02', 'CSS', 'MORNING', '10:00:00', '11:00:00', 'SEM6'),
('2021-06-04', 'CSS', 'AFTERNOON', '10:00:00', '11:00:00', 'SEM6'),
('2021-06-02', 'SPCC', 'AFTERNOON', '09:00:00', '10:00:00', 'SEM6'),
('2021-05-29', 'DWM', 'MORNING', '09:00:00', '10:00:00', 'SEM6'),
('2021-05-29', 'ML', 'MORNING', '10:00:00', '11:00:00', 'SEM6'),
('2021-05-30', 'DWM', 'MORNING', '10:00:00', '11:00:00', 'SEM6'),
('2021-05-31', 'SPCC', 'MORNING', '10:00:00', '11:00:00', 'SEM6'),
('2021-06-01', 'CSS', 'MORNING', '10:00:00', '11:00:00', '0'),
('2021-06-03', 'SE', 'MORNING', '10:00:00', '11:00:00', 'SEM6'),
('2021-11-30', 'DWM', 'AFTERNOON', '08:00:00', '09:00:00', 'SEM4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
