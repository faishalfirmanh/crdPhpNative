-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 03:56 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `native`
--

-- --------------------------------------------------------

--
-- Table structure for table `peng`
--

CREATE TABLE `peng` (
  `idPengunjung` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `usia` int(11) NOT NULL,
  `alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peng`
--

INSERT INTO `peng` (`idPengunjung`, `nama`, `usia`, `alamat`) VALUES
(5, 'arga', 22, 'mojokerto'),
(9, 'pilip', 23, 'balong'),
(11, 'disel cok', 223, 'driyorejo Gersik'),
(12, 'ninja', 45, 'wungil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peng`
--
ALTER TABLE `peng`
  ADD PRIMARY KEY (`idPengunjung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peng`
--
ALTER TABLE `peng`
  MODIFY `idPengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
