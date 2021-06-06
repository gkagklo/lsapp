-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 06 Ιουν 2021 στις 14:12:41
-- Έκδοση διακομιστή: 10.4.16-MariaDB
-- Έκδοση PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `lsapp`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `laptop`
--

CREATE TABLE `laptop` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `fact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mboard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `system` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `laptop`
--

INSERT INTO `laptop` (`id`, `user_id`, `fact`, `cpu`, `ram`, `gpu`, `disc`, `status`, `mboard`, `screen`, `price`, `body`, `cover_image`, `cover_image1`, `cover_image2`, `created_at`, `updated_at`, `system`) VALUES
(4, 8, 'ASUS', 'AMD RYZEN 5 3ghz', '8', 'GeForce GTX 1650', '1000', 'Καλή', 'GIGABYTE', '15', 450, 'gg', 'asus1_1609412755.jpeg', 'asus2_1609412755.jpeg', 'asus3_1609412755.jpeg', '2020-12-31 11:05:55', '2020-12-31 11:05:55', 'Windows 10'),
(5, 8, 'Dell', 'amd ryzen 3 3ghz', '4', 'hd graphic', '500', 'Καλή', 'msi', '15', 200, 'laptop', 'dell1_1609412929.jpeg', 'dell2_1609412929.jpeg', 'dell3_1609412929.jpeg', '2020-12-31 11:08:49', '2020-12-31 11:08:49', 'Windows 10'),
(6, 9, 'HP', 'AMD Ryzen 5 3 GHz', '8', 'GeForce GTX 1650', '500', 'Καλή', 'msi', '15', 555, 'gg', 'hp1_1609414539.jpeg', 'hp2_1609414539.jpeg', 'hp3_1609414539.jpeg', '2020-12-31 11:35:39', '2020-12-31 11:35:39', 'Windows 10');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_09_081348_create_posts_table', 1),
(4, '2018_05_18_124712_add_user_id_to_posts', 2),
(5, '2018_05_26_212629_add_cover_image_to_posts', 3),
(6, '2018_06_02_133253_add_category_to_posts', 4),
(7, '2018_06_02_140848_add_price_to_posts', 5),
(8, '2018_06_02_144022_add_ram_to_posts', 6),
(9, '2018_06_02_150804_add_fact_to_posts', 7),
(10, '2018_06_02_151931_add_cpu_to_posts', 8),
(11, '2018_06_03_104459_add_gpu_to_posts', 9),
(12, '2018_06_03_105403_add_disc_to_posts', 10),
(13, '2018_06_03_115744_add_status_to_posts', 11),
(14, '2018_06_19_195230_add_activation_columns_to_users', 12),
(15, '2018_06_20_152036_add_activation_columns_to_users', 13),
(16, '2018_06_23_135735_add_username_to_posts', 14),
(17, '2018_06_23_152921_add_username_to_users', 15),
(18, '2018_06_23_160823_add_lastname_to_users', 16),
(19, '2018_06_24_122003_add_mboard_to_posts', 17),
(21, '2018_06_27_135457_create_laptop_table', 18),
(22, '2018_06_30_141605_create_phones_table', 19),
(23, '2018_06_30_143607_add_status_to_phone', 20),
(24, '2018_07_01_134403_create_tablets_table', 21),
(25, '2018_07_01_141646_add_status_to_tablet', 22),
(26, '2018_07_05_143141_create_periferiakas_table', 23),
(27, '2018_08_22_215546_add_area_to_posts', 24),
(28, '2018_08_22_215737_add_thl1_to_posts', 25),
(29, '2018_08_22_215942_add_thl2_to_posts', 26),
(30, '2018_08_22_220323_add_country_to_posts', 27),
(31, '2018_08_23_161726_add_system_to_laptop', 28),
(32, '2018_08_23_162122_add_system_to_laptop', 29),
(33, '2018_08_23_164308_add_country_to_laptop', 30),
(34, '2018_08_23_164447_add_area_to_laptop', 31),
(35, '2018_08_23_165404_add_thl1_to_laptop', 32),
(36, '2018_08_23_165453_add_thl2_to_laptop', 33),
(37, '2018_08_25_173916_add_country_to_phone', 34),
(38, '2018_08_25_174031_add_area_to_phone', 35),
(39, '2018_08_25_174112_add_thl1_to_phone', 36),
(40, '2018_08_25_174123_add_thl2_to_phone', 36),
(41, '2018_08_25_182454_add_country_to_tablet', 37),
(42, '2018_08_25_182504_add_area_to_tablet', 37),
(43, '2018_08_25_182514_add_thl1_to_tablet', 37),
(44, '2018_08_25_182526_add_thl2_to_tablet', 37),
(45, '2018_08_26_160644_add_color_to_phone', 38),
(46, '2018_08_26_162532_add_system_to_posts', 39),
(47, '2018_08_26_170127_add_camera2_to_phone', 40),
(48, '2018_08_26_170232_add_camera2_to_tablet', 40),
(49, '2018_09_08_125114_add_test_to_posts', 41),
(50, '2018_09_08_154139_add_thl1_to_users', 42),
(51, '2018_09_15_143757_add_pic_to_users', 43),
(52, '2018_09_15_163950_add_slug_to_users', 44),
(53, '2018_09_15_191856_create_profile_table', 45),
(54, '2018_09_16_140310_add_thl1_to_profiles', 46),
(55, '2018_09_16_140320_add_thl2_to_profiles', 46),
(56, '2018_09_24_174552_create_products_photos_table', 47),
(57, '2018_10_29_173236_create_products_photo_table', 48);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('deathbreakerxx@hotmail.com', '$2y$10$AbLUxey8JPI8OABCiD9X5eW9GchWS3aVOz7RZN5EApNV0lD4TA5pS', '2018-11-08 15:11:18');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `periferiaka`
--

CREATE TABLE `periferiaka` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `fact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connectivity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mech` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rgb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dpi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pliktra` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `micro` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `power` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channels` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resolution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fps` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `periferiaka`
--

