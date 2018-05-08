-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 03:54 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama_lengkap`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('hariririski', '6d64dbf5f02d04d2f72f4c26071f6fc0', 'Hariri Riski');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasislitas` int(100) NOT NULL,
  `nama_fasilitas` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_kamar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasislitas`, `nama_fasilitas`, `jumlah`, `id_kamar`) VALUES
(1, 'Ac Politron', 2, 'AGsNlp1iRkhe27qdmX0n'),
(2, 'Lemari Pakaian', 1, 'AGsNlp1iRkhe27qdmX0n'),
(3, 'TV', 1, 'AGsNlp1iRkhe27qdmX0n'),
(4, 'TV 32inc', 1, '90OU1XCh2q6n7gYysFmD');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id_jenis_kelamin` int(5) NOT NULL,
  `nama_jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id_jenis_kelamin`, `nama_jenis_kelamin`) VALUES
(14, 'banner.jpg'),
(12, 'Laki-Laki'),
(13, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_rs`
--

CREATE TABLE `jenis_rs` (
  `id_jenis_rs` int(5) NOT NULL,
  `nama_jenis_rs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_rs`
--

INSERT INTO `jenis_rs` (`id_jenis_rs`, `nama_jenis_rs`) VALUES
(5, 'Rumah Sakit Ibu Dan Anak (RSIA)'),
(6, 'Rumah Sakit Jiwa (RSJ)'),
(4, 'Rumah Sakit Umum (RSU)');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ruang`
--

CREATE TABLE `jenis_ruang` (
  `id_jenis_ruang` int(5) NOT NULL,
  `nama_jenis_ruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_ruang`
--

INSERT INTO `jenis_ruang` (`id_jenis_ruang`, `nama_jenis_ruang`) VALUES
(6, 'Anak'),
(7, 'Anak (Luka Bakar)'),
(11, 'Bedah'),
(31, 'CVCU/ICCU'),
(32, 'HCU'),
(28, 'ICU/RICU'),
(21, 'Infeksi'),
(24, 'Isolasi Air Borne'),
(26, 'Isolasi Imunisasi Menurun'),
(27, 'Isolasi Radioaktif'),
(25, 'Isolasi TB MDR'),
(16, 'Jantung'),
(20, 'JIwa'),
(10, 'Kandungan'),
(12, 'Kanker'),
(9, 'Kebidanan'),
(33, 'Kedokteran Nuklir'),
(18, 'Kulit dan Kelamin'),
(22, 'Luka Bakar'),
(13, 'Mata'),
(23, 'NAPZA'),
(29, 'NICU'),
(17, 'Orthopedi'),
(15, 'Paru'),
(8, 'Penyakit Dalam'),
(30, 'PICU'),
(19, 'Saraf'),
(14, 'THT'),
(5, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kelas_kamar` int(5) NOT NULL,
  `id_kamar` varchar(100) NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `id_ruang` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kelas_kamar`, `id_kamar`, `nama_kamar`, `id_ruang`) VALUES
(3, '90OU1XCh2q6n7gYysFmD', '1111', 3),
(5, 'AGsNlp1iRkhe27qdmX0n', 'Haririri', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_kamar`
--

CREATE TABLE `kelas_kamar` (
  `id_kelas_kamar` int(5) NOT NULL,
  `nama_kelas_kamar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_kamar`
--

INSERT INTO `kelas_kamar` (`id_kelas_kamar`, `nama_kelas_kamar`) VALUES
(8, 'Intermediate'),
(9, 'Isolasi'),
(5, 'Kelas 1'),
(6, 'Kelas 2'),
(7, 'Kelas 3'),
(10, 'Rawat Khusus'),
(11, 'Stroke Care Unit'),
(3, 'Super VIP'),
(4, 'VIP');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_rs`
--

CREATE TABLE `kelas_rs` (
  `id_kelas_rs` int(5) NOT NULL,
  `nama_kelas_rs` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_rs`
--

INSERT INTO `kelas_rs` (`id_kelas_rs`, `nama_kelas_rs`) VALUES
(3, 'A'),
(4, 'B'),
(7, 'Belum ditetapkan'),
(5, 'C'),
(6, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nik` varchar(30) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `id_jenis_kelamin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`nik`, `nama_pasien`, `id_jenis_kelamin`) VALUES
('0987654321', 'Hariririski', 12),
('134567890', 'Supranto', 12),
('1345678901', 'Harianto', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pemilik_rs`
--

CREATE TABLE `pemilik_rs` (
  `id_pemilik` int(5) NOT NULL,
  `nama_pemilik_rs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik_rs`
--

INSERT INTO `pemilik_rs` (`id_pemilik`, `nama_pemilik_rs`) VALUES
(4, 'Kabupaten/Kota'),
(6, 'Organisasi Sosial'),
(9, 'Perusahaan'),
(7, 'POLRI'),
(3, 'Propinsi'),
(8, 'Swasta/Lainnya'),
(5, 'TNI');

-- --------------------------------------------------------

--
-- Table structure for table `rawat`
--

CREATE TABLE `rawat` (
  `id_tempat_tidur` int(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  `id_rawat` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawat`
--

INSERT INTO `rawat` (`id_tempat_tidur`, `nik`, `tanggal_masuk`, `tanggal_keluar`, `id_rawat`) VALUES
(1, '134567890', '2018-04-01', '2018-04-20', 1),
(2, '1345678901', '2018-04-01', '2018-04-04', 2),
(1, '134567890', '2018-04-16', '2018-04-19', 3),
(8, '1345678901', '2018-04-16', '2018-04-28', 4),
(2, '0987654321', '2018-04-16', '2018-04-30', 5),
(14, '134567890', '2018-05-07', NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `rs`
--

CREATE TABLE `rs` (
  `kode_rs` int(10) NOT NULL,
  `nama_rs` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_pemilik` int(5) DEFAULT NULL,
  `id_kelas_rs` int(5) DEFAULT NULL,
  `id_jenis_rs` int(5) DEFAULT NULL,
  `verifikasi` int(2) DEFAULT NULL,
  `username_admin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rs`
--

INSERT INTO `rs` (`kode_rs`, `nama_rs`, `password`, `alamat`, `email`, `no_hp`, `gambar`, `tanggal_update`, `id_pemilik`, `id_kelas_rs`, `id_jenis_rs`, `verifikasi`, `username_admin`) VALUES
(1171015, 'RS Umum Daerah Dr. Zainoel Abidin', '3a2d7564baee79182ebc7b65084aabd1', 'Jl.Tgk.Daud Beureueh No.108 Banda Aceh', 'rsudza@acehprov.go.id', '0651-34562', 'zN0iZS4rQaLfvkmC3MAP.jpg', '2018-04-14 14:56:31', 3, 3, 4, 2, 'admin'),
(1171026, 'RS Tk. II Iskandar Muda Banda Aceh', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. T. Hamzah Bendahara No. 1 Banda Aceh', 'rumahsakitim@yahoo.com', '065124712', 'cuSwfYWPxA3qgNL8GCUv.jpg', '2018-04-14 14:57:37', 5, 4, 4, 1, 'admin'),
(1171085, 'RS Umum Malahayati', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Cut Nyak Dhien No : 498 ,Banda Aceh', 'rumahsakitmalahayati@yahoo.co.id', '065148114', 'bAoQMva6I3USy1k7Cslj.jpg', '2018-04-14 15:30:14', 6, 7, 4, 1, 'admin'),
(1171106, 'RS Umum Teuku Fakinah', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Jend.Sudirman 27-29,Banda Aceh', 'teungkufakinah.hospital@yahoo.com', '065141454', 'f8oVMw5i6bGEhBAK2gcN.jpg', '2018-04-14 15:30:22', 6, 5, 4, 1, 'admin'),
(1171110, 'RS Umum Daerah Meuraxa', '3a2d7564baee79182ebc7b65084aabd1', 'Jalan Soekarno Hatta Km.2 Desa Mibo Kecamatan Banda Raya Kota Banda Aceh', 'rsum@bandaacehkota.go.id', '065143097', 'VkTHofiWDNaCw1R9Ghnj.jpg', '2018-04-14 15:30:44', 4, 4, 4, 1, 'admin'),
(1171121, 'RS Ibu dan Anak Propinsi NAD', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Prof.A.Madjid Ibrahim I, No. 3 Banda Aceh', 'rsia@acehprov.go.id', '0651-637796', 'l0SF34bENXLDhJUActBx.jpg', '2018-04-14 15:30:27', 4, 4, 5, 1, 'admin'),
(1171143, 'RS Bhayangkara Banda Aceh', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Cut Nyak Dhien No. 23, Lamteumen Barat Banda Aceh', 'bhayangkara_banda_aceh@yahoo.co.id', '06517555750', 'e7FcsGWaB8LDlXCVhxTA.jpg', '2018-04-14 15:30:39', 7, 5, 6, 1, 'admin'),
(1171145, 'RS Umum Meutia', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Cut Meutia No. 55', 'mutia@gmail.com', '081288419988', NULL, '2018-04-14 15:30:49', 8, 6, 4, 1, 'admin'),
(1171146, 'RS Umum Cempaka Az Zahra Banda Aceh', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Pocut Baren, 36-40', 'rsu_azzahra@yahoo.com', '065131066', NULL, '2018-04-14 15:30:33', 9, 5, 4, 1, 'admin'),
(1171147, 'RS Umum Prince Nayef Bin Abdul Aziz Syiah Kuala Un', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Lingkar Kampus', 'hrd.rspn@gmail.com', '08116819755', 'kVr7Sh3iWZYKOop4m6qw.png', '2018-04-14 15:42:58', 9, 6, 4, 1, 'admin'),
(1171150, 'RS Umum Pertamedika Ummi Rosnati', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Sekolah No. 5 Gampoeng Ateuk Pahlawan, Kecamatan Baiturahman, Kota Banda Aceh 23241', 'office@rspur.co.id', '065135092', 'D1a2fYXkPMeG4oFWjZqd.jpg', '2018-04-14 15:43:03', 9, 5, 4, 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(15) NOT NULL,
  `nama_ruang` varchar(50) NOT NULL,
  `kode_rs` int(10) NOT NULL,
  `id_jenis_ruang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `kode_rs`, `id_jenis_ruang`) VALUES
(1, 'Berhasil', 1171015, 6),
(2, 'ibnu sina', 1171015, 13),
(3, 'Barbar', 1171145, 6),
(4, 'Aqsha2 (Pria)', 1171015, 8),
(5, 'Aqsha3 (Wanita)', 1171015, 8),
(6, 'Arafah 1', 1171015, 6),
(7, 'Arafah 2', 1171015, 10),
(8, 'Arafah 3', 1171015, 10),
(9, 'Bersalin', 1171015, 10),
(10, 'HCU Medical', 1171015, 32),
(11, 'MIna 1 (pria)', 1171015, 19),
(12, 'MIna 2 (Wanita)', 1171015, 19),
(13, 'NICU', 1171015, 29),
(14, 'Zamzam 1', 1171015, 5),
(15, 'Zamzam 2', 1171015, 5),
(16, 'Raudhah 1', 1171015, 16),
(17, 'Raudhah 2 (Bedah Wanita)', 1171015, 11),
(18, 'Raudhah 2 (Bedah Wanita)', 1171015, 11),
(19, 'Raudhah 4  (Bedah Pria)', 1171015, 11),
(20, 'Raudhah 5 (Bedah Pria)', 1171015, 11),
(21, 'Raudhah 6', 1171015, 11),
(22, 'Raudhah 7', 1171015, 11),
(23, 'Zamzam 3', 1171015, 5),
(24, 'Zamzam 4', 1171015, 5),
(25, 'HCU Surgical', 1171015, 32),
(26, 'Nabawi', 1171015, 18),
(27, 'Shafa', 1171015, 16),
(28, 'ICU 1', 1171015, 28),
(29, 'ICU 2', 1171015, 28),
(30, 'ICCU', 1171015, 31),
(31, 'PICU', 1171015, 30),
(32, 'RHCU', 1171015, 15),
(33, 'Marwah', 1171015, 15),
(34, 'ICU', 1171121, 28),
(35, 'NICU LEVEL 1 DAN 3', 1171121, 29),
(36, 'PICU', 1171121, 30),
(37, 'RAWAT ANAK', 1171121, 6),
(38, 'Asoka', 1171121, 5),
(39, 'Jeumpa', 1171121, 5),
(40, 'Mawar', 1171121, 5),
(41, 'Seuruni', 1171121, 5),
(42, 'Kenanga', 1171121, 5),
(43, 'Melur', 1171121, 5),
(44, 'Matahari', 1171121, 5),
(45, 'Melati', 1171121, 5),
(46, 'Seulanga', 1171121, 5),
(47, 'Teratai', 1171121, 5),
(48, 'Apel', 1171121, 5),
(49, 'Anggur', 1171121, 5),
(50, 'Jeruk', 1171121, 5),
(51, 'Markisa', 1171121, 5),
(52, 'Mangga', 1171121, 5),
(53, 'Manggis', 1171121, 5),
(54, 'Sirsak', 1171121, 5),
(55, 'Salak', 1171121, 5),
(56, 'Langsat', 1171121, 5),
(57, 'Rambutan', 1171121, 5),
(58, 'Kelinci', 1171121, 6),
(59, 'Panda', 1171121, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tempat_tidur`
--

CREATE TABLE `tempat_tidur` (
  `id_kamar` varchar(100) NOT NULL,
  `id_tempat_tidur` int(100) NOT NULL,
  `nama_tempat_tidur` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat_tidur`
--

INSERT INTO `tempat_tidur` (`id_kamar`, `id_tempat_tidur`, `nama_tempat_tidur`, `status`) VALUES
('AGsNlp1iRkhe27qdmX0n', 1, 'Kamar 1', 0),
('AGsNlp1iRkhe27qdmX0n', 2, 'Kamar 2', 0),
('AGsNlp1iRkhe27qdmX0n', 3, 'Kamar 3', 0),
('AGsNlp1iRkhe27qdmX0n', 4, 'Kamar 4', 0),
('AGsNlp1iRkhe27qdmX0n', 5, 'Kamar 5', 0),
('AGsNlp1iRkhe27qdmX0n', 6, 'Kamar 6', 0),
('AGsNlp1iRkhe27qdmX0n', 7, 'Kamar 7', 0),
('AGsNlp1iRkhe27qdmX0n', 8, 'Kamar 8', 0),
('AGsNlp1iRkhe27qdmX0n', 9, 'Kamar 9', 0),
('AGsNlp1iRkhe27qdmX0n', 10, 'Kamar 10', 0),
('AGsNlp1iRkhe27qdmX0n', 11, 'aaaa', 0),
('AGsNlp1iRkhe27qdmX0n', 12, 'yhu', 0),
('AGsNlp1iRkhe27qdmX0n', 13, 'Haririri', 0),
('90OU1XCh2q6n7gYysFmD', 14, 'Kamar 1', 1),
('90OU1XCh2q6n7gYysFmD', 15, 'Kamar 2', 0),
('90OU1XCh2q6n7gYysFmD', 16, 'Kamar 3', 0),
('90OU1XCh2q6n7gYysFmD', 17, 'Kamar 4', 0),
('90OU1XCh2q6n7gYysFmD', 18, 'Kamar 5', 0),
('90OU1XCh2q6n7gYysFmD', 19, 'Kamar 6', 0),
('90OU1XCh2q6n7gYysFmD', 20, 'Kamar 7', 0),
('90OU1XCh2q6n7gYysFmD', 21, 'Kamar 8', 0),
('90OU1XCh2q6n7gYysFmD', 22, 'Kamar 9', 0),
('90OU1XCh2q6n7gYysFmD', 23, 'Kamar 10', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasislitas`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis_kelamin`),
  ADD UNIQUE KEY `nama_jenis_kelamin` (`nama_jenis_kelamin`);

--
-- Indexes for table `jenis_rs`
--
ALTER TABLE `jenis_rs`
  ADD PRIMARY KEY (`id_jenis_rs`),
  ADD UNIQUE KEY `nama_jenis_rs` (`nama_jenis_rs`);

--
-- Indexes for table `jenis_ruang`
--
ALTER TABLE `jenis_ruang`
  ADD PRIMARY KEY (`id_jenis_ruang`),
  ADD UNIQUE KEY `nama_jenis_ruang` (`nama_jenis_ruang`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `kelas_kamar`
--
ALTER TABLE `kelas_kamar`
  ADD PRIMARY KEY (`id_kelas_kamar`),
  ADD UNIQUE KEY `nama_kelas_kamar` (`nama_kelas_kamar`);

--
-- Indexes for table `kelas_rs`
--
ALTER TABLE `kelas_rs`
  ADD PRIMARY KEY (`id_kelas_rs`),
  ADD UNIQUE KEY `nama_kelas_rs` (`nama_kelas_rs`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pemilik_rs`
--
ALTER TABLE `pemilik_rs`
  ADD PRIMARY KEY (`id_pemilik`),
  ADD UNIQUE KEY `nama_pemilik_rs` (`nama_pemilik_rs`);

--
-- Indexes for table `rawat`
--
ALTER TABLE `rawat`
  ADD PRIMARY KEY (`id_rawat`);

--
-- Indexes for table `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`kode_rs`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_tlp` (`no_hp`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `tempat_tidur`
--
ALTER TABLE `tempat_tidur`
  ADD PRIMARY KEY (`id_tempat_tidur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasislitas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id_jenis_kelamin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `jenis_rs`
--
ALTER TABLE `jenis_rs`
  MODIFY `id_jenis_rs` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jenis_ruang`
--
ALTER TABLE `jenis_ruang`
  MODIFY `id_jenis_ruang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `kelas_kamar`
--
ALTER TABLE `kelas_kamar`
  MODIFY `id_kelas_kamar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kelas_rs`
--
ALTER TABLE `kelas_rs`
  MODIFY `id_kelas_rs` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pemilik_rs`
--
ALTER TABLE `pemilik_rs`
  MODIFY `id_pemilik` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `rawat`
--
ALTER TABLE `rawat`
  MODIFY `id_rawat` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `tempat_tidur`
--
ALTER TABLE `tempat_tidur`
  MODIFY `id_tempat_tidur` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
