-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 01:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmovi`
--

-- --------------------------------------------------------

--
-- Table structure for table `ponuda`
--

CREATE TABLE `ponuda` (
  `id` int(11) NOT NULL,
  `naslov` varchar(250) NOT NULL,
  `cena` int(11) NOT NULL,
  `slika` text NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ponuda`
--

INSERT INTO `ponuda` (`id`, `naslov`, `cena`, `slika`, `opis`) VALUES
(1, 'Batman', 5, 'https://pittnews.com/wp-content/uploads/2022/03/C_The_Batman_Via-588x900.jpeg', 'Ovo je betmen film'),
(2, 'Spiderman', 6, 'https://image.api.playstation.com/vulcan/img/rnd/202011/0714/vuF88yWPSnDfmFJVTyNJpVwW.png', 'Oov je spajdermen'),
(3, 'Jumanji', 3, 'https://images-na.ssl-images-amazon.com/images/I/91AAdVuWs2L._RI_.jpg', 'Ovo je isto neki fiilm'),
(4, 'Deadpool 2', 8, 'https://pbs.twimg.com/media/ENSpfidW4AApSSx.jpg', 'Ovo je dedpul dvica'),
(5, 'safsafsa', 21, 'sfsafsaf', 'safsafsafa');

-- --------------------------------------------------------

--
-- Table structure for table `recenzije`
--

CREATE TABLE `recenzije` (
  `id` int(11) NOT NULL,
  `naslov` varchar(250) NOT NULL,
  `autor` varchar(250) NOT NULL,
  `slika` text NOT NULL,
  `sadrzaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recenzije`
--

INSERT INTO `recenzije` (`id`, `naslov`, `autor`, `slika`, `sadrzaj`) VALUES
(1, 'Titanik', 'Mirza Dugotvorni', 'https://staticsmartlife.mondo.rs/Picture/68382/jpeg/Titanik-potonuo-slika-ispod-vode-6?ts=2021-08-08T12:09:32', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper dolor vel euismod iaculis. Etiam nec odio tempus, molestie risus vel, laoreet turpis. Morbi molestie lectus vel dui scelerisque, aliquet viverra nunc vulputate. Morbi ipsum diam, ultrices et odio porta, semper varius metus. In porttitor viverra lorem et blandit. Duis facilisis volutpat sapien, sed finibus ante pretium eu. Phasellus dignissim, arcu sit amet mattis eleifend, nisi nunc accumsan nisl, sed tempor arcu nisi sed ligula.\r\n\r\nQuisque consectetur, nisi quis porta suscipit, magna mauris lobortis felis, sit amet facilisis mauris est vel felis. Phasellus iaculis vestibulum nisi, in vehicula sapien consequat et. Integer est magna, tristique et nunc vel, faucibus egestas arcu. Ut non vehicula mauris. Sed luctus bibendum felis nec fringilla. Fusce mattis at leo at placerat. Donec ac purus id turpis elementum '),
(2, 'Montevideo', 'Mali stanoje', 'https://sinemanija.com/wp-content/uploads/2015/07/montevideo-vidimo-se-domaci-film.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper dolor vel euismod iaculis. Etiam nec odio tempus, molestie risus vel, laoreet turpis. Morbi molestie lectus vel dui scelerisque, aliquet viverra nunc vulputate. Morbi ipsum diam, ultrices et odio porta, semper varius metus. In porttitor viverra lorem et blandit. Duis facilisis volutpat sapien, sed finibus ante pretium eu. Phasellus dignissim, arcu sit amet mattis eleifend, nisi nunc accumsan nisl, sed tempor arcu nisi sed ligula.\r\n\r\nQuisque consectetur, nisi quis porta suscipit, magna mauris lobortis felis, sit amet facilisis mauris est vel felis. Phasellus iaculis vestibulum nisi, in vehicula sapien consequat et. Integer est magna, tristique et nunc vel, faucibus egestas arcu. Ut non vehicula mauris. Sed luctus bibendum felis nec fringilla. Fusce mattis at leo at placerat. Donec ac purus id turpis elementum '),
(5, 'Lord of d rings', 'aaa', 'https://www.muskimagazin.rs/storage/posts/gallery/2015/Oct/46070/najbolji-filmovi-u-poslednjih-25-godina.jpg', 'asffffffffffffffffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacije`
--

CREATE TABLE `rezervacije` (
  `id` int(11) NOT NULL,
  `ime` varchar(250) NOT NULL,
  `prezime` varchar(250) NOT NULL,
  `broj_telefona` varchar(20) NOT NULL,
  `broj_osoba` int(11) NOT NULL,
  `id_filma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rezervacije`
--

INSERT INTO `rezervacije` (`id`, `ime`, `prezime`, `broj_telefona`, `broj_osoba`, `id_filma`) VALUES
(1, 'Aleksandar ', 'Djukic', '12345', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ponuda`
--
ALTER TABLE `ponuda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recenzije`
--
ALTER TABLE `recenzije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervacije`
--
ALTER TABLE `rezervacije`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ponuda`
--
ALTER TABLE `ponuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recenzije`
--
ALTER TABLE `recenzije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rezervacije`
--
ALTER TABLE `rezervacije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
