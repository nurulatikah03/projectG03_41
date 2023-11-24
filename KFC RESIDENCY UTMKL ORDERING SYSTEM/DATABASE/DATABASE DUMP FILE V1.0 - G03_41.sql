-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 20, 2023 at 09:48 AM
-- Server version: 10.6.15-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u337610268_sd41g3`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `image_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `name`, `price`, `status`, `cust_email`, `image_path`) VALUES
(50, '15-pc Combo', 102.00, 'READY', 'qinutm@gmail.com', 'menu1-5.jpg'),
(54, '9-pc Combo', 69.00, 'REJECTED', 'qinutm@gmail.com', 'menu1-4.jpg'),
(70, '9-pc Combo', 69.00, 'PENDING PAYMENT', 'yinrenong@gmail.com', 'menu1-4.jpg'),
(94, 'Coca-Cola Zero Sugar (M)', 5.00, 'READY', 'niknadianatasya@graduate.utm.my', 'menu6-1.jpg'),
(104, '10-pc Wow Bucket', 79.00, 'READY', 'atikah9w2ser@gmail.com', 'menu1-2.jpg'),
(105, '10-pc Wow Bucket', 79.00, 'REJECTED', 'atikah9w2ser@gmail.com', 'menu1-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackcustomer`
--

CREATE TABLE `feedbackcustomer` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `time` text NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `feedbackcustomer`
--

INSERT INTO `feedbackcustomer` (`feedback_id`, `name`, `email`, `phone`, `time`, `message`) VALUES
(1000, 'ONG', 'qinutm@gmail.com', '012-3456789', '6:02 PM', 'NIce'),
(1001, 'OWQ', 'qinutm@gmail.com', '012-3456789', '6:03 PM', 'N1'),
(1004, 'Nurul Atikah', 'atikah9w2ser@gmail.com', '010-8376005', '12:00 AM', 'GOOD SERVICE'),
(1005, 'David', 'qinutm@gmail.com', '012-3456789', '10:40 AM', 'i have been scam, i want my money back!'),
(1006, 'ryan', 'ryan@gmail.com', '012-6832152', '12:01 PM', 'good'),
(1007, 'Nurul Atikah', 'atikah9w2ser@gmail.com', '010-8376005', '1:28 AM', 'good'),
(1008, 'Nadia', 'niknadianatasya@graduate.utm.my', '0189042908', '1:37 AM', 'Good !!!');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nameDish` varchar(50) NOT NULL,
  `dishPrice` double(100,2) NOT NULL,
  `dishType` varchar(50) NOT NULL,
  `aboutDish` varchar(50) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nameDish`, `dishPrice`, `dishType`, `aboutDish`, `image_path`) VALUES
