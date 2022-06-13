-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 04:25 PM
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
(21, 'leah aoko', '0715407710', 'Aoko and company', 'leah@gmail.com', 'bf69c5cc7d68fa6a02a4243af550c5a0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
