-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 09:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinyl`
--

-- --------------------------------------------------------

--
-- Table structure for table `produkt`
--

CREATE TABLE `produkt` (
  `id_produkt` int(11) NOT NULL,
  `tytul` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `artysta` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `data_wydania` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `gatunek` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `liczba_plyt` int(11) NOT NULL,
  `dlugosc` time NOT NULL,
  `dodatki` varchar(45) COLLATE utf8mb4_polish_ci DEFAULT '-',
  `dostepnosc` int(11) DEFAULT 1,
  `id_wypozyczalnia` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `produkt`
--

INSERT INTO `produkt` (`id_produkt`, `tytul`, `artysta`, `data_wydania`, `gatunek`, `liczba_plyt`, `dlugosc`, `dodatki`, `dostepnosc`, `id_wypozyczalnia`) VALUES
(1, 'Muza', 'Irena Santor', '1976', 'pop', 2, '46:00:00', '-', 1, 1),
(2, 'Skin', 'Flume', '2022', 'elektroniczna', 2, '46:21:00', '', 1, 1),
(3, 'Nuevos Aires', 'Girl Ultra', '2019', 'alternatywna', 1, '40:06:00', '-', 1, 2),
(4, 'Koło', 'Lordofon', '2020', 'rock', 2, '30:07:00', '-', 1, 1),
(5, '2014 Forest Hills Drive', 'J. Cole', '2014', 'rap', 2, '61:04:00', '-', 1, 1),
(6, 'Hitler Wears Hermes 8:', 'Westside Gunn', '2021', 'rap', 4, '103:18:00', '-', 1, 1),
(20, 'Polska Floryda', 'Szczyl', '2021', 'rap', 2, '38:56:00', '-', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `rola`
--

CREATE TABLE `rola` (
  `id_rola` int(11) NOT NULL,
  `nazwa` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `opis` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `rola`
--

INSERT INTO `rola` (`id_rola`, `nazwa`, `opis`) VALUES
(1, 'admin', 'uprawnienia do modyfikacji strony.'),
(2, 'employee', 'uprawnienia do sprzedazy towaru'),
(3, 'user', 'uprawnienia do przegladu strony.');

-- --------------------------------------------------------

--
-- Table structure for table `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id_uzytkownik` int(11) NOT NULL,
  `login` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `pass` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `imie` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `nazwisko` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `uzytkownik`
--

INSERT INTO `uzytkownik` (`id_uzytkownik`, `login`, `pass`, `imie`, `nazwisko`, `email`) VALUES
(1, 'admin', 'admin', 'Mikołaj', 'Cieśliczka', 'test@mail.com'),
(2, 'employee', 'employee', 'Bonifacy', 'Bęcwał', 'ga@mon.com'),
(3, 'user', 'user', 'Adam', 'Nowak', 'jego@mail.com'),
(8, 'test', 'owe', 'smieszne', 'tomek', 'hehe');

-- --------------------------------------------------------

--
-- Table structure for table `uzytkownikrola`
--

CREATE TABLE `uzytkownikrola` (
  `id_rola` int(11) NOT NULL,
  `id_uzytkownik` int(11) NOT NULL,
  `data_nadanie` date DEFAULT current_timestamp(),
  `data_odbior` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `uzytkownikrola`
--

INSERT INTO `uzytkownikrola` (`id_rola`, `id_uzytkownik`, `data_nadanie`, `data_odbior`) VALUES
(1, 1, '2022-05-22', '2022-05-22'),
(2, 2, '2022-05-22', NULL),
(3, 3, '2022-05-22', NULL),
(3, 8, '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wypozprodukt`
--

CREATE TABLE `wypozprodukt` (
  `id_wypozyczenie` int(11) NOT NULL,
  `id_produkt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wypozyczalnia`
--

CREATE TABLE `wypozyczalnia` (
  `id_wypozyczalnia` int(11) NOT NULL,
  `ulica` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `miasto` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `wypozyczalnia`
--

INSERT INTO `wypozyczalnia` (`id_wypozyczalnia`, `ulica`, `miasto`) VALUES
(1, 'Główna 34', 'Piekary Śląskie'),
(2, 'Tylna 3', 'Katowice');

-- --------------------------------------------------------

--
-- Table structure for table `wypozyczenie`
--

CREATE TABLE `wypozyczenie` (
  `id_wypozyczenie` int(11) NOT NULL,
  `id_uzytkownik` int(11) NOT NULL,
  `data` date NOT NULL,
  `zwrot` date NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`id_produkt`),
  ADD KEY `FK_70` (`id_wypozyczalnia`);

--
-- Indexes for table `rola`
--
ALTER TABLE `rola`
  ADD PRIMARY KEY (`id_rola`);

--
-- Indexes for table `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id_uzytkownik`);

--
-- Indexes for table `uzytkownikrola`
--
ALTER TABLE `uzytkownikrola`
  ADD KEY `FK_13` (`id_rola`),
  ADD KEY `FK_20` (`id_uzytkownik`);

--
-- Indexes for table `wypozprodukt`
--
ALTER TABLE `wypozprodukt`
  ADD KEY `FK_47` (`id_wypozyczenie`),
  ADD KEY `FK_52` (`id_produkt`);

--
-- Indexes for table `wypozyczalnia`
--
ALTER TABLE `wypozyczalnia`
  ADD PRIMARY KEY (`id_wypozyczalnia`);

--
-- Indexes for table `wypozyczenie`
--
ALTER TABLE `wypozyczenie`
  ADD PRIMARY KEY (`id_wypozyczenie`),
  ADD KEY `FK_30` (`id_uzytkownik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produkt`
--
ALTER TABLE `produkt`
  MODIFY `id_produkt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id_uzytkownik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wypozyczenie`
--
ALTER TABLE `wypozyczenie`
  MODIFY `id_wypozyczenie` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produkt`
--
ALTER TABLE `produkt`
  ADD CONSTRAINT `FK_67` FOREIGN KEY (`id_wypozyczalnia`) REFERENCES `wypozyczalnia` (`id_wypozyczalnia`);

--
-- Constraints for table `uzytkownikrola`
--
ALTER TABLE `uzytkownikrola`
  ADD CONSTRAINT `FK_11` FOREIGN KEY (`id_rola`) REFERENCES `rola` (`id_rola`),
  ADD CONSTRAINT `FK_17` FOREIGN KEY (`id_uzytkownik`) REFERENCES `uzytkownik` (`id_uzytkownik`);

--
-- Constraints for table `wypozprodukt`
--
ALTER TABLE `wypozprodukt`
  ADD CONSTRAINT `FK_45` FOREIGN KEY (`id_wypozyczenie`) REFERENCES `wypozyczenie` (`id_wypozyczenie`),
  ADD CONSTRAINT `FK_49` FOREIGN KEY (`id_produkt`) REFERENCES `produkt` (`id_produkt`);

--
-- Constraints for table `wypozyczenie`
--
ALTER TABLE `wypozyczenie`
  ADD CONSTRAINT `FK_28` FOREIGN KEY (`id_uzytkownik`) REFERENCES `uzytkownik` (`id_uzytkownik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
