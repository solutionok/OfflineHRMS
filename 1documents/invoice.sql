-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2019 at 09:22 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `rspan` varchar(255) NOT NULL,
  `salesman` varchar(255) NOT NULL,
  `beat` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `refno` varchar(255) NOT NULL,
  `vehiclename` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`id`, `name`, `address`, `city`, `mob`, `pincode`, `gst`, `rspan`, `salesman`, `beat`, `state`, `refno`, `vehiclename`, `status`, `time`) VALUES
(1, 'qw', 'qwq', 'qw', '', 'qw', 'wwq', 'qw', 'wwSD', 'ww', '1', '1', '1232', 'active', '2019-09-27 06:57:26'),
(2, 'HUHJ', 'w', 's', 'HGTT', 'hjhj', 'hj', 'hjh', 't', 'f', 'h', 'f', 'gff', 'active', '2019-09-27 07:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hsnno` varchar(200) NOT NULL,
  `mrp` int(255) NOT NULL,
  `upc` varchar(255) NOT NULL,
  `baserate` int(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `discount` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `hsnno`, `mrp`, `upc`, `baserate`, `status`, `time`, `discount`) VALUES
(1, 'life', '5656899', 58, '55', 56, 'active', '2019-09-27 07:23:16', 10),
(3, 'lifeboy', '23244', 23, '3', 26, 'active', '2019-09-27 07:27:04', 10);

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE `retailer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(18) NOT NULL,
  `state-code` varchar(255) NOT NULL,
  `pan` varchar(50) NOT NULL,
  `gstin` varchar(50) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'active',
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailer`
--

INSERT INTO `retailer` (`id`, `name`, `address`, `phone`, `state-code`, `pan`, `gstin`, `status`, `time`) VALUES
(1, '', 'ffbkgmkgmk', 'vfvkfvfbkfbkfb', 'vf', 'clv,', 'clv', 'active', '2019-09-27 07:14:05'),
(2, 'Rohit Nagar', '293 Krishnbag Colony Mr9 Indore', '1212123434', 'Madhya Pradesh', 'dfr4534435', '343433gggg', 'active', '2019-09-27 07:22:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retailer`
--
ALTER TABLE `retailer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `retailer`
--
ALTER TABLE `retailer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
