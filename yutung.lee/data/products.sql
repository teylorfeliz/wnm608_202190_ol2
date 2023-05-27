-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2023 年 05 月 23 日 03:43
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
(2, 'Hill\'s: Light Chicken Recipe', '', '59.99', 'Cat', '2023-05-15 16:07:02', '2023-05-15 16:07:02', 'Hill\'s Science Diet Light Adult dry cat food is precise nutrition for less active adult cats requiring a low calorie food to maintain a healthy weight & lifestyle. Low calories & L Carnitine help promote ideal body weight. High quality protein & natural fibers help satisfy hunger between meals. Omega 6s & Vitamin E for beautiful skin & fur.\r\n\r\n- Fresh new look, coming soon\r\n- Adult dry cat food with 20% fewer calories vs. Hill\'s Science Diet Adult\r\n- Provides L carnitine to help promote ideal body weight in your grown cat\r\n- Uses quality protein and natural fibers to support your adult cat\'s hunger between meals\r\n- Excellent low cal source with vitamin E and omega 6s to give your adult cat healthy skin & fur\r\n- Made with natural ingredients\r\n- Made in the USA with global ingredients you can trust', 'catfood01_thumb.png', 'catfood_thumb.png,catfood03_thumb.png', 70),
(3, 'Purina: Salmon Recipe', '', '17.98', 'Cat', '2023-05-15 16:07:02', '2023-05-15 16:07:02', 'Provide your indoor cat with the targeted nutrition she needs to thrive with Purina ONE +Plus Indoor Advantage With Real Salmon No. 1 Ingredient Natural With Added Vitamins, Minerals and Nutrients indoor dry food for cats. This tailored Purina ONE for cats formula features real salmon as the number one ingredient delivered in fiber-rich, crunchy bites to support the needs of indoor cats. The high-quality protein helps your cat support a healthy weight and strong muscles, including a healthy heart. We include added vitamins in our natural Purina ONE formula, along with minerals and other nutrients to help provide 100 percent complete and balanced nutrition for adult cats. Omega-6 fatty acids nourish her soft coat and healthy skin, and added calcium helps maintain her strong teeth. We make this great-tasting high protein cat food kibble for cats ages 1 through 7. You can feel confident when you choose veterinarian-recommended Purina ONE dry cat food for your special companion.', 'catfood02_thumb.png', 'catfood02_thumb.png', 50),
(4, 'So Phresh : oder control Cat litter', '', '13.99', 'Cat', '2023-05-15 16:07:02', '2023-05-15 16:07:02', '- Advanced Odor Control Scoopable Cat Litter from So Phresh\r\n- Fragrance-free\r\n- 99% dust-free\r\n- Powerful clumping to help control odors', 'catlitter_thumb.png', 'catlitter_thumb.png', 90),
(6, 'Tidy Cats : Max 4 in 1 Cat litter', '', '20.22', 'Cat', '2023-05-15 16:07:02', '2023-05-15 16:07:02', '- Advanced Odor Control Scoopable Cat Litter from So Phresh\r\n- Fragrance-free\r\n- 99% dust-free\r\n- Powerful clumping to help control odors', 'catlitter02_thumb.png', 'catlitter02_thumb.png', 40),
(7, 'YOULY : Valentine\'s Day Cat Scratcher', '', '5.00', 'Cat', '2023-05-15 16:07:02', '2023-05-15 16:07:02', 'The Youly Valentine\'s Day Heart Shaped Scratcher will give your feline all the feels this Valentine\'s Day. This irresistible scratcher includes yummy catnip that you can sprinkle in the grooves to make your kitty feel extra loving this holiday.\r\n', 'cattoy_thumb.png', 'cattoy_thumb.png', 60),
(8, 'YOULY : Valentine\'s Day Cat toy', '', '4.50', 'cat toys', '2023-05-15 16:07:02', '2023-05-15 16:07:02', 'Your little Valentine deserves to be showered with love and toys this holiday! Pick up this 3-pack of cute Valentine-themed toys that your cat is sure to love.\r\n\r\n- Valentine\'s Day Cat Toy 3pack from Youly\r\n- 3-pack of cat toys\r\n- Includes 1 plush mouse toy, 1 plastic rattle ball, and 1 plush macaron with feathers\r\n- Plush mouse is filled with organic catnip', 'cattoy01_thumb.png', 'cattoy01_thumb.png', 70),
(9, 'YOULY : Valentine\'s Day fish cat toy', '', '3.50', 'Cat', '2023-05-15 16:07:02', '2023-05-15 16:07:02', 'Your cat will feel the pull of unrequited love this Valentine\'s Day with this cute Fish Teaser from Youly. Just when they think they\'ve got the catnip-filled plush fish, you can dangle it a little further to keep them begging for more. You heartbreaker, you!\r\n\r\n- Valentine\'s Day Fish Teaser Cat Toy from Youly\r\n- Cat teaser toy\r\n- Plastic stick with play fish and feathers\r\n- Great for pet-parent play\r\n- Contains organic catnip\r\nSpecifications\r\n\r\n', 'cattoy02_thumb.png', 'cattoy02_thumb.png', 120),
(10, 'WholeHearted : Rice & Chicken Recipe', '', '54.99', 'Dog', '2023-05-15 16:07:02', '2023-05-15 16:07:02', '- All Life Stage Recipe Dry Dog Food from WholeHearted\r\n- Real chicken is the first ingredient\r\n- Canine probiotics help maintain digestive health\r\n- Omega-3 fatty acids for healthy skin and coat\r\n- Wholesome grains and fiber with no corn or wheat\r\n- Antioxidant formula for healthy immunity (guaranteed levels of Vitamin E, Selenium, and Zinc)\r\n- Vitamins and minerals for balanced nutrition', 'dogfood_thumb.png', 'dogfood_thumb.png', 100),
(11, 'Purina :  Rice & Chicken Recipe', '', '59.88', 'Dog', '2023-05-15 16:07:02', '2023-05-15 16:07:02', '- Real chicken is the number 1 ingredient in this Purina ONE dry dog food for adult dogs featuring protein-rich, tender, meaty morsels and crunchy dog kibble for a taste dogs love\r\n- Four antioxidant sources offer immune support, while natural sources of glucosamine for dogs help to support healthy joints\r\n- Purina ONE dry dog food Including Omega-6 fatty acids and vitamins and minerals to help to support a healthy skin and coat\r\n- 0 percent fillers mean all our high-quality Purina ONE dry dog food ingredients have a purpose\r\n- Highly digestible chicken dog food dry formula with 100 percent complete and balanced nutrition, so more nutrition goes to work inside your dog', 'dogfood01_thumb.png', 'dogfood01_thumb.png', 90),
(12, 'Purina :  Rice & Lamb Recipe', '', '59.88', 'Dog', '2023-05-15 16:07:02', '2023-05-15 16:07:02', '- Real chicken is the number 1 ingredient in this Purina ONE dry dog food for adult dogs featuring protein-rich, tender, meaty morsels and crunchy dog kibble for a taste dogs love\r\n- Four antioxidant sources offer immune support, while natural sources of glucosamine for dogs help to support healthy joints\r\n- Purina ONE dry dog food Including Omega-6 fatty acids and vitamins and minerals to help to support a healthy skin and coat\r\n- 0 percent fillers mean all our high-quality Purina ONE dry dog food ingredients have a purpose\r\n- Highly digestible chicken dog food dry formula with 100 percent complete and balanced nutrition, so more nutrition goes to work inside your dog', 'dogfood02_thumb.png', 'dogfood02_thumb.png', 80);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
