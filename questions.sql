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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questionID` int(11) NOT NULL,
  `question` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `chapter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questionID`, `question`, `chapter`) VALUES
(1, 'Which question no longer concerns the modern software engineer?', 1),
(2, 'Software is a product and can be manufactured using the same technologies used for other engineering artifacts', 1),
(3, 'Software deteriorates rather than wears out because', 1),
(4, 'WebApps are a mixture of print publishing and software development, making their development outside the realm of software engineering practice.', 1),
(5, 'There are no real differences between creating WebApps and MobileApps.', 1),
(6, 'Which of the items listed below is not one of the software engineering layers?', 2),
(7, 'Software engineering umbrella activities are only applied during the initial phases of software development projects.', 2),
(8, 'Which of these are the 5 generic software engineering framework activities?', 2),
(9, 'Planning ahead for software reuse reduces the cost and increases the value of the systems into which they are incorporated.', 2),
(10, 'The essence of software engineering practice might be described as understand the problem, plan a solution, carry out the plan, and examine the result for accuracy.', 2),
(11, 'Which of the following are recognized process flow types?', 3),
(12, 'The communication activity is best handled for small projects using six distinct actions (inception, elicitation, elaboration, negotiation, specification, validation).', 3),
(13, 'A good software development team always uses the same task set for every project to insure high quality work products', 3),
(14, 'Software processes can be constructed out of pre-existing software patterns to best meet the needs of a software project.', 3),
(15, 'Which of these are standards for assessing software processes?', 3),
(16, 'The waterfall model of software development is', 4),
(17, 'The incremental model of software development is', 4),
(18, 'Evolutionary software process models', 4),
(19, 'The prototyping model of software development is', 4),
(20, 'The spiral model of software development', 4),
(21, 'Agility is nothing more than the ability of a project team to respond rapidly to change.', 5),
(22, 'Which of the following is not necessary to apply agility to a software process?', 5),
(23, 'How do you create agile processes to manage unpredictability?', 5),
(24, 'In agile software processes the highest priorities is to satisfy the customer through early and continuous delivery of valuable software.', 5),
(25, 'In agile development it is more important to build software that meets the customers’ needs today than worry about features that might be needed in the future.', 5),
(26, 'Human aspects of software engineering are not relevant in today’s agile process models.', 6),
(27, 'Which of the following is not an important trait of an effective software engineer?', 6),
(28, 'Group communication and collaboration are as important as the technical skills of an individual team member to the success of a team.', 6),
(29, 'Teams with diversity in the individual team member skill sets tend to be more effective than teams without this diversity.', 6),
(30, 'Which of the following can contribute to team toxicity?', 6),
(31, 'Software engineering principles have about a three year half-life.', 7),
(32, 'Which of the following is not one of core principles of software engineering practice?', 7),
(33, 'Every communication activity should have a facilitator to make sure that the customer is not allowed to dominate the proceedings.', 7),
(34, 'The agile view of iterative customer communication and collaboration is applicable to all software engineering practice.', 7),
(35, 'One reason to involve everyone on the software team in the planning activity is to', 7),
(36, 'Requirements engineering is a generic process that does not vary from one software project to another.', 8),
(37, 'During project inception the intent of the of the tasks are to determine', 8),
(38, 'Three things that make requirements elicitation difficult are problems of', 8),
(39, 'A stakeholder is anyone who will purchase the completed software system under development.', 8),
(40, 'It is relatively common for different customers to propose conflicting requirements, each arguing that his or her version is the right one.', 8),
(41, 'Which of these is not an element of a requirements model?', 9),
(42, 'Which of the following is not an objective for building a requirements model?', 9),
(43, 'Object-oriented domain analysis is concerned with the identification and specification of reusable capabilities within an application domain.', 9),
(44, 'In structured analysis models focus on the structure of the classes defined for a system along with their interactions.', 9),
(45, 'Creation and refinement of use cases if an important part of scenario-based modeling.', 9),
(46, 'Which of the following should be considered as candidate objects in a problem space?', 10),
(47, 'In the grammatical parse of a processing narrative the nouns become object candidates in the analysis model.', 10),
(48, 'Attributes are chosen for an object by examining the problem statement and identifying the entities that appear to be related.', 10),
(49, 'Which of the following is not one of the broad categories used to classify operations?', 10),
(50, 'Collaborators in CRC modeling are those classes needed to fulfill a responsibility on another card.', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
