-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Mar 2020 pada 08.26
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautycode`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa`
--

CREATE TABLE `jasa` (
  `id_jasa` varchar(20) NOT NULL,
  `nama_jasa` varchar(50) NOT NULL,
  `jenis_jasa` varchar(20) NOT NULL,
  `harga_jasa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `kategori_produk` varchar(20) NOT NULL,
  `harga_produk` int(10) NOT NULL,
  `jumlah_produk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi_jasa`
--

CREATE TABLE `reservasi_jasa` (
  `id_reservasi` varchar(20) NOT NULL,
  `id_jasa` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `waktu_datang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi_produk`
--

CREATE TABLE `reservasi_produk` (
  `id_reservasi` varchar(20) NOT NULL,
  `id_produk` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(2) NOT NULL,
  `waktu_pesan` date NOT NULL,
  `waktu_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `reservasi_jasa`
--
ALTER TABLE `reservasi_jasa`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `id_jasa` (`id_jasa`);

--
-- Indexes for table `reservasi_produk`
--
ALTER TABLE `reservasi_produk`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `reservasi_jasa`
--
ALTER TABLE `reservasi_jasa`
  ADD CONSTRAINT `reservasi_jasa_ibfk_1` FOREIGN KEY (`id_jasa`) REFERENCES `jasa` (`id_jasa`);

--
-- Ketidakleluasaan untuk tabel `reservasi_produk`
--
ALTER TABLE `reservasi_produk`
  ADD CONSTRAINT `reservasi_produk_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
