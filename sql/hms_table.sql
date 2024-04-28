-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 23, 2024 at 02:59 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_table`
--

DROP TABLE IF EXISTS `appointment_table`;
CREATE TABLE IF NOT EXISTS `appointment_table` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL,
  `doctor_name` varchar(25) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_table`
--

INSERT INTO `appointment_table` (`aid`, `patient_name`, `date_time`, `doctor_name`, `info`) VALUES
(1, 'Ryan Gosling', '2024-04-18 14:45:00', 'Dr. Reynolds', 'Concerned about lingering cough and flu-like symptoms.');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_table`
--

DROP TABLE IF EXISTS `doctor_table`;
CREATE TABLE IF NOT EXISTS `doctor_table` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `sex` varchar(25) NOT NULL,
  `specialty` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone_num` varchar(25) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_table`
--

INSERT INTO `doctor_table` (`did`, `name`, `sex`, `specialty`, `address`, `email`, `phone_num`) VALUES
(1, 'Dr. Ryan Reynolds', 'male', 'General Practice', '88 ReallyNiceHouse Ave.', 'dr.reynolds@hospital.com', '4795010899'),
(2, 'Dr. Baker Loften', 'male', 'Pediatrics', '10 Modest Way.', 'dr.loften@hospital.com', '5018592313'),
(3, 'Dr. Callum Clark', 'male', 'Radiology', '78 Doctor Rd.', 'dr.clark@hospital.com', '4792346874'),
(4, 'Dr. Megan Lavender', 'female', 'Anesthesiology', '50 Golfer Ln.', 'dr.lavender@hospital.com', '5018862145'),
(5, 'Dr. Mason Cary', 'male', 'Podiatry', '50 Tennis Ln.', 'dr.cary@hospital.com', '7788962541');

-- --------------------------------------------------------

--
-- Table structure for table `patient_table`
--

DROP TABLE IF EXISTS `patient_table`;
CREATE TABLE IF NOT EXISTS `patient_table` (
  `pid` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(25) NOT NULL,
  `phone_num` varchar(25) NOT NULL,
  `em_contact` text NOT NULL,
  `address` text NOT NULL,
  `cancer` tinyint(1) NOT NULL,
  `diabetes` tinyint(1) NOT NULL,
  `hbloodpress` tinyint(1) NOT NULL,
  `lbloodpress` tinyint(1) NOT NULL,
  `heartdisease` tinyint(1) NOT NULL,
  `asthma` tinyint(1) NOT NULL,
  `seizures` tinyint(1) NOT NULL,
  `strokes` tinyint(1) NOT NULL,
  `otherhist` text NOT NULL,
  `lactose` tinyint(1) NOT NULL,
  `treenuts` tinyint(1) NOT NULL,
  `peanuts` tinyint(1) NOT NULL,
  `epinephrine` tinyint(1) NOT NULL,
  `milk` tinyint(1) NOT NULL,
  `eggs` tinyint(1) NOT NULL,
  `wheat` tinyint(1) NOT NULL,
  `fish` tinyint(1) NOT NULL,
  `otherallg` text NOT NULL,
  `medication` text NOT NULL,
  `dosage` text NOT NULL,
  `incident` text NOT NULL,
  `dateofinc` text NOT NULL,
  `surgery` text NOT NULL,
  `dateofsurg` text NOT NULL,
  `other` text NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_table`
--

INSERT INTO `patient_table` (`pid`, `name`, `dob`, `sex`, `phone_num`, `em_contact`, `address`, `cancer`, `diabetes`, `hbloodpress`, `lbloodpress`, `heartdisease`, `asthma`, `seizures`, `strokes`, `otherhist`, `lactose`, `treenuts`, `peanuts`, `epinephrine`, `milk`, `eggs`, `wheat`, `fish`, `otherallg`, `medication`, `dosage`, `incident`, `dateofinc`, `surgery`, `dateofsurg`, `other`) VALUES
(1, 'John Doe', '1999-09-22', 'male', '4792332121', 'Jane Doe (wife): 5018885431', '16 Razorback Rd. Fayetteville, AR. 72701', 1, 0, 1, 0, 0, 0, 0, 0, 'Mental Illness', 0, 0, 0, 0, 0, 0, 0, 0, 'Amoxicillin ', 'SSRI', '50mg', 'Broken Arm', '12/25/2011', 'Benign tumor removal', '06/07/2021', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

DROP TABLE IF EXISTS `user_table`;
CREATE TABLE IF NOT EXISTS `user_table` (
  `sid` int(4) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`sid`, `userid`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'A'),
(2, 'doc_baker', '1234567890', 'D'),
(3, 'callum', 'qwertyuiop', 'P');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
