-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2017 at 01:19 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lanmailer`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deleted_message`
--

CREATE TABLE `deleted_message` (
  `deleted_id` int(50) NOT NULL,
  `delete_by` varchar(50) NOT NULL,
  `message_id` int(50) NOT NULL,
  `del_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flagged_message`
--

CREATE TABLE `flagged_message` (
  `flagged_id` int(30) NOT NULL,
  `flagged_by` varchar(50) NOT NULL,
  `message_id` int(50) NOT NULL,
  `flagged_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `body` longtext NOT NULL,
  `attach_id` text NOT NULL,
  `sender_name` varchar(20) NOT NULL,
  `recieve_name` varchar(20) NOT NULL,
  `copy_name` varchar(50) NOT NULL,
  `del_stat` char(2) NOT NULL,
  `draft_stat` char(2) NOT NULL,
  `send_stat` char(2) NOT NULL,
  `read_Stat` char(2) NOT NULL,
  `flagged_stat` char(2) NOT NULL,
  `starred_stat` char(2) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `starred_message`
--

CREATE TABLE `starred_message` (
  `starred_id` int(50) NOT NULL,
  `starred_by` varchar(50) NOT NULL,
  `message_id` int(50) NOT NULL,
  `starred_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `display_pics` text NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `deleted_message`
--
ALTER TABLE `deleted_message`
  ADD PRIMARY KEY (`deleted_id`);

--
-- Indexes for table `flagged_message`
--
ALTER TABLE `flagged_message`
  ADD PRIMARY KEY (`flagged_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `starred_message`
--
ALTER TABLE `starred_message`
  ADD PRIMARY KEY (`starred_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deleted_message`
--
ALTER TABLE `deleted_message`
  MODIFY `deleted_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `flagged_message`
--
ALTER TABLE `flagged_message`
  MODIFY `flagged_id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `starred_message`
--
ALTER TABLE `starred_message`
  MODIFY `starred_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
