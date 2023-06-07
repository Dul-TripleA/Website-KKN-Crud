-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2023 at 04:48 PM
-- Server version: 10.3.37-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kknsalam_galeri`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `link` varchar(255) NOT NULL,
  `dokumentasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id`, `judul`, `slug`, `kategori`, `tanggal`, `link`, `dokumentasi`) VALUES
(20, 'Video 1', 'video-1', 'Wisata Salam', '2022-12-24', 'https://www.instagram.com/p/CmDErZCy69b/?igshid=MDJmNzVkMjY=', '1672537128_3366a27d20cd6a6d7a7f.jpg'),
(21, 'Gambar kesekian edit KESEKIAN', 'gambar-kesekian-edit-kesekian', 'Kegiatan Desa', '2022-12-24', '-', '1671935803_1effc8f5da860c2cd0de.jpg'),
(22, 'Anesss', 'anesss', 'Lain - Lain', '2022-12-27', '', '1672535693_9abb12c957fa907a9daa.jpg'),
(23, 'Gambar 3', 'gambar-3', 'UMKM', '2022-12-31', '', '1672535489_81e5cfbd192b7183c7fc.jpg'),
(24, 'Dea Update', 'dea-update', 'Lain - Lain', '2023-01-01', '', '1672850911_a741bd562ff7b5a1d097.jpg'),
(25, 'Gambar 2 R', 'gambar-2-r', 'Lain - Lain', '2023-02-01', '', '1672851183_7aa8e8ab855063d90581.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `desk` text NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `tanggal`, `kategori`, `desk`, `isi`, `foto`) VALUES
(1, 'Jalan Sehat Dusun Salam Updated', 'jalan-sehat-dusun-salam-updated', '2022-12-27', 'Kegiatan Desa', 'Jalan Sehat Memperingati Hari Ibu ke - 94 Dusun Salam', ' fiifhwiihvjhvsihdsvhsdivsisvsivs  uof udg uisgv uisgv us gvuisgv uisdvuisgvuisgvuis ui vuidsvuisvuisuwqeqr9uofuao vuyfeoyf8o yo yauhcaduyf8oeyrow yucu oewy 8row iohioad oua yfiaioa a vyaifo sio siov siov sio vsu uio hiaoaiodyf8oy 8owediu929ry8o f i uga uq2  rut37t7 fu y qiaukh vjkds gfuiew fug u gfuiywiu widy ui.,.', '1672626766_6f04023afff5baef1f1d.jpg'),
(2, 'Gambar 2new 2', 'gambar-2new-2', '2022-12-27', 'Aktivitas KKN', 'jkgasugioaf iastuiastfuiastuiatf7iafuat s7ft', 'uagfuiafiu asiftais fi7astfiatf7ias ifaifaiuk', '1672202908_eb41bbc3165179cac3c2.jpg'),
(3, 'Berita ke2', 'berita-ke2', '2022-12-31', 'Proker KKN', 'nias sy8w8oyfw8iyfy uyaufuia rt7iwtaiwtirfusfhi', 'b fya ufaiufkusyoifioyiaoyfuigfsdkf uoau9woi9ey7r8q39btyu y8qlkajpoiqrofihjdsvg bikfjsd fuudgukdzyfkesjx', '1675007033_16f0b5e051814bca6d99.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `ig` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `alamat`, `no_hp`, `ig`) VALUES
(1, 'salam@gmail.comUpdate', 'pinggir jalan', '098987654321', 'salam_kkn');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `sampul` varchar(100) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `sampul`, `ket`) VALUES
(6, 'Kegiatan Desa', '1672627297_06de37bdc9a00eb5033a.jpg', 'Informasi mengenai Kegiatan di Desa Salam'),
(7, 'Aktivitas KKN', '1672627241_9486930d4c2ec03a6f2a.jpg', 'Informasi mengenai Aktivitas KKN di Desa Salam'),
(9, 'Proker KKN', '1674916990_38552c426d872244278f.jpg', 'Informasi mengenai seluruh Proker KKN di Desa SalamUpdate');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'fitrohahmad8@gmail.com', '$2y$10$Ef5Bz6HUE9GoLSamlex10.ec3NX18a1L17AyxPiwnEJNdpeFqNYoO'),
(4, 'fandi.web2ti20a4@gmail.com', '$2y$10$89VKF22aJBJES43QOnoVpOClbJoLPLhrK2wnzRGS9fVlsqpLsGjU6');

-- --------------------------------------------------------

--
-- Table structure for table `perangkat`
--

CREATE TABLE `perangkat` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perangkat`
--

INSERT INTO `perangkat` (`id`, `nama`, `jabatan`, `foto`) VALUES
(1, 'Farda Trisna Aryanto Firmansyah', 'Koordinator Kelompok', '1675005222_fd80558f9e687c9a6671.png'),
(7, 'Sherly Septiana Heru Retno Putri', 'Ketua Kelompok A', '1675005316_bd88ff825aa4bd37be59.jpg'),
(10, 'Dea Fitriani', 'Ketua Kelompok B', '1675005402_b07f545048f9f747ed50.jpg'),
(12, 'Fany Lestari', 'Sekretaris 1', '1675005463_84c4e718fd77120ccfff.png'),
(13, 'Aknes Galih Sumirat', 'Sekretaris 2', '1675005494_087e1b92328f8849541c.png'),
(14, 'Rahmawati Desi Tri Wulandari', 'Bendahara', '1675005531_4b9cc155e9978004b028.jpg'),
(15, 'Akbar Syarif Pratama Putra', 'Sie Dokumentasi', '1675005605_17a7c0f85f0098a4f264.png'),
(16, 'Ma\'ruf Nur Muhammad', 'Sie Dokumentasi', '1675006876_4e04bfc17ce1dbae72d8.jpg'),
(17, 'Fitroh Ahmad Abdul Aziz', 'Sie Humas', '1675006161_a654ae174b2d3063ab0f.jpeg'),
(18, 'Ana Nur Afifah', 'Sie Humas', '1675006194_f2c128258434e6b29312.jpg'),
(19, 'Demina Iryo', 'Anggota', '1675006234_99c8cb80f0766474dab1.png');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `sampul` varchar(100) NOT NULL,
  `desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `judul`, `sampul`, `desk`) VALUES
(1, 'Selamat Datang di Desa Salam', '1672884676_993fd3f2c282033e01e0.jpg', 'Desa Salam berlokasi di Kecamatan Karangpandan UPDATE.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `perangkat`
--
ALTER TABLE `perangkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `perangkat`
--
ALTER TABLE `perangkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
