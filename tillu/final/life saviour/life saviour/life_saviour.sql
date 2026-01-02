-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 08:39 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `life_saviour`
--

-- --------------------------------------------------------

--
-- Table structure for table `addstaff`
--

CREATE TABLE `addstaff` (
  `empid` int(20) NOT NULL,
  `fname` varchar(2000) NOT NULL,
  `mobileno` int(20) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `dob` date NOT NULL,
  `joindate` date NOT NULL,
  `designation` varchar(2000) NOT NULL,
  `shift` varchar(2000) NOT NULL,
  `salary` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addstaff`
--

INSERT INTO `addstaff` (`empid`, `fname`, `mobileno`, `email`, `dob`, `joindate`, `designation`, `shift`, `salary`) VALUES
(566, 'tina', 234567890, 'fvdcgfv@gmail', '2023-06-28', '2023-06-29', 'helper', 'night', 676686),
(566, 'tina', 234567890, 'fvdcgfv@gmail', '2023-06-28', '2023-06-29', 'helper', 'night', 676686),
(566, 'tina', 234567890, 'fvdcgfv@gmail', '2023-06-28', '2023-06-29', 'helper', 'night', 676686),
(566, 'tina', 234567890, 'fvdcgfv@gmail', '2023-06-28', '2023-06-29', 'helper', 'night', 676686),
(566, 'tina', 234567890, 'fvdcgfv@gmail', '2023-06-28', '2023-06-29', 'helper', 'night', 676686);

-- --------------------------------------------------------

--
-- Table structure for table `camporg`
--

CREATE TABLE `camporg` (
  `name` varchar(2000) NOT NULL,
  `mobileno` int(200) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `reason` varchar(5000) NOT NULL,
  `place` varchar(2000) NOT NULL,
  `bloodgroup` varchar(200) NOT NULL,
  `quantity` int(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camporg`
--

INSERT INTO `camporg` (`name`, `mobileno`, `email`, `reason`, `place`, `bloodgroup`, `quantity`, `date`) VALUES
('shravani', 2147483647, 's@gmail.com', 'social service', 'nagar', 'B+', 89, '2023-07-06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
