-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2023 at 05:43 PM
-- Server version: 5.7.41-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qianli_aau_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `catagory` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `catagory`, `description`, `images`) VALUES
(1, 'Apples', '3', 'fruit', 'Honeycrisp Apples.', 'fruit_apples_1.jpg,fruit_apples_2.jpg'),
(2, 'Avocados', '3', 'fruit', 'Organic Large Hass Avocados.', 'fruit_avocados_1.jpg, fuit_avocados_2.jpg'),
(3, 'Lemons', '1', 'fruit', 'Organic Lemons.', 'fruit_lemons_1.jpg'),
(4, 'Mango', '2', 'fruit', 'Yellow Mango.', 'fruit_mango_1.jpg'),
(5, 'Oranges', '2', 'fruit', 'Organic Navel Oranges.', 'fruit_oranges_1.jpg, fruit_oranges_2.jpg'),
(6, 'Blueberries', '7', 'fruit', 'Driscoll\'s Blueberries.', 'fruit_blueberries_1.jpg'),
(7, 'Watermelon', '6', 'fruit', 'Seedless Watermelon.', 'fruit_watermelon_1.jpg, fruit_watermelong_2.jpg'),
(8, 'Banana', '1', 'fruit', 'Organic Banana.', 'fruit_banana_1.jpg'),
(9, 'Blackberries', '5', 'fruit', 'Organic Blackberries.', 'fruit_blackberries_1.jpg, fruit_blackberries_2.jpg'),
(10, 'Dragon Fruit', '8', 'fruit', 'Organic Dragon Fruit.', 'fruit_dragonfruit_1.jpg'),
(11, 'Tomato', '4', 'vegetables', 'Vine On Tomato.', 'vegetables_tomato_1.jpg,vegetables_tomato_2.jpg'),
(12, 'Onion', '2', 'vegetables', 'Organic Yellow Onion.', 'vegetables_onlion_1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
