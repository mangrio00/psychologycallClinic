-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 03:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinikjiwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `id_level`) VALUES
(1, 'hnkmhn', 'hanakemihana', 1);

-- --------------------------------------------------------

--
-- Table structure for table `konselor`
--

CREATE TABLE `konselor` (
  `id_konselor` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('Counselor','Psychologist','Psychiatrist') NOT NULL,
  `schedule` varchar(300) NOT NULL,
  `speciality` varchar(300) NOT NULL,
  `capacity` int(20) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konselor`
--

INSERT INTO `konselor` (`id_konselor`, `fullname`, `username`, `password`, `email`, `role`, `schedule`, `speciality`, `capacity`, `id_level`) VALUES
(9, 'Ghina Khoerunnisa', 'abc', '123456', 'kkjgnisa@gmail.com', 'Psychiatrist', 'Selasa, Rabu', 'OCD, Mental Illness', 5, 3),
(10, 'Invisible', 'invisible', '123456', 'invisible@gmail.com', 'Counselor', 'Senin, Selasa', 'Relationship', 10, 3),
(11, 'Almassyifa Khairani', 'hnsk_ym', '123456', 'abcdefg@gmail.com', 'Counselor', 'Senin, Rabu, Kamis', 'dsdskdsk', 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` enum('Pria','Wanita') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `firstname`, `lastname`, `email`, `dob`, `phone`, `gender`, `username`, `password`, `id_level`) VALUES
(8, 'Ghina', 'Khoe', 'gkhoerunnisa@gmail.com', '2000-03-26', '085279630592', 'Wanita', 'aymrei14', '$2y$10$vpYO4zWLXlxEeCBxJnRhG.m90VvmqiYxmD.anR2GnRIYTZUB5NJzy', 2),
(9, 'Tasya', 'Desiani', 'tasyadesiani@gmail.com', '2000-07-27', '085279990765', 'Wanita', 'NekwTo', '654321', 2);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_reserv` date NOT NULL,
  `nama_konselor` varchar(100) NOT NULL,
  `status` enum('pending','cancel','schedule') NOT NULL,
  `id_pasien` int(100) NOT NULL,
  `id_konselor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `nama`, `tgl_reserv`, `nama_konselor`, `status`, `id_pasien`, `id_konselor`) VALUES
(5, 'Tasya Desiani', '2020-04-25', 'Invisible', 'pending', 9, 10),
(7, 'Ghina Khoe', '2020-04-26', 'Invisible', 'pending', 8, 10),
(9, 'Ghina Khoe', '2020-04-23', 'Invisible', 'pending', 8, 10),
(10, 'Tasya Desiani', '2020-04-27', 'Ghina Khoerunnisa', 'pending', 9, 9),
(11, 'Ghina Khoe', '2020-05-29', 'Almassyifa Khairani', 'pending', 8, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_level` int(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'pasien'),
(3, 'konselor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `konselor`
--
ALTER TABLE `konselor`
  ADD PRIMARY KEY (`id_konselor`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konselor`
--
ALTER TABLE `konselor`
  MODIFY `id_konselor` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_level` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
