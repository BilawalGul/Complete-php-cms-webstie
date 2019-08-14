-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2019 at 09:10 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itsmain`
--

-- --------------------------------------------------------

--
-- Table structure for table `browser`
--

CREATE TABLE `browser` (
  `id` int(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `browser`
--

INSERT INTO `browser` (`id`, `browser`, `date_time`) VALUES
(28, 'default browser', '2018-08-31 18:08:18'),
(29, 'default browser', '2018-08-31 20:08:02'),
(30, 'default browser', '2018-08-31 20:08:30'),
(31, 'default browser', '2018-08-31 20:08:00'),
(32, 'default browser', '2018-08-31 20:08:11'),
(33, 'default browser', '2018-08-31 20:08:22'),
(34, 'default browser', '2018-08-31 20:08:33'),
(35, 'default browser', '2018-08-31 20:08:50'),
(36, 'default browser', '2018-08-31 20:08:54'),
(37, 'default browser', '2018-08-31 20:08:00'),
(38, 'default browser', '2018-08-31 20:08:48'),
(39, 'default browser', '2018-08-31 20:08:59'),
(40, 'default browser', '2018-08-31 20:08:35'),
(41, 'default browser', '2018-08-31 20:08:40'),
(42, 'default browser', '2018-08-31 20:08:59'),
(43, 'default browser', '2018-08-31 20:08:04'),
(44, 'default browser', '2018-08-31 20:08:24'),
(45, 'default browser', '2018-08-31 20:08:32'),
(46, 'default browser', '2018-08-31 20:08:46'),
(47, 'default browser', '2018-08-31 21:08:21'),
(48, 'default browser', '2018-08-31 21:08:33'),
(49, 'default browser', '2018-08-31 21:08:44'),
(50, 'default browser', '2018-08-31 21:08:25'),
(51, 'default browser', '2018-08-31 21:08:53'),
(52, 'default browser', '2018-08-31 21:08:12'),
(53, 'default browser', '2018-08-31 21:08:20'),
(54, 'default browser', '2018-08-31 21:08:26'),
(55, 'default browser', '2018-08-31 21:08:29'),
(56, 'default browser', '2018-08-31 21:08:33'),
(57, 'default browser', '2018-08-31 21:08:34'),
(58, 'default browser', '2018-08-31 21:08:54'),
(59, 'default browser', '2018-08-31 21:08:56'),
(60, 'default browser', '2018-08-31 21:08:03'),
(61, 'default browser', '2018-08-31 21:08:18'),
(62, 'default browser', '2018-08-31 21:08:23'),
(63, 'default browser', '2018-08-31 23:08:32'),
(64, 'default browser', '2018-08-31 23:08:43'),
(65, 'default browser', '2018-08-31 23:08:55'),
(66, 'default browser', '2018-08-31 23:08:28'),
(67, 'default browser', '2018-08-31 23:08:40'),
(68, 'default browser', '2018-08-31 23:08:56'),
(69, 'default browser', '2018-08-31 23:08:28'),
(70, 'default browser', '2018-09-01 00:09:09'),
(71, 'default browser', '2018-09-01 00:09:59'),
(72, 'default browser', '2018-09-01 01:09:14'),
(73, 'default browser', '2018-09-01 01:09:51'),
(74, 'default browser', '2018-09-01 01:09:51'),
(75, 'default browser', '2018-09-01 01:09:26'),
(76, 'default browser', '2018-09-01 01:09:45'),
(77, 'default browser', '2018-09-01 01:09:49'),
(78, 'default browser', '2018-09-01 01:09:08'),
(79, 'default browser', '2018-09-01 01:09:30'),
(80, 'default browser', '2018-09-01 01:09:16'),
(81, 'default browser', '2018-09-01 10:09:58'),
(82, 'default browser', '2018-09-01 15:09:50'),
(83, 'default browser', '2018-09-01 15:09:18'),
(84, 'default browser', '2018-09-01 15:09:26'),
(85, 'default browser', '2018-09-01 15:09:01'),
(86, 'default browser', '2018-09-01 15:09:54'),
(87, 'default browser', '2018-09-01 15:09:26'),
(88, 'default browser', '2018-09-01 16:09:44'),
(89, 'default browser', '2018-09-01 16:09:45'),
(90, 'default browser', '2018-09-01 16:09:57'),
(91, 'default browser', '2018-09-01 19:09:46'),
(92, 'default browser', '2018-09-01 19:09:10'),
(93, 'default browser', '2018-09-01 19:09:16'),
(94, 'default browser', '2018-09-01 19:09:20'),
(95, 'default browser', '2018-09-01 19:09:56'),
(96, 'default browser', '2018-09-02 00:09:24'),
(97, 'default browser', '2018-09-02 02:09:30'),
(98, 'default browser', '2018-09-02 03:09:14'),
(99, 'default browser', '2018-09-02 03:09:28'),
(100, 'default browser', '2018-09-02 20:09:18'),
(101, 'default browser', '2018-09-03 11:09:18'),
(102, 'default browser', '2018-09-03 11:09:58'),
(103, 'default browser', '2018-09-03 12:09:24'),
(104, 'default browser', '2018-09-03 12:09:41'),
(105, 'default browser', '2018-09-03 12:09:38'),
(106, 'default browser', '2018-09-03 12:09:44'),
(107, 'default browser', '2018-09-03 12:09:34'),
(108, 'default browser', '2018-09-03 12:09:55'),
(109, 'default browser', '2018-09-03 12:09:01'),
(110, 'default browser', '2018-09-03 12:09:21'),
(111, 'default browser', '2018-09-03 12:09:24'),
(112, 'default browser', '2018-09-03 12:09:48'),
(113, 'default browser', '2018-09-03 12:09:30'),
(114, 'default browser', '2018-09-03 12:09:39'),
(115, 'default browser', '2018-09-03 12:09:58'),
(116, 'default browser', '2018-09-03 12:09:37'),
(117, 'default browser', '2018-09-03 12:09:45'),
(118, 'default browser', '2018-09-03 12:09:15'),
(119, 'default browser', '2018-09-03 12:09:26'),
(120, 'default browser', '2018-09-03 12:09:36'),
(121, 'default browser', '2018-09-03 12:09:43'),
(122, 'default browser', '2018-09-03 12:09:48'),
(123, 'default browser', '2018-09-03 12:09:49'),
(124, 'default browser', '2018-09-03 12:09:31'),
(125, 'default browser', '2018-09-03 12:09:41'),
(126, 'default browser', '2018-09-03 12:09:53'),
(127, 'default browser', '2018-09-03 12:09:10'),
(128, 'default browser', '2018-09-03 12:09:45'),
(129, 'default browser', '2018-09-03 12:09:59'),
(130, 'default browser', '2018-09-03 12:09:36'),
(131, 'default browser', '2018-09-03 12:09:58'),
(132, 'default browser', '2018-09-03 12:09:48'),
(133, 'default browser', '2018-09-03 12:09:11'),
(134, 'default browser', '2018-09-03 12:09:14'),
(135, 'default browser', '2018-09-03 12:09:32'),
(136, 'default browser', '2018-09-03 12:09:41'),
(137, 'default browser', '2018-09-03 12:09:52'),
(138, 'default browser', '2018-09-03 12:09:11'),
(139, 'default browser', '2018-09-03 12:09:27'),
(140, 'default browser', '2018-09-03 16:09:04'),
(141, 'default browser', '2018-09-03 16:09:42'),
(142, 'default browser', '2018-09-03 16:09:02'),
(143, 'default browser', '2018-09-03 16:09:11'),
(144, 'default browser', '2018-09-03 16:09:20'),
(145, 'default browser', '2018-09-03 16:09:26'),
(146, 'default browser', '2018-09-03 16:09:53'),
(147, 'default browser', '2018-09-03 16:09:56'),
(148, 'default browser', '2018-09-03 16:09:07'),
(149, 'default browser', '2018-09-03 16:09:56'),
(150, 'default browser', '2018-09-03 16:09:39'),
(151, 'default browser', '2018-09-03 16:09:59'),
(152, 'default browser', '2018-09-03 16:09:26'),
(153, 'default browser', '2018-09-03 16:09:01'),
(154, 'default browser', '2018-09-03 16:09:07'),
(155, 'default browser', '2018-09-03 16:09:17'),
(156, 'default browser', '2018-09-03 16:09:53'),
(157, 'default browser', '2018-09-03 16:09:59'),
(158, 'default browser', '2018-09-03 16:09:16'),
(159, 'default browser', '2018-09-03 16:09:40'),
(160, 'default browser', '2018-09-03 16:09:05'),
(161, 'default browser', '2018-09-03 16:09:58'),
(162, 'default browser', '2018-09-03 16:09:14'),
(163, 'default browser', '2018-09-03 16:09:34'),
(164, 'default browser', '2018-09-03 16:09:05'),
(165, 'default browser', '2018-09-03 16:09:33'),
(166, 'default browser', '2018-09-03 16:09:59'),
(167, 'default browser', '2018-09-03 16:09:39'),
(168, 'default browser', '2018-09-03 16:09:47'),
(169, 'default browser', '2018-09-03 16:09:21'),
(170, 'default browser', '2018-09-03 16:09:12'),
(171, 'default browser', '2018-09-03 16:09:19'),
(172, 'default browser', '2018-09-03 16:09:39'),
(173, 'default browser', '2018-09-03 16:09:58'),
(174, 'default browser', '2018-09-03 16:09:28'),
(175, 'default browser', '2018-09-03 16:09:19'),
(176, 'default browser', '2018-09-03 17:09:08'),
(177, 'default browser', '2018-09-03 17:09:26'),
(178, 'default browser', '2018-09-03 17:09:30'),
(179, 'default browser', '2018-09-03 17:09:47'),
(180, 'default browser', '2018-09-03 17:09:26'),
(181, 'default browser', '2018-09-03 17:09:50'),
(182, 'default browser', '2018-09-03 17:09:54'),
(183, 'default browser', '2018-09-03 17:09:04'),
(184, 'default browser', '2018-09-03 17:09:10'),
(185, 'default browser', '2018-09-03 17:09:23'),
(186, 'default browser', '2018-09-03 17:09:37'),
(187, 'default browser', '2018-09-03 17:09:06'),
(188, 'default browser', '2018-09-03 17:09:10'),
(189, 'default browser', '2018-09-03 17:09:45'),
(190, 'default browser', '2018-09-03 17:09:11'),
(191, 'default browser', '2018-09-03 17:09:16'),
(192, 'default browser', '2018-09-03 17:09:22'),
(193, 'default browser', '2018-09-03 17:09:25'),
(194, 'default browser', '2018-09-03 17:09:40'),
(195, 'default browser', '2018-09-03 17:09:26'),
(196, 'default browser', '2018-09-03 17:09:26'),
(197, 'default browser', '2018-09-03 17:09:21'),
(198, 'default browser', '2018-09-03 17:09:18'),
(199, 'default browser', '2018-09-03 17:09:29'),
(200, 'default browser', '2018-09-03 17:09:45'),
(201, 'default browser', '2018-09-03 17:09:20'),
(202, 'default browser', '2018-09-03 17:09:27'),
(203, 'default browser', '2018-09-03 17:09:03'),
(204, 'default browser', '2018-09-03 17:09:12'),
(205, 'default browser', '2018-09-03 17:09:19'),
(206, 'default browser', '2018-09-03 17:09:26'),
(207, 'default browser', '2018-09-03 17:09:30'),
(208, 'default browser', '2018-09-03 17:09:24'),
(209, 'default browser', '2018-09-03 17:09:33'),
(210, 'default browser', '2018-09-03 17:09:08'),
(211, 'default browser', '2018-09-03 17:09:11'),
(212, 'default browser', '2018-09-03 17:09:12'),
(213, 'default browser', '2018-09-03 17:09:19'),
(214, 'default browser', '2018-09-03 17:09:29'),
(215, 'default browser', '2018-09-03 17:09:58'),
(216, 'default browser', '2018-09-03 17:09:19'),
(217, 'default browser', '2018-09-03 17:09:08'),
(218, 'default browser', '2018-09-03 17:09:19'),
(219, 'default browser', '2018-09-03 17:09:04'),
(220, 'default browser', '2018-09-03 17:09:24'),
(221, 'default browser', '2018-09-03 17:09:14'),
(222, 'default browser', '2018-09-03 17:09:25'),
(223, 'default browser', '2018-09-03 17:09:38'),
(224, 'default browser', '2018-09-03 17:09:14'),
(225, 'default browser', '2018-09-03 18:09:38'),
(226, 'default browser', '2018-09-03 18:09:11'),
(227, 'default browser', '2018-09-03 18:09:12'),
(228, 'default browser', '2018-09-03 18:09:19'),
(229, 'default browser', '2018-09-03 18:09:09'),
(230, 'default browser', '2018-09-03 18:09:46'),
(231, 'default browser', '2018-09-03 18:09:51'),
(232, 'default browser', '2018-09-03 18:09:52'),
(233, 'default browser', '2018-09-03 18:09:53'),
(234, 'default browser', '2018-09-03 18:09:54'),
(235, 'default browser', '2018-09-03 18:09:58'),
(236, 'default browser', '2018-09-03 18:09:11'),
(237, 'default browser', '2018-09-03 18:09:12'),
(238, 'default browser', '2018-09-03 18:09:13'),
(239, 'default browser', '2018-09-03 18:09:14'),
(240, 'default browser', '2018-09-03 18:09:21'),
(241, 'default browser', '2018-09-03 18:09:22'),
(242, 'default browser', '2018-09-03 18:09:23'),
(243, 'default browser', '2018-09-03 18:09:24'),
(244, 'default browser', '2018-09-03 18:09:38'),
(245, 'default browser', '2018-09-03 18:09:39'),
(246, 'default browser', '2018-09-03 22:09:14'),
(247, 'default browser', '2018-09-03 22:09:15'),
(248, 'default browser', '2018-09-03 22:09:16'),
(249, 'default browser', '2018-09-03 22:09:18'),
(250, 'default browser', '2018-09-03 22:09:19'),
(251, 'default browser', '2018-09-03 22:09:20'),
(252, 'default browser', '2018-09-03 22:09:14'),
(253, 'default browser', '2018-09-03 22:09:16'),
(254, 'default browser', '2018-09-03 22:09:17'),
(255, 'default browser', '2018-09-03 22:09:39'),
(256, 'default browser', '2018-09-03 22:09:40'),
(257, 'default browser', '2018-09-03 22:09:52'),
(258, 'default browser', '2018-09-03 22:09:53'),
(259, 'default browser', '2018-09-03 22:09:38'),
(260, 'default browser', '2018-09-03 22:09:40'),
(261, 'default browser', '2018-09-03 22:09:41'),
(262, 'default browser', '2018-09-03 22:09:44'),
(263, 'default browser', '2018-09-03 22:09:41'),
(264, 'default browser', '2018-09-03 22:09:42'),
(265, 'default browser', '2018-09-03 22:09:46'),
(266, 'default browser', '2018-09-03 22:09:47'),
(267, 'default browser', '2018-09-03 22:09:54'),
(268, 'default browser', '2018-09-03 22:09:55'),
(269, 'default browser', '2018-09-03 22:09:59'),
(270, 'default browser', '2018-09-03 22:09:00'),
(271, 'default browser', '2018-09-03 22:09:01'),
(272, 'default browser', '2018-09-03 22:09:02'),
(273, 'default browser', '2018-09-03 22:09:06'),
(274, 'default browser', '2018-09-03 22:09:09'),
(275, 'default browser', '2018-09-03 22:09:18'),
(276, 'default browser', '2018-09-03 22:09:19'),
(277, 'default browser', '2018-09-03 22:09:20'),
(278, 'default browser', '2018-09-03 22:09:21'),
(279, 'default browser', '2018-09-03 22:09:23'),
(280, 'default browser', '2018-09-03 22:09:24'),
(281, 'default browser', '2018-09-03 22:09:56'),
(282, 'default browser', '2018-09-03 22:09:57'),
(283, 'default browser', '2018-09-03 22:09:01'),
(284, 'default browser', '2018-09-03 22:09:05'),
(285, 'default browser', '2018-09-03 22:09:06'),
(286, 'default browser', '2018-09-03 22:09:08'),
(287, 'default browser', '2018-09-03 22:09:09'),
(288, 'default browser', '2018-09-03 22:09:10'),
(289, 'default browser', '2018-09-03 22:09:12'),
(290, 'default browser', '2018-09-03 22:09:13'),
(291, 'default browser', '2018-09-03 22:09:21'),
(292, 'default browser', '2018-09-03 22:09:23'),
(293, 'default browser', '2018-09-03 22:09:24'),
(294, 'default browser', '2018-09-03 22:09:25'),
(295, 'default browser', '2018-09-03 22:09:30'),
(296, 'default browser', '2018-09-03 22:09:35'),
(297, 'default browser', '2018-09-03 22:09:36'),
(298, 'default browser', '2018-09-03 22:09:37'),
(299, 'default browser', '2018-09-03 22:09:38'),
(300, 'default browser', '2018-09-03 22:09:39'),
(301, 'default browser', '2018-09-03 22:09:43'),
(302, 'default browser', '2018-09-03 22:09:44'),
(303, 'default browser', '2018-09-03 22:09:07'),
(304, 'default browser', '2018-09-03 22:09:34'),
(305, 'default browser', '2018-09-03 22:09:35'),
(306, 'default browser', '2018-09-03 22:09:42'),
(307, 'default browser', '2018-09-03 22:09:43'),
(308, 'default browser', '2018-09-03 22:09:48'),
(309, 'default browser', '2018-09-03 22:09:52'),
(310, 'default browser', '2018-09-03 22:09:53'),
(311, 'default browser', '2018-09-03 22:09:54'),
(312, 'default browser', '2018-09-03 22:09:56'),
(313, 'default browser', '2018-09-03 22:09:58'),
(314, 'default browser', '2018-09-03 22:09:59'),
(315, 'default browser', '2018-09-03 22:09:59'),
(316, 'default browser', '2018-09-03 22:09:04'),
(317, 'default browser', '2018-09-03 22:09:08'),
(318, 'default browser', '2018-09-03 22:09:20'),
(319, 'default browser', '2018-09-03 22:09:21'),
(320, 'default browser', '2018-09-03 22:09:22'),
(321, 'default browser', '2018-09-03 22:09:23'),
(322, 'default browser', '2018-09-03 22:09:30'),
(323, 'default browser', '2018-09-03 22:09:32'),
(324, 'default browser', '2018-09-03 22:09:33'),
(325, 'default browser', '2018-09-03 22:09:37'),
(326, 'default browser', '2018-09-03 22:09:38'),
(327, 'default browser', '2018-09-03 22:09:39'),
(328, 'default browser', '2018-09-03 22:09:40'),
(329, 'default browser', '2018-09-03 22:09:09'),
(330, 'default browser', '2018-09-03 22:09:11'),
(331, 'default browser', '2018-09-03 22:09:12'),
(332, 'default browser', '2018-09-03 22:09:43'),
(333, 'default browser', '2018-09-03 22:09:47'),
(334, 'default browser', '2018-09-03 22:09:49'),
(335, 'default browser', '2018-09-03 22:09:50'),
(336, 'default browser', '2018-09-03 22:09:03'),
(337, 'default browser', '2018-09-03 22:09:05'),
(338, 'default browser', '2018-09-03 22:09:09'),
(339, 'default browser', '2018-09-03 22:09:10'),
(340, 'default browser', '2018-09-03 22:09:42'),
(341, 'default browser', '2018-09-03 22:09:46'),
(342, 'default browser', '2018-09-03 22:09:49'),
(343, 'default browser', '2018-09-03 22:09:52'),
(344, 'default browser', '2018-09-03 22:09:54'),
(345, 'default browser', '2018-09-03 22:09:13'),
(346, 'default browser', '2018-09-03 22:09:21'),
(347, 'default browser', '2018-09-03 22:09:27'),
(348, 'default browser', '2018-09-03 22:09:42'),
(349, 'default browser', '2018-09-03 22:09:00'),
(350, 'default browser', '2018-09-03 22:09:20'),
(351, 'default browser', '2018-09-03 22:09:29'),
(352, 'default browser', '2018-09-03 22:09:19'),
(353, 'default browser', '2018-09-03 22:09:25'),
(354, 'default browser', '2018-09-03 22:09:26'),
(355, 'default browser', '2018-09-03 22:09:27'),
(356, 'default browser', '2018-09-03 22:09:28'),
(357, 'default browser', '2018-09-03 22:09:31'),
(358, 'default browser', '2018-09-03 22:09:36'),
(359, 'default browser', '2018-09-03 22:09:37'),
(360, 'default browser', '2018-09-03 22:09:38'),
(361, 'default browser', '2018-09-03 22:09:39'),
(362, 'default browser', '2018-09-03 22:09:31'),
(363, 'default browser', '2018-09-03 22:09:32'),
(364, 'default browser', '2018-09-03 22:09:33'),
(365, 'default browser', '2018-09-03 22:09:34'),
(366, 'default browser', '2018-09-03 23:09:34'),
(367, 'default browser', '2018-09-03 23:09:19'),
(368, 'default browser', '2018-09-03 23:09:20'),
(369, 'default browser', '2018-09-03 23:09:21'),
(370, 'default browser', '2018-09-03 23:09:22'),
(371, 'default browser', '2018-09-03 23:09:35'),
(372, 'default browser', '2018-09-03 23:09:39'),
(373, 'default browser', '2018-09-03 23:09:40'),
(374, 'default browser', '2018-09-03 23:09:11'),
(375, 'default browser', '2018-09-03 23:09:15'),
(376, 'default browser', '2018-09-03 23:09:19'),
(377, 'default browser', '2018-09-03 23:09:21'),
(378, 'default browser', '2018-09-03 23:09:22'),
(379, 'default browser', '2018-09-03 23:09:23'),
(380, 'default browser', '2018-09-03 23:09:24'),
(381, 'default browser', '2018-09-03 23:09:59'),
(382, 'default browser', '2018-09-03 23:09:01'),
(383, 'default browser', '2018-09-03 23:09:05'),
(384, 'default browser', '2018-09-03 23:09:09'),
(385, 'default browser', '2018-09-03 23:09:10'),
(386, 'default browser', '2018-09-03 23:09:54'),
(387, 'default browser', '2018-09-03 23:09:00'),
(388, 'default browser', '2018-09-03 23:09:07'),
(389, 'default browser', '2018-09-03 23:09:10'),
(390, 'default browser', '2018-09-03 23:09:11'),
(391, 'default browser', '2018-09-03 23:09:59'),
(392, 'default browser', '2018-09-03 23:09:43'),
(393, 'default browser', '2018-09-03 23:09:23'),
(394, 'default browser', '2018-09-03 23:09:11'),
(395, 'default browser', '2018-09-03 23:09:42'),
(396, 'default browser', '2018-09-03 23:09:43'),
(397, 'default browser', '2018-09-03 23:09:48'),
(398, 'default browser', '2018-09-03 23:09:49'),
(399, 'default browser', '2018-09-03 23:09:50'),
(400, 'default browser', '2018-09-03 23:09:51'),
(401, 'default browser', '2018-09-03 23:09:15'),
(402, 'default browser', '2018-09-03 23:09:16'),
(403, 'default browser', '2018-09-03 23:09:40'),
(404, 'default browser', '2018-09-03 23:09:41'),
(405, 'default browser', '2018-09-03 23:09:42'),
(406, 'default browser', '2018-09-03 23:09:46'),
(407, 'default browser', '2018-09-03 23:09:47'),
(408, 'default browser', '2018-09-03 23:09:48'),
(409, 'default browser', '2018-09-03 23:09:49'),
(410, 'default browser', '2018-09-03 23:09:10'),
(411, 'default browser', '2018-09-03 23:09:11'),
(412, 'default browser', '2018-09-03 23:09:12'),
(413, 'default browser', '2018-09-03 23:09:31'),
(414, 'default browser', '2018-09-03 23:09:32'),
(415, 'default browser', '2018-09-03 23:09:33'),
(416, 'default browser', '2018-09-03 23:09:03'),
(417, 'default browser', '2018-09-03 23:09:16'),
(418, 'default browser', '2018-09-03 23:09:18'),
(419, 'default browser', '2018-09-03 23:09:19'),
(420, 'default browser', '2018-09-04 00:09:23'),
(421, 'default browser', '2018-09-04 00:09:27'),
(422, 'default browser', '2018-09-04 00:09:28'),
(423, 'default browser', '2018-09-04 00:09:37'),
(424, 'default browser', '2018-09-04 00:09:38'),
(425, 'default browser', '2018-09-04 00:09:39'),
(426, 'default browser', '2018-09-04 00:09:40'),
(427, 'default browser', '2018-09-04 00:09:44'),
(428, 'default browser', '2018-09-04 00:09:45'),
(429, 'default browser', '2018-09-04 00:09:46'),
(430, 'default browser', '2018-09-04 00:09:47'),
(431, 'default browser', '2018-09-04 00:09:48'),
(432, 'default browser', '2018-09-04 00:09:49'),
(433, 'default browser', '2018-09-04 00:09:53'),
(434, 'default browser', '2018-09-04 00:09:57'),
(435, 'default browser', '2018-09-04 00:09:58'),
(436, 'default browser', '2018-09-04 00:09:59'),
(437, 'default browser', '2018-09-04 00:09:11'),
(438, 'default browser', '2018-09-04 00:09:12'),
(439, 'default browser', '2018-09-04 00:09:13'),
(440, 'default browser', '2018-09-04 00:09:14'),
(441, 'default browser', '2018-09-04 00:09:15'),
(442, 'default browser', '2018-09-04 00:09:16'),
(443, 'default browser', '2018-09-04 00:09:17'),
(444, 'default browser', '2018-09-04 00:09:10'),
(445, 'default browser', '2018-09-04 00:09:11'),
(446, 'default browser', '2018-09-04 00:09:15'),
(447, 'default browser', '2018-09-04 00:09:19'),
(448, 'default browser', '2018-09-04 00:09:20'),
(449, 'default browser', '2018-09-04 00:09:21'),
(450, 'default browser', '2018-09-04 00:09:42'),
(451, 'default browser', '2018-09-04 00:09:43'),
(452, 'default browser', '2018-09-04 00:09:44'),
(453, 'default browser', '2018-09-04 00:09:30'),
(454, 'default browser', '2018-09-04 00:09:31'),
(455, 'default browser', '2018-09-04 00:09:32'),
(456, 'default browser', '2018-09-04 00:09:39'),
(457, 'default browser', '2018-09-04 00:09:40'),
(458, 'default browser', '2018-09-04 00:09:44'),
(459, 'default browser', '2018-09-04 00:09:06'),
(460, 'default browser', '2018-09-04 00:09:07'),
(461, 'default browser', '2018-09-04 00:09:08'),
(462, 'default browser', '2018-09-04 00:09:25'),
(463, 'default browser', '2018-09-04 00:09:26'),
(464, 'default browser', '2018-09-04 00:09:27'),
(465, 'default browser', '2018-09-04 00:09:03'),
(466, 'default browser', '2018-09-04 00:09:07'),
(467, 'default browser', '2018-09-04 00:09:08'),
(468, 'default browser', '2018-09-04 00:09:09'),
(469, 'default browser', '2018-09-04 00:09:10'),
(470, 'default browser', '2018-09-04 00:09:11'),
(471, 'default browser', '2018-09-04 00:09:12'),
(472, 'default browser', '2018-09-04 00:09:15'),
(473, 'default browser', '2018-09-04 00:09:19'),
(474, 'default browser', '2018-09-04 00:09:20'),
(475, 'default browser', '2018-09-04 00:09:45'),
(476, 'default browser', '2018-09-04 00:09:46'),
(477, 'default browser', '2018-09-04 00:09:47'),
(478, 'default browser', '2018-09-04 00:09:24'),
(479, 'default browser', '2018-09-04 00:09:25'),
(480, 'default browser', '2018-09-04 00:09:26'),
(481, 'default browser', '2018-09-04 00:09:07'),
(482, 'default browser', '2018-09-04 00:09:08'),
(483, 'default browser', '2018-09-04 00:09:09'),
(484, 'default browser', '2018-09-04 00:09:25'),
(485, 'default browser', '2018-09-04 00:09:26'),
(486, 'default browser', '2018-09-04 00:09:27'),
(487, 'default browser', '2018-09-04 00:09:59'),
(488, 'default browser', '2018-09-04 00:09:00'),
(489, 'default browser', '2018-09-04 00:09:01'),
(490, 'default browser', '2018-09-04 00:09:07'),
(491, 'default browser', '2018-09-04 00:09:08'),
(492, 'default browser', '2018-09-04 00:09:09'),
(493, 'default browser', '2018-09-04 00:09:37'),
(494, 'default browser', '2018-09-04 00:09:38'),
(495, 'default browser', '2018-09-04 00:09:39'),
(496, 'default browser', '2018-09-04 00:09:52'),
(497, 'default browser', '2018-09-04 00:09:56'),
(498, 'default browser', '2018-09-04 00:09:57'),
(499, 'default browser', '2018-09-04 00:09:07'),
(500, 'default browser', '2018-09-04 00:09:08'),
(501, 'default browser', '2018-09-04 00:09:09'),
(502, 'default browser', '2018-09-04 00:09:23'),
(503, 'default browser', '2018-09-04 00:09:24'),
(504, 'default browser', '2018-09-04 00:09:25'),
(505, 'default browser', '2018-09-04 00:09:55'),
(506, 'default browser', '2018-09-04 00:09:57'),
(507, 'default browser', '2018-09-04 00:09:58'),
(508, 'default browser', '2018-09-04 00:09:12'),
(509, 'default browser', '2018-09-04 00:09:13'),
(510, 'default browser', '2018-09-04 00:09:17'),
(511, 'default browser', '2018-09-04 00:09:44'),
(512, 'default browser', '2018-09-04 00:09:45'),
(513, 'default browser', '2018-09-04 00:09:46'),
(514, 'default browser', '2018-09-04 00:09:31'),
(515, 'default browser', '2018-09-04 00:09:32'),
(516, 'default browser', '2018-09-04 00:09:33'),
(517, 'default browser', '2018-09-04 00:09:58'),
(518, 'default browser', '2018-09-04 00:09:59'),
(519, 'default browser', '2018-09-04 00:09:59'),
(520, 'default browser', '2018-09-04 00:09:24'),
(521, 'default browser', '2018-09-04 00:09:25'),
(522, 'default browser', '2018-09-04 00:09:26'),
(523, 'default browser', '2018-09-04 00:09:38'),
(524, 'default browser', '2018-09-04 00:09:39'),
(525, 'default browser', '2018-09-04 00:09:40'),
(526, 'default browser', '2018-09-04 00:09:43'),
(527, 'default browser', '2018-09-04 00:09:44'),
(528, 'default browser', '2018-09-04 00:09:48'),
(529, 'default browser', '2018-09-04 00:09:49'),
(530, 'default browser', '2018-09-04 00:09:06'),
(531, 'default browser', '2018-09-04 00:09:07'),
(532, 'default browser', '2018-09-04 00:09:09'),
(533, 'default browser', '2018-09-04 10:09:22'),
(534, 'default browser', '2018-09-04 10:09:26'),
(535, 'default browser', '2018-09-04 10:09:27'),
(536, 'default browser', '2018-09-04 10:09:28'),
(537, 'default browser', '2018-09-04 10:09:17'),
(538, 'default browser', '2018-09-04 10:09:04'),
(539, 'default browser', '2018-09-04 10:09:05'),
(540, 'default browser', '2018-09-04 10:09:06'),
(541, 'default browser', '2018-09-04 10:09:15'),
(542, 'default browser', '2018-09-04 10:09:16'),
(543, 'default browser', '2018-09-04 10:09:17'),
(544, 'default browser', '2018-09-04 10:09:26'),
(545, 'default browser', '2018-09-04 10:09:30'),
(546, 'default browser', '2018-09-04 10:09:31'),
(547, 'default browser', '2018-09-04 10:09:38'),
(548, 'default browser', '2018-09-04 10:09:42'),
(549, 'default browser', '2018-09-04 10:09:43'),
(550, 'default browser', '2018-09-04 10:09:44'),
(551, 'default browser', '2018-09-04 10:09:50'),
(552, 'default browser', '2018-09-04 10:09:51'),
(553, 'default browser', '2018-09-04 10:09:52'),
(554, 'default browser', '2018-09-04 10:09:53'),
(555, 'default browser', '2018-09-04 10:09:54'),
(556, 'default browser', '2018-09-04 10:09:58'),
(557, 'default browser', '2018-09-04 10:09:22'),
(558, 'default browser', '2018-09-04 10:09:23'),
(559, 'default browser', '2018-09-04 10:09:24'),
(560, 'default browser', '2018-09-04 10:09:25'),
(561, 'default browser', '2018-09-04 10:09:56'),
(562, 'default browser', '2018-09-04 10:09:57'),
(563, 'default browser', '2018-09-04 10:09:01'),
(564, 'default browser', '2018-09-04 10:09:04'),
(565, 'default browser', '2018-09-04 10:09:08'),
(566, 'default browser', '2018-09-04 10:09:09'),
(567, 'default browser', '2018-09-04 10:09:16'),
(568, 'default browser', '2018-09-04 10:09:24'),
(569, 'default browser', '2018-09-04 10:09:25'),
(570, 'default browser', '2018-09-04 10:09:26'),
(571, 'default browser', '2018-09-05 12:09:14'),
(572, 'default browser', '2018-09-05 12:09:16'),
(573, 'default browser', '2018-09-05 12:09:17'),
(574, 'default browser', '2018-09-05 12:09:21'),
(575, 'default browser', '2018-09-06 21:09:54'),
(576, 'default browser', '2018-09-06 21:09:57'),
(577, 'default browser', '2018-09-06 21:09:58'),
(578, 'default browser', '2018-09-06 21:09:59'),
(579, 'default browser', '2018-09-06 21:09:04'),
(580, 'default browser', '2018-09-06 21:09:05'),
(581, 'default browser', '2018-09-06 21:09:07'),
(582, 'default browser', '2019-01-10 23:01:04'),
(583, 'default browser', '2019-01-10 23:01:05'),
(584, 'default browser', '2019-01-10 23:01:06'),
(585, 'default browser', '2019-01-10 23:01:08'),
(586, 'default browser', '2019-01-10 23:01:27'),
(587, 'default browser', '2019-01-10 23:01:48'),
(588, 'default browser', '2019-01-10 23:01:50'),
(589, 'default browser', '2019-01-10 23:01:51'),
(590, 'default browser', '2019-01-10 23:01:53'),
(591, 'default browser', '2019-01-10 23:01:02'),
(592, 'default browser', '2019-01-10 23:01:03'),
(593, 'default browser', '2019-01-10 23:01:05'),
(594, 'default browser', '2019-01-10 23:01:06'),
(595, 'default browser', '2019-01-10 23:01:07'),
(596, 'default browser', '2019-01-10 23:01:08'),
(597, 'default browser', '2019-01-10 23:01:10'),
(598, 'default browser', '2019-01-10 23:01:11'),
(599, 'default browser', '2019-01-10 23:01:12'),
(600, 'default browser', '2019-01-10 23:01:13'),
(601, 'default browser', '2019-01-10 23:01:15'),
(602, 'default browser', '2019-01-10 23:01:16'),
(603, 'default browser', '2019-01-10 23:01:17'),
(604, 'default browser', '2019-01-10 23:01:18'),
(605, 'default browser', '2019-01-10 23:01:20'),
(606, 'default browser', '2019-01-10 23:01:21'),
(607, 'default browser', '2019-01-10 23:01:23'),
(608, 'default browser', '2019-01-10 23:01:25'),
(609, 'default browser', '2019-01-10 23:01:26'),
(610, 'default browser', '2019-01-10 23:01:28'),
(611, 'default browser', '2019-01-10 23:01:30'),
(612, 'default browser', '2019-01-10 23:01:31'),
(613, 'default browser', '2019-01-10 23:01:33'),
(614, 'default browser', '2019-01-10 23:01:34'),
(615, 'default browser', '2019-01-10 23:01:37'),
(616, 'default browser', '2019-01-10 23:01:39'),
(617, 'default browser', '2019-01-10 23:01:43'),
(618, 'default browser', '2019-01-10 23:01:01'),
(619, 'default browser', '2019-01-10 23:01:25'),
(620, 'default browser', '2019-01-10 23:01:40'),
(621, 'default browser', '2019-01-10 23:01:05'),
(622, 'default browser', '2019-01-10 23:01:17'),
(623, 'default browser', '2019-01-10 23:01:18'),
(624, 'default browser', '2019-01-10 23:01:21'),
(625, 'default browser', '2019-01-10 23:01:22'),
(626, 'default browser', '2019-01-10 23:01:43'),
(627, 'default browser', '2019-01-10 23:01:45'),
(628, 'default browser', '2019-01-10 23:01:13'),
(629, 'default browser', '2019-01-10 23:01:17'),
(630, 'default browser', '2019-01-10 23:01:40'),
(631, 'default browser', '2019-01-10 23:01:18'),
(632, 'default browser', '2019-01-10 23:01:51'),
(633, 'default browser', '2019-01-10 23:01:50'),
(634, 'default browser', '2019-01-10 23:01:09'),
(635, 'default browser', '2019-01-10 23:01:13'),
(636, 'default browser', '2019-01-10 23:01:18'),
(637, 'default browser', '2019-01-10 23:01:19'),
(638, 'default browser', '2019-01-10 23:01:22'),
(639, 'default browser', '2019-01-10 23:01:45'),
(640, 'default browser', '2019-01-10 23:01:37'),
(641, 'default browser', '2019-01-10 23:01:30'),
(642, 'default browser', '2019-01-10 23:01:18'),
(643, 'default browser', '2019-01-10 23:01:37'),
(644, 'default browser', '2019-01-10 23:01:53'),
(645, 'default browser', '2019-01-10 23:01:10'),
(646, 'default browser', '2019-01-10 23:01:18'),
(647, 'default browser', '2019-01-10 23:01:02'),
(648, 'default browser', '2019-01-10 23:01:47'),
(649, 'default browser', '2019-01-10 23:01:08'),
(650, 'default browser', '2019-01-10 23:01:10'),
(651, 'default browser', '2019-01-10 23:01:26'),
(652, 'default browser', '2019-01-10 23:01:44'),
(653, 'default browser', '2019-01-10 23:01:03'),
(654, 'default browser', '2019-01-10 23:01:51'),
(655, 'default browser', '2019-01-10 23:01:58'),
(656, 'default browser', '2019-01-11 00:01:00'),
(657, 'default browser', '2019-01-11 00:01:31'),
(658, 'default browser', '2019-01-11 00:01:52'),
(659, 'default browser', '2019-01-11 00:01:44'),
(660, 'default browser', '2019-01-11 00:01:39'),
(661, 'default browser', '2019-01-11 00:01:50'),
(662, 'default browser', '2019-01-11 00:01:51'),
(663, 'default browser', '2019-01-11 00:01:36'),
(664, 'default browser', '2019-01-11 00:01:28'),
(665, 'default browser', '2019-01-11 00:01:47'),
(666, 'default browser', '2019-01-11 00:01:59'),
(667, 'default browser', '2019-01-11 00:01:15'),
(668, 'default browser', '2019-01-11 00:01:16'),
(669, 'default browser', '2019-01-11 00:01:21'),
(670, 'default browser', '2019-01-11 00:01:22'),
(671, 'default browser', '2019-01-11 00:01:25'),
(672, 'default browser', '2019-01-11 00:01:18'),
(673, 'default browser', '2019-01-11 00:01:22'),
(674, 'default browser', '2019-01-11 00:01:22'),
(675, 'default browser', '2019-01-11 00:01:26'),
(676, 'default browser', '2019-01-11 00:01:43'),
(677, 'default browser', '2019-01-11 00:01:33'),
(678, 'default browser', '2019-01-11 00:01:14'),
(679, 'default browser', '2019-01-11 00:01:20'),
(680, 'default browser', '2019-01-11 00:01:51'),
(681, 'default browser', '2019-01-11 00:01:04'),
(682, 'default browser', '2019-01-11 00:01:50'),
(683, 'default browser', '2019-01-11 00:01:31'),
(684, 'default browser', '2019-01-11 00:01:58'),
(685, 'default browser', '2019-01-11 00:01:43'),
(686, 'default browser', '2019-01-11 00:01:43'),
(687, 'default browser', '2019-01-11 11:01:01'),
(688, 'default browser', '2019-01-11 11:01:22'),
(689, 'default browser', '2019-01-11 11:01:55'),
(690, 'default browser', '2019-01-11 23:01:03'),
(691, 'default browser', '2019-01-11 23:01:20'),
(692, 'default browser', '2019-01-11 23:01:21'),
(693, 'default browser', '2019-01-11 23:01:27'),
(694, 'default browser', '2019-01-11 23:01:28'),
(695, 'default browser', '2019-01-11 23:01:33'),
(696, 'default browser', '2019-01-11 23:01:34'),
(697, 'default browser', '2019-01-11 23:01:38'),
(698, 'default browser', '2019-01-17 18:01:23'),
(699, 'default browser', '2019-01-17 18:01:01'),
(700, 'default browser', '2019-01-17 18:01:42'),
(701, 'default browser', '2019-01-17 18:01:09'),
(702, 'default browser', '2019-01-17 18:01:23'),
(703, 'default browser', '2019-01-17 18:01:38'),
(704, 'default browser', '2019-01-17 18:01:28'),
(705, 'default browser', '2019-01-17 18:01:00'),
(706, 'default browser', '2019-01-17 18:01:27'),
(707, 'default browser', '2019-01-17 18:01:28'),
(708, 'default browser', '2019-01-17 18:01:34'),
(709, 'default browser', '2019-01-17 18:01:10'),
(710, 'default browser', '2019-01-17 18:01:52'),
(711, 'default browser', '2019-01-17 18:01:14'),
(712, 'default browser', '2019-01-17 18:01:33'),
(713, 'default browser', '2019-02-16 11:02:27'),
(714, 'default browser', '2019-02-17 00:02:05'),
(715, 'default browser', '2019-02-17 00:02:16'),
(716, 'default browser', '2019-02-17 00:02:46'),
(717, 'default browser', '2019-08-12 00:08:33'),
(718, 'default browser', '2019-08-12 00:08:52');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(111) NOT NULL,
  `name` varchar(255) NOT NULL,
  `post_url` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `text_cm` text NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `post_url`, `email`, `website`, `status`, `text_cm`, `date_time`) VALUES
(9, 'bilawal-gul', 'na-kr-oyy', 'bilawalawan747@hotmail.com', 'https://www.infodemands.com', 'approve', 'this is very grate comment sir g', '2018-08-29'),
(10, 'adfa', 'na-kr-oyy', 'ali@gmail.com', 'https://www.another.com', 'approve', 'adfadf adf a adf asdf df af asdf dfa df adf asdfadf adf', '2018-08-29'),
(17, 'bilawal-gul', 'tum-na-kahan-ha', 'asfand@gmail.com', 'https://www.another.com', 'approve', 'this is very nice post sir .', '2018-08-29'),
(19, 'amjid-ali', 'ya-dosti-ti-', 'hassan@gmail.com', 'https://www.infodemands.com', 'approve', 'this is very huge comment sir are you nice to see this ', '2018-08-29'),
(20, 'bilawal-gul', 'na-kr-oyy', 'Urdututorials@hotmail.com', 'https://www.another.com', 'approve', 'this is nice sir', '2018-08-30'),
(21, 'bilawal-gul', 'na-kr-oyy', 'Urdututorials@hotmail.com', 'https://www.another.com', 'approve', 'this is nice sir', '2018-08-30'),
(22, 'bilawal-gul', 'na-kr-oyy', 'Urdututorials@hotmail.com', 'https://www.another.com', 'approve', 'this is nice sir', '2018-08-30'),
(23, 'bilawal-gul', 'na-kr-oyy', 'Urdututorials@hotmail.com', 'https://www.another.com', 'approve', 'this is nice sir', '2018-08-30'),
(24, 'bilawal-gul', 'na-kr-oyy', 'ali@gmail.com', 'https://www.infodemands.com', 'approve', 'another name here your buddy ', '2018-08-30'),
(25, 'bilawal-gul', 'na-kr-oyy', 'ali@gmail.com', 'https://www.infodemands.com', 'approve', 'another name here your buddy ', '2018-08-30'),
(26, 'amazing', 'amazing-ring-wall', 'nasli@gmail.com', 'https://www.infodemands.com', 'approve', 'ya kia bat ha kesa comment kia ha tum na sir g kuch batao to sai ma b asay kro ', '2018-09-01'),
(27, 'nothing', '10-Tips-to-Start-Living-in-the-Present', 'nothing@gmail.com', 'https://www.infodemands.com', 'unapprove', 'wow you are grate . this is really cute awesome article you beauty ', '2018-09-03'),
(28, 'nothing', '10-Tips-to-Start-Living-in-the-Present', 'nothing@gmail.com', 'https://www.infodemands.com', 'unapprove', 'wow you are grate . this is really cute awesome article you beauty ', '2018-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int(111) NOT NULL,
  `user_id` int(111) NOT NULL,
  `user_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id`, `user_id`, `user_url`) VALUES
(30, 63, 'bilawal-gul');

-- --------------------------------------------------------

--
-- Table structure for table `front_page`
--

CREATE TABLE `front_page` (
  `id` int(111) NOT NULL,
  `picture` text NOT NULL,
  `alt_tag` text NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_page`
