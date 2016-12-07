-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2016 at 07:33 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `lietotaji`
--

CREATE TABLE `lietotaji` (
  `Id` int(11) NOT NULL,
  `Vards` varchar(255) NOT NULL,
  `Uzvards` varchar(255) NOT NULL,
  `Parole` varchar(255) NOT NULL,
  `Telefons` varchar(255) NOT NULL,
  `Epasts` varchar(255) NOT NULL,
  `Dzimsanas_diena` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lietotaji`
--

INSERT INTO `lietotaji` (`Id`, `Vards`, `Uzvards`, `Parole`, `Telefons`, `Epasts`, `Dzimsanas_diena`) VALUES
(1, 'xssxsx', 'sxsxs', '9522c7f207ccc335a1829fbb7e6194b0', 'sxxsxssx', 'sxssxsx@kaaaaa.lv', '1111-11-11'),
(2, 'xssxsx', 'sxsxs', '9522c7f207ccc335a1829fbb7e6194b0', 'sxxsxssx', 'sxssxsx@kaaaaa.lv', '1111-11-11'),
(3, 'xssxsx', 'sxsxs', '9522c7f207ccc335a1829fbb7e6194b0', 'sxxsxssx', 'sxssxsx@kaaaaa.lv', '1111-11-11'),
(4, 'Edijs', 'Maxims', 'aa76c066930d237742b409ad104a416f', '223454235', 'edijs@inbox.lv', '3343-12-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lietotaji`
--
ALTER TABLE `lietotaji`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lietotaji`
--
ALTER TABLE `lietotaji`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
