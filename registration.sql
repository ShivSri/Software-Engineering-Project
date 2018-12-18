-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 09:08 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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
-- Table structure for table `survey`
--

DROP TABLE IF EXISTS `survey`;
CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `goal` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `healthy` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `bmi` int(11) NOT NULL,
  `allergy` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trail`
--

DROP TABLE IF EXISTS `trail`;
CREATE TABLE `trail` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `healthy` varchar(255) NOT NULL,
  `weight` text NOT NULL,
  `height` text NOT NULL,
  `age` varchar(255) NOT NULL,
  `bmi` varchar(255) NOT NULL,
  `allergy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trail`
--

INSERT INTO `trail` (`id`, `username`, `email`, `password`, `goal`, `gender`, `healthy`, `weight`, `height`, `age`, `bmi`, `allergy`) VALUES
(11, 'apple', 'apple@apple.com', '1f3870be274f6c49b3e31a0c6728957f', 'apple', 'Male', 'Car', 'The health issues', '2303', 'Yes', 'Yes', '23'),
(12, 'aman', 'aman@aman.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'shoe', 'shiv@gmail.com', '1f3870be274f6c49b3e31a0c6728957f'),
(2, 'name', 'name@gmail.com', '65f3c7acf838905ddd03139956e383a7'),
(3, 'Sahil1', 'sahil12@yahoo.com', '69f404925df883e0e5579d65b7768e7c'),
(4, 'shiva', 'sri@gmail.com', '06d80eb0c50b49a509b49f2424e8c805'),
(5, 'zamir', 'z@gmail.com', 'ff1d045f35b400ddc92ff23df27a0844'),
(6, 'shiva2', 'shiva@gmail.com', '5e01231573704966c6ed7ea352bda445'),
(7, 'jalen', 'j@gmail.com', '79563e90630af3525dff01b6638b0886'),
(8, 'akmal', 'sdfijnkfmj@gmail.com', '977d3a3d9073195f34586da4d74b8508'),
(9, 'ram', 'r@yahoo.com', '4641999a7679fcaef2df0e26d11e3c72'),
(10, 'samq', 'sw@gmail.com', '81d306113ae362e6c76c3e10642b5461'),
(11, 'bob', 'bobthebuild@gmail.com', '5f9901fc60b769b523d0dd8e79b3fe08'),
(12, 'david', 'dgladney1@student.gsu.edu', 'password'),
(13, 'kyle', 'kyle@gmail.com', '*2470C0C06DEE42FD1618BB99005ADCA2EC9D1E19'),
(14, 'kevin', 'kevin@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(15, 'gtbiggay', 'gt@gmail.com', 'c6746c1747162dbe3bded8b5b5f016f5'),
(16, 'moe', 'moe@gmail.com', '7f33334d4c2f6dd6ffc701944cec2f1c'),
(17, 'rao', 'rao@rao.rao.org', '44978a1316ed2a495d108b47badc18b9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trail`
--
ALTER TABLE `trail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trail`
--
ALTER TABLE `trail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
