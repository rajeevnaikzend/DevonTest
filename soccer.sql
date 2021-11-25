-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 03:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soccer`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_player`
--

CREATE TABLE `app_player` (
  `id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `playerimageURI` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `app_team`
--

CREATE TABLE `app_team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logoURI` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_player`
--
ALTER TABLE `app_player`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7D1A17E5296CD8AE` (`team_id`);

--
-- Indexes for table `app_team`
--
ALTER TABLE `app_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_player`
--
ALTER TABLE `app_player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_team`
--
ALTER TABLE `app_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `app_player`
--
ALTER TABLE `app_player`
  ADD CONSTRAINT `FK_7D1A17E5296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `app_team` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
