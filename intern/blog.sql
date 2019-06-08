-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2019 at 08:11 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(7, 'c++', '2018-06-10 21:33:57', '2018-06-10 21:33:57'),
(9, 'php', '2018-06-10 23:13:52', '2018-06-10 23:13:52'),
(15, 'music', '2018-06-11 11:42:38', '2018-06-11 11:42:38'),
(16, 'entertainment', '2018-06-11 11:43:01', '2018-06-11 11:43:01'),
(17, 'blog', '2018-06-11 11:43:07', '2018-06-11 11:43:07'),
(18, 'how to', '2018-06-11 11:43:12', '2018-06-11 11:43:12'),
(19, 'start up', '2018-06-11 11:43:24', '2018-06-11 11:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comments`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 'Justin Bieber', '1', '11', '2018-06-10 13:11:02', '2018-06-10 13:11:02'),
(2, 'abcdfawfwq', '1', '12', '2018-06-11 01:03:32', '2018-06-11 01:03:32'),
(8, 'tesst', '1', '9', '2018-06-11 11:23:43', '2018-06-11 11:23:43'),
(11, '12@@###$$%$%$%$RDfrcfr', '1', '10', '2018-06-13 21:00:12', '2018-06-13 21:00:12'),
(12, 'thiss is test', '4', '12', '2018-07-05 02:08:19', '2018-07-05 02:08:19'),
(13, 'sđasa', '1', '90', '2019-05-31 07:55:17', '2019-05-31 07:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2018_06_05_173231_create_comments_table', 1),
(36, '0000_00_00_000000_create_taggable_table', 2),
(37, '2014_10_12_000000_create_users_table', 2),
(38, '2014_10_12_100000_create_password_resets_table', 2),
(39, '2018_05_07_062958_create_posts_table', 2),
(40, '2018_05_07_065734_create_topics_table', 2),
(41, '2018_05_07_083244_create_comments_table', 2),
(42, '2018_05_07_083804_create_tags_table', 2),
(43, '2018_05_07_084643_create_tags_posts_table', 2),
(44, '2018_06_10_171645_create_categories_table', 2),
(45, '2018_06_10_171941_add_category_id_to_posts', 2),
(46, '2018_06_14_033044_add_category_name_to_post', 3),
(47, '2018_06_25_061451_create_roles_permissions_tables', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `category_name` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `contents`, `picture`, `description`, `created_at`, `updated_at`, `category_id`, `category_name`) VALUES
(8, '1', 'Attention', '<p>&quot;<strong>Attention</strong>&quot; l&agrave; một b&agrave;i h&aacute;t của nam ca sĩ người Mỹ&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Charlie_Puth\">Charlie Puth</a>. B&agrave;i h&aacute;t được ph&aacute;t h&agrave;nh ng&agrave;y 21 th&aacute;ng 4 năm 2017 dưới dạng đĩa đơn mở đường cho album thứ hai chưa ra mắt của anh,&nbsp;<em>Voicenotes</em>&nbsp;(2018) bởi&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Atlantic_Records\">Atlantic Records</a>.&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Attention_(b%C3%A0i_h%C3%A1t_c%E1%BB%A7a_Charlie_Puth)#cite_note-2\">[2]</a>&nbsp;Đ&acirc;y l&agrave; một b&agrave;i h&aacute;t c&oacute; &acirc;m điệu&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Pop_rock\">pop rock</a>&nbsp;với ảnh hưởng từ nhạc&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Soul\">soul</a>&nbsp;v&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Funk\">funk</a>&nbsp;ở thập ni&ecirc;n 80&#39;. Đĩa đơn đ&atilde; lọt top 10 ở hơn 10 quốc gia, bao gồm cả Ph&aacute;p, Australia, New Zealand, Anh Quốc, Philippines v&agrave; Hoa Kỳ.</p>', '1528306318.png', '\"Attention\" - \"bài hát của mùa Hè\"', '2018-06-06 10:31:58', '2018-06-11 13:01:35', 17, NULL),
(9, '1', 'Havana', '<p>&quot;<strong>Havana</strong>&quot; l&agrave; một b&agrave;i h&aacute;t được thu &acirc;m bởi nữ ca sĩ người Mỹ gốc Cuba&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Camila_Cabello\">Camila Cabello</a>&nbsp;với sự g&oacute;p giọng của rapper&nbsp;<a href=\"https://vi.wikipedia.org/w/index.php?title=Young_Thug&amp;action=edit&amp;redlink=1\">Young Thug</a>. B&agrave;i h&aacute;t được ph&aacute;t h&agrave;nh ng&agrave;y 3 th&aacute;ng 8 năm 2017 dưới dạng một&nbsp;<a href=\"https://vi.wikipedia.org/wiki/%C4%90%C4%A9a_%C4%91%C6%A1n_qu%E1%BA%A3ng_b%C3%A1\">đĩa đơn quảng b&aacute;</a>&nbsp;cho album ph&ograve;ng thu đầu tay sắp ra mắt của c&ocirc;,&nbsp;<em><a href=\"https://vi.wikipedia.org/wiki/Camila_(album)\">Camila</a></em>&nbsp;(2018), c&ugrave;ng với &quot;<a href=\"https://vi.wikipedia.org/w/index.php?title=OMG_(b%C3%A0i_h%C3%A1t_c%E1%BB%A7a_Camila_Cabello)&amp;action=edit&amp;redlink=1\">OMG</a>&quot;.<a href=\"https://vi.wikipedia.org/wiki/Havana_(b%C3%A0i_h%C3%A1t_c%E1%BB%A7a_Camila_Cabello)#cite_note-1\">[1]</a>&nbsp;V&agrave;o ng&agrave;y 30 th&aacute;ng 8, qua Twitter, Cabello x&aacute;c nhận b&agrave;i h&aacute;t sẽ trở th&agrave;nh đĩa đơn ch&iacute;nh thức thứ hai từ album, được ph&aacute;t s&oacute;ng tr&ecirc;n c&aacute;c đ&agrave;i ph&aacute;t thanh v&agrave;o ng&agrave;y 8 th&aacute;ng 9. V&agrave;o ng&agrave;y 12 th&aacute;ng 11, một phi&ecirc;n bản phối lại của b&agrave;i h&aacute;t c&ugrave;ng&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Daddy_Yankee\">Daddy Yankee</a>&nbsp;đ&atilde; được ph&aacute;t h&agrave;nh. Trong đ&oacute;, phần đầu của b&agrave;i h&aacute;t được h&aacute;t bằng tiếng T&acirc;y Ban Nha v&agrave; Daddy Yankee thay thế phần của Young Thug.<a href=\"https://vi.wikipedia.org/wiki/Havana_(b%C3%A0i_h%C3%A1t_c%E1%BB%A7a_Camila_Cabello)#cite_note-2\">[2]</a></p>', '1528306509.jpg', '\"Havana\" là một bài hát được thu âm bởi nữ ca sĩ người Mỹ gốc Cuba Camila Cabello', '2018-06-06 10:35:09', '2018-06-06 10:35:09', 7, NULL),
(10, '1', 'Dusk Till Dawn', '<p>&quot;<strong>Dusk Till Dawn</strong>&quot; l&agrave; một b&agrave;i h&aacute;t của ca sĩ người Anh&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Zayn\">Zayn</a>&nbsp;v&agrave; c&oacute; sự g&oacute;p mặt của nữ ca sĩ, người viết b&agrave;i h&aacute;t người &Uacute;c&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Sia\">Sia</a>, được ph&aacute;t h&agrave;nh rộng r&atilde;i to&agrave;n cầu với vai tr&ograve; l&agrave; đĩa đơn đầu ti&ecirc;n tr&iacute;ch từ album ph&ograve;ng thu thứ hai sắp tới của anh v&agrave;o ng&agrave;y 7 th&aacute;ng 9 năm 2017.<a href=\"https://vi.wikipedia.org/wiki/Dusk_Till_Dawn_(b%C3%A0i_h%C3%A1t_c%E1%BB%A7a_Zayn)#cite_note-Renshaw-2\">[2]</a><a href=\"https://vi.wikipedia.org/wiki/Dusk_Till_Dawn_(b%C3%A0i_h%C3%A1t_c%E1%BB%A7a_Zayn)#cite_note-3\">[3]</a><a href=\"https://vi.wikipedia.org/wiki/Dusk_Till_Dawn_(b%C3%A0i_h%C3%A1t_c%E1%BB%A7a_Zayn)#cite_note-4\">[4]</a>&nbsp;Video &acirc;m nhạc đi c&ugrave;ng với đĩa đơn được ph&aacute;t h&agrave;nh v&agrave;o c&ugrave;ng ng&agrave;y, với sự g&oacute;p mặt của Zayn v&agrave; nữ diễn vi&ecirc;n người Mỹ gốc Anh&nbsp;<a href=\"https://vi.wikipedia.org/w/index.php?title=Jemima_Kirke&amp;action=edit&amp;redlink=1\">Jemima Kirke</a>.<a href=\"https://vi.wikipedia.org/wiki/Dusk_Till_Dawn_(b%C3%A0i_h%C3%A1t_c%E1%BB%A7a_Zayn)#cite_note-5\">[5]</a>&nbsp;B&agrave;i h&aacute;t đồng thời cũng được g&oacute;p mặt trong đoạn quảng c&aacute;o trailer ch&iacute;nh thức của bộ phim&nbsp;<em><a href=\"https://vi.wikipedia.org/w/index.php?title=The_Mountain_Between_Us_(phim)&amp;action=edit&amp;redlink=1\">The Mountain Between Us</a></em>.<a href=\"https://vi.wikipedia.org/wiki/Dusk_Till_Dawn_(b%C3%A0i_h%C3%A1t_c%E1%BB%A7a_Zayn)#cite_note-6\">[6]</a>&nbsp;Về phương diện thương mại, b&agrave;i h&aacute;t đứng đầu c&aacute;c bảng xếp hạng của bảy quốc gia v&agrave; vươn l&ecirc;n lọt v&agrave;o top 10 của hơn hai mươi nước, trong đ&oacute; bao gồm &Uacute;c, Canada, Ph&aacute;p, Đức v&agrave; Anh Quốc.</p>', '1528306611.jpg', 'Đây là nơi tôi khởi đầu và nó rõ rằng sẽ vẫn còn ở đó', '2018-06-06 10:36:51', '2018-06-06 10:36:51', 9, NULL),
(12, '1', 'Em của ngày hôm qua', '<p><strong>&quot;Em của ng&agrave;y h&ocirc;m qua</strong>&quot; l&agrave; một ca kh&uacute;c theo điệu&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ballad\">Ballad</a>&nbsp;được s&aacute;ng t&aacute;c v&agrave; tr&igrave;nh b&agrave;y bởi nghệ sĩ thu &acirc;m&nbsp;<a href=\"https://vi.wikipedia.org/wiki/S%C6%A1n_T%C3%B9ng_M-TP\">Sơn T&ugrave;ng M-TP</a>, được ph&aacute;t h&agrave;nh trực tuyến ng&agrave;y 15 th&aacute;ng 12 năm 2013, nhưng được s&aacute;ng t&aacute;c hơn một năm trước khi ph&aacute;t h&agrave;nh.</p>\r\n\r\n<p>Sau khi ph&aacute;t h&agrave;nh, ca kh&uacute;c n&agrave;y đ&atilde; trở th&agrave;nh một hiện tượng của &acirc;m nhạc Việt Nam. Video của b&agrave;i h&aacute;t tr&ecirc;n&nbsp;<a href=\"https://vi.wikipedia.org/wiki/YouTube\">YouTube</a>&nbsp;trở th&agrave;nh video&nbsp;<a href=\"https://vi.wikipedia.org/wiki/V-pop\">V-pop</a>&nbsp;tr&ecirc;n YouTube nhiều lượt xem với hơn 74,82 triệu lượt xem. Ca kh&uacute;c n&agrave;y sau đ&oacute; bị tranh c&atilde;i l&agrave; đạo nhạc do s&aacute;ng t&aacute;c dựa tr&ecirc;n nền nhạc của &quot;<a href=\"https://vi.wikipedia.org/wiki/Every_Night_(b%C3%A0i_h%C3%A1t_c%E1%BB%A7a_EXID)\">Every Night</a>&quot; do nh&oacute;m nhạc&nbsp;<a href=\"https://vi.wikipedia.org/wiki/EXID\">EXID</a>&nbsp;tr&igrave;nh b&agrave;y trước đ&oacute;. Tuy kh&ocirc;ng thu lại&nbsp;<em><a href=\"https://vi.wikipedia.org/wiki/B%C3%A0i_h%C3%A1t_y%C3%AAu_th%C3%ADch\">B&agrave;i h&aacute;t y&ecirc;u th&iacute;ch</a></em>&nbsp;của Sơn T&ugrave;ng, nhưng ca kh&uacute;c n&agrave;y đ&atilde; bị loại bỏ ra khỏi c&aacute;c bảng xếp hạng.</p>', '1528306991.png', '\"Em của ngày hôm qua\" đã trở thành \"cơn sốt\" thu hút nhiều bản cover', '2018-06-06 10:43:11', '2018-06-11 07:46:32', 7, NULL),
(90, '1', 'Attention', '<p>&quot;<strong>Attention</strong>&quot; l&agrave; một b&agrave;i h&aacute;t của nam ca sĩ người Mỹ&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Charlie_Puth\">Charlie Puth</a>. B&agrave;i h&aacute;t được ph&aacute;t h&agrave;nh ng&agrave;y 21 th&aacute;ng 4 năm 2017 dưới dạng đĩa đơn mở đường cho album thứ hai chưa ra mắt của anh,&nbsp;<em>Voicenotes</em>&nbsp;(2018) bởi&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Atlantic_Records\">Atlantic Records</a>.&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Attention_(b%C3%A0i_h%C3%A1t_c%E1%BB%A7a_Charlie_Puth)#cite_note-2\">[2]</a>&nbsp;Đ&acirc;y l&agrave; một b&agrave;i h&aacute;t c&oacute; &acirc;m điệu&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Pop_rock\">pop rock</a>&nbsp;với ảnh hưởng từ nhạc&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Soul\">soul</a>&nbsp;v&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Funk\">funk</a>&nbsp;ở thập ni&ecirc;n 80&#39;. Đĩa đơn đ&atilde; lọt top 10 ở hơn 10 quốc gia, bao gồm cả Ph&aacute;p, Australia, New Zealand, Anh Quốc, Philippines v&agrave; Hoa Kỳ.</p>', '1528142158.jpg', '\"Attention\" - \"bài hát của mùa Hè\"', '2018-07-28 21:58:17', '2018-07-28 21:58:17', NULL, NULL),
(105, '1', 'Attention', 'tttttttttttttttttt', '1528306318.png', '\"Attention\" - \"bài hát của mùa Hè\"', '2018-07-29 21:11:04', '2018-07-29 21:11:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_permission`
--

CREATE TABLE `role_permission` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taggable_taggables`
--

CREATE TABLE `taggable_taggables` (
  `tag_id` int(10) UNSIGNED NOT NULL,
  `taggable_id` int(10) UNSIGNED NOT NULL,
  `taggable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taggable_taggables`
--

INSERT INTO `taggable_taggables` (`tag_id`, `taggable_id`, `taggable_type`, `created_at`, `updated_at`) VALUES
(1, 22, 'App\\Post', '2018-06-10 22:02:22', '2018-06-10 22:02:22'),
(1, 23, 'App\\Post', '2018-06-11 01:52:38', '2018-06-11 01:52:38'),
(2, 24, 'App\\Post', '2018-06-11 02:08:58', '2018-06-11 02:08:58'),
(1, 12, 'App\\Post', '2018-06-11 07:46:32', '2018-06-11 07:46:32'),
(1, 8, 'App\\Post', '2018-06-11 13:01:35', '2018-06-11 13:01:35'),
(1, 14, 'App\\Post', '2018-06-13 20:46:02', '2018-06-13 20:46:02'),
(3, 15, 'App\\Post', '2018-06-13 21:07:56', '2018-06-13 21:07:56'),
(1, 13, 'App\\Post', '2018-07-05 02:11:24', '2018-07-05 02:11:24'),
(4, 13, 'App\\Post', '2018-07-05 02:11:24', '2018-07-05 02:11:24'),
(5, 13, 'App\\Post', '2018-07-05 02:11:24', '2018-07-05 02:11:24'),
(6, 13, 'App\\Post', '2018-07-05 02:11:24', '2018-07-05 02:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `taggable_tags`
--

CREATE TABLE `taggable_tags` (
  `tag_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `normalized` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taggable_tags`
--

INSERT INTO `taggable_tags` (`tag_id`, `name`, `normalized`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', '2018-06-10 21:51:49', '2018-06-10 21:51:49'),
(2, 'new', 'new', '2018-06-11 02:08:58', '2018-06-11 02:08:58'),
(3, '1212121', '1212121', '2018-06-13 21:07:56', '2018-06-13 21:07:56'),
(4, 'abc', 'abc', '2018-07-05 02:10:23', '2018-07-05 02:10:23'),
(5, 'hshs', 'hshs', '2018-07-05 02:10:23', '2018-07-05 02:10:23'),
(6, 'img', 'img', '2018-07-05 02:11:24', '2018-07-05 02:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `avatar`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'hoai', 'hoai12@gmail.com', '$2y$10$w5ndiJHm6a0urdlR6N1W2ucLcF7vTe8BBeb/3NPzfsb1Xy5yd1O7e', '3', '1528656792.jpg', '2018-06-06 01:50:02', '2018-06-10 11:53:12', '0i6NPWidB2dVl0HNi9lEJNuXf747GgMPLIg5UZ8OnPyON9SXk4Id8pvO731y'),
(2, 'Quang', 'Quang12@gmail.com', '$2y$10$HyF2WTO70OMo1IliXGY1sug5mNjntyDPBZO/KMBhcN2HYj9dx5GGy', '3', 'default.png', '2018-06-10 13:11:56', '2018-06-10 13:11:56', 'WCHBDfhpJrbn6wOhMOiJssWTdoFDu6wnjzuoGJTARpjnL4maZKwvmLyB57Y2'),
(3, 'abc', 'duyquang26103@gmail.com', '$2y$10$Tw9B69maFiZrt6XRUY9frOfhulPlqOpni49mmJ71HRdilLDOzgGnS', '1', 'default.png', '2018-07-04 23:54:55', '2018-07-04 23:54:55', '1tOpBWqJsZz73j7lW7o9plTrQ4GpJzlaxquNCoaDykv3NJaqVgRdoTjs7lgm'),
(4, 'Hoài', 'hoai@gmail.com', '$2y$10$KQuenjUu0iVxz.ZEf6AlYuLw.qTa7BcnlH7uVrPuEQsscjzLJj0qS', '1', 'default.png', '2019-05-31 07:38:22', '2019-05-31 07:38:22', 'tVd0N09XPIdoPCYaboJ5cOhUhykPDDLt1kBUA6xzwpNUNTdMJXVh9jofm72P');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permission`
--
ALTER TABLE `role_permission`
  ADD PRIMARY KEY (`role_id`,`permission_id`),
  ADD KEY `role_permission_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `taggable_taggables`
--
ALTER TABLE `taggable_taggables`
  ADD KEY `i_taggable_fwd` (`tag_id`,`taggable_id`),
  ADD KEY `i_taggable_rev` (`taggable_id`,`tag_id`),
  ADD KEY `i_taggable_type` (`taggable_type`);

--
-- Indexes for table `taggable_tags`
--
ALTER TABLE `taggable_tags`
  ADD PRIMARY KEY (`tag_id`),
  ADD KEY `taggable_tags_normalized_index` (`normalized`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taggable_tags`
--
ALTER TABLE `taggable_tags`
  MODIFY `tag_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_permission`
--
ALTER TABLE `role_permission`
  ADD CONSTRAINT `role_permission_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_permission_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
