-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 04:25 PM
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

--
-- Dumping data for table `contact_users`
--

INSERT INTO `contact_users` (`message_ID`, `email`, `phone_number`, `message2`) VALUES
(0, 'radwansusan90@gmail.com', 0, ''),
(0, 'radwansusan90@gmail.com', 0, ''),
(0, 'radwansusan90@gmail.com', 0, ''),
(0, 'radwansusan90@gmail.com', 0, ''),
(0, 's', 0, ''),
(0, 's', 0, ''),
(0, 's', 0, ''),
(0, 's', 0, ''),
(0, 'radwansusan90@gmail.com', 0, 'sss');

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
  `phone_number` varchar(10) DEFAULT NULL,
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

--
-- Dumping data for table `cv_form`
--

INSERT INTO `cv_form` (`form_ID`, `img_path`, `user_name`, `birth_date`, `nationality`, `city`, `user_email`, `phone_number`, `speciality`, `Degree`, `user_bio`, `Degree_date_start`, `Degree_date_end`, `university`, `Artistic_skills`, `Personal_skills`, `jobs`, `achievements`, `company`, `job_date_start`, `job_date_end`, `project_name`, `project_date_start`, `project_date_end`, `project_bio`, `user_language`, `hobbies`) VALUES
(470067001, '../db_images/630771a4ec1631.74659347.jpg', 'EwPSlfzSMg', 'ss', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv', 'J3jfyVw5cQ', 'j5dwPmkgld', 's', 's', 'dfntntdTds', 'O2Ys8Ws0Td', '3XGcxoS4xH', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,12', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', 'aZbUyBWNZb', 'uxBE26Gdi8');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` bigint(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `CV_done` int(1) NOT NULL DEFAULT 0,
  `form_id` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `username`, `password`, `CV_done`, `form_id`) VALUES
(1, 'radwan', '123', 0, NULL),
(2, 'zaid', '123', 1, 470067001);

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
COMMIT;
