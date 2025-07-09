-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2025 at 09:19 PM
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
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `employess`
--

CREATE TABLE `employess` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `hire_date` date NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `salary` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employess`
--

INSERT INTO `employess` (`id`, `email`, `phone_number`, `hire_date`, `job_id`, `salary`) VALUES
(1, 'SKING', '515.123.4567', '1987-06-17', 'AD_PRES', 23619.60),
(2, 'NKOCHHAR', '515.123.4568', '1987-06-18', 'AD_VP', 13770.00),
(3, 'LDEHAAN', '515.123.4569', '1987-06-19', 'AD VP', 13770.00),
(4, 'AHUNOLD', '590.423.4567', '1987-06-20', 'IT PROG', 8910.00),
(5, 'BERNST', '590.423.4568', '1987-06-21', 'IT PROG', 5940.00),
(6, 'DAUSTIN', '590.423.4569', '1987-06-22', 'IT PROG', 4752.00),
(7, 'VPATABAL', '590.423.4560', '1987-06-23', 'IT_PROG', 4752.00),
(8, 'DLORENTZ', '590.423.5567', '1987-06-24', 'IT PROG', 4885.65);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employess`
--
ALTER TABLE `employess`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employess`
--
ALTER TABLE `employess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
