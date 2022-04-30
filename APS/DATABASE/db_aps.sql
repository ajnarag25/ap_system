-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost: 3307
-- Generation Time: Apr 30, 2022 at 05:41 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aps`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(30) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumni`
--

CREATE TABLE `tbl_alumni` (
  `alumnus_id` int(30) NOT NULL,
  `avatar` text NOT NULL,
  `status` tinyint(1) DEFAULT 0 COMMENT '0=Unverified, 1= Verified',
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE `tbl_branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`branch_id`, `branch_name`) VALUES
(1, 'San Bartolome (Main)'),
(2, 'San Francisco'),
(3, 'Batasan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `course_id` int(30) NOT NULL,
  `course_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`course_id`, `course_name`) VALUES
(1, 'BS Information Technology'),
(2, 'BS Accountancy'),
(3, 'BS Entrepreneurship'),
(4, 'BS Industrial Engineering'),
(5, 'BS Electronics Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(30) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `schedule` datetime NOT NULL,
  `banner` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `content`, `schedule`, `banner`, `date_created`) VALUES
(8, 'Alumni Homecoming', 'a celebration at school or college, usually including a dance and a football game, when people who were students there at an earlier time can return to visit', '2021-12-30 00:00:00', 'QCU', '2021-12-17 16:37:30'),
(9, 'Alumni Night Out', 'Get the Annual Giving and Alumni Relations teams together to create a night your alumni will remember. Charge attendees a small fee for the event, and let event-goers know that you’ll be accepting additional donations throughout the night.\r\n\r\nWhile it’s always a good idea to have team members mingling and networking around the room, don’t forget that staffed information booths can work well, too. Make donations easy to give by garnishing each booth with a tablet and an easy-to-use online giving form. This way excited donors can give when they’re moved to.', '2021-12-31 12:00:00', 'QCU', '2021-12-17 16:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_commits`
--

CREATE TABLE `tbl_event_commits` (
  `id` int(30) NOT NULL,
  `event_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fields`
--

CREATE TABLE `tbl_fields` (
  `field_id` int(11) NOT NULL,
  `field_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fields`
--

INSERT INTO `tbl_fields` (`field_id`, `field_name`) VALUES
(1, 'Computer Science and Information Technology'),
(2, 'Education'),
(3, 'Engineering'),
(4, 'Business and Accountancy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forms`
--

CREATE TABLE `tbl_forms` (
  `id` int(11) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `student_no` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `batch` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `career` varchar(100) NOT NULL,
  `field` varchar(100) NOT NULL,
  `resume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forum_comments`
--

CREATE TABLE `tbl_forum_comments` (
  `id` int(30) NOT NULL,
  `topic_id` int(30) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forum_topics`
--

CREATE TABLE `tbl_forum_topics` (
  `id` int(30) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_forum_topics`
--

INSERT INTO `tbl_forum_topics` (`id`, `title`, `description`, `user_id`, `date_created`) VALUES
(18, 'Alumni Forum 2016', 'Challenging Success – More than 1500 participants debated about what a successful world looks like, what success is in the workplace, and how personal success is defined at the Alumni Forum 2016 held at the Santiago Bernabéu Stadium in Madrid.', 12, '2021-12-17 22:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobapplication`
--

CREATE TABLE `tbl_jobapplication` (
  `Id` int(11) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `employer` varchar(50) NOT NULL,
  `jobtitle` varchar(50) NOT NULL,
  `details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jobapplication`
--

INSERT INTO `tbl_jobapplication` (`Id`, `companyname`, `employer`, `jobtitle`, `details`) VALUES
(15, 'MICROSOFT', 'Alexis Lingad', 'Software Engineer', 'The role of a software engineer includes designing and programming system-level software including operating systems, database systems and embedded systems. They understand how both software and hardware function. Software engineers are often found in electronics and telecommunications companies. A computing, software engineering or related degree is needed for a career in software engineering.'),
(16, 'LinusTechTips', 'Linus Gabriel Sebastian', 'Network Engineer', 'Network engineering is one of the more technically demanding IT jobs. The role involves implementing, maintaining, supporting, developing and designing communication networks within an organisation, or between organisations. Network engineers are also responsible for security, data storage and disaster recovery strategies. A telecoms or computer science-related degree is needed.'),
(18, 'AMD', 'Lisa Su', 'President and Chief Executive Officer', 'AMD president and chief executive officer, a position she has held since October 2014, and serves on the AMD Board of Directors.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(30) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `batch` year(4) NOT NULL,
  `course_id` int(30) NOT NULL,
  `branch_id` int(30) NOT NULL,
  `type` enum('admin','alumni') NOT NULL DEFAULT 'alumni',
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `avatar_path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `student_id`, `username`, `password`, `email`, `firstname`, `middlename`, `lastname`, `gender`, `batch`, `course_id`, `branch_id`, `type`, `is_verified`, `avatar_path`) VALUES
(1, '', 'admin', '$2y$10$CfkyGS2piqCXjQkVGkPsiedGlcgEIiREgCWYW3OO2r2jDL2H1ll.G', 'keiz@gmail.com', 'Admin', '', '', 'Male', 2021, 1, 1, 'admin', 1, 'uploads/1639122180224141356_366504745012952_5880414480127360155_n.png'),
(14, '', 'toni', '$2y$10$dYeuJHCC.YFyiwoNo8v.pOnNHNYfJqmfywuAQ0i48/759n3UxUNVW', 'jestoni.daguman0014@gmail.com', 'jestonidaguman', '', '', 'Male', 2022, 1, 1, 'alumni', 1, 'uploads/1650738323Learn-Japanese-From-Anime-3-.jpeg'),
(17, 'Student12345', 'ajnarag25', '$2y$10$rqALP7CM7PDWlmuXqTBbmOku/f4wZriLhfh5WGFIGscrWSsJCQiu.', 'ajnarag25@gmail.com', 'Avor john', 'Atienza', 'Narag', 'Male', 2020, 1, 2, 'alumni', 1, 'uploads/1651235813img_568656.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  ADD PRIMARY KEY (`alumnus_id`);

--
-- Indexes for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event_commits`
--
ALTER TABLE `tbl_event_commits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_id`),
  ADD KEY `fk_event` (`event_id`);

--
-- Indexes for table `tbl_fields`
--
ALTER TABLE `tbl_fields`
  ADD PRIMARY KEY (`field_id`);

--
-- Indexes for table `tbl_forms`
--
ALTER TABLE `tbl_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_forum_comments`
--
ALTER TABLE `tbl_forum_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USER` (`user_id`),
  ADD KEY `FKTOPIC` (`topic_id`);

--
-- Indexes for table `tbl_forum_topics`
--
ALTER TABLE `tbl_forum_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jobapplication`
--
ALTER TABLE `tbl_jobapplication`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  MODIFY `alumnus_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `course_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_event_commits`
--
ALTER TABLE `tbl_event_commits`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_fields`
--
ALTER TABLE `tbl_fields`
  MODIFY `field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_forms`
--
ALTER TABLE `tbl_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_forum_comments`
--
ALTER TABLE `tbl_forum_comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_forum_topics`
--
ALTER TABLE `tbl_forum_topics`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_jobapplication`
--
ALTER TABLE `tbl_jobapplication`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_event_commits`
--
ALTER TABLE `tbl_event_commits`
  ADD CONSTRAINT `fk_event` FOREIGN KEY (`event_id`) REFERENCES `tbl_events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_forum_comments`
--
ALTER TABLE `tbl_forum_comments`
  ADD CONSTRAINT `FKTOPIC` FOREIGN KEY (`topic_id`) REFERENCES `tbl_forum_topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `USER` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `branch` FOREIGN KEY (`branch_id`) REFERENCES `tbl_branch` (`branch_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `courses` FOREIGN KEY (`course_id`) REFERENCES `tbl_courses` (`course_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
