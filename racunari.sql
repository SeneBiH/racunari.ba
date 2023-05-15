-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 07:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `racunari`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikli`
--

CREATE TABLE `artikli` (
  `id` int(11) NOT NULL,
  `naslov` text NOT NULL,
  `opis` text NOT NULL,
  `cijena` int(11) NOT NULL,
  `kljucneRijeci` text NOT NULL,
  `slika` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikli`
--

INSERT INTO `artikli` (`id`, `naslov`, `opis`, `cijena`, `kljucneRijeci`, `slika`) VALUES
(2, 'Racunar i7, GTX 1650', 'Odlican računar za gaming', 1500, 'i7 gtx 1650', 'slike/racunari7.jpg'),
(3, 'Apple Mac laptop', 'Laptop koji je odlican za programiranje.', 1200, 'mac laptop', 'slike/applemac.webp'),
(4, 'Laptop i3-800, 8GB RAM, 500 HDD', 'Laptop za rad.', 400, 'laptop asus', 'slike/laptop.jfif'),
(6, 'Racunar i7-4770 sa monitorom', 'Gaming racunar koji pokrece sve novije igre na high.', 2500, 'gaming', 'slike/monitor.jpg'),
(7, 'Racunar i5, 500GB SSD, 16 GB RAM, RX 590', 'Odlična mašina koja može sve', 1300, 'i5racunar', 'slike/racunari5.jpg'),
(11, 'Ultra Wide 360Hz gaming monitor', 'Najnoviji monitor za sve ljubitelje gaminga', 1000, 'monitorweb', 'slike/monitorweb.webp');

-- --------------------------------------------------------

--
-- Table structure for table `registrovani`
--

CREATE TABLE `registrovani` (
  `korisnik` varchar(64) NOT NULL DEFAULT 'korisnik',
  `email` varchar(128) NOT NULL DEFAULT 'email@email.com',
  `sifra` varchar(64) NOT NULL DEFAULT '',
  `admin` int(11) NOT NULL DEFAULT 0,
  `datumRodjenja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrovani`
--

INSERT INTO `registrovani` (`korisnik`, `email`, `sifra`, `admin`, `datumRodjenja`) VALUES
('enes', 'enes@gmail.com', 'enes123', 1, '0000-00-00'),
('sanjin', 'sanjin123@gmail.com', 'sanjin123', 0, '2000-01-01'),
('user', 'user@gmail.com', '111', 0, '2000-06-05'),
('kojeovo', 'ko123@gmail.com', 'da', 0, '0010-01-02'),
('belmin', 'belmin@gmail.com', '321', 0, '0010-01-02'),
('emina', 'supermen@gmail.com', 'pako', 0, '0000-00-00'),
('test', 'tes123@gmail.com', '311', 0, '2002-01-01');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikli`
--
ALTER TABLE `artikli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrovani`
--
ALTER TABLE `registrovani`
  ADD PRIMARY KEY (`korisnik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikli`
--
ALTER TABLE `artikli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
