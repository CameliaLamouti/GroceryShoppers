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
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'Hamna', 'Akhter', 'hakh@concordia.com', 'password'),
(2, 'Chris', 'Karabatsos', 'chrisk@concordia.com', 'password'),
(3, 'Younes', 'Gharbili', 'younesg@concordia.com', 'password'),
(4, 'Tahmid', 'Rahman', 'tahmidr@concordia.com', 'password'),
(5, 'Patrick', 'Keenan', 'patrickk@concordia.com', 'password'),
(7, 'admin', 'admin', 'admin@concordia.com', 'admin'),
(39, 'John', 'Smith', 'johnsmith@test.com', 'password'),
(40, 'Jacky', 'Huang', 'jackyh@test.com', 'hellobye'),
(43, 'Jhonny', 'Bravo', 'jbravo@test.com', 'password'),
(50, 'Keisha', 'Melissa', 'keishasmith@example.com', 'testing'),
(53, 'hamna', 'akhter', 'test@test.com', 'password'),
(54, 'Hamna', 'Akhter', 'hamna97@hotmail.com', 'password'),
(56, 'Hamna', 'Akhter', 'hamnaakhter@hotmail.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
