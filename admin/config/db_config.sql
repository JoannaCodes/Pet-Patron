-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 02:55 PM
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
  `pet_weight` decimal(11,2) NOT NULL,
  `pet_sterilization` varchar(255) NOT NULL,
  `pet_description` text NOT NULL,
  `pet_image` varchar(100) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pets`
--

INSERT INTO `tbl_pets` (`petId`, `rescueOrgId`, `pet_name`, `pet_age`, `pet_gender`, `pet_size`, `pet_weight`, `pet_sterilization`, `pet_description`, `pet_image`, `createdAt`, `updatedAt`) VALUES
(1, 3, 'Max', '2 years old', 'Male', 'Medium (Adult)', '67.00', 'Spayed', 'Arf! I\'m Max, a cheerful male Golden Retriever puppy. Bring me home today and I\'ll bring you heaps of joy. I fling a dashing brown coat and was born to parents of sweet and friendly personalities. I am great with kids and will arrive home child friendly, good natured, and well fed. If you call me yours and train me well, I’ll be your new best friend ready to join in whatever you are up to. Let\'s start making memories together!', '4.png', '2022-03-02 19:50:35', '2022-03-02 11:51:23'),
(2, 3, 'Charlie', '3 years old', 'Female', 'Medium Large (Adult)', '72.00', 'Spayed', 'Meet Charlie, a cheerful puppy who’s ready to take on the world. Charlie sports a devoted personality and carries a beautiful white coat. In addition, Charlie will arrive child friendly, good natured, and socialized. If you’re browsing puppies for adoption, be sure to check out this charming little pup.', '5.png', '2022-03-02 20:03:33', '2022-03-02 12:03:33'),
(3, 4, 'Mimi', '1 year old', 'Female', 'Medium Small (Adult)', '7.00', 'Spayed', 'Mimi is a cheerful & sporting a playful personality straight to the core! Mimi loves to cuddle, play and catch puppy snoozes. Whether it’s joining a rambunctious family or coming along side an active single, Mimi is sure to add a dose of fun. Mimi will arrive home child friendly, house trained, and energetic. In addition, Mimi wears a stunning bi-colored coat and is a winsome little fur-ball. Welcome Mimi home before she is gone and create happy memories!', '6.png', '2022-03-02 20:23:15', '2022-03-02 12:23:15'),
(4, 4, 'Kobe', '9 months old', 'Male', 'Medium (Young)', '28.00', 'Neutered', 'Meet Kobe, a clever dog who has been raised on love and will arrive at your front door good natured, socialized, and vaccinated. Kobe flashes a dashing bi-colored coat and is ready to make you smile. At the core, Kobe sports a sweet personality and can make a home nearly anywhere, provided there is lots of love and a healthy dose of exercise. We look forward to getting Kobe safely into his new home.', '7.png', '2022-03-02 20:30:53', '2022-03-02 12:30:53'),
(5, 5, 'Coco', '1 and half years old', 'Male', 'Medium (Young)', '22.00', 'Neutered', 'Pick me only if you\'re ready for loads of fun. I\'m Coco, a cuddly Corgi puppy. My coat is a stunning white with a touch of brown. My foster parents carry charming and devoted personalities and I’m possessive right to the core. You can count on me for a friendly wag, a happy hello and a kiss on the cheek. I\'ll arrive home energetic, pet friendly, healthy, and ready to bring you heaps of joy.', '8.png', '2022-03-02 20:35:15', '2022-03-02 12:35:15'),
(6, 5, 'Tangerine', '2 years old', 'Male', 'Medium (Adult)', '10.00', 'Neutered', 'Meet Tangerine! A relaxed cute cat who is lazy through and through. We’ve poured ourselves into raising this sweet little meowy and are excited to secure Tangerine a safe and loving home! Tangerine loves to play, snuggle, and be a favorite pal. With proper training, Tangerine will make a great family pet or join alongside a caring single. Showing off a stunning yellow coat, Tangerine comes from parents of charming and devoted personalities. When arriving home, Tangerine will arrive clean, well fed, and house trained. The bags are packed and Tangerine is ready to venture home!', '9.png', '2022-03-02 20:39:25', '2022-03-02 12:39:25'),
(7, 10, 'Mika', '1 year old', 'Female', 'Medium Small (Adult)', '44.00', 'Spayed', 'Meet Mika, a protective furry friend who’s ready to take on the world. Mika sports a mischievous personality and carries a beautiful bi-colored coat. In addition, Mika will arrive clean, well fed, and health tested. We\'ve poured ourselves into raising this little gem and promise you a puppy coming from parents of charming and devoted personalities. If you’re browsing for pets to adopt in Cavite, be sure to check out this charming little pup.', '10.png', '2022-03-02 20:47:28', '2022-03-02 12:47:28'),
(8, 10, 'Chuchu', '3 years old', 'Female', 'Small (Young)', '17.00', 'Spayed', 'Meet Chuchu, a protective Chihuahua puppy who has been raised with love and will arrive at your front door pet friendly, energetic, and spayed. Chuchu flashes a dashing golden coat and is ready to make you smile. At the core, Chuchu sports a mellow personality and can make a home nearly anywhere, provided there is lots of love and a healthy dose of exercise.', '11.png', '2022-03-02 21:13:39', '2022-03-02 13:13:39'),
(9, 11, 'Jakey', '10 months old', 'Male', 'Medium Small Tall (Adult)', '26.00', 'Neutered', 'Pick me only if you\'re ready for loads of fun. I\'m Jakey, a cuddly puppy. My coat is a stunning white! My parents carry friendly and charming personalities and I’m bright right to the core. You can count on me for a friendly wag, a happy hello and a kiss on the cheek. I\'ll arrive home loved, clean, socialized, and ready to bring you heaps of joy.  I\'m waiting to have a welcoming home!', '12.png', '2022-03-02 21:17:25', '2022-03-02 13:17:25'),
(10, 11, 'Kian', '9 months old', 'Male', 'Medium (Adult)', '8.00', 'Neutered', 'Kian is a goofy male cat. He loves to snuggle, romp, and catch puppy snoozes. Make Kian a member of your family and he will join right in on the fun. Or pair Kian alongside an active single and discover a loving companion. Make Kian yours and he will arrive at your door pre spoiled, clean, and socialized. We are delighted to present Kian and strive to match them with loving homes. Hope you’re ready for a bundle of cuteness!', '13.png', '2022-03-02 21:22:17', '2022-03-02 13:22:17'),
(11, 3, 'Lilo', '7 months old', 'Female', 'Medium (Young)', '7.00', 'Spayed', 'Meet Lilo! A sensitive cat who is trainable through and through. We’ve poured ourselves into raising this sweet little kitty and are excited to secure Lilo a safe and loving home! Lilo loves to play, snuggle, and be a favorite pal. With proper training, Lilo will make a great family pet or join alongside a caring single. Showing off a stunning yellow coat! When arriving home, Lilo will arrive house trained, loved, and good natured. The bags are packed and Lilo is ready to venture home!', '14.png', '2022-03-02 21:25:33', '2022-03-02 13:25:33'),
(12, 4, 'Enoki', '5 months old', 'Female', 'Small (Young)', '6.00', 'Spayed', 'Enoki is a cute female cat from Cavite. Enoki loves to snuggle, romp, and play. Make Enoki a member of your family and she will join right in on the fun. Or pair Enoki alongside an active single and discover a loving companion. Plus, Enoki flaunts a beautiful bi-colored coat and comes from parents of friendly and charming personalities. Make Enoki yours and she will arrive at your door healthy, loved, and well bred. ', '15.png', '2022-03-02 21:28:39', '2022-03-02 13:28:39');

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
  MODIFY `petId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
