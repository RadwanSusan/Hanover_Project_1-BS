-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 08:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `business_city`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_list`
--

CREATE TABLE `company_list` (
  `company_id` int(10) NOT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `logo_path` varchar(100) DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL,
  `company_bio` varchar(999) DEFAULT NULL,
  `company_phone` varchar(15) NOT NULL,
  `company_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_list`
--

INSERT INTO `company_list` (`company_id`, `company_name`, `logo_path`, `img_path`, `company_bio`, `company_phone`, `company_email`) VALUES
(8, 'zaid', '', '', 'bio', '079', 'radwansusan90@gmail.com');

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
-- Table structure for table `courses_form`
--

CREATE TABLE `courses_form` (
  `form_id` bigint(255) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_phone_number` bigint(10) NOT NULL,
  `course_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses_form`
--

INSERT INTO `courses_form` (`form_id`, `user_email`, `user_name`, `user_phone_number`, `course_id`) VALUES
(1, '4LPXXZ7Vqp', 'EDMSKZjmPd', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses_list`
--

CREATE TABLE `courses_list` (
  `course_id` int(10) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `course_bio` varchar(999) DEFAULT NULL,
  `course_phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cv_form`
--

CREATE TABLE `cv_form` (
  `form_ID` bigint(10) NOT NULL,
  `img_path` varchar(100) DEFAULT '../MEDIA/image/imageCV.svg',
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
  `hobbies` varchar(700) DEFAULT NULL,
  `Facebook` varchar(50) DEFAULT NULL,
  `Linkedin` varchar(50) DEFAULT NULL,
  `Github` varchar(30) DEFAULT NULL,
  `Twitter` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv_form`
--

INSERT INTO `cv_form` (`form_ID`, `img_path`, `user_name`, `birth_date`, `nationality`, `city`, `user_email`, `phone_number`, `speciality`, `Degree`, `user_bio`, `Degree_date_start`, `Degree_date_end`, `university`, `Artistic_skills`, `Personal_skills`, `jobs`, `achievements`, `company`, `job_date_start`, `job_date_end`, `project_name`, `project_date_start`, `project_date_end`, `project_bio`, `user_language`, `hobbies`, `Facebook`, `Linkedin`, `Github`, `Twitter`) VALUES
(102233019, '../db_images/6314d5fdce55c0.31760876.jpg', 'NxqR2KBpdX', 'ss', '9EiJWUv439', 'x2t994n5NK', 'fgxfj@q6m4.com', '1685637671', 'DAilUD9WIh,9SAJNmytwI,b8w7uAcS', 'bOaZX29jkd,eXewYE726k,XimZdpAb', 'dqLTQfvdr7', 'qweqwe,wqeqwe,qweqwe', 'qweqwe,qweqwe,qweqw', 'DAilUD9WIh,9SAJNmytwI,b8w7uAcSi9', '3ez8iz0fGw', 'JVTRXJmjG5', '1,2,3', 'UFp9PDcnox-evVsiFIV6r-6AidWxfCzT', 'asdasd,asdasd,asdasd', '21312,123,123', '123123,123,123', '0bej64nCf3,UiVGPlXISs,h2aIx34pbx', '123,123,3123', '123,123,12', 'ujHqqiPslx,CYbd3biPC6,VpefAYjcN3', 'sTIVv6O0qq', 'RnuoXrJOaf', 'yhj4xx5bEM', 'kGsZcgTrS2', 'UwicA4hGd9', 'LzXEYRhA3V'),
(120369478, '../MEDIA/image/imageCV.svg', 'EwPSlfzSMg', '4', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(215985606, '../db_images/631329d038b543.37084377.jpg', 'EwPSlfzSMg', 'ss', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(241024761, '../MEDIA/image/imageCV.svg', 'EwPSlfzSMga', '65', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(288132740, '../db_images/6313337c599d81.19833553.jpg', 'EwPSlfzSMga', '69', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(295599136, '../db_images/63132da1243965.12639206.png', 'EwPSlfzSMgs', '5', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(309116908, '../db_images/6314d5fdce55c0.31760876.jpg', 'NxqR2KBpdX', 'ss', '9EiJWUv439', 'x2t994n5NK', 'fgxfj@q6m4.com', '1685637671', 'DAilUD9WIh,9SAJNmytwI,b8w7uAcS', 'bOaZX29jkd,eXewYE726k,XimZdpAb', 'dqLTQfvdr7', 'qweqwe,wqeqwe,qweqwe', 'qweqwe,qweqwe,qweqw', 'DAilUD9WIh,9SAJNmytwI,b8w7uAcS', '3ez8iz0fGw', 'JVTRXJmjG5', '1,2,3', 'UFp9PDcnox-evVsiFIV6r-6AidWxfCzT', 'asdasd,asdasd,asdasd', '21312,123,123', '123123,123,123', '0bej64nCf3,UiVGPlXISs,h2aIx34pbx', '123,123,3123', '123,123,12', 'ujHqqiPslx,CYbd3biPC6,VpefAYjcN3', 'sTIVv6O0qq', 'RnuoXrJOaf', 'yhj4xx5bEM', 'kGsZcgTrS2', 'UwicA4hGd9', 'LzXEYRhA3V'),
(321635756, '../db_images/6314d5fdce55c0.31760876.jpg', 'NxqR2KBpdX', 'ss', '9EiJWUv439', 'x2t994n5NK', 'fgxfj@q6m4.com', '1685637671', 'DAilUD9WIh,9SAJNmytwI,b8w7uAcS', 'bOaZX29jkd,eXewYE726k,XimZdpAb', 'dqLTQfvdr7', 'qweqwe,wqeqwe,qweqwe', 'qweqwe,qweqwe,qweqw', 'DAilUD9WIh,9SAJNmytwI,b8w7uAcS', '3ez8iz0fGw', 'JVTRXJmjG5', '1,2,3', 'UFp9PDcnox-evVsiFIV6r-6AidWxfCzT', 'asdasd,asdasd,asdasd', '21312,123,123', '123123,123,123', '0bej64nCf3,UiVGPlXISs,h2aIx34pbx', '123,123,3123', '123,123,12', 'ujHqqiPslx,CYbd3biPC6,VpefAYjcN3', 'sTIVv6O0qq', 'RnuoXrJOaf', 'yhj4xx5bEM', 'kGsZcgTrS2', 'UwicA4hGd9', 'LzXEYRhA3V'),
(324684954, '../db_images/6313337c599d81.19833553.jpg', 'EwPSlfzSMga', '69', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', 'asdasd', 'asdasd', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', 'asdasd', 'dasd', NULL, NULL, NULL, NULL),
(350167394, '../MEDIA/image/imageCV.svg', 'EwPSlfzSMgs', '5', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(374155707, '../db_images/6313337c599d81.19833553.jpg', 'EwPSlfzSMga', '69', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', 'asdasd', 'asdasd', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', 'asdasd', 'dasd', '', '', '', ''),
(380722644, '../db_images/6313337c599d81.19833553.jpg', 'EwPSlfzSMga', '69', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', 'asdasd', 'asdasd', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', 'asdasd', 'dasd', '', '', '', ''),
(415798655, 's', 'EwPSlfzSMg', 's2', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(418602584, '../db_images/63132dac423828.33774244.png', 'EwPSlfzSMga', '5', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(431758939, '../db_images/631330364850c2.13316406.jpg', 'EwPSlfzSMga', '65', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(468979283, '../db_images/6313260f7c80c5.74582299.jpg', 'EwPSlfzSMg', 'ss', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,12', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(470067001, NULL, 'EwPSlfzSMg', 'ss', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv', 'J3jfyVw5cQ', 'j5dwPmkgld', 's', 's', 'dfntntdTds', 'O2Ys8Ws0Td', '3XGcxoS4xH', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,12', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', 'aZbUyBWNZb', 'uxBE26Gdi8', NULL, NULL, NULL, NULL),
(478118045, 's', 'EwPSlfzSMg', 'ss', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', 'O2Ys8Ws0Td', '3XGcxoS4xH', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,12', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', 'aZbUyBWNZb', 'uxBE26Gdi8', NULL, NULL, NULL, NULL),
(493278162, '../db_images/6313337c599d81.19833553.jpg', 'EwPSlfzSMga', '69', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', 'asdasd', 'asdasd', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', 'asdasd', 'dasd', '', '', '', ''),
(502388735, '../db_images/63132569d18792.38302325.jpg', 'EwPSlfzSMg', 'ss', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', 'O2Ys8Ws0Td', '3XGcxoS4xH', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,12', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', 'aZbUyBWNZb', 'uxBE26Gdi8', NULL, NULL, NULL, NULL),
(554736262, '../db_images/631330364850c2.13316406.jpg', 'EwPSlfzSMga', '66', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(568562313, '../db_images/6313337c599d81.19833553.jpg', 'EwPSlfzSMga', '69', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(582669509, '../db_images/6313337c599d81.19833553.jpg', 'EwPSlfzSMga', '69', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', 'asdasd', 'asdasd', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', 'asdasd', 'dasd', '', '', '', ''),
(590467446, '../db_images/63132bea284585.92127853.png', 'EwPSlfzSMg', '4', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(618470918, '../db_images/6314d5fdce55c0.31760876.jpg', '', '', '', '', '', '', ',,', ',,', '', ',,', ',,', ',,', '', '', ',,', '--', ',,', ',,', ',,', ',,', ',,', ',,', ',,', '', '', '', '', '', ''),
(655302614, 's', 'EwPSlfzSMg', 'ss', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', 'O2Ys8Ws0Td,sss', '3XGcxoS4xH', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,12', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', 'aZbUyBWNZb', 'uxBE26Gdi8', NULL, NULL, NULL, NULL),
(670496504, 's', 'EwPSlfzSMg', 'ss', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,12', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(709190024, '../db_images/631330364850c2.13316406.jpg', 'EwPSlfzSMga', '67', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(728076805, '../db_images/6313337c599d81.19833553.jpg', 'EwPSlfzSMga', '68', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(763753799, '../db_images/631330364850c2.13316406.jpg', 'EwPSlfzSMga', '68', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(768816953, '../db_images/6314d5fdce55c0.31760876.jpg', 'NxqR2KBpdX', 'ss', '9EiJWUv439', 'x2t994n5NK', 'fgxfj@q6m4.com', '1685637671', 'DAilUD9WIh,9SAJNmytwI,b8w7uAcS', 'bOaZX29jkd,eXewYE726k,XimZdpAb', 'dqLTQfvdr7', 'qweqwe,wqeqwe,qweqwe', 'qweqwe,qweqwe,qweqw', 'DAilUD9WIh,9SAJNmytwI,b8w7uAcS', '3ez8iz0fGw', 'JVTRXJmjG5', '1,2,3', 'UFp9PDcnox-evVsiFIV6r-6AidWxfCzT', 'asdasd,asdasd,asdasd', '21312,123,123', '123123,123,123', '0bej64nCf3,UiVGPlXISs,h2aIx34pbx', '123,123,3123', '123,123,12', 'ujHqqiPslx,CYbd3biPC6,VpefAYjcN3', 'sTIVv6O0qq', 'RnuoXrJOaf', 'yhj4xx5bEM', 'kGsZcgTrS2', 'UwicA4hGd9', 'LzXEYRhA3V'),
(780305262, '../db_images/6314d5fdce55c0.31760876.jpg', 'NxqR2KBpdX', 'ss', '9EiJWUv439', 'x2t994n5NK', 'fgxfj@q6m4.com', '1685637671', 'DAilUD9WIh,9SAJNmytwI,b8w7uAcS', 'bOaZX29jkd,eXewYE726k,XimZdpAb', 'dqLTQfvdr7', 'qweqwe,wqeqwe,qweqwe', 'qweqwe,qweqwe,qweqw', 'DAilUD9WIh,9SAJNmytwI,b8w7uAcSi9', '3ez8iz0fGw', 'JVTRXJmjG5', '1,2,3', 'UFp9PDcnox-evVsiFIV6r-6AidWxfCzT', 'asdasd,asdasd,asdasd', '21312,123,123', '123123,123,123', '0bej64nCf3,UiVGPlXISs,h2aIx34pbx', '123,123,3123', '123,123,12', 'ujHqqiPslx,CYbd3biPC6,VpefAYjcN3', 'sTIVv6O0qq', 'RnuoXrJOaf', 'yhj4xx5bEM', 'kGsZcgTrS2', 'UwicA4hGd9', 'LzXEYRhA3V'),
(863254849, '../db_images/631329ca6c3036.05495933.jpg', 'EwPSlfzSMg', 'ss', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,12', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(876210696, 's', 'EwPSlfzSMg', 'ss', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,12', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(890523174, '../db_images/6313337c599d81.19833553.jpg', 'EwPSlfzSMga', '69', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', 'asdasd', 'asdasd', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', 'asdasd', 'dasd', 'DASDASD', 'ASDASD', 'ASD', 'ASDASD'),
(899218115, '../db_images/63132bf35658d0.27801314.png', 'EwPSlfzSMg', '5', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL),
(918778236, NULL, 'EwPSlfzSMg', 'ss', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', 'O2Ys8Ws0Td', '3XGcxoS4xH', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,12', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', 'aZbUyBWNZb', 'uxBE26Gdi8', NULL, NULL, NULL, NULL),
(920306135, '../db_images/6314d5fdce55c0.31760876.jpg', 'NxqR2KBpdX', 'ss', '9EiJWUv439', 'x2t994n5NK', 'fgxfj@q6m4.com', '1685637671', 'DAilUD9WIh,9SAJNmytwI,b8w7uAcS', 'bOaZX29jkd,eXewYE726k,XimZdpAb', 'dqLTQfvdr7', 'qweqwe,wqeqwe,qweqwe', 'qweqwe,qweqwe,qweqw', 'DAilUD9WIh,9SAJNmytwI,b8w7uAcS', '3ez8iz0fGw', 'JVTRXJmjG5', '1,2,3', 'UFp9PDcnox-evVsiFIV6r-6AidWxfCzT', 'asdasd,asdasd,asdasd', '21312,123,123', '123123,123,123', '0bej64nCf3,UiVGPlXISs,h2aIx34pbx', '123,123,3123', '123,123,12', 'ujHqqiPslx,CYbd3biPC6,VpefAYjcN3', 'sTIVv6O0qq', 'RnuoXrJOaf', 'yhj4xx5bEM', 'kGsZcgTrS2', 'UwicA4hGd9', 'LzXEYRhA3V'),
(945725545, '../db_images/6314d5fdce55c0.31760876.jpg', 'NxqR2KBpdX', 'ss', '9EiJWUv439', 'x2t994n5NK', 'fgxfj@q6m4.com', '1685637671', 'DAilUD9WIh,9SAJNmytwI,b8w7uAcS', 'bOaZX29jkd,eXewYE726k,XimZdpAb', 'dqLTQfvdr7', 'qweqwe,wqeqwe,qweqwe', 'qweqwe,qweqwe,qweqw', 'DAilUD9WIh,9SAJNmytwI,b8w7uAcS', '3ez8iz0fGw', 'JVTRXJmjG5', '1,2,3', 'UFp9PDcnox-evVsiFIV6r-6AidWxfCzT', 'asdasd,asdasd,asdasd', '21312,123,123', '123123,123,123', '0bej64nCf3,UiVGPlXISs,h2aIx34pbx', '123,123,3123', '123,123,12', 'ujHqqiPslx,CYbd3biPC6,VpefAYjcN3', 'sTIVv6O0qq', 'RnuoXrJOaf', 'yhj4xx5bEM', 'kGsZcgTrS2', 'UwicA4hGd9', 'LzXEYRhA3V'),
(977885419, 's', 'EwPSlfzSMg', 'ss', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', 'O2Ys8Ws0Td', '3XGcxoS4xH', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,12', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', 'aZbUyBWNZb', 'uxBE26Gdi8', NULL, NULL, NULL, NULL),
(990976215, 's', 'EwPSlfzSMg', 's3', 'pGb5dZhoPx', 'bc8LXSqjLi', 'g4g9i@wit8.com', '1269438173', 'CEtNVqH7yv,,', 'J3jfyVw5cQ,,', 'j5dwPmkgld', 's,,', 's,,', 'CEtNVqH7yv,,', '', '', '1,2,3', 'Yy0dKrLDwI,rS3KvuO5tE,6CAQ71kmSs--', 'xv83MuVq0j,xv83MuVq0j,xv83MuVq0j', '21312,123,123', '123123,123,123', 'V4sSSlw6Zi,l3y4X1Fzrl,zZjgZDmg7U', '123,123,3123', '123,123,11', 'WmV0yDG12C,v6MAvr5LzH,Yc8QyJvvVW', '', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `internship_form`
--

CREATE TABLE `internship_form` (
  `form_id` bigint(255) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_phone_number` bigint(10) NOT NULL,
  `company_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internship_form`
--

INSERT INTO `internship_form` (`form_id`, `user_email`, `user_name`, `user_phone_number`, `company_id`) VALUES
(1, 'caZGjZjLRj', '82pnDoo1PX', 0, 0),
(2, 'caZGjZjLRj', '82pnDoo1PX', 0, 0),
(3, '8drZ0FDu8g', 's41Zk83ZDV', 0, 0),
(4, 'sYDOKG5isS', '2wXQeSpqZ9', 0, 0),
(5, 'radwansusan90@gmail.com', 'radwan susan', 0, 0),
(6, 'radwansusan90@gmail.com', 'radwan susan', 0, 0),
(7, 'OsKOi70TQU', 'yslsrZkgYo', 0, 0),
(8, 'C9j4oAxg1Q', '7nM5OsAjlB', 0, 0),
(9, 'zUftESyN6G', 'EPh1NLLfy6', 0, 0),
(10, '4HAH7WvYVN', '5zJcSKiwWh', 0, 0),
(11, 'ElU4ahf0Pt', 'rGzo37yhlX', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` bigint(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `CV_done` int(1) NOT NULL DEFAULT 0,
  `form_id` bigint(10) DEFAULT NULL,
  `account_type` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `username`, `password`, `CV_done`, `form_id`, `account_type`) VALUES
(4, 'radwan susan', '123', 0, NULL, 1),
(5, 'zaid', '123', 1, 321635756, 1),
(6, 'ahmad', '123', 0, NULL, 0),
(7, 'zaid2', '123', 0, NULL, 0),
(8, 'sd', 'asd', 0, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_list`
--
ALTER TABLE `company_list`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `courses_form`
--
ALTER TABLE `courses_form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `courses_list`
--
ALTER TABLE `courses_list`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `cv_form`
--
ALTER TABLE `cv_form`
  ADD PRIMARY KEY (`form_ID`);

--
-- Indexes for table `internship_form`
--
ALTER TABLE `internship_form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_list`
--
ALTER TABLE `company_list`
  MODIFY `company_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses_form`
--
ALTER TABLE `courses_form`
  MODIFY `form_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses_list`
--
ALTER TABLE `courses_list`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `internship_form`
--
ALTER TABLE `internship_form`
  MODIFY `form_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;
