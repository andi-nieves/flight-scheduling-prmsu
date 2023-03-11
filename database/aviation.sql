-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2023 at 10:44 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aviation`
--

-- --------------------------------------------------------

--
-- Table structure for table `aircraft`
--

CREATE TABLE `aircraft` (
  `id` int NOT NULL,
  `aircraft` varchar(100) NOT NULL,
  `registration` varchar(100) NOT NULL,
  `engine` varchar(100) NOT NULL DEFAULT '1 Engine',
  `seater` varchar(100) NOT NULL DEFAULT '2 Seater',
  `flyable` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'Yes',
  `checking` varchar(50) NOT NULL DEFAULT 'TBO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `aircraft`
--

INSERT INTO `aircraft` (`id`, `aircraft`, `registration`, `engine`, `seater`, `flyable`, `checking`) VALUES
(253, 'test', 'test', 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `event_id` int NOT NULL,
  `date_filling` date DEFAULT NULL,
  `orginator` varchar(255) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `flight_crew` varchar(255) NOT NULL,
  `passenger` varchar(255) NOT NULL,
  `pilot_command` varchar(255) NOT NULL,
  `person_board` varchar(255) NOT NULL,
  `cruising_speed` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `destination_aerodome` varchar(255) NOT NULL,
  `event_start_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`event_id`, `date_filling`, `orginator`, `event_name`, `flight_crew`, `passenger`, `pilot_command`, `person_board`, `cruising_speed`, `level`, `route`, `destination_aerodome`, `event_start_date`, `start_time`, `end_time`) VALUES
(34, '2023-01-29', 'dsa', 'sda', 'dsa', 'dsa', 'dsa', 'dsa', 'sda', 'dsa', 'dsa', 'dsa', '2023-01-17', '22:06:00', '23:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `gender` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Male ',
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `license` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `firstname`, `lastname`, `contact`, `gender`, `address`, `email`, `license`) VALUES
(1, 'Jonathan', 'Abiva', '123', 'Male', 'San Felipe', 'admin@admin.com', '123-123-456');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int NOT NULL,
  `aircraft` varchar(255) NOT NULL,
  `registration` varchar(255) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `instrumentrating` varchar(255) NOT NULL,
  `syllabus` varchar(255) NOT NULL,
  `flighttime` varchar(255) NOT NULL,
  `student` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `address` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(200) NOT NULL,
  `license` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `contact`, `gender`, `address`, `email`, `license`) VALUES
(2, 'test', 'test', 'test', 'Female', 'test', 'test', 'test'),
(3, 'ddsada', 'sdsad', 'dsa', 'Male', 'dsa', 'dsa', '2022-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `contact`, `usertype`) VALUES
(33, 'Administrator', 'Admin', 'admin@admin.com', '123', '123', 'admin'),
(34, 'User', 'Account', 'user@user.com', '123', '123', 'user'),
(35, 'Jonathan', 'Abiva', 'instructor@instructor.com', '123', '09123456789', 'instructor'),
(36, 'dsa', 'dsa', 'sda@ads.com', 'dsa', 'dsa', 'admin'),
(37, 'dsa', 'dsa', 'dsa@d.com', 'dsa', 'dsa', 'admin'),
(38, 'dsad', 'sa', 'admsin@addsmin.com', 's', 's', 'user'),
(39, 'dsa', 'dsa', 'sda@adsdss.com', 'd', 'd', 'user'),
(40, 's', 's', 'sdas@ads.com', 's', 's', 'user'),
(41, 's', 's', 'sda@adss.com', 's', 's', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aircraft`
--
ALTER TABLE `aircraft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aircraft`
--
ALTER TABLE `aircraft`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `event_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
