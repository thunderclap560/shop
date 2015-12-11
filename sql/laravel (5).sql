-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2015 at 10:12 AM
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
-- Table structure for table `advertise`
--

CREATE TABLE IF NOT EXISTS `advertise` (
  `id` int(1) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` int(12) DEFAULT NULL,
  `price_sales` int(12) DEFAULT NULL,
  `short_detail` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`id`, `image`, `link`, `type`, `parent_id`, `product_id`, `price`, `price_sales`, `short_detail`, `name`, `alias`) VALUES
(1, '95ecd2201a2dad65fa463e81bfb1da1e.jpg', 'http://saokpop.com', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '899eae357cf0fd38ef572999c78e0730.jpeg', 'http://kfun.net', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '84a985b2b520b03e268cca547a19b34f.jpg', 'http://saokpop.com', 2, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'c320c57b64c6ab0247559d865e229c96.png', 'http://kfun.net', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'de79972279793d303ab35f06eeb72b07.jpg', 'http://kfun.net', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, '96033d53f0523fd014bf8eb57d93865f.jpg', '', 1, NULL, 34, 6000000, 4000000, 'Chorong (Apink) chia sẻ bí quyết để có thân hình hoàn hảo với Joker', 'Jocker Chorong', 'jocker-chorong'),
(34, 'fc81db44342712cbf5329bdc9b214e00.jpg', '', 1, NULL, 34, 6000000, 4000000, 'Chorong (Apink) chia sẻ bí quyết để có thân hình hoàn hảo với Joker', 'Jocker Chorong', 'jocker-chorong');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `name`, `link`, `position`) VALUES
(5, '98829741a4e28aebbd14216a071255c2.jpg', 'http://saokpop.com', 1),
(6, 'da32bff0191eb042d1c17c4095512ba3.jpg', 'http://saokpop.com', 0),
(7, '3f67a8968eb5c57c58f5f3274ebc6ec0.jpg', 'http://saokpop.com', 0),
(9, '720166c6ca6a09677a51f5cbf6578b44.jpg', 'http://saokpop.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `color` varchar(60) DEFAULT NULL,
  `icon` varchar(60) DEFAULT NULL,
  `pick` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `color`, `icon`, `pick`) VALUES
(80, 'YG Ent', 0, '#595959', '<i class="fa fa-university"></i>', 1),
(81, 'Cube Ent', 0, '#ff66cc', '<i class="fa fa-contao"></i>', 1),
(82, 'Apink', 81, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_advertise`
--

CREATE TABLE IF NOT EXISTS `category_advertise` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `advertises_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_advertise`
--

INSERT INTO `category_advertise` (`id`, `category_id`, `advertises_id`) VALUES
(44, 81, 3),
(45, 81, 2),
(46, 80, 1),
(47, 80, 3);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `product_id`) VALUES
(38, 'black', 30);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `content` varchar(500) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `rates` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `product_id`, `parent_id`, `rates`, `created_at`, `updated_at`) VALUES
(36, 'adasdasd', 2, 26, 0, 4, '2015-12-05 22:58:46', '2015-12-05 22:58:46'),
(37, 'okok', 2, 26, 36, NULL, '2015-12-05 22:59:00', '2015-12-05 22:59:00'),
(38, 'okok', 2, 26, 0, 5, '2015-12-05 22:59:32', '2015-12-05 22:59:32'),
(39, 'fdsfs', 2, 26, 38, NULL, '2015-12-05 22:59:44', '2015-12-05 22:59:44'),
(40, 'sdfsdf', 2, 26, 36, NULL, '2015-12-05 22:59:48', '2015-12-05 22:59:48'),
(41, 'tuyet voi', 2, 29, 0, 5, '2015-12-11 11:24:11', '2015-12-11 11:24:11');

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
  `logo` varchar(255) DEFAULT NULL,
  `tutorial` longtext,
  `popup` int(11) NOT NULL,
  `image_popup` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `title`, `description`, `phone`, `address`, `email`, `policy`, `logo`, `tutorial`, `popup`, `image_popup`) VALUES
(1, 'My shop', 'Thông tin miêu tả shop', 123456789, 'Đà nẵng - vIệt nam', 'thunderclap1300@gmail.com', 'Áp dụng cho khách hàng ngoài khu vực hỗ trợ giao nhận miễn phí và khách hàng có nhu cầu sử dụng phương thức thanh toán này', '268625ebd813e3e6d42ff1bd730e84a2.png', 'Quý khách đến văn phòng Trung tâm Thương mại Nguyễn Kim tại Tầng 5, Số 63-65-67 Trần Hưng Đạo, Quận 1, TP. HCM để thực hiện thanh toán', 1, '957783ef86d1c2ca0f7c1c8ffcf3870d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE IF NOT EXISTS `coupons` (
  `id` int(11) NOT NULL,
  `code` varchar(60) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `product_id`) VALUES
