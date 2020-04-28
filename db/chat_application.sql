-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 10:12 PM
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
  `user_name` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `user_name`, `date_created`) VALUES
(180, '1', '123', '2020-04-28 00:00:00'),
(181, ';l', '123', '2020-04-28 00:00:00'),
(182, 'fefe', '123', '2020-04-28 00:00:00'),
(183, 'dwdw', '123', '2020-04-28 00:00:00'),
(184, 'ew', '123', '2020-04-28 00:00:00'),
(185, '20320', '123', '2020-04-28 00:00:00'),
(186, '2', '123', '2020-04-28 00:00:00'),
(187, '5', '123', '2020-04-28 00:00:00'),
(188, '1051', '123', '2020-04-28 00:00:00'),
(189, '61065156', '123', '2020-04-28 00:00:00'),
(190, '51515', '123', '2020-04-28 00:00:00'),
(191, '65165165', '123', '2020-04-28 00:00:00'),
(192, '651561651', '123', '2020-04-28 00:00:00'),
(193, '6516516516', '123', '2020-04-28 00:00:00'),
(194, '65165', '123', '2020-04-28 00:00:00'),
(195, '656+2', '123', '2020-04-28 00:00:00'),
(196, 'e', '2', '2020-04-28 00:00:00'),
(197, 'rewrw', '2', '2020-04-28 00:00:00'),
(198, 'des', '2', '2020-04-28 00:00:00'),
(199, 'erww', '2', '2020-04-28 00:00:00'),
(200, 'ererer', '2', '2020-04-28 22:26:54'),
(201, 'rewrwe', 'koko', '2020-04-28 22:38:50'),
(202, 'fsesefsefs', '123', '2020-04-28 22:54:46'),
(203, 'sdadas', '123', '2020-04-28 22:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `user_name`, `password`, `user_type`) VALUES
(1, 'computer', 'master', 'computermaster', 'computer', 1),
(2, 'computer', 'master', 'computermaster', 'computer', 1),
(3, 'computerOne', 'masterOne', 'computermasterOne', 'computerOne', 1),
(9, 'lee', '', 'lee', '7e0d7f8a5d96c24ffcc840f31bce72b2', 2),
(10, 'admin', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(11, '123', '', '123', '202cb962ac59075b964b07152d234b70', 2),
(12, 'koko', '', 'koko', '202cb962ac59075b964b07152d234b70', 2);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_type` (`user_type`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
