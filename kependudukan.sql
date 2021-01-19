-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 06:04 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kependudukan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_keluarga`
--

CREATE TABLE `anggota_keluarga` (
  `id_anggota` int(11) NOT NULL,
  `id_kk` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `hubungan` enum('Kepala','Istri','Anak') NOT NULL,
  `ket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota_keluarga`
--

INSERT INTO `anggota_keluarga` (`id_anggota`, `id_kk`, `id_penduduk`, `hubungan`, `ket`) VALUES
(10, 5, 17, 'Kepala', 1),
(11, 5, 18, 'Istri', 1),
(12, 5, 19, 'Anak', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lh` date NOT NULL,
  `id_kk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelahiran`
--

INSERT INTO `kelahiran` (`id`, `nama`, `tgl_lh`, `id_kk`) VALUES
(9, 'I Gede Bayu Setiadi Sayoga', '2021-01-14', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(255) NOT NULL,
  `kepala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`id`, `no_kk`, `kepala`) VALUES
(5, '19000000001', 'I Gede Miarta Yasa');

-- --------------------------------------------------------

--
-- Table structure for table `meninggal`
--

CREATE TABLE `meninggal` (
  `id` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `tgl_meninggal` date NOT NULL,
  `sebab` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meninggal`
--

INSERT INTO `meninggal` (`id`, `id_penduduk`, `tgl_meninggal`, `sebab`) VALUES
(3, 19, '2021-01-01', 'Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `pendatang`
--

CREATE TABLE `pendatang` (
  `id` int(11) NOT NULL,
  `tgl_pindah` date NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `tempat_lh` varchar(255) NOT NULL,
  `tgl_lh` date NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat_tinggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendatang`
--

INSERT INTO `pendatang` (`id`, `tgl_pindah`, `nik`, `nama`, `jenkel`, `tempat_lh`, `tgl_lh`, `agama`, `pendidikan`, `pekerjaan`, `alamat_tinggal`) VALUES
(3, '2021-01-14', '19006', 'Assabil Nur ', 'L', 'Yogya', '2021-01-14', 'Islam', 'Mahasiswa', 'Pelajar', 'Denpasar bali'),
(4, '2021-01-14', '19004', 'I Putu Ela Adi Saputra', 'L', 'Denpasar', '2021-01-15', 'Hindu', 'Mahasiswa', 'Pelajar', 'Jl Saner No 10');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `rt_rw` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lh` varchar(255) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `rt_rw`, `nik`, `nama`, `tempat_lh`, `tgl_lh`, `jenkel`, `agama`, `pendidikan`, `pekerjaan`, `status`) VALUES
(17, 1, '19001', 'I Gede Miarta Yasa', 'Ekasari', '2021-01-01', 'L', 'Hindu', 'Mahasiswa', 'Pelajar', 3),
(18, 1, '19002', 'Ni Putu Rita Ratna Dewi', 'Ekasari', '2021-01-01', 'P', 'Hindu', 'Mahasiswa', 'Pelajar', 3),
(19, 1, '-', 'I Gede Bayu Setiadi Sayoga', 'Ekasari', '2021-01-14', 'L', 'Hindu', 'Balita', 'Balita', 0),
(20, 1, '19006', 'Assabil Nur ', 'Yogya', '2021-01-14', 'L', 'Islam', 'Mahasiswa', 'Pelajar', 2),
(21, 1, '19004', 'I Putu Ela Adi Saputra', 'Denpasar', '2021-01-15', 'L', 'Hindu', 'Mahasiswa', 'Pelajar', 2),
(22, 1, '19023', 'UUS ', 'Ekasari', '2021-01-14', 'L', 'Islam', 'Siswa', 'Pelajar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pindah`
--

CREATE TABLE `pindah` (
  `id` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `tgl_pindah` date NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pindah`
--

INSERT INTO `pindah` (`id`, `id_penduduk`, `tgl_pindah`, `tujuan`, `ket`) VALUES
(4, 22, '2021-01-14', 'Juan, Sulawesi', 'Menetap');

-- --------------------------------------------------------

--
-- Table structure for table `rt_rw`
--

CREATE TABLE `rt_rw` (
  `kd` int(11) NOT NULL,
  `rt_rw` varchar(255) NOT NULL,
  `k_rt` varchar(255) NOT NULL,
  `k_rw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rt_rw`
--

INSERT INTO `rt_rw` (`kd`, `rt_rw`, `k_rt`, `k_rw`) VALUES
(1, '01/01', 'Solihudin', 'Somat'),
(3, '01/02', 'Solihudin', 'Ahmad'),
(4, '01/03', 'Solihudin', 'Kolifah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role`) VALUES
(3, 'Administrator', 'admin', '$2y$10$WdV5iknDOPTMg5ZE/VsWGe9Dbv2UWrMfZaarDuajmS/uzMRD2dWr2', '1'),
(4, 'Ni Made Intan Sri Utami', 'intan', '$2y$10$ljRocBmPv077MHWzWW1ioODpZ0rrYyaLb8QbO8tX2R8SNfxKwuuDC', '1'),
(5, 'Drs. Made Sarka Wijaya', 'lurah', '$2y$10$7OKiVhLZvwA2FqX5..pAfORoj4QNN2WmBuKvvLgBQcK7MtHEEaAhC', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meninggal`
--
ALTER TABLE `meninggal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendatang`
--
ALTER TABLE `pendatang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pindah`
--
ALTER TABLE `pindah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rt_rw`
--
ALTER TABLE `rt_rw`
  ADD PRIMARY KEY (`kd`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kk`
--
ALTER TABLE `kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `meninggal`
--
ALTER TABLE `meninggal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pendatang`
--
ALTER TABLE `pendatang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pindah`
--
ALTER TABLE `pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rt_rw`
--
ALTER TABLE `rt_rw`
  MODIFY `kd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
