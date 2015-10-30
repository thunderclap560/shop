-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2015 at 10:46 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `link`, `parent_id`) VALUES
(2, 'block 2', 'http://kfun.net', 1),
(4, 'block 4', 'http://vikpop.com', 3),
(8, '1b6c0edc71e7d4a30ad85b5918a7c67e.jpg', NULL, 1),
(9, '48d733ae90bf4a4155907544690bb689.jpg', NULL, 1),
(10, '17068168d6dc3e55134269d5e21c3243.jpg', NULL, 1),
(11, '9a688b8d494ffba7634963bbf26a5ee9.jpg', NULL, 1),
(12, '398a4e8e87078158e1b015f400b48d79.jpg', NULL, 1),
(13, '2d5121222e83139d9137f4ca008a628d.jpg', NULL, 6),
(20, '228f20e82c9ba15e621536ee2593ba92.jpg', NULL, 6),
(23, 'demo', NULL, 0),
(30, '1ce4dfd5a59015c42ca155ee2d74072c.jpg', 'http://kfun.net', 23),
(36, 'Lưu Ngọc Diệp', NULL, 0),
(37, 'Phạm Thành Đạt', NULL, 0),
(39, 'aa1f92ac420601540743ae54d4314c62.jpg', NULL, 36),
(40, 'f8591712cd8bfb9fb943d698dab3861d.jpg', NULL, 36),
(41, '59be1f6a4cfbbaf6b5ab627b0cd0cda4.jpg', NULL, 36),
(42, '1d94459b058785cb81e5e9e02d0838bb.jpg', NULL, 37);

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `name`, `link`, `position`) VALUES
(2, 'e91041ea7e35e50048809dbd37fcf23e.jpg', 'htpp://saokpop.com/', 0),
(3, '151c8533b2d6bbcc070e1ee620766f1f.jpg', 'http://kfun.net', 0),
(4, 'd50d72b778df729ec85383d707b70ba2.jpg', 'http://saokpop.com', 0),
(10, '25a4f8a090a05ab85baf833ec1302e96.jpg', 'anh yeu em diep oi', 1),
(11, 'b563a05f902a856c5c101658f5889d37.jpg', 'http://saokpop.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `color` varchar(60) DEFAULT NULL,
  `icon` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `color`, `icon`) VALUES
(7, 'Fashion', 0, '#0c0c0c', '<i class="fa fa-battery-quarter"></i>'),
(8, 'other', 0, '#c6d9f0', '<i class="fa fa-battery-quarter"></i>'),
(9, 'Car', 0, '#c00000', '<i class="fa fa-battery-quarter"></i>'),
(10, 'demo', 0, '#e36c09', '<i class="fa fa-battery-quarter"></i>'),
(11, 'Coton candy', 0, '#ff6699', '<i class="fa fa-hand-peace-o"></i>'),
(12, 'Quần', 7, NULL, NULL),
(13, 'ok', 8, NULL, NULL),
(14, 'Car', 9, NULL, NULL),
(15, 'laravel', 0, '#76923c', '<'),
(16, 'okokoko', 15, NULL, NULL),
(17, 'okokokokokokok', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `product_id`) VALUES
(11, 'pink', 12),
(12, 'red', 12),
(13, 'green', 12);

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE IF NOT EXISTS `configs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `phone` int(60) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `policy` varchar(500) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `title`, `description`, `phone`, `address`, `email`, `policy`, `logo`) VALUES
(1, 'My shop', 'Thông tin miêu tả shop', 123456789, 'Đà nẵng - vIệt nam', 'thunderclap1300@gmail.com', 'Chưa có', 'd0761abc1870e5a9c29ba3d7578d4f65.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `product_id`) VALUES
(44, '4557aff5d1c07326bad8772fabef4b09.jpg', 5),
(45, 'dddce46ce0b5f8703576eced86e07ac8.jpg', 5),
(46, 'f81fb8d4f38604b35e9828df1defe5af.jpg', 11),
(47, '37315e1c212bd6c60c3004ab8cc7a291.jpg', 11),
(50, 'fdb85cae17083aa4c69c92bafe9605f1.jpg', 12),
(51, 'ffe463e3fab21d084551a266a5ca0c9d.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_10_26_024839_create-users-table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `code` varchar(60) NOT NULL,
  `status` int(11) NOT NULL,
  `short_detail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `long_detail` varchar(500) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sales` int(11) DEFAULT NULL,
  `feature` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `code`, `status`, `short_detail`, `image`, `long_detail`, `category_id`, `sales`, `feature`) VALUES
(5, 'ád', 45645, 'áda', 1, 'op[op[op[', '1cd05ff49fa1db98f0e3688cef3b671e.jpg', '<p>123123</p>\r\n', 14, 1, 0),
(11, 'Diệp', 1232, 'dl102', 0, '123', '413750b0988eb5618a20956870dfe422.jpg', '<p>123123123</p>\r\n', 13, 1, 0),
(12, 'demo1', 500000, 'demo2', 0, 'không có gì cả', '7d8a32c44664456af3166e850b924dc6.jpg', '<p>ok babe</p>\r\n', 12, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'Nguyễn', 'Tuấn', 'admin@gmail.com', '$2y$10$H7sX7ORjxttlgyx1cfLBz.NdCTlUgXLOW/2cpogOX1Dh9w.mLcB9S', '2015-10-26 10:50:01', '2015-10-28 09:45:45', 'htFmgSqxVf9x8qypZFYMpUusdKVR8PZDMjWFazLAjekEqZAsmK4Yv4qtQt0s'),
(2, 'thanh', 'dat', 'thunderclap560@gmail.com', '$2y$10$dFJATSt9b5XFK0Ic9MaFz.LuWG0OzuInMdg4trJzlzkLiS9.1bKhe', '2015-10-26 10:54:39', '2015-10-26 10:54:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
