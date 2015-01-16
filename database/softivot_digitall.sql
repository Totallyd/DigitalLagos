-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2015 at 03:43 PM
-- Server version: 5.5.40-36.1
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `softivot_digitall`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rolls`
--

CREATE TABLE IF NOT EXISTS `rolls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `rolls`
--

INSERT INTO `rolls` (`id`, `title`) VALUES
(1, 'Master Admin Permission'),
(2, 'Manage Featured Listing'),
(3, 'Manage Listing'),
(4, '  Manage Payment'),
(5, 'Contact Permission'),
(6, 'CMS Permission'),
(7, 'Blog Permission'),
(8, 'Manage Banner');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE IF NOT EXISTS `token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id`, `email`, `token`, `created_at`) VALUES
(27, 'gr8.abbasi@gmail.com', '10d4286b33325e13ecb9f0732640ff560a7ac0aa', '2014-08-31 00:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('Admin','Member','SubAdmin') COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `activation_code` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `activated` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=47 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `type`, `status`, `remember_token`, `activation_code`, `activated`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$a/dF1CAXXlsk4EBv31gBQupFKP8NsCUbtVYYOA5/X2vvaUS3skLqG', 'gr8.abbasi@gmail.com', 'Admin', 0, '1baeyoRzB7mztvYsyZhVCwh3v9OqBjC5CCa23FG6GufbwfoMqB9oKDX18AQB', '0', 0, '2014-06-06 17:37:00', '2015-01-11 23:22:23'),
(38, '', '$2y$10$KPHjmSi7LfT6SP6OZIu6puG30eBegtVDq8vSOIw8yfx40OEoRMgBW', 'user@ma.com', 'Member', 0, '', 'v17nHlJsG7GzWBud3M2JlkzvLjnKhLs6RIm37C2TgXUhE655ZuGHRczpCeym', 0, '2014-08-29 16:27:12', '2014-08-29 16:27:12'),
(45, 'tatevik', '$2y$10$0FJRkgyqHYXetVDhBIh1Tuv/8lmtctaScCQLnsE4ytjlehEvYl55O', 'tatstep7@gmail.com', 'SubAdmin', 0, '', '', 1, '2015-01-09 21:22:27', '2015-01-10 13:29:23'),
(44, '', '$2y$10$E1mmqXaEXSunuA/uBWj6meXRNuAfmJ0hXz5uDJa4d4nhuuxrMQzne', 'dziner.sanjay@gmail.com', 'Member', 0, 'cvXVKTjIu1NlIVuBMk95f4fEWqdod3PNwr1x2kcO0Ww6jO76EBlGl1ABhPSs', 'fKcBGEyzt8J1aCAepQaG2UW7p8xqwqgY5sFtXVBvPcugj0LfUIWr9f42NW2l', 1, '2014-10-27 05:42:49', '2014-11-10 18:22:52'),
(43, '', '$2y$10$lsqexhXOpN1YLdxGMRp9xOdKfLNdSxGlUcYxciWcYXSOc5ht/1wPK', 'nadervip@gmail.com', 'Member', 0, '', 'zVw5J3BVdseaPmZ7yTBHvzTN3Sv8jq2RTQ8IYtwFBQY8pnwpSeHSkRfVzxo8', 1, '2014-10-26 15:23:59', '2014-10-26 15:24:16'),
(42, 'godwin', '$2y$10$At0sz5b0FDNRkKjadLIHRORGuW7MmNXnf.TLYzn2ilT6faRgaVwGS', 'godwin@test.com', 'SubAdmin', 0, '', '', 1, '2014-10-25 18:40:20', '2014-10-25 18:40:20'),
(41, 'test', '$2y$10$gqZ.XcrhrQxxIqNmKKokROl3TVckd9rG.1evMmAALfvHeLPr8bVkO', 'test@test.com', 'SubAdmin', 0, '', '', 1, '2014-10-20 04:58:57', '2014-10-21 09:58:28'),
(40, 'abbasi', '$2y$10$IiR8W3M74TprDwOkQZhyQ.60fQqxTQpzHDcDz9R7MNJTc9HJM3hxK', 'abbasi@gmail.com', 'SubAdmin', 0, '7PZc0VShHkDm1Y9eMpcC8AtaX5oYgKDAKb0bjaiiiua45vhXCpMeJEUE3Uf0', '', 1, '2014-10-20 04:55:01', '2014-10-20 06:58:50'),
(31, '', '$2y$10$1GfwaZG9eVihQSKRTRfznOl4Ri17DCcS1DwRvWeNeE8Ta5n3SqsMC', 'kashif_abbasi007@yahoo.com', 'Member', 0, 'XJU6TUYBT8jIs5qI9kooJc56oCcAaFQkxIQKl93eftQ6jJGBnGqh3PRuYLfr', '7mPqh9bKL32LujfwHtWKE5w46lubOTuzuzsLr67XjK1VhoUyk3c55iRDKTW7', 1, '2014-08-19 10:00:13', '2014-11-26 18:51:16'),
(39, '', '$2y$10$DFw8iU83.GPRD2Myzxxr9uqw1.z1HZBXJ30wlqxKxNRYE344A7r0S', 'testingdashbd@gmail.com', 'Member', 0, '', 'n5VEqDCS60hbMZ2LBVW16zfAFzf4c5DoetKBE4Gn5jucOrOOuhKcmyaHBBke', 1, '2014-08-30 07:59:46', '2014-08-30 08:00:07'),
(46, '', '$2y$10$9O4pFq0Bde0De.dPBYMSduA1watStj6YUtwEcCSsz/Y4QcZZuTqAy', 'gayanhewa@gmail.com', 'Member', 0, '', 'STpGK7puAM9Var50uabqXzdEW4vyMx9xR7AC8VNcZTTqXL04rgQ3IojVlUyw', 1, '2015-01-15 13:15:00', '2015-01-15 13:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `job_title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `first_name`, `last_name`, `role`, `job_title`, `mobile`, `phone`, `address`, `city`, `state`, `created_at`, `updated_at`) VALUES
(2, 31, 'Kashif E', 'Abbasi E', '9', 'Job title E', '3333333334', '2222222224', 'E-10-15, Arena Green, Bukit Jalil E', 'Kuala Lumpur E', 'WP-KL E', '2014-08-19 10:00:13', '2014-08-30 06:18:13'),
(10, 39, 'Test', 'Now', '19', 'Guitar Master', '0001', '0002', '002', 'here', 'here', '2014-08-30 07:59:46', '2014-08-30 07:59:46'),
(9, 38, 'test', 'test', '19', 'qa', '0000', '0001', 'no street', 'a lovely one', 'nicest', '2014-08-29 16:27:12', '2014-08-29 16:27:12'),
(11, 40, 'Kashif', 'Abbasi', '10', NULL, '333333333', '3213213123', 'Kuala Lumpur', 'Kuala Lumpur E', 'WP-KL E', '2014-10-20 04:55:01', '2014-10-20 04:55:01'),
(12, 41, 'Test', 'testing', '10', NULL, '333333333', '222222222', '22761 Hamburg, Germany', 'Kuala Lumpur E', 'WP-KL E', '2014-10-20 04:58:57', '2014-10-20 04:58:57'),
(13, 42, 'Godwin', '', '10', NULL, '', '', 'E-10-15, Arena Green, Bukit Jalil E', 'Kuala Lumpur E', 'WP-KL E', '2014-10-25 18:40:20', '2014-10-25 18:40:20'),
(14, 43, 'Nader', 'Doe', '12', 'dev', '', '', '', '', '', '2014-10-26 15:23:59', '2014-10-26 15:23:59'),
(15, 44, 'Sanjay', 'Shrestha', '11', 'Sr. Front-end Developer', '+9779849645811', '', 'Teku', 'Kathmandu', 'Bagmati', '2014-10-27 05:42:49', '2014-10-27 05:42:49'),
(16, 45, 'tatevik', 'Stepa', '10', NULL, '', '', 'Vorishkova 3', 'Kuala Lumpur E', 'WP-KL E', '2015-01-09 21:22:27', '2015-01-09 21:22:27'),
(17, 46, 'Gayan', 'Hewa', '4', '', '+6592484823', '+6592484823', '597 1H, Muttetuwagoda Road', 'Thalangama North', 'Thalangama', '2015-01-15 13:15:00', '2015-01-15 13:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`role_id`,`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_id`, `user_id`) VALUES
(1, 1, 40),
(14, 1, 41),
(15, 3, 41),
(16, 5, 41),
(17, 6, 41),
(18, 3, 42),
(19, 1, 45),
(20, 2, 45),
(21, 3, 45),
(22, 4, 45),
(23, 5, 45),
(24, 6, 45),
(25, 7, 45),
(26, 8, 45);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
