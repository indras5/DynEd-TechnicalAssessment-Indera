-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2016 at 01:02 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `institusi`
--

-- --------------------------------------------------------

--
-- Table structure for table `institusi`
--

CREATE TABLE `institusi` (
  `kode_institusi` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institusi`
--

INSERT INTO `institusi` (`kode_institusi`, `nama`) VALUES
('A01', 'Institusi A'),
('B01', 'Institusi B'),
('C01', 'Institusi C');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `user` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kode_institusi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`user`, `nama`, `kode_institusi`) VALUES
('aa1', 'member a1', 'A01'),
('aa2', 'member a2', 'A01'),
('aa3', 'member a3', 'A01'),
('bb1', 'member b1', 'B01'),
('bb2', 'member b2', 'B01'),
('bb3', 'member b3', 'B01'),
('cc1', 'member c1', 'C01'),
('cc2', 'member c2', 'C01'),
('cc3', 'member c3', 'C01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(5) NOT NULL,
  `user` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `user`, `password`) VALUES
(1, 'aa1', '123a5'),
(2, 'bb1', '123b5'),
(3, 'cc1', '123c5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `institusi`
--
ALTER TABLE `institusi`
  ADD PRIMARY KEY (`kode_institusi`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
