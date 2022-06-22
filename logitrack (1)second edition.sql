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
-- Database: `logitrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(25) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `produce_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `product_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `connectclients`
--

CREATE TABLE `connectclients` (
  `id` int(10) NOT NULL,
  `fullname` varchar(35) NOT NULL,
  `email` varchar(22) NOT NULL,
  `weight` int(255) NOT NULL,
  `space` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `connectclients`
--

INSERT INTO `connectclients` (`id`, `fullname`, `email`, `weight`, `space`, `description`, `photo`, `date`, `timestamp`) VALUES
(1, 'kaka j', 'polland@gmail.com', 768, '342 m*2', 'The rates are going to be needed early enough to avoid any problems', 'elisa-kennemer-0TdrHK0po7I-unsplash.jpg', '2021-10-06', '2022-06-12 18:40:09.372860'),
(2, 'kaka j', 'polland@gmail.com', 768, '342 m*2', 'The rates are going to be needed early enough to avoid any problems', 'elisa-kennemer-0TdrHK0po7I-unsplash.jpg', '2021-10-06', '2022-06-13 11:01:21.893082'),
(3, 'kaka j', 'polland@gmail.com', 768, '342 m*2', 'The rates are going to be needed early enough to avoid any problems', 'elisa-kennemer-0TdrHK0po7I-unsplash.jpg', '2021-10-06', '2022-06-13 11:02:46.189826'),
(4, 'kaka j', 'polland@gmail.com', 768, '342 m*2', 'The rates are going to be needed early enough to avoid any problems', 'elisa-kennemer-0TdrHK0po7I-unsplash.jpg', '2021-10-06', '2022-06-13 11:09:21.454457'),
(5, 'jj', 'polland@gmail.com', 987, '43', 'o79sa53s65u', 'camilo-fierro-z7rcwqCi77s-unsplash.jpg', '2022-05-31', '2022-06-15 12:24:47.292984'),
(6, 'popo', 'Vnyagaka001@gmail.com', 123, '654m*3', 'jkdiorjgrbjvncnD cnid', 'ALFRED KIOKO CURRICULUM VITAE.docx', '2022-06-09', '2022-06-19 19:45:11.753493');

-- --------------------------------------------------------

--
-- Table structure for table `discovery`
--

CREATE TABLE `discovery` (
  `id` int(10) NOT NULL,
  `your_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `your_email` varchar(255) NOT NULL,
  `company_` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discovery`
--

INSERT INTO `discovery` (`id`, `your_name`, `phone_number`, `your_email`, `company_`) VALUES
(1, 'jackton ojode', '123456', 'jastu@gmail.com', 'multimedia'),
(2, 'jackton ojode', '123456', 'jastu@gmail.com', 'multimedia'),
(4, 'sarah gICHIA', '0798989898', 'sarah@gmail.com', 'saraaaahglitterz');

-- --------------------------------------------------------

--
-- Table structure for table `orderqueries`
--

CREATE TABLE `orderqueries` (
  `id` int(255) NOT NULL,
  `productpath` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderqueries`
--

