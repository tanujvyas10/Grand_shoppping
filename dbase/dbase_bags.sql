-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2014 at 08:43 AM
-- Server version: 5.5.34-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbase_bags`
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
(1, 'vikas', '123'),
(2, 'dheeru', '1224');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `contents` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `contents`) VALUES
(1, 'Hand Bag'),
(2, 'Hiking Bag'),
(3, 'Laptop Bag'),
(4, 'School Bag'),
(5, 'Travelling Bag');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `state` text NOT NULL,
  `pincode` int(6) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`fname`, `lname`, `email`, `number`, `state`, `pincode`, `address`) VALUES
('vikas', 'nautiyal', 'vikas7cool@gmail.com', '9927636421', 'Uttarakhand', 248001, 'bell road clement town '),
('shivam', 'nautiyal', 'vikas7cool@gmail.com', '9927636421', 'Uttarakhand', 248001, 'jolly grant'),
('shivam', 'nautiyal', 'vikas7cool@gmail.com', '9927636421', 'Uttarakhand', 248001, 'jolly grant'),
('shivam', 'nautiyal', '11', '11', '11', 11, '11'),
('11', '11', '11', '11', '11', 11, '11'),
('11', '11', '11', '11', '11', 11111111, '11'),
('123', '213', '123', '213', '213', 213, '213');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `uid` varchar(10) NOT NULL DEFAULT '707',
  `name` varchar(60) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`uid`, `name`, `price`) VALUES
('5', 'Oggie', 500),
('7', 'Metallica', 1500),
('4', 'Pitbul', 1000),
('1', 'Fancy Cool', 500),
('4', 'Pitbul', 1000),
('8', 'cat', 2000),
('7', 'Metallica', 1500),
('1', 'Fancy Cool', 500),
('1', 'Fancy Cool', 500),
('1', 'Fancy Cool', 500),
('3', 'Asia go', 600),
('', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `bagname` varchar(100) NOT NULL,
  `content_id` int(11) NOT NULL DEFAULT '707',
  `price` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `name`, `bagname`, `content_id`, `price`, `date`, `time`) VALUES
(35, 'beg1.jpg', 'Fancy Cool', 1, 500, '2014-12-21', '15:26:03'),
(36, 'AlbumArt_{EA5643C2-1AD9-4884-87F3-03262E48FCCB}_Large.jpg', 'pink floyd', 2, 1500, '2014-12-21', '15:26:47'),
(37, 'asia2.JPG', 'Asia go', 3, 600, '2014-12-21', '15:28:26'),
(38, '00-Pitbull-Planet.Pit-Super.Deluxe.Edition-2011-[NoFS]-SM-COVER.jpg', 'Pitbul', 4, 1000, '2014-12-21', '15:29:48'),
(39, 'oogiemonster.jpg', 'Oggie', 5, 500, '2014-12-21', '15:30:51'),
(40, 'MovieCollection.jpg', 'Pirates of sea', 6, 1000, '2014-12-21', '15:32:00'),
(41, 'Metallica - 1994 - One (German Single).jpg', 'Metallica', 7, 1500, '2014-12-21', '15:32:47'),
(42, 'mycat.jpg', 'cat', 8, 2000, '2014-12-21', '15:45:17'),
(43, 'ecko_wn88rv4y.jpg', 'Pendent', 4065, 2450, '2014-12-21', '15:47:13'),
(44, '24satellite.jpg', 'Earth', 2565, 300, '2014-12-21', '16:09:12'),
(45, 'key-lime.jpg', 'Key', 11, 750, '2014-12-21', '16:22:06'),
(47, '103223.jpg', 'Wood', 11, 550, '2014-12-21', '16:28:46'),
(48, 'royalblue_paisley_lg.jpg', 'Royal Thread', 4, 1490, '2014-12-21', '18:57:33'),
(49, 'oogiemonster.jpg', 'cat1', 5, 1500, '2014-12-21', '18:58:54');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
