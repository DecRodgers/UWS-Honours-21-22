-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2021 at 08:19 PM
-- Server version: 10.3.31-MariaDB-0+deb10u1
-- PHP Version: 7.3.29-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `powercontrol`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_login`
--

CREATE TABLE `sign_login` (
  `passcodeid` int(11) NOT NULL,
  `passcodehash` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sign_login`
--
-- Default password is 'raspberry'
INSERT INTO `sign_login` (`passcodeid`, `passcodehash`) VALUES
(1, '$2y$10$91g0kvZoPN3Jihd7zUMnzOwLUekTWY/duMUlPmDhy6/kimEXbjo1y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_login`
--
ALTER TABLE `sign_login`
  ADD PRIMARY KEY (`passcodeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_login`
--
ALTER TABLE `sign_login`
  MODIFY `passcodeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
