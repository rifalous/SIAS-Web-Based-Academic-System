-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2016 at 04:23 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akaschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `NIP` varchar(10) NOT NULL,
  `NAMA_GURU` varchar(30) NOT NULL,
  `TEMPAT_LAHIR_GURU` varchar(20) NOT NULL,
  `TANGGAL_LAHIR_GURU` date NOT NULL,
  `JK_GURU` varchar(1) NOT NULL,
  `AGAMA_GURU` varchar(10) NOT NULL,
  `ALAMAT_GURU` varchar(60) NOT NULL,
  `TELP_GURU` varchar(13) NOT NULL,
  `JABATAN` varchar(20) NOT NULL,
  `KD_MAPEL` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelajaran`
--

CREATE TABLE IF NOT EXISTS `jadwal_pelajaran` (
  `ID_JADWAL` varchar(10) NOT NULL,
  `JURUSAN` varchar(30) NOT NULL,
  `WAKTU` varchar(15) NOT NULL,
  `NAMA_HARI` varchar(10) NOT NULL,
  `NIP` varchar(10) NOT NULL,
  `KD_MAPEL` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `KD_KELAS` varchar(10) NOT NULL,
  `NAMA_KELAS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`KD_KELAS`, `NAMA_KELAS`) VALUES
('112233', 'XII IPA 1'),
('112234', 'XII IPA 1');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `KD_MAPEL` varchar(10) NOT NULL,
  `NAMA_MAPEL` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`KD_MAPEL`, `NAMA_MAPEL`) VALUES
('1001', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `NILAI_ANGKA` int(11) NOT NULL,
  `NILAI_PREDIKAT` varchar(1) NOT NULL,
  `NIS` varchar(10) NOT NULL,
  `KD_MAPEL` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `NIS` varchar(10) NOT NULL,
  `NAMA_SISWA` varchar(30) NOT NULL,
  `TEMPAT_LAHIR_SISWA` varchar(20) NOT NULL,
  `TANGGAL_LAHIR_SISWA` date NOT NULL,
  `JK_SISWA` varchar(1) NOT NULL,
  `AGAMA_SISWA` varchar(10) NOT NULL,
  `ANAK_KE` int(2) NOT NULL,
  `ALAMAT_SISWA` varchar(60) NOT NULL,
  `TELP_SISWA` varchar(13) NOT NULL,
  `SEKOLAH_ASAL` varchar(30) NOT NULL,
  `NAMA_AYAH` varchar(30) NOT NULL,
  `NAMA_IBU` varchar(30) NOT NULL,
  `PEKERJAAN_AYAH` varchar(20) NOT NULL,
  `PEKERJAAN_IBU` varchar(20) NOT NULL,
  `ALAMAT_ORTU` varchar(60) NOT NULL,
  `NAMA_WALI` varchar(30) NOT NULL,
  `PEKERJAAN_WALI` varchar(20) NOT NULL,
  `ALAMAT_WALI` varchar(60) NOT NULL,
  `SAKIT` int(2) NOT NULL,
  `IZIN` int(2) NOT NULL,
  `ALFA` int(2) NOT NULL,
  `JURUSAN` varchar(30) NOT NULL,
  `KD_KELAS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS`, `NAMA_SISWA`, `TEMPAT_LAHIR_SISWA`, `TANGGAL_LAHIR_SISWA`, `JK_SISWA`, `AGAMA_SISWA`, `ANAK_KE`, `ALAMAT_SISWA`, `TELP_SISWA`, `SEKOLAH_ASAL`, `NAMA_AYAH`, `NAMA_IBU`, `PEKERJAAN_AYAH`, `PEKERJAAN_IBU`, `ALAMAT_ORTU`, `NAMA_WALI`, `PEKERJAAN_WALI`, `ALAMAT_WALI`, `SAKIT`, `IZIN`, `ALFA`, `JURUSAN`, `KD_KELAS`) VALUES
('1100110011', 'Rivaldy Fauzan', 'Bandung', '1996-11-27', 'L', 'Islam', 1, '', '082218392248', 'SMPN 1 Banjaran', 'Asep', 'Lia', 'PNS', 'Guru', '', '', '', '', 0, 0, 0, 'IPA', 'X!! IPA 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD PRIMARY KEY (`ID_JADWAL`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`KD_KELAS`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`KD_MAPEL`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
