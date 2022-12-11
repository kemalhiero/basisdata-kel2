-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 11 Des 2022 pada 08.28
-- Versi server: 5.7.39
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safdi-teknik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_customer`
--

CREATE TABLE `barang_customer` (
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `barang_customer`
--

INSERT INTO `barang_customer` (`kode_barang`, `nama_barang`, `created_at`, `updated_at`) VALUES
('ka23', 'kipas angin', '2022-12-11 14:53:21', '2022-12-11 14:53:21'),
('mc223', 'mesin cuci', '2022-12-11 14:53:00', '2022-12-11 14:53:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(23, 'daffa', '3445', 'padang', '2022-12-11 14:51:47', '2022-12-11 14:51:47'),
(34, 'kemal', '2348', 'padang', '2022-12-11 14:52:07', '2022-12-11 14:52:07'),
(35, 'raidan', '23853', 'padang', '2022-12-11 14:52:25', '2022-12-11 14:52:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pengecekan_barang`
--

CREATE TABLE `detail_pengecekan_barang` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_pengecekan` int(10) UNSIGNED NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `keluhan_barang` text NOT NULL,
  `jumlah` int(3) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `detail_pengecekan_barang`
--

INSERT INTO `detail_pengecekan_barang` (`id`, `kode_pengecekan`, `kode_barang`, `keluhan_barang`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 78, 'ka23', 'konslet', 1, '2022-12-11 14:54:55', '2022-12-11 14:54:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(179, '2022-12-01-052148', 'App\\Database\\Migrations\\Customer', 'default', 'App', 1670744523, 1),
(180, '2022-12-01-052215', 'App\\Database\\Migrations\\Pengecekan', 'default', 'App', 1670744523, 1),
(181, '2022-12-02-020209', 'App\\Database\\Migrations\\BarangCustomer', 'default', 'App', 1670744523, 1),
(182, '2022-12-02-021225', 'App\\Database\\Migrations\\Teknisi', 'default', 'App', 1670744523, 1),
(183, '2022-12-02-021543', 'App\\Database\\Migrations\\DetailPengecekanBarang', 'default', 'App', 1670744523, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengecekan`
--

CREATE TABLE `pengecekan` (
  `kode_pengecekan` int(10) UNSIGNED NOT NULL,
  `id_teknisi` int(10) UNSIGNED NOT NULL,
  `harga_perbaikan` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `deskripsi_pengecekan` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengecekan`
--

INSERT INTO `pengecekan` (`kode_pengecekan`, `id_teknisi`, `harga_perbaikan`, `id_customer`, `deskripsi_pengecekan`, `tanggal`, `created_at`, `updated_at`) VALUES
(78, 234, 15000, 23, 'kabel nya rusak, jadi diganti dengan kabel baru', '2022-12-11 14:53:39', '2022-12-11 14:53:39', '2022-12-11 15:16:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisi`
--

CREATE TABLE `teknisi` (
  `id_teknisi` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `teknisi`
--

INSERT INTO `teknisi` (`id_teknisi`, `nama`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(234, 'fathih', 'padang', '230749', '2022-12-11 14:51:00', '2022-12-11 14:51:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang_customer`
--
ALTER TABLE `barang_customer`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `detail_pengecekan_barang`
--
ALTER TABLE `detail_pengecekan_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_pengecekan` (`kode_pengecekan`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengecekan`
--
ALTER TABLE `pengecekan`
  ADD PRIMARY KEY (`kode_pengecekan`),
  ADD KEY `id_teknisi` (`id_teknisi`) USING BTREE,
  ADD KEY `id_customer` (`id_customer`) USING BTREE;

--
-- Indeks untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_pengecekan_barang`
--
ALTER TABLE `detail_pengecekan_barang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pengecekan_barang`
--
ALTER TABLE `detail_pengecekan_barang`
  ADD CONSTRAINT `detail_pengecekan_barang_ibfk_1` FOREIGN KEY (`kode_pengecekan`) REFERENCES `pengecekan` (`kode_pengecekan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detail_pengecekan_barang_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang_customer` (`kode_barang`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengecekan`
--
ALTER TABLE `pengecekan`
  ADD CONSTRAINT `pengecekan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pengecekan_ibfk_2` FOREIGN KEY (`id_teknisi`) REFERENCES `teknisi` (`id_teknisi`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
