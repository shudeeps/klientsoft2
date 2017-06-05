-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2017 at 10:43 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sudip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `email`, `full_name`, `created_at`, `updated_at`) VALUES
(1, 'ashudeeps', '$2y$10$qdowE1W2gDnyk8wnkoIsoeuT31hHhmHxt5leVPPNKcjzDv7jb.4ja', 'shudeep86@gmail.com', 'sudip shrestha', '2017-05-30 07:10:37', '2017-05-30 07:10:37');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(10) unsigned NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `org_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `full_name`, `org_name`, `email`, `address`, `phone_no`, `created_at`, `updated_at`) VALUES
(1, 'Sudip Shrestha', 'klientsoft', 'shudeep86@gmail.com', 'Shankhamul', '9849666628', '2017-05-30 21:06:55', '2017-05-30 21:27:17'),
(2, 'Sundar Shrestha', 'glactiic office', 'sundarstha11@gmail.com', 'lamjung', '9841727277', '2017-05-30 21:18:49', '2017-06-02 02:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(10) unsigned NOT NULL,
  `client_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `client_id`, `data`, `role`, `created_at`, `updated_at`) VALUES
(1, '1', 'fdsaf', '1', '2017-05-31 04:56:15', '2017-05-31 04:56:15'),
(2, '1', 'xbsfd', '1', '2017-05-31 05:03:53', '2017-05-31 05:03:53'),
(3, '1', 'zvzsdggggggggggggggd', '1', '2017-05-31 05:18:07', '2017-05-31 05:18:07'),
(5, '2', 'adgdsg', '1', '2017-05-31 05:21:13', '2017-05-31 05:21:13'),
(6, '1', 'sdfds', '1', '2017-05-31 05:28:18', '2017-05-31 05:28:18'),
(7, '1', 'asdsad        afafq', '1', '2017-05-31 05:28:26', '2017-05-31 05:28:26'),
(8, '1', 'he became good', '1', '2017-05-31 05:28:36', '2017-05-31 05:28:36'),
(9, '2', 'dealed 2000', '1', '2017-05-31 05:28:53', '2017-05-31 05:28:53'),
(10, '1', 'svdg', '1', '2017-05-31 05:42:14', '2017-05-31 05:42:14'),
(11, '1', 'hfug', '0', '2017-05-31 05:54:10', '2017-05-31 05:54:10'),
(12, '1', 'niwe', '0', '2017-05-31 05:54:18', '2017-05-31 05:54:18'),
(13, '1', 'gefurewguew mbcabsndcbabn bcmnan snm', '0', '2017-05-31 05:55:42', '2017-05-31 05:55:42'),
(14, '1', '1.jhdf\r\n2.knja', '0', '2017-05-31 07:52:00', '2017-05-31 07:52:00'),
(15, '2', 'sdfsd', '1', '2017-05-31 09:11:07', '2017-05-31 09:11:07'),
(16, '2', 'admin sundar', '1', '2017-05-31 09:11:15', '2017-05-31 09:11:15'),
(17, '1', 'admin sudip', '1', '2017-05-31 09:11:27', '2017-05-31 09:11:27'),
(18, '1', 'user sudip', '0', '2017-05-31 09:12:01', '2017-05-31 09:12:01'),
(19, '2', 'user sundar', '0', '2017-05-31 09:12:13', '2017-05-31 09:12:13'),
(20, '1', 'test admin sudips', '1', '2017-06-01 08:10:58', '2017-06-01 08:10:58'),
(21, '1', 'test user shudeep', '0', '2017-06-01 08:11:40', '2017-06-01 08:11:40'),
(22, '1', 'testfomr admin', '1', '2017-06-02 02:55:15', '2017-06-02 02:55:15'),
(23, '2', 'admin test sundar a\r\nshudeeps', '1', '2017-06-02 02:55:48', '2017-06-02 02:55:48'),
(24, '2', 'usr sundar from sudip', '0', '2017-06-02 02:56:30', '2017-06-02 02:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_05_30_115834_create_admin_table', 1),
(2, '2017_05_31_032912_create_logs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email`, `full_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shudeeps', '$2y$10$O2RExiN4w6wy5Xq.9rY.HeHajL/p6/VYQzR0Lu1599Fkjlu.OfUoC', 'shudeep86@gmail.com', 'Sudip Shrestha', 'jhRdPEPLOyt9q16V1QjdiQsImJb3S9o6FjqDrgNGcHSq4dzkEOsES7EaWQ2Q', '2017-05-30 08:25:39', '2017-06-01 00:59:05'),
(2, 'mallarb', '$2y$10$UnsWH2Pgkd4UxrOlf0jHluMXhVdoO.FP1DBSV8pV7R8rJRj7xYw3i', 'mallarb369@gmail.com', 'Rohit malla', 'wBnuq4v1wjIGHyVQRxFoIx7frEaeB26hx7CuBOe1t9x6bDIMARdjuA9eq7Zd', '2017-05-31 05:47:07', '2017-05-31 21:23:10'),
(3, 'haribhadu', '$2y$10$32YlZoMDMVlmDUBbrvMvD.VRXPEIfPcwG9KcgvUKG/C2A.5scG/ae', 'hari@gmail.com', 'hari', 'dg1lqMgmZCPyoVXs80rPQ5QKnCA8xSWxCwHkBPwm8NU2kgFCxtQdXHkXc7kp', '2017-05-31 21:48:44', '2017-06-01 00:55:10'),
(4, 'sajozzz', '$2y$10$LBx.dVUBg6ALUqdUxhnvROQIt61s4HavY9JJ5JlF8A7llpyod0o3e', 'saroj@yahoo.com', 'saroj', 'o2qfLozhRrmsLkQwDMyqgKeUhTwEO7FMNq9s2fAKHkK8Haiv0FF9dtDftoYF', '2017-06-01 03:44:23', '2017-06-01 03:44:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
