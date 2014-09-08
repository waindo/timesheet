-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2014 at 08:05 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `time_sheet`
--

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
('2014_04_25_183527_create_t_Codes', 1),
('2014_04_25_184226_create_t_Krywn', 1),
('2014_04_25_184433_create_t_SHETD', 1),
('2014_04_30_045330_t_PRJCT', 1),
('2014_04_30_073844_t_SHEET', 1),
('2014_04_30_075629_t_USERS', 1),
('2014_05_02_024928_t_codes_loggs', 1),
('2014_05_07_074705_create_t_SHETD', 2),
('2014_05_08_070314_create_t_shetd', 3),
('2014_05_08_081747_create_shets', 4),
('2014_05_08_093937_create_t_shetd', 5),
('2014_05_08_094804_create_t_shetd', 6),
('2014_05_11_165621_craete_t_shetds', 7),
('2014_05_12_033334_create_t_sheds', 8),
('2014_05_12_062531_create_t_users', 9),
('2014_05_12_070331_create_t_prjcs', 10),
('2014_05_12_071155_create_t_prjcs_loggs', 11),
('2014_05_15_063248_create_t_book', 12),
('2014_06_10_085915_create_t_sheds', 13),
('2014_05_31_103239_create_t_kryws', 14),
('2014_06_11_044751_create_t_prjcs', 15),
('2014_06_11_044955_create_t_prjcs', 16),
('2014_06_11_071912_create_t_users', 17),
('2014_06_11_090850_create_user_table', 18),
('2014_06_12_073948_create_t_kryws', 19),
('2014_06_12_075543_create_t_kryws', 20),
('2014_06_16_052220_create_user_table', 21),
('2014_06_16_130805_create_user_table', 22),
('2014_06_26_191735_create_users_grups', 23),
('2014_06_27_040314_create_t_codes', 23),
('2013_07_14_002026_create_session_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `payload`, `last_activity`) VALUES
('68d953a5de7c1c8e8c89a88e65bdf07b78b30079', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNzFtcDNwUFR2TUlWSU9kN09rRlhJd2VxTXcwWUw5azJzWnNxcklhTyI7czo1OiJmbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM4OiJsb2dpbl84MmU1ZDJjNTZiZGQwODExMzE4ZjBjZjA3OGI3OGJmYyI7aToxNjtzOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTQwNjAwNjMzNTtzOjE6ImMiO2k6MTQwNjAwNjAyMjtzOjE6ImwiO3M6MToiMCI7fX0=', 1406006335);

-- --------------------------------------------------------

--
-- Table structure for table `t_codes`
--

CREATE TABLE IF NOT EXISTS `t_codes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codesHeads` tinyint(4) NOT NULL,
  `codesCodes` tinyint(4) NOT NULL,
  `codesDesc1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codesDesc2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codesStats` blob NOT NULL,
  `codesUsrid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `t_codes`
--

INSERT INTO `t_codes` (`id`, `codesHeads`, `codesCodes`, `codesDesc1`, `codesDesc2`, `codesStats`, `codesUsrid`, `created_at`, `updated_at`) VALUES
(3, 0, 2, 'Staff', 'stf', 0x31, '', '2014-06-30 09:34:34', '2014-06-30 09:34:34'),
(4, 0, 3, 'Koordinator', 'koordinator', 0x31, '', '2014-06-30 09:35:24', '2014-06-30 09:35:24'),
(5, 1, 0, 'Agama', '', 0x30, '', '2014-06-30 09:38:53', '2014-06-30 09:38:53'),
(6, 1, 1, 'Islam', 'islam', 0x31, '', '2014-06-30 09:39:16', '2014-06-30 09:39:16'),
(7, 1, 2, 'Kristen', 'kristen', 0x31, '', '2014-06-30 09:39:38', '2014-06-30 09:39:38'),
(8, 1, 3, 'Hindu', 'hindu', 0x31, '', '2014-06-30 09:40:14', '2014-06-30 09:40:14');

-- --------------------------------------------------------

--
-- Table structure for table `t_codes_loggs`
--

CREATE TABLE IF NOT EXISTS `t_codes_loggs` (
  `codesParam` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `codesHeads` tinyint(4) NOT NULL,
  `codesCodes` tinyint(4) NOT NULL,
  `codesDesc1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `codesDesc2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `codesStats` blob NOT NULL,
  `codesUsrid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_kryws`
--

CREATE TABLE IF NOT EXISTS `t_kryws` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `krywsNkywn` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `krywsNames` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `krywsTmlhr` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `krywsTglhr` date NOT NULL,
  `krywsJnskl` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `krywsAgama` tinyint(4) NOT NULL,
  `krywsAlmat` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `krywsNomhp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `krywsThnms` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `krywsDvisi` tinyint(4) NOT NULL,
  `krywsJabat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `krywsUsrid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `t_kryws_krywsnkywn_unique` (`krywsNkywn`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `t_kryws`
--

INSERT INTO `t_kryws` (`id`, `krywsNkywn`, `krywsNames`, `krywsTmlhr`, `krywsTglhr`, `krywsJnskl`, `krywsAgama`, `krywsAlmat`, `krywsNomhp`, `krywsThnms`, `krywsDvisi`, `krywsJabat`, `krywsUsrid`, `created_at`, `updated_at`) VALUES
(2, '112233', 'Hafidz', 'Banda Aceh', '1993-06-20', 'P', 0, 'Jl. Indrapuri. Aceh Besar', '085211177878', '2014', 0, 'kryw', '', '2014-06-29 20:06:49', '2014-07-13 08:26:30'),
(3, '44444', 'Rizky', 'Banda Aceh', '1994-06-06', 'P', 0, 'Banda Aceh', '085266666', '2014', 0, 'kryw', '', '2014-06-29 21:17:02', '2014-06-29 21:17:02'),
(4, '123456', 'mirza', 'Banda Aceh', '2014-07-11', '', 0, 'Karabg pola', '085211177878', '2014', 0, 'kryw', '', '2014-07-02 18:14:56', '2014-07-02 18:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `t_prjcs`
--

CREATE TABLE IF NOT EXISTS `t_prjcs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prjcsNames` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prjcsInsta` tinyint(4) NOT NULL,
  `prjcsYears` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `prjcsUsrid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `t_prjcs`
--

INSERT INTO `t_prjcs` (`id`, `prjcsNames`, `prjcsInsta`, `prjcsYears`, `prjcsUsrid`, `created_at`, `updated_at`) VALUES
(2, 'Aplikasi', 0, '2014', '', '2014-06-29 21:17:36', '2014-06-29 21:17:36'),
(3, 'Aplikasi PGN', 0, '2012', '', '2014-07-01 00:27:25', '2014-07-01 00:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `t_prjcs_loggs`
--

CREATE TABLE IF NOT EXISTS `t_prjcs_loggs` (
  `prjcsParam` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `prjcsIdent` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prjcsNames` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prjcsInsta` tinyint(4) NOT NULL,
  `prjcsYears` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `prjcsUsrid` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`prjcsUsrid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_sheds`
--

CREATE TABLE IF NOT EXISTS `t_sheds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shedsSquan` int(11) NOT NULL,
  `shedsKgtan` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `shedsStats` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `shedsTnggl` date NOT NULL,
  `shedsUsrid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `t_sheds`
--

INSERT INTO `t_sheds` (`id`, `shedsSquan`, `shedsKgtan`, `shedsStats`, `shedsTnggl`, `shedsUsrid`, `created_at`, `updated_at`) VALUES
(2, 0, 'kikikikikikikiki', '', '2014-06-12', '', '2014-06-24 03:49:23', '2014-06-24 03:49:23'),
(3, 0, 'survey', '', '2014-06-05', '', '2014-06-24 03:53:08', '2014-06-24 03:53:08'),
(4, 0, 'coding web', '', '2014-06-28', '', '2014-06-29 21:14:27', '2014-06-29 21:14:27'),
(5, 0, 'coding web', '', '2014-07-02', '', '2014-07-02 18:28:16', '2014-07-02 18:28:28'),
(6, 0, 'konfirmasi', '', '2014-07-11', '', '2014-07-15 23:42:14', '2014-07-15 23:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `t_sheet`
--

CREATE TABLE IF NOT EXISTS `t_sheet` (
  `sheetIdent` tinyint(4) NOT NULL,
  `sheetPrjct` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sheetKrywn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `codesUsrid` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8_unicode_ci,
  `last_activity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `last_activity`, `created_at`, `updated_at`) VALUES
(5, 'kicky.anfield@gmail.com', '$2y$10$N0eD74L23cJbEGBUj9uKc.rEon7tTK7Z2OIFU0QrIvA1WoVPv5MDG', 'YhRQQgV9BBpWkP5wsr4OarTnRCpfLlZEwfpiWbKbAaiwLSupl6RbgA1Q3p67', 0, '2014-06-30 21:35:29', '2014-07-13 08:43:24'),
(6, 'mirza@gmail.com', '$2y$10$6iY5hn66RHHOPHka.UE6buSjlIlFcBR9sbhYtPpHDYVEJ2pTFT.2.', NULL, 0, '2014-07-02 18:18:10', '2014-07-02 18:18:10'),
(16, 'kiki@gmail.com', '$2y$10$Tnpo.hg42KSsq/JkRwedeO9PAxlsZ/XtY.4xK/7eKLjyG0.3CpIUu', NULL, 0, '2014-07-15 20:40:08', '2014-07-15 20:40:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
