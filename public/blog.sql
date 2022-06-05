-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table laravel_cms.about_u_s
CREATE TABLE IF NOT EXISTS `about_u_s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `logo_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_white` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta_header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `video_intro` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bo_cong_thuong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.about_u_s: ~1 rows (approximately)
/*!40000 ALTER TABLE `about_u_s` DISABLE KEYS */;
INSERT INTO `about_u_s` (`id`, `logo_admin`, `logo`, `logo_white`, `favicon`, `thumbnail`, `company`, `tax_code`, `email`, `address`, `phone`, `fax`, `description`, `meta_header`, `meta_keywords`, `meta_description`, `video_intro`, `facebook`, `twitter`, `youtube`, `tiktok`, `instagram`, `bo_cong_thuong`, `created_by`, `created_at`, `updated_at`) VALUES
	(1, '/userfiles/images/Logo/logo.png', '/userfiles/images/Logo/logo2stay1.png', '/userfiles/images/Logo/logo2stay.png', '/userfiles/images/Logo/favicon.png', '/userfiles/images/skide/marina-lobato-kG7pOXbBfNs-unsplash.jpg', '2stay - Du lịch thông minh với một ứng dụng duy nhất', NULL, 'info@2stay.vn', 'Tầng 2, Tổ hợp TMDV và nhà ở The Pride - KĐTM An Hưng Q. Hà Đông - TP. Hà Nội', '0567288999 - 19002167', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/?lang=vi', 'https://www.youtube.com/', 'https://www.tiktok.com/vi-VN/', 'https://www.instagram.com/', NULL, NULL, NULL, '2022-06-05 14:37:39');
/*!40000 ALTER TABLE `about_u_s` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.banners
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `banners_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.banners: ~2 rows (approximately)
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` (`id`, `name`, `key`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
	(1, 'Banner trang chủ', 'banner-home', 1, 1, '2022-05-21 11:02:15', '2022-05-21 11:02:15'),
	(2, 'Banner trang danh sách', 'banner-list-page', 1, 1, '2022-06-05 15:38:20', '2022-06-05 15:38:20');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.banner_details
CREATE TABLE IF NOT EXISTS `banner_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` int(10) unsigned NOT NULL,
  `banner_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.banner_details: ~3 rows (approximately)
/*!40000 ALTER TABLE `banner_details` DISABLE KEYS */;
INSERT INTO `banner_details` (`id`, `name`, `image`, `url`, `status`, `created_by`, `banner_id`, `created_at`, `updated_at`) VALUES
	(2, 'Banner', '/userfiles/images/banner/Capture.JPG', 'https://www.2stay.vn/', 1, 1, 1, '2022-06-04 11:32:47', '2022-06-04 11:41:58'),
	(3, 'banner_1', '/userfiles/images/banner/Capture.JPG', NULL, 1, 1, 2, '2022-06-05 15:38:41', '2022-06-05 15:38:41'),
	(4, 'banner_2', '/userfiles/images/banner/Capture.JPG', NULL, 0, 1, 2, '2022-06-05 15:38:53', '2022-06-05 15:41:18');
/*!40000 ALTER TABLE `banner_details` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int(11) DEFAULT NULL,
  `serial` tinyint(4) DEFAULT NULL,
  `type` enum('posts','product','policy','contact','tutorial','introduce') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'posts',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `featured` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.categories: ~5 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `slug`, `avatar`, `description`, `content`, `parent_id`, `serial`, `type`, `status`, `featured`, `created_by`, `created_at`, `updated_at`) VALUES
	(1, 'Khám phá điểm đến', 'kham-pha-diem-den', '/userfiles/images/skide/marina-lobato-kG7pOXbBfNs-unsplash.jpg', NULL, NULL, NULL, NULL, 'posts', 1, 1, 1, '2022-05-19 10:57:39', '2022-06-05 15:14:19'),
	(2, 'Khám phá ẩm thực', 'kham-pha-am-thuc', '/userfiles/images/skide/thanh-soledas-XGuZ4HlC5qU-unsplash.jpg', NULL, NULL, NULL, NULL, 'posts', 1, 1, 1, '2022-05-19 10:58:07', '2022-06-05 15:16:16'),
	(3, 'Văn Hóa - Lễ Hội', 'van-hoa-le-hoi', '/userfiles/images/skide/nhahang.jpg', NULL, NULL, NULL, NULL, 'posts', 1, 1, 1, '2022-05-19 10:58:24', '2022-06-05 15:21:51'),
	(4, 'Người trong muôn nghề', 'nguoi-trong-muon-nghe', '/userfiles/images/skide/nhahang.jpg', NULL, NULL, NULL, NULL, 'posts', 1, 1, 1, '2022-06-05 15:13:18', '2022-06-05 15:21:42'),
	(5, 'Tin tức', 'tin-tuc', '/userfiles/images/skide/nhahang.jpg', NULL, NULL, NULL, NULL, 'posts', 1, 1, 1, '2022-06-05 15:13:31', '2022-06-05 15:21:29');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.category_post
CREATE TABLE IF NOT EXISTS `category_post` (
  `category_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.category_post: ~15 rows (approximately)
/*!40000 ALTER TABLE `category_post` DISABLE KEYS */;
INSERT INTO `category_post` (`category_id`, `post_id`, `created_at`, `updated_at`) VALUES
	(2, 3, NULL, NULL),
	(1, 3, NULL, NULL),
	(2, 4, NULL, NULL),
	(1, 4, NULL, NULL),
	(3, 9, NULL, NULL),
	(2, 9, NULL, NULL),
	(3, 11, NULL, NULL),
	(2, 11, NULL, NULL),
	(1, 13, NULL, NULL),
	(1, 14, NULL, NULL),
	(3, 15, NULL, NULL),
	(3, 16, NULL, NULL),
	(2, 16, NULL, NULL),
	(2, 14, NULL, NULL),
	(3, 19, NULL, NULL);
/*!40000 ALTER TABLE `category_post` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('YES','NO') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'YES',
  `post_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.comments: ~2 rows (approximately)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `name`, `email`, `phone`, `content`, `status`, `post_id`, `created_at`, `updated_at`) VALUES
	(1, 'Nguyễn Văn Thỏa', 'vanthoa225@gmail.com', '0356240993', 'Thật là chất lượng. Tôi rất hài lòng', 'YES', 15, '2022-05-20 14:48:12', '2022-05-20 14:48:13'),
	(2, 'Doãn Viết Hạnh', 'hanh@gmail.com', '0356250994', 'Ngôi sao nào của U23 Việt Nam bất ngờ phải kiểm tra doping ở bán kết?', 'YES', 15, '2022-05-20 14:57:27', '2022-05-20 14:57:28');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.contacts: ~0 rows (approximately)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.destinations
CREATE TABLE IF NOT EXISTS `destinations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `featured` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `destinations_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.destinations: ~3 rows (approximately)
/*!40000 ALTER TABLE `destinations` DISABLE KEYS */;
INSERT INTO `destinations` (`id`, `name`, `slug`, `avatar`, `description`, `status`, `featured`, `created_by`, `created_at`, `updated_at`) VALUES
	(1, 'TP. Hà Nội', 'tp-ha-noi', '/userfiles/images/Logo/Ho-Guom.jpg', NULL, 1, 1, 1, '2022-05-19 11:07:32', '2022-06-04 08:58:26'),
	(2, 'Đà Nẵng', 'da-nang', '/userfiles/images/Logo/dg_200827_CAU%20RONG%20VE%20DEM_1.jpg', NULL, 1, 1, 1, '2022-05-19 13:54:53', '2022-05-19 14:08:29'),
	(3, 'Hội An', 'hoi-an', '/userfiles/images/skide/thanh-soledas-XGuZ4HlC5qU-unsplash.jpg', NULL, 1, 1, 1, '2022-06-04 09:23:03', '2022-06-04 09:23:03');
/*!40000 ALTER TABLE `destinations` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.destination_post
CREATE TABLE IF NOT EXISTS `destination_post` (
  `destination_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.destination_post: ~12 rows (approximately)
/*!40000 ALTER TABLE `destination_post` DISABLE KEYS */;
INSERT INTO `destination_post` (`destination_id`, `post_id`, `created_at`, `updated_at`) VALUES
	(2, 3, NULL, NULL),
	(1, 3, NULL, NULL),
	(2, 4, NULL, NULL),
	(2, 9, NULL, NULL),
	(1, 9, NULL, NULL),
	(2, 11, NULL, NULL),
	(1, 11, NULL, NULL),
	(1, 13, NULL, NULL),
	(1, 14, NULL, NULL),
	(1, 15, NULL, NULL),
	(2, 16, NULL, NULL),
	(2, 19, NULL, NULL);
