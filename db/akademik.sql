-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 10:48 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `NIP` varchar(50) NOT NULL,
  `Nama_Guru` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `No_Telp` varchar(50) NOT NULL,
  `Alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`NIP`, `Nama_Guru`, `Tanggal_Lahir`, `JK`, `No_Telp`, `Alamat`) VALUES
('1122123', 'Dadang', '1985-04-03', 'L', '082265654478', 'Banjaran'),
('1122321', 'Usep', '1980-02-13', 'L', '082264963278', 'Pangalengan');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `Id_Jadwal` int(11) NOT NULL,
  `Kode_Matapelajaran_Jadwal` varchar(50) NOT NULL,
  `NIP_Jadwal` varchar(50) NOT NULL,
  `Kode_Ruangan_Jadwal` varchar(50) NOT NULL,
  `Kode_Kelas_Jadwal` varchar(50) NOT NULL,
  `Hari` varchar(50) NOT NULL,
  `Jam` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`Id_Jadwal`, `Kode_Matapelajaran_Jadwal`, `NIP_Jadwal`, `Kode_Ruangan_Jadwal`, `Kode_Kelas_Jadwal`, `Hari`, `Jam`) VALUES
(16, 'MK01', '1122123', 'R01', 'K001', 'Senin', '10:30-12:30'),
(17, 'MK02', '1122123', 'R02', 'K001', 'Selasa', '09:00-11:00'),
(18, 'MK03', '1122123', 'R03', 'K001', 'Rabu', '10:30-12:30'),
(19, 'MK05', '1122321', 'R01', 'K005', 'Kamis', '12:30-14:30'),
(20, 'MK06', '1122321', 'R02', 'K005', 'Jumat', '09:00-11:00');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `Kode_Jurusan` varchar(50) NOT NULL,
  `Nama_Jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`Kode_Jurusan`, `Nama_Jurusan`) VALUES
('J1', 'IPA'),
('J2', 'IPS'),
('J3', 'Bahasa');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `Kode_Kelas` varchar(50) NOT NULL,
  `Nama_Kelas` varchar(50) NOT NULL,
  `Kode_Jurusan_Kls` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`Kode_Kelas`, `Nama_Kelas`, `Kode_Jurusan_Kls`) VALUES
('K001', 'XI-IPA-1', 'J1'),
('K002', 'XI-IPA-2', 'J1'),
('K003', 'XI-IPS-1', 'J2'),
('K004', 'XI-IPS-2', 'J2'),
('K005', 'XI-BHS-1', 'J3'),
('K006', 'XI-BHS-2', 'J3');

-- --------------------------------------------------------

--
-- Table structure for table `matapelajaran`
--

