-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 08:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rhm`
--

-- --------------------------------------------------------

--
-- Table structure for table `misc`
--

CREATE TABLE `misc` (
  `Date1` date DEFAULT NULL,
  `Date2` date DEFAULT NULL,
  `Date3` date DEFAULT NULL,
  `Service1` varchar(3) DEFAULT NULL,
  `Service2` varchar(3) DEFAULT NULL,
  `Service3` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `misc`
--

INSERT INTO `misc` (`Date1`, `Date2`, `Date3`, `Service1`, `Service2`, `Service3`) VALUES
('2021-09-07', '2021-09-05', '2021-09-09', 'YES', 'YES', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `service1`
--

CREATE TABLE `service1` (
  `SeatID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `Contact` varchar(10) DEFAULT NULL,
  `Attending` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service1`
--

INSERT INTO `service1` (`SeatID`, `Name`, `Surname`, `Contact`, `Attending`) VALUES
(1, '', '', '', 'NO'),
(2, '', '', '', 'NO'),
(3, '', '', '', 'NO'),
(4, '', '', '', 'NO'),
(5, '', '', '', 'NO'),
(6, '', '', '', 'NO'),
(7, '', '', '', 'NO'),
(8, '', '', '', 'NO'),
(9, '', '', '', 'NO'),
(10, '', '', '', 'NO'),
(11, '', '', '', 'NO'),
(12, '', '', '', 'NO'),
(13, '', '', '', 'NO'),
(14, '', '', '', 'NO'),
(15, '', '', '', 'NO'),
(16, '', '', '', 'NO'),
(17, '', '', '', 'NO'),
(18, '', '', '', 'NO'),
(19, '', '', '', 'NO'),
(20, '', '', '', 'NO'),
(21, '', '', '', 'NO'),
(22, '', '', '', 'NO'),
(23, '', '', '', 'NO'),
(24, '', '', '', 'NO'),
(25, '', '', '', 'NO'),
(26, '', '', '', 'NO'),
(27, '', '', '', 'NO'),
(28, '', '', '', 'NO'),
(29, '', '', '', 'NO'),
(30, '', '', '', 'NO'),
(31, '', '', '', 'NO'),
(32, '', '', '', 'NO'),
(33, '', '', '', 'NO'),
(34, '', '', '', 'NO'),
(35, '', '', '', 'NO'),
(36, '', '', '', 'NO'),
(37, '', '', '', 'NO'),
(38, '', '', '', 'NO'),
(39, '', '', '', 'NO'),
(40, '', '', '', 'NO'),
(41, '', '', '', 'NO'),
(42, '', '', '', 'NO'),
(43, '', '', '', 'NO'),
(44, '', '', '', 'NO'),
(45, '', '', '', 'NO'),
(46, '', '', '', 'NO'),
(47, '', '', '', 'NO'),
(48, '', '', '', 'NO'),
(49, '', '', '', 'NO'),
(50, '', '', '', 'NO'),
(51, '', '', '', 'NO'),
(52, '', '', '', 'NO'),
(53, '', '', '', 'NO'),
(54, '', '', '', 'NO'),
(55, '', '', '', 'NO'),
(56, '', '', '', 'NO'),
(57, '', '', '', 'NO'),
(58, '', '', '', 'NO'),
(59, '', '', '', 'NO'),
(60, '', '', '', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `service2`
--

CREATE TABLE `service2` (
  `SeatID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `Contact` varchar(10) DEFAULT NULL,
  `Attending` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service2`
--

INSERT INTO `service2` (`SeatID`, `Name`, `Surname`, `Contact`, `Attending`) VALUES
(1, '', '', '', 'NO'),
(2, '', '', '', 'NO'),
(3, '', '', '', 'NO'),
(4, '', '', '', 'NO'),
(5, '', '', '', 'NO'),
(6, '', '', '', 'NO'),
(7, '', '', '', 'NO'),
(8, '', '', '', 'NO'),
(9, '', '', '', 'NO'),
(10, '', '', '', 'NO'),
(11, '', '', '', 'NO'),
(12, '', '', '', 'NO'),
(13, '', '', '', 'NO'),
(14, '', '', '', 'NO'),
(15, '', '', '', 'NO'),
(16, '', '', '', 'NO'),
(17, '', '', '', 'NO'),
(18, '', '', '', 'NO'),
(19, '', '', '', 'NO'),
(20, '', '', '', 'NO'),
(21, '', '', '', 'NO'),
(22, '', '', '', 'NO'),
(23, '', '', '', 'NO'),
(24, '', '', '', 'NO'),
(25, '', '', '', 'NO'),
(26, '', '', '', 'NO'),
(27, '', '', '', 'NO'),
(28, '', '', '', 'NO'),
(29, '', '', '', 'NO'),
(30, '', '', '', 'NO'),
(31, '', '', '', 'NO'),
(32, '', '', '', 'NO'),
(33, '', '', '', 'NO'),
(34, '', '', '', 'NO'),
(35, '', '', '', 'NO'),
(36, '', '', '', 'NO'),
(37, '', '', '', 'NO'),
(38, '', '', '', 'NO'),
(39, '', '', '', 'NO'),
(40, '', '', '', 'NO'),
(41, '', '', '', 'NO'),
(42, '', '', '', 'NO'),
(43, '', '', '', 'NO'),
(44, '', '', '', 'NO'),
(45, '', '', '', 'NO'),
(46, '', '', '', 'NO'),
(47, '', '', '', 'NO'),
(48, '', '', '', 'NO'),
(49, '', '', '', 'NO'),
(50, '', '', '', 'NO'),
(51, '', '', '', 'NO'),
(52, '', '', '', 'NO'),
(53, '', '', '', 'NO'),
(54, '', '', '', 'NO'),
(55, '', '', '', 'NO'),
(56, '', '', '', 'NO'),
(57, '', '', '', 'NO'),
(58, '', '', '', 'NO'),
(59, '', '', '', 'NO'),
(60, '', '', '', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `service3`
--

CREATE TABLE `service3` (
  `SeatID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `Contact` varchar(10) DEFAULT NULL,
  `Attending` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service3`
--

INSERT INTO `service3` (`SeatID`, `Name`, `Surname`, `Contact`, `Attending`) VALUES
(1, '', '', '', 'NO'),
(2, '', '', '', 'NO'),
(3, '', '', '', 'NO'),
(4, '', '', '', 'NO'),
(5, '', '', '', 'NO'),
(6, '', '', '', 'NO'),
(7, '', '', '', 'NO'),
(8, '', '', '', 'NO'),
(9, '', '', '', 'NO'),
(10, '', '', '', 'NO'),
(11, '', '', '', 'NO'),
(12, '', '', '', 'NO'),
(13, '', '', '', 'NO'),
(14, '', '', '', 'NO'),
(15, '', '', '', 'NO'),
(16, '', '', '', 'NO'),
(17, '', '', '', 'NO'),
(18, '', '', '', 'NO'),
(19, '', '', '', 'NO'),
(20, '', '', '', 'NO'),
(21, '', '', '', 'NO'),
(22, '', '', '', 'NO'),
(23, '', '', '', 'NO'),
(24, '', '', '', 'NO'),
(25, '', '', '', 'NO'),
(26, '', '', '', 'NO'),
(27, '', '', '', 'NO'),
(28, '', '', '', 'NO'),
(29, '', '', '', 'NO'),
(30, '', '', '', 'NO'),
(31, '', '', '', 'NO'),
(32, '', '', '', 'NO'),
(33, '', '', '', 'NO'),
(34, '', '', '', 'NO'),
(35, '', '', '', 'NO'),
(36, '', '', '', 'NO'),
(37, '', '', '', 'NO'),
(38, '', '', '', 'NO'),
(39, '', '', '', 'NO'),
(40, '', '', '', 'NO'),
(41, '', '', '', 'NO'),
(42, '', '', '', 'NO'),
(43, '', '', '', 'NO'),
(44, '', '', '', 'NO'),
(45, '', '', '', 'NO'),
(46, '', '', '', 'NO'),
(47, '', '', '', 'NO'),
(48, '', '', '', 'NO'),
(49, '', '', '', 'NO'),
(50, '', '', '', 'NO'),
(51, '', '', '', 'NO'),
(52, '', '', '', 'NO'),
(53, '', '', '', 'NO'),
(54, '', '', '', 'NO'),
(55, '', '', '', 'NO'),
(56, '', '', '', 'NO'),
(57, '', '', '', 'NO'),
(58, '', '', '', 'NO'),
(59, '', '', '', 'NO'),
(60, '', '', '', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserName` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserName`, `Password`, `Name`) VALUES
('Bella', 'Bella', 'Bella');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service1`
--
ALTER TABLE `service1`
  ADD PRIMARY KEY (`SeatID`);

--
-- Indexes for table `service2`
--
ALTER TABLE `service2`
  ADD PRIMARY KEY (`SeatID`);

--
-- Indexes for table `service3`
--
ALTER TABLE `service3`
  ADD PRIMARY KEY (`SeatID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service1`
--
ALTER TABLE `service1`
  MODIFY `SeatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `service2`
--
ALTER TABLE `service2`
  MODIFY `SeatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `service3`
--
ALTER TABLE `service3`
  MODIFY `SeatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
