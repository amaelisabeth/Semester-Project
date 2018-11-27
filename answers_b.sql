-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 06:09 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers_b`
--

CREATE TABLE `answers_b` (
  `answerID` int(11) NOT NULL,
  `answer` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `questionID` int(11) NOT NULL,
  `correct` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers_b`
--

INSERT INTO `answers_b` (`answerID`, `answer`, `questionID`, `correct`) VALUES
(0, 'Why does software take a long time to finish?', 1, 0),
(1, 'False', 2, 1),
(2, 'Defects are more likely to arise after software has been used often', 3, 0),
(3, 'False', 4, 1),
(4, 'False', 5, 1),
(5, 'Manufacturing', 6, 1),
(6, 'False', 7, 1),
(7, 'communication, risk management, measurement, production, reviewing', 8, 0),
(8, 'False', 9, 0),
(9, 'False', 10, 0),
(10, 'Iterative process flow', 11, 0),
(11, 'False', 12, 1),
(12, 'False', 13, 1),
(13, 'False', 14, 0),
(14, 'SPICE', 15, 0),
(15, 'A good approach when a working program is required quickly.', 16, 0),
(16, 'A good approach when a working core product is required quickly.', 17, 1),
(17, 'Can easily accommodate product requirements changes.', 18, 0),
(18, 'A useful approach when a customer cannot define requirements clearly.', 19, 1),
(19, 'Is more chaotic than the incremental model.', 20, 0),
(20, 'False', 21, 1),
(21, 'Only essential work products are produced', 22, 0),
(22, 'Risk analysis must be conducted before planning takes place', 23, 0),
(23, 'False', 24, 0),
(24, 'False', 25, 0),
(25, 'False', 26, 1),
(26, 'Brutally honest', 27, 0),
(27, 'False', 28, 0),
(28, 'False', 29, 0),
(29, 'Inadequate budget', 30, 0),
(30, 'False', 31, 1),
(31, 'A software system exists only to provide value to its users.', 32, 0),
(32, 'False', 33, 1),
(33, 'False', 34, 0),
(34, 'control feature creep', 35, 0),
(35, 'False', 36, 0),
(36, 'nature of the solution needed', 37, 0),
(37, 'scope', 38, 0),
(38, 'False', 39, 1),
(39, 'False', 40, 0),
(40, 'Class-based elements', 41, 0),
(41, 'describe customer requirements', 42, 0),
(42, 'False', 43, 0),
(43, 'False', 44, 1),
(44, 'False', 45, 0),
(45, 'people', 46, 0),
(46, 'False', 47, 0),
(47, 'False', 48, 1),
(48, 'data manipulation', 49, 0),
(49, 'False', 50, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers_b`
--
ALTER TABLE `answers_b`
  ADD PRIMARY KEY (`answerID`),
  ADD KEY `questionID` (`questionID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers_b`
--
ALTER TABLE `answers_b`
  ADD CONSTRAINT `answers_b_ibfk_1` FOREIGN KEY (`questionID`) REFERENCES `questions` (`questionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
