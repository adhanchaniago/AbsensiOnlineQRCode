-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 12:13 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absenonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_makul` varchar(255) NOT NULL,
  `kode_absen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_makul`, `kode_absen`) VALUES
('SI301', 'fhMTuw9nt5M='),
('SI302', 'zVl4Cnbjttk='),
('SI303', 'WKJHqks9dpU=');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nip`, `nama`, `jabatan`) VALUES
(1, '20000323', 'Zaelani', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `nama`, `alamat`) VALUES
(2, '123', 'Nama Dosen', 'Nganjuk'),
(22, '777', 'Zaelani', 'Nganjuk');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_matkul` varchar(255) NOT NULL,
  `1` enum('Y','T','-') NOT NULL,
  `2` enum('Y','T','-') NOT NULL,
  `3` enum('Y','T','-') NOT NULL,
  `4` enum('Y','T','-') NOT NULL,
  `5` enum('Y','T','-') NOT NULL,
  `6` enum('Y','T','-') NOT NULL,
  `7` enum('Y','T','-') NOT NULL,
  `8` enum('Y','T','-') NOT NULL,
  `9` enum('Y','T','-') NOT NULL,
  `10` enum('Y','T','-') NOT NULL,
  `11` enum('Y','T','-') NOT NULL,
  `12` enum('Y','T','-') NOT NULL,
  `13` enum('Y','T','-') NOT NULL,
  `14` enum('Y','T','-') NOT NULL,
  `kondisi` enum('true','false') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`nim`, `nama`, `id_matkul`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `kondisi`) VALUES
('1804411000091', 'Machsus Hadiri', 'SI303', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false'),
('180441100030', 'Mohamad Zaelani', 'SI301', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false'),
('180441100030', 'Mohamad Zaelani', 'SI302', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false'),
('180441100030', 'Mohamad Zaelani', 'SI303', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false'),
('180441100060', 'Yusuf Sugiono', 'SI301', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false'),
('180441100060', 'Yusuf Sugiono', 'SI302', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false'),
('180441100090', 'Hariri Firdaus', 'SI302', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false'),
('180441100090', 'Hariri Firdaus', 'SI303', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false'),
('180441100091', 'Machsus Hadiri', 'SI301', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false'),
('180441100091', 'Machsus Hadiri', 'SI302', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false'),
('180441100122', 'Viki Wahyudi', 'SI301', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false'),
('180441100122', 'Viki Wahyudi', 'SI303', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false'),
('180441100123', 'Ahmad Naufal Arifalhaq', 'SI301', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false'),
('180441100123', 'Ahmad Naufal Arifalhaq', 'SI302', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false'),
('180441100123', 'Ahmad Naufal Arifalhaq', 'SI303', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `nim` varchar(255) NOT NULL,
  `id_matkul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`nim`, `id_matkul`) VALUES
('180441100030', 'SI301'),
('180441100030', 'SI302'),
('180441100030', 'SI303'),
('180441100060', 'SI301'),
('180441100060', 'SI302'),
('180441100090', 'SI302'),
('180441100090', 'SI303'),
('180441100091', 'SI301'),
('180441100091', 'SI302'),
('180441100091', 'SI303'),
('180441100122', 'SI301'),
('180441100122', 'SI303'),
('180441100123', 'SI301'),
('180441100123', 'SI302'),
('180441100123', 'SI303');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `angkatan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `prodi`, `angkatan`, `alamat`) VALUES
(3, '180441100060', 'Yusuf Sugiono', 'Sistem Informasi', '2018', 'NGANJUK'),
(4, '180441100030', 'Mohamad Zaelani', 'Sistem Informasi', '2018', 'NGANJUK'),
(5, '180441100122', 'Viki Wahyudi', 'Sistem Informasi', '2018', 'Sampang'),
(6, '180441100090', 'Hariri Firdaus', 'Sistem Informasi', '2018', 'Bangkalan'),
(7, '180441100091', 'Machsus Hadiri', 'Sistem Informasi', '2018', 'Bangkalan'),
(8, '180441100123', 'Ahmad Naufal Arifalhaq', 'Sistem Informasi', '2018', 'Sampang');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `matkul` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam` time NOT NULL,
  `ruang` varchar(255) NOT NULL,
  `sks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nip`, `matkul`, `hari`, `jam`, `ruang`, `sks`) VALUES
('SI301', '123', 'Rekayasa Perangkat L.', 'Rabu', '09:15:00', 'Ruang F 307', '3'),
('SI302', '123', 'Desain Manajemen Jar.', 'Jum\'at', '06:45:00', 'Ruang F 307', '3'),
('SI303', '123', 'Analisa Proses Bisnis', 'Selasa', '12:45:00', 'Ruang Lab. TIA', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tidakhadir`
--

CREATE TABLE `tidakhadir` (
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_matkul` varchar(255) NOT NULL,
  `pertemuan` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tidakhadir`
--

INSERT INTO `tidakhadir` (`nim`, `nama`, `id_matkul`, `pertemuan`, `keterangan`, `bukti`) VALUES
('180441100030', 'Mohamad Zaelani', 'SI301', '1', 'sakit', '005.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','dosen','mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'dosen'),
(3, '180441100060', 'dd2eb170076a5dec97cdbbbbff9a4405', 'mahasiswa'),
(4, '180441100030', '383988ddb2eb48b8cac1be0adc6af886', 'mahasiswa'),
(5, '180441100122', '8a80878d5367609ac453ef03b12b95e5', 'mahasiswa'),
(6, '180441100090', '0220b2f4c4afdfbbc7c0e17224b628c8', 'mahasiswa'),
(7, '180441100091', '834a0491edc7e73c2f1d2d5dba9cd675', 'mahasiswa'),
(8, '180441100123', 'a7ef174d3ed272acd2b72913a7ef9d40', 'mahasiswa'),
(22, '777', 'f1c1592588411002af340cbaedd6fc33', 'dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_makul`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`nim`,`id_matkul`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`nim`,`id_matkul`),
  ADD KEY `nim` (`nim`),
  ADD KEY `nim_2` (`nim`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`,`nip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
