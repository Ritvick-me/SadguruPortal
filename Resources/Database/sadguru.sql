-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2019 at 07:39 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sadguru`
--

-- --------------------------------------------------------

--
-- Table structure for table `logindoctor`
--

CREATE TABLE `logindoctor` (
  `ID` int(3) NOT NULL,
  `Name` varchar(80) NOT NULL,
  `Designation` varchar(80) NOT NULL,
  `Specialization` varchar(100) NOT NULL,
  `Degree` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL DEFAULT current_timestamp(),
  `Preference` varchar(10) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logindoctor`
--

INSERT INTO `logindoctor` (`ID`, `Name`, `Designation`, `Specialization`, `Degree`, `Gender`, `DOB`, `Preference`, `Password`, `Email`) VALUES
(698, 'Rohit Mehra', 'Senior Doctor', 'Gastro', 'B. Tech.', 'Male', '1987-08-14', 'Male', '827ccb0eea8a706c4c34a16891f84e7b', 'ritvick@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pfname`
--

CREATE TABLE `pfname` (
  `id` int(1) NOT NULL,
  `PFName` varchar(100) NOT NULL,
  `PLName` varchar(100) NOT NULL,
  `Mob` varchar(20) NOT NULL,
  `PSubj` varchar(50) NOT NULL,
  `PInfo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pfname`
--

INSERT INTO `pfname` (`id`, `PFName`, `PLName`, `Mob`, `PSubj`, `PInfo`) VALUES
(1, 'Ritvick', 'Pandey', '9506500334', 'Pagal', 'Pagalpanti ki bimaari.'),
(2, 'Sushant', 'Tripathi', '8987554412', 'Khushi', 'Khushi ki bimaari.'),
(3, 'Shivangi', 'Srivastava', '9979449511', 'Hasna', 'Hasne ki bimaari.'),
(4, 'Rishabh', 'Pandey', '8975666064', 'My condition:', 'dekh lo khud se.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logindoctor`
--
ALTER TABLE `logindoctor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pfname`
--
ALTER TABLE `pfname`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logindoctor`
--
ALTER TABLE `logindoctor`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=700;

--
-- AUTO_INCREMENT for table `pfname`
--
ALTER TABLE `pfname`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
