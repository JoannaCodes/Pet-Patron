-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 12:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_config`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `username`, `email`, `password`, `createdAt`, `updatedAt`) VALUES
(1, 'admin1', 'admin1@test.com', '12345', '2022-02-18 10:46:15', '2022-02-18 02:46:15'),
(2, 'admin2', 'admin2@test.com', '67890', '2022-02-18 10:46:29', '2022-02-18 02:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetails`
--

CREATE TABLE `tbl_orderdetails` (
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `orderId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pets`
--

CREATE TABLE `tbl_pets` (
  `petId` int(11) NOT NULL,
  `rescueOrgId` int(11) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `pet_age` varchar(255) NOT NULL,
  `pet_gender` varchar(255) NOT NULL,
  `pet_size` varchar(255) NOT NULL,
  `pet_weight` decimal(11,0) NOT NULL,
  `pet_sterilization` varchar(255) NOT NULL,
  `pet_description` text NOT NULL,
  `pet_image` varchar(100) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `productId` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_stocks` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`productId`, `product_name`, `product_image`, `product_description`, `product_price`, `product_stocks`, `createdAt`, `updatedAt`) VALUES
(100, 'Cat Food', 'cat_food.jpg', 'Nutritious and dry food for cats. \r\n\r\n[NOTE: Royal Canin is the available in stock.]', 899, 10, '2022-02-28 17:32:50', '2022-02-28 09:32:50'),
(103, 'Dog Bath Set', 'dog.jpg', 'The Dog Shampoo and Conditioner set made with natural ingredients. Removes ticks, fleas and mites. Safe for regular use.', 280, 10, '2022-02-28 17:35:00', '2022-02-28 09:35:00'),
(105, 'Feather Cat Toy', 'cats_toy1.jpg', 'Feather toy for your furry friend to play.', 120, 40, '2022-02-28 17:39:01', '2022-02-28 09:39:01'),
(106, 'Dog Chew Toy', 'dogs_toy.jpg', 'Chew toys for dogs can help stimulation and relief from boredom.', 120, 50, '2022-02-28 18:02:18', '2022-02-28 10:02:18'),
(107, 'Dog Chew Stuffed Toy', 'dogs_toy1.jpeg', 'Other dog chew toys with assorted design with affordable price.', 80, 50, '2022-02-28 18:09:48', '2022-02-28 10:09:48'),
(108, 'Pet Clothes', 'pet_clothes.jpeg', 'Dress up your furry friend with cute and lovely clothes.\r\n\r\n[NOTE: Small sizes are only available in stock.]', 150, 50, '2022-02-28 18:12:23', '2022-02-28 10:12:23'),
(109, 'Pet Collar', 'pet_collar.jpg', 'Collar can be used for identification, fashion, or protection. Identification tags and medical information are often placed on dog and cat collars!\r\n', 75, 100, '2022-02-28 18:15:24', '2022-02-28 10:15:24'),
(110, 'Cat Bath Set', 'cat_bath.jpg', 'The Cat Shampoo and Conditioner set made with natural ingredients. Removes ticks, fleas and mites. Safe for regular use. [INGREDIENTS: Organic Shampoo Base, Neem Oil Extract, Rosemary Oil Extract, Oatmeal Oil Extract, and fragrance.]', 250, 10, '2022-02-28 18:19:25', '2022-02-28 10:30:11'),
(111, 'Dog Food', 'dogfood.jpg', 'Nutritious and dry food for dogs.\r\n\r\n[NOTE: Royal Canin is the available in stock.]', 999, 10, '2022-02-28 18:31:43', '2022-02-28 10:32:37'),
(112, 'Mouse Cat Toy', 'cats_mouse_toy.jpg', 'Assorted and different cute designs of stuffed toys with catnip for your furry friend to play.', 60, 50, '2022-02-28 18:33:42', '2022-02-28 10:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rescueorg`
--

CREATE TABLE `tbl_rescueorg` (
  `rescueOrgId` int(11) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `org_address` varchar(255) NOT NULL,
  `org_description` text NOT NULL,
  `org_contact` varchar(11) NOT NULL,
  `org_email` varchar(255) NOT NULL,
  `org_process` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rescueorg`
--

INSERT INTO `tbl_rescueorg` (`rescueOrgId`, `org_name`, `org_address`, `org_description`, `org_contact`, `org_email`, `org_process`, `createdAt`, `updatedAt`) VALUES
(3, 'Happy Paw Rescue', '4 Veterans RoadVeterans Center 1630', 'We rescue take unwanted, abandoned, abused, or stray pets and attempt to find suitable homes for them. We are dedicated to pet adoption.', '09128384863', 'happypawrescue@gmail.com', 'Submit Application, Interview, Pay Fee (Php200), Home Check', '2022-02-18 21:47:47', '2022-03-02 11:08:51'),
(4, 'Wagging Tail Rescue', '3F Hildevanne Food Corporation, 254 P. Burgos', 'We help and rescue stray pet adn find them new and suitable homes.', '09987654321', 'wagtailrescue@gmail.com', 'Submit Application, Interview, Home Check, Pay Fee (Php100)', '2022-02-18 21:49:33', '2022-03-02 11:08:35'),
(5, 'Sweet Whiskers Rescue', 'Lepanto Tiles, Silangan I', 'We provide shelter to stray, unwanted, abused pet. We promote pet adoption. Help our cause by donating what you can give.', '09978221930', 'sweetwhiskers@gmail.com', 'Submit Application, Interview, Home Check', '2022-02-18 21:52:46', '2022-03-02 11:08:04'),
(10, 'Stray Worth Saving', 'Davao City, Philippines', 'http://www.straysworthsaving.org/', '09176363824', '', 'You can check their facebook page for more information.\r\n\r\nClick here: https://web.facebook.com/straysworthsaving', '2022-03-01 23:34:10', '2022-03-02 11:10:36'),
(11, 'The Cat House', 'Cavite, Philippines', 'Home of Rescue Puspins and Aspins.', '09062352037', 'solaandsiblings@gmail.com', 'You can check their facebook page for more information. \r\n\r\nClick here: https://web.facebook.com/solaandsiblings', '2022-03-01 23:37:51', '2022-03-01 15:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_contact` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  ADD KEY `orderId` (`orderId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `productId` (`userId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `tbl_pets`
--
ALTER TABLE `tbl_pets`
  ADD PRIMARY KEY (`petId`),
  ADD KEY `rescueOrgid` (`rescueOrgId`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `tbl_rescueorg`
--
ALTER TABLE `tbl_rescueorg`
  ADD PRIMARY KEY (`rescueOrgId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pets`
--
ALTER TABLE `tbl_pets`
  MODIFY `petId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `tbl_rescueorg`
--
ALTER TABLE `tbl_rescueorg`
  MODIFY `rescueOrgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  ADD CONSTRAINT `tbl_orderdetails_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `tbl_orders` (`orderId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_orderdetails_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `tbl_products` (`productId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD CONSTRAINT `tbl_orders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `tbl_users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pets`
--
ALTER TABLE `tbl_pets`
  ADD CONSTRAINT `tbl_pets_ibfk_1` FOREIGN KEY (`rescueOrgId`) REFERENCES `tbl_rescueorg` (`rescueOrgId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
