-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 12:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_to`
--

CREATE TABLE `assigned_to` (
  `c_code` varchar(15) NOT NULL,
  `std_id` varchar(10) NOT NULL,
  `faculty_id` varchar(10) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assigned_to`
--

INSERT INTO `assigned_to` (`c_code`, `std_id`, `faculty_id`, `semester`) VALUES
('BUS201', 's002', 'f001', 'Summer 2019'),
('CSE110', 's005', 'f004', 'Spring 2019'),
('CSE260', 's003', 'f002', 'Spring 2019'),
('CSE370', 's002', 'f006', 'Spring 2019'),
('CSE370', 's003', 'f006', 'Spring 2019'),
('CSE421', 's004', 'f004', 'Summer 2019');

-- --------------------------------------------------------

--
-- Table structure for table `attend`
--

CREATE TABLE `attend` (
  `exam_id` varchar(10) NOT NULL,
  `std_id` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `obtained_marks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attend`
--

INSERT INTO `attend` (`exam_id`, `std_id`, `status`, `obtained_marks`) VALUES
('e001', 's005', 'Yes', 18),
('e004', 's003', 'No', 0),
('e010', 's002', 'Yes', 6),
('e018', 's003', 'Yes', 26),
('e025', 's004', 'Yes', 10);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_code` varchar(15) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `credit` char(2) NOT NULL,
  `department` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_code`, `c_name`, `credit`, `department`) VALUES
('BUS201', 'Business & Human Communication', '03', 'BBA'),
('CSE110', 'Programming Language I', '03', 'CSE'),
('CSE260', 'Digital Logic Design', '03', 'CSE'),
('CSE370', 'Database System', '03', 'CSE'),
('CSE421', 'Computer Network', '03', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `c_code` varchar(15) NOT NULL,
  `exam_id` varchar(10) NOT NULL,
  `type` varchar(5) NOT NULL,
  `weight` int(11) DEFAULT NULL,
  `total_qs` char(3) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `duration` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`c_code`, `exam_id`, `type`, `weight`, `total_qs`, `date`, `time`, `duration`) VALUES
('CSE110', 'e001', 'Mid', 20, '10', '2019-02-15', '02:00:00', '1.5h'),
('CSE421', 'e002', 'Mid', 20, '10', '2019-06-20', '12:00:00', '1.5h'),
('CSE260', 'e004', 'Quiz', 10, '5', '2019-01-27', '03:30:00', '0.5h'),
('BUS201', 'e010', 'Quiz', 10, '5', '2019-05-19', '09:00:00', '0.5h'),
('CSE370', 'e018', 'Final', 30, '15', '2019-04-10', '05:00:00', '2h'),
('CSE370', 'e025', 'Quiz', 10, '5', '2019-03-10', '07:00:00', '0.5h');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `initial` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `name`, `email`, `password`, `initial`) VALUES
('f001', 'John Paul', 'jpaul@gmail.com', '123456', 'JPL'),
('f002', 'Rayhan Kabir', 'rkabir@gmail.com', '67890', 'RAK'),
('f003', 'Arif Shakil', 'ashakil@gmail.com', 'abcde', 'ARF'),
('f004', 'Ahnaf Hasan', 'ahasan@gmail.com', 'abc123', 'AHR'),
('f005', 'Rubayet Ahmed', 'rahmed@gmail.com', '789xyz', 'RAH'),
('f006', 'Warida Rashid', 'w.rashid@gmail.com', 'alpha', 'WAR');

-- --------------------------------------------------------

--
-- Table structure for table `qs_option`
--

