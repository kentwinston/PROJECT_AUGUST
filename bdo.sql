-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 10:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bdo_info`
--

CREATE TABLE `bdo_info` (
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `placeofbirth` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `house_street_subdivision` varchar(100) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city_municipality` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `zipcodes` int(5) NOT NULL,
  `house_street_subdivision1` varchar(100) NOT NULL,
  `barangay1` varchar(50) NOT NULL,
  `city_municipality1` varchar(100) NOT NULL,
  `province1` varchar(50) NOT NULL,
  `zipcodes1` int(5) NOT NULL,
  `telephone_mobile_number` int(15) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `client_id_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bdo_info`
--

INSERT INTO `bdo_info` (`lastname`, `firstname`, `middlename`, `suffix`, `placeofbirth`, `dateofbirth`, `sex`, `house_street_subdivision`, `barangay`, `city_municipality`, `province`, `zipcodes`, `house_street_subdivision1`, `barangay1`, `city_municipality1`, `province1`, `zipcodes1`, `telephone_mobile_number`, `email_address`, `client_id_number`) VALUES
('sdf', 'sdf', 'sdf', 'Miss', 'sdf', '2023-11-01', 'F', 'sdfsd', 'sdfs', 'Alegria', 'Cebu', 6033, 'sdfsd', 'sdfs', 'Alegria', 'Cebu', 6033, 12312, '123123D@afddf.c', 4561),
('asd', 'asd', 'asd', 'Mr', 'asd', '2023-11-16', 'M', 'asdas', 'asasd', 'Alegria', 'Cebu', 6030, 'asdas', 'asasd', 'Alegria', 'Cebu', 6030, 1321311, 'asdasd@asd.com', 123456),
('boltron', 'kent winston', 'canete', 'Mr', 'Bantayan', '2023-11-22', 'M', 'Terreplen street', 'bantigue', 'Bantayan', 'Cebu', 6031, 'Terreplen street', 'bantigue', 'Bantayan', 'Cebu', 6031, 323461611, 'bkentwinston@gmail.com', 990256),
('Hello', 'My name is', 'none', 'Mrs', 'cebu', '2023-11-24', 'F', 'guadalupe', 'guadalupe', 'Cebu City', 'Cebu', 6021, 'guadalupe', 'guadalupe', 'Cebu City', 'Cebu', 6021, 933211254, 'bkentwinston@gmail.com', 4561237);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bdo_info`
--
ALTER TABLE `bdo_info`
  ADD PRIMARY KEY (`client_id_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
