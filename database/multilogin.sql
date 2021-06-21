-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 10:56 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mwf12to3`
--

-- --------------------------------------------------------

--
-- Table structure for table `multilogin`
--

CREATE TABLE `multilogin` (
  `uid` bigint(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `number` bigint(20) NOT NULL,
  `password` text NOT NULL,
  `auth` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multilogin`
--

INSERT INTO `multilogin` (`uid`, `name`, `email`, `number`, `password`, `auth`) VALUES
(1, 'admin', 'admin@gmail.com', 12345, '12345', 'admin'),
(2, 'Rohan ', 'client@gmail.com', 5550000, '12345', 'client'),
(3, 'Rohan Sadhukhan', 'sadhukhanrohan15@gmail.com', 7278780633, '12345', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `multilogin`
--
ALTER TABLE `multilogin`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `multilogin`
--
ALTER TABLE `multilogin`
  MODIFY `uid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
