-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 10:47 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softwarehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('zaryab khan', 'zaryab khan'),
('zaryabkhan', 'zaryabkhan');

-- --------------------------------------------------------

--
-- Table structure for table `bussiness`
--

CREATE TABLE `bussiness` (
  `id` int(11) NOT NULL,
  `buisness_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `officialnum` int(11) NOT NULL,
  `faxnumber` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'reject',
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bussiness`
--

INSERT INTO `bussiness` (`id`, `buisness_name`, `address`, `phone`, `officialnum`, `faxnumber`, `email`, `website`, `status`, `logo`) VALUES
(1, 'StockDock', '1/d/6/6', '2147483647', 2147483647, 12345, 'zaryab2002@hotmail.com', 'asfkjjksfjjsafk', 'job', '????\0JFIF\0\0?\0?\0\0??\0C\0\n\n\n\r\r??\0C		\r\r??\0??\"\0??\0\0\0\0\0\0\0\0\0\0\0	\n??\0?\0\0\0}\0!1AQa\"q2???'),
(2, 'StockDock', '1/d/6/6', '2147483647', 2147483647, 12345, 'zaryab2002@hotmail.com', 'asfkjjksfjjsafk', 'approve', '????\0JFIF\0\0?\0?\0\0??\0C\0\n\n\n\r\r??\0C		\r\r??\0??\"\0??\0\0\0\0\0\0\0\0\0\0\0	\n??\0?\0\0\0}\0!1AQa\"q2???'),
(3, 'StockDock', '1/d/6/6', '2147483647', 2147483647, 12345, 'zaryab2002@hotmail.com', 'asfkjjksfjjsafk', 'approve', '????\0JFIF\0\0?\0?\0\0??\0C\0\n\n\n\r\r??\0C		\r\r??\0??\"\0??\0\0\0\0\0\0\0\0\0\0\0	\n??\0?\0\0\0}\0!1AQa\"q2???');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Id` int(11) NOT NULL,
  `buisnessname` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bussiness`
--
ALTER TABLE `bussiness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bussiness`
--
ALTER TABLE `bussiness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
