-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 13, 2024 at 04:13 PM
-- Server version: 5.7.33
-- PHP Version: 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `express_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'milon', 'milon@gmal.com', '12345', '1', NULL, NULL),
(2, 'admin', 'admin@gmail.com', '12345', '', '2021-07-02 12:45:42', '2021-07-02 12:45:42'),
(4, 'stk', 'kalam@gmail.com', '11111', '', '2021-07-03 12:11:08', '2021-07-07 11:07:08'),
(5, 'milon', 'milonsarkar8379@gmail.com', '12', '', '2021-07-05 12:05:43', '2021-07-05 12:05:43'),
(6, 'admin', 'milon@gmail.com', '11111', '', '2021-07-06 12:36:46', '2021-07-07 11:06:19'),
(9, 'Test', 'test@gmail.com', '11111', '', '2021-07-07 12:36:25', '2021-07-07 12:36:25'),
(14, 'milon', 'milon@gmail.com', '123456789', '', '2021-09-05 06:11:48', '2021-09-05 06:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `asantmerchants`
--

CREATE TABLE `asantmerchants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pickupboy_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asantmerchants`
--

INSERT INTO `asantmerchants` (`id`, `pickupboy_id`, `merchant_id`, `created_at`, `updated_at`) VALUES
(1, '1', '3', '2021-09-08 03:35:39', '2021-09-08 03:35:39'),
(2, '1', '2', '2021-09-08 03:35:56', '2021-09-08 03:35:56'),
(3, '1', '4', '2021-09-08 03:52:25', '2021-09-08 03:52:25'),
(4, '1', '3', '2021-09-12 02:30:50', '2021-09-12 02:30:50'),
(5, 'pickupboy_id', '2', '2021-09-12 02:44:47', '2021-09-12 02:44:47'),
(6, '9', '2', '2021-09-12 02:45:52', '2021-09-12 02:45:52'),
(7, '1', '2', '2021-09-12 02:46:55', '2021-09-12 02:46:55'),
(8, '1', '3', '2021-09-12 02:48:00', '2021-09-12 02:48:00'),
(9, '1', '2', '2021-09-12 02:49:38', '2021-09-12 02:49:38'),
(10, '1', '3', '2021-09-12 03:08:11', '2021-09-12 03:08:11'),
(11, '1', '3', '2021-09-12 03:21:37', '2021-09-12 03:21:37'),
(12, '1', '3', '2021-09-12 03:22:45', '2021-09-12 03:22:45'),
(13, '1', '2', '2021-09-12 03:28:11', '2021-09-12 03:28:11'),
(14, '1', '3', '2021-09-12 04:26:58', '2021-09-12 04:26:58'),
(15, '1', '3', '2021-09-12 22:22:38', '2021-09-12 22:22:38'),
(16, '1', '2', '2021-09-12 22:23:59', '2021-09-12 22:23:59'),
(17, NULL, '4', NULL, NULL),
(18, NULL, '3', NULL, NULL),
(19, '1', '4', NULL, NULL),
(20, '1', '3', NULL, NULL),
(21, '1', '4', NULL, NULL),
(22, '1', '3', NULL, NULL),
(23, '1', '2', NULL, NULL),
(24, '9', '4', NULL, NULL),
(25, '9', '3', NULL, NULL),
(26, '16', '4', NULL, NULL),
(27, '16', '3', NULL, NULL),
(28, '16', '4', NULL, NULL),
(29, '16', '3', NULL, NULL),
(30, '9', '2', NULL, NULL),
(31, '9', '4', NULL, NULL),
(32, '9', '4', NULL, NULL),
(33, '9', '3', NULL, NULL),
(34, '9', '3', NULL, NULL),
(35, '9', '2', NULL, NULL),
(36, '9', '4', NULL, NULL),
(37, '9', '3', NULL, NULL),
(38, '9', '4', NULL, NULL),
(39, '9', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manager_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brance_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `manager_name`, `brance_id`, `email`, `phone`, `password`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Kamrul hasan', '2', 'milon@gmail.com', '01796794989', '12345678', '1', '2021-09-02 05:40:48', '2021-09-02 05:40:48'),
(3, 'Milon Sarkar', '1', 'milon@gmail.com', '01796794989', '123456789', '1', '2021-09-05 04:16:08', '2021-09-05 04:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Watch', NULL, '2021-08-31 02:27:06', '2021-08-31 02:27:06'),
(2, 'cloth', NULL, '2021-08-31 02:29:41', '2021-08-31 02:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `consignments`
--

CREATE TABLE `consignments` (
  `Id` int(11) NOT NULL,
  `merchantId` int(11) NOT NULL COMMENT 'foregin key for the merchant_registers column id',
  `trackingId` varchar(255) DEFAULT NULL,
  `invoiceNo` varchar(255) DEFAULT NULL,
  `customerName` varchar(255) DEFAULT NULL,
  `customerAddress` text,
  `customerPhoneNumber` varchar(255) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productPrice` double DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `totalConsignmentAmount` double DEFAULT NULL,
  `remark` text,
  `zoneId` int(11) DEFAULT NULL,
  `pickupPointManagerId` int(11) DEFAULT NULL,
  `managerStatus` varchar(255) DEFAULT NULL,
  `deliveryBoyId` int(11) DEFAULT NULL,
  `DeliveryBoyStatus` varchar(255) DEFAULT NULL,
  `deliveryCharge` double DEFAULT NULL,
  `totalAmount` double DEFAULT NULL,
  `paymentStatus` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `entrydate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consignments`
