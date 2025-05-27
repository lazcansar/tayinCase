-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 27 May 2025, 04:48:15
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tayin`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `changetickets`
--

CREATE TABLE `changetickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `changetype` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `changetickets`
--

INSERT INTO `changetickets` (`id`, `user_id`, `city_id`, `changetype`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 'Tayin Talebi', 'Aydın Adliyesine tayin almak istiyorum.', '2025-05-26 22:08:50', '2025-05-26 22:08:50'),
(6, 2, 2, 'Tayin Talebi', 'Adıyaman Adliyesine tayin almak istiyorum.', '2025-05-26 22:37:43', '2025-05-26 22:37:43');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Adana Adliyesi', NULL, NULL),
(2, 'Adıyaman Adliyesi', NULL, NULL),
(3, 'Afyonkarahisar Adliyesi', NULL, NULL),
(4, 'Ağrı Adliyesi', NULL, NULL),
(5, 'Amasya Adliyesi', NULL, NULL),
(6, 'Ankara Adliyesi', NULL, NULL),
(7, 'Antalya Adliyesi', NULL, NULL),
(8, 'Artvin Adliyesi', NULL, NULL),
(9, 'Aydın Adliyesi', NULL, NULL),
(10, 'Balıkesir Adliyesi', NULL, NULL),
(11, 'Bilecik Adliyesi', NULL, NULL),
(12, 'Bingöl Adliyesi', NULL, NULL),
(13, 'Bitlis Adliyesi', NULL, NULL),
(14, 'Bolu Adliyesi', NULL, NULL),
(15, 'Burdur Adliyesi', NULL, NULL),
(16, 'Bursa Adliyesi', NULL, NULL),
(17, 'Çanakkale Adliyesi', NULL, NULL),
(18, 'Çankırı Adliyesi', NULL, NULL),
(19, 'Çorum Adliyesi', NULL, NULL),
(20, 'Denizli Adliyesi', NULL, NULL),
(21, 'Diyarbakır Adliyesi', NULL, NULL),
(22, 'Edirne Adliyesi', NULL, NULL),
(23, 'Elazığ Adliyesi', NULL, NULL),
(24, 'Erzincan Adliyesi', NULL, NULL),
(25, 'Erzurum Adliyesi', NULL, NULL),
(26, 'Eskişehir Adliyesi', NULL, NULL),
(27, 'Gaziantep Adliyesi', NULL, NULL),
(28, 'Giresun Adliyesi', NULL, NULL),
(29, 'Gümüşhane Adliyesi', NULL, NULL),
(30, 'Hakkari Adliyesi', NULL, NULL),
(31, 'Hatay Adliyesi', NULL, NULL),
(32, 'Isparta Adliyesi', NULL, NULL),
(33, 'Mersin Adliyesi', NULL, NULL),
(34, 'İstanbul Adliyesi', NULL, NULL),
(35, 'İzmir Adliyesi', NULL, NULL),
(36, 'Kars Adliyesi', NULL, NULL),
(37, 'Kastamonu Adliyesi', NULL, NULL),
(38, 'Kayseri Adliyesi', NULL, NULL),
(39, 'Kırklareli Adliyesi', NULL, NULL),
(40, 'Kırşehir Adliyesi', NULL, NULL),
(41, 'Kocaeli Adliyesi', NULL, NULL),
(42, 'Konya Adliyesi', NULL, NULL),
(43, 'Kütahya Adliyesi', NULL, NULL),
(44, 'Malatya Adliyesi', NULL, NULL),
(45, 'Manisa Adliyesi', NULL, NULL),
(46, 'Kahramanmaraş Adliyesi', NULL, NULL),
(47, 'Mardin Adliyesi', NULL, NULL),
(48, 'Muğla Adliyesi', NULL, NULL),
(49, 'Muş Adliyesi', NULL, NULL),
(50, 'Nevşehir Adliyesi', NULL, NULL),
(51, 'Niğde Adliyesi', NULL, NULL),
(52, 'Ordu Adliyesi', NULL, NULL),
(53, 'Rize Adliyesi', NULL, NULL),
(54, 'Sakarya Adliyesi', NULL, NULL),
(55, 'Samsun Adliyesi', NULL, NULL),
(56, 'Siirt Adliyesi', NULL, NULL),
(57, 'Sinop Adliyesi', NULL, NULL),
(58, 'Sivas Adliyesi', NULL, NULL),
(59, 'Tekirdağ Adliyesi', NULL, NULL),
(60, 'Tokat Adliyesi', NULL, NULL),
(61, 'Trabzon Adliyesi', NULL, NULL),
(62, 'Tunceli Adliyesi', NULL, NULL),
(63, 'Şanlıurfa Adliyesi', NULL, NULL),
(64, 'Uşak Adliyesi', NULL, NULL),
(65, 'Van Adliyesi', NULL, NULL),
(66, 'Yozgat Adliyesi', NULL, NULL),
(67, 'Zonguldak Adliyesi', NULL, NULL),
(68, 'Aksaray Adliyesi', NULL, NULL),
(69, 'Bayburt Adliyesi', NULL, NULL),
(70, 'Karaman Adliyesi', NULL, NULL),
(71, 'Kırıkkale Adliyesi', NULL, NULL),
(72, 'Batman Adliyesi', NULL, NULL),
(73, 'Şırnak Adliyesi', NULL, NULL),
(74, 'Bartın Adliyesi', NULL, NULL),
(75, 'Ardahan Adliyesi', NULL, NULL),
(76, 'Iğdır Adliyesi', NULL, NULL),
(77, 'Yalova Adliyesi', NULL, NULL),
(78, 'Karabük Adliyesi', NULL, NULL),
(79, 'Kilis Adliyesi', NULL, NULL),
(80, 'Osmaniye Adliyesi', NULL, NULL),
(81, 'Düzce Adliyesi', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_26_230136_create_user_details_table', 2),
(5, '2025_05_27_000039_create_cities_table', 3),
(7, '2025_05_27_004547_create_changetickets_table', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ab204376', 'ab204376@adalet.gov.tr', NULL, '$2y$12$zbL1yz00CVK3cGpZPF55pe4kqbUOGb2Tyz.sOZySEQqr2QIuFj8ly', '0', NULL, '2025-05-26 22:35:05', '2025-05-26 22:35:05'),
(2, 'ab204479', 'ab204479@adalet.gov.tr', NULL, '$2y$12$zbL1yz00CVK3cGpZPF55pe4kqbUOGb2Tyz.sOZySEQqr2QIuFj8ly', '0', NULL, '2025-05-26 22:35:05', '2025-05-26 22:35:05'),
(3, 'ab1', 'ab1@adalet.gov.tr', NULL, '$2y$12$zbL1yz00CVK3cGpZPF55pe4kqbUOGb2Tyz.sOZySEQqr2QIuFj8ly', '1', NULL, '2025-05-26 22:35:05', '2025-05-26 22:35:05');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `vac` varchar(255) NOT NULL,
  `kadro` varchar(255) NOT NULL,
  `startyear` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `user_details`
--

INSERT INTO `user_details` (`id`, `users_id`, `name`, `surname`, `email`, `company`, `phone`, `address`, `vac`, `kadro`, `startyear`, `created_at`, `updated_at`) VALUES
(2, 1, 'Abdullah', 'GÖKSAL', 'ab204376@adalet.gov.tr', 'Adalet Bakanlığı - Gaziosmanpaşa Cumhuriyet Başsavcılığı', '0546 500 70 16', 'Fatih Mah. 203 Sk. No:X D:X Esenler / İstanbul', '30', '7/2', '10.02.2017', '2025-05-26 20:21:44', '2025-05-26 20:21:44'),
(3, 2, 'Hüseyin', 'PAK', 'ab204479@adalet.gov.tr', 'Gaziosmanpaşa Adliyesi', '0506 770 18 61', 'Fatih Mah. 203 Sk. No:29 D:6', '22', '6/1', '10.02.2017', NULL, NULL),
(4, 3, 'Yetkili', 'Kullanıcı', 'admin@admin.com', 'Adalet Bakanlığı', '0546 500 70 16', 'XXX', 'XXX', 'XXX', 'XXX', NULL, NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Tablo için indeksler `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Tablo için indeksler `changetickets`
--
ALTER TABLE `changetickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `changetickets_user_id_foreign` (`user_id`),
  ADD KEY `changetickets_city_id_foreign` (`city_id`);

--
-- Tablo için indeksler `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Tablo için indeksler `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Tablo için indeksler `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Tablo için indeksler `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_details_email_unique` (`email`),
  ADD KEY `user_details_users_id_foreign` (`users_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `changetickets`
--
ALTER TABLE `changetickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `changetickets`
--
ALTER TABLE `changetickets`
  ADD CONSTRAINT `changetickets_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `changetickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Tablo kısıtlamaları `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
