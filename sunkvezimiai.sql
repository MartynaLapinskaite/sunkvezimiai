-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2020 m. Bir 08 d. 19:23
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunkvezimiai`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_06_07_145142_create_sunkvezimis', 1);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `sunkvezimis`
--

CREATE TABLE `sunkvezimis` (
  `id` int(10) UNSIGNED NOT NULL,
  `marke` int(11) NOT NULL,
  `gamybos_metai` int(11) NOT NULL,
  `savininko_vardas_pavarde` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `savininku_skaicius` int(11) DEFAULT NULL,
  `komentarai` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `sunkvezimis`
--

INSERT INTO `sunkvezimis` (`id`, `marke`, `gamybos_metai`, `savininko_vardas_pavarde`, `savininku_skaicius`, `komentarai`) VALUES
(1, 2, 1997, 'vardas pavarde', 2, 'komentarai'),
(2, 3, 2000, 'Antanas Pavardenis', NULL, NULL),
(3, 2, 1958, 'Vardas Pavarde', 5, ''),
(4, 3, 1956, 'Pirmas Pavarde', 7, 'Sunkvežimis naudoja daug kuro.'),
(5, 1, 2014, 'Antras Pavarde', 1, 'Naujas'),
(6, 1, 1999, 'Vardas Keturi', NULL, NULL),
(7, 1, 1999, 'Vardas Pavarde', 3, 'Neveikia radijas'),
(8, 1, 1990, 'Vardas Pavarde', NULL, 'Neaiškūs praeiti savininkai'),
(9, 4, 2019, 'Vardas Pavarde', 1, 'Naujas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sunkvezimis`
--
ALTER TABLE `sunkvezimis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sunkvezimis`
--
ALTER TABLE `sunkvezimis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
