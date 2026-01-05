-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2026 at 04:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nafuall`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jenisTransaksi` varchar(50) DEFAULT NULL,
  `jumlah` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal`, `keterangan`, `jenisTransaksi`, `jumlah`) VALUES
(1, '2024-01-01', 'Gaji Bulanan', 'Pemasukan', 5000000.00),
(2, '2024-01-02', 'Bayar Tagihan Listrik', 'Pengeluaran', 350000.00),
(3, '2024-01-03', 'Makan Siang Nasi Padang', 'Pengeluaran', 25000.00),
(4, '2024-01-05', 'Bonus Project Freelance', 'Pemasukan', 1500000.00),
(5, '2024-01-06', 'Isi Bensin Motor', 'Pengeluaran', 30000.00),
(6, '2024-01-10', 'Belanja Bulanan Supermarket', 'Pengeluaran', 750000.00),
(7, '2024-01-12', 'Servis dan Ganti Oli', 'Pengeluaran', 120000.00),
(8, '2024-01-15', 'Jual Barang Bekas', 'Pemasukan', 200000.00),
(9, '2024-01-16', 'Nonton Bioskop', 'Pengeluaran', 30000.00),
(10, '2024-01-20', 'Bayar Iuran Keamanan', 'Pengeluaran', 100000.00),
(13, '2026-01-05', 'Beli cangcut', 'Pengeluaran', 100000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
