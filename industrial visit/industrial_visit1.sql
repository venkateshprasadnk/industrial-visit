-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2019 at 04:04 PM
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
  `fname` varchar(15) NOT NULL,
  `fid` int(15) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `pno` int(15) NOT NULL,
  PRIMARY KEY (`fid`),
  KEY `fid` (`fid`),
  KEY `fid_2` (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fname`, `fid`, `dept`, `phno`) VALUES
('shankar', 1, 'cse', 2147483647),
('prasad', 3, 'cse', 2147483647),
('Venkatesh Prasa', 4, 'cse', 2147483647),
('Radhika', 5, 'Cse', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(15) NOT NULL,
  `usn` varchar(15) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `year` int(10) NOT NULL,
  `phno` int(15) NOT NULL,
  `cname` varchar(15) NOT NULL,
  PRIMARY KEY (`usn`),
  KEY `cname` (`cname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `usn`, `branch`, `year`, `phno`, `cname`) VALUES
('Sunil J', '1by17cs411', 'cse', 4, 2147483647, 'tcs'),
('Venkatesh Prasa', '1by17cs417', 'cse', 4, 2147483647, 'wipro');

-- --------------------------------------------------------

--
-- Table structure for table `visit_details`
--

CREATE TABLE IF NOT EXISTS `visit_details` (
  `cname` varchar(15) NOT NULL,
  `fid` int(10) NOT NULL,
  `no_of_students` int(15) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`cname`),
  KEY `fid` (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visit_details`
--

INSERT INTO `visit_details` (`cname`, `fid`, `no_of_students`, `date`) VALUES
('tcs', 1, 50, '0000-00-00'),
('wipro', 2, 100, '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
