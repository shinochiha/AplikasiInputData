-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2018 at 08:09 AM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngulang`
--

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id`, `nama`, `email`, `no_hp`, `tanggal_lahir`, `alamat`, `jenis_kelamin`) VALUES
(15, 'Fitra Aziz Al - Rasyid', 'fitradevelopers71@gmail.com', '083898343040', '2018-10-20', 'Bekasi', 'Pria'),
(18, 'Agus Supriatna', 'agus@gmail.com', '089698345067', '2018-10-10', 'Tegal', 'Pria'),
(19, 'Mukhlash Alfian', 'mukhlash@gmail.com', '089634964060', '2018-10-24', 'Jakarta', 'Pria'),
(20, 'Rifqi Hidayat Lukman', 'reffebba@gmail.com', '089717654564', '2018-10-11', 'Kupang', 'Pria'),
(21, 'Yusuf Al Maududi', 'yusuf@gmail.com', '098746732213', '2018-10-27', 'Indramayu', 'Pria'),
(22, 'Ilham Julianto', 'ilham@gmail.com', '086754342321', '2018-10-16', 'Klaten', 'Pria'),
(24, 'Ibrahin Alfatih', 'ibrahimalfatih@gmail.com', '087634564543', '2018-10-13', 'Bekasi', 'Pria'),
(25, 'Musa Sutisna', 'musa@gmail.com', '083797348975', '2018-10-04', 'Cirebon', 'Pria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emaiil` (`email`),
  ADD UNIQUE KEY `no_hp` (`no_hp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
