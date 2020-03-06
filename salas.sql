-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2020 at 01:15 PM
-- Server version: 10.3.17-MariaDB-0+deb10u1
-- PHP Version: 7.3.10-1+0~20191008.45+debian9~1.gbp365209

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salas`
--

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idsala` int(11) NOT NULL,
  `fecha_hora_fin` datetime DEFAULT NULL,
  `descripcion` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `fecha_hora_inicio` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reserva`
--

INSERT INTO `reserva` (`id`, `idusuario`, `idsala`, `fecha_hora_fin`, `descripcion`, `created_at`, `updated_at`, `deleted_at`, `fecha_hora_inicio`) VALUES
(77, 156, 11, '2020-03-02 10:00:00', 'reunion', '2020-03-04 08:22:25', '2020-03-04 08:22:25', NULL, '2020-03-02 09:00:00'),
(79, 156, 11, '2020-03-05 11:00:00', 'reunion', '2020-03-05 08:15:51', '2020-03-05 08:15:51', NULL, '2020-03-05 10:00:00'),
(80, 156, 11, '2020-03-06 11:00:00', 'reunion', '2020-03-05 12:04:15', '2020-03-05 12:04:15', NULL, '2020-03-06 10:00:00'),
(81, 156, 11, '2020-03-04 12:00:00', 'reunion', '2020-03-06 09:48:15', '2020-03-06 09:48:15', NULL, '2020-03-04 11:00:00'),
(82, 156, 11, '2020-03-02 11:00:00', 'reunion', '2020-03-06 09:55:37', '2020-03-06 09:55:37', NULL, '2020-03-02 10:00:00'),
(83, 156, 11, '2020-03-03 10:00:00', 'reunion', '2020-03-06 09:56:09', '2020-03-06 09:56:09', NULL, '2020-03-03 10:00:00'),
(84, 156, 11, '2020-03-03 10:00:00', 'reunion', '2020-03-06 09:56:25', '2020-03-06 09:56:25', NULL, '2020-03-04 10:00:00'),
(85, 156, 11, '2020-03-05 12:00:00', 'reunion', '2020-03-06 11:21:50', '2020-03-06 11:21:50', NULL, '2020-03-05 11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sala`
--

CREATE TABLE `sala` (
  `idsala` int(11) NOT NULL,
  `idsede` int(11) DEFAULT NULL,
  `nombre_sala` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `responsable` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sala`
--

INSERT INTO `sala` (`idsala`, `idsede`, `nombre_sala`, `responsable`) VALUES
(11, 1, 'Sala Cloud', 'Elias Cid');

-- --------------------------------------------------------

--
-- Table structure for table `sede`
--

CREATE TABLE `sede` (
  `idsede` int(11) NOT NULL,
  `nombre_sede` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sede`
--

INSERT INTO `sede` (`idsede`, `nombre_sede`) VALUES
(1, 'edificio Canada');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(156, 'elena', '$argon2i$v=19$m=65536,t=4,p=1$TkkvZjhuS05nOGhLNnpBbQ$Tvbpl8pQW9pDb9aheU1sIx3ymOuQmeO0ec3xZF07KHc', '2020-02-18 10:50:11', '2020-02-18 10:50:11', NULL),
(157, 'marina', '$argon2i$v=19$m=65536,t=4,p=1$VDNnUEtGVkc2a21hWXZlRQ$4wlRUrsrrrIEbmkEeWvmBIZV2Fi6XZTzxwv0YEW9rwo', '2020-02-18 12:19:36', '2020-02-18 12:19:36', NULL),
(159, 'luisa', '$argon2i$v=19$m=65536,t=4,p=1$ZWx5U1pYc0IwV0gyZFl3Rw$cDfJ88NMSpZDEYvAlNX0VEq8Y2Saw24g47C+bAu9s2E', '2020-02-19 09:18:51', '2020-02-19 09:18:51', NULL),
(160, 'valentina', '$argon2i$v=19$m=65536,t=4,p=1$dENIczlKVnEueTRwZk5ZcQ$BQJG3uB7pNRP+GpC8MhccXtrIyPSy1tjIsZ2HBdGeEQ', '2020-02-19 10:24:14', '2020-02-19 10:24:14', NULL),
(161, 'jennifer', '$argon2i$v=19$m=65536,t=4,p=1$NzNna2tiSy80U2doNC9idQ$1C1GsnQgaUCGVLGFlIjey71h0UmO0koG6Vu3LjzhOD0', '2020-02-19 11:21:17', '2020-02-19 11:21:17', NULL),
(164, 'nuria', '$argon2i$v=19$m=65536,t=4,p=1$ZDNvOWpENVlOeVhVV293MA$hL0RTHYBT/wt2UGESkTWWJyBrKe4nwGVtESVVJbgUd8', '2020-02-19 11:39:31', '2020-02-19 11:39:31', NULL),
(168, 'zaira', '$argon2i$v=19$m=65536,t=4,p=1$MEIweXJDcVo5cElwb3lQUA$C5C/LdMf/0xg8ZK0CGoGjC78rs0eyZCnud8IOYF7NAk', '2020-02-19 12:08:25', '2020-02-19 12:08:25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idsala` (`idsala`),
  ADD KEY `fecha_hora_fin` (`fecha_hora_fin`);

--
-- Indexes for table `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`idsala`),
  ADD UNIQUE KEY `idsede` (`idsede`);

--
-- Indexes for table `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`idsede`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `sala`
--
ALTER TABLE `sala`
  MODIFY `idsala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `sede`
--
ALTER TABLE `sede`
  MODIFY `idsede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`idsala`) REFERENCES `sala` (`idsala`);

--
-- Constraints for table `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `sala_ibfk_1` FOREIGN KEY (`idsede`) REFERENCES `sede` (`idsede`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
