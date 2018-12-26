-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 03:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonedirectory`
--

-- --------------------------------------------------------

--
-- Table structure for table `phonedirectory`
--

CREATE TABLE `phonedirectory` (
  `Id` int(10) NOT NULL,
  `PhoneNo` varchar(12) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `UserId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phonedirectory`
--

INSERT INTO `phonedirectory` (`Id`, `PhoneNo`, `Name`, `Email`, `UserId`) VALUES
(1, '0321-3214321', 'Farrukh', 'farrukhmaqsood01@yahoo.com', 1),
(2, '0321-4785692', 'Ali', 'ali@gmail.com', 8),
(4, '0321456789', 'Asif Ali', 'ali@gmail.com', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `C_Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Email`, `Password`, `C_Password`) VALUES
(1, 'farrukhmaqsood01@yahoo.com', 'bfd59291e825b5f2bbf1eb76569f8fe7', 'bfd59291e825b5f2bbf1eb76569f8fe7'),
(8, 'ali@gmail.com', '7815696ecbf1c96e6894b779456d330e', '7815696ecbf1c96e6894b779456d330e'),
(9, 'farrukhmaqsood001@gmail.com', 'bfd59291e825b5f2bbf1eb76569f8fe7', 'bfd59291e825b5f2bbf1eb76569f8fe7'),
(10, 'Hassan@gmail.com', 'bfd59291e825b5f2bbf1eb76569f8fe7', 'bfd59291e825b5f2bbf1eb76569f8fe7'),
(11, 'rizwan@gmail.com', 'bfd59291e825b5f2bbf1eb76569f8fe7', 'bfd59291e825b5f2bbf1eb76569f8fe7'),
(12, 'Ahmad@gamil.com', 'bfd59291e825b5f2bbf1eb76569f8fe7', 'bfd59291e825b5f2bbf1eb76569f8fe7'),
(13, 'Farhan@gmail.com', 'bfd59291e825b5f2bbf1eb76569f8fe7', 'bfd59291e825b5f2bbf1eb76569f8fe7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phonedirectory`
--
ALTER TABLE `phonedirectory`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phonedirectory`
--
ALTER TABLE `phonedirectory`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
