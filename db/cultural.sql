-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2015 at 12:57 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cultural`
--

-- --------------------------------------------------------

--
-- Table structure for table `chorale`
--

CREATE TABLE IF NOT EXISTS `chorale` (
`chorale_id` int(12) NOT NULL,
  `musical` text NOT NULL,
  `visual` int(12) NOT NULL,
  `appropriateness` int(12) NOT NULL,
  `stage` int(12) NOT NULL,
  `total` int(12) NOT NULL,
  `group_num` int(3) NOT NULL,
  `judge_id` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chorale`
--

INSERT INTO `chorale` (`chorale_id`, `musical`, `visual`, `appropriateness`, `stage`, `total`, `group_num`, `judge_id`) VALUES
(5, '27', 27, 22, 12, 88, 1, '1'),
(6, '28', 28, 23, 13, 92, 2, '1'),
(7, '29', 29, 24, 14, 96, 3, '1'),
(8, '30', 30, 25, 15, 100, 4, '1'),
(9, '30', 30, 25, 15, 100, 1, '4'),
(10, '30', 30, 25, 15, 100, 2, '4'),
(11, '30', 30, 25, 15, 100, 3, '4'),
(12, '30', 30, 25, 15, 100, 4, '4'),
(13, '30', 30, 25, 15, 100, 1, '5'),
(14, '30', 30, 25, 15, 100, 2, '5'),
(15, '30', 30, 25, 15, 100, 3, '5'),
(16, '30', 30, 25, 15, 100, 4, '5');

-- --------------------------------------------------------

--
-- Table structure for table `dancesports`
--

