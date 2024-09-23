-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 01:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_kehadiran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `namaadmin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `password`, `namaadmin`) VALUES
('P01', 'pengurus@01', 'Megan Wong'),
('P02', 'pengurus@02', 'Phoebe Kyle'),
('P03', 'Hermione Gra3', 'Vernon Chwe');

-- --------------------------------------------------------

--
-- Table structure for table `ahli`
--

CREATE TABLE `ahli` (
  `idahli` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `namaahli` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ahli`
--

INSERT INTO `ahli` (`idahli`, `password`, `namaahli`) VALUES
('aisyah22', 'abcdef', 'Siti Aisyah'),
('broahmad', 'password', 'Ahmad Fariz'),
('chanmeimei', 'strawberi', 'Chan Mei Ling'),
('devipatel', 'qwerty', 'Devi Patel'),
('magdelene', '12345678', 'Magdelene Wong'),
('magdelene1', '12345678', 'Magdelene Wong'),
('rganesh', 'protonwira', 'Ganesh Raja'),
('ykmeng', 'kucing1234', 'Yee Kok Meng');

-- --------------------------------------------------------

--
-- Table structure for table `aktiviti`
--

CREATE TABLE `aktiviti` (
  `idaktiviti` varchar(3) NOT NULL,
  `namaaktiviti` varchar(50) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tarikhmasa` datetime NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `idadmin` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aktiviti`
--

INSERT INTO `aktiviti` (`idaktiviti`, `namaaktiviti`, `tempat`, `tarikhmasa`, `gambar`, `idadmin`) VALUES
('A00', 'Bengkel Penulisan Kreatif', 'Bilik Karya', '2023-11-29 08:00:00', 'A003.jpg', 'P02'),
('A1', 'Pameran Buku Sains Fiksyen', 'Bilik Eksplorasi', '2023-09-18 09:00:00', 'A1.jpg', 'P01'),
('A2', 'Sesi Berbicara dengan Penulis Dayang Noor', 'Bilik Permata', '2023-10-16 10:00:00', 'A2.jpg', 'P02');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `idahli` varchar(15) NOT NULL,
  `idaktiviti` varchar(3) NOT NULL,
  `hadir` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`idahli`, `idaktiviti`, `hadir`) VALUES
('aisyah22', 'A1', 'ya'),
('broahmad', 'A1', 'tidak'),
('broahmad', 'A2', 'tidak'),
('chanmeimei', 'A1', 'ya'),
('devipatel', 'A1', 'tidak'),
('rganesh', 'A1', 'ya'),
('ykmeng', 'A1', 'tidak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `ahli`
--
ALTER TABLE `ahli`
  ADD PRIMARY KEY (`idahli`);

--
-- Indexes for table `aktiviti`
--
ALTER TABLE `aktiviti`
  ADD PRIMARY KEY (`idaktiviti`),
  ADD KEY `idadmin` (`idadmin`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`idahli`,`idaktiviti`),
  ADD KEY `idahli` (`idahli`),
  ADD KEY `idaktiviti` (`idaktiviti`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aktiviti`
--
ALTER TABLE `aktiviti`
  ADD CONSTRAINT `aktiviti_admin` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD CONSTRAINT `kehadiran_ahli` FOREIGN KEY (`idahli`) REFERENCES `ahli` (`idahli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kehadiran_aktiviti` FOREIGN KEY (`idaktiviti`) REFERENCES `aktiviti` (`idaktiviti`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