--

INSERT INTO `front_page` (`id`, `picture`, `alt_tag`, `date_time`) VALUES
(2, 'itsmain.jpeg', 'c++ and html code written and man sitting on chair with laptop', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(211) NOT NULL,
  `user_id` int(211) NOT NULL,
  `post_url` text NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_url`, `author`) VALUES
(2, 100, 'tum-na-kahan-ha', 'bilawal-gul'),
(3, 63, 'instagram-study', 'bilawal-gul');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(111) NOT NULL,
  `tutorials` varchar(255) NOT NULL,
  `reviews` varchar(255) NOT NULL,
  `Robotics` varchar(255) NOT NULL,
  `news` varchar(255) NOT NULL,
  `artificl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `tutorials`, `reviews`, `Robotics`, `news`, `artificl`) VALUES
(2, 'html', 'computer', 'robotics', 'news', 'artificial intelligence'),
(3, 'cpp', 'mobile', 'robotics', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(111) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `url_title` varchar(255) NOT NULL,
  `meta` varchar(255) NOT NULL,
  `alt_tag` varchar(255) NOT NULL,
  `pic` text NOT NULL,
  `menu` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `comm_count` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `tags` text NOT NULL,
  `likes` int(21) NOT NULL,
  `date_time` date NOT NULL,
  `user_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `url`, `url_title`, `meta`, `alt_tag`, `pic`, `menu`, `text`, `author`, `status`, `comm_count`, `view`, `tags`, `likes`, `date_time`, `user_image`) VALUES
(7, '10 Tips to Start Living in the Present', '10-Tips-to-Start-Living-in-the-Present', '10 Tips to Start Living in the Present', 'living in the present, life, enjoyment in life, present moment, appreciating the present, how to live in the presen', 'girl stand with camera ', '49802075_2045972729030643_3031107232814071808_n.jpg', 'html', '<blockquote>\r\n<p>&ldquo;The secret of health for both mind and body is not to mourn for the past, worry about the future, or anticipate troubles, but to live in the present moment wisely and earnestly.&rdquo;</p>\r\n</blockquote>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">One of the best, unforeseen consequence of simplifying our lives is it has allowed us to begin living our lives in the present. Eliminating nonessential possessions has freed us from many of the emotions associated with past lives that were keeping us stuck. And clearing our home has allowed us the freedom to shape our lives today around our most important values.</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span dir=\"ltr\">Choosing to live in the past or the future not only robs you of enjoyment today, it robs you of truly living. The only important moment is the present moment. With that goal in mind, consider this list of ten tips below to start living your life in the present:</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"beautifull fish\" src=\"https://images.unsplash.com/photo-1534575180408-b7d7c0136ee8?ixlib=rb-0.3.5&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;s=0af7900d2fd06133cb7e05cc870e883a&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60\" style=\"border-style:solid; border-width:7px; height:100%; margin:10px; width:100%\" /></p>\r\n\r\n<h2><strong>1. Remove&nbsp;unneeded possessions.</strong></h2>\r\n\r\n<p>&nbsp;Minimalism forces you to live in the present. Removing items associated with past memories or lives frees us up to stop living in the past and start living in the present</p>\r\n\r\n<p><strong>2. Smile.&nbsp;</strong>Each day is full of endless possibilities! Start it with a smile. You are in control of your attitude every morning, keep it optimistic and expectant.</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/-J9k4m1yhco\" width=\"560\"></iframe></p>\r\n\r\n<p><strong>3. Fully appreciate the moments of today.&nbsp;</strong>Soak in as much of today as you possibly can &ndash; the sights, the sounds, the smells, the emotions, the triumph, and the sorrow.</p>\r\n\r\n<p><strong>4. Forgive past hurts.&nbsp;</strong>If you are harboring resentment towards another human being because of past hurts, choose to forgive and move on. The harm was their fault. But allowing it to impact your mood today is yours.</p>\r\n\r\n<p><strong>5. Love your job.</strong>&nbsp;If you just &ldquo;survive&rdquo; the workweek constantly waiting for the next weekend &ldquo;to get here,&rdquo; you are wasting 71% of your life (5 out of 7 days). there are two solutions: 1) find a new job that you actually enjoy (it&rsquo;s out there), or 2) find something that you appreciate about your current career and focus on that rather than the negatives.</p>\r\n\r\n<p><strong>6. Dream about the future, but work hard today.</strong>&nbsp;Dream big. Set goals and plans for the future. But working hard today is always the first step towards realizing your dreams tomorrow. Don&rsquo;t allow dreaming about tomorrow to replace living in today.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>7. Don&rsquo;t dwell on past accomplishments.&nbsp;</strong>If you are still talking about what you did yesterday, you haven&rsquo;t done much today.</p>\r\n\r\n<p><strong>8. Stop worrying.&nbsp;You can&rsquo;t fully appreciate today if you worry too much about tomorrow. Realize that tomorrow is going to happen whether you worry about it or not. And since worry has never accomplished anything for anybody, redirect your mental energy elsewhere.</strong></p>\r\n\r\n<p><strong>9. Think beyond old solutions to problems.</strong>&nbsp;Our world is changing so fast that most of yesterday&rsquo;s solutions are no longer the right answers today. Don&rsquo;t get locked into a &ldquo;but that&rsquo;s how we&rsquo;ve always done it&rdquo; mentality. Yesterday&rsquo;s solutions are not today&rsquo;s solutions and they are certainly not tomorrow&rsquo;s solutions.</p>\r\n\r\n<p><strong>10. Conquer addictions.&nbsp;</strong>Addictions in your life hold you hostage. They keep you from living a completely free life today. Find some help. Take the steps. And remove their influence over your life.</p>\r\n\r\n<p>If you can only live one moment at a time, you might as well make it the present</p>\r\n', 'bilawal-gul', 'publish', 2, 17, '', 1, '2019-01-10', 'live-in-the-present.jpg'),
(28, 'Instagram Study: We analyzed 9 million posts', 'instagram-study', 'Instagram Study: We analyzed 9 million posts', 'Instagram Study: We analyzed 9 million posts ', 'instaimage', 'Instagram Study Featured Image.jpg', 'computer', '<p>Instagram has over 1 billion users worldwide. This is not only a huge amount of registered users but also a lot of many different use cases. Some use it to share their life with their friends, influencers make a living out of the platform and brands engage with their audience or to generate new customers.</p>\r\n\r\n<p>All these different use cases made us curious. For this reason, we decided to learn more about the usage of the social network by analyzing the performance of&nbsp;<strong>44,432 Instagram Business profiles and over 8.9 million posts</strong>&nbsp;between January 1 and September 30, 2018.</p>\r\n\r\n<p>Now it&rsquo;s time to put your reading glasses on and to get excited about our findings!</p>\r\n\r\n<h2>Key focus of our Instagram study</h2>\r\n\r\n<p>We clustered our dataset in six differently-sized groups, to make it applicable for your specific Instagram account:</p>\r\n\r\n<p><img alt=\"Profile Size Group Pie 01-1 OUTLINE\" src=\"https://www.quintly.com/hubfs/Marketing%20/blog-en/2018/November/Instagram%20Study%202018/Charts%20and%20Graphs/Profile%20Size%20Group%20Pie%2001-1%20OUTLINE.svg\" style=\"width:100%\" /></p>\r\n\r\n<p>And here is an overview of the six categories we analyzed:</p>\r\n\r\n<ul>\r\n	<li>Follower development</li>\r\n	<li>Post type performance</li>\r\n	<li>The length of posts</li>\r\n	<li>Usage of hashtags</li>\r\n	<li>Emojis on Instagram</li>\r\n	<li>Posting time</li>\r\n</ul>\r\n\r\n<p>Let&rsquo;s dive into the data.</p>\r\n\r\n<h2>Instagram profiles grew up to 33%</h2>\r\n\r\n<p>This year was a strong year for Instagram. Not only for the network itself, but also for the users, influencers and brands using it. You ask why? By observing the fan growth in the differently-sized buckets, we detected an overall growth for all analyzed profiles.</p>\r\n\r\n<p>Breaking the number down to our different profile groups, it can be seen that the profile growth spans from 17% up to 33%.</p>\r\n\r\n<p><img alt=\"Follower Growth Rate 01-2 OUTLINE\" src=\"https://www.quintly.com/hubfs/Marketing%20/blog-en/2018/November/Instagram%20Study%202018/Charts%20and%20Graphs/Follower%20Growth%20Rate%2001-2%20OUTLINE.svg\" style=\"width:100%\" /></p>\r\n\r\n<h3>Videos get up to 21% more interactions</h3>\r\n\r\n<p>Images are the most common post type, but how do they compare in terms of interactions (<em>Note: Interactions are defined as the sum of likes + comments</em>) to carousels and videos? The answer is that they perform on average not as well as the other two formats.</p>\r\n\r\n<p>Taking a look at the performance of each format is revealing:</p>\r\n', 'bilawal-gul', 'publish', 0, 6, 'insta , everything , socialmedia , guru , avrage , pakistan , teach', 1, '2019-01-11', 'good.jpg'),
(29, 'How to Study Smart: 20 Scientific Ways to Learn Faster', 'study-smart', 'How to Study Smart: 20 Scientific Ways to Learn Faster', 'How to Study Smart: 20 Scientific Ways to Learn Faster', 'instaimage', 'maxresdefault.jpg', 'artificial intelligence', '&lt;h3&gt;Better results mean more choice and opportunity. So pick up a few new study tips, and prove your outstanding ability in your assignments and exams!&lt;/h3&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;1. Don&amp;rsquo;t miss a class&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;&amp;lsquo;A&amp;rsquo; students never miss a class. They also never miss the beginning or end of a class, because important announcements about exams and projects are often made then. If you find you lose concentration during lectures, record them on your phone or a simple voice recorder and listen again later.&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;2. Review your notes quickly and often&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;After a lecture or class, read through your notes quickly again. It helps store the information in your long-term memory.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;3. Organise your notes visually&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;It helps to re-write the key points of a class or subject as a diagram &amp;ndash; try using a mind-map or flow chart, or colour coding key elements of the topic. Then you can give it a quick glance before you go into an exam.&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;4. Plan ahead&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Make sure you allow enough time for assignments and exam revision. At the beginning of each term, note down due dates and exam dates on a planner, and schedule in time for research, editing and final review.&lt;/p&gt;\r\n\r\n&lt;h3&gt;5. Explain things to others&lt;/h3&gt;\r\n\r\n&lt;p&gt;It helps you get things clearer in your head if you try to explain your answers verbally to people who do not know much about the subject. Your parents and annoying siblings could be useful for this!&lt;/p&gt;\r\n\r\n&lt;h3&gt;6. Get together with a study group&lt;/h3&gt;\r\n\r\n&lt;p&gt;You can still have a social life and study &amp;ndash; get together with your friends and a pizza, and share ideas or test each other. You might get a new perspective on a topic, or work out a better way to approach an assignment. Online groups can work for this too &amp;ndash; although cyber-pizza is not as tasty.&lt;/p&gt;\r\n\r\n&lt;h3&gt;7. Stay positive&lt;/h3&gt;\r\n\r\n&lt;p&gt;It all comes down to attitude. Be enthusiastic about your subjects, and use positive affirmations to tell yourself that you will succeed and meet your goals.&lt;/p&gt;\r\n\r\n&lt;h3&gt;8. Trust your instincts&lt;/h3&gt;\r\n\r\n&lt;p&gt;If you&amp;rsquo;re under pressure in an exam, don&amp;rsquo;t second-guess yourself. In most cases, the first answer you think of will be the right one. If you&amp;rsquo;re really not sure, make a note of it and move on &amp;ndash; you can always come back later if you have time.&lt;/p&gt;\r\n\r\n&lt;h3&gt;9. Test your teachers&lt;/h3&gt;\r\n\r\n&lt;p&gt;Question your teachers before an exam, make sure you know exactly what will be covered and what type of questions you should expect. They may have some practice papers you can try first.&lt;/p&gt;\r\n\r\n&lt;h3&gt;10. Feed your brain and stay healthy&lt;/h3&gt;\r\n\r\n&lt;p&gt;Eat well. Good brain food includes fish, nuts, blueberries and yoghurt. Get enough sleep, and plan in some active time to keep fit. Oxygen also helps your memory and concentration, so take a break and get some fresh air. Many people have their best ideas away from their desk, so if you&amp;rsquo;re really stuck for words just get outside and run around the park.&lt;br /&gt;\r\nHave you got any other tried-and-tested study techniques? Share them with us here!&lt;/p&gt;\r\n', 'bilawal-gul', 'publish', 0, 0, 'insta , everything , socialmedia , guru , avrage , pakistan , teach', 0, '2019-01-11', 'good.jpg'),
(30, 'how to do seo', 'how-to-do-seo', 'how to do seo', 'how to do seo', 'seo image', 'large_2075747765.jpg', 'robotics', '&lt;p&gt;Businesses are growing more aware of the need to understand and implement at least the basics of&amp;nbsp;&lt;a href=&quot;https://searchengineland.com/guide/what-is-seo&quot;&gt;search engine optimization (SEO)&lt;/a&gt;. But if you read a variety of blogs and websites, you&amp;rsquo;ll quickly see that there&amp;rsquo;s a lot of uncertainty over what makes up &amp;ldquo;the basics.&amp;rdquo; Without access to high-level consulting and without a lot of experience knowing what SEO resources can be trusted, there&amp;rsquo;s also a lot of misinformation about SEO strategies and tactics.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;1. Commit yourself to the process.&lt;/strong&gt;&amp;nbsp;SEO isn&amp;rsquo;t a one-time event. Search engine algorithms change regularly, so the tactics that worked last year may not work this year. SEO requires a long-term outlook and commitment.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;2. Be patient.&lt;/strong&gt;&amp;nbsp;SEO isn&amp;rsquo;t about instant gratification. Results often take months to see, and this is especially true the smaller you are, and the newer you are to doing business online.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;3. Ask a lot of questions when hiring an SEO company.&lt;/strong&gt;&amp;nbsp;It&amp;rsquo;s your job to know what kind of tactics the company uses. Ask for specifics. Ask if there are any risks involved. Then get online yourself and do your own research&amp;mdash;about the company, about the tactics they discussed, and so forth.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;4. Become a student of SEO.&lt;/strong&gt;&amp;nbsp;If you&amp;rsquo;re taking the do-it-yourself route, you&amp;rsquo;ll have to become a student of SEO and learn as much as you can. Luckily for you, there are plenty of great web resources (like&amp;nbsp;&lt;a href=&quot;https://searchengineland.com/&quot;&gt;Search Engine Land&lt;/a&gt;) and several terrific books you can read. (Yes, actual printed books!) See our&amp;nbsp;&lt;a href=&quot;https://searchengineland.com/guide/what-is-seo&quot;&gt;What Is SEO&lt;/a&gt;&amp;nbsp;page for a variety of articles, books and resources.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;5. Have web analytics in place at the start.&lt;/strong&gt;&amp;nbsp;You should have clearly defined goals for your SEO efforts, and you&amp;rsquo;ll need web analytics software in place so you can track what&amp;rsquo;s working and what&amp;rsquo;s not.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;6. Build a great web site.&lt;/strong&gt;&amp;nbsp;I&amp;rsquo;m sure you want to show up on the first page of results. Ask yourself, &amp;ldquo;Is my site&amp;nbsp;&lt;em&gt;really&lt;/em&gt;&amp;nbsp;one of the 10 best sites in the world on this topic?&amp;rdquo; Be honest. If it&amp;rsquo;s not, make it better.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;7. Include a site map page.&lt;/strong&gt;&amp;nbsp;Spiders can&amp;rsquo;t index pages that can&amp;rsquo;t be crawled. A site map will help spiders find all the important pages on your site, and help the spider understand your site&amp;rsquo;s hierarchy. This is especially helpful if your site has a hard-to-crawl navigation menu. If your site is large, make several site map pages. Keep each one to less than 100 links. I tell clients 75 is the max to be safe.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;8. Make SEO-friendly URLs.&lt;/strong&gt;&amp;nbsp;Use keywords in your URLs and file names, such as&amp;nbsp;&lt;em&gt;yourdomain.com/red-widgets.html&lt;/em&gt;. Don&amp;rsquo;t overdo it, though. A file with 3+ hyphens tends to look spammy and users may be hesitant to click on it.&amp;nbsp;&lt;em&gt;Related bonus tip:&lt;/em&gt;&amp;nbsp;Use hyphens in URLs and file names, not underscores. Hyphens are treated as a &amp;ldquo;space,&amp;rdquo; while underscores are not.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;9. Do keyword research at the start of the project.&lt;/strong&gt;&amp;nbsp;If you&amp;rsquo;re on a tight budget, use the free versions of&amp;nbsp;&lt;a href=&quot;http://www.keyworddiscovery.com/search.html&quot;&gt;Keyword Discovery&lt;/a&gt;&amp;nbsp;or&amp;nbsp;&lt;a href=&quot;http://freekeywords.wordtracker.com/&quot;&gt;WordTracker&lt;/a&gt;, both of which also have more powerful paid versions. Ignore the numbers these tools show; what&amp;rsquo;s important is the relative volume of one keyword to another. Another good free tool is Google&amp;rsquo;s&amp;nbsp;&lt;a href=&quot;https://adwords.google.com/select/KeywordToolExternal&quot;&gt;AdWords Keyword Tool&lt;/a&gt;, which doesn&amp;rsquo;t show exact numbers.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;10. Open up a PPC account.&lt;/strong&gt;&amp;nbsp;Whether it&amp;rsquo;s Google&amp;rsquo;s AdWords, Microsoft adCenter or something else, this is a great way to get&amp;nbsp;&lt;em&gt;actual search volume&lt;/em&gt;&amp;nbsp;for your keywords. Yes, it costs money, but if you have the budget it&amp;rsquo;s worth the investment. It&amp;rsquo;s also the solution if you didn&amp;rsquo;t like the &amp;ldquo;Be patient&amp;rdquo; suggestion above and are looking for instant visibility.&lt;/p&gt;\r\n', 'bilawal-gul', 'publish', 0, 0, 'insta , everything , socialmedia , guru , avrage , pakistan , teach', 0, '2019-01-11', 'good.jpg'),
(31, 'HOw to Get Backlink', 'how-to-get-backlink', 'how to do seo', 'how to do seo', 'seo image', 'good.jpg', 'robotics', '&lt;p&gt;Businesses are growing more aware of the need to understand and implement at least the basics of&amp;nbsp;&lt;a href=&quot;https://searchengineland.com/guide/what-is-seo&quot;&gt;search engine optimization (SEO)&lt;/a&gt;. But if you read a variety of blogs and websites, you&amp;rsquo;ll quickly see that there&amp;rsquo;s a lot of uncertainty over what makes up &amp;ldquo;the basics.&amp;rdquo; Without access to high-level consulting and without a lot of experience knowing what SEO resources can be trusted, there&amp;rsquo;s also a lot of misinformation about SEO strategies and tactics.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;1. Commit yourself to the process.&lt;/strong&gt;&amp;nbsp;SEO isn&amp;rsquo;t a one-time event. Search engine algorithms change regularly, so the tactics that worked last year may not work this year. SEO requires a long-term outlook and commitment.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;2. Be patient.&lt;/strong&gt;&amp;nbsp;SEO isn&amp;rsquo;t about instant gratification. Results often take months to see, and this is especially true the smaller you are, and the newer you are to doing business online.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;3. Ask a lot of questions when hiring an SEO company.&lt;/strong&gt;&amp;nbsp;It&amp;rsquo;s your job to know what kind of tactics the company uses. Ask for specifics. Ask if there are any risks involved. Then get online yourself and do your own research&amp;mdash;about the company, about the tactics they discussed, and so forth.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;4. Become a student of SEO.&lt;/strong&gt;&amp;nbsp;If you&amp;rsquo;re taking the do-it-yourself route, you&amp;rsquo;ll have to become a student of SEO and learn as much as you can. Luckily for you, there are plenty of great web resources (like&amp;nbsp;&lt;a href=&quot;https://searchengineland.com/&quot;&gt;Search Engine Land&lt;/a&gt;) and several terrific books you can read. (Yes, actual printed books!) See our&amp;nbsp;&lt;a href=&quot;https://searchengineland.com/guide/what-is-seo&quot;&gt;What Is SEO&lt;/a&gt;&amp;nbsp;page for a variety of articles, books and resources.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;5. Have web analytics in place at the start.&lt;/strong&gt;&amp;nbsp;You should have clearly defined goals for your SEO efforts, and you&amp;rsquo;ll need web analytics software in place so you can track what&amp;rsquo;s working and what&amp;rsquo;s not.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;6. Build a great web site.&lt;/strong&gt;&amp;nbsp;I&amp;rsquo;m sure you want to show up on the first page of results. Ask yourself, &amp;ldquo;Is my site&amp;nbsp;&lt;em&gt;really&lt;/em&gt;&amp;nbsp;one of the 10 best sites in the world on this topic?&amp;rdquo; Be honest. If it&amp;rsquo;s not, make it better.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;7. Include a site map page.&lt;/strong&gt;&amp;nbsp;Spiders can&amp;rsquo;t index pages that can&amp;rsquo;t be crawled. A site map will help spiders find all the important pages on your site, and help the spider understand your site&amp;rsquo;s hierarchy. This is especially helpful if your site has a hard-to-crawl navigation menu. If your site is large, make several site map pages. Keep each one to less than 100 links. I tell clients 75 is the max to be safe.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;8. Make SEO-friendly URLs.&lt;/strong&gt;&amp;nbsp;Use keywords in your URLs and file names, such as&amp;nbsp;&lt;em&gt;yourdomain.com/red-widgets.html&lt;/em&gt;. Don&amp;rsquo;t overdo it, though. A file with 3+ hyphens tends to look spammy and users may be hesitant to click on it.&amp;nbsp;&lt;em&gt;Related bonus tip:&lt;/em&gt;&amp;nbsp;Use hyphens in URLs and file names, not underscores. Hyphens are treated as a &amp;ldquo;space,&amp;rdquo; while underscores are not.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;9. Do keyword research at the start of the project.&lt;/strong&gt;&amp;nbsp;If you&amp;rsquo;re on a tight budget, use the free versions of&amp;nbsp;&lt;a href=&quot;http://www.keyworddiscovery.com/search.html&quot;&gt;Keyword Discovery&lt;/a&gt;&amp;nbsp;or&amp;nbsp;&lt;a href=&quot;http://freekeywords.wordtracker.com/&quot;&gt;WordTracker&lt;/a&gt;, both of which also have more powerful paid versions. Ignore the numbers these tools show; what&amp;rsquo;s important is the relative volume of one keyword to another. Another good free tool is Google&amp;rsquo;s&amp;nbsp;&lt;a href=&quot;https://adwords.google.com/select/KeywordToolExternal&quot;&gt;AdWords Keyword Tool&lt;/a&gt;, which doesn&amp;rsquo;t show exact numbers.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;10. Open up a PPC account.&lt;/strong&gt;&amp;nbsp;Whether it&amp;rsquo;s Google&amp;rsquo;s AdWords, Microsoft adCenter or something else, this is a great way to get&amp;nbsp;&lt;em&gt;actual search volume&lt;/em&gt;&amp;nbsp;for your keywords. Yes, it costs money, but if you have the budget it&amp;rsquo;s worth the investment. It&amp;rsquo;s also the solution if you didn&amp;rsquo;t like the &amp;ldquo;Be patient&amp;rdquo; suggestion above and are looking for instant visibility.&lt;/p&gt;\r\n', 'bilawal-gul', 'publish', 0, 1, 'insta , everything , socialmedia , guru , avrage , pakistan , teach', 0, '2019-01-11', 'good.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `rand_salt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22',
  `user_role` varchar(255) NOT NULL,
  `token` text NOT NULL,
  `date_time` date NOT NULL,
  `e_confirm` int(11) NOT NULL,
  `confirm_id` text NOT NULL,
  `website_name` text NOT NULL,
  `website_link` text NOT NULL,
  `default_username` varchar(255) NOT NULL,
  `follow` text NOT NULL,
  `date_of_birth` text NOT NULL,
  `skilles` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `First_Name`, `Last_Name`, `user_name`, `email`, `password`, `confirm`, `image`, `description`, `facebook`, `twitter`, `instagram`, `rand_salt`, `user_role`, `token`, `date_time`, `e_confirm`, `confirm_id`, `website_name`, `website_link`, `default_username`, `follow`, `date_of_birth`, `skilles`) VALUES
