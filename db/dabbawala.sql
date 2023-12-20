-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 15, 2020 at 10:54 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dabbawala`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('dulles', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `username` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `enddate` varchar(50) NOT NULL,
  `tiffin` varchar(40) NOT NULL,
  `tiffin_type` varchar(20) NOT NULL,
  `food_type` varchar(20) NOT NULL,
  `cost` varchar(50) NOT NULL,
  `total` varchar(20) NOT NULL,
  `ctype` varchar(10) NOT NULL,
  `cardnumber` varchar(20) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `expiry` varchar(25) NOT NULL,
  `cvv` varchar(10) NOT NULL,
  `pin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`username`, `date`, `enddate`, `tiffin`, `tiffin_type`, `food_type`, `cost`, `total`, `ctype`, `cardnumber`, `cname`, `expiry`, `cvv`, `pin`) VALUES
('priya', '2020-01-15', '2020-01-25', '2', 'breakfast,lunch', 'veg', '340', '3400', 'debit', '123234355', 'priya', '2020-01', '123', 'null'),
('yug', '2020-01-15', '2020-01-20', '3', 'dinner', 'veg', '300', '1500', 'debit', '32435465', 'yugal', '2020-01', '123', 'null'),
('dulles', '2020-01-15', '2020-02-14', '5', 'lunch', 'veg', '600', '18000', 'credit', '23566987654', 'dulles', '2020-05', '123', '226022');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pin` varchar(10) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `username`, `password`, `contact`, `email`, `address`, `pin`) VALUES
('duleshwar', 'dulles', '1234', '9044249848', 'dulara9044@gmail.com', 'jankipuram', '226022'),
('priya', 'priya', '123', '8979789898', 'priya@gmail.com', 'daliganj', '123456'),
('yugal kishore', 'yug', '123', '9876543267', 'yug@gmail.com', 'adil nagar', '22498');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `username` varchar(50) NOT NULL,
  `foodtype` varchar(50) NOT NULL,
  `tiffintype` varchar(50) NOT NULL,
  `tiffin` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `enddate` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`username`, `foodtype`, `tiffintype`, `tiffin`, `date`, `enddate`, `time`, `cemail`, `sname`) VALUES
('dulles', 'veg', 'lunch', '5', '2020-01-15', '2020-02-14', '10:32:44 am', 'dulles', 'anand');

-- --------------------------------------------------------

--
-- Table structure for table `service_boy`
--

DROP TABLE IF EXISTS `service_boy`;
CREATE TABLE IF NOT EXISTS `service_boy` (
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addhar` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `allot` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_boy`
--

INSERT INTO `service_boy` (`name`, `username`, `password`, `contact`, `email`, `addhar`, `address`, `photo`, `allot`) VALUES
('anand', 'anand', '123', 92030949, 'anand@gmail.com', '23309550012', 'asdjkffjkb', 'image/anand.jpg', '226022'),
('ankit', 'ankit', '12345', 9029040394, 'ankit@gmail.com', '02494094440', 'kalyanpur', 'image/big-eyes-cute-baby.jpg', 'null'),
('suhkram', 'gupta', '12233', 8726353084, 'sukhram121@gmail.com', '98076490643', 'MAJHARA', 'image/Batlahouse.jpg', '45453');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
