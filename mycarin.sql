-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2023 pada 04.33
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycarin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_07_04_121018_create_tb_cars_table', 1),
(4, '2021_07_04_121513_create_tb_orders_table', 1),
(5, '2021_07_04_121756_create_tb_order_details_table', 1),
(6, '2021_07_05_053826_create_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cars`
--

CREATE TABLE `tb_cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_car` varchar(191) NOT NULL,
  `type_car` varchar(191) NOT NULL,
  `field_car` varchar(191) NOT NULL,
  `season_car` varchar(191) NOT NULL,
  `description_car` longtext NOT NULL,
  `price_car` int(11) NOT NULL,
  `img_car` varchar(191) NOT NULL,
  `status_car` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pemilik` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_cars`
--

INSERT INTO `tb_cars` (`id`, `name_car`, `type_car`, `field_car`, `season_car`, `description_car`, `price_car`, `img_car`, `status_car`, `created_at`, `updated_at`, `pemilik`) VALUES
(1, 'All New Ertiga', 'Matic', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 300000, 'all-new-ertiga.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(2, 'All New Ertiga', 'Manual', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 250000, 'all-new-ertiga.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(3, 'All New Swift', 'Manual', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 250000, 'all-new-swift.jpg', 1, '2021-07-05 04:31:36', '2023-06-08 18:50:05', 'Artawan Rentcar'),
(4, 'All New Swift', 'Matic', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 300000, 'all-new-swift.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(5, 'Daihatsu Ayla', 'Manual', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 200000, 'Daihatsu-Ayla.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(6, 'Daihatsu Ayla', 'Matic', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 250000, 'Daihatsu-Ayla.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(7, 'Daihatsu Grand Xenia', 'Matic', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 275000, 'Daihatsu-Grand-Xenia.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(8, 'Daihatsu Grand Xenia', 'Manual', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 225000, 'Daihatsu-Grand-Xenia.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(9, 'Daihatsu Rocky', 'Manual', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 325000, 'Daihatsu-Rocky.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(10, 'Daihatsu Rocky', 'Matic', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 375000, 'Daihatsu-Rocky.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(11, 'Daihatsu Sigra', 'Matic', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 275000, 'Daihatsu-Sigra.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(12, 'Daihatsu Sigra', 'Manual', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 225000, 'Daihatsu-Sigra.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(13, 'Daihatsu Xenia', 'Manual', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 300000, 'Daihatsu-Xenia.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(14, 'Daihatsu Xenia', 'Matic', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 350000, 'Daihatsu-Xenia.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(15, 'All New Brio', 'Matic', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 275000, 'Honda-Brio-RS.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(16, 'All New Brio', 'Manual', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 225000, 'Honda-Brio-RS.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(17, 'Honda Brio', 'Manual', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 200000, 'Honda-Brio-Satya.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(18, 'Honda Brio', 'Matic', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 250000, 'Honda-Brio-Satya.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(19, 'Honda BR-V', 'Matic', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 350000, 'Honda-brv.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(20, 'Honda BR-V', 'Manual', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 300000, 'Honda-brv.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(21, 'Honda HR-V', 'Manual', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 450000, 'Honda-hrv.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(22, 'Honda HR-V', 'Matic', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 500000, 'Honda-hrv.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(23, 'Honda Jazz', 'Matic', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 350000, 'Honda-Jazz-RS.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(24, 'Honda Jazz', 'Manual', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 300000, 'Honda-Jazz-RS.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(25, 'Honda Mobilio', 'Manual', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 250000, 'Honda-Mobilio.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(26, 'Honda Mobilio', 'Matic', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 300000, 'Honda-Mobilio.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(27, 'Mitsubishi Xpander', 'Matic', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 350000, 'Mitsubishi-xpander.jpg', 0, '2021-07-05 04:31:36', '2023-07-05 06:35:11', 'Artawan Rentcar'),
(28, 'Mitsubishi Xpander', 'Manual', 'Santai', 'Dingin, Semi', '\r\n- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n', 300000, 'Mitsubishi-xpander.jpg', 1, '2021-07-05 04:31:36', '2023-04-21 01:40:02', 'Artawan Rentcar'),
(30, 'Suzuki Ertiga', 'Matic', 'Santai', 'Dingin, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n\r\n*Gambar Ilustrasi', 275000, 'Suzuki-ertiga.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(31, 'Suzuki Ertiga', 'Manual', 'Santai', 'Gugur, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 225000, 'Suzuki-ertiga.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(32, 'Suzuki Swift', 'Manual', 'Santai', 'Dingin, Panas', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 250000, 'suzuki-swift.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(33, 'Suzuki Swift', 'Matic', 'Santai, Medium', 'Dingin, Semi, Panas, Gugur', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 300000, 'suzuki-swift.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(34, 'Toyota Agya', 'Matic', 'Santai', 'Dingin, Semi, Panas', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 250000, 'Toyota-Agya.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(35, 'Toyota Agya', 'Manual', 'Santai', 'Panas, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 200000, 'Toyota-Agya.jpg', 1, '2021-07-04 20:31:36', '2023-06-10 20:33:34', NULL),
(36, 'Toyota Avanza', 'Matic', 'Santai', 'Panas, Gugur, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 350000, 'Toyota-Avanza.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(37, 'Toyota Avanza', 'Manual', 'Santai', 'Panas, Gugur, Dingin', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 300000, 'Toyota-Avanza.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(38, 'Toyota Calya', 'Manual', 'Santai', 'Dingin, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 225000, 'Toyota-Calya.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(39, 'Toyota Calya', 'Matic', 'Santai', 'Dingin, Semi, Panas', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 275000, 'Toyota-Calya.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(40, 'Toyota Grand Avanza', 'Manual', 'Santai', 'Dingin, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 225000, 'Toyota-Grand-Avanza.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(41, 'Toyota Grand Avanza', 'Matic', 'Santai', 'Dingin, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 275000, 'Toyota-Grand-Avanza.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(42, 'Toyota Grand Innova', 'Manual', 'Santai', 'Dingin, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 350000, 'Toyota-Grand-Innova.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(43, 'Toyota Grand Innova', 'Matic', 'Santai', 'Dingin, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 400000, 'Toyota-Grand-Innova.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(44, 'Toyota Innova Reborn', 'Manual', 'Santai', 'Dingin, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 450000, 'Toyota-Innova-Reborn.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(45, 'Toyota Innova Reborn', 'Matic', 'Santai', 'Dingin, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 500000, 'Toyota-Innova-Reborn.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(46, 'Toyota Raize', 'Manual', 'Santai', 'Dingin, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 325000, 'Toyota-Raize.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(47, 'Toyota Raize', 'Matic', 'Santai', 'Dingin, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 375000, 'Toyota-Raize.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(48, 'Toyota Rush', 'Manual', 'Santai', 'Dingin, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 300000, 'Toyota-Rush.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(49, 'Toyota Rush', 'Matic', 'Santai', 'Dingin, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 350000, 'Toyota-Rush.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(50, 'Toyota Yaris', 'Manual', 'Santai', 'Dingin, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 300000, 'Toyota-Yaris.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(51, 'Toyota Yaris', 'Matic', 'Santai', 'Dingin, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n- Free antar jemput area Bandara, Kuta, Canggu\r\n\r\n*gambar ilustrasi', 350000, 'Toyota-Yaris.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL),
(52, 'Honda Brio RS', 'Matic', 'Santai', 'Dingin, Semi', '- Mobil nyaman dan bersih\r\n- Service rutin\r\n- Dapat disewa dengan supir ataupun tanpa supir\r\n- Layanan 24/7\r\n\r\n*gambar ilustrasi', 350000, 'Honda-Brio-RS_yellow.jpg', 1, '2021-07-04 20:31:36', '2021-07-04 20:31:36', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_orders`
--

CREATE TABLE `tb_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_order` date NOT NULL,
  `price_order` int(11) NOT NULL,
  `code_order` int(11) NOT NULL,
  `status_order` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_orders`
--

INSERT INTO `tb_orders` (`id`, `id_user`, `date_order`, `price_order`, `code_order`, `status_order`, `created_at`, `updated_at`) VALUES
(11, 3, '2023-07-05', 700000, 963, '1', '2023-07-05 06:09:06', '2023-07-05 06:35:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_order_details`
--

CREATE TABLE `tb_order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `date_in` varchar(191) NOT NULL,
  `date_out` varchar(191) NOT NULL,
  `rent` int(11) NOT NULL,
  `driver` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_order_details`
--

INSERT INTO `tb_order_details` (`id`, `id_order`, `id_car`, `date_in`, `date_out`, `rent`, `driver`, `total_price`, `created_at`, `updated_at`) VALUES
(10, 11, 27, '2023-07-05', '2023-07-07', 2, 0, 700000, '2023-07-05 06:09:06', '2023-07-05 06:09:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `address` varchar(191) DEFAULT NULL,
  `telephone` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `telephone`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rikka', 'rikka@gmail.com', NULL, '$2y$10$L49sjwRe7alHJnPJm501Au3hQEoQGrHJONKa1EamursKPzTLNGFSC', NULL, NULL, 1, NULL, '2021-07-05 04:31:36', '2021-07-05 04:31:36'),
(2, 'Yutta', 'yutta@gmail.com', NULL, '$2y$10$fh7HN4UZIf95lr5pmXAw7eE0qv1EaBdmpVsQhG8CJtbK3pQHcxEhy', NULL, NULL, 0, NULL, '2021-07-05 04:31:36', '2021-07-05 04:31:36'),
(3, 'Entin Rahindrasti', 'entin@gmail.com', NULL, '$2y$10$gg1M8eOm7QcIv2sttIRos.wKDyeSP3LvcrF4Rut0nE33ebIPBh2Ly', 'Tukad Nyali, Sanur Kaja, Denpasar Selatan', '+6281916111024', 1, NULL, '2023-04-20 22:54:23', '2023-07-02 22:37:25'),
(4, 'zipperiz', 'zipperiz@gmail.com', NULL, '$2y$10$IYhvURw856XueO7xNvPzB.QwnzLkJBwF93WZUcWm3l.U5U.carCIy', NULL, NULL, 1, NULL, '2023-07-05 06:28:30', '2023-07-05 06:28:30');

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `tb_cars`
--
ALTER TABLE `tb_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_order_details`
--
ALTER TABLE `tb_order_details`
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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_cars`
--
ALTER TABLE `tb_cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `tb_orders`
--
ALTER TABLE `tb_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_order_details`
--
ALTER TABLE `tb_order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
