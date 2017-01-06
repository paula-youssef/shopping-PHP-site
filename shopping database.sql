-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2014 at 10:52 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `userName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` int(11) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `BillingAddress` varchar(20) DEFAULT NULL,
  `BillingCity` varchar(20) DEFAULT NULL,
  `BillingState` varchar(20) DEFAULT NULL,
  `BillingZip` int(11) DEFAULT NULL,
  `ShippingAddress` varchar(20) DEFAULT NULL,
  `ShippingCity` varchar(20) DEFAULT NULL,
  `ShippingState` varchar(20) DEFAULT NULL,
  `ShippingZip` int(11) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `FirstName`, `LastName`, `BillingAddress`, `BillingCity`, `BillingState`, `BillingZip`, `ShippingAddress`, `ShippingCity`, `ShippingState`, `ShippingZip`, `Phone`, `Email`, `Password`) VALUES
(1, 'kemo', 'kaka', 'zmalek', 'ahly', '1', 11, 'china', 'china', '1', 11123, '111', 'kemo@yahoo.com', '123'),
(0, 'kemo', 'kaka', 'm3adi', NULL, NULL, NULL, 'zmalek', NULL, NULL, NULL, '0111', 'keo@yahoo.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `orderprocessing`
--

CREATE TABLE IF NOT EXISTS `orderprocessing` (
  `TransactionID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Number` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `Processed` tinyint(1) NOT NULL,
  `Shipped` tinyint(1) NOT NULL,
  `DateShipped` date NOT NULL,
  `TrackingNumber` int(11) NOT NULL,
  `ShippingCompany` varchar(50) NOT NULL,
  PRIMARY KEY (`TransactionID`),
  UNIQUE KEY `CustomerID` (`CustomerID`,`ProductID`,`TrackingNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderprocessing`
--

INSERT INTO `orderprocessing` (`TransactionID`, `CustomerID`, `ProductID`, `Number`, `Quantity`, `dateTime`, `Processed`, `Shipped`, `DateShipped`, `TrackingNumber`, `ShippingCompany`) VALUES
(788, 515, 2154, 2, 4, '2014-12-03 00:00:00', 56, 45, '2014-12-10', 57, 'bassem');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ProductID` int(11) NOT NULL,
  `ItemName` varchar(20) NOT NULL,
  `ItemDescription` varchar(500) NOT NULL,
  `QuantityInStock` int(11) NOT NULL,
  `Price` double NOT NULL,
  `Category` varchar(20) NOT NULL,
  `SubCategory` varchar(20) NOT NULL,
  `Visible` tinyint(1) NOT NULL,
  `Picture` varchar(500) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ItemName`, `ItemDescription`, `QuantityInStock`, `Price`, `Category`, `SubCategory`, `Visible`, `Picture`) VALUES
(1, 'LaptopDell1', 'laptop1 gamed fash5', 50, 3000, 'Laptop', 'Dell', 1, 'C:UsersAhmedDesktopdownload.jpg'),
(2012, 'iphone6', 'gamed', 4, 1200, 'Mobile', 'Apple', 1, 'iphone6.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
