-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2012 at 01:56 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `golunch`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  `date` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=153 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `date`, `time`, `description`) VALUES
(53, 'happy lunch', 0, 0, ''),
(54, 'happy lunch', 0, 0, ''),
(55, '	', 0, 0, ''),
(56, '	', 0, 0, ''),
(57, '	', 0, 0, ''),
(58, '	', 0, 0, ''),
(59, '	', 0, 0, ''),
(60, '	', 0, 0, ''),
(61, '	', 0, 0, ''),
(62, '	', 0, 0, ''),
(63, '	test888', 0, 0, ''),
(64, '	test888', 0, 0, ''),
(65, 'some lunch	', 0, 0, ''),
(66, 'some lunch	', 0, 0, ''),
(67, 'some lunch	', 0, 0, ''),
(68, 'some lunch	', 0, 0, ''),
(69, 'some lunch	', 0, 0, ''),
(70, 'some lunch	', 0, 0, ''),
(71, 'testpooqpq', 0, 0, ''),
(72, 'testpooqpq', 0, 0, ''),
(73, 'testpooqpq', 0, 0, ''),
(74, '', 0, 0, ''),
(75, 'testpooqpq', 0, 0, ''),
(76, 'testpooqpq', 0, 0, ''),
(77, 'Ameen', 0, 0, ''),
(78, 'Ameen', 0, 0, ''),
(79, 'Ameen', 0, 0, ''),
(80, 'Ameen', 0, 0, ''),
(81, 'Ameen', 0, 0, ''),
(82, 'Ameen', 0, 0, ''),
(106, 'Yoogoo', 0, 0, ''),
(107, 'Yoogoo', 0, 0, ''),
(108, 'Yoogoo', 0, 0, ''),
(109, 'Yoogoo', 0, 0, ''),
(110, 'Yoogoo', 0, 0, ''),
(111, 'Yoogoo', 0, 0, ''),
(112, 'Yoogoo', 0, 0, ''),
(113, 'Yoogoo', 0, 0, ''),
(114, 'Yoogoo', 0, 0, ''),
(115, 'Yoogoo', 0, 0, ''),
(116, 'Yoogoo', 0, 0, ''),
(117, '', 0, 0, ''),
(118, '	Yello', 0, 0, ''),
(119, '	Yello', 0, 0, ''),
(120, '	Yello', 0, 0, ''),
(121, '	Yello', 0, 0, ''),
(122, '	Yello', 0, 0, ''),
(123, '	Yello', 0, 0, ''),
(124, 'Black horse', 0, 0, ''),
(125, 'Red Rabbit', 0, 0, ''),
(126, 'test5050', 0, 0, ''),
(127, 'test5050', 0, 0, ''),
(128, 'test5050', 0, 0, ''),
(129, 'blackCoatHat', 0, 0, ''),
(130, 'blackCoatHat', 0, 0, ''),
(131, 'blackCoatHat', 0, 0, ''),
(132, 'blackCoatHat', 0, 0, ''),
(133, 'blackCoatHat', 0, 0, ''),
(134, 'blackCoatHat', 0, 0, ''),
(135, 'blackCoatHat', 0, 0, ''),
(136, 'blackCoatHat', 0, 0, ''),
(137, 'blackCoatHat', 0, 0, ''),
(138, 'blackCoatHat', 0, 0, ''),
(139, 'Hello test this maker', 0, 0, ''),
(140, 'Blob	', 0, 0, ''),
(141, 'Ameen', 0, 0, ''),
(142, 'Ameen', 0, 0, ''),
(143, 'Iftar party', 0, 0, ''),
(144, 'Iftar party22', 0, 0, ''),
(145, 'hello dude', 0, 0, ''),
(146, 'blaooga', 0, 0, ''),
(147, 'Rambo!', 0, 0, ''),
(148, 'OkayLunch', 0, 0, ''),
(149, 'SuperLunch', 0, 0, ''),
(150, 'SuperDuperLunch', 0, 0, ''),
(151, 'test09191	', 0, 0, ''),
(152, 'BLockLunch	', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `event_choices`
--

CREATE TABLE IF NOT EXISTS `event_choices` (
  `event_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  PRIMARY KEY (`event_id`,`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_choices`
--

INSERT INTO `event_choices` (`event_id`, `res_id`) VALUES
(116, 1),
(116, 6),
(118, 3),
(118, 4),
(119, 3),
(119, 4),
(120, 3),
(120, 4),
(121, 3),
(121, 4),
(122, 3),
(122, 4),
(123, 3),
(123, 4),
(124, 1),
(124, 2),
(124, 3),
(124, 4),
(124, 5),
(124, 6),
(125, 2),
(125, 3),
(125, 4),
(125, 5),
(125, 6),
(126, 1),
(126, 2),
(126, 3),
(126, 4),
(126, 5),
(126, 6),
(127, 1),
(127, 2),
(127, 3),
(127, 4),
(127, 5),
(127, 6),
(128, 1),
(128, 2),
(128, 3),
(128, 4),
(128, 5),
(128, 6),
(129, 3),
(129, 4),
(129, 5),
(129, 6),
(130, 3),
(130, 4),
(130, 5),
(130, 6),
(131, 3),
(131, 4),
(131, 5),
(131, 6),
(132, 3),
(132, 4),
(132, 5),
(132, 6),
(133, 3),
(133, 4),
(133, 5),
(133, 6),
(134, 3),
(134, 4),
(134, 5),
(134, 6),
(135, 3),
(135, 4),
(135, 5),
(135, 6),
(136, 3),
(136, 4),
(136, 5),
(136, 6),
(137, 3),
(137, 4),
(137, 5),
(137, 6),
(138, 3),
(138, 4),
(138, 5),
(138, 6),
(139, 1),
(139, 2),
(139, 3),
(139, 4),
(139, 5),
(139, 6),
(140, 1),
(140, 2),
(140, 3),
(140, 4),
(140, 5),
(140, 6),
(141, 2),
(141, 4),
(141, 6),
(142, 2),
(142, 4),
(142, 6),
(143, 2),
(143, 3),
(143, 5),
(143, 6),
(144, 2),
(144, 3),
(144, 5),
(144, 6),
(145, 1),
(145, 2),
(146, 5),
(146, 6),
(147, 1),
(147, 2),
(147, 3),
(147, 4),
(147, 5),
(147, 6),
(148, 1),
(148, 2),
(148, 3),
(148, 4),
(148, 5),
(148, 6),
(149, 1),
(149, 2),
(149, 4),
(150, 4),
(150, 6),
(151, 1),
(151, 3),
(151, 5),
(152, 1),
(152, 2),
(152, 6);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `res_id` int(11) NOT NULL AUTO_INCREMENT,
  `res_name` varchar(255) NOT NULL,
  PRIMARY KEY (`res_id`,`res_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`res_id`, `res_name`) VALUES
(1, 'Chinese'),
(2, 'Dishoom'),
(3, 'Sainsburys'),
(4, 'Goodge Street'),
(5, 'Pret'),
(6, 'Subway');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `event_id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `res_id` int(11) NOT NULL,
  KEY `event_id` (`event_id`,`email_address`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`event_id`, `email_address`, `res_id`) VALUES
(1, 'ameenaziz@gmail.com', 1),
(1, 'arif.shanji@gmail.com', 1),
(1, 'blah2@gmail.com', 1),
(1, 'blah@gmail.com', 2),
(148, '', 6),
(149, '', 1),
(150, '', 4),
(150, '', 4),
(150, '', 4),
(150, '', 6),
(150, '', 6),
(150, '', 6),
(150, '', 6),
(150, '', 6),
(150, '', 6),
(150, '', 6),
(150, '', 6),
(150, '', 6),
(150, '', 4),
(150, '', 4),
(152, '', 1),
(152, '', 2),
(152, '', 2),
(152, '', 6),
(152, '', 1),
(152, '', 2),
(152, '', 6),
(152, '', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
