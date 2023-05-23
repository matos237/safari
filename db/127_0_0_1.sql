-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Út 23.Máj 2023, 13:12
-- Verzia serveru: 10.4.28-MariaDB
-- Verzia PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `safari`
--
CREATE DATABASE IF NOT EXISTS `safari` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `safari`;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `surname`, `mail`, `phone`, `message`) VALUES
(1, 'Matej', 'Svrček', 'mato.svrcek237@gmail.com', '0915744846', 'gdfgdfgdf'),
(2, 'Matej', 'Svrček', 'matos@gmail.com', '0915446565', 'fdgfgdgfgdf'),
(3, 'Matej', 'Svrček', 'matosgd@gmail.com', '0915446565', 'fdgfgdgfgdffdfgd');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `name`, `path`) VALUES
(1, 'Žirafa', 'img/gallery_1.jpg'),
(2, 'Nosorožec', 'img/gallery_2.jpg'),
(3, 'Zebra', 'img/gallery_3.jpg'),
(4, 'Tiger', 'img/gallery_4.jpg'),
(5, 'Opica', 'img/gallery_5.jpg'),
(6, 'Gorila', 'img/gallery_6.jpg'),
(7, 'Surikata', 'img/gallery_7.jpg'),
(8, 'Leopard', 'img/gallery_8.jpg'),
(9, 'Africká krava', 'img/gallery_9.jpg'),
(10, 'Hyena', 'img/gallery_10.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `qna`
--

CREATE TABLE `qna` (
  `id_qna` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `qna`
--

INSERT INTO `qna` (`id_qna`, `question`, `answer`) VALUES
(1, 'Som poistený v prípade úmrtia?', 'Našim základným poistením je tzv. teória \"Veľa Šťastia\", v ktorej Vám my poprajeme šťastie a je Vašou úlohou sa postarať o to aby ste prežili.'),
(2, 'Čo robiť ak mi lev odkusol nohu?', 'Základom je nepanikáriť, kričať, počkať kým lev skončí a odpratať zbytky. V sekcii Pravidlá ste sa mali oboznámiť o tom, že u nás sa smeti nerozhadzujú!'),
(3, 'Prečo väčšina Vašich zvierat vypadá ako premalované zvieratá zo Slovenskej farmy?', 'Dobrá otázka! Niektoré veci by sme si ale mali v živote nechať pre seba, nemyslíš?'),
(4, 'Funguje táto firma na pranie špinavých peňazí?', 'Určite nie!'),
(5, 'Prečo by ste zakladali Safari na Slovensku?', 'Lebo Afrika je veľmi ďaleko.');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id_users`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin123@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'matej', 'matos@gmail.com', '955db0b81ef1989b4a4dfeae8061a9a6');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexy pre tabuľku `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexy pre tabuľku `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`id_qna`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `qna`
--
ALTER TABLE `qna`
  MODIFY `id_qna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
