-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2014 at 07:07 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `begs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_record`
--

CREATE TABLE IF NOT EXISTS `admin_record` (
  `sno` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_record`
--

INSERT INTO `admin_record` (`sno`, `username`, `password`) VALUES
(1, 'graturi1', '1525'),
(2, 'dheeru', '1224');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `contents` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`contents`) VALUES
('Athletic bag'),
('Backpack:'),
('Duffel Bag'),
('Messenger Bag'),
('Bowling Bag'),
('Bucket bag');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `name`, `date`, `time`) VALUES
(4, '_1294768520.jpg', '2014-05-05', '08:37:15'),
(5, '_1372425304.jpg', '2014-05-05', '08:37:53'),
(6, '_1386764450.JPG', '2014-05-05', '08:39:34'),
(7, '_1370621729.jpg', '2014-05-05', '08:59:35'),
(10, '_1394732217.JPG', '2014-05-05', '12:46:16'),
(14, '_1397665884hdggdb vjkvhjkfhfkggkjkgjghgkjg.JPG', '2014-05-18', '07:46:52'),
(15, '_1359727706.jpg', '2014-05-18', '07:47:26'),
(16, '_1398179055.JPG', '2014-05-18', '07:47:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
