-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 03:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ordering_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `account_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`, `account_type`) VALUES
(30, 'jollibee', '123', 'admin'),
(31, 'mcdo', '123', 'admin'),
(37, 'inasal', '123', 'admin'),
(38, 'starbucks', '123', 'admin'),
(42, 'kfc', '123', 'admin'),
(43, 'chowking', '123', 'admin'),
(44, 'burgerking', '123', 'admin'),
(46, 'pizzahat', '123', 'admin'),
(47, 'shop', '123', 'admin'),
(48, 'abelashop', '123', 'admin'),
(50, 'newshop', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `id` int(11) NOT NULL,
  `shop_name` varchar(255) DEFAULT NULL,
  `shop_category` varchar(255) DEFAULT NULL,
  `shop_logo` varchar(255) DEFAULT NULL,
  `shop_theme` varchar(255) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `shop_show` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`id`, `shop_name`, `shop_category`, `shop_logo`, `shop_theme`, `admin_id`, `shop_show`) VALUES
(5, 'Jollibee', 'fastfood', '9d1cf704961713b1bb767154c02eab52.jpg', 'AR-jollibee-4x3-ca3a1c8782554ef69b54999900b8ceed.jpg', 30, 'Deploy'),
(6, 'Mcdonalds', 'fastfood', 'cozonGe7_400x400.jpg', '146ee8abd80dbc9241bd85b6199a6df7.jpg', 31, 'Deploy'),
(12, 'inasal', 'fastfood', 'VTTWT6gY_400x400.jpg', 'mang-inasal-20200331.webp', 37, 'Deploy'),
(13, 'starbucks', 'Coffee shop', 'download (1).png', 'Ads-Manager-60.webp', 38, 'Deploy'),
(17, 'KFC', 'Fastfood', 'download.png', 'bc404715bf0df5d8b8f4f368929b7e27.jpg', 42, 'Deploy'),
(18, 'Chowking', 'category', 'chow-king.png', 'chowking-1.jpg', 43, 'Deploy'),
(19, 'Burger King', 'burger shop', 'burgerking_logo.png', 'burgerking_theme.png', 44, 'Deploy'),
(21, 'pizahat', 'pizza', 'pizaahat.jpg', 'pizaahat_theme.jpg', 46, 'Deploy'),
(22, 'shop1', 'fastfood', 'b01e69dfd04399324803c453b0fb9029.jpg', '1921457ff3f79fb01f1c8746c424a533.jpg', 47, 'Deploy'),
(25, 'shop 123', 'fastfood', 'logoexample.jpg', 'themeexample.jpg', 50, 'Deploy');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `expenses` int(11) DEFAULT NULL,
  `profit` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantiy` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `product_img` varchar(255) DEFAULT NULL,
  `admin_tax` float DEFAULT NULL,
  `total_profit` float DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `name`, `expenses`, `profit`, `price`, `quantiy`, `product_id`, `shop_id`, `product_img`, `admin_tax`, `total_profit`, `date`, `user_id`) VALUES
(8, 'fries', 50, 49, 99, 1, 15, 30, 'jollibee_fries.jpg', 4.95, 44.05, 'Sep 27 2024', 10),
(9, 'fries', 50, 49, 99, 1, 15, 30, 'jollibee_fries.jpg', 4.95, 44.05, 'Sep 27 2024', 10),
(10, 'fries', 100, 98, 198, 2, 15, 30, 'jollibee_fries.jpg', 9.9, 88.1, 'Sep 27 2024', 10),
(11, 'macha', 50, 120, 170, 1, 25, 38, 'starbucks3.jpg', 8.5, 111.5, 'Sep 27 2024', 10),
(12, 'chicken', 100, 99, 199, 1, 19, 37, 'inasal_chicken.jpg', 9.95, 89.05, 'Sep 27 2024', 10),
(13, 'chao fan', 40, 70, 110, 1, 34, 43, 'chowking1.jpg', 5.5, 64.5, 'Sep 27 2024', 10),
(14, 'super meal', 120, 120, 240, 1, 35, 43, 'chowking2.jpg', 12, 108, 'Sep 27 2024', 10),
(15, 'kids meal', 100, 160, 260, 1, 9, 31, 'p1.jpg', 13, 147, 'Sep 27 2024', 10),
(16, 'burger 3', 100, 120, 220, 1, 40, 44, 'burgerking4.jpg', 11, 109, 'Sep 27 2024', 11),
(17, 'burger 1', 70, 100, 170, 1, 37, 44, 'burgerking1.jpg', 8.5, 91.5, 'Sep 27 2024', 11),
(18, 'nuggets', 200, 240, 440, 2, 30, 42, 'kfc_nuggets.jpg', 22, 218, 'Sep 27 2024', 11),
(19, 'palabok', 70, 40, 110, 1, 22, 37, 'inasal_palabok.jpg', 5.5, 34.5, 'Sep 27 2024', 11),
(20, 'burger', 100, 99, 199, 1, 17, 30, 'jolli_burger.jpg', 9.95, 89.05, 'Sep 27 2024', 11),
(21, 'spaghetti', 80, 100, 180, 1, 18, 30, 'joplli_spag.jpg', 9, 91, 'Sep 27 2024', 11),
(22, 'super meal', 150, 180, 330, 1, 32, 30, 'jollibeec.jpg', 16.5, 163.5, 'Sep 27 2024', 11),
(23, 'chicken joy', 200, 250, 450, 1, 14, 30, 'jollibee_bucket.jpg', 22.5, 227.5, 'Sep 27 2024', 10),
(24, 'fries', 50, 49, 99, 1, 15, 30, 'jollibee_fries.jpg', 4.95, 44.05, 'Sep 27 2024', 10),
(25, 'burger solo', 100, 60, 160, 1, 13, 31, 'p3.jpg', 8, 52, 'Sep 27 2024', 11),
(26, 'combo meal', 120, 100, 220, 1, 10, 31, 'p2.jpg', 11, 89, 'Sep 27 2024', 11),
(27, 'combo 1', 100, 60, 160, 1, 33, 31, 'mcdo1233.jpg', 8, 52, 'Sep 27 2024', 11),
(28, 'kids meal', 100, 160, 260, 1, 9, 31, 'p1.jpg', 13, 147, 'Sep 27 2024', 11),
(29, 'blue berry', 50, 120, 170, 1, 28, 38, 'starbiucks7.jpg', 8.5, 111.5, 'Sep 27 2024', 11),
(30, 'strawberry', 40, 120, 160, 1, 27, 38, 'starbucks6.jpg', 8, 112, 'Sep 27 2024', 11),
(31, 'chocolate', 40, 120, 160, 1, 26, 38, 'starbucks5.jpg', 8, 112, 'Sep 27 2024', 11),
(32, 'cheese meal', 120, 130, 250, 1, 31, 42, 'kfc_cheese.jpg', 12.5, 117.5, 'Sep 27 2024', 11),
(33, 'combo meal', 250, 170, 420, 1, 29, 42, 'kfc_combo.jpg', 21, 149, 'Sep 27 2024', 11),
(34, 'cheese meal', 240, 260, 500, 2, 31, 42, 'kfc_cheese.jpg', 25, 235, 'Sep 27 2024', 11),
(35, 'chao fan', 40, 70, 110, 1, 34, 43, 'chowking1.jpg', 5.5, 64.5, 'Sep 27 2024', 11),
(36, 'super meal', 120, 120, 240, 1, 35, 43, 'chowking2.jpg', 12, 108, 'Sep 27 2024', 11),
(37, 'chicken', 100, 150, 250, 1, 36, 43, 'chowking3.jpg', 12.5, 137.5, 'Sep 27 2024', 11),
(38, 'burger 1', 70, 100, 170, 1, 37, 44, 'burgerking1.jpg', 8.5, 91.5, 'Sep 27 2024', 11),
(39, 'bbq', 60, 39, 99, 1, 20, 37, 'inasal_bbq.jpg', 4.95, 34.05, 'Sep 27 2024', 11),
(40, 'spaghetti', 80, 100, 180, 1, 18, 30, 'joplli_spag.jpg', 9, 91, 'Sep 27 2024', 10),
(41, 'fries', 50, 49, 99, 1, 15, 30, 'jollibee_fries.jpg', 4.95, 44.05, 'Sep 27 2024', 10),
(42, 'nuggets', 100, 120, 220, 1, 30, 42, 'kfc_nuggets.jpg', 11, 109, 'Sep 29 2024', 11),
(43, 'macha', 50, 120, 170, 1, 25, 38, 'starbucks3.jpg', 8.5, 111.5, 'Sep 29 2024', 12),
(44, 'spaghetti', 80, 100, 180, 1, 18, 30, 'joplli_spag.jpg', 9, 91, 'Sep 29 2024', 12),
(45, 'bbq', 60, 39, 99, 1, 20, 37, 'inasal_bbq.jpg', 4.95, 34.05, 'Sep 29 2024', 13),
(46, 'chicken', 100, 99, 199, 1, 19, 37, 'inasal_chicken.jpg', 9.95, 89.05, 'Sep 29 2024', 13),
(47, 'burger 2', 100, 120, 220, 1, 38, 44, 'burgerking2.jpg', 11, 109, 'Sep 29 2024', 11),
(48, 'combo meal', 120, 100, 220, 1, 10, 31, 'p2.jpg', 11, 89, 'Sep 29 2024', 11),
(49, 'bbq', 60, 39, 99, 1, 20, 37, 'inasal_bbq.jpg', 4.95, 34.05, 'Sep 29 2024', 14),
(50, 'piiza1', 100, 50, 150, 1, 42, 46, 'pizza1.jpg', 7.5, 42.5, 'Sep 29 2024', 10),
(51, 'macha', 50, 120, 170, 1, 25, 38, 'starbucks3.jpg', 8.5, 111.5, 'Sep 29 2024', 15),
(52, 'chocolate', 40, 120, 160, 1, 26, 38, 'starbucks5.jpg', 8, 112, 'Sep 29 2024', 15),
(53, 'strawberry', 80, 240, 320, 2, 27, 38, 'starbucks6.jpg', 16, 224, 'Sep 29 2024', 15),
(54, 'kids meal', 100, 160, 260, 1, 9, 31, 'p1.jpg', 13, 147, 'Sep 29 2024', 15),
(55, 'burger solo', 100, 50, 150, 1, 13, 31, 'p3.jpg', 7.5, 42.5, 'Sep 29 2024', 15),
(56, 'combo meal', 120, 100, 220, 1, 10, 31, 'p2.jpg', 11, 89, 'Sep 29 2024', 15),
(57, 'super meal', 150, 180, 330, 1, 32, 30, 'jollibeec.jpg', 16.5, 163.5, 'Sep 29 2024', 15),
(58, 'spaghetti', 80, 100, 180, 1, 18, 30, 'joplli_spag.jpg', 9, 91, 'Sep 29 2024', 15),
(59, 'burger solo', 100, 50, 150, 1, 13, 31, 'p3.jpg', 7.5, 42.5, 'Sep 29 2024', 15),
(60, 'chicken', 100, 50, 150, 1, 44, 47, '111.jpg', 7.5, 42.5, 'Sep 29 2024', 15),
(61, 'fries', 50, 49, 99, 1, 15, 30, 'jollibee_fries.jpg', 4.95, 44.05, 'Sep 29 2024', 11),
(62, 'combo 1', 100, 60, 160, 1, 33, 31, 'mcdo1233.jpg', 8, 52, 'Oct 13 2024', 11),
(63, 'fries', 50, 49, 99, 1, 15, 30, 'jollibee_fries.jpg', 4.95, 44.05, 'Oct 26 2024', 11),
(64, 'spaghetti', 80, 100, 180, 1, 18, 30, 'joplli_spag.jpg', 9, 91, 'Oct 26 2024', 11),
(65, 'fries', 50, 49, 99, 1, 15, 30, 'jollibee_fries.jpg', 4.95, 44.05, 'Oct 26 2024', 11),
(66, 'food', 100, 50, 150, 1, 52, 30, '671c5839a524djfif', 7.5, 42.5, 'Oct 26 2024', 11);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_img` varchar(25) DEFAULT NULL,
  `product_expenses` int(11) DEFAULT NULL,
  `product_profit` int(11) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_img`, `product_expenses`, `product_profit`, `product_price`, `shop_id`) VALUES
(9, 'kids meal', 'p1.jpg', 100, 160, 260, 31),
(10, 'combo meal', 'p2.jpg', 120, 100, 220, 31),
(13, 'burger solo', 'p3.jpg', 100, 50, 150, 31),
(14, 'hahaha', 'jollibee_bucket.jpg', 200, 150, 350, 30),
(15, 'fries', 'jollibee_fries.jpg', 50, 49, 99, 30),
(17, 'burger', 'jolli_burger.jpg', 100, 99, 199, 30),
(18, 'spaghetti', 'joplli_spag.jpg', 80, 100, 180, 30),
(19, 'chicken', 'inasal_chicken.jpg', 100, 100, 200, 37),
(20, 'bbq', 'inasal_bbq.jpg', 60, 39, 99, 37),
(22, 'palabok', 'inasal_palabok.jpg', 70, 40, 110, 37),
(25, 'macha', 'starbucks3.jpg', 50, 120, 170, 38),
(26, 'chocolate', 'starbucks5.jpg', 40, 120, 160, 38),
(27, 'strawberry', 'starbucks6.jpg', 40, 120, 160, 38),
(28, 'blue berry', 'starbiucks7.jpg', 50, 120, 170, 38),
(29, 'combo meal', 'kfc_combo.jpg', 250, 170, 420, 42),
(30, 'nuggets', 'kfc_nuggets.jpg', 100, 120, 220, 42),
(31, 'cheese meal', 'kfc_cheese.jpg', 120, 130, 250, 42),
(32, 'super meal', 'jollibeec.jpg', 150, 180, 330, 30),
(33, 'combo 1', 'mcdo1233.jpg', 100, 60, 160, 31),
(34, 'chao fan', 'chowking1.jpg', 40, 70, 110, 43),
(35, 'super meal', 'chowking2.jpg', 120, 120, 240, 43),
(36, 'chicken', 'chowking3.jpg', 100, 150, 250, 43),
(37, 'burger 1', 'burgerking1.jpg', 70, 100, 170, 44),
(38, 'burger 2', 'burgerking2.jpg', 100, 120, 220, 44),
(40, 'burger 3', 'burgerking4.jpg', 100, 120, 220, 44),
(42, 'piiza1', 'pizza1.jpg', 100, 50, 150, 46),
(44, 'chicken', '111.jpg', 100, 50, 150, 47),
(45, 'nuggets', '22.jpg', 100, 100, 200, 47),
(52, 'food', '671c5839a524djfif', 100, 50, 150, 30),
(53, 'food 1', '671c58ee43199jpg', 100, 60, 160, 50),
(54, 'food 2', '671c58fb5cf29jpg', 200, 100, 300, 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `account_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `account_type`) VALUES
(10, 'user', '123', 'user'),
(11, 'krel', '123', 'user'),
(12, 'hazel', '123', 'user'),
(13, 'rainrix', '123', 'user'),
(14, 'peppa', '123', 'user'),
(15, 'user1', '123', 'user'),
(16, 'user2', '123', 'user'),
(17, 'user123', '123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `name`, `balance`, `user_id`, `user_img`) VALUES
(2, 'raphael', 33, 10, 'user2.jpg'),
(3, 'krel', 74, 11, 'd9d13add16dbabb1ee0afb50165c62c3.jpg'),
(4, 'hazel', 650, 12, '1a8435b262f70dc441a52bf15a9c620d.jpg'),
(5, 'rainrix', 702, 13, 'default.png'),
(6, 'name', 901, 14, 'default.png'),
(7, 'rap', 10, 15, 'ec164f10294458907f21cbac1aafb1ef.jpg'),
(8, 'name', 0, 16, 'default.png'),
(9, 'name', 0, 17, 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
