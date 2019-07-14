-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 14, 2019 at 03:18 AM
-- Server version: 5.7.23
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.12334455');

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `photo` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `photo`, `description`, `icon`) VALUES
(1, 'Our Mission', 'about-mission.jpg', 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ', 'ion-ios-speedometer-outline'),
(2, 'Our Plan', 'about-plan.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'ion-ios-list-outline'),
(3, 'Our Feature', 'about-vision.jpg', 'សាកលវិទ្យាល័យ', 'ion-ios-eye-outline');

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

DROP TABLE IF EXISTS `actions`;
CREATE TABLE IF NOT EXISTS `actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`id`, `title`, `description`) VALUES
(1, 'Request Quotation', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `logo` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `website` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `logo`, `description`, `email`, `phone`, `address`, `website`) VALUES
(1, 'Vdoo Team', 'MOH_logo.png', 'Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. ', 'info@vdoo.biz', '017837754', 'Phnom Penh, Cambodia', 'www.vdoo.biz');

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

DROP TABLE IF EXISTS `facts`;
CREATE TABLE IF NOT EXISTS `facts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `client` varchar(30) NOT NULL,
  `project` varchar(30) NOT NULL,
  `hour` varchar(30) NOT NULL,
  `worker` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `title`, `description`, `client`, `project`, `hour`, `worker`, `photo`) VALUES
(1, 'Facts', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque', '250', '300', '2000', '50', 'facts-img.png');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
CREATE TABLE IF NOT EXISTS `features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `description`, `icon`) VALUES
(1, 'Feature', 'This is my webpage', 'ion-ios-bookmarks-outline'),
(2, 'Feature stucture', 'This is my second page', 'ion-ios-stopwatch-outline'),
(4, 'Feature', 'Sed ut perspiciatis', 'ion-ios-heart-outline');

-- --------------------------------------------------------

--
-- Table structure for table `footer_menus`
--

DROP TABLE IF EXISTS `footer_menus`;
CREATE TABLE IF NOT EXISTS `footer_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `url` varchar(100) NOT NULL,
  `order_number` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_menus`
--

INSERT INTO `footer_menus` (`id`, `name`, `url`, `order_number`) VALUES
(1, 'Home', '#', 1),
(2, 'About Us', '#', 2),
(3, 'Services', '#', 3),
(4, 'Privacy', '#', 4);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_services`
--

DROP TABLE IF EXISTS `our_services`;
CREATE TABLE IF NOT EXISTS `our_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `our_services`
--

INSERT INTO `our_services` (`id`, `title`, `description`, `icon`) VALUES
(1, 'Home Sevice', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'ion-ios-analytics-outline'),
(2, 'Dolor Sitema', 'Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata', 'ion-ios-bookmarks-outline'),
(3, 'Sed ut perspiciatis', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'ion-ios-paper-outline'),
(4, 'Magni Dolores', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'ion-ios-speedometer-outline'),
(5, 'Nemo Enim', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', 'ion-ios-barcode-outline'),
(6, 'Eiusmod Tempor', 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi', 'ion-ios-people-outline');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `url`) VALUES
(1, 'Name', '<p>DDF</p>', 'page/1');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin123'),
(2, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `description`) VALUES
(1, 'Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

DROP TABLE IF EXISTS `slides`;
CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `order_number` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `description`, `url`, `photo`, `order_number`) VALUES
(1, 'We are professional', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '#featured-services', '1.jpg', 1),
(2, 'At vero eos et accusamus', 'Nam libero tempore, cum soluta nobis est eligend', '#featured-services', '2.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

DROP TABLE IF EXISTS `socials`;
CREATE TABLE IF NOT EXISTS `socials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `url` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `order_number` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `url`, `icon`, `order_number`) VALUES
(1, 'Facebook', '#', 'fa fa-facebook', 1),
(2, 'Linkedin', '#', 'fa fa-linkedin', 2),
(3, 'youtube', '#', 'fa fa-youtube', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `photo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `phone`, `photo`) VALUES
(1, 'borin', 'borin', 'borintout@gmail.com', NULL, '$2y$10$0uu4Q/BI/v7wr1t4.ft/petGDfVdK9YrdDgc/VXpQ9P2/hSLRBkaa', 'BDCs15Ij7eEFsKbn5TjenzhtPu2OyZ5Tpgy1wZbvzlaTWz1lMXv4BHyhI1pu', '2019-03-16 19:22:05', '2019-03-16 19:22:05', 1, '', ''),
(2, 'KARABINE', '', 'karabine@gmail.com', NULL, '$2y$10$9LaXfLw1xp45vXdVF7S6lu1zX7hcAaaJiPIa7SYHCH7c/f/JY0iay', NULL, NULL, NULL, 2, '1234', 'uploads/users/FXl8Hgqlj2SLYlnzkPHf9QUAKe8LXsKpgYlDCeJ5.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
