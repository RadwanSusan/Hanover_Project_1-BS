-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 01:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `business_city`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_users`
--

CREATE TABLE `contact_users` (
  `message_ID` bigint(10) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone_number` bigint(10) DEFAULT NULL,
  `message2` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cv_form`
--

CREATE TABLE `cv_form` (
  `form_ID` bigint(10) NOT NULL,
  `img_path` varchar(100) DEFAULT NULL,
  `user_name` varchar(40) DEFAULT NULL,
  `birth_date` varchar(20) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `phone_number` bigint(10) DEFAULT NULL,
  `speciality` varchar(30) DEFAULT NULL,
  `Degree` varchar(30) DEFAULT NULL,
  `user_bio` varchar(1000) DEFAULT NULL,
  `Degree_date_start` varchar(20) DEFAULT NULL,
  `Degree_date_end` varchar(20) DEFAULT NULL,
  `university` varchar(50) DEFAULT NULL,
  `Artistic_skills` varchar(500) DEFAULT NULL,
  `Personal_skills` varchar(500) DEFAULT NULL,
  `jobs` varchar(100) DEFAULT NULL,
  `achievements` varchar(500) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `job_date_start` varchar(20) DEFAULT NULL,
  `job_date_end` varchar(20) DEFAULT NULL,
  `project_name` varchar(50) DEFAULT NULL,
  `project_date_start` varchar(20) DEFAULT NULL,
  `project_date_end` varchar(10) DEFAULT NULL,
  `project_bio` varchar(700) DEFAULT NULL,
  `user_language` varchar(400) DEFAULT NULL,
  `hobbies` varchar(700) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` bigint(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `CV_done` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `username`, `password`, `CV_done`) VALUES
(1, 'radwan', '123', 0),
(2, 'zaid', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv_form`
--
ALTER TABLE `cv_form`
  ADD PRIMARY KEY (`form_ID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cv_form`
--
ALTER TABLE `cv_form`
  MODIFY `form_ID` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