INSERT INTO `periferiaka` (`id`, `user_id`, `category`, `body`, `color`, `status`, `price`, `fact`, `connectivity`, `usage`, `mech`, `rgb`, `dpi`, `pliktra`, `volume`, `micro`, `power`, `channels`, `resolution`, `fps`, `mic`, `cover_image`, `cover_image1`, `cover_image2`, `created_at`, `updated_at`) VALUES
(8, 8, 'Πληκτρολόγια', 'gaming keyboard', 'Μαύρο', 'Καλή', 40, 'coolermaster', 'Ενσύρματο', 'Για παιχνίδια', 'Ναι', 'Ναι', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cool_key1_1609413717.jpeg', 'cool_key2_1609413717.jpeg', 'cool_key3_1609413717.jpeg', '2020-12-31 11:21:17', '2020-12-31 11:21:57'),
(9, 9, 'Ακουστικά', 'gg', 'Μαύρο', 'Καλή', 30, 'Razer', 'Ενσύρματο', NULL, NULL, NULL, NULL, NULL, '109', '10', NULL, NULL, NULL, NULL, NULL, 'razer_head1_1609414213.jpeg', 'razer_head2_1609414213.jpeg', 'razer_head3_1609414213.jpeg', '2020-12-31 11:30:13', '2020-12-31 11:30:13');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `phone`
--

CREATE TABLE `phone` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `system` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camera` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `battery` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camera2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `phone`
--

INSERT INTO `phone` (`id`, `user_id`, `system`, `fact`, `cpu`, `ram`, `disc`, `screen`, `camera`, `battery`, `price`, `body`, `cover_image`, `cover_image1`, `cover_image2`, `created_at`, `updated_at`, `status`, `color`, `camera2`) VALUES
(5, 8, 'Android', 'Huawei', 'Kirin 980', '4', '60', '5', '161', '3000', 300, 'huawei phone', 'huawei1_1609413128.jpg', 'huawei2_1609413128.jpg', 'huawei3_1609413128.jpg', '2020-12-31 11:12:08', '2020-12-31 11:12:08', 'Καλή', 'Μαύρο', '16'),
(6, 8, 'Apple iOS', 'Apple', 'Apple A13 Bionic', '4', '120', '5', '16', '3000', 400, 'gg', 'appl3_1609413265.jpeg', 'apple1_1609413265.jpeg', 'apple2_1609413265.jpeg', '2020-12-31 11:14:25', '2020-12-31 11:14:25', 'Καλή', 'Γκρί', '16');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `ram` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mboard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `system` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `posts`
--

INSERT INTO `posts` (`id`, `body`, `created_at`, `updated_at`, `user_id`, `cover_image`, `price`, `ram`, `fact`, `cpu`, `gpu`, `disc`, `status`, `mboard`, `system`, `cover_image1`, `cover_image2`) VALUES
(6, 'gaming desktop good price', '2020-12-31 10:54:18', '2020-12-31 10:57:11', 8, 'turbox_1609412231.JPG', 400, '8', 'Turbox', 'AMD Ryzen 5 3,4 GHz', 'gtx 1050 Ti 4 GB', '1000', 'Καλή', 'MSI B450 Tomahawk Max', 'Windows 10', 'turbox1_1609412231.JPG', 'turbox2_1609412231.JPG'),
(7, 'Coolermaster desktop', '2020-12-31 11:01:37', '2020-12-31 11:01:37', 8, 'cooler1_1609412497.png', 300, '4', 'Coolermaster', 'Intel i5 3,5 Ghz', 'gtx 950 TI 2 gb', '500', 'Καλή', 'MSI', 'Windows 10', 'cooler2_1609412497.jpg', 'cooler3_1609412497.jpg'),
(8, 'gg', '2020-12-31 11:32:42', '2020-12-31 11:32:42', 9, 'corsair1_1609414362.jpg', 333, '8', 'Corsair', 'Intel core i3 3ghz', 'gtx 1050 ti 2gb', '1000', 'Καλή', 'gigabyte', 'Windows 10', 'corsair2_1609414362.jpg', 'corsair2_1609414362.jpg');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thl1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thl2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `city`, `country`, `created_at`, `updated_at`, `thl1`, `thl2`) VALUES
(8, 8, 'Thessaloniki', 'Greece', '2020-12-31 10:48:59', '2020-12-31 10:48:59', '6981472584', '2310714258'),
(9, 9, 'thessaloniki', 'greece', '2020-12-31 11:25:51', '2020-12-31 11:25:51', '6983692584', '2310698523');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `tablet`
--

CREATE TABLE `tablet` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `system` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camera` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `battery` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camera2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `tablet`
--

INSERT INTO `tablet` (`id`, `user_id`, `system`, `fact`, `cpu`, `ram`, `disc`, `screen`, `camera`, `battery`, `color`, `price`, `body`, `cover_image`, `cover_image1`, `cover_image2`, `created_at`, `updated_at`, `status`, `camera2`) VALUES
(3, 8, 'Android', 'huawei', 'Octa-Core (2+2+4)', '4', '120', '10', '8', '4000', 'Γκρί', 280, 'tablet huawei', 'hua1_1609413427.jpeg', 'hua2_1609413427.jpeg', 'hua3_1609413427.jpeg', '2020-12-31 11:17:07', '2020-12-31 11:17:07', 'Καλή', '8'),
(4, 8, 'Android', 'Samsung', 'Octa-Core (4+4)', '3', '32', '10', '12', '4500', 'Μαύρο', 100, 'gg', 'sam1_1609413588.jpeg', 'sam2_1609413588.jpeg', 'sam3_1609413588.jpeg', '2020-12-31 11:19:48', '2020-12-31 11:19:48', 'Καλή', '12');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `activation_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `active`, `activation_token`, `username`, `lastname`, `pic`, `slug`) VALUES
(8, 'geo', 'deathbreakerxx@hotmail.com', '$2y$10$QqQS7DB99spb0p/PJijoI.pacX4Puv7FTC3fw/wl9O4PSF9nkm186', 'Od8yQk79gCPEcHUvRg4TnJpWysF8eY0GkVeJ9jhSctBCZUqyVspARWcITauT', '2020-12-31 10:48:59', '2020-12-31 10:49:14', 1, NULL, 'banditgeo', 'gkagklo', 'user2.png', 'geo'),
(9, 'leonidas', 'geogkagkloidis@hotmail.com', '$2y$10$GThHjTvUcF.Bqw8aHMxx2O8IHtnzIbtr1o2P55ZofatM0QiTFCJbi', 'XVOmcE4Sym3ksZ5kHQYTbFyp91roO4TacRvaXoLOMBGQltAFq7jR41vKV0gk', '2020-12-31 11:25:51', '2020-12-31 11:27:02', 1, NULL, 'leonidas', 'serasis', 'user1.png', 'leonidas');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Ευρετήρια για πίνακα `periferiaka`
--
ALTER TABLE `periferiaka`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `tablet`
--
ALTER TABLE `tablet`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT για πίνακα `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT για πίνακα `periferiaka`
--
ALTER TABLE `periferiaka`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT για πίνακα `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT για πίνακα `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT για πίνακα `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT για πίνακα `tablet`
--
ALTER TABLE `tablet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
