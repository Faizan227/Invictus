-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 06:06 PM
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
(5, 'admin', 3001122333, 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `brand_logo`
--

CREATE TABLE `brand_logo` (
  `id` int(11) NOT NULL,
  `brand_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand_logo`
--

INSERT INTO `brand_logo` (`id`, `brand_pic`) VALUES
(1, '1675581282.jpg'),
(2, '1675586200.jpg'),
(3, '1675586245.jpg');

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
(6, 'diamond cutting discs', 'Particularly high quality, working without cooling breaks, deep-drawn carrier protection segments, reinforced cores or high cutting speeds? Take a look at our rich selection!', '1675019743.jpg'),
(7, 'diamond drill bits', 'Particularly high cutting speeds, the strongest drill bits, with diamond particles evenly arranged in rows and multi-dimensionally? Here you will find suitable diamond drill bits for your needs!', '1675269347.jpg'),
(8, 'grinding technology', 'Cup wheels, grinding discs, segments for all possible areas of application from granite to concrete, screed, epoxy resin coatings, natural stone and more. The imagination is limitless, as is our offer.', '1675018712.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(200) DEFAULT NULL,
  `cus_email` varchar(200) DEFAULT NULL,
  `cus_phone` bigint(20) DEFAULT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  `com_reg_no` varchar(50) DEFAULT NULL,
  `cus_password` varchar(200) DEFAULT NULL,
  `cus_request` varchar(200) DEFAULT NULL,
  `reg_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `cus_email`, `cus_phone`, `company_name`, `com_reg_no`, `cus_password`, `cus_request`, `reg_date`) VALUES
(12, 'User', 'user@gmail.com', 3456738932, 'Hothi.com', 'abc1122', 'ee11cbb19052e40b07aac0ca060c23ee', NULL, '0000-00-00'),
(13, 'user2', 'user2@gmail.com', 3001122344, 'abc', '123abc', '7e58d63b60197ceb55a1c487989a3720', NULL, '0000-00-00'),
(14, 'user3', 'user3@gmail.com', 3001122344, 'Invictus', '11223344', '92877af70a45fd6a2ed7fe81e1236b78', NULL, '2000-02-02'),
(15, 'user4', 'user4@gmail.com', 3456738932, 'Hothi.com', 'abc1122', '3f02ebe3d7929b091e3d8ccfde2f3bc6', NULL, '2000-02-02'),
(16, 'user5', 'user5@gmail.com', 3456738932, 'Invictus', '11223344', '0a791842f52a0acfbb3a783378c066b8', NULL, '2000-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `sen_name` varchar(50) DEFAULT NULL,
  `sen_email` varchar(100) DEFAULT NULL,
  `sen_phone` bigint(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `sen_name`, `sen_email`, `sen_phone`, `date`, `message`) VALUES
(7, 'Husnain', 'Husnainmushtaq325@gmail.com', 3456738932, '2023-02-16', 'Testing message'),
(8, 'Customer2', 'Customer-2@gmail.com', 3001122344, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu.Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu.Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu.Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu.Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu.Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu.Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu.Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu.Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu.Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu.Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu.');

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
  `machine` varchar(200) DEFAULT NULL,
  `p_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_code`, `p_name`, `p_category`, `p_details`, `p_dimension`, `p_scope`, `machine`, `p_file`) VALUES
(5, 'IN33104 from 102mm', 'Laser Turbo drill bit Profi+', 6, 'Black Edition Premium PCD sanding disc with a long service life for all materials. Ideal for effectively removing adhesive residues and coatings.', '	\r\nDiameter x height: 100*5, 115*5, 125*5, 50*5/ 100*5 also with M14 mount', 'Adhesive residues, coatings, epoxy coatings, graffiti, and much more.', 'Cutting disc', '1675020588.png'),
(6, 'IN33134', 'Diamant-Dosensenker Laser RX+', 7, 'Lasergeschweißt mit und ohne Absaugvorrichtung\r\n9 mm Segmenthöhe!!\r\n Bohrtiefe 70mm', 'Durchmesser Abmessung in mm:\r\n68,0 mm 4 Segmente/ 82,0 mm 6 Segmente', 'Mauerwerk, hochverdichteter Kalksandstein, Ziegel, Beton', 'Anschluss M16', '1675108113.jpg'),
(7, 'IN33109', 'Vacuum dry drill bit professional', 7, 'Vacuum-soldered dry drill bit for universal use\r\n15 mm segment height!!\r\nIdeal for the tile professional', 'Diameter dimension in mm:\r\n6, 8, 10, 12, 15, 20, 25, 35, 40, 45, 50, 60, 68, 70, 80, 110', 'Tiles, fine stoneware, granite, hard-fired tiles, marble, and much more', 'Connection M14', '1675108280.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team_member`
--

CREATE TABLE `team_member` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(50) DEFAULT NULL,
  `m_post` varchar(50) DEFAULT NULL,
  `facebook_link` varchar(200) DEFAULT NULL,
  `instagram_link` varchar(200) DEFAULT NULL,
  `twitter_link` varchar(200) DEFAULT NULL,
  `m_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_member`
--

INSERT INTO `team_member` (`m_id`, `m_name`, `m_post`, `facebook_link`, `instagram_link`, `twitter_link`, `m_image`) VALUES
(15, 'john deo', 'General Manager', 'https://www.facebook.com/HusnainMushtaq.Hothi?mibextid=ZbWKwL', 'https://www.instagram.com/invites/contact/?i=4352ph952uq4&utm_content=ie37ait', 'https://twitter.com/husnainHothi325?s=09', '1675273209.jpg'),
(16, 'john ', 'General ', 'https://www.facebook.com/HusnainMushtaq.Hothi?mibextid=ZbWKwL', 'https://www.instagram.com/invites/contact/?i=4352ph952uq4&utm_content=ie37ait', 'https://twitter.com/husnainHothi325?s=09', '1675276276.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `cl_id` int(11) NOT NULL,
  `cl_name` varchar(50) DEFAULT NULL,
  `cl_city` varchar(100) DEFAULT NULL,
  `cl_review` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`cl_id`, `cl_name`, `cl_city`, `cl_review`) VALUES
(5, 'john smit', 'Germany', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. '),
(6, 'john smit', 'Germany', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. '),
(7, 'john ', 'Pakistan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Sed imperdiet libero id nisi euismod, sed porta est consectetur.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `brand_logo`
--
ALTER TABLE `brand_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `team_member`
--
ALTER TABLE `team_member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`cl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brand_logo`
--
ALTER TABLE `brand_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team_member`
--
ALTER TABLE `team_member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
