-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 05:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `les`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrasiku`
--

CREATE TABLE `registrasiku` (
  `ID` int(11) NOT NULL,
  `nama` char(255) DEFAULT NULL,
  `kelamin` char(255) DEFAULT NULL,
  `tempat_lahir` char(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` char(255) DEFAULT NULL,
  `telepon` char(255) DEFAULT NULL,
  `line` char(255) DEFAULT NULL,
  `asal_sekolah` char(255) DEFAULT NULL,
  `kelas` char(255) DEFAULT NULL,
  `nama_ayah` char(255) DEFAULT NULL,
  `telpon_ayah` char(255) DEFAULT NULL,
  `pekerjaan_ayah` char(255) DEFAULT NULL,
  `telpon_ibu` char(255) DEFAULT NULL,
  `pekerjaan_ibu` char(255) DEFAULT NULL,
  `alamat_ortu` char(255) DEFAULT NULL,
  `kode_pos` char(255) DEFAULT NULL,
  `email_ortu` char(255) DEFAULT NULL,
  `program_les` char(255) DEFAULT NULL,
  `biaya_pendidikan` char(255) DEFAULT NULL,
  `jenis_pembayaran` char(255) DEFAULT NULL,
  `jumlah_pembayaran` char(255) DEFAULT NULL,
  `batas_lunas` date DEFAULT NULL,
  `foto_siswa` mediumblob DEFAULT NULL,
  `keterangan` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasiku`
--

INSERT INTO `registrasiku` (`ID`, `nama`, `kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `telepon`, `line`, `asal_sekolah`, `kelas`, `nama_ayah`, `telpon_ayah`, `pekerjaan_ayah`, `telpon_ibu`, `pekerjaan_ibu`, `alamat_ortu`, `kode_pos`, `email_ortu`, `program_les`, `biaya_pendidikan`, `jenis_pembayaran`, `jumlah_pembayaran`, `batas_lunas`, `foto_siswa`, `keterangan`) VALUES
(1, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ucok', NULL, 'bandung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'dani', NULL, 'udada', '2020-01-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'asda', 'Laki-Laki', 'adad', '2020-04-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'asda', 'Perempuan', '', '0000-00-00', '', '', '', '', 'X IPA', '', '', '', '', '', '', '', '', 'Focus Reguler', '', NULL, NULL, NULL, NULL, NULL),
(7, 'asd', 'Perempuan', 'a', '2020-04-03', 'd', 'dd', 'd', 'd', 'X IPA', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'marcellantonius18@gmail.com', 'Focus Reguler', '1111111111111111111', NULL, NULL, NULL, NULL, NULL),
(8, 'ada', 'Perempuan', 'a', '0000-00-00', 'a', 'a', 'a', 'a', 'ALUMNI IPA', 'a', 'a', 'a', '', 'aa', 'Jl. BBK Ciparay GG. At-tauid', 'a', 'marcellantonius18@gmail.com', 'Focus Reguler', 'as', 'as', 'asdadada', NULL, NULL, NULL),
(9, 'Marcell Antonius', 'Perempuan', 'aa', '0000-00-00', '', 'a', 'a', 'a', 'ALUMNI IPA', 'a', 'a', 'aa', 'a', 'a', 'a', 'a', 'marcellantonius18@gmail.com', 'Focus Reguler', '', '', '', '2020-04-11', NULL, NULL),
(10, '', 'Perempuan', '', '0000-00-00', '', '', '', '', 'X IPA', '', '', '', '', '', '', '', '', 'Focus Reguler', '', '', '', '0000-00-00', 0x72656163742e706e67, NULL),
(11, '', 'Perempuan', '', '0000-00-00', '', '', '', '', 'X IPA', '', '', '', '', '', '', '', '', 'Focus Reguler', '', '', '', '0000-00-00', '', 'kotol'),
(12, 'Marcell Antonius', 'Laki-Laki', 'Bandung', '2019-12-30', 'bacip', '089540101469', 'ucok', 'SMAK', 'ALUMNI IPA', 'ucok', 'asdada', 'adadad', 'adsada', 'adadada', 'Jl. BBK Ciparay GG. At-tauid', '40221', 'marcellantonius18@gmail.com', 'Excellent', '12222222222', 'adadadada', '12222222222222222', '2020-04-03', 0x72656163742e706e67, 'MEMEK\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `userlis`
--

CREATE TABLE `userlis` (
  `ID` int(11) NOT NULL,
  `username` char(25) DEFAULT NULL,
  `password` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlis`
--

INSERT INTO `userlis` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'manager', 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrasiku`
--
ALTER TABLE `registrasiku`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userlis`
--
ALTER TABLE `userlis`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrasiku`
--
ALTER TABLE `registrasiku`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `userlis`
--
ALTER TABLE `userlis`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
