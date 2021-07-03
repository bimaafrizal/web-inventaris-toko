-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 09:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitoko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_inventaris`
--

CREATE TABLE `tb_inventaris` (
  `id` int(255) NOT NULL,
  `Baju` varchar(256) NOT NULL,
  `Warna` varchar(256) NOT NULL,
  `Size` varchar(256) NOT NULL,
  `Jumlah` int(255) NOT NULL,
  `Harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_inventaris`
--

INSERT INTO `tb_inventaris` (`id`, `Baju`, `Warna`, `Size`, `Jumlah`, `Harga`) VALUES
(4, 'Kaos', 'pink', 'X', 30, 75000),
(6, 'Kaos Oblong', 'pink', 'X', 16, 1000000),
(7, 'Baju', 'pink', 'XL', 2, 250000),
(8, 'Baju Bolong bolong ', 'pink', 'XL', 4, 5000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
