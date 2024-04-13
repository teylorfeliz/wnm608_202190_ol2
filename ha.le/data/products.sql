-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2024 at 01:12 AM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hle22_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `designer` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `designer`, `url`, `price`, `description`, `date_create`, `date_modify`, `thumbnail`, `images`) VALUES
(1, 'Soda Coffee Table', 'Yiannis Ghikas', '', 2500.00, 'Dispatched within 10 weeks\r\n', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'img/soda_coffee_table_thumb.jpg', 'img/soda_coffee_table_1.jpg,img/soda_coffee_table_2.jpg,img/soda_coffee_table_3.jpg,img/soda_coffee_table_4.jpg'),
(2, 'Pau Silver Stool', 'Simone Fanciullacci', '', 6500.00, 'Dispatched within 8-10 weeks', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'img/pau_silver_stool_thumb.jpg', 'img/pau_silver_stool_1.jpg,img/pau_silver_stool_2.jpg,img/pau_silver_stool_3.jpg,img/pau_silver_stool_4.jpg'),
(3, 'Chubby Coffee Table', 'Arthur Vallin', '', 28200.00, 'Dispatched within 14-16 weeks', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'img/chubby_coffee_table_thumb.jpg', 'img/chubby_coffee_table_1.jpg,img/chubby_coffee_table_2.jpg,img/chubby_coffee_table_3.jpg,img/chubby_coffee_table_4.jpg'),
(4, 'Bubble Light', 'Balzer Balzer Studio', '', 2150.00, 'Dispatched within 8-10 weeks', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'img/bubble_light_thumb.jpg', 'img/bubble_light_1.jpg,img/bubble_light_2.jpg,img/bubble_light_3.jpg,img/bubble_light_4.jpg'),
(5, 'Litho Ottoman', 'Guillaume Delvigne', '', 3209.00, 'Dispatched within 8-10 weeks', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'img/litho_ottoman_thumb.jpg', 'img/litho_ottoman_1.jpg,img/litho_ottoman_2.jpg,img/litho_ottoman_3.jpg,img/litho_ottoman_4.jpg'),
(6, 'Pearl Console', 'Arthur Vallin', '', 32255.00, 'Dispatched within 14-16 weeks', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'img/pearl_console_thumb.jpg', 'img/pearl_console_1.jpg,img/pearl_console_2.jpg,img/pearl_console_3.jpg,img/pearl_console_4.jpg'),
(7, 'Tubular Armchair', 'Lucas Munoz', '', 18000.00, 'Dispatched within 8-10 weeks', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'img/tubular_armchair_thumb.jpg', 'img/tubular_armchair_1.jpg,img/tubular_armchair_2.jpg,img/tubular_armchair_3.jpg,img/tubular_armchair_4.jpg'),
(8, 'Plopp Bar Stool', 'Zieta', '', 1200.00, 'Dispatched within 8-10 weeks', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'img/plopp_bar_stool_thumb.jpg', 'img/plopp_bar_stool_1.jpg,img/plopp_bar_stool_2.jpg,img/plopp_bar_stool_3.jpg,img/plopp_bar_stool_4.jpg'),
(9, 'Octane Chair', 'Arthur Vallin', '', 22438.00, 'Dispatched within 16-18 weeks', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'img/octane_chair_thumb.jpg', 'img/octane_chair_1.jpg,img/octane_chair_2.jpg,img/octane_chair_3.jpg,img/octane_chair_4.jpg'),
(10, 'Beetle SeatVerter Turroni', 'Verter Turroni', '', 3340.00, 'Dispatched within 8-10 weeks', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'img/beetle_seat_thumb.jpg', 'img/beetle_seat_1.jpg,img/beetle_seat_2.jpg,img/beetle_seat_3.jpg,img/beetle_seat_4.jpg'),
(11, 'Chair Made in 912 Minutes', 'Diego Faivre', '', 6450.00, 'Dispatched within 6-8 weeks', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'img/912_minutes_chair_thumb.jpg', 'img/912_minutes_chair_1.jpg,img/912_minutes_chair_2.jpg,img/912_minutes_chair_3.jpg,img/912_minutes_chair_4.jpg'),
(12, 'Orgys Coffee Table', 'Humberto da Mata', '', 9350.00, 'Dispatched within 12-14 weeks', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'img/orgus_coffee_table_thumb.jpg', 'img/orgus_coffee_table_1.jpg,img/orgus_coffee_table_2.jpg,img/orgus_coffee_table_3.jpg,img/orgus_coffee_table_4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
