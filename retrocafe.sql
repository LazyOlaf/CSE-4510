-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 06:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `retrocafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablebooking`
--

CREATE TABLE `tablebooking` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `person` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablebooking`
--

INSERT INTO `tablebooking` (`ID`, `Name`, `phoneno`, `Date`, `Time`, `person`) VALUES
(0, 'Faria Ahmed', 2147483647, '2022-10-12', '13:35:00', 2),
(0, 'Faria Ahmed', 2147483647, '2022-10-12', '13:35:00', 2),
(0, '', 0, '0000-00-00', '00:00:00', 0),
(0, '', 0, '0000-00-00', '00:00:00', 0),
(0, '', 0, '0000-00-00', '00:00:00', 0),
(0, '', 0, '0000-00-00', '00:00:00', 0),
(0, '', 0, '0000-00-00', '00:00:00', 0),
(0, '', 0, '0000-00-00', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `useraddedmenu`
--

CREATE TABLE `useraddedmenu` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraddedmenu`
--

INSERT INTO `useraddedmenu` (`ID`, `Name`, `Email`, `Menu`) VALUES
(1, '', '', ''),
(2, 'Faria Ahmed', 'fariaahmed@iut-dhaka.edu', 'boil rice!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useraddedmenu`
--
ALTER TABLE `useraddedmenu`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `useraddedmenu`
--
ALTER TABLE `useraddedmenu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
