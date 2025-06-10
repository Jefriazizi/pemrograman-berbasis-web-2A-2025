-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2025 at 09:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manajemen_absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_absensi`
--

CREATE TABLE `karyawan_absensi` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `departemen` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `kota_asal` varchar(50) DEFAULT NULL,
  `tanggal_absensi` date DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_pulang` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan_absensi`
--

INSERT INTO `karyawan_absensi` (`id`, `nip`, `nama`, `umur`, `jenis_kelamin`, `departemen`, `jabatan`, `kota_asal`, `tanggal_absensi`, `jam_masuk`, `jam_pulang`) VALUES
(2, '240441100144', 'RB. Moh. Jefri Bassam A. N', 19, 'Laki-laki', 'PSDM', 'staff', 'Sumenep', '2025-05-27', '07:00:00', '12:01:00'),
(6, '240441100111', 'Mahadewi Sekar Taji', 20, 'Perempuan', 'PSDM', 'staff', 'Sumenep', '2025-06-01', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$VzNs3LfuPt2y6PUr2y0tAuExNY1hxSG.WIG2W.QT/zOQIUEdSFrW6'),
(2, 'jefri', '$2y$10$7/OI0vox5DoU8qkrczQ72.ZinfOxqKFzettx8O3W3QwgtPSsv.gO6'),
(3, 'jep', '$2y$10$0B19L.vq.o.AUmZCdETlPuEv1/ujfKvkt9/nx7D3EyAhVGp1SUSoC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan_absensi`
--
ALTER TABLE `karyawan_absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan_absensi`
--
ALTER TABLE `karyawan_absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
