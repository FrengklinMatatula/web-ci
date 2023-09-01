-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 26 Sep 2022 pada 07.27
-- Versi Server: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id` int(11) NOT NULL,
  `nip` double NOT NULL,
  `namadosen` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `namadosen`) VALUES
(1, 198610022010103, 'Rommy kaestria,M.Kom'),
(6, 198612022018105, 'Deden Andriawan.M.Kom'),
(7, 198611012015102, 'Frengklin Matatula,S.Kom,MMSI'),
(8, 196801062018102, 'Dr.Frans,M.Kom'),
(9, 198610082010002, 'Arliyana.M.Kom'),
(10, 198601112022102, 'Dewanto Zulkarnain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id` int(11) NOT NULL,
  `namajurusan` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `namajurusan`) VALUES
(1, 'Teknik Informatika'),
(2, 'Sistem Informasi'),
(3, 'Manajemen Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL,
  `kode` int(15) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `sks` int(2) NOT NULL,
  `semester` int(2) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `kode`, `matakuliah`, `sks`, `semester`, `jurusan`) VALUES
(1, 101, 'website Framework 2', 3, 3, 'Teknik Informatika'),
(2, 102, ' pemprograman web', 2, 4, 'Sistem Informasi'),
(3, 103, 'Pancasila ', 3, 5, 'Sistem Informasi'),
(14, 104, 'Bahasa Inggris 2', 2, 4, 'Sistem Informatika'),
(18, 105, 'ADBO ', 2, 3, 'Sistem Informatika'),
(19, 106, 'Basis Data', 3, 4, 'Manajemen Informatika'),
(22, 107, 'jaringan', 2, 3, 'Manajemen Informatika'),
(23, 108, 'Mobile Dasar Lanjutan', 2, 3, 'Teknik Informatika'),
(25, 110, 'etika profesi', 2, 2, 'Teknik Informatika'),
(44, 112, 'framework dasar', 2, 2, 'Sistem Informatika'),
(47, 113, 'jaringan networking', 4, 5, 'Teknik Informatika'),
(58, 114, 'PBO dasar', 2, 2, 'Manajemen Informatika'),
(60, 115, 'Bahasa Inggris', 2, 4, 'Teknik Informatika'),
(61, 116, 'PBO dasar', 2, 4, 'Teknik Informatika'),
(63, 117, 'PBO dasar 2', 3, 3, 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_mahasiswa` (
  `id` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `matakuliah` varchar(35) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `jurusan` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id`, `kode`, `matakuliah`, `sks`, `semester`, `jurusan`) VALUES
(1, 101, 'Bahasa Inggris', 2, 4, 'Teknik Informatika'),
(6, 102, 'PBO', 4, 4, 'Sistem Informasi'),
(3, 103, 'ADBO', 2, 2, 'Manajemen Informatika'),
(4, 104, 'web framework', 4, 4, 'Ilmu Komputer'),
(7, 105, 'jaringan', 2, 2, 'Manajemen Informatika'),
(5, 112, 'Dasar Pancasila', 2, 4, 'Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=113;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
