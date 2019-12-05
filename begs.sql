-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2014 at 12:02 PM
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
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `contents` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `contents`) VALUES
(1, 'Athletic bag'),
(2, 'Backpack'),
(3, 'Duffel Bag');

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
  `pincode` int(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`fname`, `lname`, `email`, `number`, `state`, `pincode`, `address`) VALUES
('gand', 'mara', 'mara@gmail.com', '892312233', 'tugt', 456789, 'gewrgargwa'),
('yugank', 'pant', 'pantyugank@gmail.com', '9808103506', 'uttarakhand', 263139, 'yudfsjl'),
('ghanta', 'ghanta', 'ghanta@gmail.com', '4564563456', 'ut', 234567, 'ghanta ghar'),
('ghanta', 'ghanta', 'ghanta@gmail.com', '4564563456', 'ut', 234567, 'ghanta ghar'),
('ashd', 'vads', 'bgads@gmail.com', '4564563456', 'ut', 234567, 'ghanta ghar');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `begname` varchar(100) NOT NULL,
  `content_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `name`, `begname`, `content_id`, `date`, `time`) VALUES
(20, 'beg3.jpg', 'beg3', 2, '2014-12-20', '08:02:20'),
(19, 'beg1.jpg', 'beg1', 1, '2014-12-20', '07:56:00'),
(21, 'beg5.jpg', 'beg5', 4, '2014-12-20', '08:03:31'),
(24, 'PhotoChooser-daf0b39c-8130-464b-ad55-6f2cd3757695.jpg', 'ddd', 3, '2014-12-20', '12:28:21'),
(25, 'beg4.jpg', 'hdgfdghj', 3, '2014-12-20', '12:36:02'),
(26, 'PhotoChooser-daf0b39c-8130-464b-ad55-6f2cd3757695.jpg', 'hghf', 5, '2014-12-20', '13:09:12'),
(27, 'slider1.jpg', 'dsgd', 3, '2014-12-20', '14:30:49'),
(28, 'beg5.jpg', 'hjdsfj', 1, '2014-12-20', '16:28:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
