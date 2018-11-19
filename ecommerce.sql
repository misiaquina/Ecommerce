-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 04:27 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `ring`
--

CREATE TABLE `ring` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Harga` int(10) NOT NULL,
  `Keterangan` text NOT NULL,
  `Stok` varchar(4) NOT NULL,
  `Foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ring`
--

INSERT INTO `ring` (`ID`, `Nama`, `Harga`, `Keterangan`, `Stok`, `Foto`) VALUES
(2, 'Cocktail Ring', 360000, 'Mata cincin dari Batu Permata Asli, dengan internal diameter 18.7mm', '3', '16.jpg'),
(3, 'Claddagh Ring', 440000, 'Size 12 dengan diameter 21,5 dan keliling 66,6', '4', '11.jpg'),
(4, 'Birthstone Ring', 320000, 'Size 11 dengan diameter 20,7 dan keliling 64,1', '2', '2a.jpg'),
(5, 'Zlatar Silver Ring', 150000, 'Anti Karat dengan Size 12, diameter 21,5 dan keliling 66,6', '6', '4a.jpg'),
(6, 'Gold Filled Ring', 499000, 'Bahan emas asli, berat 2,1 gram dengan Size 11 dan diameter 20,7 serta keliling g4,1', '3', '9.jpg'),
(7, 'Anillo Brillante Ring', 400000, 'Emas asli berat 1,9 gram dengan size 12 dan diameter 21,5 serta diameter 66,6', '3', '22.jpg'),
(8, 'Marquise Diamond', 600000, 'Batu permata asli,\r\nberat 5 gram, \r\nbahan perak dengan size 12, diameter 21,5 dan keliling 66,6', '2', '17.jpg'),
(9, 'Unique Engagement', 389000, 'Bahan Perak asli disertai dengan permata yang cantik, berat 2,1 gram dengan Size 11 dan diameter 20,7 serta keliling g4,1', '5', '10.jpg'),
(11, 'Twisted Diamond', 890000, 'Bahan emas asli dan batu pertama asli, berat 2,9 gram dengan Size 11 dan diameter 20,7 serta keliling g4,1', '10', '7a.jpg'),
(12, 'Royality Diamond', 780000, 'Bahan Perak asli dan batu pertama asli, berat 2,9 gram dengan Size 11 dan diameter 20,7 serta keliling g4,1', '2', '15.jpg'),
(14, 'Gold Cadenza', 540000, 'Bahan emas putih asli , berat 2,9 gram dengan Size 11 dan diameter 20,7 serta keliling g4,1', '2', '20.jpg'),
(15, 'Carat Round', 340000, 'Bahan emas asli dan batu pertama asli, berat 2,9 gram dengan Size 11 dan diameter 20,7 serta keliling g4,1', '3', '3a.jpg'),
(16, 'Gold Lotus Flower', 1200000, 'Bahan emas asli dihiasi dengan batu permata asli, berat 3,0 gram dengan Size 11 dan diameter 20,7 serta keliling g4,1', '3', '18.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ring`
--
ALTER TABLE `ring`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ring`
--
ALTER TABLE `ring`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
