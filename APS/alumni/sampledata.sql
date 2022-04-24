-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 05:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampledata`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_job`
--

CREATE TABLE `available_job` (
  `a_id` int(11) NOT NULL,
  `a_title` varchar(256) NOT NULL,
  `a_text` text NOT NULL,
  `a_author` varchar(256) NOT NULL,
  `a_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available_job`
--

INSERT INTO `available_job` (`a_id`, `a_title`, `a_text`, `a_author`, `a_date`) VALUES
(1, 'IM HIRING A WEB DEVELOPER', 'Im looking for a web developer that has experience in this field.', 'Mr. Harold', '2021-11-02 10:10:25'),
(2, 'IM HIRING A COMPUTER PROGRAMMER', 'Im looking for a computer programmer that has experience in C#, java, C++ and more. The more Language to know the better..', 'Mr. Zalder', '2021-11-02 10:15:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_job`
--
ALTER TABLE `available_job`
  ADD PRIMARY KEY (`a_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_job`
--
ALTER TABLE `available_job`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
