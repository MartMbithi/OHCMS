-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 19, 2019 at 10:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `OHCMIS`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(20) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `email`, `password`) VALUES
(1, 'Admin', 'admin@ohcms.com', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `admin_id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_password_resets`
--

INSERT INTO `admin_password_resets` (`admin_id`, `email`, `token`) VALUES
(5, 'admin@ohcms.com', 'a03668bd72a8afd37498fdd0ec1b5f52d8ce7597');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `department` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `name`, `description`, `department`, `status`) VALUES
(2, 'Electron Microscopes', 'This are high class microscopes and pretty volatile', 'Laboratory', 'Faulty'),
(3, 'Test Tubes Racks', 'Holds Test Tubes', 'Laboratory', 'Faulty');

-- --------------------------------------------------------

--
-- Table structure for table `consultancy`
--

CREATE TABLE `consultancy` (
  `id` int(20) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_age` varchar(200) NOT NULL,
  `p_mobile` varchar(200) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `p_consultancy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultancy`
--

INSERT INTO `consultancy` (`id`, `p_name`, `p_age`, `p_mobile`, `p_address`, `p_consultancy`) VALUES
(1, 'First Patient To Consult', '20', '+25473456789', 'Localhost 127.0.0.1', 'This is my FirstPatience Consultancy');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(20) NOT NULL,
  `dept_name` varchar(200) NOT NULL,
  `dept_head_email` varchar(200) NOT NULL,
  `dept_head` varchar(200) NOT NULL,
  `dept_head_password` varchar(200) NOT NULL,
  `dept_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_name`, `dept_head_email`, `dept_head`, `dept_head_password`, `dept_desc`) VALUES
(11, 'Registration Desk', 'departmentalhead@ohcms.com', 'Registration Desk Department Head', 'f704b6cc755506bd9b8c706551c8ca910630d686', ''),
(12, 'Laboratory ', 'departmentalhead@ohcms.com', 'Laboratory Department Head', 'f704b6cc755506bd9b8c706551c8ca910630d686', ''),
(13, 'Pharmacy', 'departmentalhead@ohcms.com', 'Pharmacy Department Head', 'f704b6cc755506bd9b8c706551c8ca910630d686', ''),
(14, 'Isolation Ward', 'departmentalhead@ohcms.com', 'Isolation Ward Department Head', 'f704b6cc755506bd9b8c706551c8ca910630d686', ''),
(15, 'Consultancy', 'departmentalhead@ohcms.com', 'Consultancy Department Head', 'f704b6cc755506bd9b8c706551c8ca910630d686', '');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_employees`
--

CREATE TABLE `hospital_employees` (
  `em_id` int(20) NOT NULL,
  `em_fname` varchar(200) NOT NULL,
  `em_lname` varchar(200) NOT NULL,
  `em_idno` varchar(200) NOT NULL,
  `em_email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `em_address` varchar(200) NOT NULL,
  `em_phone` varchar(200) NOT NULL,
  `em_dept` varchar(200) NOT NULL,
  `em_dpic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_employees`
--

INSERT INTO `hospital_employees` (`em_id`, `em_fname`, `em_lname`, `em_idno`, `em_email`, `password`, `em_address`, `em_phone`, `em_dept`, `em_dpic`) VALUES
(8, 'registration ', 'desk', '127001', 'employee@ohcms.com', 'caf322f0bbed721eac4a36bf7aff1103079faf25', '127001 Localhost', '127001', 'Registration Desk', ''),
(9, 'Laboratory', 'Employee', '127001', 'employee@ohcms.com', 'caf322f0bbed721eac4a36bf7aff1103079faf25', '127001 Localhost', '127001', 'Laboratory', ''),
(10, 'Pharmacist', 'Employee', '127001', 'employee@ohcms.com', 'caf322f0bbed721eac4a36bf7aff1103079faf25', '127001 Localhost', '127001', 'Pharmacy', ''),
(11, 'Isolation', 'Ward Employee', '127001', 'employee@ohcms.com', 'caf322f0bbed721eac4a36bf7aff1103079faf25', '127001', '127001', 'Isolation Ward', ''),
(12, 'Consultatant', 'Employee', '127001', 'employee@ohcms.com', 'caf322f0bbed721eac4a36bf7aff1103079faf25', '127001 Localhost', '127001', 'Consultation', '');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_base`
--

CREATE TABLE `knowledge_base` (
  `kb_id` int(20) NOT NULL,
  `kb_name` varchar(200) NOT NULL,
  `kb_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `knowledge_base`
--

INSERT INTO `knowledge_base` (`kb_id`, `kb_name`, `kb_desc`) VALUES
(1, 'Air Bone Diseases ', 'It holds all data of all air borne diseases');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `p_id` int(20) NOT NULL,
  `p_fname` varchar(200) NOT NULL,
  `p_lname` varchar(200) NOT NULL,
  `p_age` varchar(200) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `p_ailment` varchar(200) NOT NULL,
  `p_diagonisis` varchar(200) NOT NULL,
  `p_lab_tests` text NOT NULL,
  `p_lab_results` text NOT NULL,
  `p_prescription` varchar(200) NOT NULL,
  `p_type` varchar(200) NOT NULL,
  `p_drug_admin` text NOT NULL,
  `created_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`p_id`, `p_fname`, `p_lname`, `p_age`, `p_address`, `p_ailment`, `p_diagonisis`, `p_lab_tests`, `p_lab_results`, `p_prescription`, `p_type`, `p_drug_admin`, `created_at`) VALUES
(1, 'Out', 'Patient', '20', '127001', 'First Ailment', 'First Updated Diagonisis ', 'First Laboratory Test', 'First Laboratory Test', 'First  Updated Prescription', 'OutPatient', 'Panadols', '2019-09-13'),
(2, 'Second Out', 'Patient', '21', 'Localhost 127.0.0.1', 'First In Patient Ailment', 'First In Patient Diagonis', 'First Lab Test', 'First Lab Test', 'First In Prescription', 'OutPatient', 'First Drug Administration', '2019-09-14'),
(3, 'First', 'InPatient', '20', 'Localhost 127.0.0.1', 'First Ailment', 'First InPatient Diagonisis', 'First InPatient Laboratory Tests', 'First InPatient Laboratory Tests', 'First Prescription', 'InPatient', 'Panadol And Mophine Sulphate', '2019-09-15'),
(4, 'First ', 'Isolation Patient', '20', '127009', 'Swine Flu', 'Swine Flu', '', '', '', 'Isolation Patient', '', '2019-09-18'),
(5, 'Second Out', 'Patient', '30', '127010', '', '<p>Swine Flu</p>', '<p>Body Fluids Tested for any flu infection</p>', '<p>Body Fluids Tested for any flu infection</p>', '', 'OutPatient', '', '2019-09-18'),
(6, 'Martin ', 'Mbithi', '70', '120 Machakos', '', '', '', '', '', 'InPatient', '', '2019-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `p_id` int(20) NOT NULL,
  `p_name` text NOT NULL,
  `p_desc` varchar(2000) NOT NULL,
  `em_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pharmaceuticals`
--

CREATE TABLE `pharmaceuticals` (
  `pharm_id` int(20) NOT NULL,
  `pharm_name` varchar(200) NOT NULL,
  `pharm_cat` varchar(200) NOT NULL,
  `pharm_desc` text NOT NULL,
  `pharm_qty` varchar(200) NOT NULL,
  `pharm_vendor` varchar(200) NOT NULL,
  `pharm_pur_date` date NOT NULL,
  `pharm_exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmaceuticals`
--

INSERT INTO `pharmaceuticals` (`pharm_id`, `pharm_name`, `pharm_cat`, `pharm_desc`, `pharm_qty`, `pharm_vendor`, `pharm_pur_date`, `pharm_exp_date`) VALUES
(1, 'Paracetamol', 'Pain Killers', 'Paracetamol are basic and active pain killers.', '20,00 Cartons', 'Glaxsco Smith Kline Industries', '2019-09-15', '2023-09-30'),
(2, 'Multi Vitamins', '<p>Suppliments</p>', '', '120', 'Fedex Ltd.', '2019-09-18', '2025-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `pharmaceutical_category`
--

CREATE TABLE `pharmaceutical_category` (
  `id` int(20) NOT NULL,
  `category` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmaceutical_category`
--

INSERT INTO `pharmaceutical_category` (`id`, `category`) VALUES
(1, 'Pain Killers'),
(3, 'Anti Biotics'),
(4, '<p>Suppliments</p>');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `ward_id` int(20) NOT NULL,
  `ward_name` varchar(200) NOT NULL,
  `ward_desc` varchar(200) NOT NULL,
  `bed_number` varchar(200) NOT NULL,
  `ward_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`ward_id`, `ward_name`, `ward_desc`, `bed_number`, `ward_type`) VALUES
(1, 'Isolation Ward', 'This Ward Is Where All Patients Who Have Contagious Diseases Are Addmitted.', '10', 'Isolation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultancy`
--
ALTER TABLE `consultancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `hospital_employees`
--
ALTER TABLE `hospital_employees`
  ADD PRIMARY KEY (`em_id`);

--
-- Indexes for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  ADD PRIMARY KEY (`kb_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `pharmaceuticals`
--
ALTER TABLE `pharmaceuticals`
  ADD PRIMARY KEY (`pharm_id`);

--
-- Indexes for table `pharmaceutical_category`
--
ALTER TABLE `pharmaceutical_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`ward_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `consultancy`
--
ALTER TABLE `consultancy`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hospital_employees`
--
ALTER TABLE `hospital_employees`
  MODIFY `em_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  MODIFY `kb_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmaceuticals`
--
ALTER TABLE `pharmaceuticals`
  MODIFY `pharm_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pharmaceutical_category`
--
ALTER TABLE `pharmaceutical_category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `ward_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
