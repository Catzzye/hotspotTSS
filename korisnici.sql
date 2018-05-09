-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 10:18 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `korisnici`
--

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `naslov` text NOT NULL,
  `vijest` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`naslov`, `vijest`) VALUES
('Prva objava na stranici', 'Ova objava je napisana u podstranici za admine i slizi kao test.'),
('Druga objava na stranici', 'Sluzi kao test za postavljanje objava na stranici');

-- --------------------------------------------------------

--
-- Table structure for table `upiti`
--

CREATE TABLE `upiti` (
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `email` text NOT NULL,
  `upit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upiti`
--

INSERT INTO `upiti` (`ime`, `prezime`, `email`, `upit`) VALUES
('Norman', 'Podgorsek', 'catzzy@gmail.com', 'Samo ja radim na ovom projektu...'),
('Norman', 'Podgorsek', 'catzzy@gmail.com', 'Samo ja radim na ovom projektu...'),
('Antonio', 'Zugaj', 'zugy@gmail.com', 'Osim PhP-a'),
('ajndjawnjd', 'adnawndjiaw', 'adnawdnawnd', 'I malo javascripta'),
('wad', 'awdawd', 'awdawd', 'test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
