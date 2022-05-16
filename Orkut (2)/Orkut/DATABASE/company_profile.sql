-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 08:48 AM
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
-- Database: `company_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE `basic` (
  `id` int(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `network` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `privacy` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `add1` varchar(255) NOT NULL,
  `add2` varchar(255) NOT NULL,
  `add3` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `ship` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic`
--

INSERT INTO `basic` (`id`, `company`, `others`, `network`, `descrip`, `web`, `privacy`, `postal`, `country`, `state`, `city`, `add1`, `add2`, `add3`, `product`, `ship`, `keyword`) VALUES
(1, 'milan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'milan', 'dasfcasfdasf', 'DSD', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bussiness`
--

CREATE TABLE `bussiness` (
  `id` int(255) NOT NULL,
  `year1` varchar(255) NOT NULL,
  `employ` varchar(255) NOT NULL,
  `revenue` varchar(255) NOT NULL,
  `employ2` varchar(255) NOT NULL,
  `legal` varchar(255) NOT NULL,
  `dnus` varchar(255) NOT NULL,
  `global` varchar(255) NOT NULL,
  `classification` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `taxid` varchar(255) NOT NULL,
  `stateid` varchar(255) NOT NULL,
  `regionalid` varchar(255) NOT NULL,
  `vatid` varchar(255) NOT NULL,
  `registration` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bussiness`
--

INSERT INTO `bussiness` (`id`, `year1`, `employ`, `revenue`, `employ2`, `legal`, `dnus`, `global`, `classification`, `type`, `taxid`, `stateid`, `regionalid`, `vatid`, `registration`, `date`) VALUES
(1, 'EFwewefer', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `id` int(255) NOT NULL,
  `sustain` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `energy` varchar(255) NOT NULL,
  `carbon` varchar(255) NOT NULL,
  `measure` varchar(255) NOT NULL,
  `mes` varchar(255) NOT NULL,
  `GHG` varchar(255) NOT NULL,
  `transport` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `small` varchar(255) NOT NULL,
  `women` varchar(255) NOT NULL,
  `minority` varchar(255) NOT NULL,
  `LGBT` varchar(255) NOT NULL,
  `veteran` varchar(255) NOT NULL,
  `ISO` varchar(255) NOT NULL,
  `ISO9000` varchar(255) NOT NULL,
  `ISO9001` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `certi` varchar(255) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `effective` varchar(255) NOT NULL,
  `expiration` varchar(255) NOT NULL,
  `TS16949` varchar(255) NOT NULL,
  `TS16494` varchar(255) NOT NULL,
  `ISO13485` varchar(255) NOT NULL,
  `ISO14000` varchar(255) NOT NULL,
  `ISO4001` varchar(255) NOT NULL,
  `ISO17025` varchar(255) NOT NULL,
  `ISO18000` varchar(255) NOT NULL,
  `ISO2000` varchar(255) NOT NULL,
  `ISO27001` varchar(255) NOT NULL,
  `ISO50001` varchar(255) NOT NULL,
  `ISO31000` varchar(255) NOT NULL,
  `ISO26000` varchar(255) NOT NULL,
  `ISOcom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

CREATE TABLE `marketing` (
  `id` int(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketing`
--

INSERT INTO `marketing` (`id`, `facebook`, `twitter`, `linkedin`) VALUES
(1, 'f', 't', 'l');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic`
--
ALTER TABLE `basic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bussiness`
--
ALTER TABLE `bussiness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic`
--
ALTER TABLE `basic`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bussiness`
--
ALTER TABLE `bussiness`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certification`
--
ALTER TABLE `certification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marketing`
--
ALTER TABLE `marketing`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
