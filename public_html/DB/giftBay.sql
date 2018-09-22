-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2018 at 07:21 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giftBay`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `customerId` int(11) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `itemId` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`customerId`, `customerName`, `itemId`, `image`, `itemName`, `price`, `quantity`, `total`) VALUES
(1, 'Nipun', 1, 'images/bcake1.jpg', 'A Red Teddy', 10.45, 1, 10.45),
(1, 'Nipun', 3, 'images/card1.jpg', 'Best Mom Card', 1.57, 1, 1.57),
(3, 'amare', 1, 'images/bcake1.jpg', 'A Red Teddy', 10.45, 1, 10.45),
(3, 'amare', 2, 'images/bear.jpg', 'White Teddy', 4.24, 1, 4.24),
(3, 'amare', 3, 'images/card1.jpg', 'Best Mom Card', 1.57, 1, 1.57),
(3, 'amare', 5, 'images/choco1.jpg', 'Ferrero Rocher 30 Pack', 26.05, 1, 26.05),
(3, 'amare', 9, 'images/Fogg_scent.jpg', 'Fogg Scent I Am Queen', 13.71, 1, 13.71);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`) VALUES
(1, 'Teddy'),
(2, 'Chocolate'),
(3, 'Greeting Cards'),
(4, 'Jewelery'),
(6, 'Flowers'),
(7, 'Perfumes'),
(8, 'Toys'),
(9, 'Shoes'),
(10, 'Gift Baskets'),
(11, 'Books'),
(12, 'Clothes'),
(13, 'Cakes'),
(14, 'Vouchers'),
(15, 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(20) NOT NULL,
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tele` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `companyName` varchar(50) DEFAULT NULL,
  `companyID` varchar(20) DEFAULT NULL,
  `postalCode` varchar(10) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `pass` varchar(25) DEFAULT NULL,
  `itemID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `firstName`, `lastName`, `email`, `tele`, `address`, `companyName`, `companyID`, `postalCode`, `country`, `pass`, `itemID`) VALUES
(1, 'Nipun', NULL, 'namarasekara6@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '4212', NULL),
(2, 'Eranda', NULL, 'namarasekara71@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '5212', NULL),
(3, 'amare', NULL, '1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '111', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemID` varchar(10) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `itemName` varchar(50) DEFAULT NULL,
  `itemPrice` float DEFAULT NULL,
  `itemWeight` float DEFAULT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemID`, `categoryId`, `itemName`, `itemPrice`, `itemWeight`, `image`) VALUES
('1', 1, 'A Red Teddy', 10.45, 0.25, 'images/bcake1.jpg'),
('2', 1, 'White Teddy', 4.24, 0.3, 'images/bear.jpg'),
('3', 3, 'Best Mom Card', 1.57, 0.008, 'images/card1.jpg'),
('4', 3, 'I Love Thaththi', 1.37, 0.009, 'images/card2.jpg'),
('5', 2, 'Ferrero Rocher 30 Pack', 26.05, 0.5, 'images/choco1.jpg'),
('6', 2, 'Ferrero Rocher pack with flowers', 47.34, 0.7, 'images/choco3.jpg'),
('7', 4, 'Crystal Water Drop jewelery', 11.75, 0.1, 'images/jew1.jpg'),
('8', 2, 'Cadbury Dairy Milk Chocolate', 9.27, 0.25, 'images/dairymilk.jpg'),
('9', 7, 'Fogg Scent I Am Queen', 13.71, 0.3, 'images/Fogg_scent.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`customerId`,`itemId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD KEY `item_fk` (`categoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `myCart_fk` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_fk` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
