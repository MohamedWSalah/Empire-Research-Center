-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 09:07 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `researchblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) DEFAULT NULL,
  `title` text,
  `description` mediumtext,
  `user_comments` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `cases`:
--   `id`
--       `users` -> `id`
--

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `title`, `description`, `user_comments`) VALUES
(1, 'ssdej', 'duoewd', NULL),
(1, 'xsbhiwbc', 'wxbxw', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` text,
  `password` longtext NOT NULL,
  `profession` varchar(20) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `date_of_birth` text,
  `gender` varchar(10) DEFAULT NULL,
  `points` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `profession`, `nationality`, `phone_number`, `date_of_birth`, `gender`, `points`) VALUES
(1, 'admin', '', 'admin', '', '', 0, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `cases_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
