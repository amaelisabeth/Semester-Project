-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 06:10 PM
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
-- Table structure for table `answers_d`
--

CREATE TABLE `answers_d` (
  `answerID` int(11) NOT NULL,
  `answer` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `questionID` int(11) NOT NULL,
  `correct` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers_d`
--

INSERT INTO `answers_d` (`answerID`, `answer`, `questionID`, `correct`) VALUES
(0, 'Why can’t software errors be removed from products prior to delivery?', 1, 0),
(1, NULL, 2, 0),
(2, 'Software spare parts become harder to order', 3, 0),
(3, NULL, 4, 0),
(4, NULL, 5, 0),
(5, 'Tools', 6, 0),
(6, NULL, 7, 0),
(7, 'analysis, planning, designing, programming, testing', 8, 0),
(8, NULL, 9, 0),
(9, NULL, 10, 0),
(10, 'Spiral process flow', 11, 0),
(11, NULL, 12, 0),
(12, NULL, 13, 0),
(13, NULL, 14, 0),
(14, 'ISO 9001', 15, 0),
(15, 'An old fashioned model that is rarely used any more.', 16, 0),
(16, 'A revolutionary model that is not used for commercial products.', 17, 0),
(17, 'All of the above.', 18, 1),
(18, 'A risky model that rarely produces a meaningful product.', 19, 0),
(19, 'All of the above.', 20, 0),
(20, NULL, 21, 0),
(21, 'Uses incremental product delivery strategy', 22, 0),
(22, 'Software processes must adapt to changes incrementally', 23, 0),
(23, NULL, 24, 0),
(24, NULL, 25, 0),
(25, NULL, 26, 0),
(26, 'Resilient under pressure', 27, 0),
(27, NULL, 28, 0),
(28, NULL, 29, 0),
(29, 'Unclear definition of team rules', 30, 0),
(30, NULL, 31, 0),
(31, 'Remember that you produce others will consume', 32, 0),
(32, NULL, 33, 0),
(33, NULL, 34, 0),
(34, 'understand the problem scope', 35, 0),
(35, NULL, 36, 0),
(36, 'none of the above', 37, 0),
(37, 'volatility', 38, 0),
(38, NULL, 39, 0),
(39, NULL, 40, 0),
(40, 'Scenario-based elements', 41, 0),
(41, 'establish basis for software design', 42, 0),
(42, NULL, 43, 0),
(43, NULL, 44, 0),
(44, NULL, 45, 0),
(45, 'all of the above', 46, 1),
(46, NULL, 47, 0),
(47, NULL, 48, 0),
(48, 'transformers', 49, 1),
(49, NULL, 50, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers_d`
--
ALTER TABLE `answers_d`
  ADD PRIMARY KEY (`answerID`),
  ADD KEY `questionID` (`questionID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers_d`
--
ALTER TABLE `answers_d`
  ADD CONSTRAINT `answers_d_ibfk_1` FOREIGN KEY (`questionID`) REFERENCES `questions` (`questionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
