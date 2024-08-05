-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2024 at 12:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `a_name` varchar(50) DEFAULT NULL,
  `a_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `a_name`, `a_password`) VALUES
(1, 'admin', '$2y$10$0nBhuAV0bBLCQxfPu/E5LuHIWF.yH54xrQHWiZGQwotBHBGzQI3Zi'),
(2, 'aayus', '$2y$10$VZmzcpg/jCj9395jH7akdePNA8t79KV67uAibIr3AaTe6G6dNXJ12');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `aid` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `prid` int(11) DEFAULT NULL,
  `a_date` varchar(10) DEFAULT NULL,
  `a_time` varchar(10) DEFAULT NULL,
  `acceptance` varchar(8) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_name` varchar(20) NOT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_name`, `message`) VALUES
('Aayus Prasai', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `message`, `is_read`, `created_at`) VALUES
(2, 3, 'Your appointment request has been accepted.', 1, '2024-07-30 05:52:30'),
(3, 3, 'Your appointment request has been accepted.', 1, '2024-07-30 07:49:45'),
(4, 3, 'Your appointment request has been accepted.', 1, '2024-07-30 07:56:43'),
(8, 3, 'Your order product is available.', 1, '2024-07-30 13:20:44'),
(9, 3, 'Your order product is available.', 1, '2024-07-31 01:53:14'),
(10, 3, 'Your order product is not availabel.', 1, '2024-07-31 01:53:22'),
(11, 3, 'Your order product is available.', 1, '2024-07-31 16:05:00'),
(12, 3, 'Your appointment request has been accepted.', 1, '2024-08-01 03:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `availability` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `uid`, `pid`, `quantity`, `sid`, `availability`) VALUES
(10, 3, 23, 8, 5, 'true'),
(12, 3, 22, 1, 5, 'true'),
(13, 3, 26, 1000, 5, 'true'),
(14, 3, 22, 1, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `prod_name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `p_image` varchar(255) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `prod_category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `prod_name`, `price`, `p_image`, `sid`, `prod_category`) VALUES
(1, 'Merced Glider, Performance Heathered Basketweave, Alabaster', 65000.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/ChairFinal1.jpg', 7, 'Chair'),
(2, 'Flash Furniture Modern Dark Natural Accent Chair in Brown', 90099.99, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/ChairFinal2.jpg', NULL, 'Chair'),
(3, '360° Swivel Makeup Home Office Chair, PU Leather Vanity Chair Upholstered Chair with Black Metal Legs - Grey', 65000.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/ChairFinal3.jpg', NULL, 'Chair'),
(4, 'Becall Tall Dining Chair, Lt Green, Furniture', 50000.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/ChairFinal4.jpg', NULL, 'Chair'),
(8, 'Syosset Modern Faux Leather 3 Seater Sofa with Pillows, Dark Brown and Silver', 80000.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/Finalsofa1.png', NULL, 'Sofa'),
(9, 'Bagan Mid-Century Modern Upholstered 3 Seater Sofa, Navy Blue + Dark Walnut', 90000.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/FinalSofa2.jpg', NULL, 'Sofa'),
(10, 'Julian Velvet Upholstered Loveseat, Gray, Chrome Base', 100000.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/FinalSofa3.jpg', NULL, 'Sofa'),
(11, 'Knox 84\" Modern Farmhouse Sofa, Deep Brown Performance Velvet', 120000.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/FinalSofa4.jpg', NULL, 'Sofa'),
(12, 'Vince Multifunctional Extendable White Console Table, Large Size Dining Table - The Pop Home', 140000.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/FinalTable1.jpg', NULL, 'Table'),
(13, 'Mid Century Modern Farmhouse Ash Wood Rectangular Dining Table for 6 with Geometric Design Table Legs', 150000.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/FinalTable2.jpg', NULL, 'Table'),
(14, 'PCS Dining Table Set, Rectangular Dining Table with Trestle Table Base and 4 Upholstered Chairs-ModernLuxe', 180000.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/FinalTable3.jpg', NULL, 'Table'),
(15, 'Hokku Designs Kanya Round Wood in Brown | 33.46 H x 51.18 W x 51.18 D in | Way-fair', 200000.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/FinalTable4.jpg', NULL, 'Table'),
(20, ' Arghakhachi Cement', 640.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/arghakhanchi-opc-cement-2.jpg', 5, 'Cement'),
(21, 'Brij Cement', 770.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/Brij Cement.png', 5, 'Cement'),
(22, ' Ambe Cement', 680.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/Ambe Cement.jpeg', 5, 'Cement'),
(23, 'Agni Cement', 830.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/Agni Cement.png', 5, 'Cement'),
(25, 'Brick Bhaktapur 1 No [ NT ] ', 16.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/19491-brick-bhaktapur-1-no-nt-19491-1646891248-54705587.jpg', 5, 'Bricks'),
(26, 'HT Brick No. 1', 17.50, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/HT bricks.jpg', 5, 'Bricks'),
(27, 'Mamta Clay Red Brick', 7.00, '/xampp/htdocs/GHAR_1/product_fetch/Productimage/mnamata .png', NULL, 'Bricks');

-- --------------------------------------------------------

--
-- Table structure for table `professionals`
--

CREATE TABLE `professionals` (
  `prid` int(11) NOT NULL,
  `prof_name` varchar(50) DEFAULT NULL,
  `prof_image` varchar(255) DEFAULT NULL,
  `phone_no` varchar(10) DEFAULT NULL,
  `qualification` varchar(160) DEFAULT NULL,
  `operating_area` varchar(70) DEFAULT NULL,
  `prof_email` varchar(255) DEFAULT NULL,
  `prof_password` varchar(255) DEFAULT NULL,
  `prof_role` varchar(20) DEFAULT NULL,
  `experience` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professionals`
