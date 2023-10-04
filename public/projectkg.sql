-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 07:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectkg`
--

-- --------------------------------------------------------

--
-- Table structure for table `iteminfo`
--

CREATE TABLE `iteminfo` (
  `id` int(11) NOT NULL,
  `i_name` varchar(20) DEFAULT NULL,
  `i_price` float DEFAULT NULL,
  `i_img` varchar(30) DEFAULT NULL,
  `i_alt` varchar(10) DEFAULT NULL,
  `i_content` varchar(20) DEFAULT NULL,
  `i_temId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iteminfo`
--

INSERT INTO `iteminfo` (`id`, `i_name`, `i_price`, `i_img`, `i_alt`, `i_content`, `i_temId`) VALUES
(1, 'Momo', 120, 'momo.jpeg', 'Momo', 'Pick 1', 1),
(2, 'Chowmein', 130, 'chowmein.jpg', 'Chowmein', 'Pick 2', 2),
(3, 'Burger', 490, 'burger.jpg', 'Burger', 'Pick 3', 3),
(4, 'Pitza', 180, 'pitza.jpg', 'Pitza', 'Pick 4', 4),
(5, 'Coke', 70, 'coke.jpeg', 'Coke', 'Pick 5', 5),
(6, 'Pastry', 60, 'pastry.jpeg', 'Pastry', 'Pick 6', 6);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `i_name` varchar(20) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `i_price` int(11) NOT NULL,
  `total` double DEFAULT NULL,
  `i_temId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `i_name`, `qty`, `i_price`, `total`, `i_temId`) VALUES
(109, 87, 'Chowmein', 5, 130, 890, 2),
(110, 88, 'Burger', 1, 490, 620, 3),
(111, 89, 'Pitza', 1, 180, 550, 4),
(112, 90, 'Pastry', 1, 60, 680, 6),
(113, 91, 'Pastry', 1, 60, 680, 6),
(114, 92, 'Burger', 1, 490, 620, 3),
(115, 92, 'Chowmein', 1, 130, 620, 2),
(116, 93, 'Chowmein', 1, 130, 250, 2),
(117, 93, 'Momo', 1, 120, 250, 1),
(118, 94, 'Chowmein', 1, 130, 250, 2),
(119, 94, 'Momo', 1, 120, 250, 1),
(120, 95, 'Chowmein', 1, 130, 250, 2),
(121, 95, 'Momo', 1, 120, 250, 1),
(122, 96, 'Coke', 1, 70, 190, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_details_orders`
--

CREATE TABLE `user_details_orders` (
  `id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `full_name` varchar(20) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `payment_mode` varchar(20) DEFAULT NULL,
  `table_no` int(11) DEFAULT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details_orders`
--

INSERT INTO `user_details_orders` (`id`, `phone`, `full_name`, `order_date`, `address`, `payment_mode`, `table_no`, `total`) VALUES
(91, '882', 'Kerry Molina', '2023-10-04 06:54:55', 'In vitae facere tota', 'Esewa', 0, 680),
(92, '98', 'Brynne Jenkins', '2023-10-04 06:59:16', 'Commodo impedit qua', 'Esewa', 0, 620),
(93, '770', 'Xena Vang', '2023-10-04 07:02:21', 'Dolore sequi pariatu', 'Cash_on_Counter', 0, 250),
(94, '85', 'Herman Thomas', '2023-10-04 07:05:41', 'Similique non eos m', 'Esewa', 0, 250),
(95, '9815158185', 'Rahul Sewa Pariyar', '2023-10-04 07:08:53', 'Pokhara', 'Cash_on_Counter', 5, 250),
(96, '9815158185', 'Rahul Sewa Pariyar', '2023-10-04 07:09:13', 'Pokhara', 'Cash_on_Counter', 5, 190),
(97, '238', 'Rafael Richmond', '2023-10-04 07:12:54', 'Similique nulla volu', 'Cash_on_Counter', 0, 130),
(98, '302', 'Aline Gould', '2023-10-04 07:26:32', 'Debitis labore ex qu', 'Cash_on_Counter', 0, 130),
(102, '819', 'Ulric Fuentes', '2023-10-04 07:44:29', 'Reprehenderit ducimu', 'Esewa', 0, 130);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iteminfo`
--
ALTER TABLE `iteminfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details_orders`
--
ALTER TABLE `user_details_orders`
  ADD PRIMARY KEY (`id`,`phone`),
  ADD UNIQUE KEY `order_date` (`order_date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `user_details_orders`
--
ALTER TABLE `user_details_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
