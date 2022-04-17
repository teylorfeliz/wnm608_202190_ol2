-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2022 at 09:50 AM
-- Server version: 5.7.37-cll-lve
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
-- Database: `mahsas`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'HERITAGE RING GOLD', 170.00, 'WOMEN RINGS', '2022-04-15 09:12:50', '2022-04-15 09:12:50', 'Gold Toned Brass\r\nHigh Polish Yellow Gold Plated', 'HERITAGE_RING_thumb.jpg', 'HERITAGE_RING_1.jpg,HERITAGE_RING_2.jpg,HERITAGE_RING_3.jpg'),
(2, 'EMPIRE NECKLACE', 145.00, 'WOMEN NECKLACES ', '2022-04-15 09:16:29', '2022-04-15 09:16:29', '18K Polished Gold Plated Stainless Steel\r\nPolished Gold Plated', 'EMPIRE_NECKLACE_thumb.jpg', 'EMPIRE_NECKLACE_1.jpg,EMPIRE_NECKLACE_2.jpg,EMPIRE_NECKLACE_3.jpg'),
(3, 'LOVE LOCK BRACELET YELLOW GOLD', 115.00, 'WOMEN SOLID BRACELETS', '2022-04-15 09:24:02', '2022-04-15 09:24:02', '18k Gold Plated Stainless Steel\r\nHigh Polish Yellow Gold Plated', 'LOVE_LOCK_BRACELET_thumb.jpg ', 'LOVE_LOCK_BRACELET_1.jpg,LOVE_LOCK_BRACELET_2.jpg  '),
(4, 'CLASSIC II EARRING', 110.00, ' WOMEN EARRINGS', '2022-04-15 09:26:06', '2022-04-15 09:26:06', 'Pair of 18k Polished Yellow Gold Plated Earrings\r\nPolished Yellow Gold', 'CLASSICII_EARRING_thumb.jpg', 'CLASSICII_EARRING_1.jpg,CLASSICII_EARRING_2.jpg'),
(5, 'BLACK CAVIAR CLUTCH', 425.00, ' WOMEN HANDBAG', '2022-04-15 09:29:15', '2022-04-15 09:29:15', 'Finest re-enforced hard shell clutch / Brushed Gold Buckle\r\nComes with a hard cushioned box', 'BLACK_CAVIAR_CLUTCH_thumb.jpg', 'BLACK_CAVIAR_CLUTCH_1.jpg,BLACK_CAVIAR_CLUTCH_2.jpg,BLACK_CAVIAR_CLUTCH_3.jpg,BLACK_CAVIAR_CLUTCH_4.jpg'),
(6, 'SORAYA II - BUCKET BAG', 370.00, ' WOMEN HANDBAGS ', '2022-04-15 09:32:45', '2022-04-15 09:32:45', 'Canvas & Genuine Leather\r\nComes with a dust bag and a box', 'SORAYA II_ BUCKET BAG_thumb.jpg', 'SORAYA II_ BUCKET BAG_1.jpg,SORAYA II_ BUCKET BAG_2.jpg,SORAYA II_ BUCKET BAG_3.jpg,SORAYA II_ BUCKET BAG_4.jpg'),
(7, 'LEILI', 155.00, ' WOMEN FRAGRANCE', '2022-04-15 09:35:58', '2022-04-15 09:35:58', 'Leili by NIMANY. A Perfume for women. A dangerous game between softness and intensity, between black and white. A fragrance as bewitching as it is enchanting. First white, this fragrance is built on a blends of white flowers. Tuberose, the most tempting and carnal of the white flower is at the center. She exudes her sensual, creamy and voluptuous scent with an aphrodisiacal character.Then, this fragrance reveals its dark side with addictive notes of tonka beans and woods. A seductive and dangerous fragrance leaving an obsessional trail. ', 'LEILI_thumb.jpg', 'LEILI_1.jpg,LEILI_2.jpg'),
(8, 'COULEUR DE MONACO II', 160.00, ' Women Cashmere', '2022-04-15 09:38:44', '2022-04-15 09:38:44', 'Wool Cashmere blend\r\n14 Color Trasnfer print', 'COULEUR_DE_MONACO_II_thumb.jpg', 'COULEUR_DE_MONACO_II_1.jpg,COULEUR_DE_MONACO_II_2.jpg,COULEUR_DE_MONACO_II_3.jpg,COULEUR_DE_MONACO_II_4.jpg'),
(9, 'MAJNOON', 155.00, ' MEN FRAGRANCE', '2022-04-15 09:40:16', '2022-04-15 09:40:16', 'Majnoon by NIMANY. A Perfume for men. The everlasting legend of the night. The effervescence has reached its climax. All eyes are on him. His fragrance celebrates his power to captivate senses endlessly through the epitome of indelible and deep masculinity: the agarwood. An extremely long-lasting and rich scent underlined by spicy, aromatic and leathery facets. This majestic Oud is underlined by an overdose of oriental notes featuring a second skin effect in this warm and intoxicating atmosphere. ', 'MAJNOON_thumb.jpg', 'MAJNOON_1.jpg,MAJNOON_2.jpg'),
(10, 'BERLIN BRACELET MEN(BEIGE / GOLD)', 145.00, 'MEN LEATHER BRACELETS', '2022-04-15 09:43:02', '2022-04-15 09:43:02', 'Genuine Leather & Stainless Steel Hardware\r\nTanned Leather with Polished Gold', 'BERLIN_BRACELET_MEN_thumb.jpg', 'BERLIN_BRACELET_MEN_1.jpg,BERLIN_BRACELET_MEN_2.jpg'),
(11, 'BRUSHED GOLD-PLATED RING', 130.00, 'MEN RINGS', '2022-04-15 09:47:02', '2022-04-15 09:47:02', '24k Gold Plated\r\nGold Plated & Brushed', 'BRUSHED_GOLD-PLATED_RING_thumb.jpg', 'BRUSHED_GOLD-PLATED_RING_1.jpg,BRUSHED_GOLD-PLATED_RING_2.jpg'),
(12, 'GRAFFITI MIDNIGHT TIE', 155.00, 'MEN TIES', '2022-04-15 09:50:28', '2022-04-15 09:50:28', 'GRAFFITI MIDNIGHT TIE', 'GRAFFITI_MIDNIGHT_TIE_thumb.jpg', 'GRAFFITI_MIDNIGHT_TIE_1.jpg,GRAFFITI_MIDNIGHT_TIE_2.jpg,GRAFFITI_MIDNIGHT_TIE_3.jpg,GRAFFITI_MIDNIGHT_TIE_4.jpg,GRAFFITI_MIDNIGHT_TIE_5.jpg');

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
