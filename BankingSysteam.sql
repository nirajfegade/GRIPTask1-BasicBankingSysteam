-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2021 at 06:22 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BankingSysteam`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balance` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `name`, `email`, `balance`) VALUES
(1, 'Niraj', 'niraj@gmail.com', 40000),
(2, 'Harsha', 'harsha@gmail.com', 2000),
(3, 'Dhun', 'dhun@gmail.com', 940000),
(4, 'shubham', 'ahubham@gmail.com', 30000),
(5, 'Aniket', 'aniket@gmaol.com', 1000000),
(6, 'ovi', 'ovi@gmail.com', 2000000),
(7, 'Om', 'om@gmail.com', 102000),
(8, 'Amit', 'amit@gmail.com', 430204),
(9, 'Ritesh', 'ritesh@gmail.com', 100000),
(10, 'Sharad', 'sharad@gmail.com', 20383);

-- --------------------------------------------------------

--
-- Table structure for table `Transfer`
--

CREATE TABLE `Transfer` (
  `transferfrom` varchar(255) NOT NULL,
  `transferto` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Transfer`
--

INSERT INTO `Transfer` (`transferfrom`, `transferto`, `amount`) VALUES
('Niraj', 'Harsha', 2),
('Niraj', 'Om', 2000),
('Harsha', 'Niraj', 2),
('Niraj', 'Om', 30000),
('Dhun', 'Niraj', 30000),
('Harsha', 'Niraj', 2000),
('Niraj', 'Harsha', 2000),
('Dhun', 'Om', 30000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
