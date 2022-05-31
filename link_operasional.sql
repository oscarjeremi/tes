-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 30 Bulan Mei 2022 pada 16.12
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `link_operasional`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `open_link`
--

CREATE TABLE `open_link` (
  `id` int(255) NOT NULL,
  `nama_button` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `open_link`
--

INSERT INTO `open_link` (`id`, `nama_button`, `link`) VALUES
(1, 'Close The Loop', 'https://docs.google.com/spreadsheets/d/1CdC9fWhZEye_u0XXtjhD8Ej4B4kfPisz9IeR46WVmV0/edit?usp=sharing'),
(2, 'Program HVC\r\n', 'https://docs.google.com/spreadsheets/d/1h_VFW4YJmNrKXtOibdZkdM0neHdRBgiMx3QDKmO_4bQ/edit?usp=sharing'),
(3, 'Orbit TR3\r\n', 'https://docs.google.com/spreadsheets/d/14zYNNu0ih1rQGH6F0rAUxCUITL7sm_htcURcGqY_Yms/edit?usp=sharing'),
(4, 'Rekap Pertanggungan CX Commander\r\n', 'https://docs.google.com/spreadsheets/d/16x1IfBWtrbPTOxkcaGp4W5ROgiG7MoNCC02UjSYhQYw/edit?usp=sharing\r\n'),
(5, 'Penukaran Poin Plasa TR3\r\n', 'https://docs.google.com/spreadsheets/d/13joZJKipC1sOA3YMnRhfJw9lChNJAtExYkmLhQNq5WM/edit?usp=sharing\r\n'),
(6, 'Indihome Barakah\r\n', 'https://docs.google.com/spreadsheets/d/1YlTrKEKlOqU5ghQvnRqO3dOx2ctyPXxvx-syKapHdFk/edit#gid=849919322\r\n'),
(7, 'Matpro cc', 'https://drive.google.com/drive/folders/1oPAQNtBS9HJ6EaCp3-KAwOyPoqlP9FMy?usp=sharing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `private_link`
--

CREATE TABLE `private_link` (
  `id` int(255) NOT NULL,
  `nama_button` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `private_link`
--

INSERT INTO `private_link` (`id`, `nama_button`, `link`) VALUES
(1, 'Stock Sovenir\r\n', 'https://docs.google.com/spreadsheets/d/1A99u8G21HWJKWES-ITkutwgOjCIyVzh80Pa8uCzNHnQ/edit?usp=sharing\r\n'),
(2, 'Pertanggungan CRM\r\n', 'https://docs.google.com/spreadsheets/d/1cSC7pMg3bS7VyS6VUHwDumAH_XyMDC5rHr0-AGyusQo/edit?usp=sharing\r\n'),
(3, 'PROKER CRM TR3\r\n', 'https://docs.google.com/spreadsheets/d/1ZbtGhViW9zJ4WRQLufR7pEcEBqDYWnM0WgXvB0cGw0g/edit?usp=sharing\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `open_link`
--
ALTER TABLE `open_link`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `private_link`
--
ALTER TABLE `private_link`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `open_link`
--
ALTER TABLE `open_link`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `private_link`
--
ALTER TABLE `private_link`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
