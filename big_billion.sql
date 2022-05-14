-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 06:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `big_billion`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `user_id` text DEFAULT NULL,
  `game_name` text DEFAULT NULL,
  `game_type` text DEFAULT NULL,
  `game_method` text NOT NULL,
  `number` text DEFAULT NULL,
  `points` text DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `user_id`, `game_name`, `game_type`, `game_method`, `number`, `points`, `last_updated`, `date_created`) VALUES
(20, '1', 'GD', 'jodi', 'fastcross', '5', '7', NULL, '2022-05-13 05:23:35'),
(21, '1', 'GD', 'jodi', 'fastcross', '25', '7', NULL, '2022-05-13 05:23:35'),
(22, '1', 'GD', 'jodi', 'fastcross', '41', '5', NULL, '2022-05-13 05:38:10'),
(23, '1', 'GD', 'jodi', 'fastcross', '12', '15', NULL, '2022-05-13 05:38:41'),
(24, '1', 'GL', 'quick_cross', 'none', '28', '5', NULL, '2022-05-14 15:41:06'),
(25, '1', 'GL', 'quick_cross', 'none', '25', '5', NULL, '2022-05-14 15:41:06'),
(26, '1', 'GL', 'quick_cross', 'none', '25', '5', NULL, '2022-05-14 15:41:06'),
(27, '1', 'GL', 'quick_cross', 'none', '25', '5', NULL, '2022-05-14 15:41:06'),
(28, '1', 'GL', 'quick_cross', 'none', '25', '5', NULL, '2022-05-14 15:41:06'),
(29, '1', 'GL', 'quick_cross', 'none', '22', '5', NULL, '2022-05-14 15:41:06'),
(30, '1', 'GL', 'quick_cross', 'none', '58', '5', NULL, '2022-05-14 15:41:06'),
(31, '1', 'GL', 'quick_cross', 'none', '55', '5', NULL, '2022-05-14 15:41:06'),
(32, '1', 'GL', 'quick_cross', 'none', '55', '5', NULL, '2022-05-14 15:41:06'),
(33, '1', 'GL', 'quick_cross', 'none', '55', '5', NULL, '2022-05-14 15:41:06'),
(34, '1', 'GL', 'quick_cross', 'none', '55', '5', NULL, '2022-05-14 15:41:06'),
(35, '1', 'GL', 'quick_cross', 'none', '52', '5', NULL, '2022-05-14 15:41:06'),
(36, '1', 'GL', 'quick_cross', 'none', '88', '5', NULL, '2022-05-14 15:41:06'),
(37, '1', 'GL', 'quick_cross', 'none', '85', '5', NULL, '2022-05-14 15:41:06'),
(38, '1', 'GL', 'quick_cross', 'none', '85', '5', NULL, '2022-05-14 15:41:06'),
(39, '1', 'GL', 'quick_cross', 'none', '85', '5', NULL, '2022-05-14 15:41:06'),
(40, '1', 'GL', 'quick_cross', 'none', '85', '5', NULL, '2022-05-14 15:41:06'),
(41, '1', 'GL', 'quick_cross', 'none', '82', '5', NULL, '2022-05-14 15:41:06'),
(42, '1', 'GL', 'quick_cross', 'none', '68', '5', NULL, '2022-05-14 15:41:06'),
(43, '1', 'GL', 'quick_cross', 'none', '65', '5', NULL, '2022-05-14 15:41:06'),
(44, '1', 'GL', 'quick_cross', 'none', '65', '5', NULL, '2022-05-14 15:41:06'),
(45, '1', 'GL', 'quick_cross', 'none', '65', '5', NULL, '2022-05-14 15:41:06'),
(46, '1', 'GL', 'quick_cross', 'none', '65', '5', NULL, '2022-05-14 15:41:06'),
(47, '1', 'GL', 'quick_cross', 'none', '62', '5', NULL, '2022-05-14 15:41:06'),
(48, '1', 'GL', 'quick_cross', 'none', '68', '5', NULL, '2022-05-14 15:41:06'),
(49, '1', 'GL', 'quick_cross', 'none', '65', '5', NULL, '2022-05-14 15:41:06'),
(50, '1', 'GL', 'quick_cross', 'none', '65', '5', NULL, '2022-05-14 15:41:06'),
(51, '1', 'GL', 'quick_cross', 'none', '65', '5', NULL, '2022-05-14 15:41:06'),
(52, '1', 'GL', 'quick_cross', 'none', '65', '5', NULL, '2022-05-14 15:41:06'),
(53, '1', 'GL', 'quick_cross', 'none', '62', '5', NULL, '2022-05-14 15:41:06'),
(54, '1', 'GL', 'quick_cross', 'none', '88', '5', NULL, '2022-05-14 15:41:06'),
(55, '1', 'GL', 'quick_cross', 'none', '85', '5', NULL, '2022-05-14 15:41:06'),
(56, '1', 'GL', 'quick_cross', 'none', '85', '5', NULL, '2022-05-14 15:41:06'),
(57, '1', 'GL', 'quick_cross', 'none', '85', '5', NULL, '2022-05-14 15:41:06'),
(58, '1', 'GL', 'quick_cross', 'none', '85', '5', NULL, '2022-05-14 15:41:06'),
(59, '1', 'GL', 'quick_cross', 'none', '82', '5', NULL, '2022-05-14 15:41:06'),
(60, '1', 'GL', 'odd_even', 'none', '1', '5', NULL, '2022-05-14 16:39:49'),
(61, '1', 'GL', 'odd_even', 'none', '3', '5', NULL, '2022-05-14 16:39:49'),
(62, '1', 'GL', 'odd_even', 'none', '5', '5', NULL, '2022-05-14 16:39:49'),
(63, '1', 'GL', 'odd_even', 'none', '7', '5', NULL, '2022-05-14 16:39:49'),
(64, '1', 'GL', 'odd_even', 'none', '9', '5', NULL, '2022-05-14 16:39:49'),
(65, '1', 'GL', 'odd_even', 'none', '11', '5', NULL, '2022-05-14 16:39:49'),
(66, '1', 'GL', 'odd_even', 'none', '13', '5', NULL, '2022-05-14 16:39:49'),
(67, '1', 'GL', 'odd_even', 'none', '15', '5', NULL, '2022-05-14 16:39:49'),
(68, '1', 'GL', 'odd_even', 'none', '17', '5', NULL, '2022-05-14 16:39:49'),
(69, '1', 'GL', 'odd_even', 'none', '19', '5', NULL, '2022-05-14 16:39:49'),
(70, '1', 'GL', 'odd_even', 'none', '21', '5', NULL, '2022-05-14 16:39:49'),
(71, '1', 'GL', 'odd_even', 'none', '23', '5', NULL, '2022-05-14 16:39:49'),
(72, '1', 'GL', 'odd_even', 'none', '25', '5', NULL, '2022-05-14 16:39:49'),
(73, '1', 'GL', 'odd_even', 'none', '27', '5', NULL, '2022-05-14 16:39:49'),
(74, '1', 'GL', 'odd_even', 'none', '29', '5', NULL, '2022-05-14 16:39:49'),
(75, '1', 'GL', 'odd_even', 'none', '31', '5', NULL, '2022-05-14 16:39:49'),
(76, '1', 'GL', 'odd_even', 'none', '33', '5', NULL, '2022-05-14 16:39:49'),
(77, '1', 'GL', 'odd_even', 'none', '35', '5', NULL, '2022-05-14 16:39:49'),
(78, '1', 'GL', 'odd_even', 'none', '37', '5', NULL, '2022-05-14 16:39:49'),
(79, '1', 'GL', 'odd_even', 'none', '39', '5', NULL, '2022-05-14 16:39:49'),
(80, '1', 'GL', 'odd_even', 'none', '41', '5', NULL, '2022-05-14 16:39:49'),
(81, '1', 'GL', 'odd_even', 'none', '43', '5', NULL, '2022-05-14 16:39:49'),
(82, '1', 'GL', 'odd_even', 'none', '45', '5', NULL, '2022-05-14 16:39:49'),
(83, '1', 'GL', 'odd_even', 'none', '47', '5', NULL, '2022-05-14 16:39:49'),
(84, '1', 'GL', 'odd_even', 'none', '49', '5', NULL, '2022-05-14 16:39:49'),
(85, '1', 'GL', 'odd_even', 'none', '51', '5', NULL, '2022-05-14 16:39:49'),
(86, '1', 'GL', 'odd_even', 'none', '53', '5', NULL, '2022-05-14 16:39:49'),
(87, '1', 'GL', 'odd_even', 'none', '55', '5', NULL, '2022-05-14 16:39:49'),
(88, '1', 'GL', 'odd_even', 'none', '57', '5', NULL, '2022-05-14 16:39:49'),
(89, '1', 'GL', 'odd_even', 'none', '59', '5', NULL, '2022-05-14 16:39:49'),
(90, '1', 'GL', 'odd_even', 'none', '61', '5', NULL, '2022-05-14 16:39:49'),
(91, '1', 'GL', 'odd_even', 'none', '63', '5', NULL, '2022-05-14 16:39:49'),
(92, '1', 'GL', 'odd_even', 'none', '65', '5', NULL, '2022-05-14 16:39:49'),
(93, '1', 'GL', 'odd_even', 'none', '67', '5', NULL, '2022-05-14 16:39:49'),
(94, '1', 'GL', 'odd_even', 'none', '69', '5', NULL, '2022-05-14 16:39:49'),
(95, '1', 'GL', 'odd_even', 'none', '71', '5', NULL, '2022-05-14 16:39:49'),
(96, '1', 'GL', 'odd_even', 'none', '73', '5', NULL, '2022-05-14 16:39:49'),
(97, '1', 'GL', 'odd_even', 'none', '75', '5', NULL, '2022-05-14 16:39:49'),
(98, '1', 'GL', 'odd_even', 'none', '77', '5', NULL, '2022-05-14 16:39:49'),
(99, '1', 'GL', 'odd_even', 'none', '79', '5', NULL, '2022-05-14 16:39:49'),
(100, '1', 'GL', 'odd_even', 'none', '81', '5', NULL, '2022-05-14 16:39:49'),
(101, '1', 'GL', 'odd_even', 'none', '83', '5', NULL, '2022-05-14 16:39:49'),
(102, '1', 'GL', 'odd_even', 'none', '85', '5', NULL, '2022-05-14 16:39:49'),
(103, '1', 'GL', 'odd_even', 'none', '87', '5', NULL, '2022-05-14 16:39:49'),
(104, '1', 'GL', 'odd_even', 'none', '89', '5', NULL, '2022-05-14 16:39:49'),
(105, '1', 'GL', 'odd_even', 'none', '91', '5', NULL, '2022-05-14 16:39:49'),
(106, '1', 'GL', 'odd_even', 'none', '93', '5', NULL, '2022-05-14 16:39:49'),
(107, '1', 'GL', 'odd_even', 'none', '95', '5', NULL, '2022-05-14 16:39:49'),
(108, '1', 'GL', 'odd_even', 'none', '97', '5', NULL, '2022-05-14 16:39:49'),
(109, '1', 'GL', 'odd_even', 'none', '99', '5', NULL, '2022-05-14 16:39:49'),
(110, '1', 'GL', 'odd_even', 'none', '0', '5', NULL, '2022-05-14 16:39:49'),
(111, '1', 'GL', 'odd_even', 'none', '2', '5', NULL, '2022-05-14 16:39:49'),
(112, '1', 'GL', 'odd_even', 'none', '4', '5', NULL, '2022-05-14 16:39:49'),
(113, '1', 'GL', 'odd_even', 'none', '6', '5', NULL, '2022-05-14 16:39:49'),
(114, '1', 'GL', 'odd_even', 'none', '8', '5', NULL, '2022-05-14 16:39:49'),
(115, '1', 'GL', 'odd_even', 'none', '10', '5', NULL, '2022-05-14 16:39:49'),
(116, '1', 'GL', 'odd_even', 'none', '12', '5', NULL, '2022-05-14 16:39:49'),
(117, '1', 'GL', 'odd_even', 'none', '14', '5', NULL, '2022-05-14 16:39:49'),
(118, '1', 'GL', 'odd_even', 'none', '16', '5', NULL, '2022-05-14 16:39:49'),
(119, '1', 'GL', 'odd_even', 'none', '18', '5', NULL, '2022-05-14 16:39:49'),
(120, '1', 'GL', 'odd_even', 'none', '20', '5', NULL, '2022-05-14 16:39:49'),
(121, '1', 'GL', 'odd_even', 'none', '22', '5', NULL, '2022-05-14 16:39:49'),
(122, '1', 'GL', 'odd_even', 'none', '24', '5', NULL, '2022-05-14 16:39:49'),
(123, '1', 'GL', 'odd_even', 'none', '26', '5', NULL, '2022-05-14 16:39:49'),
(124, '1', 'GL', 'odd_even', 'none', '28', '5', NULL, '2022-05-14 16:39:50'),
(125, '1', 'GL', 'odd_even', 'none', '30', '5', NULL, '2022-05-14 16:39:50'),
(126, '1', 'GL', 'odd_even', 'none', '32', '5', NULL, '2022-05-14 16:39:50'),
(127, '1', 'GL', 'odd_even', 'none', '34', '5', NULL, '2022-05-14 16:39:50'),
(128, '1', 'GL', 'odd_even', 'none', '36', '5', NULL, '2022-05-14 16:39:50'),
(129, '1', 'GL', 'odd_even', 'none', '38', '5', NULL, '2022-05-14 16:39:50'),
(130, '1', 'GL', 'odd_even', 'none', '40', '5', NULL, '2022-05-14 16:39:50'),
(131, '1', 'GL', 'odd_even', 'none', '42', '5', NULL, '2022-05-14 16:39:50'),
(132, '1', 'GL', 'odd_even', 'none', '44', '5', NULL, '2022-05-14 16:39:50'),
(133, '1', 'GL', 'odd_even', 'none', '46', '5', NULL, '2022-05-14 16:39:50'),
(134, '1', 'GL', 'odd_even', 'none', '48', '5', NULL, '2022-05-14 16:39:50'),
(135, '1', 'GL', 'odd_even', 'none', '50', '5', NULL, '2022-05-14 16:39:50'),
(136, '1', 'GL', 'odd_even', 'none', '52', '5', NULL, '2022-05-14 16:39:50'),
(137, '1', 'GL', 'odd_even', 'none', '54', '5', NULL, '2022-05-14 16:39:50'),
(138, '1', 'GL', 'odd_even', 'none', '56', '5', NULL, '2022-05-14 16:39:50'),
(139, '1', 'GL', 'odd_even', 'none', '58', '5', NULL, '2022-05-14 16:39:50'),
(140, '1', 'GL', 'odd_even', 'none', '60', '5', NULL, '2022-05-14 16:39:50'),
(141, '1', 'GL', 'odd_even', 'none', '62', '5', NULL, '2022-05-14 16:39:50'),
(142, '1', 'GL', 'odd_even', 'none', '64', '5', NULL, '2022-05-14 16:39:50'),
(143, '1', 'GL', 'odd_even', 'none', '66', '5', NULL, '2022-05-14 16:39:50'),
(144, '1', 'GL', 'odd_even', 'none', '68', '5', NULL, '2022-05-14 16:39:50'),
(145, '1', 'GL', 'odd_even', 'none', '70', '5', NULL, '2022-05-14 16:39:50'),
(146, '1', 'GL', 'odd_even', 'none', '72', '5', NULL, '2022-05-14 16:39:50'),
(147, '1', 'GL', 'odd_even', 'none', '74', '5', NULL, '2022-05-14 16:39:50'),
(148, '1', 'GL', 'odd_even', 'none', '76', '5', NULL, '2022-05-14 16:39:50'),
(149, '1', 'GL', 'odd_even', 'none', '78', '5', NULL, '2022-05-14 16:39:50'),
(150, '1', 'GL', 'odd_even', 'none', '80', '5', NULL, '2022-05-14 16:39:50'),
(151, '1', 'GL', 'odd_even', 'none', '82', '5', NULL, '2022-05-14 16:39:50'),
(152, '1', 'GL', 'odd_even', 'none', '84', '5', NULL, '2022-05-14 16:39:50'),
(153, '1', 'GL', 'odd_even', 'none', '86', '5', NULL, '2022-05-14 16:39:50'),
(154, '1', 'GL', 'odd_even', 'none', '88', '5', NULL, '2022-05-14 16:39:50'),
(155, '1', 'GL', 'odd_even', 'none', '90', '5', NULL, '2022-05-14 16:39:50'),
(156, '1', 'GL', 'odd_even', 'none', '92', '5', NULL, '2022-05-14 16:39:50'),
(157, '1', 'GL', 'odd_even', 'none', '94', '5', NULL, '2022-05-14 16:39:50'),
(158, '1', 'GL', 'odd_even', 'none', '96', '5', NULL, '2022-05-14 16:39:50'),
(159, '1', 'GL', 'odd_even', 'none', '98', '5', NULL, '2022-05-14 16:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(11) NOT NULL,
  `user_id` text DEFAULT NULL,
  `points` text DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `user_id`, `points`, `date_created`) VALUES
