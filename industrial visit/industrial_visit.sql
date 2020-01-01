-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 07:22 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `industrial visit`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `fname` varchar(30) NOT NULL,
  `fid` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `phno` int(30) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(30) NOT NULL,
  `usn` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `year` int(30) NOT NULL,
  `phno` int(30) NOT NULL,
  `cname` varchar(30) NOT NULL,
  PRIMARY KEY (`usn`),
  KEY `cname` (`cname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visit_details`
--

CREATE TABLE IF NOT EXISTS `visit_details` (
  `cname` varchar(30) NOT NULL,
  `fid` varchar(30) NOT NULL,
  `no_of_students` int(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`cname`),
  UNIQUE KEY `cname` (`cname`),
  KEY `fid` (`fid`),
  KEY `fid_2` (`fid`),
  KEY `fid_3` (`fid`),
  KEY `fid_4` (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`cname`) REFERENCES `visit_details` (`cname`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visit_details`
--
ALTER TABLE `visit_details`
  ADD CONSTRAINT `fid` FOREIGN KEY (`fid`) REFERENCES `faculty` (`fid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
