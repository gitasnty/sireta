-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2023 pada 03.26
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sireta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standard` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period` year(4) DEFAULT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `documents`
--

INSERT INTO `documents` (`id`, `code`, `name`, `doctype`, `standard`, `period`, `file_path`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'CM_029', 'Data Prestasi', 'Catatan Mutu', 'standar 5', 2021, 'upload/2n77fRjjjJnTFRdNamQqFCmSNvHVGY7YlujICb1O.pdf', 2, NULL, '2022-11-23 23:54:23'),
(2, 'PM_232', 'Kurikulum', 'Prosedur Mutu', 'Standar 2', 2022, '', 3, NULL, NULL),
(6, 'MM_034', 'Data Siswa', 'Manual Mutu', 'Standar 6', 2021, 'upload/sIyFaBm7z4r9Ny9AEqID9fZWagYoozG7Zlq4GmHI.pdf', 2, NULL, '2022-11-20 21:28:21'),
(8, 'MM_123', 'Data Siswa X RPL A', 'Manual Mutu', 'Standar 3', 2011, 'upload/aGqXiAgsvKWlUHMLl7p30ZBtoQYOUfoRoH9Z9a28.jpg', 5, NULL, '2022-11-11 22:34:09'),
(9, 'PM_024', 'Data Prestasi Akademik', 'Prosedur Mutu', 'Standar 5', 2010, 'upload/TCYJw6LmO8AJwn5dZ6aQhtKXoYwrYwsYfBzk8sVj.pdf', 8, NULL, '2022-11-23 23:59:08'),
(10, 'PM_039', 'Data Prestasi Non Akademik', 'Prosedur Mutu', 'Standar 8', 2010, '', 6, NULL, NULL),
(11, 'PK_003', 'SOP PPDB', 'Petunjuk Kerja', 'Standar 4', 2012, 'upload/tszHddIwWghRSyHcMIgkB6STAW6SXsPkrjR9vjKE.pdf', 7, NULL, '2022-11-23 23:49:41'),
(13, 'CM_124', 'Notulensi Rapat ', 'Catatan Mutu', 'Standar 7', 2020, 'upload/8ucZsT0NsaoNRJ8fdf3zunsxZ2NeWiWI7fNexSrx.pdf', 6, NULL, '2022-11-23 23:54:59'),
(15, 'PK_015', 'SOP PPDB', 'Petunjuk Kerja', 'Standar 6', 2019, 'upload/nU329XzzAi2akNoy7agjWGL1Jef3Ar9f0vml0TLV.jpg', 6, NULL, '2022-12-02 18:50:01'),
(23, 'PK_456', 'Data Siswa', 'Petunjuk Kerja', 'Standar 1', 2022, NULL, 2, '2022-12-02 20:04:03', '2022-12-02 20:04:03'),
(24, 'PM_456', 'Data Siswa', 'Prosedur Mutu', 'Standar 1', 2022, NULL, 2, '2022-12-04 10:01:06', '2022-12-04 10:01:06'),
(25, 'PK_120', 'Data Siswa', 'Petunjuk Kerja', 'Standar 1', 2010, NULL, 2, '2022-12-04 10:01:50', '2022-12-04 10:01:50'),
(26, 'PK_592', 'Data Siswa', 'Petunjuk Kerja', 'Standar 7', 2010, NULL, 9, '2022-12-04 10:04:46', '2022-12-04 10:04:46'),
(27, 'PK_034', 'Data Siswa', 'Petunjuk Kerja', 'Standar 6', 2022, NULL, 9, '2022-12-04 10:11:31', '2022-12-04 10:11:31'),
(28, 'CM_130', 'Data Siswa', 'Catatan Mutu', 'Standar 6', 2022, NULL, 9, '2022-12-04 10:12:03', '2022-12-04 10:12:03'),
(29, 'PM_498', 'Data Siswa', 'Prosedur Mutu', 'Standar 4', 2022, NULL, 9, '2022-12-04 10:51:22', '2022-12-04 10:51:22'),
(30, 'MM_123', 'Data Siswa', 'Manual Mutu', 'Standar 4', 2022, 'upload/bK5J898spQSkvNqB33sabxNAk0FkFFhk8vNQDS4G.jpg', 6, '2022-12-04 11:09:16', '2023-02-26 23:32:14'),
(34, 'abc', 'abc', 'Struktur Organisasi', NULL, 2022, NULL, 11, '2022-12-06 01:45:56', '2022-12-06 01:45:56'),
(35, 'MM_1456', 'Materi IPA', 'Manual Mutu', 'Standar 5', 2023, 'upload/VKtx6iFXXe5gkFeRcfRK6G7IIgQCli37yYswzbV2.jpg', 16, '2023-02-18 22:33:05', '2023-02-26 20:17:19'),
(36, 'MM_599', 'ABC', 'Manual Mutu', 'Standar 4', 2023, 'upload/xrafxZBnsZY1k6ZS2mOOUKyf0hlmP1qZ135TkCAK.jpg', 18, '2023-03-01 19:03:41', '2023-03-01 19:06:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_06_26_184641_create_sessions_table', 1),
(7, '2022_10_05_014926_create_documents_table', 1),
(8, '2022_10_05_022255_create_documents_users_table', 1),
(9, '2022_11_05_180029_drop_documents_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('eJcJCrgbl4JgbzttDvueuxYi5d3tvdFZtfhIPuYA', 18, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTo2OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW51YWxtdXR1L3ZpZXciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiTmQ5M2NqSU94WW5GT2tyNVpMclQ0djBvd0hXb3hoRXBodVI1UjVjVSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTg7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkSVhVUy5MRW55Vm43OVFGWlJFQzBaTzZDY2JScGpmN0RKakhCOEYvTGVoSFpPMzRHWmhSWVMiO30=', 1677722973),
('y9gis5SAi6FtsaGGOmuGLihrW8IoPfpDeH9xgwOO', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic3RUZWFURlh2NmJJb1hYbjBQWnpuWWdROXdRdTd5U3R6QWR5U2E3ZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9zZWR1cm11dHUvdmlldyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkSDYwdnRFVVNXNEFaVDdnSlVMU1RuLnk0UHlxbUViL2dreFVRc3ZRMnpYek9NckdGUFg4YUciO30=', 1677715546),
('zRd3ZhTksj7qX2aSY5ejFl7NUwwaDWOr1KmxTkSe', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiV2JkTm5pck96TWwxUjN0MG5Xc2NiYnhKcWp3NDNGT29zTmVlcVhWayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW51YWxtdXR1L3ZpZXciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEg2MHZ0RVVTVzRBWlQ3Z0pVTFNUbi55NFB5cW1FYi9na3hVUXN2UTJ6WHpPTXJHRlBYOGFHIjt9', 1677723322);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pj` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `pj`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin', 'Budi Sukirman', 'admin@gmail.com', NULL, '$2y$10$H60vtEUSW4AZT7gJULSTn.y4PyqmEb/gkxUQsvQ2zXzOMrGFPX8aG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 11:50:35', '2022-11-08 07:34:11'),
(3, 'user', 'WKS2', 'Dewi', 'wks2@gmail.com', NULL, '$2y$10$H60vtEUSW4AZT7gJULSTn.y4PyqmEb/gkxUQsvQ2zXzOMrGFPX8aG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 11:51:02', '2022-11-05 11:51:02'),
(5, 'user', 'WKS3', 'Sukirman', 'wks3@gmail.com', NULL, '$2y$10$H60vtEUSW4AZT7gJULSTn.y4PyqmEb/gkxUQsvQ2zXzOMrGFPX8aG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-11 22:15:30', '2022-11-11 22:18:04'),
(6, 'user', 'WKS4', 'Pudjiastuti', 'wks4@gmail.com', NULL, '$2y$10$H60vtEUSW4AZT7gJULSTn.y4PyqmEb/gkxUQsvQ2zXzOMrGFPX8aG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-11 22:15:59', '2022-11-11 22:16:48'),
(7, 'user', 'WKS5', 'listya', 'wks5@gmail.com', NULL, '$2y$10$H60vtEUSW4AZT7gJULSTn.y4PyqmEb/gkxUQsvQ2zXzOMrGFPX8aG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-11 22:17:40', '2022-11-11 22:17:40'),
(8, 'user', 'WKS6', 'Maharani', 'wks6@gmail.com', NULL, '$2y$10$H60vtEUSW4AZT7gJULSTn.y4PyqmEb/gkxUQsvQ2zXzOMrGFPX8aG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-11 22:18:43', '2022-11-11 22:18:43'),
(9, 'user', 'WKS7', 'Resti', 'wks7@gmail.com', NULL, '$2y$10$H60vtEUSW4AZT7gJULSTn.y4PyqmEb/gkxUQsvQ2zXzOMrGFPX8aG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-20 21:27:29', '2022-11-20 21:27:29'),
(11, 'user', 'WKS8', 'Ani', 'wks8@gmail.com', NULL, '$2y$10$H60vtEUSW4AZT7gJULSTn.y4PyqmEb/gkxUQsvQ2zXzOMrGFPX8aG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-24 00:01:59', '2022-11-24 00:01:59'),
(12, 'user', 'WKS9', 'Ani', 'wks9@gmail.com', NULL, '$2y$10$H60vtEUSW4AZT7gJULSTn.y4PyqmEb/gkxUQsvQ2zXzOMrGFPX8aG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-28 05:45:25', '2022-11-28 05:45:25'),
(13, 'user', 'WKS10', 'Mb Dewi', 'wks10@gmail.com', NULL, '$2y$10$H60vtEUSW4AZT7gJULSTn.y4PyqmEb/gkxUQsvQ2zXzOMrGFPX8aG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-02 18:43:43', '2022-12-02 18:43:43'),
(14, 'user', 'wks22', 'gita', 'wks22@gmail.com', NULL, '$2y$10$H60vtEUSW4AZT7gJULSTn.y4PyqmEb/gkxUQsvQ2zXzOMrGFPX8aG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-28 18:09:17', '2023-01-24 10:06:54'),
(15, 'admin', 'WKS23', 'wks23@gmail,com', 'wks23@gmail.com', NULL, '$2y$10$H60vtEUSW4AZT7gJULSTn.y4PyqmEb/gkxUQsvQ2zXzOMrGFPX8aG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-28 18:15:53', '2022-12-28 18:15:53'),
(16, 'user', 'WKS30', 'Afni Nirwana', 'wks30@gmail.com', NULL, '$2y$10$zBOXxUT7rZVXOgZ6JuiLpO/M7UfZjSftXtFhLVem2OZU7lf0APyVi', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-18 22:32:28', '2023-02-18 22:32:28'),
(18, 'user', 'WKS25', 'Listya', 'wks25@gmail.com', NULL, '$2y$10$IXUS.LEnyVn79QFZREC0ZO6CcbRpjf7DJjHB8F/LehHZO34GZhRYS', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-01 19:02:35', '2023-03-01 19:02:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`name`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
