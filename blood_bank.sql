-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 04:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `slNo` int(22) NOT NULL,
  `fullName` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(400) NOT NULL,
  `bloodGroup` varchar(25) DEFAULT NULL,
  `doB` varchar(25) DEFAULT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `phoneNo` varchar(250) DEFAULT NULL,
  `district` varchar(25) DEFAULT NULL,
  `image` varchar(256) NOT NULL,
  `status` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`slNo`, `fullName`, `email`, `password`, `bloodGroup`, `doB`, `gender`, `phoneNo`, `district`, `image`, `status`) VALUES
(1, 'Ashok Varma', 'ashokbevara999@gmail.com', '7815696ecbf1c96e6894b779456d330e', 'B +', '2002-10-26', 'Male', '9391387765', 'Srikakulam', 'ashok varma_profile.jpg', 2),
(2, 'ASHOK VARMA BEVARA', 'mrfailure1026@gmail.com', '912ec803b2ce49e4a541068d495ab570', 'A +', '2022-06-23', 'Male', '9440583461', 'Karimnagar', 'ashok varma bevara_profile.png', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`slNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `slNo` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
