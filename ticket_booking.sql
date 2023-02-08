-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 04:44 PM
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
-- Table structure for table `ticket_booking`
--

CREATE TABLE `ticket_booking` (
  `sno` int(10) NOT NULL,
  `movie-name` text NOT NULL,
  `firstname` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` int(10) NOT NULL,
  `cname` text NOT NULL,
  `ccnum` int(40) NOT NULL,
  `expmonth` text NOT NULL,
  `expyear` text NOT NULL,
  `cvv` int(10) NOT NULL,
  `booking_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_booking`
--

INSERT INTO `ticket_booking` (`sno`, `movie-name`, `firstname`, `email`, `address`, `city`, `state`, `zip`, `cname`, `ccnum`, `expmonth`, `expyear`, `cvv`, `booking_date`) VALUES
(47, '', 'Faran Zafar', 'farandeadz@gmail.com', 'Flat 47 Canalside Student Accomodation', 'Birmingham', '', 0, 'Faran Zafar', 12312, 'september', '2022', 234, '2022-05-29'),
(48, ' THE OPERATION MINCEMEAT', 'Faran Zafar', 'farandeadz@gmail.com', 'Flat 47 Canalside Student Accomodation', 'Birmingham', 'West Midlands', 0, 'Faran Zafar', 1234123123, '67', '2022', 123, '2022-05-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket_booking`
--
ALTER TABLE `ticket_booking`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket_booking`
--
ALTER TABLE `ticket_booking`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
