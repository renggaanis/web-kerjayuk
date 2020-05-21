-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 02:31 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_category` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Informatika', NULL, NULL),
(2, 'Sipil', NULL, NULL),
(3, 'Desain', NULL, NULL),
(5, 'Kesehatan', NULL, NULL),
(6, 'Hukum', NULL, NULL),
(7, 'Manajemen', NULL, NULL),
(8, 'Akuntansi', NULL, NULL),
(9, 'Elektronika', NULL, NULL),
(10, 'Industri', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id_company` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` int(11) NOT NULL,
  `id` int(100) DEFAULT NULL,
  `id_category` int(100) DEFAULT NULL,
  `id_kabupaten` int(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id_company`, `name`, `fax`, `id`, `id_category`, `id_kabupaten`, `created_at`, `updated_at`) VALUES
(9, 'PT. Harda Esa Raksa', 12345, 39, 7, 4, '2020-05-13 00:03:19', '2020-05-13 00:03:19'),
(11, 'PT. Multi Spunindo Jaya', 12345, 40, 10, 6, '2020-05-18 06:31:51', '2020-05-18 06:31:51'),
(12, 'PT Siantar Top Tbk', 12345, 72, 10, 6, '2020-05-18 06:37:30', '2020-05-18 06:37:30'),
(13, 'PT Mitra Pinasthika Mulia', 12345, 73, 10, 4, '2020-05-18 06:58:00', '2020-05-18 06:58:00'),
(14, 'Swakarya Insan Mandiri PT', 12345, 74, 7, 4, '2020-05-18 06:59:07', '2020-05-18 06:59:07'),
(15, 'PT. Supresso Global Indonesia', 12345, 75, 3, 4, '2020-05-18 07:00:19', '2020-05-18 07:00:19'),
(16, 'PT. Steel Pipe Industry of Indonesia Tbk', 12345, 76, 10, 6, '2020-05-18 07:01:36', '2020-05-18 07:01:36'),
(17, 'PT Bumi Indo Mapan', 12345, 77, 10, 4, '2020-05-18 07:02:34', '2020-05-18 07:02:34'),
(18, 'PT Equityworld', 12345, 78, 8, 4, '2020-05-18 07:03:50', '2020-05-18 07:03:50'),
(19, 'PT. Sinar Waringin Adikarya', 12345, 79, 2, 4, '2020-05-18 07:04:57', '2020-05-18 07:04:57'),
(20, 'PT. Avila Prima Intra Makmur', 12345, 80, 2, 4, '2020-05-18 07:05:45', '2020-05-18 07:05:45'),
(21, 'PT. Nugroho Lestari', 12345, 81, 2, 4, '2020-05-18 07:07:48', '2020-05-18 07:07:48'),
(22, 'PJM Group', 12345, 86, 2, 4, '2020-05-18 07:08:42', '2020-05-18 07:08:42'),
(23, 'PT Fuboru Indonesia', 12345, 71, 10, 4, '2020-05-19 00:17:56', '2020-05-19 00:17:56'),
(24, 'PT. Surya Timur Sakti Jatim', 12345, 90, 7, 4, '2020-05-19 20:38:44', '2020-05-19 20:38:44'),
(25, 'PT. Mitracitra Mandirioffset', 12345, 91, 10, 6, '2020-05-19 20:39:49', '2020-05-19 20:39:49'),
(26, 'PT. Sofco Graha', 12345, 92, 10, 6, '2020-05-19 20:43:39', '2020-05-19 20:43:39'),
(27, 'PT Exa Mitra Solusi', 12345, 93, 7, 4, '2020-05-19 20:44:44', '2020-05-19 20:44:44'),
(28, 'PT. Asahimas Flat Glass', 12345, 95, 10, 4, '2020-05-19 20:46:25', '2020-05-19 20:46:25'),
(29, 'PT Sukses Amindo', 12345, 98, 7, 4, '2020-05-20 15:04:56', '2020-05-20 15:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id_exp` int(10) UNSIGNED NOT NULL,
  `pengalaman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id_exp`, `pengalaman`, `created_at`, `updated_at`) VALUES
