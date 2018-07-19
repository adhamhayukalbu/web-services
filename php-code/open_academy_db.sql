-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 19, 2018 at 04:58 AM
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
  `nama` varchar(50) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_dosen`
--

INSERT INTO `res_dosen` (`nid`, `nama`, `jurusan_id`, `alamat`) VALUES
('Y.2.90.03.054', 'Dwi Agus Diartono', 2, ''),
('Y.2.91.05.061', 'Edy Supriyanto', 2, ''),
('Y.2.93.01.092', 'Dr. Drs ERI ZULIARSO M.Kom', 1, ''),
('YS.2.97.03.006', 'Arief Jananto', 2, ''),
('YS.2.99.08.023', 'Agus Prasetyo Utomo', 2, ''),
('YU.2.04.04.065', 'EDDY NURRAHARJO,S.T., M.Cs.', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `res_jurusan`
--

CREATE TABLE `res_jurusan` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_jurusan`
--

INSERT INTO `res_jurusan` (`id`, `nama`) VALUES
(1, 'S1 - Teknik Informatika'),
(2, 'S1 - Sistem Informasi'),
(3, 'S1 - Teknik Sipil'),
(4, 'S1 - Teknik Mesin'),
(5, 'S1 - Arsitektur'),
(6, 'S1 - Akuntansi'),
(7, 'S1 - Arsitektur Interior'),
(8, 'S1 - Manajemen Informatika'),
(9, 'S1 - Ekonomi Islam'),
(10, 'S1 - Ilmu Komunikasi'),
(11, 'S1 - Psikologi'),
(12, 'S1 - Kedokteran'),
(13, 'S1 - Kesehatan Masyarakat'),
(14, 'S1 - Kesehatan Lingkungan'),
(15, 'S1 - Teknik Industri');

-- --------------------------------------------------------

--
-- Table structure for table `res_mahasiswas`
--

CREATE TABLE `res_mahasiswas` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_mahasiswas`
--

INSERT INTO `res_mahasiswas` (`nim`, `nama`, `jurusan_id`, `alamat`) VALUES
('17.01.63.0005', 'Adham Hayukalbu', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `res_matakuliah`
--

CREATE TABLE `res_matakuliah` (
  `reference` char(6) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `sks` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_matakuliah`
--

INSERT INTO `res_matakuliah` (`reference`, `nama`, `sks`, `jurusan_id`) VALUES
('XffUkI', 'WEB SERVICE', 2, 1),
('2QCtFe', 'PEMROGRAMAN WEB MOBILE', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `res_dosen`
--
ALTER TABLE `res_dosen`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `res_jurusan`
--
ALTER TABLE `res_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `res_mahasiswas`
--
ALTER TABLE `res_mahasiswas`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `res_matakuliah`
--
ALTER TABLE `res_matakuliah`
  ADD PRIMARY KEY (`reference`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `res_jurusan`
--
ALTER TABLE `res_jurusan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
