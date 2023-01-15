-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2023 at 07:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Database: `estateagency`
--
-- --------------------------------------------------------
--
-- Table structure for table `agent`

--
CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `otp` varchar(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Dumping data for table `agent`
--
INSERT INTO `agent` (`id`, `name`, `email`, `phone`, `address`, `password`, `image`, `about`, `area`, `facebook`, `otp`, `date`) VALUES
(1, 'Aarju Silwal', 'aarju@gmail.com', '9868765645', 'Godawari', '123456789', 'aarju miss.jpg', 'good girl', 'kathmandu', 'https://www.facebook.com/profile.php?id=100074043373144', '1234', '2023-01-03'),
(2, 'Shyam Joshi', 'sjuicyy@gmail.com', '9867867202', 'kathmandu', '123456789', 'S\r\nammy.jpg', 'good boy', 'kathmandu', 'https://www.facebook.com/sammy.juicyy/', '1234', '2023-01-03');
-- --------------------------------------------------------
--
-- Table structure for table `property`
--
CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `agent_id` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `area` varchar(500) DEFAULT NULL,
  `price` varchar(500) DEFAULT NULL,
  `type` varchar(500) DEFAULT NULL,
  `valid_time` varchar(500) DEFAULT NULL,
  `beds` varchar(500) DEFAULT NULL,
  `baths` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `other_facilities` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `video` varchar(500) DEFAULT NULL,
  `floor_plan` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `report` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Dumping data for table `property`
--
INSERT INTO `property` (`id`, `agent_id`, `name`, `address`, `area`, `price`, `type`, `valid_time`, `beds`, `baths`, `description`, `other_facilities`, `image`, `video`, `floor_plan`, `status`, `report`, `date`) VALUES
(1, '1', 'Happy House', 'Lagankhel', '550', '1,15,00,000', 'House', '60', '9', '4', 'Good house for both family and family use', NULL, 'sale2.jpg', NULL, NULL, 'available', NULL, '2023-01-04'),
(2, '1', 'house', 'kathmandu', 'kathmandu', '1,90,00,000', 'house', '60', '8', '3', 'nice house', NULL, 'sale2.jpg', NULL, NULL, 'available', NULL, '2023-01-02');
--

-- Indexes for dumped tables
--
--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);
--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
