-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 01:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logitrack cartsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(68, 'Apple iPhone X', '90000', '../images/iphone_x.jpg', 3, '270000', 'p1000'),
(69, 'Home sound system', '3500', '../images/theatre.jpg', 3, '10500', 'TH1000'),
(70, 'TVs', '47799', '../images/tv.jpg', 1, '47799', 'T1000'),
(71, 'LG v30', '65000', '../images/lg_v30.jpg', 4, '260000', 'p1002');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(12, 'sydney omanwa nyakerario', 'polland@gmail.com', '0723123123', '1234 brooklyn', 'netbanking', 'Apple iPhone X(1)', '90000'),
(13, 'sydney omanwa nyakerario', 'polland@gmail.com', '0723123123', '1234 brooklyn', 'cards', 'Huawei 10 Pro(1), Apple iPhone X(1)', '165000'),
(14, 'polland onderi', 'pollandsabisa@gmail.com', '1234', 'gtyu78ojkyut', 'netbanking', 'LG v30(1)', '65000'),
(15, 'sydney omanwa nyakerario', 'pollandsabisa@gmail.com', '123451234', '1234 brooklyn', 'Mpesa', 'LG v30(1), Foundation brush(1)', '65800'),
(16, 'sydney omanwa nyakerario', 'polland@gmail.com', '0723123123', '1234 brooklyn', 'Mpesa', 'Foundation brush(1), One Plus 6(1), Home sound system(1), LG v30(1)', '104300'),
(17, 'maxwel okari', 'maxwellokari01@gmail.com', '0769906883', 'jhgfddvvgh', 'Mpesa', 'Apple iPhone X(1), Huawei 10 Pro(1)', '165000');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Apple iPhone X', '90000', 1, '../images/iphone_x.jpg', 'p1000'),
(2, 'Huawei 10 Pro', '75000', 1, '../images/huawei_mate10_pro.jpg', 'p1001'),
(3, 'LG v30', '65000', 1, '../images/lg_v30.jpg', 'p1002'),
(4, 'MI Note 5 Pro', '15000', 1, '../images/mi_note_5_pro.jpg', 'p1003'),
(5, 'Nokia 7 Plus', '25000', 1, '../images/nokia_7_plus.jpg', 'p1004'),
(6, 'One Plus 6', '35000', 1, '../images/one_plus_6.jpg', 'p1005'),
(7, 'Zenfone Max Pro', '15000', 1, '../images/zenfone_m1.jpg', 'p1006'),
(9, 'Samsung A50', '25000', 1, '../images/samsung_a50.jpg', 'p1007'),
(10, 'Foundation brush', '800', 1, '../images/brush.jpg', 'B1000'),
(11, 'Drawn portraits', '25000', 1, '../images/index2.jpg', 'IN1000'),
(12, 'Home sound system', '3500', 1, '../images/theatre.jpg', 'TH1000'),
(14, 'Varnish', '600', 1, '../images/varnish.jpg', 'V1000'),
(15, 'TVs', '47799', 1, '../images/tv.jpg', 'T1000'),
(16, 'Electrical extension', '1100', 1, '../images/extension.jpg', 'X1000'),
(17, 'Foundation package', '2500', 1, '../images/foundation.jpg', 'F1000'),
(18, 'Electric Kettle', '899', 1, '../images/kettle.jpg', ' E1000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
