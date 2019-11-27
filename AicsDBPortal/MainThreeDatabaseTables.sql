-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 04:56 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `three`
--

-- --------------------------------------------------------

--
-- Table structure for table `stinfo`
--

CREATE TABLE `stinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gradelvl` varchar(100) NOT NULL,
  `strand` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `contactnum` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `birth` date NOT NULL,
  `dadname` varchar(100) NOT NULL,
  `momname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stinfo`
--

INSERT INTO `stinfo` (`id`, `name`, `gradelvl`, `strand`, `section`, `contactnum`, `age`, `birth`, `dadname`, `momname`, `email`) VALUES
(0, 'Rocky Villafranca', '12', 'TVL', 'ic3aa', '09089767144', '20', '1992-12-12', 'Rio', 'Leonita', 'rockyvillafrancaii@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tinfo`
--

CREATE TABLE `tinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `gradelvl` varchar(11) NOT NULL,
  `contactnum` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `birth` date NOT NULL,
  `position` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tinfo`
--

INSERT INTO `tinfo` (`id`, `name`, `gradelvl`, `contactnum`, `age`, `birth`, `position`, `email`) VALUES
(0, 'Clavel Lari', '12', '09123151561', 22, '2001-03-04', 'Teacher III', 'aicsclavel@');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'rockyrocks12', 'rockyvillafrancaii@gmail.com', '707da5c022c3dcfae964c788ea2d38fb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