/*!40000 ALTER TABLE `destination_post` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` int(10) unsigned DEFAULT NULL,
  `province_id` int(10) unsigned DEFAULT NULL,
  `district_id` int(10) unsigned DEFAULT NULL,
  `ward_id` int(10) unsigned DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_email_unique` (`email`),
  UNIQUE KEY `employees_phone_unique` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.employees: ~2 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `name`, `username`, `avatar`, `phone`, `email`, `address`, `email_verified_at`, `password`, `status`, `is_admin`, `created_by`, `province_id`, `district_id`, `ward_id`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Super Admin', 'super_admin', NULL, NULL, 'super_admin@gmail.com', NULL, NULL, '$2y$10$TcJETq5XRcgulsbcOgtTuOAfZ.TQBs4JsB7ot3sGbEPcoz1PPzzp.', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 'Nguyễn Văn Thỏa', 'thoanv', '/userfiles/images/Logo/logo_new_2.png', '0356240993', 'thoanv@haiphatland.com.vn', NULL, NULL, '$2y$10$76lA/h7qjHJuMsPIk4.K0OvgANAzaH9OFCTHtqzO5OqQL3oATEvH2', 1, 0, NULL, NULL, NULL, NULL, NULL, '2022-05-19 10:43:40', '2022-05-21 10:26:28');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) unsigned DEFAULT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.images: ~0 rows (approximately)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_id_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `stt` int(11) NOT NULL DEFAULT '0',
  `created_by` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.menus: ~1 rows (approximately)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `name`, `key`, `list_id_category`, `data`, `status`, `stt`, `created_by`, `created_at`, `updated_at`) VALUES
	(1, 'Menu headers', 'menu-header', '1,2,3,', 'a:4:{i:0;a:4:{s:4:"slug";s:17:"kham-pha-diem-den";s:3:"url";s:0:"";s:4:"name";s:29:"Khám phá điểm đến";s:2:"id";i:1;}i:1;a:4:{s:4:"slug";s:16:"kham-pha-am-thuc";s:3:"url";s:0:"";s:4:"name";s:26:"Khám phá ẩm thực";s:2:"id";i:2;}i:2;a:4:{s:4:"slug";s:14:"van-hoa-le-hoi";s:3:"url";s:0:"";s:4:"name";s:25:"Văn Hóa - Lễ Hội";s:2:"id";i:3;}i:3;a:3:{s:4:"name";s:5:"2stay";s:2:"id";s:2:"c1";s:3:"url";s:26:"http://2stay.vn/?task=stay";}}', 1, 0, 1, '2022-05-26 09:03:17', '2022-06-04 12:11:07');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.migrations: ~23 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2021_04_20_012844_create_roles_table', 1),
	(5, '2021_04_20_012901_create_role_employees_table', 1),
	(6, '2021_04_20_034940_create_permissions_table', 1),
	(7, '2021_04_20_035048_create_permission_role_table', 1),
	(8, '2021_04_20_091128_create_type_permissions_table', 1),
	(9, '2022_03_11_041748_create_contacts_table', 1),
	(10, '2022_03_11_042957_create_categories_table', 1),
	(11, '2022_03_11_084556_create_images_table', 1),
	(12, '2022_03_22_153922_create_about_u_s_table', 1),
	(15, '2022_05_17_171230_create_destinations_table', 1),
	(16, '2022_05_19_094549_create_slides_table', 1),
	(17, '2022_05_19_094759_create_banners_table', 1),
	(19, '2022_05_12_095645_create_employees_table', 2),
	(21, '2022_05_19_141940_create_category_posts_table', 3),
	(22, '2022_05_19_142759_create_destination_posts_table', 4),
	(23, '2022_05_19_154532_create_post_histories_table', 5),
	(24, '2022_05_17_171057_create_posts_table', 6),
	(26, '2022_05_13_020924_create_comments_table', 7),
	(27, '2022_05_19_094845_create_banner_details_table', 8),
	(28, '2022_05_26_081443_create_menus_table', 9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` int(10) unsigned NOT NULL,
  `type_permission_id` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`),
  UNIQUE KEY `permissions_key_unique` (`key`),
  KEY `permissions_status_index` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.permissions: ~28 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `key`, `employee_id`, `type_permission_id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Danh sách nhân viên', 'employees-views', 1, 1, 1, NULL, '2022-05-19 10:45:28', '2022-05-19 10:45:28'),
	(2, 'Thêm mới nhân viên', 'employees-add', 1, 1, 1, NULL, '2022-05-19 10:45:49', '2022-05-19 10:45:49'),
	(3, 'Cập nhật thông tin nhân viên', 'employees-edit', 1, 1, 1, NULL, '2022-05-19 10:46:19', '2022-05-19 10:46:19'),
	(4, 'Xóa nhân viên', 'employees-delete', 1, 1, 1, NULL, '2022-05-19 10:46:46', '2022-05-19 10:46:46'),
	(5, 'Danh sách danh mục', 'category-views', 1, 4, 1, NULL, '2022-05-19 10:49:53', '2022-05-19 10:49:53'),
	(6, 'Thêm mới danh mục', 'category-add', 1, 4, 1, NULL, '2022-05-19 10:50:17', '2022-05-19 10:50:17'),
	(7, 'Cập nhật danh mục', 'category-edit', 1, 4, 1, NULL, '2022-05-19 10:50:39', '2022-05-19 10:50:41'),
	(8, 'Xóa danh mục', 'category-delete', 1, 4, 1, NULL, '2022-05-19 10:51:46', '2022-05-19 10:51:47'),
	(9, 'Danh sách quyền', 'permission-views', 1, 3, 1, NULL, '2022-05-19 10:52:52', '2022-05-19 10:52:52'),
	(10, 'Thêm quyền', 'permission-add', 1, 3, 1, NULL, '2022-05-19 10:53:19', '2022-05-19 10:53:19'),
	(11, 'Cập nhật quyền', 'permission-edit', 1, 3, 1, NULL, '2022-05-19 10:53:33', '2022-05-19 10:53:33'),
	(12, 'Cập nhật thông tin chung', 'aboutUs-edit', 1, 2, 1, NULL, '2022-05-19 10:54:04', '2022-05-19 10:54:04'),
	(13, 'Danh sách tin tức của tôi', 'post-views', 1, 5, 1, NULL, '2022-05-20 09:02:44', '2022-05-20 09:02:44'),
	(14, 'Cập nhật tin tức', 'post-edit', 1, 5, 1, NULL, '2022-05-20 09:03:14', '2022-05-20 09:03:15'),
	(15, 'Thêm mới tin tức', 'post-add', 1, 5, 1, NULL, '2022-05-20 09:03:30', '2022-05-20 09:03:30'),
	(16, 'Xuất bản tin tức', 'post-pending', 1, 5, 1, NULL, '2022-05-20 09:03:54', '2022-05-20 09:03:54'),
	(17, 'Xóa tin tức', 'post-delete', 1, 5, 1, NULL, '2022-05-20 09:04:31', '2022-05-20 09:04:31'),
	(18, 'Tin tức đã xuất bản', 'post-published', 1, 5, 1, NULL, '2022-05-20 10:20:27', '2022-05-20 10:20:27'),
	(19, 'Tin tức không xuất bản', 'post-unpublished', 1, 5, 1, NULL, '2022-05-20 10:20:46', '2022-05-20 10:20:46'),
	(20, 'Xem chi tiết tin tức', 'post-view-detail', 1, 5, 1, NULL, '2022-05-20 14:05:35', '2022-05-20 14:05:35'),
	(21, 'Danh sách slides', 'slide-views', 1, 6, 1, NULL, '2022-05-21 10:40:52', '2022-05-21 10:40:52'),
	(22, 'Thêm mới slides', 'slide-add', 1, 6, 1, NULL, '2022-05-21 10:41:17', '2022-05-21 10:41:17'),
	(23, 'Cập nhật Slides', 'slide-edit', 1, 6, 1, NULL, '2022-05-21 10:41:37', '2022-05-21 10:41:37'),
	(24, 'Xóa slides', 'slide-delete', 1, 6, 1, NULL, '2022-05-21 10:41:52', '2022-05-21 10:41:52'),
	(25, 'Danh sách banner', 'banner-views', 1, 7, 1, NULL, '2022-05-21 10:42:15', '2022-05-21 10:42:15'),
	(26, 'Thêm mới banner', 'banner-add', 1, 7, 1, NULL, '2022-05-21 10:42:29', '2022-05-21 10:42:29'),
	(27, 'Cập nhập banner', 'banner-edit', 1, 7, 1, NULL, '2022-05-21 10:42:48', '2022-05-21 10:42:48'),
	(28, 'Xóa banner', 'banner-delete', 1, 7, 1, NULL, '2022-05-21 10:43:03', '2022-05-21 10:43:03');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.permission_role
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.permission_role: ~10 rows (approximately)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` (`permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
	(1, 1, NULL, NULL),
	(12, 1, NULL, NULL),
	(13, 1, NULL, NULL),
	(14, 1, NULL, NULL),
	(15, 1, NULL, NULL),
	(17, 1, NULL, NULL),
	(21, 1, NULL, NULL),
	(22, 1, NULL, NULL),
	(23, 1, NULL, NULL),
	(24, 1, NULL, NULL);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `view` int(11) NOT NULL DEFAULT '0',
  `start` tinyint(4) NOT NULL DEFAULT '0',
  `published` enum('draft','unpublished','published','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `featured` enum('YES','NO') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NO',
  `status` enum('YES','NO') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'YES',
  `time_published` datetime DEFAULT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.posts: ~9 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `name`, `slug`, `avatar`, `description`, `content`, `view`, `start`, `published`, `featured`, `status`, `time_published`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 'Phổ cổ Hội An - Thành phố đẹp đầu Châu Á', 'pho-co-hoi-an-thanh-pho-dep-dau-chau-a', '/userfiles/images/Logo/dg_200827_CAU%20RONG%20VE%20DEM_1.jpg', 'Bóng đá Việt Nam cách "cú ăn 4" huy hoàng SEA Games 31 mấy trận nữa?', '<p>Đo&agrave;n thể thao Việt Nam chắc chắn sẽ c&aacute;n đ&iacute;ch ở vị tr&iacute; số 1 tr&ecirc;n bảng tổng sắp huy chương&nbsp;<a href="https://www.24h.com.vn/sea-games-31-c689.html" title="SEA Games 31">SEA Games 31</a>&nbsp;khi bỏ lại c&aacute;c đối thủ ph&iacute;a sau với khoảng c&aacute;ch kh&aacute; xa. Nhưng trong t&acirc;m tr&iacute; hầu hết người h&acirc;m mộ cả nước, một kỳ SEA Games th&agrave;nh c&ocirc;ng thực sự mỹ m&atilde;n chỉ khi b&oacute;ng đ&aacute; nam mang về tấm huy chương v&agrave;ng.</p>', 122, 0, 'pending', 'NO', 'YES', NULL, 1, NULL, '2022-05-19 15:55:57', '2022-05-19 15:55:57'),
	(3, 'Phổ cổ Hội An - Thành phố đẹp đầu Châu Á Á', 'pho-co-hoi-an-thanh-pho-dep-dau-chau-a-a-3', '/userfiles/images/Logo/dg_200827_CAU%20RONG%20VE%20DEM_1.jpg', 'Bóng đá Việt Nam cách "cú ăn 4" huy hoàng SEA Games 31 mấy trận nữa?', '<p>Đo&agrave;n thể thao Việt Nam chắc chắn sẽ c&aacute;n đ&iacute;ch ở vị tr&iacute; số 1 tr&ecirc;n bảng tổng sắp huy chương&nbsp;<a href="https://www.24h.com.vn/sea-games-31-c689.html" title="SEA Games 31">SEA Games 31</a>&nbsp;khi bỏ lại c&aacute;c đối thủ ph&iacute;a sau với khoảng c&aacute;ch kh&aacute; xa. Nhưng trong t&acirc;m tr&iacute; hầu hết người h&acirc;m mộ cả nước, một kỳ SEA Games th&agrave;nh c&ocirc;ng thực sự mỹ m&atilde;n chỉ khi b&oacute;ng đ&aacute; nam mang về tấm huy chương v&agrave;ng.</p>', 36, 0, 'published', 'YES', 'YES', NULL, 1, NULL, '2022-05-19 15:59:53', '2022-06-05 20:56:13'),
	(11, 'Ngôi sao nào của U23 Việt Nam bất ngờ phải kiểm tra doping ở bán kết?', 'ngoi-sao-nao-cua-u23-viet-nam-bat-ngo-phai-kiem-tra-doping-o-ban-ket-11', '/userfiles/images/Logo/dg_200827_CAU%20RONG%20VE%20DEM_1.jpg', 'Một cầu thủ của U23 Việt Nam đã phải tiến hành kiểm tra doping ngay sau trận thắng U23 Malaysia 1-0. Đây là điều chưa từng có kể từ đầu giải đấu.', '<p>H&ugrave;ng Dũng tiếp tục đ&oacute;ng vai tr&ograve; đầu t&agrave;u của&nbsp;<a href="https://www.24h.com.vn/u23-viet-nam-c48e3423.html" title="đội U23 Việt Nam">đội U23 Việt Nam</a>&nbsp;ở trận đấu cực kỳ kh&oacute; khăn trước U23 Malaysia. Tiền vệ thuộc bi&ecirc;n chế CLB H&agrave; Nội đ&atilde; chơi lăn xả, c&oacute; mặt tại mọi điểm n&oacute;ng v&agrave; l&agrave; chỗ dựa tinh thần rất lớn cho c&aacute;c cầu thủ đ&agrave;n em kh&aacute;c trong đội.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="Ngôi sao nào của U23 Việt Nam bất ngờ phải kiểm tra doping ở bán kết? - 1" data-was-processed="true" onclick="show_slide_image_news(0)" src="https://cdn.24h.com.vn/upload/2-2022/images/2022-05-20/doi-truong-Hung-Dung-bat-ngo-phai-test-doping-sau-tran-thang-U23-Malaysia-hd-1-1652983612-449-width740height493.jpg" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>H&ugrave;ng Dũng xứng đ&aacute;ng l&agrave; đầu t&agrave;u của U23 VN</p>\r\n\r\n<p>H&ugrave;ng Dũng đang chứng minh niềm tin m&agrave; &ocirc;ng Park Hang Seo đặt v&agrave;o anh trong vai tr&ograve; 1 đội trưởng, để dẫn dắt&nbsp;<a href="https://www.24h.com.vn/u23-viet-nam-c48e3423.html" title="U23 Việt Nam">U23 Việt Nam</a>&nbsp;bảo vệ HCV SEA Games năm nay, l&agrave; ho&agrave;n to&agrave;n ch&iacute;nh x&aacute;c. Pha chuyền b&oacute;ng như đặt cho Tiến Linh đ&aacute;nh đầu th&agrave;nh b&agrave;n đ&atilde; cho thấy phẩm chất chuy&ecirc;n m&ocirc;n v&agrave; sự tỏa s&aacute;ng đ&uacute;ng l&uacute;c của H&ugrave;ng Dũng, gi&uacute;p U23 Việt Nam gi&agrave;nh v&eacute; v&agrave;o chung kết gặp lại người Th&aacute;i.</p>\r\n\r\n<p>Sau trận đấu, rất bất ngờ khi H&ugrave;ng Dũng được đưa đi kiểm tra doping. Đ&acirc;y l&agrave; điều chưa từng xảy ra ở c&aacute;c trận đấu trước đ&oacute; của U23 Việt Nam. Việc n&agrave;y l&agrave; l&agrave;m theo quy định nhưng cũng khiến nhiều người bất ngờ. Sau khi ho&agrave;n tất thủ tục kiểm tra, H&ugrave;ng Dũng đ&atilde; trở lại hội qu&acirc;n c&ugrave;ng to&agrave;n đội.</p>\r\n\r\n<p>V&agrave;o 19h ng&agrave;y 22/5 tới, U23 Việt Nam sẽ bước v&agrave;o trận chung kết gặp U23 Th&aacute;i Lan tr&ecirc;n s&acirc;n Mỹ Đ&igrave;nh. Chắc chắn H&ugrave;ng Dũng vẫn sẽ l&agrave; điểm tựa lớn nhất để c&aacute;c cầu thủ ch&uacute;ng ta tự tin giữ lại tấm HCV ngay tr&ecirc;n s&acirc;n nh&agrave;.</p>', 155, 0, 'published', 'YES', 'NO', NULL, 1, NULL, '2022-05-20 08:43:15', '2022-06-04 10:26:55'),
	(13, 'Ngôi sao nào của U23 Việt Nam bất ngờ phải kiểm tra doping ở bán kết?', 'ngoi-sao-nao-cua-u23-viet-nam-bat-ngo-phai-kiem-tra-doping-o-ban-ket', '/userfiles/images/Logo/Ho-Guom.jpg', 'Một cầu thủ của U23 Việt Nam đã phải tiến hành kiểm tra doping ngay sau trận thắng U23 Malaysia 1-0. Đây là điều chưa từng có kể từ đầu giải đấu.', '<p>H&ugrave;ng Dũng tiếp tục đ&oacute;ng vai tr&ograve; đầu t&agrave;u của&nbsp;<a href="https://www.24h.com.vn/u23-viet-nam-c48e3423.html" title="đội U23 Việt Nam">đội U23 Việt Nam</a>&nbsp;ở trận đấu cực kỳ kh&oacute; khăn trước U23 Malaysia. Tiền vệ thuộc bi&ecirc;n chế CLB H&agrave; Nội đ&atilde; chơi lăn xả, c&oacute; mặt tại mọi điểm n&oacute;ng v&agrave; l&agrave; chỗ dựa tinh thần rất lớn cho c&aacute;c cầu thủ đ&agrave;n em kh&aacute;c trong đội.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="Ngôi sao nào của U23 Việt Nam bất ngờ phải kiểm tra doping ở bán kết? - 1" data-was-processed="true" onclick="show_slide_image_news(0)" src="https://cdn.24h.com.vn/upload/2-2022/images/2022-05-20/doi-truong-Hung-Dung-bat-ngo-phai-test-doping-sau-tran-thang-U23-Malaysia-hd-1-1652983612-449-width740height493.jpg" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>H&ugrave;ng Dũng xứng đ&aacute;ng l&agrave; đầu t&agrave;u của U23 VN</p>\r\n\r\n<p>H&ugrave;ng Dũng đang chứng minh niềm tin m&agrave; &ocirc;ng Park Hang Seo đặt v&agrave;o anh trong vai tr&ograve; 1 đội trưởng, để dẫn dắt&nbsp;<a href="https://www.24h.com.vn/u23-viet-nam-c48e3423.html" title="U23 Việt Nam">U23 Việt Nam</a>&nbsp;bảo vệ HCV SEA Games năm nay, l&agrave; ho&agrave;n to&agrave;n ch&iacute;nh x&aacute;c. Pha chuyền b&oacute;ng như đặt cho Tiến Linh đ&aacute;nh đầu th&agrave;nh b&agrave;n đ&atilde; cho thấy phẩm chất chuy&ecirc;n m&ocirc;n v&agrave; sự tỏa s&aacute;ng đ&uacute;ng l&uacute;c của H&ugrave;ng Dũng, gi&uacute;p U23 Việt Nam gi&agrave;nh v&eacute; v&agrave;o chung kết gặp lại người Th&aacute;i.</p>\r\n\r\n<p>Sau trận đấu, rất bất ngờ khi H&ugrave;ng Dũng được đưa đi kiểm tra doping. Đ&acirc;y l&agrave; điều chưa từng xảy ra ở c&aacute;c trận đấu trước đ&oacute; của U23 Việt Nam. Việc n&agrave;y l&agrave; l&agrave;m theo quy định nhưng cũng khiến nhiều người bất ngờ. Sau khi ho&agrave;n tất thủ tục kiểm tra, H&ugrave;ng Dũng đ&atilde; trở lại hội qu&acirc;n c&ugrave;ng to&agrave;n đội.</p>\r\n\r\n<p>V&agrave;o 19h ng&agrave;y 22/5 tới, U23 Việt Nam sẽ bước v&agrave;o trận chung kết gặp U23 Th&aacute;i Lan tr&ecirc;n s&acirc;n Mỹ Đ&igrave;nh. Chắc chắn H&ugrave;ng Dũng vẫn sẽ l&agrave; điểm tựa lớn nhất để c&aacute;c cầu thủ ch&uacute;ng ta tự tin giữ lại tấm HCV ngay tr&ecirc;n s&acirc;n nh&agrave;.</p>', 103, 0, 'published', 'YES', 'YES', NULL, 1, NULL, '2022-05-20 08:45:18', '2022-06-05 22:00:58'),
	(14, 'Ngôi sao nào của U23 Việt Nam bất ngờ phải kiểm tra doping ở bán kết?', 'ngoi-sao-nao-cua-u23-viet-nam-bat-ngo-phai-kiem-tra-doping-o-ban-ket-14', '/userfiles/images/Logo/Ho-Guom.jpg', 'Một cầu thủ của U23 Việt Nam đã phải tiến hành kiểm tra doping ngay sau trận thắng U23 Malaysia 1-0. Đây là điều chưa từng có kể từ đầu giải đấu.', '<p>H&ugrave;ng Dũng tiếp tục đ&oacute;ng vai tr&ograve; đầu t&agrave;u của&nbsp;<a href="https://www.24h.com.vn/u23-viet-nam-c48e3423.html" title="đội U23 Việt Nam">đội U23 Việt Nam</a>&nbsp;ở trận đấu cực kỳ kh&oacute; khăn trước U23 Malaysia. Tiền vệ thuộc bi&ecirc;n chế CLB H&agrave; Nội đ&atilde; chơi lăn xả, c&oacute; mặt tại mọi điểm n&oacute;ng v&agrave; l&agrave; chỗ dựa tinh thần rất lớn cho c&aacute;c cầu thủ đ&agrave;n em kh&aacute;c trong đội.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="Ngôi sao nào của U23 Việt Nam bất ngờ phải kiểm tra doping ở bán kết? - 1" data-was-processed="true" onclick="show_slide_image_news(0)" src="https://cdn.24h.com.vn/upload/2-2022/images/2022-05-20/doi-truong-Hung-Dung-bat-ngo-phai-test-doping-sau-tran-thang-U23-Malaysia-hd-1-1652983612-449-width740height493.jpg" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>H&ugrave;ng Dũng xứng đ&aacute;ng l&agrave; đầu t&agrave;u của U23 VN</p>\r\n\r\n<p>H&ugrave;ng Dũng đang chứng minh niềm tin m&agrave; &ocirc;ng Park Hang Seo đặt v&agrave;o anh trong vai tr&ograve; 1 đội trưởng, để dẫn dắt&nbsp;<a href="https://www.24h.com.vn/u23-viet-nam-c48e3423.html" title="U23 Việt Nam">U23 Việt Nam</a>&nbsp;bảo vệ HCV SEA Games năm nay, l&agrave; ho&agrave;n to&agrave;n ch&iacute;nh x&aacute;c. Pha chuyền b&oacute;ng như đặt cho Tiến Linh đ&aacute;nh đầu th&agrave;nh b&agrave;n đ&atilde; cho thấy phẩm chất chuy&ecirc;n m&ocirc;n v&agrave; sự tỏa s&aacute;ng đ&uacute;ng l&uacute;c của H&ugrave;ng Dũng, gi&uacute;p U23 Việt Nam gi&agrave;nh v&eacute; v&agrave;o chung kết gặp lại người Th&aacute;i.</p>\r\n\r\n<p>Sau trận đấu, rất bất ngờ khi H&ugrave;ng Dũng được đưa đi kiểm tra doping. Đ&acirc;y l&agrave; điều chưa từng xảy ra ở c&aacute;c trận đấu trước đ&oacute; của U23 Việt Nam. Việc n&agrave;y l&agrave; l&agrave;m theo quy định nhưng cũng khiến nhiều người bất ngờ. Sau khi ho&agrave;n tất thủ tục kiểm tra, H&ugrave;ng Dũng đ&atilde; trở lại hội qu&acirc;n c&ugrave;ng to&agrave;n đội.</p>\r\n\r\n<p>V&agrave;o 19h ng&agrave;y 22/5 tới, U23 Việt Nam sẽ bước v&agrave;o trận chung kết gặp U23 Th&aacute;i Lan tr&ecirc;n s&acirc;n Mỹ Đ&igrave;nh. Chắc chắn H&ugrave;ng Dũng vẫn sẽ l&agrave; điểm tựa lớn nhất để c&aacute;c cầu thủ ch&uacute;ng ta tự tin giữ lại tấm HCV ngay tr&ecirc;n s&acirc;n nh&agrave;.</p>', 278, 0, 'published', 'YES', 'YES', NULL, 1, 1, '2022-05-20 08:47:00', '2022-06-04 10:26:31'),
	(15, 'Nhiều quy định mới về đăng ký xe và phạt nguội có hiệu lực kể từ 21/5', 'nhieu-quy-dinh-moi-ve-dang-ky-xe-va-phat-nguoi-co-hieu-luc-ke-tu-215-15', '/userfiles/images/1653025907-f528e0290e0a22f0ec54e0a7e5ac8a44-width850height552.jpg', 'Thông tư 15/2022 của Bộ Công an với hàng loạt quy định mới về đăng ký xe và phạt nguội sẽ có hiệu lực kể từ ngày mai, 21-5: Đăng ký online để xin cấp biển số tạm; bấm biển số ô tô tại công an huyện, xe máy ở công an xã; có thể nộp phạt nguội ngay tại nơi cư trú...', '<p>Mới đ&acirc;y, Bộ C&ocirc;ng an ban h&agrave;nh Th&ocirc;ng tư 15/2022 để sửa đổi, bổ sung một số quy định về cấp, thu hồi đăng k&yacute;, biển số phương tiện giao th&ocirc;ng cơ giới đường bộ, quy tr&igrave;nh tuần tra, kiểm so&aacute;t, xử l&yacute; vi phạm h&agrave;nh ch&iacute;nh, tr&igrave;nh tự đăng k&yacute;, thu hồi con dấu&hellip;</p>\r\n\r\n<p>Th&ocirc;ng tư n&agrave;y sẽ c&oacute; hiệu lực từ ng&agrave;y mai, 21-5.</p>\r\n\r\n<p><img alt="Nhiều quy định mới về đăng ký xe và phạt nguội có hiệu lực kể từ 21/5 - 1" data-was-processed="true" onclick="show_slide_image_news(0)" src="https://cdn.24h.com.vn/upload/2-2022/images/2022-05-20//1653025907-f528e0290e0a22f0ec54e0a7e5ac8a44-width850height552.jpg" style="width:660px" /></p>\r\n\r\n<p>Th&ocirc;ng tư 15/2022 của Bộ C&ocirc;ng an với h&agrave;ng loạt quy định mới về đăng k&yacute; xe v&agrave; phạt nguội sẽ c&oacute; hiệu lực kể từ ng&agrave;y 21-5</p>\r\n\r\n<p><strong>Bấm biển số &ocirc; t&ocirc; tại c&ocirc;ng an huyện, xe m&aacute;y ở c&ocirc;ng an x&atilde;</strong></p>\r\n\r\n<p>Bộ C&ocirc;ng an mở rộng quyền v&agrave; ph&acirc;n cấp việc đăng k&yacute; &ocirc; t&ocirc; xuống đến C&ocirc;ng an cấp huyện thay v&igrave; ph&ograve;ng CSGT C&ocirc;ng an cấp tỉnh như hiện nay.</p>\r\n\r\n<p>Theo đ&oacute;, Ph&ograve;ng CSGT đăng k&yacute;, cấp biển số đối với &ocirc; t&ocirc;, m&aacute;y k&eacute;o, rơmo&oacute;c, sơmi rơmo&oacute;c v&agrave; c&aacute;c loại xe c&oacute; kết cấu tương tự xe n&ecirc;u tr&ecirc;n của cơ quan, tổ chức, c&aacute; nh&acirc;n nước ngo&agrave;i... c&oacute; trụ sở hoặc nơi thường tr&uacute; tại quận, th&agrave;nh phố thuộc th&agrave;nh phố trực thuộc trung ương hoặc th&agrave;nh phố thuộc tỉnh nơi ph&ograve;ng CSGT đặt trụ sở.</p>\r\n\r\n<p>C&ocirc;ng an cấp huyện đăng k&yacute;, cấp biển số &ocirc; t&ocirc;, m&aacute;y k&eacute;o, rơmo&oacute;c, sơmi rơmo&oacute;c v&agrave; c&aacute;c loại xe c&oacute; kết cấu tương tự xe n&ecirc;u tr&ecirc;n của cơ quan, tổ chức, doanh nghiệp... c&oacute; trụ sở hoặc nơi thường tr&uacute; tr&ecirc;n địa phương m&igrave;nh.</p>\r\n\r\n<p>Đặc biệt, C&ocirc;ng an cấp x&atilde; sẽ tiếp nhận v&agrave; l&agrave;m thủ tục đăng k&yacute;, cấp biển số xe m&ocirc; t&ocirc;, xe gắn m&aacute;y (kể cả xe m&aacute;y điện) cho c&aacute; nh&acirc;n, tổ chức c&oacute; trụ sở hoặc nơi thường tr&uacute; tại địa phương m&igrave;nh v&agrave; cơ quan, tổ chức, c&aacute; nh&acirc;n người nước ngo&agrave;i, của dự &aacute;n, tổ chức kinh tế li&ecirc;n doanh với nước ngo&agrave;i tại địa phương m&igrave;nh.</p>\r\n\r\n<p>Để C&ocirc;ng an x&atilde; được quyền đăng k&yacute;, cấp biển số xe m&aacute;y, trong ba năm liền kề gần nhất, địa phương phải c&oacute; số lượng đăng k&yacute; mới từ 250 xe m&ocirc; t&ocirc;, xe gắn m&aacute;y (kể cả xe m&aacute;y điện) trở l&ecirc;n trong một năm.</p>\r\n\r\n<p><strong>Đăng k&yacute; online để xin cấp biển số tạm</strong></p>\r\n\r\n<p>Khoản 3 Điều 3 Th&ocirc;ng tư 15/2022 bổ sung quy định về tr&igrave;nh tự, thủ tục cấp Giấy chứng nhận đăng k&yacute; xe, biển số xe tạm thời.</p>\r\n\r\n<p>Cụ thể, người d&acirc;n c&oacute; thể l&agrave;m thủ tục cấp Giấy chứng nhận đăng k&yacute; xe, biển số xe tạm thời online bằng c&aacute;ch đến đăng k&yacute; trực tiếp tại cơ quan đăng k&yacute; xe m&agrave; kh&ocirc;ng cần mang xe đến kiểm tra, chỉ cần nộp giấy tờ xe. Hoặc chủ xe c&oacute; thể đăng k&yacute; tại Cổng Dịch vụ c&ocirc;ng Bộ C&ocirc;ng an, Cổng Dịch vụ c&ocirc;ng quốc gia v&agrave; được cấp giấy chứng nhận đăng k&yacute; tạm bản điện tử.</p>\r\n\r\n<p>Để đăng k&yacute; online tr&ecirc;n cổng dịch vụ c&ocirc;ng, chủ xe cần đăng nhập, k&ecirc; khai c&aacute;c th&ocirc;ng tin của xe, chủ xe (như ghi r&otilde; số tờ khai hải quan điện tử, số phiếu kiểm tra chất lượng xuất xưởng, chứng từ chuyển quyền sở hữu xe, giấy ủy quyền người k&ecirc; khai l&agrave;m thủ tục đăng k&yacute; tạm thời...). Tiếp đ&oacute;, chủ xe nộp lệ ph&iacute; đăng k&yacute; xe tạm thời v&agrave; nhận kết quả x&aacute;c thực đăng k&yacute; xe tạm thời tr&ecirc;n Cổng Dịch vụ c&ocirc;ng v&agrave; in chứng nhận đăng k&yacute; xe, biển số xe tạm thời điện tử.</p>\r\n\r\n<p><strong>Sửa lỗi sai tiếng Anh tr&ecirc;n giấy chứng nhận đăng k&yacute; xe</strong></p>\r\n\r\n<p>Trước đ&oacute;, b&aacute;o ch&iacute; phản &aacute;nh về mẫu chứng nhận đăng k&yacute; xe &ocirc; t&ocirc; hiện h&agrave;nh theo quy định tại Th&ocirc;ng tư 58/2020 của Bộ C&ocirc;ng an c&oacute; lỗi sai khi sử dụng từ vựng tiếng Anh kh&ocirc;ng đ&uacute;ng.</p>\r\n\r\n<p>Cụ thể, mặt trước của giấy đăng k&yacute; đ&atilde; dịch &ldquo;số chỗ ngồi&rdquo; th&agrave;nh &ldquo;sit&rdquo; trong khi &ldquo;sit&rdquo; l&agrave; động từ, được d&ugrave;ng để chỉ h&agrave;nh động ngồi; trong khi ở đ&acirc;y phải sử dụng danh từ khi dịch.</p>\r\n\r\n<p>Để khắc phục, Th&ocirc;ng tư 15/2022 ban h&agrave;nh mẫu giấy chứng nhận đăng k&yacute; xe &ocirc; t&ocirc; mới, trong đ&oacute; sửa phần dịch tiếng anh của cụm từ &ldquo;số chỗ ngồi&rdquo; từ &ldquo;Sit&rdquo; th&agrave;nh &ldquo;Number of Seats&rdquo;.</p>\r\n\r\n<p>Vẫn theo Th&ocirc;ng tư 15/2022, để đăng k&yacute;, cấp biển số xe lần đầu; đăng k&yacute; sang t&ecirc;n; đổi lại, cấp lại giấy chứng nhận đăng k&yacute; xe, biển số xe tr&ecirc;n Cổng Dịch vụ c&ocirc;ng Bộ C&ocirc;ng an hoặc Cổng Dịch vụ c&ocirc;ng quốc gia, chủ xe cần đăng nhập cổng dịch vụ c&ocirc;ng k&ecirc; khai c&aacute;c th&ocirc;ng tin v&agrave;o giấy khai đăng k&yacute; xe điện tử (theo mẫu số 01A/58) v&agrave; nhận m&atilde; số thứ tự, lịch hẹn giải quyết hồ sơ qua địa chỉ thư điện tử hoặc qua tin nhắn điện thoại để l&agrave;m thủ tục đăng k&yacute; xe tại cơ quan đăng k&yacute; xe.</p>\r\n\r\n<p><strong>C&oacute; thể nộp phạt nguội ngay tại nơi cư tr&uacute;</strong></p>\r\n\r\n<p>Khoản 2, Điều 4, Th&ocirc;ng tư 15/2022 quy định khi ph&aacute;t hiện vi phạm th&ocirc;ng qua phương tiện, thiết bị nghiệp vụ m&agrave; kh&ocirc;ng dừng được phương tiện để xử phạt, người c&oacute; thẩm quyền sẽ x&aacute;c định th&ocirc;ng tin về người v&agrave; phương tiện vi phạm v&agrave; gửi kết quả phạt nguội về C&ocirc;ng an nơi cư tr&uacute; của chủ xe để giải quyết.</p>\r\n\r\n<p>Trong đ&oacute;, chuyển kết quả đến C&ocirc;ng an cấp x&atilde; nơi người vi phạm cư tr&uacute; nếu vi phạm thuộc thẩm quyền xử phạt của Trưởng C&ocirc;ng an cấp x&atilde;; chuyển kết quả đến C&ocirc;ng an cấp huyện nơi người vi phạm cư tr&uacute; nếu vi phạm kh&ocirc;ng thuộc thẩm quyền xử phạt của Trưởng C&ocirc;ng an cấp x&atilde; hoặc thuộc thẩm quyền xử phạt của Trưởng C&ocirc;ng an cấp x&atilde; nhưng C&ocirc;ng an cấp x&atilde; chưa được trang bị hệ thống mạng kết nối.</p>\r\n\r\n<p>Khi người vi phạm đến l&agrave;m việc th&igrave; Trưởng C&ocirc;ng an cấp x&atilde;, Trưởng C&ocirc;ng an cấp huyện tiến h&agrave;nh lập bi&ecirc;n bản v&agrave; ra quyết định xử phạt vi phạm giao th&ocirc;ng theo quy định.</p>\r\n\r\n<p>Theo quy định hiện h&agrave;nh tại Th&ocirc;ng tư 65/2020, sau khi x&aacute;c minh được người vi phạm, cơ quan C&ocirc;ng an nơi ph&aacute;t hiện vi phạm sẽ gửi thẳng th&ocirc;ng b&aacute;o mời người vi phạm đến trụ sở để giải quyết. Nếu người vi phạm kh&ocirc;ng đến trụ sở cơ quan C&ocirc;ng an nơi ph&aacute;t hiện vi phạm để giải quyết th&igrave; mới gửi th&ocirc;ng th&ocirc;ng b&aacute;o đến C&ocirc;ng an x&atilde; nơi người đ&oacute; cư tr&uacute;.</p>', 276, 0, 'published', 'YES', 'YES', NULL, 2, NULL, '2022-05-20 14:03:12', '2022-05-20 16:14:21'),
	(16, 'Hà Nội chốt chi hơn 23 nghìn tỉ đồng làm đường vành đai 4', 'ha-noi-chot-chi-hon-23-nghin-ti-dong-lam-duong-vanh-dai-4-16', '/userfiles/images/1653034208-6715d319ee4ad89e5aa1f0ae5b237e36-width700height393.jpg', 'Với 100% đại biểu có mặt, HĐND TP Hà Nội đã thông qua nghị quyết về chủ trương bố trí, cân đối vốn cho dự án vành đai 4 - vùng Thủ đô.', '<p>S&aacute;ng nay (20/5), Chủ tịch HĐND th&agrave;nh phố (TP) H&agrave; Nội Nguyễn Ngọc Tuấn điều h&agrave;nh kỳ họp chuy&ecirc;n đề thứ 5, HĐND TP H&agrave; Nội kh&oacute;a XVI đ&atilde; xem x&eacute;t, quyết định chủ trương bố tr&iacute;, c&acirc;n đối vốn cho dự &aacute;n đầu tư x&acirc;y dựng đường v&agrave;nh đai 4 - v&ugrave;ng Thủ đ&ocirc;.</p>\r\n\r\n<p><img alt="Hà Nội chốt chi hơn 23 nghìn tỉ đồng làm đường vành đai 4 - 1" data-was-processed="true" onclick="show_slide_image_news(0)" src="https://cdn.24h.com.vn/upload/2-2022/images/2022-05-20//1653034208-6715d319ee4ad89e5aa1f0ae5b237e36-width700height393.jpg" style="width:660px" /></p>\r\n\r\n<p>To&agrave;n cảnh phi&ecirc;n họp HĐND TP H&agrave; Nội trong s&aacute;ng nay (20/5)</p>\r\n\r\n<p>Với 100% đại biểu c&oacute; mặt, HĐND TP đ&atilde; th&ocirc;ng qua nghị quyết về chủ trương bố tr&iacute;, c&acirc;n đối vốn cho dự &aacute;n.</p>\r\n\r\n<p>Cụ thể, nguồn vốn đầu tư dự kiến 85.813 tỉ đồng, trong đ&oacute; dự kiến 23.524 tỉ đồng l&agrave; nguồn vốn từ ng&acirc;n s&aacute;ch TP H&agrave; Nội, chia l&agrave;m 2 giai đoạn: từ 2021-2025 l&agrave; 19.477 tỉ đồng; giai đoạn 2026-2030 l&agrave; 4.047 tỉ đồng.</p>\r\n\r\n<p>H&agrave; Nội dự kiến bố tr&iacute; vốn v&agrave; giải ng&acirc;n năm 2022 khoảng 100 tỉ đồng, 2023 khoảng 8.397 tỉ đồng, 2024 khoảng 5.955 tỉ đồng, 2025 khoảng 5.025 tỉ đồng.</p>\r\n\r\n<p>Tiến độ v&agrave; thời gian thực hiện dự &aacute;n từ năm 2022 - 2027.</p>\r\n\r\n<p>UBND TP cam kết đảm bảo nguồn vốn thực hiện theo tiến độ. Kế hoạch vốn bố tr&iacute; hằng năm sẽ được UBND TP tr&igrave;nh HĐND TP quyết nghị cụ thể tr&ecirc;n cơ sở thủ tục, tiến độ triển khai thực hiện dự &aacute;n đầu tư được cấp c&oacute; thẩm quyền ph&ecirc; duyệt v&agrave; theo luật định.</p>\r\n\r\n<p>Trước đ&oacute;, dự &aacute;n đ&atilde; được HĐND TP biểu quyết tại kỳ họp thứ 2 (th&aacute;ng 9/2021) nhất tr&iacute; về chủ trương đầu tư v&agrave; bổ sung dự &aacute;n v&agrave;o kế hoạch đầu tư c&ocirc;ng trung hạn giai đoạn 2021-2025 của TP.</p>\r\n\r\n<p>Đồng thời, tại kỳ họp thứ 3 (th&aacute;ng 12-2021), HĐND TP tiếp tục đưa dự &aacute;n v&agrave;o danh mục c&aacute;c c&ocirc;ng tr&igrave;nh trọng điểm của TP để tập trung chỉ đạo, điều h&agrave;nh.</p>\r\n\r\n<p>Ph&aacute;t biểu &yacute; kiến tại kỳ họp, đại biểu Nguyễn Tiến Minh (huyện Thường T&iacute;n - 1 trong 7 quận huyện c&oacute; đường v&agrave;nh đai 4 đi qua) cho biết, Thường T&iacute;n phấn đấu th&agrave;nh quận của Thủ đ&ocirc; với du lịch v&agrave; dịch vụ l&agrave; mũi nhọn.</p>\r\n\r\n<p>V&igrave; vậy, đại biểu Minh kiến nghị c&ocirc;ng tr&igrave;nh v&agrave;nh đai 4 khi x&acirc;y dựng c&aacute;c c&acirc;y cầu cần phải xứng tầm, đẹp để địa phương thu h&uacute;t được kh&aacute;ch du lịch.</p>\r\n\r\n<p>Đại biểu Nguyễn Thanh Nam (huyện Ph&uacute; Xuy&ecirc;n) cho rằng, khi ho&agrave;n th&agrave;nh tuyến đường v&agrave;nh đai 4 sẽ giảm &ugrave;n tắc, &aacute;p lực cho v&agrave;nh đai 3, th&uacute;c đẩy ph&aacute;t triển đ&ocirc; thị hai b&ecirc;n.</p>\r\n\r\n<p>Đại biểu Vũ Mạnh Hải n&oacute;i: &quot;C&aacute;c c&acirc;y cầu của dự &aacute;n ngo&agrave;i chức năng giao th&ocirc;ng cần quan t&acirc;m đặc biệt ch&uacute; &yacute; đến thẩm mỹ, để đ&acirc;y l&agrave; c&ocirc;ng tr&igrave;nh văn h&oacute;a&quot;.</p>', 661, 0, 'published', 'YES', 'YES', NULL, 2, 2, '2022-05-20 16:16:25', '2022-06-05 17:16:16'),
	(19, 'Hàng nghìn tỷ đồng sắp chảy vào túi dân chơi chứng khoán', 'hang-nghin-ty-dong-sap-chay-vao-tui-dan-choi-chung-khoan-19', '/userfiles/images/Hang-nghin-ty-dong-sap-chay-vao-tui-dan-choi-chung-khoan-untitled-1-1653038155-466-width740height472.jpg', 'Kết thúc phiên giao dịch, VN-Index giảm 0,93 điểm (-0,07%) xuống 1.240,71 điểm. HNX-Index giảm 1 điểm (-0,32%) xuống 307,02 điểm. UPCoM-Index giảm 0,47 điểm (-0,5%) xuống 94,11 điểm.', '<h2><strong>C&aacute;c cổ phiếu lớn ph&acirc;n ho&aacute; mạnh khiến VN-Index li&ecirc;n tục giằng co trong phi&ecirc;n giao dịch h&ocirc;m nay.</strong></h2>\r\n\r\n<p>Kết th&uacute;c phi&ecirc;n giao dịch, VN-Index giảm 0,93 điểm (-0,07%) xuống 1.240,71 điểm. HNX-Index giảm 1 điểm (-0,32%) xuống 307,02 điểm. UPCoM-Index giảm 0,47 điểm (-0,5%) xuống 94,11 điểm.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="Hàng nghìn tỷ đồng sắp chảy vào túi dân chơi chứng khoán - 1" data-was-processed="true" onclick="show_slide_image_news(0)" src="https://cdn.24h.com.vn/upload/2-2022/images/2022-05-20/Hang-nghin-ty-dong-sap-chay-vao-tui-dan-choi-chung-khoan-img_4887-2-1653038155-204-width740height241.jpg" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>VN-Index giảm 0,93 điểm (-0,07%) xuống 1.240,71 điểm.</p>\r\n\r\n<p>Thanh khoản thị trường giảm so với phi&ecirc;n trước với tổng khối lượng khớp lệnh đạt hơn 13.000 tỷ đồng.</p>\r\n\r\n<p>Thị trường&nbsp;<a href="https://www.24h.com.vn/tin-chung-khoan-c566.html" title="chứng khoán">chứng kho&aacute;n</a>&nbsp;tăng nhẹ trong phi&ecirc;n s&aacute;ng, c&oacute; thời điểm ghi nhận VN-Index tăng hơn 10 điểm. Tuy nhi&ecirc;n đến phi&ecirc;n chiều, diễn biến k&eacute;m sắc của nh&oacute;m vốn h&oacute;a lớn khiến VN-Index đảo chiều giảm điểm.</p>\r\n\r\n<p>Nh&oacute;m VN30 h&ocirc;m nay giảm nhẹ gần 0,1%; trong đ&oacute; 17 m&atilde; giảm, 10 m&atilde; tăng v&agrave; 3 m&atilde; đứng gi&aacute;. GVR, DIG, ACB l&agrave; những m&atilde; t&aacute;c động t&iacute;ch cực nhất l&ecirc;n thị trường khi đem về cho VN-Index 1,5 điểm. Trong khi đ&oacute;, bộ ba SAB, MSN v&agrave; VCB hợp lực mang đi của thị trường với gần 3 điểm.</p>\r\n\r\n<p>C&ugrave;ng với đ&oacute;, nh&oacute;m&nbsp;<a href="https://www.24h.com.vn/kinh-doanh-c161e4008.html" title="bất động sản">bất động sản</a>&nbsp;tăng nhẹ với 0.26%,.</p>\r\n\r\n<p>Ở chiều ngược lại, nh&oacute;m chứng kho&aacute;n v&agrave; ng&acirc;n h&agrave;ng sau khi tăng đầu phi&ecirc;n đ&atilde; giảm nhẹ 0.42% v&agrave; 0.06%.</p>\r\n\r\n<p>Trong phi&ecirc;n h&ocirc;m nay, giữa bối cảnh thanh khoản tr&ecirc;n thị trường chứng kho&aacute;n chưa được cải thiện, cổ phiếu HAG của bầu Đức h&ocirc;m nay tiếp tục ghi nh&acirc;n khối lượng giao dịch kh&aacute; lớn. To&agrave;n phi&ecirc;n c&oacute; tới hơn 20,4 triệu&nbsp;cổ phiếu được khớp lệnh. Chốt phi&ecirc;n HAG giảm 0,44% về mốc 8.990 đồng/cổ phiếu.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; phi&ecirc;n quay đầu giảm điểm sau cả tuần tăng ấn tượng của m&atilde; n&agrave;y. T&iacute;nh chung trong tuần qua, HAG đ&atilde; tăng trở lại&nbsp;15,85% gi&aacute; trị. Đưa mức độ giảm t&iacute;nh theo qu&yacute; của m&atilde; n&agrave;y về c&ograve;n 18,27%.</p>\r\n\r\n<p><img alt="Hàng nghìn tỷ đồng sắp chảy vào túi dân chơi chứng khoán - 3" data-original="https://cdn.24h.com.vn/upload/2-2022/images/2022-05-20/Hang-nghin-ty-dong-sap-chay-vao-tui-dan-choi-chung-khoan-untitled-1-1653038155-466-width740height472.jpg" data-was-processed="true" onclick="show_slide_image_news(2)" src="https://cdn.24h.com.vn/upload/2-2022/images/2022-05-20/Hang-nghin-ty-dong-sap-chay-vao-tui-dan-choi-chung-khoan-untitled-1-1653038155-466-width740height472.jpg" /></p>\r\n\r\n<p>Nh&agrave; đầu tư sẽ được nhận cổ tức từ doanh nghiệp trong thời gian tới.</p>\r\n\r\n<p>Li&ecirc;n quan đến thị trường, một tin vui sẽ đến với nh&agrave; đầu tư trong thời gian tới. Cụ thể, sau m&ugrave;a đại hội cổ đ&ocirc;ng thường ni&ecirc;n, khi phương &aacute;n chia cổ tức năm trước được cổ đ&ocirc;ng th&ocirc;ng qua th&igrave; h&agrave;ng loạt doanh nghiệp triển khai thực hiện.</p>\r\n\r\n<p>Hiện đ&atilde; c&oacute; khoảng 90 doanh nghiệp c&ocirc;ng bố chốt quyền chia cổ tức tiền mặt v&agrave; dự kiến thanh to&aacute;n trong th&aacute;ng 6 hoặc 7 với tổng số tiền l&ecirc;n đến hơn 6.000 tỷ đồng.</p>\r\n\r\n<p>Trong đ&oacute;, FPT l&agrave; doanh nghiệp chi nhiều nhất với 914 tỷ đồng để trả cổ tức tiền mặt tỷ lệ 10%. Doanh nghiệp chưa c&ocirc;ng bố ng&agrave;y chốt quyền nhưng dự kiến trong th&aacute;ng 6 v&agrave; thời điểm thanh to&aacute;n cổ tức tiền mặt trong th&aacute;ng 7.</p>\r\n\r\n<p>C&ugrave;ng với đ&oacute;, FPT sẽ ph&aacute;t h&agrave;nh 182,8 triệu cổ phiếu, tỷ lệ 20% để trả cổ tức.</p>\r\n\r\n<p>Hay như Viglacera mới c&ocirc;ng bố ng&agrave;y 18/5 đăng k&yacute; cuối c&ugrave;ng lập danh s&aacute;ch cổ đ&ocirc;ng chia cổ tức 2021 tỷ lệ 15%, tương đương số tiền chi ra 672,5 tỷ đồng.</p>\r\n\r\n<p>Giấy Việt Tr&igrave; cũng thanh to&aacute;n cổ tức với tỷ lệ kh&aacute; cao 39% mệnh gi&aacute;. Ng&agrave;y 31/3 đăng k&yacute; cuối c&ugrave;ng v&agrave; ng&agrave;y 1/6 l&agrave; ng&agrave;y thanh to&aacute;n.</p>\r\n\r\n<p>Nhiều doanh nghiệp kh&aacute;c chia cổ tức tỷ lệ tr&ecirc;n 30% trong đợt n&agrave;y như Ph&aacute;t triển độ thị c&ocirc;ng nghiệp số 2, C&ocirc;ng ty 397 hay Dịch vụ h&agrave;ng h&oacute;a S&agrave;i G&ograve;n...</p>\r\n\r\n<p>Đ&acirc;y l&agrave; tin vui với nh&agrave; đầu tư trong bối cảnh thị trường kh&aacute; ảm đạm thời gian gần đ&acirc;y do c&aacute;c th&ocirc;ng tin ti&ecirc;u cực.</p>', 465, 0, 'published', 'YES', 'YES', NULL, 2, 2, '2022-05-20 17:36:00', '2022-06-05 17:50:36'),
	(20, 'Trình ký 21 docx', 'trinh-ky-21-docx-20', '/userfiles/images/Logo/Ho-Guom.jpg', '123', '<p>sssssssssssssss</p>', 1000, 0, 'draft', 'NO', 'YES', NULL, 1, NULL, '2022-06-01 09:43:53', '2022-06-01 09:43:53');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.post_histories
CREATE TABLE IF NOT EXISTS `post_histories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `published` enum('draft','unpublished','published','pending','nodisplay') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.post_histories: ~20 rows (approximately)
/*!40000 ALTER TABLE `post_histories` DISABLE KEYS */;
INSERT INTO `post_histories` (`id`, `post_id`, `created_by`, `published`, `note`, `created_at`, `updated_at`) VALUES
	(1, 11, 1, 'pending', NULL, '2022-05-20 08:43:15', '2022-05-20 08:43:15'),
	(2, 13, 1, 'draft', NULL, '2022-05-20 08:45:18', '2022-05-20 08:45:18'),
	(3, 14, 1, 'draft', NULL, '2022-05-20 08:47:00', '2022-05-20 08:47:00'),
	(4, 15, 2, 'pending', NULL, '2022-05-20 14:03:12', '2022-05-20 14:03:12'),
	(5, 15, 1, 'published', 'Tôi đồng ý', '2022-05-20 16:13:04', '2022-05-20 16:13:04'),
	(6, 16, 2, 'draft', NULL, '2022-05-20 16:16:26', '2022-05-20 16:16:26'),
	(7, 14, 1, 'draft', NULL, '2022-05-20 16:56:31', '2022-05-20 16:56:31'),
	(8, 14, 1, 'draft', NULL, '2022-05-20 16:56:42', '2022-05-20 16:56:42'),
	(9, 14, 1, 'pending', NULL, '2022-05-20 16:57:16', '2022-05-20 16:57:16'),
	(10, 14, 1, 'unpublished', 'Chưa đạt yêu càu', '2022-05-20 16:58:39', '2022-05-20 16:58:39'),
	(11, 14, 1, 'pending', NULL, '2022-05-20 16:58:57', '2022-05-20 16:58:57'),
	(12, 14, 1, 'published', 'Tôi đồng ý', '2022-05-20 17:15:07', '2022-05-20 17:15:07'),
	(13, 17, 1, 'draft', NULL, '2022-05-20 17:20:41', '2022-05-20 17:20:41'),
	(14, 18, 1, 'draft', NULL, '2022-05-20 17:21:06', '2022-05-20 17:21:06'),
	(15, 19, 2, 'draft', NULL, '2022-05-20 17:36:00', '2022-05-20 17:36:00'),
	(16, 19, 2, 'pending', NULL, '2022-05-20 17:36:19', '2022-05-20 17:36:19'),
	(17, 19, 1, 'published', 'Tôi đồng ý', '2022-05-20 17:36:31', '2022-05-20 17:36:31'),
	(18, 16, 2, 'pending', NULL, '2022-05-20 17:38:05', '2022-05-20 17:38:05'),
	(19, 16, 1, 'published', 'Tôi đồng ý', '2022-05-20 17:38:32', '2022-05-20 17:38:32'),
	(20, 20, 1, 'draft', NULL, '2022-06-01 09:43:53', '2022-06-01 09:43:53');
