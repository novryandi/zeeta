-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Mei 2020 pada 01.54
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `foto_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`, `foto_admin`) VALUES
('1', 'dupan', '$2y$10$ANhd2qvI.qSbiZw6/0vEyOmBEIzzHnbuHLxLKfn1VQqZ3sAosM30u', 'dupan', '1.jpg'),
('3004205eaaef14df05c', 'rosyid', '$2y$10$MM5kJv9tsM0A6.mINqHWqee9O9KNdF8K/GvVQ687qWIY9QNvud6FK', 'ahmad', '3004205eaaef14df05c.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa`
--

CREATE TABLE `jasa` (
  `id_jasa` varchar(255) NOT NULL,
  `nama_jasa` varchar(50) NOT NULL,
  `deskripsi_jasa` varchar(250) NOT NULL,
  `harga_jasa` int(10) NOT NULL,
  `foto_jasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jasa`
--

INSERT INTO `jasa` (`id_jasa`, `nama_jasa`, `deskripsi_jasa`, `harga_jasa`, `foto_jasa`) VALUES
('0305205eae06f288de4', 'asdasd', '<p>asdasdas</p>', 213, '0305205eae06f288de4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(10) NOT NULL,
  `jumlah_produk` int(10) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
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
  `id_reservasi` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `jam` varchar(6) NOT NULL,
  `jenis` varchar(8) NOT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservasi_produk`
--

INSERT INTO `reservasi_produk` (`id_reservasi`, `nama`, `phone`, `email`, `tanggal`, `jam`, `jenis`, `status`) VALUES
('3004205eaa48b335bd3', 'asd', '123', 'a@a.a', '0000-00-00', '10:45 ', 'Produk', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

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
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `reservasi_jasa`
--
ALTER TABLE `reservasi_jasa`
  ADD CONSTRAINT `reservasi_jasa_ibfk_1` FOREIGN KEY (`id_jasa`) REFERENCES `jasa` (`id_jasa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
