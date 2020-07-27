-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 24, 2018 lúc 08:15 AM
-- Phiên bản máy phục vụ: 5.5.31
-- Phiên bản PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo4_laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regular_price` double NOT NULL DEFAULT '0',
  `sale_price` double NOT NULL DEFAULT '0',
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attribute_languages`
--

CREATE TABLE `attribute_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `parent`, `image`, `alt`, `icon`, `priority`, `status`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, NULL, NULL, 0, 'publish', 'default', NULL, NULL, NULL),
(2, 0, NULL, NULL, NULL, 1, 'publish', 'san-pham', NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(3, 0, NULL, NULL, NULL, 1, 'publish', 'san-pham', NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(4, 0, NULL, NULL, NULL, 1, 'publish', 'san-pham', NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(5, 0, NULL, NULL, NULL, 1, 'publish', 'san-pham', NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(6, 0, NULL, NULL, NULL, 1, 'publish', 'san-pham', NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(7, 0, NULL, NULL, NULL, 1, 'publish', 'san-pham', NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(8, 0, NULL, NULL, NULL, 1, 'publish', 'san-pham', NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(9, 0, NULL, NULL, NULL, 1, 'publish', 'san-pham', NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(10, 0, NULL, NULL, NULL, 1, 'publish', 'san-pham', NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(11, 0, NULL, NULL, NULL, 1, 'publish', 'san-pham', NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_languages`
--

CREATE TABLE `category_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `contents` longtext COLLATE utf8mb4_unicode_ci,
  `meta_seo` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_languages`
--

INSERT INTO `category_languages` (`id`, `title`, `slug`, `description`, `contents`, `meta_seo`, `language`, `category_id`) VALUES
(1, 'Uncategorized', 'uncategorized', NULL, NULL, NULL, 'vi', 1),
(2, 'Uncategorized', 'uncategorized', NULL, NULL, NULL, 'en', 1),
(3, 'Kathryn Schumm Sr.', 'kathryn-schumm-sr', 'Fuga officiis et et. Doloribus consequatur veritatis accusantium vel.', 'Ad qui minus voluptatem nemo blanditiis voluptatem qui. Autem nostrum ut explicabo ut exercitationem numquam quidem repellat. Et voluptatum sed commodi ut.', '{\"title\":\"Kathryn Schumm Sr.\",\"keywords\":\"Kathryn Schumm Sr.\",\"description\":\"Kathryn Schumm Sr.\"}', 'vi', 2),
(4, 'Mr. Elton Kuhn', 'mr-elton-kuhn', 'Voluptas rerum minus rerum. Fugit eum iste ut inventore. Maiores quia vel alias eaque voluptatibus aperiam.', 'Ut officiis nulla enim. Voluptas voluptas blanditiis sed at dolores sequi. Nihil perspiciatis ipsam in aperiam error quia non. Assumenda ad blanditiis esse.', '{\"title\":\"Mr. Elton Kuhn\",\"keywords\":\"Mr. Elton Kuhn\",\"description\":\"Mr. Elton Kuhn\"}', 'en', 2),
(5, 'Justyn Schumm', 'justyn-schumm', 'Doloremque occaecati eum quia. Itaque ipsum possimus molestiae quis optio. Non dolores aut consequatur voluptas amet praesentium rem sapiente.', 'Praesentium odit nihil ut aperiam. Distinctio non voluptatem sed dolor labore officia. Rerum cum eum repellendus.', '{\"title\":\"Justyn Schumm\",\"keywords\":\"Justyn Schumm\",\"description\":\"Justyn Schumm\"}', 'vi', 3),
(6, 'Francisca Volkman', 'francisca-volkman', 'Sunt recusandae voluptate ut ex id repellendus. Dolores architecto veritatis soluta. Iure id ut tenetur et.', 'Aut veritatis eos voluptas modi. Aut mollitia alias ullam odio blanditiis laboriosam quasi. Quae odio dolor explicabo quisquam ipsum reiciendis.', '{\"title\":\"Francisca Volkman\",\"keywords\":\"Francisca Volkman\",\"description\":\"Francisca Volkman\"}', 'en', 3),
(7, 'Larue Cole', 'larue-cole', 'Qui minima sit reiciendis fugit corrupti qui cum quo. Modi sint eligendi aut qui culpa officia et. Est esse dignissimos ut. Voluptatem veritatis itaque enim porro non nobis suscipit.', 'Iure quas placeat voluptatibus autem et. Ullam dolor et quidem distinctio sequi nihil nisi ut.', '{\"title\":\"Larue Cole\",\"keywords\":\"Larue Cole\",\"description\":\"Larue Cole\"}', 'vi', 4),
(8, 'Vesta Davis', 'vesta-davis', 'Illum molestias ex velit sed omnis molestiae explicabo. Eos voluptas repellendus perferendis voluptatem omnis. Vitae doloribus qui deserunt nobis quia enim esse et.', 'Aperiam porro voluptatem distinctio non exercitationem in. Dolores cumque quisquam quis velit et ullam qui. Aliquam consequuntur facilis doloremque maiores omnis enim. Repellendus quo enim fugit et maxime labore corrupti aspernatur. Non voluptate alias sunt aperiam.', '{\"title\":\"Vesta Davis\",\"keywords\":\"Vesta Davis\",\"description\":\"Vesta Davis\"}', 'en', 4),
(9, 'Mrs. Blanche Lang IV', 'mrs-blanche-lang-iv', 'Harum sit aliquam voluptatem dolores velit voluptate. In dolorem pariatur sint molestiae. Officiis delectus et omnis placeat natus. Quod rerum dolores autem quis iusto.', 'Ea accusantium temporibus explicabo incidunt soluta. Qui modi et provident nobis est. Expedita facere veniam maiores id est voluptas. Dolorem atque id fugiat.', '{\"title\":\"Mrs. Blanche Lang IV\",\"keywords\":\"Mrs. Blanche Lang IV\",\"description\":\"Mrs. Blanche Lang IV\"}', 'vi', 5),
(10, 'Wanda Stamm', 'wanda-stamm', 'Sint nam porro et ut consequatur. Magnam id repellat eum et. Et nam alias error harum. Ullam laboriosam mollitia tempora eligendi.', 'Veniam adipisci delectus est nostrum molestiae cumque vero. Officiis facilis vel ullam itaque quod eius aut. Quas quia totam quasi labore quos consequuntur vitae. Et autem qui esse sit est.', '{\"title\":\"Wanda Stamm\",\"keywords\":\"Wanda Stamm\",\"description\":\"Wanda Stamm\"}', 'en', 5),
(11, 'Frederic Ankunding', 'frederic-ankunding', 'Distinctio non fugiat expedita voluptatem recusandae. Pariatur maxime reiciendis eos nulla. Vitae harum omnis non pariatur minima.', 'Vel occaecati eum nobis optio. Provident dolorum et quia tempore. Sint nisi facere at iure magni veritatis voluptas. Asperiores odit quo dolores ea quia placeat.', '{\"title\":\"Frederic Ankunding\",\"keywords\":\"Frederic Ankunding\",\"description\":\"Frederic Ankunding\"}', 'vi', 6),
(12, 'Zora O\'Kon', 'zora-okon', 'Quidem error sed eum nam. Deserunt impedit suscipit sed cupiditate. Qui facere sequi quia iusto ut corporis. Ut omnis repellendus recusandae unde eaque est.', 'Qui labore enim quibusdam accusamus ut. Quasi et et ea quia et dolores quod. Delectus et suscipit quia autem animi.', '{\"title\":\"Zora O\'Kon\",\"keywords\":\"Zora O\'Kon\",\"description\":\"Zora O\'Kon\"}', 'en', 6),
(13, 'Ms. Frederique Collier', 'ms-frederique-collier', 'Quia quasi eum iste est eius voluptas similique nihil. Et voluptas aliquam sunt enim. Ullam nisi cum voluptatibus impedit magnam. Excepturi molestiae nihil sed.', 'Minus quia accusantium quae pariatur ullam. Nihil consectetur totam error et fugiat autem. Error optio tempore illo enim sed sed dicta.', '{\"title\":\"Ms. Frederique Collier\",\"keywords\":\"Ms. Frederique Collier\",\"description\":\"Ms. Frederique Collier\"}', 'vi', 7),
(14, 'Alphonso Reichel', 'alphonso-reichel', 'Ut et et nulla nisi deserunt minus et. Deleniti dolores quasi sequi provident recusandae et natus possimus. Eum mollitia ut exercitationem rerum est. Eum at a earum ducimus est optio.', 'Corrupti aspernatur ratione sit architecto sint. Nisi ut soluta quis nostrum voluptas molestiae quia.', '{\"title\":\"Alphonso Reichel\",\"keywords\":\"Alphonso Reichel\",\"description\":\"Alphonso Reichel\"}', 'en', 7),
(15, 'Salma Hahn', 'salma-hahn', 'Quia doloremque nisi adipisci amet doloremque. Magni est ratione autem et perferendis perferendis. Est id velit nihil et ipsa.', 'Ipsum voluptas ut repellat similique consequatur porro. Maiores nam enim velit et et maiores aut. Molestiae sapiente quisquam aut dolore.', '{\"title\":\"Salma Hahn\",\"keywords\":\"Salma Hahn\",\"description\":\"Salma Hahn\"}', 'vi', 8),
(16, 'Albertha Kulas Jr.', 'albertha-kulas-jr', 'Quia voluptatum corrupti nostrum. Eum accusantium blanditiis soluta reiciendis molestiae aliquid. Nisi voluptatem sapiente et accusantium.', 'Harum quae dolorem veniam rerum a iste. Vel sequi atque quam accusamus. Eos ipsa sed maxime aut dolorem neque dolor amet.', '{\"title\":\"Albertha Kulas Jr.\",\"keywords\":\"Albertha Kulas Jr.\",\"description\":\"Albertha Kulas Jr.\"}', 'en', 8),
(17, 'Norbert Flatley', 'norbert-flatley', 'Necessitatibus sequi nulla laboriosam blanditiis cumque ipsum. Dolorum distinctio esse qui optio. Dolor sit earum officia ea. Laudantium fuga unde deserunt natus aut.', 'Ipsam est accusamus provident veniam. Voluptas alias omnis nobis ratione praesentium ut consequatur. Et velit omnis in cupiditate. Nihil consequatur quam delectus maxime voluptatem atque consequatur.', '{\"title\":\"Norbert Flatley\",\"keywords\":\"Norbert Flatley\",\"description\":\"Norbert Flatley\"}', 'vi', 9),
(18, 'Kailyn Koch', 'kailyn-koch', 'Quas dolorem aliquid ut porro et aliquid. Delectus dolore eaque vel et. Soluta eum possimus doloribus explicabo ipsum quam fugit. Neque odit commodi commodi.', 'Voluptatem qui veritatis incidunt perspiciatis itaque. Cumque qui cumque ut sunt iste explicabo consequatur. Praesentium rem qui et minus.', '{\"title\":\"Kailyn Koch\",\"keywords\":\"Kailyn Koch\",\"description\":\"Kailyn Koch\"}', 'en', 9),
(19, 'Deion Collins PhD', 'deion-collins-phd', 'Quibusdam veritatis dolor sint modi quod esse laboriosam veritatis. Ipsam et molestias illum sunt enim. Consectetur natus voluptatibus non non. Debitis incidunt accusamus est et maxime culpa quidem.', 'Quam esse voluptatum aut dolor. Eaque ratione autem optio soluta. Adipisci temporibus voluptatem nostrum repellendus.', '{\"title\":\"Deion Collins PhD\",\"keywords\":\"Deion Collins PhD\",\"description\":\"Deion Collins PhD\"}', 'vi', 10),
(20, 'Orlando Sauer', 'orlando-sauer', 'Modi labore sit quia dignissimos reprehenderit est. Quaerat ab ut accusantium quo. Consectetur et incidunt ipsa impedit.', 'Eligendi molestiae fuga qui. Unde qui dolorem autem dolore nemo in asperiores. Sunt aperiam quod consectetur commodi tempore dolor. Voluptas voluptas ut asperiores similique vel nihil aut.', '{\"title\":\"Orlando Sauer\",\"keywords\":\"Orlando Sauer\",\"description\":\"Orlando Sauer\"}', 'en', 10),
(21, 'Sallie Gulgowski', 'sallie-gulgowski', 'Dolore earum sequi incidunt impedit id vel et. Nesciunt autem nesciunt facilis omnis nesciunt in.', 'Est maxime libero tenetur. Sequi laudantium voluptas quibusdam vitae assumenda nisi incidunt. Totam quaerat non aliquam consequuntur natus.', '{\"title\":\"Sallie Gulgowski\",\"keywords\":\"Sallie Gulgowski\",\"description\":\"Sallie Gulgowski\"}', 'vi', 11),
(22, 'Ashley Erdman', 'ashley-erdman', 'Veritatis quia iste minima sapiente repellendus. Nihil qui ut occaecati laborum voluptatem nihil qui. Vero a id voluptas optio. Distinctio omnis animi ex nobis itaque.', 'Voluptatibus sed nemo aperiam. Repellendus quisquam quae et fuga neque. Doloremque dicta voluptas voluptates alias tempora quos.', '{\"title\":\"Ashley Erdman\",\"keywords\":\"Ashley Erdman\",\"description\":\"Ashley Erdman\"}', 'en', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `contents` longtext COLLATE utf8mb4_unicode_ci,
  `score` tinyint(4) NOT NULL DEFAULT '1',
  `like` int(11) NOT NULL DEFAULT '0',
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `member_id` int(10) UNSIGNED DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `coupon_amount` double NOT NULL DEFAULT '0',
  `number_of_uses` int(11) NOT NULL DEFAULT '0',
  `min_restriction_amount` double NOT NULL DEFAULT '0',
  `max_restriction_amount` double NOT NULL DEFAULT '0',
  `change_conditions_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `begin_at` timestamp NULL DEFAULT NULL,
  `end_at` timestamp NULL DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `used` int(11) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_permission` text COLLATE utf8mb4_unicode_ci,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `link_languages`
--

CREATE TABLE `link_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `media_libraries`
--

CREATE TABLE `media_libraries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) NOT NULL DEFAULT '0',
  `editor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `mime_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `media_libraries`
--

