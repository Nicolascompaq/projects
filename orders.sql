-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 02:43 PM
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
-- Database: `orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `charts`
--

CREATE TABLE `charts` (
  `id` int(100) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `charts`
--

INSERT INTO `charts` (`id`, `order_id`, `type`, `amount`) VALUES
(0, 0, 'lkfkfkf', 1029);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `delivery_amount` varchar(100) NOT NULL,
  `percentage_off` varchar(100) NOT NULL,
  `last_amount` varchar(100) NOT NULL,
  `remaining` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_image`, `amount`, `delivery_amount`, `percentage_off`, `last_amount`, `remaining`) VALUES
(1, 'Jeep-t67(2021)', '2019-Jeep-Wrangler-Green-small.png', 30500, '$230', '6', '$5,000', '140'),
(2, 'Jafunga-8T', '106177799-green-automobile-isolated-on-white-background.jpg', 40450, '$120', '17', '$75,000', '19'),
(3, ' Toyota-T12v', '103611185-modern-green-car-crossover-in-front-3d-render-on-white-background-with-shadow.jpg', 80000, '$190', '30', '$100,300', '127'),
(4, 'Volvo-xc90', 'volvo_20xc90mhybrdzn4wdsu2fb_lowaggressive.avif', 30450, '$133', '27', '$45,000', '6'),
(5, ' Toyota-v8', 'USC60TOS121A021001.webp', 65000, '$450', '53', '$70,000', '23'),
(6, 'R.R autobiography', 'range-rover-right-front-three-quarter.webp', 87000, '$233', '31', '$140,000', '98'),
(7, 'Mark-X', 'auto5pix.jpg', 25000, '$126', '21', '$60,290', '51'),
(8, 'Harrier-t360 ', '20200617_01_t_w610.jpg', 90320, '$430', '54', '$170,000', '6'),
(9, ' R.R-2auto', '45e5261d1d229a75db06c953726de176.Range-Rover-Price-in-India.webp', 68000, '$240', '23', '$150,000', '8'),
(10, 'Toyota-T12v', 'luxury1.webp', 79400, '$550', '60', '$210,400', '11'),
(11, 'Alphard-Toyota', '2023_Toyota_Vellfire_1_5216f5c48b.jpg', 79000, '$450', '12', '$100,800', '4'),
(12, 'spacio-X8', '10102024_200304.webp', 57800, '$230', '49', '$74,400', '18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charts`
--
ALTER TABLE `charts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
