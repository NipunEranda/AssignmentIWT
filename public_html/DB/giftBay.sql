-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2018 at 03:08 AM
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

INSERT INTO `cart` (`customerId`, `itemId`, `image`, `itemName`, `price`, `quantity`, `total`) VALUES
(3, 1, 'images/bcake1.jpg', 'A Red Teddy', 10.45, 1, 10.45),
(3, 2, 'images/bear.jpg', 'White Teddy', 4.24, 1, 4.24);

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
-- Table structure for table `country_units`
--

CREATE TABLE `country_units` (
  `country` varchar(50) NOT NULL,
  `currency_unit` float NOT NULL,
  `unitName` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_units`
--

INSERT INTO `country_units` (`country`, `currency_unit`, `unitName`) VALUES
('Australia', 10, 'AUD'),
('Brazil', 10, 'BRL'),
('Canada', 10, 'CAD'),
('China', 6.82, 'CNY'),
('India', 72.52, 'INR'),
('Indonesia', 10, 'IDR'),
('Qatar', 10, 'QAR'),
('Singapore', 10, 'SGD'),
('SriLanka', 169.16, 'LKR'),
('Zimbabwe', 10, 'EUR');

-- --------------------------------------------------------

--
-- Table structure for table `FeedBacks`
--

CREATE TABLE `FeedBacks` (
  `userId` int(11) NOT NULL,
  `feedBack` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `image` varchar(1000) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemID`, `categoryId`, `itemName`, `itemPrice`, `itemWeight`, `image`, `quantity`) VALUES
('1', 1, 'A Red Teddy', 10.45, 0.25, 'images/bcake1.jpg', 20),
('2', 1, 'White Teddy', 4.24, 0.3, 'images/bear.jpg', 30),
('3', 3, 'Best Mom Card', 1.57, 0.008, 'images/card1.jpg', 100),
('4', 3, 'I Love Thaththi', 1.37, 0.009, 'images/card2.jpg', 150),
('5', 2, 'Ferrero Rocher 30 Pack', 26.05, 0.5, 'images/choco1.jpg', 200),
('6', 2, 'Ferrero Rocher pack', 29.61, 0.7, 'images/choco3.jpg', 200),
('7', 4, 'Crystal Water Drop jewelery', 11.75, 0.1, 'images/jew1.jpg', 10),
('8', 2, 'Cadbury Dairy Milk Chocolate', 9.27, 0.25, 'images/dairymilk.jpg', 100),
('9', 7, 'Fogg Scent I Am Queen', 13.71, 0.3, 'images/Fogg_scent.jpg', 70);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_num` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` enum('Shipped','Completed','Cancelled','') NOT NULL,
  `order_address` int(11) NOT NULL,
  `order_city` int(11) NOT NULL,
  `order_postal_code` int(11) NOT NULL,
  `order_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `tele` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `companyName` varchar(50) DEFAULT NULL,
  `companyID` varchar(20) DEFAULT NULL,
  `postalCode` varchar(10) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `pass` varchar(25) DEFAULT NULL,
  `image` varchar(1000) NOT NULL,
  `is_admin` char(1) DEFAULT NULL,
  `in_staff` int(11) NOT NULL,
  `is_owner` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `email`, `tele`, `address`, `companyName`, `companyID`, `postalCode`, `country`, `pass`, `image`, `is_admin`, `in_staff`, `is_owner`) VALUES
(1, 'Dulsara', 'Dilitha', 'dulsara.dilitha@gmail.com', '0773572883', '26/E, colombo 03', 'NULL', 'NULL', '8965', 'SriLanka', '123', 'images/profiles/dulsara.jpg', '0', 0, '1'),
(2, 'Nipun', 'Amarasekara', 'namarasekara6@gmail.com', '0915050586', '24/F, Dewata Rd, Kandegoda, Ambalangoda', 'NULL', '001', '4212', 'SriLanka', '123', 'images/profiles/nipun.jpg', '1', 1, '0'),
(3, 'Nishadi', 'Karunarathne', 'nishadinikarunarathna@gmail.com', '0713729991', '8E, colombo 03', 'NULL', 'NULL', '1234', 'SriLanka', '111', 'images/profiles/nishadi.jpg', '0', 1, '0'),
(4, 'Ninthujan', 'Thileepan', 'ninthujan@live.com', '0773900704', '9B, colombo 06', 'NULL', 'NULL', '3569', 'SriLanka', '111', 'images/profiles/ninthujan.jpg', '1', 1, '0'),
(5, 'Tharshigan', 'N', 'Tharsigan97@gmail.com', '0778468537', '9C, Colombo 04', 'NULL', 'NULL', '7896', 'SriLanka', '111', '', '0', 0, '0');

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
-- Indexes for table `country_units`
--
ALTER TABLE `country_units`
  ADD PRIMARY KEY (`country`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemID`),
  ADD KEY `item_fk` (`categoryId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_num`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_num` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_fk` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
