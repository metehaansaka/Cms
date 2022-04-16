-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 01 Şub 2022, 21:12:04
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `laravel_admin`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_info` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`image_info`)),
  `sorted` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `block_id` int(11) DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `top_menu` int(11) DEFAULT NULL,
  `special` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`id`, `image`, `image2`, `image3`, `image_info`, `sorted`, `create_time`, `block_id`, `form_id`, `status`, `update_time`, `parent_id`, `top_menu`, `special`, `url`, `home_page`) VALUES
(1, NULL, NULL, NULL, NULL, 999, 1605536541, 6, 0, 1, NULL, 0, 1, NULL, NULL, 0),
(58, NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642853524, 6, 0, 1, 1643474004, 1, 1, NULL, '/', 0),
(59, NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642853532, 25, 0, 1, 1643598970, 1, 1, NULL, NULL, 0),
(60, NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642853537, 21, 0, 1, 1643598987, 1, 1, NULL, NULL, 0),
(68, NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642945809, 7, 0, 1, 1643298242, 1, 1, NULL, NULL, 0),
(71, NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642946497, 6, 0, 1, 1642946640, 58, 0, NULL, NULL, 0),
(72, 'FqSI0FpMH6zBPIPXs7DTUgMuLMI3WdJm0yZTCxbK.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642946577, 6, 0, 1, 1642985952, 71, 0, NULL, NULL, 0),
(73, 'XeMmCpLZjIexP3hjHS6cxGTblnLswyDEZiYgmCpQ.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642946607, 6, 0, 1, 1642985959, 71, 0, NULL, NULL, 0),
(74, 'xkGjHEL4hIYplejuCmGqjxmF2shY3f56B2iy3GV7.png', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642948052, 6, 0, 1, 1642948586, 58, 0, NULL, NULL, 0),
(75, NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642950734, 6, 0, 1, 1642950862, 58, 0, NULL, NULL, 0),
(76, 'qPtGTA5crnAl0CQsbhlbm8KJR5nW2pSKCB9rw9Ps.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642951427, 22, 0, 1, 1643242591, 60, 1, NULL, NULL, 1),
(77, 'EAqJzdzDbwBdFzcSiqcDLSkdUUblT0WSCYfhZyy5.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642951796, 22, 0, 1, 1643242660, 60, 1, NULL, NULL, 1),
(78, 'Q0kiEAWP2iq8h3Fqz0QcQ5h5kgeXYJyVuUBTaHIP.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642952224, 22, 0, 1, 1643242655, 60, 1, NULL, NULL, 1),
(79, 'nb7e2cXiUpEteSNi0eHZc53G1T5FK2DDN1mVkVVf.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642952257, 22, 0, 1, 1643242650, 60, 1, NULL, NULL, 1),
(80, '5kTTwwXacJNncrOUJx15oM48ZyZFLnKBm13ozlMD.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642952493, 6, 0, 1, 1642953619, 58, 0, NULL, NULL, 0),
(81, 'V8UgALJmOPcEilHWhFSLxqvw0B6bqS5YDj5rbA3Y.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642952566, 6, 0, 1, NULL, 80, 0, NULL, NULL, 0),
(82, 'ybuGvbMhPIUgyqFQynOOeJj7G3z8PsSOAS7C1Vp7.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642952695, 6, 0, 1, NULL, 80, 0, NULL, NULL, 0),
(83, 'znckcT2aml2GVkRHf3VPmZTmHO1cJ1unCqCr66sZ.jpeg', 'U8moFxLcv4D9bgoqgWFErtGkGaOA0UGL2ssx97T5.png', NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642954419, 6, 0, 1, 1642956933, 58, 0, NULL, NULL, 0),
(84, NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642982889, 6, 0, 1, NULL, 58, 0, NULL, NULL, 0),
(85, '8oq86MhcB8kUguDYvBCVdLUiSt8TWSGLSjTzCJHr.png', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642983208, 6, 0, 1, 1642983892, 84, 0, NULL, NULL, 0),
(86, 'lkGqY4dKZ2RzSEagjyE5Sv5BHZ2gOYACl00ngGa5.png', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642983488, 6, 0, 1, 1642983504, 84, 0, NULL, NULL, 0),
(87, 'n1euzrIyamWY9KaPkhiCQoMkst0ijAV5cNgVBSZJ.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642983883, 6, 0, 1, 1642983955, 58, 0, NULL, NULL, 0),
(88, 'oPicvrGpMFxi59wnfxCGuXvykrDuKHH68TF7Grjc.jpeg', 'JNpGxESY8Cnx95fT1idesJBuQyeGsPYjqWgIiqAo.jpeg', NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642984573, 6, 0, 1, 1643599540, 58, 0, NULL, NULL, 0),
(89, NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642985515, 6, 0, 1, 1643600104, 87, 0, NULL, NULL, 0),
(90, NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642985551, 6, 0, 1, NULL, 87, 0, NULL, NULL, 0),
(91, NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642985564, 6, 0, 1, NULL, 87, 0, NULL, NULL, 0),
(92, NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642985583, 6, 0, 1, NULL, 87, 0, NULL, NULL, 0),
(93, 'Yje8t27SNCMzwh1OoXvLOxctoWdsD8cWgEisMnkP.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642986155, 6, 0, 1, 1642986238, 58, 0, NULL, NULL, 0),
(94, NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642986736, 6, 0, 1, NULL, 58, 0, NULL, NULL, 0),
(95, 'EEdHF2orCWIJuVGfBV0fhLqr7Sk78qQ1xoooezUR.png', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642986792, 6, 0, 1, NULL, 94, 0, NULL, NULL, 0),
(96, 'jb6aPlkZvyqBGaAun27L2wqy607DhzlEzYeKTrEC.png', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642986800, 6, 0, 1, NULL, 94, 0, NULL, NULL, 0),
(97, 'tlPc7MWMxFPY6n7wOKeFaNSYETTBUKHpzvovYmh7.png', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642986809, 6, 0, 1, NULL, 94, 0, NULL, NULL, 0),
(98, 'UOcOujwcjhtaUlXknoJ7Qjxzms7JA4y7CZWAHqt6.png', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642986815, 6, 0, 1, NULL, 94, 0, NULL, NULL, 0),
(99, 'K5tGlNu5fXjsuoKJSNKKl6U4Gv98ECOiB7NL8l4j.png', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642986823, 6, 0, 1, NULL, 94, 0, NULL, NULL, 0),
(101, 'vgB3P8NbHhIgBMCNQbXuohIN7FThtOXSabkKIhTi.png', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1642986846, 6, 0, 1, NULL, 94, 0, NULL, NULL, 0),
(102, NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1643080758, 23, 0, 1, 1643598997, 1, 1, NULL, NULL, 0),
(103, NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1643080930, 6, 0, 1, NULL, 58, 0, NULL, NULL, 0),
(104, 'rLW339ykpdmtOp2CZsmxN8alTQ1rsZtJ3UnQujy0.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1643081174, 24, 0, 1, 1643598827, 102, 1, NULL, NULL, 1),
(105, '6BHurvcpjolksDxknrNuam9sEuydyuAfgNGL8Tdd.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1643081199, 24, 0, 1, 1643244961, 102, 1, NULL, NULL, 1),
(106, '0hDyF4QA7u8bhVVPFGzh4f7U9gB8wQ1BM7TCUgMk.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1643081225, 24, 0, 1, 1643244966, 102, 1, NULL, NULL, 1),
(107, 'T97Igzpe72Fj5v57HfoGysVPis34tJLXsE7drtPI.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1643293269, 6, 0, 1, NULL, 59, 0, NULL, NULL, 0),
(108, 'UjcDXV1xg37jkm0RIwIBa3uhJqoKIApzyyfpcfTc.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1643293291, 6, 0, 1, NULL, 59, 0, NULL, NULL, 0),
(109, '5BmdPjLywgLFp5bz6HdhDZ5Snkn8XZUsXNhdy3Wy.jpeg', NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1643293308, 6, 0, 1, 1643293585, 59, 0, NULL, NULL, 0),
(110, NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 999, 1643340873, 26, 0, 1, 1643598118, 1, 1, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category_language`
--

CREATE TABLE `category_language` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `language_slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_info` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`image_info`)),
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contents` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_fields` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`special_fields`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `category_language`
--