(63, 'bilawal gul', 'awan', 'bilawal gul', 'bilawalawan747@hotmail.com', '$2y$10$iusesomecrazystrings2uPgOebPOM1MevEqRG/ky9NB4RaAeX70m', 'bilawal', 'good.jpg', 'Bilawal is the co-founder and senior web developer at itsMain. His has strong grip in php and some its frameworks like laravel etc., javascript, html, css. He works on Content Management Systems, E-commerce etc.', 'https://web.facebook.com/?_rdc=1&_rdr', 'https://twitter.com/bilawal_gul', 'https://www.instagram.com/bilawal_12597/', '$2y$10$iusesomecrazystrings22', 'admin', '', '2018-08-26', 1, '0', 'bilawal.com', 'http://www.infodemands.com', 'bilawal-gul', '1', '12 / 7 / 2017', 'programmer , Creator'),
(100, 'amazing', 'ali', 'amazing', 'amazing@gmail.com', '$2y$10$iusesomecrazystrings2uxLrFtUKJ0AnSAaSRVjvcICB9/3GGiyi', 'amazing', 'rVvIisyfQwOhZv35PPhh_unsplash.jpg', '', '', '', '', '$2y$10$iusesomecrazystrings22', 'admin', '9516d2f9863391ed9cac1a52bed984b3a1d4f6b29cec7e27d8f23ba5ccbd97df53ba5474af9ba7a461a9a619d6a5759f200a', '2018-09-04', 1, '0', '', '', 'amazing', '', '12 / 6 / 999', ''),
(101, '', '', 'rico', 'Urdututorials@hotmail.com', '$2y$10$iusesomecrazystrings2udl.BIEQK7dHOcbWhVMgfhSz07BxwoF6', 'adfasdfasdf', '', '', '', '', '', '$2y$10$iusesomecrazystrings22', 'author', '', '2018-09-06', 0, 'c181f76eee1c59fdfc3d13735a9c6f5dc6249f374bb077691bddd34ee4e988d2135d92b6530e8686801d5b34b92fcd1b59ec70707caffcaab5d0d114b91a34d95d2c963aec9b32732d1194059bb19b65b6e2c9b891132c967b5cf9ae3f5fc9fa9973619e', '', '', 'rico', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(111) NOT NULL,
  `author` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `author`, `color`, `text`, `date_time`) VALUES
