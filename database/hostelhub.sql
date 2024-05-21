-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 12:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostelhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `facility` text NOT NULL,
  `fees` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `about_us` text DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `NAME`, `address`, `facility`, `fees`, `image`, `created_at`, `about_us`, `phone`) VALUES
(1, 'abc', '123 street', 'a, b, c, ', 5000.00, 'uploads/property-1.jpg', '2024-04-21 10:42:59', 'xyz', '1234560789'),
(2, 'xyz', '456 street', 'q, w, e, r, t', 5000.00, 'uploads/property-2.jpg', '2024-04-21 10:44:27', 'abc', '7894560123');

-- --------------------------------------------------------

--
-- Table structure for table `pgowner`
--

CREATE TABLE `pgowner` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(11) NOT NULL,
  `pan` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pgowner`
--

INSERT INTO `pgowner` (`id`, `first_name`, `last_name`, `email`, `password_hash`, `address`, `city`, `state`, `zip`, `pan`, `phone`) VALUES
(1, 'a', 'b', 'abc@gmail.com', '123', 'abc chowk', 'abcCity', 'abcState', 36000, '123abc', '123456789'),
(2, 'a', 'b', 'ad@ad.com', '123', 'rk chowk', 'dhoraji', 'Gujarat', 360410, 'ADSP9898P', '1234567890'),
(3, 'a', 'b', 'abc@def.com', '123', 'rk chowk', 'dhoraji', 'Gujarat', 12314568, 'ADSP9898P', '1234567890'),
(4, 'a', 'b', 'qwe@gmail.com', '$2y$10$5pAKz.exZzl1LOwT9gStWOduUzs/A4P6bFIhpBS26Mjd6FYZZ7N82', 'dhoraji', 'dhoraji', 'Goa', 360410, 'ADSP9898P', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(9) NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `timestemp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_name`, `user_email`, `user_pass`, `timestemp`) VALUES
(1, 'cj', 'bruce@mail.com', '$2y$10$EyAze0UpJB2WyWgrL0JTm.AP3CUWFmEtCnvuNpGUW6kUDy5TEOu4K', '2024-03-08 12:08:00'),
(2, 'abc', 'cj@gmail.com', '$2y$10$QTbfVLKPfX.f6TZDP0gzqe7LPX7SE0INa/aZhxO7J5UETXbDsyvk.', '2024-03-08 12:15:31'),
(3, 'a', 'jagani@gmail.com', '$2y$10$O/5wyxmDc55.ZW3E4/cjUukZscnleH7.0/1dPSQRiuxGrEDH0eDj2', '2024-03-08 12:30:03'),
(4, 'b', 'b@b.c0m', '$2y$10$O9YGR.v9NZ.4p36LfShDTO1p/4MWZsk5MvM3ruQZeHL6kB.NO0SbW', '2024-03-09 11:05:14'),
(5, 'a', 'kppatel5077@gmail.com', '$2y$10$5ZJp2Ju5M6VMo.B5A.gEVO.0MZK./yat3cryxOZQTspDaCvoPyKfy', '2024-03-09 11:08:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pgowner`
--
ALTER TABLE `pgowner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pgowner`
--
ALTER TABLE `pgowner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `detail` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`sno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
