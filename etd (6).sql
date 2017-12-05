-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 03:42 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang_minat`
--

CREATE TABLE `bidang_minat` (
  `id_bidang_minat` int(10) NOT NULL,
  `nama_bidang_minat` varchar(20) NOT NULL,
  `id_prodi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang_minat`
--

INSERT INTO `bidang_minat` (`id_bidang_minat`, `nama_bidang_minat`, `id_prodi`) VALUES
(1, 'Databases', 2),
(2, 'Jaringan', 2),
(3, 'jaringan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bimbing`
--

CREATE TABLE `bimbing` (
  `id_bimbing` int(255) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `pembimbing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bimbing`
--

INSERT INTO `bimbing` (`id_bimbing`, `npm`, `nip`, `pembimbing`) VALUES
(8, '1308001010011', '1234567', 1),
(9, '1308001010011', '1234567', 2),
(10, '1308001010011', '1234567', 1),
(11, '1308001010011', '1234567', 2),
(12, '1308001010011', '1234567', 1),
(13, '1308001010011', '1234567', 2),
(14, '1308001010011', '1234567', 1),
(15, '1308001010011', '1234567', 2),
(16, '1308001010011', '1234567', 1),
(17, '1308001010011', '1234567', 2),
(18, '1308001010011', '1234567', 1),
(19, '1308001010011', '1234567', 2),
(20, '1308001010011', '1234567', 1),
(21, '1308001010011', '1234567', 2),
(22, '1308001010012', '1234567', 1),
(23, '1308001010012', '1234567', 2),
(24, '1308001010012', '1234567', 1),
(25, '1308001010012', '1234567', 2),
(26, '1308001010012', '1234567', 1),
(27, '1308001010012', '1234567', 2),
(28, '1308001010012', '1234567', 1),
(29, '1308001010012', '1234567', 2),
(30, '1308001010011', '1234567', 1),
(31, '1308001010011', '1234567', 2),
(32, '1308001010011', '1234567', 1),
(33, '1308001010011', '1234567', 2),
(34, '1308001010011', '1234567', 1),
(35, '1308001010011', '1234567', 2),
(36, '1308001010011', '1234567', 1),
(37, '1308001010011', '1234567', 2),
(38, '1308001010011', '1234567', 1),
(39, '1308001010011', '1234567', 2),
(40, '1308001010011', '1234567', 1),
(41, '1308001010011', '1234567', 2),
(42, '1308001010011', '1234567', 1),
(43, '1308001010011', '1234567', 2),
(44, '1308001010012', '1234567', 1),
(45, '1308001010012', '1234567', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`) VALUES
('1234567', 'rasuddin');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_prodi` varchar(10) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `id_bidang_minat` int(10) DEFAULT NULL,
  `level` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `password`, `alamat`, `email`, `nama`, `id_prodi`, `no_hp`, `id_bidang_minat`, `level`) VALUES
('1308001010011', '0357a7592c4734a8b1e12bc48e29e9e9', 'Jalan. T. Hamzah Bendahara No 31, Kuta Alam, Banda Aceh', 'hariririski@gmailu.co', 'HARIRIRISKI', '2', '08223765', 1, 0),
('1308001010012', '0357a7592c4734a8b1e12bc48e29e9e9', 'Jalan. T. Hamzah Bendahara No 31, Kuta Alam, Banda Aceh', 'hariririski@gmailu.com', 'HARIRIRISKI', '1', '0822376537209', 2, 0),
('1308001010013', '0357a7592c4734a8b1e12bc48e29e9e9', 'qwertyu', 'hariririski@gmail.comwwww', 'inf', '1', '1234567', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(10) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `css1` varchar(50) NOT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `logo`, `css1`, `status`) VALUES
(1, 'Informatika', 'inf.jpg', 'avatar avatar-online', NULL),
(2, 'Manajemen Informatika', 'mi.jpg', 'avatar avatar-away', NULL),
(3, 'Fakutas', '-', '-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ta`
--

CREATE TABLE `ta` (
  `id_tugas_akhir` int(255) NOT NULL,
  `judul` text NOT NULL,
  `abstrak` text NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `verifikasi` int(2) DEFAULT '0',
  `publikasi` int(2) NOT NULL,
  `sampai` date DEFAULT NULL,
  `npm` varchar(20) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ta`
--

INSERT INTO `ta` (`id_tugas_akhir`, `judul`, `abstrak`, `tgl_upload`, `verifikasi`, `publikasi`, `sampai`, `npm`, `pdf`) VALUES
(13, 'a', 'a', '2017-12-03 13:29:08', 1, 3, '2017-12-04', '1308001010011', '1308001010011.pdf'),
(16, '1', '2', '2017-12-03 13:28:47', 1, 1, NULL, '1308001010012', '1308001010012.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` int(4) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_prodi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama_lengkap`, `level`, `password`, `id_prodi`) VALUES
('admin', 'admin', 2, '21232f297a57a5a743894a0e4a801fc3', '3'),
('fakultas', 'fakultas', 2, '87d1457efdc266dc883ebe5caa705cb0', '3'),
('inf', 'inf', 1, '21232f297a57a5a743894a0e4a801fc3', '1'),
('mi', 'mi', 1, '21232f297a57a5a743894a0e4a801fc3', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang_minat`
--
ALTER TABLE `bidang_minat`
  ADD PRIMARY KEY (`id_bidang_minat`);

--
-- Indexes for table `bimbing`
--
ALTER TABLE `bimbing`
  ADD PRIMARY KEY (`id_bimbing`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`),
  ADD UNIQUE KEY `no_hp` (`no_hp`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD UNIQUE KEY `nama_prodi` (`nama_prodi`);

--
-- Indexes for table `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`id_tugas_akhir`),
  ADD UNIQUE KEY `npm` (`npm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang_minat`
--
ALTER TABLE `bidang_minat`
  MODIFY `id_bidang_minat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bimbing`
--
ALTER TABLE `bimbing`
  MODIFY `id_bimbing` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ta`
--
ALTER TABLE `ta`
  MODIFY `id_tugas_akhir` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
