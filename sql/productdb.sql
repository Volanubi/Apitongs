-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 11:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_item_name` varchar(250) NOT NULL,
  `order_item_quantity` int(11) NOT NULL,
  `order_item_price` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_item_id`, `order_id`, `order_item_name`, `order_item_quantity`, `order_item_price`) VALUES
(1, 1, 'Birthday', 1, 29999.00),
(2, 2, 'Anniversary', 1, 39999.00),
(3, 2, 'Debut', 1, 39999.00),
(4, 3, 'Prom', 1, 139999.00),
(5, 4, 'Wedding', 1, 39999.00),
(6, 5, 'Party Pack', 1, 39999.00),
(9, 7, 'Anniversary', 1, 39999.00),
(10, 8, 'Anniversary', 50, 39999.00),
(11, 9, 'Birthday', 20, 29999.00),
(12, 10, 'Birthday', 50, 29999.00);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `order_number` int(11) NOT NULL,
  `order_total_amount` double(12,2) NOT NULL,
  `transaction_id` varchar(200) NOT NULL,
  `card_cvc` int(5) NOT NULL,
  `card_expiry_month` varchar(30) NOT NULL,
  `card_expiry_year` varchar(30) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `card_holder_number` varchar(250) NOT NULL,
  `email_address` varchar(250) NOT NULL,
  `customer_name` varchar(250) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_city` varchar(250) NOT NULL,
  `customer_pin` varchar(30) NOT NULL,
  `customer_state` varchar(250) NOT NULL,
  `customer_country` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `order_number`, `order_total_amount`, `transaction_id`, `card_cvc`, `card_expiry_month`, `card_expiry_year`, `order_status`, `card_holder_number`, `email_address`, `customer_name`, `customer_address`, `customer_city`, `customer_pin`, `customer_state`, `customer_country`) VALUES
(7, 955280, 39999.00, 'txn_3MCiKcAP35BuKCdD2H6s8W5h', 856, '05', '2024', 'succeeded', '4242424242424242', 'algeraldbato@gmail.com', 'Algerald Bato Dela Rosa', '69c Palawan Street, Paurong\r\n', 'Marikina', '1809', 'NCR', 'Philippines'),
(8, 727488, 79999.00, 'txn_3MCmryAP35BuKCdD1cG5jWyj', 856, '05', '2024', 'succeeded', '4242424242424242', 'algeraldbato@gmail.com', 'Algerald Bato Dela Rosa', '2c Palaris Street, Parang, Marikina City\r\n', 'Marikina', '1809', 'NCR', 'Philippines'),
(9, 470212, 45999.00, 'txn_3MCmwCAP35BuKCdD0XJErir6', 856, '05', '2024', 'succeeded', '4242424242424242', 'algeraldbato@gmail.com', 'Algerald Bato Dela Rosa', '2c Palaris Street, Parang, Marikina City', 'Marikina', '1809', 'NCR', 'Philippines'),
(10, 606881, 69999.00, 'txn_3MD3vxAP35BuKCdD2ovuGKdW', 856, '05', '2024', 'succeeded', '4242424242424242', 'algeraldbato@gmail.com', 'Algerald Dela Rosa', '69c Polarus Street, Parong', 'Marikina', '1809', 'NCR', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Birthday', 'bday.jpg', 29999.00),
(2, 'Anniversary', 'anniversary.jpg', 39999.00),
(3, 'Debut', 'Debut.jpg', 39999.00),
(4, 'Prom', 'prom.jpg', 49999.00),
(5, 'Wedding', 'wed.jpg', 39999.00),
(6, 'Party Pack', 'Party.jpg', 39999.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
