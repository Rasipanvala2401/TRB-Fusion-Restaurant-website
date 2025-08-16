-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2025 at 04:48 PM
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
-- Database: `dbrest`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblfood`
--

CREATE TABLE `tblfood` (
  `fid` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `img` varchar(255) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblfood`
--

INSERT INTO `tblfood` (`fid`, `name`, `price`, `img`, `category`) VALUES
(1, 'Daal Dhokli', '200', 'dd.avif', 'Desi Tadka'),
(4, 'Daal Makhni', '240', 'dm.jpg', 'Desi Tadka'),
(5, 'Swaminarayan Special Khichdi', '220', 'kc.jpg', 'Desi Tadka'),
(6, 'Spicy Noodles', '180', 'nood.jpg', 'Chinese'),
(7, 'Gravy Manchurian', '120', 'manchu.jpg', 'Chinese'),
(8, 'Steam Momos', '130', 'momos.jpg', 'Chinese'),
(9, 'Chinese Spring Roll', '240', 'roll.jpg', 'Chinese'),
(11, 'Vegetable Rava Upma', '100', 'rava upma.JPG', 'Diet'),
(12, 'Classic Veggie Bowl', '160', 'salad.jpg', 'Diet'),
(13, 'Vegetable Soup', '90', 'soup.webp', 'Diet'),
(14, 'TRB Classic Burger', '240', 'BURGER.jpg', 'Italian'),
(15, 'Cheesy Garlic Bread', '320', 'garlic braed.jpg', 'Italian'),
(16, 'Creamy Pasta', '230', 'pasta.jpg', 'Italian'),
(17, 'Farmhouse Pizza', '450', 'pizza.jpg', 'Italian'),
(18, 'Special Butter Paneer', '320', 'pb.jpg', 'Punjabi'),
(19, 'Palak Paneer', '320', 'pp.jpg', 'Punjabi'),
(20, 'Tandoori Roti', '120', 'tr.jpg', 'Punjabi'),
(21, 'Punjabi Special Thali', '430', 'thali.jpg', 'Punjabi'),
(22, 'Curd Rice', '120', 'r2.jpg', 'South'),
(23, 'Traditional Idlie Sambar', '150', 'idlie.webp', 'South'),
(24, 'Vegetable Korma', '210', 'korma.jpg', 'South'),
(25, 'Green Dosa', '200', 'palak dosa.jpg', 'South'),
(26, 'Choco Lava Brownie', '200', 'browney.jpg', 'Sweet'),
(27, 'Rajwadi Falooda', '180', 'falooda.jpg', 'Sweet'),
(28, 'Cookies and Cream Shake', '220', 'oreoshake.jpg', 'Sweet'),
(29, 'Royal Rasgulla', '180', 'rasgulla.jpg', 'Sweet'),
(39, 'Bhindi Masala', '150', 'bhindi.jpg', 'Desi Tadka');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `uid` int(50) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mno` int(50) NOT NULL,
  `pwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`uid`, `uname`, `email`, `mno`, `pwd`) VALUES
(1, 'Raj', 'raj@gmail.com', 2147483647, '21072006'),
(2, 'Vishwa', 'vr@gmail.com', 1234567890, '22224444'),
(3, 'Mahi', 'mpatel@gmail.com', 2147483647, '12345678'),
(4, 'rasi', 'r24@gmail.com', 2147483647, '12121212'),
(7, 'aayushi', 'a@k.com', 2147483647, '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblfood`
--
ALTER TABLE `tblfood`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblfood`
--
ALTER TABLE `tblfood`
  MODIFY `fid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
