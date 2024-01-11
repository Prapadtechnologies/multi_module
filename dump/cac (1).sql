-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 04:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cac`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `theme_type` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT '1=Food,2=Grocery,3=Ecommerce,4=Real estate	',
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime DEFAULT NULL,
  `row_status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `theme_type`, `description`, `created_at`, `modified_at`, `row_status`) VALUES
(1, '1', '<h1>Terms &amp; Conditions(Food)</h1>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Please read the following terms and conditions carefully as it sets out the terms of a legally binding agreement between you (the reader) and Business Standard Private Limited.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>1) Introduction</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>This following sets out the terms and conditions on which you may use the content on&nbsp;<br />\r\n	<a href=\"http://www.business-standard.com/\" target=\"_blank\">business-standard.com</a>&nbsp;website, business-standard.com&#39;s mobile browser site, Business Standard instore Applications and other digital publishing services (<a href=\"http://www.smartinvestor.in/\" target=\"_blank\">www.smartinvestor.in</a>,&nbsp;<a href=\"http://www.bshindi.com/\" target=\"_blank\">www.bshindi.com</a>&nbsp;and&nbsp;<a href=\"http://www.bsmotoring.com/\" target=\"_blank\">www.bsmotoring,com</a>) owned by Business Standard Private Limited, all the services herein will be referred to as Business Standard Content Services.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>2) Registration Access and Use</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>We welcome users to register on our digital platforms. We offer the below mentioned registration services which may be subject to change in the future. All changes will be appended in the terms and conditions page and communicated to existing users by email.</p>\r\n\r\n	<p>Registration services are offered for individual subscribers only. If multiple individuals propose to access the same account or for corporate accounts kindly contact or write in to us. Subscription rates will vary for multiple same time access.</p>\r\n\r\n	<p>The nature and volume of Business Standard content services you consume on the digital platforms will vary according to the type of registration you choose, on the geography you reside or the offer you subscribe to.</p>\r\n\r\n	<p>a) Free Registration</p>\r\n\r\n	<p>b) Premium Registration</p>\r\n\r\n	<p>c) Special Offers</p>\r\n\r\n	<p>d) Combo registrations with partners</p>\r\n\r\n	<p>The details of the services and access offered for each account have been listed on&nbsp;<br />\r\n	<a href=\"http://www.business-standard.com/subscription-cart/product\" target=\"_blank\">www.business-standard.com/subscription-cart/product</a></p>\r\n\r\n	<p>We may in exceptional circumstances cease to provide subscription services. We will give you at least 7 days notice of this, if possible. If we do so, then we will have no further obligation to you.</p>\r\n	</li>\r\n</ul>\r\n', '2023-12-28 14:07:27', NULL, 1),
(2, '2', '<h1>Terms &amp; Conditions(Grocery)</h1>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Please read the following terms and conditions carefully as it sets out the terms of a legally binding agreement between you (the reader) and Business Standard Private Limited.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>1) Introduction</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>This following sets out the terms and conditions on which you may use the content on&nbsp;<br />\r\n	<a href=\"http://www.business-standard.com/\" target=\"_blank\">business-standard.com</a>&nbsp;website, business-standard.com&#39;s mobile browser site, Business Standard instore Applications and other digital publishing services (<a href=\"http://www.smartinvestor.in/\" target=\"_blank\">www.smartinvestor.in</a>,&nbsp;<a href=\"http://www.bshindi.com/\" target=\"_blank\">www.bshindi.com</a>&nbsp;and&nbsp;<a href=\"http://www.bsmotoring.com/\" target=\"_blank\">www.bsmotoring,com</a>) owned by Business Standard Private Limited, all the services herein will be referred to as Business Standard Content Services.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>2) Registration Access and Use</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>We welcome users to register on our digital platforms. We offer the below mentioned registration services which may be subject to change in the future. All changes will be appended in the terms and conditions page and communicated to existing users by email.</p>\r\n\r\n	<p>Registration services are offered for individual subscribers only. If multiple individuals propose to access the same account or for corporate accounts kindly contact or write in to us. Subscription rates will vary for multiple same time access.</p>\r\n\r\n	<p>The nature and volume of Business Standard content services you consume on the digital platforms will vary according to the type of registration you choose, on the geography you reside or the offer you subscribe to.</p>\r\n\r\n	<p>a) Free Registration</p>\r\n\r\n	<p>b) Premium Registration</p>\r\n\r\n	<p>c) Special Offers</p>\r\n\r\n	<p>d) Combo registrations with partners</p>\r\n\r\n	<p>The details of the services and access offered for each account have been listed on&nbsp;<br />\r\n	<a href=\"http://www.business-standard.com/subscription-cart/product\" target=\"_blank\">www.business-standard.com/subscription-cart/product</a></p>\r\n\r\n	<p>We may in exceptional circumstances cease to provide subscription services. We will give you at least 7 days notice of this, if possible. If we do so, then we will have no further obligation to you.</p>\r\n	</li>\r\n</ul>\r\n', '2023-12-28 14:41:38', NULL, 1),
(3, '3', '<h1>Terms &amp; Conditions(Ecommerce)</h1>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Please read the following terms and conditions carefully as it sets out the terms of a legally binding agreement between you (the reader) and Business Standard Private Limited.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>1) Introduction</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>This following sets out the terms and conditions on which you may use the content on&nbsp;<br />\r\n	<a href=\"http://www.business-standard.com/\" target=\"_blank\">business-standard.com</a>&nbsp;website, business-standard.com&#39;s mobile browser site, Business Standard instore Applications and other digital publishing services (<a href=\"http://www.smartinvestor.in/\" target=\"_blank\">www.smartinvestor.in</a>,&nbsp;<a href=\"http://www.bshindi.com/\" target=\"_blank\">www.bshindi.com</a>&nbsp;and&nbsp;<a href=\"http://www.bsmotoring.com/\" target=\"_blank\">www.bsmotoring,com</a>) owned by Business Standard Private Limited, all the services herein will be referred to as Business Standard Content Services.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>2) Registration Access and Use</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>We welcome users to register on our digital platforms. We offer the below mentioned registration services which may be subject to change in the future. All changes will be appended in the terms and conditions page and communicated to existing users by email.</p>\r\n\r\n	<p>Registration services are offered for individual subscribers only. If multiple individuals propose to access the same account or for corporate accounts kindly contact or write in to us. Subscription rates will vary for multiple same time access.</p>\r\n\r\n	<p>The nature and volume of Business Standard content services you consume on the digital platforms will vary according to the type of registration you choose, on the geography you reside or the offer you subscribe to.</p>\r\n\r\n	<p>a) Free Registration</p>\r\n\r\n	<p>b) Premium Registration</p>\r\n\r\n	<p>c) Special Offers</p>\r\n\r\n	<p>d) Combo registrations with partners</p>\r\n\r\n	<p>The details of the services and access offered for each account have been listed on&nbsp;<br />\r\n	<a href=\"http://www.business-standard.com/subscription-cart/product\" target=\"_blank\">www.business-standard.com/subscription-cart/product</a></p>\r\n\r\n	<p>We may in exceptional circumstances cease to provide subscription services. We will give you at least 7 days notice of this, if possible. If we do so, then we will have no further obligation to you.</p>\r\n	</li>\r\n</ul>\r\n', '2023-12-28 14:50:27', NULL, 1),
(4, '4', '<h1>Terms &amp; Conditions(Realestae)</h1>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Please read the following terms and conditions carefully as it sets out the terms of a legally binding agreement between you (the reader) and Business Standard Private Limited.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>1) Introduction</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>This following sets out the terms and conditions on which you may use the content on&nbsp;<br />\r\n	<a href=\"http://www.business-standard.com/\" target=\"_blank\">business-standard.com</a>&nbsp;website, business-standard.com&#39;s mobile browser site, Business Standard instore Applications and other digital publishing services (<a href=\"http://www.smartinvestor.in/\" target=\"_blank\">www.smartinvestor.in</a>,&nbsp;<a href=\"http://www.bshindi.com/\" target=\"_blank\">www.bshindi.com</a>&nbsp;and&nbsp;<a href=\"http://www.bsmotoring.com/\" target=\"_blank\">www.bsmotoring,com</a>) owned by Business Standard Private Limited, all the services herein will be referred to as Business Standard Content Services.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>2) Registration Access and Use</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>We welcome users to register on our digital platforms. We offer the below mentioned registration services which may be subject to change in the future. All changes will be appended in the terms and conditions page and communicated to existing users by email.</p>\r\n\r\n	<p>Registration services are offered for individual subscribers only. If multiple individuals propose to access the same account or for corporate accounts kindly contact or write in to us. Subscription rates will vary for multiple same time access.</p>\r\n\r\n	<p>The nature and volume of Business Standard content services you consume on the digital platforms will vary according to the type of registration you choose, on the geography you reside or the offer you subscribe to.</p>\r\n\r\n	<p>a) Free Registration</p>\r\n\r\n	<p>b) Premium Registration</p>\r\n\r\n	<p>c) Special Offers</p>\r\n\r\n	<p>d) Combo registrations with partners</p>\r\n\r\n	<p>The details of the services and access offered for each account have been listed on&nbsp;<br />\r\n	<a href=\"http://www.business-standard.com/subscription-cart/product\" target=\"_blank\">www.business-standard.com/subscription-cart/product</a></p>\r\n\r\n	<p>We may in exceptional circumstances cease to provide subscription services. We will give you at least 7 days notice of this, if possible. If we do so, then we will have no further obligation to you.</p>\r\n	</li>\r\n</ul>\r\n', '2023-12-28 14:54:40', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp(),
  `row_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=Deleted,1=Active,2=Inactive',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `created_at`, `modified_at`, `row_status`, `user_id`) VALUES
(1, '', '2024-01-10 15:52:41', '2024-01-10 15:52:41', 1, 7),
(2, '', '2024-01-10 15:52:51', '2024-01-10 15:52:51', 1, 10),
(3, '', '2024-01-10 15:53:54', '2024-01-10 15:53:54', 1, 6),
(4, '', '2024-01-10 15:54:06', '2024-01-10 15:54:06', 1, 9),
(5, '', '2024-01-10 16:21:07', '2024-01-10 16:21:07', 1, 8),
(6, '', '2024-01-10 16:35:01', '2024-01-10 16:35:01', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime DEFAULT NULL,
  `row_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=Deleted,1=Active, 2=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `created_at`, `modified_at`, `row_status`) VALUES