INSERT INTO `orderqueries` (`id`, `productpath`, `productname`, `productprice`) VALUES
(6, '../images/tv.jpg', 'TVs', '47899'),
(7, '../images/extension.jpg', 'Extension cable', '899'),
(8, '../images/ketttle.jpg', 'Electric Kettle', '799'),
(9, '../images/foundation.jpg', 'Foundation Packet', '1599');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(100) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Electric Kettle', '899', '../images/kettle.jpg', '	E1000'),
(2, 'lipstick variety', '1500', '../images/lipstick.jpg', 'L1000'),
(3, 'Foundation package', '2500', '../images/foundation.jpg', 'F1000'),
(4, 'Electrical extension', '1100', '../images/extension.jpg', 'X1000'),
(5, 'TVs', '47799', '../images/tv.jpg', 'T1000'),
(6, 'Varnish', '600', '../images/varnish.jpg', 'V1000'),
(7, 'Foubdation brush', '800', '../images/brush.jpg', 'B1000'),
(8, 'Home sound system', '3500', '../images/theatre.jpg', 'TH1000'),
(9, 'Drawn portraits', '25000', '../images/index2.jpg', 'IN1000');

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE `todolist` (
  `id` int(25) NOT NULL,
  `what` varchar(10) NOT NULL,
  `who` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `additional` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todolist`
--

INSERT INTO `todolist` (`id`, `what`, `who`, `date`, `time`, `additional`) VALUES
(2, '', '', '0000-00-00', '00:00:00.000000', ''),
(3, '', '', '0000-00-00', '00:00:00.000000', ''),
(4, '', '', '0000-00-00', '00:00:00.000000', ''),
(5, '', '', '0000-00-00', '00:00:00.000000', ''),
(6, '', '', '0000-00-00', '00:00:00.000000', ''),
(7, '', '', '0000-00-00', '00:00:00.000000', ''),
(8, '', '', '0000-00-00', '00:00:00.000000', ''),
(9, '', '', '0000-00-00', '00:00:00.000000', ''),
(10, '', '', '0000-00-00', '00:00:00.000000', ''),
(11, 'go home', '', '0000-00-00', '00:00:00.000000', ''),
(12, 'go home', 'i am', '0000-00-00', '00:20:22.000000', 'nothing now'),
(13, 'go home', 'i am', '0000-00-00', '00:20:22.000000', 'jhftyuuij');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `yourname` varchar(255) NOT NULL,
  `phonenumber` varchar(45) NOT NULL,
  `company` varchar(45) NOT NULL,
  `emailadd` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `confirmpassword` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `yourname`, `phonenumber`, `company`, `emailadd`, `password`, `confirmpassword`) VALUES
(1, 'sydney omanwa nyakerario', '123456789', 'jjjjjjjjjjjjjjjjj', 'Vnyagaka001@gmail.com', '$2y$10$NbpOk/G2zQ3SpXgcWSPIsuOBiC0F', ''),
(2, 'jackton oloo', '1231234', 'Pan African industries', 'Vnyagaka001@gmail.com', '$2y$10$eIb9KCKe8UX2qjHOjKvsEOGQzDcN', ''),
(5, 'leah Aoko', '987654', 'kawasaki', 'eeeeee@gmaail.com', '$2y$10$7p1O4cpv3sF5UBLJbNHf5Ov7OTWy', ''),
(6, 'samuel onderi', '0123456789', 'Jackton technologies', 'Vnyagaka001@gmail.com', '$2y$10$e/DIPtC5hSmyrX6jWYhBF.gn7bSY', ''),
(7, 'imaniAmani', '9879876543', '', 'pollandsabisa@gmail.com', '$2y$10$1NWIKv2qR4Es1mkNrgjcTOQ4rxKP', ''),
(8, 'kaka sabisa', '0976431234', 'triple protection', 'protection@gmail.com', '$2y$10$Y1bQZGqQSvQl9ZiDrPybReWbfzwa', ''),
(9, 'sheikh Abdul', '12341234', 'she@gmail.com', 'she@gmail.com', '$2y$10$cxlsWgL5rJoJ5buX2UohpOCYqxQO', ''),
(10, ' brian onderi', '0112211221122', 'hearts.com', 'brayoo@gmail.com', '$2y$10$KhumUbuXpYHTVj01KBu2Pevb/fBi', ''),
(11, 'Arimis jelly', 'kebs@gmail.com', 'kebs arimis', 'kebs@gmail.com', '$2y$10$eCZaqZYxRdIldL7PcYqOIeN8Vc73', ''),
(13, 'polland sabisa', '0795836437', 'gigtek', 'pollandsabisa@gmail.com', '$2y$10$lkRMmDcH81UO4Lts26.qz.Pm0HXQ', ''),
(14, 'polland sabisa', '0795836437', 'ugali industries', 'pollandsabisaproject@gmail.com', '$2y$10$tRZonT8HRvxAnz6yNp1D0O.I73EF', ''),
(15, 'Shelton', '0741741381', 'sydney', 'sheltonnito@gmail.com', '$2y$10$hCSQGVSHYhAUGIKVV1Z1L.f54Hdm', ''),
(16, 'sydney omanwa nyakoiba', '0723123123', 'hfcyvu', 'polland@gmail.com', '6d00603d3fc4e6fed4218dbf12774ce3', ''),
(17, 'Jeanne Vizigwa', '980980254', 'multiclothing', 'vizigwa@gmail.com', 'a9f7b2e0f20f6f5f6ef9e57ee4964889', ''),
(18, 'kaka sabisa', '0795836437', 'kakai industries', 'kakai@gmail.com', '6ca9a5dedb2d68c5ea83f9fa8e8aa250', ''),
(19, 'joash masongo', '1231234', 'joasho', 'joasho@gmail.com', 'ca7d0d6dd74347860b921d5d281608e1', ''),
(20, 'Effy Akinyi', '980980', 'nguru grillers', 'effyakinyi@gmail.com', 'a6b9500113a2bae1b6f13a94a815db98', ''),
(21, 'leah aoko', '0715407710', 'Aoko and company', 'leah@gmail.com', 'bf69c5cc7d68fa6a02a4243af550c5a0', ''),
(22, 'Kelvin Mboga', '0791174989', 'ELITE CIT', 'programmerkelvin0@gmail.com', '4f8b3d86c5735c468125b847dd792f38', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connectclients`
--
ALTER TABLE `connectclients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discovery`
--
ALTER TABLE `discovery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderqueries`
--
ALTER TABLE `orderqueries`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connectclients`
--
ALTER TABLE `connectclients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `discovery`
--
ALTER TABLE `discovery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orderqueries`
--
ALTER TABLE `orderqueries`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `todolist`
--
ALTER TABLE `todolist`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
