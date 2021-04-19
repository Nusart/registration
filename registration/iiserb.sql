-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 04:55 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iiserb`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Srl` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Srl`, `email`, `password`) VALUES
(1, 'sarthak18@iiserb.ac.in', '123456'),
(2, 'sarthakmishrachess@gmail.com', 'sarthak'),
(3, 'sarthakmishrachess28@yahoo.com', 'mishra');

-- --------------------------------------------------------

--
-- Table structure for table `sreg`
--

CREATE TABLE `sreg` (
  `name` varchar(20) NOT NULL,
  `roll` smallint(5) NOT NULL,
  `dob` int(11) NOT NULL,
  `gen` varchar(12) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `pin` mediumint(6) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `fmob` bigint(10) NOT NULL,
  `femail` varchar(20) NOT NULL,
  `focc` varchar(10) NOT NULL,
  `finc` int(6) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `mmob` bigint(10) NOT NULL,
  `memail` varchar(20) NOT NULL,
  `mocc` varchar(10) NOT NULL,
  `minc` mediumint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sreg`
--

INSERT INTO `sreg` (`name`, `roll`, `dob`, `gen`, `mob`, `email`, `addr`, `pin`, `fname`, `fmob`, `femail`, `focc`, `finc`, `mname`, `mmob`, `memail`, `mocc`, `minc`) VALUES
('Sarthak Mishra', 18388, 281299, 'male', 7077965840, 'sarthakmishrachess@gmail.com', 'Qr No-R3/E6, J. M. Colony, Budharaja, Sambalpur, Odisha', 768004, 'Sarthak', 7077965840, 'sarthakmishrachess@g', 'service', 0, 'ma', 7077965840, 'sarthakmishrachess@g', 'service', 0),
('Sarthak Mishra', 18388, 28121999, 'Male', 7077965840, 'sarthakmishrachess@gmail.com', 'Qr No-R3/E6, J. M. Colony, Budharaja, Sambalpur, Odisha', 768004, 'B B Mishra', 9437110548, 'bidhubhusan.mishra66', 'service', 7200000, 'S Sarangi', 9437402357, 'sanghamitrasarangi72', 'service', 720000),
('Sarthak Mishra', 0, 0, '', 7077965840, 'sarthakmishrachess@gmail.com', 'Qr No-R3/E6, J. M. Colony, Budharaja, Sambalpur, Odisha', 768004, 'Sarthak', 0, '', 'service', 0, '', 0, '', 'service', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Srl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Srl` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
