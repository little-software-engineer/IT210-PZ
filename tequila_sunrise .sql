-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 07:53 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tequila_sunrise`
--

-- --------------------------------------------------------

--
-- Table structure for table `izvođač`
--

CREATE TABLE `izvođač` (
  `ime_izvođač` varchar(20) NOT NULL,
  `godina_rođenja` int(4) NOT NULL,
  `mesto_rođenja` varchar(25) NOT NULL,
  `država_rođenja` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `izvođač`
--

INSERT INTO `izvođač` (`ime_izvođač`, `godina_rođenja`, `mesto_rođenja`, `država_rođenja`) VALUES
('Duran Duran', 1982, 'London', 'Ujedinjeno Kraljevtsvo'),
('Hurricane', 2018, 'Belgrade', 'Serbia'),
('The Weeknd', 1990, 'Toronto', 'Kanada'),
('Travis Scott', 1992, 'Hjuston', 'Teksas');

-- --------------------------------------------------------

--
-- Table structure for table `koncert`
--

CREATE TABLE `koncert` (
  `mesto` text NOT NULL,
  `država` text NOT NULL,
  `datum` date NOT NULL,
  `vreme` time NOT NULL,
  `idIzvodjac` int(11) NOT NULL,
  `ime_izvođač` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `koncert`
--

INSERT INTO `koncert` (`mesto`, `država`, `datum`, `vreme`, `idIzvodjac`, `ime_izvođač`) VALUES
('London', 'Ujedinjeno Kraljevst', '2021-06-05', '20:45:00', 2, 'Duran Duran'),
('Los Angeles', 'USA', '2021-05-27', '21:43:00', 3, 'The Weeknd'),
('Copacabana', 'Mexico', '2021-06-29', '15:14:00', 7, 'Hurricane'),
('Los Angeles', 'USA', '2021-06-17', '22:14:00', 28, 'Travis Scott');

-- --------------------------------------------------------

--
-- Table structure for table `registracija`
--

CREATE TABLE `registracija` (
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `Id_login` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registracija`
--

INSERT INTO `registracija` (`username`, `password`, `email`, `Id_login`, `admin`) VALUES
('orbit', '4c52957a6fea72c010ac61e81', 'zvakice23@gmail.com', 8, 0),
('telefon', '', 'kuki34@gmail.com', 9, 0),
('iman', 'imam', 'imen13@gmail.com', 10, 0),
('milovan1', 'milorad', 'mile23@yahoo.com', 11, 0),
('abel', '5451bd23a48249fc1852eb0dabf62f35c5cd6cbe', 'abelica12@gmail.com', 12, 1),
('veco', '41db1e1c7d5584074db255e798a3929d6df8708e', 'vekiwe32@gmail.com', 13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Id_staff` int(11) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(20) NOT NULL,
  `funkcija` varchar(20) NOT NULL,
  `plata` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Id_staff`, `ime`, `prezime`, `funkcija`, `plata`) VALUES
(1, 'Elon', 'Musk', 'ekonomista', '1254'),
(2, 'Abel', 'Tesfaye', 'tehnolog', '45872');

-- --------------------------------------------------------

--
-- Table structure for table `ulaznica`
--

CREATE TABLE `ulaznica` (
  `id_ulaznice` int(11) NOT NULL,
  `broj_reda` int(11) NOT NULL,
  `broj_mesta` int(11) NOT NULL,
  `tip_mesta` varchar(25) NOT NULL,
  `izvođač` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ulaznica`
--

INSERT INTO `ulaznica` (`id_ulaznice`, `broj_reda`, `broj_mesta`, `tip_mesta`, `izvođač`) VALUES
(2, 6, 2, 'VIP', 'Travis Scott'),
(29, 3, 5, 'VIP', 'The Weeknd'),
(31, 3, 5, 'VIP', 'The Weeknd'),
(36, 1, 1, 'Fan-pit', 'Duran Duran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `izvođač`
--
ALTER TABLE `izvođač`
  ADD PRIMARY KEY (`ime_izvođač`);

--
-- Indexes for table `koncert`
--
ALTER TABLE `koncert`
  ADD PRIMARY KEY (`idIzvodjac`);

--
-- Indexes for table `registracija`
--
ALTER TABLE `registracija`
  ADD PRIMARY KEY (`Id_login`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Id_staff`);

--
-- Indexes for table `ulaznica`
--
ALTER TABLE `ulaznica`
  ADD PRIMARY KEY (`id_ulaznice`),
  ADD KEY `izvođač` (`izvođač`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `koncert`
--
ALTER TABLE `koncert`
  MODIFY `idIzvodjac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `registracija`
--
ALTER TABLE `registracija`
  MODIFY `Id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ulaznica`
--
ALTER TABLE `ulaznica`
  MODIFY `id_ulaznice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
