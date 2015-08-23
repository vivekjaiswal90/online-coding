-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2012 at 08:32 AM
-- Server version: 5.5.18
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_competitions`
--

CREATE TABLE IF NOT EXISTS `active_competitions` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `active_competitions`
--

INSERT INTO `active_competitions` (`id`, `name`, `start_date`, `end_date`) VALUES
(1, 'March CookOff  Round1', '2012-03-25 17:00:00', '2012-03-28 00:00:00'),
(2, 'March CookOff  Round2', '2012-03-25 17:00:00', '2012-03-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `name` varchar(100) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`name`, `count`) VALUES
('dipen', 1),
('Easy', 7),
('Medium', 1),
('test', 6),
('test5', 2);

-- --------------------------------------------------------

--
-- Table structure for table `forum_topics`
--

CREATE TABLE IF NOT EXISTS `forum_topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(50) NOT NULL,
  `postedby` varchar(50) NOT NULL,
  `views` int(11) NOT NULL,
  `replies` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `forum_topics`
--

INSERT INTO `forum_topics` (`id`, `topic`, `postedby`, `views`, `replies`) VALUES
(1, 'test', 'admin', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `disable` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`, `disable`) VALUES
(0, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 0),
(1, 'amol', '15e43f79e4563fde6c3452592b20e2241738524d', 'judge', 0),
(6, 'amolamol', 'a17403c6476ac242137be85f507f3d8e6ad60e93', 'norm', 0),
(7, 'dipen', '78d392292c667f00619f52b5ba7aad520bf1275a', 'norm', 0),
(8, 'amit', '76b1832478b510fa51d4b2ef52dfd59ca0400db1', 'norm', 0),
(13, 'amit11', '7c499cef45910b00274088ff76088dde01e7d9cc', 'norm', 0),
(14, 'amit12', '7bb9dd2539f11a13952b51b35bfa891042757973', 'norm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE IF NOT EXISTS `problems` (
  `code` varchar(100) NOT NULL COMMENT 'code of the Question',
  `name` varchar(100) NOT NULL COMMENT 'name of the question',
  `section` varchar(10) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `input` varchar(500) NOT NULL,
  `output` varchar(500) NOT NULL,
  `constraints` varchar(500) NOT NULL,
  `sample_input` varchar(500) NOT NULL,
  `sample_output` varchar(500) NOT NULL,
  `explanation` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `time_limit` int(10) NOT NULL,
  `source_limit` int(10) NOT NULL,
  `languages` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`code`, `name`, `section`, `description`, `input`, `output`, `constraints`, `sample_input`, `sample_output`, `explanation`, `date`, `time_limit`, `source_limit`, `languages`) VALUES
('a', 'a', 'Easy', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '2012-03-05', 2, 2, 'C,C++'),
('b', 'a', 'Easy', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '2012-03-05', 2, 2, 'C,C++'),
('a', 'a', 'Easy', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '2012-03-05', 2, 2, 'C,C++'),
('a', 'a', 'Easy', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '2012-03-05', 2, 2, 'C,C++'),
('a', 'a', 'Easy', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '2012-03-05', 2, 2, 'C,C++'),
('MSIC', 'Musical water Fountains', 'test', 'Andhra Pradesh tourism is planning to construct a park and install water fountains. It is planning to organize "Musical Fountain" shows. The fountains shoot water in air in varying directions and with varying heights. Fountains are to be installed in a row such that water from all the fountains is visible.\r\n\r\nYou are given int [ ] height, int [ ] turnOnTime, and int [ ] turnOffTime. height represents how high each fountain shoots water in air, turnOnTime represents the time when fountain shoots the water in air and turnOffTime represents the time when fountain stops shooting the water. Musical fountain show would be for 30 minutes. Elements in turnOnTime and turnOffTime will be a number between 1 and 30 inclusive and turnOffTime [ i ] will always be greater than turnOnTime [ i ]. Fountain that shoots water high in air is to be installed as far as possible. The fountain that shoots water with less height must be installed in front of the fountain that shoots water high in air to prevent blocking. A fountain can start shooting water and other stops at the same minute but still one can block the other. You should also try to have the fountain with maximum possible height being first in the park.\r\n\r\nYou should return a int[ ] which contains the elements of height in the order you should install fountains to achieve the above goal. The front of the park is represented by the first element in your return value, and is where you view the fountains from. The elements in height [ ] will all be unique ', '', '', '- height will have between 2 and 10 unique elements, inclusive.\r\n- turnOnTime and turnOffTime will have the same number of elements as height.\r\n- Each element of height will be between 1 and 30 meters, inclusive.\r\n- Each element of turnOnTime and turnOffTime will be between 1 and 30 minutes, inclusive.\r\n- For each element i of turnOnTime and turnOffTime, turnOffTime [ i ] will be greater than turnOnTime [ i ].\r\n', 'height [ ] = {6, 5, 4, 3, 2, 1}\r\nturnOnTime [ ] = {1, 1, 1, 1, 1, 1}\r\nturnOffTime [ ] = {30, 30, 30, 30, 30, 30}\r\nReturns: {1, 2, 3, 4, 5, 6} ', 'height [ ] = {6, 5, 4, 3, 2, 1}\r\nturnOnTime [ ] = {1, 1, 1, 1, 1, 1}\r\nturnOffTime [ ] = {30, 30, 30, 30, 30, 30}\r\nReturns: {1, 2, 3, 4, 5, 6} ', 'All fountains start at 1st minute and stop at 30th minute. All will block each other; you must order them from shortest to tallest. ', '2012-03-06', 4, 20000, 'C,C++'),
('nkln', 'hgjhg', 'test', 'hgjg', 'hgfhjgjk', 'gfh', 'ghfhq', 'hhlk', 'jkgk', 'hfhyfjhnbv', '2012-03-06', 2, 20000, 'C,C++'),
('nkln', 'hgjhg', 'test', 'hgjg', 'hgfhjgjk', 'gfh', 'ghfhq', 'hhlk', 'jkgk', 'hfhyfjhnbv', '2012-03-06', 2, 20000, 'C,C++'),
('nkln', 'hgjhg', 'test', 'hgjg', 'hgfhjgjk', 'gfh', 'ghfhq', 'hhlk', 'jkgk', 'hfhyfjhnbv', '2012-03-06', 2, 20000, 'C,C++'),
('nkln', 'hgjhg', 'test', 'hgjg', 'hgfhjgjk', 'gfh', 'ghfhq', 'hhlk', 'jkgk', 'hfhyfjhnbv', '2012-03-06', 2, 20000, 'C,C++'),
('EASY-1', 'DEBY', 'test5', 'Debayan is very fond of Linux and likes Linux Words a lot. A Linux Word is a word that consists of only the letters L, I, N, U, and X in that exact relative order. There must be exactly one L, exactly one I, one or more Ns, exactly one U and exactly one X. Case does not matter. For example, "Linux", "Linnnux" are linux words, whereas "Llinux", "Linuxx" are not.\r\n\r\nYou are given a String word which you must turn into a Linux Word. For each character in word, you can either replace it with a different letter or leave it unchanged. No other operations, like inserting new characters or deleting existing characters, are allowed. Printing the minimal number of characters you must replace to get a Linux Word. If it''s impossible, return -1.\r\n', 'First line will be the number of testcases N, the following N lines will contain N words without any space.', 'N lines printing the desired output.', '', '4\r\nLinux\r\nLinnnnnUx\r\nLnux\r\nCodecracker\r\n', '0\r\n0\r\n-1\r\n11\r\n', '', '2012-03-12', 1, 10000, 'C,C++'),
('MEDIUM-1', '', 'Easy', 'Roshan likes to play with numbers a lot, given a sequence of numbers he was keen in finding the longest "Crooked sub-sequence".\r\nA sequence is Crooked if the difference between consequtive numbers alternate between positive and negative.\r\nExample : 2,10,3,5,4 is a Crooked sequence, because the differences (8,-7,2,-1) are alternatively positive and negative.\r\n\r\nGiven a sequence of integers return the length of the longest sub-sequence of sequence that is a crooked sequence. \r\n', 'First line will be the number of testcases N, the following N lines will contain N sequences.\r\n', 'First line will be the number of testcases N, the following N lines will contain N sequences.\r\n', '', '4\r\n1 7 4 9 2 5\r\n1 17 5 10 13 15 10 5 16 8\r\n44\r\n1 2', '6\r\n7\r\n1\r\n2', '', '2012-03-13', 2, 10000, 'C,C++'),
('Numbers1', 'Numbers', 'test5', 'Roshan likes to play with numbers a lot, given a sequence of numbers he was keen in finding the longest "Crooked sub-sequence".\r\nA sequence is Crooked if the difference between consequtive numbers alternate between positive and negative.\r\nExample : 2,10,3,5,4 is a Crooked sequence, because the differences (8,-7,2,-1) are alternatively positive and negative.\r\n\r\nGiven a sequence of integers return the length of the longest sub-sequence of sequence that is a crooked sequence. \r\n', 'First line will be the number of testcases N, the following N lines will contain N sequences.', 'First line will be the number of testcases N, the following N lines will contain N sequences.', '', '4\r\n1 7 4 9 2 5\r\n1 17 5 10 13 15 10 5 16 8\r\n44\r\n1 2\r\n', '6\r\n7\r\n1\r\n2', '', '2012-03-13', 2, 10000, 'C,C++'),
('uio', 'jj', 'Easy', '\r\nDebayan is very fond of Linux and likes Linux Words a lot. A Linux Word is a word that consists of only the letters L, I, N, U, and X in that exact relative order. There must be exactly one L, exactly one I, one or more Ns, exactly one U and exactly one X. Case does not matter. For example, "Linux", "Linnnux" are linux words, whereas "Llinux", "Linuxx" are not.\r\n\r\nYou are given a String word which you must turn into a Linux Word. For each character in word, you can either replace it with a different letter or leave it unchanged. No other operations, like inserting new characters or deleting existing characters, are allowed. Printing the minimal number of characters you must replace to get a Linux Word. If it''s impossible, return -1.\r\n', 'First line will be the number of testcases N, the following N lines will contain N words without any space.', 'N lines printing the desired output.', '', '4\r\nLinux\r\nLinnnnnUx\r\nLnux\r\nCodecracker\r\n', '0\r\n0\r\n-1\r\n11\r\n', '', '2012-03-13', 3, 34567, 'C,C++'),
('try', 'fg', 'Medium', 'gy', '', '', '', '', '', '', '2012-03-13', 2, 56789, 'C,C++'),
('EASY2', 'EASY2', 'test', '\r\n\r\nSwapnil discovered a new dice game, where five dices are used. Your task is to calculate the score in the first phase of Swapnil''s game. The score is determined by the values on the upward die faces after a roll. Then the player chooses a value, and all the dice showing those values are considered active. The score is simply the summation of the values on active dice.\r\n\r\nFor example, the player rolls the 5 dices and gets the values 2,2,3,5 and 4. Choosing the value 2 makes the dice showing 2 active and yields a score of 2 + 2 = 4, while choosing 5 makes the one die showing 5 active, yielding a score of 5.\r\n\r\nGiven the values of the 5 dices after they are rolled, print the maximal possible score with these values.', 'First line will be the number of testcases N, the following N lines will contain 5 numbers between 1 and 6.\r\n', 'N lines printing the maximal score.\r\n', '', '3\r\n2 2 3 4 5\r\n1 6 4 1 3\r\n5 3 3 3 5\r\n', '5\r\n6\r\n10\r\n', '', '2012-03-22', 2, 10000, 'C,C++'),
('Easy_3', 'Easy 3', 'dipen', 'Rajat is fond of collecting coins, he decides to number some of his favourite coins distictively. Each coin can have a number between 1 and the value of the coin, both inclusive. Rajat wants to know the possible number of ways of numbering the coins.\r\nPrint the number of ways Rajat can assign numbers to his coins, modulo 1,000,000,007. If it''s impossible to assign distinct integers to the coins, print 0.\r\n\r\nExample : If the value of the coins are 4,4,4,4. All permutations of {1,2,3,4} are possible, so answer is 24.\r\n', 'First line will contain the number of test cases N, followed by N lines containing the value of the favourite coins.', 'Output N lines the number of ways Rajat can assign numbers to his favourite coins, modulo 1,000,000,007.\r\n', '', '4\r\n5\r\n4 4 4 4\r\n5 8\r\n2 1 2', '5\r\n24\r\n35\r\n0\r\n', '', '2012-03-25', 1, 10000, 'C,C++');

-- --------------------------------------------------------

--
-- Table structure for table `solved_count`
--

CREATE TABLE IF NOT EXISTS `solved_count` (
  `code` varchar(50) NOT NULL,
  `total_submissions` int(50) NOT NULL,
  `correct_submissions` int(50) NOT NULL,
  `accuracy` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `solved_count`
--

INSERT INTO `solved_count` (`code`, `total_submissions`, `correct_submissions`, `accuracy`) VALUES
('a', 0, 0, 0),
('nkln', 0, 0, 0),
('nkln', 0, 0, 0),
('a', 0, 0, 0),
('EASY-1', 0, 0, 0),
('MEDIUM-1', 0, 0, 0),
('Numbers1', 0, 0, 0),
('uio', 0, 0, 0),
('try', 0, 0, 0),
('EASY2', 0, 0, 0),
('Easy_3', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `submissions_list`
--

CREATE TABLE IF NOT EXISTS `submissions_list` (
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `execution_time` float(3,3) NOT NULL,
  `correct` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `submissions_list`
--

INSERT INTO `submissions_list` (`sl`, `name`, `code`, `language`, `username`, `execution_time`, `correct`) VALUES
(1, 'name', 'EASY2', 'cpp', '', 0.000, 1),
(2, 'name', 'EASY2', 'cpp', '', 0.000, 1),
(3, 'name', 'EASY2', 'cpp', '', 0.000, 1),
(4, 'name', 'EASY2', 'cpp', '', 0.000, 1),
(5, 'name', 'EASY2', 'cpp', '', 0.000, 1),
(6, 'name', 'EASY2', 'cpp', '', 0.000, 1),
(7, 'name', 'EASY2', 'cpp', '', 0.000, 1),
(8, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(9, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(10, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(11, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(12, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(13, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(14, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(15, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(16, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(17, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(18, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(19, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(20, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(21, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(22, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(23, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(24, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(25, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 1),
(26, 'name', 'Numbers1', 'cpp', 'amolamol', 0.000, 0),
(27, 'name', 'EASY2', 'cpp', 'amolamol', 0.000, 0),
(28, 'name', 'Easy_3', 'cpp', 'amolamol', 0.000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userentry`
--

CREATE TABLE IF NOT EXISTS `userentry` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id of the user',
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `college` varchar(40) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `userentry`
--

INSERT INTO `userentry` (`id`, `username`, `password`, `first_name`, `last_name`, `sex`, `college`, `roll`, `dept`, `year`, `mobile`) VALUES
(1, 'amol', 'amol', 'amol', 'amol', 'M', 'NIT', '09/IT,37', 'IT', 'Third', 7602968634),
(6, 'amolamol', 'a17403c6476ac242137be85f507f3d8e6ad60e93', 'aaaa', 'aaaaa', 'M', 'aaa', 'aa', 'BT', 'First', 9602680258),
(7, 'dipen', 'dipen', 'Dipen', 'Thapa', 'M', 'NIT DGP', '09/IT/40', 'IT', 'Third', 9632145678),
(8, 'amit', '76b1832478b510fa51d4b2ef52dfd59ca0400db1', 'amit', 'bansal', 'M', 'NIT DGP', '09/It/41', 'IT', 'Third', 9884321098),
(12, 'ashu', '7c499cef45910b00274088ff76088dde01e7d9cc', 'amit11', 'bansal', 'M', 'NIT DGP', '09/It/41', 'IT', 'Third', 9884321098),
(13, 'amit11', '7c499cef45910b00274088ff76088dde01e7d9cc', 'amit', 'bansal', 'M', 'NIT DGP', '09/It/41', 'IT', 'Third', 9884321098),
(14, 'amit12', '7bb9dd2539f11a13952b51b35bfa891042757973', 'amit', 'bansal', 'M', 'NIT DGP', '09/It/41', 'IT', 'Third', 9884321098);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
