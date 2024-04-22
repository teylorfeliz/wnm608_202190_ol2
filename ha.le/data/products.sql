-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2024 at 09:48 PM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hle22_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `designer` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `dispatch` text NOT NULL,
  `materials` text NOT NULL,
  `dimensions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `designer`, `url`, `price`, `description`, `date_create`, `date_modify`, `thumbnail`, `images`, `dispatch`, `materials`, `dimensions`) VALUES
(1, 'Soda Coffee Table', 'Yiannis Ghikas', '', 2500.00, 'Yiannis Ghikas, with his background encompassing Computer Science alongside Design, employs functionality as the ultimate purpose of his designs while exploring their potential emotive responses. In the Soda collection, he designed an object with such a geometry that allows it to play with light and shadow, creating different shapes as one’s perspective changes.', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'soda_coffee_table_thumb.jpg', 'soda_coffee_table_1.jpg,soda_coffee_table_2.jpg,soda_coffee_table_3.jpg,soda_coffee_table_4.jpg', 'Dispatched within 10 weeks', 'Murano blown glass', 'Oval - H: 30cm (11.8\"), L: 70cm (27.5\"), D: 45cm (17.7\") / Square - H: 40cm (15.7\"), L: 53cm (20.8\"), D: 53cm (20.8\")'),
(2, 'Pau Silver Stool', 'Simone Fanciullacci', '', 6500.00, 'Pau Silver is a 21st white armchair made by Italian artisans in painted and spray coated Polystyrene with an incredible metallic final coating that makes the object as reflective as chrome-plated metal. It is part of the collectible design language Pau that has been developed and authentically signed in Milan. Conceived as an almost primitive and genial form, the Anita armchair has a sculptural presence in which volumes intersect in a play of proportions highlighting their shapes. Each piece developed and produced by Edizione Limitata is unique and destined to last for generations.\r\n', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'pau_silver_stool_thumb.jpg', 'pau_silver_stool_1.jpg,pau_silver_stool_2.jpg,pau_silver_stool_3.jpg,pau_silver_stool_4.jpg', 'Dispatched within 8-10 weeks', 'Solid wood, Foam injection, Simple seams, Piping, Upholstery', 'H: 50cm (20\"), L: 70cm (28\"), D: 41cm (16\")'),
(3, 'Chubby Coffee Table', 'Arthur Vallin', '', 28200.00, 'French multi-disciplinary Creative Director Arthur Vallin holds a Master’s degree in Art Direction from the renowned design academy Penninghen. Arthur Vallin lives and works in New York, where he operates his design studio. Arthur’s collectible design line is a new way for him to experiment with shapes and materials. Arthur is always in search of a new balance between shapes and spaces, innovative manufacturing processes, and visual impact.', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'chubby_coffee_table_thumb.jpg', 'chubby_coffee_table_1.jpg,chubby_coffee_table_2.jpg,chubby_coffee_table_3.jpg,chubby_coffee_table_4.jpg', 'Dispatched within 14-16 weeks', 'Travertine, Oak, Lacquered wood', 'L: 89cm (35.5\"), D: 89cm (35.5\"), H: 33cm (13.75\")\r\n'),
(4, 'Bubble Light', 'Balzer Balzer Studio', '', 2150.00, 'Balzer Balzer is a German creative studio which operates from Berlin. Evoking a delicate dance between confinement and freedom, the Bubble-Light tells a tale of glass seemingly caught in mid-escape from its stainless steel cage. The resultant form captures a momentary burst, creating a dramatic interplay of structure and suspense. Each glass, distinct in its color and translucency, further amplifies the narrative. Handcrafted in Berlin, every Bubble-Light stands as a testament to individuality, each piece numbered, signed, and undeniably unique.\r\n', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'bubble_light_thumb.jpg', 'bubble_light_1.jpg,bubble_light_2.jpg,bubble_light_3.jpg', 'Dispatched within 8-10 weeks', 'Hand Blown Glass, Stainless Steel, Various Materials, E27 LED', 'H: 22cm (8.6\"), L: 30cm (11.8\"), D: 13cm (5.1\")\r\n'),
(5, 'Litho Ottoman', 'Guillaume Delvigne', '', 3209.00, 'A designer who graduated in 2002 from the Nantes Atlantique School of Design, Guillaume Delvigne began his career between Milan and Paris, working with big names such as George Sowden, co-founder of the Memphis movement, and Marc Newson, a star of contemporary design. Litho means « stone » in ancient Greek. The line resembles a primitive landscape where each piece would have its own personality and would resonate with each other.\r\n', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'litho_ottoman_thumb.jpg', 'litho_ottoman_1.jpg,litho_ottoman_2.jpg,litho_ottoman_3.jpg,litho_ottoman_4.jpg', 'Dispatched within 8-10 weeks', 'Solid wood, Foam injection, Simple seams, Piping, Upholstery', 'H: 42cm (16.5\"), L: 60cm (23.6\"), D: 40cm (15.7\")'),
(6, 'Pearl Console', 'Arthur Vallin', '', 32255.00, 'French multi-disciplinary Creative Director Arthur Vallin holds a Master’s degree in Art Direction from the renowned design academy Penninghen. Arthur Vallin lives and works in New York, where he operates his design studio. Arthur’s collectible design line is a new way for him to experiment with shapes and materials. Arthur is always in search of a new balance between shapes and spaces, innovative manufacturing processes, and visual impact.', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'pearl_console_thumb.jpg', 'pearl_console_1.jpg,pearl_console_2.jpg,pearl_console_3.jpg,pearl_console_4.jpg', 'Dispatched within 14-16 weeks', 'Travertine, Brass', 'L: 120cm (47\"), D: 38cm (15.75\"), H: 84cm (33.5\")'),
(7, 'Tubular Armchair', 'Lucas Munoz', '', 18000.00, 'This Tubular Steel Armchair forms part of the Series O.F.I.S (Objects From Intersticial Space), an ongoing research of industrial material’s potential for narrative. Muñoz designed this tubular armchair as an exploration of the structural potential of different industrial components. He wanted to showcase their ability to perform a function within a domestic environment. Muñoz constructed the seat from galvanised steel ventilation pipes and elbow connectors found in his atelier, as well as sheets of copper taken from a metal junkyard. Taking the shape and mechanic properties of those interstitial materials as a starting point, he draws a line that crosses from practical means to what function a domestic environment requires. Materials meant for behind and in between our walls (architectural interstitial spaces) cross their designed boundaries to take their place in the room.\r\n', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'tubular_armchair_thumb.jpg', 'tubular_armchair_1.jpg,tubular_armchair_2.jpg,tubular_armchair_3.jpg,tubular_armchair_4.jpg', 'Dispatched within 8-10 weeks', 'Polished steel, Thermal colouring steel', 'H: 90cm (35\"), L: 100cm (39\"), D: 90cm (35\")'),
(8, 'Plopp Bar Stool', 'Zieta', '', 1200.00, 'Halfway between design and engineering Zieta Prozessdesign does not only wants to focus on the beauty of the shapes of objects and furniture they design, but also focuses on creating innovative solutions that can be applied to the production of their collections and leave them endless possibilities. Zieta is best known for his collection of stools “Plopp” made through  the technologist FIDU. These stools appear to be almost soft and seem to be made of foldable or even wrinkled material. In fact, these Plopp stools are metal. Two laser-cut metal sheets are first welded together before air is injected between them until they separate from each other forming a three-dimensional object.\r\n', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'plopp_bar_stool_thumb.jpg', 'plopp_bar_stool_1.jpg,plopp_bar_stool_2.jpg,plopp_bar_stool_3.jpg,plopp_bar_stool_4.jpg', 'Dispatched within 8-10 weeks', 'Powder-coated steel, Polished steel, Thermal colouring steel', 'H: 75cm (29.5\"), Ø 35cm (13.7\")'),
(9, 'Octane Chair', 'Arthur Vallin', '', 22438.00, 'French multi-disciplinary Creative Director Arthur Vallin holds a Master’s degree in Art Direction from the renowned design academy Penninghen. Arthur Vallin lives and works in New York, where he operates his design studio. Arthur’s collectible design line is a new way for him to experiment with shapes and materials. Arthur is always in search of a new balance between shapes and spaces, innovative manufacturing processes, and visual impact.', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'octane_chair_thumb.jpg', 'octane_chair_1.jpg,octane_chair_2.jpg,octane_chair_3.jpg,octane_chair_4.jpg', 'Dispatched within 16-18 weeks', 'Wood, Bouclé fabric', 'L: 114cm (45\"), D: 81.3cm (32.5\"), H: 53.3cm (21\")'),
(10, 'Beetle SeatVerter Turroni', 'Verter Turroni', '', 3340.00, 'Verter Turroni’s artistic workshop Imperfetto Lab is located in Gambettola, Emilia Romanga, Italy. The studio was founded in 1992, by Turroni and his wife Emanuela Ravelli. Each exclusive piece is made from a common mould, which is then sanded, painted, and hand-polished. The working process differs for each type of object, thus becoming unique in its genre. Their pieces is mainly manufactured in fiberglass, a highly versatile lightweight material that is resistant to any weather conditions, suitable for both indoor and outdoor use.\r\n', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'beetle_seat_thumb.jpg', 'beetle_seat_1.jpg,beetle_seat_2.jpg,beetle_seat_3.jpg,beetle_seat_4.jpg', 'Dispatched within 8-10 weeks', 'Fibre glass', 'Each one is unique'),
(11, 'Chair Made in 912 Minutes', 'Diego Faivre', '', 6450.00, 'French-born, Netherlands-based Diego Faivre is a recent graduate of the Design Academy Eindhoven. His graduation project, Minute Manufacture, offers complete transparency in the production and manufacturing processes of design in his work, challenging the current fabrication and evaluation of objects. For Faivre, time really is money; the number of minutes spent affects the quality and design of the outcome. It is his response to the rise of mass production and the consequential devaluation of individual expression. Made in Diego Dough, the chair is a special type of air-drying clay that remains pliable once dry, the chair is priced according to Faivre’s “Minute Manufacturing” system, whereby every minute of production time costs €2. That means the product’s final price is a direct reflection of the amount of time it took to make it – in this case, 912 minutes.\r\n', '2024-04-13 01:11:41', '2024-04-13 01:11:41', '912_minutes_chair_thumb.jpg', '912_minutes_chair_1.jpg,912_minutes_chair_2.jpg,912_minutes_chair_3.jpg,912_minutes_chair_4.jpg', 'Dispatched within 6-8 weeks', 'Diego Dough, Mixed', 'H: 40cm (15.7\"), Ø 28cm (11\")'),
(12, 'Orgus Coffee Table', 'Humberto da Mata', '', 9350.00, 'The ORGUS VI collection is the result of new experiments between paper pulp and paint that the Brazilian designer Humberto da Mata has been carrying out in recent months at this studio in São Paulo, Brazil. Presented for the first time at COLLECTIBLE, the fair for 21st century Design, in Brussels, the ORGUS VI collection unveils functional sculptures with soft and beautifully strange curves, intriguing textures and bold colors. “This is one of the results of my many experiments with paper pulp. The material is really plastic and gives me this freedom to work with either simpler or more complex forms,\" explains Humberto da Mata.\r\n', '2024-04-13 01:11:41', '2024-04-13 01:11:41', 'orgus_coffee_table_thumb.jpg', 'orgus_coffee_table_1.jpg,orgus_coffee_table_2.jpg,orgus_coffee_table_3.jpg,orgus_coffee_table_4.jpg', 'Dispatched within 12-14 weeks', 'Plywood, Paper pulp, Kaolin mortar, Resin', 'H: 42cm (16\"), L: 146cm (57\"), D: 102cm (40\")');

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
