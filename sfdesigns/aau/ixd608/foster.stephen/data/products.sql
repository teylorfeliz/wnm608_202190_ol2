-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2024 at 10:54 PM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stephen608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `category`, `date_create`, `description`, `thumbnail`, `images`) VALUES
(1, 'Ptatinum 300 Camera Bag', 'http://novamedia/category/bags/bag_platinum300.jpg', 45.00, 'bags', '2023-11-12 03:49:43', 'Platinum 300 customizable storage camera bag.', '', 'bag_platinum300.jpg'),
(2, 'Samsonite HSL15 Laptop Bag', 'http://novamedia/category/bags/bag_samsonitehsl15.jpg', 150.00, 'bags', '2023-11-12 03:49:43', 'Samsonite HSL15 laptop messenger bag.', '', 'bag_samsonitehsl15.jpg,bag_platinum300.jpg'),
(3, 'Crikut Maker 3', 'http://novamedia/category/printer/crikut.jpg', 399.00, 'printers', '2023-11-12 04:28:08', 'Crikut Maker 3 is a crafty printer.', '', 'printer_crikut.jpg'),
(4, 'Belifu 10\" Ring Light', 'http://novamedia/category/di/di_belifuringlight.jpg', 45.00, 'di', '2023-11-12 04:28:08', 'Belifu 10\" Ring light will illuminate any content creators life.', '', 'di_belifuringlight.jpg'),
(5, 'iKlip Selfie Stick Tripod', 'http://novamedia/category/di/di_iklipselfietripod.jpg', 20.00, 'di', '2023-11-12 04:28:08', 'The iKlip selfie stick tripod is how great vlogs are created on the go.', '', 'di_iklipselfietripod.jpg'),
(6, 'Joby Compact Tripod', 'http://novamedia/category/di/di_jobycompact65tripod.jpg', 75.00, 'di', '2023-11-12 04:28:08', 'The Joby Compact Tripod will stabilize every shot.', '', 'di_jobycompact65tripod.jpg,di_nikonzfc.jpg'),
(7, 'Nikon Z fc Mirrorless 4K Camera', 'http://novamedia/category/di/di_di_nikonzfc.jpg', 899.00, 'di', '2023-11-12 04:28:08', 'The Nikon Z fc Mirrorless 4K Camera is the classic look with the photographic tech.', '', 'di_nikonzfc.jpg,di_jobycompact65tripod.jpg'),
(8, 'Audio Technica 40X Headset', 'http://novamedia/category/ls/ls_athm40x.jpg', 95.00, 'li', '2023-11-12 04:28:08', 'The Audio Technica 40X Headset is a top choice for podcasters.', '', 'ls_athm40x.jpg'),
(9, 'Samson Pop Filter', 'http://novamedia/category/ls/ls_samsonps04pfilter.jpg', 20.00, 'ls', '2023-11-12 04:28:08', 'Samson Pop Filter will get the keep the DJ\'s voice from poppin\' off.', '', 'ls_samsonps04pfilter.jpg,ls_samsonq2umic.jpg'),
(10, 'Samson Q2 Mic', 'http://novamedia/category/ls/ls_samsonpsq2umic.jpg', 50.00, 'ls', '2023-11-12 04:28:08', 'The Samson Q2 Mic is the one mic to rule them all!', '', 'ls_samsonq2umic.jpg,ls_samsonps04pfilter.jpg'),
(11, 'SanDisk SD 128GB', 'http://novamedia/category/storage/storage_sd128gb.jpg', 40.00, 'storage', '2023-11-12 04:28:08', 'The SanDisk SD 128GB memory card has the capacity to capture all the special moments and transfer them quickly to edit.', '', 'storage_sd128gb.jpg'),
(12, 'Street Fighter II Mini Arcade', 'http://novamedia/category/storage/gaming_sf2ce.jpg', 25.00, 'gaming', '2023-11-12 04:28:08', 'Steet Fighter II is a classic that will never go outta style. For the content creators who need a quick mental break so they can get back to work reinvigorated.', '', 'gaming_sf2ce.jpg');

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