(1, '1-pc Nasi Lemak KFC Combo', 18.00, 'Chicken', '1-pc Chicken (Regular/Spicy)', 'menu3-7.jpg'),
(2, '1-pc Rice Combo', 15.00, 'Chicken', '1-pc Chicken (Regular/Spicy)', 'menu3-9.jpg'),
(3, '10-pc Wow Bucket', 79.00, 'Family Buckets', '10-pc Chicken (Regular/Spicy)', 'menu1-2.jpg'),
(4, '15-pc Chicken', 93.00, 'Chicken', '15-pc Chicken (Regular/Spicy)', 'menu3-16.jpg'),
(5, '15-pc Combo', 102.00, 'Family Buckets', '15-pc Chicken (Regular/Spicy)', 'menu1-5.jpg'),
(6, '2-pc Chicken', 16.00, 'Chicken', '2-pc Chicken (Regular/Spicy)', 'menu3-12.jpg'),
(7, '2-pc Nasi Lemak KFC Combo', 21.00, 'Chicken', '2-pc Chicken (Regular/Spicy)', 'menu3-6.jpg'),
(8, '2-pc Rice Combo', 20.00, 'Chicken', '2-pc Chicken (Regular/Spicy)', 'menu3-8.jpg'),
(9, '2-pc Spicy BBQ Crunch Combo', 21.00, 'Chicken', '2-pc Spicy BBQ', 'menu3-2.jpg'),
(10, '3-pc Chicken', 49.99, 'Chicken', '3-pc Chicken (Regular/Spicy)', 'menu3-13.jpg'),
(11, '3-pc Crispy Tenders', 11.00, 'Nuggets & Tenders', '3-pc Tenders', 'menu8-11.jpg'),
(12, '3-pc Spicy BBQ Crunch Combo', 52.99, 'Chicken', '3-pc Spicy BBQ', 'menu3-1.jpg'),
(13, '5-pc Chicken', 87.99, 'Chicken', '5-pc Chicken (Regular/Spicy)', 'menu3-14.jpg'),
(14, '5-pc Combo', 44.00, 'Family Buckets', '5-pc Chicken (Regular/Spicy)', 'menu1-3.jpg'),
(15, '5-pc Spicy BBQ Crunch Combo', 87.99, 'Chicken', '5-pc Spicy BBQ ', 'menu3-3.jpg'),
(16, '5-pc Spicy Cheesy Potato Balls', 8.00, 'Add-on Sides', '5-pc Potato Balls', 'menu5-2.jpg'),
(17, '6-pc Nuggets', 12.00, 'Nuggets & Tenders', '6-pc Nuggets', 'menu8-8.jpg'),
(18, '6-pc Nuggets Combo', 17.00, 'Nuggets & Tenders', '6-pc Nuggets', 'menu8-4.jpg'),
(19, '6-pc Spicy Nuggets', 12.00, 'Nuggets & Tenders', '6-pc Nuggets', 'menu8-6.jpg'),
(20, '6-pc Spicy Nuggets Combo', 17.00, 'Nuggets & Tenders', '6-pc Nuggets', 'menu8-2.jpg'),
(21, '6-pc Wow Bucket', 49.00, 'Family Buckets', '6-pc Chicken (Regular/Spicy)', 'menu1-1.jpg'),
(22, '9-pc Chicken', 108.99, 'Chicken', '9-pc Chicken (Regular/Spicy)', 'menu3-15.jpg'),
(23, '9-pc Combo', 69.00, 'Family Buckets', '9-pc Chicken (Regular/Spicy)', 'menu1-4.jpg'),
(24, '9-pc Nuggets', 17.00, 'Nuggets & Tenders', '9-pc Nuggets', 'menu8-7.jpg'),
(25, '9-pc Nuggets Combo', 20.00, 'Nuggets & Tenders', '9-pc Nuggets', 'menu8-3.jpg'),
(26, '9-pc Spicy Nuggets', 17.00, 'Nuggets & Tenders', '9-pc Nuggets', 'menu8-5.jpg'),
(27, '9-pc Spicy Nuggets Combo', 20.00, 'Nuggets & Tenders', '9-pc Nuggets', 'menu8-1.jpg'),
(28, 'Cheezilla Box', 29.00, 'Box Meals', 'Cheezilla', 'menu2-9.jpg'),
(29, 'Cheezy Popcorn Bowl', 8.00, 'Add-on Sides', 'Popcorn Bowl', 'menu5-5.jpg'),
(30, 'Cheezy Twister', 16.00, 'Burgers & Twister', 'Twister', 'menu7-16.jpg'),
(31, 'Cheezy Twister Combo', 19.00, 'Burgers & Twister', 'Cheezy Twister', 'menu7-10.jpg'),
(32, 'Cheezy Wedges (L)', 8.00, 'Add-on Sides', 'Cheezy Wedges', 'menu5-3.jpg'),
(33, 'Coca-Cola', 7.00, 'Beverages', '1.5L Bottle', 'menu6-22.jpg'),
(34, 'Coca-Cola (L)', 6.00, 'Beverages', 'Larga Size', 'menu6-4.jpg'),
(35, 'Coca-Cola Zero Sugar', 7.00, 'Beverages', '1.5L Bottle', 'menu6-23.jpg'),
(36, 'Coca-Cola Zero Sugar (L)', 6.00, 'Beverages', 'Larga Size', 'menu6-5.jpg'),
(37, 'Coca-Cola Zero Sugar (M)', 5.00, 'Beverages', 'Medium Size', 'menu6-1.jpg'),
(38, 'Coleslaw (14oz)', 9.00, 'Add-on Sides', 'Coleslaw ', 'menu5-15.jpg'),
(39, 'Coleslaw (4oz)', 5.00, 'Add-on Sides', 'Coleslaw ', 'menu5-17.jpg'),
(40, 'Coleslaw (8oz)', 7.00, 'Add-on Sides', 'Coleslaw ', 'menu5-16.jpg'),
(41, 'Colonel Classic', 10.00, 'Burgers & Twister', 'Classic', 'menu7-11.jpg'),
(42, 'Colonel Classic Box', 19.00, 'Box Meals', 'Colonel Classic', 'menu2-5.jpg'),
(43, 'Colonel Classic Combo', 15.00, 'Burgers & Twister', 'Colonel Classic', 'menu7-6.jpg'),
(44, 'Colonel Rice', 5.00, 'Add-on Sides', 'Nasi', 'menu5-8.jpg'),
(45, 'Colonel Stacker', 13.00, 'Burgers & Twister', 'Stacker', 'menu7-12.jpg'),
(46, 'Colonel Stacker Box', 22.00, 'Box Meals', 'Colonel Stacker', 'menu2-6.jpg'),
(47, 'Crispy Tenders Combo A', 21.00, 'Nuggets & Tenders', 'Crispy Tenders', 'menu8-9.jpg'),
(48, 'Crispy Tenders Combo B', 22.00, 'Nuggets & Tenders', 'Crispy Tenders', 'menu8-10.jpg'),
(49, 'Dinner Plate (without drink)', 49.99, 'Chicken', '3-pc Chicken (Regular/Spicy)', 'menu3-10.jpg'),
(50, 'Dinner Plate Combo', 49.99, 'Chicken', '3-pc Chicken (Regular/Spicy)', 'menu3-4.jpg'),
(51, 'Fanta Strawberry', 7.00, 'Beverages', '1.5L Bottle', 'menu6-25.jpg'),
(52, 'Fanta Strawberry (L)', 6.00, 'Beverages', 'Larga Size', 'menu6-7.jpg'),
(53, 'Fanta Strawberry (M)', 5.00, 'Beverages', 'Medium Size', 'menu6-3.jpg'),
(54, 'Fries (L)', 8.00, 'Add-on Sides', 'Fries', 'menu5-10.jpg'),
(55, 'Fries (M)', 6.00, 'Add-on Sides', 'Fries', 'menu5-11.jpg'),
(56, 'Frosted Sweet Potato', 10.00, 'Add-on Sides', 'Sweet Potato', 'menu5-1.jpg'),
(57, 'Fuze Tea Ice Lemon Tea', 10.00, 'Beverages', '1.5L Bottle', 'menu6-26.jpg'),
(58, 'Hard Boiled Egg', 2.00, 'Add-on Sides', 'Egg', 'menu5-20.jpg'),
(59, 'Heaven & Earth Ice Lemon Tea (M)', 7.00, 'Beverages', 'Medium Size', 'menu6-9.jpg'),
(60, 'Heaven & Earth Ice Lemon Tea (S)', 6.00, 'Beverages', 'Small Size', 'menu6-13.jpg'),
(61, 'Hot Coffee', 5.00, 'Beverages', 'Hot', 'menu6-19.jpg'),
(62, 'Hot Milo', 7.00, 'Beverages', 'Hot', 'menu6-18.jpg'),
(63, 'Hot Tea', 5.00, 'Beverages', 'Hot', 'menu6-20.jpg'),
(64, 'Hot Teh Tarik', 5.00, 'Beverages', 'Hot', 'menu6-17.jpg'),
(65, 'Iced Milo (M)', 8.00, 'Beverages', 'Medium Size', 'menu6-8.jpg'),
(66, 'Iced Milo (S)', 6.00, 'Beverages', 'Small Size', 'menu6-12.jpg'),
(67, 'Jalapeno Cheese Sauce', 2.00, 'Add-on Sides', 'Cheese Sauce', 'menu5-22.jpg'),
(68, 'Kari Atuk', 3.00, 'Add-on Sides', 'Kari', 'menu5-21.jpg'),
(69, 'Kids Meal Combo A', 13.00, 'Kids Meals', '1-pc Chicken (Regular)', 'menu4-1.jpg'),
(70, 'Kids Meal Combo B', 13.00, 'Kids Meals', 'Cheezy Fries Bowl', 'menu4-2.jpg'),
(71, 'Kids Meal Combo C', 13.00, 'Kids Meals', '1-pc Chicken (Regular)', 'menu4-3.jpg'),
(72, 'Loaded Cheezy Fries', 8.00, 'Add-on Sides', 'Cheezy Fries', 'menu5-4.jpg'),
(73, 'Loaded Potato Bowl', 8.00, 'Add-on Sides', 'Potato Bowl', 'menu5-6.jpg'),
(74, 'Mineral Water', 4.00, 'Beverages', '600ml', 'menu6-21.jpg'),
(75, 'Minute Maid Refresh Orange', 10.00, 'Beverages', '1.5L Bottle', 'menu6-27.jpg'),
(76, 'Minute Maid Refresh Orange (M)', 7.00, 'Beverages', 'Medium Size', 'menu6-10.jpg'),
(77, 'Minute Maid Refresh Orange (S)', 6.00, 'Beverages', 'Small Size', 'menu6-10.jpg'),
(78, 'Nasi Lemak', 5.00, 'Add-on Sides', 'Nasi', 'menu5-7.jpg'),
(79, 'Popcorn Chicken', 13.00, 'Add-on Sides', 'Popcorn Chicken', 'menu5-9.jpg'),
(80, 'Red Bull Energy Drink', 8.00, 'Beverages', '250ml', 'menu6-16.jpg'),
(81, 'Sambal Sauce', 2.00, 'Add-on Sides', 'Sauce', 'menu5-24.jpg'),
(82, 'Satay Burger', 17.00, 'Burgers & Twister', 'Satay Burger', 'menu7-4.jpg'),
(83, 'Satay Burger Combo', 20.00, 'Burgers & Twister', 'Satay Burger', 'menu7-3.jpg'),
(84, 'Signature Box ', 22.00, 'Box Meals', 'Classic', 'menu2-4.jpg'),
(85, 'Sjora Mango Peach (M)', 7.00, 'Beverages', 'Medium Size', 'menu6-11.jpg'),
(86, 'Sjora Mango Peach (S)', 6.00, 'Beverages', 'Small Size', 'menu6-15.jpg'),
(87, 'Snack Plate (without drink)', 18.00, 'Chicken', '2-pc Chicken (Regular/Spicy)', 'menu3-11.jpg'),
(88, 'Snack Plate Combo', 20.00, 'Chicken', '2-pc Chicken (Regular/Spicy)', 'menu3-5.jpg'),
(89, 'Snacker Box', 16.00, 'Box Meals', 'Snacker', 'menu2-10.jpg'),
(90, 'Spicy BBQ Crunch Box Meals', 26.00, 'Box Meals', 'Spicy BBQ Crunch Box', 'menu2-1.jpg'),
(91, 'Spicy BBQ Sauce', 2.00, 'Add-on Sides', 'BBQ Sauce', 'menu5-23.jpg'),
(92, 'Sprite', 7.00, 'Beverages', '1.5L Bottle', 'menu6-24.jpg'),
(93, 'Sprite (L)', 6.00, 'Beverages', 'Larga Size', 'menu6-6.jpg'),
(94, 'Sprite (M)', 5.00, 'Beverages', 'Medium Size', 'menu6-2.jpg'),
(95, 'Stacker Box', 28.00, 'Box Meals', 'Stacker', 'menu2-8.jpg'),
(96, 'The One Box Combo A', 31.00, 'Box Meals', 'Combo A', 'menu2-2.jpg'),
(97, 'The One Box Combo B', 31.00, 'Box Meals', 'Combo B', 'menu2-3.jpg'),
(98, 'Twister Box', 22.00, 'Box Meals', 'Twister', 'menu2-11.jpg'),
(99, 'Wedges (L)', 8.00, 'Add-on Sides', 'Wedges', 'menu5-18.jpg'),
(100, 'Wedges (M)', 6.00, 'Add-on Sides', 'Wedges', 'menu5-19.jpg'),
(101, 'Whipped Potato (14oz)', 9.00, 'Add-on Sides', 'Whipped Potato', 'menu5-12.jpg'),
(102, 'Whipped Potato (4oz)', 5.00, 'Add-on Sides', 'Whipped Potato', 'menu5-14.jpg'),
(103, 'Whipped Potato (8oz)', 7.00, 'Add-on Sides', 'Whipped Potato', 'menu5-13.jpg'),
(104, 'Zinger Cheezilla', 23.00, 'Burgers & Twister', 'Cheezilla', 'menu7-15.jpg'),
(105, 'Zinger Cheezilla Combo', 27.00, 'Burgers & Twister', 'Zinger Cheezilla', 'menu7-9.jpg'),
(106, 'Zinger Cheezy', 17.00, 'Burgers & Twister', 'Cheezy', 'menu7-13.jpg'),
(107, 'Zinger Cheezy Box', 24.00, 'Box Meals', 'Zinger Cheezy', 'menu2-7.jpg'),
(108, 'Zinger Cheezy Combo', 21.00, 'Burgers & Twister', 'Zinger Cheezy', 'menu7-5.jpg'),
(109, 'Zinger Classic Combo', 19.00, 'Burgers & Twister', 'Zinger Classic', 'menu7-5.jpg'),
(110, 'Zinger Stacker', 21.00, 'Burgers & Twister', 'Stacker', 'menu7-14.jpg'),
(111, 'Zinger Stacker Combo', 25.00, 'Burgers & Twister', 'Zinger Stacker', 'menu7-8.jpg'),
(112, 'Zinger SurfN Turf Burger', 22.00, 'Burgers & Twister', 'Turf Burger', 'menu7-2.jpg'),
(113, 'Zinger SurfN Turf Burger Combo', 26.00, 'Burgers & Twister', 'Turf Burger', 'menu7-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `firstName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `lastName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `userType` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `phoneNum` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `email`, `password`, `firstName`, `lastName`, `userType`, `phoneNum`) VALUES
(1, 'lingsha123456@gmail.com', '123456', 'ONG', 'WYE QIN', 'STAFF', '012-3456788'),
(2, 'ongwyeqin0509@gmail.com', '123456', 'ONG', 'WYE QIN', 'ADMIN', '012-3456789'),
(1007, 'yinrenong@gmail.com', 'ong123', 'sisi', 'ryan', 'CUSTOMER', '0174068988'),
(1009, 'qinutm@gmail.com', '123', 'David', 'WYE QIN', 'CUSTOMER', '012-3456789'),
(1010, 'abutalib11658@gmail.com', '123456', 'Ahmad', 'Abu', 'STAFF', '012-3456789'),
(1011, 'weijin0728@gmail.com', 'Ongwyeqin', 'Ong ', 'Wye Qin', 'CUSTOMER', '01135851728'),
(1012, 'wingshern99532@gmail.com', '123456', 'ong', 'wing shern', 'CUSTOMER', '0105347991'),
(1013, 'atikah9w2ser@gmail.com', '123', 'Nurul', 'Atikah', 'CUSTOMER', '0108376005'),
(1014, 'niknadianatasya@graduate.utm.my', '0902', 'Nik', 'Nad', 'CUSTOMER', '0123456789'),
(1015, 'nurul03atikah@gmail.com', '121212', 'Rania', 'Batrisyia', 'CUSTOMER', '0198542086'),
(1016, 'atikah03@graduate.utm.my', '111', 'Rasyikin', 'Amira', 'CUSTOMER', '0179642082'),
(1017, 'ndiantsya92@gmail.com', '0902', 'Nadia', 'Natasya', 'STAFF', '0189042908'),
(1018, 'soyeo0099@gmail.com', '123', 'Mohd', 'Adam', 'CUSTOMER', '010-8376005');

-- --------------------------------------------------------

--
-- Table structure for table `user_otp`
--

CREATE TABLE `user_otp` (
  `email` varchar(50) NOT NULL,
  `OTP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `user_otp`
--

INSERT INTO `user_otp` (`email`, `OTP`) VALUES
('satishwaran092@gmail.com', '173994'),
('satishwaran092@gmail.com', '429398'),
('satishwaran092@gmail.com', '174384'),
('satishwaran092@gmail.com', '661698'),
('satishwaran092@gmail.com', '123340');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbackcustomer`
--
ALTER TABLE `feedbackcustomer`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `feedbackcustomer`
--
ALTER TABLE `feedbackcustomer`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1019;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