--

INSERT INTO `professionals` (`prid`, `prof_name`, `prof_image`, `phone_no`, `qualification`, `operating_area`, `prof_email`, `prof_password`, `prof_role`, `experience`) VALUES
(5, 'Ram Yadav', 'C:/xampp/htdocs/GHAR_1/prof_image/387170404_797450775517488_7132915326238632507_n.jpg', '9840469888', 'B Arch', 'Hatiban', 'ramyadav@gmail.com', '$2y$10$G.cVeli2bBRXeYZfD9I9Re1uRGO6v4bMn0wBm/bGTYDRTp5DToNi6', 'Architect', '8 '),
(7, 'Ram Charan', 'C:/xampp/htdocs/GHAR_1/prof_image/ramcharan.png', '84145489', 'BE Civil', 'imadol', 'charam@gmail.com', '$2y$10$i.a67183uv.xzs2hmU4I8eoCjNDV/GoBkxNVX9IyuP3uS902lTLiy', 'Engineer', '9');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sid` int(11) NOT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `s_address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `s_password` varchar(255) DEFAULT NULL,
  `s_email` varchar(255) DEFAULT NULL,
  `category` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sid`, `s_name`, `s_address`, `contact_no`, `s_password`, `s_email`, `category`) VALUES
(5, 'Cement Supplies Nepal', 'Maitidevi, Kathmandu', '5288336', '$2y$10$V7Bz87FdQd3hKevc0oHJWuB72IOYb7IZalFgE1/pbsjDHua6wEzpm', 'cement@gmail.com', 'Cement Dealer'),
(6, 'Ithabhatta Bhaktapur Distributors', 'Ithachhen, Bhaktapur', '5589223', '$2y$10$yp3uMugoKAKhwzHy2FAIE.ftycQlarvBU3yl1nE/zUGmY6m/VPZyu', 'ithabhatta@gmail.com', 'Bricks Deport'),
(7, 'Furniture Hub Nepal', 'Charkhal, Kathmandu', '55778896', '$2y$10$RkA8v1gEHtaaMz.44xbOdepft1kgwhgGolNrbHs4DJ6lNsUiIqefq', 'furniture@gmail.com', 'Furniture');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `u_name` varchar(255) DEFAULT NULL,
  `u_email` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `u_address` varchar(255) DEFAULT NULL,
  `u_password` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `u_name`, `u_email`, `phone_no`, `u_address`, `u_password`, `gender`) VALUES
(2, 'Hari Basnet', 'hari@gmail.com', '98543444000', 'Balkot', '$2y$10$6ZXweS9mdN9d2aNf2WUQvuURPcCNRg/Vv3qZg5N6ddaSfDkERzjYq', 'Male'),
(3, 'raman bahadur', 'raman@gmail.com', '9840469888', 'khanikhola', '$2y$10$1ax3K6mLAvMMVC8VQfwx/eH5zXi.OXVoHy1vpQMYLNhq515hoQFIa', 'Male'),
(4, 'tilak malla', 'tilak@gmail.com', '9856123622', 'imaldol', '$2y$10$6xgVcGBrvnTkZBkErZ32/.kU8m7e/C8V0cDrg0VJkzKjWqSuhR7au', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `aid` (`aid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `appointment_ibfk_2` (`prid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cid` (`cid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_name`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`),
  ADD UNIQUE KEY `oid` (`oid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `pid` (`pid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `professionals`
--
ALTER TABLE `professionals`
  ADD PRIMARY KEY (`prid`),
  ADD UNIQUE KEY `prid` (`prid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `sid` (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD UNIQUE KEY `u_email` (`u_email`),
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `professionals`
--
ALTER TABLE `professionals`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`prid`) REFERENCES `professionals` (`prid`) ON DELETE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`sid`) REFERENCES `supplier` (`sid`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `supplier` (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