(1, 'bilawal gul', 'bg-red', 'Be the best whatever you are                                                                                                                                                                                                                                               ', '2019-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `date_time`) VALUES
(1, 'hassanali@gmail.com', '2018-08-17'),
(2, 'bilawalawan747@gmail.com', '2018-08-17'),
(3, 'hussan@gmail.com', '2018-08-25'),
(4, 'alihassan@gmail.com', '2018-09-03'),
(5, '', '2018-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `uniq_visitor`
--

CREATE TABLE `uniq_visitor` (
  `id` int(11) NOT NULL,
  `ip` text NOT NULL,
  `country` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uniq_visitor`
--

INSERT INTO `uniq_visitor` (`id`, `ip`, `country`, `region`, `city`, `date_time`) VALUES
(1, '::1', 'india', '', '', '2018-08-31'),
(2, '123', 'pakistan', '', '', '0000-00-00'),
(3, '12343', 'pakistan', '', '', '0000-00-00'),
(4, '24323', 'united state', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `ip` text NOT NULL,
  `country` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `ip`, `country`, `region`, `city`, `date_time`) VALUES
(1, '::1', 'pakistan', '', '', '0000-00-00'),
(2, '::1', 'Pakistan', '', '', '2018-08-31'),
(3, '::1', '', '', '', '2018-08-31'),
(4, '::1', '', '', '', '2018-08-31'),
(5, '::1', '', '', '', '2018-08-31'),
(6, '::1', '', '', '', '2018-08-31'),
(7, '::1', '', '', '', '2018-08-31'),
(8, '::1', '', '', '', '2018-08-31'),
(9, '::1', '', '', '', '2018-08-31'),
(10, '::1', '', '', '', '2018-08-31'),
(11, '::1', '', '', '', '2018-08-31'),
(12, '::1', '', '', '', '2018-08-31'),
(13, '::1', '', '', '', '2018-08-31'),
(14, '::1', '', '', '', '2018-08-31'),
(15, '::1', '', '', '', '2018-08-31'),
(16, '::1', '', '', '', '2018-08-31'),
(17, '::1', '', '', '', '2018-08-31'),
(18, '::1', '', '', '', '2018-08-31'),
(19, '::1', '', '', '', '2018-08-31'),
(20, '::1', '', '', '', '2018-08-31'),
(21, '::1', '', '', '', '2018-08-31'),
(22, '::1', '', '', '', '2018-08-31'),
(23, '::1', '', '', '', '2018-08-31'),
(24, '::1', '', '', '', '2018-08-31'),
(25, '::1', '', '', '', '2018-08-31'),
(26, '::1', '', '', '', '2018-08-31'),
(27, '::1', '', '', '', '2018-08-31'),
(28, '::1', '', '', '', '2018-08-31'),
(29, '::1', '', '', '', '2018-08-31'),
(30, '::1', '', '', '', '2018-08-31'),
(31, '::1', '', '', '', '2018-08-31'),
(32, '::1', '', '', '', '2018-08-31'),
(33, '::1', '', '', '', '2018-08-31'),
(34, '::1', '', '', '', '2018-08-31'),
(35, '::1', '', '', '', '2018-08-31'),
(36, '::1', '', '', '', '2018-08-31'),
(37, '::1', '', '', '', '2018-08-31'),
(38, '::1', '', '', '', '2018-08-31'),
(39, '::1', '', '', '', '2018-08-31'),
(40, '::1', '', '', '', '2018-08-31'),
(41, '::1', '', '', '', '2018-08-31'),
(42, '::1', '', '', '', '2018-08-31'),
(43, '::1', '', '', '', '2018-08-31'),
(44, '::1', '', '', '', '2018-08-31'),
(45, '::1', '', '', '', '2018-08-31'),
(46, '::1', '', '', '', '2018-08-31'),
(47, '::1', '', '', '', '2018-08-31'),
(48, '::1', '', '', '', '2018-08-31'),
(49, '::1', '', '', '', '2018-08-31'),
(50, '::1', '', '', '', '2018-08-31'),
(51, '::1', '', '', '', '2018-08-31'),
(52, '::1', '', '', '', '2018-08-31'),
(53, '::1', '', '', '', '2018-08-31'),
(54, '::1', '', '', '', '2018-08-31'),
(55, '::1', '', '', '', '2018-08-31'),
(56, '::1', '', '', '', '2018-08-31'),
(57, '::1', '', '', '', '2018-08-31'),
(58, '::1', '', '', '', '2018-08-31'),
(59, '::1', '', '', '', '2018-08-31'),
(60, '::1', '', '', '', '2018-08-31'),
(61, '::1', '', '', '', '2018-08-31'),
(62, '::1', '', '', '', '2018-08-31'),
(63, '::1', '', '', '', '2018-08-31'),
(64, '::1', '', '', '', '2018-08-31'),
(65, '::1', '', '', '', '2018-08-31'),
(66, '::1', '', '', '', '2018-08-31'),
(67, '::1', '', '', '', '2018-08-31'),
(68, '::1', '', '', '', '2018-08-31'),
(69, '::1', '', '', '', '2018-08-31'),
(70, '::1', '', '', '', '2018-08-31'),
(71, '::1', '', '', '', '2018-08-31'),
(72, '::1', '', '', '', '2018-08-31'),
(73, '::1', '', '', '', '2018-08-31'),
(74, '::1', '', '', '', '2018-08-31'),
(75, '::1', '', '', '', '2018-08-31'),
(76, '::1', '', '', '', '2018-08-31'),
(77, '::1', '', '', '', '2018-08-31'),
(78, '::1', '', '', '', '2018-08-31'),
(79, '::1', '', '', '', '2018-08-31'),
(80, '::1', '', '', '', '2018-08-31'),
(81, '::1', '', '', '', '2018-08-31'),
(82, '::1', '', '', '', '2018-08-31'),
(83, '::1', '', '', '', '2018-08-31'),
(84, '::1', '', '', '', '2018-08-31'),
(85, '::1', '', '', '', '2018-08-31'),
(86, '::1', '', '', '', '2018-09-01'),
(87, '::1', '', '', '', '2018-09-01'),
(88, '::1', '', '', '', '2018-09-01'),
(89, '::1', '', '', '', '2018-09-01'),
(90, '::1', '', '', '', '2018-09-01'),
(91, '::1', '', '', '', '2018-09-01'),
(92, '::1', '', '', '', '2018-09-01'),
(93, '::1', '', '', '', '2018-09-01'),
(94, '::1', '', '', '', '2018-09-01'),
(95, '::1', '', '', '', '2018-09-01'),
(96, '::1', '', '', '', '2018-09-01'),
(97, '::1', '', '', '', '2018-09-01'),
(98, '::1', '', '', '', '2018-09-01'),
(99, '::1', '', '', '', '2018-09-01'),
(100, '::1', '', '', '', '2018-09-01'),
(101, '::1', '', '', '', '2018-09-01'),
(102, '::1', '', '', '', '2018-09-01'),
(103, '::1', '', '', '', '2018-09-01'),
(104, '::1', '', '', '', '2018-09-01'),
(105, '::1', '', '', '', '2018-09-01'),
(106, '::1', '', '', '', '2018-09-01'),
(107, '::1', '', '', '', '2018-09-01'),
(108, '::1', '', '', '', '2018-09-01'),
(109, '::1', '', '', '', '2018-09-01'),
(110, '::1', '', '', '', '2018-09-01'),
(111, '::1', '', '', '', '2018-09-01'),
(112, '::1', '', '', '', '2018-09-02'),
(113, '::1', '', '', '', '2018-09-02'),
(114, '::1', '', '', '', '2018-09-02'),
(115, '::1', '', '', '', '2018-09-02'),
(116, '::1', '', '', '', '2018-09-02'),
(117, '::1', '', '', '', '2018-09-03'),
(118, '::1', '', '', '', '2018-09-03'),
(119, '::1', '', '', '', '2018-09-03'),
(120, '::1', '', '', '', '2018-09-03'),
(121, '::1', '', '', '', '2018-09-03'),
(122, '::1', '', '', '', '2018-09-03'),
(123, '::1', '', '', '', '2018-09-03'),
(124, '::1', '', '', '', '2018-09-03'),
(125, '::1', '', '', '', '2018-09-03'),
(126, '::1', '', '', '', '2018-09-03'),
(127, '::1', '', '', '', '2018-09-03'),
(128, '::1', '', '', '', '2018-09-03'),
(129, '::1', '', '', '', '2018-09-03'),
(130, '::1', '', '', '', '2018-09-03'),
(131, '::1', '', '', '', '2018-09-03'),
(132, '::1', '', '', '', '2018-09-03'),
(133, '::1', '', '', '', '2018-09-03'),
(134, '::1', '', '', '', '2018-09-03'),
(135, '::1', '', '', '', '2018-09-03'),
(136, '::1', '', '', '', '2018-09-03'),
(137, '::1', '', '', '', '2018-09-03'),
(138, '::1', '', '', '', '2018-09-03'),
(139, '::1', '', '', '', '2018-09-03'),
(140, '::1', '', '', '', '2018-09-03'),
(141, '::1', '', '', '', '2018-09-03'),
(142, '::1', '', '', '', '2018-09-03'),
(143, '::1', '', '', '', '2018-09-03'),
(144, '::1', '', '', '', '2018-09-03'),
(145, '::1', '', '', '', '2018-09-03'),
(146, '::1', '', '', '', '2018-09-03'),
(147, '::1', '', '', '', '2018-09-03'),
(148, '::1', '', '', '', '2018-09-03'),
(149, '::1', '', '', '', '2018-09-03'),
(150, '::1', '', '', '', '2018-09-03'),
(151, '::1', '', '', '', '2018-09-03'),
(152, '::1', '', '', '', '2018-09-03'),
(153, '::1', '', '', '', '2018-09-03'),
(154, '::1', '', '', '', '2018-09-03'),
(155, '::1', '', '', '', '2018-09-03'),
(156, '::1', '', '', '', '2018-09-03'),
(157, '::1', '', '', '', '2018-09-03'),
(158, '::1', '', '', '', '2018-09-03'),
(159, '::1', '', '', '', '2018-09-03'),
(160, '::1', '', '', '', '2018-09-03'),
(161, '::1', '', '', '', '2018-09-03'),
(162, '::1', '', '', '', '2018-09-03'),
(163, '::1', '', '', '', '2018-09-03'),
(164, '::1', '', '', '', '2018-09-03'),
(165, '::1', '', '', '', '2018-09-03'),
(166, '::1', '', '', '', '2018-09-03'),
(167, '::1', '', '', '', '2018-09-03'),
(168, '::1', '', '', '', '2018-09-03'),
(169, '::1', '', '', '', '2018-09-03'),
(170, '::1', '', '', '', '2018-09-03'),
(171, '::1', '', '', '', '2018-09-03'),
(172, '::1', '', '', '', '2018-09-03'),
(173, '::1', '', '', '', '2018-09-03'),
(174, '::1', '', '', '', '2018-09-03'),
(175, '::1', '', '', '', '2018-09-03'),
(176, '::1', '', '', '', '2018-09-03'),
(177, '::1', '', '', '', '2018-09-03'),
(178, '::1', '', '', '', '2018-09-03'),
(179, '::1', '', '', '', '2018-09-03'),
(180, '::1', '', '', '', '2018-09-03'),
(181, '::1', '', '', '', '2018-09-03'),
(182, '::1', '', '', '', '2018-09-03'),
(183, '::1', '', '', '', '2018-09-03'),
(184, '::1', '', '', '', '2018-09-03'),
(185, '::1', '', '', '', '2018-09-03'),
(186, '::1', '', '', '', '2018-09-03'),
(187, '::1', '', '', '', '2018-09-03'),
(188, '::1', '', '', '', '2018-09-03'),
(189, '::1', '', '', '', '2018-09-03'),
(190, '::1', '', '', '', '2018-09-03'),
(191, '::1', '', '', '', '2018-09-03'),
(192, '::1', '', '', '', '2018-09-03'),
(193, '::1', '', '', '', '2018-09-03'),
(194, '::1', '', '', '', '2018-09-03'),
(195, '::1', '', '', '', '2018-09-03'),
(196, '::1', '', '', '', '2018-09-03'),
(197, '::1', '', '', '', '2018-09-03'),
(198, '::1', '', '', '', '2018-09-03'),
(199, '::1', '', '', '', '2018-09-03'),
(200, '::1', '', '', '', '2018-09-03'),
(201, '::1', '', '', '', '2018-09-03'),
(202, '::1', '', '', '', '2018-09-03'),
(203, '::1', '', '', '', '2018-09-03'),
(204, '::1', '', '', '', '2018-09-03'),
(205, '::1', '', '', '', '2018-09-03'),
(206, '::1', '', '', '', '2018-09-03'),
(207, '::1', '', '', '', '2018-09-03'),
(208, '::1', '', '', '', '2018-09-03'),
(209, '::1', '', '', '', '2018-09-03'),
(210, '::1', '', '', '', '2018-09-03'),
(211, '::1', '', '', '', '2018-09-03'),
(212, '::1', '', '', '', '2018-09-03'),
(213, '::1', '', '', '', '2018-09-03'),
(214, '::1', '', '', '', '2018-09-03'),
(215, '::1', '', '', '', '2018-09-03'),
(216, '::1', '', '', '', '2018-09-03'),
(217, '::1', '', '', '', '2018-09-03'),
(218, '::1', '', '', '', '2018-09-03'),
(219, '::1', '', '', '', '2018-09-03'),
(220, '::1', '', '', '', '2018-09-03'),
(221, '::1', '', '', '', '2018-09-03'),
(222, '::1', '', '', '', '2018-09-03'),
(223, '::1', '', '', '', '2018-09-03'),
(224, '::1', '', '', '', '2018-09-03'),
(225, '::1', '', '', '', '2018-09-03'),
(226, '::1', '', '', '', '2018-09-03'),
(227, '::1', '', '', '', '2018-09-03'),
(228, '::1', '', '', '', '2018-09-03'),
(229, '::1', '', '', '', '2018-09-03'),
(230, '::1', '', '', '', '2018-09-03'),
(231, '::1', '', '', '', '2018-09-03'),
(232, '::1', '', '', '', '2018-09-03'),
(233, '::1', '', '', '', '2018-09-03'),
(234, '::1', '', '', '', '2018-09-03'),
(235, '::1', '', '', '', '2018-09-03'),
(236, '::1', '', '', '', '2018-09-03'),
(237, '::1', '', '', '', '2018-09-03'),
(238, '::1', '', '', '', '2018-09-03'),
(239, '::1', '', '', '', '2018-09-03'),
(240, '::1', '', '', '', '2018-09-03'),
(241, '::1', '', '', '', '2018-09-03'),
(242, '::1', '', '', '', '2018-09-03'),
(243, '::1', '', '', '', '2018-09-03'),
(244, '::1', '', '', '', '2018-09-03'),
(245, '::1', '', '', '', '2018-09-03'),
(246, '::1', '', '', '', '2018-09-03'),
(247, '::1', '', '', '', '2018-09-03'),
(248, '::1', '', '', '', '2018-09-03'),
(249, '::1', '', '', '', '2018-09-03'),
(250, '::1', '', '', '', '2018-09-03'),
(251, '::1', '', '', '', '2018-09-03'),
(252, '::1', '', '', '', '2018-09-03'),
(253, '::1', '', '', '', '2018-09-03'),
(254, '::1', '', '', '', '2018-09-03'),
(255, '::1', '', '', '', '2018-09-03'),
(256, '::1', '', '', '', '2018-09-03'),
(257, '::1', '', '', '', '2018-09-03'),
(258, '::1', '', '', '', '2018-09-03'),
(259, '::1', '', '', '', '2018-09-03'),
(260, '::1', '', '', '', '2018-09-03'),
(261, '::1', '', '', '', '2018-09-03'),
(262, '::1', '', '', '', '2018-09-03'),
(263, '::1', '', '', '', '2018-09-03'),
(264, '::1', '', '', '', '2018-09-03'),
(265, '::1', '', '', '', '2018-09-03'),
(266, '::1', '', '', '', '2018-09-03'),
(267, '::1', '', '', '', '2018-09-03'),
(268, '::1', '', '', '', '2018-09-03'),
(269, '::1', '', '', '', '2018-09-03'),
(270, '::1', '', '', '', '2018-09-03'),
(271, '::1', '', '', '', '2018-09-03'),
(272, '::1', '', '', '', '2018-09-03'),
(273, '::1', '', '', '', '2018-09-03'),
(274, '::1', '', '', '', '2018-09-03'),
(275, '::1', '', '', '', '2018-09-03'),
(276, '::1', '', '', '', '2018-09-03'),
(277, '::1', '', '', '', '2018-09-03'),
(278, '::1', '', '', '', '2018-09-03'),
(279, '::1', '', '', '', '2018-09-03'),
(280, '::1', '', '', '', '2018-09-03'),
(281, '::1', '', '', '', '2018-09-03'),
(282, '::1', '', '', '', '2018-09-03'),
(283, '::1', '', '', '', '2018-09-03'),
(284, '::1', '', '', '', '2018-09-03'),
(285, '::1', '', '', '', '2018-09-03'),
(286, '::1', '', '', '', '2018-09-03'),
(287, '::1', '', '', '', '2018-09-03'),
(288, '::1', '', '', '', '2018-09-03'),
(289, '::1', '', '', '', '2018-09-03'),
(290, '::1', '', '', '', '2018-09-03'),
(291, '::1', '', '', '', '2018-09-03'),
(292, '::1', '', '', '', '2018-09-03'),
(293, '::1', '', '', '', '2018-09-03'),
(294, '::1', '', '', '', '2018-09-03'),
(295, '::1', '', '', '', '2018-09-03'),
(296, '::1', '', '', '', '2018-09-03'),
(297, '::1', '', '', '', '2018-09-03'),
(298, '::1', '', '', '', '2018-09-03'),
(299, '::1', '', '', '', '2018-09-03'),
(300, '::1', '', '', '', '2018-09-03'),
(301, '::1', '', '', '', '2018-09-03'),
(302, '::1', '', '', '', '2018-09-03'),
(303, '::1', '', '', '', '2018-09-03'),
(304, '::1', '', '', '', '2018-09-03'),
(305, '::1', '', '', '', '2018-09-03'),
(306, '::1', '', '', '', '2018-09-03'),
(307, '::1', '', '', '', '2018-09-03'),
(308, '::1', '', '', '', '2018-09-03'),
(309, '::1', '', '', '', '2018-09-03'),
(310, '::1', '', '', '', '2018-09-03'),
(311, '::1', '', '', '', '2018-09-03'),
(312, '::1', '', '', '', '2018-09-03'),
(313, '::1', '', '', '', '2018-09-03'),
(314, '::1', '', '', '', '2018-09-03'),
(315, '::1', '', '', '', '2018-09-03'),
(316, '::1', '', '', '', '2018-09-03'),
(317, '::1', '', '', '', '2018-09-03'),
(318, '::1', '', '', '', '2018-09-03'),
(319, '::1', '', '', '', '2018-09-03'),
(320, '::1', '', '', '', '2018-09-03'),
(321, '::1', '', '', '', '2018-09-03'),
(322, '::1', '', '', '', '2018-09-03'),
(323, '::1', '', '', '', '2018-09-03'),
(324, '::1', '', '', '', '2018-09-03'),
(325, '::1', '', '', '', '2018-09-03'),
(326, '::1', '', '', '', '2018-09-03'),
(327, '::1', '', '', '', '2018-09-03'),
(328, '::1', '', '', '', '2018-09-03'),
(329, '::1', '', '', '', '2018-09-03'),
(330, '::1', '', '', '', '2018-09-03'),
(331, '::1', '', '', '', '2018-09-03'),
(332, '::1', '', '', '', '2018-09-03'),
(333, '::1', '', '', '', '2018-09-03'),
(334, '::1', '', '', '', '2018-09-03'),
(335, '::1', '', '', '', '2018-09-03'),
(336, '::1', '', '', '', '2018-09-03'),
(337, '::1', '', '', '', '2018-09-03'),
(338, '::1', '', '', '', '2018-09-03'),
(339, '::1', '', '', '', '2018-09-03'),
(340, '::1', '', '', '', '2018-09-03'),
(341, '::1', '', '', '', '2018-09-03'),
(342, '::1', '', '', '', '2018-09-03'),
(343, '::1', '', '', '', '2018-09-03'),
(344, '::1', '', '', '', '2018-09-03'),
(345, '::1', '', '', '', '2018-09-03'),
(346, '::1', '', '', '', '2018-09-03'),
(347, '::1', '', '', '', '2018-09-03'),
(348, '::1', '', '', '', '2018-09-03'),
(349, '::1', '', '', '', '2018-09-03'),
(350, '::1', '', '', '', '2018-09-03'),
(351, '::1', '', '', '', '2018-09-03'),
(352, '::1', '', '', '', '2018-09-03'),
(353, '::1', '', '', '', '2018-09-03'),
(354, '::1', '', '', '', '2018-09-03'),
(355, '::1', '', '', '', '2018-09-03'),
(356, '::1', '', '', '', '2018-09-03'),
(357, '::1', '', '', '', '2018-09-03'),
(358, '::1', '', '', '', '2018-09-03'),
(359, '::1', '', '', '', '2018-09-03'),
(360, '::1', '', '', '', '2018-09-03'),
(361, '::1', '', '', '', '2018-09-03'),
(362, '::1', '', '', '', '2018-09-03'),
(363, '::1', '', '', '', '2018-09-03'),
(364, '::1', '', '', '', '2018-09-03'),
(365, '::1', '', '', '', '2018-09-03'),
(366, '::1', '', '', '', '2018-09-03'),
(367, '::1', '', '', '', '2018-09-03'),
(368, '::1', '', '', '', '2018-09-03'),
(369, '::1', '', '', '', '2018-09-03'),
(370, '::1', '', '', '', '2018-09-03'),
(371, '::1', '', '', '', '2018-09-03'),
(372, '::1', '', '', '', '2018-09-03'),
(373, '::1', '', '', '', '2018-09-03'),
(374, '::1', '', '', '', '2018-09-03'),
(375, '::1', '', '', '', '2018-09-03'),
(376, '::1', '', '', '', '2018-09-03'),
(377, '::1', '', '', '', '2018-09-03'),
(378, '::1', '', '', '', '2018-09-03'),
(379, '::1', '', '', '', '2018-09-03'),
(380, '::1', '', '', '', '2018-09-03'),
(381, '::1', '', '', '', '2018-09-03'),
(382, '::1', '', '', '', '2018-09-03'),
(383, '::1', '', '', '', '2018-09-03'),
(384, '::1', '', '', '', '2018-09-03'),
(385, '::1', '', '', '', '2018-09-03'),
(386, '::1', '', '', '', '2018-09-03'),
(387, '::1', '', '', '', '2018-09-03'),
(388, '::1', '', '', '', '2018-09-03'),
(389, '::1', '', '', '', '2018-09-03'),
(390, '::1', '', '', '', '2018-09-03'),
(391, '::1', '', '', '', '2018-09-03'),
(392, '::1', '', '', '', '2018-09-03'),
(393, '::1', '', '', '', '2018-09-03'),
(394, '::1', '', '', '', '2018-09-03'),
(395, '::1', '', '', '', '2018-09-03'),
(396, '::1', '', '', '', '2018-09-03'),
(397, '::1', '', '', '', '2018-09-03'),
(398, '::1', '', '', '', '2018-09-03'),
(399, '::1', '', '', '', '2018-09-03'),
(400, '::1', '', '', '', '2018-09-03'),
(401, '::1', '', '', '', '2018-09-03'),
(402, '::1', '', '', '', '2018-09-03'),
(403, '::1', '', '', '', '2018-09-03'),
(404, '::1', '', '', '', '2018-09-03'),
(405, '::1', '', '', '', '2018-09-03'),
(406, '::1', '', '', '', '2018-09-03'),
(407, '::1', '', '', '', '2018-09-03'),
(408, '::1', '', '', '', '2018-09-03'),
(409, '::1', '', '', '', '2018-09-03'),
(410, '::1', '', '', '', '2018-09-03'),
(411, '::1', '', '', '', '2018-09-03'),
(412, '::1', '', '', '', '2018-09-03'),
(413, '::1', '', '', '', '2018-09-03'),
(414, '::1', '', '', '', '2018-09-03'),
(415, '::1', '', '', '', '2018-09-03'),
(416, '::1', '', '', '', '2018-09-03'),
(417, '::1', '', '', '', '2018-09-03'),
(418, '::1', '', '', '', '2018-09-03'),
(419, '::1', '', '', '', '2018-09-03'),
(420, '::1', '', '', '', '2018-09-03'),
(421, '::1', '', '', '', '2018-09-03'),
(422, '::1', '', '', '', '2018-09-03'),
(423, '::1', '', '', '', '2018-09-03'),
(424, '::1', '', '', '', '2018-09-03'),
(425, '::1', '', '', '', '2018-09-03'),
(426, '::1', '', '', '', '2018-09-03'),
(427, '::1', '', '', '', '2018-09-03'),
(428, '::1', '', '', '', '2018-09-03'),
(429, '::1', '', '', '', '2018-09-03'),
(430, '::1', '', '', '', '2018-09-03'),
(431, '::1', '', '', '', '2018-09-03'),
(432, '::1', '', '', '', '2018-09-03'),
(433, '::1', '', '', '', '2018-09-03'),
(434, '::1', '', '', '', '2018-09-03'),
(435, '::1', '', '', '', '2018-09-03'),
(436, '::1', '', '', '', '2018-09-04'),
(437, '::1', '', '', '', '2018-09-04'),
(438, '::1', '', '', '', '2018-09-04'),
(439, '::1', '', '', '', '2018-09-04'),
(440, '::1', '', '', '', '2018-09-04'),
(441, '::1', '', '', '', '2018-09-04'),
(442, '::1', '', '', '', '2018-09-04'),
(443, '::1', '', '', '', '2018-09-04'),
(444, '::1', '', '', '', '2018-09-04'),
(445, '::1', '', '', '', '2018-09-04'),
(446, '::1', '', '', '', '2018-09-04'),
(447, '::1', '', '', '', '2018-09-04'),
(448, '::1', '', '', '', '2018-09-04'),
(449, '::1', '', '', '', '2018-09-04'),
(450, '::1', '', '', '', '2018-09-04'),
(451, '::1', '', '', '', '2018-09-04'),
(452, '::1', '', '', '', '2018-09-04'),
(453, '::1', '', '', '', '2018-09-04'),
(454, '::1', '', '', '', '2018-09-04'),
(455, '::1', '', '', '', '2018-09-04'),
(456, '::1', '', '', '', '2018-09-04'),
(457, '::1', '', '', '', '2018-09-04'),
(458, '::1', '', '', '', '2018-09-04'),
(459, '::1', '', '', '', '2018-09-04'),
(460, '::1', '', '', '', '2018-09-04'),
(461, '::1', '', '', '', '2018-09-04'),
(462, '::1', '', '', '', '2018-09-04'),
(463, '::1', '', '', '', '2018-09-04'),
(464, '::1', '', '', '', '2018-09-04'),
(465, '::1', '', '', '', '2018-09-04'),
(466, '::1', '', '', '', '2018-09-04'),
(467, '::1', '', '', '', '2018-09-04'),
(468, '::1', '', '', '', '2018-09-04'),
(469, '::1', '', '', '', '2018-09-04'),
(470, '::1', '', '', '', '2018-09-04'),
(471, '::1', '', '', '', '2018-09-04'),
(472, '::1', '', '', '', '2018-09-04'),
(473, '::1', '', '', '', '2018-09-04'),
(474, '::1', '', '', '', '2018-09-04'),
(475, '::1', '', '', '', '2018-09-04'),
(476, '::1', '', '', '', '2018-09-04'),
(477, '::1', '', '', '', '2018-09-04'),
(478, '::1', '', '', '', '2018-09-04'),
(479, '::1', '', '', '', '2018-09-04'),
(480, '::1', '', '', '', '2018-09-04'),
(481, '::1', '', '', '', '2018-09-04'),
(482, '::1', '', '', '', '2018-09-04'),
(483, '::1', '', '', '', '2018-09-04'),
(484, '::1', '', '', '', '2018-09-04'),
(485, '::1', '', '', '', '2018-09-04'),
(486, '::1', '', '', '', '2018-09-04'),
(487, '::1', '', '', '', '2018-09-04'),
(488, '::1', '', '', '', '2018-09-04'),
(489, '::1', '', '', '', '2018-09-04'),
(490, '::1', '', '', '', '2018-09-04'),
(491, '::1', '', '', '', '2018-09-04'),
(492, '::1', '', '', '', '2018-09-04'),
(493, '::1', '', '', '', '2018-09-04'),
(494, '::1', '', '', '', '2018-09-04'),
(495, '::1', '', '', '', '2018-09-04'),
(496, '::1', '', '', '', '2018-09-04'),
(497, '::1', '', '', '', '2018-09-04'),
(498, '::1', '', '', '', '2018-09-04'),
(499, '::1', '', '', '', '2018-09-04'),
(500, '::1', '', '', '', '2018-09-04'),
(501, '::1', '', '', '', '2018-09-04'),
(502, '::1', '', '', '', '2018-09-04'),
(503, '::1', '', '', '', '2018-09-04'),
(504, '::1', '', '', '', '2018-09-04'),
(505, '::1', '', '', '', '2018-09-04'),
(506, '::1', '', '', '', '2018-09-04'),
(507, '::1', '', '', '', '2018-09-04'),
(508, '::1', '', '', '', '2018-09-04'),
(509, '::1', '', '', '', '2018-09-04'),
(510, '::1', '', '', '', '2018-09-04'),
(511, '::1', '', '', '', '2018-09-04'),
(512, '::1', '', '', '', '2018-09-04'),
(513, '::1', '', '', '', '2018-09-04'),
(514, '::1', '', '', '', '2018-09-04'),
(515, '::1', '', '', '', '2018-09-04'),
(516, '::1', '', '', '', '2018-09-04'),
(517, '::1', '', '', '', '2018-09-04'),
(518, '::1', '', '', '', '2018-09-04'),
(519, '::1', '', '', '', '2018-09-04'),
(520, '::1', '', '', '', '2018-09-04'),
(521, '::1', '', '', '', '2018-09-04'),
(522, '::1', '', '', '', '2018-09-04'),
(523, '::1', '', '', '', '2018-09-04'),
(524, '::1', '', '', '', '2018-09-04'),
(525, '::1', '', '', '', '2018-09-04'),
(526, '::1', '', '', '', '2018-09-04'),
(527, '::1', '', '', '', '2018-09-04'),
(528, '::1', '', '', '', '2018-09-04'),
(529, '::1', '', '', '', '2018-09-04'),
(530, '::1', '', '', '', '2018-09-04'),
(531, '::1', '', '', '', '2018-09-04'),
(532, '::1', '', '', '', '2018-09-04'),
(533, '::1', '', '', '', '2018-09-04'),
(534, '::1', '', '', '', '2018-09-04'),
(535, '::1', '', '', '', '2018-09-04'),
(536, '::1', '', '', '', '2018-09-04'),
(537, '::1', '', '', '', '2018-09-04'),
(538, '::1', '', '', '', '2018-09-04'),
(539, '::1', '', '', '', '2018-09-04'),
(540, '::1', '', '', '', '2018-09-04'),
(541, '::1', '', '', '', '2018-09-04'),
(542, '::1', '', '', '', '2018-09-04'),
(543, '::1', '', '', '', '2018-09-04'),
(544, '::1', '', '', '', '2018-09-04'),
(545, '::1', '', '', '', '2018-09-04'),
(546, '::1', '', '', '', '2018-09-04'),
(547, '::1', '', '', '', '2018-09-04'),
(548, '::1', '', '', '', '2018-09-04'),
(549, '::1', '', '', '', '2018-09-04'),
(550, '::1', '', '', '', '2018-09-04'),
(551, '::1', '', '', '', '2018-09-04'),
(552, '::1', '', '', '', '2018-09-04'),
(553, '::1', '', '', '', '2018-09-04'),
(554, '::1', '', '', '', '2018-09-04'),
(555, '::1', '', '', '', '2018-09-04'),
(556, '::1', '', '', '', '2018-09-04'),
(557, '::1', '', '', '', '2018-09-04'),
(558, '::1', '', '', '', '2018-09-04'),
(559, '::1', '', '', '', '2018-09-04'),
(560, '::1', '', '', '', '2018-09-04'),
(561, '::1', '', '', '', '2018-09-04'),
(562, '::1', '', '', '', '2018-09-04'),
(563, '::1', '', '', '', '2018-09-04'),
(564, '::1', '', '', '', '2018-09-04'),
(565, '::1', '', '', '', '2018-09-04'),
(566, '::1', '', '', '', '2018-09-04'),
(567, '::1', '', '', '', '2018-09-04'),
(568, '::1', '', '', '', '2018-09-04'),
(569, '::1', '', '', '', '2018-09-04'),
(570, '::1', '', '', '', '2018-09-04'),
(571, '::1', '', '', '', '2018-09-04'),
(572, '::1', '', '', '', '2018-09-04'),
(573, '::1', '', '', '', '2018-09-04'),
(574, '::1', '', '', '', '2018-09-04'),
(575, '::1', '', '', '', '2018-09-04'),
(576, '::1', '', '', '', '2018-09-04'),
(577, '::1', '', '', '', '2018-09-04'),
(578, '::1', '', '', '', '2018-09-04'),
(579, '::1', '', '', '', '2018-09-04'),
(580, '::1', '', '', '', '2018-09-04'),
(581, '::1', '', '', '', '2018-09-04'),
(582, '::1', '', '', '', '2018-09-04'),
(583, '::1', '', '', '', '2018-09-04'),
(584, '::1', '', '', '', '2018-09-04'),
(585, '::1', '', '', '', '2018-09-04'),
(586, '::1', '', '', '', '2018-09-04'),
(587, '::1', '', '', '', '2018-09-05'),
(588, '::1', '', '', '', '2018-09-05'),
(589, '::1', '', '', '', '2018-09-05'),
(590, '::1', '', '', '', '2018-09-05'),
(591, '::1', '', '', '', '2018-09-06'),
(592, '::1', '', '', '', '2018-09-06'),
(593, '::1', '', '', '', '2018-09-06'),
(594, '::1', '', '', '', '2018-09-06'),
(595, '::1', '', '', '', '2018-09-06'),
(596, '::1', '', '', '', '2018-09-06'),
(597, '::1', '', '', '', '2018-09-06'),
(598, '::1', '', '', '', '2019-01-10'),
(599, '::1', '', '', '', '2019-01-10'),
(600, '::1', '', '', '', '2019-01-10'),
(601, '::1', '', '', '', '2019-01-10'),
(602, '::1', '', '', '', '2019-01-10'),
(603, '::1', '', '', '', '2019-01-10'),
(604, '::1', '', '', '', '2019-01-10'),
(605, '::1', '', '', '', '2019-01-10'),
(606, '::1', '', '', '', '2019-01-10'),
(607, '::1', '', '', '', '2019-01-10'),
(608, '::1', '', '', '', '2019-01-10'),
(609, '::1', '', '', '', '2019-01-10'),
(610, '::1', '', '', '', '2019-01-10'),
(611, '::1', '', '', '', '2019-01-10'),
(612, '::1', '', '', '', '2019-01-10'),
(613, '::1', '', '', '', '2019-01-10'),
(614, '::1', '', '', '', '2019-01-10'),
(615, '::1', '', '', '', '2019-01-10'),
(616, '::1', '', '', '', '2019-01-10'),
(617, '::1', '', '', '', '2019-01-10'),
(618, '::1', '', '', '', '2019-01-10'),
(619, '::1', '', '', '', '2019-01-10'),
(620, '::1', '', '', '', '2019-01-10'),
(621, '::1', '', '', '', '2019-01-10'),
(622, '::1', '', '', '', '2019-01-10'),
(623, '::1', '', '', '', '2019-01-10'),
(624, '::1', '', '', '', '2019-01-10'),
(625, '::1', '', '', '', '2019-01-10'),
(626, '::1', '', '', '', '2019-01-10'),
(627, '::1', '', '', '', '2019-01-10'),
(628, '::1', '', '', '', '2019-01-10'),
(629, '::1', '', '', '', '2019-01-10'),
(630, '::1', '', '', '', '2019-01-10'),
(631, '::1', '', '', '', '2019-01-10'),
(632, '::1', '', '', '', '2019-01-10'),
(633, '::1', '', '', '', '2019-01-10'),
(634, '::1', '', '', '', '2019-01-10'),
(635, '::1', '', '', '', '2019-01-10'),
(636, '::1', '', '', '', '2019-01-10'),
(637, '::1', '', '', '', '2019-01-10'),
(638, '::1', '', '', '', '2019-01-10'),
(639, '::1', '', '', '', '2019-01-10'),
(640, '::1', '', '', '', '2019-01-10'),
(641, '::1', '', '', '', '2019-01-10'),
(642, '::1', '', '', '', '2019-01-10'),
(643, '::1', '', '', '', '2019-01-10'),
(644, '::1', '', '', '', '2019-01-10'),
(645, '::1', '', '', '', '2019-01-10'),
(646, '::1', '', '', '', '2019-01-10'),
(647, '::1', '', '', '', '2019-01-10'),
(648, '::1', '', '', '', '2019-01-10'),
(649, '::1', '', '', '', '2019-01-10'),
(650, '::1', '', '', '', '2019-01-10'),
(651, '::1', '', '', '', '2019-01-10'),
(652, '::1', '', '', '', '2019-01-10'),
(653, '::1', '', '', '', '2019-01-10'),
(654, '::1', '', '', '', '2019-01-10'),
(655, '::1', '', '', '', '2019-01-10'),
(656, '::1', '', '', '', '2019-01-10'),
(657, '::1', '', '', '', '2019-01-10'),
(658, '::1', '', '', '', '2019-01-10'),
(659, '::1', '', '', '', '2019-01-10'),
(660, '::1', '', '', '', '2019-01-10'),
(661, '::1', '', '', '', '2019-01-10'),
(662, '::1', '', '', '', '2019-01-10'),
(663, '::1', '', '', '', '2019-01-10'),
(664, '::1', '', '', '', '2019-01-10'),
(665, '::1', '', '', '', '2019-01-10'),
(666, '::1', '', '', '', '2019-01-10'),
(667, '::1', '', '', '', '2019-01-10'),
(668, '::1', '', '', '', '2019-01-10'),
(669, '::1', '', '', '', '2019-01-10'),
(670, '::1', '', '', '', '2019-01-10'),
(671, '::1', '', '', '', '2019-01-10'),
(672, '::1', '', '', '', '2019-01-11'),
(673, '::1', '', '', '', '2019-01-11'),
(674, '::1', '', '', '', '2019-01-11'),
(675, '::1', '', '', '', '2019-01-11'),
(676, '::1', '', '', '', '2019-01-11'),
(677, '::1', '', '', '', '2019-01-11'),
(678, '::1', '', '', '', '2019-01-11'),
(679, '::1', '', '', '', '2019-01-11'),
(680, '::1', '', '', '', '2019-01-11'),
(681, '::1', '', '', '', '2019-01-11'),
(682, '::1', '', '', '', '2019-01-11'),
(683, '::1', '', '', '', '2019-01-11'),
(684, '::1', '', '', '', '2019-01-11'),
(685, '::1', '', '', '', '2019-01-11'),
(686, '::1', '', '', '', '2019-01-11'),
(687, '::1', '', '', '', '2019-01-11'),
(688, '::1', '', '', '', '2019-01-11'),
(689, '::1', '', '', '', '2019-01-11'),
(690, '::1', '', '', '', '2019-01-11'),
(691, '::1', '', '', '', '2019-01-11'),
(692, '::1', '', '', '', '2019-01-11'),
(693, '::1', '', '', '', '2019-01-11'),
(694, '::1', '', '', '', '2019-01-11'),
(695, '::1', '', '', '', '2019-01-11'),
(696, '::1', '', '', '', '2019-01-11'),
(697, '::1', '', '', '', '2019-01-11'),
(698, '::1', '', '', '', '2019-01-11'),
(699, '::1', '', '', '', '2019-01-11'),
(700, '::1', '', '', '', '2019-01-11'),
(701, '::1', '', '', '', '2019-01-11'),
(702, '::1', '', '', '', '2019-01-11'),
(703, '::1', '', '', '', '2019-01-11'),
(704, '::1', '', '', '', '2019-01-11'),
(705, '::1', '', '', '', '2019-01-11'),
(706, '::1', '', '', '', '2019-01-11'),
(707, '::1', '', '', '', '2019-01-11'),
(708, '::1', '', '', '', '2019-01-11'),
(709, '::1', '', '', '', '2019-01-11'),
(710, '::1', '', '', '', '2019-01-11'),
(711, '::1', '', '', '', '2019-01-11'),
(712, '::1', '', '', '', '2019-01-11'),
(713, '::1', '', '', '', '2019-01-11'),
(714, '::1', '', '', '', '2019-01-17'),
(715, '::1', '', '', '', '2019-01-17'),
(716, '::1', '', '', '', '2019-01-17'),
(717, '::1', '', '', '', '2019-01-17'),
(718, '::1', '', '', '', '2019-01-17'),
(719, '::1', '', '', '', '2019-01-17'),
(720, '::1', '', '', '', '2019-01-17'),
(721, '::1', '', '', '', '2019-01-17'),
(722, '::1', '', '', '', '2019-01-17'),
(723, '::1', '', '', '', '2019-01-17'),
(724, '::1', '', '', '', '2019-01-17'),
(725, '::1', '', '', '', '2019-01-17'),
(726, '::1', '', '', '', '2019-01-17'),
(727, '::1', '', '', '', '2019-01-17'),
(728, '::1', '', '', '', '2019-01-17'),
(729, '::1', '', '', '', '2019-02-16'),
(730, '::1', '', '', '', '2019-02-17'),
(731, '::1', '', '', '', '2019-02-17'),
(732, '::1', '', '', '', '2019-02-17'),
(733, '::1', '', '', '', '2019-08-12'),
(734, '::1', '', '', '', '2019-08-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `browser`
--
ALTER TABLE `browser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_page`
--
ALTER TABLE `front_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uniq_visitor`
--
ALTER TABLE `uniq_visitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `browser`
--
ALTER TABLE `browser`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=719;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `front_page`
--
ALTER TABLE `front_page`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(211) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uniq_visitor`
--
ALTER TABLE `uniq_visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=735;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
