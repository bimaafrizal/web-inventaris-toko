-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 09:27 AM
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
-- Table structure for table `tb_useradmin`
--

CREATE TABLE `tb_useradmin` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `id_admin` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_useradmin`
--

INSERT INTO `tb_useradmin` (`id`, `username`, `id_admin`, `email`, `password`) VALUES
(1, 'hasan', '01', 'hasan@gmail.com', '$2y$10$5Anp0lUhlKJzXl7H5HbE3e2OF2Uq98RIguSki.Bx1NME4o.d/RBIy');

-- --------------------------------------------------------

--
-- Table structure for table `tb_userkasir`
--

CREATE TABLE `tb_userkasir` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `id_kasir` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_userkasir`
--

INSERT INTO `tb_userkasir` (`id`, `username`, `id_kasir`, `email`, `password`) VALUES
(5, 'hasan', '123', 'hasan@gmail.com', '$2y$10$3oEw6PvEyJppWXqkiRVn3uIwQB.IVH8/LwCzLanJZNk83ZOkqXMcS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_useradmin`
--
ALTER TABLE `tb_useradmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_userkasir`
--
ALTER TABLE `tb_userkasir`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_useradmin`
--
ALTER TABLE `tb_useradmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_userkasir`
--
ALTER TABLE `tb_userkasir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
