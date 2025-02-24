-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2025 at 01:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ifeedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(200) NOT NULL,
  `feedback_type` varchar(200) NOT NULL,
  `feedback_directorate` varchar(200) NOT NULL,
  `feedback_department` varchar(200) NOT NULL,
  `feedback_gsd1` varchar(200) DEFAULT NULL,
  `feedback_gsd2` varchar(200) DEFAULT NULL,
  `feedback_gsd3` varchar(200) DEFAULT NULL,
  `feedback_gsd4` varchar(200) DEFAULT NULL,
  `feedback_gsd5` varchar(200) DEFAULT NULL,
  `feedback_si1` varchar(200) DEFAULT NULL,
  `feedback_si2` varchar(200) DEFAULT NULL,
  `feedback_si3` varchar(200) DEFAULT NULL,
  `feedback_si4` varchar(200) DEFAULT NULL,
  `feedback_si5` varchar(200) DEFAULT NULL,
  `feedback_et1` varchar(200) DEFAULT NULL,
  `feedback_et2` varchar(200) DEFAULT NULL,
  `feedback_et3` varchar(200) DEFAULT NULL,
  `feedback_et4` varchar(200) DEFAULT NULL,
  `feedback_et5` varchar(200) DEFAULT NULL,
  `feedback_ac1` varchar(200) DEFAULT NULL,
  `feedback_ac2` varchar(200) DEFAULT NULL,
  `feedback_ac3` varchar(200) DEFAULT NULL,
  `feedback_ac4` varchar(200) DEFAULT NULL,
  `feedback_ac5` varchar(200) DEFAULT NULL,
  `feedback_is1` longtext DEFAULT NULL,
  `feedback_is2` longtext DEFAULT NULL,
  `feedback_is3` longtext DEFAULT NULL,
  `feedback_is4` longtext DEFAULT NULL,
  `feedback_is5` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
