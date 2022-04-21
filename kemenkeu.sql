-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Sep 2018 pada 00.51
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kemenkeu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `judul1` varchar(200) NOT NULL,
  `tgl_iklan1` date NOT NULL,
  `keterangan1` varchar(500) NOT NULL,
  `link_web1` varchar(200) NOT NULL,
  `judul2` varchar(200) NOT NULL,
  `tgl_iklan2` date NOT NULL,
  `keterangan2` varchar(500) NOT NULL,
  `link_web2` varchar(200) NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `img3` varchar(200) NOT NULL,
  `img4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `judul`, `judul1`, `tgl_iklan1`, `keterangan1`, `link_web1`, `judul2`, `tgl_iklan2`, `keterangan2`, `link_web2`, `img1`, `img2`, `img3`, `img4`) VALUES
(2, 'sada', 'wew', '2017-10-29', 'askjd', 'asjdcsas.com', 'sakhjcsab', '2017-10-27', 'asmhascjkb', 'asmcbasjkcb.com', 'e953e69adb8d16f698bf64489334d9ae.jpg', 'catcher-girl-watch-hair-back-beautiful-1080P-wallpaper.jpg', 'd43b775b6ae863685df025641921f504.jpg', 'Dlamn-177 - Pornhub.com.MP4_snapshot_16.05_[2018.05.08_00.58.42].jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `judul1` varchar(200) NOT NULL,
  `tgl_iklan1` date NOT NULL,
  `keterangan1` varchar(500) NOT NULL,
  `link_web1` varchar(200) NOT NULL,
  `judul2` varchar(200) NOT NULL,
  `tgl_iklan2` date NOT NULL,
  `keterangan2` varchar(500) NOT NULL,
  `link_web2` varchar(200) NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `img3` varchar(200) NOT NULL,
  `img4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `judul`, `judul1`, `tgl_iklan1`, `keterangan1`, `link_web1`, `judul2`, `tgl_iklan2`, `keterangan2`, `link_web2`, `img1`, `img2`, `img3`, `img4`) VALUES
(1, 'suv', 'bagus', '2016-03-03', 'mantap', 'mantap.com', 'kalereng', '2015-10-29', 'gilo', 'cumicumi.com', 'e953e69adb8d16f698bf64489334d9ae.jpg', '[AniBatch] Haikyuu!! S3 - 10.mp4_snapshot_21.40_[2018.06.09_17.36.12].jpg', 'Capture.JPG', 'hmsi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanah`
--

CREATE TABLE `tanah` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `judul1` varchar(200) NOT NULL,
  `harga1` int(11) NOT NULL,
  `tgl_iklan1` date NOT NULL,
  `keterangan1` varchar(500) NOT NULL,
  `link_web1` varchar(200) NOT NULL,
  `cp1` varchar(50) NOT NULL,
  `judul2` varchar(200) NOT NULL,
  `harga2` int(11) NOT NULL,
  `tgl_iklan2` date NOT NULL,
  `keterangan2` varchar(500) NOT NULL,
  `link_web2` varchar(200) NOT NULL,
  `cp2` varchar(50) NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `img3` varchar(200) NOT NULL,
  `img4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanah`
--

INSERT INTO `tanah` (`id`, `judul`, `judul1`, `harga1`, `tgl_iklan1`, `keterangan1`, `link_web1`, `cp1`, `judul2`, `harga2`, `tgl_iklan2`, `keterangan2`, `link_web2`, `cp2`, `img1`, `img2`, `img3`, `img4`) VALUES
(1, 'tutul', 'wekewe', 123000, '2018-09-12', 'mantap', 'htttps://facebook.com', '', 'gilo', 0, '2018-09-12', 'mantap bana', 'https://google.com', '', 'Dlamn-177 - Pornhub.com.MP4_snapshot_16.05_[2018.05.08_00.58.42].jpg', 'e953e69adb8d16f698bf64489334d9ae.jpg', 'Capture.JPG', '[AniBatch] Haikyuu!! S3 - 10.mp4_snapshot_21.40_[2018.06.09_17.36.12].jpg'),
(2, 'baru', 'wekewe12', 1281000, '2017-11-30', 'luarbiasa', 'htttps://facebook.com', '', 'waduh', 0, '2016-10-28', 'mantap bana', 'hp.com', '', 'Capture.JPG', 'catcher-girl-watch-hair-back-beautiful-1080P-wallpaper.jpg', 'd43b775b6ae863685df025641921f504.jpg', 'e953e69adb8d16f698bf64489334d9ae.jpg'),
(3, 'tutul', 'wekewe12', 7800000, '2018-09-11', 'luarbiasa', 'htttps://facebook.com', '', 'waduh', 1281000, '2018-09-18', 'bahwa', 'https://google.com', '', 'Capture.JPG', '', '', ''),
(4, 'tutul', 'wekewe12', 7800000, '2018-09-11', 'luarbiasa', 'htttps://facebook.com', '02158310012', 'waduh', 1281000, '2018-09-18', 'bahwa', 'https://google.com', '02158312912', 'Capture.JPG', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 1),
(2, 'budi', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tanah`
--
ALTER TABLE `tanah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tanah`
--
ALTER TABLE `tanah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