INSERT INTO `category_language` (`id`, `category_id`, `language_slug`, `name`, `image`, `image2`, `image3`, `image_info`, `seo_title`, `seo_description`, `seo_keywords`, `description`, `contents`, `special_fields`) VALUES
(1, 1, 'tr', 'menü', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'en', 'Üst Menü', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 'fr', 'Üst Menü', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, 58, 'tr', 'Anasayfa', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(173, 58, 'en', 'Home', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(174, 58, 'fr', 'Anasayfa', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(175, 59, 'tr', 'Hakkımızda', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(176, 59, 'en', 'About Us', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(177, 59, 'fr', 'Hakkımızda', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(178, 60, 'tr', 'Hizmetlerimiz', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(179, 60, 'en', 'Services', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(180, 60, 'fr', 'Blog', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(202, 68, 'tr', 'İletişim', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d12754.934463337488!2d28.575956489523385!3d41.01986304666224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe3031ac55d62c84b!2zVEMgWmlyYWF0IEJhbmthc8SxIELDvHnDvGvDp2VrbWVjZSDDh2FyxZ_EsSDFnnViZXNp!5e0!3m2!1str!2str!4v1643295045869!5m2!1str!2str\"]'),
(203, 68, 'en', 'Contact', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d12754.934463337488!2d28.575956489523385!3d41.01986304666224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe3031ac55d62c84b!2zVEMgWmlyYWF0IEJhbmthc8SxIELDvHnDvGvDp2VrbWVjZSDDh2FyxZ_EsSDFnnViZXNp!5e0!3m2!1str!2str!4v1643295045869!5m2!1str!2str\"]'),
(204, 68, 'fr', 'Contact', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(211, 71, 'tr', 'Slider', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(212, 71, 'en', 'Slider', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"#FF4328\",\"#FFFFFF\"]'),
(213, 71, 'fr', 'Slider', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"#FF4328\",\"#FFFFFF\"]'),
(214, 72, 'tr', 'We bring design together with technology', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Copying and Printing Center', NULL, '[\"#FEC931\",\"#FFFFFF\"]'),
(215, 72, 'en', 'We bring design together with technology', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Copying and Printing Center', NULL, '[\"#FEC931\",\"#FFFFFF\"]'),
(216, 72, 'fr', 'We bring design together with technology', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Copying and Printing Center', NULL, '[\"#FEC931\",\"#FFFFFF\"]'),
(217, 73, 'tr', 'We bring design together with technology', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Copying and Printing Center', NULL, '[\"#FEC931\",\"#FFFFFF\"]'),
(218, 73, 'en', 'We bring design together with technology', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Copying and Printing Center', NULL, '[\"#FEC931\",\"#FFFFFF\"]'),
(219, 73, 'fr', 'We bring design together with technology', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Copying and Printing Center', NULL, '[\"#FEC931\",\"#FFFFFF\"]'),
(220, 74, 'tr', 'Welcome to printify', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Dream it. Print it.', '<p>When we say we&rsquo;re not happy until you&rsquo;re happy, we really do mean it. So whether it&rsquo;s a typo or an image that didn&rsquo;t print quite the way you hoped, we&rsquo;ll do everything we can to<br />\r\nfix it.</p>\r\n\r\n<p>We love great design and believe it can work wonders for every business. That&rsquo;s why we make it simple to create beautiful, expertly crafted business stationery.</p>', '[\"#FF4328\",\"#000000\"]'),
(221, 74, 'en', 'Welcome to printify', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Dream it. Print it.', '<p>When we say we&rsquo;re not happy until you&rsquo;re happy, we really do mean it. So whether it&rsquo;s a typo or an image that didn&rsquo;t print quite the way you hoped, we&rsquo;ll do everything we can to<br />\r\nfix it.</p>\r\n\r\n<p>We love great design and believe it can work wonders for every business. That&rsquo;s why we make it simple to create beautiful, expertly crafted business stationery.</p>', '[\"#FF4328\",\"#000000\"]'),
(222, 74, 'fr', 'Welcome to printify', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Dream it. Print it.', '<p>When we say we&rsquo;re not happy until you&rsquo;re happy, we really do mean it. So whether it&rsquo;s a typo or an image that didn&rsquo;t print quite the way you hoped, we&rsquo;ll do everything we can to<br />\r\nfix it.</p>\r\n\r\n<p>We love great design and believe it can work wonders for every business. That&rsquo;s why we make it simple to create beautiful, expertly crafted business stationery.</p>', '[\"#FF4328\",\"#000000\"]'),
(223, 75, 'tr', 'Our features', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'What We Do', '<p>There are many variations of passages of lorem Ipsum available, but</p>\r\n\r\n<p>the majority have suffered alteration in some form.</p>', '[\"#FF4328\",\"#000000\"]'),
(224, 75, 'en', 'Our features', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'What We Do', '<p>There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration in some form.</p>', '[\"#FF4328\",\"#000000\"]'),
(225, 75, 'fr', 'Our features', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'What We Do', '<p>There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration in some form.</p>', '[\"#FF4328\",\"#000000\"]'),
(226, 76, 'tr', 'Digital Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam diam tellus, commodo sit amet pharetra et, pellentesque ut ligula. Morbi hendrerit non lorem eu consequat. In aliquet neque ipsum, a facilisis ligula lacinia ut. Duis at molestie elit. In porttitor vehicula convallis. In viverra orci tellus, eget ultrices turpis aliquet ac. Aenean nec consequat velit. Nunc sit amet facilisis tellus. Fusce tristique blandit tincidunt. Sed non consectetur lacus. Aliquam consequat vestibulum odio pulvinar aliquam. Integer non iaculis nibh. Integer congue sem mauris, sit amet lobortis arcu condimentum in. Aliquam vel magna tincidunt, facilisis mi et, scelerisque magna. Nulla vitae congue dui, ut dapibus neque.</p>\r\n\r\n<p>Mauris magna urna, volutpat ac magna nec, suscipit sagittis velit. Suspendisse venenatis egestas diam vulputate commodo. Etiam lacinia, erat vitae tempus malesuada, ante elit dictum lectus, ac aliquet lacus nulla sed dolor. Vestibulum in vulputate massa, et fermentum lacus. Nam accumsan quam felis, a congue elit placerat nec. Proin scelerisque mauris eu libero aliquam ultricies. Mauris vitae nibh viverra, commodo orci ac, sagittis mauris.</p>\r\n\r\n<p>Nullam lectus lacus, tincidunt non est nec, finibus luctus sem. Duis pellentesque sapien turpis, ac ornare nisl dignissim vitae. Nulla eu semper magna. Nullam condimentum vehicula auctor. Donec venenatis purus posuere nibh placerat, vitae finibus nunc tincidunt. Etiam tempor ligula ac quam fermentum aliquam vitae nec augue. Aliquam dui sapien, vehicula vel nunc facilisis, rhoncus aliquet purus. Sed auctor nec nisi at tincidunt. Donec interdum diam et libero lobortis, vitae molestie ligula pulvinar. Praesent tincidunt leo in pretium finibus. In laoreet orci eros, in condimentum lacus tempor vitae.</p>\r\n\r\n<p>Vestibulum fermentum diam convallis justo interdum scelerisque. Integer porttitor arcu nec ante accumsan gravida. Vestibulum rhoncus dolor vitae augue ultricies, vel posuere purus vehicula. Maecenas sollicitudin porttitor auctor. Vestibulum ut lorem rutrum, molestie dolor vitae, laoreet risus. In pellentesque ultrices sem, sit amet gravida neque sollicitudin vel. Praesent ac pellentesque enim. Vivamus placerat metus sed urna facilisis, vel posuere justo aliquet. Duis ligula massa, gravida et urna a, accumsan pretium turpis.</p>\r\n\r\n<p>Nunc tristique nec purus vitae porttitor. Duis luctus lectus lectus, et gravida velit imperdiet vel. Morbi venenatis bibendum sapien, vestibulum bibendum dolor feugiat eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent vitae ante erat. Quisque malesuada elit et ex varius efficitur. Ut sagittis justo laoreet tellus lobortis scelerisque. Nullam eu nibh lectus.</p>\r\n\r\n<p>Mauris bibendum, eros pretium aliquet iaculis, dui libero scelerisque augue, in blandit tellus ligula a leo. Quisque molestie auctor varius. Pellentesque molestie euismod ligula. Proin dapibus justo non magna tempor, vel condimentum elit accumsan. Nam faucibus lorem sapien, a pulvinar est ornare ac. Donec mattis lectus ultricies, pretium nisi eget, finibus elit. Praesent pretium neque dolor, vitae interdum orci efficitur sit amet. Morbi vestibulum orci quis volutpat varius. Mauris magna metus, malesuada ut luctus in, hendrerit vitae lacus.</p>\r\n\r\n<p>Ut vel magna consectetur leo molestie ultricies. Pellentesque nec turpis nulla. Phasellus pellentesque sit amet velit non euismod. Quisque finibus dolor vel lacus cursus ornare. Phasellus sem dui, varius nec tempus eu, dapibus quis augue. Mauris eu metus aliquam, lacinia felis id, scelerisque leo. Aliquam porttitor, lorem vitae venenatis laoreet, dui velit pharetra urna, vitae eleifend tellus nisi ac massa. Nunc id odio ornare, posuere libero sed, interdum nisi. Quisque a nunc at tortor feugiat sollicitudin. Duis vitae euismod orci, ac convallis turpis. Vivamus pellentesque interdum elit non efficitur.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit interdum nibh, id aliquet mauris lacinia nec. Morbi tempor, sem ac lobortis vestibulum, libero ligula lobortis elit, id imperdiet lectus sapien aliquam nisl. Morbi nibh lectus, maximus at urna ornare, lobortis finibus ante. Vestibulum sollicitudin, justo rutrum pretium lacinia, est tortor dapibus augue, sed bibendum risus libero eu ipsum. Vivamus accumsan viverra nisl, non fringilla orci posuere id. Duis vel diam nec mauris aliquam lacinia. Donec id elementum ante.</p>\r\n\r\n<p>Duis pretium leo vitae purus vulputate varius. In ultrices est sed iaculis euismod. Nulla vitae viverra nibh. Cras eget lectus semper ipsum mattis interdum. In luctus, magna dictum congue imperdiet, tellus odio efficitur justo, sed imperdiet augue massa sed ipsum. Morbi id tincidunt nunc. Aliquam efficitur enim quis urna malesuada, eget vestibulum diam elementum.</p>\r\n\r\n<p>Integer suscipit, libero at vehicula maximus, justo erat malesuada libero, a convallis massa libero sed orci. Phasellus iaculis lobortis sapien vitae accumsan. Donec sem velit, gravida ut nisl eu, facilisis consequat dolor. Vestibulum pellentesque metus ac nisl elementum viverra. Duis tempor vulputate turpis. Nulla pretium dictum nulla non porta. Donec cursus quis magna a tincidunt. Ut sollicitudin nec ex nec convallis. Mauris mollis nibh eleifend, tincidunt ex in, maximus nulla. Curabitur eu enim blandit, molestie metus et, finibus ex.</p>\r\n\r\n<p>Morbi mollis, dolor sed commodo eleifend, odio lacus feugiat nibh, non gravida enim eros ut nibh. Praesent ac aliquam tellus. Praesent dictum sit amet sapien a feugiat. Vestibulum feugiat purus sit amet ligula pulvinar, ut dictum leo tempus. Maecenas quis erat vel magna luctus ultricies. Maecenas ut orci a libero laoreet condimentum id a neque. Sed vel vulputate augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed gravida, ex ut interdum convallis, turpis quam volutpat magna, sed interdum leo sem non felis. Aenean sagittis hendrerit lectus, vel sagittis massa sodales vel. Praesent viverra congue lacus sit amet blandit.</p>\r\n\r\n<p>Mauris ut facilisis metus. Etiam ornare sed elit et accumsan. Nulla in eros elit. Fusce laoreet turpis eros, non blandit eros venenatis et. Proin rutrum libero et dictum fringilla. Maecenas rutrum mauris molestie, hendrerit libero at, condimentum mauris. Fusce rhoncus quis dui at euismod. Donec a sapien et lacus pretium convallis id a est. Mauris nunc enim, molestie vitae commodo vel, dapibus nec justo. Vestibulum rutrum mi sodales elit condimentum, non pellentesque leo rhoncus. Sed quis pharetra velit. Nunc suscipit lorem vel lacus tincidunt mollis. Nam iaculis, est vel vestibulum gravida, nisi dolor rhoncus lorem, vel tincidunt dolor justo tristique felis. Vivamus elementum ornare odio, sed auctor nisl lacinia eu. Nam ut felis nec diam vulputate aliquam. Fusce ut dictum erat, quis finibus arcu.</p>\r\n\r\n<p>Aenean sodales malesuada nisl quis venenatis. Aenean hendrerit at quam a feugiat. Ut elementum viverra nunc ac aliquet. Suspendisse viverra eleifend erat. Sed odio turpis, commodo eget ligula non, sodales dapibus leo. Praesent condimentum mattis lectus a scelerisque. Nulla ornare nunc a arcu imperdiet bibendum. Maecenas gravida, est ut venenatis rutrum, augue nibh lacinia nibh, sed efficitur orci odio sed turpis.</p>\r\n\r\n<p>Sed at justo eu enim pellentesque tristique ac quis lacus. Nunc scelerisque augue dui, blandit commodo ipsum ultricies dignissim. Fusce quis mauris tellus. Duis molestie metus eu metus tempus iaculis. Cras ut nunc dapibus, tristique nulla vitae, porttitor tortor. Suspendisse vel velit nec tellus fringilla bibendum vel id nibh. Phasellus sed massa id tellus luctus dictum in vitae dui.</p>\r\n\r\n<p>Sed quam enim, lobortis eu porta eu, consectetur pharetra urna. Praesent pulvinar venenatis magna, vel sollicitudin ex imperdiet vel. Aliquam porttitor enim a erat sagittis commodo. Phasellus eget enim elit. In ornare nulla ligula, eu egestas ex commodo in. Integer porttitor quam turpis, non maximus erat tincidunt in. Sed convallis ex vitae nisi molestie posuere. Aliquam erat volutpat. Morbi euismod pellentesque elit a venenatis. Aliquam volutpat leo turpis, eu vulputate ante euismod id. Integer et porttitor purus. Fusce dapibus tellus in sagittis mollis. Curabitur vel aliquam nisl.</p>', '[\"printify-icon-paper-drill\"]'),
(227, 76, 'en', 'Digital Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.', NULL, '[\"printify-icon-paper-drill\"]'),
(228, 76, 'fr', 'Digital Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.', NULL, '[\"printify-icon-paper-drill\"]'),
(229, 77, 'tr', 'Offset Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam diam tellus, commodo sit amet pharetra et, pellentesque ut ligula. Morbi hendrerit non lorem eu consequat. In aliquet neque ipsum, a facilisis ligula lacinia ut. Duis at molestie elit. In porttitor vehicula convallis. In viverra orci tellus, eget ultrices turpis aliquet ac. Aenean nec consequat velit. Nunc sit amet facilisis tellus. Fusce tristique blandit tincidunt. Sed non consectetur lacus. Aliquam consequat vestibulum odio pulvinar aliquam. Integer non iaculis nibh. Integer congue sem mauris, sit amet lobortis arcu condimentum in. Aliquam vel magna tincidunt, facilisis mi et, scelerisque magna. Nulla vitae congue dui, ut dapibus neque.</p>\r\n\r\n<p>Mauris magna urna, volutpat ac magna nec, suscipit sagittis velit. Suspendisse venenatis egestas diam vulputate commodo. Etiam lacinia, erat vitae tempus malesuada, ante elit dictum lectus, ac aliquet lacus nulla sed dolor. Vestibulum in vulputate massa, et fermentum lacus. Nam accumsan quam felis, a congue elit placerat nec. Proin scelerisque mauris eu libero aliquam ultricies. Mauris vitae nibh viverra, commodo orci ac, sagittis mauris.</p>\r\n\r\n<p>Nullam lectus lacus, tincidunt non est nec, finibus luctus sem. Duis pellentesque sapien turpis, ac ornare nisl dignissim vitae. Nulla eu semper magna. Nullam condimentum vehicula auctor. Donec venenatis purus posuere nibh placerat, vitae finibus nunc tincidunt. Etiam tempor ligula ac quam fermentum aliquam vitae nec augue. Aliquam dui sapien, vehicula vel nunc facilisis, rhoncus aliquet purus. Sed auctor nec nisi at tincidunt. Donec interdum diam et libero lobortis, vitae molestie ligula pulvinar. Praesent tincidunt leo in pretium finibus. In laoreet orci eros, in condimentum lacus tempor vitae.</p>\r\n\r\n<p>Vestibulum fermentum diam convallis justo interdum scelerisque. Integer porttitor arcu nec ante accumsan gravida. Vestibulum rhoncus dolor vitae augue ultricies, vel posuere purus vehicula. Maecenas sollicitudin porttitor auctor. Vestibulum ut lorem rutrum, molestie dolor vitae, laoreet risus. In pellentesque ultrices sem, sit amet gravida neque sollicitudin vel. Praesent ac pellentesque enim. Vivamus placerat metus sed urna facilisis, vel posuere justo aliquet. Duis ligula massa, gravida et urna a, accumsan pretium turpis.</p>\r\n\r\n<p>Nunc tristique nec purus vitae porttitor. Duis luctus lectus lectus, et gravida velit imperdiet vel. Morbi venenatis bibendum sapien, vestibulum bibendum dolor feugiat eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent vitae ante erat. Quisque malesuada elit et ex varius efficitur. Ut sagittis justo laoreet tellus lobortis scelerisque. Nullam eu nibh lectus.</p>\r\n\r\n<p>Mauris bibendum, eros pretium aliquet iaculis, dui libero scelerisque augue, in blandit tellus ligula a leo. Quisque molestie auctor varius. Pellentesque molestie euismod ligula. Proin dapibus justo non magna tempor, vel condimentum elit accumsan. Nam faucibus lorem sapien, a pulvinar est ornare ac. Donec mattis lectus ultricies, pretium nisi eget, finibus elit. Praesent pretium neque dolor, vitae interdum orci efficitur sit amet. Morbi vestibulum orci quis volutpat varius. Mauris magna metus, malesuada ut luctus in, hendrerit vitae lacus.</p>\r\n\r\n<p>Ut vel magna consectetur leo molestie ultricies. Pellentesque nec turpis nulla. Phasellus pellentesque sit amet velit non euismod. Quisque finibus dolor vel lacus cursus ornare. Phasellus sem dui, varius nec tempus eu, dapibus quis augue. Mauris eu metus aliquam, lacinia felis id, scelerisque leo. Aliquam porttitor, lorem vitae venenatis laoreet, dui velit pharetra urna, vitae eleifend tellus nisi ac massa. Nunc id odio ornare, posuere libero sed, interdum nisi. Quisque a nunc at tortor feugiat sollicitudin. Duis vitae euismod orci, ac convallis turpis. Vivamus pellentesque interdum elit non efficitur.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit interdum nibh, id aliquet mauris lacinia nec. Morbi tempor, sem ac lobortis vestibulum, libero ligula lobortis elit, id imperdiet lectus sapien aliquam nisl. Morbi nibh lectus, maximus at urna ornare, lobortis finibus ante. Vestibulum sollicitudin, justo rutrum pretium lacinia, est tortor dapibus augue, sed bibendum risus libero eu ipsum. Vivamus accumsan viverra nisl, non fringilla orci posuere id. Duis vel diam nec mauris aliquam lacinia. Donec id elementum ante.</p>\r\n\r\n<p>Duis pretium leo vitae purus vulputate varius. In ultrices est sed iaculis euismod. Nulla vitae viverra nibh. Cras eget lectus semper ipsum mattis interdum. In luctus, magna dictum congue imperdiet, tellus odio efficitur justo, sed imperdiet augue massa sed ipsum. Morbi id tincidunt nunc. Aliquam efficitur enim quis urna malesuada, eget vestibulum diam elementum.</p>\r\n\r\n<p>Integer suscipit, libero at vehicula maximus, justo erat malesuada libero, a convallis massa libero sed orci. Phasellus iaculis lobortis sapien vitae accumsan. Donec sem velit, gravida ut nisl eu, facilisis consequat dolor. Vestibulum pellentesque metus ac nisl elementum viverra. Duis tempor vulputate turpis. Nulla pretium dictum nulla non porta. Donec cursus quis magna a tincidunt. Ut sollicitudin nec ex nec convallis. Mauris mollis nibh eleifend, tincidunt ex in, maximus nulla. Curabitur eu enim blandit, molestie metus et, finibus ex.</p>\r\n\r\n<p>Morbi mollis, dolor sed commodo eleifend, odio lacus feugiat nibh, non gravida enim eros ut nibh. Praesent ac aliquam tellus. Praesent dictum sit amet sapien a feugiat. Vestibulum feugiat purus sit amet ligula pulvinar, ut dictum leo tempus. Maecenas quis erat vel magna luctus ultricies. Maecenas ut orci a libero laoreet condimentum id a neque. Sed vel vulputate augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed gravida, ex ut interdum convallis, turpis quam volutpat magna, sed interdum leo sem non felis. Aenean sagittis hendrerit lectus, vel sagittis massa sodales vel. Praesent viverra congue lacus sit amet blandit.</p>\r\n\r\n<p>Mauris ut facilisis metus. Etiam ornare sed elit et accumsan. Nulla in eros elit. Fusce laoreet turpis eros, non blandit eros venenatis et. Proin rutrum libero et dictum fringilla. Maecenas rutrum mauris molestie, hendrerit libero at, condimentum mauris. Fusce rhoncus quis dui at euismod. Donec a sapien et lacus pretium convallis id a est. Mauris nunc enim, molestie vitae commodo vel, dapibus nec justo. Vestibulum rutrum mi sodales elit condimentum, non pellentesque leo rhoncus. Sed quis pharetra velit. Nunc suscipit lorem vel lacus tincidunt mollis. Nam iaculis, est vel vestibulum gravida, nisi dolor rhoncus lorem, vel tincidunt dolor justo tristique felis. Vivamus elementum ornare odio, sed auctor nisl lacinia eu. Nam ut felis nec diam vulputate aliquam. Fusce ut dictum erat, quis finibus arcu.</p>\r\n\r\n<p>Aenean sodales malesuada nisl quis venenatis. Aenean hendrerit at quam a feugiat. Ut elementum viverra nunc ac aliquet. Suspendisse viverra eleifend erat. Sed odio turpis, commodo eget ligula non, sodales dapibus leo. Praesent condimentum mattis lectus a scelerisque. Nulla ornare nunc a arcu imperdiet bibendum. Maecenas gravida, est ut venenatis rutrum, augue nibh lacinia nibh, sed efficitur orci odio sed turpis.</p>\r\n\r\n<p>Sed at justo eu enim pellentesque tristique ac quis lacus. Nunc scelerisque augue dui, blandit commodo ipsum ultricies dignissim. Fusce quis mauris tellus. Duis molestie metus eu metus tempus iaculis. Cras ut nunc dapibus, tristique nulla vitae, porttitor tortor. Suspendisse vel velit nec tellus fringilla bibendum vel id nibh. Phasellus sed massa id tellus luctus dictum in vitae dui.</p>\r\n\r\n<p>Sed quam enim, lobortis eu porta eu, consectetur pharetra urna. Praesent pulvinar venenatis magna, vel sollicitudin ex imperdiet vel. Aliquam porttitor enim a erat sagittis commodo. Phasellus eget enim elit. In ornare nulla ligula, eu egestas ex commodo in. Integer porttitor quam turpis, non maximus erat tincidunt in. Sed convallis ex vitae nisi molestie posuere. Aliquam erat volutpat. Morbi euismod pellentesque elit a venenatis. Aliquam volutpat leo turpis, eu vulputate ante euismod id. Integer et porttitor purus. Fusce dapibus tellus in sagittis mollis. Curabitur vel aliquam nisl.</p>', '[\"printify-icon-printing-text\"]'),
(230, 77, 'en', 'Offset Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.', NULL, '[\"printify-icon-printing-text\"]'),
(231, 77, 'fr', 'Offset Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.', NULL, '[\"printify-icon-printing-text\"]'),
(232, 78, 'tr', '3D Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam diam tellus, commodo sit amet pharetra et, pellentesque ut ligula. Morbi hendrerit non lorem eu consequat. In aliquet neque ipsum, a facilisis ligula lacinia ut. Duis at molestie elit. In porttitor vehicula convallis. In viverra orci tellus, eget ultrices turpis aliquet ac. Aenean nec consequat velit. Nunc sit amet facilisis tellus. Fusce tristique blandit tincidunt. Sed non consectetur lacus. Aliquam consequat vestibulum odio pulvinar aliquam. Integer non iaculis nibh. Integer congue sem mauris, sit amet lobortis arcu condimentum in. Aliquam vel magna tincidunt, facilisis mi et, scelerisque magna. Nulla vitae congue dui, ut dapibus neque.</p>\r\n\r\n<p>Mauris magna urna, volutpat ac magna nec, suscipit sagittis velit. Suspendisse venenatis egestas diam vulputate commodo. Etiam lacinia, erat vitae tempus malesuada, ante elit dictum lectus, ac aliquet lacus nulla sed dolor. Vestibulum in vulputate massa, et fermentum lacus. Nam accumsan quam felis, a congue elit placerat nec. Proin scelerisque mauris eu libero aliquam ultricies. Mauris vitae nibh viverra, commodo orci ac, sagittis mauris.</p>\r\n\r\n<p>Nullam lectus lacus, tincidunt non est nec, finibus luctus sem. Duis pellentesque sapien turpis, ac ornare nisl dignissim vitae. Nulla eu semper magna. Nullam condimentum vehicula auctor. Donec venenatis purus posuere nibh placerat, vitae finibus nunc tincidunt. Etiam tempor ligula ac quam fermentum aliquam vitae nec augue. Aliquam dui sapien, vehicula vel nunc facilisis, rhoncus aliquet purus. Sed auctor nec nisi at tincidunt. Donec interdum diam et libero lobortis, vitae molestie ligula pulvinar. Praesent tincidunt leo in pretium finibus. In laoreet orci eros, in condimentum lacus tempor vitae.</p>\r\n\r\n<p>Vestibulum fermentum diam convallis justo interdum scelerisque. Integer porttitor arcu nec ante accumsan gravida. Vestibulum rhoncus dolor vitae augue ultricies, vel posuere purus vehicula. Maecenas sollicitudin porttitor auctor. Vestibulum ut lorem rutrum, molestie dolor vitae, laoreet risus. In pellentesque ultrices sem, sit amet gravida neque sollicitudin vel. Praesent ac pellentesque enim. Vivamus placerat metus sed urna facilisis, vel posuere justo aliquet. Duis ligula massa, gravida et urna a, accumsan pretium turpis.</p>\r\n\r\n<p>Nunc tristique nec purus vitae porttitor. Duis luctus lectus lectus, et gravida velit imperdiet vel. Morbi venenatis bibendum sapien, vestibulum bibendum dolor feugiat eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent vitae ante erat. Quisque malesuada elit et ex varius efficitur. Ut sagittis justo laoreet tellus lobortis scelerisque. Nullam eu nibh lectus.</p>\r\n\r\n<p>Mauris bibendum, eros pretium aliquet iaculis, dui libero scelerisque augue, in blandit tellus ligula a leo. Quisque molestie auctor varius. Pellentesque molestie euismod ligula. Proin dapibus justo non magna tempor, vel condimentum elit accumsan. Nam faucibus lorem sapien, a pulvinar est ornare ac. Donec mattis lectus ultricies, pretium nisi eget, finibus elit. Praesent pretium neque dolor, vitae interdum orci efficitur sit amet. Morbi vestibulum orci quis volutpat varius. Mauris magna metus, malesuada ut luctus in, hendrerit vitae lacus.</p>\r\n\r\n<p>Ut vel magna consectetur leo molestie ultricies. Pellentesque nec turpis nulla. Phasellus pellentesque sit amet velit non euismod. Quisque finibus dolor vel lacus cursus ornare. Phasellus sem dui, varius nec tempus eu, dapibus quis augue. Mauris eu metus aliquam, lacinia felis id, scelerisque leo. Aliquam porttitor, lorem vitae venenatis laoreet, dui velit pharetra urna, vitae eleifend tellus nisi ac massa. Nunc id odio ornare, posuere libero sed, interdum nisi. Quisque a nunc at tortor feugiat sollicitudin. Duis vitae euismod orci, ac convallis turpis. Vivamus pellentesque interdum elit non efficitur.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit interdum nibh, id aliquet mauris lacinia nec. Morbi tempor, sem ac lobortis vestibulum, libero ligula lobortis elit, id imperdiet lectus sapien aliquam nisl. Morbi nibh lectus, maximus at urna ornare, lobortis finibus ante. Vestibulum sollicitudin, justo rutrum pretium lacinia, est tortor dapibus augue, sed bibendum risus libero eu ipsum. Vivamus accumsan viverra nisl, non fringilla orci posuere id. Duis vel diam nec mauris aliquam lacinia. Donec id elementum ante.</p>\r\n\r\n<p>Duis pretium leo vitae purus vulputate varius. In ultrices est sed iaculis euismod. Nulla vitae viverra nibh. Cras eget lectus semper ipsum mattis interdum. In luctus, magna dictum congue imperdiet, tellus odio efficitur justo, sed imperdiet augue massa sed ipsum. Morbi id tincidunt nunc. Aliquam efficitur enim quis urna malesuada, eget vestibulum diam elementum.</p>\r\n\r\n<p>Integer suscipit, libero at vehicula maximus, justo erat malesuada libero, a convallis massa libero sed orci. Phasellus iaculis lobortis sapien vitae accumsan. Donec sem velit, gravida ut nisl eu, facilisis consequat dolor. Vestibulum pellentesque metus ac nisl elementum viverra. Duis tempor vulputate turpis. Nulla pretium dictum nulla non porta. Donec cursus quis magna a tincidunt. Ut sollicitudin nec ex nec convallis. Mauris mollis nibh eleifend, tincidunt ex in, maximus nulla. Curabitur eu enim blandit, molestie metus et, finibus ex.</p>\r\n\r\n<p>Morbi mollis, dolor sed commodo eleifend, odio lacus feugiat nibh, non gravida enim eros ut nibh. Praesent ac aliquam tellus. Praesent dictum sit amet sapien a feugiat. Vestibulum feugiat purus sit amet ligula pulvinar, ut dictum leo tempus. Maecenas quis erat vel magna luctus ultricies. Maecenas ut orci a libero laoreet condimentum id a neque. Sed vel vulputate augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed gravida, ex ut interdum convallis, turpis quam volutpat magna, sed interdum leo sem non felis. Aenean sagittis hendrerit lectus, vel sagittis massa sodales vel. Praesent viverra congue lacus sit amet blandit.</p>\r\n\r\n<p>Mauris ut facilisis metus. Etiam ornare sed elit et accumsan. Nulla in eros elit. Fusce laoreet turpis eros, non blandit eros venenatis et. Proin rutrum libero et dictum fringilla. Maecenas rutrum mauris molestie, hendrerit libero at, condimentum mauris. Fusce rhoncus quis dui at euismod. Donec a sapien et lacus pretium convallis id a est. Mauris nunc enim, molestie vitae commodo vel, dapibus nec justo. Vestibulum rutrum mi sodales elit condimentum, non pellentesque leo rhoncus. Sed quis pharetra velit. Nunc suscipit lorem vel lacus tincidunt mollis. Nam iaculis, est vel vestibulum gravida, nisi dolor rhoncus lorem, vel tincidunt dolor justo tristique felis. Vivamus elementum ornare odio, sed auctor nisl lacinia eu. Nam ut felis nec diam vulputate aliquam. Fusce ut dictum erat, quis finibus arcu.</p>\r\n\r\n<p>Aenean sodales malesuada nisl quis venenatis. Aenean hendrerit at quam a feugiat. Ut elementum viverra nunc ac aliquet. Suspendisse viverra eleifend erat. Sed odio turpis, commodo eget ligula non, sodales dapibus leo. Praesent condimentum mattis lectus a scelerisque. Nulla ornare nunc a arcu imperdiet bibendum. Maecenas gravida, est ut venenatis rutrum, augue nibh lacinia nibh, sed efficitur orci odio sed turpis.</p>\r\n\r\n<p>Sed at justo eu enim pellentesque tristique ac quis lacus. Nunc scelerisque augue dui, blandit commodo ipsum ultricies dignissim. Fusce quis mauris tellus. Duis molestie metus eu metus tempus iaculis. Cras ut nunc dapibus, tristique nulla vitae, porttitor tortor. Suspendisse vel velit nec tellus fringilla bibendum vel id nibh. Phasellus sed massa id tellus luctus dictum in vitae dui.</p>\r\n\r\n<p>Sed quam enim, lobortis eu porta eu, consectetur pharetra urna. Praesent pulvinar venenatis magna, vel sollicitudin ex imperdiet vel. Aliquam porttitor enim a erat sagittis commodo. Phasellus eget enim elit. In ornare nulla ligula, eu egestas ex commodo in. Integer porttitor quam turpis, non maximus erat tincidunt in. Sed convallis ex vitae nisi molestie posuere. Aliquam erat volutpat. Morbi euismod pellentesque elit a venenatis. Aliquam volutpat leo turpis, eu vulputate ante euismod id. Integer et porttitor purus. Fusce dapibus tellus in sagittis mollis. Curabitur vel aliquam nisl.</p>', '[\"printify-icon-empty-box-open\"]'),
(233, 78, 'en', '3D Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.', NULL, '[\"printify-icon-empty-box-open\"]'),
(234, 78, 'fr', '3D Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.', NULL, '[\"printify-icon-empty-box-open\"]'),
(235, 79, 'tr', 'Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam diam tellus, commodo sit amet pharetra et, pellentesque ut ligula. Morbi hendrerit non lorem eu consequat. In aliquet neque ipsum, a facilisis ligula lacinia ut. Duis at molestie elit. In porttitor vehicula convallis. In viverra orci tellus, eget ultrices turpis aliquet ac. Aenean nec consequat velit. Nunc sit amet facilisis tellus. Fusce tristique blandit tincidunt. Sed non consectetur lacus. Aliquam consequat vestibulum odio pulvinar aliquam. Integer non iaculis nibh. Integer congue sem mauris, sit amet lobortis arcu condimentum in. Aliquam vel magna tincidunt, facilisis mi et, scelerisque magna. Nulla vitae congue dui, ut dapibus neque.</p>\r\n\r\n<p>Mauris magna urna, volutpat ac magna nec, suscipit sagittis velit. Suspendisse venenatis egestas diam vulputate commodo. Etiam lacinia, erat vitae tempus malesuada, ante elit dictum lectus, ac aliquet lacus nulla sed dolor. Vestibulum in vulputate massa, et fermentum lacus. Nam accumsan quam felis, a congue elit placerat nec. Proin scelerisque mauris eu libero aliquam ultricies. Mauris vitae nibh viverra, commodo orci ac, sagittis mauris.</p>\r\n\r\n<p>Nullam lectus lacus, tincidunt non est nec, finibus luctus sem. Duis pellentesque sapien turpis, ac ornare nisl dignissim vitae. Nulla eu semper magna. Nullam condimentum vehicula auctor. Donec venenatis purus posuere nibh placerat, vitae finibus nunc tincidunt. Etiam tempor ligula ac quam fermentum aliquam vitae nec augue. Aliquam dui sapien, vehicula vel nunc facilisis, rhoncus aliquet purus. Sed auctor nec nisi at tincidunt. Donec interdum diam et libero lobortis, vitae molestie ligula pulvinar. Praesent tincidunt leo in pretium finibus. In laoreet orci eros, in condimentum lacus tempor vitae.</p>\r\n\r\n<p>Vestibulum fermentum diam convallis justo interdum scelerisque. Integer porttitor arcu nec ante accumsan gravida. Vestibulum rhoncus dolor vitae augue ultricies, vel posuere purus vehicula. Maecenas sollicitudin porttitor auctor. Vestibulum ut lorem rutrum, molestie dolor vitae, laoreet risus. In pellentesque ultrices sem, sit amet gravida neque sollicitudin vel. Praesent ac pellentesque enim. Vivamus placerat metus sed urna facilisis, vel posuere justo aliquet. Duis ligula massa, gravida et urna a, accumsan pretium turpis.</p>\r\n\r\n<p>Nunc tristique nec purus vitae porttitor. Duis luctus lectus lectus, et gravida velit imperdiet vel. Morbi venenatis bibendum sapien, vestibulum bibendum dolor feugiat eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent vitae ante erat. Quisque malesuada elit et ex varius efficitur. Ut sagittis justo laoreet tellus lobortis scelerisque. Nullam eu nibh lectus.</p>\r\n\r\n<p>Mauris bibendum, eros pretium aliquet iaculis, dui libero scelerisque augue, in blandit tellus ligula a leo. Quisque molestie auctor varius. Pellentesque molestie euismod ligula. Proin dapibus justo non magna tempor, vel condimentum elit accumsan. Nam faucibus lorem sapien, a pulvinar est ornare ac. Donec mattis lectus ultricies, pretium nisi eget, finibus elit. Praesent pretium neque dolor, vitae interdum orci efficitur sit amet. Morbi vestibulum orci quis volutpat varius. Mauris magna metus, malesuada ut luctus in, hendrerit vitae lacus.</p>\r\n\r\n<p>Ut vel magna consectetur leo molestie ultricies. Pellentesque nec turpis nulla. Phasellus pellentesque sit amet velit non euismod. Quisque finibus dolor vel lacus cursus ornare. Phasellus sem dui, varius nec tempus eu, dapibus quis augue. Mauris eu metus aliquam, lacinia felis id, scelerisque leo. Aliquam porttitor, lorem vitae venenatis laoreet, dui velit pharetra urna, vitae eleifend tellus nisi ac massa. Nunc id odio ornare, posuere libero sed, interdum nisi. Quisque a nunc at tortor feugiat sollicitudin. Duis vitae euismod orci, ac convallis turpis. Vivamus pellentesque interdum elit non efficitur.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit interdum nibh, id aliquet mauris lacinia nec. Morbi tempor, sem ac lobortis vestibulum, libero ligula lobortis elit, id imperdiet lectus sapien aliquam nisl. Morbi nibh lectus, maximus at urna ornare, lobortis finibus ante. Vestibulum sollicitudin, justo rutrum pretium lacinia, est tortor dapibus augue, sed bibendum risus libero eu ipsum. Vivamus accumsan viverra nisl, non fringilla orci posuere id. Duis vel diam nec mauris aliquam lacinia. Donec id elementum ante.</p>\r\n\r\n<p>Duis pretium leo vitae purus vulputate varius. In ultrices est sed iaculis euismod. Nulla vitae viverra nibh. Cras eget lectus semper ipsum mattis interdum. In luctus, magna dictum congue imperdiet, tellus odio efficitur justo, sed imperdiet augue massa sed ipsum. Morbi id tincidunt nunc. Aliquam efficitur enim quis urna malesuada, eget vestibulum diam elementum.</p>\r\n\r\n<p>Integer suscipit, libero at vehicula maximus, justo erat malesuada libero, a convallis massa libero sed orci. Phasellus iaculis lobortis sapien vitae accumsan. Donec sem velit, gravida ut nisl eu, facilisis consequat dolor. Vestibulum pellentesque metus ac nisl elementum viverra. Duis tempor vulputate turpis. Nulla pretium dictum nulla non porta. Donec cursus quis magna a tincidunt. Ut sollicitudin nec ex nec convallis. Mauris mollis nibh eleifend, tincidunt ex in, maximus nulla. Curabitur eu enim blandit, molestie metus et, finibus ex.</p>\r\n\r\n<p>Morbi mollis, dolor sed commodo eleifend, odio lacus feugiat nibh, non gravida enim eros ut nibh. Praesent ac aliquam tellus. Praesent dictum sit amet sapien a feugiat. Vestibulum feugiat purus sit amet ligula pulvinar, ut dictum leo tempus. Maecenas quis erat vel magna luctus ultricies. Maecenas ut orci a libero laoreet condimentum id a neque. Sed vel vulputate augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed gravida, ex ut interdum convallis, turpis quam volutpat magna, sed interdum leo sem non felis. Aenean sagittis hendrerit lectus, vel sagittis massa sodales vel. Praesent viverra congue lacus sit amet blandit.</p>\r\n\r\n<p>Mauris ut facilisis metus. Etiam ornare sed elit et accumsan. Nulla in eros elit. Fusce laoreet turpis eros, non blandit eros venenatis et. Proin rutrum libero et dictum fringilla. Maecenas rutrum mauris molestie, hendrerit libero at, condimentum mauris. Fusce rhoncus quis dui at euismod. Donec a sapien et lacus pretium convallis id a est. Mauris nunc enim, molestie vitae commodo vel, dapibus nec justo. Vestibulum rutrum mi sodales elit condimentum, non pellentesque leo rhoncus. Sed quis pharetra velit. Nunc suscipit lorem vel lacus tincidunt mollis. Nam iaculis, est vel vestibulum gravida, nisi dolor rhoncus lorem, vel tincidunt dolor justo tristique felis. Vivamus elementum ornare odio, sed auctor nisl lacinia eu. Nam ut felis nec diam vulputate aliquam. Fusce ut dictum erat, quis finibus arcu.</p>\r\n\r\n<p>Aenean sodales malesuada nisl quis venenatis. Aenean hendrerit at quam a feugiat. Ut elementum viverra nunc ac aliquet. Suspendisse viverra eleifend erat. Sed odio turpis, commodo eget ligula non, sodales dapibus leo. Praesent condimentum mattis lectus a scelerisque. Nulla ornare nunc a arcu imperdiet bibendum. Maecenas gravida, est ut venenatis rutrum, augue nibh lacinia nibh, sed efficitur orci odio sed turpis.</p>\r\n\r\n<p>Sed at justo eu enim pellentesque tristique ac quis lacus. Nunc scelerisque augue dui, blandit commodo ipsum ultricies dignissim. Fusce quis mauris tellus. Duis molestie metus eu metus tempus iaculis. Cras ut nunc dapibus, tristique nulla vitae, porttitor tortor. Suspendisse vel velit nec tellus fringilla bibendum vel id nibh. Phasellus sed massa id tellus luctus dictum in vitae dui.</p>\r\n\r\n<p>Sed quam enim, lobortis eu porta eu, consectetur pharetra urna. Praesent pulvinar venenatis magna, vel sollicitudin ex imperdiet vel. Aliquam porttitor enim a erat sagittis commodo. Phasellus eget enim elit. In ornare nulla ligula, eu egestas ex commodo in. Integer porttitor quam turpis, non maximus erat tincidunt in. Sed convallis ex vitae nisi molestie posuere. Aliquam erat volutpat. Morbi euismod pellentesque elit a venenatis. Aliquam volutpat leo turpis, eu vulputate ante euismod id. Integer et porttitor purus. Fusce dapibus tellus in sagittis mollis. Curabitur vel aliquam nisl.</p>', '[\"printify-icon-printer-without-paper\"]'),
(236, 79, 'en', 'Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Lorem İpsum', NULL, '[\"printify-icon-printer-without-paper\"]'),
(237, 79, 'fr', 'Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Lorem İpsum', NULL, '[\"printify-icon-printer-without-paper\"]'),
(238, 80, 'tr', 'Yorumlar', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(239, 80, 'en', 'Yorumlar', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(240, 80, 'fr', 'Yorumlar', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(241, 81, 'tr', 'Jessica Brown', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'I never leave the house without my business cards. They accompany me to meetings, interviews and all social events, I am very happy with printify.', NULL, '[null]'),
(242, 81, 'en', 'Jessica Brown', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'I never leave the house without my business cards. They accompany me to meetings, interviews and all social events, I am very happy with printify.', NULL, '[null]');
INSERT INTO `category_language` (`id`, `category_id`, `language_slug`, `name`, `image`, `image2`, `image3`, `image_info`, `seo_title`, `seo_description`, `seo_keywords`, `description`, `contents`, `special_fields`) VALUES
(243, 81, 'fr', 'Jessica Brown', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'I never leave the house without my business cards. They accompany me to meetings, interviews and all social events, I am very happy with printify.', NULL, '[null]'),
(244, 82, 'tr', 'Christine Eve', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.', NULL, '[null]'),
(245, 82, 'en', 'Christine Eve', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.', NULL, '[null]'),
(246, 82, 'fr', 'Christine Eve', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.', NULL, '[null]'),
(247, 83, 'tr', 'Business stationery printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Even More Good Stuff', NULL, '[\"Professional designs with added fizz\",\"Create an army of business stationery\",\"Take your attention to detail up a level\",\"Totally safe for laser printers\"]'),
(248, 83, 'en', 'Business stationery printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Even More Good Stuff', NULL, '[\"Professional designs with added fizz\",\"Create an army of business stationery\",\"Take your attention to detail up a level\",\"Totally safe for laser printers\"]'),
(249, 83, 'fr', 'Business stationery printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Even More Good Stuff', NULL, '[\"Professional designs with added fizz\",\"Create an army of business stationery\",\"Take your attention to detail up a level\",\"Totally safe for laser printers\"]'),
(250, 84, 'tr', 'The leadership', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Meet the Team', '<p>There are many variations of passages of lorem Ipsum available, but<br />\r\nthe majority have suffered alteration in some form.</p>', '[\"#FF4328\",\"#000000\"]'),
(251, 84, 'en', 'The leadership', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Meet the Team', '<p>There are many variations of passages of lorem Ipsum available, but<br />\r\nthe majority have suffered alteration in some form.</p>', '[\"#FF4328\",\"#000000\"]'),
(252, 84, 'fr', 'The leadership', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Meet the Team', '<p>There are many variations of passages of lorem Ipsum available, but<br />\r\nthe majority have suffered alteration in some form.</p>', '[\"#FF4328\",\"#000000\"]'),
(253, 85, 'tr', 'Chief marketing officer', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Brendan Milliren', '<p>Jessica leads our customer team and holds guardianship of our brand.</p>\r\n\r\n<p>An award-winning marketer, Jesscia launched our Boston office, taking a huge step forward in making PRINTIFY a global brand. She&rsquo;s responsible for our brand strategy and making sure we stay close to our customers. Jessica&rsquo;s two big passions are the ocean and music. She has a formidable record library &ndash; with her purple vinyl of Purple Rain the jewel in her collection.</p>', '[\"#FF4328\",\"#000000\"]'),
(254, 85, 'en', 'Chief marketing officer', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Brendan Milliren', '<pre>\r\nJessica leads our customer team and holds guardianship of our brand.</pre>\r\n\r\n<pre>\r\nAn award-winning marketer, Jesscia launched our Boston office, taking a huge step forward in making PRINTIFY a global brand. She&rsquo;s responsible for our brand strategy and making sure we stay close to our customers. Jessica&rsquo;s two big passions are the ocean and music. She has a formidable record library &ndash; with her purple vinyl of Purple Rain the jewel in her collection </pre>', '[\"#FF4328\",\"#000000\"]'),
(255, 85, 'fr', 'Chief marketing officer', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Brendan Milliren', '<pre>\r\nJessica leads our customer team and holds guardianship of our brand.</pre>\r\n\r\n<pre>\r\nAn award-winning marketer, Jesscia launched our Boston office, taking a huge step forward in making PRINTIFY a global brand. She&rsquo;s responsible for our brand strategy and making sure we stay close to our customers. Jessica&rsquo;s two big passions are the ocean and music. She has a formidable record library &ndash; with her purple vinyl of Purple Rain the jewel in her collection </pre>', '[\"#FF4328\",\"#000000\"]'),
(256, 86, 'tr', 'Chief marketing officer', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Brendan Milliren', '<p>Jessica leads our customer team and holds guardianship of our brand.</p>\r\n\r\n<p>An award-winning marketer, Jesscia launched our Boston office, taking a huge step forward in making PRINTIFY a global brand. She&rsquo;s responsible for our brand strategy and making sure we stay close to our customers. Jessica&rsquo;s two big passions are the ocean and music. She has a formidable record library &ndash; with her purple vinyl of Purple Rain the jewel in her collection.</p>', '[\"#FF4328\",\"#000000\"]'),
(257, 86, 'en', 'Chief marketing officer', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Brendan Milliren', '<p>Jessica leads our customer team and holds guardianship of our brand.</p>\r\n\r\n<p>An award-winning marketer, Jesscia launched our Boston office, taking a huge step forward in making PRINTIFY a global brand. She&rsquo;s responsible for our brand strategy and making sure we stay close to our customers. Jessica&rsquo;s two big passions are the ocean and music. She has a formidable record library &ndash; with her purple vinyl of Purple Rain the jewel in her collection.</p>', '[\"#FF4328\",\"#000000\"]'),
(258, 86, 'fr', 'Chief marketing officer', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Brendan Milliren', '<p>Jessica leads our customer team and holds guardianship of our brand.</p>\r\n\r\n<p>An award-winning marketer, Jesscia launched our Boston office, taking a huge step forward in making PRINTIFY a global brand. She&rsquo;s responsible for our brand strategy and making sure we stay close to our customers. Jessica&rsquo;s two big passions are the ocean and music. She has a formidable record library &ndash; with her purple vinyl of Purple Rain the jewel in her collection.</p>', '[\"#FF4328\",\"#000000\"]'),
(259, 87, 'tr', 'Checkout our services', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Explore Printing Services', '<p>We&rsquo;re an online print and design company that is passionate about great design and the difference it can make to our customers and the world.</p>\r\n\r\n<p>We want to set a new standard for print, with remarkable new products that bring great design and uncompromising, high standards to the web.</p>', '[\"#FF4328\",\"#000000\"]'),
(260, 87, 'en', 'Checkout our services', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Explore Printing Services', '<p>We&rsquo;re an online print and design company that is passionate about great design and the difference it can make to our customers and the world.</p>\r\n\r\n<p>We want to set a new standard for print, with remarkable new products that bring great design and uncompromising, high standards to the web.</p>', '[null]'),
(261, 87, 'fr', 'Checkout our services', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Explore Printing Services', '<p>We&rsquo;re an online print and design company that is passionate about great design and the difference it can make to our customers and the world.</p>\r\n\r\n<p>We want to set a new standard for print, with remarkable new products that bring great design and uncompromising, high standards to the web.</p>', '[null]'),
(262, 88, 'tr', 'Printfinity Makes Every Card Unique', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>We&rsquo;re an online print and design company that is passionate about great design and the difference it can make to our customers and the world.</p>\r\n\r\n<p>We want to set a new standard for print, with remarkable new products that bring great design and uncompromising, high standards to the web.</p>', '[null]'),
(263, 88, 'en', 'Printfinity Makes Every Card Unique', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(264, 88, 'fr', 'Printfinity Makes Every Card Unique', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(265, 89, 'tr', 'T-Shirt Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"printify-icon-t-shirt-with-square\"]'),
(266, 89, 'en', 'T-Shirt Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"printify-icon-t-shirt-with-square\"]'),
(267, 89, 'fr', 'T-Shirt Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"printify-icon-t-shirt-with-square\"]'),
(268, 90, 'tr', 'Flyer Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"printify-icon-brochure-folded\"]'),
(269, 90, 'en', 'Flyer Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"printify-icon-brochure-folded\"]'),
(270, 90, 'fr', 'Flyer Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"printify-icon-brochure-folded\"]'),
(271, 91, 'tr', 'Poster Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"printify-icon-continuous-feed-paper\"]'),
(272, 91, 'en', 'Poster Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"printify-icon-continuous-feed-paper\"]'),
(273, 91, 'fr', 'Poster Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"printify-icon-continuous-feed-paper\"]'),
(274, 92, 'tr', 'Sticker Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"printify-icon-circular-sticker\"]'),
(275, 92, 'en', 'Sticker Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"printify-icon-circular-sticker\"]'),
(276, 92, 'fr', 'Sticker Printing', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[\"printify-icon-circular-sticker\"]'),
(277, 93, 'tr', 'Order a free sample', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Get a Feel For Colors', '<p>Order a sample so you can touch and feel our premium range of papers and finishes for yourself. It&rsquo;s free! Print full color on both sides of your business cards.</p>', '[\"Professional designs with added fizz\"]'),
(278, 93, 'en', 'Order a free sample', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Get a Feel For Colors', '<p>Order a sample so you can touch and feel our premium range of papers and finishes for yourself. It&rsquo;s free! Print full color on both sides of your business cards.</p>', '[null]'),
(279, 93, 'fr', 'Order a free sample', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Get a Feel For Colors', '<p>Order a sample so you can touch and feel our premium range of papers and finishes for yourself. It&rsquo;s free! Print full color on both sides of your business cards.</p>', '[null]'),
(280, 94, 'tr', 'Markalar', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(281, 94, 'en', 'Markalar', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(282, 94, 'fr', 'Markalar', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(283, 95, 'tr', '1', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(284, 95, 'en', '1', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(285, 95, 'fr', '1', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(286, 96, 'tr', '2', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(287, 96, 'en', '2', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(288, 96, 'fr', '2', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(289, 97, 'tr', '3', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(290, 97, 'en', '3', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(291, 97, 'fr', '3', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(292, 98, 'tr', '4', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(293, 98, 'en', '4', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(294, 98, 'fr', '4', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(295, 99, 'tr', '5', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(296, 99, 'en', '5', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(297, 99, 'fr', '5', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(301, 101, 'tr', '6', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(302, 101, 'en', '6', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(303, 101, 'fr', '6', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(304, 102, 'tr', 'Projeler', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', 'Projeler', 'projeler printify projeler', 'proje, iş', NULL, NULL, '[null]'),
(305, 102, 'en', 'Projeler', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(306, 102, 'fr', 'Projeler', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(307, 103, 'tr', 'Work showcase', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Recent Projects', '<p>There are many variations of passages of lorem Ipsum available, but<br />\r\nthe majority have suffered alteration in some form.</p>', '[null]'),
(308, 103, 'en', 'Work showcase', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Recent Projects', '<p>There are many variations of passages of lorem Ipsum available, but<br />\r\nthe majority have suffered alteration in some form.</p>', '[null]'),
(309, 103, 'fr', 'Work showcase', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, 'Recent Projects', '<p>There are many variations of passages of lorem Ipsum available, but<br />\r\nthe majority have suffered alteration in some form.</p>', '[null]'),
(310, 104, 'tr', 'Thick Paper Book', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet sectetur adipiscin elit cras feuiat antesed ces condimentum viverra duis autue nim convallis id diam vitae duise eget dictum eros in dictum sem. Vivamus sed molestie sapien aliquam et facilisis arcu ut molestie augue. Suspendisse sodales tortor nunc dai quis auctor ligula posuere cursus.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Printify Challenge</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Duis eget dictum eros in dictum sem vivamus sed molestie sapienam eted facilisis arcuet molestie augue suspendisse sodales tortor nuncd quis auctor ligula posuere cursus. Morbi sem neque tristique in porta ullamcorper lacinia eget lorem. Proin feugiat risus quis magna sagittis eget semper nisl tristique. Tristique in porta ullamcorper lacinia egety lorem. Proin feugiat risus quis magna sagittis eget semper nislri stique aenean maximus enim nec.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Final Result</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Vivamus sed molestie sapien aliquam et facilisis arcu dut molestie augue suspendisse sodales tortor nunc quis auctor ligula posuere les cursus. Morbi sem neque tristique in porta ullamcorper, lacinia eget de lorem. Proin feugiat risus quis magna sagittis eget semper nitristique aenean maximus enim nec. Morbi sem neque, tristique in porta ullamcorper.</p>', '[null]'),
(311, 104, 'en', 'Thick Paper Book', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet sectetur adipiscin elit cras feuiat antesed ces condimentum viverra duis autue nim convallis id diam vitae duise eget dictum eros in dictum sem. Vivamus sed molestie sapien aliquam et facilisis arcu ut molestie augue. Suspendisse sodales tortor nunc dai quis auctor ligula posuere cursus.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Printify Challenge</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Duis eget dictum eros in dictum sem vivamus sed molestie sapienam eted facilisis arcuet molestie augue suspendisse sodales tortor nuncd quis auctor ligula posuere cursus. Morbi sem neque tristique in porta ullamcorper lacinia eget lorem. Proin feugiat risus quis magna sagittis eget semper nisl tristique. Tristique in porta ullamcorper lacinia egety lorem. Proin feugiat risus quis magna sagittis eget semper nislri stique aenean maximus enim nec.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Final Result</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Vivamus sed molestie sapien aliquam et facilisis arcu dut molestie augue suspendisse sodales tortor nunc quis auctor ligula posuere les cursus. Morbi sem neque tristique in porta ullamcorper, lacinia eget de lorem. Proin feugiat risus quis magna sagittis eget semper nitristique aenean maximus enim nec. Morbi sem neque, tristique in porta ullamcorper.</p>', '[null]'),
(312, 104, 'fr', 'Thick Paper Book', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(313, 105, 'tr', 'Ninety Nine You', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet sectetur adipiscin elit cras feuiat antesed ces condimentum viverra duis autue nim convallis id diam vitae duise eget dictum eros in dictum sem. Vivamus sed molestie sapien aliquam et facilisis arcu ut molestie augue. Suspendisse sodales tortor nunc dai quis auctor ligula posuere cursus.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Printify Challenge</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Duis eget dictum eros in dictum sem vivamus sed molestie sapienam eted facilisis arcuet molestie augue suspendisse sodales tortor nuncd quis auctor ligula posuere cursus. Morbi sem neque tristique in porta ullamcorper lacinia eget lorem. Proin feugiat risus quis magna sagittis eget semper nisl tristique. Tristique in porta ullamcorper lacinia egety lorem. Proin feugiat risus quis magna sagittis eget semper nislri stique aenean maximus enim nec.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Final Result</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Vivamus sed molestie sapien aliquam et facilisis arcu dut molestie augue suspendisse sodales tortor nunc quis auctor ligula posuere les cursus. Morbi sem neque tristique in porta ullamcorper, lacinia eget de lorem. Proin feugiat risus quis magna sagittis eget semper nitristique aenean maximus enim nec. Morbi sem neque, tristique in porta ullamcorper.</p>', '[null]'),
(314, 105, 'en', 'Ninety Nine You', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet sectetur adipiscin elit cras feuiat antesed ces condimentum viverra duis autue nim convallis id diam vitae duise eget dictum eros in dictum sem. Vivamus sed molestie sapien aliquam et facilisis arcu ut molestie augue. Suspendisse sodales tortor nunc dai quis auctor ligula posuere cursus.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Printify Challenge</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Duis eget dictum eros in dictum sem vivamus sed molestie sapienam eted facilisis arcuet molestie augue suspendisse sodales tortor nuncd quis auctor ligula posuere cursus. Morbi sem neque tristique in porta ullamcorper lacinia eget lorem. Proin feugiat risus quis magna sagittis eget semper nisl tristique. Tristique in porta ullamcorper lacinia egety lorem. Proin feugiat risus quis magna sagittis eget semper nislri stique aenean maximus enim nec.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Final Result</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Vivamus sed molestie sapien aliquam et facilisis arcu dut molestie augue suspendisse sodales tortor nunc quis auctor ligula posuere les cursus. Morbi sem neque tristique in porta ullamcorper, lacinia eget de lorem. Proin feugiat risus quis magna sagittis eget semper nitristique aenean maximus enim nec. Morbi sem neque, tristique in porta ullamcorper.</p>', '[null]'),
(315, 105, 'fr', 'Ninety Nine You', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(316, 106, 'tr', 'Colorful Photo Print', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet sectetur adipiscin elit cras feuiat antesed ces condimentum viverra duis autue nim convallis id diam vitae duise eget dictum eros in dictum sem. Vivamus sed molestie sapien aliquam et facilisis arcu ut molestie augue. Suspendisse sodales tortor nunc dai quis auctor ligula posuere cursus.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Printify Challenge</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Duis eget dictum eros in dictum sem vivamus sed molestie sapienam eted facilisis arcuet molestie augue suspendisse sodales tortor nuncd quis auctor ligula posuere cursus. Morbi sem neque tristique in porta ullamcorper lacinia eget lorem. Proin feugiat risus quis magna sagittis eget semper nisl tristique. Tristique in porta ullamcorper lacinia egety lorem. Proin feugiat risus quis magna sagittis eget semper nislri stique aenean maximus enim nec.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Final Result</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Vivamus sed molestie sapien aliquam et facilisis arcu dut molestie augue suspendisse sodales tortor nunc quis auctor ligula posuere les cursus. Morbi sem neque tristique in porta ullamcorper, lacinia eget de lorem. Proin feugiat risus quis magna sagittis eget semper nitristique aenean maximus enim nec. Morbi sem neque, tristique in porta ullamcorper.</p>', '[null]'),
(317, 106, 'en', 'Colorful Photo Print', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet sectetur adipiscin elit cras feuiat antesed ces condimentum viverra duis autue nim convallis id diam vitae duise eget dictum eros in dictum sem. Vivamus sed molestie sapien aliquam et facilisis arcu ut molestie augue. Suspendisse sodales tortor nunc dai quis auctor ligula posuere cursus.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Printify Challenge</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Duis eget dictum eros in dictum sem vivamus sed molestie sapienam eted facilisis arcuet molestie augue suspendisse sodales tortor nuncd quis auctor ligula posuere cursus. Morbi sem neque tristique in porta ullamcorper lacinia eget lorem. Proin feugiat risus quis magna sagittis eget semper nisl tristique. Tristique in porta ullamcorper lacinia egety lorem. Proin feugiat risus quis magna sagittis eget semper nislri stique aenean maximus enim nec.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Final Result</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Vivamus sed molestie sapien aliquam et facilisis arcu dut molestie augue suspendisse sodales tortor nunc quis auctor ligula posuere les cursus. Morbi sem neque tristique in porta ullamcorper, lacinia eget de lorem. Proin feugiat risus quis magna sagittis eget semper nitristique aenean maximus enim nec. Morbi sem neque, tristique in porta ullamcorper.</p>', '[null]'),
(318, 106, 'fr', 'Colorful Photo Print', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(319, 107, 'tr', 'About Company', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>Praesent dapibus eleifend augue eget ipsum sollicitudin velit malesuada eu liquam bland diam ac venenatis.</p>', '[null]'),
(320, 107, 'en', 'About Company', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>Praesent dapibus eleifend augue eget ipsum sollicitudin velit malesuada eu liquam bland diam ac venenatis.</p>', '[null]'),
(321, 107, 'fr', 'About Company', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>Praesent dapibus eleifend augue eget ipsum sollicitudin velit malesuada eu liquam bland diam ac venenatis.</p>', '[null]'),
(322, 108, 'tr', 'Our Promises', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>Praesent dapibus eleifend augue eget ipsum sollicitudin velit malesuada eu liquam bland diam ac venenatis.</p>', '[null]'),
(323, 108, 'en', 'Our Promises', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>Praesent dapibus eleifend augue eget ipsum sollicitudin velit malesuada eu liquam bland diam ac venenatis.</p>', '[null]'),
(324, 108, 'fr', 'Our Promises', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>Praesent dapibus eleifend augue eget ipsum sollicitudin velit malesuada eu liquam bland diam ac venenatis.</p>', '[null]'),
(325, 109, 'tr', 'How We Work', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>Praesent dapibus eleifend augue eget ipsum sollicitudin velit malesuada eu liquam bland diam ac venenatis.</p>', '[null]'),
(326, 109, 'en', 'How We Work', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>Praesent dapibus eleifend augue eget ipsum sollicitudin velit malesuada eu liquam bland diam ac venenatis.</p>', '[null]'),
(327, 109, 'fr', 'How We Work', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, '<p>Praesent dapibus eleifend augue eget ipsum sollicitudin velit malesuada eu liquam bland diam ac venenatis.</p>', '[null]'),
(328, 110, 'tr', 'Teklif Formu', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(329, 110, 'en', 'Teklif İsteme Formu', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]'),
(330, 110, 'ar', 'Teklif İsteme Formu', NULL, NULL, NULL, '{\"image\":{\"name\":null,\"desc\":null,\"alt\":null},\"image2\":{\"name\":null,\"desc\":null,\"alt\":null},\"image3\":{\"name\":null,\"desc\":null,\"alt\":null}}', NULL, NULL, NULL, NULL, NULL, '[null]');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `form`
--

INSERT INTO `form` (`id`, `email`) VALUES
(1, 'metehan.saka34@gmail.com'),
(7, 'metehan.saka34@gmail.com'),
(8, 'metehan.saka34@gmail.com, metehan.saka69@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `form_data`
--

CREATE TABLE `form_data` (
  `id` int(11) NOT NULL,
  `form_id` int(11) DEFAULT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `form_fields`
--

CREATE TABLE `form_fields` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `required` int(11) DEFAULT NULL,
  `sorted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `form_fields`
--

INSERT INTO `form_fields` (`id`, `type`, `required`, `sorted`) VALUES
(1, 'Yazı Kutusu', 1, 1),
(2, 'Email Kutusu', 1, 2),
(3, 'Geniş Yazı Alanı', 1, 999),
(7, 'Yazı Kutusu', 1, 999),
(8, 'Yazı Kutusu', 1, 999),
(9, 'Yazı Kutusu', 1, 999),
(10, 'Yazı Kutusu', 1, 999),
(11, 'Yazı Kutusu', 1, 999),
(12, 'Yazı Kutusu', 1, 999),
(13, 'Yazı Kutusu', 1, 999),
(14, 'Yazı Kutusu', 1, 999),
(15, 'Yazı Kutusu', 1, 999),
(16, 'Yazı Kutusu', 1, 999),
(17, 'Yazı Kutusu', 1, 999),
(18, 'Yazı Kutusu', 1, 999),
(19, 'Yazı Kutusu', 1, 999),
(20, 'Yazı Kutusu', 1, 999),
(21, 'Yazı Kutusu', 1, 999),
(22, 'Yazı Kutusu', 1, 999),
(23, 'Yazı Kutusu', 1, 999),
(24, 'Yazı Kutusu', 1, 999),
(25, 'Yazı Kutusu', 1, 999),
(26, 'Yazı Kutusu', 1, 999);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `form_fields_language`
--

CREATE TABLE `form_fields_language` (
  `id` int(11) NOT NULL,
  `fields_id` int(11) DEFAULT NULL,
  `language_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `form_fields_language`
--

INSERT INTO `form_fields_language` (`id`, `fields_id`, `language_slug`, `name`, `options`) VALUES
(1, 1, 'tr', 'Ad Soyad', ''),
(2, 1, 'en', 'Name', NULL),
(3, 1, 'fr', 'Ad Soyad', ''),
(5, 2, 'en', 'Email', ''),
(6, 2, 'fr', 'Email', ''),
(8, 3, 'tr', 'Mesaj', NULL),
(9, 3, 'en', 'Mesaj', ''),
(10, 3, 'fr', 'Mesaj', ''),
(11, 2, 'tr', 'Email', ''),
(19, 7, 'tr', 'Telefon', NULL),
(20, 7, 'en', 'Telefon', NULL),
(21, 7, 'ar', 'Telefon', NULL),
(22, 8, 'tr', 'İşin Adı', NULL),
(23, 8, 'en', 'İşin Adı', NULL),
(24, 8, 'ar', 'İşin Adı', NULL),
(25, 9, 'tr', 'Adet', NULL),
(26, 9, 'en', 'Adet', NULL),
(27, 9, 'ar', 'Adet', NULL),
(28, 10, 'tr', 'Ebat', NULL),
(29, 10, 'en', 'Ebat', NULL),
(30, 10, 'ar', 'Ebat', NULL),
(31, 11, 'tr', 'Sayfa Sayısı', NULL),
(32, 11, 'en', 'Sayfa Sayısı', NULL),
(33, 11, 'ar', 'Sayfa Sayısı', NULL),
(34, 12, 'tr', 'İç Kağıt', NULL),
(35, 12, 'en', 'İç Kağıt', NULL),
(36, 12, 'ar', 'İç Kağıt', NULL),
(37, 13, 'tr', 'Kapak Kağıt', NULL),
(38, 13, 'en', 'Kapak Kağıt', NULL),
(39, 13, 'ar', 'Kapak Kağıt', NULL),
(40, 14, 'tr', 'Yan Kağıt', NULL),
(41, 14, 'en', 'Yan Kağıt', NULL),
(42, 14, 'ar', 'Yan Kağıt', NULL),
(43, 15, 'tr', 'İç Baskı', NULL),
(44, 15, 'en', 'İç Baskı', NULL),
(45, 15, 'ar', 'İç Baskı', NULL),
(46, 16, 'tr', 'Kapak Baskı', NULL),
(47, 16, 'en', 'Kapak Baskı', NULL),
(48, 16, 'ar', 'Kapak Baskı', NULL),
(49, 17, 'tr', 'Yan Kağıt Baskı', NULL),
(50, 17, 'en', 'Yan K', NULL),
(51, 17, 'ar', 'Yan K', NULL),
(52, 18, 'tr', 'Laminasyon', NULL),
(53, 18, 'en', 'Laminasyon', NULL),
(54, 18, 'ar', 'Laminasyon', NULL),
(55, 19, 'tr', 'Lak', NULL),
(56, 19, 'en', 'Lak', NULL),
(57, 19, 'ar', 'Lak', NULL),
(58, 20, 'tr', 'Cilt Şekli', NULL),
(59, 20, 'en', 'Cilt Şekli', NULL),
(60, 20, 'ar', 'Cilt Şekli', NULL),
(61, 21, 'tr', 'Mukavva', NULL),
(62, 21, 'en', 'Mukavva', NULL),
(63, 21, 'ar', 'Mukavva', NULL),
(64, 22, 'tr', 'Diğer', NULL),
(65, 22, 'en', 'Diğer', NULL),
(66, 22, 'ar', 'Diğer', NULL),
(67, 23, 'tr', 'Ambalaj Şekli', NULL),
(68, 23, 'en', 'Ambalaj Şekli', NULL),
(69, 23, 'ar', 'Ambalaj Şekli', NULL),
(70, 24, 'tr', 'Sevkiyat', NULL),
(71, 24, 'en', 'Sevkiyat', NULL),
(72, 24, 'ar', 'Sevkiyat', NULL),
(73, 25, 'tr', 'Ödeme Şekli', NULL),
(74, 25, 'en', 'Ödeme Şekli', NULL),
(75, 25, 'ar', 'Ödeme Şekli', NULL),
(76, 26, 'tr', 'Teslim Tarihi', NULL),
(77, 26, 'en', 'Teslim Tarihi', NULL),
(78, 26, 'ar', 'Teslim Tarihi', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `form_fields_value`
--

CREATE TABLE `form_fields_value` (
  `id` int(11) NOT NULL,
  `form_id` int(11) DEFAULT NULL,
  `field_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `form_fields_value`
--

INSERT INTO `form_fields_value` (`id`, `form_id`, `field_id`) VALUES
(61, 7, 7),
(62, 8, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `form_language`
--

CREATE TABLE `form_language` (
  `id` int(11) NOT NULL,
  `form_id` int(11) DEFAULT NULL,
  `language_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `form_language`
--

INSERT INTO `form_language` (`id`, `form_id`, `language_slug`, `name`, `description`) VALUES
(2, 1, 'en', 'İletişim Formu', 'İletişim Formu'),
(3, 1, 'fr', 'İletişim Formu', 'İletişim Formu'),
(5, 1, 'tr', 'Contact with us', 'Send Message'),
(21, 7, 'tr', 'Teklif Alma Formu', 'Teklif Alma Formu'),
(22, 7, 'en', 'Teklif Alma Formu', 'Teklif Alma Formu'),
(23, 7, 'ar', 'Teklif Alma Formu', 'Teklif Alma Formu'),
(24, 8, 'tr', 'Özel Teklif Formu', 'Özel Teklif Formu'),
(25, 8, 'en', 'Özel Teklif Formu', 'Özel Teklif Formu'),
(26, 8, 'ar', 'Özel Teklif Formu', 'Özel Teklif Formu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `language`
--

INSERT INTO `language` (`id`, `name`, `slug`, `image`) VALUES
(1, 'TR', 'tr', NULL),
(2, 'ENG', 'en', NULL),
(3, 'AR', 'ar', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `language_value`
--

CREATE TABLE `language_value` (
  `id` int(11) NOT NULL,
  `language_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `language_value`
--

INSERT INTO `language_value` (`id`, `language_slug`, `language_key`, `language_value`) VALUES
(66, 'tr', 'daha_fazla', 'DAHA FAZLA'),
(67, 'tr', 'referanslar', 'REFERANSLAR'),
(68, 'tr', 'gonder', 'Gönder'),
(69, 'tr', 'mesaj', 'Mesaj'),
(70, 'tr', 'name', 'Ad Soyad'),
(71, 'tr', 'hakkimizda', 'Hakkımızda'),
(72, 'tr', 'ornek_alin', 'Örnek Alın'),
(73, 'tr', 'iletisim_bilgisi', 'İletişim Bilgisi'),
(74, 'tr', 'detaylar', 'Detaylar'),
(75, 'tr', 'adres', 'Adres'),
(76, 'tr', 'telefon', 'Telefon'),
(77, 'tr', 'e-posta', 'E-Posta'),
(78, 'tr', 'takip', 'Takip Edin'),
(79, 'tr', 'hakkinda', 'About Printfy'),
(80, 'tr', 'hakkinda_detay', 'Printify is an online design,copying and printing company that is passionate about great design and the difference it can make to our customers and the world.'),
(81, 'tr', 'Explore', 'Hızlı Menü'),
(82, 'tr', 'Contact', 'İletişim'),
(92, 'en', 'daha_fazla', 'More'),
(93, 'en', 'referanslar', 'References'),
(94, 'en', 'gonder', 'SEND'),
(95, 'en', 'mesaj', 'Message'),
(96, 'en', 'name', 'Full Name'),
(97, 'en', 'hakkimizda', 'About Us'),
(98, 'en', 'ornek_alin', 'Get Sample'),
(99, 'en', 'iletisim_bilgisi', 'Contact Info'),
(100, 'en', 'detaylar', 'Details'),
(101, 'en', 'adres', 'Address'),
(102, 'en', 'telefon', 'Phone'),
(103, 'en', 'e-posta', 'E-Mail'),
(104, 'en', 'takip', 'Follow'),
(105, 'en', 'hakkinda', 'About Printfy'),
(106, 'en', 'hakkinda_detay', 'Printify is an online design,copying and printing company that is passionate about great design and the difference it can make to our customers and the world.'),
(107, 'en', 'Explore', 'Explore'),
(108, 'en', 'Contact', 'Contact');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(30, 'dsadsadsa@sads.co');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `time` int(11) DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `language_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_lang` tinyint(1) DEFAULT 0,
  `special_fields` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `language_id`, `logo`, `footer_logo`, `default_banner`, `default_lang`, `special_fields`) VALUES
(1, 'tr', 'NDj0aHrHrDmu3ynuqBFtHJd4n2l5dAmjxr6g95SD.png', 'nZiUNBPNUUPXCpirDg0tJ7mAnLJhdL5gq9VQIW2H.png', NULL, 1, '{\"Title\":\"Printify\",\"facebook\":\"https:\\/\\/facebook.com\",\"twitter\":\"https:\\/\\/twitter.com\",\"pinterest\":\"https:\\/\\/pinterest.com\",\"youtube\":\"https:\\/\\/youtube.com\",\"address\":\"88 New Street, Washington DC United States, America\",\"e-mail\":\"needhelp@printify.com\",\"phone\":\"222 999 888\",\"phone2\":\"222 999 888\",\"phone3\":\"222 999 888\",\"phone4\":\"222 999 888\"}'),
(2, 'en', 'NDj0aHrHrDmu3ynuqBFtHJd4n2l5dAmjxr6g95SD.png', 'nZiUNBPNUUPXCpirDg0tJ7mAnLJhdL5gq9VQIW2H.png', NULL, 0, '{\"Title\":\"Printify\",\"facebook\":\"https:\\/\\/facebook.com\",\"twitter\":\"https:\\/\\/twitter.com\",\"pinterest\":\"https:\\/\\/pinterest.com\",\"youtube\":\"https:\\/\\/youtube.com\",\"address\":\"88 New Street, Washington DC United States, America\",\"e-mail\":\"needhelp@printify.com\",\"phone\":\"222 999 888\",\"phone2\":\"222 999 888\",\"phone3\":\"222 999 888\",\"phone4\":\"222 999 888\"}'),
(3, 'ar', NULL, NULL, NULL, 0, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `special_blocks`
--

CREATE TABLE `special_blocks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `special_blocks`
--

INSERT INTO `special_blocks` (`id`, `name`, `block_key`) VALUES
(6, 'Sayfalar', 'PagesController@index'),
(7, 'İletişim', 'ContactController@index'),
(21, 'Tüm Hizmetler', 'ServiceController@list'),
(22, 'Hizmet Detay', 'ServiceController@index'),
(23, 'Tüm Projeler', 'ProjectController@list'),
(24, 'Proje Detay', 'ProjectController@index'),
(25, 'Hakkımızda', 'PagesController@about'),
(26, 'Teklif Form', 'ContactController@teklif');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `taxonomy`
--

CREATE TABLE `taxonomy` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `taxonomy`
--

INSERT INTO `taxonomy` (`id`, `category_id`, `slug`, `language_slug`, `count`, `controller`, `content_id`) VALUES
(1, 1, 'menu', 'tr', NULL, 'PagesController@index', NULL),
(2, 1, 'ust-menu', 'en', NULL, 'PagesController@index', NULL),
(3, 1, 'ust-menu', 'fr', NULL, 'PagesController@index', NULL),
(172, 58, 'anasayfa', 'tr', NULL, 'PagesController@index', NULL),
(173, 58, 'home', 'en', NULL, 'PagesController@index', NULL),
(174, 58, 'anasayfa', 'fr', NULL, 'PagesController@index', NULL),
(175, 59, 'hakkimizda', 'tr', NULL, 'PagesController@about', NULL),
(176, 59, 'about-us', 'en', NULL, 'PagesController@about', NULL),
(177, 59, 'hakkimizda', 'fr', NULL, 'PagesController@index', NULL),
(178, 60, 'hizmetlerimiz', 'tr', NULL, 'ServiceController@list', NULL),
(179, 60, 'services', 'en', NULL, 'ServiceController@list', NULL),
(180, 60, 'blog', 'fr', NULL, 'PagesController@index', NULL),
(202, 68, 'iletisim', 'tr', NULL, 'ContactController@index', NULL),
(203, 68, 'contact', 'en', NULL, 'ContactController@index', NULL),
(204, 68, 'contact', 'fr', NULL, 'PagesController@index', NULL),
(211, 71, 'slider', 'tr', NULL, 'PagesController@index', NULL),
(212, 71, 'slider', 'en', NULL, 'PagesController@index', NULL),
(213, 71, 'slider', 'fr', NULL, 'PagesController@index', NULL),
(214, 72, 'we-bring-design-together-with-technology', 'tr', NULL, 'PagesController@index', NULL),
(215, 72, 'we-bring-design-together-with-technology', 'en', NULL, 'PagesController@index', NULL),
(216, 72, 'we-bring-design-together-with-technology', 'fr', NULL, 'PagesController@index', NULL),
(217, 73, 'we-bring-design-together-with-technology', 'tr', 73, 'PagesController@index', NULL),
(218, 73, 'we-bring-design-together-with-technology', 'en', 73, 'PagesController@index', NULL),
(219, 73, 'we-bring-design-together-with-technology', 'fr', 73, 'PagesController@index', NULL),
(220, 74, 'welcome-to-printify', 'tr', NULL, 'PagesController@index', NULL),
(221, 74, 'welcome-to-printify', 'en', NULL, 'PagesController@index', NULL),
(222, 74, 'welcome-to-printify', 'fr', NULL, 'PagesController@index', NULL),
(223, 75, 'our-features', 'tr', NULL, 'PagesController@index', NULL),
(224, 75, 'our-features', 'en', NULL, 'PagesController@index', NULL),
(225, 75, 'our-features', 'fr', NULL, 'PagesController@index', NULL),
(226, 76, 'digital-printing', 'tr', NULL, 'ServiceController@index', NULL),
(227, 76, 'digital-printing', 'en', NULL, 'PagesController@index', NULL),
(228, 76, 'digital-printing', 'fr', NULL, 'PagesController@index', NULL),
(229, 77, 'offset-printing', 'tr', NULL, 'ServiceController@index', NULL),
(230, 77, 'offset-printing', 'en', NULL, 'PagesController@index', NULL),
(231, 77, 'offset-printing', 'fr', NULL, 'PagesController@index', NULL),
(232, 78, '3d-printing', 'tr', NULL, 'ServiceController@index', NULL),
(233, 78, '3d-printing', 'en', NULL, 'PagesController@index', NULL),
(234, 78, '3d-printing', 'fr', NULL, 'PagesController@index', NULL),
(235, 79, 'printing', 'tr', NULL, 'ServiceController@index', NULL),
(236, 79, 'printing', 'en', NULL, 'PagesController@index', NULL),
(237, 79, 'printing', 'fr', NULL, 'PagesController@index', NULL),
(238, 80, 'yorumlar', 'tr', NULL, 'PagesController@index', NULL),
(239, 80, 'yorumlar', 'en', NULL, 'PagesController@index', NULL),
(240, 80, 'yorumlar', 'fr', NULL, 'PagesController@index', NULL),
(241, 81, 'jessica-brown', 'tr', NULL, 'PagesController@index', NULL),
(242, 81, 'jessica-brown', 'en', NULL, 'PagesController@index', NULL),
(243, 81, 'jessica-brown', 'fr', NULL, 'PagesController@index', NULL),
(244, 82, 'christine-eve', 'tr', NULL, 'PagesController@index', NULL),
(245, 82, 'christine-eve', 'en', NULL, 'PagesController@index', NULL),
(246, 82, 'christine-eve', 'fr', NULL, 'PagesController@index', NULL),
(247, 83, 'business-stationery-printing', 'tr', NULL, 'PagesController@index', NULL),
(248, 83, 'business-stationery-printing', 'en', NULL, 'PagesController@index', NULL),
(249, 83, 'business-stationery-printing', 'fr', NULL, 'PagesController@index', NULL),
(250, 84, 'the-leadership', 'tr', NULL, 'PagesController@index', NULL),
(251, 84, 'the-leadership', 'en', NULL, 'PagesController@index', NULL),
(252, 84, 'the-leadership', 'fr', NULL, 'PagesController@index', NULL),
(253, 85, 'chief-marketing-officer', 'tr', NULL, 'PagesController@index', NULL),
(254, 85, 'chief-marketing-officer', 'en', NULL, 'PagesController@index', NULL),
(255, 85, 'chief-marketing-officer', 'fr', NULL, 'PagesController@index', NULL),
(256, 86, 'chief-marketing-officer', 'tr', 86, 'PagesController@index', NULL),
(257, 86, 'chief-marketing-officer', 'en', 86, 'PagesController@index', NULL),
(258, 86, 'chief-marketing-officer', 'fr', 86, 'PagesController@index', NULL),
(259, 87, 'checkout-our-services', 'tr', NULL, 'PagesController@index', NULL),
(260, 87, 'checkout-our-services', 'en', NULL, 'PagesController@index', NULL),
(261, 87, 'checkout-our-services', 'fr', NULL, 'PagesController@index', NULL),
(262, 88, 'printfinity-makes-every-card-unique', 'tr', NULL, 'PagesController@index', NULL),
(263, 88, 'printfinity-makes-every-card-unique', 'en', NULL, 'PagesController@index', NULL),
(264, 88, 'printfinity-makes-every-card-unique', 'fr', NULL, 'PagesController@index', NULL),
(265, 89, 't-shirt-printing', 'tr', NULL, 'PagesController@index', NULL),
(266, 89, 't-shirt-printing', 'en', NULL, 'PagesController@index', NULL),
(267, 89, 't-shirt-printing', 'fr', NULL, 'PagesController@index', NULL),
(268, 90, 'flyer-printing', 'tr', NULL, 'PagesController@index', NULL),
(269, 90, 'flyer-printing', 'en', NULL, 'PagesController@index', NULL),
(270, 90, 'flyer-printing', 'fr', NULL, 'PagesController@index', NULL),
(271, 91, 'poster-printing', 'tr', NULL, 'PagesController@index', NULL),
(272, 91, 'poster-printing', 'en', NULL, 'PagesController@index', NULL),
(273, 91, 'poster-printing', 'fr', NULL, 'PagesController@index', NULL),
(274, 92, 'sticker-printing', 'tr', NULL, 'PagesController@index', NULL),
(275, 92, 'sticker-printing', 'en', NULL, 'PagesController@index', NULL),
(276, 92, 'sticker-printing', 'fr', NULL, 'PagesController@index', NULL),
(277, 93, 'order-a-free-sample', 'tr', NULL, 'PagesController@index', NULL),
(278, 93, 'order-a-free-sample', 'en', NULL, 'PagesController@index', NULL),
(279, 93, 'order-a-free-sample', 'fr', NULL, 'PagesController@index', NULL),
(280, 94, 'markalar', 'tr', NULL, 'PagesController@index', NULL),
(281, 94, 'markalar', 'en', NULL, 'PagesController@index', NULL),
(282, 94, 'markalar', 'fr', NULL, 'PagesController@index', NULL),
(283, 95, '1', 'tr', NULL, 'PagesController@index', NULL),
(284, 95, '1', 'en', NULL, 'PagesController@index', NULL),
(285, 95, '1', 'fr', NULL, 'PagesController@index', NULL),
(286, 96, '2', 'tr', NULL, 'PagesController@index', NULL),
(287, 96, '2', 'en', NULL, 'PagesController@index', NULL),
(288, 96, '2', 'fr', NULL, 'PagesController@index', NULL),
(289, 97, '3', 'tr', NULL, 'PagesController@index', NULL),
(290, 97, '3', 'en', NULL, 'PagesController@index', NULL),
(291, 97, '3', 'fr', NULL, 'PagesController@index', NULL),
(292, 98, '4', 'tr', NULL, 'PagesController@index', NULL),
(293, 98, '4', 'en', NULL, 'PagesController@index', NULL),
(294, 98, '4', 'fr', NULL, 'PagesController@index', NULL),
(295, 99, '5', 'tr', NULL, 'PagesController@index', NULL),
(296, 99, '5', 'en', NULL, 'PagesController@index', NULL),
(297, 99, '5', 'fr', NULL, 'PagesController@index', NULL),
(301, 101, '6', 'tr', NULL, 'PagesController@index', NULL),
(302, 101, '6', 'en', NULL, 'PagesController@index', NULL),
(303, 101, '6', 'fr', NULL, 'PagesController@index', NULL),
(304, 102, 'projeler', 'tr', NULL, 'ProjectController@list', NULL),
(305, 102, 'projeler', 'en', NULL, 'ProjectController@list', NULL),
(306, 102, 'projeler', 'fr', NULL, 'PagesController@index', NULL),
(307, 103, 'work-showcase', 'tr', NULL, 'PagesController@index', NULL),
(308, 103, 'work-showcase', 'en', NULL, 'PagesController@index', NULL),
(309, 103, 'work-showcase', 'fr', NULL, 'PagesController@index', NULL),
(310, 104, 'thick-paper-book', 'tr', NULL, 'ProjectController@index', NULL),
(311, 104, 'thick-paper-book', 'en', NULL, 'ProjectController@index', NULL),
(312, 104, 'thick-paper-book', 'fr', NULL, 'PagesController@index', NULL),
(313, 105, 'ninety-nine-you', 'tr', NULL, 'ProjectController@index', NULL),
(314, 105, 'ninety-nine-you', 'en', NULL, 'ProjectController@index', NULL),
(315, 105, 'ninety-nine-you', 'fr', NULL, 'PagesController@index', NULL),
(316, 106, 'colorful-photo-print', 'tr', NULL, 'ProjectController@index', NULL),
(317, 106, 'colorful-photo-print', 'en', NULL, 'ProjectController@index', NULL),
(318, 106, 'colorful-photo-print', 'fr', NULL, 'PagesController@index', NULL),
(319, 107, 'about-company', 'tr', NULL, 'PagesController@index', NULL),
(320, 107, 'about-company', 'en', NULL, 'PagesController@index', NULL),
(321, 107, 'about-company', 'fr', NULL, 'PagesController@index', NULL),
(322, 108, 'our-promises', 'tr', NULL, 'PagesController@index', NULL),
(323, 108, 'our-promises', 'en', NULL, 'PagesController@index', NULL),
(324, 108, 'our-promises', 'fr', NULL, 'PagesController@index', NULL),
(325, 109, 'how-we-work', 'tr', NULL, 'PagesController@index', NULL),
(326, 109, 'how-we-work', 'en', NULL, 'PagesController@index', NULL),
(327, 109, 'how-we-work', 'fr', NULL, 'PagesController@index', NULL),
(328, 110, 'teklif-formu', 'tr', NULL, 'ContactController@teklif', NULL),
(329, 110, 'teklif-isteme-formu', 'en', NULL, 'ContactController@teklif', NULL),
(330, 110, 'teklif-isteme-formu', 'ar', NULL, 'ContactController@teklif', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Metehan SAKA', 'admin@admin.com', NULL, '$2a$10$Xz6U8gBiugXJTYYtazZpMOMQUXbRxh0HveVr7MMJuAYY0xIQRohlm', 'Ve3fB4X8AWw9G6XfwtlRgHcLaZXg2F9ner9ZszoW7duThdcj3C7OtmcKBiob', '2020-05-12 17:51:41', '2020-05-12 17:51:41', 'admin');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `category_language`
--
ALTER TABLE `category_language`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `form_fields`
--
ALTER TABLE `form_fields`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `form_fields_language`
--
ALTER TABLE `form_fields_language`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `form_fields_value`
--
ALTER TABLE `form_fields_value`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `form_language`
--
ALTER TABLE `form_language`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Tablo için indeksler `language_value`
--
ALTER TABLE `language_value`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Tablo için indeksler `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `language_id` (`language_id`);

--
-- Tablo için indeksler `special_blocks`
--
ALTER TABLE `special_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `taxonomy`
--
ALTER TABLE `taxonomy`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Tablo için AUTO_INCREMENT değeri `category_language`
--
ALTER TABLE `category_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `form_data`
--
ALTER TABLE `form_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `form_fields`
--
ALTER TABLE `form_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `form_fields_language`
--
ALTER TABLE `form_fields_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Tablo için AUTO_INCREMENT değeri `form_fields_value`
--
ALTER TABLE `form_fields_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Tablo için AUTO_INCREMENT değeri `form_language`
--
ALTER TABLE `form_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `language_value`
--
ALTER TABLE `language_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `special_blocks`
--
ALTER TABLE `special_blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `taxonomy`
--
ALTER TABLE `taxonomy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `lang_id` FOREIGN KEY (`language_id`) REFERENCES `language` (`slug`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
