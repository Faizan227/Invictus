-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 06:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invictus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(255) NOT NULL,
  `a_name` varchar(30) DEFAULT NULL,
  `a_phone` double DEFAULT NULL,
  `a_email` varchar(255) DEFAULT NULL,
  `a_password` varchar(200) DEFAULT NULL,
  `a_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_phone`, `a_email`, `a_password`, `a_type`) VALUES
(1, 'admin', 3001234567, 'admin@gmail.com', 'admin123', '1'),
(3, 'admin-2', 3003456324, 'admin2@gmail.com', 'admin222', 'editor');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_details` text NOT NULL,
  `c_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`, `c_details`, `c_file`) VALUES
(1, 'diamond cutting discs', 'Particularly high quality, working without cooling breaks, deep-drawn carrier protection segments, reinforced cores or high cutting speeds? Take a look at our rich selection.', ''),
(3, 'grinding technology', 'Cup wheels, grinding discs, segments for all possible areas of application from granite to concrete, screed, epoxy resin coatings, natural stone and more. The imagination is limitless, as is our offer.', ''),
(4, 'diamond drill bits', 'Particularly high cutting speeds, the strongest drill bits, with diamond particles evenly arranged in rows and multi-dimensionally? Here you will find suitable diamond drill bits for your needs!', '1673707743.jpg'),
(5, 'diamond cutting discs', 'Some ', '1673802174.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `cus_name` varchar(200) DEFAULT NULL,
  `cus_email` varchar(200) DEFAULT NULL,
  `cus_phone` bigint(20) DEFAULT NULL,
  `cus_password` varchar(200) DEFAULT NULL,
  `cus_address` varchar(200) DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cus_name`, `cus_email`, `cus_phone`, `cus_password`, `cus_address`, `reg_date`) VALUES
(1, 'Customer-1', 'Customer@gmail.com', 3004455666, '12345678', 'Punjab Pakistan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_code` varchar(30) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_category` int(11) NOT NULL,
  `p_details` text NOT NULL,
  `p_dimension` varchar(200) NOT NULL,
  `p_scope` text NOT NULL,
  `p_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_code`, `p_name`, `p_category`, `p_details`, `p_dimension`, `p_scope`, `p_file`) VALUES
(0, 'IN33104 from 102mm', 'Laser Turbo drill bit Profi+ from 102mm', 0, 'Laser welded with 10mm turbo segments, 1 1/4 connection, effective length 400mm', '25mm*3seg, 30mm*4seg, 35mm*4seg, 40mm*4seg, 45mm*5seg, 52mm*5seg, 56mm*5seg, 62mm*6seg, 67mm*6seg, 72mm*7seg, 82mm*7seg, 87mm*7seg, 92mm* 8segs, 102mm*9segs', 'Concrete, reinforced concrete, additives with a particle size of less than 50 mm, for ductile cast iron.', '1673689392.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
