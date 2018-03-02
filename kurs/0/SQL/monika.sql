-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Lut 2018, 13:58
-- Wersja serwera: 10.1.30-MariaDB
-- Wersja PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `monika`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rower`
--

CREATE TABLE `rower` (
  `id_roweru` int(11) NOT NULL,
  `marka` varchar(30) DEFAULT NULL,
  `kolor` varchar(20) DEFAULT NULL,
  `cena` float(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sprzedaz`
--

CREATE TABLE `sprzedaz` (
  `id_sprzedaz` int(11) NOT NULL,
  `id_roweru` int(11) DEFAULT NULL,
  `id_uzytkownika` int(11) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkowik`
--

CREATE TABLE `uzytkowik` (
  `id_uzytkownika` int(11) NOT NULL,
  `imie` varchar(50) DEFAULT NULL,
  `nazwiskok` varchar(50) DEFAULT NULL,
  `miasto` varchar(40) DEFAULT NULL,
  `ulica` varchar(50) DEFAULT NULL,
  `nr` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkowik`
--

INSERT INTO `uzytkowik` (`id_uzytkownika`, `imie`, `nazwiskok`, `miasto`, `ulica`, `nr`) VALUES
(1, 'Janusz', 'Cebula', 'Pozna', 'mokra', '10');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczalnia`
--

CREATE TABLE `wypozyczalnia` (
  `id_wypozyczenia` int(11) NOT NULL,
  `id_roweru` int(11) DEFAULT NULL,
  `id_uzytkownika` int(11) DEFAULT NULL,
  `data_wypozyczenia` datetime DEFAULT NULL,
  `data_zwrotu` datetime DEFAULT NULL,
  `dni` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `rower`
--
ALTER TABLE `rower`
  ADD PRIMARY KEY (`id_roweru`);

--
-- Indeksy dla tabeli `sprzedaz`
--
ALTER TABLE `sprzedaz`
  ADD PRIMARY KEY (`id_sprzedaz`),
  ADD KEY `id_roweru` (`id_roweru`),
  ADD KEY `id_uzytkownika` (`id_uzytkownika`);

--
-- Indeksy dla tabeli `uzytkowik`
--
ALTER TABLE `uzytkowik`
  ADD PRIMARY KEY (`id_uzytkownika`);

--
-- Indeksy dla tabeli `wypozyczalnia`
--
ALTER TABLE `wypozyczalnia`
  ADD PRIMARY KEY (`id_wypozyczenia`),
  ADD KEY `id_roweru` (`id_roweru`),
  ADD KEY `id_uzytkownika` (`id_uzytkownika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `rower`
--
ALTER TABLE `rower`
  MODIFY `id_roweru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `sprzedaz`
--
ALTER TABLE `sprzedaz`
  MODIFY `id_sprzedaz` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `uzytkowik`
--
ALTER TABLE `uzytkowik`
  MODIFY `id_uzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `wypozyczalnia`
--
ALTER TABLE `wypozyczalnia`
  MODIFY `id_wypozyczenia` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `sprzedaz`
--
ALTER TABLE `sprzedaz`
  ADD CONSTRAINT `sprzedaz_ibfk_1` FOREIGN KEY (`id_roweru`) REFERENCES `rower` (`id_roweru`),
  ADD CONSTRAINT `sprzedaz_ibfk_2` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkowik` (`id_uzytkownika`);

--
-- Ograniczenia dla tabeli `wypozyczalnia`
--
ALTER TABLE `wypozyczalnia`
  ADD CONSTRAINT `wypozyczalnia_ibfk_1` FOREIGN KEY (`id_roweru`) REFERENCES `rower` (`id_roweru`),
  ADD CONSTRAINT `wypozyczalnia_ibfk_2` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkowik` (`id_uzytkownika`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