--

INSERT INTO `consignments` (`Id`, `merchantId`, `trackingId`, `invoiceNo`, `customerName`, `customerAddress`, `customerPhoneNumber`, `productName`, `productPrice`, `weight`, `totalConsignmentAmount`, `remark`, `zoneId`, `pickupPointManagerId`, `managerStatus`, `deliveryBoyId`, `DeliveryBoyStatus`, `deliveryCharge`, `totalAmount`, `paymentStatus`, `created_at`, `updated_at`, `entrydate`) VALUES
(1, 3, 'CON-000001', '789', 'Md. Abdullah Al Raihan', 'Uttara Dhaka', '01701046549', 'Mobile phone', 500, '500 gm', 560, 'res', 1, 1, NULL, NULL, NULL, 60, NULL, NULL, '2020-12-17 11:42:04', '2020-12-17 11:42:04', NULL),
(2, 6, 'CON-000002', '9876543', 'Manisha Kumari', 'Bandhgora site, Chas', '3456789012', 'Spin Mop with Bigger Wheels and Plastic Auto Fold Handle', 200, '1 kg', 260, 'Spin Mop', 1, NULL, NULL, NULL, NULL, 60, NULL, NULL, '2021-01-26 11:23:48', '2021-01-26 11:23:48', NULL),
(3, 6, 'CON-000003', '9876543', 'Manisha Kumari', 'Bandhgora site, Chas', NULL, 'Dustbin', 21, '1 kg', 31, 'sdfghjk', 1, NULL, NULL, NULL, NULL, 10, NULL, NULL, '2021-01-27 08:30:06', '2021-01-27 08:30:06', '2021-01-27'),
(4, 11, 'CON-000004', '12', 'milon', 'dhaka', '01782365489', 'Phone', 15000, '2 kg', 15150, 'wait', 3, NULL, NULL, NULL, NULL, 150, NULL, NULL, '2021-01-27 15:43:32', '2021-01-27 15:43:32', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `District` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `Country`, `state`, `District`, `created_at`, `updated_at`) VALUES
(1, 'India', 'Jharkhand', 'Ranchi', '2020-11-21 09:55:53', '2020-11-21 09:55:53'),
(2, 'India', 'Kolkatta', 'Alipur', '2020-11-21 09:58:09', '2020-11-21 09:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL COMMENT 'primary key for this table',
  `employeeCode` varchar(255) DEFAULT NULL,
  `fName` varchar(255) DEFAULT NULL,
  `lName` varchar(255) DEFAULT NULL,
  `mName` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `maritalStatus` varchar(255) DEFAULT NULL,
  `dateOfBirth` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phoneNo` varchar(255) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `district` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `pickupPoint` varchar(255) DEFAULT NULL,
  `dateOfJoining` varchar(255) DEFAULT NULL,
  `employeeType` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pickupPointManagerId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table for Employees, i.e pickup point manager and delivery boy';

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employeeCode`, `fName`, `lName`, `mName`, `gender`, `religion`, `maritalStatus`, `dateOfBirth`, `email`, `password`, `phoneNo`, `address1`, `address2`, `district`, `zone`, `pickupPoint`, `dateOfJoining`, `employeeType`, `created_at`, `updated_at`, `pickupPointManagerId`) VALUES
(1, 'EMP-000001', 'Md Rahim', 'Khan', NULL, 'Male', 'Islam', 'Single', '1997-12-07', 'infosurjeralo24@gmail.com', '12345', '01747339030', 'Banani, Mosdij Rd, Dhaka', 'Sector 6, Rd 2, House 13, Level 2', '1', '1', '1', '2020-12-16', 'ROLE_PICKUP_POINT_MANAGER', '2020-12-17 05:04:45', '2020-12-17 05:04:45', NULL),
(2, 'EMP-000002', 'Md korim', 'mia', NULL, 'Male', 'Islam', 'Married', '1978-11-29', 'Alraihan580@gmail.com', '23456', '01747339032', 'ka-47/2, Nodd, Gulshan, Dhaka-1212', 'Sector 6, Rd 2, House 13, Level 2', '2', '2', '2', '2020-12-15', 'ROLE_PICKUP_POINT_MANAGER', '2020-12-17 05:08:08', '2020-12-17 05:08:08', NULL),
(3, 'EMP-000003', 'Jaman', 'shakan', NULL, 'Male', 'Islam', 'Married', '2012-12-07', 'stkitbd@gmail.com', '123456', '01747339033', '29, Toyenbee Circular Road (4th Flloor), Motijheel C/A, Dhaka, Bangladesh', NULL, '1', '1', '1', '2020-12-14', 'ROLE_DELIVERY_BOY', '2020-12-17 05:10:26', '2020-12-17 05:10:26', 4),
(4, 'EMP-000004', 'Milon', 'khan', 'sarkar', 'Male', 'ISLAM', 'Single', '2021-01-28', 'merchat@gmail.com', '123', '0172222222', 'dhaka', 'uttara', '2', '1', '2', '2021-01-28', 'ROLE_DELIVERY_BOY', '2021-01-27 07:36:52', '2021-01-27 07:36:52', 5);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'MyEcommerce',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'title',
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'upload/logo.png',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'upload/icon.png',
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `hotline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '01795297424',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fahimmbpi@gmail.com',
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `site_name`, `title`, `logo`, `icon`, `facebook_link`, `twitter_link`, `youtube_link`, `hotline`, `email`, `address`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 'Stk express.com', 'kwalitybd', 'uploads/jeHtrzJ9JJA7cBxhy5sJFdRZRTDyqDGL3wPO2wjB.jpg', 'uploads/dLtnfOkk0Lju677WPAcJvSJS1ckoXpBdZl4LnQiP.png', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/', '01938866023', 'support@kwalitybd.com', 'Dhaka', 'This is really good', '0000-00-00 00:00:00', '2024-09-07 10:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_id` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id`, `name`, `email`, `phone`, `company_name`, `address`, `zone_id`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Milon', 'milon@gmail.com', '01796794989', 'stkitbd', 'Uttara', 2, '1234567', '1630393448.jpg', '2021-08-31 01:04:08', '2021-08-31 01:04:08'),
(2, 'Mim jahan', 'mim@gmail.com', '01701046549', 'tarahura', 'Uttor badda', 1, '123456789', '1630397912.jpg', '2021-08-31 02:18:32', '2021-08-31 02:18:32'),
(3, 'sadekul', 'sadekul@gmail.com', '01701046542', 'Stkexpress', 'nikunjo', 1, '123456789', '1630399213.jpg', '2021-08-31 02:40:13', '2021-08-31 02:40:13'),
(4, 'milon', 'milon@gmail.com', '01796794989', 'Karimshop', '2', 1, '1234567891011', '1630755795.png', '2021-09-04 05:43:15', '2021-09-04 05:43:15'),
(6, 'milon', 'abcd@gmail.com', '01796794989', 'tarahura', 'uttara', 2, '123456789', NULL, '2021-09-13 04:58:25', '2021-09-13 04:58:25'),
(7, 'milon', 'abcde@gmail.com', '01796794989', 'mssoftware ltd.', 'uttara', 3, '12345678', NULL, '2021-09-13 05:02:23', '2021-09-13 05:02:23'),
(8, 'milon', 'abcdef@gmail.com', '01878036235', 'Karimshop', 'Dhaka', 1, '123456', NULL, '2021-09-13 05:04:19', '2021-09-13 05:04:19');

-- --------------------------------------------------------

--
-- Table structure for table `merchant_registers`
--

CREATE TABLE `merchant_registers` (
  `id` int(10) NOT NULL,
  `b_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `M_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_confirmation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table for merchant registrations';

--
-- Dumping data for table `merchant_registers`
--

INSERT INTO `merchant_registers` (`id`, `b_name`, `f_name`, `M_name`, `l_name`, `address`, `zone`, `pincode`, `phone`, `email`, `password`, `password_confirmation`, `created_at`, `updated_at`) VALUES
(1, 'Merchant Testing', 'Merchant', NULL, 'mala', 'ranchi', '2', '898989', '8989898989', 'merchat@gmail.com', '123456', '123456', '2020-12-16 08:05:10', '2020-12-16 08:05:10'),
(2, 'Beauty', 'Abc', NULL, 'Def', 'Saltlake', '2', '700031', '1234567890', 'tttt@gmail.com', '123456', '123456', '2020-12-16 09:12:50', '2020-12-16 09:12:50'),
(3, 'Steelkitefurniture', 'Md Rasel', 'Islam', 'RS', 'Dhaka,bd,uttara', '1', '1230', '01773547850', 'sadekulislam570@gmail.com', 'sa700844l@1997', 'sa700844l@1997', '2020-12-17 03:32:24', '2020-12-17 03:32:24'),
(4, 'FGDSLZUUU4PWZT3L3BLKJDGF http://mail.com/923', 'FGDSLZUUU4PWZT3L3BLKJDGF http://mail.com/923', 'FGDSLZUUU4PWZT3L3BLKJDGF http://mail.com/923', 'FGDSLZUUU4PWZT3L3BLKJDGF http://mail.com/923', 'FGDSLZUUU4PWZT3L3BLKJDGF http://mail.com/923', '3', 'FGDSLZUUU4PWZT3L3BLKJDGF http://mail.com/923', 'FGDSLZUUU4PWZT3L3BLKJDGF http://mail.com/923', 'waggam.antitus18157413@gmail.com', 'http://mail.com/923 FGDSLZUUU4PWZT3L3BLKJDGF', 'http://mail.com/923 FGDSLZUUU4PWZT3L3BLKJDGF', '2021-01-17 08:25:33', '2021-01-17 08:25:33'),
(5, 'FGD1ODS9L6PA8SYV0MS38DGF http://mail.com/923', 'FGD1ODS9L6PA8SYV0MS38DGF http://mail.com/923', 'FGD1ODS9L6PA8SYV0MS38DGF http://mail.com/923', 'FGD1ODS9L6PA8SYV0MS38DGF http://mail.com/923', 'FGD1ODS9L6PA8SYV0MS38DGF http://mail.com/923', '3', 'FGD1ODS9L6PA8SYV0MS38DGF http://mail.com/923', 'FGD1ODS9L6PA8SYV0MS38DGF http://mail.com/923', 'waggam.antitus18157413@gmail.com', 'http://mail.com/923 FGD1ODS9L6PA8SYV0MS38DGF', 'http://mail.com/923 FGD1ODS9L6PA8SYV0MS38DGF', '2021-01-17 08:25:34', '2021-01-17 08:25:34'),
(6, 'max', 'manisha', 'k', 'kumari', 'Lalpur', '1', '834001', '01213346565', 'mk8222305@gmail.com', '123456', '123456', '2021-01-21 21:26:26', '2021-01-21 21:26:26'),
(7, 'JesseMap', 'JesseMap', 'JesseMap', 'JesseMap', 'https://opendht.info/data-storage-networking-real-world-skills-for-the-comptia-storage-certification-and-beyond', '2', 'Test, just a test', '89997814215', 'i.ooxv.ertris@gmail.com', 'O%3fgw8ex3D', 'O%3fgw8ex3D', '2021-01-24 13:42:39', '2021-01-24 13:42:39'),
(8, 'max', 'mk', 'K', 'mahto', 'Lalpur\r\nLalpur', '1', '834001', '01213346565', 'mk8222305@gmail.com', '123456', '123456', '2021-01-27 00:22:51', '2021-01-27 00:22:51'),
(9, 'dd', 'Sadekul', NULL, 'Sk', 'Saltlake', '2', '700031', '7889999', 'sd@gmail.com', '123456', '123456', '2021-01-27 00:26:06', '2021-01-27 00:26:06'),
(10, 'it', 'milon', 'sarkar', 'khan', 'Dhaka', '1', '123', '012555555', 'merchat@gmail.com', '222', '222', '2021-01-27 07:39:21', '2021-01-27 07:39:21'),
(11, 'it', 'milon', 'sarkar', 'khan', 'Dhaka', '1', '123', '01722222222', 'milon@gmail.com', '123', '123', '2021-01-27 07:41:47', '2021-01-27 07:41:47'),
(12, 'it', 'milon', 'sarkar', 'khan', 'dhaka', '1', '5430', '01796794989', 'admin@gmail.com', '123456', '123456', '2021-07-07 03:54:35', '2021-07-07 03:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2020_10_29_152757_create_pickup_points_table', 1),
(3, '2020_11_20_132156_create_merchant_registers_table', 1),
(4, '2020_11_20_170301_create_merchant_logins_table', 1),
(5, '2020_11_21_074553_create_users_table', 1),
(6, '2020_11_21_091802_create_districts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchant_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cash_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payamount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `merchant_id`, `cus_name`, `phone`, `address`, `invoice_no`, `barcode`, `barcode_number`, `product_weight`, `catagory_id`, `delivery_area`, `Product_type`, `cash_amount`, `sell_amount`, `payamount`, `created_at`, `updated_at`, `status`) VALUES
(2, '3', 'milon', '01796794989', 'Rangpur sadar', '236', '', '', '2', '2', '3', 'Fraglie', '500', '500', 395, '2021-08-31 02:41:50', '2021-09-01 03:36:23', '6'),
(3, '1', 'kamrul', '01711111111', 'Dhaka', '236', '', '', '2', '1', '2', 'Fraglie', '1000', '1000', 900, '2021-08-31 05:26:40', '2021-09-01 04:17:31', '6'),
(4, '1', 'stk mague', '01711111111', 'dhaka', '888', '', '', '2', '1', '2', 'Fraglie', '500', '500', 400, '2021-08-31 05:33:22', '2021-09-01 03:29:33', '6'),
(5, '1', 'Karim', '01722334455', 'Rangpur', '548', '', '', '1', '1', '2', 'Fraglie', '1000', '1000', 930, '2021-08-31 06:40:10', '2021-09-01 03:24:52', '6'),
(6, '1', 'Monir', '01878036235', 'Dinajpur', '548', '', '', '1', '2', '3', 'Liquid', '1000', '1000', 930, '2021-09-01 01:55:21', '2021-09-01 03:27:14', '6'),
(7, '3', 'mim', '01711111111', 'Badda', '665', '', '', '1', '2', '1', 'Fraglie', '500', '500', 440, '2021-09-01 03:31:07', '2021-09-04 00:38:36', '6'),
(9, '1', 'milon', '01796794989', 'dhaka', '2524', '', '', '2', '1', '1', 'Fraglie', '1000', '1000', 900, '2021-09-01 06:26:21', '2021-09-07 05:53:15', '1'),
(10, '1', 'Rahim', '01524542251', 'diyabari', '548', '', '', '2', '1', '3', 'Fraglie', '1000', '1000', 890, '2021-09-04 04:38:55', '2021-09-04 04:40:01', '6'),
(12, '1', 'milonbarcode', '01796794989', 'Dhaka', '888', '<div style=\"font-size:0;position:relative;width:224px;height:30px;\">\n<div style=\"background-color:black;width:4px;height:30px;position:absolute;left:0px;top:0\">&nbsp;</div>\n<div style=\"background-color:black;width:2px;height:30px;position:absolute;left:><', 'stkit11inv', '2', '1', '1', 'Fraglie', '1000', '1000', 900, '2021-10-19 07:09:25', '2021-10-19 07:09:25', '1'),
(13, '1', 'milon', '01796794989', 'dhaak', '125', '????\0JFIF\0\0`\0`\0\0??\0>CREATOR: gd-jpeg v1.0 (using IJG JPEG v90), default quality\n??\0C\0		\n\r\Z\Z $.\' \",#(7),01444\'9=82<.342??\0C			\r\r2!!22222222222222222222222222222222222222222222222222??\0\0\0?\"\0??\0\0\0', 'stkit13inv', '2', '1', '1', 'Fraglie', '1000', '1000', 900, '2021-10-19 07:15:04', '2021-10-19 07:15:04', '1'),
(14, '1', 'milon', '01796794989', 'dhaka', '125', '????\0JFIF\0\0`\0`\0\0??\0>CREATOR: gd-jpeg v1.0 (using IJG JPEG v90), default quality\n??\0C\0		\n\r\Z\Z $.\' \",#(7),01444\'9=82<.342??\0C			\r\r2!!22222222222222222222222222222222222222222222222222??\0\0\0?\"\0??\0\0\0\0\0\0\0\0\0\0\0	\n??\0?\0\0\0}\0!1AQa\"q2???#B??R??$3br?	\n\Z%&\'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz???????????????????????????????????????????????????????????????????????????\0\0\0\0\0\0\0\0	\n??\0?\0\0w\0!1AQaq\"2?B????	#3R?br?\n$4?%?\Z&\'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz??????????????????????????????????????????????????????????????????????????\0\0\0?\0??\0	?!???\0p??(j??\0?\0?^?u?\0q??\'Z?	?!???\0p??(j??\0?\0?^?u?\0q??\'Z\0>6?\0?!????\0J#?ſ?W??O?\0I֏???Hu??w?\0҈??o????_??\0?u??????V?\0????G?5?\02????\0?\Z?i???????\0h??M̭?\0o?F?=ſ?W??O?\0I֏?_?Ht/?x?\0҉(?o????_??\0?u??????????J\0<%?\0%{?/???????<[?\0$??????\0??k??%?\0%{?/???????<[?\0$??????\0??h???ſ?H~?O?\0J????<[?\0$??????\0??h????i?\0?O??G????\0???f_?????\0kQ?\06??????k?eo?{?\0?5?xK?I?_???CW?M̭?\0o?F?	?!???\0p??(j\0??\0?\0?^?u?\0q??\'Z>6?\0?!????\0J#?ſ?W??O?\0I֏???Hu??w?\0҈????\0??\0????^??/?+???\0??^??\0?h??ƿ?j?	?^???\0p??\'j\0<[?\0%{?????\0??k??\0??????W?x??J?ï???\0?:ן?\0???????e?\0???????z?/?$:???D???\0?/??????\0???>	?!п???\0J$?????\05?????-z?/?$:???D???\0?????\0e?@?%?\0$?B?\0???(??<??????????J<[?\0$??????\0??h?%?\0%{B?\0???\'???\0?!?u?\0q??(Z\0<%?\0$??/????????[?\0%{?????\0??k?<%?\0$??/????????[?\0%{?????\0??h\0???\0$?]?\0??(???\0?^?u?\0q??\'Z>6?\0?!????\0J#?ſ?W??O?\0Iր<?\0???\0?[???\0??????????\0?h????V?\0????G?5?\02????\0?\Z\0??\0?^?u?\0q??\'Z>	?!п???\0J$?ſ?W??O?\0I֏?_?Ht/?x?\0҉(\0??????\0?v?\0?o???_??\0҅???????\0?v?\0?o???_??\0҅?????\0?!?u?\0q??(Z???@?o???_??\0҅??\0?e?\0????????h??????i?\0?O??G????\0??\0?i???????\0h??/?$???\0?\r]?\0?5?\02????\0?\Z?<%?\0$??/????????[?\0%{?????\0??h???\0$?]?\0??(???\0?^?u?\0q??\'Z>6?\0?!????\0J#????\04w??_?5z????|E?\0?g???y?\0??\0????\Z?\0٫?<%?\0%{?/??????\0?o????_??\0?u???\0???\0???^????+???\'?\0??^?\07y??ٗ?f??t?\0???????_???\0?W??̿?4?\0ۧ?֯@?%?\0$?B?\0???(??<?\0???/???\0???????_???\0?W??@?\0???\0p_????????????J\0??_?W?/?x?\0?y(?o???_??\0҅???????????J<[?\0$??????\0??h??', 'stkit14inv', '2', '2', '3', 'Fraglie', '1000', '1000', 890, '2021-10-19 07:20:04', '2021-10-19 07:20:04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchant_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `merchant_id`, `transaction_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, '4', '#125k2', '100', '2021-09-04 02:37:19', '2021-09-04 02:37:19'),
(2, '4', '#125k2', '600', '2021-09-04 03:44:59', '2021-09-04 03:44:59'),
(3, '1', '#125k2', '600', '2021-09-04 03:45:28', '2021-09-04 03:45:28'),
(4, '1', '#125k2', '600', '2021-09-04 03:55:21', '2021-09-04 03:55:21'),
(5, '1', 'jgkg24', '500', '2021-09-04 04:02:21', '2021-09-04 04:02:21'),
(6, '1', 'jhu245', '1460', '2021-09-04 04:03:06', '2021-09-04 04:03:06'),
(7, '4', 'jgkg24', '600', '2021-09-07 05:33:05', '2021-09-07 05:33:05'),
(8, '2', 'jgkg24', '100', '2021-09-07 05:34:00', '2021-09-07 05:34:00'),
(9, '3', 'jgkg24', '500', '2021-09-07 05:35:07', '2021-09-07 05:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pickup_points`
--

CREATE TABLE `pickup_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `PickupPointName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Policestation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ZoneId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pickup_point_areas`
--

CREATE TABLE `pickup_point_areas` (
  `id` int(11) NOT NULL,
  `pickupPointName` varchar(255) NOT NULL,
  `policeStation` varchar(255) NOT NULL,
  `ZoneId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pickup_point_areas`
--

INSERT INTO `pickup_point_areas` (`id`, `pickupPointName`, `policeStation`, `ZoneId`) VALUES
(1, 'Near Jhanda chowck', 'sadar', 1),
(2, 'Near District More', 'sadar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `super_admin_logins`
--

CREATE TABLE `super_admin_logins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_admin_logins`
--

INSERT INTO `super_admin_logins` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raf_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raf_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raf_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone_id` int(11) NOT NULL,
  `emg_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emg_relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emg_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `f_name`, `m_name`, `address`, `raf_name`, `raf_phone`, `raf_address`, `zone_id`, `emg_name`, `emg_relation`, `emg_phone`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'milon', 'milon@gmail.com', '01796794989', '$2y$10$Khshp.9FYVjirh1Yok5ujuqH/5BhU6XCgbPLs.Xq8XCLoVSfFmcTW', 'f', 'f', 'f', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2021-09-06 03:13:20', '2021-09-06 03:13:20', 0),
(9, 'milon', 'milonab@gmail.com', '01711111111', '$2y$10$0BXbG81gFV7US3s/kkn5l.K6LTX24byVwESUpXYFeCN6vLEMly.t.', 'sarkar', 'mm', '2', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-06 03:29:59', '2021-09-06 03:29:59', 0),
(12, 'milon', 'kamru@gmail.com', '01722334455', '$2y$10$d6DzetOVw/wLIQE2uL7kxOPqXh.fPsLwVtbPpiflhu/Eyyp/AQInG', 'sarkar', 'mm', '2', 'samsurzzaman', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2021-09-06 03:47:41', '2021-09-06 03:47:41', 0),
(13, 'milon', 'kamruab@gmail.com', '01701046542', '$2y$10$pGTe29D50MrLHYDOT4wLeepq2/Qng1l9UN4iHA6wJkOoCtmbIA0Z2', 'Milon', 'mm', '2', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2021-09-06 03:48:26', '2021-09-06 03:48:26', 0),
(14, 'milon', 'admin@gmail.com', '01254563235', '$2b$12$i213anHbBmjYNwfd7Na15ucvcH/DP0kWmfBJJYLtEev5tzgWI6xG', 'sarkar', 'mm', '2', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-06 03:51:52', '2021-09-06 03:51:52', 0),
(15, 'milon', 'adminab@gmail.com', '01711111112', '$2b$12$i213anHbBmjYNwfd7Na15ucvcH/DP0kWmfBJJYLtEev5tzgWI6xG.', 'sarkar', '123', '2', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-06 03:54:29', '2021-09-06 03:54:29', 0),
(16, 'alax', 'alax@gmail.com', '01782215451', '$2y$10$gPi2g58FdGL3JkPAhSvPb.rFzvffAH7XsU1teD28QdT0dAFCutRpi', 'Milon', 'mm', '2', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-06 03:59:17', '2021-09-06 03:59:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Merchant', 'merchat@gmail.com', '123456', 'ROLE_MERCHANT'),
(2, 'Abc', 'tttt@gmail.com', '123456', 'ROLE_MERCHANT'),
(3, 'Md Rasel', 'sadekulislam570@gmail.com', 'sa700844l@1997', 'ROLE_MERCHANT'),
(4, 'Md Rahim', 'infosurjeralo24@gmail.com', '12345', 'ROLE_PICKUP_POINT_MANAGER'),
(5, 'Md korim', 'Alraihan580@gmail.com', '23456', 'ROLE_PICKUP_POINT_MANAGER'),
(6, 'Jaman', 'stkitbd@gmail.com', '123456', 'ROLE_DELIVERY_BOY'),
(7, 'FGDSLZUUU4PWZT3L3BLKJDGF http://mail.com/923', 'waggam.antitus18157413@gmail.com', 'http://mail.com/923 FGDSLZUUU4PWZT3L3BLKJDGF', 'ROLE_MERCHANT'),
(10, 'JesseMap', 'i.ooxv.ertris@gmail.com', 'O%3fgw8ex3D', 'ROLE_MERCHANT'),
(11, 'mk', 'mk8222305@gmail.com', '123456', 'ROLE_MERCHANT'),
(12, 'Sadekul', 'sd@gmail.com', '123456', 'ROLE_MERCHANT'),
(15, 'milon', 'milon@gmail.com', '123', 'ROLE_MERCHANT'),
(16, 'milon', 'admin@gmail.com', '123456', 'ROLE_MERCHANT');

-- --------------------------------------------------------

--
-- Table structure for table `weights`
--

CREATE TABLE `weights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weights`
--

INSERT INTO `weights` (`id`, `weight`, `amount`, `created_at`, `updated_at`) VALUES
(1, '500', '60', '2021-08-31 02:24:46', '2021-08-31 02:24:46'),
(2, '1000', '100', '2021-08-31 02:25:01', '2021-08-31 02:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` int(11) NOT NULL,
  `zoneName` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `districtId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `zoneName`, `pincode`, `districtId`) VALUES
(1, 'Sector 1', 828989, 1),
(2, 'Sector2', 897879, 1),
(3, 'sector 3', 786890, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asantmerchants`
--
ALTER TABLE `asantmerchants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consignments`
--
ALTER TABLE `consignments`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `merchantId` (`merchantId`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `employeeCode` (`employeeCode`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchant_registers`
--
ALTER TABLE `merchant_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickup_points`
--
ALTER TABLE `pickup_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickup_point_areas`
--
ALTER TABLE `pickup_point_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admin_logins`
--
ALTER TABLE `super_admin_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consignments`
--
ALTER TABLE `consignments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key for this table', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `merchant_registers`
--
ALTER TABLE `merchant_registers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pickup_points`
--
ALTER TABLE `pickup_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pickup_point_areas`
--
ALTER TABLE `pickup_point_areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `super_admin_logins`
--
ALTER TABLE `super_admin_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consignments`
--
ALTER TABLE `consignments`
  ADD CONSTRAINT `consignments_ibfk_1` FOREIGN KEY (`merchantId`) REFERENCES `merchant_registers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
