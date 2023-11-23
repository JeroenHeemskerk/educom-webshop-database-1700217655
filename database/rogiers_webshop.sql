-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 12:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rogiers_webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `imageName` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `imageName`, `price`) VALUES
(0, 'badeendje', 'een geel badeendje', 'badeendje.png', 2),
(1, 'badeendje', 'een geel badeendje', 'badeendje.png', 2.49),
(2, 'kaas', 'een kilo kaas', 'kaas.png', 16.99),
(3, 'auto', 'een gele auto', 'auto.png', 2500),
(4, 'citroen', 'het enige dat het leven te bieden heeft', 'citroen.png', 0.8),
(5, 'banaan', 'eigenlijk te krom om te staan', 'banaan.png', 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(0, 'def', 'abc', 'ghi'),
(0, 'def', 'abc', 'ghi'),
(0, 'def', 'abc', 'ghi'),
(0, 'def', 'abc', 'ghi'),
(0, 'mno', 'jkl', 'pqr'),
(0, 'def', 'abc', 'ghi'),
(0, 'mno', 'jkl', 'pqr'),
(0, 'hoi', 'hoi@hoi.nl', 'abc'),
(0, 'hoi', 'hoi2', 'aaa'),
(0, 'hallo', 'hallo@hallo.nl', 'hallo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
