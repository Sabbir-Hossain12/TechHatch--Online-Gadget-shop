-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 10:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techhatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(25) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `feedback` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `quantity` int(25) NOT NULL,
  `total_price` int(15) NOT NULL,
  `shipping` varchar(15) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `f_name`, `l_name`, `feedback`, `email`, `phone`, `product_name`, `quantity`, `total_price`, `shipping`, `order_date`) VALUES
(18, 'Sabbir', 'Hossain', 'asdasd', 'h.sabbir36@yahoo.com', '456', 'airpods pro', 145, 2500, '', '2023-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(25) NOT NULL,
  `product_name` varchar(55) NOT NULL,
  `catagory` varchar(60) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `quantity` int(20) NOT NULL,
  `color` int(6) NOT NULL,
  `price` int(80) NOT NULL,
  `date_added` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `img_data` longblob NOT NULL,
  `product_type` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `catagory`, `brand`, `quantity`, `color`, `price`, `date_added`, `img_data`, `product_type`) VALUES
(18, 'airpods pro', 'Headphone', 'Corsair', 145, 0, 2500, '2023-07-26 17:09:48.420062', 0x696d6167652f616972706f64732070726f2e6a7067, 'Hardware'),
(19, 'Headphone', 'Headphone', 'Corsair', 5, 0, 2121, '2023-07-28 20:34:09.278269', 0x696d6167652f6870322e6a7067, 'Hardware');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(25) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(90) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `date`) VALUES
(14, 'Sabbir hossain', 'h.sabbir36@yahoo.com', '123', '2023-07-23'),
(15, 'saif', 'saif@gmail.com', '456', '2023-07-23'),
(19, 'pls-donate-blood', 'h.sabbir36@yahoo.com', '789', '2023-07-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