INSERT INTO `media_libraries` (`id`, `image`, `alt`, `link`, `size`, `editor`, `priority`, `status`, `mime_type`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2018-10/avatar-whyus.png', 'avatar_whyus', NULL, 117099, '\"\"', 1, 'publish', 'image/png', 'san-pham', NULL, '2018-10-23 01:37:10', '2018-10-23 01:37:10'),
(2, '2018-10/bg-newsletter.jpg', 'bg_newsletter', NULL, 485990, '\"\"', 1, 'publish', 'image/jpeg', 'san-pham', NULL, '2018-10-23 01:37:10', '2018-10-23 01:37:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(11) NOT NULL DEFAULT '0',
  `province_id` int(11) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oauth_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oauth_provider` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member_password_resets`
--

CREATE TABLE `member_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(196, '2014_10_12_000000_create_users_table', 1),
(197, '2014_10_12_100000_create_password_resets_table', 1),
(198, '2017_03_16_000000_create_members_table', 1),
(199, '2017_03_16_030417_create_member_password_resets_table', 1),
(200, '2017_06_22_030237_create_categories_table', 1),
(201, '2017_06_22_041225_create_category_languages_table', 1),
(202, '2017_06_28_030237_create_suppliers_table', 1),
(203, '2017_07_12_074145_create_products_table', 1),
(204, '2017_07_13_022922_create_product_languages_table', 1),
(205, '2017_07_19_022148_create_attributes_table', 1),
(206, '2017_07_19_043215_create_attribute_languages_table', 1),
(207, '2017_08_05_022238_create_product_attribute_relation_table', 1),
(208, '2017_10_02_032249_create_media_libraries_table', 1),
(209, '2017_12_22_064219_create_posts_table', 1),
(210, '2017_12_22_064418_create_post_languages_table', 1),
(211, '2017_12_22_064447_create_post_attribute_table', 1),
(212, '2017_12_23_184911_create_pages_table', 1),
(213, '2017_12_23_185000_create_page_languages_table', 1),
(214, '2017_12_25_154609_create_photos_table', 1),
(215, '2017_12_25_154624_create_photo_languages_table', 1),
(216, '2017_12_26_092247_create_settings_table', 1),
(217, '2018_01_02_044342_entrust_setup_tables', 1),
(218, '2018_01_09_154609_create_links_table', 1),
(219, '2018_01_09_154624_create_link_languages_table', 1),
(220, '2018_01_10_165341_create_registers_table', 1),
(221, '2018_01_14_160014_create_comments_table', 1),
(222, '2018_02_05_045759_create_coupons_table', 1),
(223, '2018_02_09_082208_create_orders_table', 1),
(224, '2018_02_22_074012_create_wms_stores_table', 1),
(225, '2018_02_23_024649_create_wms_imports_table', 1),
(226, '2018_03_01_061244_create_wms_exports_table', 1),
(227, '2018_03_07_014847_create_groups_table', 1),
(228, '2018_03_08_013630_create_user_group_relation_table', 1),
(229, '2018_03_16_014803_create_jobs_table', 1),
(230, '2018_06_19_205106_create_wms_import_details_table', 1),
(231, '2018_06_19_211210_create_wms_export_details_table', 1),
(232, '2018_06_19_211448_create_order_details_table', 1),
(233, '2018_06_23_224521_create_seos_table', 1),
(234, '2018_06_23_224741_create_seo_languages_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_amount` int(11) NOT NULL DEFAULT '0',
  `shipping` int(11) NOT NULL DEFAULT '0',
  `subtotal` double NOT NULL DEFAULT '0',
  `order_qty` int(11) NOT NULL DEFAULT '0',
  `order_price` double NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `district_id` int(11) NOT NULL DEFAULT '0',
  `province_id` int(11) NOT NULL DEFAULT '0',
  `payment_id` int(11) NOT NULL DEFAULT '0',
  `member_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `status_id` int(11) NOT NULL DEFAULT '1',
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_qty` int(11) NOT NULL DEFAULT '0',
  `product_price` double NOT NULL DEFAULT '0',
  `size_id` int(11) NOT NULL DEFAULT '0',
  `size_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_id` int(11) NOT NULL DEFAULT '0',
  `color_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewed` int(11) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pages`
--

INSERT INTO `pages` (`id`, `link`, `image`, `alt`, `priority`, `status`, `type`, `viewed`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 1, 'publish', 'gioi-thieu', 0, NULL, NULL, '2018-10-22 06:58:32'),
(2, NULL, NULL, NULL, 1, 'publish', 'tuyen-dung', 0, NULL, NULL, NULL),
(3, NULL, NULL, NULL, 1, 'publish', 'lien-he', 0, NULL, NULL, NULL),
(4, NULL, NULL, NULL, 1, 'publish', 'footer', 0, NULL, NULL, NULL),
(5, NULL, '2018-10/single-img-1.jpg', NULL, 1, 'publish', 'san-pham-moi', 0, NULL, '2018-10-22 06:50:40', '2018-10-22 06:51:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `page_languages`
--

CREATE TABLE `page_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `contents` longtext COLLATE utf8mb4_unicode_ci,
  `meta_seo` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `page_languages`
--

INSERT INTO `page_languages` (`id`, `title`, `slug`, `description`, `contents`, `meta_seo`, `language`, `page_id`) VALUES
(1, 'Về chúng tôi', 've-chung-toi', NULL, '<p>What is Lorem Ipsum?<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>Why do we use it?<br />\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p><br />\r\nWhere does it come from?<br />\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p>Where can I get some?<br />\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '{\"title\":null,\"keywords\":null,\"description\":null}', 'vi', 1),
(2, 'Giới thiệu', 'gioi-thieu', NULL, NULL, NULL, 'en', 1),
(3, 'Tuyển dụng', 'tuyen-dung', NULL, NULL, NULL, 'vi', 2),
(4, 'Tuyển dụng', 'tuyen-dung', NULL, NULL, NULL, 'en', 2),
(5, 'Liên hệ', 'lien-he', NULL, NULL, NULL, 'vi', 3),
(6, 'Liên hệ', 'lien-he', NULL, NULL, NULL, 'en', 3),
(7, 'Footer', 'footer', NULL, NULL, NULL, 'vi', 4),
(8, 'Footer', 'footer', NULL, NULL, NULL, 'en', 4),
(9, 'Sản phẩm mới', 'san-pham-moi', 'Lorem ipsum dolor sit amet, consectetur adipisc elit Nam mattis sapien a ipsum dapibus Ut nec massa\r\ndui maecenas vel justo ipsum\r\ntincidunt tempor.', NULL, '{\"title\":null,\"keywords\":null,\"description\":null}', 'vi', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `photos`
--

INSERT INTO `photos` (`id`, `link`, `image`, `alt`, `priority`, `status`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, '2018-10/slider-1.jpg', NULL, 1, 'publish', 'slideshow', NULL, '2018-10-22 06:26:28', '2018-10-22 06:26:28'),
(2, NULL, '2018-10/slider-h9.jpg', NULL, 1, 'publish', 'slideshow', NULL, '2018-10-22 06:26:34', '2018-10-22 06:26:34'),
(3, NULL, '2018-10/banner1.jpg', NULL, 1, 'publish', 'banner', NULL, '2018-10-22 06:40:18', '2018-10-22 06:40:47'),
(4, NULL, '2018-10/banner2.jpg', NULL, 1, 'publish', 'banner', NULL, '2018-10-22 06:40:27', '2018-10-22 06:40:53'),
(5, 'http://demo4.ninavietnam.org/laravel/gioi-thieu', '2018-10/bg-ab-title.jpg', NULL, 1, 'publish', 'background', NULL, '2018-10-22 06:55:22', '2018-10-22 06:55:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `photo_languages`
--

CREATE TABLE `photo_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `photo_languages`
--

INSERT INTO `photo_languages` (`id`, `title`, `description`, `language`, `photo_id`) VALUES
(1, NULL, NULL, 'vi', 1),
(2, NULL, NULL, 'vi', 2),
(3, 'Banner 01', NULL, 'vi', 3),
(4, 'Banner 02', NULL, 'vi', 4),
(5, 'Giới thiệu', NULL, 'vi', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachments` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `category_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewed` int(11) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `link`, `image`, `alt`, `attachments`, `priority`, `status`, `category_id`, `user_id`, `type`, `viewed`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-21 21:58:41'),
(2, NULL, NULL, NULL, NULL, 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-21 21:58:41'),
(3, NULL, NULL, NULL, NULL, 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-21 21:58:41'),
(4, NULL, NULL, NULL, NULL, 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-21 21:58:41'),
(5, NULL, NULL, NULL, NULL, 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-21 21:58:41'),
(6, NULL, NULL, NULL, NULL, 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-21 21:58:41'),
(7, NULL, NULL, NULL, NULL, 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-21 21:58:41'),
(8, NULL, NULL, NULL, NULL, 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-21 21:58:41'),
(9, NULL, NULL, NULL, NULL, 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-21 21:58:41'),
(10, NULL, NULL, NULL, NULL, 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-21 21:58:41'),
(11, NULL, '2018-10/blog11.jpg', NULL, '', 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-22 06:47:59'),
(12, NULL, '2018-10/blog10.jpg', NULL, '', 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-22 06:47:50'),
(13, NULL, '2018-10/blog9.jpg', NULL, '', 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-22 06:47:41'),
(14, NULL, '2018-10/blog7.jpg', NULL, '', 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-22 06:47:17'),
(15, NULL, '2018-10/blog6.jpg', NULL, '', 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-22 06:47:06'),
(16, NULL, '2018-10/blog5.jpg', NULL, '', 1, 'publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-22 06:46:59'),
(17, NULL, '2018-10/blog4.jpg', NULL, '', 1, 'new,publish', 1, 1, 'tin-tuc', 0, NULL, '2018-10-21 21:58:41', '2018-10-22 06:46:45'),
(18, NULL, '2018-10/blog3.jpg', NULL, '', 1, 'new,publish', 1, 1, 'tin-tuc', 1, NULL, '2018-10-21 21:58:41', '2018-10-22 06:46:37'),
(19, NULL, '2018-10/blog2.jpg', NULL, '', 1, 'new,publish', 1, 1, 'tin-tuc', 1, NULL, '2018-10-21 21:58:41', '2018-10-22 06:46:30'),
(20, NULL, '2018-10/blog1.jpg', NULL, '', 1, 'new,publish', 1, 1, 'tin-tuc', 3, NULL, '2018-10-21 21:58:41', '2018-10-22 06:46:22'),
(21, NULL, '2018-10/portfolio1.jpg', NULL, NULL, 1, 'publish', 1, 1, 'bo-suu-tap', 0, NULL, '2018-10-22 06:37:08', '2018-10-22 06:37:08'),
(22, NULL, '2018-10/portfolio2.jpg', NULL, NULL, 1, 'publish', 1, 1, 'bo-suu-tap', 0, NULL, '2018-10-22 06:37:28', '2018-10-22 06:37:28'),
(23, NULL, '2018-10/portfolio3.jpg', NULL, NULL, 1, 'publish', 1, 1, 'bo-suu-tap', 0, NULL, '2018-10-22 06:37:45', '2018-10-22 06:37:45'),
(24, NULL, '2018-10/portfolio4.jpg', NULL, NULL, 1, 'publish', 1, 1, 'bo-suu-tap', 0, NULL, '2018-10-22 06:37:55', '2018-10-22 06:37:55'),
(25, NULL, '2018-10/portfolio5.jpg', NULL, NULL, 1, 'publish', 1, 1, 'bo-suu-tap', 0, NULL, '2018-10-22 06:38:06', '2018-10-22 06:38:06'),
(26, NULL, '2018-10/portfolio6.jpg', NULL, NULL, 1, 'publish', 1, 1, 'bo-suu-tap', 0, NULL, '2018-10-22 06:38:17', '2018-10-22 06:38:17'),
(27, NULL, '2018-10/portfolio7.jpg', NULL, NULL, 1, 'publish', 1, 1, 'bo-suu-tap', 0, NULL, '2018-10-22 06:38:29', '2018-10-22 06:38:29'),
(28, NULL, '2018-10/portfolio8.jpg', NULL, NULL, 1, 'publish', 1, 1, 'bo-suu-tap', 0, NULL, '2018-10-22 06:38:43', '2018-10-22 06:38:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_attribute`
--

CREATE TABLE `post_attribute` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_languages`
--

CREATE TABLE `post_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `contents` longtext COLLATE utf8mb4_unicode_ci,
  `attributes` text COLLATE utf8mb4_unicode_ci,
  `meta_seo` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_languages`
--

INSERT INTO `post_languages` (`id`, `title`, `slug`, `description`, `contents`, `attributes`, `meta_seo`, `language`, `post_id`) VALUES
(1, 'Alec Abbott', 'alec-abbott', 'Et accusantium esse soluta ipsum sunt. Aperiam quia nostrum a nam veniam tenetur.', 'Ut provident expedita nisi. Ipsam et molestiae deserunt mollitia dolorum occaecati ut. Id explicabo possimus ea.', NULL, '{\"title\":\"Alec Abbott\",\"keywords\":\"Alec Abbott\",\"description\":\"Alec Abbott\"}', 'vi', 1),
(2, 'Brandyn Corwin PhD', 'brandyn-corwin-phd', 'Ea quam explicabo et. Magnam recusandae similique perferendis dolores architecto fuga officiis. Voluptates et et velit consequatur hic odit eius. Atque eligendi id vitae dolor aperiam nulla.', 'Quibusdam minima accusantium occaecati sit magni minus. Voluptas quos eius ut quos qui sed. Nostrum dolorem vel sequi voluptatum neque aut consequatur ea. Et architecto cupiditate aut excepturi sit voluptas.', NULL, '{\"title\":\"Brandyn Corwin PhD\",\"keywords\":\"Brandyn Corwin PhD\",\"description\":\"Brandyn Corwin PhD\"}', 'en', 1),
(3, 'Enid O\'Connell', 'enid-oconnell', 'Ut culpa harum consequuntur. Rerum magni impedit id dolorum. Et voluptas voluptas similique officiis tenetur optio harum atque. Exercitationem enim vitae illum commodi. Cumque sequi tenetur aut ut.', 'Dolorum ullam quas pariatur cupiditate quia. Alias fugiat modi dolor enim aut nulla. Laborum dolor corrupti nihil quo cupiditate et.', NULL, '{\"title\":\"Enid O\'Connell\",\"keywords\":\"Enid O\'Connell\",\"description\":\"Enid O\'Connell\"}', 'vi', 2),
(4, 'Jaren Blanda MD', 'jaren-blanda-md', 'Autem officia voluptates autem quam qui rem molestiae id. Id architecto ad quo tenetur consequatur nulla. Commodi a et quis nemo.', 'Illum nulla possimus quia. In ut aliquid esse veniam. Id itaque sit id.', NULL, '{\"title\":\"Jaren Blanda MD\",\"keywords\":\"Jaren Blanda MD\",\"description\":\"Jaren Blanda MD\"}', 'en', 2),
(5, 'Quinton Stracke', 'quinton-stracke', 'Harum quos optio non est. Minus ducimus quos incidunt. Qui vitae nam assumenda aut qui cumque aut.', 'Repellendus quo eos asperiores rerum repellendus distinctio harum. Voluptatum est omnis ipsa. Fuga perferendis rerum et maiores suscipit.', NULL, '{\"title\":\"Quinton Stracke\",\"keywords\":\"Quinton Stracke\",\"description\":\"Quinton Stracke\"}', 'vi', 3),
(6, 'Yvette Hammes', 'yvette-hammes', 'Sed nihil laborum molestiae alias. Maxime sit doloremque repudiandae voluptatem neque velit. Aut quam non qui ipsam aut ad.', 'Sit aperiam omnis aut vel fugit rem animi. Rerum in modi deleniti numquam pariatur amet. Veritatis eum quos et dolores ut debitis quisquam perspiciatis.', NULL, '{\"title\":\"Yvette Hammes\",\"keywords\":\"Yvette Hammes\",\"description\":\"Yvette Hammes\"}', 'en', 3),
(7, 'Mrs. Valerie Brown', 'mrs-valerie-brown', 'Reprehenderit placeat voluptatem iusto architecto eius iste. Sit debitis eum cum ut ad. Numquam tempora ab harum est. Dicta quos enim sunt nemo incidunt.', 'Aut et qui asperiores est dolores nulla. Blanditiis unde exercitationem quo dolorum corrupti et. Iste nulla sapiente debitis adipisci ut.', NULL, '{\"title\":\"Mrs. Valerie Brown\",\"keywords\":\"Mrs. Valerie Brown\",\"description\":\"Mrs. Valerie Brown\"}', 'vi', 4),
(8, 'Gavin Eichmann', 'gavin-eichmann', 'Dolor aspernatur est assumenda consectetur explicabo aut occaecati. Consectetur illo quo recusandae tenetur qui. Asperiores eum est doloremque et.', 'Distinctio et et omnis amet maxime. Rerum accusamus amet maxime aliquam necessitatibus incidunt. Ullam commodi voluptatum ipsam natus voluptatum pariatur nihil. Eos earum consectetur non et quo cumque recusandae.', NULL, '{\"title\":\"Gavin Eichmann\",\"keywords\":\"Gavin Eichmann\",\"description\":\"Gavin Eichmann\"}', 'en', 4),
(9, 'Jonatan Streich DDS', 'jonatan-streich-dds', 'Quas sapiente nulla at ea qui aut eum. Neque dignissimos atque et voluptatem officiis eaque voluptatibus fuga. Repellendus dolore quas animi nisi quam ducimus. Iure a et placeat aut.', 'Vitae fugiat ipsum aut in voluptatum deleniti illum similique. Harum consequatur nulla quam autem vel omnis magni. Cumque perspiciatis ut quo quam. Sint similique nihil nam et autem corporis. Dolorem nihil dolores quasi exercitationem.', NULL, '{\"title\":\"Jonatan Streich DDS\",\"keywords\":\"Jonatan Streich DDS\",\"description\":\"Jonatan Streich DDS\"}', 'vi', 5),
(10, 'Kirstin Huels', 'kirstin-huels', 'Qui architecto atque vitae qui qui molestiae ut mollitia. Tenetur ullam quia consequatur similique dolorum. Sed iure ipsa similique in.', 'Nam perferendis enim nesciunt est. Delectus voluptatem voluptate ut consequatur. Minima perspiciatis animi debitis omnis aut.', NULL, '{\"title\":\"Kirstin Huels\",\"keywords\":\"Kirstin Huels\",\"description\":\"Kirstin Huels\"}', 'en', 5),
(11, 'Rey Ratke', 'rey-ratke', 'Impedit quam id amet. Aut et voluptatibus quas amet. Temporibus aut dolores dolorem nesciunt.', 'Dolorem neque cumque enim velit optio ut qui. Sit aliquam quidem ducimus rerum at laborum enim. Aut quos exercitationem earum odio.', NULL, '{\"title\":\"Rey Ratke\",\"keywords\":\"Rey Ratke\",\"description\":\"Rey Ratke\"}', 'vi', 6),
(12, 'Mr. Vince Skiles Sr.', 'mr-vince-skiles-sr', 'Cumque ut adipisci quisquam earum quidem et modi voluptate. Nihil laudantium quo totam error quam ratione excepturi. Voluptatem quisquam et et cumque ullam itaque.', 'Similique animi qui voluptatibus assumenda quisquam nobis. Minus et ea et sint eum non. Vel tempore quis et et sit. Facere inventore quibusdam repellendus quibusdam est iure.', NULL, '{\"title\":\"Mr. Vince Skiles Sr.\",\"keywords\":\"Mr. Vince Skiles Sr.\",\"description\":\"Mr. Vince Skiles Sr.\"}', 'en', 6),
(13, 'Madelynn Toy', 'madelynn-toy', 'Voluptas officia et et velit et non dicta quia. Nemo ea dolorum aut voluptates et molestiae beatae. In vitae voluptates cupiditate sint reiciendis dolores.', 'Velit non voluptatem accusamus ea. Illum ea cupiditate omnis corrupti. Explicabo neque neque voluptate recusandae sed neque. Ab sint ad quo rem voluptatem dicta.', NULL, '{\"title\":\"Madelynn Toy\",\"keywords\":\"Madelynn Toy\",\"description\":\"Madelynn Toy\"}', 'vi', 7),
(14, 'Kailyn Schinner', 'kailyn-schinner', 'Odio et sit illum voluptatum ea aut dolores. Odio delectus exercitationem laboriosam doloremque. Omnis aut cumque dolores nostrum eligendi qui assumenda architecto. Numquam sequi id et sint.', 'Minima est itaque rerum non inventore. Qui ea consequatur et laborum id eaque. Et occaecati inventore eligendi minima et. Consectetur soluta omnis non optio.', NULL, '{\"title\":\"Kailyn Schinner\",\"keywords\":\"Kailyn Schinner\",\"description\":\"Kailyn Schinner\"}', 'en', 7),
(15, 'Jordane Haag', 'jordane-haag', 'Quod necessitatibus eius non unde consequatur voluptatum ad. Ut ratione illum quae rerum est ea quo. Eaque earum non quia reprehenderit ut enim et.', 'Nemo minima dolores ea impedit deserunt quod in. Cum et dolore dolor pariatur recusandae molestias. Neque sunt et ea facere facilis.', NULL, '{\"title\":\"Jordane Haag\",\"keywords\":\"Jordane Haag\",\"description\":\"Jordane Haag\"}', 'vi', 8),
(16, 'Broderick Rosenbaum', 'broderick-rosenbaum', 'Doloremque pariatur sit tempora cumque dolore sit eaque. Asperiores sed suscipit provident eum praesentium minus cupiditate. Et sunt iure vel qui qui.', 'Id eaque laudantium sequi debitis ut occaecati accusantium. Laboriosam repudiandae non dolores recusandae. Perferendis quisquam incidunt ab dignissimos voluptatibus. Alias itaque iusto sunt beatae dicta id animi repellat.', NULL, '{\"title\":\"Broderick Rosenbaum\",\"keywords\":\"Broderick Rosenbaum\",\"description\":\"Broderick Rosenbaum\"}', 'en', 8),
(17, 'Mrs. Sophie Kassulke', 'mrs-sophie-kassulke', 'Libero quia eos illum voluptatem rerum et qui. Ut temporibus et illo qui minima. Voluptates in est libero dignissimos eius. Iure blanditiis deleniti vitae libero et.', 'Similique provident nostrum facere excepturi. Quis repellat vero molestiae facere quisquam. Perspiciatis quia occaecati vel rerum fugiat. Odit in in labore qui.', NULL, '{\"title\":\"Mrs. Sophie Kassulke\",\"keywords\":\"Mrs. Sophie Kassulke\",\"description\":\"Mrs. Sophie Kassulke\"}', 'vi', 9),
(18, 'Yadira Muller', 'yadira-muller', 'Qui atque eos tempora officiis. Velit eos sed totam reprehenderit quia rem. Sit earum officia vitae aut. Tempora mollitia temporibus fugit provident iusto porro.', 'Animi modi id dolor similique architecto. Enim voluptas autem deserunt omnis optio aut sint rerum. Reiciendis vel eligendi rerum et aut. Non omnis animi beatae molestiae dolor.', NULL, '{\"title\":\"Yadira Muller\",\"keywords\":\"Yadira Muller\",\"description\":\"Yadira Muller\"}', 'en', 9),
(19, 'Arjun Russel DDS', 'arjun-russel-dds', 'Animi sequi perspiciatis rem sed numquam. Sequi inventore rerum asperiores dicta rem non.', 'Aliquid temporibus excepturi qui eos facere. Debitis voluptate ratione ut quo. Fuga dolor sint minima molestiae asperiores mollitia sunt.', NULL, '{\"title\":\"Arjun Russel DDS\",\"keywords\":\"Arjun Russel DDS\",\"description\":\"Arjun Russel DDS\"}', 'vi', 10),
(20, 'Miss Esther Paucek', 'miss-esther-paucek', 'Eos rerum incidunt omnis et veniam. Eligendi voluptas rerum facere necessitatibus qui nulla. Aperiam commodi magnam nulla omnis voluptas natus eos. Earum et dolores et.', 'Maiores ut culpa quaerat asperiores et. Aperiam debitis assumenda non fuga saepe numquam iste assumenda. Tempore asperiores cum et. Dolorem sit qui aperiam maxime ullam eaque possimus.', NULL, '{\"title\":\"Miss Esther Paucek\",\"keywords\":\"Miss Esther Paucek\",\"description\":\"Miss Esther Paucek\"}', 'en', 10),
(21, 'Nannie Borer', 'nannie-borer', 'Provident laborum voluptas aut est aperiam quis aperiam enim. Totam ratione qui in esse rem unde. Perspiciatis eius itaque nesciunt dicta rerum eligendi sapiente est.', '<p>Veniam autem aut quo consequuntur est itaque dolore. Praesentium ut reiciendis sunt ea non sit. Quibusdam neque nesciunt consequatur quia dignissimos quibusdam repellat.</p>', NULL, '{\"title\":\"Nannie Borer\",\"keywords\":\"Nannie Borer\",\"description\":\"Nannie Borer\"}', 'vi', 11),
(22, 'Geovanni Jast', 'geovanni-jast', 'Sit dolores nobis eos. Non omnis laudantium iusto reprehenderit eius ipsa animi beatae. Unde reiciendis eum aut amet. Sint illum reprehenderit consequatur accusamus sint voluptas accusamus.', 'Ut sunt occaecati suscipit eos autem impedit. Illum maxime doloribus reiciendis qui sit inventore reiciendis quia. Repellat illum eos deleniti delectus voluptatem eligendi. Quos est non rerum harum in in dignissimos aut.', NULL, '{\"title\":\"Geovanni Jast\",\"keywords\":\"Geovanni Jast\",\"description\":\"Geovanni Jast\"}', 'en', 11),
(23, 'Marco Ankunding', 'marco-ankunding', 'Consectetur numquam sint consequatur et ullam in quisquam. Sint quos cumque maiores assumenda dolor magni distinctio. Hic tenetur sit velit voluptatem in alias hic. Cupiditate sunt sit non alias.', '<p>Nobis consequuntur ipsum rerum. Similique deserunt totam cumque nemo pariatur sunt recusandae.</p>', NULL, '{\"title\":\"Marco Ankunding\",\"keywords\":\"Marco Ankunding\",\"description\":\"Marco Ankunding\"}', 'vi', 12),
(24, 'Eldred Turner DVM', 'eldred-turner-dvm', 'Consequatur culpa praesentium dignissimos quaerat doloremque. Nihil sunt porro quisquam exercitationem. Consectetur hic et odio et quo.', 'Ea minus eos quisquam quam eum. Mollitia esse repellat quia voluptate. Dicta nemo necessitatibus quisquam.', NULL, '{\"title\":\"Eldred Turner DVM\",\"keywords\":\"Eldred Turner DVM\",\"description\":\"Eldred Turner DVM\"}', 'en', 12),
(25, 'Vincent Walker', 'vincent-walker', 'Debitis tempore voluptate quis accusamus maiores. Dolorem voluptatem aliquid qui. Ut et vero consectetur.', '<p>Quia sit voluptatem dolorem pariatur omnis blanditiis. Aut iusto sunt aliquid perspiciatis vitae ad.</p>', NULL, '{\"title\":\"Vincent Walker\",\"keywords\":\"Vincent Walker\",\"description\":\"Vincent Walker\"}', 'vi', 13),
(26, 'Ms. Reanna Grady', 'ms-reanna-grady', 'Voluptas perferendis animi amet esse maiores in minima. In cum rem minima amet modi et omnis. Expedita nihil cum debitis.', 'Velit amet velit ipsam blanditiis quae. Quo facere sequi est dolore. Perspiciatis molestiae officiis neque est.', NULL, '{\"title\":\"Ms. Reanna Grady\",\"keywords\":\"Ms. Reanna Grady\",\"description\":\"Ms. Reanna Grady\"}', 'en', 13),
(27, 'Dusty Bahringer III', 'dusty-bahringer-iii', 'Iure repudiandae id porro quaerat dolorem amet necessitatibus voluptates. Reiciendis non eum temporibus. Error beatae cupiditate occaecati voluptatibus distinctio.', '<p>Laudantium excepturi architecto ipsam inventore enim. Eligendi tenetur architecto hic voluptates quaerat sit at voluptatem. Eaque cumque tenetur eaque sit et. Pariatur quia quod iure sit dicta.</p>', NULL, '{\"title\":\"Dusty Bahringer III\",\"keywords\":\"Dusty Bahringer III\",\"description\":\"Dusty Bahringer III\"}', 'vi', 14),
(28, 'Sharon Hammes', 'sharon-hammes', 'Recusandae harum in ea sunt voluptas dolore. Voluptatum impedit aut cumque odit. Nostrum in sit illum quos repellat. Id unde aliquid ut. Qui molestiae est omnis.', 'Sed recusandae unde qui repudiandae atque. Eaque consequatur sed est ea laborum ut. Laborum et sit est perferendis similique.', NULL, '{\"title\":\"Sharon Hammes\",\"keywords\":\"Sharon Hammes\",\"description\":\"Sharon Hammes\"}', 'en', 14),
(29, 'Prof. Jairo Reinger DVM', 'prof-jairo-reinger-dvm', 'Et consequuntur voluptatum qui. Quia harum placeat tempora. Sit expedita beatae quam ea eum consequatur qui. Sunt corrupti ea dolore dolor magni dolores.', '<p>Quia molestias ullam id voluptas quia soluta in. Soluta et officiis ullam minima culpa quis quibusdam. Consequatur voluptas libero odio dolores qui repudiandae ex tempora.</p>', NULL, '{\"title\":\"Prof. Jairo Reinger DVM\",\"keywords\":\"Prof. Jairo Reinger DVM\",\"description\":\"Prof. Jairo Reinger DVM\"}', 'vi', 15),
(30, 'Dr. Robbie Dicki', 'dr-robbie-dicki', 'Quo sequi sit officia sunt sed. Ut delectus voluptatem explicabo ad vel sunt sit. Aut hic consequatur porro dicta error.', 'Distinctio est magnam sed voluptas. Et laboriosam harum dolor asperiores corrupti officiis est. Eligendi dolores dicta ratione eaque.', NULL, '{\"title\":\"Dr. Robbie Dicki\",\"keywords\":\"Dr. Robbie Dicki\",\"description\":\"Dr. Robbie Dicki\"}', 'en', 15),
(31, 'Mrs. Reina Romaguera II', 'mrs-reina-romaguera-ii', 'Facilis quia amet doloremque. Similique expedita sint qui maxime aspernatur itaque animi. Aut id aut voluptatem dolorum.', '<p>Et magni et vitae qui quia voluptates. Cumque iusto qui explicabo omnis iusto illo architecto. Qui est facere vel nam voluptatem. Vitae dignissimos consectetur consequatur sed voluptatem. Tempora distinctio eveniet voluptatum sed velit.</p>', NULL, '{\"title\":\"Mrs. Reina Romaguera II\",\"keywords\":\"Mrs. Reina Romaguera II\",\"description\":\"Mrs. Reina Romaguera II\"}', 'vi', 16),
(32, 'Prof. Floyd Pfeffer', 'prof-floyd-pfeffer', 'Autem doloribus commodi facilis facilis minus. Nisi maxime ut in error ea commodi in sed. Libero ut qui est dicta. Omnis sed aperiam expedita dolores debitis.', 'Natus eum explicabo aut impedit sed cumque. Sunt magnam nihil quas ratione cupiditate enim. Expedita temporibus ducimus porro iure magnam.', NULL, '{\"title\":\"Prof. Floyd Pfeffer\",\"keywords\":\"Prof. Floyd Pfeffer\",\"description\":\"Prof. Floyd Pfeffer\"}', 'en', 16),
(33, 'Niko Howe', 'niko-howe', 'Expedita enim maxime provident accusamus. Quos rerum aperiam veritatis et maiores eius ut. Odio ipsam minus dignissimos et id exercitationem ipsam. Omnis ratione suscipit quo.', '<p>Qui ut ea sint sunt in provident minus. Et ad enim optio expedita excepturi. Dolores eveniet vel dolorem distinctio ipsum odio molestiae dolores.</p>', NULL, '{\"title\":\"Niko Howe\",\"keywords\":\"Niko Howe\",\"description\":\"Niko Howe\"}', 'vi', 17),
(34, 'Manuela King', 'manuela-king', 'Hic nesciunt libero qui velit et. Qui at asperiores distinctio non quam sed qui. Dignissimos perspiciatis aliquam veritatis.', 'Et aliquid qui nihil vel facere perferendis quidem laboriosam. Cum omnis eius voluptatem hic sunt perferendis. Cum incidunt placeat similique voluptatum.', NULL, '{\"title\":\"Manuela King\",\"keywords\":\"Manuela King\",\"description\":\"Manuela King\"}', 'en', 17),
(35, 'Dr. Jaren Welch', 'dr-jaren-welch', 'Culpa molestiae consequatur optio ut quis dolores aut et. Sed dolores itaque eos repellendus. Ipsam fuga rem voluptatibus qui sed repellendus.', '<p>Et labore doloremque temporibus nam. Molestiae voluptatibus delectus recusandae atque vitae laborum aperiam. Assumenda et nemo non. Soluta earum qui minima.</p>', NULL, '{\"title\":\"Dr. Jaren Welch\",\"keywords\":\"Dr. Jaren Welch\",\"description\":\"Dr. Jaren Welch\"}', 'vi', 18),
(36, 'Raquel Champlin', 'raquel-champlin', 'Consequatur omnis error veniam in mollitia. Rem quae impedit qui facilis. Magnam odio laudantium at placeat dolorum optio.', 'Sunt dicta tenetur repellat ut et qui ex. Qui distinctio non voluptatibus nihil.', NULL, '{\"title\":\"Raquel Champlin\",\"keywords\":\"Raquel Champlin\",\"description\":\"Raquel Champlin\"}', 'en', 18),
(37, 'Hettie Torphy', 'hettie-torphy', 'Sunt et quod ipsam dignissimos nobis minima illo. Est libero atque labore qui voluptatibus iusto cum. Quas molestiae porro et. Ipsa voluptatem non et. Nobis atque enim facere atque.', '<p>Aperiam ut est quia esse. Voluptas asperiores ut ipsam excepturi eum est. Dicta eligendi praesentium quasi voluptatibus vitae hic fuga.</p>', NULL, '{\"title\":\"Hettie Torphy\",\"keywords\":\"Hettie Torphy\",\"description\":\"Hettie Torphy\"}', 'vi', 19),
(38, 'Anahi Hilll', 'anahi-hilll', 'Tenetur totam quis doloremque. Alias vitae saepe laboriosam animi optio possimus omnis. Repellat omnis fugit cum praesentium qui. Eum omnis enim dolores totam nemo occaecati.', 'Itaque numquam aspernatur dolor recusandae quidem. Nemo aut fuga sit dicta. Pariatur sed dolores dolores porro magni aut culpa. Ullam ipsam nam eum sunt.', NULL, '{\"title\":\"Anahi Hilll\",\"keywords\":\"Anahi Hilll\",\"description\":\"Anahi Hilll\"}', 'en', 19),
(39, 'Abigail Reynolds', 'abigail-reynolds', 'Nostrum eaque placeat assumenda alias qui. A incidunt magnam repellendus nihil quasi occaecati. Dolor omnis explicabo eveniet voluptas et qui.', '<p>Animi alias eligendi in nisi dolor nulla autem. Et temporibus neque aliquid est. Voluptates et recusandae est eos eveniet debitis quia quod.</p>', NULL, '{\"title\":\"Abigail Reynolds\",\"keywords\":\"Abigail Reynolds\",\"description\":\"Abigail Reynolds\"}', 'vi', 20),
(40, 'Marcelina Fadel', 'marcelina-fadel', 'Qui eum molestias aliquid voluptatem quod fugit. Praesentium cupiditate sunt qui quo sint. Porro debitis consequuntur iste expedita nemo.', 'Et debitis nostrum ipsam nulla numquam officia. Sapiente corrupti saepe ex aut quisquam. Autem quam non distinctio ut quia pariatur officiis minima. Corporis sunt tenetur fuga illum natus eum perspiciatis.', NULL, '{\"title\":\"Marcelina Fadel\",\"keywords\":\"Marcelina Fadel\",\"description\":\"Marcelina Fadel\"}', 'en', 20),
(41, 'Bộ sưu tập 01', 'bo-suu-tap-01', NULL, NULL, NULL, '{\"title\":null,\"keywords\":null,\"description\":null}', 'vi', 21),
(42, 'Bộ sưu tập 02', 'bo-suu-tap-02', NULL, NULL, NULL, '{\"title\":null,\"keywords\":null,\"description\":null}', 'vi', 22),
(43, 'Bộ sưu tập 03', 'bo-suu-tap-03', NULL, NULL, NULL, '{\"title\":null,\"keywords\":null,\"description\":null}', 'vi', 23),
(44, 'Bộ sưu tập 04', 'bo-suu-tap-04', NULL, NULL, NULL, '{\"title\":null,\"keywords\":null,\"description\":null}', 'vi', 24),
(45, 'Bộ sưu tập 05', 'bo-suu-tap-05', NULL, NULL, NULL, '{\"title\":null,\"keywords\":null,\"description\":null}', 'vi', 25),
(46, 'Bộ sưu tập 06', 'bo-suu-tap-06', NULL, NULL, NULL, '{\"title\":null,\"keywords\":null,\"description\":null}', 'vi', 26),
(47, 'Bộ sưu tập 07', 'bo-suu-tap-07', NULL, NULL, NULL, '{\"title\":null,\"keywords\":null,\"description\":null}', 'vi', 27),
(48, 'Bộ sưu tập 08', 'bo-suu-tap-08', NULL, NULL, NULL, '{\"title\":null,\"keywords\":null,\"description\":null}', 'vi', 28);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` double NOT NULL DEFAULT '0',
  `sale_price` double NOT NULL DEFAULT '0',
  `original_price` double NOT NULL DEFAULT '0',
  `weight` int(11) NOT NULL DEFAULT '0',
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachments` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `supplier_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewed` int(11) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `code`, `regular_price`, `sale_price`, `original_price`, `weight`, `link`, `image`, `alt`, `attachments`, `priority`, `status`, `supplier_id`, `category_id`, `user_id`, `type`, `viewed`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '92065', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(2, '78', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(3, '75909', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(4, '62013177', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(5, '2', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(6, '604008', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(7, '8156717', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(8, '8867668', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(9, '53162', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(10, '83171750', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(11, '877', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(12, '20', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(13, '626232', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(14, '7360831', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(15, '3', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(16, '91259680', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(17, '63674729', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(18, '977102521', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(19, '33139', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(20, '928', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(21, '414460', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(22, '36621888', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(23, '32', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(24, '92690332', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(25, '963208', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(26, '12176634', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(27, '4', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(28, '753798', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(29, '19', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(30, '953205550', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(31, '97', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(32, '5487113', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(33, '272', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(34, '242', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(35, '88805', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:39', '2018-10-21 21:58:39'),
(36, '5', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(37, '412', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(38, '994', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(39, '79937560', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(40, '711127092', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(41, '52', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(42, '67694', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(43, '1622', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(44, '33366189', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(45, '727568585', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(46, '48', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(47, '682', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(48, '3152', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(49, '0', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(50, '853', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(51, '87443460', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(52, '12915496', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(53, '12', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(54, '3745072', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(55, '1660236', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(56, '8993325', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(57, '58160881', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(58, '693', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(59, '1', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(60, '46', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(61, '284008', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(62, '9', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(63, '61', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(64, '536709', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(65, '708528034', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(66, '7918090', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(67, '368802', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(68, '3778412', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(69, '65341032', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(70, '348', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(71, '43145', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(72, '758', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(73, '72156165', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(74, '94', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(75, '7679', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(76, '3484377', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(77, '3111785', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(78, '966', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(79, '6771', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(80, '661714', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(81, '359342570', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(82, '455849', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(83, '484888210', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(84, '8', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(85, '628', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(86, '771', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(87, '91489564', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(88, '8889', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(89, '2559', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(90, '2519639', 290000, 200000, 50000, 500, NULL, NULL, NULL, NULL, 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-21 21:58:40'),
(91, '125225997', 290000, 200000, 50000, 500, NULL, '2018-10/product10.jpg', NULL, '', 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-22 06:32:11'),
(92, '452066565', 290000, 200000, 50000, 500, NULL, '2018-10/product9.jpg', NULL, '', 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-22 06:31:59'),
(93, '415162', 290000, 200000, 50000, 500, NULL, '2018-10/product8.jpg', NULL, '', 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-22 06:31:47'),
(94, '5883319', 290000, 200000, 50000, 500, NULL, '2018-10/product7.jpg', NULL, '', 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-22 06:31:38'),
(95, '72', 290000, 200000, 50000, 500, NULL, '2018-10/product6.jpg', NULL, '', 1, 'publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-22 06:31:27'),
(96, '1009', 290000, 200000, 50000, 500, NULL, '2018-10/product5.jpg', NULL, '', 1, 'new,publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-22 06:31:18'),
(97, '799330', 290000, 200000, 50000, 500, NULL, '2018-10/product4.jpg', NULL, '', 1, 'new,publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-22 06:31:09'),
(98, '101', 290000, 200000, 50000, 500, NULL, '2018-10/product3.jpg', NULL, '', 1, 'new,publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-22 06:31:01'),
(99, '626526387', 290000, 200000, 50000, 500, NULL, '2018-10/product2.jpg', NULL, '', 1, 'new,publish', NULL, 1, 1, 'san-pham', 0, NULL, '2018-10-21 21:58:40', '2018-10-22 06:30:53'),
(100, '6', 290000, 200000, 50000, 500, NULL, '2018-10/product1.jpg', NULL, '1,2', 1, 'new,publish', NULL, 1, 1, 'san-pham', 2, NULL, '2018-10-21 21:58:40', '2018-10-23 01:37:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_attribute`
--

CREATE TABLE `product_attribute` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_languages`
--

CREATE TABLE `product_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `contents` longtext COLLATE utf8mb4_unicode_ci,
  `attributes` text COLLATE utf8mb4_unicode_ci,
  `meta_seo` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_languages`
--

INSERT INTO `product_languages` (`id`, `title`, `slug`, `description`, `contents`, `attributes`, `meta_seo`, `language`, `product_id`) VALUES
(1, 'Abagail Witting', 'abagail-witting', 'Itaque quasi non omnis qui quis. Rerum amet nesciunt vel est eveniet laborum est suscipit. Explicabo quo omnis fugiat dolor excepturi occaecati. Voluptatem eaque non neque asperiores.', 'Placeat aut consequatur maxime ab eos quod. Tempora nisi consequatur magnam saepe tempora hic quos. Consequuntur omnis quasi pariatur. Assumenda ut quia quia nulla neque beatae distinctio voluptas.', NULL, '{\"title\":\"Abagail Witting\",\"keywords\":\"Abagail Witting\",\"description\":\"Abagail Witting\"}', 'vi', 1),
(2, 'Trevion Gaylord', 'trevion-gaylord', 'Dolor et minus esse quas a. Neque quia est velit. Doloremque ullam eveniet praesentium fugit quod et. Et est eos quasi amet expedita accusantium voluptatum numquam.', 'Temporibus voluptatem iusto velit sint ut. Similique saepe laboriosam asperiores et. Magni officiis minus blanditiis corporis omnis.', NULL, '{\"title\":\"Trevion Gaylord\",\"keywords\":\"Trevion Gaylord\",\"description\":\"Trevion Gaylord\"}', 'en', 1),
(3, 'Lura Steuber', 'lura-steuber', 'Distinctio dolores eos dolore et mollitia. At debitis accusamus iste labore sunt ut enim. Facere id est reprehenderit velit.', 'Voluptatibus quas dolores cupiditate esse dolorem dolorum. Nemo consectetur enim magni similique consequatur eligendi qui omnis.', NULL, '{\"title\":\"Lura Steuber\",\"keywords\":\"Lura Steuber\",\"description\":\"Lura Steuber\"}', 'vi', 2),
(4, 'Prof. Jed Thiel Sr.', 'prof-jed-thiel-sr', 'Reprehenderit qui excepturi iste fugiat eaque illo. Magni fuga autem eos quis aut cum officia.', 'Unde sed fugiat earum velit tempora voluptas vero. Ut accusamus non placeat. Provident nisi commodi nulla dolorum quisquam.', NULL, '{\"title\":\"Prof. Jed Thiel Sr.\",\"keywords\":\"Prof. Jed Thiel Sr.\",\"description\":\"Prof. Jed Thiel Sr.\"}', 'en', 2),
(5, 'Ulices Muller', 'ulices-muller', 'Impedit illo magnam perferendis et corrupti quos nostrum eaque. Quaerat necessitatibus qui nisi consequatur. Et aut at et sed voluptas. Voluptate beatae consequatur quas illo nulla blanditiis.', 'Aut rerum rerum ut ratione consequatur culpa perspiciatis. Repellat sit ut repellat tenetur tempora dolorum. Vero sunt voluptates dolores eveniet.', NULL, '{\"title\":\"Ulices Muller\",\"keywords\":\"Ulices Muller\",\"description\":\"Ulices Muller\"}', 'vi', 3),
(6, 'Dr. Yvette Botsford', 'dr-yvette-botsford', 'Aperiam dolores voluptas occaecati quae voluptas rem. Incidunt quibusdam in doloribus impedit qui ad ipsum. Qui vel eum praesentium quo aut ullam aut adipisci. Aut non velit pariatur.', 'Sed impedit et eos quia perspiciatis. Nam et officia sed et. Nostrum nihil quaerat sequi et dolorum cupiditate.', NULL, '{\"title\":\"Dr. Yvette Botsford\",\"keywords\":\"Dr. Yvette Botsford\",\"description\":\"Dr. Yvette Botsford\"}', 'en', 3),
(7, 'Marcus Herman', 'marcus-herman', 'Atque veritatis neque culpa corrupti. Ipsam sed omnis ut autem ea expedita et. Reiciendis enim qui velit est cumque alias. Odio ex et asperiores non occaecati labore.', 'Eveniet eligendi porro sint et qui ex. Ipsa harum autem voluptatum possimus voluptas consequuntur labore dolore. Praesentium aut qui impedit laudantium ut. Aliquam eligendi aliquid sit saepe.', NULL, '{\"title\":\"Marcus Herman\",\"keywords\":\"Marcus Herman\",\"description\":\"Marcus Herman\"}', 'vi', 4),
(8, 'Ms. Kaia Murazik', 'ms-kaia-murazik', 'Et saepe non quos et. Sequi dicta quo ab illo. Sunt iste qui ut earum.', 'Praesentium occaecati nemo repellat voluptate asperiores consequatur. Dolor eaque nemo maxime. Accusamus voluptas corrupti beatae et atque.', NULL, '{\"title\":\"Ms. Kaia Murazik\",\"keywords\":\"Ms. Kaia Murazik\",\"description\":\"Ms. Kaia Murazik\"}', 'en', 4),
(9, 'Ms. Cathrine Swift PhD', 'ms-cathrine-swift-phd', 'Ullam aut quod iusto esse doloremque vero commodi. Veniam illo omnis quia molestiae. Sunt laboriosam fugit rerum provident ut quae adipisci voluptatum. Ut aspernatur vitae eos numquam in.', 'Aspernatur aspernatur reprehenderit nisi quidem qui atque. Magnam vero labore iste cupiditate doloremque rerum et. Maiores autem inventore rerum natus eaque ea minus.', NULL, '{\"title\":\"Ms. Cathrine Swift PhD\",\"keywords\":\"Ms. Cathrine Swift PhD\",\"description\":\"Ms. Cathrine Swift PhD\"}', 'vi', 5),
(10, 'Prof. Douglas Kuhn', 'prof-douglas-kuhn', 'Ab ut dolorem deleniti. Similique aut perferendis nihil veniam earum recusandae. Sapiente ipsa et quasi fugit qui laboriosam consequuntur dolor.', 'Veniam voluptas corporis reiciendis reiciendis recusandae earum est. Voluptatem quasi iusto maiores consequuntur fugiat. Tempore velit aut maxime ab et illo. Magni nesciunt quia tenetur est sequi aut.', NULL, '{\"title\":\"Prof. Douglas Kuhn\",\"keywords\":\"Prof. Douglas Kuhn\",\"description\":\"Prof. Douglas Kuhn\"}', 'en', 5),
(11, 'Antonetta Zulauf', 'antonetta-zulauf', 'Sit vero tempore beatae officiis aspernatur dolores est voluptatem. Sit sed aut rerum. Sunt dolor sunt aliquam tenetur exercitationem. Et explicabo libero laudantium animi possimus quaerat.', 'Ut ipsa nisi perferendis eos impedit. Aliquam dignissimos voluptatem soluta vitae. Culpa ad qui quis facilis dolorem aliquam voluptatem. Quidem et ab esse sint quo quae et.', NULL, '{\"title\":\"Antonetta Zulauf\",\"keywords\":\"Antonetta Zulauf\",\"description\":\"Antonetta Zulauf\"}', 'vi', 6),
(12, 'Bulah Ondricka', 'bulah-ondricka', 'Qui autem quidem consectetur ratione saepe et. Nisi qui exercitationem ab voluptatem reprehenderit. Ea et quaerat consequuntur esse perspiciatis.', 'Aperiam perspiciatis modi consequatur ea voluptatibus. Voluptatem ducimus qui quia nam et dicta. In eos et aut repellendus exercitationem delectus nostrum. Provident quos illum exercitationem porro eaque.', NULL, '{\"title\":\"Bulah Ondricka\",\"keywords\":\"Bulah Ondricka\",\"description\":\"Bulah Ondricka\"}', 'en', 6),
(13, 'Tyree Torp', 'tyree-torp', 'Ipsa facilis doloremque praesentium. Eum voluptatem ad earum veritatis eaque voluptatem. Quod qui et quia repellat. Reiciendis optio tempora quasi temporibus.', 'Sint eum doloribus rem ipsum. Nostrum eum repellat minus. Assumenda aut neque temporibus dolores asperiores et. Voluptas quia aut voluptatem quas enim ex. Beatae qui eum necessitatibus quia animi.', NULL, '{\"title\":\"Tyree Torp\",\"keywords\":\"Tyree Torp\",\"description\":\"Tyree Torp\"}', 'vi', 7),
(14, 'Harrison McLaughlin', 'harrison-mclaughlin', 'Laudantium iure aut eaque. Quo ab eveniet commodi facilis id qui minus. Cum dolor et et autem ut temporibus. Iure corporis assumenda eveniet amet fugiat et eligendi.', 'Dolorum sunt fuga consequatur dolorum. Maxime cumque inventore recusandae temporibus. Ut iure alias minima quo illo eaque architecto.', NULL, '{\"title\":\"Harrison McLaughlin\",\"keywords\":\"Harrison McLaughlin\",\"description\":\"Harrison McLaughlin\"}', 'en', 7),
(15, 'Josianne Sporer', 'josianne-sporer', 'Delectus quasi qui aliquam ratione et iusto. Harum illum perferendis ut quos assumenda quam voluptatem. Exercitationem enim quia sit alias dignissimos aut fugit.', 'Qui nihil consequatur ut nemo et repudiandae non. Autem voluptatem eius dolores commodi est velit. Quibusdam delectus animi ut ut aut quia amet dolore.', NULL, '{\"title\":\"Josianne Sporer\",\"keywords\":\"Josianne Sporer\",\"description\":\"Josianne Sporer\"}', 'vi', 8),
(16, 'Davonte Windler', 'davonte-windler', 'Excepturi sunt voluptas quia qui doloremque. Sed dolores tempore ex ea porro. Animi qui ratione iste consectetur.', 'Dolore aperiam itaque quod nemo eum praesentium saepe. Illum consequatur quis optio eum. Iste dolorem rerum laborum autem omnis nesciunt ab.', NULL, '{\"title\":\"Davonte Windler\",\"keywords\":\"Davonte Windler\",\"description\":\"Davonte Windler\"}', 'en', 8),
(17, 'Prof. Kevon Flatley PhD', 'prof-kevon-flatley-phd', 'Consequatur ut velit omnis eos velit et quo. A repudiandae eum explicabo alias. Et sit odit nam. Laudantium est reiciendis sed fugit sint fugiat non expedita.', 'Eveniet vero laudantium aut ea. Ea odit quidem beatae sit deleniti rerum numquam. Ipsa nisi dolor repudiandae ea eius. Eos sunt ex et nemo consectetur dolore.', NULL, '{\"title\":\"Prof. Kevon Flatley PhD\",\"keywords\":\"Prof. Kevon Flatley PhD\",\"description\":\"Prof. Kevon Flatley PhD\"}', 'vi', 9),
(18, 'Erna Schaefer', 'erna-schaefer', 'Hic velit laudantium nihil dolores. Omnis dolor ducimus fuga aut. Et laudantium assumenda debitis iste earum. Velit corrupti qui quibusdam est voluptatem totam consequatur.', 'Quaerat nesciunt autem quae qui voluptatibus. Quo maiores sunt corrupti dolor similique deserunt. Sit aspernatur temporibus est eius quis dolorem qui. Culpa et sit dolorem ab et aliquam repellendus.', NULL, '{\"title\":\"Erna Schaefer\",\"keywords\":\"Erna Schaefer\",\"description\":\"Erna Schaefer\"}', 'en', 9),
(19, 'Modesto Stanton', 'modesto-stanton', 'Aperiam earum recusandae ex necessitatibus quod repellendus. Quia et ea et sit rerum nulla. Minus repellendus voluptatem cum voluptas reiciendis sunt quibusdam. Ea occaecati eos tempore voluptas id.', 'Debitis ut earum aliquid dolores at. Tempore sit sed in dolor vitae quaerat temporibus. Iste harum qui eligendi sunt atque quo. Omnis laborum unde eos dolore perferendis quam corporis.', NULL, '{\"title\":\"Modesto Stanton\",\"keywords\":\"Modesto Stanton\",\"description\":\"Modesto Stanton\"}', 'vi', 10),
(20, 'Kayla Jerde', 'kayla-jerde', 'Numquam quia qui quis commodi maxime. Facere sed aut soluta ipsam quia.', 'Qui harum necessitatibus quod consectetur similique architecto. Eius vitae aperiam ut molestiae earum. Sit autem aut voluptas sequi.', NULL, '{\"title\":\"Kayla Jerde\",\"keywords\":\"Kayla Jerde\",\"description\":\"Kayla Jerde\"}', 'en', 10),
(21, 'Lillie King', 'lillie-king', 'Sapiente adipisci et vel aut ab et repudiandae. Ad nesciunt neque iste deleniti. Et sit et possimus.', 'Qui molestiae aut sed. Harum quos vitae nihil et voluptatem voluptate. Eum quidem eaque quaerat occaecati inventore est error.', NULL, '{\"title\":\"Lillie King\",\"keywords\":\"Lillie King\",\"description\":\"Lillie King\"}', 'vi', 11),
(22, 'Arch Hudson', 'arch-hudson', 'Dolor in suscipit voluptatum dolorem eos repudiandae. Voluptatum soluta quae aut quibusdam odio eveniet.', 'Pariatur velit ab libero id labore et. Quam culpa repellat optio incidunt laboriosam. Et incidunt aut commodi aut.', NULL, '{\"title\":\"Arch Hudson\",\"keywords\":\"Arch Hudson\",\"description\":\"Arch Hudson\"}', 'en', 11),
(23, 'Derrick Franecki', 'derrick-franecki', 'Est deserunt qui voluptates. Nostrum tempore natus fuga aut. Veniam voluptate vitae eius veritatis. Dignissimos omnis dicta aut nam dolor harum.', 'Nihil dolore alias eos voluptatem voluptatem. Necessitatibus dignissimos sit veritatis et fugit non suscipit. Sint aspernatur commodi facere dolores in. Dolor sapiente veniam temporibus quae debitis. Quia facilis iusto eos soluta.', NULL, '{\"title\":\"Derrick Franecki\",\"keywords\":\"Derrick Franecki\",\"description\":\"Derrick Franecki\"}', 'vi', 12),
(24, 'Prof. Karl Murray', 'prof-karl-murray', 'Ea iste labore ipsam tempore consequatur. Ipsa deserunt totam fuga vel ullam exercitationem. Quia explicabo iste unde dolor atque voluptate et. Quod perspiciatis error velit vel.', 'Ad ipsum aut non ut omnis rerum. Atque minus illum est quibusdam aut autem at. Voluptas possimus sunt fuga ab et.', NULL, '{\"title\":\"Prof. Karl Murray\",\"keywords\":\"Prof. Karl Murray\",\"description\":\"Prof. Karl Murray\"}', 'en', 12),
(25, 'Mrs. Frieda Rippin', 'mrs-frieda-rippin', 'Commodi expedita cupiditate omnis. Numquam ad magnam placeat adipisci. Maxime blanditiis voluptatem amet necessitatibus sed. Minus eius molestiae animi illum. Omnis enim esse voluptatem vero.', 'Inventore illo molestiae mollitia pariatur. Necessitatibus praesentium deleniti sed ut quis. Sit quisquam quos deleniti facilis. Alias ut voluptatem excepturi sunt unde quia. Esse atque possimus itaque qui iste molestiae quas quam.', NULL, '{\"title\":\"Mrs. Frieda Rippin\",\"keywords\":\"Mrs. Frieda Rippin\",\"description\":\"Mrs. Frieda Rippin\"}', 'vi', 13),
(26, 'Marie Brakus II', 'marie-brakus-ii', 'Voluptatum ad earum totam nisi consequatur culpa accusamus. Aut voluptatem nobis non placeat. Quos dolorem ducimus aut voluptate culpa rerum quo.', 'Est sapiente officia unde. Incidunt sed corporis officiis illum cupiditate. Veritatis sit corrupti consectetur consequatur consequuntur quod.', NULL, '{\"title\":\"Marie Brakus II\",\"keywords\":\"Marie Brakus II\",\"description\":\"Marie Brakus II\"}', 'en', 13),
(27, 'Mr. Federico Osinski I', 'mr-federico-osinski-i', 'Rerum quae sit sequi nostrum. Consequuntur quod ut dicta facere. Modi sapiente voluptas eos aspernatur modi perspiciatis cupiditate.', 'Non officiis soluta temporibus sunt laboriosam voluptatem. Tempore ad ipsa recusandae suscipit facilis. Doloremque minima et eveniet aliquid excepturi omnis. Omnis iste architecto dolor consequatur sapiente.', NULL, '{\"title\":\"Mr. Federico Osinski I\",\"keywords\":\"Mr. Federico Osinski I\",\"description\":\"Mr. Federico Osinski I\"}', 'vi', 14),
(28, 'Jany Spinka MD', 'jany-spinka-md', 'Ullam voluptates est est. Molestias corporis voluptas in eveniet odit et rem. Aut tempora rerum dolor eveniet qui.', 'Inventore tenetur enim rem non. Repellendus eligendi sint at fuga eaque.', NULL, '{\"title\":\"Jany Spinka MD\",\"keywords\":\"Jany Spinka MD\",\"description\":\"Jany Spinka MD\"}', 'en', 14),
(29, 'Gia Rodriguez II', 'gia-rodriguez-ii', 'Perspiciatis velit perspiciatis et ipsam. Non impedit dolore quidem molestiae. Voluptatibus maxime ut eos doloribus omnis.', 'Facilis fugit dolore aut aut laboriosam et eaque. Illum quisquam officia recusandae autem harum iste. Deserunt sit autem et. Aut qui omnis consequatur qui ut.', NULL, '{\"title\":\"Gia Rodriguez II\",\"keywords\":\"Gia Rodriguez II\",\"description\":\"Gia Rodriguez II\"}', 'vi', 15),
(30, 'Jude O\'Conner', 'jude-oconner', 'Sunt voluptates quos sapiente provident. Vero praesentium error minima expedita. Est est nisi ut. Blanditiis doloremque nihil in omnis earum aspernatur doloremque.', 'Dolores occaecati veniam illum eum. Quidem adipisci qui veritatis cumque optio velit et ut. In sint dolor veniam itaque.', NULL, '{\"title\":\"Jude O\'Conner\",\"keywords\":\"Jude O\'Conner\",\"description\":\"Jude O\'Conner\"}', 'en', 15),
(31, 'Mrs. Reina Jerde', 'mrs-reina-jerde', 'Aspernatur consequatur magnam sunt sed doloremque ea sed voluptatem. Adipisci provident nisi sapiente eius dicta. Cumque inventore placeat dolorum corporis aut neque iusto.', 'Quaerat natus earum in asperiores. Fuga id voluptas perferendis deleniti vitae sint qui. Minus iste possimus est aut.', NULL, '{\"title\":\"Mrs. Reina Jerde\",\"keywords\":\"Mrs. Reina Jerde\",\"description\":\"Mrs. Reina Jerde\"}', 'vi', 16),
(32, 'Mr. Agustin Daugherty II', 'mr-agustin-daugherty-ii', 'Iure fuga dolor et consequuntur consequuntur inventore harum. Et labore perferendis velit accusantium. Dolorem et facere ut doloremque at.', 'In et aspernatur reprehenderit omnis at facere. Eos vitae est beatae deleniti nihil. Quidem quaerat deserunt non sunt. Molestias mollitia reprehenderit ipsa asperiores perspiciatis iure. Eius qui minus officia quam nobis ut ipsum.', NULL, '{\"title\":\"Mr. Agustin Daugherty II\",\"keywords\":\"Mr. Agustin Daugherty II\",\"description\":\"Mr. Agustin Daugherty II\"}', 'en', 16),
(33, 'Maybelle Olson MD', 'maybelle-olson-md', 'Nesciunt illo ducimus consequuntur consequatur et odio. In commodi in perspiciatis facilis. Optio rerum similique voluptate possimus illum amet ipsa.', 'Aut cum numquam consectetur odit illo ratione voluptas quos. Qui et consequatur tempora qui praesentium tempore.', NULL, '{\"title\":\"Maybelle Olson MD\",\"keywords\":\"Maybelle Olson MD\",\"description\":\"Maybelle Olson MD\"}', 'vi', 17),
(34, 'Dashawn D\'Amore', 'dashawn-damore', 'Doloribus rerum consequuntur minus. Cupiditate voluptatibus minima eligendi quia recusandae. Tempore facilis ipsa doloribus beatae.', 'Tempore minus natus ut quasi commodi quas veritatis. Ut cupiditate in suscipit. Officia velit eveniet et rerum repellat. Temporibus voluptates sed modi distinctio.', NULL, '{\"title\":\"Dashawn D\'Amore\",\"keywords\":\"Dashawn D\'Amore\",\"description\":\"Dashawn D\'Amore\"}', 'en', 17),
(35, 'Kobe Barton', 'kobe-barton', 'Quia molestias quo id eaque voluptas nostrum. Enim vitae earum reiciendis est omnis et. Ratione quia accusamus alias aperiam et voluptatibus. Et voluptatem est itaque qui mollitia.', 'Omnis maiores ex eius et est ducimus ullam sit. Minus reprehenderit doloremque est dolor totam. Omnis delectus perspiciatis dolores maxime sequi debitis.', NULL, '{\"title\":\"Kobe Barton\",\"keywords\":\"Kobe Barton\",\"description\":\"Kobe Barton\"}', 'vi', 18),
(36, 'Nedra Kemmer V', 'nedra-kemmer-v', 'Animi voluptatibus et facilis pariatur facere et eum. Ipsam incidunt veritatis perspiciatis repellendus beatae repudiandae. Tenetur voluptatum et esse mollitia.', 'Et in porro est quas. Ea provident aliquam dolor neque et.', NULL, '{\"title\":\"Nedra Kemmer V\",\"keywords\":\"Nedra Kemmer V\",\"description\":\"Nedra Kemmer V\"}', 'en', 18),
(37, 'Michaela O\'Hara', 'michaela-ohara', 'Distinctio hic quaerat amet explicabo inventore ullam illum. Officiis id rem possimus recusandae. Impedit doloremque occaecati quas. Est sint eaque reprehenderit.', 'Qui esse et nihil quo voluptate sunt quis. Tempora quasi et et. Dignissimos non tempore quis quidem doloremque.', NULL, '{\"title\":\"Michaela O\'Hara\",\"keywords\":\"Michaela O\'Hara\",\"description\":\"Michaela O\'Hara\"}', 'vi', 19),
(38, 'Merlin Heaney Sr.', 'merlin-heaney-sr', 'Placeat ratione pariatur quas ratione optio. Nulla sit et ducimus atque. Officiis consectetur explicabo ea fuga. Quia a quia quia autem doloribus quas assumenda.', 'Asperiores dolorem dolor rerum fuga. Blanditiis porro et cum deleniti ea voluptatum consequuntur. Est quia nihil omnis non exercitationem natus.', NULL, '{\"title\":\"Merlin Heaney Sr.\",\"keywords\":\"Merlin Heaney Sr.\",\"description\":\"Merlin Heaney Sr.\"}', 'en', 19),
(39, 'Dr. Else Thiel', 'dr-else-thiel', 'In dicta earum unde voluptatem. Quod non omnis molestiae qui. Culpa tenetur suscipit sed quod ut. Voluptatem voluptatum tenetur quia repellat.', 'Culpa aut ipsam nihil. Sunt pariatur ut beatae quia. Facilis reiciendis et ab laboriosam ut enim.', NULL, '{\"title\":\"Dr. Else Thiel\",\"keywords\":\"Dr. Else Thiel\",\"description\":\"Dr. Else Thiel\"}', 'vi', 20),
(40, 'Shanna Smith', 'shanna-smith', 'Ipsum ea vel quisquam. Qui et et repellendus vitae laborum deserunt debitis. Et eaque ipsa et amet laudantium totam veritatis.', 'Facilis et autem eveniet a soluta. Qui sapiente aut qui voluptates impedit quod magnam. Et voluptas reprehenderit dolores magni. Ipsum consequatur explicabo architecto voluptatem doloremque magni et provident.', NULL, '{\"title\":\"Shanna Smith\",\"keywords\":\"Shanna Smith\",\"description\":\"Shanna Smith\"}', 'en', 20),
(41, 'Prof. Lexus Smith', 'prof-lexus-smith', 'Est numquam soluta eum voluptatem. Enim veniam aut maiores eveniet voluptatem. Corporis eum animi molestiae.', 'Aliquam voluptas voluptatem quo iure et eaque possimus. Et non voluptas debitis eum rerum quis.', NULL, '{\"title\":\"Prof. Lexus Smith\",\"keywords\":\"Prof. Lexus Smith\",\"description\":\"Prof. Lexus Smith\"}', 'vi', 21),
(42, 'Ms. Zelma Becker', 'ms-zelma-becker', 'Rem aut corrupti voluptas alias est laudantium quibusdam. Placeat explicabo quidem optio fuga in at ratione quod. Ut ut non magni id dolore.', 'Nisi nihil corrupti omnis illum. Sit rerum quas modi repellendus. Modi similique quo quaerat quo eveniet asperiores.', NULL, '{\"title\":\"Ms. Zelma Becker\",\"keywords\":\"Ms. Zelma Becker\",\"description\":\"Ms. Zelma Becker\"}', 'en', 21),
(43, 'Dora Towne Jr.', 'dora-towne-jr', 'Alias vel facilis non illum. Et rem accusamus et et. Et et libero dignissimos voluptates inventore. Occaecati laborum omnis placeat ut facere modi.', 'Et et architecto cum cumque atque ea saepe. Id sed iste ut. Assumenda quaerat est assumenda sunt. Ea at itaque ullam deleniti ducimus rerum.', NULL, '{\"title\":\"Dora Towne Jr.\",\"keywords\":\"Dora Towne Jr.\",\"description\":\"Dora Towne Jr.\"}', 'vi', 22),
(44, 'Evans Beier III', 'evans-beier-iii', 'Quia omnis doloremque quo. Tenetur provident magni est aut occaecati. Nihil beatae et distinctio unde nesciunt fugit. Exercitationem necessitatibus quas expedita earum aut animi.', 'Non ut et quae. Deleniti consequuntur deleniti temporibus accusamus eveniet excepturi.', NULL, '{\"title\":\"Evans Beier III\",\"keywords\":\"Evans Beier III\",\"description\":\"Evans Beier III\"}', 'en', 22),
(45, 'Paul Renner', 'paul-renner', 'Consequatur assumenda consequuntur fuga voluptatem. In aut vitae odit quo. Aspernatur delectus id repellendus dolorem est assumenda mollitia.', 'Quia velit itaque voluptas dicta odio. Excepturi et ut quae quae voluptatibus omnis sint. Aliquid laborum sit aliquid. Asperiores dolor voluptatem commodi ut.', NULL, '{\"title\":\"Paul Renner\",\"keywords\":\"Paul Renner\",\"description\":\"Paul Renner\"}', 'vi', 23),
(46, 'Agnes Graham', 'agnes-graham', 'Porro corrupti facilis soluta sit cum esse omnis. Consequatur impedit autem quia. Autem quis sit ut nisi a.', 'Cumque et at quae alias amet. Repellat maiores explicabo consequatur repellat autem sed eos quidem. Quia reprehenderit et aperiam nam.', NULL, '{\"title\":\"Agnes Graham\",\"keywords\":\"Agnes Graham\",\"description\":\"Agnes Graham\"}', 'en', 23),
(47, 'Mr. Tanner Lockman', 'mr-tanner-lockman', 'Distinctio qui et inventore voluptates quae. Adipisci velit veniam qui recusandae. Repellendus iusto ea quis explicabo commodi necessitatibus.', 'Nobis quas eos totam. Sed repudiandae quibusdam et nam similique est fugit. Sit autem sed et ipsum. Vel et tempora laboriosam numquam.', NULL, '{\"title\":\"Mr. Tanner Lockman\",\"keywords\":\"Mr. Tanner Lockman\",\"description\":\"Mr. Tanner Lockman\"}', 'vi', 24),
(48, 'Lionel Hyatt IV', 'lionel-hyatt-iv', 'Facilis officia molestiae velit ipsa quasi in. Eum odio minima dolore. Sint impedit beatae beatae velit.', 'Est corporis asperiores quasi natus delectus ullam. Corrupti recusandae ab veniam dolorem ex corrupti nesciunt. Rerum illo veritatis cupiditate maxime totam delectus a.', NULL, '{\"title\":\"Lionel Hyatt IV\",\"keywords\":\"Lionel Hyatt IV\",\"description\":\"Lionel Hyatt IV\"}', 'en', 24),
(49, 'Weston Bradtke I', 'weston-bradtke-i', 'Sit ratione qui voluptas consequatur repudiandae vel. Quis perferendis facilis commodi distinctio. Iure et vel consectetur rerum. Ut ipsa dolorum autem et rerum.', 'Sint quisquam similique ut iure. Modi itaque nobis eaque quo. Qui perferendis quae aliquam ullam qui. Qui eaque minima nulla doloremque earum sequi aspernatur.', NULL, '{\"title\":\"Weston Bradtke I\",\"keywords\":\"Weston Bradtke I\",\"description\":\"Weston Bradtke I\"}', 'vi', 25),
(50, 'Anissa Balistreri', 'anissa-balistreri', 'Sequi dolorem iure provident cum et maiores sit ipsum. Cupiditate unde aut dolor architecto est blanditiis perspiciatis. Odit numquam et quo provident illum reprehenderit praesentium.', 'Dolor ut quo magnam qui autem ut numquam. Non earum ducimus ea labore mollitia. Quisquam perspiciatis temporibus architecto vel.', NULL, '{\"title\":\"Anissa Balistreri\",\"keywords\":\"Anissa Balistreri\",\"description\":\"Anissa Balistreri\"}', 'en', 25),
(51, 'Estella Toy', 'estella-toy', 'Est id aut nobis. Aliquid reiciendis eius repudiandae voluptas aliquam quaerat. Quaerat voluptatum totam enim maiores quia.', 'Inventore dolor molestiae delectus aut quia earum necessitatibus. Excepturi nulla nesciunt tempore. Necessitatibus et esse sunt vel voluptas.', NULL, '{\"title\":\"Estella Toy\",\"keywords\":\"Estella Toy\",\"description\":\"Estella Toy\"}', 'vi', 26),
(52, 'Miss Flossie Fadel', 'miss-flossie-fadel', 'Qui mollitia odio voluptatem eum vel. Ut ut architecto aliquid ex dolores. Tempore repellat error in et. Sit molestiae rem a est impedit fuga atque. Animi commodi autem eum.', 'Suscipit quo ea veniam recusandae quas debitis. Facere qui error amet error rem. Debitis vel quaerat iste commodi aut dolorem qui.', NULL, '{\"title\":\"Miss Flossie Fadel\",\"keywords\":\"Miss Flossie Fadel\",\"description\":\"Miss Flossie Fadel\"}', 'en', 26),
(53, 'Gino Altenwerth', 'gino-altenwerth', 'Illo deserunt adipisci eum voluptas. Quo et quisquam est voluptatem non delectus. Reiciendis aut autem totam impedit voluptatem laudantium. Nihil rem repudiandae sed consequatur.', 'Doloremque velit et qui et magni maxime. Cumque sint molestiae eligendi temporibus voluptas. Autem quod voluptas accusantium enim assumenda.', NULL, '{\"title\":\"Gino Altenwerth\",\"keywords\":\"Gino Altenwerth\",\"description\":\"Gino Altenwerth\"}', 'vi', 27),
(54, 'Jesse Toy', 'jesse-toy', 'Qui iste voluptas voluptate rem quis ea nesciunt tempore. Praesentium ut quasi eum sed ut nam nihil vitae. Quis sed ipsum sint sit velit nulla.', 'Doloribus aliquid vitae ut quidem. Est rem pariatur velit non vel quidem. Est consequuntur ullam suscipit natus voluptatibus accusamus consequuntur natus.', NULL, '{\"title\":\"Jesse Toy\",\"keywords\":\"Jesse Toy\",\"description\":\"Jesse Toy\"}', 'en', 27),
(55, 'Ava Lehner DVM', 'ava-lehner-dvm', 'Expedita laboriosam qui error excepturi. Praesentium est excepturi libero nihil consequatur rerum error. Repellat non culpa itaque molestiae.', 'Labore repellat dolor consequatur perferendis. Enim repudiandae repellat ipsum nemo.', NULL, '{\"title\":\"Ava Lehner DVM\",\"keywords\":\"Ava Lehner DVM\",\"description\":\"Ava Lehner DVM\"}', 'vi', 28),
(56, 'Charlie Bailey', 'charlie-bailey', 'Eum non dolorem sit magnam earum quia. Iste in officia facilis voluptatem ex aspernatur. Qui expedita ab recusandae est.', 'Dicta distinctio ducimus quam impedit id. Provident consequatur ut provident expedita. Error harum aut dolorum quod. Consectetur rerum perferendis maxime nulla consequatur laborum nihil.', NULL, '{\"title\":\"Charlie Bailey\",\"keywords\":\"Charlie Bailey\",\"description\":\"Charlie Bailey\"}', 'en', 28),
(57, 'Mrs. Roxanne Gaylord', 'mrs-roxanne-gaylord', 'Eos beatae dolorem ex et qui. Qui voluptas perspiciatis quia et facilis provident repellat. Sint cupiditate et qui ut odio facilis. Error aperiam voluptas aut.', 'Deleniti omnis aut et est eum. Molestiae aut inventore veritatis eos eligendi ut. Veniam veniam fugit esse id consequuntur veritatis numquam aut. Quia eaque quia est ut.', NULL, '{\"title\":\"Mrs. Roxanne Gaylord\",\"keywords\":\"Mrs. Roxanne Gaylord\",\"description\":\"Mrs. Roxanne Gaylord\"}', 'vi', 29),
(58, 'Rylan Cremin', 'rylan-cremin', 'Voluptatum dolorem rem quisquam similique eligendi. Et et sit id quisquam aliquid totam. Blanditiis ut corrupti optio sit eos a architecto. Eaque fugiat deleniti aspernatur id vero ut.', 'Consequuntur dicta quasi ex eos iure. Vitae mollitia modi consequatur praesentium. Ducimus commodi omnis alias nesciunt beatae. Sunt ut nihil eligendi quasi.', NULL, '{\"title\":\"Rylan Cremin\",\"keywords\":\"Rylan Cremin\",\"description\":\"Rylan Cremin\"}', 'en', 29),
(59, 'Jeffrey Grant IV', 'jeffrey-grant-iv', 'Expedita aperiam tempora omnis velit. Sed rerum quis nemo beatae. Officia minus a nostrum reiciendis facere est. Praesentium voluptatem vel et voluptate accusantium voluptatem pariatur.', 'Atque quo aut mollitia quia recusandae. Eveniet expedita sit praesentium corporis ducimus cumque assumenda.', NULL, '{\"title\":\"Jeffrey Grant IV\",\"keywords\":\"Jeffrey Grant IV\",\"description\":\"Jeffrey Grant IV\"}', 'vi', 30),
(60, 'Madaline Fahey IV', 'madaline-fahey-iv', 'Inventore minima velit fuga voluptas vitae. Sed quidem repellendus mollitia minus deserunt et ipsa. Molestiae similique fugiat repellendus exercitationem necessitatibus.', 'Ducimus praesentium repellendus consequatur aliquam quia. Dolores omnis non molestias assumenda laboriosam debitis. Vero consequatur rem in dolorem.', NULL, '{\"title\":\"Madaline Fahey IV\",\"keywords\":\"Madaline Fahey IV\",\"description\":\"Madaline Fahey IV\"}', 'en', 30),
(61, 'Kim Conn', 'kim-conn', 'Natus voluptatem inventore doloremque. Debitis nam id qui mollitia dolores recusandae. Iste rem unde voluptatum eos eum et. Labore earum rerum nesciunt cumque voluptatem officia.', 'Error ea nemo molestiae veritatis. Et quis molestias doloribus ut fuga voluptas neque fuga. Laborum ex ipsum voluptas non est voluptates.', NULL, '{\"title\":\"Kim Conn\",\"keywords\":\"Kim Conn\",\"description\":\"Kim Conn\"}', 'vi', 31),
(62, 'Chadd Paucek', 'chadd-paucek', 'Rerum quia saepe nihil ut. Minus in quibusdam suscipit enim consequatur hic. Laudantium in quam non qui.', 'Eligendi corrupti reprehenderit dolorem. Rerum ea ea nihil laborum et explicabo. Quo voluptatum recusandae ducimus qui.', NULL, '{\"title\":\"Chadd Paucek\",\"keywords\":\"Chadd Paucek\",\"description\":\"Chadd Paucek\"}', 'en', 31),
(63, 'Dr. Elisabeth Casper DDS', 'dr-elisabeth-casper-dds', 'Ut ipsam omnis ab possimus. Dolorem sit omnis aperiam. Aliquam vitae quisquam fuga pariatur. Rerum quo autem voluptatem qui itaque nesciunt inventore.', 'Qui eveniet optio fugiat perferendis quo in ea. Minima aut reprehenderit sed nemo eius. Iure adipisci enim perspiciatis ut saepe quidem in vel.', NULL, '{\"title\":\"Dr. Elisabeth Casper DDS\",\"keywords\":\"Dr. Elisabeth Casper DDS\",\"description\":\"Dr. Elisabeth Casper DDS\"}', 'vi', 32),
(64, 'Faye Klein', 'faye-klein', 'Illo et qui blanditiis molestias cumque odit. Deleniti repellendus incidunt delectus labore. Tempore ratione nobis recusandae amet dolor rerum beatae. Quod autem esse sit sit et maiores.', 'Aut similique temporibus et similique non. Sint qui pariatur consequatur. Laudantium quo molestiae quo aut. Et nobis dolor sint illum.', NULL, '{\"title\":\"Faye Klein\",\"keywords\":\"Faye Klein\",\"description\":\"Faye Klein\"}', 'en', 32),
(65, 'Allie Raynor', 'allie-raynor', 'Eveniet rem velit non labore deserunt. Et delectus minima totam beatae. Eveniet a est quia nemo reiciendis.', 'Est accusantium reprehenderit velit aperiam aut dicta. Aut sit eum illo qui facilis. Ea excepturi sequi animi maiores nobis tempore dignissimos. Qui debitis iure deleniti fuga exercitationem eveniet et. Consequatur est doloremque maiores dolore at voluptatem.', NULL, '{\"title\":\"Allie Raynor\",\"keywords\":\"Allie Raynor\",\"description\":\"Allie Raynor\"}', 'vi', 33),
(66, 'Stone Luettgen', 'stone-luettgen', 'Sit eum quae accusamus deserunt velit. Quaerat consequuntur odio laborum. Officia quasi magnam sunt vel aut. Quis ad esse minima laboriosam.', 'Soluta explicabo corporis dolore dicta. Omnis id quo deleniti recusandae vel omnis facere. Quibusdam ea quia eveniet esse.', NULL, '{\"title\":\"Stone Luettgen\",\"keywords\":\"Stone Luettgen\",\"description\":\"Stone Luettgen\"}', 'en', 33),
(67, 'Brittany Stokes', 'brittany-stokes', 'Nostrum eum voluptatem totam. Ut amet voluptatem officia sed neque omnis. Sunt amet omnis alias nostrum ipsam. Dolores enim debitis mollitia sit soluta.', 'Odio inventore est fuga est quaerat voluptas. Dignissimos facilis qui quis sed impedit sit minima. Ratione ut quaerat illo quo voluptas. Quo rerum dignissimos delectus velit voluptatem optio cupiditate sed. Similique corrupti et qui eum ut quisquam.', NULL, '{\"title\":\"Brittany Stokes\",\"keywords\":\"Brittany Stokes\",\"description\":\"Brittany Stokes\"}', 'vi', 34),
(68, 'Mr. Johathan Torphy Jr.', 'mr-johathan-torphy-jr', 'Tempore vero tempore aut. Deleniti minima modi illum sequi fugit voluptatum. Fuga consequatur eius voluptate mollitia deserunt dicta non.', 'Et quis ipsam maxime qui. Eum amet repellendus molestiae dolores distinctio. Vel ratione velit ut saepe eveniet pariatur.', NULL, '{\"title\":\"Mr. Johathan Torphy Jr.\",\"keywords\":\"Mr. Johathan Torphy Jr.\",\"description\":\"Mr. Johathan Torphy Jr.\"}', 'en', 34),
(69, 'Mrs. Marjolaine Batz', 'mrs-marjolaine-batz', 'Quis numquam unde consequatur occaecati natus sed eveniet. Sit voluptatibus quis fugit laboriosam sed sit. Aut porro eveniet et molestiae. Modi iusto sint sit quasi dolor incidunt.', 'Magni qui reprehenderit beatae. Quo optio dolorem quasi autem corrupti consequatur ea. Perferendis est et aut rerum aut. Eaque numquam laborum aut.', NULL, '{\"title\":\"Mrs. Marjolaine Batz\",\"keywords\":\"Mrs. Marjolaine Batz\",\"description\":\"Mrs. Marjolaine Batz\"}', 'vi', 35),
(70, 'Dr. Arnoldo Nolan', 'dr-arnoldo-nolan', 'Fugit quisquam quas aut voluptate maxime corporis vero. Molestiae a quae dolores omnis ipsam. Iste autem rerum nostrum ullam qui optio.', 'Quam velit id molestiae necessitatibus occaecati voluptatibus. Nostrum doloribus fugiat iste mollitia voluptatem. Nihil amet ipsam maxime tempora in. Natus repellendus eaque sint quas et. Dolorem magni illo iste consectetur rerum ipsa voluptatem iusto.', NULL, '{\"title\":\"Dr. Arnoldo Nolan\",\"keywords\":\"Dr. Arnoldo Nolan\",\"description\":\"Dr. Arnoldo Nolan\"}', 'en', 35),
(71, 'Waylon Fritsch', 'waylon-fritsch', 'Ipsam sit nesciunt nihil necessitatibus ipsam ea. Laborum doloremque sapiente qui dolor. Delectus non dolorum quos quo. Temporibus ipsum est iusto iste.', 'Eum sed commodi pariatur atque eos et. Aut ut animi non sint sapiente nostrum. Sit sed ut illo aperiam corporis accusantium. Omnis nisi exercitationem rem reprehenderit distinctio ut.', NULL, '{\"title\":\"Waylon Fritsch\",\"keywords\":\"Waylon Fritsch\",\"description\":\"Waylon Fritsch\"}', 'vi', 36),
(72, 'Clinton Lind III', 'clinton-lind-iii', 'Est eos velit accusantium aspernatur nobis mollitia. Expedita voluptates inventore incidunt sunt et odio. Dignissimos labore aut laudantium laudantium.', 'Et ab dolor est eligendi delectus. Laudantium necessitatibus occaecati necessitatibus sunt nemo voluptates quod. Quis amet enim laboriosam nisi omnis. Ipsa voluptatibus autem asperiores mollitia a id.', NULL, '{\"title\":\"Clinton Lind III\",\"keywords\":\"Clinton Lind III\",\"description\":\"Clinton Lind III\"}', 'en', 36),
(73, 'Lonnie Green', 'lonnie-green', 'Aperiam aperiam aliquam dicta. Sint voluptas qui qui perferendis voluptates dolorem quis. Aliquid est non perspiciatis quisquam consectetur eum. Itaque sed impedit non et id.', 'Quisquam esse odio nobis suscipit dignissimos. Id maiores quisquam inventore recusandae. Eligendi ullam culpa sunt quo et soluta voluptas. Odio aut similique ea nesciunt expedita error.', NULL, '{\"title\":\"Lonnie Green\",\"keywords\":\"Lonnie Green\",\"description\":\"Lonnie Green\"}', 'vi', 37),
(74, 'Rowan Monahan', 'rowan-monahan', 'Doloremque autem magnam laborum aut est magnam quia. Ea voluptas occaecati voluptas consequatur et magnam. Modi voluptatibus debitis natus quis vitae est sint.', 'Accusantium nam eligendi dolorem provident eaque iure id. At ut ut quis voluptatem harum. Est hic error ut minima. Est est exercitationem quasi illum qui illum.', NULL, '{\"title\":\"Rowan Monahan\",\"keywords\":\"Rowan Monahan\",\"description\":\"Rowan Monahan\"}', 'en', 37),
(75, 'Prof. Oliver Von V', 'prof-oliver-von-v', 'Molestiae aut autem et dolorum quos. Et cumque suscipit tenetur aut nulla enim qui. Fugiat rerum voluptates iusto eveniet ut doloribus eaque quia.', 'Nisi qui at dolores voluptates quisquam. Modi voluptatum repellendus pariatur ipsa voluptates. Voluptatem et occaecati placeat facere id dignissimos. Id qui veniam velit voluptate commodi.', NULL, '{\"title\":\"Prof. Oliver Von V\",\"keywords\":\"Prof. Oliver Von V\",\"description\":\"Prof. Oliver Von V\"}', 'vi', 38),
(76, 'Gregg Greenholt', 'gregg-greenholt', 'Sit ut ullam maxime dolores officiis. Omnis iure sunt iste labore sunt eum voluptatem. Consequuntur vitae aliquid nisi unde.', 'Eum voluptas rerum est voluptatem molestiae omnis totam odit. Modi natus reiciendis vel et ut quae illum. Ipsa soluta vero culpa dolorem. At neque placeat soluta impedit amet.', NULL, '{\"title\":\"Gregg Greenholt\",\"keywords\":\"Gregg Greenholt\",\"description\":\"Gregg Greenholt\"}', 'en', 38),
(77, 'Prof. Wellington Halvorson', 'prof-wellington-halvorson', 'Animi quae sunt sit est. Atque et sit sunt quae aut. Sint voluptatem et reprehenderit sit quae blanditiis. Voluptas odit sed ut libero qui illum voluptate. Voluptate accusamus reiciendis saepe.', 'Facere magni sequi id perferendis harum sit pariatur natus. Magnam nulla voluptatem dolores sint ad aspernatur optio. Fuga qui est expedita. Necessitatibus accusantium sit voluptas sed quis dolor. Iste accusamus ratione et consectetur alias.', NULL, '{\"title\":\"Prof. Wellington Halvorson\",\"keywords\":\"Prof. Wellington Halvorson\",\"description\":\"Prof. Wellington Halvorson\"}', 'vi', 39),
(78, 'Dr. Reanna Anderson', 'dr-reanna-anderson', 'Nulla necessitatibus sint vel nihil. Illum eius consequuntur velit et cum hic tempora. Voluptatum omnis incidunt natus voluptatibus. Fugiat corrupti asperiores illum.', 'Qui architecto nulla et culpa. Omnis doloribus libero magnam qui. Officiis doloremque officia laboriosam id. Tempore quasi est placeat voluptatibus fuga ut quo.', NULL, '{\"title\":\"Dr. Reanna Anderson\",\"keywords\":\"Dr. Reanna Anderson\",\"description\":\"Dr. Reanna Anderson\"}', 'en', 39),
(79, 'Emely Shanahan DDS', 'emely-shanahan-dds', 'Laboriosam facilis facere doloribus qui quia. Saepe cupiditate rem libero necessitatibus illum omnis qui. Voluptatibus nemo adipisci sint necessitatibus minus ut eos.', 'Optio quasi iusto fuga veritatis cum. Voluptas quas enim deserunt et magni. Ea expedita praesentium perspiciatis inventore qui ipsam voluptas.', NULL, '{\"title\":\"Emely Shanahan DDS\",\"keywords\":\"Emely Shanahan DDS\",\"description\":\"Emely Shanahan DDS\"}', 'vi', 40),
(80, 'Raphaelle Bahringer', 'raphaelle-bahringer', 'Doloremque asperiores laborum ipsum. Doloremque quia et et quia voluptatem tempore et. Minima aliquid quia libero quia rerum repellendus. Est aliquid doloremque harum necessitatibus.', 'Fuga mollitia omnis aliquam qui ipsam. Dolorem deserunt itaque qui quo ratione laboriosam. Voluptates ea asperiores et itaque consequatur.', NULL, '{\"title\":\"Raphaelle Bahringer\",\"keywords\":\"Raphaelle Bahringer\",\"description\":\"Raphaelle Bahringer\"}', 'en', 40),
(81, 'Keith Mitchell', 'keith-mitchell', 'Ut minima quo sit quia. Ipsam quos nobis ratione atque sit et id. Vero quaerat consequuntur eum dignissimos doloremque quam tenetur. Dolorem eius sed molestias omnis voluptatum blanditiis.', 'Qui qui aut fugit a. Id id ea doloribus omnis repellendus dolor quos eius. Sed totam omnis quia quo soluta sed et est.', NULL, '{\"title\":\"Keith Mitchell\",\"keywords\":\"Keith Mitchell\",\"description\":\"Keith Mitchell\"}', 'vi', 41),
(82, 'Heaven Fisher', 'heaven-fisher', 'Itaque qui dolores rem voluptatem aliquam. Fugit qui corporis ut numquam laudantium aut. Neque architecto quia id quia et sit.', 'Maxime porro assumenda quibusdam inventore impedit officiis voluptatibus placeat. Animi accusamus tenetur occaecati hic qui laborum excepturi. Vitae quae dolore corporis ipsum sapiente sequi.', NULL, '{\"title\":\"Heaven Fisher\",\"keywords\":\"Heaven Fisher\",\"description\":\"Heaven Fisher\"}', 'en', 41),
(83, 'Prof. Elias Wuckert', 'prof-elias-wuckert', 'Est velit aut sequi qui. Porro quis voluptate quia. Quas suscipit ut enim iste quasi sint.', 'Tempora voluptatem numquam praesentium repellat et occaecati. Est voluptatem libero hic accusantium. Illum velit minima ut facere.', NULL, '{\"title\":\"Prof. Elias Wuckert\",\"keywords\":\"Prof. Elias Wuckert\",\"description\":\"Prof. Elias Wuckert\"}', 'vi', 42),
(84, 'Ms. Tessie Morar', 'ms-tessie-morar', 'Totam qui quis corrupti saepe iure voluptatum. Ipsa sit autem architecto qui quae provident sed. Animi dolores ratione ratione asperiores aperiam consequuntur.', 'Voluptates mollitia explicabo est voluptatem. Non quia facere sed laboriosam debitis nulla dolore. Eos ducimus iusto aperiam est. Quo omnis ut quaerat ab.', NULL, '{\"title\":\"Ms. Tessie Morar\",\"keywords\":\"Ms. Tessie Morar\",\"description\":\"Ms. Tessie Morar\"}', 'en', 42),
(85, 'Mr. Carmel Simonis', 'mr-carmel-simonis', 'Aliquid qui laudantium sit. Quis sed nobis sunt aut. Ut quidem hic provident consequatur. Sit incidunt ut eos maiores ut id.', 'Dolorum quia aut in rerum voluptas molestias. Sed pariatur necessitatibus alias ut eos. Sit qui et aspernatur alias alias necessitatibus.', NULL, '{\"title\":\"Mr. Carmel Simonis\",\"keywords\":\"Mr. Carmel Simonis\",\"description\":\"Mr. Carmel Simonis\"}', 'vi', 43),
(86, 'Jaquelin Runolfsdottir', 'jaquelin-runolfsdottir', 'Quia deserunt illo quis. Sit sapiente voluptatem molestias dolorem saepe impedit neque. Vel quis optio omnis qui aliquid. Dolor quo ut maxime inventore voluptatem.', 'Dolores deserunt itaque iusto et illo. Accusamus eum doloribus ea culpa cum sunt. Minus commodi omnis et est ea autem.', NULL, '{\"title\":\"Jaquelin Runolfsdottir\",\"keywords\":\"Jaquelin Runolfsdottir\",\"description\":\"Jaquelin Runolfsdottir\"}', 'en', 43),
(87, 'Jason Wiza V', 'jason-wiza-v', 'Quia ut pariatur rerum et tenetur doloribus. Consequuntur laboriosam dolor id eos magnam quis possimus aut.', 'Voluptatem consequuntur optio recusandae sint occaecati. Maxime saepe quo ea voluptatibus quasi voluptatem. Necessitatibus magnam et doloribus autem itaque aperiam officiis. Cupiditate aut totam repellat blanditiis autem accusamus voluptatem.', NULL, '{\"title\":\"Jason Wiza V\",\"keywords\":\"Jason Wiza V\",\"description\":\"Jason Wiza V\"}', 'vi', 44),
(88, 'Dr. Lilliana West', 'dr-lilliana-west', 'Consequuntur assumenda unde sit. Temporibus corrupti temporibus quibusdam qui natus odit fugiat. Aspernatur nam animi consequatur consequuntur quasi.', 'Quia natus mollitia non. Quas nostrum et alias. Consectetur ut id molestiae incidunt totam.', NULL, '{\"title\":\"Dr. Lilliana West\",\"keywords\":\"Dr. Lilliana West\",\"description\":\"Dr. Lilliana West\"}', 'en', 44),
(89, 'Marlen O\'Conner', 'marlen-oconner', 'Nostrum quisquam rem provident sed voluptatum vel. Veritatis necessitatibus aut est. Rerum necessitatibus accusamus quibusdam numquam accusamus qui atque. Dolores et ipsam non libero qui inventore.', 'Quo iste quae repellat saepe alias optio voluptas. Earum dolor earum libero consectetur. Voluptas ut corrupti ducimus nihil. Rerum distinctio id et ut reprehenderit atque.', NULL, '{\"title\":\"Marlen O\'Conner\",\"keywords\":\"Marlen O\'Conner\",\"description\":\"Marlen O\'Conner\"}', 'vi', 45),
(90, 'Percy Maggio', 'percy-maggio', 'Quae mollitia illo repudiandae minima amet vitae est. Rerum consequatur voluptate et dignissimos provident. Facere alias ratione iure incidunt suscipit. Cupiditate sequi dolores perferendis.', 'Aliquid ut sit optio minus. Velit sint nihil omnis non voluptatum sunt. A architecto aut fugit sit occaecati velit in et.', NULL, '{\"title\":\"Percy Maggio\",\"keywords\":\"Percy Maggio\",\"description\":\"Percy Maggio\"}', 'en', 45),
(91, 'Carmelo Botsford III', 'carmelo-botsford-iii', 'Sed sapiente repellat illum consequatur. Perspiciatis perspiciatis ea sunt id.', 'Eum qui facilis necessitatibus inventore voluptate a iure ipsum. Earum optio quia qui. Corporis sed laborum dignissimos inventore quae natus. Quaerat quis odio esse asperiores qui.', NULL, '{\"title\":\"Carmelo Botsford III\",\"keywords\":\"Carmelo Botsford III\",\"description\":\"Carmelo Botsford III\"}', 'vi', 46),
(92, 'Clemens Mueller Sr.', 'clemens-mueller-sr', 'Vitae itaque sed rerum reprehenderit. Ut eum et et quae. Dignissimos quis in dolore. Omnis quas sunt repellat dignissimos.', 'Inventore eos in aut aut est quasi dolor consequatur. Eum tempora ut accusantium optio. Reiciendis sunt voluptas et nemo.', NULL, '{\"title\":\"Clemens Mueller Sr.\",\"keywords\":\"Clemens Mueller Sr.\",\"description\":\"Clemens Mueller Sr.\"}', 'en', 46),
(93, 'Herman Ullrich', 'herman-ullrich', 'Ratione ut ex ex ex dolores. Rem reprehenderit cum saepe. Asperiores dolorem consequatur voluptate fugit consequuntur repellat. Magni explicabo in quisquam architecto quo labore est consequatur.', 'Sed ratione amet laborum eveniet pariatur sapiente assumenda. Esse quas quibusdam quisquam voluptate deserunt atque magnam. Quidem sit modi earum nobis quia. Architecto aut quae praesentium perspiciatis nulla at magni ut.', NULL, '{\"title\":\"Herman Ullrich\",\"keywords\":\"Herman Ullrich\",\"description\":\"Herman Ullrich\"}', 'vi', 47),
(94, 'Lue Kilback', 'lue-kilback', 'Vel magnam et delectus omnis deleniti quae nihil nemo. Aut ut natus qui officia. Eos quisquam asperiores voluptatem omnis quam est temporibus. Aut illo nihil quasi et expedita.', 'Qui ullam molestias fugiat velit sed. Quia cumque temporibus ut porro asperiores asperiores. Voluptas numquam dignissimos dolor ut voluptas. Itaque dolore aut velit quia.', NULL, '{\"title\":\"Lue Kilback\",\"keywords\":\"Lue Kilback\",\"description\":\"Lue Kilback\"}', 'en', 47),
(95, 'Westley Mohr III', 'westley-mohr-iii', 'Sint eveniet soluta itaque et adipisci. Voluptas quisquam assumenda consequuntur possimus ut natus pariatur. Nulla autem aut dicta et.', 'Ut voluptatem et laborum aperiam accusantium quibusdam iusto. Eos aperiam omnis ex eligendi ipsa eos quia. Nesciunt reprehenderit nihil aut quam assumenda odio. Adipisci aut officiis et aut. Qui assumenda dignissimos id nihil est enim voluptate.', NULL, '{\"title\":\"Westley Mohr III\",\"keywords\":\"Westley Mohr III\",\"description\":\"Westley Mohr III\"}', 'vi', 48),
(96, 'Prof. Savannah Reilly', 'prof-savannah-reilly', 'Porro possimus neque dolores. Dicta praesentium maxime non ad. Officiis debitis sit eum repellendus fuga similique eius. Quas aut debitis et quasi.', 'Fuga at sit suscipit fugiat. Aut harum excepturi animi modi maxime dolorem. Adipisci deleniti dolorem deserunt aut quam qui voluptatem.', NULL, '{\"title\":\"Prof. Savannah Reilly\",\"keywords\":\"Prof. Savannah Reilly\",\"description\":\"Prof. Savannah Reilly\"}', 'en', 48),
(97, 'Jarred Konopelski', 'jarred-konopelski', 'Eligendi placeat est adipisci et asperiores maiores quasi voluptate. Fugiat saepe sapiente enim velit est itaque. Harum et odio impedit cupiditate soluta inventore.', 'Beatae expedita impedit libero unde. Ut dolor dolor dolores rerum nostrum quia quaerat. Molestiae voluptas non nam fugiat quasi.', NULL, '{\"title\":\"Jarred Konopelski\",\"keywords\":\"Jarred Konopelski\",\"description\":\"Jarred Konopelski\"}', 'vi', 49),
(98, 'Anastasia Bashirian', 'anastasia-bashirian', 'Atque reprehenderit doloribus magnam qui. Quod nam quae numquam consequatur. Et excepturi et et eos maxime suscipit quod rem. Earum id accusantium debitis aut.', 'Eligendi ut ut numquam et. Consequuntur voluptates ullam repudiandae voluptatibus omnis distinctio. Et nulla minima quis blanditiis et aut.', NULL, '{\"title\":\"Anastasia Bashirian\",\"keywords\":\"Anastasia Bashirian\",\"description\":\"Anastasia Bashirian\"}', 'en', 49),
(99, 'Nona Wilderman', 'nona-wilderman', 'Dolorum et expedita reiciendis occaecati. Consequatur asperiores fugiat voluptatem illo aut tempora nisi. Quaerat consequuntur quia repudiandae doloremque quis nam veniam sapiente.', 'Eos nemo et aspernatur ratione. Perferendis in aut deleniti repellendus fuga. Optio et nam consequatur iste.', NULL, '{\"title\":\"Nona Wilderman\",\"keywords\":\"Nona Wilderman\",\"description\":\"Nona Wilderman\"}', 'vi', 50),
(100, 'Leon Gaylord', 'leon-gaylord', 'Illo dicta debitis aspernatur ex odio necessitatibus libero. Neque corrupti aut voluptas nesciunt atque aliquam. Non sint aut sed libero. Non praesentium voluptatem earum cupiditate.', 'Culpa veritatis rerum molestiae iste quas repellendus rerum in. Impedit sapiente ipsa eum numquam exercitationem.', NULL, '{\"title\":\"Leon Gaylord\",\"keywords\":\"Leon Gaylord\",\"description\":\"Leon Gaylord\"}', 'en', 50),
(101, 'Miss Everette Lueilwitz PhD', 'miss-everette-lueilwitz-phd', 'Laborum nobis voluptatem praesentium odit. Nisi eos maiores ullam explicabo enim tempore.', 'Magni qui dignissimos reiciendis impedit officiis sit accusantium. Itaque eaque est sapiente quidem dignissimos dicta quidem odit. Autem eum ipsa quibusdam aperiam molestias.', NULL, '{\"title\":\"Miss Everette Lueilwitz PhD\",\"keywords\":\"Miss Everette Lueilwitz PhD\",\"description\":\"Miss Everette Lueilwitz PhD\"}', 'vi', 51),
(102, 'Amber Hackett', 'amber-hackett', 'Eum est et qui quis quos repellat. Necessitatibus perferendis eum praesentium iure. Nulla veniam et ab ipsum est est vitae.', 'Est quisquam delectus nisi facere consequatur debitis maiores. Vel perferendis placeat voluptatibus sit et nam. Id nemo nihil qui consequatur. Quo error consequatur maxime et facilis ut. Perspiciatis veniam et qui modi id suscipit.', NULL, '{\"title\":\"Amber Hackett\",\"keywords\":\"Amber Hackett\",\"description\":\"Amber Hackett\"}', 'en', 51),
(103, 'Prof. Liza Cormier', 'prof-liza-cormier', 'Et neque aut beatae rerum iusto provident dolor. Suscipit fugit deleniti cum exercitationem.', 'Molestias rerum voluptatibus est sapiente ab. Dolores laboriosam ut fuga et fuga iste at ipsum. Eum tempora ex aut dolore iste.', NULL, '{\"title\":\"Prof. Liza Cormier\",\"keywords\":\"Prof. Liza Cormier\",\"description\":\"Prof. Liza Cormier\"}', 'vi', 52),
(104, 'Prof. Velma Raynor V', 'prof-velma-raynor-v', 'Delectus sunt minus facere omnis earum inventore voluptas. Perspiciatis sapiente molestias eos alias quia velit et. Suscipit quae culpa expedita et error enim. Dolores voluptatem molestiae ut.', 'Laborum ut neque quia quia aliquam ratione debitis enim. At dignissimos ad est quas libero magnam. Saepe dolorem ipsam est occaecati qui architecto non.', NULL, '{\"title\":\"Prof. Velma Raynor V\",\"keywords\":\"Prof. Velma Raynor V\",\"description\":\"Prof. Velma Raynor V\"}', 'en', 52);
INSERT INTO `product_languages` (`id`, `title`, `slug`, `description`, `contents`, `attributes`, `meta_seo`, `language`, `product_id`) VALUES
(105, 'Reva Grady', 'reva-grady', 'Ducimus voluptas explicabo nam illum nobis. Itaque voluptates at voluptas nemo. Ea in eaque blanditiis voluptatem. Et aut est ipsam labore.', 'Eius repudiandae illum dolorum sed repellendus aut hic. Qui cum illo dolore est perspiciatis. Ipsa voluptatum assumenda ex beatae totam necessitatibus.', NULL, '{\"title\":\"Reva Grady\",\"keywords\":\"Reva Grady\",\"description\":\"Reva Grady\"}', 'vi', 53),
(106, 'Dr. Gerhard Huel', 'dr-gerhard-huel', 'Rem repudiandae quam perspiciatis harum minima. Recusandae quidem quibusdam odit voluptatem vero voluptatum aspernatur enim.', 'Dolorem amet nesciunt sint cum rerum neque rerum quas. Adipisci dolore enim aperiam ea ea. Non ut quos corporis ratione non sed voluptas vel.', NULL, '{\"title\":\"Dr. Gerhard Huel\",\"keywords\":\"Dr. Gerhard Huel\",\"description\":\"Dr. Gerhard Huel\"}', 'en', 53),
(107, 'Candice Glover', 'candice-glover', 'Ut totam voluptatem dolorum sit. Voluptas et possimus quo. Rerum nesciunt ut doloribus ab nesciunt. Dolor ut sint qui exercitationem aut quo iste. Architecto nisi esse et ad sit deleniti.', 'Libero placeat ullam voluptatem. Mollitia rerum maxime doloremque natus reiciendis quia. Porro nihil veritatis optio quasi reiciendis.', NULL, '{\"title\":\"Candice Glover\",\"keywords\":\"Candice Glover\",\"description\":\"Candice Glover\"}', 'vi', 54),
(108, 'Dr. Hadley Larson IV', 'dr-hadley-larson-iv', 'Iure natus qui quo tenetur blanditiis facilis molestiae assumenda. Ut quo ipsam neque inventore distinctio eligendi est facilis.', 'Ex impedit omnis consequatur eos voluptatem saepe. Incidunt autem aut voluptatem dolores est saepe magni.', NULL, '{\"title\":\"Dr. Hadley Larson IV\",\"keywords\":\"Dr. Hadley Larson IV\",\"description\":\"Dr. Hadley Larson IV\"}', 'en', 54),
(109, 'Jodie Rohan', 'jodie-rohan', 'Quidem illum aperiam minus modi amet vitae blanditiis. Quis ea et et quos. Aut et commodi libero adipisci architecto nostrum.', 'Molestias et rerum quaerat autem. Quia cum occaecati quos eum sint. Minus ea repellat numquam explicabo eum labore.', NULL, '{\"title\":\"Jodie Rohan\",\"keywords\":\"Jodie Rohan\",\"description\":\"Jodie Rohan\"}', 'vi', 55),
(110, 'Brain Grady', 'brain-grady', 'Vel quam omnis totam atque. Consequatur modi vitae qui accusantium. Molestias recusandae libero quam quia fuga debitis cum. Autem quia cumque repellat sit et nihil. Et sit recusandae aut.', 'Quam quas vero non alias ea accusamus. Eligendi numquam quia corrupti eveniet. A quis optio ducimus.', NULL, '{\"title\":\"Brain Grady\",\"keywords\":\"Brain Grady\",\"description\":\"Brain Grady\"}', 'en', 55),
(111, 'Stephany Brakus', 'stephany-brakus', 'Consequatur in et consequuntur sed consequatur voluptatem temporibus. Et voluptatem sed occaecati.', 'Nemo et et similique eos odio. Autem sit soluta iusto soluta neque. Vitae et veniam non nesciunt quis.', NULL, '{\"title\":\"Stephany Brakus\",\"keywords\":\"Stephany Brakus\",\"description\":\"Stephany Brakus\"}', 'vi', 56),
(112, 'Eda Kozey', 'eda-kozey', 'Veritatis non blanditiis harum omnis aliquid. Veritatis praesentium ut perspiciatis qui saepe et exercitationem. Eum est magnam sit blanditiis. Ab aspernatur velit quas consequuntur explicabo est.', 'Cupiditate voluptates quibusdam nulla sint. Enim necessitatibus voluptatem molestiae eius repellendus. Fuga debitis voluptatum expedita eum dolores.', NULL, '{\"title\":\"Eda Kozey\",\"keywords\":\"Eda Kozey\",\"description\":\"Eda Kozey\"}', 'en', 56),
(113, 'Deon Daugherty', 'deon-daugherty', 'Repudiandae molestiae repellat doloribus quasi ipsa. Recusandae quo reiciendis non at repellat qui explicabo. Nihil et et blanditiis iste praesentium.', 'Rerum est voluptatem vero aut asperiores. Qui accusantium repellendus et debitis et hic. Illo voluptatem voluptas laborum quo minus sit vitae.', NULL, '{\"title\":\"Deon Daugherty\",\"keywords\":\"Deon Daugherty\",\"description\":\"Deon Daugherty\"}', 'vi', 57),
(114, 'Mr. Lorenzo Considine IV', 'mr-lorenzo-considine-iv', 'Eligendi blanditiis nisi voluptatem sit neque. Optio nesciunt id consectetur. Corrupti odit possimus accusantium nisi. Facilis voluptatum quaerat eum mollitia.', 'Perspiciatis suscipit quas harum quam amet reprehenderit iusto. Cupiditate eos corrupti molestias. Vitae occaecati aut tenetur qui ipsum eum eaque. Enim rerum quo id officiis praesentium voluptatem.', NULL, '{\"title\":\"Mr. Lorenzo Considine IV\",\"keywords\":\"Mr. Lorenzo Considine IV\",\"description\":\"Mr. Lorenzo Considine IV\"}', 'en', 57),
(115, 'Ms. Carissa Gorczany MD', 'ms-carissa-gorczany-md', 'Atque tempora culpa aut voluptatem quas vel rerum sapiente. Modi esse quia magni autem quis ut. Eaque vel iure sint. Veritatis reiciendis nemo nulla non esse sunt.', 'Rerum alias ipsam fugit odit. Sed natus vel voluptas itaque quia. Minima eum earum voluptate architecto.', NULL, '{\"title\":\"Ms. Carissa Gorczany MD\",\"keywords\":\"Ms. Carissa Gorczany MD\",\"description\":\"Ms. Carissa Gorczany MD\"}', 'vi', 58),
(116, 'Kim Buckridge', 'kim-buckridge', 'Vitae fugiat id placeat dolor libero nam. Molestiae saepe praesentium dicta. Autem dolores natus cupiditate delectus et eos.', 'Qui mollitia nisi dolore vel numquam sapiente. Iure eos qui natus voluptatem. Blanditiis et deserunt quia adipisci quo aut. Hic quo aut quia. Perspiciatis culpa nisi sequi reiciendis et similique deserunt.', NULL, '{\"title\":\"Kim Buckridge\",\"keywords\":\"Kim Buckridge\",\"description\":\"Kim Buckridge\"}', 'en', 58),
(117, 'Dr. Angie Hills', 'dr-angie-hills', 'Ut voluptates molestias eos. Culpa tempora consequatur accusantium quis in et delectus laudantium. Eaque omnis autem saepe. Magnam tempora debitis et qui illum explicabo iste.', 'Nisi ullam sapiente enim sint. Non voluptate dolorum suscipit voluptas. Ex ut eum voluptatem saepe. Mollitia et pariatur ea qui architecto repellendus nobis alias.', NULL, '{\"title\":\"Dr. Angie Hills\",\"keywords\":\"Dr. Angie Hills\",\"description\":\"Dr. Angie Hills\"}', 'vi', 59),
(118, 'Marta King', 'marta-king', 'Non repellendus non sint voluptatem minima eveniet placeat. Provident ut necessitatibus odio illo quis. Dolorem omnis quia reiciendis labore sed aut quas.', 'Cum a ipsam quibusdam ipsa atque. Cumque cumque iste quis dolorem. Provident et eum molestiae recusandae maxime. Mollitia qui adipisci quia tempora rem qui.', NULL, '{\"title\":\"Marta King\",\"keywords\":\"Marta King\",\"description\":\"Marta King\"}', 'en', 59),
(119, 'Abagail Leuschke', 'abagail-leuschke', 'Et et nobis nostrum quia vitae cupiditate. Pariatur beatae dicta quis dolores. Non iusto ab quo dolorem et. Quia minus possimus amet unde pariatur ea nemo.', 'Et quia necessitatibus corporis ut vel. Rem qui porro beatae dolores aut dolores repellat. Non vero voluptas non sit omnis quaerat voluptas.', NULL, '{\"title\":\"Abagail Leuschke\",\"keywords\":\"Abagail Leuschke\",\"description\":\"Abagail Leuschke\"}', 'vi', 60),
(120, 'Dannie Simonis DDS', 'dannie-simonis-dds', 'Quia ut voluptatem aut occaecati ab repellendus. Sed officia reprehenderit enim distinctio. Temporibus non dolor unde officia. Molestiae aliquid laudantium quos perferendis aperiam.', 'Molestiae vero consequatur repellendus molestiae tenetur. At sint magni voluptatibus esse laborum. Fuga voluptatem officiis ut.', NULL, '{\"title\":\"Dannie Simonis DDS\",\"keywords\":\"Dannie Simonis DDS\",\"description\":\"Dannie Simonis DDS\"}', 'en', 60),
(121, 'Trenton Casper', 'trenton-casper', 'Amet est dolorum numquam placeat labore. Ipsum porro corporis dolor doloribus beatae.', 'Consequatur sunt eum accusantium quam dolores. Sint dicta amet aspernatur at repellendus voluptate. Aut iste dignissimos officia est sit omnis.', NULL, '{\"title\":\"Trenton Casper\",\"keywords\":\"Trenton Casper\",\"description\":\"Trenton Casper\"}', 'vi', 61),
(122, 'Prof. Orlo Hane Sr.', 'prof-orlo-hane-sr', 'Voluptas eos nam vero laudantium ut temporibus et. Repellat doloribus nemo ut. Dolor architecto reprehenderit enim distinctio sit odio. Consequatur nulla est accusamus.', 'Velit et expedita aut vel. Est nam voluptas quasi voluptas. Iusto ducimus qui dolorem laborum.', NULL, '{\"title\":\"Prof. Orlo Hane Sr.\",\"keywords\":\"Prof. Orlo Hane Sr.\",\"description\":\"Prof. Orlo Hane Sr.\"}', 'en', 61),
(123, 'Jovan Dooley II', 'jovan-dooley-ii', 'Totam et eum quisquam ab perspiciatis eveniet. Consequuntur dicta vel reprehenderit maxime id. Labore aut minima rerum nulla sapiente non. Facilis et ab velit dolorem natus.', 'Voluptas nam saepe cum rerum commodi. Qui perspiciatis dolor dolorum autem consequatur. Commodi molestiae odit adipisci doloremque ea. Porro quia dolores ut qui. Voluptatem natus molestias sit autem voluptatem.', NULL, '{\"title\":\"Jovan Dooley II\",\"keywords\":\"Jovan Dooley II\",\"description\":\"Jovan Dooley II\"}', 'vi', 62),
(124, 'Bella Will', 'bella-will', 'Aut id mollitia ipsa voluptatem quae omnis. Quia et et rerum architecto nulla voluptatem ut et. Ipsum architecto voluptatem alias accusamus. Facere dignissimos asperiores vero in.', 'Dignissimos fugit blanditiis deserunt dolorem voluptas asperiores officiis. Ad optio officia suscipit repellat quis et fugiat. Animi labore nostrum quis dolorem.', NULL, '{\"title\":\"Bella Will\",\"keywords\":\"Bella Will\",\"description\":\"Bella Will\"}', 'en', 62),
(125, 'Dr. Kristoffer Abernathy', 'dr-kristoffer-abernathy', 'Corrupti ut autem ullam illo quibusdam. Aliquid culpa maiores voluptas reiciendis sed consequatur repellat. Omnis voluptatem eveniet ex saepe repudiandae sed. Illo velit accusamus sed molestiae ut.', 'Delectus quibusdam autem dolorem qui et enim qui earum. Dolorem quia eligendi et deserunt. Porro tempore eius eum et nam. Id quae et ut illo porro.', NULL, '{\"title\":\"Dr. Kristoffer Abernathy\",\"keywords\":\"Dr. Kristoffer Abernathy\",\"description\":\"Dr. Kristoffer Abernathy\"}', 'vi', 63),
(126, 'Hulda Schuster PhD', 'hulda-schuster-phd', 'Est aut ipsum inventore voluptatibus velit. Ut aut voluptatem id non iure quas.', 'Perspiciatis quo doloremque et voluptates. Illo porro consequuntur perferendis est qui quae vel. Exercitationem aut nemo voluptatum eum occaecati doloribus velit. Enim molestiae fugiat voluptatum in.', NULL, '{\"title\":\"Hulda Schuster PhD\",\"keywords\":\"Hulda Schuster PhD\",\"description\":\"Hulda Schuster PhD\"}', 'en', 63),
(127, 'Shanie Lowe', 'shanie-lowe', 'Consectetur sed nobis rerum non consequatur et laborum. Amet reprehenderit sapiente qui nihil. Impedit ad necessitatibus fugit sint qui voluptas.', 'Pariatur nesciunt quasi corporis quaerat. Et veniam natus ipsa voluptatem quasi. Omnis accusamus nesciunt molestias. Temporibus accusamus perferendis aliquid voluptas esse ipsam et. Repellat dolore quibusdam ut placeat iure nobis.', NULL, '{\"title\":\"Shanie Lowe\",\"keywords\":\"Shanie Lowe\",\"description\":\"Shanie Lowe\"}', 'vi', 64),
(128, 'Mr. Justus Nitzsche', 'mr-justus-nitzsche', 'Quia assumenda doloribus harum id commodi distinctio enim aut. Fugiat enim quaerat perferendis id. Impedit dolorum dignissimos delectus aut. Eos facilis ad nam omnis.', 'Asperiores perspiciatis illum eum corporis ratione porro. Aut voluptatibus suscipit cum voluptatum quam. Quam ipsum sed aut quas eaque aspernatur repellendus. Sunt qui ratione architecto aut. Dolor dolores magnam molestias molestiae voluptas provident ullam recusandae.', NULL, '{\"title\":\"Mr. Justus Nitzsche\",\"keywords\":\"Mr. Justus Nitzsche\",\"description\":\"Mr. Justus Nitzsche\"}', 'en', 64),
(129, 'Santiago Bernier', 'santiago-bernier', 'Cum quia blanditiis asperiores necessitatibus est architecto at. Sunt debitis rerum nisi et molestias error. Non nam aliquid adipisci dolore est voluptatibus officia odit.', 'Neque sapiente neque eaque vero cupiditate provident molestias. Est natus cupiditate vitae a et quasi. Non quo ut vitae sint laborum laboriosam ex.', NULL, '{\"title\":\"Santiago Bernier\",\"keywords\":\"Santiago Bernier\",\"description\":\"Santiago Bernier\"}', 'vi', 65),
(130, 'Trevion Lemke', 'trevion-lemke', 'Reprehenderit perspiciatis cumque tempore fuga similique et. Nulla minima sed iure laboriosam tempora. A aliquid vel et incidunt.', 'Aliquam quibusdam reiciendis corporis. Quibusdam quo id laboriosam quia. Totam illum sint est autem ut consequuntur. Impedit quia voluptas rem voluptates ut aperiam. Perspiciatis tempora ipsa et sed.', NULL, '{\"title\":\"Trevion Lemke\",\"keywords\":\"Trevion Lemke\",\"description\":\"Trevion Lemke\"}', 'en', 65),
(131, 'Mitchell Bosco', 'mitchell-bosco', 'Autem sed ratione nihil accusantium et. Et saepe est nihil quaerat ullam est quo recusandae. Et culpa rerum minus illum vitae qui. Sint quae nihil unde aliquam cum sequi non.', 'Quisquam magnam aut fugiat. Corrupti unde sunt rerum nihil ad ducimus. Officiis qui et et maxime. Nisi similique id unde quo officia.', NULL, '{\"title\":\"Mitchell Bosco\",\"keywords\":\"Mitchell Bosco\",\"description\":\"Mitchell Bosco\"}', 'vi', 66),
(132, 'Mireille Schroeder', 'mireille-schroeder', 'Consequuntur deleniti nam sed facere. Nulla tempore illo exercitationem sunt. Repellat et consectetur nam eum sed voluptatum. Veniam provident ad explicabo.', 'Autem aut ab molestiae minus dolores tempore. Voluptatem maxime quis cumque quam et accusamus. Vel dolorem nesciunt laborum veritatis nisi dolor. Velit et omnis est similique.', NULL, '{\"title\":\"Mireille Schroeder\",\"keywords\":\"Mireille Schroeder\",\"description\":\"Mireille Schroeder\"}', 'en', 66),
(133, 'Janice Larkin', 'janice-larkin', 'Maiores rerum non id sit sint incidunt. Qui sed possimus non et sed veritatis.', 'Ducimus dicta voluptatem neque cumque. Ad qui consequuntur architecto nemo rem quis omnis. Eveniet laboriosam praesentium consequatur quisquam.', NULL, '{\"title\":\"Janice Larkin\",\"keywords\":\"Janice Larkin\",\"description\":\"Janice Larkin\"}', 'vi', 67),
(134, 'Marjorie Spencer', 'marjorie-spencer', 'Tempora quidem quia ut excepturi quidem doloremque. Dolores sed laborum quis quis rem.', 'Iusto necessitatibus eum consequatur voluptatem aspernatur sunt quaerat. Provident ut dicta velit repudiandae voluptatem. Error dicta mollitia impedit occaecati dolorem repellat. Et nihil dignissimos sit et consequatur.', NULL, '{\"title\":\"Marjorie Spencer\",\"keywords\":\"Marjorie Spencer\",\"description\":\"Marjorie Spencer\"}', 'en', 67),
(135, 'Prof. Betty Hammes', 'prof-betty-hammes', 'Deserunt atque adipisci vitae perspiciatis aut. Molestiae quo ut temporibus iure ut deserunt magni. Eligendi reiciendis vel minus laudantium. Enim omnis qui assumenda laborum praesentium.', 'Facilis esse et perspiciatis ipsum dignissimos. Aut enim expedita eius. Beatae sunt aut et.', NULL, '{\"title\":\"Prof. Betty Hammes\",\"keywords\":\"Prof. Betty Hammes\",\"description\":\"Prof. Betty Hammes\"}', 'vi', 68),
(136, 'Lauren Bergnaum MD', 'lauren-bergnaum-md', 'Sed libero quis neque aspernatur harum tempore voluptas sunt. Velit ratione aut officia consequatur. Voluptatem ea vero quibusdam temporibus illo ullam est. Quia id quia quaerat cumque.', 'Odit officia enim numquam porro. Cum molestiae est enim sequi. Illo dolor laudantium modi eos earum ea. Beatae minus non omnis quaerat sint eveniet sed.', NULL, '{\"title\":\"Lauren Bergnaum MD\",\"keywords\":\"Lauren Bergnaum MD\",\"description\":\"Lauren Bergnaum MD\"}', 'en', 68),
(137, 'Prof. Jacinto Jacobson IV', 'prof-jacinto-jacobson-iv', 'Qui omnis consequatur illo cum. Sed reiciendis tempora totam voluptas. Qui praesentium pariatur quo aut velit.', 'Nobis sed tempora voluptate et ab. Nihil laborum est quas porro dolorem. Nihil quo et nihil maxime velit maiores perspiciatis. Incidunt quae inventore fugit dolor illum omnis.', NULL, '{\"title\":\"Prof. Jacinto Jacobson IV\",\"keywords\":\"Prof. Jacinto Jacobson IV\",\"description\":\"Prof. Jacinto Jacobson IV\"}', 'vi', 69),
(138, 'Gaston Koss', 'gaston-koss', 'Quidem assumenda sed aut nulla placeat. Quisquam ut qui delectus voluptate ratione est. Consequatur sed itaque doloribus numquam repellat fuga. Qui et ut laudantium possimus aut blanditiis.', 'Doloribus enim qui aut cum qui velit et. Consequatur sed iure quia sint eum ut. Et modi est inventore neque sed aperiam ea.', NULL, '{\"title\":\"Gaston Koss\",\"keywords\":\"Gaston Koss\",\"description\":\"Gaston Koss\"}', 'en', 69),
(139, 'Mac Hickle', 'mac-hickle', 'Aliquid dolor dolor assumenda ut aliquid. Qui sit optio consequatur voluptas alias dolor qui. Eius incidunt aspernatur eveniet quo non voluptatum amet.', 'Maiores eaque quia laudantium laboriosam ut. Dolorum iure cum cumque numquam unde itaque consectetur. Perspiciatis excepturi facilis delectus dolorem molestiae non doloremque veniam. Tempore quia officiis voluptatibus sed est eius.', NULL, '{\"title\":\"Mac Hickle\",\"keywords\":\"Mac Hickle\",\"description\":\"Mac Hickle\"}', 'vi', 70),
(140, 'Sydney DuBuque', 'sydney-dubuque', 'Aut recusandae officiis ut. Corrupti repellendus distinctio omnis doloribus porro reiciendis. Iure natus repudiandae ut. Reiciendis aut omnis illo nostrum saepe.', 'Non esse sit accusantium voluptatum quia. Rem sequi beatae distinctio cupiditate aut et amet.', NULL, '{\"title\":\"Sydney DuBuque\",\"keywords\":\"Sydney DuBuque\",\"description\":\"Sydney DuBuque\"}', 'en', 70),
(141, 'Effie Daugherty', 'effie-daugherty', 'Nam ab vel aut laudantium soluta. Veniam aut qui iste eligendi aut. Maiores recusandae officia officiis sunt aut. Quo et placeat esse autem.', 'Voluptatem est ea quos eligendi. Et officiis consequatur libero repudiandae id quis. Optio quas accusamus porro rem ut aliquam.', NULL, '{\"title\":\"Effie Daugherty\",\"keywords\":\"Effie Daugherty\",\"description\":\"Effie Daugherty\"}', 'vi', 71),
(142, 'Dashawn Windler', 'dashawn-windler', 'Aut enim accusantium voluptatem rerum aut nemo ut. Quod possimus consequatur blanditiis et. Non eum sed enim aut suscipit. Sunt doloremque temporibus et blanditiis.', 'Non sit et aspernatur dolor dolor molestiae reprehenderit ut. A nihil incidunt tenetur numquam corporis. Voluptatibus voluptatum voluptas voluptatum qui molestias non voluptatem.', NULL, '{\"title\":\"Dashawn Windler\",\"keywords\":\"Dashawn Windler\",\"description\":\"Dashawn Windler\"}', 'en', 71),
(143, 'Jasper Jacobson', 'jasper-jacobson', 'Libero asperiores cumque nemo aliquam quia ex. Id aperiam omnis et sit omnis facere. Et enim impedit pariatur sit est autem. Est soluta laboriosam sunt ad autem ab accusamus aut.', 'Qui et accusantium est praesentium corrupti sequi sunt. Qui odio velit velit voluptatem. Est qui nam voluptates velit doloribus autem odio. Corporis sit sequi dolor enim et dolorem mollitia laudantium.', NULL, '{\"title\":\"Jasper Jacobson\",\"keywords\":\"Jasper Jacobson\",\"description\":\"Jasper Jacobson\"}', 'vi', 72),
(144, 'Dr. Cletus Okuneva', 'dr-cletus-okuneva', 'Sit autem porro expedita magnam similique et molestiae. Rerum voluptatum commodi rem consequatur veritatis. Ut corrupti eos ut quidem. Officia non tenetur omnis maiores.', 'Exercitationem consequatur expedita rerum dignissimos eum. Omnis et quibusdam incidunt.', NULL, '{\"title\":\"Dr. Cletus Okuneva\",\"keywords\":\"Dr. Cletus Okuneva\",\"description\":\"Dr. Cletus Okuneva\"}', 'en', 72),
(145, 'Rudolph Ebert', 'rudolph-ebert', 'Quia ut quia deserunt praesentium. Molestias veritatis qui atque quaerat. Nesciunt est deserunt ipsa repudiandae. Minima explicabo enim vitae officiis.', 'Cupiditate laudantium ea omnis. Ipsam velit ut neque voluptas in fuga qui. Expedita voluptas non aut earum. Laudantium nam minima sit occaecati cupiditate molestiae.', NULL, '{\"title\":\"Rudolph Ebert\",\"keywords\":\"Rudolph Ebert\",\"description\":\"Rudolph Ebert\"}', 'vi', 73),
(146, 'Karolann Nitzsche', 'karolann-nitzsche', 'Soluta quam tempora voluptatem voluptatem exercitationem totam voluptatibus. Sit accusantium numquam quam consequuntur sint placeat ratione. Autem voluptas rem voluptatem non enim consequuntur.', 'Ea praesentium voluptatem ipsam repudiandae autem reiciendis quisquam. Expedita repudiandae sint ut rerum qui nihil. Debitis voluptatem molestias quis saepe.', NULL, '{\"title\":\"Karolann Nitzsche\",\"keywords\":\"Karolann Nitzsche\",\"description\":\"Karolann Nitzsche\"}', 'en', 73),
(147, 'Cole Toy', 'cole-toy', 'Deserunt dolor dolores placeat sit eligendi. Omnis officia error doloremque id cum. Qui ea rerum provident voluptas. Deserunt autem voluptatem et repudiandae exercitationem.', 'Et laudantium quia voluptatem earum similique et temporibus neque. Alias saepe perferendis possimus omnis molestiae molestiae. Praesentium temporibus facilis voluptatem nostrum ratione. Sapiente omnis vel atque autem id nulla nesciunt porro.', NULL, '{\"title\":\"Cole Toy\",\"keywords\":\"Cole Toy\",\"description\":\"Cole Toy\"}', 'vi', 74),
(148, 'Bessie Walker', 'bessie-walker', 'Nam earum consequatur doloremque unde. Omnis quia iusto autem ut. Vitae eaque minus unde sed. Veritatis vel minima doloribus officia nulla.', 'Omnis atque et quis commodi laboriosam temporibus qui consequatur. Qui inventore tempore recusandae voluptatum inventore omnis quia. Quo facilis perferendis laudantium omnis suscipit. A aut quas dolorem rerum facilis quis. Repudiandae voluptatum dolor est commodi aut eaque pariatur.', NULL, '{\"title\":\"Bessie Walker\",\"keywords\":\"Bessie Walker\",\"description\":\"Bessie Walker\"}', 'en', 74),
(149, 'Dr. Raoul Graham IV', 'dr-raoul-graham-iv', 'Est beatae quasi maxime quas veniam. Id porro maiores sunt dolorem.', 'Aut ut et consequatur qui est laudantium. Repellat est deserunt eius. Laudantium corrupti fugit rerum quo.', NULL, '{\"title\":\"Dr. Raoul Graham IV\",\"keywords\":\"Dr. Raoul Graham IV\",\"description\":\"Dr. Raoul Graham IV\"}', 'vi', 75),
(150, 'Daisha Konopelski', 'daisha-konopelski', 'Facilis ut accusamus omnis eaque. Voluptatem at recusandae non vel consequatur vitae. Fugiat voluptatibus eos fuga quos ipsa est in et.', 'Illo porro dolorum exercitationem eligendi inventore dolore natus vel. Eum repellendus inventore et impedit similique et est.', NULL, '{\"title\":\"Daisha Konopelski\",\"keywords\":\"Daisha Konopelski\",\"description\":\"Daisha Konopelski\"}', 'en', 75),
(151, 'Allan Kuhic MD', 'allan-kuhic-md', 'Ad nostrum numquam eos atque earum distinctio. Quos eos vel libero vitae aut. Officia et sapiente eum animi nisi iste aliquam. Explicabo accusamus veniam saepe et. Sed at non non dolor.', 'Ea culpa voluptate laudantium deserunt est qui. Sit similique provident quisquam quis tenetur et omnis. Quo aperiam qui dolorem.', NULL, '{\"title\":\"Allan Kuhic MD\",\"keywords\":\"Allan Kuhic MD\",\"description\":\"Allan Kuhic MD\"}', 'vi', 76),
(152, 'Ben Stroman', 'ben-stroman', 'Et facilis assumenda velit sint laudantium maxime quia. Aliquam quo officiis et facere labore sed consequuntur. Ea quis et est impedit ut voluptate.', 'Iusto a vel labore cum. Quis earum sit vitae molestiae atque.', NULL, '{\"title\":\"Ben Stroman\",\"keywords\":\"Ben Stroman\",\"description\":\"Ben Stroman\"}', 'en', 76),
(153, 'Ben Rodriguez', 'ben-rodriguez', 'Expedita similique vel ipsa odit perferendis. Dolore libero minus est tempora facilis molestiae. Ut maiores tenetur mollitia facilis consequatur dolorem voluptatem.', 'Itaque corporis sed in. Est placeat quam voluptas quo et. A accusantium ut iure laboriosam porro numquam corrupti qui.', NULL, '{\"title\":\"Ben Rodriguez\",\"keywords\":\"Ben Rodriguez\",\"description\":\"Ben Rodriguez\"}', 'vi', 77),
(154, 'Dannie Renner', 'dannie-renner', 'Quaerat perspiciatis est dolor facilis cum repellendus totam. Unde ea repellendus dignissimos est quis expedita ea. Magni nihil blanditiis qui. Aliquam et non ipsum nobis.', 'Impedit beatae neque aut sunt soluta. Iure odit quia cumque expedita non. Odit nesciunt aspernatur assumenda expedita esse. Voluptas nam quis iure.', NULL, '{\"title\":\"Dannie Renner\",\"keywords\":\"Dannie Renner\",\"description\":\"Dannie Renner\"}', 'en', 77),
(155, 'Travon Trantow', 'travon-trantow', 'Voluptates qui aut quod magni. Enim alias illum consequuntur quia qui omnis et.', 'Omnis et sed ea qui laboriosam incidunt accusantium. Et suscipit illo ea reprehenderit. Ut unde eligendi aut modi eum voluptatem. Dolorem sit voluptates quasi et.', NULL, '{\"title\":\"Travon Trantow\",\"keywords\":\"Travon Trantow\",\"description\":\"Travon Trantow\"}', 'vi', 78),
(156, 'Cynthia Fadel', 'cynthia-fadel', 'Eaque numquam voluptatem voluptatem omnis facere. Dolorem aut quia ex laboriosam. Cumque rem nemo qui facilis aspernatur facilis. Aspernatur suscipit ea vel aut aut in reprehenderit.', 'Quis atque ut repudiandae cumque. Quod et aut pariatur modi qui est non quia. Unde fugiat praesentium voluptatem amet illum consectetur omnis commodi.', NULL, '{\"title\":\"Cynthia Fadel\",\"keywords\":\"Cynthia Fadel\",\"description\":\"Cynthia Fadel\"}', 'en', 78),
(157, 'Issac Zulauf', 'issac-zulauf', 'Odio reiciendis porro facilis veniam. Dolorem dolorem aliquam at quidem nihil animi vel. Error dolores dolores enim natus est. Consectetur possimus aut quia delectus.', 'Dolorum nihil voluptate fugit id. Alias ipsa explicabo dolor et dicta voluptatem nemo eveniet. Rerum et dolorem vel ut et dicta nemo. Quia laborum aspernatur ea aliquid.', NULL, '{\"title\":\"Issac Zulauf\",\"keywords\":\"Issac Zulauf\",\"description\":\"Issac Zulauf\"}', 'vi', 79),
(158, 'Scarlett Hettinger', 'scarlett-hettinger', 'Aut quo qui facere. Ducimus ipsum enim reiciendis consequuntur beatae ut sed ratione. Autem accusamus vero cupiditate reiciendis magnam et non et.', 'Autem qui repudiandae dicta voluptas soluta enim. Dolorum fuga voluptate vero. Illo aut rerum veniam.', NULL, '{\"title\":\"Scarlett Hettinger\",\"keywords\":\"Scarlett Hettinger\",\"description\":\"Scarlett Hettinger\"}', 'en', 79),
(159, 'Leo Douglas', 'leo-douglas', 'At beatae tenetur distinctio voluptatibus sunt. Quo harum iste in labore quis. Quas earum ut nihil.', 'Aliquid voluptatibus facere veritatis dignissimos ad. Ea qui autem amet eius. Cupiditate iure voluptatum ipsa incidunt minus. Nobis hic doloremque non nesciunt ea ut.', NULL, '{\"title\":\"Leo Douglas\",\"keywords\":\"Leo Douglas\",\"description\":\"Leo Douglas\"}', 'vi', 80),
(160, 'Arjun Glover', 'arjun-glover', 'Laborum autem labore pariatur. Quia numquam possimus blanditiis odio commodi harum. Earum ipsa quam autem dolorum. Quod consequuntur quia suscipit sit rerum ut sed optio.', 'Laboriosam perspiciatis aliquam ullam. Debitis reprehenderit quas in dolore. Libero soluta voluptas vel ipsum. Quis quisquam sequi beatae optio iure aut modi.', NULL, '{\"title\":\"Arjun Glover\",\"keywords\":\"Arjun Glover\",\"description\":\"Arjun Glover\"}', 'en', 80),
(161, 'Antone Erdman', 'antone-erdman', 'Repudiandae inventore repellat aliquam. Tempora nesciunt et fugiat nam placeat quis fuga. Consectetur maxime tempore occaecati inventore sed magni iusto ut.', 'Repellendus nostrum quibusdam inventore est enim dolorum recusandae. Ea consequatur in id et. Reiciendis qui consequatur atque est quia quia eum. Qui nesciunt molestiae quia aut quaerat.', NULL, '{\"title\":\"Antone Erdman\",\"keywords\":\"Antone Erdman\",\"description\":\"Antone Erdman\"}', 'vi', 81),
(162, 'Milo Buckridge', 'milo-buckridge', 'Optio sint similique beatae dolore aut omnis. Minus corporis est neque voluptatem reiciendis sint autem.', 'Id quibusdam commodi perferendis et quas. Odio expedita voluptas voluptates ratione quod earum. Pariatur in aut nostrum. Quia sunt ipsa aliquam quidem.', NULL, '{\"title\":\"Milo Buckridge\",\"keywords\":\"Milo Buckridge\",\"description\":\"Milo Buckridge\"}', 'en', 81),
(163, 'Miss Drew Hettinger', 'miss-drew-hettinger', 'Odio sed maiores illo consequatur nihil fuga laborum. Aut sed eaque expedita rerum quasi voluptatum. Deleniti optio quae cum id. Illum repudiandae optio in laboriosam nisi aut.', 'Officia provident voluptates omnis mollitia ea laborum. Rem a soluta nisi sint veniam iste quia. Odio voluptatem quia quisquam animi et nihil qui. Quod voluptatem ratione pariatur maiores sit et.', NULL, '{\"title\":\"Miss Drew Hettinger\",\"keywords\":\"Miss Drew Hettinger\",\"description\":\"Miss Drew Hettinger\"}', 'vi', 82),
(164, 'Ms. Coralie Emard', 'ms-coralie-emard', 'Et magni vitae enim doloribus illo voluptatem. Numquam minima omnis incidunt ipsum. Eius sed quia tenetur impedit sit laborum.', 'Quas explicabo fugit necessitatibus illo temporibus qui. Et neque dolore atque odit soluta ut. Quia harum sapiente sit libero. Ratione sed reprehenderit ab autem reiciendis voluptas dolore explicabo.', NULL, '{\"title\":\"Ms. Coralie Emard\",\"keywords\":\"Ms. Coralie Emard\",\"description\":\"Ms. Coralie Emard\"}', 'en', 82),
(165, 'Dr. Arlo Reinger I', 'dr-arlo-reinger-i', 'Eos mollitia autem ea error soluta tempora sit. Delectus facilis eius perferendis. Et sit consequuntur rem dicta et numquam.', 'Quidem quae et corrupti quis vel possimus. Non rerum architecto voluptas quisquam rerum quos. Vel quia quis ipsum dolorem laborum accusamus labore. Odit reiciendis saepe qui deserunt enim rem. Nihil tempora quidem sit ut ea.', NULL, '{\"title\":\"Dr. Arlo Reinger I\",\"keywords\":\"Dr. Arlo Reinger I\",\"description\":\"Dr. Arlo Reinger I\"}', 'vi', 83),
(166, 'Anabelle Roob', 'anabelle-roob', 'Quisquam exercitationem maiores cumque quo. Omnis tempore magnam aut illum ipsum nisi architecto quas. Molestiae asperiores culpa optio libero voluptas incidunt.', 'Aut doloribus optio laudantium dignissimos cum aperiam voluptates. Non doloribus cupiditate eum commodi. Perspiciatis eos dolores voluptas totam.', NULL, '{\"title\":\"Anabelle Roob\",\"keywords\":\"Anabelle Roob\",\"description\":\"Anabelle Roob\"}', 'en', 83),
(167, 'Lamar Kub', 'lamar-kub', 'Sit culpa vero explicabo aut illum numquam non. Ut eveniet dolorum pariatur sunt ipsum. Quae non in eaque enim est officiis veniam.', 'Ut explicabo earum beatae fugit expedita magni. Laboriosam ipsa cum consequuntur ratione accusamus facere et omnis. Facilis omnis quis dolor aperiam. Quibusdam quo amet et asperiores odio ipsa veritatis enim. Eius repudiandae sapiente sunt repudiandae.', NULL, '{\"title\":\"Lamar Kub\",\"keywords\":\"Lamar Kub\",\"description\":\"Lamar Kub\"}', 'vi', 84),
(168, 'Mrs. Augustine Hodkiewicz DVM', 'mrs-augustine-hodkiewicz-dvm', 'In non quaerat laborum illum rerum error accusamus. Omnis nostrum ut magnam dolores. Sed quia quia omnis a consequuntur et nobis. Et dolore fugit in ratione est.', 'Perferendis tempore quo id omnis et vel exercitationem fugiat. Aut est nesciunt nobis ut perspiciatis magni ut. Omnis perferendis facilis et velit et. Mollitia porro exercitationem et aperiam odit.', NULL, '{\"title\":\"Mrs. Augustine Hodkiewicz DVM\",\"keywords\":\"Mrs. Augustine Hodkiewicz DVM\",\"description\":\"Mrs. Augustine Hodkiewicz DVM\"}', 'en', 84),
(169, 'Alisa King', 'alisa-king', 'Quod sint asperiores maiores nulla commodi dolores. Quo quidem inventore aut maiores consequatur nisi voluptates. Corporis est quidem qui deleniti assumenda.', 'Libero perspiciatis veritatis et a qui. Enim et molestiae repellendus eos consequatur consequatur sed. Voluptatem animi eveniet tenetur dolor quam rerum. Aut animi totam provident possimus est consequatur.', NULL, '{\"title\":\"Alisa King\",\"keywords\":\"Alisa King\",\"description\":\"Alisa King\"}', 'vi', 85),
(170, 'Eva Sauer', 'eva-sauer', 'Aut expedita quas praesentium magnam corrupti est non dolores. Dolores esse eum rerum velit consequuntur aspernatur quia. Similique rerum voluptatem aut ipsam.', 'Illo ipsa optio consequatur aliquam sit. Et aliquid similique omnis et deserunt nemo. Sapiente quia ea delectus eaque. Doloremque harum voluptatem illum maiores sequi dolore.', NULL, '{\"title\":\"Eva Sauer\",\"keywords\":\"Eva Sauer\",\"description\":\"Eva Sauer\"}', 'en', 85),
(171, 'Nicholas Kirlin PhD', 'nicholas-kirlin-phd', 'Itaque aut necessitatibus quam ullam dolor quibusdam in. Cum inventore assumenda porro voluptas aspernatur ex. Possimus voluptate provident placeat recusandae odio. Consequatur rerum vel culpa omnis.', 'Quia provident et mollitia aperiam et quibusdam. Inventore suscipit reprehenderit rerum quisquam eligendi aliquam ullam. Neque ut dolorem facilis aliquam alias. Voluptate ut sequi doloribus suscipit minus omnis adipisci labore.', NULL, '{\"title\":\"Nicholas Kirlin PhD\",\"keywords\":\"Nicholas Kirlin PhD\",\"description\":\"Nicholas Kirlin PhD\"}', 'vi', 86),
(172, 'Kyle Rodriguez', 'kyle-rodriguez', 'A dicta consequatur eaque reprehenderit eveniet illo. Est eos id ipsa veritatis.', 'Veniam reprehenderit iusto odio at nesciunt cum quia. Ea porro molestiae id aut.', NULL, '{\"title\":\"Kyle Rodriguez\",\"keywords\":\"Kyle Rodriguez\",\"description\":\"Kyle Rodriguez\"}', 'en', 86),
(173, 'Mr. Scottie Upton', 'mr-scottie-upton', 'Dicta nisi est ex voluptatem sed quia. Ad fugit hic ut recusandae perspiciatis facere. Ut eveniet repudiandae amet recusandae neque atque.', 'Eum sit libero quo ab quisquam. Atque dicta itaque blanditiis id nam. Explicabo qui doloribus consequatur cum. Ea totam molestiae dolorum ut voluptatibus et et. Distinctio sint perferendis recusandae in nam.', NULL, '{\"title\":\"Mr. Scottie Upton\",\"keywords\":\"Mr. Scottie Upton\",\"description\":\"Mr. Scottie Upton\"}', 'vi', 87),
(174, 'Wallace Hirthe', 'wallace-hirthe', 'Cupiditate nihil culpa enim rerum. Aut minus a ut rerum enim est. Ipsam illum inventore facere exercitationem.', 'Aut illo quas aliquid enim dolor facere ut. Illo alias hic omnis occaecati distinctio consequatur. Fugit earum cupiditate sint. Nobis iusto architecto earum ut sunt incidunt et nihil.', NULL, '{\"title\":\"Wallace Hirthe\",\"keywords\":\"Wallace Hirthe\",\"description\":\"Wallace Hirthe\"}', 'en', 87),
(175, 'Prof. Shany Lind IV', 'prof-shany-lind-iv', 'Expedita autem tempore dolorem et eveniet sed. Repellendus saepe reiciendis tempore dignissimos et. Corporis eaque enim consectetur rerum est ea. Voluptatibus vel vel odio.', 'Distinctio voluptas perferendis molestiae molestias praesentium. Iusto totam vel alias dolorum. Dolorem aut inventore qui inventore id at officia aperiam. Sapiente non sunt consequuntur. Facere doloremque sapiente voluptas et eum voluptate.', NULL, '{\"title\":\"Prof. Shany Lind IV\",\"keywords\":\"Prof. Shany Lind IV\",\"description\":\"Prof. Shany Lind IV\"}', 'vi', 88),
(176, 'Stanford Padberg', 'stanford-padberg', 'Est minus est suscipit nisi. Qui dolor aut aliquid maiores nisi. Sed cumque illum inventore eligendi commodi.', 'Alias aut alias ipsum quibusdam. Fugiat aut repudiandae aliquam consequatur repellendus. Fugit rem accusamus aut doloremque modi. Voluptas ipsam vel quae enim.', NULL, '{\"title\":\"Stanford Padberg\",\"keywords\":\"Stanford Padberg\",\"description\":\"Stanford Padberg\"}', 'en', 88),
(177, 'Cindy Paucek', 'cindy-paucek', 'Dicta voluptates quo tempora ut laborum labore odit. Nobis voluptas soluta aut nemo est quas et. Sapiente quam iure voluptatibus officiis in.', 'Consectetur laborum quod dolore assumenda et. Rerum aut quia expedita dolor est. Distinctio fuga aperiam velit animi ipsa consequatur.', NULL, '{\"title\":\"Cindy Paucek\",\"keywords\":\"Cindy Paucek\",\"description\":\"Cindy Paucek\"}', 'vi', 89),
(178, 'Aidan Fisher MD', 'aidan-fisher-md', 'Voluptatem dolor natus facere cumque. Reiciendis quod ut laboriosam culpa. Maxime eum rerum consequatur porro quis tempore. Et repellendus et qui.', 'Et enim tempora exercitationem doloribus quaerat molestiae adipisci. Maiores veniam placeat veniam odio mollitia facilis. Non similique ea fuga vel. Delectus unde reiciendis quis eos distinctio quia saepe.', NULL, '{\"title\":\"Aidan Fisher MD\",\"keywords\":\"Aidan Fisher MD\",\"description\":\"Aidan Fisher MD\"}', 'en', 89),
(179, 'Mr. Ari Dibbert', 'mr-ari-dibbert', 'Fugit totam aliquam reprehenderit est similique itaque suscipit. Omnis est ut est tempore est aut non. Excepturi qui ea qui et est odit. Iste expedita dolor non sed quae.', 'Veniam et rem ea sed accusantium optio. Neque magni voluptatum sint quia consequuntur doloribus. Exercitationem qui modi quasi qui excepturi. Consequatur temporibus recusandae asperiores sed ut esse.', NULL, '{\"title\":\"Mr. Ari Dibbert\",\"keywords\":\"Mr. Ari Dibbert\",\"description\":\"Mr. Ari Dibbert\"}', 'vi', 90),
(180, 'Chelsey Fritsch', 'chelsey-fritsch', 'Voluptas sit est doloremque laboriosam fugiat vel. Et repellendus perferendis tempora. Reiciendis iure aliquid omnis non cumque ipsum distinctio.', 'Odit excepturi commodi qui excepturi. Laudantium ducimus dolorem et sint. Non ullam non nulla dolorum minus et ut eius. Occaecati voluptas aut sequi asperiores in ut. Nobis molestiae qui odit fugit.', NULL, '{\"title\":\"Chelsey Fritsch\",\"keywords\":\"Chelsey Fritsch\",\"description\":\"Chelsey Fritsch\"}', 'en', 90),
(181, 'Zelda Schuppe', 'zelda-schuppe', 'Laboriosam delectus et facilis eum ut. Atque quaerat odio in neque nisi. Tempora laudantium labore omnis aliquid mollitia consectetur necessitatibus. Quis est inventore nihil natus tempora sint ea.', '<p>Distinctio nostrum culpa similique sint modi atque laborum. Praesentium atque quidem possimus rem ab. Quos minus aut cum laboriosam voluptatem nihil quidem et.</p>', '[{\"name\":null,\"value\":null}]', '{\"title\":\"Zelda Schuppe\",\"keywords\":\"Zelda Schuppe\",\"description\":\"Zelda Schuppe\"}', 'vi', 91),
(182, 'Presley Treutel', 'presley-treutel', 'A consequatur quae praesentium vero. Aut rem recusandae architecto vel ducimus incidunt. Placeat iusto iusto tempore impedit minus.', 'Dolores inventore rem dignissimos ducimus accusamus enim voluptatibus. Culpa qui dolor molestiae dolores dolores et. Veniam magnam qui delectus enim nihil dolor in. Ut excepturi fugit explicabo voluptate nihil aut eligendi. Necessitatibus modi suscipit molestias distinctio ipsa.', NULL, '{\"title\":\"Presley Treutel\",\"keywords\":\"Presley Treutel\",\"description\":\"Presley Treutel\"}', 'en', 91),
(183, 'Destinee Wolf', 'destinee-wolf', 'Beatae distinctio optio maxime alias et. Sed officia sunt aut. Sit quis et dolor sunt molestiae a quia.', '<p>Totam deserunt ut et cum sit quia nihil. Quis sapiente et quo autem velit provident. Corrupti vel quia in natus.</p>', '[{\"name\":null,\"value\":null}]', '{\"title\":\"Destinee Wolf\",\"keywords\":\"Destinee Wolf\",\"description\":\"Destinee Wolf\"}', 'vi', 92),
(184, 'Miss Eunice Luettgen', 'miss-eunice-luettgen', 'Ea libero necessitatibus suscipit sapiente libero nihil vel. Omnis iure aut doloribus. Ut et aut accusamus et.', 'Magnam est atque rerum aut quaerat laudantium ut. Cupiditate laudantium ratione doloribus laudantium eos. Repellendus culpa pariatur ut ex iusto. Molestias vel nam modi quibusdam.', NULL, '{\"title\":\"Miss Eunice Luettgen\",\"keywords\":\"Miss Eunice Luettgen\",\"description\":\"Miss Eunice Luettgen\"}', 'en', 92),
(185, 'Dr. Enos Stoltenberg', 'dr-enos-stoltenberg', 'Saepe est quo in reiciendis. Alias porro officiis maxime veritatis porro recusandae porro quos. Qui dolorem eum dolor tenetur. Aut quidem architecto omnis odit at excepturi.', '<p>Et sequi iste repellat omnis ullam. Corporis minus et voluptatem distinctio commodi. Ut debitis reprehenderit occaecati. Eveniet incidunt qui quos aut aut eaque et.</p>', '[{\"name\":null,\"value\":null}]', '{\"title\":\"Dr. Enos Stoltenberg\",\"keywords\":\"Dr. Enos Stoltenberg\",\"description\":\"Dr. Enos Stoltenberg\"}', 'vi', 93),
(186, 'Prof. Courtney Bradtke DDS', 'prof-courtney-bradtke-dds', 'Qui deserunt distinctio est ea nobis. Hic error accusamus quasi laborum ut iste et. Ut cum odio voluptate qui quia alias. Mollitia labore placeat tenetur unde exercitationem architecto.', 'Animi sed occaecati magni fuga ducimus. Adipisci omnis et excepturi ex delectus nemo. Quia alias cumque accusamus eveniet odit dicta recusandae.', NULL, '{\"title\":\"Prof. Courtney Bradtke DDS\",\"keywords\":\"Prof. Courtney Bradtke DDS\",\"description\":\"Prof. Courtney Bradtke DDS\"}', 'en', 93),
(187, 'Kristopher Kautzer MD', 'kristopher-kautzer-md', 'Ullam cum commodi modi illo consequatur animi voluptates dicta. Delectus adipisci dolores exercitationem. Maiores repellendus perferendis rem assumenda consequatur quae. Nam nihil delectus et.', '<p>Error laborum in voluptatem aut quis quia. Placeat minus sunt quia explicabo sed dignissimos saepe. Soluta in veritatis dolorum placeat vel.</p>', '[{\"name\":null,\"value\":null}]', '{\"title\":\"Kristopher Kautzer MD\",\"keywords\":\"Kristopher Kautzer MD\",\"description\":\"Kristopher Kautzer MD\"}', 'vi', 94),
(188, 'Destini Zemlak Jr.', 'destini-zemlak-jr', 'Facere totam ea et minima unde ipsa. Ab illum exercitationem sed ut omnis eveniet molestiae eius. A expedita debitis eum aut eveniet id commodi.', 'At ut quis tempora illum. Accusantium voluptatum debitis magni. Voluptas dolorem est non fuga culpa. Culpa ipsum ut unde atque.', NULL, '{\"title\":\"Destini Zemlak Jr.\",\"keywords\":\"Destini Zemlak Jr.\",\"description\":\"Destini Zemlak Jr.\"}', 'en', 94),
(189, 'Ms. Thalia Heidenreich', 'ms-thalia-heidenreich', 'Quia iusto molestiae ducimus eos eligendi quisquam. Dolorum velit et necessitatibus voluptatibus eligendi veniam. Molestiae praesentium adipisci doloribus nisi placeat. Iure sit asperiores non.', '<p>Deserunt consectetur cum quo libero ex quia. Perferendis laborum saepe ab ipsum. Vel sit voluptas nihil nam vitae.</p>', '[{\"name\":null,\"value\":null}]', '{\"title\":\"Ms. Thalia Heidenreich\",\"keywords\":\"Ms. Thalia Heidenreich\",\"description\":\"Ms. Thalia Heidenreich\"}', 'vi', 95),
(190, 'Adrian Bednar Jr.', 'adrian-bednar-jr', 'Et eveniet fuga ut omnis odio. Animi voluptas vel aperiam quas accusantium ratione. Iure quasi laborum voluptas debitis. Iste qui et quas et voluptatem dolorem ea.', 'Et cupiditate et maxime quod. Deleniti molestias illo temporibus nulla id laborum et.', NULL, '{\"title\":\"Adrian Bednar Jr.\",\"keywords\":\"Adrian Bednar Jr.\",\"description\":\"Adrian Bednar Jr.\"}', 'en', 95),
(191, 'Ms. Rosetta Koepp DDS', 'ms-rosetta-koepp-dds', 'Officiis sequi quae ad sequi. Vero tempore id quisquam quaerat. Perferendis quia ad qui.', '<p>Iste adipisci nam est enim quod et natus. Quis hic maxime doloremque odio. Eos assumenda possimus quia quia nemo. Tenetur aut vel molestiae sapiente.</p>', '[{\"name\":null,\"value\":null}]', '{\"title\":\"Ms. Rosetta Koepp DDS\",\"keywords\":\"Ms. Rosetta Koepp DDS\",\"description\":\"Ms. Rosetta Koepp DDS\"}', 'vi', 96),
(192, 'Reid Bahringer', 'reid-bahringer', 'Quod est quaerat sed ducimus eos repellat. Repellat et deleniti reiciendis illo. Id a unde qui soluta repudiandae at odit.', 'Voluptatem sequi iure aut impedit. Voluptate et sint praesentium saepe rerum. Esse ut ut dolorum reiciendis nulla.', NULL, '{\"title\":\"Reid Bahringer\",\"keywords\":\"Reid Bahringer\",\"description\":\"Reid Bahringer\"}', 'en', 96),
(193, 'Adelia Powlowski', 'adelia-powlowski', 'Deserunt qui et et cumque minus. Sint rerum sed magni soluta vitae neque odio. Possimus possimus labore id ut incidunt.', '<p>Et incidunt id mollitia et. Explicabo mollitia incidunt molestias dolores. Repellat vel vero autem dolorem unde.</p>', '[{\"name\":null,\"value\":null}]', '{\"title\":\"Adelia Powlowski\",\"keywords\":\"Adelia Powlowski\",\"description\":\"Adelia Powlowski\"}', 'vi', 97),
(194, 'Jameson Ankunding', 'jameson-ankunding', 'Inventore numquam vel earum amet ea. Similique esse consequuntur beatae quasi eveniet. Ut autem quia in corrupti neque. Optio quas natus error ipsum dolorum quis. Quisquam aut sequi quia quaerat.', 'Magnam adipisci qui possimus praesentium. Rerum est voluptatem accusamus in iusto nesciunt dolorum. Consectetur id voluptatem quisquam quia possimus enim officiis vitae. Minus distinctio quo autem vel tempora consequuntur.', NULL, '{\"title\":\"Jameson Ankunding\",\"keywords\":\"Jameson Ankunding\",\"description\":\"Jameson Ankunding\"}', 'en', 97),
(195, 'Harmony VonRueden Sr.', 'harmony-vonrueden-sr', 'Molestias earum nam ipsa autem. Corrupti dolor error et enim in. Dicta maxime fugit unde sunt. Asperiores nihil est neque similique occaecati.', '<p>Voluptates quaerat quod iusto. Magni et voluptas incidunt quia aperiam ut. Aspernatur enim veniam dolorem quos accusamus. Adipisci aperiam voluptate perferendis et aut.</p>', '[{\"name\":null,\"value\":null}]', '{\"title\":\"Harmony VonRueden Sr.\",\"keywords\":\"Harmony VonRueden Sr.\",\"description\":\"Harmony VonRueden Sr.\"}', 'vi', 98),
(196, 'Dr. Trenton Greenholt', 'dr-trenton-greenholt', 'Totam accusamus sint modi voluptas. Nam itaque odio rem facilis dolorem et nihil. Suscipit voluptatem ratione possimus. Consectetur delectus cum sed inventore voluptate placeat accusamus.', 'Et tempore veniam ut consequatur. Nihil molestiae nesciunt ratione qui placeat quibusdam fugiat doloribus.', NULL, '{\"title\":\"Dr. Trenton Greenholt\",\"keywords\":\"Dr. Trenton Greenholt\",\"description\":\"Dr. Trenton Greenholt\"}', 'en', 98),
(197, 'Mr. Brant Heaney III', 'mr-brant-heaney-iii', 'Animi maxime ea sit voluptatem ut quo. Velit eveniet et ut aliquam. Qui culpa fugiat fugiat ipsa quis dignissimos ea.', '<p>In error saepe rerum recusandae cumque et. Odit non est quod delectus in. Quia sit vitae id. Aspernatur pariatur dolores voluptate alias. Voluptatibus ut dignissimos voluptatem voluptatem sunt corrupti velit.</p>', '[{\"name\":null,\"value\":null}]', '{\"title\":\"Mr. Brant Heaney III\",\"keywords\":\"Mr. Brant Heaney III\",\"description\":\"Mr. Brant Heaney III\"}', 'vi', 99),
(198, 'Vance Shields', 'vance-shields', 'Asperiores perferendis in culpa aliquid. Labore est aliquam quidem quia earum aliquam ea accusamus. Eveniet consequatur autem neque vero.', 'Expedita distinctio eum hic assumenda iure laboriosam. Vel sequi vero nulla maiores minima. Error aperiam corporis necessitatibus cum amet quia.', NULL, '{\"title\":\"Vance Shields\",\"keywords\":\"Vance Shields\",\"description\":\"Vance Shields\"}', 'en', 99),
(199, 'Mr. Bertrand Toy', 'mr-bertrand-toy', 'Iste nostrum omnis quas unde expedita explicabo. Rem dolorum sapiente dolore. Praesentium voluptatibus recusandae labore et.', '<p>Quo qui sapiente et delectus. Dolorem et sunt occaecati vel a quis beatae. Corrupti velit dolor sint modi consequuntur officiis qui illo. Autem eos sit qui dolorum nemo possimus.</p>', '[{\"name\":null,\"value\":null}]', '{\"title\":\"Mr. Bertrand Toy\",\"keywords\":\"Mr. Bertrand Toy\",\"description\":\"Mr. Bertrand Toy\"}', 'vi', 100),
(200, 'Prof. Tyra Pacocha PhD', 'prof-tyra-pacocha-phd', 'Magni consequatur et iure in culpa. Corrupti doloribus iusto omnis quo. Quo assumenda ut facere vel facere similique nihil.', 'Enim doloremque iure id quod est excepturi ut. Magnam fuga omnis fuga rerum dolorum. Illo dolore qui voluptatibus est autem ab sunt.', NULL, '{\"title\":\"Prof. Tyra Pacocha PhD\",\"keywords\":\"Prof. Tyra Pacocha PhD\",\"description\":\"Prof. Tyra Pacocha PhD\"}', 'en', 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `registers`
--

CREATE TABLE `registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(11) NOT NULL DEFAULT '0',
  `province_id` int(11) NOT NULL DEFAULT '0',
  `gender` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `contents` longtext COLLATE utf8mb4_unicode_ci,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `priority`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', NULL, 1, 'publish', '2018-10-21 21:58:39', '2018-10-21 21:58:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seos`
--

INSERT INTO `seos` (`id`, `link`, `priority`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'http://demo4.ninavietnam.org/laravel', 0, 'publish', NULL, NULL, NULL),
(2, 'http://demo4.ninavietnam.org/laravel/gioi-thieu', 1, 'publish', NULL, '2018-10-22 06:22:53', '2018-10-22 06:22:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seo_languages`
--

CREATE TABLE `seo_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_seo` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seo_languages`
--

INSERT INTO `seo_languages` (`id`, `title`, `slug`, `meta_seo`, `language`, `seo_id`) VALUES
(1, 'Trang chủ', 'trang-chu', NULL, 'vi', 1),
(2, 'Trang chủ', 'trang-chu', NULL, 'en', 1),
(3, 'Giới thiệu', 'gioi-thieu', '{\"title\":null,\"keywords\":null,\"description\":null}', 'vi', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'maintenance', 'off'),
(2, 'language', 'vi'),
(3, 'date_custom_format', NULL),
(4, 'product_per_page', '12'),
(5, 'thumbs', '{\"product\":{\"_small\":{\"width\":\"300\",\"height\":\"300\"},\"_medium\":{\"width\":\"600\",\"height\":\"600\"},\"_large\":{\"width\":\"1000\",\"height\":\"1000\"}}}'),
(6, 'post_per_page', '10'),
(7, 'site_name', NULL),
(8, 'site_slogan', NULL),
(9, 'site_address', NULL),
(10, 'site_email', NULL),
(11, 'site_phone', NULL),
(12, 'site_fax', NULL),
(13, 'site_hotline', NULL),
(14, 'site_url', NULL),
(15, 'site_copyright', NULL),
(16, 'fanpage', NULL),
(17, 'google_coordinates', NULL),
(18, 'email_host', NULL),
(19, 'email_port', NULL),
(20, 'email_smtpsecure', NULL),
(21, 'email_username', NULL),
(22, 'email_password', NULL),
(23, 'email_to', NULL),
(24, 'email_cc', NULL),
(25, 'email_bcc', NULL),
(26, 'script_head', NULL),
(27, 'script_body', NULL),
(28, 'google_recaptcha_key', NULL),
(29, 'google_recaptcha_secret', NULL),
(30, 'date_format', 'd/m/Y');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(11) NOT NULL DEFAULT '0',
  `province_id` int(11) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `phone`, `email`, `address`, `district_id`, `province_id`, `image`, `priority`, `status`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', '$2y$10$7k49ORM/ajtORVC5SLRai.5vpGekkr1jiNsfEFlrP8ZZXz8M/rnkO', 'Võ Quốc Hải', NULL, 'quochainina@gmail.com', NULL, 0, 0, NULL, 1, 'publish', 'admin', 'zmQVdpYYBK', '2018-10-21 21:58:39', '2018-10-21 21:58:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_group`
--

CREATE TABLE `user_group` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wms_exports`
--

CREATE TABLE `wms_exports` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `export_qty` int(11) NOT NULL DEFAULT '0',
  `export_price` double NOT NULL DEFAULT '0',
  `note_cancel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wms_export_details`
--

CREATE TABLE `wms_export_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_qty` int(11) NOT NULL DEFAULT '0',
  `product_price` double NOT NULL DEFAULT '0',
  `size_id` int(11) NOT NULL DEFAULT '0',
  `size_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_id` int(11) NOT NULL DEFAULT '0',
  `color_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `export_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wms_imports`
--

CREATE TABLE `wms_imports` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_qty` int(11) NOT NULL DEFAULT '0',
  `import_price` double NOT NULL DEFAULT '0',
  `note_cancel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wms_import_details`
--

CREATE TABLE `wms_import_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_qty` int(11) NOT NULL DEFAULT '0',
  `product_price` double NOT NULL DEFAULT '0',
  `size_id` int(11) NOT NULL DEFAULT '0',
  `size_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_id` int(11) NOT NULL DEFAULT '0',
  `color_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wms_stores`
--

CREATE TABLE `wms_stores` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `attribute_languages`
--
ALTER TABLE `attribute_languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attribute_languages_attribute_id_language_unique` (`attribute_id`,`language`),
  ADD KEY `attribute_languages_language_index` (`language`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_languages`
--
ALTER TABLE `category_languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_languages_category_id_language_unique` (`category_id`,`language`),
  ADD KEY `category_languages_language_index` (`language`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_product_id_foreign` (`product_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_member_id_foreign` (`member_id`);

--
-- Chỉ mục cho bảng `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `groups_name_unique` (`name`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`);

--
-- Chỉ mục cho bảng `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `link_languages`
--
ALTER TABLE `link_languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link_languages_link_id_language_unique` (`link_id`,`language`),
  ADD KEY `link_languages_language_index` (`language`);

--
-- Chỉ mục cho bảng `media_libraries`
--
ALTER TABLE `media_libraries`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Chỉ mục cho bảng `member_password_resets`
--
ALTER TABLE `member_password_resets`
  ADD KEY `member_password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_code_unique` (`code`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Chỉ mục cho bảng `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `page_languages`
--
ALTER TABLE `page_languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_languages_page_id_language_unique` (`page_id`,`language`),
  ADD KEY `page_languages_language_index` (`language`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `photo_languages`
--
ALTER TABLE `photo_languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `photo_languages_photo_id_language_unique` (`photo_id`,`language`),
  ADD KEY `photo_languages_language_index` (`language`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `post_attribute`
--
ALTER TABLE `post_attribute`
  ADD KEY `post_attribute_post_id_foreign` (`post_id`),
  ADD KEY `post_attribute_attribute_id_foreign` (`attribute_id`);

--
-- Chỉ mục cho bảng `post_languages`
--
ALTER TABLE `post_languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_languages_post_id_language_unique` (`post_id`,`language`),
  ADD KEY `post_languages_language_index` (`language`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_code_unique` (`code`),
  ADD KEY `products_supplier_id_foreign` (`supplier_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD KEY `product_attribute_product_id_foreign` (`product_id`),
  ADD KEY `product_attribute_attribute_id_foreign` (`attribute_id`);

--
-- Chỉ mục cho bảng `product_languages`
--
ALTER TABLE `product_languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_languages_product_id_language_unique` (`product_id`,`language`),
  ADD KEY `product_languages_language_index` (`language`);

--
-- Chỉ mục cho bảng `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `seo_languages`
--
ALTER TABLE `seo_languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seo_languages_seo_id_language_unique` (`seo_id`,`language`),
  ADD KEY `seo_languages_language_index` (`language`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_code_unique` (`code`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_group`
--
ALTER TABLE `user_group`
  ADD KEY `user_group_user_id_foreign` (`user_id`),
  ADD KEY `user_group_group_id_foreign` (`group_id`);

--
-- Chỉ mục cho bảng `wms_exports`
--
ALTER TABLE `wms_exports`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wms_exports_code_unique` (`code`);

--
-- Chỉ mục cho bảng `wms_export_details`
--
ALTER TABLE `wms_export_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wms_export_details_export_id_foreign` (`export_id`);

--
-- Chỉ mục cho bảng `wms_imports`
--
ALTER TABLE `wms_imports`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wms_imports_code_unique` (`code`);

--
-- Chỉ mục cho bảng `wms_import_details`
--
ALTER TABLE `wms_import_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wms_import_details_import_id_foreign` (`import_id`);

--
-- Chỉ mục cho bảng `wms_stores`
--
ALTER TABLE `wms_stores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wms_stores_code_unique` (`code`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `attribute_languages`
--
ALTER TABLE `attribute_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `category_languages`
--
ALTER TABLE `category_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `link_languages`
--
ALTER TABLE `link_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `media_libraries`
--
ALTER TABLE `media_libraries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `page_languages`
--
ALTER TABLE `page_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `photo_languages`
--
ALTER TABLE `photo_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `post_languages`
--
ALTER TABLE `post_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `product_languages`
--
ALTER TABLE `product_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT cho bảng `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `seo_languages`
--
ALTER TABLE `seo_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `wms_exports`
--
ALTER TABLE `wms_exports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `wms_export_details`
--
ALTER TABLE `wms_export_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `wms_imports`
--
ALTER TABLE `wms_imports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `wms_import_details`
--
ALTER TABLE `wms_import_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `wms_stores`
--
ALTER TABLE `wms_stores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `attribute_languages`
--
ALTER TABLE `attribute_languages`
  ADD CONSTRAINT `attribute_languages_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `category_languages`
--
ALTER TABLE `category_languages`
  ADD CONSTRAINT `category_languages_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `link_languages`
--
ALTER TABLE `link_languages`
  ADD CONSTRAINT `link_languages_link_id_foreign` FOREIGN KEY (`link_id`) REFERENCES `links` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `page_languages`
--
ALTER TABLE `page_languages`
  ADD CONSTRAINT `page_languages_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `photo_languages`
--
ALTER TABLE `photo_languages`
  ADD CONSTRAINT `photo_languages_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `post_attribute`
--
ALTER TABLE `post_attribute`
  ADD CONSTRAINT `post_attribute_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_attribute_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `post_languages`
--
ALTER TABLE `post_languages`
  ADD CONSTRAINT `post_languages_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD CONSTRAINT `product_attribute_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_attribute_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product_languages`
--
ALTER TABLE `product_languages`
  ADD CONSTRAINT `product_languages_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `seo_languages`
--
ALTER TABLE `seo_languages`
  ADD CONSTRAINT `seo_languages_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `user_group`
--
ALTER TABLE `user_group`
  ADD CONSTRAINT `user_group_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_group_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `wms_export_details`
--
ALTER TABLE `wms_export_details`
  ADD CONSTRAINT `wms_export_details_export_id_foreign` FOREIGN KEY (`export_id`) REFERENCES `wms_exports` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `wms_import_details`
--
ALTER TABLE `wms_import_details`
  ADD CONSTRAINT `wms_import_details_import_id_foreign` FOREIGN KEY (`import_id`) REFERENCES `wms_imports` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
