-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2025 at 10:15 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sks`
--
DROP DATABASE IF EXISTS `sks`;
CREATE DATABASE IF NOT EXISTS `sks` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sks`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zawodnicy`
--

DROP TABLE IF EXISTS `zawodnicy`;
CREATE TABLE `zawodnicy` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `klasa` int(11) NOT NULL,
  `rokurodzenia` int(11) NOT NULL,
  `wzrost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zawodnicy`
--

INSERT INTO `zawodnicy` (`id`, `imie`, `nazwisko`, `klasa`, `rokurodzenia`, `wzrost`) VALUES
(30, 'Marcin', 'Nowak', 3, 2009, 170),
(31, 'Sara', 'Kujda', 4, 2001, 165);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `zawodnicy`
--
ALTER TABLE `zawodnicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zawodnicy`
--
ALTER TABLE `zawodnicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