CREATE TABLE IF NOT EXISTS `dancesports` (
`dance_id` int(12) NOT NULL,
  `type` text NOT NULL,
  `floorcraft` int(12) NOT NULL,
  `timing` int(12) NOT NULL,
  `bodylines` int(12) NOT NULL,
  `footwork` int(12) NOT NULL,
  `movement` int(12) NOT NULL,
  `total` int(12) NOT NULL,
  `couple_num` int(3) NOT NULL,
  `judge_id` varchar(12) NOT NULL,
  `interpretation` int(11) NOT NULL,
  `characterization` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dancesports`
--

INSERT INTO `dancesports` (`dance_id`, `type`, `floorcraft`, `timing`, `bodylines`, `footwork`, `movement`, `total`, `couple_num`, `judge_id`, `interpretation`, `characterization`) VALUES
(17, 'Modern Standard', 9, 14, 9, 9, 14, 93, 1, '1', 19, 19),
(18, 'Modern Standard', 8, 13, 8, 8, 14, 87, 2, '1', 18, 18),
(19, 'Modern Standard', 7, 12, 7, 7, 12, 79, 3, '1', 17, 17),
(20, 'Modern Standard', 6, 11, 6, 6, 11, 72, 4, '1', 16, 16),
(21, 'Latin American', 9, 14, 9, 9, 14, 93, 1, '1', 19, 19),
(22, 'Latin American', 8, 13, 8, 8, 13, 86, 2, '1', 18, 18),
(23, 'Latin American', 7, 12, 8, 7, 11, 79, 3, '1', 17, 17),
(24, 'Latin American', 6, 11, 6, 6, 11, 72, 4, '1', 16, 16),
(25, 'Modern Standard', 10, 15, 10, 10, 15, 100, 1, '4', 20, 20),
(26, 'Modern Standard', 10, 15, 10, 10, 15, 100, 2, '4', 20, 20),
(27, 'Modern Standard', 10, 15, 10, 10, 15, 100, 3, '4', 20, 20),
(28, 'Modern Standard', 10, 15, 10, 10, 15, 100, 4, '4', 20, 20),
(29, 'Latin American', 10, 15, 10, 10, 15, 100, 1, '4', 20, 20),
(30, 'Latin American', 10, 15, 10, 10, 15, 100, 2, '4', 20, 20),
(31, 'Latin American', 10, 15, 10, 10, 15, 100, 3, '4', 20, 20),
(32, 'Latin American', 10, 15, 10, 10, 15, 100, 4, '4', 20, 20),
(33, 'Modern Standard', 10, 15, 10, 10, 15, 100, 1, '5', 20, 20),
(34, 'Modern Standard', 10, 15, 10, 10, 15, 100, 2, '5', 20, 20),
(35, 'Modern Standard', 10, 15, 10, 10, 15, 100, 3, '5', 20, 20),
(36, 'Modern Standard', 10, 15, 10, 10, 15, 100, 4, '5', 20, 20),
(37, 'Latin American', 10, 15, 10, 10, 15, 100, 1, '5', 20, 20),
(38, 'Latin American', 10, 15, 10, 10, 15, 100, 2, '5', 20, 20),
(39, 'Latin American', 10, 15, 10, 10, 15, 100, 3, '5', 20, 20),
(40, 'Latin American', 10, 15, 10, 10, 15, 100, 4, '5', 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `declamation`
--

CREATE TABLE IF NOT EXISTS `declamation` (
`declamation_id` int(12) NOT NULL,
  `type` text NOT NULL,
  `interpretation` int(12) NOT NULL,
  `diction` int(12) NOT NULL,
  `suitability` int(12) NOT NULL,
  `mastery` int(12) NOT NULL,
  `stage` int(12) NOT NULL,
  `total` int(12) NOT NULL,
  `declaimer_num` int(3) NOT NULL,
  `judge_id` varchar(12) NOT NULL,
  `ranking` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `declamation`
--

INSERT INTO `declamation` (`declamation_id`, `type`, `interpretation`, `diction`, `suitability`, `mastery`, `stage`, `total`, `declaimer_num`, `judge_id`, `ranking`) VALUES
(93, 'English', 35, 35, 15, 10, 5, 100, 1, '1', 1),
(94, 'English', 33, 35, 15, 10, 5, 98, 2, '1', 3),
(95, 'English', 35, 35, 15, 10, 5, 100, 3, '1', 1),
(96, 'English', 34, 35, 15, 10, 5, 99, 4, '1', 2),
(97, 'Filipino', 35, 35, 15, 10, 5, 100, 1, '1', 1),
(98, 'Filipino', 33, 35, 15, 10, 5, 98, 2, '1', 3),
(99, 'Filipino', 34, 35, 15, 10, 5, 99, 3, '1', 2),
(100, 'Filipino', 35, 35, 15, 10, 5, 100, 4, '1', 1),
(101, 'English', 32, 33, 15, 10, 5, 95, 1, '4', 3),
(102, 'English', 31, 33, 15, 10, 5, 94, 2, '4', 4),
(103, 'English', 34, 32, 15, 10, 5, 96, 3, '4', 2),
(104, 'English', 33, 35, 15, 10, 5, 98, 4, '4', 1),
(105, 'Filipino', 34, 32, 15, 10, 5, 96, 1, '4', 2),
(106, 'Filipino', 33, 34, 15, 10, 5, 97, 2, '4', 1),
(107, 'Filipino', 31, 35, 15, 10, 5, 96, 3, '4', 2),
(108, 'Filipino', 33, 32, 15, 10, 5, 95, 4, '4', 3),
(109, 'English', 32, 33, 15, 10, 5, 95, 1, '5', 3),
(110, 'English', 34, 34, 15, 10, 5, 98, 2, '5', 1),
(111, 'English', 32, 35, 15, 10, 5, 97, 3, '5', 2),
(112, 'English', 34, 33, 15, 10, 5, 97, 4, '5', 2),
(113, 'Filipino', 35, 32, 15, 10, 5, 97, 1, '5', 1),
(114, 'Filipino', 31, 34, 15, 10, 5, 95, 2, '5', 3),
(115, 'Filipino', 33, 32, 15, 10, 5, 95, 3, '5', 3),
(116, 'Filipino', 34, 33, 15, 10, 5, 97, 4, '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hiphop`
--

CREATE TABLE IF NOT EXISTS `hiphop` (
`group_id` int(12) NOT NULL,
  `choreography` int(11) NOT NULL,
  `performance` int(12) NOT NULL,
  `suitability` int(12) NOT NULL,
  `stage` int(12) NOT NULL,
  `total` int(12) NOT NULL,
  `group_num` int(3) NOT NULL,
  `judge_id` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hiphop`
--

INSERT INTO `hiphop` (`group_id`, `choreography`, `performance`, `suitability`, `stage`, `total`, `group_num`, `judge_id`) VALUES
(5, 39, 29, 19, 9, 96, 1, '1'),
(6, 38, 28, 18, 8, 92, 2, '1'),
(7, 37, 27, 17, 7, 88, 3, '1'),
(8, 36, 26, 16, 6, 84, 4, '1'),
(9, 40, 30, 20, 10, 100, 1, '4'),
(10, 40, 30, 20, 10, 100, 2, '4'),
(11, 40, 30, 20, 10, 100, 3, '4'),
(12, 40, 30, 20, 10, 100, 4, '4'),
(13, 40, 30, 20, 10, 100, 1, '5'),
(14, 40, 30, 20, 10, 100, 2, '5'),
(15, 40, 30, 20, 10, 100, 3, '5'),
(16, 40, 30, 20, 10, 100, 4, '5');

-- --------------------------------------------------------

--
-- Table structure for table `impromptu`
--

CREATE TABLE IF NOT EXISTS `impromptu` (
`impromptu_id` int(12) NOT NULL,
  `content` int(12) NOT NULL,
  `facility` int(12) NOT NULL,
  `organization` int(12) NOT NULL,
  `delivery` int(12) NOT NULL,
  `stage` int(12) NOT NULL,
  `total` int(12) NOT NULL,
  `speaker_num` int(3) NOT NULL,
  `judge_id` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `impromptu`
--

INSERT INTO `impromptu` (`impromptu_id`, `content`, `facility`, `organization`, `delivery`, `stage`, `total`, `speaker_num`, `judge_id`) VALUES
(1, 29, 24, 19, 14, 9, 95, 1, '1'),
(2, 28, 23, 18, 13, 8, 90, 2, '1'),
(3, 27, 22, 17, 12, 7, 85, 3, '1'),
(4, 26, 21, 16, 11, 6, 80, 4, '1'),
(5, 30, 25, 20, 15, 10, 100, 1, '4'),
(6, 30, 25, 20, 15, 10, 100, 2, '4'),
(7, 30, 25, 20, 15, 10, 100, 3, '4'),
(8, 30, 25, 20, 15, 10, 100, 4, '4'),
(9, 30, 25, 20, 15, 10, 100, 1, '5'),
(10, 30, 25, 20, 15, 10, 100, 2, '5'),
(11, 30, 25, 20, 15, 10, 100, 3, '5'),
(12, 30, 25, 20, 15, 10, 100, 4, '5');

-- --------------------------------------------------------

--
-- Table structure for table `judges`
--

CREATE TABLE IF NOT EXISTS `judges` (
`judge_id` int(7) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `mname` text NOT NULL,
  `password` text NOT NULL,
  `username` text NOT NULL,
  `e1` text NOT NULL,
  `e2` text NOT NULL,
  `e3` text NOT NULL,
  `e4` text NOT NULL,
  `e5` text NOT NULL,
  `e6` text NOT NULL,
  `e7` text NOT NULL,
  `e1_stat` text NOT NULL,
  `e2_stat` text NOT NULL,
  `e3_stat` text NOT NULL,
  `e4_stat` text NOT NULL,
  `e5_stat` text NOT NULL,
  `e6_stat` text NOT NULL,
  `e7_stat` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judges`
--

INSERT INTO `judges` (`judge_id`, `fname`, `lname`, `mname`, `password`, `username`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`, `e1_stat`, `e2_stat`, `e3_stat`, `e4_stat`, `e5_stat`, `e6_stat`, `e7_stat`, `type`) VALUES
(1, 'Emilio', 'Magtolis', 'Behasa', 'bcc', 'bcc', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'Done', 'Undone', 'Undone', 'Undone', 'Undone', 'Undone', 'Undone', 'Judge'),
(2, 'bcc', '', '', 'bcc', 'bcc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Tabulator'),
(4, 'xxx', 'xxx', 'xxx', 'xxx', 'xxx', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'Done', 'Done', 'Done', 'Done', 'Done', 'Done', 'Done', 'Judge'),
(5, 'zzz', 'zzz', 'zzz', 'zzz', 'zzz', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'Done', 'Done', 'Done', 'Done', 'Done', 'Done', 'Done', 'Judge');

-- --------------------------------------------------------

--
-- Table structure for table `number`
--

CREATE TABLE IF NOT EXISTS `number` (
  `num_id` int(11) NOT NULL,
  `grade_level` text NOT NULL,
  `team_name` text NOT NULL,
  `num` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `number`
--

INSERT INTO `number` (`num_id`, `grade_level`, `team_name`, `num`) VALUES
(1, 'Grade 7', 'Green Team', '1'),
(2, 'Grade 8', 'Gold Team', '2'),
(3, 'Grade 9', 'Red Team', '3'),
(4, 'Grade 10', 'Blue Team', '4');

-- --------------------------------------------------------

--
-- Table structure for table `popsong`
--

CREATE TABLE IF NOT EXISTS `popsong` (
`pop_id` int(12) NOT NULL,
  `tone` int(11) NOT NULL,
  `musicianship` int(12) NOT NULL,
  `diction` int(12) NOT NULL,
  `suitability` int(12) NOT NULL,
  `style` int(12) NOT NULL,
  `stage` int(12) NOT NULL,
  `total` int(12) NOT NULL,
  `singer_num` int(3) NOT NULL,
  `judge_id` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `popsong`
--

INSERT INTO `popsong` (`pop_id`, `tone`, `musicianship`, `diction`, `suitability`, `style`, `stage`, `total`, `singer_num`, `judge_id`) VALUES
(1, 29, 19, 9, 9, 19, 9, 94, 1, '1'),
(2, 28, 18, 8, 8, 18, 8, 88, 2, '1'),
(3, 27, 17, 7, 7, 17, 7, 82, 3, '1'),
(4, 26, 16, 6, 6, 16, 6, 76, 4, '1'),
(5, 30, 20, 10, 10, 20, 10, 100, 1, '4'),
(6, 30, 20, 10, 10, 20, 10, 100, 2, '4'),
(7, 30, 20, 10, 10, 20, 10, 100, 3, '4'),
(8, 30, 20, 10, 10, 20, 10, 100, 4, '4'),
(9, 30, 20, 10, 10, 20, 10, 100, 1, '5'),
(10, 30, 20, 10, 10, 20, 10, 100, 2, '5'),
(11, 30, 20, 10, 10, 20, 10, 100, 3, '5'),
(12, 30, 20, 10, 10, 20, 10, 100, 4, '5');

-- --------------------------------------------------------

--
-- Table structure for table `vocalsolo`
--

CREATE TABLE IF NOT EXISTS `vocalsolo` (
`vocalsolo_id` int(12) NOT NULL,
  `tone` int(11) NOT NULL,
  `musicianship` int(12) NOT NULL,
  `diction` int(12) NOT NULL,
  `suitability` int(12) NOT NULL,
  `stage` int(12) NOT NULL,
  `total` int(12) NOT NULL,
  `singer_num` int(3) NOT NULL,
  `judge_id` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vocalsolo`
--

INSERT INTO `vocalsolo` (`vocalsolo_id`, `tone`, `musicianship`, `diction`, `suitability`, `stage`, `total`, `singer_num`, `judge_id`) VALUES
(1, 39, 29, 9, 9, 9, 95, 1, '1'),
(2, 38, 28, 8, 8, 8, 90, 2, '1'),
(3, 37, 27, 7, 7, 7, 85, 3, '1'),
(4, 36, 26, 6, 6, 6, 80, 4, '1'),
(5, 40, 30, 10, 10, 10, 100, 1, '4'),
(6, 40, 30, 10, 10, 10, 100, 2, '4'),
(7, 40, 30, 10, 10, 10, 100, 3, '4'),
(8, 40, 30, 10, 10, 10, 100, 4, '4'),
(9, 40, 30, 10, 10, 10, 100, 1, '5'),
(10, 40, 30, 10, 10, 10, 100, 2, '5'),
(11, 40, 30, 10, 10, 10, 100, 3, '5'),
(12, 40, 30, 10, 10, 10, 100, 4, '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chorale`
--
ALTER TABLE `chorale`
 ADD PRIMARY KEY (`chorale_id`);

--
-- Indexes for table `dancesports`
--
ALTER TABLE `dancesports`
 ADD PRIMARY KEY (`dance_id`);

--
-- Indexes for table `declamation`
--
ALTER TABLE `declamation`
 ADD PRIMARY KEY (`declamation_id`);

--
-- Indexes for table `hiphop`
--
ALTER TABLE `hiphop`
 ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `impromptu`
--
ALTER TABLE `impromptu`
 ADD PRIMARY KEY (`impromptu_id`);

--
-- Indexes for table `judges`
--
ALTER TABLE `judges`
 ADD PRIMARY KEY (`judge_id`);

--
-- Indexes for table `number`
--
ALTER TABLE `number`
 ADD PRIMARY KEY (`num_id`);

--
-- Indexes for table `popsong`
--
ALTER TABLE `popsong`
 ADD PRIMARY KEY (`pop_id`);

--
-- Indexes for table `vocalsolo`
--
ALTER TABLE `vocalsolo`
 ADD PRIMARY KEY (`vocalsolo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chorale`
--
ALTER TABLE `chorale`
MODIFY `chorale_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `dancesports`
--
ALTER TABLE `dancesports`
MODIFY `dance_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `declamation`
--
ALTER TABLE `declamation`
MODIFY `declamation_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `hiphop`
--
ALTER TABLE `hiphop`
MODIFY `group_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `impromptu`
--
ALTER TABLE `impromptu`
MODIFY `impromptu_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `judges`
--
ALTER TABLE `judges`
MODIFY `judge_id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `popsong`
--
ALTER TABLE `popsong`
MODIFY `pop_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `vocalsolo`
--
ALTER TABLE `vocalsolo`
MODIFY `vocalsolo_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
