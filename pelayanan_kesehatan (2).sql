-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 05:57 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanan_kesehatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama_lengkap` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(15) NOT NULL,
  `terakhir_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama_lengkap`, `password`, `username`, `terakhir_login`) VALUES
('Silvia Marselina', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2018-06-06 04:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(50) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `id_kecamatan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `nama_desa`, `id_kecamatan`) VALUES
(5, 'Kuta Alam', 206);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pelayanan`
--

CREATE TABLE `jenis_pelayanan` (
  `id_jenis_pelayanan` int(50) NOT NULL,
  `nama_jenis_pelayanan` varchar(50) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pelayanan`
--

INSERT INTO `jenis_pelayanan` (`id_jenis_pelayanan`, `nama_jenis_pelayanan`, `icon`) VALUES
(1, 'Rumah Sakit', '1.png'),
(2, 'Puskesmas', '2.png'),
(3, 'Pustu', '2.png'),
(4, 'Klinik', '3.png'),
(5, 'Apotek', '4.png');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `nama_kabupaten` varchar(250) NOT NULL,
  `id_kabupaten` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`nama_kabupaten`, `id_kabupaten`) VALUES
('Aceh Besar', 44),
('Banda Aceh', 31);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(50) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL,
  `id_kabupaten` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`, `id_kabupaten`) VALUES
(36, 'Lhoong', 44),
(37, 'Lho''nga', 44),
(38, 'Leupung', 44),
(39, 'Indrapuri', 44),
(40, 'Kuta Cot Glie', 44),
(41, 'Seulimeum', 44),
(42, 'Kota Jantho', 44),
(43, 'Lembah Seulawah', 44),
(44, 'Mesjid Raya', 44),
(45, 'Darussalam', 44),
(46, 'Baitussalam', 44),
(47, 'Kuta Baro', 44),
(48, 'Montasik', 44),
(49, 'Ingin Jaya', 44),
(50, 'Krueng Barona Jaya', 44),
(51, 'Suka Makmur', 44),
(52, 'Kuta Malaka', 44),
(53, 'Simpang Tiga', 44),
(54, 'Darul Imarah', 44),
(55, 'Darul Kamal', 44),
(57, 'Pulo Aceh', 44),
(58, 'Blang BIntang', 44),
(201, 'Meuraxa', 31),
(202, 'Jaya Baru', 31),
(203, 'Banda Raya', 31),
(204, 'Baiturrahman', 31),
(205, 'Lueng Bata', 31),
(206, 'Kuta Alam', 31),
(207, 'Kuta Raja', 31),
(208, 'Syiah Kuala', 31),
(209, 'Ulee Kareng', 31),
(211, 'Hariririski', 31);

-- --------------------------------------------------------

--
-- Table structure for table `layanan_kesehatan`
--

CREATE TABLE `layanan_kesehatan` (
  `id_layanan` int(50) NOT NULL,
  `nama_layanan` varchar(100) NOT NULL,
  `id_pelayanan_kesehatan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan_kesehatan`
--

INSERT INTO `layanan_kesehatan` (`id_layanan`, `nama_layanan`, `id_pelayanan_kesehatan`) VALUES
(11, 'aaaa', 5);

-- --------------------------------------------------------

--
-- Table structure for table `layer`
--

CREATE TABLE `layer` (
  `nama_layer` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `id_layer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layer`
--

INSERT INTO `layer` (`nama_layer`, `url`, `id_layer`) VALUES
('Batas Kecataman Banda Aceh', 'https://github.com/hariririski/pelayanan_kesehatan/raw/master/data_layer/Kecamatan_Banda_Aceh.kmz', 3),
('Batas Kecamatan Aceh Besar', 'https://github.com/hariririski/pelayanan_kesehatan/raw/master/data_layer/Kecamatan%20Aceh%20Besar.kmz', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan_kesehatan`
--

CREATE TABLE `pelayanan_kesehatan` (
  `id_poli` int(50) DEFAULT NULL,
  `id_jenis_pelayanan` int(50) NOT NULL,
  `id_kabupaten` int(255) NOT NULL,
  `id_kecamatan` int(255) NOT NULL,
  `id_desa` int(255) NOT NULL,
  `id_pelayanan_kesehatan` int(255) NOT NULL,
  `nama_pelayanan_kesehatan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status_akreditasi` varchar(10) NOT NULL,
  `web` varchar(100) NOT NULL,
  `lon` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelayanan_kesehatan`
--

INSERT INTO `pelayanan_kesehatan` (`id_poli`, `id_jenis_pelayanan`, `id_kabupaten`, `id_kecamatan`, `id_desa`, `id_pelayanan_kesehatan`, `nama_pelayanan_kesehatan`, `email`, `status_akreditasi`, `web`, `lon`, `lat`, `no_tlp`, `foto`, `alamat`) VALUES
(NULL, 1, 31, 206, 5, 5, 'Zainal Abidin', 'hariririski@gmail.com', 'A', 'zainal.com', '95.337685', '5.564333', '09854321', 'gQVD2k0ywT.png', 'Jalan Soekarno Hatta Km.2 Desa Mibo Kecamatan Banda Raya Kota Banda Aceh');

-- --------------------------------------------------------

--
-- Table structure for table `pelkes_poli`
--

CREATE TABLE `pelkes_poli` (
  `id_poli` int(50) NOT NULL,
  `id_pelayanan_kesehatan` int(255) NOT NULL,
  `id_pelkes_poli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelkes_poli`
--

INSERT INTO `pelkes_poli` (`id_poli`, `id_pelayanan_kesehatan`, `id_pelkes_poli`) VALUES
(1, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(50) NOT NULL,
  `nama_poli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`) VALUES
(5, 'Anak'),
(7, 'Bedah'),
(11, 'Bedah Syaraf'),
(16, 'Gigi'),
(17, 'Gizi'),
(14, 'Jantung'),
(9, 'Jiwa'),
(18, 'Kandungan'),
(15, 'Kulit kelamin'),
(8, 'Mata'),
(13, 'Paru'),
(6, 'Penyakit Dalam'),
(10, 'Saraf'),
(12, 'THT'),
(4, 'Umum'),
(19, 'VCT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  ADD PRIMARY KEY (`id_jenis_pelayanan`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`),
  ADD UNIQUE KEY `nama_kabupaten` (`nama_kabupaten`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `layanan_kesehatan`
--
ALTER TABLE `layanan_kesehatan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `layer`
--
ALTER TABLE `layer`
  ADD PRIMARY KEY (`id_layer`);

--
-- Indexes for table `pelayanan_kesehatan`
--
ALTER TABLE `pelayanan_kesehatan`
  ADD PRIMARY KEY (`id_pelayanan_kesehatan`);

--
-- Indexes for table `pelkes_poli`
--
ALTER TABLE `pelkes_poli`
  ADD PRIMARY KEY (`id_pelkes_poli`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`),
  ADD UNIQUE KEY `nama_poli` (`nama_poli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  MODIFY `id_jenis_pelayanan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;
--
-- AUTO_INCREMENT for table `layanan_kesehatan`
--
ALTER TABLE `layanan_kesehatan`
  MODIFY `id_layanan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `layer`
--
ALTER TABLE `layer`
  MODIFY `id_layer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pelayanan_kesehatan`
--
ALTER TABLE `pelayanan_kesehatan`
  MODIFY `id_pelayanan_kesehatan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pelkes_poli`
--
ALTER TABLE `pelkes_poli`
  MODIFY `id_pelkes_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
