-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2023-04-16 20:06:21
-- 服务器版本： 5.7.41-cll-lve
-- PHP 版本： 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `joey_wnm608`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `images` varchar(256) NOT NULL,
  `stock` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `images`, `stock`) VALUES
(1, 'Smile Pendant in Yellow Gold', '100.00', 'Necklace', '2023-04-16 19:49:52', '2023-04-16 19:49:52', 'T Smile Pendant in Yellow Gold, Small', 'tsmilependant.jpg', 25),
(2, 'HardWear graduated link necklace', '125.00', 'Necklace', '2023-04-16 19:51:49', '2023-04-16 19:51:49', 'HardWear graduated link necklace', 'graduatedlinknecklace.jpg', 6),
(3, 'HardWear Pearl Lock Necklace', '180.00', 'Necklace', '2023-04-16 19:51:49', '2023-04-16 19:51:49', 'HardWear Pearl Lock Necklace', 'Pearllock.jpg', 12),
(4, 'Diamonds by the Yard', '200.00', 'Necklace', '2023-04-16 19:53:26', '2023-04-16 19:53:26', 'Diamonds by the Yard', 'diamondsbytheyard.jpg', 28),
(5, 'pendant in platinum with an aquamarine', '180.00', 'Necklace', '2023-04-16 19:53:26', '2023-04-16 19:53:26', 'pendant in platinum with an aquamarine', 'aquamarine.jpg', 35),
(6, 'Wire Bracelet in Rose Gold with Diamonds and Mother-of-pearl', '380.00', 'Bracelet', '2023-04-16 20:01:45', '2023-04-16 20:01:45', 'Wire Bracelet in Rose Gold with Diamonds and Mother-of-pearl', 'motherofpearl.jpg', 42),
(7, 'diamond and turquoise wire bracelet in 18k white gold, medium.', '410.00', 'Bracelet', '2023-04-16 20:01:45', '2023-04-16 20:01:45', 'diamond and turquoise wire bracelet in 18k white gold, medium.', 'turquoisewire.jpg', 12),
(8, 'wide diamond hinged bangle in 18k gold', '240.00', 'Bracelet', '2023-04-16 20:03:20', '2023-04-16 20:03:20', 'wide diamond hinged bangle in 18k gold', 'diamondhiged.jpg', 25),
(9, 'Double Row Hinged Bangle in Rose Gold with Diamonds', '240.00', 'Bracelet', '2023-04-16 20:03:20', '2023-04-16 20:03:20', 'Double Row Hinged Bangle in Rose Gold with Diamonds', 'Doublerowhinged.jpg', 6),
(10, 'T1 Ring in Yellow Gold with Diamonds', '210.00', 'Ring', '2023-04-16 20:05:18', '2023-04-16 20:05:18', 'T1 Ring in Yellow Gold with Diamonds', 'T1Ring.jpg', 9),
(11, 'Forever Band Ring in Platinum with a Half-circle of Diamond', '400.00', 'Ring', '2023-04-16 20:05:18', '2023-04-16 20:05:18', 'Forever Band Ring in Platinum with a Half-circle of Diamond', 'foreverbandring.jpg', 30),
(12, 'Knot Ring in Yellow Gold with Diamonds', '220.00', 'Ring', '2023-04-16 20:06:14', '2023-04-16 20:06:14', 'Knot Ring in Yellow Gold with Diamonds', 'Knotring.jpg', 41);

--
-- 转储表的索引
--

--
-- 表的索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
