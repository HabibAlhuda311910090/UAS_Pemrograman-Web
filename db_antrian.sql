-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 05:18 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_loket1`
--

CREATE TABLE `log_loket1` (
  `id_log` int(11) NOT NULL,
  `id_antrian` int(5) DEFAULT NULL,
  `nomor_antrian` varchar(30) DEFAULT NULL,
  `waktu_pengambilan` datetime DEFAULT NULL,
  `waktu_selesai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log_loket2`
--

CREATE TABLE `log_loket2` (
  `id_log` int(11) NOT NULL,
  `id_antrian` int(5) DEFAULT NULL,
  `nomor_antrian` varchar(30) DEFAULT NULL,
  `waktu_pengambilan` datetime DEFAULT NULL,
  `waktu_selesai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_loket2`
--

INSERT INTO `log_loket2` (`id_log`, `id_antrian`, `nomor_antrian`, `waktu_pengambilan`, `waktu_selesai`) VALUES
(1, 1, 'ANTRIAN-001-LOKET2', '2021-07-17 10:09:42', '2021-07-17 10:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `log_loket3`
--

CREATE TABLE `log_loket3` (
  `id_log` int(11) NOT NULL,
  `id_antrian` int(5) DEFAULT NULL,
  `nomor_antrian` varchar(30) DEFAULT NULL,
  `waktu_diambil` datetime DEFAULT NULL,
  `waktu_selesai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loket1`
--

CREATE TABLE `loket1` (
  `id_antrian` int(11) NOT NULL,
  `nomor_antrian` varchar(30) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `loket1`
--
DELIMITER $$
CREATE TRIGGER `log_loket1` AFTER DELETE ON `loket1` FOR EACH ROW INSERT INTO log_loket1 SET
id_antrian = old.id_antrian,
nomor_antrian = old.nomor_antrian,
waktu_pengambilan = old.waktu,
waktu_selesai = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `loket2`
--

CREATE TABLE `loket2` (
  `id_antrian` int(11) NOT NULL,
  `nomor_antrian` varchar(30) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `loket2`
--
DELIMITER $$
CREATE TRIGGER `log_loket2` AFTER DELETE ON `loket2` FOR EACH ROW INSERT INTO log_loket2 SET
id_antrian = old.id_antrian,
nomor_antrian = old.nomor_antrian,
waktu_pengambilan = old.waktu,
waktu_selesai = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `loket3`
--

CREATE TABLE `loket3` (
  `id_antrian` int(11) NOT NULL,
  `nomor_antrian` varchar(30) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loket3`
--

INSERT INTO `loket3` (`id_antrian`, `nomor_antrian`, `waktu`) VALUES
(4, 'ANTRIAN-002-LOKET3', '2021-07-17 09:50:12');

--
-- Triggers `loket3`
--
DELIMITER $$
CREATE TRIGGER `log_loket3` AFTER DELETE ON `loket3` FOR EACH ROW INSERT INTO log_loket3 SET

id_antrian = old.id_antrian,

nomor_antrian = old.nomor_antrian,

waktu_diambil = old.waktu,

waktu_selesai = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id_user` int(5) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id_user`, `username`, `password`) VALUES
(6, 'habib', '1391921ec73a2f5dff54e075bbda7487');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_loket1`
--
ALTER TABLE `log_loket1`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `log_loket2`
--
ALTER TABLE `log_loket2`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `log_loket3`
--
ALTER TABLE `log_loket3`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `loket1`
--
ALTER TABLE `loket1`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `loket2`
--
ALTER TABLE `loket2`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `loket3`
--
ALTER TABLE `loket3`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_loket1`
--
ALTER TABLE `log_loket1`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_loket2`
--
ALTER TABLE `log_loket2`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_loket3`
--
ALTER TABLE `log_loket3`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loket1`
--
ALTER TABLE `loket1`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loket2`
--
ALTER TABLE `loket2`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loket3`
--
ALTER TABLE `loket3`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
