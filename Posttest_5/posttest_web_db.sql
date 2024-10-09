-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 04:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posttest_web_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id_pengguna` int(11) NOT NULL,
  `layanan` enum('donor rutin','Pembuatan Surat Sakit','Pembuatan Surat Sehat','Cek Kesehatan') NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jenkel` enum('laki-laki','perempuan') NOT NULL,
  `agama` enum('islam','kristen','katolik','hindu','buddha','konghucu') NOT NULL,
  `tempat_lhr` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id_pengguna`, `layanan`, `nama`, `no_hp`, `email`, `tgl_periksa`, `nik`, `jenkel`, `agama`, `tempat_lhr`, `tgl_lhr`, `alamat`, `provinsi`, `kota`, `kecamatan`, `pekerjaan`) VALUES
(13, 'donor rutin', 'Alvito', '082256643557', 'alvito772@gmail.com', '2024-10-24', '6402061118867853', 'laki-laki', 'kristen', 'Makassar', '2004-11-18', 'Jl. Tengku Situruk, RT. 02, Kel. Jahab', 'Kalimantan Timur', 'Kutai Kartanegara', 'Kutai Kartanegara', 'Mahasiswa'),
(15, 'Pembuatan Surat Sakit', 'Roby', '082255446677', 'robby@gmail.com', '2024-10-11', '6402061114445557', 'laki-laki', 'kristen', 'Samarinda', '2024-10-15', 'Jl. Pramuka 15', 'Kalimantan Timur', 'Samarinda', 'Samarinda', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
