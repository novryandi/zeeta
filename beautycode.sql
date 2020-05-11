-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2020 pada 14.39
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

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
('0605205eb227401a972', 'AbbiK', '$2y$10$0TOUCahPZUnWL7Ni9L6SlO67nV8p3XPZ4exrX5.NEY7uF0JiTsNuS', 'Abbi', '0605205eb227401a972.jpg'),
('1', 'dupan', '$2y$10$ANhd2qvI.qSbiZw6/0vEyOmBEIzzHnbuHLxLKfn1VQqZ3sAosM30u', 'dupan', '1.jpg'),
('3004205eaaef14df05c', 'rosyid', '$2y$10$MM5kJv9tsM0A6.mINqHWqee9O9KNdF8K/GvVQ687qWIY9QNvud6FK', 'ahmad', '3004205eaaef14df05c.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id_home` int(1) NOT NULL,
  `nama_home` varchar(50) NOT NULL,
  `deskripsi_home` varchar(1000) NOT NULL,
  `foto_home` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id_home`, `nama_home`, `deskripsi_home`, `foto_home`) VALUES
(1, 'Klinik Kecantikan Zeeta', 'Kami membantu Anda mendapatkan tampilan wajah terbaik dengan menggabungkan seni dan ilmu estetika untuk menciptakan kecantikan dan keindahan wajah secara holistik dengan menggunakan metode inovatif dari sudut pandang estetika yang profesional dan ideal. Solusi yang Zeeta tawarkan adalah kombinasi cream program, perawatan medis oleh dokter profesional dan perawatan estetik oleh beauty therapist berpengalaman, didukung dengan cita rasa seni yang tinggi dan teknologi estetika yang canggih.', '1.jpg');

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
('0605205eb25b4c54ede', 'Treatment Skincare', '<p>skincare treament menggunakan pijatan dan cream yang akan membuat kulit wajah anda putih dan lembut serta menghilangkan kotoran-kotoran yang ada di wajah<br></p>', 120000, '0605205eb25b4c54ede.jpg'),
('0605205eb25ba47e524', 'Treatment serum Gold', '<p>treatment wajah yang menggunakan serum gold akan membuat wajah adan putih dnan berkilau serta mengangkat kulit mati dan menyehatkan wajah anda<br></p>', 90000, '0605205eb25ba47e524.jpg'),
('0605205eb25ec978948', 'Skincare Normal', '<p>Skincare normal dengan pijatan lembut yang akan menghidupkan kembali pori-pori wajah anda<br></p>', 75000, '0605205eb25ec978948.jpg');

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

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `jumlah_produk`, `deskripsi`, `foto`) VALUES
('0605205eb2258220f58', 'Serum Purple', 25000, 25, 'Serup Purple bagus untuk kulit glowing', '0605205eb2258220f58.jpg'),
('0605205eb2537dde36d', 'CC Cream Skin Bright', 20000, 100, 'Untuk Mencerahkan Kulit mu', '0605205eb2537dde36d.jpg'),
('0605205eb253d538952', 'Loose Powder', 27500, 30, 'Lebih ringan dan lebih lembut. Membantu menyerap minyak berlebih', '0605205eb253d538952.jpg'),
('0605205eb25f1fb774a', 'Paket glowing', 45000, 100, 'Paket glowing untuk wajah anda', '0605205eb25f1fb774a.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(1) NOT NULL,
  `nama_promo` varchar(50) NOT NULL,
  `foto_promo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id_promo`, `nama_promo`, `foto_promo`) VALUES
(1, 'Jam Operasional', '1.jpg'),
(2, 'Gunakan Masker', '2.jpg'),
(3, 'paket Glowing', '3.jpg'),
(4, 'CC Cream', '4.jpg'),
(5, 'Katalog', '5.jpg'),
(6, 'Powder', '6.jpg');

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
('0605205eb2486ec9302', 'Abbi', '123456', 'abbi@gmail.com', '05/07/2020', '1:00 P', 'Jasa', 4),
('0605205eb24bd345dad', 'Abbi', '123456', 'abbi@gnmail.com', '05/07/2020', '1:00 P', 'Jasa', 4),
('0605205eb25e6ae4857', 'Abbi K', '23456', 'gmail@gmail.com', '05/07/2020', '2:00 P', 'Jasa', 4),
('3004205eaa48b335bd3', 'asd', '123', 'a@a.a', '0000-00-00', '10:45 ', 'Produk', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id_home`);

--
-- Indeks untuk tabel `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indeks untuk tabel `reservasi_jasa`
--
ALTER TABLE `reservasi_jasa`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `id_jasa` (`id_jasa`);

--
-- Indeks untuk tabel `reservasi_produk`
--
ALTER TABLE `reservasi_produk`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
