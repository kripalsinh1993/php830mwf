-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 09:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales_person`
--

CREATE TABLE `sales_person` (
  `sno` int(11) NOT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `comm` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_person`
--

INSERT INTO `sales_person` (`sno`, `sname`, `city`, `comm`) VALUES
(101, 'peel', 'london', 0.12),
(102, 'serres', 'san_jose', 0.13),
(103, 'axelrod', 'new_york', 0.1),
(104, 'motika', 'london', 0.11),
(105, 'rafkin', 'barcelona', 0.15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales_person`
--
ALTER TABLE `sales_person`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales_person`
--
ALTER TABLE `sales_person`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