(71, 'c578a6508cac9a165c36b86a661582df.jpg', 30),
(72, '8cbb9e7490e6524ce2aedbcdd56eaac5.jpg', 30),
(73, 'b06cafc4b2f5b172cb4470867f9c6f17.jpg', 30);

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
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `view` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`, `view`, `alias`) VALUES
(3, 'Apink thông tin', '<p>A Pink&nbsp;(에이핑크; c&aacute;ch điệu th&agrave;nh&nbsp;Apink) l&agrave; một nh&oacute;m nhạc nữ H&agrave;n Quốc, th&agrave;nh lập năm 2011, trực thuộc C&ocirc;ng ty Giải tr&iacute;&nbsp;<a href="https://vi.wikipedia.org/wiki/A_Cube_Entertainment">A Cube Entertainment</a>.<a href="https://vi.wikipedia.org/wiki/Apink#cite_note-1">[1]</a>&nbsp;Nh&oacute;m nhạc gồm&nbsp;<a href="https://vi.wikipedia.org/wiki/Park_Cho-rong">Park Cho Rong</a>&nbsp;(trưởng nh&oacute;m),&nbsp;<a href="https://vi.wikipedia.org/wiki/Yoon_Bo_Mi">Yoon Bo Mi</a>,&nbsp;<a href="https://vi.wikipedia.org/wiki/Jung_Eun-ji">Jung Eun Ji</a>,&nbsp;<a href="https://vi.wikipedia.org/wiki/Son_Na-eun">Son Na Eun</a>,&nbsp;<a href="https://vi.wikipedia.org/wiki/Kim_Nam_Joo_(ca_s%C4%A9)">Kim Nam Joo</a>v&agrave;&nbsp;<a href="https://vi.wikipedia.org/wiki/Oh_Ha_Young">Oh Ha Young</a>&nbsp;(em &uacute;t). Th&agrave;nh vi&ecirc;n&nbsp;<a href="https://vi.wikipedia.org/wiki/Hong_Yoo-kyung">Hong Yoo Kyung</a>&nbsp;rời nh&oacute;m v&agrave;o th&aacute;ng 4, 2013 để tập trung cho việc học.</p>\r\n\r\n<p>Kể từ khi ra mắt đến nay, nh&oacute;m đ&atilde; ph&aacute;t h&agrave;nh 5 mini-album v&agrave; 3 album ph&ograve;ng thu. Nh&oacute;m ra mắt lần đầu ti&ecirc;n, v&agrave;o ng&agrave;y 21 th&aacute;ng 4 năm 2011, với b&agrave;i h&aacute;t &quot;Mollayo&quot; (몰라요; &quot;I Don&#39;t Know&quot;) tr&iacute;ch từ mini-album đầu ti&ecirc;n&nbsp;<em>Seven Springs of A Pink</em>, trong chương tr&igrave;nh&nbsp;<a href="https://vi.wikipedia.org/wiki/Mnet_(TV_channel)">Mnet</a>&#39;s&nbsp;<em><a href="https://vi.wikipedia.org/wiki/M!_Countdown">M! Countdown</a></em>. Nh&oacute;m đ&atilde; gi&agrave;nh được nhiều giải thưởng d&agrave;nh cho c&aacute;c nh&oacute;m nhạc mới như Golden Disk Awards lần thứ 26, Seoul Music Awards lần thứ 21 v&agrave; Mnet Asian Music Awards lần thứ 13. Chương tr&igrave;nh &acirc;m nhạc đầu ti&ecirc;n m&agrave; A Pink gi&agrave;nh thắng lợi l&agrave; M! Countdown v&agrave;o ng&agrave;y 5 th&aacute;ng 1 năm 2012 cho ca kh&uacute;c &quot;My My&quot; nằm trong mini-album thứ 2,<em>Snow Pink</em>.</p>\r\n', 'd2b30ddebed14229ae3d4567041686b4.jpg', '2015-12-11 02:58:16', '0000-00-00 00:00:00', 5, 'apink-thong-tin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `total` int(60) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `valid` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` longtext,
  `alias` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `content`, `alias`) VALUES
