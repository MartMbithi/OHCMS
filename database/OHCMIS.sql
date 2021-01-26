-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 26, 2021 at 08:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

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
(2, 'Electron Microscopes', '<p>This are high class microscopes and pretty volatile</p>', 'Laboratory', 'Functional'),
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
  `em_dpic` varchar(200) NOT NULL,
  `date_recorded` varchar(200) NOT NULL,
  `temp` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `height` varchar(200) NOT NULL,
  `sbp` varchar(200) NOT NULL,
  `dbp` varchar(200) NOT NULL,
  `heartrate` varchar(200) NOT NULL,
  `respiratoryrate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_employees`
--

INSERT INTO `hospital_employees` (`em_id`, `em_fname`, `em_lname`, `em_idno`, `em_email`, `password`, `em_address`, `em_phone`, `em_dept`, `em_dpic`, `date_recorded`, `temp`, `weight`, `height`, `sbp`, `dbp`, `heartrate`, `respiratoryrate`) VALUES
(9, 'Laboratory', 'Employee', '127001', 'employee@ohcms.com', 'caf322f0bbed721eac4a36bf7aff1103079faf25', '127001 Localhost', '127001', 'Laboratory', '', '2019-12-09', '37', '78', '156', '90', '90', '87', '50'),
(10, 'Pharmacist', 'Employee', '127001', 'employee@ohcms.com', 'caf322f0bbed721eac4a36bf7aff1103079faf25', '127001 Localhost', '127001', 'Pharmacy', '', '2019-12-02', '38', '90', '125', '90', '90', '87', '50'),
(11, 'Isolation', 'Ward Employee', '127001', 'employee@ohcms.com', 'caf322f0bbed721eac4a36bf7aff1103079faf25', '127001', '127001', 'Isolation Ward', '', '', '', '', '', '', '', '', ''),
(12, 'Consultatant', 'Employee', '127001', 'employee@ohcms.com', 'caf322f0bbed721eac4a36bf7aff1103079faf25', '127001 Localhost', '127001', 'Consultation', '', '', '', '', '', '', '', '', '');

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
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `t_stamp` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5) ON UPDATE CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `status`, `t_stamp`) VALUES
(5, 'admin@ohcms.com', 'Approved', '2019-12-07 08:38:43.71615'),
(6, 'admin@ohcms.com', 'Approved', '2019-12-07 08:38:48.39238'),
(7, 'admin@ohcms.com', 'Approved', '2019-12-07 08:38:55.13481'),
(8, 'admin@ohcms.com', 'Approved', '2019-12-07 08:53:18.02663'),
(9, 'employee@ohcms.com', 'Pending', '2019-12-07 08:56:59.53952');

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
  `created_at` varchar(200) NOT NULL,
  `date_recorded` varchar(200) NOT NULL,
  `temp` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `height` varchar(200) NOT NULL,
  `sbp` varchar(200) NOT NULL,
  `dbp` varchar(200) NOT NULL,
  `heartrate` varchar(200) NOT NULL,
  `respiratoryrate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`p_id`, `p_fname`, `p_lname`, `p_age`, `p_address`, `p_ailment`, `p_diagonisis`, `p_lab_tests`, `p_lab_results`, `p_prescription`, `p_type`, `p_drug_admin`, `created_at`, `date_recorded`, `temp`, `weight`, `height`, `sbp`, `dbp`, `heartrate`, `respiratoryrate`) VALUES
(2, 'Second Out', 'Patient', '21', 'Localhost 127.0.0.1', 'TuberCulosis', '<p>Diagnosed With Tuberculosis </p>', 'Saliva, Sputum and Mucus Tested', 'Tuberculosis tested Positive.', 'Antibiotics to counter attack Bacteria infection', 'OutPatient', 'Penincillin and Amoxyll', '2019-09-14', '2019-12-09', '37', '60', '120', '97', '89', '87', '50'),
(3, 'First', 'InPatient', '20', 'Localhost 127.0.0.1', 'Broken Legs', 'Broken Legs', 'Fracture in Femur Bone', 'Fracture and Crumble in Femur Bone tested positive', 'Intensive Femur born exercise', 'InPatient', 'Morphine Sulphate and DeepHeat', '2019-09-15', '2019-12-09', '67', '98', '145', '90', '89', '67', '12'),
(4, 'First ', 'Isolation Patient', '20', '127009', '<p>Swine Flu</p>', '<p>Swine Flu</p>', 'Mucus, Urine, Stool and Blood tested ', 'Swine Flu Tested Positive', '<p>Antibiotic drugs</p>', 'Isolation Patient', '<p>Paracetamol and Multivitamin Tablets</p>', '2019-09-18', '', '', '', '', '', '', '', ''),
(5, 'Second Out', 'Patient', '30', '127010', 'Flu', '<p>Swine Flu</p>', '<p>Body Fluids Tested for any flu infection</p>', '<p>Body Fluids Tested for any flu infection</p>', 'Antibiotics drugs to counter attack flu infections', 'OutPatient', 'Celestamine and FluGone Tablets', '2019-09-18', '', '', '', '', '', '', '', '');

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
(1, 'Paracetamol', 'Pain Killers', '<p>Paracetamol, also known as acetaminophen and APAP, is a medication used to treat pain and fever. It is typically used for mild to moderate pain relief. There is mixed evidence for its use to relieve fever in children. It is often sold in combination with other medications, such as in many cold medications.</p>', '20,00 Cartons', 'Glaxsco Smith Kline Industries', '2019-09-15', '2023-09-30'),
(2, 'Multi Vitamins', 'Suppliments', '<p><strong>Multivitamins</strong> are used to provide vitamins that are not taken in through the diet. <strong>Multivitamins</strong> are also used to treat <strong>vitamin</strong> deficiencies (lack of vitamins) caused by illness, pregnancy, poor nutrition, digestive disorders, and many other conditions</p>', '120, 000 Cartons ', 'Fedex Ltd.', '2019-09-18', '2025-09-24');

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
-- Table structure for table `vitals`
--

CREATE TABLE `vitals` (
  `date_recorded` varchar(200) NOT NULL,
  `temp` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `height` varchar(200) NOT NULL,
  `sbp` varchar(200) NOT NULL,
  `dbp` varchar(200) NOT NULL,
  `heartrate` varchar(200) NOT NULL,
  `respiratoryrate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vitals`
--

INSERT INTO `vitals` (`date_recorded`, `temp`, `weight`, `height`, `sbp`, `dbp`, `heartrate`, `respiratoryrate`) VALUES
('2019-12-09', '39', '50', '120', '90', '120', '87', '50');

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `em_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  MODIFY `kb_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
