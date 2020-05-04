-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2020 pada 18.10
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040118`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pw_193040118`
--

CREATE TABLE `pw_193040118` (
  `id` int(2) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judulbuku` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahunterbitan` date NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pw_193040118`
--

INSERT INTO `pw_193040118` (`id`, `gambar`, `judulbuku`, `pengarang`, `tahunterbitan`, `rating`) VALUES
(1, 'img1.jfif', 'NKCTHI', 'Marchella Febritrisia Putri', '0000-00-00', 9),
(2, 'img2.jfif', '5CM', 'Donny Dhirgantoro', '0000-00-00', 10),
(3, 'img4.jfif', '#Berhentidikamu', 'Gia Pratama', '0000-00-00', 8),
(4, 'img5.jfif', 'SI ANAK BADAI', 'Tere Liye', '0000-00-00', 8),
(5, 'img6.jfif', 'Negeri Para Bedebah', 'Tere Liye', '0000-00-00', 9),
(6, 'img7.jfif', 'Orang-orang Biasa', 'Orang-orang Biasa', '0000-00-00', 8),
(7, 'img8.jfif', 'Merdeka Sejak Hati', 'Ahmad Fuadi', '0000-00-00', 8),
(8, 'img9.jfif', 'Konspirasi alam semesta', 'Fiersa Besari', '0000-00-00', 9),
(9, 'img10.jfif', 'Arah langkah', 'Arah langkah', '0000-00-00', 10),
(10, 'img3.jfif', 'Kami (bukan) sarjana kertas', 'J. S Khairen', '0000-00-00', 9),
(11, 'img1.jfif', 'NKCTHI', 'Marchella Febritrisia Putri', '0000-00-00', 9),
(12, 'img2.jfif', '5CM', 'Donny Dhirgantoro', '0000-00-00', 10),
(13, 'img4.jfif', '#Berhentidikamu', 'Gia Pratama', '0000-00-00', 8),
(14, 'img5.jfif', 'SI ANAK BADAI', 'Tere Liye', '0000-00-00', 8),
(15, 'img6.jfif', 'Negeri Para Bedebah', 'Tere Liye', '0000-00-00', 9),
(16, 'img7.jfif', 'Orang-orang Biasa', 'Orang-orang Biasa', '0000-00-00', 8),
(17, 'img8.jfif', 'Merdeka Sejak Hati', 'Ahmad Fuadi', '0000-00-00', 8),
(18, 'img9.jfif', 'Konspirasi alam semesta', 'Fiersa Besari', '0000-00-00', 9),
(19, 'img10.jfif', 'Arah langkah', 'Arah langkah', '0000-00-00', 10),
(20, 'img3.jfif', 'Kami (bukan) sarjana kertas', 'J. S Khairen', '0000-00-00', 9);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pw_193040118`
--
ALTER TABLE `pw_193040118`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pw_193040118`
--
ALTER TABLE `pw_193040118`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
