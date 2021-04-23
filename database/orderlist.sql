-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2021 at 05:55 PM
-- Server version: 5.7.24
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
-- Database: `soen287`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `orderNb` varchar(10) NOT NULL,
  `preTaxCost` varchar(100) NOT NULL,
  `postTaxCost` varchar(100) NOT NULL,
  `orderSummary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`id`, `email`, `orderNb`, `preTaxCost`, `postTaxCost`, `orderSummary`) VALUES
(1, 'hakhter@concordia.com', '123456', '$85.33', '$98.13', '7 red apple (approx. 3lbs), 2lbs salmon, 5lbs tuna, 2lbs shrimp, 1lb brie cheese'),
(3, 'younesg@concordia.com', '000000', '$44.77', '$51.49', '7 bananas (approx 4lbs), 3lbs beef, 1 liter 2% milk, 1 pack strawberry yogurt, 1 pack banana yogurt'),
(4, 'admin@concordia.com', '023423', '$67.54', '$82.16', '2 red apples, 1lb beef, 2lbs shrimp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orderNb` (`orderNb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
