-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2020 at 05:26 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `height` int(3) DEFAULT NULL,
  `weight` int(3) DEFAULT NULL,
  `blood_group` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`name`, `phone`, `age`, `height`, `weight`, `blood_group`, `timestamp`) VALUES
('a', 0, 0, 0, 0, 'a', '2020-04-28 08:50:49'),
('Vikas yadav', 889373464, 22, 160, 49, 'A+', '2020-04-28 10:28:06'),
('a', 1, 2, 3, 4, 'b', '2020-04-28 12:04:34'),
('krishna yadav', 8962472220, 21, 168, 48, 'B+', '2020-04-29 10:43:19'),
('KRISHNA YADAV', 787, 55, 55, 55, 'A+', '2020-09-03 12:22:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`timestamp`);
--
-- Database: `public`
--
CREATE DATABASE IF NOT EXISTS `public` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `public`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'pankaj', '$2y$10$.1lftNPf1qGhbteBMMby..SjsD8dipPE.8mXZ9EtyKJqeI6yOIDQm', '2020-04-28 11:39:58'),
(2, 'vikas', '$2y$10$dwY2bOFqPRYEAps6YO2NrOfIgkbzMmTghg1j6dmr7asBjsC4FNoNC', '2020-04-28 15:47:02'),
(4, 'harsh', '$2y$10$Tb6DYoHhueY0Z0SHYWq1zOC6/Bh7EKN/.DKwOwHtjx2ymEeXXrvSW', '2020-04-28 20:08:53'),
(5, 'krishna', '$2y$10$BiE5cbsr5kAY0ywi9vG85Od166FLefn0A/LtPjT2u1Ep5UNLuXqeK', '2020-04-29 16:04:05'),
(6, 'hi', '$2y$10$aXU54445slNpVjje/2RswejGmARViY7G569WsKkh8fmuTV/RdAzOu', '2020-09-03 17:51:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