(1, 'CHÍNH SÁCH ĐỔI TRẢ HÀNG', '<p>&nbsp;1) &nbsp;Quy định chung :</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; - H&agrave;ng c&ograve;n nguy&ecirc;n trạng k&ecirc;̉ từ l&uacute;c nh&acirc;̣n h&agrave;ng g&ocirc;̀m: Nguy&ecirc;n tem, mạc, kh&ocirc;ng bị dơ bẩn, hư hỏng, trầy xước, c&oacute; m&ugrave;i đ&atilde; qua sử dụng hoặc đ&atilde; qua giặt, tẩy</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; - Đăng k&yacute; trả h&agrave;ng trong v&ograve;ng 15 ng&agrave;y kể từ ng&agrave;y nhận h&agrave;ng. Giữ nguy&ecirc;n trạng sản ph&acirc;̉m v&agrave; ho&aacute; đơn c&ugrave;ng c&aacute;c gi&acirc;́y tờ li&ecirc;n quan.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) Vấn đề đổi h&agrave;ng :</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ho&agrave;n to&agrave;n được đ&ocirc;̉i lại n&ecirc;́u do ph&iacute;a&nbsp;<a href="http://smax.vn/">Smax.vn</a></p>\r\n\r\n<p>giao nhầm m&agrave;u, nhầm size , nhầm sản phẩm</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3) Vấn đề trả h&agrave;ng:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được quyền trả h&agrave;ng n&ecirc;́u: sản phẩm bị hư hỏng do nh&agrave; sản xuất, h&atilde;ng vận chuyển</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4) Ph&iacute; vận chuyển đổi trả:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được mi&ecirc;̃n ph&iacute;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5) Lưu &yacute; :<em>&nbsp;&nbsp;Ngo&agrave;i trường hợp được quyền đổi trả h&agrave;ng n&ecirc;u tr&ecirc;n, ch&uacute;ng t&ocirc;i kh&ocirc;ng chấp nhận xử l&iacute; c&aacute;c vấn đề kh&aacute;c.</em></p>\r\n', 'chinh-sach-doi-tra-hang'),
(2, 'Thông tin tuyển dụng', '<p>Để mang đến cho bạn những xu hướng thời trang cũng như những sản phẩm thời trang mới nhất, c&ugrave;ng với trải nghiệm mua sắm th&uacute; vị nhất,&nbsp;SMAX&nbsp;c&oacute; một đội ngũ nh&acirc;n vi&ecirc;n s&aacute;ng tạo đầy nhiệt huyết v&agrave; chuy&ecirc;n nghiệp. Ch&uacute;ng t&ocirc;i lu&ocirc;n nỗ lực để&nbsp;SMAX&nbsp;Việt Nam trở th&agrave;nh mạng mua sắm trực tuyến lớn nhất.</p>\r\n\r\n<p>Chất lượng dịch vụ lu&ocirc;n được đặt l&ecirc;n h&agrave;ng đầu. Đội ngũ nh&acirc;n vi&ecirc;n lu&ocirc;n được tuyển lựa cao cấp nhất. Do vậy, ch&uacute;ng t&ocirc;i lu&ocirc;n mong muốn nhận được sự quan t&acirc;m của bạn v&agrave; ch&agrave;o đ&oacute;n bạn tham gia đội ngũ nh&acirc;n vi&ecirc;n của ch&uacute;ng t&ocirc;i. SMAX c&oacute; nhiều vị tr&iacute; l&agrave;m việc kh&aacute;c nhau, t&ugrave;y theo khả năng của bạn.</p>\r\n\r\n<p>T&agrave;i năng, sự s&aacute;ng tạo cũng như đ&oacute;ng g&oacute;p của c&aacute;c bạn khi tham gia đội ngũ&nbsp;SMAX&nbsp;sẽ l&agrave; một động lực để đưa tới cho kh&aacute;ch h&agrave;ng những dịch vụ cũng như những trải nghiệm th&uacute; vị nhất khi mua sắm tại trang&nbsp;<a href="http://smax.vn/">http://smax.vn/</a>. H&atilde;y li&ecirc;n lạc với ch&uacute;ng t&ocirc;i,&nbsp;SMAX&nbsp;lu&ocirc;n ch&agrave;o đ&oacute;n bạn.</p>\r\n\r\n<p>H&atilde;y li&ecirc;n hệ với ch&uacute;ng t&ocirc;i qua mail: <strong>hotro.smax.vn@gmail.com</strong></p>\r\n', 'thong-tin-tuyen-dung');

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
  `feature` int(11) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `price_sales` int(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `pick` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `code`, `status`, `short_detail`, `image`, `long_detail`, `category_id`, `sales`, `feature`, `view`, `price_sales`, `size`, `alias`, `pick`) VALUES
