-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 07:50 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolahkoding`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbkelas`
--

CREATE TABLE `tbkelas` (
  `id_kelas` int(3) NOT NULL,
  `Namakelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkelas`
--

INSERT INTO `tbkelas` (`id_kelas`, `Namakelas`) VALUES
(1, 'Pagi'),
(2, 'Siang'),
(3, 'Sore'),
(4, 'Malam');

-- --------------------------------------------------------

--
-- Table structure for table `tbldibangstudi`
--

CREATE TABLE `tbldibangstudi` (
  `id_bidangstudi` int(5) NOT NULL,
  `Bidangstudi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldibangstudi`
--

INSERT INTO `tbldibangstudi` (`id_bidangstudi`, `Bidangstudi`) VALUES
(1, 'PHP'),
(2, 'Javascript'),
(3, 'Bootstrap'),
(4, 'Laravel'),
(5, 'Codegniter'),
(6, 'MySQL'),
(7, 'JQuery'),
(8, 'CSS'),
(9, 'ASP.net'),
(10, 'HTML');

-- --------------------------------------------------------

--
-- Table structure for table `tblguru`
--

CREATE TABLE `tblguru` (
  `id_guru` int(3) NOT NULL,
  `id_bidangstudi` int(5) NOT NULL,
  `Nip` int(10) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Nohandphoneguru` decimal(15,0) NOT NULL,
  `Alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblguru`
--

INSERT INTO `tblguru` (`id_guru`, `id_bidangstudi`, `Nip`, `Nama`, `Nohandphoneguru`, `Alamat`) VALUES
(1, 5, 11001, 'Ghiriyanti Raharja A', '789128987', 'DKI Jakarta'),
(71, 4, 11002, 'Nisha Khairun Nova', '78976867567', 'Tangerang'),
(72, 2, 11003, 'Tery Fitri Anggro', '785676254367', 'Palembang'),
(74, 5, 11004, 'Nova Aliza Syarin', '678687', 'Bekasi'),
(75, 3, 11005, 'Yulia Nafizah', '6757689876', 'Kuningan'),
(76, 7, 11006, 'Ferindha Nayshila', '789789878', 'Pontianak'),
(77, 3, 11007, 'Usy Shulatun', '768678765', 'Bandung'),
(78, 0, 11008, 'Firanda Azzahra', '789789', 'Samarinda');

-- --------------------------------------------------------

--
-- Table structure for table `tblmurid`
--

CREATE TABLE `tblmurid` (
  `id_murid` int(3) NOT NULL,
  `Nim` int(10) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Kelas` varchar(15) NOT NULL,
  `Nohandphonemurid` int(15) NOT NULL,
  `Alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbkelas`
--
ALTER TABLE `tbkelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbldibangstudi`
--
ALTER TABLE `tbldibangstudi`
  ADD PRIMARY KEY (`id_bidangstudi`);

--
-- Indexes for table `tblguru`
--
ALTER TABLE `tblguru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tblmurid`
--
ALTER TABLE `tblmurid`
  ADD PRIMARY KEY (`id_murid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbkelas`
--
ALTER TABLE `tbkelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbldibangstudi`
--
ALTER TABLE `tbldibangstudi`
  MODIFY `id_bidangstudi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblguru`
--
ALTER TABLE `tblguru`
  MODIFY `id_guru` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tblmurid`
--
ALTER TABLE `tblmurid`
  MODIFY `id_murid` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
