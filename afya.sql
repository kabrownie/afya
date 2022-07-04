-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 04, 2022 at 12:35 PM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afya`
--

-- --------------------------------------------------------

--
-- Table structure for table `Appointments`
--

CREATE TABLE `Appointments` (
  `Id` int NOT NULL,
  `PatientName` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookid` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `book_date` date NOT NULL,
  `book_time` time NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  `random` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookid`, `username`, `fullname`, `book_date`, `book_time`, `hospital`, `email`, `county`, `status`, `random`) VALUES
(8, 'kevin', 'kevin karanja', '2022-07-29', '17:54:00', '  Kerugoya County Referral Hospital', 'kevin@gmail.com', ' Kirinyaga', 'Attended', 'kevin62c159201c2ef'),
(13, 'tom', 'tom joe', '2022-07-06', '20:51:00', '  Nyahururu County Referral Hospital', 'tom@gmail.com', ' Nyandarua', 'Missed', 'tom62c1baee162d5'),
(5, 'wambo', 'wambui', '2022-07-29', '17:11:00', '  Murang\'a Health Care Services Hospital', 'wambo@mail.com', ' Muranga', 'Cancelled', 'wambo62bdae8196736');

-- --------------------------------------------------------

--
-- Table structure for table `Hospitals`
--

CREATE TABLE `Hospitals` (
  `Id` int NOT NULL,
  `HospitalName` varchar(150) NOT NULL,
  `countyId` varchar(1) NOT NULL,
  `County` varchar(30) NOT NULL,
  `hos-id` varchar(3) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Hospitals`
--

INSERT INTO `Hospitals` (`Id`, `HospitalName`, `countyId`, `County`, `hos-id`, `address`, `phone`) VALUES
(1, 'The Outspan Hospital -Nyeri', 'A', 'Nyeri', 'A1', 'Baden Powell Road -Nyeri', 722696901),
(2, 'Nyeri County Referral Hospital', 'A', 'Nyeri', 'A2', 'Kimathi way Ruringu Nyeri', 758722019),
(3, 'Mt Kenya Hospital Nyeri', 'A', 'Nyeri', 'A3', 'Rware Building, Mumbi Rd -Nyeri', 72227095),
(4, 'Consolata Hospital Mathari', 'A', 'Nyeri', 'A4', 'Nyeri 25-10100 road, Ihururu', 721358137),
(5, 'Nyeri Provincial General Hospital', 'A', 'Nyeri', 'A5', 'Gatitu, Kimathi way, Nyeri', 612030819),
(6, 'Kiambu County Referral Hospital', 'B', 'Kiambu', 'B1', 'Township Kiambu', NULL),
(7, 'Kiambu Level 5 Hospital', 'B', 'Kiambu', 'B2', 'RRGJ+35F, unnamed road, Kiambu', 731437731),
(8, 'Kiambu Sub-county Hospital', 'B', 'Kiambu', 'B3', 'Kiambu Road Township Kiambu', 720261164),
(9, 'St Teresa Kiambu Hospital', 'B', 'Kiambu', 'B4', 'Township kiambu', 727125519),
(10, 'Agha Khan University Hospital', 'B', 'Kiambu', 'B5', 'Kiambu road , Kiambu', 203662569),
(11, 'Murang\'a Health Care Services Hospital', 'C', 'Muranga', 'C1', 'Township, Murang\'a', 721778402),
(12, 'Murang\'a District Hospital', 'C', 'Muranga', 'C2', 'Township Muranga', NULL),
(13, 'Murang\'a Level 5 Hospital', 'C', 'Muranga', 'C3', 'Unnamed road Kiharu Muranga', 758722021),
(14, 'KimKan Hospital', 'C', 'Muranga', 'C4', 'SLP 730, Kangema-road, Muranga town (former fort house)', 727158856),
(15, 'Mukanga Dispensary', 'C', 'Muranga', 'C5', 'wangu mukanga, Muranga', NULL),
(16, 'Kerugoya County Referral Hospital', 'D', 'Kirinyaga', 'D1', 'C74 Kerogoya Kirinyaga central Kirinyaga', 758722020),
(17, 'Kagio Hospital', 'D', 'Kirinyaga', 'D2', 'ithaga kutus-Sagana Road Gatanga', 722397741),
(18, 'Kianyaga Sub-county Hospital', 'D', 'Kirinyaga', 'D3', 'Kirinyaga , kirinyaga road', 731484131),
(19, 'Mwea Mission Hospital', 'D', 'Kirinyaga', 'D4', 'Wang\'uru', 722260748),
(20, 'ACK Mt Kenya Hospital', 'D', 'Kirinyaga', 'D5', 'F7WH+RPW, C74, Kerugoya', NULL),
(21, 'Nyandarua South Beyond Zero Hospital', 'E', 'Nyandarua', 'E1', 'Gathara, kinangop, Nyandarua', NULL),
(22, 'Nyahururu County Referral Hospital', 'E', 'Nyandarua', 'E2', 'Nyeri-Nyahururu Road Igwamiti Laikipia West', 758722031),
(23, 'J.M. Kariuki Hospital ', 'E', 'Nyandarua', 'E3', 'C77 OLkarau Nyandarua', 793379039),
(24, 'North Kinangop Catholic Hospital', 'E', 'Nyandarua', 'E4', 'unnamed road, Gathara, Kinangop, Nyandarua', 713777816),
(25, 'Ndaragwa Hospital', 'E', 'Nyandarua', 'E5', 'WGRJ+WPR, Nyeri Nyahururu road Ndaragua', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `county` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `height` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `bloodtype` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `dob`, `county`, `gender`, `password`, `height`, `weight`, `bloodtype`) VALUES
(18, 'kevin karanja', 'kevin', 'kevin@gmail.com', '2001-10-24', 'Kirinyaga', 'male', '2f3e9eccc22ee583cf7bad86c751d865', NULL, NULL, NULL),
(15, 'tom joe', 'tom', 'tom@gmail.com', '2004-01-30', 'Nyandarua', 'male', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL),
(16, 'faith wallace', 'wallace', 'faith@mail.com', '1994-12-26', 'Kiambu ', 'female', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL),
(17, 'monica wambui', 'wambo', 'wambo@maiil.com', '1982-02-02', 'Kirinyaga', 'female', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Appointments`
--
ALTER TABLE `Appointments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`random`),
  ADD UNIQUE KEY `random` (`random`),
  ADD UNIQUE KEY `bookid` (`bookid`);

--
-- Indexes for table `Hospitals`
--
ALTER TABLE `Hospitals`
  ADD PRIMARY KEY (`hos-id`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Appointments`
--
ALTER TABLE `Appointments`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Hospitals`
--
ALTER TABLE `Hospitals`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
