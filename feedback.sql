-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2018 at 11:32 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `adminid` text NOT NULL,
  `fullname` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `phonenumber` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminid`, `fullname`, `address`, `email`, `phonenumber`, `pass`) VALUES
(1, '12345', 'pratham', 'uygcy', 'pratham1897@gmail.com', '123456', 'qwert');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` text NOT NULL,
  `sname` text NOT NULL,
  `q1` text NOT NULL,
  `q2` text NOT NULL,
  `q3` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `q6` text NOT NULL,
  `q7` text NOT NULL,
  `q8` text NOT NULL,
  `rating` text NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fullname`, `sname`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `rating`, `comment`) VALUES
(3, 'wq', '', 'YES', 'NO', 'NO', 'NO', 'YES', 'YES', 'NO', 'BAD', '1', 'vujhasjh'),
(10, 'qwert', '', 'NO', 'NO', 'NO', 'NO', '', 'YES', 'YES', 'BAD', '4', 'dffgcj'),
(11, 'wq', 'PRATHAM', 'NO', 'NO', 'YES', 'NO', 'YES', 'YES', 'NO', 'BAD', '2', 'wsad'),
(12, 'wq', 'fsfxdf', 'YES', 'NO', 'YES', 'NO', 'YES', 'NO', 'YES', 'BAD', '4', 'fawfwf'),
(13, 'qwert', 'fsfxdf', 'YES', 'NO', 'YES', 'NO', 'YES', 'YES', 'YES', 'AVERAGE', '4', 'sdff');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rollno` text NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `phonenumber` text NOT NULL,
  `course` text NOT NULL,
  `address` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `fullname`, `email`, `phonenumber`, `course`, `address`, `pass`) VALUES
(1, '123', 'qwe', 'qwert@gmail.com', '1234567890', 'B.Tech', 'qwqwq', 'qwert'),
(2, '123', 'qwe', 'qwert@gmail.com', '1234567890', 'B.Tech:CSE', 'qwqwq', '123'),
(3, '123789', 'prashant', 'prashantsarkar0@gmail.com', '1234567890', 'B.Tech:CSE', 'fdsgdcajcks', 'qwert'),
(4, '1234', 'PRATHAM', 'pratham.1999@yahoo.in', '614846649', 'B.Tech:CSE', 'sdsdgg', 'qwert'),
(5, '123456', 'fsfxdf', 'zfgdgz', '341434', 'B.Tech:CSE', '132434', 'qwert');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rollno` text NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `phonenumber` text NOT NULL,
  `course` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `rollno`, `fullname`, `email`, `address`, `phonenumber`, `course`, `pass`) VALUES
(1, '123', 'wq', 'qwert@gmail.com', '123123erwf', '12312', 'B.Tech:MECH', 'qwert'),
(2, '1234', 'qwert', 'qwert@gmail.com', 'ggbsg', '1435566', 'Humanities', 'qwert');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