(1, '1', '50', '2022-05-09 04:45:55'),
(2, '1', '50', '2022-05-09 04:51:27'),
(3, '1', '50', '2022-05-09 20:55:53'),
(4, '1', '50', '2022-05-09 20:57:00'),
(5, '1', '50', '2022-05-14 15:39:05'),
(6, '1', '500', '2022-05-14 16:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `date` text DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `DS` int(11) DEFAULT NULL,
  `GB` int(11) DEFAULT NULL,
  `GL` int(11) DEFAULT NULL,
  `FD` int(11) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `date`, `day`, `month`, `year`, `DS`, `GB`, `GL`, `FD`, `last_updated`, `date_created`) VALUES
(1, '2022-05-13', 13, 5, 2022, 23, 22, 21, 20, NULL, '2022-05-14 09:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `mobile` text DEFAULT NULL,
  `account_number` text DEFAULT NULL,
  `ifsc_code` text DEFAULT NULL,
  `holder_name` text DEFAULT NULL,
  `points` text DEFAULT NULL,
  `earn` text DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `account_number`, `ifsc_code`, `holder_name`, `points`, `earn`, `last_updated`, `date_created`) VALUES
(1, 'hello', '7358832695', '345678', 'bdg6327', 'divakar', '750', '350', '2022-05-14 16:39:27', '2022-05-08 04:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `id` int(11) NOT NULL,
  `user_id` text DEFAULT NULL,
  `amount` text DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdrawal`
--

INSERT INTO `withdrawal` (`id`, `user_id`, `amount`, `date_created`) VALUES
(1, '1', '100', '2022-05-09 18:04:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
