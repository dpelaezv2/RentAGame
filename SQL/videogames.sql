-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2021 at 08:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentagame`
--

-- --------------------------------------------------------

--
-- Table structure for table `videogames`
--

CREATE TABLE `videogames` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `developer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `used` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `saleStock` int(11) NOT NULL,
  `rentStock` int(11) NOT NULL,
  `keyWords` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videogames`
--

INSERT INTO `videogames` (`id`, `title`, `developer`, `category`, `price`, `used`, `saleStock`, `rentStock`, `keyWords`, `image`, `created_at`, `updated_at`) VALUES
(1, 'FIFA', 'EA', 'Deporte', 60000, 'False', 3, 0, 'Fultbol Multijugador', '1632723390.webp', '2021-09-27 11:16:30', '2021-09-27 11:16:30'),
(2, 'Epic Mickey', 'Disney', 'Fantasia', 40000, 'False', 5, 2, 'Disney Magia Niños', '1632748585.jpg', '2021-09-27 18:16:25', '2021-09-27 18:16:25'),
(3, 'Minecraft', 'Mojang', 'Contruccion', 80000, 'False', 7, 4, 'Popular Pixel', '1632748706.jpeg', '2021-09-27 18:18:26', '2021-09-27 18:18:26'),
(5, 'Rocket Leave', 'Psyonix', 'Carros', 90000, 'False', 1, 2, 'Futbol Multijugador', '1632748964.webp', '2021-09-27 18:22:44', '2021-09-27 18:22:44'),
(6, 'Mario Kart 8', 'Nintendo', 'Carreras', 70000, 'True', 4, 3, 'Mario Multijugador Familia', '1632752292.jpg', '2021-09-27 19:18:12', '2021-09-27 19:18:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `videogames`
--
ALTER TABLE `videogames`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `videogames`
--
ALTER TABLE `videogames`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
