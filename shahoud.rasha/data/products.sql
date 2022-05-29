-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2022 at 10:42 PM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shahoud-rasha-87`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `dimension` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `color` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `quantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `dimension`, `date_create`, `date_modify`, `color`, `thumbnail`, `images`, `quantity`) VALUES
(1, 'Desk Top Trash Bin', 19.99, 'Mini Trash can with lid, stainless steel small tiny trash can, countertop trash cans for desk car office kitchen, swing top trash bin 1.5L/0.40 Gal', '4.7x4.7x6.5 inches', '2022-04-19 09:54:38', '2022-04-19 09:54:38', 'Gold', 'trash-bin-1.jpg', 'trash-bin-2.jpg,trash-bin-3.jpg', 20),
(2, 'Desk Cell Phone Stand Holder', 10.99, 'Desk Desk Cell Phone Stand Holder Aluminum Phone Dock Cradle for iPhone 13 12 11 Pro Xs Max Xr X 8 7 6 6s Plus 5 5s 5c, Office Decor Office Supplies Accessories Desk (Gold)', '29.53x24.8x29.53 inches', '2022-04-19 10:54:01', '2022-04-19 10:54:01', 'Gold', 'phone-stand-1.jpg', 'phone-stand-2.jpg,phone-stand-3.jpg', 20),
(3, 'Gold Scissors', 12.89, 'Professional Heavy Duty Scissors 8\" Gold Stainless Steel (Gold)', '8.5 inches', '2022-04-19 10:59:46', '2022-04-19 10:59:46', 'Gold', 'scissors-1.jpg', 'scissors-2.jpg', 20),
(4, 'Gold Stapler', 13.99, 'Modern Desk Stapler - Gold', '6x2.5x1.12 inches', '2022-04-19 11:01:18', '2022-04-19 11:01:18', 'Gold', 'stapler-1.jpg', 'stapler-2.jpg,stapler-3.jpg', 20),
(5, 'Tape Dispenser', 9.99, 'Office & Desk Tape Dispenser - Gold', '4.5x2.5x1.75 inches', '2022-04-19 11:04:58', '2022-04-19 11:04:58', 'Gold', 'dispenser-1.jpg', 'dispenser-2.jpg,dispenser-3.jpg,dispenser-4.jpg', 20),
(6, 'Staple Remover', 8.99, '1 pc Gold Staple Remover Clear Acrylic Glitter Golden Metal Jaws Staples Puller Removal Tool with Lock for Home Office School Supplies Desktop Accessories', '2.36x1.57x0.59 inches', '2022-04-19 11:12:10', '2022-04-19 11:12:10', 'Acrylic', 'staple-remover-1.jpg', 'staple-remover-2.jpg', 20),
(7, 'Foldable File Holder (4)', 35.00, 'Foldable Gold Magazine File Holder with Gold Label Holder - Set of 4 Cardboard Magazine Holder Boxes - Gold Desk Accessories', '12.1x9.86x.3.63 inches', '2022-04-19 11:20:30', '2022-04-19 11:20:30', 'Gold', 'folders-1.jpg', 'folders-2.jpg,folders-3.jpg,folders-4.jpg', 20),
(8, '3 Tier Stackable Acrylic Organizer', 24.95, 'Office Goods 3 Tier Stackable Acrylic Organizer w/ Gold Base – Functional & Elegant Desk Organizer for Office or Home – Helps Keep All Your Little Bits Together - Gold /Square', '5.5x3x3 inches', '2022-04-19 11:23:22', '2022-04-19 11:23:22', 'Acrylic', 'stackable-1.jpg', 'stackable-2.jpg,stackable-3.jpg,stackable-4.jpg', 20),
(9, 'Decorative Metal Mirror Tray', 20.00, 'Decorative Metal Mirror Catchall Tray, Glass Vanity Tray, Dresser Tray, Jewelry Display Tray, Vanity Organizer for Accent Table, Gold Leaf Finish', '12.4x8.5x1.9 inches', '2022-04-19 11:30:25', '2022-04-19 11:30:25', 'Gold', 'tray-1.jpg', 'tray-2.jpg', 20),
(10, 'Letter Stand', 43.00, 'Trimmed in gold brass, translucent glass paned construction offers clear visibility without compromising style. The three-tiered letter stand separates love letters from bills for the well-curated and coordinated workspace.', '6x10.4x6 inches', '2022-04-19 11:39:07', '2022-04-19 11:39:07', 'Acrylic', 'letter-stand.jpg', 'letter-stand-1.jpg,letter-stand-3.jpg,letter-stand-2.jpg', 20),
(11, 'Pens Holder', 39.99, '6-Compartment Rotating Pens Holder, 360 Degree Acrylic Carousel, Vintage Style Brass and Glass Organizer, Storage Solution with Mirror Base for Office, Makeup, Kitchen, Crafts, & More', '4.4x6.8x4.8 inches', '2022-04-19 11:43:34', '2022-04-19 11:43:34', 'Acrylic', 'pens-holder.jpg', 'pens-holder-3.jpg', 20),
(12, 'Paper Pins', 8.99, 'Paper Clips Sturdy 1.1 inches Length 300 Pack Paperclips Heavy Duty Tight Grip Rust Proof Reusable Metal Bright Gold for Home Office School', '1.1 inches', '2022-04-19 11:51:54', '2022-04-19 11:51:54', 'Gold', 'pins-1.jpg', 'pins-2.jpg', 20);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
