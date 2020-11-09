-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 01:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_persewaan_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kodebuku` char(5) NOT NULL,
  `judulbuku` varchar(25) NOT NULL,
  `penerbit` varchar(25) NOT NULL,
  `pengarang` varchar(25) NOT NULL,
  `hargasewa` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kodebuku`, `judulbuku`, `penerbit`, `pengarang`, `hargasewa`) VALUES
('AAA', 'Belajar php', 'Bailram.co', 'Dhimas Bayu', 10000),
('AB', 'Belajar HTML', 'Bailram.co', 'Dhimas Bayu', 5000),
('ABC', 'Belajar Membuat Website', 'LSP Komputer', 'Dhimas Bayu', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `nomorfaktur` char(5) NOT NULL,
  `tanggalfaktur` date NOT NULL,
  `namakonsumen` varchar(25) NOT NULL,
  `kodebuku` char(5) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `hargasewa` mediumint(8) UNSIGNED NOT NULL,
  `hargatotal` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`nomorfaktur`, `tanggalfaktur`, `namakonsumen`, `kodebuku`, `jumlah`, `hargasewa`, `hargatotal`) VALUES
('11', '2020-11-09', 'Dhimas', 'AAA', 1, 10000, 10000),
('bb', '2020-11-09', 'Bayu', 'AB', 5, 5000, 25000),
('FAK01', '2020-11-09', 'Bayu', 'AB', 5, 5000, 25000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kodebuku`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`nomorfaktur`),
  ADD KEY `fk_kodebuku` (`kodebuku`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `fk_kodebuku` FOREIGN KEY (`kodebuku`) REFERENCES `buku` (`kodebuku`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
