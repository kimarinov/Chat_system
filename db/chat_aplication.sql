-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 12:03 AM
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
-- Database: `chat_aplication`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `user_id` smallint(6) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `user_id`, `date_created`, `date_deleted`) VALUES
(315, '&#128522', 2, '2020-04-29 17:26:24', NULL),
(316, '&#128522', 2, '2020-04-29 17:28:16', NULL),
(317, '&#128512', 3, '2020-04-29 17:28:33', NULL),
(318, 'fsefse', 2, '2020-04-29 23:48:54', NULL),
(319, '&#129409', 2, '2020-04-29 23:48:59', NULL),
(320, 'dwdw&#128522 ', 2, '2020-04-29 23:49:06', NULL),
(321, ':', 2, '2020-04-29 23:49:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` smallint(6) NOT NULL,
  `user_first_name` text NOT NULL,
  `user_name` text NOT NULL,
  `password` text NOT NULL,
  `user_type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_name`, `password`, `user_type`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, '123', '123', '202cb962ac59075b964b07152d234b70', 2),
(3, 'koko', 'koko', '37f525e2b6fc3cb4abd882f708ab80eb', 2),
(4, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 2);

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
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
