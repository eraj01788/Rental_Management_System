-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 01:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `Admin_name` varchar(20) NOT NULL,
  `Admin_email` varchar(30) NOT NULL,
  `Admin_address` varchar(70) NOT NULL,
  `Admin_contact` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Admin_image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `Admin_name`, `Admin_email`, `Admin_address`, `Admin_contact`, `Gender`, `Password`, `Admin_image`) VALUES
('Eraj01788', 'Muntasir Hossain', 'muntasirhosain@gmail.com', 'Bangladesh,rajshahi', '01788075438', 'Male', 'e', '../files/prev 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Admin_id` varchar(20) NOT NULL,
  `Seller_id` varchar(20) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `resolve` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`Admin_id`, `Seller_id`, `msg`, `resolve`) VALUES
('Eraj01788', 'm', 'adjnisaufianfiasdfniosauhfiouasfififiasda', '0'),
('Eraj01788', 'm', 'Please check this issue', '0'),
('Eraj01788', 'm', 'how are you', '0'),
('Eraj01788', 'm', 'how are you', '0'),
('Eraj01788', 'm', 'how are you', '0'),
('Eraj01788', 'm', 'how are you', '0'),
('Eraj01788', 'm', 'how are you', '0'),
('Eraj01788', 'm', 'how are you', '0'),
('Eraj01788', 'm', 'how are you', '0'),
('Eraj01788', 'm', 'how are you', '0');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `username` varchar(20) NOT NULL,
  `Seller_name` varchar(20) NOT NULL,
  `Seller_email` varchar(40) NOT NULL,
  `Seller_contact` varchar(30) NOT NULL,
  `Seller_address` varchar(70) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Seller_image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`username`, `Seller_name`, `Seller_email`, `Seller_contact`, `Seller_address`, `Gender`, `Password`, `Seller_image`) VALUES
('Eraz', 'Muntasir Hossain', '', '2062560', 'Bangladesh,rajshahi,chapai nawabgonj,gomostapur,chowdala', 'Male', '12', '../files/single 3.jpg'),
('sb', 'borno', 'borno2@gmail.com', '0123657895', 'Bangladesh,rajshahi,chapai nawabgonj,gomostapur,chowdala', 'Male', 'sb', '../files/Screenshot (102).png'),
('kk', 'karim', 'karim@gmail.com', '515615616', 'Bangladesh,rajshahi,chapai nawabgonj,gomostapur,chowdala', 'Male', '1', '../files/Screenshot (84).png'),
('m', 'Mastif m', 'mastif@mastif.com', '01188262664', 'Bosonitola', 'Male', 'mas', '../files/Screenshot (38).png'),
('m', 'mun', 'mun@gmail.com', '9874563210', 'Bangladesh,rajshahi,chapai nawabgonj,gomostapur,chowdala', 'Male', 'm', '../files/Screenshot 2020-12-14 142812.png'),
('e', 'Muntasir Hossain', 'muntasirhosain@gmail.com', 'Kuril', '01798653', 'Male', 'e', '../files/Untitled.png'),
('n', 'num', 'num@gmail.com', '145678952', 'Bosonitola', 'Male', 'num', '../files/pic ospfeigrp (1).png'),
('r1', 'rohim', 'rohim@gmail.com', '01254345135', 'Bangladesh,rajshahi,chapai nawabgonj,gomostapur,chowdala', 'Male', 'ra', '../files/Screenshot (83).png');

-- --------------------------------------------------------

--
-- Table structure for table `sellerads`
--

CREATE TABLE `sellerads` (
  `Seller_id` varchar(20) NOT NULL,
  `Service_id` int(30) NOT NULL,
  `Service_name` varchar(20) NOT NULL,
  `Service_price` int(30) NOT NULL,
  `Service_details` varchar(80) NOT NULL,
  `Service_image` varchar(80) NOT NULL,
  `Service_approved` tinyint(1) NOT NULL,
  `Service_location` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellerads`
--

INSERT INTO `sellerads` (`Seller_id`, `Service_id`, `Service_name`, `Service_price`, `Service_details`, `Service_image`, `Service_approved`, `Service_location`) VALUES
('e', 31, 'Tata', 80000, 'New Car', '../files/pic ospfeigrp (1).png', 1, 'barisal,Bangladesh'),
('sb', 32, 'Home', 2000, 'fsfsfsfsfsfsf', '../files/Screenshot (103).png', 1, 'Dhaka'),
('e', 33, 'Home', 10000, 'New Apartment', '../files/Screenshot (107).png', 1, 'Rajshahi'),
('e', 34, 'Truck', 5000, 'Used Truck', '../files/Screenshot (116).png', 1, 'Dhaka'),
('m', 36, 'Mobile', 10000, 'SmartPhone', '../files/Screenshot (76).png', 1, 'Chittagong'),
('kk', 37, 'Mobile', 12000, 'dadadadsxc', '../files/Screenshot (92).png', 1, 'Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_email`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`Seller_email`);

--
-- Indexes for table `sellerads`
--
ALTER TABLE `sellerads`
  ADD PRIMARY KEY (`Service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sellerads`
--
ALTER TABLE `sellerads`
  MODIFY `Service_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
