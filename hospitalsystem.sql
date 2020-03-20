-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 08:46 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `name`, `email`, `password`, `address`, `phoneno`) VALUES
(1, 'admin admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_table`
--

CREATE TABLE `appointment_table` (
  `id` int(100) NOT NULL,
  `patient_reg_no` varchar(100) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `doctor_to_visit` varchar(100) NOT NULL,
  `time_of_entry` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_table`
--

CREATE TABLE `doctor_table` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `doctor_field` varchar(100) NOT NULL,
  `certificate_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_table`
--

INSERT INTO `doctor_table` (`id`, `name`, `email`, `password`, `address`, `phoneno`, `doctor_field`, `certificate_number`) VALUES
(3, 'Saroj Acharya', 'saroj@gmail.com', '0c9f0e6afad5a7e8a4a8593b793afbba', 'Sathdobato', '9841986297', 'Dermotologist', '2268'),
(4, 'Subin Adhikari', 'subin@gmail.com', '95c31bc0ebabaac9eda009feaa8cd7ad', 'Kapan', '9860275399', 'Dentist', '7257');

-- --------------------------------------------------------

--
-- Table structure for table `fees_collected`
--

CREATE TABLE `fees_collected` (
  `id` int(100) NOT NULL,
  `reg_no` int(100) NOT NULL,
  `fees_paid` int(100) NOT NULL,
  `collected_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees_collected`
--

INSERT INTO `fees_collected` (`id`, `reg_no`, `fees_paid`, `collected_by`) VALUES
(3, 4, 1000, 'rakshya@gmail.com'),
(4, 4, 5000, 'shubu@gmail.com'),
(5, 3, 4500, 'rakshya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `patient_medical_details`
--

CREATE TABLE `patient_medical_details` (
  `id` int(100) NOT NULL,
  `reg_no` int(100) NOT NULL,
  `name_of_patient` varchar(100) NOT NULL,
  `name_of_doctor` varchar(100) NOT NULL,
  `date_of_check` datetime(6) NOT NULL,
  `work_done_by_doctor` text NOT NULL,
  `medicine_prescribed` text NOT NULL,
  `price_of_checkup` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_medical_details`
--

INSERT INTO `patient_medical_details` (`id`, `reg_no`, `name_of_patient`, `name_of_doctor`, `date_of_check`, `work_done_by_doctor`, `medicine_prescribed`, `price_of_checkup`) VALUES
(6, 4, 'Anita Acharya', 'saroj acharya', '2020-03-20 00:00:00.000000', 'Check all the skin , cut face acnea(pimple) and told to visit after 3 days', 'himiliyan face wash twice a day for 3 days', 6000),
(7, 3, 'Sabita Adhikari', 'subin adhikari', '2020-03-20 00:00:00.000000', 'seperate the root of teeth from other teeth.', 'brufin 200mg for 3 days 3 times a day', 4500),
(8, 4, 'Anita Acharya', 'saroj acharya', '2020-03-23 00:00:00.000000', 'Solve the all acne problem and ask to visit if any problem occurs', 'wash face 3 times a day by using face wash of himiliyan', 0),
(9, 3, 'Sabita Adhikari', 'subin adhikari', '2020-03-23 00:00:00.000000', 'Fill the teeth with cement and told to visit after 5 days', 'nothing', 0),
(10, 3, 'Sabita Adhikari', 'subin adhikari', '2020-03-29 00:00:00.000000', 'Finished RCT work', 'nothing', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_table`
--

CREATE TABLE `patient_table` (
  `reg_no` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_table`
--

INSERT INTO `patient_table` (`reg_no`, `name`, `address`, `phoneno`) VALUES
(3, 'Sabita Adhikari', 'Kapan', '9841986298'),
(4, 'Anita Acharya', 'Sathdobato', '9841986296');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist_table`
--

CREATE TABLE `receptionist_table` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receptionist_table`
--

INSERT INTO `receptionist_table` (`id`, `name`, `email`, `password`, `address`, `phoneno`) VALUES
(3, 'Shubu Adhikari', 'shubu@gmail.com', '90be8b36697366e9dbe0048d91359ea1', 'Kapan', '9860275377'),
(4, 'Rakshya Adhikari', 'rakshya@gmail.com', 'b6decaab2eefcc8184ca504cfaa6fab1', 'Kapan', '01-4820523');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_table`
--
ALTER TABLE `appointment_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_table`
--
ALTER TABLE `doctor_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_collected`
--
ALTER TABLE `fees_collected`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_medical_details`
--
ALTER TABLE `patient_medical_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_table`
--
ALTER TABLE `patient_table`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `receptionist_table`
--
ALTER TABLE `receptionist_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_table`
--
ALTER TABLE `appointment_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctor_table`
--
ALTER TABLE `doctor_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fees_collected`
--
ALTER TABLE `fees_collected`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_medical_details`
--
ALTER TABLE `patient_medical_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient_table`
--
ALTER TABLE `patient_table`
  MODIFY `reg_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `receptionist_table`
--
ALTER TABLE `receptionist_table`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
