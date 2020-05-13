-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 03:22 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040148`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(5) NOT NULL,
  `cover` varchar(30) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `halaman` int(10) NOT NULL,
  `terbit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `cover`, `judul`, `penulis`, `halaman`, `terbit`) VALUES
(1, '2.jpg', 'Harry Potter and The Philosopers Stone', 'J K Rowling', 309, 1999),
(2, '3.jpg', 'Harry Potter and The Chamber of Secrets', 'J K Rowling', 432, 2000),
(3, '4.jpg', 'Harry Potter and The Prisoner of Azkaban', 'J K Rowling', 544, 2001),
(4, '5.jpg', 'Harry Potter and The Goblet of Fire', 'J K Rowling', 882, 2001),
(5, '7.jpg', 'Harry Potter and The Order of The Phoenix', 'J K Rowling', 1200, 2004),
(6, '6.jpg', 'Harry Potter and The Half-Blood Prince', 'J K Rowling', 816, 2006),
(7, '8.jpg', 'Harry Potter and The Deathly Hallows', 'J K Rowling', 608, 2008),
(8, '1.jpg', 'Tentang Kamu', 'Tere Liye', 524, 2016),
(9, '10.jpg', 'Seperti Hujan Yang Jatuh Ke Bumi', 'Boy Chandra', 248, 2016),
(10, '9.jpg', 'konspirasi Alam Semesta', 'Fiersa Besari', 244, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'busro', '$2y$10$jBxKHzwVzZHTjUrE0m7ytOXUGXqa13wc9dzLJxlyazFsdHeJyyqb6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
