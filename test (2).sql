-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2014 at 11:37 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_firstname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `admin_lastname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_firstname`, `admin_lastname`, `email`, `password`, `level`) VALUES
(1, 'thanh', 'hương', 'datptpd00519@fpt.edu.vn', 'thanhdat1030', 1),
(2, 'thanh', 'dat', 'dat@gmail.com', 'thanhdat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level_name`) VALUES
(1, 'nhân viên'),
(2, 'trưởng phòng');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` int(12) NOT NULL,
  `date` varchar(60) NOT NULL,
  `level` int(11) NOT NULL,
  `check` varchar(11) NOT NULL,
  `status` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `date`, `level`, `check`, `status`) VALUES
(20, 'Đô', 'Phạm', 'datptpd00519@fpt.edu.vn', 1689643234, '771994', 1, '', '1'),
(21, 'sinh', 'nguyễn', 'sinhnguyen@gmail.com', 1287551048, '0000-00-00', 1, '', '1'),
(22, 'quốc', 'viên', 'dat@gmail.com', 905630373, '0000-00-00', 1, '', '1'),
(23, 'ngọc', 'thi', 'demo@gmail.com', 12222222, '0000-00-00', 1, '', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
