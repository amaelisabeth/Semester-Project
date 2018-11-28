-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 06:07 PM
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
-- Table structure for table `answers_a`
--

CREATE TABLE `answers_a` (
  `answerID` int(11) NOT NULL,
  `answer` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `questionID` int(11) NOT NULL,
  `correct` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers_a`
--

INSERT INTO `answers_a` (`answerID`, `answer`, `questionID`, `correct`) VALUES
(0, 'Why does computer hardware cost so much?', 1, 1),
(1, 'True', 2, 0),
(2, 'Software suffers from exposure to hostile environments', 3, 0),
(3, 'True', 4, 0),
(4, 'True', 5, 0),
(5, 'Process', 6, 0),
(6, 'True', 7, 0),
(7, 'communication, planning, modeling, construction, deployment', 8, 1),
(8, 'True', 9, 1),
(9, 'True', 10, 1),
(10, 'Concurrent process flow', 11, 0),
(11, 'True', 12, 0),
(12, 'True', 13, 0),
(13, 'True', 14, 1),
(14, 'SEI', 15, 0),
(15, 'A reasonable approach when requirements are well defined.', 16, 1),
(16, 'A reasonable approach when requirements are well defined.', 17, 0),
(17, 'Are iterative in nature.', 18, 0),
(18, 'A reasonable approach when requirements are well defined.', 19, 0),
(19, 'Ends with the delivery of the software product.', 20, 0),
(20, 'True', 21, 0),
(21, 'Eliminate the use of project planning and testing', 22, 1),
(22, 'Requirements gathering must be conducted very carefully', 23, 0),
(23, 'True', 24, 1),
(24, 'True', 25, 1),
(25, 'True', 26, 0),
(26, 'Attentive to detail', 27, 0),
(27, 'True', 28, 1),
(28, 'True', 29, 1),
(29, 'Frenzied work atmosphere', 30, 0),
(30, 'True', 31, 0),
(31, 'All design should be as simple as possible, but no simpler.', 32, 0),
(32, 'True', 33, 0),
(33, 'True', 34, 1),
(34, 'adjust the granularity of the plan', 35, 0),
(35, 'True', 36, 1),
(36, 'basic problem understanding', 37, 0),
(37, 'budgeting', 38, 0),
(38, 'True', 39, 0),
(39, 'True', 40, 1),
(40, 'Behavioral elements', 41, 0),
(41, 'define set of software requirements that can be validated', 42, 0),
(42, 'True', 43, 1),
(43, 'True', 44, 0),
(44, 'True', 45, 1),
(45, 'events', 46, 0),
(46, 'True', 47, 1),
(47, 'True', 48, 0),
(48, 'computation', 49, 0),
(49, 'True', 50, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers_a`
--
ALTER TABLE `answers_a`
  ADD PRIMARY KEY (`answerID`),
  ADD KEY `questionID` (`questionID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers_a`
--
ALTER TABLE `answers_a`
  ADD CONSTRAINT `answers_a_ibfk_1` FOREIGN KEY (`questionID`) REFERENCES `questions` (`questionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
