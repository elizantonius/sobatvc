-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2021 at 11:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sobatvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `reperal`
--

CREATE TABLE `reperal` (
  `idreperal` int(11) NOT NULL,
  `namapemilik` varchar(100) DEFAULT NULL,
  `nohp` varchar(100) DEFAULT NULL,
  `namausaha` varchar(100) DEFAULT NULL,
  `alamatusaha` varchar(100) DEFAULT NULL,
  `metode_akusisi` enum('Livin by mandiri','Manual') DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `status` enum('proses','closing') DEFAULT 'proses',
  `Tanggal` date DEFAULT NULL,
  `idusers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reperal`
--

INSERT INTO `reperal` (`idreperal`, `namapemilik`, `nohp`, `namausaha`, `alamatusaha`, `metode_akusisi`, `foto`, `status`, `Tanggal`, `idusers`) VALUES
(30, 'Elton Fenetiruma', '082198647924', 'Toko Permata', 'Tanah Hitam', 'Livin by mandiri', '1366232886688.jpg', 'proses', '2021-12-05', 11),
(31, 'Thorgioni Fenetiruma', '08219864444', 'Toko Indah', 'Dok 5 Atas', 'Manual', '1401938669273.jpg', 'closing', '2021-12-06', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `namasales` varchar(100) DEFAULT NULL,
  `nohp` varchar(100) DEFAULT NULL,
  `distributor` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` enum('admin','seles') NOT NULL DEFAULT 'seles'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `namasales`, `nohp`, `distributor`, `username`, `password`, `role`) VALUES
(1, 'adminsobatvc', '081343126668', 'ad', 'admin', '$2a$12$gEfv0QClgehTtYNwSj7OvO47r2pqkXJuE2cbfxzLiM4SbBcoISfHW', 'admin'),
(9, 'Abraham Victor', '0821577854679', 'test', 'vic', '$2y$10$7X7hFQwnWdOkXzDKJAZGweC8oMCiWKzzL46IYDNUGq.EMjKGPF1kO', 'seles'),
(10, 'Thorgi Fenet', '081343126668', 'ATK', 'thorgi45', '$2y$10$iRogQQnvX96U9ZJNTFKZFu.5ec8wsZDJxMmfqKGAK2Ccv1bFNrIoC', 'seles'),
(11, 'Eda', '0821577854679', 'Test', 'eda', '$2y$10$04OoX1KGcrCp6yUHuCN0nOTJTp76t8V8G968YkveXOLh5MVbXR.eO', 'seles'),
(12, 'El', '082157785467', 'Perabot', 'elx', '$2y$10$GeWBOksFu41dUlsNPQ3nk.gL6uotqZXpzNgZvZmbYi0kmeVm4794O', 'seles');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reperal`
--
ALTER TABLE `reperal`
  ADD PRIMARY KEY (`idreperal`),
  ADD KEY `fk_reperal_users1_idx` (`idusers`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reperal`
--
ALTER TABLE `reperal`
  MODIFY `idreperal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reperal`
--
ALTER TABLE `reperal`
  ADD CONSTRAINT `fk_reperal_users1` FOREIGN KEY (`idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