(1, '1 tahun', NULL, NULL),
(2, '2 tahun', NULL, NULL),
(3, '3 tahun', NULL, NULL),
(4, '4 tahun', NULL, NULL),
(5, '5 tahun', NULL, NULL),
(6, '6 tahun', NULL, NULL),
(7, '7 tahun', NULL, NULL),
(8, '8 tahun', NULL, NULL),
(9, 'Fresh Graduate', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `gajis`
--

CREATE TABLE `gajis` (
  `id_gaji` int(10) UNSIGNED NOT NULL,
  `gaji` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gajis`
--

INSERT INTO `gajis` (`id_gaji`, `gaji`, `created_at`, `updated_at`) VALUES
(1, '2.000.000', NULL, NULL),
(2, '3.000.000 \r\n', NULL, NULL),
(3, '4.000.0000', NULL, NULL),
(4, '5.000.0000', NULL, NULL),
(5, '6.000.0000', NULL, NULL),
(6, '7.000.000', NULL, NULL),
(7, '8.000.000', NULL, NULL),
(8, 'Dirahasiakan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kabupatens`
--

CREATE TABLE `kabupatens` (
  `id_kabupaten` int(10) UNSIGNED NOT NULL,
  `kabupaten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabupatens`
--

INSERT INTO `kabupatens` (`id_kabupaten`, `kabupaten`, `id_provinsi`, `created_at`, `updated_at`) VALUES
(1, 'Kediri', 1, NULL, NULL),
(2, 'Gresik', 1, NULL, NULL),
(3, 'Lamongan', 1, NULL, NULL),
(4, 'Surabaya', 1, NULL, NULL),
(6, 'Sidoarjo', 1, '2020-05-05 22:00:18', '2020-05-05 22:00:18'),
(7, 'Pasuruan', 1, NULL, NULL),
(8, 'Mojokerto', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `komps`
--

CREATE TABLE `komps` (
  `id_komp` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komps`
--

INSERT INTO `komps` (`id_komp`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Programmer', NULL, NULL),
(2, 'Analis IT', NULL, NULL),
(3, 'Konsultan IT', NULL, NULL),
(4, 'Network Engineer', NULL, NULL),
(5, 'Negosiator', NULL, NULL),
(6, 'Desainer Grafis', NULL, NULL),
(7, 'Marketing', NULL, NULL),
(8, 'Administrator', NULL, NULL),
(9, 'Akuntansi', NULL, NULL),
(10, 'Auditor', NULL, NULL),
(11, 'Manajer', NULL, NULL),
(12, 'Staff Konsultan', NULL, NULL),
(13, 'Kemampuan Program Autocad', NULL, NULL),
(14, 'Kemampuan Sistem Operasi', NULL, NULL),
(15, 'Technical Support', NULL, NULL),
(16, 'Konsultan Bisnis', NULL, NULL),
(17, 'Menguasai aplikasi MS. Office', NULL, NULL),
(18, 'Menguasai pembuatan PPJB, AJB, kontrak drafting, dan akta', NULL, NULL),
(19, 'Psikologi', NULL, NULL),
(20, 'Menguasai MIS (Management Information System)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lamarans`
--

CREATE TABLE `lamarans` (
  `id_lamaran` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL,
  `id_loker` int(100) DEFAULT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_exp` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `id_komp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lamarans`
--

INSERT INTO `lamarans` (`id_lamaran`, `name`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `foto`, `jurusan`, `alamat`, `telepon`, `id`, `id_loker`, `posisi`, `id_exp`, `id_kabupaten`, `id_category`, `id_pendidikan`, `id_komp`, `created_at`, `updated_at`) VALUES
(3, 'Dimas Amiruddin', 'Laki - Laki', 'Surabaya', '1998-03-12', 'Islam', 'public/ulpoad/user/15896968291573522460999-백경.jpg', 'S1 Teknik Sipil', 'Nginden, Surabaya', '081234567876', 86, 36, 'Teknisi', 9, 4, 2, 4, 13, '2020-05-16 23:27:09', '2020-05-16 23:27:09'),
(4, 'Dimas Amiruddin', 'Laki - Laki', 'Surabaya', '1998-03-12', 'Islam', 'public/ulpoad/user/15897051051573522460999-백경.jpg', 'S1 Teknik Sipil', 'Nginden, Surabaya', '081234567876', 86, 36, 'Arsitek', 9, 4, 2, 4, 13, '2020-05-17 01:45:05', '2020-05-17 01:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `lokers`
--

CREATE TABLE `lokers` (
  `id_loker` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) UNSIGNED DEFAULT NULL,
  `id_exp` int(11) DEFAULT NULL,
  `id_kabupaten` int(11) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `id_pendidikan` int(11) DEFAULT NULL,
  `id_sistem` int(11) DEFAULT NULL,
  `id_gaji` int(11) DEFAULT NULL,
  `id_komp` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokers`
--

INSERT INTO `lokers` (`id_loker`, `judul`, `content`, `gambar`, `id`, `id_exp`, `id_kabupaten`, `id_category`, `id_pendidikan`, `id_sistem`, `id_gaji`, `id_komp`, `created_at`, `updated_at`) VALUES
(3, 'PT Multi Spunindo Jaya', 'Dibutuhkan segera Teknisi Elektrik', 'public/ulpoad/post/1589288036download (5).jpg', 40, 1, 6, 9, 4, 2, 4, 15, '2020-05-12 05:53:56', '2020-05-12 05:53:56'),
(5, 'PT Multi Spunindo Jaya (Marketing)', 'Dibutuhkan segera staff pemasaran', 'public/ulpoad/post/1589291248download (5).jpg', 40, 1, 6, 7, 4, 2, 3, 7, '2020-05-12 06:47:28', '2020-05-12 06:47:28'),
(6, 'PT Multi Spunindo Jaya (Mekanik)', 'Dibutuhkan segera staff mekanik elektro', 'public/ulpoad/post/1589291378download (5).jpg', 40, 9, 6, 9, 2, 2, 3, 15, '2020-05-12 06:49:38', '2020-05-12 06:49:38'),
(7, 'PT Fuboru Indonesia', 'Dibutuhkan segera staff akunting', 'public/ulpoad/post/1589291443unnamed.jpg', 71, 3, 6, 8, 4, 2, 4, 9, '2020-05-12 06:50:43', '2020-05-12 06:50:43'),
(8, 'PT Siantar Top Tbk', 'Dibutuhkan segera psikolog', 'public/ulpoad/post/1589291736siantar-top.png', 72, 1, 6, 7, 4, 2, 5, 19, '2020-05-12 06:55:36', '2020-05-12 06:55:36'),
(9, 'PT Siantar Top Tbk (SDM)', 'Dibutuhkan segera staff SDM', 'public/ulpoad/post/1589292011siantar-top.png', 72, 1, 6, 7, 4, 2, 3, 11, '2020-05-12 07:00:11', '2020-05-12 07:00:11'),
(10, 'PT Siantar Top Tbk (Personalia)', 'Dibutuhkan segera staff personalia', 'public/ulpoad/post/1589292083siantar-top.png', 72, 9, 6, 7, 4, 2, 3, 11, '2020-05-12 07:01:23', '2020-05-12 07:01:23'),
(11, 'PT Siantar Top Tbk (Elktronika)', 'Dibutuhkan segera staff selektrik', 'public/ulpoad/post/1589292219siantar-top.png', 72, 9, 6, 9, 4, 2, 4, 15, '2020-05-12 07:03:40', '2020-05-12 07:03:40'),
(12, 'PT Fuboru Indonesia (Hukum)', 'Dibutuhkan staff hukum', 'public/ulpoad/post/1589292313unnamed.jpg', 71, 1, 6, 6, 4, 2, 4, 17, '2020-05-12 07:05:13', '2020-05-12 07:05:13'),
(13, 'PT Fuboru Indonesia', 'Dibutuhkan segera desainer grafis', 'public/ulpoad/post/1589292588unnamed.jpg', 71, 2, 6, 3, 4, 2, 4, 6, '2020-05-12 07:09:48', '2020-05-12 07:09:48'),
(14, 'PT Mitra Pinastika Mulia', '<p>Dibutuhkan segera staff administrasi</p>', 'public/ulpoad/post/1589292661timthumb.jpg', 73, 1, 6, 7, 4, 2, 4, 8, '2020-05-12 07:11:01', '2020-05-12 07:11:01'),
(15, 'PT Fuboru Indonesia', '<p>Dibutuhkan segera apoteker</p>', 'public/ulpoad/post/1589292761unnamed.jpg', 71, 3, 6, 5, 4, 2, 4, 17, '2020-05-12 07:12:41', '2020-05-12 07:12:41'),
(16, '31.	PT Swakarya Insan Mandiri (Marketing)', '<p>Dibutuhkan segera staff pemasaran</p>', 'public/upload/post/1589547170PT. Swakarya Insan Mandiri.jpg', 74, 9, 2, 7, 2, 2, 3, 7, '2020-05-12 07:14:28', '2020-05-12 07:14:28'),
(17, 'PT Supresso Global Indonesia', '<p>Dibutuhkan segera staff pemasaran</p>', 'public/ulpoad/post/1589292995PT. Swakarya Insan Mandiri.jpg', 75, 1, 6, 7, 2, 2, 3, 7, '2020-05-12 07:16:35', '2020-05-12 07:16:35'),
(18, 'PT Supresso Global Indonesia', '<p>Dibutuhkan segera staff elektrik</p>', 'public/ulpoad/post/1589293399WhatsApp_Image_2019-06-13_at_13.40.35.jpeg', 75, 1, 2, 9, 4, 2, 4, 15, '2020-05-12 07:23:19', '2020-05-12 07:23:19'),
(19, 'PT Steel Pipe Industry of Indonesia Tbk', '<p>Dibutuhkan staff pemasaran</p>', 'public/ulpoad/post/1589293779spindo.jpg', 76, 4, 4, 7, 4, 2, 4, 7, '2020-05-12 07:29:40', '2020-05-12 07:29:40'),
(20, 'PT Mitra Pinastika Mulia (Marketing)', '<p>Dibutuhkan segera staff pemasaran</p>', 'public/ulpoad/post/1589293853timthumb.jpg', 73, 3, 4, 7, 4, 2, 4, 7, '2020-05-12 07:30:53', '2020-05-12 07:30:53'),
(21, 'PT Bumi Indo Mapan', '<p>Dibutuhkan segera staff hukum</p>', 'public/ulpoad/post/1589293966download.jpg', 77, 4, 4, 6, 4, 2, 5, 18, '2020-05-12 07:32:47', '2020-05-12 07:32:47'),
(22, 'PT Bumi Indo Mapan', '<p>Dibutuhkan segera programmer</p>', 'public/ulpoad/post/1589294045download.jpg', 77, 1, 4, 1, 4, 2, 4, 1, '2020-05-12 07:34:05', '2020-05-12 07:34:05'),
(23, 'PT Bumi Indo Mapan (Desain)', '<p>Dibutuhkan segera desainer grafis</p>', 'public/ulpoad/post/1589294124download.jpg', 77, 9, 4, 3, 4, 2, 2, 6, '2020-05-12 07:35:24', '2020-05-12 07:35:24'),
(24, 'PT Siantar Top Tbk (Manajer)', '<p>Dibutuhkan segera manajer produk</p>', 'public/ulpoad/post/1589294220siantar-top.png', 72, 1, 4, 7, 4, 2, 5, 11, '2020-05-12 07:37:00', '2020-05-12 07:37:00'),
(25, 'PT Bumi Indo Mapan (IT Project Manager)', '<p>Dibutuhkan segera IT project manager</p>', 'public/ulpoad/post/1589294305download.jpg', 77, 3, 4, 1, 4, 2, 4, 4, '2020-05-12 07:38:25', '2020-05-12 07:38:25'),
(26, 'PT Equityworld', '<p>Dibutuhkan segera staff bussines consultant</p>', 'public/ulpoad/post/1589294397eq.jpg', 78, 9, 4, 7, 4, 2, 4, 16, '2020-05-12 07:39:57', '2020-05-12 07:39:57'),
(27, 'PT Bumi Indo Mapan (Admin)', '<p>Dibutuhkan segera staff admin</p>', 'public/ulpoad/post/1589294461download.jpg', 77, 1, 4, 7, 4, 2, 3, 8, '2020-05-12 07:41:01', '2020-05-12 07:41:01'),
(29, 'PT. Sinar Waringin AdiKarya', '<p>Dibutuhkan segera staff estimator&nbsp;</p>\r\n\r\n<p><strong>Job Desc :</strong></p>\r\n\r\n<ul>\r\n	<li>Mengikuti Aanwijzing proyek yang akan ditenderkan</li>\r\n	<li>Melakukan peninjauan lapangan</li>\r\n	<li>Meneliti dokumen tender proyek yang akan dihitung</li>\r\n	<li>Melakukan perhitungan volume dan analisa harga satuan</li>\r\n	<li>Menyusun RAB (rencana anggaran biaya)</li>\r\n	<li>Merencanakan waktu pelaksanaan proyek (time schedule)</li>\r\n	<li>Melengkapi administrasi tender dan membuat dokumen penawaran</li>\r\n	<li>Melakukan evaluasi kegagalan terhadap tender yang kalah</li>\r\n	<li>Menghitung RAP sebagai patokan koordinator project untuk pelaksanaan di lapangan</li>\r\n	<li>Melakukan survei harga material dan upah kerja untuk masing-masing lokasi rencana proyek</li>\r\n	<li>Memonitor dan melakukan update harga apabila terjadi perubahan harga</li>\r\n</ul>', 'public/ulpoad/post/1589294979download (1).jpg', 79, 1, 4, 2, 4, 2, 4, 13, '2020-05-12 07:49:39', '2020-05-12 07:49:39'),
(30, 'PT. Avila Prima Intra Makmur', '<p>Dibutuhkan segera quantity surveyor</p>', 'public/ulpoad/post/1589295062logo.jpg', 80, 1, 4, 2, 4, 2, 4, 13, '2020-05-12 07:51:02', '2020-05-12 07:51:02'),
(31, 'Harda Esa Raksa PT', '<p>Dibutuhkan segera staff teknik sipil</p>', 'public/ulpoad/post/1589295891images.png', 39, 1, 4, 2, 4, 2, 4, 13, '2020-05-12 08:04:51', '2020-05-12 08:04:51'),
(32, 'Harda Esa Raksa PT (Arsitek / Project SPV)', '<p>Dbutuhkan segera arsitek/spv project&nbsp;</p>\r\n\r\n<p>Job desc</p>\r\n\r\n<p>1. Mengkoordinir seluruh aktifitas engineer dalam proyek termasuk dalam mencari bahan material maupun tenaga kerja<br />\r\n2. Menentukan jenis dan letak sistem struktur pada bangunan<br />\r\n3. Mampu menghitung biaya konstruksi sebuah bangunan.<br />\r\n4. Menentukan jenis dan material bangunan yang dibutuhkan.</p>', 'public/ulpoad/post/1589334884images.png', 39, 2, 4, 2, 4, 2, 5, 13, '2020-05-12 18:54:44', '2020-05-12 18:54:44'),
(34, 'PT. Nugroho Lestari ', '<p>Dibutuhkan segera pelaksana proyek</p>', 'public/ulpoad/post/1589345699nugroho_lestari_pt.png', 81, 2, 4, 2, 4, 2, 4, 13, '2020-05-12 21:54:59', '2020-05-12 21:54:59'),
(35, 'PT. Sinar Waringin AdiKarya ', '<p>Dibutuhkan segera&nbsp;Site Engineer</p>', 'public/ulpoad/post/1589345961download (1).jpg', 79, 1, 4, 2, 4, 2, 3, 13, '2020-05-12 21:59:21', '2020-05-12 21:59:21'),
(36, 'PT. Sinar Waringin AdiKarya ', '<p>Dibutuhkan segera&nbsp;Cost Control</p>', 'public/ulpoad/post/1589346083download (1).jpg', 79, 9, 4, 2, 4, 2, 3, 17, '2020-05-12 22:01:23', '2020-05-12 22:01:23'),
(37, 'PT Siantar Top Tbk (STAFF ESTIMATOR)', '<p>Dibutuhkan segera staff estimator</p>', 'public/ulpoad/post/1589346199siantar-top.png', 72, 1, 4, 2, 4, 2, 3, 13, '2020-05-12 22:03:19', '2020-05-12 22:03:19'),
(38, 'PJM Group', '<p>Dibutuhkan segera&nbsp;Engineering Staff</p>', 'public/ulpoad/post/15893464210.png', 82, 1, 4, 2, 4, 2, 4, 13, '2020-05-12 22:07:01', '2020-05-12 22:07:01'),
(39, 'Nugroho Lestari PT (Quality Engineering )', '<p>Dibutuhkan segera quality engineering</p>', 'public/ulpoad/post/1589349054nugroho_lestari_pt.png', 81, 1, 4, 2, 4, 2, 4, 13, '2020-05-12 22:50:54', '2020-05-12 22:50:54'),
(40, 'Harda Esa Raksa PT (Manager Operasional)', '<p>Dibutuhkan segera Manager Operasional</p>', 'public/ulpoad/post/1589349185images.png', 39, 1, 4, 2, 4, 2, 4, 13, '2020-05-12 22:53:05', '2020-05-12 22:53:05'),
(41, 'PT. Surya Timur Sakti Jatim', '<p>Dibutuhkan segera staff IT</p>\r\n\r\n<p>&nbsp;</p>', 'public/ulpoad/post/1589504886surya_timur_sakti_jatim_pt_fb.png', 90, 1, 4, 1, 4, 2, 3, 1, '2020-05-14 18:08:06', '2020-05-14 18:08:06'),
(42, 'PT. Mitracitra Mandirioffset', '<p>Dibutuhkan segera staff IT</p>', 'public/ulpoad/post/1589505103mandiri_citra.jpg', 91, 1, 6, 1, 4, 2, 3, 20, '2020-05-14 18:11:43', '2020-05-14 18:11:43'),
(43, 'Harda Esa Raksa PT  (IT Specialist)', '<p>Dibutuhkan segera&nbsp;IT Specialist</p>', 'public/ulpoad/post/1589505201images.png', 39, 1, 4, 1, 4, 2, 7, 1, '2020-05-14 18:13:21', '2020-05-14 18:13:21'),
(44, 'PT. Sofco Graha', '<p>Dibutuhkan segera junior programmer</p>', 'public/ulpoad/post/15895053619d9a995c-d995-4059-a35c-55ee303bf391.png', 92, 1, 4, 1, 4, 2, 6, 1, '2020-05-14 18:16:01', '2020-05-14 18:16:01'),
(45, 'PT Exa Mitra Solusi', '<p>Dibutuhkan segera staff IT</p>', 'public/ulpoad/post/15895055480h0_jjU7cFb3BXE0MmtU8QJ21FbB9kf3xzMyU-bgd9MUQqIShyPHRzFHZBM0J9cSguOSAnFXETdEF8JHwmbyJz.jpg', 93, 1, 4, 1, 4, 2, 5, 1, '2020-05-14 18:19:09', '2020-05-14 18:19:09'),
(46, 'Harda Esa Raksa PT  (Web Developer)', '<p>Dibutuhkan segera&nbsp;Web Developer</p>', 'public/ulpoad/post/1589506134images.png', 39, 9, 4, 1, 4, 2, 3, 1, '2020-05-14 18:28:54', '2020-05-14 18:28:54'),
(47, 'PT Panca Kusuma Raya', '<p>Dibutuhkan segera&nbsp;Customer Support</p>', 'public/ulpoad/post/1589506426cty0VikeCoINSCX7cN2HvgHb6FS7P7AKEIIqYW6P.jpeg', 94, 1, 3, 10, 4, 2, 4, 17, '2020-05-14 18:33:46', '2020-05-14 18:33:46'),
(48, 'PT Multi Spunindo Jaya (Quality Engineer)', '<p>Dibutuhkan segera&nbsp;Quality Engineer</p>', 'public/ulpoad/post/1589506583download (5).jpg', 40, 2, 6, 10, 4, 2, 4, 15, '2020-05-14 18:36:23', '2020-05-14 18:36:23'),
(49, 'PT. Asahimas Flat Glass', '<p>Dibutuhkan segera&nbsp;MANAGEMENT TRAINEE CHEMICAL ENGINEER</p>', 'public/ulpoad/post/1589506731BZJAPP2SZYLV7LQMWKMQ-598d540a.png', 95, 2, 6, 10, 4, 2, 6, 15, '2020-05-14 18:38:51', '2020-05-14 18:38:51'),
(50, 'PT Sukses Amindo', '<p>Dibutuhkan segera Customer Service</p>', 'public/ulpoad/post/1590012468qwertyu.jpg', 98, 1, 4, 7, 2, 2, 3, 17, '2020-05-20 15:07:48', '2020-05-20 15:07:48'),
(51, 'PT Supresso Global', '<p>Dibutuhkan segera&nbsp;Management Trainee</p>', 'public/ulpoad/post/1590012801WhatsApp_Image_2019-06-13_at_13.40.35.jpeg', 75, 1, 4, 7, 4, 2, 3, 11, '2020-05-20 15:13:21', '2020-05-20 15:13:21'),
(52, 'PT Supresso Global Indonesia', '<p>Dibutuhkan segera Customer Service</p>', 'public/ulpoad/post/1590012913WhatsApp_Image_2019-06-13_at_13.40.35.jpeg', 75, 1, 4, 7, 4, 2, 4, 17, '2020-05-20 15:15:13', '2020-05-20 15:15:13'),
(53, 'PT Supresso Global Indonesia', '<p>Dibutuhkan segera teknisi</p>', 'public/ulpoad/post/1590012961WhatsApp_Image_2019-06-13_at_13.40.35.jpeg', 75, 9, 4, 10, 4, 2, 4, 15, '2020-05-20 15:16:01', '2020-05-20 15:16:01'),
(54, 'PT Supresso Global Indonesia', '<p>Dibutuhkan segera konsultan bisnis</p>', 'public/ulpoad/post/1590013116WhatsApp_Image_2019-06-13_at_13.40.35.jpeg', 75, 1, 4, 7, 4, 2, 4, 16, '2020-05-20 15:18:36', '2020-05-20 15:18:36'),
(55, 'PT Supresso Global Indonesia', '<p>Dibutuhkan segera staff legal</p>', 'public/ulpoad/post/1590013178WhatsApp_Image_2019-06-13_at_13.40.35.jpeg', 75, 1, 4, 6, 4, 2, 4, 18, '2020-05-20 15:19:38', '2020-05-20 15:19:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2020_04_26_015938_create_gambars_table', 3),
(5, '2020_04_27_105417_create_admin_table', 4),
(6, '2020_04_27_133709_create_company_table', 5),
(7, '2020_04_30_044225_create_posts_table', 6),
(8, '2020_04_30_093536_create_categories_table', 7),
(9, '2020_05_01_042136_create_categories_table', 8),
(10, '2020_05_01_125945_create_posts_table', 9),
(11, '2020_05_02_140825_tambah_field_user_post', 10),
(12, '2020_05_05_013434_create_pencari_kerjas_table', 11),
(13, '2020_05_05_014300_create_bidangs_table', 12),
(14, '2020_05_05_014932_create_provinsis_table', 13),
(15, '2020_05_05_015058_create_kabupatens_table', 14),
(16, '2020_05_05_015840_create_companies_table', 15),
(17, '2020_05_05_020436_create_kompetensis_table', 16),
(18, '2020_05_05_133613_create_gajis_table', 17),
(19, '2020_05_05_133635_create_pendidikans_table', 17),
(20, '2020_05_05_133658_create_penempatans_table', 17),
(21, '2020_05_05_133717_create_sistems_table', 17),
(22, '2020_05_07_035056_create_experiences_table', 18),
(23, '2020_05_07_112940_create_tags_table', 19),
(24, '2020_05_07_113648_create_post_tag_table', 20),
(25, '2020_05_09_035319_create_roles_table', 21),
(26, '2020_05_09_083108_create_komps_table', 22),
(27, '2020_05_10_023205_create_comps_table', 23),
(28, '2020_05_12_112631_create_lokers_table', 24),
(29, '2020_05_16_100938_create_lamarans_table', 25),
(30, '2020_05_16_142109_create_lamarans_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pencari_kerjas`
--

CREATE TABLE `pencari_kerjas` (
  `id_pencari` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(100) DEFAULT NULL,
  `id_komp` int(100) DEFAULT NULL,
  `id_exp` int(100) DEFAULT NULL,
  `id_category` int(100) DEFAULT NULL,
  `id_kabupaten` int(100) DEFAULT NULL,
  `id_pendidikan` int(100) DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pencari_kerjas`
--

INSERT INTO `pencari_kerjas` (`id_pencari`, `fname`, `lname`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `id`, `id_komp`, `id_exp`, `id_category`, `id_kabupaten`, `id_pendidikan`, `foto`, `created_at`, `updated_at`) VALUES
(19, 'Diah', 'Leni', 'Perempuan', 'Kediri', '1999-06-27', 'Islam', 36, 1, 9, 1, 4, 4, 'public/upload/user/1589351853download.jpg', '2020-05-12 02:59:20', '2020-05-12 02:59:20'),
(21, 'Muhammad', 'Khadafi', 'Laki - Laki', 'Lamongan', '1996-05-14', 'Islam', 41, 13, 1, 2, 4, 4, 'public/ulpoad/user/15894249331573522460999-백경.jpg', '2020-05-13 19:55:33', '2020-05-13 19:55:33'),
(22, 'Agung', 'Wahyu', 'Laki - Laki', 'Gresik', '1997-05-29', 'Islam', 42, 15, 1, 9, 4, 2, 'public/ulpoad/user/15894250591573522460999-백경.jpg', '2020-05-13 19:57:39', '2020-05-13 19:57:39'),
(23, 'Muhammad', 'Hilman', 'Laki - Laki', 'Kediri', '1997-02-01', 'Islam', 43, 13, 1, 2, 4, 4, 'public/ulpoad/user/15894252961573522466961-하루.jpg', '2020-05-13 20:01:36', '2020-05-13 20:01:36'),
(24, 'Gandi', 'Andrianto', 'Laki - Laki', 'Gresik', '1996-03-02', 'Islam', 44, 7, 9, 7, 7, 2, 'public/ulpoad/user/15894254731573522460999-백경.jpg', '2020-05-13 20:04:33', '2020-05-13 20:04:33'),
(25, 'Muhammad', 'Dewangga', 'Laki - Laki', 'Surabaya', '1997-01-29', 'Islam', 45, 13, 1, 2, 4, 4, 'public/ulpoad/user/15894255621573522466961-하루.jpg', '2020-05-13 20:06:02', '2020-05-13 20:06:02'),
(26, 'April', 'Arianti', 'Perempuan', 'Gresik', '1997-02-14', 'Islam', 46, 1, 1, 1, 4, 4, 'public/ulpoad/user/15894258171573522414900-단오.jpg', '2020-05-13 20:10:17', '2020-05-13 20:10:17'),
(27, 'Regita', 'Fitriani', 'Perempuan', 'Lamongan', '1997-08-07', 'Islam', 47, 18, 1, 6, 4, 4, 'public/ulpoad/user/15894260711573522414900-단오.jpg', '2020-05-13 20:14:31', '2020-05-13 20:14:31'),
(28, 'Aditya', 'Nugroho', 'Laki - Laki', 'Madiun', '1996-07-19', 'Islam', 48, 1, 1, 1, 4, 4, 'public/ulpoad/user/15894265451573522460999-백경.jpg', '2020-05-13 20:22:25', '2020-05-13 20:22:25'),
(29, 'Ajeng', 'Indriani', 'Perempuan', 'Kediri', '1997-07-12', 'Islam', 49, 17, 1, 7, 6, 4, 'public/ulpoad/user/15894268091573522414900-단오.jpg', '2020-05-13 20:26:49', '2020-05-13 20:26:49'),
(30, 'Rianti', 'Halim', 'Perempuan', 'Lamongan', '1997-06-25', 'Islam', 50, 19, 1, 7, 6, 4, 'public/ulpoad/user/15894270181573522414900-단오.jpg', '2020-05-13 20:30:18', '2020-05-13 20:30:18'),
(31, 'Marisa', 'Aprilia', 'Perempuan', 'Surabaya', '1997-05-18', 'Islam', 51, 15, 9, 9, 6, 2, 'public/ulpoad/user/15894271451573522414900-단오.jpg', '2020-05-13 20:32:25', '2020-05-13 20:32:25'),
(32, 'Galih', 'Fernanda', 'Laki - Laki', 'Surabaya', '1996-10-06', 'Islam', 52, 13, 1, 2, 4, 4, 'public/ulpoad/user/15894272411573522466961-하루.jpg', '2020-05-13 20:34:01', '2020-05-13 20:34:01'),
(33, 'Donni', 'Febrianto', 'Laki - Laki', 'Surabaya', '1997-03-20', 'Islam', 53, 11, 1, 7, 4, 4, 'public/ulpoad/user/15894415741573522460999-백경.jpg', '2020-05-14 00:32:55', '2020-05-14 00:32:55'),
(34, 'Abiyan', 'Fazaa', 'Laki - Laki', 'Lamongan', '1996-04-12', 'Islam', 54, 6, 2, 3, 6, 4, 'public/ulpoad/user/15894417371573522466961-하루.jpg', '2020-05-14 00:35:37', '2020-05-14 00:35:37'),
(35, 'Indri', 'Alfianti', 'Perempuan', 'Surabaya', '1997-09-23', 'Islam', 55, 7, 1, 7, 4, 2, 'public/ulpoad/user/15894419231573522414900-단오.jpg', '2020-05-14 00:38:43', '2020-05-14 00:38:43'),
(36, 'Muhammad', 'Naufal', 'Laki - Laki', 'Surabaya', '1994-07-25', 'Islam', 56, 17, 3, 5, 6, 4, 'public/ulpoad/user/15894420781573522460999-백경.jpg', '2020-05-14 00:41:18', '2020-05-14 00:41:18'),
(37, 'Satria', 'Pratama', 'Laki - Laki', 'Surabaya', '1997-02-12', 'Islam', 57, 7, 1, 7, 4, 2, 'public/ulpoad/user/15894422091573522460999-백경.jpg', '2020-05-14 00:43:29', '2020-05-14 00:43:29'),
(38, 'Arifin', 'Alfiandra', 'Laki - Laki', 'Gresik', '1997-07-12', 'Islam', 58, 6, 2, 3, 2, 4, 'public/ulpoad/user/15894423261573522466961-하루.jpg', '2020-05-14 00:45:26', '2020-05-14 00:45:26'),
(39, 'Gazza', 'Cahyadi', 'Laki - Laki', 'Surabaya', '1997-02-17', 'Islam', 59, 13, 1, 2, 4, 4, 'public/ulpoad/user/15894424081573522466961-하루.jpg', '2020-05-14 00:46:48', '2020-05-14 00:46:48'),
(40, 'Muhammad', 'Hafidz', 'Laki - Laki', 'Surabaya', '1999-09-18', 'Islam', 60, 16, 9, 7, 4, 4, 'public/ulpoad/user/15894427681573522460999-백경.jpg', '2020-05-14 00:52:48', '2020-05-14 00:52:48'),
(41, 'Fahri', 'Ardiansyah', 'Laki - Laki', 'Gresik', '1997-06-19', 'Islam', 61, 15, 1, 9, 2, 4, 'public/ulpoad/user/15894429111573522466961-하루.jpg', '2020-05-14 00:55:11', '2020-05-14 00:55:11'),
(42, 'Akbar', 'Wirawan', 'Laki - Laki', 'Ngawi', '1996-07-24', 'Islam', 62, 15, 1, 9, 4, 4, 'public/ulpoad/user/15894430091573522460999-백경.jpg', '2020-05-14 00:56:49', '2020-05-14 00:56:49'),
(43, 'Muhammad', 'Arkan', 'Laki - Laki', 'Kediri', '1996-04-13', 'Islam', 63, 13, 1, 2, 4, 4, 'public/ulpoad/user/15894431061573522466961-하루.jpg', '2020-05-14 00:58:26', '2020-05-14 00:58:26'),
(44, 'Silfi', 'Ramadhani', 'Perempuan', 'Lamongan', '1997-04-18', 'Islam', 64, 13, 2, 2, 4, 4, 'public/ulpoad/user/15894432301573522414900-단오.jpg', '2020-05-14 01:00:31', '2020-05-14 01:00:31'),
(45, 'Wulan', 'Almira', 'Perempuan', 'Lamongan', '1997-11-22', 'Islam', 65, 13, 1, 2, 4, 4, 'public/ulpoad/user/15894433201573522414900-단오.jpg', '2020-05-14 01:02:00', '2020-05-14 01:02:00'),
(46, 'Diana', 'Arisanti', 'Perempuan', 'Surabaya', '1997-05-22', 'Islam', 66, 13, 1, 2, 4, 4, 'public/ulpoad/user/15894433971573522414900-단오.jpg', '2020-05-14 01:03:17', '2020-05-14 01:03:17'),
(47, 'Putri', 'Larasati', 'Perempuan', 'Surabaya', '1996-09-12', 'Islam', 67, 17, 2, 5, 4, 4, 'public/ulpoad/user/15894435121573522414900-단오.jpg', '2020-05-14 01:05:12', '2020-05-14 01:05:12'),
(48, 'Widya', 'Paramita', 'Perempuan', 'Gresik', '1997-03-20', 'Islam', 68, 7, 2, 7, 4, 2, 'public/ulpoad/user/15894435851573522414900-단오.jpg', '2020-05-14 01:06:25', '2020-05-14 01:06:25'),
(49, 'Poppy', 'Rahayu', 'Perempuan', 'Surabaya', '1998-09-18', 'Islam', 69, 17, 9, 2, 4, 4, 'public/ulpoad/user/15894436851573522414900-단오.jpg', '2020-05-14 01:08:05', '2020-05-14 01:08:05'),
(50, 'Jihan', 'Farida', 'Perempuan', 'Lamongan', '1997-08-26', 'Islam', 70, 1, 1, 1, 4, 4, 'public/ulpoad/user/15894437511573522414900-단오.jpg', '2020-05-14 01:09:11', '2020-05-14 01:09:11'),
(53, 'Citra', 'Ariyani', 'Perempuan', 'Surabaya', '1997-12-04', 'Islam', 83, 13, 1, 2, 4, 2, 'public/upload/user/15895961691573522414900-단오.jpg', '2020-05-15 07:20:28', '2020-05-15 07:20:28'),
(54, 'Dimas', 'Amiruddin', 'Laki - Laki', 'Surabaya', '1998-03-12', 'Islam', 86, 13, 9, 2, 4, 4, 'public/ulpoad/user/15896390841573522460999-백경.jpg', '2020-05-16 07:24:44', '2020-05-16 07:24:44'),
(55, 'Ais', 'Farikhah', 'Perempuan', 'Lamongan', '2000-06-17', 'Islam', 97, 1, 9, 1, 4, 4, 'public/ulpoad/user/158994903815895961691573522414900-단오.jpg', '2020-05-19 21:30:38', '2020-05-19 21:30:38'),
(56, 'Fahmi', 'Izzudin', 'Laki - Laki', 'Surabaya', '1998-05-18', 'Islam', 99, 15, 9, 10, 4, 2, 'public/ulpoad/user/15900134911573522460999-백경.jpg', '2020-05-20 15:24:51', '2020-05-20 15:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikans`
--

CREATE TABLE `pendidikans` (
  `id_pendidikan` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendidikans`
--

INSERT INTO `pendidikans` (`id_pendidikan`, `name`, `created_at`, `updated_at`) VALUES
(1, 'SMA', NULL, NULL),
(2, 'Diploma 3', NULL, NULL),
(3, 'Diploma 4', NULL, NULL),
(4, 'Sarjana', NULL, NULL),
(5, 'Master', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `provinsis`
--

CREATE TABLE `provinsis` (
  `id_provinsi` int(10) UNSIGNED NOT NULL,
  `provinsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsis`
--

INSERT INTO `provinsis` (`id_provinsi`, `provinsi`, `created_at`, `updated_at`) VALUES
(1, 'Jawa Timur', NULL, NULL),
(2, 'Jawa Tengah', NULL, NULL),
(3, 'Jawa Barat', NULL, NULL),
(4, 'Jakarta', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sistems`
--

CREATE TABLE `sistems` (
  `id_sistem` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sistems`
--

INSERT INTO `sistems` (`id_sistem`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tetap', NULL, NULL),
(2, 'Kontrak', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT current_timestamp(),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `email_verified_at`, `password`, `remember_token`, `telepon`, `approved_at`, `created_at`, `updated_at`) VALUES
(36, 'leni', 'diah@gmail.com', 0, '2020-05-12 08:14:37', '$2y$10$bYTr908.s9ke9/XQqdIObu6Xj7Cie5vovsJacptSUZMnfGpQgs/y.', NULL, '6285730201134', '2020-05-17 23:38:48', '2020-05-12 01:14:37', '2020-05-17 23:38:48'),
(37, 'rere', 'rere@gmail.com', 2, '2020-05-13 06:06:32', '$2y$10$1kliEFTjIedP6d/DgRhshegiuCQHnRuWoBOiI4gypk/dt8vIm.8X6', NULL, '6285730201134', '2020-05-17 23:38:44', '2020-05-12 23:06:32', '2020-05-17 23:38:44'),
(39, 'PT. Harda Esa Raksa', 'hardaesaraksa@gmail.com', 1, '2020-05-13 07:01:09', '$2y$10$4cNM6CCqDTmw9epCwiB.rusFPZDthKYib4Zzu1u1t9tJU8CTP9J.C', NULL, '12345', '2020-05-18 06:10:57', '2020-05-13 00:01:09', '2020-05-18 06:10:57'),
(40, 'PT Multi Spunindo Jaya', 'career@spunindo.com', 1, '2020-05-13 07:19:19', '$2y$10$DC0EzXZ4Iix2aGyXqTqE6OtkDBHeGz/FyMlfD7Val7gHXhNmwGPrO', NULL, '1234567', '2020-05-18 06:11:00', '2020-05-13 00:19:19', '2020-05-18 06:11:00'),
(41, 'Muhammad Khadafi', 'khadafi@gmail.com', 0, '2020-05-14 01:20:40', '$2y$10$TgjPxvyyEZImAOd9ZlxZd.CyGZbZ6Zo9ulilBzXx9Bhrgl3vB21ci', NULL, '0812 84 2319 83', '2020-05-18 06:11:03', '2020-05-13 18:20:40', '2020-05-18 06:11:03'),
(42, 'Agung Wahyu', 'agung@gmail.com', 0, '2020-05-14 01:23:22', '$2y$10$j2cjIRy05xuGtHybHAnx0.q42oA2ZKOCin3JPP5GNINgHOCu8KD16', NULL, '081234543678', '2020-05-18 06:11:06', '2020-05-13 18:23:22', '2020-05-18 06:11:06'),
(43, 'Muhammad Hilman', 'hilman@gmail.com', 0, '2020-05-14 01:24:25', '$2y$10$Nz7uobEqElwFwqR.qmKnNuHJo2b3jeOmJGiB0Db3lWMGue5ReI4RG', NULL, '081234789654', '2020-05-18 06:11:08', '2020-05-13 18:24:25', '2020-05-18 06:11:08'),
(44, 'Gandi Andrianto', 'gandi@gmail.com', 0, '2020-05-14 01:26:09', '$2y$10$GLV/DWWZT3lgK8z.B26GtO1FqRn6XYxJz2Yxr/yt.bNJqsA18qMuy', NULL, '081234543654', '2020-05-18 06:11:11', '2020-05-13 18:26:09', '2020-05-18 06:11:11'),
(45, 'Muhammad Dewangga', 'dewangga@gmail.com', 0, '2020-05-14 01:27:37', '$2y$10$LBzhi0WeMXqeZP4Kwt2NvuVxwGWUd5tqik/7mO/QVAFSVLZH3mMmK', NULL, '081543678543', '2020-05-18 06:23:24', '2020-05-13 18:27:37', '2020-05-18 06:23:24'),
(46, 'April Arianti', 'april@gmail.com', 0, '2020-05-14 01:29:24', '$2y$10$vQYwO2PMUtnWfR6Qr4VvB.qXaqGvEqZZz7ObSJuvH4krk1T8ldujO', NULL, '0812345654765', '2020-05-18 06:23:28', '2020-05-13 18:29:24', '2020-05-18 06:23:28'),
(47, 'Regita Fritriani', 'regita@gmail.com', 0, '2020-05-14 01:30:54', '$2y$10$xdKyB4bq5z6CLzw/fjEhIuJL/7LkcjEkuEax6OyzL5a4qV/UawxGG', NULL, '085432654765', '2020-05-18 06:23:31', '2020-05-13 18:30:54', '2020-05-18 06:23:31'),
(48, 'Aditya Nugroho', 'aditya@gmail.com', 0, '2020-05-14 01:32:12', '$2y$10$7n4/6lH09wnjmhHJ3BlEnuAyo8cATPWQk3VgL19.WFwHB8qD1UPW.', NULL, '081678543234', '2020-05-18 06:23:33', '2020-05-13 18:32:12', '2020-05-18 06:23:33'),
(49, 'Ajeng Indriani', 'ajeng@gmail.com', 0, '2020-05-14 01:35:03', '$2y$10$OX/xUSr6ejwMV4Ke4VO36uo4SBEMlFvCG.1xyDEZhp7x2YKQf5K/6', NULL, '081234543234', '2020-05-18 06:23:36', '2020-05-13 18:35:03', '2020-05-18 06:23:36'),
(50, 'Rianti Halim', 'rianti@gmail.com', 0, '2020-05-14 01:44:48', '$2y$10$fPqaeVQU2gqfVecU1BtadO9BksCkeEFySws1fZknku/luzEzzVnKe', NULL, '081234543123', '2020-05-18 06:23:38', '2020-05-13 18:44:48', '2020-05-18 06:23:38'),
(51, 'Marisa Aprilia', 'marisa@gmail.com', 0, '2020-05-14 01:46:53', '$2y$10$EcpKk8DF0tqLecSEI9Key.u3tllNeg.JcCaMt/aaSTP2XdvC1ETOe', NULL, '081234543658', '2020-05-18 06:23:40', '2020-05-13 18:46:53', '2020-05-18 06:23:40'),
(52, 'Galih Fernanda', 'galih@gmail.com', 0, '2020-05-14 01:48:17', '$2y$10$dDnpiQGpNS/B0QH4Vda4PuNdv8hauD9zLhofEQFUWnMJRxmgKGTia', NULL, '081234786298', '2020-05-18 06:23:43', '2020-05-13 18:48:17', '2020-05-18 06:23:43'),
(53, 'Donni Febrianto', 'donni@gmail.com', 0, '2020-05-14 01:50:24', '$2y$10$QtBYfV6Qak3meGZEVyW0J.u.3O1giUz/7FPBxeMyXVUQ8IfFpDQjK', NULL, '081653784567', '2020-05-18 06:23:45', '2020-05-13 18:50:24', '2020-05-18 06:23:45'),
(54, 'Abiyan Fazaa', 'abiyan@gmail.com', 0, '2020-05-14 01:56:36', '$2y$10$2YCl/E7gcmjgGap1SNfnZeAQD9xR6fiWivVck230fYYPAcTG05A0m', NULL, '089765432123', '2020-05-18 06:23:47', '2020-05-13 18:56:36', '2020-05-18 06:23:47'),
(55, 'Indri Alfianti', 'indri@gmail.com', 0, '2020-05-14 01:58:26', '$2y$10$BXkq2jazeR8FA0Gdezd6eOkiYnGhi/fzy/.BTe5vjdTPDjqAdJMMe', NULL, '081245678987', '2020-05-18 06:23:50', '2020-05-13 18:58:26', '2020-05-18 06:23:50'),
(56, 'Muhammad Naufal', 'naufal@gmail.com', 0, '2020-05-14 02:00:10', '$2y$10$nDWTHvk3DgptCyL2SCzDCOCLoABcvK5UY0jeP5PDloqFE58sqgg3m', NULL, '081789654348', '2020-05-18 06:23:53', '2020-05-13 19:00:10', '2020-05-18 06:23:53'),
(57, 'Satria Pratama', 'satria@gmail.com', 0, '2020-05-14 02:01:51', '$2y$10$J.Wahr6SFC3War1ClYqr8.2tPLxkv4nao9YWzCqO.nYWgC7lr5UiO', NULL, '081345654279', '2020-05-18 06:23:55', '2020-05-13 19:01:51', '2020-05-18 06:23:55'),
(58, 'Arifin Alfiandra', 'arifin@gmail.com', 0, '2020-05-14 02:02:56', '$2y$10$FON8F0Dez3iF7R70Zy8JeejyEVwqu8rBkhsIsJWrNPQrwXBNh2TNm', NULL, '087654321789', '2020-05-18 06:23:57', '2020-05-13 19:02:56', '2020-05-18 06:23:57'),
(59, 'Gazza Cahyadi', 'gazza@gmail.com', 0, '2020-05-14 02:04:53', '$2y$10$RyzUfvt0S725vl92WVC.JO1TEWIy1e5Cq1nqza.nXRAUYRS0b2lMK', NULL, '081234543118', '2020-05-18 06:24:01', '2020-05-13 19:04:53', '2020-05-18 06:24:01'),
(60, 'Muhammad Hafidz', 'hafidz@gmail.com', 0, '2020-05-14 02:08:04', '$2y$10$WYQKpa5KaQzfqKWXmelwsuA.JCbWh4QkmYBbnlhhC1n/PQmfDOg8W', NULL, '081976569001', '2020-05-18 06:24:03', '2020-05-13 19:08:04', '2020-05-18 06:24:03'),
(61, 'Fahri Ardiansyah', 'fahri@gmail.com', 0, '2020-05-14 02:10:33', '$2y$10$YkTAd6eqNIjuHrRwkgDRT.wZFUPc32u6Yb1oDjIBczaU2i6FXFEcO', NULL, '0812345346599', '2020-05-18 06:24:05', '2020-05-13 19:10:33', '2020-05-18 06:24:05'),
(62, 'Akbar Wirawan', 'akbar@gmail.com', 0, '2020-05-14 02:11:58', '$2y$10$vRnUdAll7P6ABrNd7QcwlOBbjpUHpYNSCi.MCAeHlczJZiM9tAE/C', NULL, '08123454311889', '2020-05-18 06:24:08', '2020-05-13 19:11:58', '2020-05-18 06:24:08'),
(63, 'Muhammad Arkan', 'arkan@gmail.com', 0, '2020-05-14 02:13:43', '$2y$10$jAe4cp7sxhMc0DK/bPAmeOTd4t6DlH.FPCvfhAvFQiaDeRAuItz/G', NULL, '0812345677899', '2020-05-18 06:24:10', '2020-05-13 19:13:43', '2020-05-18 06:24:10'),
(64, 'Silfi Ramadhani', 'silfi@gmail.com', 0, '2020-05-14 02:15:30', '$2y$10$IIzp2cYpR8WMXCNm.swgxuO3yWEFEPRszAVs2QhHlxT.z7VKE/KQ2', NULL, '081224511909', '2020-05-18 06:24:13', '2020-05-13 19:15:30', '2020-05-18 06:24:13'),
(65, 'Wulan Almira', 'wulan@gmail.com', 0, '2020-05-14 02:17:30', '$2y$10$NV7tvFczhakMdZF5Pa.Ko.b3kctChGwm0tlPgvO88P3jKZx9js9yC', NULL, '08567889533', '2020-05-18 06:24:15', '2020-05-13 19:17:30', '2020-05-18 06:24:15'),
(66, 'Diana Arisanti', 'diana@gmail.com', 0, '2020-05-14 02:22:14', '$2y$10$LbXGkWWUcd4tYqnjV43fT.JUxrwKu1ULWAaDOPKvVJyAgwl587Bu2', NULL, '081234222901', '2020-05-18 06:24:18', '2020-05-13 19:22:14', '2020-05-18 06:24:18'),
(67, 'Putri Larasati', 'putri@gmail.com', 0, '2020-05-14 02:23:18', '$2y$10$cgghToLTcZrhrda0tMmDlOe7Tn0kaaxks1btX.yGIZHH3N.BoDkU6', NULL, '085112345933', '2020-05-18 06:24:20', '2020-05-13 19:23:18', '2020-05-18 06:24:20'),
(68, 'Widya Paramita', 'widya@gmail.com', 0, '2020-05-14 02:24:59', '$2y$10$hklWwgLA7rYRd8gQ4uVu9uQWsPXRZ38udb5AI/m3Z8VkERicPRtyu', NULL, '081234567876', '2020-05-18 06:24:22', '2020-05-13 19:24:59', '2020-05-18 06:24:22'),
(69, 'Poppy Rahayu', 'poppy@gmail.com', 0, '2020-05-14 02:26:20', '$2y$10$tBxju.pGvDbc351V3tN/j.MLsjrHsS7OSSkLxs5rqrmw0ZHmrCHnK', NULL, '087654113911', '2020-05-18 06:24:24', '2020-05-13 19:26:20', '2020-05-18 06:24:24'),
(70, 'Jihan Farida', 'jihan@gmail.com', 0, '2020-05-14 02:29:07', '$2y$10$T7mxHMxbnpyfahxNJGxeiuP1PvO465mugYMQk4/yrIfd7W2fhRD/G', NULL, '087654123991', '2020-05-18 06:24:27', '2020-05-13 19:29:07', '2020-05-18 06:24:27'),
(71, 'PT. Fuboru Indonesia', 'Marketing@fuboru.co.id', 1, '2020-05-14 12:12:30', '$2y$10$G083r/Ja/Z1KD42onAi5C.M9iTFWI3uDb2NZONopPYPzdrs.cGEAO', NULL, '031-7654321', '2020-05-18 06:24:31', '2020-05-14 05:12:30', '2020-05-18 06:24:31'),
(72, 'PT Siantar Top Tbk', 'recruitment@siantartop.co.id', 1, '2020-05-14 12:18:17', '$2y$10$ALbjLBbwAGDjipHs59Xcf.DC2a4lDCC2fCld6a.tyG7f.5S.0JMT2', NULL, '+62-31-8667382', '2020-05-18 06:24:33', '2020-05-14 05:18:17', '2020-05-18 06:24:33'),
(73, 'PT Mitra Pinasthika Mulia', 'care@mpm-motor.com', 1, '2020-05-14 12:20:44', '$2y$10$7CNDAq61HEMHv6eGvLPDZ.GoLiXZ.qYNAQanoq/otGImbGW1b1GxK', NULL, '0-800-11-46632', '2020-05-18 06:24:35', '2020-05-14 05:20:44', '2020-05-18 06:24:35'),
(74, 'Swakarya Insan Mandiri PT', 'info@sim.co.id', 1, '2020-05-14 12:38:47', '$2y$10$YHDrFXqhSRVwkGgAmOjNFuwSVcie9U83YKBhosIfD4dUveTRdGqY.', NULL, '0217813505', '2020-05-18 06:24:39', '2020-05-14 05:38:47', '2020-05-18 06:24:39'),
(75, 'PT. Supresso Global Indonesia', 'info@supresso.co.id', 1, '2020-05-14 12:44:33', '$2y$10$Ekkv2jAScOcYflw0TGT/s.mfUE05dZjvmmIwip0DhL4sqC9ecC6Ga', NULL, '0317668777', '2020-05-18 06:24:41', '2020-05-14 05:44:33', '2020-05-18 06:24:41'),
(76, 'PT. Steel Pipe Industry of Indonesia Tbk', 'marketing@spindo.co.id', 1, '2020-05-14 12:48:27', '$2y$10$vHKbCZSCMAhxqDJtCcH2AOZparp1squyihE3M4.fZHB1Se8fxR2Nu', NULL, '+6231 532 0921', '2020-05-18 06:24:43', '2020-05-14 05:48:27', '2020-05-18 06:24:43'),
(77, 'PT Bumi Indo Mapan', 'info@bumiindo.co.id', 1, '2020-05-14 13:13:58', '$2y$10$Pniv5T8H8ZQvBqpVTHMwwubopwL1z0ZCrx7..FnqXv8wr/zi9ipaS', NULL, '08123456542', '2020-05-18 06:24:45', '2020-05-14 06:13:58', '2020-05-18 06:24:45'),
(78, 'PT Equityworld', 'corporate@equityworld-futures.co.id', 1, '2020-05-14 13:18:49', '$2y$10$wlXhmtJN7XbhkDbuIAhvnu0sT2yskO38u1HnUKMmMOOe2E0ZC58nm', NULL, '+62 31 6000 3788', '2020-05-18 06:24:48', '2020-05-14 06:18:49', '2020-05-18 06:24:48'),
(79, 'PT. Sinar Waringin Adikarya', 'admin@sinarwaringinadikarya.com', 1, '2020-05-14 13:21:52', '$2y$10$sgEuAFZznO5Jjhax3CdbyO9HE96SROtnrR8QqP/5k1F6eJ0uV8LdW', NULL, '+62 (31) 562 5265', '2020-05-18 06:24:56', '2020-05-14 06:21:52', '2020-05-18 06:24:56'),
(80, 'PT. Avila Prima Intra Makmur', 'aviprima@gmail.com', 1, '2020-05-14 13:25:12', '$2y$10$YJVbVRySJbAUKgI0xKZWTuBb5Kmlg0roaDUMEK/4HeSU2i070ELUW', NULL, '+62 31 5029323', '2020-05-18 06:24:58', '2020-05-14 06:25:12', '2020-05-18 06:24:58'),
(81, 'PT. Nugroho Lestari', 'nugroholestari@gmail.com', 1, '2020-05-14 13:28:40', '$2y$10$mMIeWXN.xKKIEn.yWug/AuHI6EZRhiRZpNEotAkzs8hXBzIvELyey', NULL, '081233467543', '2020-05-18 06:25:00', '2020-05-14 06:28:40', '2020-05-18 06:25:00'),
(82, 'PJM Group', 'info@pjm-group.com', 1, '2020-05-14 13:36:38', '$2y$10$uPrqpvPGXhOsc9p98rCI/eHyXMkwu4/H.w/BO8Dly4V3dWapjYY4.', NULL, '+62 31 596 2700', '2020-05-18 06:25:02', '2020-05-14 06:36:38', '2020-05-18 06:25:02'),
(83, 'Citra Ariyani', 'citra@gmail.com', 0, '2020-05-15 13:19:48', '$2y$10$bagbHyDJVlBrkxbeUSbsvuoAJlwdVHmXGmILZurQD0kcHW3BY5Bpq', NULL, '081234566711', '2020-05-18 06:25:05', '2020-05-15 06:19:48', '2020-05-18 06:25:05'),
(86, 'Dimas Amiruddin', 'dimas@gmail.com', 0, '2020-05-16 03:20:57', '$2y$10$ZUEAoSgyeNcj4TkfNFor1.FlQdAyAAHBbS4LqJ4FUY22SaJqXc8c2', NULL, '081234543212', '2020-05-18 06:25:07', '2020-05-15 20:20:57', '2020-05-20 20:41:27'),
(89, 'admin', 'admin@gmail.com', 2, '2020-05-18 13:09:09', '$2y$10$zVpKF4huGb/1VdeOlX4v7.1uqTr6VPWoT0uTzhNUFkROjySYVdhT.', NULL, '085730201191', '2020-05-18 06:25:10', '2020-05-18 06:09:09', '2020-05-20 22:40:15'),
(90, 'PT. Surya Timur Sakti Jatim', 'info@surya.com', 1, '2020-05-19 02:02:38', '$2y$10$4KzcgzrfbmmAujoYZg6LVOIATXCUoCTX8wAgos6ZkcYWoh79JBPKq', NULL, '+62 8228 7777 898', '2020-05-18 19:18:22', '2020-05-18 19:02:38', '2020-05-18 19:18:22'),
(91, 'PT. Mitracitra Mandirioffset', 'info@mitracitra.co.id', 1, '2020-05-19 02:07:20', '$2y$10$dvuwOpTMrnN17qLGLcVxIuT1UDFUDvxxPLOLso5z.FGBi0fC2knEi', NULL, '0317886564', '2020-05-18 19:18:25', '2020-05-18 19:07:20', '2020-05-18 19:18:25'),
(92, 'PT. Sofco Graha', 'info@sofco.co.id', 1, '2020-05-19 02:09:14', '$2y$10$v1y0xtMw8tbEy62vXVDbCOkVFsikaruLyOycXrxgjumq0ce53gGKq', NULL, '031245678918', '2020-05-18 19:18:27', '2020-05-18 19:09:14', '2020-05-18 19:18:27'),
(93, 'PT Exa Mitra Solusi', 'info@examitra.co.id', 1, '2020-05-19 02:11:36', '$2y$10$Ygdi0sUOkjhf/6WFcCg50.8D3P8BlMsctetg3Mw14iTC/u7Jt/IgW', NULL, '03124567899', '2020-05-18 19:18:29', '2020-05-18 19:11:36', '2020-05-18 19:18:29'),
(94, 'PT Panca Kusuma Raya', 'Info@panca.co.id', 1, '2020-05-19 02:13:03', '$2y$10$SwWtNpApNQq0ZABL55t0.eeGHaO3aulxsGLWSU7jVsNzujVwE7tOO', NULL, '38901718', '2020-05-18 19:18:31', '2020-05-18 19:13:03', '2020-05-18 19:18:31'),
(95, 'PT. Asahimas Flat Glass', 'info@asahimas.co.id', 1, '2020-05-19 02:14:39', '$2y$10$Fs8WTUhxTbgqVwFUiDd1JOTF0HFQpshx8rfkm9Cz3KyOVnTySFXVq', NULL, '031211599811', '2020-05-18 19:18:34', '2020-05-18 19:14:39', '2020-05-18 19:18:34'),
(97, 'Ais Farikhah', 'ais@gmail.com', 0, '2020-05-20 03:53:50', '$2y$10$Y2.474zHobJ9syHP9r1DnuVPjjeTA8R5SPNdHaFjqm2vHVPl0gPLC', NULL, '081232456789', '2020-05-19 21:27:03', '2020-05-19 20:53:50', '2020-05-19 21:27:03'),
(98, 'PT Sukses Amindo', 'admin@amindo.co.id', 1, '2020-05-20 22:01:22', '$2y$10$vroPYIAF4P7yrQOto0mi8uYRQUzAJ4Kib2kCPRaYrHBoOMbucGCSS', NULL, '033112522', NULL, '2020-05-20 15:01:22', '2020-05-20 15:01:22'),
(99, 'Fahmi Izzudin', 'fahmi@gmail.com', 0, '2020-05-20 22:23:13', '$2y$10$7N8osqQH6nQVMqeSiLHb/ewkJ/5j.5mUCRRIwoPpOVYXDXP.om7ne', NULL, '081223188911', '2020-05-20 22:29:34', '2020-05-20 15:23:13', '2020-05-20 22:29:34'),
(100, 'Muhammad Arsyad', 'arsyad@gmail.com', 0, '2020-05-21 03:48:08', '$2y$10$iEkxPNtMovtaCsXOiLZTXOEXZRf.4PCRnfXt3xh7ddo7Xu12Xz8nK', NULL, '081234789654', NULL, '2020-05-20 20:48:08', '2020-05-20 20:48:08'),
(101, 'Rima Fitria', 'rima@gmail.com', 0, '2020-05-21 03:50:27', '$2y$10$yardrGgTAWgJIvZTiQ6dXuih9mO2FGIXUq62ya6aRi.JwTA/Wg0pu', NULL, '081229811911', '2020-05-20 22:44:21', '2020-05-20 20:50:27', '2020-05-20 22:44:21'),
(102, 'amir', 'amir@gmail.com', 0, '2020-05-21 06:11:32', '$2y$10$jrLcvxFEaJFRx5iM9adDsODqtF7lGNTagU2Xd5/FrtxvNifkBRxFu', NULL, '0812389765432', NULL, '2020-05-20 23:11:32', '2020-05-20 23:11:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id_company`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id_exp`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gajis`
--
ALTER TABLE `gajis`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indexes for table `kabupatens`
--
ALTER TABLE `kabupatens`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `komps`
--
ALTER TABLE `komps`
  ADD PRIMARY KEY (`id_komp`);

--
-- Indexes for table `lamarans`
--
ALTER TABLE `lamarans`
  ADD PRIMARY KEY (`id_lamaran`);

--
-- Indexes for table `lokers`
--
ALTER TABLE `lokers`
  ADD PRIMARY KEY (`id_loker`),
  ADD KEY `id_loker` (`id`);

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
-- Indexes for table `pencari_kerjas`
--
ALTER TABLE `pencari_kerjas`
  ADD PRIMARY KEY (`id_pencari`);

--
-- Indexes for table `pendidikans`
--
ALTER TABLE `pendidikans`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `sistems`
--
ALTER TABLE `sistems`
  ADD PRIMARY KEY (`id_sistem`);

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
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id_company` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id_exp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gajis`
--
ALTER TABLE `gajis`
  MODIFY `id_gaji` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kabupatens`
--
ALTER TABLE `kabupatens`
  MODIFY `id_kabupaten` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `komps`
--
ALTER TABLE `komps`
  MODIFY `id_komp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `lamarans`
--
ALTER TABLE `lamarans`
  MODIFY `id_lamaran` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lokers`
--
ALTER TABLE `lokers`
  MODIFY `id_loker` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pencari_kerjas`
--
ALTER TABLE `pencari_kerjas`
  MODIFY `id_pencari` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `pendidikans`
--
ALTER TABLE `pendidikans`
  MODIFY `id_pendidikan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id_provinsi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sistems`
--
ALTER TABLE `sistems`
  MODIFY `id_sistem` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lokers`
--
ALTER TABLE `lokers`
  ADD CONSTRAINT `id_loker` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
