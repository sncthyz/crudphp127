-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2024 at 10:58 AM
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
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(123, 'admin', 'admin', 'admmin'),
(2003, 'Administrator', 'tes', '28b662d883b6d76fd96e4ddc5e9ba780'),
(2004, '', 'andika', 'd41d8cd98f00b204e9800998ecf8427e'),
(2005, '', 'andika', 'd41d8cd98f00b204e9800998ecf8427e'),
(2006, '', 'amboy', '86bb0022421e6f0de38eb5d7ff13ff9e'),
(2007, '', 'amboy', '86bb0022421e6f0de38eb5d7ff13ff9e'),
(2008, '', 'hello', 'd41d8cd98f00b204e9800998ecf8427e'),
(2009, '', 'dika', '771c4f5a2949ce23f3dd760f103ee64d'),
(2010, '', 'haya', 'bea13d2f743a436fde8578fbaa3e88d3'),
(2011, '', 'jaki', '3fc80101cb9a54cc5a73aad68f663d72'),
(2012, '', 'sasasassss', '9f6e6800cfae7749eb6c486619254b9c'),
(2013, 'hwew', 'sasasassss', '9f6e6800cfae7749eb6c486619254b9c'),
(2014, '', 'sasasassss', '9f6e6800cfae7749eb6c486619254b9c'),
(2015, '', 'sasasassss', '9f6e6800cfae7749eb6c486619254b9c'),
(2016, '', 'sasasassss', '9f6e6800cfae7749eb6c486619254b9c'),
(2017, 'tes', 'tes', '28b662d883b6d76fd96e4ddc5e9ba780'),
(2018, '', 'sasasassss', '9f6e6800cfae7749eb6c486619254b9c'),
(2019, 'tws', 'tess123', 'c6343a676355808a6474b004839c4885'),
(2020, 'andika', 'sncthyz', '88af8854576507c7ea0d6bd71c282cbf'),
(2021, 'tess123', 'tess123', 'c6343a676355808a6474b004839c4885'),
(2022, 'janda', 'janda222', '56329eab59215c566201d541490f3867'),
(2023, 'dsas', 'saa', '9987d22788e810116a45109f2ea88648'),
(2024, 'tes123', 'tes123', 'b93939873fd4923043b9dec975811f66'),
(2025, 'p', 'p', '83878c91171338902e0fe0fb97a8c47a'),
(2026, '5', '5', 'e4da3b7fbbce2345d7772b0674a318d5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2027;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
