-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2017 at 12:09 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jalan`
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
('Ibnu', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2017-07-16 14:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `fungsi`
--

CREATE TABLE `fungsi` (
  `kode_ruas` int(50) NOT NULL,
  `kode_fungsi` int(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `no_kjp` varchar(50) NOT NULL,
  `nama_kjp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fungsi`
--

INSERT INTO `fungsi` (`kode_ruas`, `kode_fungsi`, `keterangan`, `no_kjp`, `nama_kjp`) VALUES
(1, 1, '1', '1', '1'),
(2, 2, '2', '2', '2'),
(9999, 9999, '9', '9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `jalan`
--

CREATE TABLE `jalan` (
  `kode_ruas` int(50) NOT NULL,
  `dari` varchar(100) NOT NULL,
  `ke` varchar(100) NOT NULL,
  `no_ruas` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `dokument` varchar(255) NOT NULL,
  `rusak_ringan` int(50) NOT NULL,
  `rusak_sedang` int(50) NOT NULL,
  `rusak_berat` int(50) NOT NULL,
  `baik` int(50) NOT NULL,
  `panjang_km` int(50) NOT NULL,
  `id_kecamatan` int(50) NOT NULL,
  `id_kabupaten` int(50) NOT NULL,
  `nama_jalan` varchar(255) NOT NULL,
  `belum_tembus` int(50) NOT NULL,
  `peta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jalan`
--

INSERT INTO `jalan` (`kode_ruas`, `dari`, `ke`, `no_ruas`, `status`, `dokument`, `rusak_ringan`, `rusak_sedang`, `rusak_berat`, `baik`, `panjang_km`, `id_kecamatan`, `id_kabupaten`, `nama_jalan`, `belum_tembus`, `peta`) VALUES
(1, '1', '1', 1, '1', 'JALAN1500201136Final_RPL_Pak_Rahmat.docx', 1, 1, 1, 1, 1, 1, 32, '1', 1, 'https://github.com/hariririski/jalan_rusak/raw/master/jalan1.kmz'),
(2, '2', '2', 2, '2', 'JALAN1500205560SKPL.pdf', 2, 2, 2, 2, 2, 1, 31, '2', 22, ''),
(9999, '9', '9', 9, '9', 'JALAN1500371821Presentation1.pdf', 9, 9, 9, 9, 9, 3, 44, '9', 9, 'https://github.com/hariririski/jalan_rusak/raw/master/uploads/pidie.kmz');

-- --------------------------------------------------------

--
-- Table structure for table `jalan_rusak`
--

CREATE TABLE `jalan_rusak` (
  `kode_ruas` int(50) NOT NULL,
  `id_kabupaten` int(50) NOT NULL,
  `id_kecamatan` int(50) NOT NULL,
  `kode_jalan_rusak` int(50) NOT NULL,
  `kondisi` int(3) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lon` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `luas_jalan` int(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `tgl_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL,
  `perbaikan` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jalan_rusak`
--

INSERT INTO `jalan_rusak` (`kode_ruas`, `id_kabupaten`, `id_kecamatan`, `kode_jalan_rusak`, `kondisi`, `lat`, `lon`, `desa`, `keterangan`, `luas_jalan`, `photo`, `tgl_create`, `status`, `perbaikan`) VALUES
(1, 31, 1, 4, 3, '5.160191033179967', '95.53208287500001', '1', '1', 1, 'JALAN_RUSAK1500201164rusak_ringan.png', '2017-07-20 09:43:11', 0, NULL);

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
(' Subulussalam', 52),
('Aceh Barat', 40),
('Aceh Barat Daya', 53),
('Aceh Besar', 44),
('Aceh Jaya', 54),
('Aceh Selatan', 39),
('Aceh Singkil', 45),
('Aceh Tamiang', 46),
('Aceh Tengah', 36),
('Aceh Tenggara', 47),
('Aceh Timur', 38),
('Aceh Utara', 58),
('Banda Aceh', 31),
('Bener Meriah', 37),
('Bireuen', 48),
('Gayo Lues', 55),
('langsa', 41),
('Lhokseumawe', 51),
('Nagan Raya', 56),
('Pidie', 42),
('Pidie Jaya', 43),
('Sabang', 32),
('Simeulue', 50);

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
(1, 'Kuta ALam', 31),
(2, 'Baiturahman', 31),
(3, 'Darussalam', 31),
(4, 'Bandar Baru', 31),
(5, 'Jaya Baru', 31),
(6, 'Geumpang', 42),
(7, 'Mane', 42),
(8, 'Glumpang Tiga', 42),
(9, 'Glumpang Baro', 42),
(10, 'Mutiara', 42),
(11, 'Mutiara Timur', 42),
(12, 'Tiro/Truseb', 42),
(13, 'Tangse', 42),
(14, 'Titeu/Keumala', 42),
(15, 'Sakti', 42),
(16, 'Mila', 42),
(17, 'Delima', 42),
(18, 'Grong Grong', 42),
(19, 'Indrajaya', 42),
(20, 'Peukan Baro', 42),
(21, 'Kembang Tanjung', 42),
(22, 'Simpang Tiga', 42),
(23, 'Kota Sigli', 42),
(24, 'Pidie', 42),
(25, 'Batee', 42),
(26, 'Muara Tiga', 42),
(27, 'Meureudu', 43),
(28, 'Meurah Dua', 43),
(29, 'Bandar Dua', 43),
(30, 'Jangka Buya', 43),
(31, 'Ulim', 43),
(32, 'Trienggadeng', 43),
(33, 'Panteraja', 43),
(35, 'Bandar Baru', 43),
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
(56, 'Peukan Bada', 44),
(57, 'Pulo Aceh', 44),
(58, 'Blang BIntang', 44),
(59, 'Sukajaya', 32),
(60, 'Sukakarya', 32),
(61, 'Samalanga', 48),
(62, 'Simpang Mamplam', 48),
(63, 'Pandrah', 48),
(64, 'Jeunieb', 48),
(65, 'Plimbang', 48),
(66, 'Peudada', 48),
(67, 'Juli', 48),
(68, 'Jeumpa', 48),
(69, 'Kota Juang', 48),
(70, 'Kuala', 48),
(71, 'Jangka', 48),
(72, 'Peusangan', 48),
(73, 'Peusangan Selatan', 48),
(74, 'Peusangan Siblah Krueng', 48),
(75, 'Makmur', 48),
(76, 'Ganda Pura', 48),
(77, 'Kuta Blang', 48),
(78, 'Johan Pahlawan', 40),
(79, 'Samatiga', 40),
(80, 'Bubon', 40),
(81, 'Arongan Lambalek', 40),
(82, 'Woyla', 40),
(83, 'Woyla Barat', 40),
(84, 'Woyla Timur', 40),
(85, 'Kaway XVI', 40),
(86, 'Meureubo', 40),
(87, 'Pantai Ceureumen', 40),
(88, 'Sungai Mas', 40),
(89, 'Manggeng', 53),
(90, 'Tangan-Tangan', 53),
(91, 'Blang Pidie', 53),
(92, 'Susoh', 53),
(93, 'Kuala Batee', 53),
(94, 'Babah Rot', 53),
(95, 'Teunom', 54),
(96, 'Panga', 54),
(97, 'Krueng Sabee', 54),
(98, 'Setia Bakti', 54),
(99, 'Sampoiniet', 54),
(100, 'Jaya', 54),
(101, 'Trumon', 39),
(102, 'Trumon Tengah', 39),
(103, 'Trumon Timur', 54),
(104, 'Bakongan', 39),
(105, 'Bakongan Timur', 39),
(106, 'Kluet Selatan', 39),
(107, 'Kluet Timur', 39),
(108, 'Kluet Utara', 39),
(109, 'Pasie Raja', 39),
(110, 'Kluet Tengah', 39),
(111, 'Tapak Tuan', 39),
(112, 'Sama Dua', 39),
(113, 'Sawang', 39),
(114, 'Meukek', 39),
(115, 'Labuhan Haji', 39),
(116, 'Labuhan Haji Timur', 39),
(117, 'Labuhan Haji Barat', 39),
(118, 'Pulau Banyak', 45),
(119, 'Singkil', 45),
(120, 'Singkil Utara', 45),
(121, 'Kuala Baru', 45),
(122, 'Simpang Kanan', 45),
(123, 'Gunung Meriah', 45),
(124, 'Danau Paris', 45),
(125, 'Suro Makmur', 45),
(126, 'Singkohor', 45),
(127, 'Kota Baharu', 45),
(128, 'Tamiang Hulu', 46),
(129, 'Kejuruan Muda', 46),
(130, 'Rantau', 46),
(131, 'Kota Kuala Simpang', 46),
(132, 'Seruway', 46),
(133, 'Bendahara', 46),
(134, 'Karang Baru', 46),
(135, 'Manyak Payed', 46),
(136, 'Linge', 36),
(137, 'Bintang', 36),
(138, 'Lut Tawar', 36),
(139, 'Kebayakan', 36),
(140, 'Pegasing', 36),
(142, 'Bebesen', 36),
(143, 'Kute Panang', 36),
(144, 'Silih Nara', 36),
(145, 'Ketol', 36),
(146, 'Celala', 36),
(147, 'Lawe Alas', 47),
(148, 'Babul Rahmah', 47),
(149, 'Lawe Sigala-Gala', 47),
(150, 'Babul Makmur', 47),
(151, 'Semadam', 47),
(152, 'Bambel', 47),
(153, 'Bukit Tusam', 47),
(154, 'Babussalam', 47),
(155, 'Lawe Bulan', 47),
(156, 'Badar', 47),
(157, 'Darul Hasanah', 47),
(158, 'Serba Jadi', 38),
(159, 'Simpang Jernih', 38),
(160, 'Birem Bayeun', 38),
(161, 'Rantau Selamat', 38),
(162, 'Sungai Raya', 38),
(163, 'Peureulak', 38),
(164, 'Peureulak Timur', 38),
(165, 'Peureulak Barat', 38),
(166, 'Ranto Peureulak', 38),
(167, 'Idi Rayeuk', 38),
(168, 'Peudawa', 38),
(169, 'Banda Alam', 38),
(170, 'Idi Tunong', 38),
(171, 'Darul Ihsan', 38),
(172, 'Darul Aman', 38),
(173, 'Nurussalam', 38),
(174, 'Julok', 38),
(175, 'Indra Makmur', 38),
(176, 'Pante Beudari', 38),
(177, 'Simpang Ulim', 38),
(178, 'Madat', 38),
(179, 'Sawang', 58),
(180, 'Nisam', 58),
(181, 'Kuta Makmur', 58),
(182, 'Simpang Keramat', 58),
(183, 'Syamtalira Bayu', 58),
(184, 'Meurah Mulia', 58),
(185, 'Matangkuli', 58),
(186, 'Paya Bakong', 58),
(187, 'Cot Girek', 58),
(188, 'Tanah Jambo Aye', 58),
(189, 'Langkahan', 58),
(190, 'Seunudon', 58),
(191, 'Baktiya', 58),
(192, 'Baktiya Barat', 58),
(193, 'Lhoksukon', 58),
(194, 'Tanah Luas', 58),
(195, 'Nibong', 58),
(196, 'Samudera', 58),
(197, 'Syamtalira Aron', 58),
(198, 'Tanah Pasir', 58),
(199, 'Muara Batu', 58),
(200, 'Dewantara', 58),
(201, 'Meuraxa', 31),
(202, 'Jaya Baru', 31),
(203, 'Banda Raya', 31),
(204, 'Baiturrahman', 31),
(205, 'Lueng Bata', 31),
(206, 'Kuta Alam', 31),
(207, 'Kuta Raja', 31),
(208, 'Syiah Kuala', 31),
(209, 'Ulee Kareng', 31),
(210, 'Timang Gajah', 37),
(211, 'Pintu Rime Gayo', 37),
(212, 'Bukit', 37),
(213, 'Wih Pesam', 37),
(214, 'Bandar', 37),
(215, 'Syiah Utama', 37),
(216, 'Permata', 37),
(217, 'Kuta Panjang', 55),
(218, 'Blang Jerango', 55),
(219, 'Blang Kejeren', 55),
(220, 'Putri Betung', 55),
(221, 'Debun Gelang', 55),
(222, 'Blang Pegayon', 55),
(223, 'Pinding', 55),
(224, 'Rikit Gaib', 55),
(225, 'Pantan Cuaca', 55),
(226, 'Terangon', 55),
(227, 'Tripe Jaya', 55),
(228, 'Langsa Timur', 41),
(229, 'Langsa Barat', 41),
(230, 'Langsa Kota', 41),
(231, 'Blang Mangat', 51),
(232, 'Muara Dua', 51),
(233, 'Banda Sakti', 51),
(234, 'Darul Makmur', 56),
(235, 'Kuala', 56),
(236, 'Beutong', 56),
(237, 'Seunagan', 56),
(238, 'Seunagan Timur', 56),
(239, 'Teupah Selatan', 50),
(240, 'Simeulue Timur', 50),
(241, 'Teupah Barat', 50),
(242, 'Simeulue Tengah', 50),
(243, 'Teluk Dalam', 50),
(244, 'Salang', 50),
(245, 'Simeulue Barat', 50),
(246, 'Alafan', 50),
(247, 'Simpang Kiri', 52),
(248, 'Penanggalan', 52),
(249, 'Rundeng', 52),
(250, 'Sultan Daulat', 52),
(251, 'Longkib', 52);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_kecamatan` int(50) NOT NULL,
  `id_kabupaten` int(50) NOT NULL,
  `kode_pengaduan` int(255) NOT NULL,
  `kondisi` int(3) NOT NULL,
  `lat` int(50) NOT NULL,
  `lon` int(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `luas_jalan` int(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `tanggal_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_pelapor` varchar(50) NOT NULL,
  `no_ktp_pelapor` int(20) NOT NULL,
  `alamat_pelapor` varchar(255) NOT NULL,
  `no_hp_pelapor` varchar(15) NOT NULL,
  `nama_jalan` varchar(255) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_kecamatan`, `id_kabupaten`, `kode_pengaduan`, `kondisi`, `lat`, `lon`, `desa`, `keterangan`, `luas_jalan`, `photo`, `tanggal_create`, `nama_pelapor`, `no_ktp_pelapor`, `alamat_pelapor`, `no_hp_pelapor`, `nama_jalan`, `status`) VALUES
