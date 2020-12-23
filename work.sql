-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 07:59 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work`
--

-- --------------------------------------------------------

--
-- Table structure for table `emps`
--

CREATE TABLE `emps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emps`
--

INSERT INTO `emps` (`id`, `emp_name`, `emp_email`, `emp_password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Mahtab Sifat', 'sifat@gmail.com', '$2y$10$lQSaGX7a.QTsocb2lj807uOHBcbFP7zyI1Ai04BDnfRkkoJts1cuu', NULL, '2020-09-30 01:08:01', '2020-11-21 22:32:24'),
(3, 'Nabila Nishu', 'nishu@gmail.com', '$2y$10$lQSaGX7a.QTsocb2lj807uOHBcbFP7zyI1Ai04BDnfRkkoJts1cuu', NULL, '2020-09-30 02:31:59', '2020-11-21 22:32:24'),
(5, 'err', 'wer2df2@dfs.com', '$2y$10$lQSaGX7a.QTsocb2lj807uOHBcbFP7zyI1Ai04BDnfRkkoJts1cuu', NULL, '2020-10-01 03:54:17', '2020-11-21 22:32:24'),
(6, 'Mahbub', 'mah@gmail.com', '$2y$10$lQSaGX7a.QTsocb2lj807uOHBcbFP7zyI1Ai04BDnfRkkoJts1cuu', NULL, '2020-10-01 04:14:54', '2020-11-21 22:32:24'),
(7, 'Abul Kauser Samer', 'abul@gmail.com', '$2y$10$CH86dYsKuyx9cbtEb4z.m.z0Rnd69h.YZ4tHFzOf3co0YCV0TQjgm', NULL, '2020-10-04 01:53:38', '2020-11-27 12:48:00'),
(11, 'Zafin Rahman', 'zafin@gmail.com', '$2y$10$lQSaGX7a.QTsocb2lj807uOHBcbFP7zyI1Ai04BDnfRkkoJts1cuu', NULL, '2020-10-06 03:31:54', '2020-11-21 22:32:24'),
(12, 'Riya', 'tajinaktarria@gmail.com', '$2y$10$lQSaGX7a.QTsocb2lj807uOHBcbFP7zyI1Ai04BDnfRkkoJts1cuu', NULL, '2020-11-20 07:15:14', '2020-11-21 22:32:24'),
(13, 'Samer Kauser', 's@gmail.com', '$2y$10$lQSaGX7a.QTsocb2lj807uOHBcbFP7zyI1Ai04BDnfRkkoJts1cuu', NULL, '2020-11-20 07:29:17', '2020-11-21 22:32:24'),
(14, 'X', 'faroham943@natxt.com', '$2y$10$lQSaGX7a.QTsocb2lj807uOHBcbFP7zyI1Ai04BDnfRkkoJts1cuu', NULL, '2020-11-20 07:36:18', '2020-11-21 22:32:24'),
(15, 'Wahab Riaz', 'riaz@gmail.com', '$2y$10$9ZaAoQZ1hPXA2xIjwCd.K.d/H5p9fe4W5iyT8FSO2ibew9pLf0GeK', NULL, '2020-12-23 12:21:30', '2020-12-23 12:23:12');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2020_09_28_095938_create_projects_table', 1),
(9, '2020_09_29_055445_create_emps_table', 1),
(10, '2020_09_29_104952_create_works_table', 1);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `esti_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_code`, `desc`, `start_date`, `esti_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'Work management report', '101', 'It should be an user friendly software', '2020-10-04', '2020-10-01', '2020-10-07', '2020-09-30 01:06:21', '2020-10-04 05:32:00'),
(2, 'Daily Follow-up', '102', 'Daily clients list check', '2020-07-14', '2020-09-27', '2020-10-04', '2020-09-30 01:08:58', '2020-10-05 03:42:07'),
(3, 'Software tools testing', '104', 'test and visit a custom software', '2020-10-20', '2020-10-24', '2020-10-24', '2020-09-30 02:31:24', '2020-10-05 03:43:59'),
(4, 'Ecommerce website', '107', 'an ecommerce website', '2020-10-01', '2020-11-20', '2020-10-09', '2020-10-01 04:12:36', '2020-10-08 03:34:08'),
(5, 'ght', '123', 'rthtyjt', '2020-06-24', '2121-11-24', NULL, '2020-10-01 04:31:56', '2020-11-18 01:32:02'),
(6, 'Tours and Travels', 'pr0001', 'Tours and travels software', '2020-10-04', '2020-10-10', NULL, '2020-10-04 03:26:27', '2020-10-04 03:26:27'),
(12, 'Digital Marketing', 'pr-2', 'Market strategies', '2020-10-04', '2020-10-16', NULL, '2020-10-04 03:48:34', '2020-10-04 03:48:34'),
(13, 'Product Photography', 'PR000012', 'professional product photography', '2020-10-04', '2020-10-20', NULL, '2020-10-04 04:31:16', '2020-10-04 04:31:16'),
(14, 'New travel software', 'PR00013', 'tour and travel software', '2020-10-05', '2020-10-10', NULL, '2020-10-05 03:41:13', '2020-10-05 03:41:13'),
(15, 'printing and packaging', 'PR00014', 'printing solution', '2020-10-08', '2020-10-10', NULL, '2020-10-08 03:28:59', '2020-11-21 23:15:33');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'ad@gmail.com', NULL, '$2y$10$PKk4O2qwI7v4mPrjYTOv8.JbzgMrElBMIKAUb4Zlr1JAqnDX2I5X.', NULL, '2020-09-30 01:05:42', '2020-11-17 03:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `work_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ustart_date` date DEFAULT NULL,
  `uend_date` date DEFAULT NULL,
  `work_hour` double(8,2) DEFAULT NULL,
  `ex_min` double(8,2) DEFAULT NULL,
  `total_time` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `user_id`, `work_title`, `work_desc`, `ustart_date`, `uend_date`, `work_hour`, `ex_min`, `total_time`, `project_id`, `created_at`, `updated_at`) VALUES
(5, 2, 'My followup and visit', 'followup the clients and visit clients', '2020-09-27', '2020-09-29', 5.00, 0.00, '', 2, '2020-10-01 00:04:51', '2020-10-01 00:04:51'),
(6, 3, 'A work update software', 'software development', '2020-10-04', '2020-10-07', 3.00, 50.00, '03 hours 50 minutes', 1, '2020-10-01 00:06:34', '2020-11-21 22:40:33'),
(7, 5, 'sdfdsfds', 'sdfdsf', '2020-10-02', '2020-10-02', 500.00, 0.00, '', 1, '2020-10-01 03:54:49', '2020-10-01 03:55:06'),
(8, 6, 'product add', 'daily product add and update details', '2020-10-01', '2020-10-17', 7.00, 0.00, '', 4, '2020-10-01 04:16:26', '2020-10-01 04:16:26'),
(9, 7, 'Software development', 'check,test software', '2020-10-21', '2020-10-24', 10.00, 25.00, '10 hours 25 minutes', 3, '2020-10-04 01:54:58', '2020-11-21 22:22:09'),
(10, 11, 'tour software', 'develop tour soft', '2020-10-06', '2020-10-09', 0.00, 0.00, '0', 6, '2020-10-06 03:33:11', '2020-10-06 03:33:11'),
(11, 7, 'photography', 'food and electronics items photography', '2020-10-06', '2020-10-07', 9.00, 10.00, '09 hours 10 minutes', 13, '2020-10-06 03:52:18', '2020-10-11 05:41:45'),
(12, 7, 'SEO', 'digital market strategies', '2020-10-06', '2020-10-08', 5.00, 58.00, '05 hours 58 minutes', 12, '2020-10-06 03:55:55', '2020-10-11 05:42:19'),
(13, 7, 'print', 'let\'s print', '2020-10-08', NULL, NULL, NULL, '00 hours 00 minutes', 15, '2020-11-21 22:25:15', '2020-11-21 22:25:31'),
(14, 3, 'market analysis', 'market analysis and result', '2020-11-28', '2020-12-28', NULL, NULL, '05 hours 45 minutes', 12, '2020-11-27 12:49:30', '2020-11-27 12:49:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emps`
--
ALTER TABLE `emps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emps_emp_email_unique` (`emp_email`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `works_user_id_foreign` (`user_id`),
  ADD KEY `works_project_id_foreign` (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emps`
--
ALTER TABLE `emps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `works_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `works_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `emps` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
