-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2026 at 04:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graduation`
--

-- --------------------------------------------------------

--
-- Table structure for table `graduands`
--

CREATE TABLE `graduands` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `status` enum('pending','shown') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `graduands`
--

INSERT INTO `graduands` (`id`, `full_name`, `degree`, `status`) VALUES
(1, 'John M. Kilonzo', 'Bachelor of Science Computer Science', 'shown'),
(2, 'Amina O. Ali', 'Bachelor of Education Arts', 'pending'),
(3, 'Kevin W. Omondi', 'Bachelor Commerce (Accounting)', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `graduands`
--
ALTER TABLE `graduands`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `graduands`
--
ALTER TABLE `graduands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
