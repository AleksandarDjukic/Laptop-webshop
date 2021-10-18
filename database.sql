-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 11:54 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notregistered`
--

CREATE TABLE `notregistered` (
  `id` int(10) NOT NULL,
  `product_id` int(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notregistered`
--

INSERT INTO `notregistered` (`id`, `product_id`, `name`, `lastname`, `phone`, `address`) VALUES
(1, 0, '1', '1', '1', '1'),
(2, 1, '1', '1', '1', '1'),
(3, 2, '12', '1', '21', '21'),
(4, 2, '12', '1', '21', '21'),
(5, 2, 'op', 'op', 'op', '123'),
(6, 6, 'Spanac', 'Spankovic', '123', '123'),
(7, 6, 'Spanac', 'Spankovic', '123', '123'),
(8, 8, '', '', '', ''),
(9, 1, '', '', '', ''),
(10, 1, '', '', '', ''),
(11, 1, 'aco', 'djukic', 'aco', '123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `ram` int(11) NOT NULL,
  `ram_speed` varchar(12) NOT NULL,
  `storage` int(11) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `cpu_freq` varchar(20) NOT NULL,
  `cpu_cores` varchar(20) NOT NULL,
  `cpu_brand` varchar(10) NOT NULL,
  `gpu_type` varchar(20) NOT NULL,
  `gpu_name` varchar(50) NOT NULL,
  `gpu_memory` varchar(20) NOT NULL,
  `gpu_desc` varchar(255) NOT NULL,
  `screen_size` varchar(255) NOT NULL,
  `resolution` varchar(20) NOT NULL,
  `os` varchar(255) NOT NULL,
  `connection` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `weight` text NOT NULL,
  `color` varchar(50) NOT NULL,
  `product_desc` text NOT NULL,
  `no_purchases` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `brand`, `product_name`, `product_price`, `ram`, `ram_speed`, `storage`, `cpu`, `cpu_freq`, `cpu_cores`, `cpu_brand`, `gpu_type`, `gpu_name`, `gpu_memory`, `gpu_desc`, `screen_size`, `resolution`, `os`, `connection`, `port`, `img`, `quantity`, `weight`, `color`, `product_desc`, `no_purchases`) VALUES
