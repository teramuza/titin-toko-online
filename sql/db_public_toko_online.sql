-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2022 at 11:13 AM
-- Server version: 8.0.29
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_public_toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int NOT NULL,
  `cus_nama` varchar(30) NOT NULL,
  `cus_alamat` mediumint NOT NULL,
  `cus_phone` varchar(15) NOT NULL,
  `cus_email` varchar(30) NOT NULL,
  `cus_password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int NOT NULL,
  `kp_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `kp_nama`) VALUES
(4, 'Test123'),
(5, 'dua'),
(6, 'tjga');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int NOT NULL,
  `pay_nama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `pos_payment`
--

CREATE TABLE `pos_payment` (
  `id` int NOT NULL,
  `pp_pt_trx_id` int NOT NULL,
  `pp_pay_id` int NOT NULL,
  `pp_paid` mediumint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `pos_transaction`
--

CREATE TABLE `pos_transaction` (
  `pt_sales_date` date NOT NULL,
  `id` int NOT NULL,
  `pt_cus_id` int NOT NULL,
  `pt_total_diskon` mediumint NOT NULL,
  `pt_total` mediumint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `pos_tx_item`
--

CREATE TABLE `pos_tx_item` (
  `id` int NOT NULL,
  `pti_pt_trx_id` int NOT NULL,
  `pti_p_kode` int NOT NULL,
  `pti_qty` smallint NOT NULL,
  `pti_diskon` mediumint NOT NULL,
  `pti_subtotal` mediumint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `p_nama` varchar(30) NOT NULL,
  `p_satuan` varchar(5) NOT NULL,
  `p_harga` mediumint NOT NULL,
  `p_kp_kode` int NOT NULL,
  `p_photo` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `p_nama`, `p_satuan`, `p_harga`, `p_kp_kode`, `p_photo`) VALUES
(1, 'retst', '12', 12456, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `u_profile` enum('A','M') CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL DEFAULT 'M',
  `u_gender` varchar(1) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT 'L'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_email`, `u_name`, `u_password`, `u_profile`, `u_gender`) VALUES
(1, 'titin@mail.com', 'Titin Winarsih', '0192023a7bbd73250516f069df18b500', 'A', 'p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pos_payment`
--
ALTER TABLE `pos_payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pp_pt_trx_id` (`pp_pt_trx_id`),
  ADD KEY `pp_pay_id` (`pp_pay_id`);

--
-- Indexes for table `pos_transaction`
--
ALTER TABLE `pos_transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pt_cus_id` (`pt_cus_id`);

--
-- Indexes for table `pos_tx_item`
--
ALTER TABLE `pos_tx_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pti_pt_trx_id` (`pti_pt_trx_id`),
  ADD KEY `pti_p_kode` (`pti_p_kode`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_kp_kode` (`p_kp_kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email` (`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pos_payment`
--
ALTER TABLE `pos_payment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pos_transaction`
--
ALTER TABLE `pos_transaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pos_tx_item`
--
ALTER TABLE `pos_tx_item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pos_payment`
--
ALTER TABLE `pos_payment`
  ADD CONSTRAINT `pos_payment_ibfk_3` FOREIGN KEY (`pp_pt_trx_id`) REFERENCES `pos_transaction` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `pos_payment_ibfk_4` FOREIGN KEY (`pp_pay_id`) REFERENCES `payment` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `pos_transaction`
--
ALTER TABLE `pos_transaction`
  ADD CONSTRAINT `pos_transaction_ibfk_1` FOREIGN KEY (`pt_cus_id`) REFERENCES `customer` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `pos_tx_item`
--
ALTER TABLE `pos_tx_item`
  ADD CONSTRAINT `pos_tx_item_ibfk_1` FOREIGN KEY (`pti_pt_trx_id`) REFERENCES `pos_transaction` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `pos_tx_item_ibfk_2` FOREIGN KEY (`pti_p_kode`) REFERENCES `produk` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`p_kp_kode`) REFERENCES `kategori_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
