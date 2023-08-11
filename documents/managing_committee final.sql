-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 07:14 PM
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
-- Database: `db_sgaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `managing_committee`
--

CREATE TABLE `managing_committee` (
  `Sr_No` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Designation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `managing_committee`
--

INSERT INTO `managing_committee` (`Sr_No`, `Name`, `Designation`) VALUES
(1, 'Adv. Prasad S. Naik', 'President'),
(2, 'Adv. Shraddha Borkar', 'Vice President'),
(3, 'Adv. Roheet Shirodkar', 'Secretary'),
(4, 'Adv. Chuvo Barbosa', 'Treasurer'),
(5, 'Adv. Ashtrid N. Almeida', 'Female Member'),
(6, 'Adv. Prashant Borkar', 'Margao Member'),
(7, 'Adv. Sudhir Naik', 'Vasco Member'),
(8, 'Adv. Anju S. Naik Amonkar', 'Quepem Member'),
(9, 'Adv. Kashinath Sawant Dessai', 'Sanguem Member'),
(10, 'Adv. Kunal D. Komarpant', 'Canacona Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `managing_committee`
--
ALTER TABLE `managing_committee`
  ADD PRIMARY KEY (`Sr_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `managing_committee`
--
ALTER TABLE `managing_committee`
  MODIFY `Sr_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
