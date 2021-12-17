-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2021 pada 09.18
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_hadir`
--

CREATE TABLE `daftar_hadir` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` int(8) DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembicara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Daftar Hadir',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sedang diproses',
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `daftar_hadir`
--

INSERT INTO `daftar_hadir` (`id`, `nim`, `nama`, `nama_kegiatan`, `tanggal_pelaksanaan`, `waktu`, `tempat`, `pembicara`, `ttd`, `jenis_surat`, `status`, `no_surat`, `created_at`, `updated_at`) VALUES
(1, 72190334, 'admin', 'oak', '2021-12-14', 'a', 'a', 'Aldi Taheer', 'Ir. Henry Feriadi, M.Sc., Ph.D.', 'Daftar Hadir', 'sedang diproses', NULL, '2021-12-14 06:57:24', '2021-12-14 06:57:24'),
(2, 72190334, 'admin', 'KKN', '2021-12-16', '3 bulan', 'Kaliurang', 'Aldi Taheer', 'Drs. Jong Jek Siang, M.Sc.', 'Daftar Hadir', 'sedang diproses', NULL, '2021-12-15 20:47:59', '2021-12-15 20:47:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_15_055234_create_surat_table', 1),
(5, '2021_11_15_061834_create_input_surat', 1),
(6, '2021_12_01_132521_create_surat_keterangan', 2),
(7, '2021_12_01_135250_create_surat_berita_acra', 2),
(8, '2021_12_05_105803_create_surat_keputusan', 3),
(9, '2021_12_05_114718_create_surat_personalia', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sitong@gmail.com', '$2y$10$L2dZyqqSmME.9r.3QhDqi.kDcyFZdDK43MXec9Eh2S3MYsR1OZTyO', '2021-12-01 04:48:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pejabat`
--

CREATE TABLE `pejabat` (
  `ttd` tinyint(4) NOT NULL,
  `nama_pjbt` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) NOT NULL,
  `nik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pejabat`
--

INSERT INTO `pejabat` (`ttd`, `nama_pjbt`, `jabatan`, `nik`) VALUES
(1, 'Ir. Henry Feriadi, M.Sc., Ph.D.', 'Rektor', 11190334),
(2, 'Restyandito, S.Kom., MSIS., Ph.D. ', 'Dekan FTI UKDW', 22190334),
(3, 'Drs. Jong Jek Siang, M.Sc.', 'Kaprodi SI UKDW', 33190334);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `no_surat` int(10) UNSIGNED NOT NULL,
  `pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_jam` date NOT NULL,
  `jenis_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_berita_acra`
--

CREATE TABLE `surat_berita_acra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_acara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembicara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_p_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `nim` int(8) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Surat Berita Acara',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sedang diproses',
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surat_berita_acra`
--

INSERT INTO `surat_berita_acra` (`id`, `tujuan`, `nama_acara`, `tempat`, `pembicara`, `nama_mitra`, `nama_p_mitra`, `tanggal`, `nim`, `nama`, `jenis_surat`, `status`, `no_surat`, `ttd`, `created_at`, `updated_at`) VALUES
(1, 'Parko Alfonso', 'dd', 'Yogyakarta', 'Naga Merah muda', 'popol & kupa', 'moontot', '2021-12-28', 19740426, 'Argo Wibowo', 'Surat Berita Acara', 'sedang diproses', NULL, NULL, '2021-12-08 23:15:24', '2021-12-09 00:16:01'),
(2, 'a', 'aa', 'a', 'a', 'a', 'a', '2021-12-28', 19740426, 'Argo Wibowo', 'Surat Berita Acara', 'sedang diproses', NULL, NULL, '2021-12-12 05:15:31', '2021-12-12 05:15:31'),
(3, 'Menyelenggarakan kegiatan pengenalan lingkungan kerja', 'FTI+', 'Jawa Timur', 'Nando Fernando', 'Nadiem Makarim', 'Joni El Pablo', '2022-01-04', 72190122, 'argo', 'Surat Berita Acara', 'disetujui', '3/E/FTI/2021', 'Ir. Henry Feriadi, M.Sc., Ph.D.', '2021-12-12 05:45:53', '2021-12-12 23:18:39'),
(4, 'Pengenalan Kampus', 'Kampus Keliling', '5 kote', 'Aldi Taheer', 'Aldi Maldini', 'Aldi Tabudi', '2021-12-20', 72190122, 'argo', 'Surat Berita Acara', 'disetujui', '4/E/FTI/2021', 'Drs. Jong Jek Siang, M.Sc.', '2021-12-12 06:02:33', '2021-12-12 23:19:05'),
(5, 'Menyelenggarakan kegiatan pengenalan lingkungan kerja', 'aa', 'Yogyakarta', 'Aldi Taheer', 'Aldi Maldini', 'Aldi Tabudi', '2021-12-29', 72190334, 'admin', 'Surat Berita Acara', 'sedang diproses', NULL, 'Restyandito, S.Kom, MSIS., Ph.D', '2021-12-13 21:34:09', '2021-12-13 21:34:09'),
(6, 'Mempresentasikan hasil kerja', 'rpl', 'Bantul, Yogyakarta', 'Aldi Taheer', 'Aldi Maldini', 'Aldi Tabudi', '2021-12-22', 72190122, 'argo', 'Surat Berita Acara', 'ditolak', '', NULL, '2021-12-14 23:46:15', '2021-12-17 00:58:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keputusan`
--

CREATE TABLE `surat_keputusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menimbang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mengingat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menetapkan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` int(8) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Surat Keputusan',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sedang diproses',
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surat_keputusan`
--

INSERT INTO `surat_keputusan` (`id`, `tujuan`, `menimbang`, `mengingat`, `menetapkan`, `kota`, `nim`, `nama`, `tanggal`, `ttd`, `jenis_surat`, `status`, `no_surat`, `created_at`, `updated_at`) VALUES
(1, 'a', NULL, 's', 's', 's', 72190334, 'admin', '2021-12-14', NULL, 'Surat Keputusan', 'sedang diproses', NULL, '2021-12-13 23:02:40', '2021-12-13 23:02:40'),
(2, 'x', NULL, 'xx', 'x', 'x', 72190334, 'admin', '2021-12-14', NULL, 'Surat Keputusan', 'sedang diproses', NULL, '2021-12-13 23:24:17', '2021-12-13 23:24:17'),
(3, 'c', NULL, 'c', 'c', 'c', 72190334, 'admin', '2021-12-07', 'Restyandito, S.Kom, MSIS., Ph.D', 'Surat Keputusan', 'sedang diproses', NULL, '2021-12-13 23:25:38', '2021-12-13 23:25:38'),
(4, 'membantu menilai mahasiswa terkait  matkul RPL', 'f', 'f', 'ff', 'f', 72190334, 'admin', '2021-12-06', 'Restyandito, S.Kom, MSIS., Ph.D', 'Surat Keputusan', 'sedang diproses', NULL, '2021-12-14 02:00:02', '2021-12-14 02:00:02'),
(5, 'Pengangkatan Kaprodi SI UKDW 2022', 'Tidak lalai dalam menjalankan tugas', 'selalu mengayomi masyarakat kampus', 'Kaprodi SI UKDW 2022', 'Yogyakarta', 72190334, 'admin', '2021-12-13', 'Restyandito, S.Kom, MSIS., Ph.D', 'Surat Keputusan', 'sedang diproses', NULL, '2021-12-15 20:35:10', '2021-12-15 20:35:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan`
--

CREATE TABLE `surat_keterangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `nim` int(8) DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Surat Keterangan',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sedang diproses',
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surat_keterangan`
--

INSERT INTO `surat_keterangan` (`id`, `jabatan`, `periode`, `kota`, `tanggal`, `nim`, `nama`, `jenis_surat`, `status`, `no_surat`, `ttd`, `created_at`, `updated_at`) VALUES
(7, 'Presiden ww', '2022-2027', 'Batavia', '2021-11-13', 19112467, 'Sitong', 'Surat Keterangan', 'disetujui', '7/B/FTI/2021', NULL, '2021-12-05 03:42:53', '2021-12-08 23:58:08'),
(8, 'Wakil Presiden', '2022-2027', 'Kota Daeng', '2021-12-08', 19740426, 'Argo Wibowo', 'Surat Keterangan', 'sedang diproses', NULL, NULL, '2021-12-05 08:17:49', '2021-12-05 08:17:49'),
(9, 'Wakil Presiden', '2023-2028', 'Cepu', '2021-12-08', 19112467, 'Sitong', 'Surat Keterangan', 'sedang diproses', NULL, NULL, '2021-12-07 01:15:10', '2021-12-07 01:15:10'),
(10, 'dekan', 'ss', 'd', '2021-12-14', 19740426, 'Argo Wibowo', 'Surat Keterangan', 'sedang diproses', NULL, NULL, '2021-12-08 22:29:28', '2021-12-08 22:29:28'),
(11, 'v', 'v', 'v', '2021-12-06', 19740426, 'Argo Wibowo', 'Surat Keterangan', 'sedang diproses', NULL, NULL, '2021-12-08 22:32:03', '2021-12-08 22:32:03'),
(12, 'a', 'aa', 'a', '2021-12-01', 19112467, 'Sitong', 'Surat Keterangan', 'sedang diproses', NULL, NULL, '2021-12-12 05:13:26', '2021-12-12 05:13:26'),
(13, 'a', 'a', 'a', '2021-12-14', 19740426, 'Argo Wibowo', 'Surat Keterangan', 'sedang diproses', NULL, NULL, '2021-12-12 05:14:29', '2021-12-12 05:14:29'),
(20, 'dekan', '2023-2028', 'Yogyakarta', '2021-12-14', 72190122, 'argo', 'Surat Keterangan', 'sedang diproses', NULL, NULL, '2021-12-14 23:42:52', '2021-12-14 23:42:52'),
(21, 'Kaprodi', '2022-2027', 'Yogyakarta', '2021-12-16', 72190334, 'admin', 'Surat Keterangan', 'sedang diproses', NULL, 'Restyandito, S.Kom, MSIS., Ph.D', '2021-12-15 21:49:15', '2021-12-15 21:49:15'),
(22, 'a', 'a', 'a', '2021-12-08', 72190122, 'argo', 'Surat Keterangan', 'ditolak', '', NULL, '2021-12-16 20:29:11', '2021-12-17 00:58:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_permohonan`
--

CREATE TABLE `surat_permohonan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` int(8) NOT NULL,
  `kepada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pembuatan` date NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pejabat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Surat Permohonan',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sedang diproses',
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surat_permohonan`
--

INSERT INTO `surat_permohonan` (`id`, `tujuan`, `nama_kegiatan`, `nama`, `nim`, `kepada`, `keperluan`, `tgl_pembuatan`, `tgl_pelaksanaan`, `waktu`, `tempat`, `pejabat`, `ttd`, `jenis_surat`, `status`, `no_surat`, `created_at`, `updated_at`) VALUES
(1, 'a', 'aa', 'Argo Wibowo', 19740426, 'Sasori', 'Memerdekakan', '2021-12-07', '2021-12-31', 'a', 'a', NULL, NULL, 'Surat Permohonan', 'sedang diproses', NULL, '2021-12-09 00:01:23', '2021-12-09 00:45:14'),
(2, NULL, '', 'Argo Wibowo', 19740426, 'Sasori', 'semoga sukses', '2021-12-21', '2022-06-28', 'beberapa bulan', 'UKDW', NULL, NULL, 'Surat Permohonan', 'sedang diproses', NULL, '2021-12-09 00:06:09', '2021-12-09 00:06:09'),
(3, NULL, '', 'Argo Wibowo', 19740426, 'Sasori', 'memungut ilmu', '2021-12-06', '2021-12-07', '2 hari', 'UKDW', NULL, NULL, 'Surat Permohonan', 'sedang diproses', NULL, '2021-12-09 00:18:35', '2021-12-09 00:19:16'),
(4, 'aa', 'a', 'Argo Wibowo', 19740426, 'a', 'a', '2021-12-14', '2021-12-06', 'a', 'a', NULL, NULL, 'Surat Permohonan', 'sedang diproses', NULL, '2021-12-12 05:15:59', '2021-12-12 05:15:59'),
(5, 'Mempresentasikan hasil kerja', 'Penilaian TAS RPL', 'argo', 72190122, 'Andhika Ghaluh', 'Memperoleh nilai', '2021-12-12', '2021-12-17', '60 menit', 'Daring', NULL, 'Restyandito, S.Kom, MSIS., Ph.D', 'Surat Permohonan', 'ditolak', '', '2021-12-12 05:47:06', '2021-12-14 22:49:03'),
(6, 'membantu menilai mahasiswa terkait  matkul RPL', 'Penilaian TAS RPL', 'argo', 72190122, 'Andhika Ghaluh', 'Menilai Mahasiswa', '2021-12-28', '2021-12-17', '120 menit', 'UKDW', NULL, NULL, 'Surat Permohonan', 'ditolak', '', '2021-12-12 06:03:42', '2021-12-12 07:28:08'),
(7, 'membantu menilai mahasiswa terkait  matkul RPL', 'Penilaian TAS RPL', 'admin', 72190334, 'Andhika Ghaluh', 'Menilai Mahasiswa', '2021-12-07', '2021-12-29', '3 bulan', 'Yogyakarta', NULL, 'Drs. Jong Jek Siang, M.Sc.', 'Surat Permohonan', 'sedang diproses', NULL, '2021-12-13 21:38:27', '2021-12-13 21:38:27'),
(8, '2', 'm', 'argo', 72190122, 'tt', 'e', '2021-12-07', '2021-12-15', '2 hari', '1', NULL, NULL, 'Surat Permohonan', 'ditolak', '', '2021-12-14 23:49:08', '2021-12-17 00:58:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_personalia`
--

CREATE TABLE `surat_personalia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pejabat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Surat Personalia',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sedang diproses',
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surat_personalia`
--

INSERT INTO `surat_personalia` (`id`, `tujuan`, `nama`, `nim`, `nama_mitra`, `kepada`, `keperluan`, `tanggal`, `pejabat`, `ttd`, `jenis_surat`, `status`, `no_surat`, `created_at`, `updated_at`) VALUES
(1, 'Mempresentasikan hasil kerja', 'admin', 72190334, 'Aldi Maldini', 'Andhika Ghaluh', 'Memperoleh nilai', '2021-12-15', NULL, 'Ir. Henry Feriadi, M.Sc., Ph.D.', 'Surat Personalia', 'disetujui', NULL, '2021-12-14 05:57:22', '2021-12-14 05:57:22'),
(2, 'a', 'admin', 72190334, 'Aldi Maldini', 'a', 'a', NULL, NULL, 'Ir. Henry Feriadi, M.Sc., Ph.D.', 'Surat Personalia', 'disetujui', NULL, '2021-12-16 22:35:58', '2021-12-16 22:35:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_tugas`
--

CREATE TABLE `surat_tugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_pelaksanaan` date DEFAULT NULL,
  `tujuan_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nim` int(8) DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Surat Tugas',
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sedang diproses',
  `no_surat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surat_tugas`
--

INSERT INTO `surat_tugas` (`id`, `tgl_pelaksanaan`, `tujuan_surat`, `nama_mitra`, `alamat_mitra`, `keterangan`, `created_at`, `updated_at`, `nim`, `nama`, `jenis_surat`, `status`, `no_surat`, `ttd`) VALUES
(12, NULL, 'Puerto Rico', 'Ezekiel', 'Purwokerto', 'charging....', '2021-11-28 22:44:53', '2021-11-29 00:06:09', 72180209, 'Shakira', 'Surat Tugas', 'Disetujui', 'ST-12', NULL),
(13, NULL, 'Iasa', 'ksak', 'sdfsd', 'fff', '2021-11-28 23:15:46', '2021-11-29 00:06:12', 72180209, 'Shakira', 'Surat Tugas', 'Disetujui', 'ST-13', NULL),
(14, NULL, 'My Chemical Romance', 'Mikey Way', 'Uk', 'good morning hasewessewessewes telelelelelele', '2021-11-28 23:44:51', '2021-11-30 00:23:12', 72180209, 'Shakira', 'Surat Tugas', 'Ditolak', '', NULL),
(15, NULL, 'Bring Me the Horizon', 'Oliver Sykes', 'New Jersey', 'dont let me drown', '2021-11-29 00:25:46', '2021-11-29 00:25:46', 72180209, 'Shakira', 'Surat Tugas', 'sedang diproses', NULL, NULL),
(16, NULL, 'bb', 'bb', 'bb', 'b', '2021-11-30 00:21:18', '2021-11-30 00:23:47', 72180209, 'Shakira', 'Surat Tugas', 'Disetujui', 'ST-16', NULL),
(17, NULL, 'Bimbingan RPL', 'Andhika Galuh', 'UKDW', 'Mohon bimbingan RPL', '2021-11-30 02:18:03', '2021-12-06 03:02:50', 19112467, 'Sitong', 'Surat Tugas', 'disetujui', '17/D/FTI/2021', NULL),
(18, NULL, 'Perijinan Kegiatan Universitas', 'Ir. Henry Feriadi, M.Sc., Ph.D.', 'UKDW', 'mohon ijin kkn', '2021-12-05 00:32:49', '2021-12-06 01:06:21', 19112467, 'Sitong', 'Surat Tugas', 'ditolak', '', NULL),
(19, NULL, 'Memeriahkan OKA', 'Ir. Henry Feriadi, M.Sc., Ph.D.', 'UKSW', 'good morning hasewessewessewes telelelelelele', '2021-12-06 07:08:12', '2021-12-07 01:19:17', 19112467, 'Sitong', 'Surat Tugas', 'disetujui', '19/D/FTI/2021', NULL),
(20, NULL, 'Memeriahkan OKA', 'Joko', 'Jl Toba Nauli', 'Mister kembalikan uang saya', '2021-12-06 08:29:13', '2021-12-06 08:29:13', 72190334, 'admin', 'Surat Tugas', 'sedang diproses', NULL, 'Ir. Henry Feriadi, M.Sc., Ph.D.'),
(21, NULL, 'a', 'a', 'a', 'a', '2021-12-06 08:57:49', '2021-12-16 21:15:18', 19740426, 'Argo Wibowo', 'Surat Tugas', 'disetujui', '21/D/FTI/2021', 'Ir. Henry Feriadi, M.Sc., Ph.D.'),
(38, '2021-12-14', 'Memeriahkan OKA', 'Aldi Maldini', 'UKSW', 'Menjadi dosen pembimbing project kerja mahasiswa', '2021-12-16 20:59:30', '2021-12-16 20:59:30', 72190334, 'admin', 'Surat Tugas', 'disetujui', NULL, 'Ir. Henry Feriadi, M.Sc., Ph.D.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','mahasiswa','dosen') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'mahasiswa',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `nim`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$k1KKGrCwkPTAt4Y1fGFpIuvBqkEpqRJlPWAzJIB0bP7zQbmMxgDGW', 'admin', NULL, '2021-11-24 05:30:27', '2021-11-24 05:30:27', '72190334'),
(2, 'alno', 'alnobetha@yahoo.com', NULL, '$2y$10$GNLQ3XRnvYZaKFDbB86jdudXX34yJ8s65Ldq/hvhjlOj1FoHRapH.', 'mahasiswa', NULL, '2021-11-26 00:36:16', '2021-11-26 00:36:16', '72190333'),
(3, 'alno2', 'chameliananda@gmail.com', NULL, '$2y$10$JEFCyzW6FHGtc/B795crC.AYg7wqP8LQFWzC5eYJuabPA.Wvf7QQC', 'mahasiswa', NULL, '2021-11-26 05:33:11', '2021-11-26 05:33:11', '72190335'),
(4, 'Brendon Urie', 'patd@gmail.com', NULL, '$2y$10$/t2.LXDOq1m2qRihv0RJBOExHIYnUqBR0BAC.OkNqxeyWZYwQW4.u', 'mahasiswa', NULL, '2021-11-27 19:56:08', '2021-11-27 19:56:08', '71190123'),
(5, 'Shakira', 'shakira@gmail.com', NULL, '$2y$10$WhueDTgk3jhkbU2UPtEq7uK0Lp.hHNT5nCFKR60alsnNpCp9K0R8G', 'mahasiswa', NULL, '2021-11-28 22:43:30', '2021-11-28 22:43:30', '72180209'),
(6, 'Sitong', 'sitong@gmail.com', NULL, '$2y$10$ubIoHNar7UrlCNBrXVr2NeU3LXnC4t2Wwoqnf.WXJvgrLvkFZmb1u', 'mahasiswa', NULL, '2021-11-30 01:48:56', '2021-11-30 01:48:56', '19112467'),
(7, 'Alno Sabetha', 'mahasiswa@yahoo.com', NULL, '$2y$10$PbcuZ6eYNgMD9oTYnq8hI.i0GEXYQSiRu3OJz3B93OmwUnn7n3F/i', 'mahasiswa', NULL, '2021-12-03 22:15:25', '2021-12-03 22:15:25', '72150334'),
(8, 'Argo Wibowo', 'uchiha@gmail.com', NULL, '$2y$10$v.VogkXfqgZSZ6KDLGveT.xGMjN4DMUsow7tez3CMK.3l80PeENq6', 'dosen', NULL, '2021-12-05 07:50:55', '2021-12-05 07:50:55', '19740426'),
(9, 'Beru Alfonso', 'beruberi@gmail.com', NULL, '$2y$10$sj4FWjKvS21g8VCWzZJ4reNfRLZ5uOcdA194hb9Py9nAtJrg5XN4.', 'dosen', NULL, '2021-12-08 21:52:51', '2021-12-08 21:52:51', '72190304'),
(10, 'alno', 'alnosabetha@yahoo.com', NULL, '$2y$10$F1LDldjPXn6A4kpMxvfwNuIkK/kZ4WjMTRsYuBnmnyqcIUGVKE50O', 'mahasiswa', NULL, '2021-12-12 05:29:55', '2021-12-12 05:29:55', '72190123'),
(11, 'argo', 'argouchiha@yahoo.com', NULL, '$2y$10$Gwyt96ZkFci/T9Op7Ul4AeIUx7tgtYUTEARSttN5OLyN1/hqB3YkS', 'dosen', NULL, '2021-12-12 05:30:47', '2021-12-12 05:30:47', '72190122');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_hadir`
--
ALTER TABLE `daftar_hadir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indeks untuk tabel `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`ttd`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indeks untuk tabel `surat_berita_acra`
--
ALTER TABLE `surat_berita_acra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_keputusan`
--
ALTER TABLE `surat_keputusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_permohonan`
--
ALTER TABLE `surat_permohonan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_personalia`
--
ALTER TABLE `surat_personalia`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_tugas`
--
ALTER TABLE `surat_tugas`
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
-- AUTO_INCREMENT untuk tabel `daftar_hadir`
--
ALTER TABLE `daftar_hadir`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT untuk tabel `pejabat`
--
ALTER TABLE `pejabat`
  MODIFY `ttd` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `no_surat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat_berita_acra`
--
ALTER TABLE `surat_berita_acra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `surat_keputusan`
--
ALTER TABLE `surat_keputusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `surat_permohonan`
--
ALTER TABLE `surat_permohonan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `surat_personalia`
--
ALTER TABLE `surat_personalia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_tugas`
--
ALTER TABLE `surat_tugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
