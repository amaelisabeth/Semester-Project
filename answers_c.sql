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
-- Table structure for table `answers_c`
--

CREATE TABLE `answers_c` (
  `answerID` int(11) NOT NULL,
  `answer` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `questionID` int(11) NOT NULL,
  `correct` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers_c`
--

INSERT INTO `answers_c` (`answerID`, `answer`, `questionID`, `correct`) VALUES
(0, 'Why does it cost so much to develop a piece of software?', 1, 0),
(1, NULL, 2, 0),
(2, 'Multiple change requests introduce errors in component interactions', 3, 1),
(3, NULL, 4, 0),
(4, NULL, 5, 0),
(5, 'Methods', 6, 0),
(6, NULL, 7, 0),
(7, 'analysis, designing, programming, debugging, maintenance', 8, 0),
(8, NULL, 9, 0),
(9, NULL, 10, 0),
(10, 'Linear process flow', 11, 0),
(11, NULL, 12, 0),
(12, NULL, 13, 0),
(13, NULL, 14, 0),
(14, 'ISO 9000', 15, 0),
(15, 'The best approach to use for projects with large development teams.', 16, 0),
(16, 'The best approach to use for projects with large development teams.', 17, 0),
(17, 'Do not generally produce throwaway systems.', 18, 0),
(18, 'The best approach to use for projects with large development teams.', 19, 0),
(19, 'Includes project risks evaluation during each iteration.', 20, 1),
(20, NULL, 21, 0),
(21, 'Process allows team to streamline tasks', 22, 0),
(22, 'Software increments must be delivered in short time periods', 23, 0),
(23, NULL, 24, 0),
(24, NULL, 25, 0),
(25, NULL, 26, 0),
(26, 'Follows process rule dogmatically', 27, 1),
(27, NULL, 28, 0),
(28, NULL, 29, 0),
(29, 'Poorly coordinated software process', 30, 0),
(30, NULL, 31, 0),
(31, 'Pareto principle (20% of any product requires 80% of the effort).', 32, 1),
(32, NULL, 33, 0),
(33, NULL, 34, 0),
(34, 'get all team members to “sign up” to the plan', 35, 1),
(35, NULL, 36, 0),
(36, 'people who want a solution', 37, 0),
(37, 'understanding', 38, 0),
(38, NULL, 39, 0),
(39, NULL, 40, 0),
(40, 'Data elements', 41, 1),
(41, 'develop an abbreviated solution for the problem', 42, 1),
(42, NULL, 43, 0),
(43, NULL, 44, 0),
(44, NULL, 45, 0),
(45, 'structures', 46, 0),
(46, NULL, 47, 0),
(47, NULL, 48, 0),
(48, 'event monitors', 49, 0),
(49, NULL, 50, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers_c`
--
ALTER TABLE `answers_c`
  ADD PRIMARY KEY (`answerID`),
  ADD KEY `questionID` (`questionID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers_c`
--
ALTER TABLE `answers_c`
  ADD CONSTRAINT `answers_c_ibfk_1` FOREIGN KEY (`questionID`) REFERENCES `questions` (`questionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
