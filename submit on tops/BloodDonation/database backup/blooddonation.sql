-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 12:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_nm` varchar(255) NOT NULL,
  `a_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_nm`, `a_pass`) VALUES
(1, 'Kishan', 'kishan.123');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `bg_id` int(11) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `donate` varchar(255) NOT NULL,
  `receive` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`bg_id`, `bloodgroup`, `donate`, `receive`) VALUES
(1, 'O-', 'O-,O+,A-,A+,B-,B+,AB-,AB+', 'O-'),
(2, 'O+', 'O+,A+,B+,AB+', 'O-,O+'),
(3, 'A-', 'A-,A+,AB-,AB+', 'O-,A-'),
(4, 'A+', 'A+,AB+', 'O-,O+,A-,A+'),
(5, 'B-', 'B-,B+,AB-,AB+', 'O-,B-'),
(6, 'B+', 'B+,AB+', 'O-,O+,B-,B+'),
(7, 'AB-', 'AB-,AB+', 'O-,A-,B-,AB-'),
(8, 'AB+', 'AB+', 'O-,O+,A-,A+,B-,B+,AB-,AB+');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`c_id`, `c_name`) VALUES
(1, 'Ahmedabad'),
(2, 'Surat'),
(3, 'Vadodara'),
(4, 'Rajkot'),
(5, 'Bhavnagar'),
(6, 'Jamnagar'),
(7, 'Gandhinagar'),
(8, 'Junagadh'),
(9, 'Gandhidham'),
(10, 'Anand'),
(11, 'Navsari'),
(12, 'Morbi'),
(13, 'Nadiad'),
(14, 'Surendranagar'),
(15, 'Bharuch'),
(16, 'Mehsana'),
(17, 'Bhuj'),
(18, 'Porbandar'),
(19, 'Palanpur'),
(20, 'Valsad'),
(21, 'Vapi'),
(22, 'Gondal'),
(23, 'Veraval'),
(24, 'Godhra'),
(25, 'Patan'),
(26, 'Kalol'),
(27, 'Dahod'),
(28, 'Botad'),
(29, 'Amreli'),
(30, 'Deesa'),
(31, 'Jetpur');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `h_id` int(11) NOT NULL,
  `h_nm` varchar(255) NOT NULL,
  `h_phone` varchar(255) NOT NULL,
  `h_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`h_id`, `h_nm`, `h_phone`, `h_add`) VALUES
(1, 'Wockhardt Hospitals Rajkot ', '9512007149', 'Kalawad Road Near St_Marys High School, Rajkot, Gujarat 360007'),
(2, 'Sterling Hospital Rajkot', '0281 254 5600', 'Plot No.251, Police Station, 150 Feet Ring Rd, opp. Gandhigram, Dharam Nagar, Rajkot, Gujarat 360007'),
(3, 'BT Savani Kidney Hospital Rajkot', '0281 256 2299', ' University Rd, near University Main Gate, Shiv Shakti Colony, Aalap Avenue, Sadguru Nagar, Rajkot, Gujarat 360005'),
(4, 'Apollo Hospital Ahmedabad', '79 66701800', 'Plot No.1 A, Bhat GIDC Estate, Gandhinagar - 382428, Gujarat, India'),
(5, 'Sterling Hospitals Ahmedabad ', '(079) 40011177', 'Sterling Addlife India Limited, Sterling Hospital Road, Memnagar Ahmedabad, Gujarat, India Pincode: 380052'),
(6, 'Zydus Hospital Ahmedabad ', '7874412345', 'Zydus Hospitals Road, Sarkhej - Gandhinagar Hwy, nr. Sola Bridge, Ahmedabad, Gujarat 380054');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `un` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `un`, `email`, `sub`, `message`) VALUES
(1, 'Kishan', 'krishanpatel105@gmail.com', 'Need Blood', 'Please find blood for me Blood group is B+');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `fnm` varchar(255) NOT NULL,
  `unm` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `con_pass` varchar(255) NOT NULL,
  `bg_id` int(11) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `fnm`, `unm`, `dob`, `gender`, `email`, `pass`, `con_pass`, `bg_id`, `mobile`, `photo`, `c_id`, `pincode`, `address`) VALUES
(1, 'Sinojiya Kishan M', 'Kishan', '1997-09-24', 'Male', 'krishanpatel105@gmail.com', 'S2lzaGFuQDEyMw==', 'S2lzaGFuQDEyMw==', 6, 8128836095, 'uploads/images/user/Screenshot 2022-12-13 112945.jpg', 4, 360005, 'The Next 3 B102 rajkot'),
(2, 'Sinojiya Khushbu K', 'Khushi', '1998-10-28', 'Female', 'khushbuminipara28@gmail.com', 'S2h1c2hpQDEyMw==', 'S2h1c2hpQDEyMw==', 6, 8128836095, 'uploads/images/user/Screenshot 2022-12-13 112945.jpg', 4, 360005, 'The Nest 3 B102 Rajkot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`bg_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `bg_id` (`bg_id`),
  ADD KEY `c_id` (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `bg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
