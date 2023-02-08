-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 04:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieticketdatabse`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `sno` int(10) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `dateofbirth` date DEFAULT NULL,
  `primarycinema` text DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`sno`, `email`, `password`, `firstname`, `lastname`, `dateofbirth`, `primarycinema`, `address`) VALUES
(1, 'test', 'test', 'test', 'test', '0000-00-00', 'test', 'test'),
(2, 'test', 'test', 'testt', 'test', '2022-05-06', 'test', 'test'),
(3, 'emailtest', 'passwordtest', 'firstnametest', 'lastnametest', '2022-05-06', 'cinematest', 'addresstest'),
(4, 'farandeadz@gmail.com', '213', 'Faran', 'Zafar', '2022-05-18', 'London', 'iqbal welfare hospital '),
(5, 'farandead@gmail.com', '123', 'af', 'asdf', '2022-05-02', 'London', 'asfasdfasf'),
(6, 'admin@gmail.com', 'admin', 'admin', 'admin', '2003-01-27', 'London', 'Flat 47 Canalside Student Accomodation'),
(7, 'admin@gmail.com', 'admin', 'admin', 'admin', '2003-01-27', 'London', 'Flat 47 Canalside Student Accomodation'),
(8, 'admin@gmail.com', 'admin', 'admin', 'admin', '2003-01-27', 'London', 'Flat 47 Canalside Student Accomodation'),
(9, 'admin@gmail.com', 'admin', 'admin', 'admin', '2003-01-27', 'London', 'Flat 47 Canalside Student Accomodation'),
(10, 'admin@gmail.com', 'admin', 'admin', 'admin', '2003-01-27', 'London', 'Flat 47 Canalside Student Accomodation'),
(11, 'admin1@gmail.com', 'admin', 'admin1', 'admin1', '2002-06-05', 'London', 'Flat 47 Canalside Student Accomodation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
