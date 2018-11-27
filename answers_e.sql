-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 06:11 PM
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
-- Table structure for table `answers_e`
--

CREATE TABLE `answers_e` (
  `answerID` int(11) NOT NULL,
  `answer` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `questionID` int(11) NOT NULL,
  `correct` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers_e`
--

INSERT INTO `answers_e` (`answerID`, `answer`, `questionID`, `correct`) VALUES
(0, NULL, 1, 0),
(1, NULL, 2, 0),
(2, NULL, 3, 0),
(3, NULL, 4, 0),
(4, NULL, 5, 0),
(5, NULL, 6, 0),
(6, NULL, 7, 0),
(7, NULL, 8, 0),
(8, NULL, 9, 0),
(9, NULL, 10, 0),
(10, 'both b and c', 11, 1),
(11, NULL, 12, 0),
(12, NULL, 13, 0),
(13, NULL, 14, 0),
(14, 'both b and d', 15, 1),
(15, NULL, 16, 0),
(16, NULL, 17, 0),
(17, NULL, 18, 0),
(18, NULL, 19, 0),
(19, NULL, 20, 0),
(20, NULL, 21, 0),
(21, NULL, 22, 0),
(22, 'Both c and d', 23, 1),
(23, NULL, 24, 0),
(24, NULL, 25, 0),
(25, NULL, 26, 0),
(26, NULL, 27, 0),
(27, NULL, 28, 0),
(28, NULL, 29, 0),
(29, 'a,b,d', 30, 1),
(30, NULL, 31, 0),
(31, NULL, 32, 0),
(32, NULL, 33, 0),
(33, NULL, 34, 0),
(34, NULL, 35, 0),
(35, NULL, 36, 0),
(36, 'a, b, c', 37, 1),
(37, 'b,c,d', 38, 1),
(38, NULL, 39, 0),
(39, NULL, 40, 0),
(40, NULL, 41, 0),
(41, NULL, 42, 0),
(42, NULL, 43, 0),
(43, NULL, 44, 0),
(44, NULL, 45, 0),
(45, NULL, 46, 0),
(46, NULL, 47, 0),
(47, NULL, 48, 0),
(48, NULL, 49, 0),
(49, NULL, 50, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers_e`
--
ALTER TABLE `answers_e`
  ADD PRIMARY KEY (`answerID`),
  ADD KEY `questionID` (`questionID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers_e`
--
ALTER TABLE `answers_e`
  ADD CONSTRAINT `answers_e_ibfk_1` FOREIGN KEY (`questionID`) REFERENCES `questions` (`questionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
