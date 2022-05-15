-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost: 3307
-- Generation Time: May 14, 2022 at 07:39 AM
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
-- Table structure for table `tbl_concerns`
--

CREATE TABLE `tbl_concerns` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `resume` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobs`
--

CREATE TABLE `tbl_jobs` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `job_name` text NOT NULL,
  `job_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jobs`
--

INSERT INTO `tbl_jobs` (`id`, `image`, `job_name`, `job_desc`) VALUES
(13, '../alumni/uploads/1.jpg', 'VIRTUAL CAREER FAIR', 'QCU Placement will assist you in preparing for your job search and connect with employers virtually.\r\n\r\nIn celebration of University Week, we are excited to partner with JOBS180.com to run career fairs in a virtual format on Monday, March 1, 2022\r\n\r\nREGISTRATION is now open!\r\n\r\nClick the link above to join the fair and sign-up for 1:1 and group meetings with your future employers.\r\n\r\n(Don’t forget to register also for the coming webinar on February 23, 2022)'),
(14, '../alumni/uploads/2.jpg', 'SUN LIFE Is Looking For A Financial Advisor', 'High Income\r\nMonthly Cash Bonus\r\nQuarterly Incentives (Limited Edition and Luxury Items, Buffets, Staycations)\r\nAll-Expense Paid Luxury Travel Incentives (Local and International)\r\nNational and International Recognition of Your Achievements\r\nLots of Free Personal Skills and Enhancement Trainings\r\nFun and Helpful Teammates\r\n\r\nINTERESTED?\r\nPlease send your resume to Rolando.o.tanglao@sunlife.com.ph\r\nLook For: Mr. Rolando O. Tanglao\r\nContact Number: 09176541319'),
(15, '../alumni/uploads/3.jpg', 'FAArt Creative Design Studio Is Looking For An Account Executive And A Graphic Artist!', 'JOB QUALIFICATIONS:\r\nOpen to Fresh grads, Senior High grad, and experienced Account Executive\r\nMust be knowledgeable with Microsoft Office & Google apps (Google Sheet, Google Docs, etc.)\r\nMust at least be proficient in English and Filipino\r\nMust be willing to learn /be trained and work in a team\r\nMust have a heart of service. Towards clients and teammates\r\nMust be available to start ASAP\r\nMust be willing to work ONSITE (Office is located in Q.C.)\r\nOpen to working long hours or Weekends/holidays (if needed)\r\n\r\nRESPONSIBILITY:\r\nManage clients’ requests for advertising materials\r\n\r\nJOB PERKS:\r\nComplimentary Lunch Meals\r\nPoint-to-point shared shuttle service\r\nMedical, Dental and Optical Allowance\r\nCompetitive Profit Sharing Bonuses');

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
  `avatar_path` varchar(500) NOT NULL,
  `stat` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `student_id`, `username`, `password`, `email`, `firstname`, `middlename`, `lastname`, `gender`, `batch`, `course_id`, `branch_id`, `type`, `is_verified`, `avatar_path`, `stat`, `feedback`, `otp`) VALUES
(1, '', 'admin', '$2y$10$pYt1rB2S6GvZ6dpqkOSI9OAZJ5MkADKKe5tn5lDX5PqIXgXU1W3AO', 'placement.alumni.relation@qcu.edu.ph', 'Admin', '', '', 'Male', 2021, 1, 1, 'admin', 1, '../alumni/uploads/laudalasan.gif', '', '', 0),
(22, 'Student12345', 'ajnarag25', '$2y$10$5UtTMsTvnhdmaMguON6u3edb8/jIm.9YCWTA.mMI1bXn6NyuCVr06', 'ajnarag25@gmail.com', 'Avor john', 'Atienza', 'Narag', 'Male', 2019, 1, 2, 'alumni', 1, 'uploads/1652020333img_568656.png', 'NO FORM SUBMITTED', 'N/A', 834);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `tbl_concerns`
--
ALTER TABLE `tbl_concerns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  ADD PRIMARY KEY (`course_id`);

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
-- Indexes for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_concerns`
--
ALTER TABLE `tbl_concerns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `course_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_fields`
--
ALTER TABLE `tbl_fields`
  MODIFY `field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_forms`
--
ALTER TABLE `tbl_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

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
