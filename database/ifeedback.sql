-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2025 at 03:06 PM
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
  `feedback_is5` longtext DEFAULT NULL,
  `feedback_owner_name` varchar(200) DEFAULT NULL,
  `feedback_owner_email` varchar(200) DEFAULT NULL,
  `feedback_owner_contact` varchar(200) DEFAULT NULL,
  `feedback_status` varchar(200) NOT NULL DEFAULT 'Queued',
  `feedback_sumbitted_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `feedback_type`, `feedback_directorate`, `feedback_department`, `feedback_gsd1`, `feedback_gsd2`, `feedback_gsd3`, `feedback_gsd4`, `feedback_gsd5`, `feedback_si1`, `feedback_si2`, `feedback_si3`, `feedback_si4`, `feedback_si5`, `feedback_et1`, `feedback_et2`, `feedback_et3`, `feedback_et4`, `feedback_et5`, `feedback_ac1`, `feedback_ac2`, `feedback_ac3`, `feedback_ac4`, `feedback_ac5`, `feedback_is1`, `feedback_is2`, `feedback_is3`, `feedback_is4`, `feedback_is5`, `feedback_owner_name`, `feedback_owner_email`, `feedback_owner_contact`, `feedback_status`, `feedback_sumbitted_on`) VALUES
(8, 'Complain', 'Administration', 'Transport', 'Very Poor', 'Strongly Disagree', 'Very Dissatisfied', 'Strongly Disagree', 'Strongly Disagree', 'Poor', 'Disagree', 'Dissatisfied', 'Very Poor', 'Disagree', 'Dissatisfied', 'Inefficient', 'Inefficient', 'Dissatisfied', 'Disagree', 'Difficult', 'Poor', 'Poor', 'Difficult', 'Neutral', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', 'Unlikely', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', 'Martin Mbithi', 'martinezmbithi@gmail.com', '0740847563', 'Resolved', '2025-02-25 12:35:27.740705');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(200) NOT NULL,
  `log_user_id` int(200) NOT NULL,
  `log_user_type` varchar(200) NOT NULL,
  `log_date` varchar(200) NOT NULL,
  `log_ip_address` varchar(200) NOT NULL,
  `log_device` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `log_user_id`, `log_user_type`, `log_date`, `log_ip_address`, `log_device`) VALUES
(1, 6, 'System Administrator', '2025-02-25 12:00:43', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:135.0) Gecko/20100101 Firefox/135.0'),
(2, 6, 'System Administrator', '2025-02-25 16:47:31', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:135.0) Gecko/20100101 Firefox/135.0');

-- --------------------------------------------------------

--
-- Table structure for table `mailer_settings`
--

CREATE TABLE `mailer_settings` (
  `id` int(20) NOT NULL,
  `mailer_host` varchar(200) DEFAULT NULL,
  `mailer_port` varchar(200) DEFAULT NULL,
  `mailer_protocol` varchar(200) DEFAULT NULL,
  `mailer_username` varchar(200) DEFAULT NULL,
  `mailer_mail_from_name` varchar(200) DEFAULT NULL,
  `mailer_mail_from_email` varchar(200) DEFAULT NULL,
  `mailer_password` varchar(200) DEFAULT NULL,
  `mailer_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mailer_settings`
--

INSERT INTO `mailer_settings` (`id`, `mailer_host`, `mailer_port`, `mailer_protocol`, `mailer_username`, `mailer_mail_from_name`, `mailer_mail_from_email`, `mailer_password`, `mailer_status`) VALUES
(2, 'rbx109.truehost.cloud', '587', 'tls', 'mailer@devlan.co.ke', 'Pharmacy and Poisons Board', 'info@pharmacyandpoisionboard.org', '20Devlan@22', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `postfix_mailer_configs`
--

CREATE TABLE `postfix_mailer_configs` (
  `postfix_mailer_id` int(200) NOT NULL,
  `postfix_mailer_from_name` varchar(200) NOT NULL,
  `postfix_mailer_from_email` varchar(200) NOT NULL,
  `postfix_mailer_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postfix_mailer_configs`
--

INSERT INTO `postfix_mailer_configs` (`postfix_mailer_id`, `postfix_mailer_from_name`, `postfix_mailer_from_email`, `postfix_mailer_status`) VALUES
(1, 'Pharmacy and Poisons Board', 'info@pharmacyandpoisionboard.org', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(200) NOT NULL,
  `user_names` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_phone` varchar(200) NOT NULL,
  `user_access_level` varchar(200) NOT NULL,
  `user_password_reset_token` varchar(200) DEFAULT NULL,
  `user_change_password` int(200) NOT NULL DEFAULT 1,
  `user_account_status` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_names`, `user_email`, `user_password`, `user_phone`, `user_access_level`, `user_password_reset_token`, `user_change_password`, `user_account_status`) VALUES
(6, 'Martin Mbithi', 'martin@devlan.co.ke', '3b1f05a2237a5e698e9824889f1c673e823be2cc', '074-084-7563', 'System Administrator', NULL, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `LogUserIDetails` (`log_user_id`);

--
-- Indexes for table `mailer_settings`
--
ALTER TABLE `mailer_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postfix_mailer_configs`
--
ALTER TABLE `postfix_mailer_configs`
  ADD PRIMARY KEY (`postfix_mailer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mailer_settings`
--
ALTER TABLE `mailer_settings`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `postfix_mailer_configs`
--
ALTER TABLE `postfix_mailer_configs`
  MODIFY `postfix_mailer_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
