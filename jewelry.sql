-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2019 at 11:17 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jewelry`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(20) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Anklets'),
(5, 'Bangles'),
(6, 'Bracelets'),
(7, 'Earrings');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `pass`) VALUES
(1, 'ibrahim', 'ibrahim@gmail.com', '0176634375', 'Rajshahi', '123456'),
(2, 'abdul bashir', 'bashir@gmail.com', '01765432345', 'Chapai Nawabganj', '123456'),
(3, 'abdul bashir', 'bashir@gmail.com', '0176543267', 'CNG', '123456'),
(4, 'saddam', 'saddam@gmail.com', '017865467', 'CNG', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(600) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `category`, `description`, `image`) VALUES
(16, 'Lorem ipsum dolor sit amet', '230', 'Anklets', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi u', '1.jpg'),
(17, 'laboris nisi ut aliquip ex ea', '340', 'Anklets', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi u', '2.jpg'),
(18, 'laboris nisi some ', '560', 'Bracelets', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi u', '3.jpg'),
(19, 'voluptate velit esse', '320', 'Earrings', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi u', 'bangles2.jpg'),
(21, 'tempor incididunt ut ', '540', 'Bracelets', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit', 'bracelet1.jpg'),
(22, 'YELLOW CHIMES Swarovski', '280', 'Bangles', 'Crystals from Swarovski - Made with Original Swarovski Elements. Comes in high quality packaging box perfect for gifting.Size-2.6( Adjustable)\r\nItalian design - 5 Layer Micro White Gold Plated. Thickness of plating: 0.1 Micron, whereas .03 Micron Plating available in Market\r\nSkin friendly - Alloy (97 percent tin and 3 percent bismuth). Nickel free and Lead free as per International Standards that makes it very skin friendly\r\nWarranty - Item comes with Yellow Chimes brand warranty. 6 months warranty is valid against any manufacturing defect\r\nGift for her! - Ideal Valentine, Birthday, Anniversar', 'bracelet3.jpg'),
(23, 'Diva Silver Alloy Anklet', '560', 'Anklets', 'Color: Silver\r\nStylish antique silver plated diamond studded anklets\r\nLength: 26 cm suitable for most feet\r\nA mere look will be enough for you to fall in love with these pretty anklets from charms. Made from antique silver plated alloy,\r\nCharms is a well known brand across fashion jewelry sector. Charms products are preferred by many designers, stars and celebrities. Charms fashion jewelry believes in making beauty and fashion a part of everybodys life.\r\nStay as it is, very demandable, light weight, easy to wear.\r\nIt is advisable to store jewellery in a zip lock pouch (air tight pouch), keep a', 'Anklets.jpg'),
(24, 'Silver Star Chain Anklet', '450', 'Anklets', 'Color: mainly silver. Material: durable metal alloy and rhinestone\r\nAnklet length: about 240-250mm. Suitable for women and girls to wear\r\nNice accessories to integrate jewelry case for girls and collectors\r\nMatch with suitable apparel for different occasion. Special design and unique structure, a popular item', 'Anklets2.jpg'),
(25, 'Gold Plated Green Stone', '780', 'Bangles', 'Key Specifications :\r\nâ€¢	Package details	:	2 Pairs Of Bangles\r\nâ€¢	Color	:	Green\r\nâ€¢	Work	:	Stone\r\nâ€¢	Product ID	:	2736622', 'Bangles.jpg'),
(26, 'Antiqe Bangles Color-Golden', '890', 'Bangles', 'Key Specifications :\r\nâ€¢	Package details	:	36 Bangles\r\nâ€¢	Color	:	Gold\r\nâ€¢	Work	:	Stone\r\nâ€¢	Product ID	:	419747\r\n', 'Bangles1.jpg'),
(27, 'Gold Plated Red Stone', '380', 'Bangles', '\r\nKey Specifications :\r\nâ€¢	Package details	:	1 Pair Of Bangles\r\nâ€¢	Work	:	American Diamonds\r\nâ€¢	Product ID	:	677058', 'Bangles4.jpg'),
(28, 'Cuff bracelet with Square', '350', 'Bracelets', 'PRODUCT DETAILS\r\nThe resurgence of the Square Gâ€”an archival design from the seventiesâ€”defines this collection, enriched with an intricate Arabesque pattern. The cut-out motif makes up a silver cuff bracelet, trimmed with a textured finish along the edges.', 'Bracelets.jpg'),
(29, 'Double G flower bracelet', '450', 'Bracelets', 'PRODUCT DETAILS\r\nThe resurgence of the Square Gâ€”an archival design from the seventiesâ€”defines this collection, enriched with an intricate Arabesque pattern. The cut-out motif makes up a silver cuff bracelet, trimmed with a textured finish along the edges.', 'Bracelets4.jpg'),
(30, 'Zaveri Pearls', '270', 'Earrings', 'PRODUCT DETAILS \r\n18K gold-plated jhumkas with ear chains, has artificial stones or beads\r\nSecured with a post and back closure\r\n\r\nMaterial & Care\r\nMaterial: Metal \r\nStone Type: Artificial Stones or Beads\r\nWipe with a clean cotton swab when needed', 'Earrings.png'),
(31, 'Gold-Plated Beaded Handcrafted', '260', 'Earrings', 'PRODUCT DETAILS \r\n18K gold-plated jhumkas with ear chains, has artificial stones or beads\r\nSecured with a post and back closure\r\n\r\nMaterial & Care\r\nMaterial: Metal \r\nStone Type: Artificial Stones or Beads\r\nWipe with a clean cotton swab when needed', 'Earrings1.jpg'),
(33, 'Era ring', '440', 'Earrings', 'some des..', 'Earrings2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(20) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(50) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `transection_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `customer_name`, `phone`, `address`, `product_id`, `product_name`, `price`, `order_id`, `payment_status`, `payment_method`, `transection_id`) VALUES
(40, 'fd', 'fg', 'fg', 23, 'Diva Silver Alloy Anklet', 635, 'gYllTU', 1, 'Bkash', 'dsdsads'),
(41, 'abdul bashir', '01521546798', 'CNG', 16, 'Lorem ipsum dolor sit amet', 305, 'NSpSci', 1, 'DBBL', 'fdgdf565467');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`) VALUES
(2, 'admin', 'admin@gmail.com', '123456'),
(3, 'Shimu', 'shimu@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
