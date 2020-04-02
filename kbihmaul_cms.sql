-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 02 Apr 2020 pada 10.50
-- Versi server: 5.7.29-log
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbihmaul_cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(20) NOT NULL DEFAULT '1',
  `status_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`, `nama`, `status_aktif`) VALUES
('admin_ma', '$2y$10$5ix7uz9dkf2P8mo.n.h6eOI0KJfv48dbxC5.okqcCmcblihBt5DiG', 'admin_ma@gmail.com', 'Administrator Web', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_kegiatan` varchar(30) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `harga` varchar(30) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `kategori_id`, `nama_kegiatan`, `deskripsi`, `tanggal_kegiatan`, `harga`, `gambar`, `status`) VALUES
(7, 2, 'Umroh Promo Februari', '<p><strong>Promo Dalam Rangka Milad KBIHU Maulana Azhari</strong></p>\r\n<ul>\r\n<li>Umroh + Thaif</li>\r\n<li>Harga Mulai Dari 23.5 jt</li>\r\n<li>Keberangkatan 12 Februari 2020</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Hotel Tujuan</strong></p>\r\n<table style=\"height: 97px; width: 488px;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 205px; text-align: center;\"><strong>Madinah</strong></td>\r\n<td style=\"width: 275px; text-align: center;\"><strong>Mekkah</strong></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 205px;\">Mubarok Silver (5 Star)</td>\r\n<td style=\"width: 275px;\">Ajyan Makarim (4 star)</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', '2020-02-12', '23jt', '7.jpg', 1),
(8, 2, 'Umroh Periode Maret', ' <ul> <li>Umroh + Turkey 12 Hari</li> <li>Harga Mulai Dari 30 jt</li> <li>Keberangkatan 15 MARET 2020</li> </ul> <p>&nbsp;</p> <p><strong>Hotel Tujuan</strong></p> <table style=\"height: 97px; width: 488px;\"> <tbody> <tr> <td style=\"width: 205px; text-align: center;\"><strong>Madinah</strong></td> <td style=\"width: 275px; text-align: center;\"><strong>Mekkah</strong></td> </tr> <tr> <td style=\"width: 205px;\">Mubarok Silver (5 Star)</td> <td style=\"width: 275px;\">Ajyan Makarim (4 star)</td> </tr> </tbody> </table> <p>&nbsp;</p>', '2020-03-01', ' 30jt', '7.jpg', 1),
(9, 1, 'Haji Reguler', '', '2020-02-01', '-', '7.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `album_foto`
--

CREATE TABLE `album_foto` (
  `id` int(11) NOT NULL,
  `nama_album` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_pembuatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `album_foto`
--

INSERT INTO `album_foto` (`id`, `nama_album`, `keterangan`, `tanggal_pembuatan`) VALUES
(1, 'Haji', '-', '2019-11-29'),
(2, 'Umroh', '-', '2019-11-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi_berita` longtext,
  `status_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `nama_foto` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama_gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id`, `album_id`, `nama_foto`, `caption`, `tgl_update`, `nama_gambar`) VALUES
(20, 2, 'umroh', 'umroh', '2019-12-09 02:17:27', '266795.jpg'),
(21, 2, 'umroh', 'umroh', '2019-12-09 02:18:51', '266796.jpg'),
(23, 2, 'KBIH MA', '', '2019-12-09 03:05:06', '267486.jpg'),
(25, 2, 'KBIH MA', '', '2019-12-09 03:08:49', '266797.jpg'),
(26, 1, 'KBIH MA', '', '2019-12-09 03:09:29', '267487.jpg'),
(27, 1, 'KBIH MA', '', '2019-12-09 03:09:29', 'CIMG3457.JPG'),
(28, 1, 'KBIH MA', '', '2019-12-09 03:09:29', 'CIMG3393 - Copy.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kategori`
--

CREATE TABLE `master_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_kategori`
--

INSERT INTO `master_kategori` (`id`, `nama_kategori`) VALUES
(1, 'Haji'),
(2, 'Umroh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `nik` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal_kontak` date NOT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `produk_id` int(11) DEFAULT NULL,
  `nama_produk` int(255) NOT NULL,
  `status_kontak` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`nik`, `nama_lengkap`, `alamat`, `no_telepon`, `email`, `tanggal_kontak`, `kategori_id`, `produk_id`, `nama_produk`, `status_kontak`) VALUES
(10, 'FIKRI F', 'bekasi timur', '087722150665', 'sayafifa@gmail.coms', '2020-01-20', 1, NULL, 0, 1),
(11, 'najmi', 'jsfkjsdfkjbdfgdkl', '32892389658954', '', '2019-12-12', 2, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_cusotmer`
--

CREATE TABLE `pesan_cusotmer` (
  `id` int(11) NOT NULL,
  `isi_pesan` text NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `album_foto`
--
ALTER TABLE `album_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_kategori`
--
ALTER TABLE `master_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pesan_cusotmer`
--
ALTER TABLE `pesan_cusotmer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `album_foto`
--
ALTER TABLE `album_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `master_kategori`
--
ALTER TABLE `master_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `nik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pesan_cusotmer`
--
ALTER TABLE `pesan_cusotmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
