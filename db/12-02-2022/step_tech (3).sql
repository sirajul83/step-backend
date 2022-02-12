-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 05:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `step_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_year` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedIn` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_ip` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_ip` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `name`, `slogan`, `logo`, `address`, `mobile_no1`, `mobile_no2`, `email`, `website`, `copyright_year`, `facebook`, `twitter`, `linkedIn`, `youtube`, `is_active`, `created_by`, `updated_by`, `created_ip`, `updated_ip`, `created_at`, `updated_at`) VALUES
(1, 'Step Tech', 'One of The Best Software Company', 'logo_1644141268.jpg', ' House#74, Road # 21, Block #B, Banani, Dhaka-1213, Bangladesh', '1672-758084', '01673-050507', 'info@steptechbd.com', 'https://steptechbd.com/', '2022', 'ff', 'tt', 'll', 'yy', 1, '2', '2', '::1', '::1', '2022-02-06 03:15:30', '2022-02-06 06:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_ip` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_ip` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_by`, `updated_by`, `created_ip`, `updated_ip`, `created_at`, `updated_at`) VALUES
(1, 'Abid Hossin', 'sirajul@gmail.com', 'Default Sub', 'bcvbcvbcv xcgfg', NULL, NULL, '::1', NULL, '2022-02-11 11:42:48', '2022-02-11 11:42:48'),
(2, 'Sirajul Islam', 'sirajul54@gmail.com', 'ABC Sub', 'fds ghfdh  fgh fghf', NULL, NULL, '::1', NULL, '2022-02-11 11:46:36', '2022-02-11 11:46:36'),
(3, 'ddddd', 'ddd@gmail.com', 'ABC Sub  fgfgf', 'fdgfdg', NULL, NULL, '::1', NULL, '2022-02-11 11:49:47', '2022-02-11 11:49:47'),
(4, 'Basit khan', 'bs@gmail.com', 'fgfddsfgds', 'xdgvbdsfds', NULL, NULL, '::1', NULL, '2022-02-11 11:51:37', '2022-02-11 11:51:37'),
(5, 'fghdfg', 'abgfdgid@gmail.com', 'gfdgfdg', 'gfdgdf', NULL, NULL, '::1', NULL, '2022-02-11 11:53:08', '2022-02-11 11:53:08'),
(6, 'Hasan', 'hasan@gmail.com', 'ABC Sub  gdsg x fsdfs', 'vdfvds sdf sddfhgfh df', NULL, NULL, '::1', NULL, '2022-02-11 11:54:21', '2022-02-11 11:54:21'),
(7, 'Sirajul Islam', 'sirajul@gmail.com', 'Default Sub', 'vdgsfgdsggfdggdf dfgfdgf', NULL, NULL, '::1', NULL, '2022-02-11 11:55:52', '2022-02-11 11:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` int(6) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_ip` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_ip` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `title`, `value`, `is_active`, `created_by`, `updated_by`, `created_ip`, `updated_ip`, `created_at`, `updated_at`) VALUES
(1, 'Years Expereince', 3, 1, '2', NULL, '::1', NULL, '2022-02-07 05:59:36', '2022-02-07 05:59:36'),
(2, 'SKilled Experts', 6, 1, '2', NULL, '::1', NULL, '2022-02-07 06:14:28', '2022-02-07 06:14:28'),
(3, 'Happy Clients', 20, 1, '2', NULL, '::1', NULL, '2022-02-07 06:14:47', '2022-02-07 06:14:47'),
(4, 'Complete Projects', 30, 1, '2', NULL, '::1', NULL, '2022-02-07 06:14:59', '2022-02-07 06:14:59');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_ip` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_ip` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `short_description`, `description`, `image`, `is_active`, `created_by`, `updated_by`, `created_ip`, `updated_ip`, `created_at`, `updated_at`) VALUES
(1, 'Online Admission', 'Online Registration, Application & Result Process', 'Online Registration, Application & Result Process Online Registration, Application & Result Process,Online Registration, Application & Result Process', 'portfolio_1644400589.png', 1, '2', '2', '::1', '::1', '2022-02-07 22:20:49', '2022-02-09 03:56:29'),
(2, 'UP Automation', 'Union Parisad Automation software', 'Union Parisad Automation software Union Parisad Automation software, Union Parisad Automation software Union Parisad Automation software', 'portfolio_1644294089.png', 1, '2', NULL, '::1', NULL, '2022-02-07 22:21:29', '2022-02-07 22:21:29'),
(3, 'Hospital Website', 'Hospital Website and Management System', 'Hospital Website and Management System Hospital Website and Management System Hospital Website and Management System.Hospital Website and Management System', 'portfolio_1644400631.png', 1, '2', '2', '::1', '::1', '2022-02-07 22:22:05', '2022-02-09 03:57:11'),
(5, 'Club Management', 'Member & Accounting Manage, Service Efficiency.', 'Member & Accounting Manage, Service Efficiency. Member & Accounting Manage, Service Efficiency. Member & Accounting Manage, Service Efficiency.', 'portfolio_1644400351.png', 1, '2', NULL, '::1', NULL, '2022-02-09 03:52:31', '2022-02-09 03:52:31'),
(6, 'Invantory & Accounting', 'Inventory Stock & Stock Management', 'Inventory Stock & Stock Management Inventory Stock & Stock Management.Inventory Stock & Stock Management', 'portfolio_1644400698.jpg', 1, '2', '2', '::1', '::1', '2022-02-09 03:53:57', '2022-02-09 03:58:18'),
(7, 'Construction Manage', 'Construction Company Project Management', 'Construction Company Project Management Construction Company Project Management. Construction Company Project Management', 'portfolio_1644400536.jpg', 1, '2', NULL, '::1', NULL, '2022-02-09 03:55:36', '2022-02-09 03:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_ip` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_ip` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `description`, `is_active`, `created_by`, `updated_by`, `created_ip`, `updated_ip`, `created_at`, `updated_at`) VALUES
(1, 'fa fa-3x fa-laptop-code', 'Web Design', 'In the field of Web design , we’re quickly getting to the point of being unable to keep up with the endless new resolutions and devices. For many websites, creating a website version for each resolution', 1, '2', '2', '::1', '::1', '2022-02-06 23:00:14', '2022-02-06 23:39:20'),
(2, 'fa fa-3x fa-code', 'Web Development 2', 'Step Tech web application development practice addresses a wide range of business needs. Whether it\'s a content management system or a web-based data interface, our solutions demonstrate all the hallmarks', 1, '2', '2', '::1', '::1', '2022-02-06 23:05:20', '2022-02-06 23:38:38'),
(6, 'fa fa-3x fa-cart-plus', 'E-commerce', 'As more and more customers are going (and staying) online, it is crucial that your website is fully equipped to handle their widening range of expectations and needs. Whether you need to build a new website experience', 1, '2', NULL, '::1', NULL, '2022-02-09 02:51:07', '2022-02-09 02:51:07'),
(7, 'fa fa-3x fa-cart-plus', 'Marketing', 'Marketing is the process of exploring, creating, and delivering value to meet the needs of a target market in terms of goods and services; potentially including selection of a target audience; selection', 1, '2', NULL, '::1', NULL, '2022-02-09 02:51:50', '2022-02-09 02:51:50'),
(8, 'fa fa-3x fa-search', 'SEO', 'Search engine optimization is the process of improving the quality and quantity of website traffic to a website or a web page from search engines. SEO targets unpaid traffic rather than direct traffic or paid traffic.', 1, '2', NULL, '::1', NULL, '2022-02-09 02:52:45', '2022-02-09 02:52:45'),
(9, 'fa fa-3x fa-pen', 'Content Writing', 'Many different types of content writing examples on the digital front include blogs, scriptwriting for videos, emailers, social media posts, whitepapers, etc. All of these are important for the digital growth of a brand', 1, '2', NULL, '::1', NULL, '2022-02-09 02:53:33', '2022-02-09 02:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` tinyint(3) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_ip` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_ip` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `short_title`, `title`, `description`, `image`, `position`, `is_active`, `created_by`, `updated_by`, `created_ip`, `updated_ip`, `created_at`, `updated_at`) VALUES
(1, 'CREATIVE AGENCY 4444444 22', 'sgsad ssdvsadfd  fsefe zvsad 33', 'sdgsdgsdg   uuuuuuuuuuuuuuuu 222', 'slider_1644489224.jpg', 2, 1, '2', NULL, '::1', NULL, '2022-02-10 04:33:44', '2022-02-10 04:33:44'),
(2, 'HIGH CREATIVE AGENCY', 'Highly Professional Team Members', 'Highly Professional Team Members Highly Professional Team MembersHighly Professional Team Members Highly Professional Team MembersHighly Professional Team Members', 'slider_1644489206.png', 3, 1, '2', NULL, '::1', NULL, '2022-02-10 04:33:26', '2022-02-10 04:33:26'),
(5, 'Creative Agency', 'Happy Clients & Positive Reviews', 'Happy Clients & Positive ReviewsHappy Clients & Positive ReviewsHappy Clients & Positive ReviewsHappy Clients & Positive Reviews Happy Clients & Positive Reviews', 'slider_1644489172.png', 1, 1, '2', NULL, '::1', NULL, '2022-02-10 04:32:52', '2022-02-10 04:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedIn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_ip` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_ip` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `image`, `facebook`, `twitter`, `linkedIn`, `is_active`, `created_by`, `updated_by`, `created_ip`, `updated_ip`, `created_at`, `updated_at`) VALUES
(1, 'Arif ibne Ali', 'Managing Director', 'team_1644226109.jpg', 'ff', 'tt', 'll', 1, '2', NULL, '::1', NULL, '2022-02-07 03:28:29', '2022-02-07 03:28:29'),
(2, 'Ariful Islam', 'Project Manager', 'team_1644226155.jpg', 'ff', 'tt', 'll', 1, '2', NULL, '::1', NULL, '2022-02-07 03:29:15', '2022-02-07 03:29:15'),
(3, 'Md Omor Faruk', 'Software Developer', 'team_1644227439.jpg', 'facebook.com/arifibneali', 'tt', 'll', 1, '2', NULL, '::1', NULL, '2022-02-07 03:50:39', '2022-02-07 03:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(6) DEFAULT NULL,
  `updated_by` int(6) DEFAULT NULL,
  `created_ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_by`, `updated_by`, `created_ip`, `updated_ip`, `created_at`, `updated_at`) VALUES
(1, 'abdul aziz', 'aziz@gmail.com', NULL, '$2y$10$qfy/.qo9rfeGUzY1NOqu0eFTe9ZYrCmlzfDVMTieoGQAzZG3WMKy6', NULL, NULL, NULL, NULL, NULL, '2022-02-05 03:55:45', '2022-02-05 03:55:45'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$W5QIbzYsPW/lwFdNRodzEuugmNemLN5RJom9.nwxSV5ldaqVru7l2', NULL, NULL, 2, NULL, '::1', '2022-02-05 06:46:07', '2022-02-09 06:56:49'),
(3, 'Sirajul Islam', 'sirajul@gmail.com', NULL, '$2y$10$heyx4lLxe.QbRdyyw9WbxutctqwOljMAMIQC1TAKjZSxyGNzecHDm', NULL, 2, NULL, '::1', NULL, '2022-02-05 22:46:23', NULL),
(4, 'Abdul Jalil', 'jajil@gmail.com', NULL, '$2y$10$QL4f8vHgT/8GSXfb6zWlS.8Xlef2kstyodL0G/AQD3x6jd2J3GBG.', NULL, 2, NULL, '::1', NULL, '2022-02-05 22:51:04', NULL),
(5, 'Basit khan', 'basit@gmail.com', NULL, '$2y$10$o08HevRP1ce26VD6pLSoQuElQI8f/0FWa6VBaNIERo7dodXAACx9K', NULL, 2, NULL, '::1', NULL, '2022-02-05 22:51:41', NULL),
(6, 'Hasan', 'hasan@gmail.com', NULL, '$2y$10$8bvNaTBmXMrkG0ZaOcO9yOrF4ahEgwhETRyj8PpHfIKQfS0v12tKu', NULL, 2, NULL, '::1', NULL, '2022-02-05 22:52:56', NULL),
(7, 'ddddd', 'd@gmail.com', NULL, '$2y$10$mJZm6gvtnutT.VbC9PokNeZmGcIQL1IrEAIFXWjaI06Kkic5KMBd6', NULL, 2, NULL, '::1', NULL, '2022-02-05 23:10:54', NULL),
(8, 'Basit khan 7777222222', 'bb@gmail.com', NULL, '$2y$10$1iFxVslCvUCOSrPDNR33Q.8PIOmAVZGHjqjvgJ7Oy/s75kghb31aG', NULL, 2, 2, '::1', '::1', '2022-02-05 23:11:20', '2022-02-05 23:35:10'),
(9, 'UCB Bank', 'vv@gmail.com', NULL, '$2y$10$Sl.Qxj/rJrs.6ight7YRxucTdD4xHpAm8ffmASGpknMkGb3eGjbIC', NULL, 2, NULL, '::1', NULL, '2022-02-05 23:11:41', NULL),
(10, 'Abdul', 'ad@gmail.com', NULL, '$2y$10$UA6hYRLbv.PQnwZh8uaHUuH0E/OeRH1FB2Xgnq1FnIaAzy5yGETwm', NULL, 2, NULL, '::1', NULL, '2022-02-05 23:12:07', NULL),
(11, 'fsdfdsf sfd', 'fghfgh@gmail.com', NULL, '$2y$10$/V9R6uEpTHSNJNJzJflQEe30zrfAIrfKQuZQzJ6q4s/Yo/PJCLgIa', NULL, 2, NULL, '::1', NULL, '2022-02-05 23:12:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `web_contents`
--

CREATE TABLE `web_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1=WHO WE ARE, 2= WHAT WE DO, 3= WHY CHOOSE US, 4=MEET THE TEAM, 5=OUR PROJECT',
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_ip` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_ip` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_contents`
--

INSERT INTO `web_contents` (`id`, `short_title`, `title`, `description`, `image`, `type`, `is_active`, `created_by`, `updated_by`, `created_ip`, `updated_ip`, `created_at`, `updated_at`) VALUES
(1, 'WHO WE ARE', 'Step Tech is the best software firms in Bangladesh', 'Sure, Step Technology is a leading global provider of system firmware and software engineering services for companies in the mobile, desktop, server, and embedded systems industries. Yes, we are proud to have the world’s top computing companies as our customers. With hard work, we’ve become a recognized leader in our markets. But who are we really? We’re a group of engineers and business men and women who think and act as an extension to our customer’s product development teams. A team of people that aren’t afraid to get creative when it comes to finding a flexible business model or roll up our sleeves when it comes to debugging that important new product being readied for the production line. We built our reputation on providing superior firmware technology, innovative software solutions and second-to-none engineering and project management support services. If you haven’t already had an opportunity to work with Step Technology, we encourage you to ask someone who has. Our mission is rather simple; Step Technology is committed to helping its customers bring their products to market faster while reducing overall system development costs.', 'web_content_1644485532.jpg', 1, 1, '2', '2', '::1', '::1', '2022-02-08 01:14:52', '2022-02-10 03:32:12'),
(2, 'WHAT WE DO', 'Best Web Application Development in Bangladesh', 'Best Web Application and Software Development In Bangladesh. We build POS, Accounting & Inventory, HR/Payroll, School Management.', NULL, 2, 1, '2', '2', '::1', '::1', '2022-02-08 01:16:39', '2022-02-09 03:30:12'),
(4, 'WHY CHOOSE US', '3 Years Expereince', 'We build best website design and development. We are build your website totally row coding and high class.', NULL, 3, 1, '2', NULL, '::1', NULL, '2022-02-08 02:53:27', '2022-02-08 02:53:27'),
(5, 'OUR PROJECT', 'Step Tech working lots of project.', 'Step Tech working lots of project. Step Tech working lots of project. Step Tech working lots of project.', NULL, 5, 1, '2', NULL, '::1', NULL, '2022-02-09 03:38:59', '2022-02-09 03:38:59'),
(6, 'MEET THE TEAM', 'Meet Experts of Behind Work', 'Our team working more effectively, efficiently, or innovatively in carrying out complex cognitive.Our team working more effectively, efficiently, or innovatively in carrying out complex cognitive.', NULL, 4, 1, '2', NULL, '::1', NULL, '2022-02-09 22:34:38', '2022-02-09 22:34:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `web_contents`
--
ALTER TABLE `web_contents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `web_contents`
--
ALTER TABLE `web_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
