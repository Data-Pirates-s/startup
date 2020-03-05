-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 04:03 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `algodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(12) NOT NULL,
  `pincode` int(6) NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `city`, `state`, `pincode`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'ks615044@gmail.com', '$2y$10$QIhXxF3WMocIdulWUM/hGeCM23sdLTR2P81BXwk6dg7x6rkEC3X2y', 0, 'khan', 'SHADAB', '', '', '', 0, '', '', 1, '3s6kadbsah41', '', '2020-03-04'),
(2, 'munaf@gmail.com', '$2y$10$0nSmrvduQaDVJJDjygrtYu1HuiGRX37qKDG8WCCsyuhON4vBtx7aK', 0, 'as', 'sa', '', '', '', 0, '', '', 1, '6h52dsaas3bk', '', '2020-03-04'),
(3, 'faizanmulani@gmail.com', '$2y$10$BZBheEmBghRzRUdGBrt3hu/vvU5kaljEZqqtl2WRJBYRNQ44bbcpS', 0, 'khan', 'sa', '', '', '', 0, '', '', 1, '6skd45bs12aa', '', '2020-03-04'),
(4, '', '$2y$10$uAx2PCFVsNCiTYW224D14uaH0Z6Ywkm4.QPf3OepqH6FRscmb292u', 0, '', '', '', '', '', 0, '', '', 0, '2a341sda65hs', '', '2020-03-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
