-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 05:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(11) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `customerAddress` varchar(100) NOT NULL,
  `customerEmail` varchar(100) NOT NULL,
  `customerTelephone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `customerName`, `customerAddress`, `customerEmail`, `customerTelephone`) VALUES
(1, 'Chanachai Chantigo', 'ดกเดกเดกกเ', 'toffy.chanachai007@g', '0989716150'),
(2, 'Chanachai Chantigo', 'ดกเดกเดกกเ', 'toffy.chanachai007@g', '0989716150'),
(3, 'ชนะชัย ชันติโก', 'ปราจีนบุรี', 'toffy.chanachai007@g', '0989716150'),
(6, 'Kanin Chusuwan', '82', 'kanin89746@gmaiil.co', '0827756062'),
(7, 'Kanin ', '82', 'kanin89746@gmaiil.co', '0827756062'),
(10, 'ชนะชัย ชันติโก', 'hgfhgfgfhhgf', 'toffy.chanachai007@gmail.com', '0989716150'),
(11, 'ชนะชัย ชันติโก', 'hgfhgfgfhhgf', 'toffy.chanachai007@gmail.com', '0989716150'),
(12, 'ชนะชัย ชันติโก', 'hgfhgfgfhhgf', 'toffy.chanachai007@gmail.com', '0989716150'),
(13, 'ชนะชัย ชันติโก', 'hgfhgfgfhhgf', 'toffy.chanachai007@gmail.com', '0989716150');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
