-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 27, 2023 at 12:22 PM
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
-- Database: `18thdec2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `filemanager`
--

CREATE TABLE `filemanager` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filemanager`
--

INSERT INTO `filemanager` (`id`, `title`, `description`, `img_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'image1', 'This is our first image', 'diyo1703127427.png', 1, '2023-12-23 03:36:52', '0000-00-00 00:00:00'),
(2, 'dffg', 'sdfsdf', 'screenshotfrom2023-12-1621-38-441703555945.png', 1, '2023-12-26 01:59:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `sub_title` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `num_title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(2, 'admin', '34534535345', 'sdf@gima.co', '21232f297a57a5a743894a0e4a801fc3', 1, '2023-12-21 02:10:33', '2023-12-21 02:10:33'),
(3, 'Ani Shah', '9821393278', 'ram@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2023-12-23 06:29:44', '2023-12-23 06:29:44'),
(4, 'Ani Shah', '9821393278', 'ram@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2023-12-23 06:29:57', '2023-12-23 06:29:57'),
(5, 'wikyqocyl@mailinator.com', '9821393279', 'jihen@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-12-26 16:43:07', '2023-12-26 16:43:07'),
(6, 'viqek@mailinator.com', '9821393279', 'tejyxi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-12-26 16:43:41', '2023-12-26 16:43:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filemanager`
--
ALTER TABLE `filemanager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `filemanager`
--
ALTER TABLE `filemanager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
