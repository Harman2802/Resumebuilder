-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2025 at 02:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resumemaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(20) NOT NULL,
  `resume_id` int(20) NOT NULL,
  `institute` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `started` int(20) NOT NULL,
  `ended` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(20) NOT NULL,
  `resume_id` int(20) NOT NULL,
  `position` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `job_desc` text NOT NULL,
  `started` varchar(250) NOT NULL,
  `ended` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `hobbies` varchar(250) NOT NULL,
  `languages` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `objective` text NOT NULL,
  `slug` varchar(250) NOT NULL,
  `updated_at` int(20) NOT NULL,
  `resume_title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `user_id`, `full_name`, `email_id`, `mobile_no`, `dob`, `gender`, `religion`, `nationality`, `marital_status`, `hobbies`, `languages`, `address`, `objective`, `slug`, `updated_at`, `resume_title`) VALUES
(2, 4, 'Harmanpreet Student', 'pharman909@gmail.com', '2147483647', '2000-07-14', 'Male', 'Hindu', 'Indian', 'Married', 'playing indoor games ', 'english,hindi ', 'VPO. SHAHPUR', 'hiii', 'mpzx8ry85q7f1686', 1741096288, 'Web Developer Consultant'),
(7, 4, 'Harmanpreet Student', 'pharman909@gmail.com', '2147483647', '2003-07-14', 'Male', 'Hindu', 'Indian', 'Single', 'playing indoor games ', 'english,hindi ', 'VPO. SHAHPUR', 'Hlo budy', '52ne50xi1_ma66c4', 1741099002, 'Web Developer Consultant'),
(9, 4, 'harman preet', 'harman909@gmail.com', '09592290249', '2000-09-09', 'Male', 'Hindu', 'Indian', 'Single', 'playing indoor games ', 'english,hindi ', 'VPO. SHAHPUR', 'gygy', 'glne7_190ro94wz2', 1742915946, 'resume1742915900'),
(10, 4, 'harman preet', 'harman909@gmail.com', '09592290249', '2000-06-05', 'Male', 'Hindu', 'Indian', 'Single', 'playing indoor games ', 'english,hindi ', 'VPO. SHAHPUR', 'hii', '0wd9ofjum2r_62x4', 1744385065, 'resume1744385024'),
(11, 4, 'harman preet', 'harman909@gmail.com', '09592290249', '2000-03-02', 'Male', 'Hindu', 'Indian', 'Married', 'playing indoor games ', 'english,hindi ', 'VPO. SHAHPUR', 'hii', '4669_1jamtg4v861', 1744691308, 'resume1744691289');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(20) NOT NULL,
  `resume_id` int(20) NOT NULL,
  `skill` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(10) NOT NULL,
  `your_name` varchar(250) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `your_name`, `email_id`, `password`) VALUES
(4, 'Mohamd', 'preet999sahil@gmail.com', '93279e3308bdbbeed946fc965017f67a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
