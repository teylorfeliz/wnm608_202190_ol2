-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 22-04-16 23:31
-- 서버 버전: 5.7.37-cll-lve
-- PHP 버전: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `adelaseo918`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `url` varchar(256) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `url`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Yakchew', 10.00, '', 'Treat', '2022-04-16 15:23:51', '2022-04-16 15:23:51', 'Long-lasting treats known as Himalayan yak chew. Made with nutritious yak milk, these chewy treats have a delicious cheesy flavor. No unpleasant odor and naturally gluten gree. No preservatives, chemicals, or grains. Helps remove plaque and tartar from teeth and gums when your pal chews.\r\nPaw-fect for indoor and outdoor use.Various ways to feed your dogs. ', 'singleyak.jpeg', 'yak1.jpeg, main.jpeg, yak2.jpeg, yakpouch.jpeg, yaktwo.jpeg, yakbaguett.jpg, yakdog.jpeg, singleyak.jpeg, pinkdog.jpeg, yakwithseoah.jpeg, yakfull.jpeg\r\n'),
(2, 'Goat Milk Treat Red', 20.00, '', 'Treat', '2022-04-16 14:46:42', '2022-04-16 14:46:42', 'The perfect treat for dogs and cats looking for a healthier treat. Our heat-free dehydration technique boasts the ability to retain bioactive nutrients usually lost in other treats.\r\n\r\nRed treat ingredients: duck, salmon, beet, sweet potato, strawberry\r\n\r\n100% Organic\r\nFormula Feed\r\nNo artificial colors, or preservations\r\nFreeze-Dried Food\r\nHigh in protein and nutrients\r\nPieces are easy to break into smaller bites for all life stages and breeds\r\n', 'red3.jpg', 'petcrewryg3.jpg, red1.jpg, redingredientone.jpg, redtopview.jpg, redverti.jpg, petcrewryg5.jpg, redpic.jpg, treatdetail.jpg, petcrewryg.jpg'),
(3, 'Goat Milk Treat Yellow', 20.00, '', 'Treat', '2022-04-16 14:34:58', '2022-04-16 14:34:58', 'The perfect treat for dogs and cats looking for a healthier treats. Our heat-free dehydration technique boasts the ability to retain bioactive nutrients usually lost in other treats.\r\n\r\nYellow treat ingredients:\r\nChicken breast, pollack, pumpkin, sweet potato, mango\r\n\r\n100% Organic\r\nFormula Feed\r\nNo artificial colors, or preservations\r\nFreeze-Dried Food\r\nHigh in protein and nutrients\r\nPieces are easy to break into smaller bites for all life stages and breeds\r\n', 'Yellow2.jpg', 'petcrewryg6.jpeg, yellow.jpg, yellow2.jpg, yellowtreat.jpg, yellowtopthree.jpg, yellowingredient.jpg, yellowingredienttwo.jpg'),
(4, 'Goat Milk Treat Green', 20.00, '', 'Treat', '2022-04-16 14:57:32', '2022-04-16 14:57:32', 'The perfect treat for dogs and cats looking for healthier treats. Our heat-free dehydration technique boasts the ability to retain bioactive nutrients usually lost in other treats.\r\n\r\nGreen treat ingredients:\r\nChicken breast, broccoli, kale, sweet potato, kiwi\r\n\r\n100% Organic\r\nFormula Feed\r\nNo artificial colors, or preservations\r\nFreeze-Dried Food\r\nHigh in protein and nutrients\r\nPieces are easy to break into smaller bites for all life stages and breeds\r\n', 'green3.jpg', 'petcrewryg6.jpeg, greenoneshot.jpeg, greenmilk.jpg, greeningretop.jpg, greeningre.jpg, greenfullshot.jpg, greenfull.jpg, greenbg.jpg, green1.jpeg, greenskyshot.jpg, greentop.jpg, redgreenyellowtop.jpg, treatdetail.jpg'),
(5, 'Goat Milk Treat Set', 55.00, '', 'Treat', '2022-04-16 15:26:50', '2022-04-16 15:26:50', 'The perfect treat for dogs and cats looking for healthier treats. Our heat-free dehydration technique boasts the ability to retain bioactive nutrients usually lost in other treats.\r\n\r\nRed treat ingredients: duck, salmon, beet, sweet potato, strawberry\r\n\r\nGreen treat ingredients:\r\nChicken breast, broccoli, kale, sweet potato, kiwi\r\n\r\nYellow treat ingredients:\r\nChicken breast, pollack, pumpkin, sweet potato, mango\r\n\r\n100% Organic\r\nFormula Feed\r\nNo artificial colors, or preservations\r\nFreeze-Dried Food\r\nHigh in protein and nutrients\r\nPieces are easy to break into smaller bites for all life stages and breeds\r\n', 'petcrewryg.jpeg', 'petcrewryg1.jpg, petcrewryg2.jpg, petcrewryg3.jpg, petcrewryg4.jpg, petcrewryg5.jpg, petcreweryg6.jpeg, petcrewtyg5.jpg, tablet.jpg, treatdetail.jpg, yrgfull.jpg'),
(6, 'Yakchew Set', 30.00, '', 'Treat', '2022-04-16 15:29:46', '2022-04-16 15:29:46', 'Long-lasting treats known as Himalayan yak chew. Made with nutritious yak milk, these chewy treats have a delicious cheesy flavor. No unpleasant odor and naturally gluten gree. No preservatives, chemicals, or grains. Helps remove plaque and tartar from teeth and gums when your pal chews.\r\nPaw-fect for indoor and outdoor use.Various ways to feed your dogs. ', 'yak2.jpeg', 'yak1.jpeg, main.jpeg, yak2.jpeg, yakpouch.jpeg, yaktwo.jpeg, yakbaguett.jpg, yakdog.jpeg, singleyak.jpeg, pinkdog.jpeg, yakwithseoah.jpeg, yakfull.jpeg\r\n'),
(7, 'Petcrew Lof Leash', 30.00, '', 'Accessory', '2022-04-16 16:08:38', '2022-04-16 16:08:38', 'Handcrafted from a single, long piece of thick, premium-grade full-grain leather to last a lifetime.\r\nIndependently tested to withstand over 245 pounds of pulling force while weighing less than six ounces.\r\nThe beautiful, strong, and durable design resists water and stains with minimal care and won’t tear at your hands or collect hair like nylon leashes.\r\nEquipped with a premium, nickel-plated brass clasp that is built to last and hold securely.', 'leadall.png', 'leadall.png, leadblue.png, leadorange.png, leadred.png, leadyellow.png, leaddetail.png'),
(8, 'Petcrew Lof Harness', 65.00, '', 'Accessory', '2022-04-16 16:17:54', '2022-04-16 16:17:54', 'Designed for comfort with three layers of neoprene and EVA padding on the front and back.\r\nMade with soft, light jersey fabric that won’t fray if cut or ripped, and durable poly webbing.\r\nAdjustment points for the chest and girth help you get a close, secure fit with less movement.\r\nFeatures a handle, durable metal hardware with Frisco branding and color-matched materials.\r\nIncludes a heat label inside the harness where you can write your info and dog’s name.\r\nMatching leashes and collars are available to complete your dog’s walkwear ensemble.', 'harnessorange.png', 'harnessorange.png, harnessblue.png, harnessred.png, harnessyellow.png, harnessmint.png, harnessdetail.png, harnessdog.png, collardog.png'),
(9, 'Petcrew Lof Collar', 15.00, '', 'Accessory', '2022-04-16 16:31:44', '2022-04-16 16:31:44', 'The collar comes in a variety of sizes to best suit your pup.\r\nYour sidekick will appreciate the soft nylon and you’ll love the dependable hardware.\r\nKeep your girl safe, stylish and comfortable.\r\nDon’t worry about your pup with sensitive skin, this collar is non-allergic.\r\nEvery vivid color won’t wash out and will look beautiful on all breeds and ages!\r\nMatching leashes and collars are available to complete your dog’s walkwear ensemble.', 'collarall.png', 'collarblue.png, collarmint.png, collarorange.png, collarred.png, collaryellow.png, collaryellowdetail.png, collardog.png, harnessdog.png, leashdog.png'),
(10, 'Iams Minichunks Adult Lamb & Rice Recipe Dry Dog Food', 45.98, '', 'Food', '2022-04-16 16:44:50', '2022-04-16 16:44:50', '\r\nYour pooch will be licking his chops waiting for a bowl of IAMS Minichunks Adult Lamb & Rice Recipe Dry Dog Food. This adult dog food features real lamb as the first ingredient, along with essential nutrients and antioxidants for nose-to-tail well-being. It also supports healthy digestion with natural fiber and prebiotics. And since the kibble is small in size, this dry dog food is paw-fect for adult dogs of all sizes! Grab a bag of this IAMS recipe and pour your favorite pal a bowl of 100% complete and balanced nutrition!\r\n\r\n', 'iamfoodfront.png', 'iamfoodfront.png, iamfoodback.png, iamfooddetail.png, iamfoodingre.png, iamfoodad.png'),
(11, 'Iams Perfect Portions Healthy Adult Tuna Recipe Pate Grain-Free ', 0.00, '', 'Food', '2022-04-16 16:59:19', '2022-04-16 16:59:19', 'Feed your adult feline friend a meal that’s going to support her health and well-being with IAMS Perfect Portions Healthy Adult Tuna Recipe Pate Grain-Free Cat Food Trays (trace amounts of grain may be present due to cross contact during manufacturing). Unliked canned cat food, these convenient trays won’t produce messy leftovers for an easy cleanup every time! Each easy-peel tray features two individual meals that are made in the USA with some of the world’s finest ingredients, including real tuna. And to give you peace of mind, this recipe is crafted with 0% fillers and no artificial preservatives whatsoever. This soft cat food pate offers complete and balanced nutrition for your adult cat and contains antioxidant, vitamin E, to support her immune system. With veterinarian-recommended IAMS, you can feel confident knowing that your furry friend is getting the nutrition she needs and deserves.', 'iamsstunafront.png', 'iamstunafront.png, iamstunaback.png, iamstunaingre.png, iamstunaad.png, iamsnumber.png, iamstunaword.png, imasdetail.png'),
(12, 'Purina Beneful Infused Pate With Real Lamb, Chicken, Beef Variet', 18.80, '', 'Food', '2022-04-16 23:18:50', '2022-04-16 23:18:50', '\r\nThis variety pack dog food contains three protein-rich, meaty dog food selections infused with sunflower oil, fish oil or bone broth.\r\nEach Purina high protein canned dog food recipe in this variety pack is made with real beef, lamb or chicken and a blend of real, visible carrots and spinach.\r\nEach complete and balanced dog food recipe is made with no artificial colors, flavors or preservatives, so you can serve your dog nutritious entrees.\r\nThis canned pate dog food features a meaty, easy-to-chew texture and makes for great standalone meals or tasty mixers when added to his kibble.\r\nBeneful wet dog food variety pack is proudly produced in Purina-owned, U.S. facilities.', 'wetfoodfront.png', 'wetfoodfront.png, wetfoodall.png, wetfoodingre.png, wetfoodword.png, wetfoodad.png'),
(13, 'Frisco Colorful Ball Knot Rope Dog Toy', 6.98, '', 'Accessory', '2022-04-16 23:25:52', '2022-04-16 23:25:52', 'Made for everyday play with bright, eye-catching colors, polyester rope and recycled cotton.\r\nFeatures a big, chunky knot in the middle with six individual ropes attached.\r\nGreat for an energized game of fetch as well as interactive fun.\r\nHelps get your pup the exercise they need, indoors and outdoors too.\r\nSize options available for small, medium and large dogs.', 'toymain.png', 'toymain.png, toysize.png, toydog.png');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
