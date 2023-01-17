-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2023 at 12:30 PM
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
  `date` date DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `name`, `email`, `phone`, `address`, `password`, `image`, `about`, `area`, `facebook`, `otp`, `date`, `status`) VALUES
(1, 'Pritam  Bajagain', 'pritamdczar@gmail.com', '+977 9851216103', 'Lalitpur, Nepal', '123456789', 'Pritam.jpg', 'good boy', 'kathmandu', 'https://www.facebook.com/pritam.d.czar', '1234', '2023-01-03', NULL),
(2, 'Aarju Silwal', 'aarju@gmail.com', '9868765645', 'Godawari', '123456789', 'aarju miss.jpg', 'good girl', 'kathmandu', 'https://www.facebook.com/profile.php?id=100074043373144', '1234', '2023-01-03', NULL),
(3, 'Shyam Joshi', 'sjuicyy@gmail.com', '9867867202', 'kathmandu', '123456789', 'Sammy.jpg', 'very good boy 1', 'kathmandu', 'https://www.facebook.com/sammy.juicyy/bigboss', '1234', '2023-01-03', NULL);

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
(1, '1', 'Happy House', 'Lagankhel', '550', '1,15,00,000', 'House', '60', '9', '4', 'Good house for both family and family use', 'garden,garage,parking,internet,cable', 'sale2.jpg', NULL, NULL, 'available', NULL, '2023-01-04'),
(5, '1', 'house', 'kathmandu', '450', '1,90,00,000', 'house', '60', '8', '3', 'nice house', 'garden,garage,parking,internet,cable', 'sale1.jpg', NULL, NULL, 'availablee', NULL, '2023-01-02'),
(6, '1', 'house', 'Lalitpur', '650', '1,80,00,000', 'house', '60', '5', '2', 'nice house and office', 'garden,garage,parking,internet,cable', 'sale3.jpg', NULL, NULL, 'available', NULL, '2023-01-11'),
(7, '1', 'house', 'Godawari', '1100', '1,00,00,000', 'house', '60', '9', '4', 'nice house ', 'garden,garage,parking,internet,cable', 'sale4.jpg', NULL, NULL, 'available', NULL, '2023-01-11'),
(8, '2', 'house', 'Bhaktapur', '490', '1,90,00,000', 'house', '60', '5', '3', 'nice house', 'garden,garage,parking,internet,cable', 'sale5.jpg', NULL, NULL, 'availablee', NULL, '2023-01-02'),
(9, '2', 'house', 'Sanothimi', '490', '1,90,00,000', 'house', '60', '5', '3', 'nice house', 'garden,garage,parking,internet,cable', 'sale6.jpg', NULL, NULL, 'availablee', NULL, '2023-01-02'),
(10, '2', 'house', 'Lalitpur', '390', '1,45,00,000', 'house', '60', '5', '3', 'nice house', 'garden,garage,parking,internet,cable', 'sale7.jpg', NULL, NULL, 'availablee', NULL, '2023-01-02'),
(11, '2', 'house', 'kathmandu', '780', '1,55,00,000', 'house', '60', '5', '3', 'nice house', 'garden,garage,parking,internet,cable', 'sale8.jpg', NULL, NULL, 'availablee', NULL, '2023-01-02'),
(12, '1', 'house', 'Gwarko', '390', '1,45,00,000', 'house', '60', '5', '3', 'nice house', 'garden,garage,parking,internet,cable', 'sale10.jpg', NULL, NULL, 'availablee', NULL, '2023-01-02'),
(13, '1', 'house', 'kathmandu', '450', '1,90,00,000', 'house', '60', '8', '3', 'nice house', 'garden,garage,parking,internet,cable', 'sale1.jpg', NULL, NULL, 'availablee', NULL, '2023-01-02'),
(14, '3', 'house', 'Satdobato', '450', '1,20,00,000', 'house', '60', '8', '3', 'nice house', 'garden,garage,parking,internet,cable', 'sale11.jpg', NULL, NULL, 'availablee', NULL, '2023-01-02'),
(26, '2', 'ghar', 'nepal', '2300', '12400000', 'House', '60', '9', '5', 'house in sale              ', NULL, 'sale11.jpg', NULL, NULL, 'available', NULL, '2023-01-15'),
(27, '2', 'home', 'imadol lalitpur', '450', '12000000', 'Land', '60', '9', '8', 'house in sale', NULL, 'sale11.jpg', NULL, NULL, 'available', NULL, '2023-01-15'),
(38, '3', 'Savagriha', 'Kathmandu', '1500', '31500000', 'House', '45', '35', '20', 'anything for you', NULL, 'sale11.jpg', NULL, NULL, 'available', NULL, '2023-01-15'),
(39, '3', 'Ghar', 'Nepal', '1234', '12345', 'Land', '34', '6', '6', 'Hello', NULL, 'sale11.jpg', NULL, NULL, 'available', NULL, '2023-01-16');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
