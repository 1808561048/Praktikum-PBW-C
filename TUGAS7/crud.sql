-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 06:41 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudata`
--

CREATE TABLE `crudata` (
  `id` int(11) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crudata`
--

INSERT INTO `crudata` (`id`, `nis`, `nama`, `jenis_kelamin`, `telp`, `alamat`) VALUES
(3, '10110470112', 'Imam Maulana', 'laki-laki', '08561777166', 'Jl.Jend.Gatot Subroto '),
(4, '10110470113', 'Siska Melina Rachman', 'Perempuan', '0828817717', 'Jl.Raya Cileunyi No.76'),
(5, '10114072001', 'Rizaldi Maulidia Achmad', 'Laki-laki', '089283773622', 'Jl.Raya Jatinangor No.21'),
(1, '10110470110', 'Andin', 'perempuan', '08199288272', 'Jl.Raya Cicalengka No.101'),
(2, '10110470111', 'dea', 'Perempuan', '089228827727', 'Jl.Pengrajin No.90'),
(3, '10110470112', 'Bagas', 'Laki-laki', '08561777166', 'Jl.Jend.Gatot Subroto No.10'),
(4, '10110470113', 'Dian', 'Perempuan', '0828817717', 'Jl.Raya Cileunyi No.76'),
(5, '10114072001', 'Bima', 'Laki-laki', '089283773622', 'Jl.Raya Jatinangor No.21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
