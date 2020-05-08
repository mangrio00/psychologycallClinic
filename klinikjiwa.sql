-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 05:49 AM
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
(1, 'admin01', '123', 1);

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
(21, 'Aoyama', 'reiii', '123456', 'aoyamaRei@gmail.com', 'Psychologist', 'Rabu', 'Relationship', 7, 3),
(22, 'Ghina Khoerunnisa', 'ghinakk', '$2y$10$14pfBzCY6RL//NKxZgQT..fsIuuaPcskxglYlngGzfOKF2vWrjlHG', 'gkhoerunnisa@gmail.com', 'Counselor', 'Selasa, Rabu', 'Goal Setting', 9, 3),
(23, 'Hansaplast', 'han', '123456', 'Hansaplast@gmail.com', 'Psychiatrist', 'Jumat', 'Trauma', 3, 3),
(25, 'Abdul Kadir', 'abdul', '123456', 'AbdulKadir@gmail.com', 'Psychiatrist', 'Selasa', 'OCD, Mental Illness', 3, 3),
(26, 'Edogawa Conan', 'bocah', '123456', 'conanconan@gmail.com', 'Psychologist', 'Kamis, Jumat', 'Trauma', 6, 3),
(27, 'Park Sungjin', 'bobthebuilder', '123456', 'bobsungjin@gmail.com', 'Counselor', 'Selasa, Rabu, Kamis, Jumat', 'Goal Setting', 7, 3),
(28, 'Kim Wonpil', 'wonpiri', '123456', 'piripiri@gmail.com', 'Psychologist', 'Senin, Selasa', 'Trauma, OCD, Goal Setting', 6, 3);

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
(23, 'Snow', 'Mann', 'spidol@gmail.com', '2000-01-10', '098778679869', 'Pria', 'fmjtga', '654321', 2),
(24, 'Rodenn', 'Stock', 'kacamata@gmail.com', '1995-02-22', '086745294254', 'Wanita', 'Lpbrud', '$2y$10$UipBeloRPdJk1A0zU5waoecNqd4rMC4jdegk3PSpnAKCCl7pBcZV2', 2),
(26, 'Minyak', 'Kayu Putih', 'minyakayuputih@gmail.com', '2010-06-22', '086756431232', 'Wanita', 'lkIqsd', '654321', 2),
(27, 'Park', 'JeHyung', 'eaj@gmail.com', '1992-09-15', '081509199200', 'Pria', 'dRDSJB', '654321', 2),
(28, 'Kang', 'Younghyun', 'youngone@gmail.com', '1993-12-19', '081912199300', 'Pria', 'JbaXrL', '654321', 2),
(29, 'Yoon', 'Dowoon', 'iamdrum@gmail.com', '1995-08-25', '082508199500', 'Pria', 'yvDnwE', '654321', 2),
(30, 'Im', 'Junhyeok', 'imjun@gmail.com', '1993-07-17', '081707199300', 'Pria', 'former', '$2y$10$w50/kXvvdNwstsAB45ImuO3aNjd0D7cHgIRxirjlEGfuoxb9E/a1m', 2);

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
(25, 'Snow Mann', '2020-05-09', 'Ghina Khoerunnisa', 'schedule', 23, 22),
(26, 'Snow Mann', '2020-05-28', 'Aoyama', 'pending', 23, 21),
(28, 'Snow Mann', '2020-05-08', 'Ghina Khoerunnisa', 'schedule', 23, 22),
(29, 'Rodenn Stock', '2020-05-10', 'Hansaplast', 'pending', 24, 23),
(30, 'Rodenn Stock', '2020-05-17', 'Hansaplast', 'pending', 24, 23);

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
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `id_level` (`id_level`);

--
-- Indexes for table `konselor`
--
ALTER TABLE `konselor`
  ADD PRIMARY KEY (`id_konselor`),
  ADD KEY `id_konselor_user_fk` (`id_level`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `id_pasien_user_fk` (`id_level`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `id_pasien_reserv_fk` (`id_pasien`),
  ADD KEY `id_konselor_reserv_fk` (`id_konselor`);

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
  MODIFY `id_konselor` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_level` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `user` (`id_level`) ON UPDATE CASCADE;

--
-- Constraints for table `konselor`
--
ALTER TABLE `konselor`
  ADD CONSTRAINT `id_konselor_user_fk` FOREIGN KEY (`id_level`) REFERENCES `user` (`id_level`) ON UPDATE CASCADE;

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `id_pasien_user_fk` FOREIGN KEY (`id_level`) REFERENCES `user` (`id_level`) ON UPDATE CASCADE;

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `id_konselor_reserv_fk` FOREIGN KEY (`id_konselor`) REFERENCES `konselor` (`id_konselor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_pasien_reserv_fk` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
