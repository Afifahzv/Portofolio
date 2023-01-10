-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2023 pada 16.11
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id` int(100) NOT NULL,
  `Project Name` varchar(100) NOT NULL,
  `Client` varchar(100) NOT NULL,
  `Project Leader` varchar(100) NOT NULL,
  `Start Date` date NOT NULL,
  `End Date` date NOT NULL,
  `Progress` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id`, `Project Name`, `Client`, `Project Leader`, `Start Date`, `End Date`, `Progress`) VALUES
(1, 'pembuatan SI keuangan', 'Bakeuda Prov.kalsel', 'indrasetiawan@gmail.com', '2022-01-14', '2022-08-14', 30),
(3, 'Learning Management System', 'Ruang Guru', ' hilman.syah@gmail.com', '2022-01-30', '2022-03-10', 80),
(4, 'SI Pendataan Atlet Daerah', 'Dispora Jawa Timur', ' febri.gunawan@gmail.com', '2022-01-02', '2022-05-30', 40),
(5, 'Employee Monitoring', 'PT.Bina Sarana Sukses', ' handoko.aji@gmail.com', '2021-09-02', '2022-01-15', 100);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
