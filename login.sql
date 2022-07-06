-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2021 pada 10.21
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datawargas`
--

CREATE TABLE `datawargas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kelurahan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jk` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttl` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tlp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `alamat` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rt` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datawargas`
--

INSERT INTO `datawargas` (`id`, `nik`, `user_id`, `kelurahan_id`, `jk`, `ttl`, `tlp`, `umur`, `alamat`, `rt`, `created_at`, `updated_at`) VALUES
(1, '3424434', 1, 17, 'adasas', 'asdad', '334234', 21, 'sasdasdasd', '32', NULL, NULL),
(10, '13123', 2, 28, 'Laki-Laki', 'Balikpapan 10 Januari 2000', '08131314', 22, 'Jalan Indrakila', '21', NULL, '2021-08-05 11:03:32'),
(15, '42342342', 3, 27, 'Laki-Laki', '12 November 2000', '08324', 20, 'Jalan Tiga', '26', '2021-08-07 01:05:26', '2021-08-07 01:06:47'),
(16, '81314141', 4, 23, 'Laki-Laki', 'Balikpapan 10 Juni 1999', '086414121', 22, 'Jalan Indrakila Setrat 3', '30', '2021-08-07 01:19:45', '2021-08-07 01:19:45'),
(17, '93141413', 5, 27, 'Perempuan', 'Balikapapan 20 Juli 2000', '086431234123', 21, 'Gn Bahagia', '23', '2021-08-08 01:20:40', '2021-08-08 01:20:40');

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
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Akademik', NULL, NULL, NULL),
(2, 'Non Akademik', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahans`
--

CREATE TABLE `kelurahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelurahan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelurahans`
--

INSERT INTO `kelurahans` (`id`, `nama_kelurahan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'Lamaru', NULL, NULL, NULL),
(12, 'Manggar', NULL, NULL, NULL),
(13, 'Manggar Baru', NULL, NULL, NULL),
(14, 'Teritip', NULL, NULL, NULL),
(15, 'Baru Ilir', NULL, NULL, NULL),
(16, 'Baru Tengah', NULL, NULL, NULL),
(17, 'Baru Ulu', NULL, NULL, NULL),
(18, 'Kariangau', NULL, NULL, NULL),
(19, 'Margasari', NULL, NULL, NULL),
(20, 'Margomulyo', NULL, NULL, NULL),
(21, 'Batu Ampar', NULL, NULL, NULL),
(22, 'Garaha Indah', NULL, NULL, NULL),
(23, 'Gunung Samarinda', NULL, NULL, NULL),
(24, 'Gunung Samarinda Baru', NULL, NULL, NULL),
(25, 'Karang Joang', NULL, NULL, NULL),
(26, 'Muara Rapak', NULL, NULL, NULL),
(27, 'Gunung Sari Ilir', NULL, NULL, NULL),
(28, 'Gunung Sari Ulu', NULL, NULL, NULL),
(29, 'Karang Jati', NULL, NULL, NULL),
(30, 'Karang Rejo', NULL, NULL, NULL),
(31, 'Mekar Sari', NULL, NULL, NULL),
(32, 'Sumber Rejo', NULL, NULL, NULL),
(33, 'Damai Bahagia', NULL, NULL, NULL),
(34, 'Damai Baru', NULL, NULL, NULL),
(35, 'Gunung Bahagia', NULL, NULL, NULL),
(36, 'Sepinggan', NULL, NULL, NULL),
(37, 'Sepinggan Baru', NULL, NULL, NULL),
(38, 'Sepinggan Raya', NULL, NULL, NULL),
(39, 'Sungai Nangka', NULL, NULL, NULL),
(40, 'Damai', NULL, NULL, NULL),
(41, 'Kelandasan Ilir', NULL, NULL, NULL),
(42, 'Kelandasan Ulu', NULL, NULL, NULL),
(43, 'Prapatan', NULL, NULL, NULL),
(44, 'Telagasari', NULL, NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_24_081019_create_provinsis_table', 1),
(5, '2021_07_29_054316_create_kelurahans_table', 1),
(6, '2021_07_29_111634_create_kategoris_table', 1),
(7, '2021_07_30_071135_create_datawargas_table', 1),
(8, '2021_07_30_080144_drop_tabel_datawargas', 1),
(9, '2021_08_03_072131_create_prestasis_table', 1);

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
-- Struktur dari tabel `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `datawarga_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `prestasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Validasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prestasis`
--

INSERT INTO `prestasis` (`id`, `datawarga_id`, `kategori_id`, `prestasi`, `Validasi`, `image`, `created_at`, `updated_at`) VALUES
(14, 15, 1, 'tes aja', 'Diterima', 'Arhv5SHRztfAqgPPr8OPEcj6qevclCGS6EHwLhVb.jpg', '2021-08-08 04:53:28', '2021-08-08 11:37:00'),
(16, 17, 1, 'Lomba lari', 'Menunggu', 'j2flGBb0KqbynZxlg3ljDWtp0bwrzH3mqYKz26Ta.jpg', '2021-08-08 05:05:34', '2021-08-08 05:05:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsis`
--

CREATE TABLE `provinsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_provinsi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `provinsis`
--

INSERT INTO `provinsis` (`id`, `nama_provinsi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'DI ACEH', NULL, NULL, NULL),
(12, 'SUMATERA UTARA', NULL, NULL, NULL),
(13, 'SUMATERA BARAT', NULL, NULL, NULL),
(14, 'RIAU', NULL, NULL, NULL),
(15, 'JAMBI', NULL, NULL, NULL),
(16, 'SUMATERA SELATAN', NULL, NULL, NULL),
(17, 'BENGKULU', NULL, NULL, NULL),
(18, 'LAMPUNG', NULL, NULL, NULL),
(19, 'KEPULAUAN BANGKA BELITUNG', NULL, NULL, NULL),
(21, 'KEPULAUAN RIAU', NULL, NULL, NULL),
(31, 'DKI JAKARTA', NULL, NULL, NULL),
(32, 'JAWA BARAT', NULL, NULL, NULL),
(33, 'JAWA TENGAH', NULL, NULL, NULL),
(34, 'DI YOGYAKARTA', NULL, NULL, NULL),
(35, 'JAWA TIMUR', NULL, NULL, NULL),
(36, 'BANTEN', NULL, NULL, NULL),
(51, 'BALI', NULL, NULL, NULL),
(52, 'NUSA TENGGARA BARAT', NULL, NULL, NULL),
(53, 'NUSA TENGGARA TIMUR', NULL, NULL, NULL),
(61, 'KALIMANTAN BARAT', NULL, NULL, NULL),
(62, 'KALIMANTAN TENGAH', NULL, NULL, NULL),
(63, 'KALIMANTAN SELATAN', NULL, NULL, NULL),
(64, 'KALIMANTAN TIMUR', NULL, NULL, NULL),
(65, 'KALIMANTAN UTARA', NULL, NULL, NULL),
(71, 'SULAWESI UTARA', NULL, NULL, NULL),
(72, 'SULAWESI TENGAH', NULL, NULL, NULL),
(73, 'SULAWESI SELATAN', NULL, NULL, NULL),
(74, 'SULAWESI TENGGARA', NULL, NULL, NULL),
(75, 'GORONTALO', NULL, NULL, NULL),
(76, 'SULAWESI BARAT', NULL, NULL, NULL),
(81, 'MALUKU', NULL, NULL, NULL),
(82, 'MALUKU UTARA', NULL, NULL, NULL),
(91, 'PAPUA BARAT', NULL, NULL, NULL),
(94, 'PAPUA', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2021-08-05 04:52:51', '$2y$10$LGlTV8DpFLrDxLMg1jw5B.uA69uysBdF6JyzOuxk4uhrwFy6ismci', 'admin', NULL, '2021-08-05 04:52:51', NULL),
(2, 'User123', 'user@gmail.com', '2021-08-05 04:52:51', '$2y$10$VC6/igaQz.3qUbrcj.j2/.7WQK2NMR.CzwdCnzOOZNzRyvTZqjKCO', 'user', NULL, '2021-08-05 04:52:51', '2021-08-05 04:54:45'),
(3, 'Bambang', 'bambang@gmail.com', NULL, '$2y$10$HwmOxuTXz8.am3cdMa5k1u2Z0wO.ydsMlFtoIDpWWbpHtbGZdAcSa', 'user', NULL, '2021-08-05 11:07:48', '2021-08-05 11:07:48'),
(4, 'alingga', 'alinggadaruliman@gmail.com', NULL, '$2y$10$ORgSD3tudlOK5sxjtW/P5eE/3LFps2NbilI0DHVZgv6lWdctyP4b2', 'user', NULL, '2021-08-07 01:07:13', '2021-08-07 01:07:13'),
(5, 'Mariana Ulfa S', 'mariana@gmail.com', NULL, '$2y$10$OfAHOvcL5I6.oL/QW2L37eki2yX8u2lqYVwkUfkT3h8HUxxUadvqu', 'user', NULL, '2021-08-08 01:19:32', '2021-08-08 01:19:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datawargas`
--
ALTER TABLE `datawargas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `datawargas_nik_unique` (`nik`),
  ADD KEY `datawargas_user_id_foreign` (`user_id`),
  ADD KEY `datawargas_kelurahan_id_foreign` (`kelurahan_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelurahans`
--
ALTER TABLE `kelurahans`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prestasis_datawarga_id_foreign` (`datawarga_id`),
  ADD KEY `prestasis_kategori_id_foreign` (`kategori_id`);

--
-- Indeks untuk tabel `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datawargas`
--
ALTER TABLE `datawargas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelurahans`
--
ALTER TABLE `kelurahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `datawargas`
--
ALTER TABLE `datawargas`
  ADD CONSTRAINT `datawargas_kelurahan_id_foreign` FOREIGN KEY (`kelurahan_id`) REFERENCES `kelurahans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datawargas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `prestasis`
--
ALTER TABLE `prestasis`
  ADD CONSTRAINT `prestasis_datawarga_id_foreign` FOREIGN KEY (`datawarga_id`) REFERENCES `datawargas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestasis_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
