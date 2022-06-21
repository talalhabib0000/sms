-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 09:35 PM
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
-- Database: `sdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Student'),
(2, 'Teacher'),
(3, 'Parent');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `fullname` text NOT NULL,
  `cnic` int(11) NOT NULL,
  `dob` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `bio` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `cell` int(11) NOT NULL,
  `address` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'A',
  `email` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fullname`, `cnic`, `dob`, `gender`, `bio`, `password`, `cell`, `address`, `image`, `status`, `email`, `type`) VALUES
(1, 'admin', 'Umair Sadiq', 12321312, '14-aug-1947', 'male', 'Umair Sadiq\r\nSoftware Engineer', '$2y$10$kLnnB93TCSFbgavM3BQACuepFVXPJh22xHei9oLi20UhY6P9FBJv6', 3333223, 'ndamdnasmda,sma', '', 'o', 'admin@sdms.com', 'manager'),
(10, '', 'ahsan', 2147483647, '', '', '', '$2y$10$xdsNvDZtic5HVn7D5vzzE.YbJJtR7Gww4j7ZjkMwdgbqSZzkUqzVK', 0, '', '', '', 'ashan123@gmail.com', '1'),
(11, '', 'ali', 2147483647, '2021-10-06', 'male', '', '$2y$10$9ajjtO6mw6p6fKmsBubRHuqErLXSDXyjNZBCkwtkc1BSBsdVSnQDi', 2147483647, 'riphah university i 14 peshawar rad', '', '', 'ali123@gmail.com', '3'),
(13, '', 'musa', 2147483647, '12 augst 2019', 'male', '', '$2y$10$Px7pz9vpPBOU4Zuj6E/utOnW4Nm5mnDCOrm.38cavoEMCxGIzsp6m', 331122556, 'g 10 isabad', '', '', 'musaimtiaz111@yahoo.com', '1'),
(14, '', 'ali', 13, '231321', 'm', '', '$2y$10$.Q0Xv6Uo3jbS1Yv4r9uPbeXf3iIGKA3hwM1metmR7SbbbZ8WLt.vi', 2147483647, 'jdkjk32222', '', '', 'ali11@gmail.com', '1'),
(15, '', 'jawad', 2147483647, '12 oct 2001', 'shemale', '', '$2y$10$hE4A94PAX8NkPl69.pqeneRX.3NfsnVmKGC3c8vA.LmtKpjUjjMMW', 2147483647, 'pakistan', '', '', 'jawad123@gmail.com', '3'),
(16, '', 'hamza', 243424233, '12 oct 2001', 'male', '', '$2y$10$QW8kdpSibK2k.B.IyfHwkO/BfWPmfrTvQXamAsKg3S7BuTLfS9uYG', 2423432, 'golra mour rwp', '', '', 'hamza111@gmail.com', '1'),
(17, '', 'raheel', 2147483647, '12 augst 2019', 'shemale', '', '$2y$10$sau8/RbQTz4tJZAteggWXO3Gk8nbyq//SrR54Ls74JZwq8l.YdqVO', 823482734, 'g 10 isabad', '', '', 'raheelkhan123@gmail.com', '2'),
(18, '', 'nouman', 2147483647, 'nbnb', 'm', '', '$2y$10$RbFPNdJtRPjBMiUI03MV0.GAeEVbQlQe8yOhvD4A0ebEbTrbIyVBe', 2147483647, 'riphah university i 14 peshawar rad', '', '', 'admin@sdms.com.pk\r\n', '3'),
(19, '', 'stocksupervisor', 3232, '12 augst 2019', 'male', '', '$2y$10$IwSSzQJyZ5D/NTU91dDg9OnldGAOQoMQi9U9q.D2rSXgY2VTOXcZy', 34234324, 'peshawar road rawalpindi', '', '', 'stocksupervisor@sdms.com', '2'),
(20, '', 'distributor', 2147483647, '12 oct 2001', 'male', '', '$2y$10$OvGgTCXjaJQwKXGcAcjKV.h4zwPHK7R5ARvX79MuHkW2y1xFhZ.3e', 2147483647, 'g 10 isabad', '', '', 'distributor@sdms.com', '3'),
(21, '', 'nouman', 2147483647, '231321', 'male', '', '$2y$10$T3ufBEmxHJNOzo4tbJr5CukMV0TbGvoP6umzwyiX8wySwI/HVDMN.', 331122556, 'female', '', '', 'distributor1@sdms.com', '3'),
(22, '', 'rehan', 123213, '13123', '312312', '', '$2y$10$2IhnLP4DACvkkNPYMhVl5OKC6DAxWT92YD8xwY6urJi/hiyy38W1C', 1323, '312312', '', '', 'rehan@gmail.com', '3'),
(23, '', 'abdullah', 2, '32', '32', '', '$2y$10$43CnqGv/wQuO3B3eLNj6zuj2huSSFzOwwCMhX/rgJt1kQmjoyROLi', 23, '3223', '', '', 'abdullah@111.com', '3'),
(24, '', 'jawad khan', 2147483647, '2021-10-06', 'male', '', '$2y$10$TemJTrK1ahsurUWnd28Og.LAonXvkujcBkjOx9q59kjOt/Fr4OyGC', 222, 'riphah university i 14 peshawar rad', '', 'S', 'jawads123@gmail.com', '1'),
(25, '', 'nouman', 2147483647, '2021-10-06', 'male', 'hello world how are you', '$2y$10$/Lmg0B7lUZXqvRWOY/sTeuwlROmqeaelvCJX8Pzn3cpub0ICjzU4i', 2147483647, 'riphah university i 14 peshawar rad', '', 'A', 'shopvendor@sdms.com', '1'),
(26, '', 'Umair', 3455, '0212-12-12', 'dad', '', '$2y$10$fhRfytNTEAPqcoOGNJH53.Lsqk2a9XrPlajSTRxbqvnBQGVFHe0iG', 5656, 'dsala', '', 'A', 'student@sdms.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
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
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
