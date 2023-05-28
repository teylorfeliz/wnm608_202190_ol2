-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2023 at 04:56 PM
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
-- Database: `serenahsiang_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(128) NOT NULL,
  `series` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category`, `series`, `images`, `thumbnail`, `date_create`, `date_modify`, `quantity`) VALUES
(1, 'Jealous steal your heart in 18K Gold with Diamonds ', 'Inspired by traditional eternity bands, this 18K gold ring is handcrafted with green sapphires mounted in a signature undulating profile. Every gem has been cut with multiple random facets to sparkle, even in low light.\r\n\r\n• 18K Gold\r\n• Gemstones: Green Sa', '35.95', 'Ring', 'JEALOUS', '500ring01.jpg,500ring27.jpg,500ring28.jpg', '500ring01.jpg', '2023-04-15 16:47:42', '2023-05-14 14:08:40', 20),
(2, 'Superstar Eternity Ring in 18K Gold', 'Sapphires of every hue (pink, orange, yellow, green, blue and purple) make a splash around this 18K gold ring. The stones are meticulously hand-selected, cut for brilliance and set within bezels of variegated sizes. It’s a beautiful marriage of vibrancy', '35.95', 'Ring', 'STARDUST', '500ring02.jpg,500ring29.jpg,500ring30.jpg', '500ring02.jpg', '2023-04-15 16:47:42', '2023-04-15 16:47:42', 35),
(3, 'Prasiolite Earrings in 18K Gold with Diamonds', 'The soft green of prasiolite is showcased to the fullest on these drop earrings. Cast in 18K gold, the pair is framed in diamonds (.66 ctw) and finished with delicate wires allowing them to sway. They’re a lovely accent — timeless and perfect for setting o', '35.95', 'Earrings', 'LOLLIPOP', '500ring03.jpg,500-04.jpg,500ring24.jpg', '500ring03.jpg', '2023-04-15 16:51:26', '2023-04-15 16:51:26', 129),
(4, 'Dune Ring in 18K Gold with Diamonds', '• 18K Gold\r\n• Gemstones: Diamond\r\n• Diamond Carat Weight: 4.35', '129.95', 'Ring', 'STARDUST', '500ring04.jpg,500ring25.jpg,500ring26.jpg', '500ring04.jpg', '2023-04-15 16:51:26', '2023-04-15 16:51:26', 40),
(5, 'Double Pebble Pendant Necklace in 18K Gold', 'All IPPOLITA pieces are handmade using wax casts which lend a sculptured quality to the designs. This chain is no exception, forged in 18K gold with two mother-of-pearl pendants, each a highly polished organic pebble shape, and finished a T-bar toggle fast', '73.99', 'Necklace', 'ROCK CANDY', '500ring05.jpg,500ring19.jpg,500ring20.jpg', '500ring05.jpg', '2023-04-15 16:54:14', '2023-04-15 16:54:14', 70),
(6, 'Mini Drop Earrings in 18K Gold with Crystal', 'Beautiful in their simplicity, these Lollipop® earrings are each centered by a prasiolite, a bright green variety of quartz. The jewels are faceted all over for enhanced luminosity and set in fine bezels of 18K yellow gold.\r\n\r\n• 18K Gold\r\n• Gemstone: Prasi', '38.95', 'Earrings', 'LOLLIPOP', '500ring06.jpg,500ring21.jpg,500ring22.jpg,500ring23.jpg', '500ring06.jpg', '2023-04-15 16:54:14', '2023-04-15 16:54:14', 90),
(7, 'Caramella Rainbow Stone Bracelet with Diamond', 'A classic tennis style elevated by rich color, this bracelet spans a rainbow spectrum, attributed to a mix of stones: tanzanite, dark amethyst, rubellite, pink tourmaline, orange citrine, yellow beryl, tsavorite, Swiss blue topaz, London blue topaz and dia', '29.95', 'Bracelet', 'ROCK CANDY', '500ring15.jpg,500ring16.jpg', '500ring16.jpg', '2023-04-15 16:57:59', '2023-04-15 16:57:59', 56),
(8, 'Starlet Hoop Earrings in 18K Gold\r\n', 'Perfect for wearing for day or nights out, these earrings come in a sculptured design handmade from 18K gold with inky blue sapphires. They’re as elegant worn solo as in a stack with other hoops, studs and huggies.\r\n\r\n• 18K Gold\r\n• Gemstones: Blue Sapphire', '34.95', 'Earrings', 'STARDUST', '500ring08.jpg,500ring18.jpg,500ring17.jpg', '500ring08.jpg', '2023-04-15 16:57:59', '2023-04-15 16:57:59', 301),
(9, 'Luce 3-Stone Pendant Necklace in 18K Gold', 'Three prong-set gemstones are the focal point of this delicate 18K gold necklace, a perfect complement to everyday looks. The soft palette of light and shimmering hues is owed to a faceted rock crystal and two cabochons: an opaque white moonstone and a lum', '39.95', 'Necklace', 'LUCE', '500ring09.jpg,500-08.jpg', '500ring09.jpg', '2023-04-15 17:00:34', '2023-04-15 17:00:34', 110),
(10, 'Gelato Station Bangle in 18K Gold', 'Rock crystal, mother-of-pearl, and white moonstone create a delicate landscape for this charming bangle. The nine gems are in different shapes and sizes, and they are set with prongs or mounted in round bezels with an organic profile. Add to your stack wit', '38.95', 'Bracelet', 'ROCK CANDY', '500ring10.jpg,500ring14.jpg', '500ring10.jpg', '2023-04-15 17:00:34', '2023-04-15 17:00:34', 13),
(11, 'Gelato Station Bangle in 18K Gold Multi-Gem', 'Pastel hues, sculptural shapes, and an organic profile characterize this charming 18K gold bangle. Orange carnelian, composite ruby, amethyst, blue topaz, turquoise, chrysoprase, peridot, and lemon citrine create a delicate rainbow, with each stone cut by ', '38.96', 'Bracelet', 'ROCK CANDY', '500ring11.jpg,500ring14.jpg', '500ring11.jpg', '2023-04-15 17:01:45', '2023-05-18 08:42:05', 38),
(12, 'Lollitini Short Necklace in 18K Gold', 'Delicate so that it looks beautiful worn layered, this handmade 18K gold necklace is strung with sorbet-colored stones: sparkling rounds of rose quartz, prasiolite, blue topaz, lemon citrine and honey citrine in varied scales. The chain can be adjusted to ', '39.95', 'Necklace', 'LOLLIPOP', '500ring12.jpg,500ring13.jpg', '500ring12.jpg', '2023-04-15 17:04:34', '2023-04-15 17:04:34', 9),
(13, 'All glamorous diamond set -------\r\n\r\n\r\n\r\n(Over $110 of value!)', 'For your date night. (More than 20% off!!)', '89.99', 'Bundle', 'Glamorous', '500ring09.jpg,500ring10.jpg,500ring03.jpg', '500ring09.jpg', '2023-04-29 20:07:40', '2023-04-29 20:07:40', 10);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
