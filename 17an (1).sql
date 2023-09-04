-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Sep 2023 pada 16.07
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `17an`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `jenis_id` int(2) NOT NULL,
  `nama` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`jenis_id`, `nama`) VALUES
(1, 'Preorangan'),
(2, 'Grup');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `jenis_kelamin_id` int(2) NOT NULL,
  `nama` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`jenis_kelamin_id`, `nama`) VALUES
(1, 'Peria'),
(2, 'Wanita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(2) NOT NULL,
  `nama` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama`) VALUES
(1, 'Anak'),
(2, 'Remaja'),
(3, 'Dewasa'),
(4, 'Semua Usia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lomba`
--

CREATE TABLE `lomba` (
  `lomba_id` int(8) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `jenis_id` int(2) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lomba`
--

INSERT INTO `lomba` (`lomba_id`, `nama`, `kategori_id`, `jenis_id`, `aktif`) VALUES
(11, 'Joget Balon', 3, 2, 1),
(12, 'Lari Maraton', 4, 1, 1),
(13, 'Meniup Balon', 1, 1, 1),
(14, 'Depak Bola Dangdut', 3, 2, 1),
(15, 'Memasukkan Paku Kedalam Botol', 1, 1, 1),
(16, 'Balapan Bakiak', 4, 2, 1),
(17, 'Makan Kerupuk', 4, 1, 1),
(18, 'Sendok Kelereng', 1, 1, 1),
(19, ' Pecah Balon Air', 1, 1, 1),
(20, 'Balap Karung dengan Helm', 4, 1, 1),
(21, 'Makan Kerupuk', 1, 1, 0),
(22, 'Pukul Kendi', 2, 1, 1),
(23, 'Memasukkan Belut Kedalam Botol', 1, 1, 1),
(24, 'Tata Rias Dengan Mata Tertutup', 1, 1, 1),
(25, 'Tarik Tambang', 2, 2, 1),
(26, 'Gebuk Bantal atau Guling', 2, 1, 1),
(27, 'Sepeda Diatas Air', 4, 1, 1),
(28, 'Panjat Pinang', 4, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `pendaftar_id` int(16) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jenis_kelamin_id` int(1) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_rumah` int(5) NOT NULL,
  `lomba_id` int(8) NOT NULL,
  `kategori_id` int(2) NOT NULL,
  `tanggal_dafrar` date NOT NULL,
  `no_telp` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`pendaftar_id`, `nama`, `jenis_kelamin_id`, `tanggal_lahir`, `no_rumah`, `lomba_id`, `kategori_id`, `tanggal_dafrar`, `no_telp`) VALUES
(1, 'Lolo', 2, '2023-09-02', 12, 12, 2, '0000-00-00', 0),
(2, 'Ubed', 2, '2023-09-02', 12, 11, 2, '0000-00-00', 0),
(3, 'Badang', 1, '2009-09-20', 22, 27, 4, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jenis_kelamin` varchar(32) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_rumah` varchar(5) NOT NULL,
  `orang_tua` varchar(32) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `no_rumah`, `orang_tua`, `admin`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Ari', 'Laki-laki', '1997-04-25', '18a', 'Testing', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`jenis_id`);

--
-- Indeks untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`jenis_kelamin_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`lomba_id`),
  ADD KEY `jenis_id` (`jenis_id`),
  ADD KEY `kategori_id` (`kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`pendaftar_id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `lomba_id` (`lomba_id`,`kategori_id`) USING BTREE,
  ADD KEY `jenis_kelamin_id` (`jenis_kelamin_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `jenis_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `jenis_kelamin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `lomba`
--
ALTER TABLE `lomba`
  MODIFY `lomba_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `pendaftar_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lomba`
--
ALTER TABLE `lomba`
  ADD CONSTRAINT `lomba_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`),
  ADD CONSTRAINT `lomba_ibfk_2` FOREIGN KEY (`jenis_id`) REFERENCES `jenis` (`jenis_id`);

--
-- Ketidakleluasaan untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `pendaftar_ibfk_1` FOREIGN KEY (`lomba_id`) REFERENCES `lomba` (`lomba_id`),
  ADD CONSTRAINT `pendaftar_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`),
  ADD CONSTRAINT `pendaftar_ibfk_3` FOREIGN KEY (`jenis_kelamin_id`) REFERENCES `jenis_kelamin` (`jenis_kelamin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
