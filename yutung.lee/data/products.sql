-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2023 年 05 月 18 日 02:42
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
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `quantity` tinyint(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `quantity`) VALUES
(1, 'Hill\'s: Chicken Recipe', '', '61.99', 'Cat', '2023-05-15 16:07:02', '2023-05-15 16:07:02', 'dsvcscscc', 'catfood_thumb.png', 'catfood02_thumb.png,catfood03_thumb.png', 60),
(2, 'Hill\'s: Light Chicken Recipe', '', '59.99', 'Cat', '2023-05-15 16:07:02', '2023-05-15 16:07:02', 'davdvdvsvz', 'catfood01_thumb.png', 'catfood_thumb.png,catfood03_thumb.png', 70),
(3, 'Purina: Salmon Recipe', '', '17.98', 'Cat', '2023-05-15 16:07:02', '2023-05-15 16:07:02', 'csdcscv sv ', 'catfood02_thumb.png', 'catfood02_thumb.png', 50),
(4, 'So Thresh : oder control Cat litter', '', '13.99', 'Cat', '2023-05-15 16:07:02', '2023-05-15 16:07:02', 'z xc dvs', 'catlitter_thumb.png', 'catlitter_thumb.png', 90),
(5, 'Tidy Cats : Multi Cat litter', '', '20.22', 'Cat', '2023-05-15 16:07:02', '2023-05-15 16:07:02', ' f dsvsccasc', 'catlitter01_thumb.png', 'catlitter01_thumb.png', 100),
(6, 'Tidy Cats : Max 4 in 1 Cat litter', '', '20.22', 'Cat', '2023-05-15 16:07:02', '2023-05-15 16:07:02', 'vfsbdvsvcz', 'catlitter02_thumb.png', 'catlitter02_thumb.png', 40),
(7, 'YOULY : Valentine\'s Day Cat Scratcher', '', '5.00', 'Cat', '2023-05-15 16:07:02', '2023-05-15 16:07:02', ' d d. s zxzdc ', 'cattoy_thumb.png', 'cattoy_thumb.png', 60),
(8, 'YOULY : Valentine\'s Day Cat toy', '', '4.50', 'cat toys', '2023-05-15 16:07:02', '2023-05-15 16:07:02', 'd z. sdcsaca', 'cattoy01_thumb.png', 'cattoy01_thumb.png', 70),
(9, 'YOULY : Valentine\'s Day fish cat toy', '', '3.50', 'Cat', '2023-05-15 16:07:02', '2023-05-15 16:07:02', ' fs vscac scsc', 'cattoy02_thumb.png', 'cattoy02_thumb.png', 120),
(10, 'WholeHearted : Rice & Chicken Recipe', '', '54.99', 'Dog', '2023-05-15 16:07:02', '2023-05-15 16:07:02', 'dvvscscs sc', 'dogfood_thumb.png', 'dogfood_thumb.png', 100),
(11, 'Purina : : Rice & Chicken Recipe', '', '59.88', 'Dog', '2023-05-15 16:07:02', '2023-05-15 16:07:02', 'sbvdfvssvcsdc', 'dogfood01_thumb.png', 'dogfood01_thumb.png', 90),
(12, 'Purina : : Rice & Lamb Recipe', '', '59.88', 'Dog', '2023-05-15 16:07:02', '2023-05-15 16:07:02', 'vxv cscxczc', 'dogfood02_thumb.png', 'dogfood02_thumb.png', 80);

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
