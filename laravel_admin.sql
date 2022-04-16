-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 09 Ara 2020, 17:41:29
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.10

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
(1, NULL, NULL, NULL, NULL, 999, 1605536541, 6, 0, 1, NULL, 0, 1, NULL, NULL, 0);

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
(3, 1, 'fr', 'Üst Menü', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(1, 'admin@admin.com'),
(4, 'mustafa@bwadigital.com');

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
(3, 'Geniş Yazı Alanı', 1, 999);

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
(2, 1, 'en', 'Ad Soyad', ''),
(3, 1, 'fr', 'Ad Soyad', ''),
(5, 2, 'en', 'Email', ''),
(6, 2, 'fr', 'Email', ''),
(8, 3, 'tr', 'Mesaj', NULL),
(9, 3, 'en', 'Mesaj', ''),
(10, 3, 'fr', 'Mesaj', ''),
(11, 2, 'tr', 'Email', '');

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
(23, 1, 1),
(24, 1, 3),
(25, 1, 2),
(53, 4, 3),
(54, 4, 2);

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
(5, 1, 'tr', 'İletişim Formu', 'İletişim Formu'),
(12, 4, 'tr', 'deneme Form', 'asdasdad'),
(13, 4, 'en', 'deneme Form', 'asdasdad'),
(14, 4, 'fr', 'deneme Form', 'asdasdad');

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
(3, 'FR', 'fr', NULL);

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
(40, 'fr', 'daha_fazla', 'PLUS'),
(41, 'fr', 'referanslar', 'RÉFÉRENCES'),
(42, 'fr', 'gonder', 'Soumettre'),
(43, 'fr', 'mesaj', 'Message'),
(44, 'fr', 'name', 'Nom Prénom'),
(45, 'fr', 'biz', 'NOUS'),
(66, 'tr', 'daha_fazla', 'DAHA FAZLA'),
(67, 'tr', 'referanslar', 'REFERANSLAR'),
(68, 'tr', 'gonder', 'Gönder'),
(69, 'tr', 'mesaj', 'Mesaj'),
(70, 'tr', 'name', 'Ad Soyad'),
(71, 'tr', 'hakkimizda', 'Hakkımızda'),
(72, 'en', 'daha_fazla', 'MORE'),
(73, 'en', 'referanslar', 'REFERENCES'),
(74, 'en', 'gonder', 'SEND'),
(75, 'en', 'mesaj', 'Message'),
(76, 'en', 'name', 'Name'),
(77, 'en', 'hakkimizda', 'About');

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
(1, 'mustafa@bwadigital.com');

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
  `default_lang` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `language_id`, `logo`, `footer_logo`, `default_banner`, `default_lang`) VALUES
(1, 'tr', NULL, NULL, NULL, 1),
(2, 'en', NULL, NULL, NULL, 0),
(3, 'fr', NULL, NULL, NULL, 0);

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
(7, 'İletişim', 'ContactController@index');

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
(3, 1, 'ust-menu', 'fr', NULL, 'PagesController@index', NULL);

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
(1, 'Mustafa Göktaş', 'mustafa.goktas07@gmail.com', NULL, '$2y$10$r3zrSNPyfPmeVXikhEGjcenjR1HpVT8/Q1ElDa9wFrS3Wa/HfyryO', 'Ve3fB4X8AWw9G6XfwtlRgHcLaZXg2F9ner9ZszoW7duThdcj3C7OtmcKBiob', '2020-05-12 17:51:41', '2020-05-12 17:51:41', 'admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Tablo için AUTO_INCREMENT değeri `category_language`
--
ALTER TABLE `category_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `form_data`
--
ALTER TABLE `form_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `form_fields`
--
ALTER TABLE `form_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `form_fields_language`
--
ALTER TABLE `form_fields_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `form_fields_value`
--
ALTER TABLE `form_fields_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Tablo için AUTO_INCREMENT değeri `form_language`
--
ALTER TABLE `form_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `language_value`
--
ALTER TABLE `language_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `taxonomy`
--
ALTER TABLE `taxonomy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

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