-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 12:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `sender_username` text NOT NULL,
  `receiver_username` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `msg_content` text NOT NULL,
  `msg_status` text NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `sender_username`, `receiver_username`, `user_id`, `msg_content`, `msg_status`, `msg_date`, `date_deleted`) VALUES
(1, '', '', 1, 'rewrwe', '', '2020-05-01 21:03:58', NULL),
(2, '', '', 1, 'seaea', '', '2020-05-01 21:04:02', NULL),
(3, '', '', 1, 'ewrwerw', '', '2020-05-01 21:04:58', NULL),
(4, '', '', 1, 'eqweqweq', '', '2020-05-01 21:05:26', NULL),
(5, '', '', 1, 'rwerew', '', '2020-05-01 21:05:27', '2020-05-02 00:14:23'),
(6, '', '', 3, 'terterter', '', '2020-05-01 21:07:07', NULL),
(7, '', '', 3, 'tertrete', '', '2020-05-01 21:07:09', NULL),
(8, '', '', 3, 'aweawea', '', '2020-05-01 21:07:12', NULL),
(9, '', '', 1, 'rewrwer', '', '2020-05-01 21:11:45', NULL),
(10, '', '', 1, 'rwerw', '', '2020-05-01 21:11:48', '2020-05-02 00:14:22'),
(11, '', '', 1, '', '', '2020-05-01 21:11:50', '2020-05-02 00:13:50'),
(12, '', '', 1, '', '', '2020-05-01 21:11:51', '2020-05-02 00:13:51'),
(13, '', '', 1, '', '', '2020-05-01 21:11:52', '2020-05-02 00:13:33'),
(14, '', '', 1, '', '', '2020-05-01 21:12:41', NULL),
(15, '', '', 1, '', '', '2020-05-01 21:13:14', NULL),
(20, '', '', 5, 'rseres', '', '2020-05-01 21:30:59', NULL),
(22, '', '', 2, 'eqweq', '', '2020-05-01 21:35:04', NULL),
(23, '', '', 2, 'eqweqeq', '', '2020-05-01 21:35:06', NULL),
(24, '', '', 2, 'iyuiy', '', '2020-05-01 21:35:39', NULL),
(25, '', '', 2, 'iyuiy', '', '2020-05-01 21:36:07', NULL),
(26, '', '', 2, 'erwrw', '', '2020-05-01 21:36:09', NULL),
(27, '', '', 2, '&#129409', '', '2020-05-01 21:36:11', NULL),
(28, '', '', 2, '', '', '2020-05-01 21:36:13', NULL),
(29, '', '', 2, ' &#128522:P', '', '2020-05-01 21:36:16', NULL),
(30, '', '', 2, '', '', '2020-05-01 21:36:18', NULL),
(31, '', '', 2, 'j', '', '2020-05-01 21:36:22', NULL),
(32, '', '', 2, 'jghjg', '', '2020-05-01 21:36:24', NULL),
(33, '', '', 2, '&#128523', '', '2020-05-01 21:36:28', NULL),
(34, '', '', 2, '', '', '2020-05-01 21:36:30', NULL),
(35, '', '', 2, ':P&#128523  ', '', '2020-05-01 21:36:36', NULL),
(36, '', '', 2, 'l', '', '2020-05-01 21:36:38', NULL),
(42, '', '', 2, '', '', '2020-05-01 21:37:50', NULL),
(44, '', '', 1, 'weawea', '', '2020-05-01 22:00:43', NULL),
(45, '', '', 1, '', '', '2020-05-01 22:00:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first_name` text NOT NULL,
  `user_name` text NOT NULL,
  `password` text NOT NULL,
  `user_type` tinyint(4) NOT NULL,
  `user_profile` text NOT NULL,
  `log_in` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_name`, `password`, `user_type`, `user_profile`, `log_in`) VALUES
(1, '123', '123', '202cb962ac59075b964b07152d234b70', 2, '', ''),
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '', ''),
(3, 'koko', 'koko', '37f525e2b6fc3cb4abd882f708ab80eb', 2, '', ''),
(4, 'test', 'test', '202cb962ac59075b964b07152d234b70', 2, '', ''),
(5, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `user_id` int(11) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`user_id`, `user_type`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