CREATE TABLE `qs_option` (
  `qs_id` varchar(10) NOT NULL,
  `options` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qs_option`
--

INSERT INTO `qs_option` (`qs_id`, `options`) VALUES
('q001', 'False'),
('q001', 'True'),
('q002', 'makes money'),
('q002', 'Provides an any-to-many communication model'),
('q002', 'Routing protocol makes the “nearest” determination'),
('q002', 'Supports many future potential applications'),
('q003', 'False'),
('q003', 'True'),
('q004', 'Activity based, Access Management'),
('q004', 'Activity based, Business activity patterns and user profiles'),
('q004', 'Analytical based, Business activity patterns and user profiles'),
('q004', 'Analytical based, Shaping user behaviour'),
('q005', 'IANA'),
('q005', 'ICMPV6'),
('q005', 'ICNN'),
('q005', 'SLAAC'),
('q006', 'Construct'),
('q006', 'Define'),
('q006', 'Manipulation'),
('q006', 'Processing and sharing'),
('q007', 'Cartesian(Full)'),
('q007', 'Inner join'),
('q007', 'Natural'),
('q007', 'Outer'),
('q008', 'Database Management System'),
('q008', 'Database Measurement Software'),
('q008', 'Database Metric Software'),
('q008', 'Database Mining System'),
('q009', 'Anil Ambani'),
('q009', 'Azim Hasham Premji'),
('q009', 'Dr Reddy'),
('q009', 'Narayan Murthy'),
('q010', 'Erickson'),
('q010', 'Hyundai'),
('q010', 'Toyota'),
('q010', 'Yamaha'),
('q011', 'All of the above'),
('q011', 'Worst: O(nlogn), Average:O(nlogn)'),
('q011', 'Worst: O(nlogn), Average:O(n^2)'),
('q011', 'Worst: O(n^2), Average:O(nlogn)'),
('q012', '515'),
('q012', '525'),
('q012', '570'),
('q012', '575'),
('q013', '52'),
('q013', '56'),
('q013', '62'),
('q013', '64');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `exam_id` varchar(10) NOT NULL,
  `qs_id` varchar(10) NOT NULL,
  `qs_text` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `Indiv_qs_marks` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`exam_id`, `qs_id`, `qs_text`, `answer`, `Indiv_qs_marks`) VALUES
('e018', 'q001', 'A database system includes both DBMS software and the data. - Is this statement true or false?', 'True', '02'),
('e002', 'q002', 'Which of the following is not a feature of Anycast addressing in IPv6?', 'Provides an any-to-many communication model', '02'),
('e002', 'q003', 'IPv6 packet may contain no extension header', 'True', '02'),
('e010', 'q004', 'What are the types of activity within demand management?', 'Activity based, Business activity patterns and user profiles', '02'),
('e002', 'q005', 'A device can obtain an IPv6 global unicast address without the services of a DHCPv6 server in a method called-', 'SLAAC', '02'),
('e025', 'q006', 'Which functionality of DBMS is responsible for querying, insertion and delete operations?', 'Manipulation', '02'),
('e018', 'q007', 'Which of the following join produces all possible row combinations?', 'Cartesian(Full)', '02'),
('e018', 'q008', 'DBMS stands for-', 'Database Management System', '02'),
('e010', 'q009', 'Name the first Indian businessman who found place in the cover story of Forbes magazine', 'Azim Hasham Premji', '02'),
('e010', 'q010', 'Which company uses tagline \"Drive your way?', 'Hyundai', '02'),
('e001', 'q011', 'The worst case and average case time complexity of quicksort is:', 'Worst: O(n^2),Average:O(nlogn)', '02'),
('e004', 'q012', 'Convert (381)₁₀ to base 8', '575', '02'),
('e004', 'q013', 'Convert (50)₁₀ to base 2', '62', '02');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `major` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `name`, `email`, `password`, `major`) VALUES
('s001', 'Aminul', 'aminul@gmail.com', '12345', 'CSE'),
('s002', 'Zuhair', 'szhzuhair@gmail.com', 'szhzuhair', 'CSE'),
('s003', 'Mrittika', 'mrittika.ban@gmail.com', 'anika', 'CSE'),
('s004', 'Shihab', 'shihab@gmail.com', 'lalala', 'CSE'),
('s005', 'Sakafe', 'sakafe@gmail.com', '0000', 'CS'),
('s006', 'Ridwan', 'ridwan96@gmail.com', 'Clay', 'CSE'),
('s017', 'Bond', 'james@gmail.com', '007', 'BBA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigned_to`
--
ALTER TABLE `assigned_to`
  ADD PRIMARY KEY (`c_code`,`std_id`,`faculty_id`),
  ADD KEY `std_id` (`std_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `attend`
--
ALTER TABLE `attend`
  ADD PRIMARY KEY (`exam_id`,`std_id`),
  ADD KEY `std_id` (`std_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_code`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `c_code` (`c_code`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `qs_option`
--
ALTER TABLE `qs_option`
  ADD PRIMARY KEY (`qs_id`,`options`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qs_id`),
  ADD KEY `exam_id` (`exam_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigned_to`
--
ALTER TABLE `assigned_to`
  ADD CONSTRAINT `assigned_to_ibfk_1` FOREIGN KEY (`c_code`) REFERENCES `course` (`c_code`),
  ADD CONSTRAINT `assigned_to_ibfk_2` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`),
  ADD CONSTRAINT `assigned_to_ibfk_3` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`);

--
-- Constraints for table `attend`
--
ALTER TABLE `attend`
  ADD CONSTRAINT `attend_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`exam_id`),
  ADD CONSTRAINT `attend_ibfk_2` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`);

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`c_code`) REFERENCES `course` (`c_code`);

--
-- Constraints for table `qs_option`
--
ALTER TABLE `qs_option`
  ADD CONSTRAINT `qs_option_ibfk_1` FOREIGN KEY (`qs_id`) REFERENCES `question` (`qs_id`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`exam_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
