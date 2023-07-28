-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2022 at 07:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`firstname`, `lastname`, `email`) VALUES
('Simran', 'Prabu', 'sprabu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contestcand`
--

CREATE TABLE `contestcand` (
  `confirmation` varchar(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `currentpos` varchar(30) NOT NULL,
  `dateofjoin` date NOT NULL,
  `experience` varchar(30) NOT NULL,
  `votes` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contestcand`
--

INSERT INTO `contestcand` (`confirmation`, `firstname`, `lastname`, `email`, `phone`, `position`, `currentpos`, `dateofjoin`, `experience`, `votes`) VALUES
('126', 'Abirami', 'Ashok', 'abiramiashok01@gmail.com', '9566100594', 'Secretary', 'Manager', '2010-10-15', '12', 1),
('125', 'Shivali', 'Ravindran', 'rshivali03@gamil.com', '9840570798', 'Secretary', 'Manager', '2022-10-18', '3', 0),
('123', 'Siva Adithya', 'MJ', 'sivamj14@gmail.com', '6381554063', 'President', 'Vice President', '2022-10-18', '3', 0),
('124', 'Simran', 'Prabu', 'sprabu@gmail.com', '9090909090', 'Vice President', 'Manager', '2016-10-05', '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `helpline`
--

CREATE TABLE `helpline` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `experience` varchar(3) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `helpline`
--

INSERT INTO `helpline` (`firstname`, `lastname`, `branch`, `email`, `phone`, `experience`, `comments`) VALUES
('Siva Adithya', 'MJ', 'Chennai', 'sivamj14@gmail.com', '7338851144', '3', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `electiontype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`, `electiontype`) VALUES
('Abirami', 'cand345', 'candidate', 'corporate'),
('Dimple', 'vote234', 'voter', 'corporate'),
('Harsh', 'vote345', 'voter', 'corporate'),
('Nithya', 'admin123', 'admin', 'corporate'),
('Rishi', 'vote123', 'voter', 'corporate'),
('Shivali', 'cand123', 'candidate', 'corporate'),
('Simran', 'cand567', 'candidate', 'general'),
('Siva', 'cand234', 'candidate', 'corporate');

-- --------------------------------------------------------

--
-- Table structure for table `posit`
--

CREATE TABLE `posit` (
  `position` varchar(30) NOT NULL,
  `seats` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posit`
--

INSERT INTO `posit` (`position`, `seats`) VALUES
('Manager', 10),
('President', 9),
('Secretary', 9),
('Team Lead', 10),
('Treasurer', 10),
('Vice President', 10);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `usertype` varchar(30) NOT NULL,
  `electiontype` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`usertype`, `electiontype`, `firstname`, `lastname`, `gender`, `phone`, `address`, `email`, `username`, `password`) VALUES
('candidate', 'corporate', 'Abirami ', 'Ashok', 'Female', '9566100594', 'OMR  \r\n            ', 'abi123@gmail.com', 'Abirami', 'cand345'),
('voter', 'corporate', 'Dimple', 'Ahuja', 'Female', '8888899999', '  \r\n            Rajasthan', 'dimple456@gmail.com', 'Dimple', 'vote234'),
('voter', 'corporate', 'Harsh', 'Agarwal', 'Male', '8888877777', 'San Diego  \r\n            ', 'harsh678@gmail.com', 'Harsh', 'vote345'),
('candidate', 'corporate', 'Shivali', 'Ravindran', 'Female', '9600056795', '  Mandaveli\r\n            ', 'rshivali03@gmail.com', 'Shivali', 'cand123'),
('voter', 'corporate', 'Rishi', 'Singh', 'Male', '9999988888', ' Rajasthan \r\n            ', 'sheku678@gmail.com', 'Rishi', 'vote123'),
('candidate', 'corporate', 'Siva Adithya', 'MJ', 'Male', '6381554063', 'VIT   \r\n            ', 'sivamj14@gmail.com', 'Siva', 'cand234'),
('candidate', 'general', 'Simran ', 'Prabu', 'Female', '4442116976', '  \r\n            Adyar', 'sprabu_2013@yahoo.com', 'Simran', 'cand567');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `firstname` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `year` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`firstname`, `position`, `year`) VALUES
('Manik Malhotra', 'President', '2020'),
('Nandini Murthy', 'Vice President', '2020'),
('Srideavi', 'Treasurer', '2019'),
('Trisha', 'Manager', '2018'),
('Vikram', 'Secretary', '2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `contestcand`
--
ALTER TABLE `contestcand`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `helpline`
--
ALTER TABLE `helpline`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `posit`
--
ALTER TABLE `posit`
  ADD PRIMARY KEY (`position`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
