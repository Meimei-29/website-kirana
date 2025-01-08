-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2025 at 06:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiranadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `gambar`, `deskripsi`) VALUES
(1, 'Kamen Airflow free selendang', 'kebaya1.jpg', 'Kamen Airflow warna silver free selendang'),
(2, 'Selendang Obi', 'kebaya2.jpg', 'Selendang Obi bermotif bordir'),
(3, 'Kebaya Brokat Sofia Anak', 'kebaya3.jpg', 'Kebaya Brokat Sofia Anak warna merah'),
(4, 'Kamen Bordir', 'kebaya4.jpg', 'Kamen dengan motif bordir'),
(5, 'Kebaya Bunga', 'kebaya5.jpg', 'Kebaya Bali cantik dengan motif bunga'),
(6, '1 Set Kebaya Bali Brokat Sofia', 'kebaya6.jpg', 'Satu Set Kebaya Bali model Brokat Sofia'),
(18, 'Bross Kupu - Kupu', 'bross8.jpg', 'Bross (aksesoris Bali) model kupu - kupu '),
(19, 'Longtroso', 'kebaya7.jpg', 'Longtroso Golden Nick'),
(20, 'Kamen Bordir', 'kebaya9.jpg', 'Songket Bordir Strait (sedia ukuran m, l, xl, xxl)'),
(21, '1 set kebaya', 'kebaya10.jpg', '1 set kebaya kain lonceng warna biru '),
(22, '1 set kebaya + bros', 'kebaya11.jpg', '1 set kebaya warna hitam + bross (aksesoris)'),
(23, 'Kebaya velvet beludru', 'kebaya12.jpg', 'Kebaya cantik warna velvet beludru ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
