-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 10:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `d_id` int(11) NOT NULL,
  `d_nm` varchar(255) NOT NULL,
  `d_contact` bigint(20) NOT NULL,
  `bg_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `d_time` varchar(255) NOT NULL,
  `d_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`d_id`, `d_nm`, `d_contact`, `bg_id`, `c_id`, `d_time`, `d_date`) VALUES
(1, 'kishan', 8128836095, 6, 4, '14:50', '2023-01-29'),
(2, 'khushi', 8128836095, 6, 4, '15:30', '2023-02-01'),
(3, 'sudha', 8128836095, 6, 4, '14:48', '2023-02-15'),
(4, 'kruti', 7856214235, 1, 4, '17:01', '2023-01-01'),
(5, 'janki', 9854213265, 2, 8, '17:01', '2023-01-09'),
(6, 'Happy', 8552255456, 3, 2, '11:30', '2022-12-15'),
(7, 'Venu', 7845123265, 1, 1, '17:12', '2023-01-29'),
(8, 'savan', 9106624298, 2, 10, '17:19', '2023-01-09'),
(9, 'Dev', 9551253545, 1, 17, '08:15', '2023-01-18'),
(10, 'Yukati', 7856561232, 5, 9, '11:33', '2023-02-05');

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
(7, 'B.T. Savani Kidney Hospital Rajkot ', ' 0281 256 2299', '7QP3+R56, University Rd, near University Main Gate, Shiv Shakti Colony, Aalap Avenue, Sadguru Nagar, Rajkot, Gujarat 360005'),
(8, 'Wockhardt Hospitals Rajkot ', '095120 07149', 'Kalawad Road Near St. Marys High School, Rajkot, Gujarat 360007'),
(9, 'Sterling Hospital Rajkot', '0281 254 5600', 'Plot No.251, Police Station, 150 Feet Ring Rd, opp. Gandhigram, Dharam Nagar, Rajkot, Gujarat 360007'),
(10, 'Apollo Hospital Ahmedabad', '07966701800', 'Plot No, 1A, Gandhinagar - Ahmedabad Rd, GIDC Bhat, estate, Ahmedabad, Gujarat 382428'),
(11, 'Sterling Hospitals Ahmedabad ', '07940011111', 'Sterling Hospital Rd, Near maharaja agrasen vidhyalaya, L.K Society, Nilmani Society, Memnagar, Ahmedabad, Gujarat 380052'),
(12, 'Zydus Hospital Ahmedabad ', '07966190201', 'Zydus Hospitals Road, Sarkhej - Gandhinagar Hwy, nr. Sola Bridge, Ahmedabad, Gujarat 380054'),
(13, 'Sterling Hospital Vadodara', '0265 614 4111', 'Circle West, Race Course Road Opposite Inox Cinema, Hari Nagar, Vadodara, Gujarat 390007'),
(14, 'BAPS Shastriji Maharaj Hospital vadodara', '09998991060', 'Shastri Yagna Purush Marg, Near Railway Crossing, Vadodara District, Atladara, Gujarat 390012'),
(15, 'Amrut Multispeciality Hospital vadodara', '09426007550', 'A/4, Bhagwati Park, NearTube Company,Opposite Ganjanan Complex, Old Padra Road, Vadodara, Gujarat 390020'),
(16, 'Sunshine Global Hospital Surat', '0261 411 1000', 'Dumas Rd, beside Big Bazar, Piplod, Surat, Gujarat 395007'),
(17, 'LifeLine Multispeciality Hospital Surat', '09099733366', 'Shreenathji Complex, 1st, Rander Rd, Ramnagar Char Rasta, Surat, Gujarat 395009'),
(18, 'Unique Hospital Surat', '0261 263 6318', 'Civil Hospital-Char Rasta Sosyo Circle, Vesu Canal Rd, opp. Kiran Motor, Surat, Gujarat 395002');

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

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `r_id` int(11) NOT NULL,
  `r_nm` varchar(255) NOT NULL,
  `r_contact` bigint(20) NOT NULL,
  `bg_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`r_id`, `r_nm`, `r_contact`, `bg_id`, `h_id`) VALUES
(1, 'Prit', 9106624298, 6, 7),
(2, 'kishan', 8128836095, 1, 9),
(3, 'yesh', 7895456235, 2, 18),
(4, 'maulik', 7845122365, 3, 8),
(5, 'pinak', 7946133330, 4, 10),
(6, 'darshan', 7878456532, 5, 17),
(7, 'dhaval', 9878456512, 7, 12),
(8, 'ridhi', 8545651235, 8, 11),
(9, 'jayesh', 8990456352, 1, 12);

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
(1, 'Sinojiya Kishan M', 'kishan', '1997-09-24', 'Male', 'krishanpatel105@gmail.com', 'a2lzaGFuLjEwMDU=', 'a2lzaGFuLjEwMDU=', 6, 8128836095, 'uploads/images/user/Screenshot 2022-12-13 112945.jpg', 4, 360005, 'The nest 3 B102,opp.ishan flat,ambika township,jivrajpark,rajkot.'),
(4, 'Sinojia Khushbu K', 'Khushi', '1998-10-28', 'Female', 'khushbuminipara28@gmail.com', 'a2h1c2hpMjgxMA==', 'a2h1c2hpMjgxMA==', 6, 8128836095, 'uploads/images/user/Screenshot 2022-12-13 112945.jpg', 4, 360005, 'rajkot');

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
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `bg_id` (`bg_id`),
  ADD KEY `c_id` (`c_id`);

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
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `bg_id` (`bg_id`),
  ADD KEY `h_id` (`h_id`);

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
  MODIFY `bg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `donar`
--
ALTER TABLE `donar`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
