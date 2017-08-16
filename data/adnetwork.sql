-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2017 at 10:49 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.21-1~ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adnetwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `name`, `type`, `start_date`, `end_date`) VALUES
(1, 'aab', 'cpc', '1', '2'),
(2, 'bbb', 'cpc', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `image_`, `target_`) VALUES
(2, 'a', 'a123', 'a234'),
(3, 'b', 'a123', 'a234');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `publisher_id`, `contact`) VALUES
(1, 'abc123', 'aaa111@gmail.com', NULL, 'a111222'),
(2, 'Truong Nguyen', 'aaa123@gmail.com', NULL, 'a1');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'b1', 'abc123', '2017-07-18 18:11:25', '2017-07-18 18:11:25'),
(3, 'a', 'b', '2017-07-18 18:53:03', '2017-07-18 18:53:03'),
(4, 'aa111', 'aaa', '2017-07-18 19:13:04', '2017-07-18 19:13:04'),
(5, 'aa111', 'aaa', '2017-07-18 19:15:59', '2017-07-18 19:15:59'),
(6, 'aa', 'aa', '2017-07-18 19:44:46', '2017-07-18 19:44:46'),
(7, 'aa', 'aa', '2017-07-18 19:45:34', '2017-07-18 19:45:34');

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
(3, '2017_07_18_044640_create_clients_table', 2),
(4, '2017_07_18_045222_add_contact_to_clients_table', 3),
(5, '2017_07_18_064810_create_websites_table', 4),
(6, '2017_07_18_065841_create_ads_table', 5),
(7, '2017_07_18_070618_create_stores_table', 6),
(8, '2016_02_14_090604_create_items_table', 7),
(9, '2014_10_12_000000_create_users_table', 8),
(10, '2014_10_12_100000_create_password_resets_table', 9),
(11, '2017_07_21_095104_create_banners_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ads_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'truong', 'truongvnu@yahoo.com', '$2y$10$JZ53tXvacrUIsovIXB35q.l.ZmJVE0s2KW.ja8Q.e6Mzn/ad4L2fS', '5LPTDxtPgS9oyiVPss5UbundA612TpucG3OoIwsJ9FL5fzk69VIrtXulL0Nf', '2017-07-18 21:56:36', '2017-07-18 21:56:36'),
(2, 'Truong Nguyen', 'truongnm@abc.com', '$2y$10$DA.dh0LqwqbiRukoXYQbV.sbYnFekLvC44b8dM2YK2fu0TDpUpOwq', NULL, '2017-07-18 22:29:28', '2017-07-18 22:29:28'),
(3, 'Truong Nguyen', 'truong1@vp9.vn', '$2y$10$sioQns1d7o08G2mtHpNuju21rXmxIOBpYd3VbZ5A7FHhE95v//z5O', NULL, '2017-07-24 01:39:50', '2017-07-24 01:39:50'),
(4, 'Truong Nguyen', 'truong122@vp9.vn', '$2y$10$Fk1wTRhe2pLk.NCXygPnmOTfei7WT4Amlg2Z9MTmHSh.cyTPJ4lSm', NULL, '2017-07-24 19:39:37', '2017-07-24 19:39:37'),
(5, 'a1234', 'aaa11123@gmail.com', '$2y$10$KXybcmQcVCcH6qBaETuBReUIDXTfUdMfKdPVpAww2PSengp2eSg1q', NULL, '2017-07-27 03:11:42', '2017-07-27 03:11:42'),
(6, 'Truong', 'truong123@vp9.vn', '$2y$10$esFmxGnwYN1uAyo2/8RCj./HbdNC1MVVwT.7tUV2JjTfIDuqlX4ye', NULL, '2017-07-27 23:33:19', '2017-07-27 23:33:19'),
(7, 'Truong Nguyen', 'truongnm@abc.com.vn', '$2y$10$/yGcCsDgeFMiXoLrqijqGu2FuY6E4bqX4oXvB9GXcNRay/tzOkY6W', NULL, '2017-07-30 19:36:33', '2017-07-30 19:36:33');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `name`, `email`, `contact`, `link`) VALUES
(4, 'a123', 'aaa@gmail.com', 'a123', 'muarenhat.vn'),
(5, 'b123', 'aaa123@gmail.com', 'abc', 'google.com.vn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `websites_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
