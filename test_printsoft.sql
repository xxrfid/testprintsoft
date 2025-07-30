-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2025 pada 05.50
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_printsoft`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_product`
--

CREATE TABLE `m_product` (
  `id` int(11) NOT NULL COMMENT 'id produk',
  `name` varchar(100) NOT NULL COMMENT 'nama',
  `price` double NOT NULL COMMENT 'harga satuan',
  `stock` int(11) NOT NULL COMMENT 'stok',
  `created_at` datetime NOT NULL COMMENT 'dibuat pada',
  `formula` enum('unit','area') NOT NULL COMMENT 'jenis formula'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `m_product`
--

INSERT INTO `m_product` (`id`, `name`, `price`, `stock`, `created_at`, `formula`) VALUES
(1, 'dompets', 35000, 32, '2025-07-30 04:36:55', 'unit'),
(2, 'dompet 3', 35000.25, 32, '2025-07-30 04:36:55', 'unit'),
(3, 'tas tas', 22000, 12, '2025-07-30 10:13:22', 'area');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `m_product`
--
ALTER TABLE `m_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `m_product`
--
ALTER TABLE `m_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id produk', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