CREATE TABLE IF NOT EXISTS `matapelajaran` (
  `Kode_Matapelajaran` varchar(50) NOT NULL,
  `Nama_Matapelajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matapelajaran`
--

INSERT INTO `matapelajaran` (`Kode_Matapelajaran`, `Nama_Matapelajaran`) VALUES
('MK01', 'Matematika'),
('MK02', 'Fisika'),
('MK03', 'Kimia'),
('MK04', 'Biologi'),
('MK05', 'B. Inggris'),
('MK06', 'B. Indonesia'),
('MK07', 'B. Sunda'),
('MK08', 'Sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `Id_Nilai` int(11) NOT NULL,
  `NIS_Nilai` varchar(50) NOT NULL,
  `Kode_Matapelajaran_Nilai` varchar(50) NOT NULL,
  `Nilai` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`Id_Nilai`, `NIS_Nilai`, `Kode_Matapelajaran_Nilai`, `Nilai`) VALUES
(1, '1101', 'MK01', 'A'),
(2, '1101', 'MK02', 'A'),
(3, '1101', 'MK03', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
  `Kode_Ruangan` varchar(50) NOT NULL,
  `Nama_Ruangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`Kode_Ruangan`, `Nama_Ruangan`) VALUES
('R01', 'Ruangan 1'),
('R02', 'Ruangan 2'),
('R03', 'Ruangan 3');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `NIS` varchar(50) NOT NULL,
  `Nama_Siswa` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `No_Telp` varchar(50) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `Kode_Kelas_Siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS`, `Nama_Siswa`, `Tanggal_Lahir`, `JK`, `No_Telp`, `Alamat`, `Kode_Kelas_Siswa`) VALUES
('1101', 'Rivaldy', '1997-11-27', 'L', '082218392248', 'Banjaran', 'K001'),
('1102', 'Lucianne', '1997-12-12', 'P', '082235695847', 'Banjaran', 'K002'),
('1103', 'Fauzan', '1996-04-26', 'L', '082214783574', 'Bandung', 'K003'),
('1104', 'Mutaz', '1996-10-29', 'L', '082249591485', 'Bandung', 'K004'),
('1105', 'Daniel', '1996-09-10', 'L', '082295152214', 'Bandung', 'K005'),
('1106', 'Wandita', '1996-08-14', 'P', '082296982474', 'Bandung', 'K006');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id_User` int(11) NOT NULL,
  `Id_Usergroup_User` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Foto` varchar(150) NOT NULL DEFAULT 'sias.jpg'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Id_Usergroup_User`, `Username`, `Password`, `Foto`) VALUES
(1, 1, 'admin', '$2y$10$V7zDd2Fz3QBmWFz3UnZBM.vjDK.AOTTjIdssUY8rhcBjEEJrxY7ma', 'sias.jpg'),
(4, 2, '1122123', '$2y$10$hV/xxpRUpmHUnr3Uw99hA.oWOrYa7jpYAopzfk/Le5KMU8iZ6WNMi', 'sias.jpg'),
(5, 2, '1122321', '$2y$10$0pW11NM8iFgy41ax/yq.5Ow5DUHEJMU0SJjWA5O/.0VK58slZs8jC', 'sias.jpg'),
(6, 3, '1101', '$2y$10$brN11A6thwzFtyyePlvIDuW8xxPHOTNjJfeyNq0DoElDY5.LhzQ.W', 'sias.jpg'),
(7, 3, '1103', '$2y$10$Nm22fitjMDsdiZ5/2jh4BuZ/s.hkTuTutM477R/8q/pfnP7jN9cMG', 'sias.jpg'),
(8, 3, '1105', '$2y$10$mmXkUNOeP60UB98fmiLI3emFv5y2tYoW8pJw27DYDZTyHz.r4EcvW', 'sias.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE IF NOT EXISTS `usergroup` (
  `Id_Usergroup` int(11) NOT NULL,
  `Nama_Usergroup` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`Id_Usergroup`, `Nama_Usergroup`) VALUES
(1, 'Administrator'),
(2, 'Guru'),
(3, 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`Id_Jadwal`),
  ADD KEY `FK_jadwal_guru` (`NIP_Jadwal`),
  ADD KEY `FK_jadwal_ruangan` (`Kode_Ruangan_Jadwal`),
  ADD KEY `FK_jadwal_matapelajaran` (`Kode_Matapelajaran_Jadwal`),
  ADD KEY `FK_jadwal_kelas` (`Kode_Kelas_Jadwal`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`Kode_Jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`Kode_Kelas`),
  ADD KEY `FK_kelas_jurusan` (`Kode_Jurusan_Kls`);

--
-- Indexes for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD PRIMARY KEY (`Kode_Matapelajaran`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`Id_Nilai`),
  ADD KEY `FK_nilai_siswa` (`NIS_Nilai`),
  ADD KEY `FK_nilai_matapelajaran` (`Kode_Matapelajaran_Nilai`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`Kode_Ruangan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `FK_siswa_kelas` (`Kode_Kelas_Siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`),
  ADD KEY `FK_user_usergroup` (`Id_Usergroup_User`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`Id_Usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `Id_Jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `Id_Nilai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `Id_Usergroup` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `FK_jadwal_guru` FOREIGN KEY (`NIP_Jadwal`) REFERENCES `guru` (`NIP`),
  ADD CONSTRAINT `FK_jadwal_kelas` FOREIGN KEY (`Kode_Kelas_Jadwal`) REFERENCES `kelas` (`Kode_Kelas`),
  ADD CONSTRAINT `FK_jadwal_matapelajaran` FOREIGN KEY (`Kode_Matapelajaran_Jadwal`) REFERENCES `matapelajaran` (`Kode_Matapelajaran`),
  ADD CONSTRAINT `FK_jadwal_ruangan` FOREIGN KEY (`Kode_Ruangan_Jadwal`) REFERENCES `ruangan` (`Kode_Ruangan`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `FK_kelas_jurusan` FOREIGN KEY (`Kode_Jurusan_Kls`) REFERENCES `jurusan` (`Kode_Jurusan`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `FK_nilai_matapelajaran` FOREIGN KEY (`Kode_Matapelajaran_Nilai`) REFERENCES `matapelajaran` (`Kode_Matapelajaran`),
  ADD CONSTRAINT `FK_nilai_siswa` FOREIGN KEY (`NIS_Nilai`) REFERENCES `siswa` (`NIS`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `FK_siswa_kelas` FOREIGN KEY (`Kode_Kelas_Siswa`) REFERENCES `kelas` (`Kode_Kelas`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_user_usergroup` FOREIGN KEY (`Id_Usergroup_User`) REFERENCES `usergroup` (`Id_Usergroup`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
