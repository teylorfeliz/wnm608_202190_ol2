-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2023 年 05 月 13 日 05:16
-- 伺服器版本： 5.7.41-cll-lve
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
-- 資料庫： `lee0411`
--

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `data_create` datetime NOT NULL,
  `data_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `category`, `data_create`, `data_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Hill\'s: Chicken Recipe', '', '61.99', 'cat food', '2023-05-12 05:13:39', '2023-05-12 05:13:39', 'dsvcscscc', 'catfood_thumb.png', 'catfood02_thumb.png,catfood03_thumb.png'),
(2, 'Hill\'s: Light Chicken Recipe', '', '59.99', 'cat food', '2023-05-03 05:13:39', '2023-05-12 05:13:39', 'davdvdvsvz', 'catfood01_thumb.png', 'catfood_thumb.png,catfood03_thumb.png'),
(3, 'Purina: Salmon Recipe', '', '17.98', 'cat food', '2023-05-11 05:13:39', '2023-05-12 05:13:39', 'csdcscv sv ', 'catfood02_thumb.png', 'catfood02_thumb.png'),
(4, 'So Thresh : oder control Cat litter', '', '13.99', 'cat litter', '2023-05-11 05:13:39', '2023-05-12 05:13:39', 'z xc dvs', 'catlitter_thumb.png', 'catlitter_thumb.png'),
(5, 'Tidy Cats : Multi Cat litter', '', '20.22', 'cat litter', '2023-05-11 05:13:39', '2023-05-12 05:13:39', ' f dsvsccasc', 'catlitter01_thumb.png', 'catlitter01_thumb.png'),
(6, 'Tidy Cats : Max 4 in 1 Cat litter', '', '20.22', 'cat litter', '2023-05-11 05:13:39', '2023-05-12 05:13:39', 'vfsbdvsvcz', 'catlitter02_thumb.png', 'catlitter02_thumb.png'),
(7, 'YOULY : Valentine\'s Day Cat Scratcher', '', '5.00', 'cat toys', '2023-05-04 05:13:39', '2023-05-11 05:13:39', ' d d. s zxzdc ', 'cattoy_thumb.png', 'cattoy_thumb.png'),
(8, 'YOULY : Valentine\'s Day Cat toy', '', '4.50', 'cat toys', '2023-05-10 05:13:39', '2023-05-12 05:13:39', 'd z. sdcsaca', 'cattoy01_thumb.png', 'cattoy01_thumb.png'),
(9, 'YOULY : Valentine\'s Day fish cat toy', '', '3.50', 'cat toys', '2023-05-11 05:13:39', '2023-05-12 05:13:39', ' fs vscac scsc', 'cattoy02_thumb.png', 'cattoy02_thumb.png'),
(10, 'WholeHearted : Rice & Chicken Recipe', '', '54.99', 'dog food', '2023-05-11 05:13:39', '2023-05-12 05:13:39', 'dvvscscs sc', 'dogfood_thumb.png', 'dogfood_thumb.png'),
(11, 'Purina : : Rice & Chicken Recipe', '', '59.88', 'dog food', '2023-05-11 05:13:39', '2023-05-12 05:13:39', 'sbvdfvssvcsdc', 'dogfood01_thumb.png', 'dogfood01_thumb.png'),
(12, 'Purina : : Rice & Lamb Recipe', '', '59.88', 'dog food', '2023-05-10 05:13:39', '2023-05-12 05:13:39', 'vxv cscxczc', 'dogfood02_thumb.png', 'dogfood02_thumb.png');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