(1, 'Lenovo', 'Lenovo V14', 579, 4, '3200mHz', 128, 'AMD athlon 3020e', '2.4 GHz-2.6 GHz', '2/4', 'AMD', 'Dedicated', 'Radeon™ Vega 3 Graphics', '2GB DDR5', 'Graphics Frequency\n1100 MHz', '14', '1920x1080', 'Windows 10 Home', 'WIFI, Bluetoth 5.2', '3.5mm, HDMI', 'img/lenovo-v14.png', -2, '1.2', 'Silver', 'Light, Fast and much more', 7),
(2, 'HP', 'HP 255 G8', 1200, 4, '2400mHz', 128, 'AMD athlon 3020e', '2.1 GHz', '2/4', 'AMD', 'Integrated', 'AMD radeon vega 2', '2 GB', 'AMD Radeon Vega 2 with max 2GB DDR4 memory', '15.6', '1920x1080', 'Linux', 'Bluetooth', 'HDMI, 3.5mm, 3x USB3.1', 'img/hp255-g8.png', 6, '', 'Black', 'High quality low end laptop  ', 3),
(3, 'Acer', 'Acer Aspire 3', 699, 4, '2600mHz', 128, 'Intel Celeron N4000', '1.8 GHz', '2', 'Intel', 'Integrated', 'Intel HD 400', '128MB', 'Very bad GPU and very bad CPU. Please don\'t buy this laptop ', '15.6', '1920x1080', 'Windows 10', 'WIFI, Bluetooth', 'HDMI, 3.5mm audio', 'img/aspire3.png', 5, '', 'Grey', 'This laptop is so bad I hope that no one will buy this', 3),
(4, 'DELL', 'DELL Inspiron', 1200, 16, '2600mHz', 256, 'Intel I3 1005G1', '2.0 GHz-2.7GHz', '2/4', 'Intel', 'Dedicated', 'Nvidia MX920', '2GB', '', '15', '1920x1080', 'Nema', '', '', 'img/dell1.png', 0, '', '', '', 0),
(5, 'ASUS', 'ASUS X515', 800, 8, '3200mHz', 256, 'Intel Pentium Silver N5030', '1.6 GHz', '2/4', 'Intel', '', '0', '', '0', '15.6', '1920x1080', 'Nema', '', '', 'img/asus1.png', 5, '', '', '', 1),
(6, 'Lenovo', 'Lenovo Legion 5', 1800, 8, '3200mHz', 512, 'Intel i7 10300H', '2.5 GHz-2.9 GHz', '4/8', 'Intel', 'Dedicated', 'Nvidia 2060 ', '6GB DDR5', 'Dedicated Nvidia 2060 GPU with 6GB DDR5 memory', '15.6', '1920x1080', 'Windows 10', 'WIFI, Bluetooth', 'HDMI, 2XUSB 3.1, USB C, 3.5mm audio', 'img/legion5.png', 2, '', 'Black', 'Lenovo gaming laptop ', 3),
(7, 'HP', 'HP Pavilion Gaming 15', 1900, 16, '2600mHz', 512, 'AMD Ryzen 7 4800H', '3.0 GHz-3.5GHz', '6/12', 'AMD', '', '0', '', '0', '15.6', '1920x1080', 'Nema', '', '', 'img/pavilion.png', 0, '', '', '', 2),
(8, 'ASUS', 'ASUS TUF FX506', 1500, 8, '3200mHz', 512, 'Intel Core i5-10300H', '2.5 GHz- 3.0 GHz', '4/4', 'Intel', '', '0', '', '0', '15.6', '1920x1080', 'Nema', '', '', 'img/tuf.png', 5, '', '', '', 2),
(9, 'ASUS', 'ASUS Expert Book', 1649, 8, '2600mHz', 256, 'Intel Core i5-10210U', '2.7 GHz', '4/4', 'intel', '', '0', '', '0', '14', '1920x1080', 'Nema', '', '', 'img/asusExpert.png', 0, '', '', '', 0),
(10, 'LENOVO', 'Lenovo Yoga', 1749, 16, '2600mHz', 512, 'Intel Core i5-10210U', '2.7 GHz', '4/4', 'Intel', 'Integrated', 'Intel UHD 530', '2 GB', '0', '14', '1920x1080', 'Linux', '', '', 'img/lenovoYoga.png', 2, '', 'Black', '', 3),
(11, 'LENOVO', 'Lenovo Think Book', 1000, 8, '2600mHz', 256, 'Intel Core i3-1115G4', '2.5 GHz', '2/4', 'intel', '', '0', '', '0', '15.6', '1920x1080', 'Nema', '', '', 'img/thinkBook.png', 4, '', '', '', 0),
(12, 'ASUS', 'ASUS S15 VIVO', 999, 8, '3200mHz', 256, 'Intel Core i5-1135G7', '2.6 GHz', '4/8', 'Intel', '', '0', '', '0', '15.6', '1920x1080', 'Nema', '', '', 'img/asusvivo.png', 4, '', '', '', 4),
(14, 'LENOVO', 'LENOVO ThinkPad E14', 1700, 16, '2600mHz', 512, 'Intel Core i5-10210U', '2.4 GHz', '4/8', 'Intel', '', '0', '', '0', '14', '1920x1080', 'Nema', '', '', 'img/e14.png', 0, '', '', '', 1),
(15, 'ACER', 'ACER Nitro 5', 2000, 16, '2600mHz', 1024, 'Intel Core i9-19700H', '3.5 GHz-4.1 GHz', '8/16', 'intel', 'Dedicated', 'Nvidia RTX 2070', '6GB', 'One of the best mobile GPU', '15.6', '1920x1080', 'None', 'Bluetooth, WIFI', 'HDMI, 3.5mm, 3xUSB 3.1', 'img/nitro.png', 5, '', 'Black', 'Acer flagship model with 4.1GHz processor and RTX 2070 graphics card', 10),
(31, 'Lenovo', 'LENOVO IdeaPad 3 15ITL6', 1099, 8, '2400mHz', 512, 'Intel i3-1115G4', '3.0GHz', '2/4', 'Intel', 'Integrated', 'Intel UHD Graphics', 'up to 2GB', 'The Intel UHD Graphics 620 (GT2) is an integrated graphics unit, which can be found in various ULV (Ultra Low Voltage) processors of the Kaby Lake Refresh generation (8th generation Core). Compared to the similar named Intel HD Graphics 620 in the 2016 Ka', '15.6', '1920x1080', 'Linux', 'Bluetooth', 'USB 3.0, 3.5mm audio, LAN', 'admin/uploads/6161e308370138.33427820.png', 10, '', 'Silver', 'Last generation Intel laptop with economic 11th gen I3 processor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `purchase_price` varchar(255) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `user_id`, `product_id`, `purchase_price`, `purchase_date`) VALUES
(25, 9, 1, '', '2021-10-04 17:30:32'),
(26, 9, 8, '1500', '2021-10-03 17:30:32'),
(27, 9, 10, '1749', '2021-10-07 17:30:32'),
(28, 9, 5, '800', '2021-10-07 17:30:32'),
(29, 9, 6, '1800', '2021-10-07 17:30:32'),
(30, 9, 14, '1700', '2021-10-07 17:30:32'),
(31, 9, 2, '1200', '2021-10-07 17:30:32'),
(32, 10, 3, '699', '2021-10-07 17:30:32'),
(33, 10, 3, '699', '2021-10-07 17:30:32'),
(34, 10, 8, '1500', '2021-10-07 17:30:32'),
(35, 9, 1, '579', '2021-10-07 17:30:58'),
(36, 10, 1, '579', '2021-10-07 17:31:29'),
(37, 10, 1, '579', '2021-10-07 17:31:29'),
(38, 10, 1, '579', '2021-10-07 17:31:29'),
(39, 10, 10, '1749', '2021-10-07 17:35:39'),
(40, 10, 15, '2000', '2021-10-07 20:55:54'),
(41, 10, 15, '2000', '2021-10-07 20:55:54'),
(42, 10, 15, '2000', '2021-10-07 20:55:54'),
(43, 10, 15, '2000', '2021-10-07 20:55:54'),
(44, 10, 15, '2000', '2021-10-07 20:55:54'),
(45, 10, 15, '2000', '2021-10-07 20:55:54'),
(46, 10, 15, '2000', '2021-10-07 20:55:54'),
(47, 10, 15, '2000', '2021-10-07 20:55:54'),
(48, 10, 15, '2000', '2021-10-07 20:55:54'),
(49, 10, 15, '2000', '2021-10-07 20:55:54'),
(50, 10, 5, '800', '2021-10-07 20:56:21'),
(51, 10, 12, '999', '2021-10-07 20:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `custom` varchar(10) NOT NULL,
  `body` varchar(20) NOT NULL,
  `primary_color` varchar(20) NOT NULL,
  `secondary_color` varchar(20) NOT NULL,
  `text_color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `custom`, `body`, `primary_color`, `secondary_color`, `text_color`) VALUES
(1, 'true', '#ffffff', '#007bff', '#52b1ff', '#000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `lastname`, `phone`, `address`) VALUES
(4, 'gas@gmail.vom', '$2y$10$xhMDZwGBTKt850DnOwzhWOXgjFxhgsGQ3j9BISwYxXzEqQ9VbNVZW', 'aco', 'djukic', '456456', '123456'),
(5, 'test@gmail.com', '$2y$10$W8Z78pbGZv4R.31bNYKOeOlD7eriLPqH0Roevij1v5cyafZCr.cRm', 'Aleksandar', 'Djukic', '+38165656565', 'Zvornik'),
(6, 'spanac@mail.com', '$2y$10$h/RA//12aGACn2/Fr552nudQhjIqEAn1MTP16b.Ix1WwlzAz6iKgW', 'Spanac', 'Spanac', '+351564', 'Spanija'),
(7, 'a@mail.com', '$2y$10$T8ntaMk3g13H4Tg2jBf6S.wEwPSB8HHgmLbKRcylpCer/PJZHm6vu', 'aco', 'djuki', '123', '123'),
(8, 'aa@gmail.com', '$2y$10$.yybtQT6vwt97qJWfIQGNOOJzebPmnv2n9FF1/Dd4G/umu5UuupCW', 'aco', 'djukic', '21564', 'zv'),
(9, 'novi@mail.com', '$2y$10$KKdtn3EXNi7MsBnATeBGNu3Nxhsc2Id0LUzpzXYfj9iylFNNTerqa', 'aco', 'djukic', '123456', 'ns'),
(10, '12@mail.com', '$2y$10$IDhd1qvXmFcXW5YeSXr8De739kP0bnQfPbmraoXiCLv1RjN6NNrdW', 'Aleksandar', 'Djukic', '123456', 'zvornik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notregistered`
--
ALTER TABLE `notregistered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notregistered`
--
ALTER TABLE `notregistered`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
