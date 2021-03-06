-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2018 at 01:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubreg`
--

CREATE TABLE `clubreg` (
  `id` int(10) NOT NULL,
  `clubname` varchar(50) NOT NULL,
  `estdate` varchar(30) NOT NULL,
  `house` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `thana` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `postcode` int(10) NOT NULL,
  `president` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubreg`
--

INSERT INTO `clubreg` (`id`, `clubname`, `estdate`, `house`, `location`, `village`, `thana`, `district`, `postcode`, `president`) VALUES
(1, 'Lions Club ', '12-12-2010', '213', 'Jayanagar', '7th Cross', 'Bengaluru', 'Bengaluru Urban', 560078, 'Pending'),
(2, 'Tigers Club', '10-10-2008', 'B-123', 'JP Nagar', '11th Main', 'Bengaluru', 'Bengaluru Urban', 560078, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `profileinfo`
--

CREATE TABLE `profileinfo` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profileinfo`
--

INSERT INTO `profileinfo` (`id`, `firstname`, `lastname`, `age`, `mobile`, `email`, `address`, `password`) VALUES
(4, 'Soma Charan', 'Sai', 21, 123456, 'soma19cs100@bnmit.in', 'Bengaluru', '560078');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(99, 'Charan', 'soma19cs100@bnmit.in', '560078');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubreg`
--
ALTER TABLE `clubreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profileinfo`
--
ALTER TABLE `profileinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubreg`
--
ALTER TABLE `clubreg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profileinfo`
--
ALTER TABLE `profileinfo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
