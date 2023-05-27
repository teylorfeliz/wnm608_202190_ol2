-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-05-26 23:59:13
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `joyshih_wnm608`
--

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `brand` varchar(128) NOT NULL,
  `product` varchar(128) NOT NULL,
  `category` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `date_create` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `quantity` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `brand`, `product`, `category`, `description`, `date_create`, `thumbnail`, `images`, `quantity`) VALUES
(1101, 'Trail 25 Pack', 80.00, 'REI Co-op', 'Backpacks', 'Daypacks', 'Light and comfy on your back, the Trail 25 pack holds plenty of gear and keeps it well organized for day hikes, commuting and carry-on travel.', '2023-04-25 18:20:18', 'backpacks1101.jpg', 'backpacks1101,backpacks11011', 70),
(1102, 'Renn 50 Pack', 180.00, 'Osprey', 'Backpacks', 'Backpacking Packs', 'Spend an overnight or weekend on the trail with the Osprey Renn 50 pack. Its ventilated design, adjustable fit and roomy capacity keep you moving in comfort on long treks.', '2023-04-26 01:31:04', 'backpacks1102.jpg', 'backpacks1102,backpacks11021,backpacks11022', 50),
(1103, 'Nano 18 Daypack', 64.95, 'Gregory', 'Backpacks', 'Daypacks', 'Some adventures take you to the top of epic trails, others just around the neighborhood. Either way, keep all your daily essentials comfortably close at hand with the Gregory Nano 18 daypack.', '2023-04-25 17:52:17', 'backpacks1103.jpg', 'backpacks1103,backpacks11031', 33),
(1104, 'Talon 22 Pack', 160.00, 'Osprey', 'Backpacks', 'Daypacks', 'Bring hydration, food and extra layers along wherever your imagination takes you with the men\'s Osprey Talon 22 pack, your new favorite day-hiking, biking or peak-bagging carry solution.', '2023-04-25 17:54:17', 'backpacks1104.jpg', 'backpacks1104,backpacks11041,backpacks11042', 72),
(1105, 'Tarn 12 Pack', 31.95, 'REI Co-op', 'Backpacks', 'Daypacks', 'This is a real pack—not a toy. That\'s why the kids\' REI Co-op Tarn 12 pack gets youngsters excited to hit the trail carrying their own stuff in their own pack.', '2023-04-25 17:56:17', 'backpacks1105.jpg', 'backpacks1105,backpacks11051,backpacks11052', 54),
(1106, 'Maya 16 Pack', 79.73, 'Gregory', 'Backpacks', 'Daypacks', 'The Maya 16 pack carries a rain shell, lunch, first aid, water and any other accessories you bring on warp-speed hikes. It hugs your body like a bear cub as you bounce from boulder to boulder.', '2023-04-25 17:56:17', 'backpacks1106.jpg', 'backpacks1106,backpacks11061,backpacks11062', 39),
(1107, 'Luzon 24L Pack - Del Dia', 79.73, 'Cotopaxi', 'Backpacks', 'Daypacks', 'A big brother to the do-it-all, 18-liter Luzon, the Cotopaxi Luzon Del Dia 24-liter pack offers everything you love about the Luzon, plus added capacity and a few extra features.', '2023-04-25 17:56:17', 'backpacks1107.jpg', 'backpacks1107,backpacks11071,backpacks11072,backpacks11073', 64),
(1108, 'Aircontact Ultra 45 + 5 SL Pack', 250.00, 'Deuter', 'Backpacks', 'Backpacking Packs', 'Reduced to the essentials, the lightweight Deuter Aircontact Ultra 45 + 5 SL women\'s pack expertly balances comfort and weight so you can devote more energy to the trail ahead.', '2023-04-25 17:56:17', 'backpacks1108.jpg', 'backpacks1108,backpacks11081,backpacks11082', 49),
(1109, '3400 Southwest Pack', 379.00, 'Hyperlite', 'Backpacks', 'Backpacking Packs', 'If you live to descend and emerge from rocky canyons and otherworldly formations with calloused hands and sunbaked river sediment, Hyperlite 3400 Southwest pack is a reliable companion.', '2023-04-25 17:56:17', 'backpacks1109.jpg', 'backpacks1109,backpacks11091,backpacks11092', 35),
(1201, 'Compact Camp Chair', 150.00, 'Dometic GO', 'Camp_Furniture', 'Chairs', 'Folding down small, this Dometic GO Compact Camp chair easily stashes in your trunk for when-you-need-it seating. It provides a comfy spot to sit down, relax and enjoy the sunshine.', '2023-04-26 01:31:09', 'camp_furniture1201.jpg', 'camp_furniture1201', 62),
(1202, 'SingleNest Hammock', 55.00, 'ENO', 'Camp_Furniture', 'Hammocks', 'Perfect for one, the compact and lightweight ENO SingleNest hammock is expertly constructed with durable yet soft FreeWave™ fabric, making it ideal for solo relaxation on any kind of adventure.', '2023-04-25 01:31:14', 'camp_furniture1202.jpg', 'camp_furniture1202', 27),
(1203, 'Flexlite Air Chair', 99.95, 'REI Co-op', 'Camp_Furniture', 'Chairs', 'The REI Co-op Flexlite Air is one chair even ounce-counting backpackers can love—for just one extra pound, you get the luxury of sitting high and dry, out of the reach of poking pine needles.', '2023-04-25 20:31:44', 'camp_furniture1203.jpg', 'camp_furniture1203,camp_furniture12031', 16),
(1204, 'Mountaineering Rocking Chair', 111.73, 'ALPS', 'Camp_Furniture', 'Chairs', 'Whether you\'re using the ALPS Mountaineering rocking chair on the back deck or around the campfire, it\'ll be the chair everyone gravitates to.', '2023-04-25 20:31:44', 'camp_furniture1204.jpg', 'camp_furniture1204,camp_furniture12041', 61),
(1301, 'Sahara Convertible Pants', 79.95, 'REI Co-op', 'Clothing', 'Men', 'Hot days that start out cold; icy creeks to ford—the men\'s REI Co-op zip-off Sahara pants take it all in stride. Just zip off the legs (you don\'t even have to sit down) and boom: shorts!', '2023-04-26 01:31:19', 'Clothing1301.jpg', 'Clothing1301,Clothing1302', 74),
(1302, 'Savanna Trails Pants', 54.95, 'REI Co-op', 'Clothing', 'Women', 'From working your way up a mile of switchbacks to rehashing the joy of that type II fun in the pub later, the women\'s REI Co-op Savanna Trails pants are essential equipment.', '2023-04-26 01:31:22', 'Clothing1302.jpg', 'Clothing1302', 19),
(1303, 'Exa Snow Pants', 125.93, 'Picture Organic Clothing', 'Clothing', 'Women', 'From working your way up a mile of switchbacks to rehashing the joy of that type II fun in the pub later, the women\'s REI Co-op Savanna Trails pants are essential equipment.', '2023-04-26 01:13:16', 'Clothing1303.jpg', 'Clothing1303,Clothing13031,Clothing13032', 46),
(1304, 'Izimo Fleece', 51.93, 'Picture Organic Clothing', 'Clothing', 'Women', 'Made with supersoft high-pile fleece and retro-inspired styling, the women\'s Picture Organic Clothing Izimo fleece is a go-to cozy layer for chilly fall walks and weekend hikes.', '2023-04-26 01:13:16', 'Clothing1304.jpg', 'Clothing1304,Clothing13041,Clothing13042', 36),
(1305, 'Beta LT Jacket', 79.95, 'Arc\'teryx', 'Clothing', 'Men', 'Simplified in design without sacrificing weather protection and performance, the men\'s Arc\'teryx Beta LT jacket keeps you light, dry and comfortable in a breathable 3-layer GORE-TEX® shell.', '2023-04-27 01:31:26', 'Clothing1305.jpg', 'Clothing1305,Clothing13051,Clothing13052', 45),
(1306, 'Proton Lightweight Insulated Hoodie', 260.00, 'Arc\'teryx', 'Clothing', 'Men', 'Don\'t let a little inclement weather slow you down. The men\'s Arc\'teryx Proton Lightweight insulated hoodie can be worn as a mid layer or standalone jacket for breathable warmth on cool, windy days.', '2023-04-26 01:27:48', 'Clothing1306.jpg', 'Clothing1306,Clothing13061,Clothing13062', 36),
(1401, 'Moab 3 Mid Waterproof Hiking Boots', 145.00, 'Merrell', 'Footwear', 'Men', 'The Mother Of All Boots gets upgraded in the men\'s Merrell Moab 3 Mid waterproof hiking boots. Known for comfort and versatility, the latest iteration is even softer, grippier and more supportive.', '2023-04-25 01:31:29', 'footwear1401.jpg', 'footwear1401', 56),
(1402, 'Renegade GTX Mid Hiking Boots', 255.00, 'Lowa', 'Footwear', 'Women', 'With abundant comfort and support at a low weight, the women\'s waterproof Lowa Renegade GTX Mid hiking boots are well-suited for long day hikes and weekend backpacking.', '2023-04-24 01:31:32', 'footwear1402.jpg', 'footwear1402,footwear1401', 50),
(1501, 'Stormbreak 3 Tent', 220.00, 'The North Face', 'Tents', 'Backpacking Tents', 'Make new outdoor memories in the roomy The North Face Stormbreak 3. It\'s a classic 3-person camping tent with ample headroom, plus large doors for easy access and amazing views of the outdoors.', '2023-04-25 01:31:34', 'tents1501.jpg', 'tents1501,tents1502', 54),
(1502, 'Mountaineering Meramac 5 Tent', 220.00, 'ALPS', 'Tents', 'Camping Tents', 'For a family of 5 (or you and 4 of your friends), the ALPS Mountaineering Meramac 5 dome tent with awning provides a comfortable shelter for summer slumber under the stars.', '2023-04-25 01:31:37', 'tents1502.jpg', 'tents1502', 39),
(1601, 'Luci 44\' Solar String Lights', 69.95, 'MPOWERD', 'Lighting', 'Lanterns', 'Designed for both on-the-go illumination or permanent ambiance, the MPOWERD Luci 44 ft. Solar String Lights and Power Hub are perfect for lighting everything from a backyard patio to a cozy campsite.', '2023-04-25 01:31:39', 'Lighting1601.jpg', 'Lighting1601,Lighting1602', 43),
(1602, 'Sprint 225 Headlamp', 49.95, 'Black Diamond', 'Lighting', 'Headlamps', 'Made to power morning runs or post-work trail sessions, the rechargeable Black Diamond Sprint 225 headlamp fits into the pocket of your running shorts, and it\'s virtually unnoticeable on your head.', '2023-04-26 01:31:42', 'Lighting1602.jpg', 'Lighting1602', 43),
(1701, 'Cosmic 20 Sleeping Bag', 165.00, 'Kelty', 'Sleeping_Bags', 'Single Sleeping Bags', 'A 3-season superstar for nights when temps dip to subfreezing, the men\'s Kelty Cosmic 20 sleeping bag\'s thermally efficient trapezoidal baffle construction and 550-fill-power down keep you warm.', '0000-00-00 00:00:00', 'sleeping_bags1701.jpg', 'sleeping_bags1701', 44),
(1702, 'Jazz 30 Double Sleeping Bag', 349.95, 'NEMO', 'Sleeping_Bags', 'Double Sleeping Bags', 'Bring the experience of your bed at home with you wherever you choose to make camp with the NEMO Jazz 30 Double sleeping bag—its bedsheet, insulation and spacious cut provide comfort for 2 campers.', '0000-00-00 00:00:00', 'sleeping_bags1702.jpg', 'sleeping_bags1702', 23),
(1801, 'Mountain Series Hiker Medical Kit', 29.95, 'Adventure Medical Kits', 'Health_and_Safety', 'First Aid', 'The Adventure Medical Kits Hiker medical kit is equipped with carefully selected supplies tailored to meet any basic first-aid needs you and a friend might experience on a 2-day adventure.', '0000-00-00 00:00:00', 'health_and_safety1801.jpg', 'health_and_safety1801', 50),
(1802, 'Bear Deterrent Spray - 10.2 fl. oz.', 59.95, 'Counter Assault', 'Health_and_Safety', 'Bear Spray', 'With a high-volume, atomized blast of concentrated spray to deter a bear attack, the 10.2 fl. oz. Counter Assault Bear Deterrent pepper spray offers an optimal combination of spray time and distance.', '0000-00-00 00:00:00', 'health_and_safety1802.jpg', 'health_and_safety1802', 62);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1805;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
