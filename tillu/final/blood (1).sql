-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2023 at 05:41 AM
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
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `disasteremergency`
--

CREATE TABLE `disasteremergency` (
  `ID` int(200) NOT NULL,
  `Disaster_name` varchar(200) NOT NULL,
  `Disaster_place` varchar(200) NOT NULL,
  `Blood_group` varchar(200) NOT NULL,
  `Blood_Quantity` int(200) NOT NULL,
  `Date` datetime(6) NOT NULL,
  `Reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disasteremergency`
--

INSERT INTO `disasteremergency` (`ID`, `Disaster_name`, `Disaster_place`, `Blood_group`, `Blood_Quantity`, `Date`, `Reason`) VALUES
(1, 'Earthquake', 'Ahemedabad', 'B+', 3, '2023-07-07 22:39:21.000000', 'earthquake'),
(2, 'tsunami', 'beed', 'A+', 3, '2023-07-09 10:02:35.000000', 'tsunami');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalemergency`
--

CREATE TABLE `hospitalemergency` (
  `ID` int(200) NOT NULL,
  `Patientname` varchar(200) NOT NULL,
  `Hospitalname` varchar(200) NOT NULL,
  `Bloodgroup` varchar(200) NOT NULL,
  `BloodQuantity` int(200) NOT NULL,
  `Date` datetime(6) NOT NULL,
  `Reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospitalemergency`
--

INSERT INTO `hospitalemergency` (`ID`, `Patientname`, `Hospitalname`, `Bloodgroup`, `BloodQuantity`, `Date`, `Reason`) VALUES
(1, 'chinmay', 'maccare', 'A+', 3, '2023-07-07 08:38:11.000000', 'healthissue'),
(2, 'pratik', 'maccare', 'B-', 5, '2023-07-09 09:56:23.000000', 'AIDS');

-- --------------------------------------------------------

--
-- Table structure for table `login_activity`
--

CREATE TABLE `login_activity` (
  `Id` int(200) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Logintime` datetime(6) NOT NULL,
  `Logouttime` datetime(6) NOT NULL,
  `IP` varchar(200) NOT NULL,
  `Status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disasteremergency`
--
ALTER TABLE `disasteremergency`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hospitalemergency`
--
ALTER TABLE `hospitalemergency`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login_activity`
--
ALTER TABLE `login_activity`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disasteremergency`
--
ALTER TABLE `disasteremergency`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospitalemergency`
--
ALTER TABLE `hospitalemergency`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_activity`
--
ALTER TABLE `login_activity`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
