-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2016 at 01:01 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `kode_siswa` varchar(5) NOT NULL,
  `jumlah_benar` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`kode_siswa`, `jumlah_benar`) VALUES
('A001', 1),
('A002', 5);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `kode_siswa` varchar(5) NOT NULL,
  `nama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`kode_siswa`, `nama`) VALUES
('A001', 'Indera'),
('A002', 'Surya');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_kuis` int(5) NOT NULL,
  `soal` varchar(100) NOT NULL,
  `pilihan_a` varchar(50) NOT NULL,
  `pilihan_b` varchar(50) NOT NULL,
  `pilihan_c` varchar(50) NOT NULL,
  `pilihan_d` varchar(50) NOT NULL,
  `kunci` enum('A','B','C','D') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_kuis`, `soal`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `kunci`) VALUES
(1, 'soal 01 soal 01 soal 01 soal 01 soal 01 soal 01 soal 01 soal 01 soal 01', '1', '2', '3', '4', 'C'),
(2, 'soal 02 soal 02 soal 02 soal 02 soal 02 soal 02 soal 02 soal 02 soal 02', '1', '2', '3', '4', 'B'),
(3, 'soal 03 soal 03 soal 03 soal 03 soal 03 soal 03 soal 03 soal 03 soal 03', '1', '2', '3', '4', 'A'),
(4, 'soal 04 soal 04 soal 04 soal 04 soal 04 soal 04 soal 04 soal 04 soal 04', '1', '2', '3', '4', 'C'),
(5, 'soal 05 soal 05 soal 05 soal 05 soal 05 soal 05 soal 05 soal 05 soal 05', '1', '2', '3', '4', 'C'),
(6, 'soal 06 soal 06 soal 06 soal 06 soal 06 soal 06 soal 06 soal 06 soal 06', '1', '2', '3', '4', 'C'),
(7, 'soal 07 soal 07 soal 07 soal 07 soal 07 soal 07 soal 07 soal 07 soal 07', '1', '2', '3', '4', 'C'),
(8, 'soal 08 soal 08 soal 08 soal 08 soal 08 soal 08 soal 08 soal 08 soal 08', '1', '2', '3', '4', 'B'),
(9, 'soal 09 soal 09 soal 09 soal 09 soal 09 soal 09 soal 09 soal 09 soal 09', '1', '2', '3', '4', 'A'),
(10, 'soal 10 soal 10 soal 10 soal 10 soal 10 soal 10 soal 10 soal 10 soal 10', '1', '2', '3', '4', 'C'),
(11, 'soal 11 soal 11 soal 11 soal 11 soal 11 soal 11 soal 11 soal 11 soal 11', '1', '2', '3', '4', 'C'),
(12, 'soal 12 soal 12 soal 12 soal 12 soal 12 soal 12 soal 12 soal 12 soal 12', '1', '2', '3', '4', 'C'),
(13, 'soal 13 soal 13 soal 13 soal 13 soal 13 soal 13 soal 13 soal 13 soal 13', '1', '2', '3', '4', 'C'),
(14, 'soal 14 soal 14 soal 14 soal 14 soal 14 soal 14 soal 14 soal 14 soal 14', '1', '2', '3', '4', 'B'),
(15, 'soal 15 soal 15 soal 15 soal 15 soal 15 soal 15 soal 15 soal 15 soal 15', '1', '2', '3', '4', 'B'),
(16, 'soal 16 soal 16 soal 16 soal 16 soal 16 soal 16 soal 16 soal 16 soal 16', '1', '2', '3', '4', 'C'),
(17, 'soal 17 soal 17 soal 17 soal 17 soal 17 soal 17 soal 17 soal 17 soal 17', '1', '2', '3', '4', 'C'),
(18, 'soal 18 soal 18 soal 18 soal 18 soal 18 soal 18 soal 18 soal 18 soal 18', '1', '2', '3', '4', 'C'),
(19, 'soal 19 soal 19 soal 19 soal 19 soal 19 soal 19 soal 19 soal 19 soal 19', '1', '2', '3', '4', 'C'),
(20, 'soal 20 soal 20 soal 20 soal 20 soal 20 soal 20 soal 20 soal 20 soal 20', '1', '2', '3', '4', 'B'),
(21, 'soal 21 soal 21 soal 21 soal 21 soal 21 soal 21 soal 21 soal 21 soal 21', '1', '2', '3', '4', 'A'),
(22, 'soal 22 soal 22 soal 22 soal 22 soal 22 soal 22 soal 22 soal 22 soal 22', '1', '2', '3', '4', 'D'),
(23, 'soal 23 soal 23 soal 23 soal 23 soal 23 soal 23 soal 23 soal 23 soal 23', '1', '2', '3', '4', 'A'),
(24, 'soal 24 soal 24 soal 24 soal 24 soal 24 soal 24 soal 24 soal 24 soal 24', '1', '2', '3', '4', 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`kode_siswa`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_kuis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_kuis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