/*!40000 ALTER TABLE `post_histories` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_by` tinyint(4) NOT NULL,
  `owner_id` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.roles: ~1 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `create_by`, `owner_id`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Giám đốc', 1, 2, 0, '2022-05-19 10:55:25', '2022-05-21 10:46:15');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.role_employees
CREATE TABLE IF NOT EXISTS `role_employees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.role_employees: ~1 rows (approximately)
/*!40000 ALTER TABLE `role_employees` DISABLE KEYS */;
INSERT INTO `role_employees` (`id`, `employee_id`, `role_id`) VALUES
	(1, 2, 1);
/*!40000 ALTER TABLE `role_employees` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.slides
CREATE TABLE IF NOT EXISTS `slides` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.slides: ~2 rows (approximately)
/*!40000 ALTER TABLE `slides` DISABLE KEYS */;
INSERT INTO `slides` (`id`, `name`, `image`, `url`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
	(4, 'Slide 1', '/userfiles/images/skide/marina-lobato-kG7pOXbBfNs-unsplash.jpg', NULL, 1, 1, '2022-06-03 15:24:43', '2022-06-03 15:24:43'),
	(5, 'slide 2', '/userfiles/images/skide/thanh-soledas-XGuZ4HlC5qU-unsplash.jpg', 'https://www.2stay.vn/', 1, 1, '2022-06-03 15:25:12', '2022-06-04 08:14:10');
/*!40000 ALTER TABLE `slides` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.type_permissions
CREATE TABLE IF NOT EXISTS `type_permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_permissions_status_index` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.type_permissions: ~7 rows (approximately)
/*!40000 ALTER TABLE `type_permissions` DISABLE KEYS */;
INSERT INTO `type_permissions` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Nhân viên', 1, '2022-05-19 10:44:13', '2022-05-19 10:44:13'),
	(2, 'Thông tin chung', 1, '2022-05-19 10:44:23', '2022-05-19 10:44:23'),
	(3, 'Phân quyền', 1, '2022-05-19 10:44:34', '2022-05-19 10:44:34'),
	(4, 'Danh mục', 1, '2022-05-19 10:49:23', '2022-05-19 10:49:23'),
	(5, 'Tin tức', 1, '2022-05-20 09:02:14', '2022-05-20 09:02:14'),
	(6, 'Slides', 1, '2022-05-21 10:40:16', '2022-05-21 10:40:16'),
	(7, 'Banner', 1, '2022-05-21 10:40:24', '2022-05-21 10:40:24');
/*!40000 ALTER TABLE `type_permissions` ENABLE KEYS */;

-- Dumping structure for table laravel_cms.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(10) unsigned DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_cms.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