(4, 44, 2, 1, 5, 97, '1', '1', 1, 'PENGADUAN1500543037WhatsApp_Image_2017-07-17_at_17_13_51.jpeg', '2017-07-20 09:53:27', '1', 1, '1', '1', '1', 1),
(3, 54, 5, 1, 5, 97, '9', '9', 9, 'PENGADUAN1500544515WhatsApp_Image_2017-07-17_at_17_13_51.jpeg', '2017-07-20 10:01:16', '9', 9, '9', '9', '9', 0),
(3, 53, 6, 3, 5, 97, '8', '8', 8, 'PENGADUAN1500544782WhatsApp_Image_2017-07-18_at_19_51_29.jpeg', '2017-07-20 10:01:10', '8', 8, '8', '8', '8', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `fungsi`
--
ALTER TABLE `fungsi`
  ADD PRIMARY KEY (`kode_fungsi`);

--
-- Indexes for table `jalan`
--
ALTER TABLE `jalan`
  ADD PRIMARY KEY (`kode_ruas`);

--
-- Indexes for table `jalan_rusak`
--
ALTER TABLE `jalan_rusak`
  ADD PRIMARY KEY (`kode_jalan_rusak`),
  ADD UNIQUE KEY `lat` (`lat`),
  ADD UNIQUE KEY `lon` (`lon`);

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
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`kode_pengaduan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fungsi`
--
ALTER TABLE `fungsi`
  MODIFY `kode_fungsi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;
--
-- AUTO_INCREMENT for table `jalan_rusak`
--
ALTER TABLE `jalan_rusak`
  MODIFY `kode_jalan_rusak` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `kode_pengaduan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
