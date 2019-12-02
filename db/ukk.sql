-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 10:29 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggotakk`
--

CREATE TABLE `anggotakk` (
  `Nik` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `JenisKel` char(20) NOT NULL,
  `Tl` varchar(50) NOT NULL,
  `Tgl` date NOT NULL,
  `Agama` varchar(50) NOT NULL,
  `Pendidikan` varchar(50) NOT NULL,
  `JenisPek` varchar(50) NOT NULL,
  `Kawin` tinyint(1) NOT NULL,
  `Hubkel` varchar(50) NOT NULL,
  `Kewarganegaraan` varchar(50) NOT NULL,
  `Nopaspor` varchar(50) DEFAULT NULL,
  `Nokitap` varchar(50) DEFAULT NULL,
  `Ayah` varchar(50) NOT NULL,
  `Ibu` varchar(50) NOT NULL,
  `Nokk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggotakk`
--

INSERT INTO `anggotakk` (`Nik`, `Nama`, `JenisKel`, `Tl`, `Tgl`, `Agama`, `Pendidikan`, `JenisPek`, `Kawin`, `Hubkel`, `Kewarganegaraan`, `Nopaspor`, `Nokitap`, `Ayah`, `Ibu`, `Nokk`) VALUES
('3316093112600064', 'SUMARI', 'LAKI-LAKI', 'BLORA', '1960-12-31', 'ISLAM', 'TAMAT SD/SEDERAJAT', 'WIRASWASTA', 1, 'KEPALA KELUARGA', 'WNI', '', '', 'BARJO', 'DJUATI', '3316092601083896');

-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `Nokk` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `RT/RW` varchar(20) NOT NULL,
  `Kodepos` int(50) NOT NULL,
  `Desakel` varchar(50) NOT NULL,
  `Kecamatan` varchar(50) NOT NULL,
  `Kabkota` varchar(50) NOT NULL,
  `Provinsi` varchar(50) NOT NULL,
  `kk` varchar(50) NOT NULL,
  `Kepkeluarga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`Nokk`, `Alamat`, `RT/RW`, `Kodepos`, `Desakel`, `Kecamatan`, `Kabkota`, `Provinsi`, `kk`, `Kepkeluarga`) VALUES
('123', 'JOGJA', '009/008', 6790, 'SDF', 'YUI', 'RTY', 'JAWA TENGAH', 'K89799', 'HIDAR'),
('3316092601083896', 'Jl.Gunung Slamet i/6B', '002/001', 58211, 'TEMPELAN', 'BLORA', 'BLORA', 'JAWA TENGAH', 'K33160870207', 'SUMARI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggotakk`
--
ALTER TABLE `anggotakk`
  ADD PRIMARY KEY (`Nik`),
  ADD KEY `Nokk` (`Nokk`),
  ADD KEY `Nokk_2` (`Nokk`);

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`Nokk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggotakk`
--
ALTER TABLE `anggotakk`
  ADD CONSTRAINT `anggotakk_ibfk_1` FOREIGN KEY (`Nokk`) REFERENCES `kk` (`Nokk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
