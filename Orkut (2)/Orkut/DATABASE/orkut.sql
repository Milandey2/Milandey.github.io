-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 08:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orkut`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer_login`
--

CREATE TABLE `buyer_login` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_signup`
--

CREATE TABLE `buyer_signup` (
  `id` int(255) NOT NULL,
  `cmpy` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `add1` varchar(255) NOT NULL,
  `add2` varchar(255) NOT NULL,
  `add3` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `rpass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `terms` varchar(255) NOT NULL,
  `privacy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer_signup`
--

INSERT INTO `buyer_signup` (`id`, `cmpy`, `country`, `add1`, `add2`, `add3`, `city`, `state`, `zip`, `first`, `last`, `email`, `pass`, `rpass`, `role`, `terms`, `privacy`) VALUES
(1, '', 'India', 'Andheri', 'saddcsdsdcs', 'sadc', 'Mumbai', 'Maharashtra', '400058', 'milan', 'dey', 'admin@gmail.com', 'milan_123', 'milan_123', 'ytdyjc', 'terms', 'terms'),
(2, 'milan', 'India', 'Andheri', 'sdc', 'wrfrf', 'Mumbai', 'Maharashtra', '400058', 'milan', 'dey', 'admin@gmail.com', 'milan_123', 'milan_123', 'ytdyjc', 'terms', 'terms');

-- --------------------------------------------------------

--
-- Table structure for table `supply_login`
--

CREATE TABLE `supply_login` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supply_signup`
--

CREATE TABLE `supply_signup` (
  `id` int(255) NOT NULL,
  `cmpy` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `add1` varchar(255) NOT NULL,
  `add2` varchar(255) NOT NULL,
  `add3` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `rpass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `terms` varchar(255) NOT NULL,
  `privacy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supply_signup`
--

INSERT INTO `supply_signup` (`id`, `cmpy`, `country`, `add1`, `add2`, `add3`, `city`, `state`, `zip`, `first`, `last`, `email`, `pass`, `rpass`, `role`, `terms`, `privacy`) VALUES
(1, 'adf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'milan', 'India', 'Andheri', 'zds', 'sdadfcd', 'Mumbai', 'Maharashtra', '400058', 'milan', 'dey', 'admin@gmail.com', 'milan_123', 'milan_123', 'ytdyjc', 'on', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer_login`
--
ALTER TABLE `buyer_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_signup`
--
ALTER TABLE `buyer_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supply_login`
--
ALTER TABLE `supply_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supply_signup`
--
ALTER TABLE `supply_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer_login`
--
ALTER TABLE `buyer_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyer_signup`
--
ALTER TABLE `buyer_signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supply_login`
--
ALTER TABLE `supply_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supply_signup`
--
ALTER TABLE `supply_signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
