-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2024 pada 12.06
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laptop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_laptop`
--

CREATE TABLE `data_laptop` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `merk_laptop` varchar(100) NOT NULL,
  `jenis` enum('Standard','Netbook','Gaming') NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_laptop`
--

INSERT INTO `data_laptop` (`id`, `nama`, `alamat`, `email`, `tanggal_lahir`, `jenis_kelamin`, `telepon`, `merk_laptop`, `jenis`, `gambar`) VALUES
(6, 'Cindy Karmilah', 'jambi', 'cindy@gmail.com', '2004-03-20', 'Laki-laki', '08239892382', 'ASUS', 'Standard', '65929127198ac.jpg'),
(7, 'Deni Saputra', 'Jambi', 'deni@gmail.com', '2003-09-11', 'Laki-laki', '082323239033', 'ACER', 'Netbook', '6592915e2e81d.jpg'),
(8, 'Ari Kusmanto', 'Jambi', 'ari@gmail.com', '2001-04-30', 'Laki-laki', '08383901330', 'ASUS ROG', 'Gaming', '6592919e0d064.jpeg'),
(9, 'Hidayat Syaifuddin', 'Aceh', 'dayat@gmail.com', '2004-11-29', 'Laki-laki', '08928223012', 'HP', 'Standard', '659291f51d07c.jpeg'),
(10, 'Putri Ayuni Wulandari', 'Kerinci', 'puput@gmail.com', '2001-09-15', 'Perempuan', '082287429303', 'LENOVO', 'Netbook', '659292587d185.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registeration`
--

CREATE TABLE `registeration` (
  `Reg_ID` int(11) NOT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Passowrd` varchar(40) DEFAULT NULL,
  `Role_ID_FK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `registeration`
--

INSERT INTO `registeration` (`Reg_ID`, `Name`, `Email`, `Passowrd`, `Role_ID_FK`) VALUES
(2, 'Admin', 'admin@gmail.com', '123', 1),
(6, 'Pimpinan', 'ketua@gmail.com', '123', 2),
(7, 'Staf', 'staf@gmail.com', '123', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `Roles` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`ID`, `Roles`) VALUES
(1, 'Admin'),
(2, 'Pimpinan'),
(3, 'Staf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_laptop`
--
ALTER TABLE `data_laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`Reg_ID`),
  ADD UNIQUE KEY `email_id` (`Email`),
  ADD KEY `Role_ID_FK` (`Role_ID_FK`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_laptop`
--
ALTER TABLE `data_laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `registeration`
--
ALTER TABLE `registeration`
  MODIFY `Reg_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `registeration`
--
ALTER TABLE `registeration`
  ADD CONSTRAINT `registeration_ibfk_1` FOREIGN KEY (`Role_ID_FK`) REFERENCES `roles` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
