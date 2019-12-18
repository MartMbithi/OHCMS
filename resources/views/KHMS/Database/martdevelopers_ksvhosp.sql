-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2019 at 10:35 AM
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
-- Database: `martdevelopers_ksvhosp`
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
(1, 'First Patient To Consult', '20', '+25473456789', 'Localhost 127.0.0.1', 'This is my FirstPatience Consultancy'),
(2, 'Martin Mbithi', '20', '0740847563', '127 001 Localhost', 'This is my first consultation'),
(3, 'Perpetual Ndanu', '19', '09876543', '12', 'hello'),
(4, 'Second Out Patient', '20', '0740847563', 'Localhost 127.0.0.1', '<p>Hello there</p>');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(20) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_feedback` longtext NOT NULL,
  `p_stats` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `p_name`, `p_feedback`, `p_stats`) VALUES
(1, 'Second Out Patient', '<p>Thanks Guys for your great and affordable health care</p><p>&nbsp;</p>', 0);

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
(1, 'Air Bone Diseases ', '<p>Airborne diseases are illnesses spread by tiny pathogens in the air.These can be <strong>bacteria, fungi, or viruses</strong>, but they are all transmitted through airborne contact. In most cases, an airborne disease is contracted when <strong>someone breathes in infected air</strong>. And a person also spreads the disease through their breath, particularly by sneezing and coughing, and through phlegm.</p><p><strong>Common airborne diseases</strong></p><p>Particles that cause airborne diseases are small enough to cling to the air. They hang on dust particles, moisture droplets, or on the breath until they are picked up. They are also acquired by contact with bodily fluids, such as mucus or phlegm.</p><p>Once the pathogens are inside the body, they multiply until someone has the disease.</p><p>Common airborne diseases include:</p><ul><li><strong>Influenza</strong>: The seasonal &quot;flu&quot; virus spreads easily from person to person. There are many strains of the flu, and it continually changes to adapt to the human immune system.</li><li><strong>The common cold</strong>: The condition called &quot;a cold&quot; is usually caused by a rhinovirus. There are many rhinoviruses, and the strains change to make it easier to infect humans.</li><li><strong>Varicella zoste</strong>r: This virus causes <a href=\"https://www.medicalnewstoday.com/articles/239450.php\">chickenpox</a> and spreads easily among young children. The rash is typically widespread on the body and made up of small red spots that turn into itchy blisters, which scab over in time. Chickenpox is spread for about 48 hours before a rash shows, which is how it infects others so successfully. It is usually spread through the air or by touching the rash.</li><li><strong>Mumps</strong>: This virus affects the glands just below the ears, causing swelling and, in some cases, loss of hearing. Vaccination is considered important to prevent the disease.</li><li><strong>Measles</strong>: This illness is caused by contact with a person who has the <a href=\"https://www.medicalnewstoday.com/articles/37135.php\">measles</a> virus, or by inhaling particles from their sneezes or cough. As with mumps, vaccination is essential for preventing the spread of this disease.</li><li><strong>Whooping cough (pertussis)</strong>: This is a contagious, bacterial illness that causes the airways to swell. The hacking cough that results is persistent and generally treated with <a href=\"https://www.medicalnewstoday.com/articles/10278.php\">antibiotics</a> early on to prevent damage.</li></ul><p>Uncommon airborne diseases include:</p><ul><li><strong>Anthrax</strong>: This is a bacterial disease that infects the body when a person inhales <a href=\"https://www.medicalnewstoday.com/articles/37557.php\">anthrax</a> spores. It causes nausea and flu symptoms. Inhaled anthrax is difficult to diagnose because it resembles other diseases such as flu. Anthrax is treated with antibiotics to stop it worsening.</li><li><strong>Diphtheria</strong>: A rare bacterial disease, <a href=\"https://www.medicalnewstoday.com/articles/159534.php\">diphtheria</a> damages the respiratory system and attacks the heart, kidneys, and nerves. Its rarity may be due to widespread vaccination. Diphtheria can be treated with antibiotics.</li><li><strong>Meningitis</strong>: Meningitis swells the membranes around the brain and spinal cord. It is a bacterial or viral infection, but is also caused by an injury or fungal infection. Common symptoms include a persistent <a href=\"https://www.medicalnewstoday.com/articles/73936.php\">headache</a>, <a href=\"https://www.medicalnewstoday.com/articles/168266.php\">fever</a>, and skin rash.</li></ul><p>The length of an illness caused by a common airborne disease can vary from a few days to weeks, but it is usually dealt with easily. Uncommon airborne diseases may require additional treatment.</p><p><strong>Prevention</strong></p><ul><li>Hygiene and sanitary habits</li><li>Ventilation and air management</li></ul><p><strong>Symptoms</strong></p><p>Many airborne diseases have symptoms similar to the common cold or <a href=\"https://www.medicalnewstoday.com/articles/15107.php\">influenza</a>. They include:</p><ul><li>cough</li><li>chill</li><li>muscle and body aches</li><li><a href=\"https://www.medicalnewstoday.com/articles/248002.php\">fatigue</a></li><li>congestion</li><li>sneezing</li><li>runny or stuffy nose</li><li><a href=\"https://www.medicalnewstoday.com/articles/155412.php\">sore throat</a></li><li>slight body aches or headaches</li><li>sinus pressure</li></ul><p>Some people also experience a low fever or general sluggishness with these symptoms.</p><p><strong>Treatment and outlook</strong></p><p>It is important for people to talk to a doctor as soon as they experience symptoms to avoid any complications and to begin treatment.</p><p>Symptoms of the common cold can be treated, but the illness tends to go away without treatment. The flu runs its course over a few days before someone starts to recover. In the case of chickenpox, the immune system usually deals with the virus on its own.</p><p>While airborne diseases are common, serious complications are much more rare and normal vaccinations reduce the risk, substantially.</p>'),
(2, 'Sexually transmitted diseases (STI)', '<p>Sexually transmitted infections (STIs)</p><p>What are STIs?</p><p>Sexually transmitted infections (STIs) are infections or diseases that are passed on during unprotected sex with an infected partner. This includes vaginal, anal or oral sex. Some STIs can be passed on by just skin-to-skin contact.</p><p>Common STIs include:</p><ul><li><a href=\"https://healthywa.wa.gov.au/Articles/F_I/Gonorrhoea\">gonorrhoea</a></li><li><a href=\"https://healthywa.wa.gov.au/Articles/A_E/Chlamydia\">chlamydia</a></li><li><a href=\"https://healthywa.wa.gov.au/Articles/F_I/Genital-herpes\">genital herpes</a>&nbsp;</li><li><a href=\"https://healthywa.wa.gov.au/Articles/F_I/Genital-warts\">genital warts</a>.</li></ul><p>Other less common STIs include:</p><ul><li><a href=\"https://healthywa.wa.gov.au/Articles/S_T/Syphilis\">syphilis</a></li><li><a href=\"https://healthywa.wa.gov.au/Articles/F_I/Hepatitis-B\">hepatitis B</a>&nbsp;</li><li><a href=\"https://healthywa.wa.gov.au/Articles/F_I/HIV-and-AIDS\">Human Immunodeficiency Virus (HIV) which can lead to Acquired Immune Deficiency Syndrome (AIDS)</a>.</li></ul><p>Who is most at risk?</p><p>You are at risk of getting an STI if:</p><ul><li>you don&rsquo;t&nbsp;<a href=\"https://healthywa.wa.gov.au/Articles/A_E/About-safe-sex\">use condoms during sex</a> or dental dams (a thin latex square held over the vaginal or anal area during oral sex)</li><li>you have changed sex partners or had more than one sex partner in the last 12 months</li><li>you or your partner share injecting equipment such as a syringes and needles</li><li>you or your sex partner has another STI.</li></ul><p>Signs and symptoms</p><p>When you get an STI you may not have any obvious symptoms. You can feel perfectly okay and not realise you have an infection. But even if you don&rsquo;t notice any signs the STI could still be making you sick.</p><p>Some STI symptoms could include:</p><ul><li>unusual discharge from your vagina or penis</li><li>difficulty or pain when you urinate and have sex</li><li>blisters, warts, lumps, bumps or sores on your genitals</li><li>rash, cracked skin, itchy or irritated skin on or around your genital region.</li></ul><p>How do I know if I have an STI?</p><p>If you notice any of the above symptoms, or if you had sex without a condom or a dental dam, you and your sex partner(s) should see a doctor for an STI check. Depending on your particular circumstances, this may involve a urine sample, swab and/or blood test. &nbsp;</p><p>The earlier you are diagnosed with an STI, the easier it is to treat which also reduces the chances of you developing further health complications.</p><p>Treatment</p><p>Many STIs are successfully treated with antibiotics. Others can be managed with medication.</p><p>What if I don&rsquo;t get treated?</p><p>If you have an untreated STI it can cause a range of mild to severe health complications and also create other health conditions.</p><p>For example, some STIs can damage men and women&rsquo;s reproductive systems. Men could get painful swollen testes (testicles) and women could get <a href=\"https://healthywa.wa.gov.au/Articles/N_R/Pelvic-inflammatory-disease-PID\">pelvic inflammatory disease</a>. This means they could have problems having children in the future or be left infertile (unable to have children).</p><p>If you don&rsquo;t get treated the infection will keep damaging your body, and you can pass it to your sex partners.</p><p>Do I need to tell anyone?</p><p>If you have been treated for an STI, it is important to let your sex partner(s) know so they can get tested and treated too. If your sex partners are not treated, you could end up with the STI again.</p><p>If you want your doctor or clinic can tell your partner or former partners for you, without telling them your name. They can help you inform everyone that might need to know. This is known as <a href=\"https://healthywa.wa.gov.au/Articles/A_E/Contact-tracing-for-sexually-transmitted-infections-and-bloodborne-viruses\">contact tracing</a>.</p><p>What if I am pregnant?</p><p>If you are pregnant it is very important to protect yourself and your unborn baby from STIs. Having an STI in pregnancy could make your unborn baby get very sick and even die.</p><p>You can prevent this from happening by having safe sex and by having an STI check, and getting treatment if needed, so your baby is born healthy.</p><p>How can STIs be prevented?</p><p>You can reduce the risk of getting an STI by following this advice:</p><ul><li>Have regular STI checks.</li><li>Limit your sex partners. The fewer people you have sex with, the less chance you have of having sex with someone who has a STI.</li><li>Always use condoms or dental dams and water-based lubricant.</li><li>Condoms are the best way to protect you both from STIs.</li></ul>');

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
  `p_email` varchar(200) NOT NULL,
  `p_passwd` varchar(20) NOT NULL,
  `acc_status` tinyint(5) NOT NULL,
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

INSERT INTO `patients` (`p_id`, `p_fname`, `p_lname`, `p_email`, `p_passwd`, `acc_status`, `p_age`, `p_address`, `p_ailment`, `p_diagonisis`, `p_lab_tests`, `p_lab_results`, `p_prescription`, `p_type`, `p_drug_admin`, `created_at`, `date_recorded`, `temp`, `weight`, `height`, `sbp`, `dbp`, `heartrate`, `respiratoryrate`) VALUES
(2, 'Second Out', 'Patient', 'patient2@ohcms.com', 'demo12', 1, '21', 'Localhost 127.0.0.1', 'TuberCulosis', '<p>Diagnosed With Tuberculosis </p>', 'Saliva, Sputum and Mucus Tested', 'Tuberculosis tested Positive.', 'Antibiotics to counter attack Bacteria infection', 'OutPatient', 'Penincillin and Amoxyll', '2019-09-14', '2019-12-09', '37', '60', '120', '97', '89', '87', '50'),
(3, 'First', 'InPatient', '', '', 0, '20', 'Localhost 127.0.0.1', 'Broken Legs', 'Broken Legs', 'Fracture in Femur Bone', 'Fracture and Crumble in Femur Bone tested positive', 'Intensive Femur born exercise', 'InPatient', 'Morphine Sulphate and DeepHeat', '2019-09-15', '2019-12-09', '67', '98', '145', '90', '89', '67', '12'),
(4, 'First ', 'Isolation Patient', '', '', 0, '20', '127009', '<p>Swine Flu</p>', '<p>Swine Flu</p>', 'Mucus, Urine, Stool and Blood tested ', 'Swine Flu Tested Positive', '<p>Antibiotic drugs</p>', 'Isolation Patient', '<p>Paracetamol and Multivitamin Tablets</p>', '2019-09-18', '', '', '', '', '', '', '', ''),
(5, 'Second Out', 'Patient', '', '', 0, '30', '127010', 'Flu', '<p>Swine Flu</p>', '<p>Body Fluids Tested for any flu infection</p>', '<p>Body Fluids Tested for any flu infection</p>', 'Antibiotics drugs to counter attack flu infections', 'OutPatient', 'Celestamine and FluGone Tablets', '2019-09-18', '', '', '', '', '', '', '', ''),
(6, 'Martin ', 'Mbithi', '', '', 0, '70', '120 Machakos', 'Malaria', '<p>Malaria</p>', 'Blood , Stool, Saliva Tested', 'Malaria tested positive', '<p>Take antibiotics for two weeks</p>', 'InPatient', '<p>Paracetamol</p>', '2019-09-18', '', '', '', '', '', '', '', ''),
(7, 'Perpetual', 'Ndanu', '', '', 0, '20', '127 001 Localhost', 'Colds', 'Flu/Colds', 'Sputum and Saliva Tested ', 'Colds,Flu and dry coughs tested positive', 'Drugs with high contents of anti biotics.', 'OutPatient', 'FluGone Tablets, Amoxyll and Piritons', '2019-11-30', '2019-12-09', '37', '45', '120', '89', '120', '90', '45');

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital_employees`
--
ALTER TABLE `hospital_employees`
  MODIFY `em_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  MODIFY `kb_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