(30, 'Jocker Chorong', 6000000, 'Chorong12', 0, 'Chorong (Apink) chia sẻ bí quyết để có thân hình hoàn hảo với Joker', 'f3c8646b68e62243428eea48626fe749.jpg', '<p><strong>Park Chorong</strong>&nbsp;của&nbsp;<strong>APink</strong>&nbsp;đ&atilde; xuất hiện trong một loạt ảnh của tạp ch&iacute; SURE số ra th&aacute;ng 12/2015 . C&aacute;c h&igrave;nh ảnh tập trung v&agrave;o cơ thể săn chắc của c&ocirc; ấy.</p>\r\n\r\n<p>Với 1&nbsp;cuộc phỏng vấn ngắn, c&ocirc; chia sẻ những b&iacute; mật về cơ thể ho&agrave;n hảo của m&igrave;nh. C&ocirc; ấy đ&atilde; tập thể dục pilate trong 8 năm. C&ocirc; n&oacute;i rằng sau khi bắt đầu tập pilates, phần dưới cơ thể của c', 82, 1, 1, 3, 4000000, 2, 'jocker-chorong', 1),
(31, 'Jocker Chorong', 6000000, 'Chorong12', 0, 'Chorong (Apink) chia sẻ bí quyết để có thân hình hoàn hảo với Joker', 'f3c8646b68e62243428eea48626fe749.jpg', '<p><strong>Park Chorong</strong>&nbsp;của&nbsp;<strong>APink</strong>&nbsp;đ&atilde; xuất hiện trong một loạt ảnh của tạp ch&iacute; SURE số ra th&aacute;ng 12/2015 . C&aacute;c h&igrave;nh ảnh tập trung v&agrave;o cơ thể săn chắc của c&ocirc; ấy.</p>\r\n\r\n<p>Với 1&nbsp;cuộc phỏng vấn ngắn, c&ocirc; chia sẻ những b&iacute; mật về cơ thể ho&agrave;n hảo của m&igrave;nh. C&ocirc; ấy đ&atilde; tập thể dục pilate trong 8 năm. C&ocirc; n&oacute;i rằng sau khi bắt đầu tập pilates, phần dưới cơ thể của c', 82, 1, 1, 1, 4000000, 2, 'jocker-chorong', 1),
(32, 'Jocker Chorong', 6000000, 'Chorong12', 0, 'Chorong (Apink) chia sẻ bí quyết để có thân hình hoàn hảo với Joker', 'f3c8646b68e62243428eea48626fe749.jpg', '<p><strong>Park Chorong</strong>&nbsp;của&nbsp;<strong>APink</strong>&nbsp;đ&atilde; xuất hiện trong một loạt ảnh của tạp ch&iacute; SURE số ra th&aacute;ng 12/2015 . C&aacute;c h&igrave;nh ảnh tập trung v&agrave;o cơ thể săn chắc của c&ocirc; ấy.</p>\r\n\r\n<p>Với 1&nbsp;cuộc phỏng vấn ngắn, c&ocirc; chia sẻ những b&iacute; mật về cơ thể ho&agrave;n hảo của m&igrave;nh. C&ocirc; ấy đ&atilde; tập thể dục pilate trong 8 năm. C&ocirc; n&oacute;i rằng sau khi bắt đầu tập pilates, phần dưới cơ thể của c', 82, 1, 1, 1, 4000000, 2, 'jocker-chorong', 1),
(33, 'Jocker Chorong', 6000000, 'Chorong12', 0, 'Chorong (Apink) chia sẻ bí quyết để có thân hình hoàn hảo với Joker', 'f3c8646b68e62243428eea48626fe749.jpg', '<p><strong>Park Chorong</strong>&nbsp;của&nbsp;<strong>APink</strong>&nbsp;đ&atilde; xuất hiện trong một loạt ảnh của tạp ch&iacute; SURE số ra th&aacute;ng 12/2015 . C&aacute;c h&igrave;nh ảnh tập trung v&agrave;o cơ thể săn chắc của c&ocirc; ấy.</p>\r\n\r\n<p>Với 1&nbsp;cuộc phỏng vấn ngắn, c&ocirc; chia sẻ những b&iacute; mật về cơ thể ho&agrave;n hảo của m&igrave;nh. C&ocirc; ấy đ&atilde; tập thể dục pilate trong 8 năm. C&ocirc; n&oacute;i rằng sau khi bắt đầu tập pilates, phần dưới cơ thể của c', 82, 1, 1, 1, 4000000, 2, 'jocker-chorong', 1),
(34, 'Jocker Chorong', 6000000, 'Chorong12', 0, 'Chorong (Apink) chia sẻ bí quyết để có thân hình hoàn hảo với Joker', 'f3c8646b68e62243428eea48626fe749.jpg', '<p><strong>Park Chorong</strong>&nbsp;của&nbsp;<strong>APink</strong>&nbsp;đ&atilde; xuất hiện trong một loạt ảnh của tạp ch&iacute; SURE số ra th&aacute;ng 12/2015 . C&aacute;c h&igrave;nh ảnh tập trung v&agrave;o cơ thể săn chắc của c&ocirc; ấy.</p>\r\n\r\n<p>Với 1&nbsp;cuộc phỏng vấn ngắn, c&ocirc; chia sẻ những b&iacute; mật về cơ thể ho&agrave;n hảo của m&igrave;nh. C&ocirc; ấy đ&atilde; tập thể dục pilate trong 8 năm. C&ocirc; n&oacute;i rằng sau khi bắt đầu tập pilates, phần dưới cơ thể của c', 82, 1, 1, 2, 4000000, 2, 'jocker-chorong', 1),
(35, 'Jocker Chorong', 6000000, 'Chorong12', 0, 'Chorong (Apink) chia sẻ bí quyết để có thân hình hoàn hảo với Joker', 'f3c8646b68e62243428eea48626fe749.jpg', '<p><strong>Park Chorong</strong>&nbsp;của&nbsp;<strong>APink</strong>&nbsp;đ&atilde; xuất hiện trong một loạt ảnh của tạp ch&iacute; SURE số ra th&aacute;ng 12/2015 . C&aacute;c h&igrave;nh ảnh tập trung v&agrave;o cơ thể săn chắc của c&ocirc; ấy.</p>\r\n\r\n<p>Với 1&nbsp;cuộc phỏng vấn ngắn, c&ocirc; chia sẻ những b&iacute; mật về cơ thể ho&agrave;n hảo của m&igrave;nh. C&ocirc; ấy đ&atilde; tập thể dục pilate trong 8 năm. C&ocirc; n&oacute;i rằng sau khi bắt đầu tập pilates, phần dưới cơ thể của c', 82, 1, 1, 1, 4000000, 2, 'jocker-chorong', 1),
(36, 'Jocker Chorong', 6000000, 'Chorong12', 0, 'Chorong (Apink) chia sẻ bí quyết để có thân hình hoàn hảo với Joker', 'f3c8646b68e62243428eea48626fe749.jpg', '<p><strong>Park Chorong</strong>&nbsp;của&nbsp;<strong>APink</strong>&nbsp;đ&atilde; xuất hiện trong một loạt ảnh của tạp ch&iacute; SURE số ra th&aacute;ng 12/2015 . C&aacute;c h&igrave;nh ảnh tập trung v&agrave;o cơ thể săn chắc của c&ocirc; ấy.</p>\r\n\r\n<p>Với 1&nbsp;cuộc phỏng vấn ngắn, c&ocirc; chia sẻ những b&iacute; mật về cơ thể ho&agrave;n hảo của m&igrave;nh. C&ocirc; ấy đ&atilde; tập thể dục pilate trong 8 năm. C&ocirc; n&oacute;i rằng sau khi bắt đầu tập pilates, phần dưới cơ thể của c', 82, 1, 1, 5, 4000000, 2, 'jocker-chorong', 1);

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
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(20) NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roles` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`, `remember_token`, `phone`, `country`, `address`, `roles`, `type`, `status`) VALUES
(1, 'Nguyễn', 'Tuấn', 'admin@gmail.com', '$2y$10$H7sX7ORjxttlgyx1cfLBz.NdCTlUgXLOW/2cpogOX1Dh9w.mLcB9S', '2015-10-26 10:50:01', '2015-12-06 02:01:26', 'B1nN9wYL4bGP3EpgLeI2cAZg5Q5P7rfLxYKrZSZsOg6mqKv7xdBcZwe9De19', 0, NULL, NULL, 1, NULL, 0),
(2, 'thanh', 'dat', 'thunderclap560@gmail.com', '$2y$10$dFJATSt9b5XFK0Ic9MaFz.LuWG0OzuInMdg4trJzlzkLiS9.1bKhe', '2015-10-26 10:54:39', '2015-11-23 08:02:13', 'FBe5Hzf0WQ0JU0ETYa0Y4rrtmTQsE37iTbKF9DHGXx6DOpblE3ivVBO9S6TF', 0, NULL, NULL, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `category_advertise`
--
ALTER TABLE `category_advertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `category_advertise`
--
ALTER TABLE `category_advertise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