(1, 'Blog1', '<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n', '2019-12-24 15:05:48', NULL, 1),
(2, 'bhkbh', '<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n', '2019-12-24 15:11:45', NULL, 1),
(3, 'Blog 3 For testing', '<p>&nbsp;</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p><img alt=\"blog-details\" src=\"http://localhost/ca/uploads/blog/2.jpg\" style=\"height:750px; width:1000px\" /></p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n\r\n<p>As a WordPress developer, whenever you build a new theme, plugin or even if you are testing out new features of WordPress that you might not be familiar with. There&rsquo;s one task that get&rsquo;s extremely repetitive, cumbersome and mundane.</p>\r\n\r\n<p>You will always need to create some custom dummy data to test whether your plugin is working as expected, and as developers ourselves we have had this problem quite a lot. Thankfully, there are easy ways to solve it.</p>\r\n', '2019-12-26 11:49:07', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `theme_type` varchar(1) NOT NULL COMMENT '1=Food,2=Grocery,3=Ecommerce,4=Real estate	',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL,
  `row_status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `password`, `theme_type`, `created_at`, `modified_at`, `row_status`) VALUES
(1, 'Alison B', 'alison@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '1', '2024-01-06 12:50:26', '0000-00-00 00:00:00', 1),
(2, ' Julia L', 'julia@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '2', '2024-01-06 12:51:25', '0000-00-00 00:00:00', 1),
(3, 'Harika', 'harika@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '3', '2024-01-06 12:51:52', '0000-00-00 00:00:00', 1),
(4, 'Mohan', 'mohan@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '4', '2024-01-06 12:52:13', '0000-00-00 00:00:00', 1),
(5, 'Raghu', 'raghu@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '1', '2024-01-06 12:52:28', '0000-00-00 00:00:00', 1),
(6, 'Ram', 'ram@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '2', '2024-01-06 12:52:42', '0000-00-00 00:00:00', 1),
(7, 'Lakshmi', 'lakshmi@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '3', '2024-01-06 12:53:09', '0000-00-00 00:00:00', 1),
(8, 'Krishna', 'krishna@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '4', '2024-01-06 12:53:48', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime DEFAULT NULL,
  `row_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=Deleted,1=Active,2=Inactive',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `modified_at`, `row_status`, `user_id`) VALUES
(1, 'Is flat available', 'Yes\r\n', '2024-01-06 12:58:02', NULL, 1, 8),
(2, 'Free Shipping available', 'No', '2024-01-06 12:58:33', NULL, 1, 7),
(3, 'Any Discount', 'No', '2024-01-06 12:58:55', NULL, 1, 7),
(4, 'Groceries Extra Discount', 'Yes', '2024-01-06 12:59:11', NULL, 1, 6),
(5, 'How the Food taste', 'Good', '2024-01-06 13:02:18', NULL, 1, 5),
(6, 'New Grocery added', 'Yes\r\n', '2024-01-09 12:55:06', NULL, 1, 8),
(7, 'Grocery', 'Good', '2024-01-09 13:07:14', NULL, 1, 8),
(8, 'Food', 'food', '2024-01-09 13:08:47', NULL, 1, 7),
(9, 'Grocery', 'Grocery Good', '2024-01-09 14:04:29', NULL, 1, 6),
(10, 'Ecommerce have safe delivery', 'yes', '2024-01-09 15:13:43', NULL, 1, 8),
(11, 'Grocery have expired', 'No', '2024-01-09 15:17:54', NULL, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `feeling_formal`
--

CREATE TABLE `feeling_formal` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime DEFAULT NULL,
  `row_status` tinyint(4) NOT NULL DEFAULT 2 COMMENT '0=Deleted,1=Active,2=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feeling_formal`
--

INSERT INTO `feeling_formal` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `modified_at`, `row_status`) VALUES
(4, 'Bhanu', 'Bhanuprakash@gmail.com', '9390060633', 'Good', 'Good', '2023-12-27 14:59:59', NULL, 2),
(5, 'Bhanu', 'Bhanuprakash@gmail.com', '9390060633', 'Good', 'Good', '2023-12-27 15:00:41', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_at` datetime NOT NULL,
  `logout_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `user_id`, `login_at`, `logout_at`) VALUES
(1, 1, '2024-01-11 09:02:43', '2024-01-09 17:07:24'),
(2, 2, '2020-01-03 15:35:27', '2020-01-03 12:39:29'),
(3, 3, '2019-12-20 16:39:05', '2019-12-20 16:40:17'),
(4, 4, '2019-12-26 18:44:32', '2019-12-26 18:38:58'),
(5, 5, '2019-12-27 16:16:21', '0000-00-00 00:00:00'),
(6, 6, '2024-01-10 10:50:02', '2024-01-10 12:24:19'),
(7, 8, '2024-01-09 17:07:34', '2024-01-09 17:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `promocodes`
--

CREATE TABLE `promocodes` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `code` varchar(20) NOT NULL,
  `discount` float NOT NULL,
  `valid_from` date DEFAULT NULL,
  `valid_to` date DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `row_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=Deleted,1=Active,2=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `promocodes`
--

INSERT INTO `promocodes` (`id`, `course_id`, `plan_id`, `name`, `code`, `discount`, `valid_from`, `valid_to`, `created_at`, `row_status`) VALUES
(1, 2, 5, 'MAHI', 'MAHI50', 10, '2019-12-11', '2020-01-20', '2019-12-13 18:09:37', 1),
(2, 2, 5, 'SA120', 'SA1220', 10, '2019-12-20', '2020-01-20', '2019-12-20 16:37:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `promo_discount`
--

CREATE TABLE `promo_discount` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `promo_id` int(11) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime DEFAULT NULL,
  `row_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=Deleted,1=Active,2=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `promo_discount`
--

INSERT INTO `promo_discount` (`id`, `user_id`, `promo_id`, `discount`, `created_at`, `modified_at`, `row_status`) VALUES
(1, 1, 1, 120, '2020-01-03 15:14:11', NULL, 1),
(2, 2, 1, 120, '2020-01-03 15:35:52', NULL, 1),
(3, 2, 1, 120, '2020-01-03 15:37:24', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `requestcallback`
--

CREATE TABLE `requestcallback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `reason` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime DEFAULT NULL,
  `row_status` tinyint(4) NOT NULL DEFAULT 3 COMMENT '0=Deleted,1=Completed,2=Processing,3=Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(30) NOT NULL,
  `code` varchar(10) NOT NULL,
  `unique_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `code`, `unique_id`) VALUES
(1, 'Super Admin', '', ''),
(2, 'Client', 'PPC', 'PPC_100000'),
(3, 'Evaluator', 'EVA', 'EVA_100001');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `setting_type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `row_status_cd` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0-Deleted 1-Active 2-Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `setting_type`, `description`, `created_by`, `created_at`, `modified_by`, `modified_at`, `row_status_cd`) VALUES
(1, 'system_name', 'CA Exam Series', 'System', '2019-04-30 15:41:07', NULL, '0000-00-00 00:00:00', 1),
(2, 'system_title', 'your success begins Here', 'System', '2019-04-30 15:41:07', NULL, '0000-00-00 00:00:00', 1),
(3, 'address', 'Hyderabad', 'System', '2019-04-30 15:41:07', NULL, '0000-00-00 00:00:00', 1),
(4, 'mobile', '9603960344', 'System', '2019-04-30 15:41:07', NULL, '0000-00-00 00:00:00', 1),
(5, 'system_email', 'info@caexamseries.com', 'System', '2019-04-30 15:41:07', NULL, '0000-00-00 00:00:00', 1),
(6, 'email_password', '123123', 'System', '2019-04-30 15:41:07', NULL, '0000-00-00 00:00:00', 1),
(7, 'sms_username', 'info@123', 'System', '2019-04-30 15:41:07', NULL, '0000-00-00 00:00:00', 1),
(8, 'sms_sender', 'TRAIL', 'System', '2019-04-30 15:41:07', NULL, '0000-00-00 00:00:00', 1),
(9, 'sms_hash', 'HASH', 'System', '2019-04-30 15:41:07', NULL, '0000-00-00 00:00:00', 1),
(10, 'privacy', '<h1>Privacy Policy</h1>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Please read the following terms and conditions carefully as it sets out the terms of a legally binding agreement between you (the reader) and Business Standard Private Limited.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>1) Introduction</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>This following sets out the terms and conditions on which you may use the content on&nbsp;<br />\r\n	<a href=\"http://www.business-standard.com/\" target=\"_blank\">business-standard.com</a>&nbsp;website, business-standard.com&#39;s mobile browser site, Business Standard instore Applications and other digital publishing services (<a href=\"http://www.smartinvestor.in/\" target=\"_blank\">www.smartinvestor.in</a>,&nbsp;<a href=\"http://www.bshindi.com/\" target=\"_blank\">www.bshindi.com</a>&nbsp;and&nbsp;<a href=\"http://www.bsmotoring.com/\" target=\"_blank\">www.bsmotoring,com</a>) owned by Business Standard Private Limited, all the services herein will be referred to as Business Standard Content Services.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>2) Registration Access and Use</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>We welcome users to register on our digital platforms. We offer the below mentioned registration services which may be subject to change in the future. All changes will be appended in the terms and conditions page and communicated to existing users by email.</p>\r\n\r\n	<p>Registration services are offered for individual subscribers only. If multiple individuals propose to access the same account or for corporate accounts kindly contact or write in to us. Subscription rates will vary for multiple same time access.</p>\r\n\r\n	<p>The nature and volume of Business Standard content services you consume on the digital platforms will vary according to the type of registration you choose, on the geography you reside or the offer you subscribe to.</p>\r\n\r\n	<p>a) Free Registration</p>\r\n\r\n	<p>b) Premium Registration</p>\r\n\r\n	<p>c) Special Offers</p>\r\n\r\n	<p>d) Combo registrations with partners</p>\r\n\r\n	<p>The details of the services and access offered for each account have been listed on&nbsp;<br />\r\n	<a href=\"http://www.business-standard.com/subscription-cart/product\" target=\"_blank\">www.business-standard.com/subscription-cart/product</a></p>\r\n\r\n	<p>We may in exceptional circumstances cease to provide subscription services. We will give you at least 7 days notice of this, if possible. If we do so, then we will have no further obligation to you.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>3) Privacy Policy and Registration</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>All information received by us from your registration on business-standard.com or other digital products of Business Standard will be used by Business Standard in accordance with our Privacy Policy. Kindly read the below mentioned details.</p>\r\n\r\n	<p>On registration, we expect you to provide Business Standard with an accurate and complete information of the compulsory fields. We also expect you to keep the information secure, specifically access passwords and payment information. Kindly update the information periodically to keep your account relevant. Business Standard will rely on any information you provide to us.</p>\r\n\r\n	<p>Each registration is for a single user only. On registration, you will choose a user name and password (&quot;ID&quot;). You are not allowed to share your ID or give access to your account to anyone else. Business Standard Premium subscription does not allow multiple users on a network or within an organization to use the same ID.</p>\r\n\r\n	<p>On knowledge, Business Standard may cancel or suspend your access to Business Standard premium services if it comes across you sharing your personal access without further obligation to you.</p>\r\n\r\n	<p>You are responsible for all the use of business-standard.com premium service made by you or anyone else using your ID and for preventing unauthorised use of your ID. If you believe there has been any breach of security such as the disclosure, theft or unauthorised use of your ID or any payment information, you must notify Business Standard immediately by e-mailing us at&nbsp;<a href=\"https://www.business-standard.com/issue-report/report\">assist@bsmail.in</a>. We recommend that you do not select an obvious user password (such as your name) and that you change it regularly.</p>\r\n\r\n	<p>If you provide Business Standard with an email address that will result in any messages Business Standard may send you being sent to you via a network or device operated or owned by a third party (e.g. your employer or college) then you promise that you are entitled to receive those messages. To ensure email&#39;s land in your inbox, you will add the bsmail receipt id to your safe list. You also agree that Business Standard may stop sending messages to you without notifying you.</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Important&nbsp;- Kindly note</p>\r\n	</li>\r\n	<li>\r\n	<p>(A) When you participate and choose to subscribe to joint content subscription offers that Business Standard partners with; your email id, access password and entered personal information will be shared with the participating content partner brand via an encrypted server to server protocol. This sharing is to facilitate your seamless access across the partner brand&#39;s platform. Once you login to the partner brand&#39;s platform, specific terms and privacy policies of the partner brand (mentioned on its website) will apply.</p>\r\n	</li>\r\n	<li>\r\n	<p>(B) Joint offers including special price offers are generally limited to new users on the partner sites. Clubbed Offers on partner sites will not be available to you should your email id be registered with the partner website.<br />\r\n	<br />\r\n	You are advised to study the offer before you subscribe.<br />\r\n	<br />\r\n	Merely subscribing to such a joint offer does not make you eligible to gain access to the partner platform. Business Standard does not take responsibility of providing you with an access on the partner site for existing users/subscribers of these sites.</p>\r\n	</li>\r\n	<li>\r\n	<p>(C) When you subscribe to joint offers supported by (non-content) brands; specific brands would ask you to share personal or private information in lieu of a value that the brand extends. By participating in such offers you implicitly and by confirming the terms of the offer you agree to share your registration information and personal data with the concerned brand. The brand or its associates may use this personal information to contact you with their promotional offers. Further by participating to such offers your will be additionally governed by the privacy policy and terms and conditions of the concerned brand. You are advised to go through them carefully before you decide to opt in.</p>\r\n	</li>\r\n	<li>\r\n	<p>As a registered user of or subscriber to business-standard.com you may choose to use business-standard.com&#39;s &quot;Remember me&quot; log in feature that enables you to be logged in automatically to business-standard.com whenever you visit business-standard.com without having to manually log in each time. We recommend that you do not enable this feature on any computer that is or may be used by anyone other than you in order to prevent unauthorized access by third parties to both your subscription details and features of business-standard.com personal to you.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>4. Personal Subscription Services</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Personal subscription services include Business Standard premium access to behind the pay wall content. When you subscribe to Business Standard Premium access, you gain access to opinion pieces, comment and exclusive features specially chosen for you by the Business Standard editors.</p>\r\n\r\n	<p>The nature of content behind the pay wall is subject to change; the final decision of which lies with the Editor.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Types of subscription:</strong></p>\r\n\r\n	<p>Services may differ from country to country and the device from which you subscribe. Subscriptions packages and price may also vary in time.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Contract formation:</strong></p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>Business Standard will try to process your subscription promptly but does not guarantee that your subscription will be activated by any specified time. By submitting your payment and other subscription details, you are making an offer to us to buy a subscription. Your offer will only be accepted by us and a contract formed when we have successfully verified your payment details and email address, at which point we will provide you with access to your subscription. Business Standard reserves the right to reject any offer in its discretion, for any or no reason.</p>\r\n\r\n	<p>Business Standard may partner with third party content providers to offer bundled services, under which the payment for both the services will be collected by Business Standard. Business Standard will endeavor to provide a seamless access to all such third parties with a single one point access. There could be a gap in this seamless access due to a technology breakdown, temporary disconnection of the internet connection or any factors beyond the reasonable control of Business Standard. In such cases the contract will be formed once the access to the partner services are restored.</p>\r\n\r\n	<p>You are requested to read through the terms and conditions offered by content partners to Business Standard. Most partners offer bundled services for new users. Existing subscribers of partners are not eligible for bundled subscription. Should you happen to be one please note that the partner will be liable to reject your offer to subscribe under the bundled subscription not leading to contract formation as a result.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Payment details:</strong></p>\r\n\r\n	<p>When you purchase a subscription, you must provide us with complete and accurate payment information. By submitting payment details you promise that you are entitled to purchase a subscription using those payment details. If we do not receive payment authorization or any authorization is subsequently cancelled, we may immediately terminate or suspend your access to your subscription. In suspicious circumstances we may contact the issuing bank/payment provider and/or law enforcement authorities or other appropriate third parties. If you are entitled to a refund under these terms and conditions we will credit that refund to the card or other payment method you used to submit payment, unless it has expired in which case we will contact you.</p>\r\n\r\n	<p>Business Standard will use the services of quality third party payment service providers to process your payment. Payment options are primarily through credit card. Business Standard may offer other payment mechanisms from time to time.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pricing:</strong></p>\r\n\r\n	<p>The subscription price will be made clear to you on our sign-up pages or otherwise during the sign-up process and may vary from time to time, by region or by country. You agree to pay the fees at the rates notified to you at the time you purchase your subscription. Subscription to premium services on Business Standard are generally of monthly frequency. Business Standard however may choose to offer fixed term or fixed payment frequency offers from time to time. The currency in which your subscription is payable will be specified during the order process, depending on the service and your country of residence. Eligibility for any discounts is ascertained at the time you subscribe and cannot be changed during the term of your subscription. We will always tell you in advance of any increase in the price of your subscription and offer you an opportunity to cancel it if you do not wish to pay the new price.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Taxes:</strong></p>\r\n\r\n	<p>Subscription and access to content services fall under the purview of Service Tax as per the current indirect taxation policy, Government of India. Taxes are applicable for consumption of content on the website and other products of Business Standard uniformly for customers based in India and outside the country. Unless otherwise indicated, prices stated on our website are inclusive of applicable Service Tax, any applicable value added tax (VAT) or other sales taxes.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pricing errors:</strong></p>\r\n\r\n	<p>If we incorrectly state a price to you whether online or otherwise, we are not obliged to provide you with a subscription at that price, even if we have mistakenly accepted your offer to buy a subscription at that price, and we reserve the right to subsequently notify you of any pricing error. If we do this, you may cancel the subscription without any obligation to us and we will refund you any money you have paid us in full, or you may pay the correct price. If you refuse to exercise either of these choices then we may cancel your subscription and will refund you any money you have paid us in full. We will always act in good faith in determining whether a genuine pricing error has occurred.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Other costs:</strong></p>\r\n\r\n	<p>In addition to any subscription fees you pay, you are responsible for paying any internet connection or other telecommunications charges that you may incur by accessing the premium services or using the services available on it. For example, if you use any of our mobile services then your network operator may charge you for data or messaging services.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>5. Subscription Period, Renewal and Cancellation of Personal Subscriptions</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Renewals:</strong></p>\r\n\r\n	<p>If you chose to pay monthly, your subscription will continue until you tell us that you no longer wish to receive it, in which case you will stop paying the monthly fees. We will notify you at least 7 days in advance of any changes to the price in your subscription that will apply upon next monthly renewal.</p>\r\n\r\n	<p>Please visit the &quot;How to cancel&quot; section below for details of how to cancel your monthly subscription.</p>\r\n\r\n	<p>Unless you notify us before the end of your chosen subscription period that you no longer wish to receive it, your subscription will renew for another period as applicable. We will charge the subscription using the same card or other payment method that you previously used.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Cancellation Policy</strong></p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>For Digital subscriptions by placing your order you agree that we may start your subscription immediately upon our accepting your order. This means that you are not entitled to a refund if you change your mind after we have provided you with access to your subscription.</p>\r\n\r\n	<p>Except as set out in the previous section, you do not have any right to cancel your subscription or any part of it until the end of your then current subscription period.</p>\r\n\r\n	<p>Although you may notify us of your intention to cancel at any time, such notice will only take effect at the end of your then current subscription period, and you will not receive a refund</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>How to cancel?</strong></p>\r\n\r\n	<p>You may notify us of your wish to cancel your subscription by contacting our Customer Services team at assist@bsmail.in. To enable us cancel your subscription please provide us with your complete name (as was in the subscription order form), Email address and Contact number clearly written out.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Cancellation by us:</strong></p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>Business Standard reserves the right to suspend or terminate your subscription if you breach these terms and conditions, with or without notice and without further obligation to you. We may also suspend or terminate your subscription if we are prevented from providing services to you by circumstances beyond our control. If we terminate your subscription for any reason and/or permanently cease publishing business-standard.com, or cease to provide subscription services then, unless there are exceptional circumstances, we will provide you with a pro rata refund to your credit card. This means that we will refund you with any amounts that you have paid us in advance that relate to any remaining and unexpired period of your subscription.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Cancellation of your registration:</strong></p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>If you are a registered user, but not a subscriber, then Business Standard reserves the right to suspend or terminate your registration at any time, with or without notice and without further obligation to you. If you would like to cancel your registration then please contact our customer services team at assist@bsmail.in.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>6. Who Your Personal Subscription Contract is with</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>If you buy a Business-standard.com digital subscription and are resident in any country, then you will be contracting with Business Standard Private Limited, Nehru House, 4, Bahadur Shah Zafar Marg, New Delhi - 110 002</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>7. User Generated Content</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Business-standard.com includes comments sections, blogs and other interactive features that allow interaction between users and between users and Business Standard. We call the information posted by or contributed by users &quot;User Generated Content&quot; or &quot;UGC&quot;.</p>\r\n\r\n	<p>If you wish to view or participate by way of UGC then you must comply with specific rules and guidelines. We also recommend that you read our Comments Guidelines which provide further guidance in relation to commenting on Business-standard.com.</p>\r\n\r\n	<p>You are responsible for all the content of any of your UGC that you or we publish. You are financially responsible to us for any claim against us by any third party that your UGC is not in accordance with the UGC policy</p>\r\n\r\n	<p>You further agree that you will:</p>\r\n\r\n	<p>* Only publish UGC that is your original content and will not infringe the copyright or other rights of any third party when publishing UGC. Not post, link to or otherwise publish any UGC containing any form of advertising or promotion for goods and services or any spam or other form of unsolicited communication.</p>\r\n\r\n	<p>* Not post, link to or otherwise publish any UGC with recommendations to buy or not buy a particular share or other investment or which contain confidential information of another party or which otherwise have the purpose of affecting the price or value of any share or other investment.</p>\r\n\r\n	<p>* Not post, link to or otherwise publish any UGC that is threatening, offensive, libellous, indecent or otherwise unlawful.</p>\r\n\r\n	<p>* Not post comments that are discriminatory in nature, for example, comments which make attacks on the grounds of race, religion, sex, gender, sexual orientation, disability or age.</p>\r\n\r\n	<p>* Respectfully challenge different points of view but not personally attack other commentators.</p>\r\n\r\n	<p>* Not disguise the origin of any UGC and not impersonate any person or entity (including Business Standard employees or Forum guests or hosts) or misrepresent any connection with any person or entity.</p>\r\n\r\n	<p>* Not post or otherwise publish any UGC unrelated to the Forum or the Forum&#39;s topic.</p>\r\n\r\n	<p>* Not post or transmit any UGC that contains software viruses, files or code designed to interrupt, destroy or limit the functionality of Business-Standard.com or any computer software or equipment.</p>\r\n\r\n	<p>* Not collect or store other users personal data.</p>\r\n\r\n	<p>* Not restrict or inhibit any other user from using the Forums.</p>\r\n\r\n	<p>* Comply with the guidelines for commenting set out in our Commenting FAQ.</p>\r\n\r\n	<p>It is not possible for Business Standard to fully monitor all UGC published on business-standard.com but where we have actually received notice of any UGC that is potentially misleading, untrue, offensive, unlawful, infringes third party rights or is potentially in breach of these terms and conditions, then we will review that UGC, decide whether to remove it from business-standard.com and act accordingly. This may include banning a user from participation in UGC on Business-standard.com. If you believe that any UGC published on business-standard.com infringes any legal rights that you may have or is not allowed under these terms and conditions, please notify us immediately with specific details by contacting us at&nbsp;<a href=\"https://www.business-standard.com/issue-report/report\">assist@bsmail.in</a>&nbsp;or&nbsp;<a href=\"mailto:feedback@bsmail.in\">feedback@bsmail.in</a></p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>8. Third Party Sites and Services</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Business-standard.com may contain links to other Internet websites or online and mobile services provided by independent third parties, including websites of our advertisers and sponsors (what we call &quot;Third Party Sites&quot;), either directly or through frames. Third Party Sites also include co-branded with Business Standard and so include Business Standard&#39;s trade marks.</p>\r\n\r\n	<p>It is your decision whether you purchase or use any third party products or services made available on or via Third Party Sites and you should read Section 9 below carefully. Our Privacy Policy does not apply to Third Party Sites.</p>\r\n\r\n	<p>Business-Standard.com contains advertising and sponsorship. Advertisers and sponsors are responsible for ensuring that material submitted for inclusion on Business-standard.com complies with international and national law. Business Standard is not responsible for any error or inaccuracy in advertising, incorrect links or sponsorship material.</p>\r\n\r\n	<p>Copyright in any software that is made available for download from Business-standard.com belongs to Business Standard or its suppliers or contributors. Your use of the software is governed by the terms of any licence agreement that may accompany or be included with the software. Do not install or use any of this software unless you agree to such licence agreement. Business Standard is not responsible for any technical or other issues that may happen if you download third party software.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>9. Our Responsibilities towards You</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>A summary of what this section means: this section is important and you should read it carefully. It makes clear to what extent, if any, Business Standard accepts responsibility (liability) to you for your use of Business-standard.com or in respect of any third party products or services that we refer to or advertisements or any other link to on business-standard.com. Unless you are a premium subscriber to Business-standard.com, we accept no financial responsibility to you arising from your use of business-standard.com or the content, advertisements and links published on business-standard.com. If you are a Business Standard premium service subscriber, we limit our financial responsibility to you arising from your use of Business-Standard.com and/or the Premium Services you consume on business-standard.com to the price you paid for your subscription.</p>\r\n\r\n	<p>In no circumstances do we accept responsibility for your use of Third Party Sites or services not limited to advertisements, links in respect of any Third Party Products. By Third Party Sites we mean websites, online or mobile services provided by third parties, including websites of advertisers and sponsors that may appear on business-standard.com. By Third Party Products we mean products or services provided by third parties.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Limitations of content published on Business-Standard.com:</strong></p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>All content published on Business-Standard.com (including any information we publish regarding Third Party Products) is only for your general information and entertainment purposes and is not intended to address your particular requirements. In particular, Content created by Business Standard, its syndication partners and including UGC and any other content provided by third parties and distributed by business-standard.com, does not constitute any form of advice, recommendation, representation, endorsement or arrangement by Business Standard. It is not intended to be and should not be relied upon by users in making (or refraining from making) any specific investment, purchase, sale or other decisions. Appropriate independent advice should be obtained before making any such decision, such as from a qualified financial adviser.</p>\r\n\r\n	<p>Any agreements, transactions or other arrangements made between you and any third party named on (or linked to from) Business-Standard.com are at your own responsibility and entered into at your own risk. Any information that you receive via Business-standard.com, whether or not it is classified as &quot;real time&quot;, may have stopped being current by the time it reaches you. Share price information may be rounded up/down and therefore may not be entirely accurate.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>What we promise:</strong></p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>Business Standard promises to develop and operate business-standard.com with reasonable skill and care and will use reasonable efforts to promptly remedy any faults of which it is aware or made aware of.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>What we do not promise:</strong></p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>Business Standard does not provide any promises or warranties other than defined above. The content is provided on an &quot;as is&quot; and &quot;as available&quot; basis. While the content creation team and its partners from whom content is syndicated make the best of their efforts to put together accurate, complete and authentic content, Business Standard and business-standard.com does not make any promises in respect of content published on its website and/or the services and functions available on or through business-standard.com or of the quality, completeness or accuracy of the information published on or linked to from business-standard.com other than as expressly stated above.</p>\r\n\r\n	<p>The above disclaimers apply to your use of Business-Standard.com. Without limiting the above, Business Standard is not liable for matters beyond its reasonable control. Business Standard does not control third party communications networks (including your internet service provider), the internet, acts of god or the acts of third parties.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Our financial responsibility to you:</strong></p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>You agree that if we are in breach of these terms and conditions, we will only be responsible to you for any damages that you incur arising out of your use of Business-standard.com (to the extent that Business Standard&#39;s liability is not otherwise excluded by this section 9) as follows:</p>\r\n\r\n	<p>If you incur any loss as a result of using Business-Standard.com or any Content outside the scope of these terms and conditions, Business Standard accepts no responsibility (liability) to you for this.</p>\r\n\r\n	<p>You will be responsible for all claims, liabilities, damages, cost and expenses suffered or incurred as a result of your breach of these terms and conditions.</p>\r\n\r\n	<p>Business Standard will only be responsible for loss or damage you suffer which is the reasonably foreseeable result of Business-Standard&#39;s breach of a legal duty of care owed to you.</p>\r\n\r\n	<p>Business Standard will not be responsible to you for any loss or damage suffered by your business, such as lost data, lost profits or any business interruption.</p>\r\n\r\n	<p>If you have a premium subscription then you may terminate your subscription in writing to Business Standard. If business-standard.com is unavailable or inaccessible to you for more than 5 days in a 30 day period, as a result of the fault or failure of Business Standard, in which case we will refund you any amount that you have paid to us in advance that relates to any period which was still to run on your subscription. You may instead at your option receive a renewal to your subscription free-of-charge at the point of renewal.</p>\r\n\r\n	<p>The limitations of liability in this section 9 apply for the benefit of Business Standard, its affiliates, and all of their respective officers, directors, employees, agents or any company who we transfer our rights and obligations to in accordance with these terms and conditions.</p>\r\n\r\n	<p>To the full extent permitted by law you acknowledge and agree that our third party content and data suppliers have no liability whatsoever to you in respect of any of their data supplied to you as part of Business Standard.com</p>\r\n\r\n	<p>Business Standard&#39;s liability will not be limited in the case of death or personal injury directly caused by Business Standard&#39;s negligence in those countries where it is unlawful for Business Standard to seek to exclude such liability.</p>\r\n	</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<h2>10. Choice of Law and Jurisdiction</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>If you are a user whose principal address or principal use of Business Standard Digital services occurs in any jurisdiction across the world then these terms and conditions will be subject to Indian law. In this case, to the extent possible in the applicable jurisdiction, both you and we agree that the competent courts in New Delhi, India will have non-exclusive jurisdiction to settle any dispute which may arise out of, under, or in connection with these terms and conditions.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>11. General</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>You may not license or transfer any of your rights under these terms and conditions. We may transfer any of our rights or obligations under these terms and conditions to any individual, organization or entity but if we do so we will ensure that any company/individual/entity to whom we transfer our rights or obligations will continue to honour your rights under them. Any resultant changes to the terms and conditions will be intimated to you via email and updated on this website.</p>\r\n\r\n	<p>If any provision of these terms and conditions is found to be invalid by any court having competent jurisdiction, the invalidity of that provision will not affect the validity of the remaining provisions of these terms and conditions, which will remain in full force and effect.</p>\r\n\r\n	<p>Failure by either party to exercise any right or remedy under these terms and conditions does not constitute a waiver of that right or remedy. Headings in these terms and conditions are for convenience only and will have no legal meaning or effect.</p>\r\n\r\n	<p>These terms and conditions constitute the entire agreement between you and Business Standard Private Limited for your use of the Business Standard website, Business Standard mobile and other digital products and services from Business Standard. They supersede all previous communications, representations and arrangements, either written or oral.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>12. Content ownership</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>All Content created and published on the digital platforms under the url http://www.business-standard.com the mobile browser site, applications, Business Standard E-paper belong to Business Standard Private Limited and its licensors who own all intellectual property rights (including copyright and database rights) No intellectual property rights in any of the content are transferred to you while you consume the content on this platform. &quot;BS&quot; and &quot;Business Standard&quot; are registered trade marks of Business Standard Private Limited and you may not use them without prior written permission from Business Standard. You are permitted to use the content on this platform only as set out in our Copyright Policy.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>13. Changes to Terms and Conditions and Validity</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>These terms and conditions were published on 1st June 2016 and replace with immediate effect the terms and conditions previously published.</p>\r\n	</li>\r\n</ul>\r\n', 'System', '2019-04-30 15:41:07', NULL, '0000-00-00 00:00:00', 1);
INSERT INTO `settings` (`settings_id`, `setting_type`, `description`, `created_by`, `created_at`, `modified_by`, `modified_at`, `row_status_cd`) VALUES
(11, 'terms', '<h1 style=\"text-align: center;\"><span style=\"color:#FF0000\">Terms &amp; Conditions</span></h1>\n\n<ul>\n	<li>\n	<p>Please read the following terms and conditions carefully as it sets out the terms of a legally binding agreement between you (the reader) and Business Standard Private Limited.</p>\n	</li>\n</ul>\n\n<h2>1) Introduction</h2>\n\n<ul>\n	<li>\n	<p>This following sets out the terms and conditions on which you may use the content on&nbsp;<br />\n	<a href=\"http://www.business-standard.com/\" target=\"_blank\">business-standard.com</a>&nbsp;website, business-standard.com&#39;s mobile browser site, Business Standard instore Applications and other digital publishing services (<a href=\"http://www.smartinvestor.in/\" target=\"_blank\">www.smartinvestor.in</a>,&nbsp;<a href=\"http://www.bshindi.com/\" target=\"_blank\">www.bshindi.com</a>&nbsp;and&nbsp;<a href=\"http://www.bsmotoring.com/\" target=\"_blank\">www.bsmotoring,com</a>) owned by Business Standard Private Limited, all the services herein will be referred to as Business Standard Content Services.</p>\n	</li>\n</ul>\n\n<h2>2) Registration Access and Use</h2>\n\n<ul>\n	<li>\n	<p>We welcome users to register on our digital platforms. We offer the below mentioned registration services which may be subject to change in the future. All changes will be appended in the terms and conditions page and communicated to existing users by email.</p>\n\n	<p>Registration services are offered for individual subscribers only. If multiple individuals propose to access the same account or for corporate accounts kindly contact or write in to us. Subscription rates will vary for multiple same time access.</p>\n\n	<p>The nature and volume of Business Standard content services you consume on the digital platforms will vary according to the type of registration you choose, on the geography you reside or the offer you subscribe to.</p>\n\n	<p>a) Free Registration</p>\n\n	<p>b) Premium Registration</p>\n\n	<p>c) Special Offers</p>\n\n	<p>d) Combo registrations with partners</p>\n\n	<p>The details of the services and access offered for each account have been listed on&nbsp;<br />\n	<a href=\"http://www.business-standard.com/subscription-cart/product\" target=\"_blank\">www.business-standard.com/subscription-cart/product</a></p>\n\n	<p>We may in exceptional circumstances cease to provide subscription services. We will give you at least 7 days notice of this, if possible. If we do so, then we will have no further obligation to you.</p>\n	</li>\n</ul>\n\n<h2>3) Privacy Policy and Registration</h2>\n\n<ul>\n	<li>\n	<p>All information received by us from your registration on business-standard.com or other digital products of Business Standard will be used by Business Standard in accordance with our Privacy Policy. Kindly read the below mentioned details.</p>\n\n	<p>On registration, we expect you to provide Business Standard with an accurate and complete information of the compulsory fields. We also expect you to keep the information secure, specifically access passwords and payment information. Kindly update the information periodically to keep your account relevant. Business Standard will rely on any information you provide to us.</p>\n\n	<p>Each registration is for a single user only. On registration, you will choose a user name and password (&quot;ID&quot;). You are not allowed to share your ID or give access to your account to anyone else. Business Standard Premium subscription does not allow multiple users on a network or within an organization to use the same ID.</p>\n\n	<p>On knowledge, Business Standard may cancel or suspend your access to Business Standard premium services if it comes across you sharing your personal access without further obligation to you.</p>\n\n	<p>You are responsible for all the use of business-standard.com premium service made by you or anyone else using your ID and for preventing unauthorised use of your ID. If you believe there has been any breach of security such as the disclosure, theft or unauthorised use of your ID or any payment information, you must notify Business Standard immediately by e-mailing us at&nbsp;<a href=\"https://www.business-standard.com/issue-report/report\">assist@bsmail.in</a>. We recommend that you do not select an obvious user password (such as your name) and that you change it regularly.</p>\n\n	<p>If you provide Business Standard with an email address that will result in any messages Business Standard may send you being sent to you via a network or device operated or owned by a third party (e.g. your employer or college) then you promise that you are entitled to receive those messages. To ensure email&#39;s land in your inbox, you will add the bsmail receipt id to your safe list. You also agree that Business Standard may stop sending messages to you without notifying you.</p>\n	</li>\n</ul>\n\n<ul>\n	<li>\n	<p>Important&nbsp;- Kindly note</p>\n	</li>\n	<li>\n	<p>(A) When you participate and choose to subscribe to joint content subscription offers that Business Standard partners with; your email id, access password and entered personal information will be shared with the participating content partner brand via an encrypted server to server protocol. This sharing is to facilitate your seamless access across the partner brand&#39;s platform. Once you login to the partner brand&#39;s platform, specific terms and privacy policies of the partner brand (mentioned on its website) will apply.</p>\n	</li>\n	<li>\n	<p>(B) Joint offers including special price offers are generally limited to new users on the partner sites. Clubbed Offers on partner sites will not be available to you should your email id be registered with the partner website.<br />\n	<br />\n	You are advised to study the offer before you subscribe.<br />\n	<br />\n	Merely subscribing to such a joint offer does not make you eligible to gain access to the partner platform. Business Standard does not take responsibility of providing you with an access on the partner site for existing users/subscribers of these sites.</p>\n	</li>\n	<li>\n	<p>(C) When you subscribe to joint offers supported by (non-content) brands; specific brands would ask you to share personal or private information in lieu of a value that the brand extends. By participating in such offers you implicitly and by confirming the terms of the offer you agree to share your registration information and personal data with the concerned brand. The brand or its associates may use this personal information to contact you with their promotional offers. Further by participating to such offers your will be additionally governed by the privacy policy and terms and conditions of the concerned brand. You are advised to go through them carefully before you decide to opt in.</p>\n	</li>\n	<li>\n	<p>As a registered user of or subscriber to business-standard.com you may choose to use business-standard.com&#39;s &quot;Remember me&quot; log in feature that enables you to be logged in automatically to business-standard.com whenever you visit business-standard.com without having to manually log in each time. We recommend that you do not enable this feature on any computer that is or may be used by anyone other than you in order to prevent unauthorized access by third parties to both your subscription details and features of business-standard.com personal to you.</p>\n	</li>\n</ul>\n\n<h2>4. Personal Subscription Services</h2>\n\n<ul>\n	<li>\n	<p>Personal subscription services include Business Standard premium access to behind the pay wall content. When you subscribe to Business Standard Premium access, you gain access to opinion pieces, comment and exclusive features specially chosen for you by the Business Standard editors.</p>\n\n	<p>The nature of content behind the pay wall is subject to change; the final decision of which lies with the Editor.</p>\n	</li>\n	<li>\n	<p><strong>Types of subscription:</strong></p>\n\n	<p>Services may differ from country to country and the device from which you subscribe. Subscriptions packages and price may also vary in time.</p>\n	</li>\n	<li>\n	<p><strong>Contract formation:</strong></p>\n\n	<p>&nbsp;</p>\n\n	<p>Business Standard will try to process your subscription promptly but does not guarantee that your subscription will be activated by any specified time. By submitting your payment and other subscription details, you are making an offer to us to buy a subscription. Your offer will only be accepted by us and a contract formed when we have successfully verified your payment details and email address, at which point we will provide you with access to your subscription. Business Standard reserves the right to reject any offer in its discretion, for any or no reason.</p>\n\n	<p>Business Standard may partner with third party content providers to offer bundled services, under which the payment for both the services will be collected by Business Standard. Business Standard will endeavor to provide a seamless access to all such third parties with a single one point access. There could be a gap in this seamless access due to a technology breakdown, temporary disconnection of the internet connection or any factors beyond the reasonable control of Business Standard. In such cases the contract will be formed once the access to the partner services are restored.</p>\n\n	<p>You are requested to read through the terms and conditions offered by content partners to Business Standard. Most partners offer bundled services for new users. Existing subscribers of partners are not eligible for bundled subscription. Should you happen to be one please note that the partner will be liable to reject your offer to subscribe under the bundled subscription not leading to contract formation as a result.</p>\n	</li>\n	<li>\n	<p><strong>Payment details:</strong></p>\n\n	<p>When you purchase a subscription, you must provide us with complete and accurate payment information. By submitting payment details you promise that you are entitled to purchase a subscription using those payment details. If we do not receive payment authorization or any authorization is subsequently cancelled, we may immediately terminate or suspend your access to your subscription. In suspicious circumstances we may contact the issuing bank/payment provider and/or law enforcement authorities or other appropriate third parties. If you are entitled to a refund under these terms and conditions we will credit that refund to the card or other payment method you used to submit payment, unless it has expired in which case we will contact you.</p>\n\n	<p>Business Standard will use the services of quality third party payment service providers to process your payment. Payment options are primarily through credit card. Business Standard may offer other payment mechanisms from time to time.</p>\n	</li>\n	<li>\n	<p><strong>Pricing:</strong></p>\n\n	<p>The subscription price will be made clear to you on our sign-up pages or otherwise during the sign-up process and may vary from time to time, by region or by country. You agree to pay the fees at the rates notified to you at the time you purchase your subscription. Subscription to premium services on Business Standard are generally of monthly frequency. Business Standard however may choose to offer fixed term or fixed payment frequency offers from time to time. The currency in which your subscription is payable will be specified during the order process, depending on the service and your country of residence. Eligibility for any discounts is ascertained at the time you subscribe and cannot be changed during the term of your subscription. We will always tell you in advance of any increase in the price of your subscription and offer you an opportunity to cancel it if you do not wish to pay the new price.</p>\n	</li>\n	<li>\n	<p><strong>Taxes:</strong></p>\n\n	<p>Subscription and access to content services fall under the purview of Service Tax as per the current indirect taxation policy, Government of India. Taxes are applicable for consumption of content on the website and other products of Business Standard uniformly for customers based in India and outside the country. Unless otherwise indicated, prices stated on our website are inclusive of applicable Service Tax, any applicable value added tax (VAT) or other sales taxes.</p>\n	</li>\n	<li>\n	<p><strong>Pricing errors:</strong></p>\n\n	<p>If we incorrectly state a price to you whether online or otherwise, we are not obliged to provide you with a subscription at that price, even if we have mistakenly accepted your offer to buy a subscription at that price, and we reserve the right to subsequently notify you of any pricing error. If we do this, you may cancel the subscription without any obligation to us and we will refund you any money you have paid us in full, or you may pay the correct price. If you refuse to exercise either of these choices then we may cancel your subscription and will refund you any money you have paid us in full. We will always act in good faith in determining whether a genuine pricing error has occurred.</p>\n	</li>\n	<li>\n	<p><strong>Other costs:</strong></p>\n\n	<p>In addition to any subscription fees you pay, you are responsible for paying any internet connection or other telecommunications charges that you may incur by accessing the premium services or using the services available on it. For example, if you use any of our mobile services then your network operator may charge you for data or messaging services.</p>\n	</li>\n</ul>\n\n<h2>5. Subscription Period, Renewal and Cancellation of Personal Subscriptions</h2>\n\n<ul>\n	<li>\n	<p><strong>Renewals:</strong></p>\n\n	<p>If you chose to pay monthly, your subscription will continue until you tell us that you no longer wish to receive it, in which case you will stop paying the monthly fees. We will notify you at least 7 days in advance of any changes to the price in your subscription that will apply upon next monthly renewal.</p>\n\n	<p>Please visit the &quot;How to cancel&quot; section below for details of how to cancel your monthly subscription.</p>\n\n	<p>Unless you notify us before the end of your chosen subscription period that you no longer wish to receive it, your subscription will renew for another period as applicable. We will charge the subscription using the same card or other payment method that you previously used.</p>\n	</li>\n	<li>\n	<p><strong>Cancellation Policy</strong></p>\n\n	<p>&nbsp;</p>\n\n	<p>For Digital subscriptions by placing your order you agree that we may start your subscription immediately upon our accepting your order. This means that you are not entitled to a refund if you change your mind after we have provided you with access to your subscription.</p>\n\n	<p>Except as set out in the previous section, you do not have any right to cancel your subscription or any part of it until the end of your then current subscription period.</p>\n\n	<p>Although you may notify us of your intention to cancel at any time, such notice will only take effect at the end of your then current subscription period, and you will not receive a refund</p>\n	</li>\n	<li>\n	<p><strong>How to cancel?</strong></p>\n\n	<p>You may notify us of your wish to cancel your subscription by contacting our Customer Services team at assist@bsmail.in. To enable us cancel your subscription please provide us with your complete name (as was in the subscription order form), Email address and Contact number clearly written out.</p>\n	</li>\n	<li>\n	<p><strong>Cancellation by us:</strong></p>\n\n	<p>&nbsp;</p>\n\n	<p>Business Standard reserves the right to suspend or terminate your subscription if you breach these terms and conditions, with or without notice and without further obligation to you. We may also suspend or terminate your subscription if we are prevented from providing services to you by circumstances beyond our control. If we terminate your subscription for any reason and/or permanently cease publishing business-standard.com, or cease to provide subscription services then, unless there are exceptional circumstances, we will provide you with a pro rata refund to your credit card. This means that we will refund you with any amounts that you have paid us in advance that relate to any remaining and unexpired period of your subscription.</p>\n	</li>\n	<li>\n	<p><strong>Cancellation of your registration:</strong></p>\n\n	<p>&nbsp;</p>\n\n	<p>If you are a registered user, but not a subscriber, then Business Standard reserves the right to suspend or terminate your registration at any time, with or without notice and without further obligation to you. If you would like to cancel your registration then please contact our customer services team at assist@bsmail.in.</p>\n	</li>\n</ul>\n\n<h2>6. Who Your Personal Subscription Contract is with</h2>\n\n<ul>\n	<li>\n	<p>If you buy a Business-standard.com digital subscription and are resident in any country, then you will be contracting with Business Standard Private Limited, Nehru House, 4, Bahadur Shah Zafar Marg, New Delhi - 110 002</p>\n	</li>\n</ul>\n\n<h2>7. User Generated Content</h2>\n\n<ul>\n	<li>\n	<p>Business-standard.com includes comments sections, blogs and other interactive features that allow interaction between users and between users and Business Standard. We call the information posted by or contributed by users &quot;User Generated Content&quot; or &quot;UGC&quot;.</p>\n\n	<p>If you wish to view or participate by way of UGC then you must comply with specific rules and guidelines. We also recommend that you read our Comments Guidelines which provide further guidance in relation to commenting on Business-standard.com.</p>\n\n	<p>You are responsible for all the content of any of your UGC that you or we publish. You are financially responsible to us for any claim against us by any third party that your UGC is not in accordance with the UGC policy</p>\n\n	<p>You further agree that you will:</p>\n\n	<p>* Only publish UGC that is your original content and will not infringe the copyright or other rights of any third party when publishing UGC. Not post, link to or otherwise publish any UGC containing any form of advertising or promotion for goods and services or any spam or other form of unsolicited communication.</p>\n\n	<p>* Not post, link to or otherwise publish any UGC with recommendations to buy or not buy a particular share or other investment or which contain confidential information of another party or which otherwise have the purpose of affecting the price or value of any share or other investment.</p>\n\n	<p>* Not post, link to or otherwise publish any UGC that is threatening, offensive, libellous, indecent or otherwise unlawful.</p>\n\n	<p>* Not post comments that are discriminatory in nature, for example, comments which make attacks on the grounds of race, religion, sex, gender, sexual orientation, disability or age.</p>\n\n	<p>* Respectfully challenge different points of view but not personally attack other commentators.</p>\n\n	<p>* Not disguise the origin of any UGC and not impersonate any person or entity (including Business Standard employees or Forum guests or hosts) or misrepresent any connection with any person or entity.</p>\n\n	<p>* Not post or otherwise publish any UGC unrelated to the Forum or the Forum&#39;s topic.</p>\n\n	<p>* Not post or transmit any UGC that contains software viruses, files or code designed to interrupt, destroy or limit the functionality of Business-Standard.com or any computer software or equipment.</p>\n\n	<p>* Not collect or store other users personal data.</p>\n\n	<p>* Not restrict or inhibit any other user from using the Forums.</p>\n\n	<p>* Comply with the guidelines for commenting set out in our Commenting FAQ.</p>\n\n	<p>It is not possible for Business Standard to fully monitor all UGC published on business-standard.com but where we have actually received notice of any UGC that is potentially misleading, untrue, offensive, unlawful, infringes third party rights or is potentially in breach of these terms and conditions, then we will review that UGC, decide whether to remove it from business-standard.com and act accordingly. This may include banning a user from participation in UGC on Business-standard.com. If you believe that any UGC published on business-standard.com infringes any legal rights that you may have or is not allowed under these terms and conditions, please notify us immediately with specific details by contacting us at&nbsp;<a href=\"https://www.business-standard.com/issue-report/report\">assist@bsmail.in</a>&nbsp;or&nbsp;<a href=\"mailto:feedback@bsmail.in\">feedback@bsmail.in</a></p>\n	</li>\n</ul>\n\n<h2>8. Third Party Sites and Services</h2>\n\n<ul>\n	<li>\n	<p>Business-standard.com may contain links to other Internet websites or online and mobile services provided by independent third parties, including websites of our advertisers and sponsors (what we call &quot;Third Party Sites&quot;), either directly or through frames. Third Party Sites also include co-branded with Business Standard and so include Business Standard&#39;s trade marks.</p>\n\n	<p>It is your decision whether you purchase or use any third party products or services made available on or via Third Party Sites and you should read Section 9 below carefully. Our Privacy Policy does not apply to Third Party Sites.</p>\n\n	<p>Business-Standard.com contains advertising and sponsorship. Advertisers and sponsors are responsible for ensuring that material submitted for inclusion on Business-standard.com complies with international and national law. Business Standard is not responsible for any error or inaccuracy in advertising, incorrect links or sponsorship material.</p>\n\n	<p>Copyright in any software that is made available for download from Business-standard.com belongs to Business Standard or its suppliers or contributors. Your use of the software is governed by the terms of any licence agreement that may accompany or be included with the software. Do not install or use any of this software unless you agree to such licence agreement. Business Standard is not responsible for any technical or other issues that may happen if you download third party software.</p>\n	</li>\n</ul>\n\n<h2>9. Our Responsibilities towards You</h2>\n\n<ul>\n	<li>\n	<p>A summary of what this section means: this section is important and you should read it carefully. It makes clear to what extent, if any, Business Standard accepts responsibility (liability) to you for your use of Business-standard.com or in respect of any third party products or services that we refer to or advertisements or any other link to on business-standard.com. Unless you are a premium subscriber to Business-standard.com, we accept no financial responsibility to you arising from your use of business-standard.com or the content, advertisements and links published on business-standard.com. If you are a Business Standard premium service subscriber, we limit our financial responsibility to you arising from your use of Business-Standard.com and/or the Premium Services you consume on business-standard.com to the price you paid for your subscription.</p>\n\n	<p>In no circumstances do we accept responsibility for your use of Third Party Sites or services not limited to advertisements, links in respect of any Third Party Products. By Third Party Sites we mean websites, online or mobile services provided by third parties, including websites of advertisers and sponsors that may appear on business-standard.com. By Third Party Products we mean products or services provided by third parties.</p>\n	</li>\n	<li>\n	<p><strong>Limitations of content published on Business-Standard.com:</strong></p>\n\n	<p>&nbsp;</p>\n\n	<p>All content published on Business-Standard.com (including any information we publish regarding Third Party Products) is only for your general information and entertainment purposes and is not intended to address your particular requirements. In particular, Content created by Business Standard, its syndication partners and including UGC and any other content provided by third parties and distributed by business-standard.com, does not constitute any form of advice, recommendation, representation, endorsement or arrangement by Business Standard. It is not intended to be and should not be relied upon by users in making (or refraining from making) any specific investment, purchase, sale or other decisions. Appropriate independent advice should be obtained before making any such decision, such as from a qualified financial adviser.</p>\n\n	<p>Any agreements, transactions or other arrangements made between you and any third party named on (or linked to from) Business-Standard.com are at your own responsibility and entered into at your own risk. Any information that you receive via Business-standard.com, whether or not it is classified as &quot;real time&quot;, may have stopped being current by the time it reaches you. Share price information may be rounded up/down and therefore may not be entirely accurate.</p>\n	</li>\n	<li>\n	<p><strong>What we promise:</strong></p>\n\n	<p>&nbsp;</p>\n\n	<p>Business Standard promises to develop and operate business-standard.com with reasonable skill and care and will use reasonable efforts to promptly remedy any faults of which it is aware or made aware of.</p>\n	</li>\n	<li>\n	<p><strong>What we do not promise:</strong></p>\n\n	<p>&nbsp;</p>\n\n	<p>Business Standard does not provide any promises or warranties other than defined above. The content is provided on an &quot;as is&quot; and &quot;as available&quot; basis. While the content creation team and its partners from whom content is syndicated make the best of their efforts to put together accurate, complete and authentic content, Business Standard and business-standard.com does not make any promises in respect of content published on its website and/or the services and functions available on or through business-standard.com or of the quality, completeness or accuracy of the information published on or linked to from business-standard.com other than as expressly stated above.</p>\n\n	<p>The above disclaimers apply to your use of Business-Standard.com. Without limiting the above, Business Standard is not liable for matters beyond its reasonable control. Business Standard does not control third party communications networks (including your internet service provider), the internet, acts of god or the acts of third parties.</p>\n	</li>\n	<li>\n	<p><strong>Our financial responsibility to you:</strong></p>\n\n	<p>&nbsp;</p>\n\n	<p>You agree that if we are in breach of these terms and conditions, we will only be responsible to you for any damages that you incur arising out of your use of Business-standard.com (to the extent that Business Standard&#39;s liability is not otherwise excluded by this section 9) as follows:</p>\n\n	<p>If you incur any loss as a result of using Business-Standard.com or any Content outside the scope of these terms and conditions, Business Standard accepts no responsibility (liability) to you for this.</p>\n\n	<p>You will be responsible for all claims, liabilities, damages, cost and expenses suffered or incurred as a result of your breach of these terms and conditions.</p>\n\n	<p>Business Standard will only be responsible for loss or damage you suffer which is the reasonably foreseeable result of Business-Standard&#39;s breach of a legal duty of care owed to you.</p>\n\n	<p>Business Standard will not be responsible to you for any loss or damage suffered by your business, such as lost data, lost profits or any business interruption.</p>\n\n	<p>If you have a premium subscription then you may terminate your subscription in writing to Business Standard. If business-standard.com is unavailable or inaccessible to you for more than 5 days in a 30 day period, as a result of the fault or failure of Business Standard, in which case we will refund you any amount that you have paid to us in advance that relates to any period which was still to run on your subscription. You may instead at your option receive a renewal to your subscription free-of-charge at the point of renewal.</p>\n\n	<p>The limitations of liability in this section 9 apply for the benefit of Business Standard, its affiliates, and all of their respective officers, directors, employees, agents or any company who we transfer our rights and obligations to in accordance with these terms and conditions.</p>\n\n	<p>To the full extent permitted by law you acknowledge and agree that our third party content and data suppliers have no liability whatsoever to you in respect of any of their data supplied to you as part of Business Standard.com</p>\n\n	<p>Business Standard&#39;s liability will not be limited in the case of death or personal injury directly caused by Business Standard&#39;s negligence in those countries where it is unlawful for Business Standard to seek to exclude such liability.</p>\n	</li>\n	<li>&nbsp;</li>\n</ul>\n\n<h2>10. Choice of Law and Jurisdiction</h2>\n\n<ul>\n	<li>\n	<p>If you are a user whose principal address or principal use of Business Standard Digital services occurs in any jurisdiction across the world then these terms and conditions will be subject to Indian law. In this case, to the extent possible in the applicable jurisdiction, both you and we agree that the competent courts in New Delhi, India will have non-exclusive jurisdiction to settle any dispute which may arise out of, under, or in connection with these terms and conditions.</p>\n	</li>\n</ul>\n\n<h2>11. General</h2>\n\n<ul>\n	<li>\n	<p>You may not license or transfer any of your rights under these terms and conditions. We may transfer any of our rights or obligations under these terms and conditions to any individual, organization or entity but if we do so we will ensure that any company/individual/entity to whom we transfer our rights or obligations will continue to honour your rights under them. Any resultant changes to the terms and conditions will be intimated to you via email and updated on this website.</p>\n\n	<p>If any provision of these terms and conditions is found to be invalid by any court having competent jurisdiction, the invalidity of that provision will not affect the validity of the remaining provisions of these terms and conditions, which will remain in full force and effect.</p>\n\n	<p>Failure by either party to exercise any right or remedy under these terms and conditions does not constitute a waiver of that right or remedy. Headings in these terms and conditions are for convenience only and will have no legal meaning or effect.</p>\n\n	<p>These terms and conditions constitute the entire agreement between you and Business Standard Private Limited for your use of the Business Standard website, Business Standard mobile and other digital products and services from Business Standard. They supersede all previous communications, representations and arrangements, either written or oral.</p>\n	</li>\n</ul>\n\n<h2>12. Content ownership</h2>\n\n<ul>\n	<li>\n	<p>All Content created and published on the digital platforms under the url http://www.business-standard.com the mobile browser site, applications, Business Standard E-paper belong to Business Standard Private Limited and its licensors who own all intellectual property rights (including copyright and database rights) No intellectual property rights in any of the content are transferred to you while you consume the content on this platform. &quot;BS&quot; and &quot;Business Standard&quot; are registered trade marks of Business Standard Private Limited and you may not use them without prior written permission from Business Standard. You are permitted to use the content on this platform only as set out in our Copyright Policy.</p>\n	</li>\n</ul>\n\n<h2>13. Changes to Terms and Conditions and Validity</h2>\n\n<ul>\n	<li>\n	<p>These terms and conditions were published on 1st June 2016 and replace with immediate effect the terms and conditions previously published.</p>\n	</li>\n</ul>\n', 'System', '2019-04-30 15:41:07', NULL, '0000-00-00 00:00:00', 1),
(12, 'facebook', 'http://fb.comd', 'System', '2019-07-22 14:05:08', NULL, '0000-00-00 00:00:00', 1),
(13, 'twiter', '', 'System', '2019-07-22 14:05:08', NULL, '0000-00-00 00:00:00', 1),
(14, 'youtube', '', 'System', '2019-07-22 14:05:08', NULL, '0000-00-00 00:00:00', 1),
(15, 'whatsapp_number', '9603960346', 'System', '2019-09-27 06:53:07', NULL, '0000-00-00 00:00:00', 1),
(16, 'students_opted', '1200', '', '2019-12-30 05:48:07', NULL, NULL, 1),
(17, 'qualified_students', '1500', '', '2019-12-30 05:48:07', NULL, NULL, 1),
(18, '5_star_rated', '1600', '', '2019-12-30 05:48:07', NULL, NULL, 1),
(19, 'exemptions_scored', '20455', '', '2019-12-30 05:48:07', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` bigint(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `sms` text NOT NULL,
  `plan_ids` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime DEFAULT NULL,
  `row_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 = deleted, 1 = Active, 2 = Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`id`, `subject`, `sms`, `plan_ids`, `created_at`, `modified_at`, `row_status`) VALUES
(1, 'dsfdsf', 'dsfdsfdsffdfs', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\"]', '2019-12-24 16:13:57', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sms_by_plan`
--

CREATE TABLE `sms_by_plan` (
  `id` bigint(20) NOT NULL,
  `sms_id` bigint(20) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `row_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 = deleted, 1 = Active, 2 = Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `read_status` tinyint(4) NOT NULL DEFAULT 2 COMMENT '1=Read,2Unread',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime DEFAULT NULL,
  `row_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=Deleted,1=Active,2=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `from_id`, `to_id`, `message`, `read_status`, `created_at`, `modified_at`, `row_status`) VALUES
(1, 2, 0, 'fdf', 2, '2019-12-27 20:09:05', NULL, 1),
(2, 2, 0, 'fdff', 2, '2019-12-27 20:09:43', NULL, 1),
(3, 2, 0, 'fdfdf', 2, '2019-12-27 20:09:55', NULL, 1),
(4, 2, 1, 'fdff', 1, '2019-12-27 20:09:59', NULL, 1),
(5, 2, 1, 'sdsdsdsdsdsdsd', 1, '2019-12-27 20:11:22', NULL, 1),
(6, 2, 1, 'fgdfgdfg', 1, '2019-12-27 20:12:45', NULL, 1),
(7, 2, 1, 'dfsfsdf', 1, '2019-12-27 20:12:57', NULL, 1),
(8, 2, 1, 'dfdsf', 1, '2019-12-27 20:13:00', NULL, 1),
(9, 2, 1, 'dsfdsfdsfdsfsfdsfdsfdsfdsfdsf', 1, '2019-12-27 20:13:06', NULL, 1),
(10, 1, 2, 'fsdfdsfdsfsfsdf', 2, '2019-12-27 20:13:14', NULL, 1),
(11, 1, 2, 'jugggy\n', 2, '2020-11-28 11:24:15', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `review` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL,
  `row_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '	0=Deleted,1=Active,2=Inactive',
  `user_id` int(11) NOT NULL,
  `theme_type` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `review`, `created_at`, `modified_at`, `row_status`, `user_id`, `theme_type`, `name`) VALUES
(1, 'For fresh vegetables and fruit be aware that prices shown are often per 100g', '2024-01-09 16:26:45', '0000-00-00 00:00:00', 1, 9, '1', ''),
(2, 'STO is the Maldives equivalent of a supermarket. Good sized shop with plenty of choice, there\'s a 99% chance they\'ll have what you are looking ', '2024-01-09 16:29:49', '0000-00-00 00:00:00', 1, 6, '2', ''),
(3, 'We went only to the supermarket to buy some groceries. It was not crowded during lunchtime.', '2024-01-09 16:30:26', '0000-00-00 00:00:00', 1, 8, '3', ''),
(4, 'This is not a tourist attraction. It\'s a normal honest to goodness supermarket with basic needs, including many imported items', '2024-01-09 16:31:29', '0000-00-00 00:00:00', 1, 6, '4', ''),
(5, 'This is not a tourist attraction. It\'s a normal honest to goodness supermarket with basic needs, including many imported items', '2024-01-09 16:32:36', '0000-00-00 00:00:00', 1, 7, '1', ''),
(6, 'you can get everythng here at decent prices. you need to bargain a lot. 40% of the original price', '2024-01-09 16:35:38', '0000-00-00 00:00:00', 1, 4, '2', ''),
(7, 'For fresh vegetables and fruit be aware that prices shown are often per 100g', '2024-01-10 12:35:06', '0000-00-00 00:00:00', 1, 11, '', ''),
(8, 'STO is the Maldives equivalent of a supermarket. Good sized shop with plenty of choice, there\'s a 99% chance they\'ll have what you are looking', '2024-01-10 12:52:25', '0000-00-00 00:00:00', 1, 10, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `testomonial`
--

CREATE TABLE `testomonial` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `review` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp(),
  `row_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '	0=Deleted,1=Active,2=Inactive',
  `theme_type` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testomonial`
--

INSERT INTO `testomonial` (`id`, `user_id`, `name`, `review`, `created_at`, `modified_at`, `row_status`, `theme_type`) VALUES
(2, 4, 'Alison B', 'Their brunch is awesome, I love the avocado toast and the California focaccia. Pizza is really good as well', '2023-12-22 11:32:14', '2023-12-22 11:32:14', 1, '1'),
(3, 5, 'B Alison ', 'Brunch is awesome, I love the avocado toast and the California focaccia. Pizza is really good as well', '2023-12-22 11:52:30', '2023-12-22 11:52:30', 1, '2'),
(5, 7, ' Ellen H', 'Best Pizza EVER! Not just on the lower Cape…. anywhere!', '2023-12-22 12:05:06', '2023-12-22 12:05:06', 1, '3'),
(6, 9, ' Julia L', 'Working together as the Joe Hayden Real Estate Team, we are very thankful for our loyal clients.  Our business is one of close relationships and we are very fortunate to be able to share so many positive real estate experiences with our clients.  Your satisfaction is the ultimate reward for our work and it is why we strive to be Your Louisville Real Estate Experts', '2023-12-22 12:30:59', '2023-12-22 12:30:59', 1, '4'),
(7, 8, 'Deidre S', 'Before choosing a real estate agent, I conducted a lot of research to see who would be the best choice based on the investment they make into selling the property (time and effort, not necessarily financially) ', '2023-12-22 12:32:52', '2023-12-22 12:32:52', 1, '1'),
(8, 6, 'Ram', 'The quote testimonial here is featured with an image and a Call-To-Action (CTA). The image makes that quote more eye-catching, and the CTA provides more chances for conversions. ', '2023-12-22 12:36:21', '2023-12-22 12:36:21', 1, '2'),
(9, 7, 'Ravi', 'Customer reviews are another easy form of testimonials because you can gather them in several ways. For example, you can add a “write a review” button next to each product on your website, or you can contact customers a few days after they’ve made a purchase and ask them to leave a review. ', '2023-12-22 12:36:44', '2023-12-22 12:36:44', 1, '3'),
(10, 9, 'Alison B', 'Customer reviews are another easy form of testimonials because you can gather them in several ways. For example, you can add a “write a review” button n', '2023-12-22 18:26:07', '2023-12-22 18:26:07', 1, '4'),
(11, 8, 'Ramanji', 'customers ', '2024-01-06 14:31:17', '2024-01-06 14:31:17', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `unique_id` varchar(20) NOT NULL,
  `icai_reg_no` bigint(30) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `exam_type` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `theme_type` varchar(1) NOT NULL COMMENT '1=Food,2=Grocery,3=Ecommerce,4=Real estate	',
  `address` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime DEFAULT NULL,
  `row_status` tinyint(4) NOT NULL DEFAULT 3 COMMENT '0=Deleted,1=Active,2=Inactive,3=Trail,4=Failed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `unique_id`, `icai_reg_no`, `first_name`, `last_name`, `email`, `mobile`, `exam_type`, `password`, `theme_type`, `address`, `created_at`, `modified_at`, `row_status`) VALUES
(1, 1, '9119', 0, 'Super Admin', '', 'admin@gmail.com', '8121815502', '', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '', '', '2019-07-20 15:18:30', NULL, 1),
(2, 2, '120057345', 1244564, 'mahesh', '', 'mahi@gmail.com', '8121815501', '2', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '', '', '2019-12-13 17:28:55', '2019-12-13 17:28:55', 1),
(3, 2, 'ipcc19_100002', 123, 'sujith', '', 'yeswanth@gmail.com', '8143671872', '2', '7ca49b480f4ad303e77d35fc0ba426e30332ec95051a34a75affedf485054e2a', '', '', '2019-12-20 16:38:43', '2019-12-20 16:38:43', 4),
(4, 3, 'EVA_100001', 0, 'Mahesh', '', 'mahie@gmail.com', '8121815555', '', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '4', '', '2019-12-24 16:12:09', '2019-12-24 16:12:09', 3),
(5, 2, 'ipcc19_100003', 45556556, 'mahesh', '', 'maheshbt.grepthor@gmail.com', '8121815500', '2', '101b6224f1df589da6537ab8a72aaeb8e36ebf169d85d8c0d7d04d8fd21ac62c', '3', '', '2019-12-27 16:11:19', '2019-12-27 16:11:19', 4),
(6, 2, '', 0, 'Bhanu', '', 'bhanu@gmail.com', '778080808080', '', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '2', '', '2024-01-06 15:46:30', NULL, 3),
(7, 2, '', 0, 'Hari', '', 'hari@gmail.com', '9390060633', '', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '1', '', '2024-01-06 15:56:04', NULL, 3),
(8, 2, '', 0, 'Shiva', '', 'shiva@gmail.com', '8877889977', '', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '3', '', '2024-01-09 12:21:22', NULL, 3),
(9, 2, '', 0, 'Sam', '', 'sam@gmail.com', '7777777777', '', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '2', '', '2024-01-09 15:42:42', NULL, 3),
(10, 2, '', 0, 'Alison B', '', 'alision@gmail.com', '7777777777', '', '088e8726f4b4c357acd3a5cbcd012715831b9ae1061357495904fc1b265446f8', '1', '', '2024-01-10 12:32:39', NULL, 3),
(11, 2, '', 0, 'Ramya', '', 'ramya@gmail.com', '8899889988', '', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '1', '', '2024-01-10 12:34:30', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users_plan_relation`
--

CREATE TABLE `users_plan_relation` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime DEFAULT NULL,
  `row_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 = deleted, 1 = Active, 2 = Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_plan_relation`
--

INSERT INTO `users_plan_relation` (`id`, `user_id`, `plan_id`, `package_id`, `created_at`, `modified_at`, `row_status`) VALUES
(1, 1, 5, 2, '2020-01-03 15:14:11', NULL, 1),
(2, 2, 5, 2, '2020-01-03 15:35:52', NULL, 1),
(3, 2, 5, 2, '2020-01-03 15:37:24', NULL, 1),
(4, 1, 5, 2, '2020-01-03 15:48:49', NULL, 1),
(5, 2, 5, 2, '2020-01-03 16:16:38', NULL, 1),
(6, 2, 5, 2, '2020-01-03 16:17:32', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feeling_formal`
--
ALTER TABLE `feeling_formal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promocodes`
--
ALTER TABLE `promocodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo_discount`
--
ALTER TABLE `promo_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestcallback`
--
ALTER TABLE `requestcallback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_by_plan`
--
ALTER TABLE `sms_by_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testomonial`
--
ALTER TABLE `testomonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_plan_relation`
--
ALTER TABLE `users_plan_relation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feeling_formal`
--
ALTER TABLE `feeling_formal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `promocodes`
--
ALTER TABLE `promocodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `promo_discount`
--
ALTER TABLE `promo_discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `requestcallback`
--
ALTER TABLE `requestcallback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sms_by_plan`
--
ALTER TABLE `sms_by_plan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testomonial`
--
ALTER TABLE `testomonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_plan_relation`
--
ALTER TABLE `users_plan_relation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
