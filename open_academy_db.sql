-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2018 at 11:23 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `open_academy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `res_dosen`
--

CREATE TABLE `res_dosen` (
  `nid` varchar(20) NOT NULL,
  `nm_dosen` varchar(50) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_dosen`
--

INSERT INTO `res_dosen` (`nid`, `nm_dosen`, `id_jurusan`, `alamat`) VALUES
('Y.2.93.01.092 ', 'Eri Zuliarso', 1, 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `res_krs`
--

CREATE TABLE `res_krs` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nmmk` varchar(30) NOT NULL,
  `nm_dosen` varchar(20) NOT NULL,
  `prodi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_krs`
--

INSERT INTO `res_krs` (`nim`, `nama`, `nmmk`, `nm_dosen`, `prodi`) VALUES
('17.01.63.0005', 'Adham Hayukalbu', 'Web Services', 'Eri Zuliarso', 'S1 - Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `res_mahasiswas`
--

CREATE TABLE `res_mahasiswas` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_mahasiswas`
--

INSERT INTO `res_mahasiswas` (`nim`, `nama`, `id_jurusan`, `alamat`) VALUES
('17.01.63.0005', 'Adham Hayukalbu', 1, 'Plamongan Indah Blok I8 / 6 Semarang');

-- --------------------------------------------------------

--
-- Table structure for table `res_matakuliah`
--

CREATE TABLE `res_matakuliah` (
  `kdmk` char(6) NOT NULL,
  `nmmk` varchar(35) NOT NULL,
  `sks` int(11) NOT NULL,
  `prodi` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_matakuliah`
--

INSERT INTO `res_matakuliah` (`kdmk`, `nmmk`, `sks`, `prodi`) VALUES
('124B', 'Web Services', 3, 'S1 - Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `res_dosen`
--
ALTER TABLE `res_dosen`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `res_krs`
--
ALTER TABLE `res_krs`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `res_mahasiswas`
--
ALTER TABLE `res_mahasiswas`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `res_matakuliah`
--
ALTER TABLE `res_matakuliah`
  ADD PRIMARY KEY (`kdmk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
