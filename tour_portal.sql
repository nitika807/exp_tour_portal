-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 11:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_pass`) VALUES
(1, 'admin@gmail.com', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `t_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_image`) VALUES
(1, 'Women Empowerment', 'women.jpg'),
(3, 'Festivals', 'festival11.jpg'),
(4, 'Art and Culture', 'Art_cult.jpg'),
(5, 'Well Being', 'well_being.jpg'),
(6, 'Spiritual', 'spiritual.jpg'),
(7, 'Social Enterprises', 'social_entre.jpg'),
(8, ' Home Stays', 'homestay.jpg'),
(9, 'Tea Gardens', 'tea.jpg'),
(10, 'Wildlife', 'wildlife.jpg'),
(11, 'Culinary', 'food.jpg'),
(12, 'Community Sports', 'sport.jpg'),
(23, 'Farms', 'Farming2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_fname` varchar(100) NOT NULL,
  `customer_lname` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_c_code` varchar(100) NOT NULL,
  `customer_contact` int(100) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_confpass` varchar(100) NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_consent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_fname`, `customer_lname`, `customer_email`, `customer_c_code`, `customer_contact`, `customer_country`, `customer_pass`, `customer_confpass`, `customer_image`, `customer_ip`, `customer_consent`) VALUES
(7, 'john', 'murphy', 'john@gmail.com', '61', 43434343, 'Australia', 'John@2020', 'John@2020', '', '::1', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `total_products` int(100) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paypal_payments`
--

CREATE TABLE `paypal_payments` (
  `payment_id` int(10) NOT NULL,
  `transaction_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `currency` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(10) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `type` text NOT NULL,
  `post_desc` text NOT NULL,
  `post_price` int(100) NOT NULL,
  `post_days` int(100) NOT NULL,
  `post_nights` int(100) NOT NULL,
  `post_people` int(100) NOT NULL,
  `post_hotel` int(100) NOT NULL,
  `post_images` varchar(100) NOT NULL,
  `post_include` varchar(500) NOT NULL,
  `post_ninclude` varchar(500) NOT NULL,
  `post_date` date NOT NULL,
  `cat_id` int(100) NOT NULL,
  `post_keywords` text NOT NULL,
  `booking_start` date NOT NULL,
  `booking_end` date NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `type`, `post_desc`, `post_price`, `post_days`, `post_nights`, `post_people`, `post_hotel`, `post_images`, `post_include`, `post_ninclude`, `post_date`, `cat_id`, `post_keywords`, `booking_start`, `booking_end`, `sdate`, `edate`, `status`) VALUES
(106, 'Example tour', '', 'This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. This is an example of tour. ', 123, 0, 0, 5, 4, 'dwn.jpg', 'This is an example of tour. ', 'This is an example of tour. ', '2020-05-22', 1, 'This is an example of tour. ', '2020-06-18', '2020-06-27', '2020-06-29', '2020-07-01', 'on'),
(111, 'Festival Example', '', 'This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. This is a festival example. ', 500, 0, 0, 5, 5, 'dwn.jpg', 'This is a festival example. This is a festival example. This is a festival example. ', 'This is a festival example. This is a festival example. This is a festival example. ', '2020-06-05', 3, 'adventure, sports, festival', '0000-00-00', '0000-00-00', '2020-06-12', '2020-06-30', 'on'),
(112, 'This is the other festival example. ', '', 'This is the other festival example. This is the other festival example. This is the other festival example. This is the other festival example. This is the other festival example. This is the other festival example. This is the other festival example. This is the other festival example. This is the other festival example. This is the other festival example. This is the other festival example. This is the other festival example. This is the other festival example. This is the other festival example. This is the other festival example. This is the other festival example. This is the other festival example. ', 600, 0, 0, 4, 3, 'dwn.jpg', 'This is the other festival example. ', 'This is the other festival example. ', '2020-06-05', 3, 'festival tour, adventurous', '0000-00-00', '0000-00-00', '2020-06-18', '2020-06-20', 'on'),
(113, 'Art and culture tour example', '', 'Art and culture tour exampleArt and culture tour exampleArt and culture tour exampleArt and culture tour exampleArt and culture tour exampleArt and culture tour exampleArt and culture tour exampleArt and culture tour exampleArt and culture tour exampleArt and culture tour exampleArt and culture tour exampleArt and culture tour exampleArt and culture tour exampleArt and culture tour exampleArt and culture tour exampleArt and culture tour exampleArt and culture tour example', 800, 0, 0, 6, 4, 'dwn.jpg', 'Art and culture tour example', 'Art and culture tour example', '2020-06-05', 4, 'Art and culture tour example', '2020-06-09', '2020-06-11', '2020-06-28', '2020-07-02', 'on'),
(114, 'Second Art and culture tour example', '', 'Second Art and culture tour exampleSecond Art and culture tour exampleSecond Art and culture tour exampleSecond Art and culture tour exampleSecond Art and culture tour exampleSecond Art and culture tour exampleSecond Art and culture tour exampleSecond Art and culture tour exampleSecond Art and culture tour exampleSecond Art and culture tour exampleSecond Art and culture tour exampleSecond Art and culture tour exampleSecond Art and culture tour exampleSecond Art and culture tour exampleSecond Art and culture tour example', 300, 0, 0, 3, 4, 'dwn.jpg', 'Second Art and culture tour example', 'Second Art and culture tour example', '2020-06-05', 4, 'Second Art and culture tour example', '0000-00-00', '0000-00-00', '2020-06-09', '2020-06-18', 'on'),
(115, 'Tea Garden Tour', '', 'This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. ', 500, 0, 0, 4, 5, 'dwn.jpg', 'This is a tea garden tour example. This is a tea garden tour example. This is a tea garden tour example. ', 'This is a tea garden tour example. This is a tea garden tour example. ', '2020-06-09', 9, 'tea, garden, tour, trip', '2020-06-12', '2020-06-20', '2020-07-05', '2020-07-12', 'on'),
(116, 'Spiritual ', '', 'This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.This is a spiritual tour example.', 100, 0, 0, 10, 4, 'art_opt (1).jpg', 'This is a spiritual tour example.', 'This is a spiritual tour example.', '2020-06-09', 6, 'spiritual, temple', '2020-06-12', '2020-06-14', '2020-06-14', '2020-06-26', 'on'),
(117, 'Well Being Tour Example', '', 'This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.This is a well being tour example.', 100, 0, 0, 1, 4, 'well_being1_opt.jpg', 'This is a well being tour example.', 'This is a well being tour example.', '2020-06-09', 5, 'This is a well being tour example.', '2020-06-09', '2020-06-14', '2020-06-18', '2020-06-27', 'on'),
(118, 'Wildlife Tour Example', '', 'This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. This is a wildlife tour example. ', 500, 0, 0, 2, 4, 'wildlife1_opt.jpg', 'This is a wildlife tour example. ', 'This is a wildlife tour example. ', '2020-06-09', 10, 'This is a wildlife tour example. ', '2020-06-09', '2020-06-11', '2020-06-13', '2020-06-17', 'on'),
(119, 'Social Enterprises Example tour', '', 'this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.this is a Social Enterprises Example tour.', 400, 0, 0, 5, 5, 'well_being1_opt.jpg', 'this is a Social Enterprises Example tour.', 'this is a Social Enterprises Example tour.', '2020-06-09', 7, 'this is a Social Enterprises Example tour.', '1970-01-01', '1970-01-01', '2020-06-27', '2020-07-03', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_number` int(11) NOT NULL,
  `user_ip` varchar(255) NOT NULL,
  `submitted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `paypal_payments`
--
ALTER TABLE `paypal_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paypal_payments`
--
ALTER TABLE `paypal_payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
