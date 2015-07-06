-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2015 at 04:23 PM
-- Server version: 5.6.24-0ubuntu2
-- PHP Version: 5.6.4-4ubuntu6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bcm`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternative_method`
--

CREATE TABLE IF NOT EXISTS `alternative_method` (
`id` int(20) NOT NULL,
  `ba_id` int(11) NOT NULL,
  `alternative_method` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternative_method`
--

INSERT INTO `alternative_method` (`id`, `ba_id`, `alternative_method`) VALUES
(1, 0, 'alt 1'),
(2, 0, 'alter meth 1'),
(3, 0, 'alalaaasi dfgaisf'),
(4, 21, 'satu'),
(5, 21, 'dua'),
(6, 21, 'tiga'),
(7, 21, 'empat'),
(8, 22, 'alter'),
(9, 22, 'alssdf fjsdfso'),
(10, 23, 'semangat Gengss'),
(11, 23, 'ini pasti bisa'),
(12, 23, 'percayalah, hahah'),
(13, 23, 'semangat Gengss'),
(14, 23, 'ini pasti bisa'),
(15, 23, 'percayalah, hahah');

-- --------------------------------------------------------

--
-- Table structure for table `business_activity`
--

CREATE TABLE IF NOT EXISTS `business_activity` (
`id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `less_4h` int(11) NOT NULL,
  `less_1d` int(11) NOT NULL,
  `less_2d` int(11) NOT NULL,
  `less_3d` int(11) NOT NULL,
  `less_7d` int(11) NOT NULL,
  `more_7d` int(11) NOT NULL,
  `non_less_4h` int(11) NOT NULL,
  `non_less_1d` int(11) NOT NULL,
  `non_less_2d` int(11) NOT NULL,
  `non_less_3d` int(11) NOT NULL,
  `non_less_7d` int(11) NOT NULL,
  `non_more_7d` int(11) NOT NULL,
  `critical_time_per` tinyint(4) DEFAULT NULL,
  `cto_notes` text NOT NULL,
  `rto` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_activity`
--

INSERT INTO `business_activity` (`id`, `name`, `description`, `less_4h`, `less_1d`, `less_2d`, `less_3d`, `less_7d`, `more_7d`, `non_less_4h`, `non_less_1d`, `non_less_2d`, `non_less_3d`, `non_less_7d`, `non_more_7d`, `critical_time_per`, `cto_notes`, `rto`) VALUES
(1, 'Liquidity Management MM; GWM', 'Maintaining Bank''s Primary & Secondary Reserve Requirement for Rupiah and Primary Reserve Requirement for Foreign Currency in accordance with BI Regulation and Internal Provision', 4, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 4, '', '4 Hours'),
(2, 'AFS Fee Income', 'AFS transactions to realize P/L', 4, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 4, '', '4 Hours'),
(3, 'FTP to LOB', 'The processes which are conducted to support ALCO Portfolio & Portfolio Management', 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 4, '', '1 Day'),
(4, 'TCM-NOP', 'NOP Monitoring & Balancing', 0, 4, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 4, '', '4 Hours'),
(5, 'TCM-TRFX-01', 'FX Spot/ FX Tom/ FX Tod/Forward', 0, 4, 4, 0, 0, 0, 4, 0, 0, 0, 0, 0, 4, '', '1 Day'),
(6, 'TCM-TRIB-02', 'IDR Bond', 0, 3, 4, 4, 0, 0, 4, 0, 0, 0, 0, 0, 4, '', '1 Day'),
(7, 'TCM-TRUB-03', 'USD Bonds ', 0, 3, 3, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, '', '1 Day'),
(16, 'my new ba name', 'new new', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, '', '4 Hours'),
(17, 'name', 'desc', 2, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 'facebook sjhakshdf ', '4 Hours'),
(18, 'name sekali lagi', 'sdsaf l', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, '', '4 Hours'),
(19, 'farhan name', 'fasfd a sdf asf ds fs dfafa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, '', '4 Hours'),
(21, 'TES S UDSA', 'SJKADF  SDAF sdifa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, '', '4 Hours'),
(22, 'Farhan', 'Desckaskda', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, '', '4 Hours'),
(23, 'Rauhil', 'wih keren banget ni buisiness unit.', 1, 2, 4, 4, 4, 4, 1, 2, 4, 4, 4, 4, 4, '', '2 days');

-- --------------------------------------------------------

--
-- Table structure for table `business_unit`
--

CREATE TABLE IF NOT EXISTS `business_unit` (
`id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `name_ba` varchar(200) NOT NULL,
  `id_ba_bu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dependencies`
--

CREATE TABLE IF NOT EXISTS `dependencies` (
`id` int(20) NOT NULL,
  `ba_id` varchar(20) NOT NULL,
  `is_internal` tinyint(4) NOT NULL,
  `party_name` text NOT NULL,
  `rto` int(20) NOT NULL,
  `rto_type` varchar(50) NOT NULL,
  `arrangement_in_place` tinyint(1) NOT NULL,
  `type_stream` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dependencies`
--

INSERT INTO `dependencies` (`id`, `ba_id`, `is_internal`, `party_name`, `rto`, `rto_type`, `arrangement_in_place`, `type_stream`) VALUES
(1, '1', 1, 'Partai', 3, 'hours', 1, '0'),
(2, '1', 0, 'tukang jahit', 11, 'weeks', 0, '0'),
(3, '1', 0, 'hohooooo', 3, 'weeks', 0, '1'),
(4, '1', 0, 'mengerta', 0, 'hours', 0, '1'),
(5, '23', 1, 'Rauhil Fahmi keceee parah', 4, 'weeks', 1, '0'),
(6, '23', 0, 'Rauhil gitu loh', 5, 'hours', 1, '1'),
(7, '23', 1, 'BEM', 6, 'weeks', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `fin_impact_table`
--

CREATE TABLE IF NOT EXISTS `fin_impact_table` (
`id` int(11) NOT NULL,
  `type` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fin_impact_table`
--

INSERT INTO `fin_impact_table` (`id`, `type`, `description`) VALUES
(0, 'Insignificant', '0 - <=  5  Mio (IDR)'),
(1, 'Minor', '5 - <= 10  Mio (IDR)'),
(2, 'Moderate ', '10 -  <= 50 Mio (IDR)'),
(3, 'Major', '50 - <=  100 Mio (IDR)'),
(4, 'Catastrophic', '>  100 Mio (IDR)');

-- --------------------------------------------------------

--
-- Table structure for table `mor_hardware`
--

CREATE TABLE IF NOT EXISTS `mor_hardware` (
`id` int(11) NOT NULL,
  `name` varchar(140) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mor_hardware`
--

INSERT INTO `mor_hardware` (`id`, `name`) VALUES
(1, 'printer'),
(2, 'telepon'),
(3, 'monitor'),
(4, 'hardware apa'),
(5, 'kek');

-- --------------------------------------------------------

--
-- Table structure for table `mor_hardware_ba`
--

CREATE TABLE IF NOT EXISTS `mor_hardware_ba` (
  `ba_id` int(11) NOT NULL,
  `mor_hardware_id` int(11) NOT NULL,
  `rto` varchar(140) NOT NULL,
  `quantity` int(11) NOT NULL,
  `is_sharing` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mor_hardware_ba`
--

INSERT INTO `mor_hardware_ba` (`ba_id`, `mor_hardware_id`, `rto`, `quantity`, `is_sharing`) VALUES
(23, 1, '10', 10, 1),
(23, 2, '10', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mor_non_it`
--

CREATE TABLE IF NOT EXISTS `mor_non_it` (
  `id` int(11) NOT NULL,
  `equipment` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mor_non_it`
--

INSERT INTO `mor_non_it` (`id`, `equipment`) VALUES
(1, 'table'),
(2, 'chair'),
(3, 'ATK');

-- --------------------------------------------------------

--
-- Table structure for table `mor_non_it_ba`
--

CREATE TABLE IF NOT EXISTS `mor_non_it_ba` (
`id` int(11) NOT NULL,
  `ba_id` int(11) NOT NULL,
  `mor_non_it_id` int(11) NOT NULL,
  `rto` varchar(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `is_sharing` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mor_non_it_ba`
--

INSERT INTO `mor_non_it_ba` (`id`, `ba_id`, `mor_non_it_id`, `rto`, `quantity`, `is_sharing`) VALUES
(1, 0, 3, 'tes', 12, '1'),
(2, 23, 1, '10', 10, '1');

-- --------------------------------------------------------

--
-- Table structure for table `mor_normal`
--

CREATE TABLE IF NOT EXISTS `mor_normal` (
`id` int(11) NOT NULL,
  `ba_id` int(11) NOT NULL,
  `location` varchar(140) NOT NULL,
  `staff` int(11) NOT NULL,
  `shift` int(11) NOT NULL,
  `work_station` int(11) NOT NULL,
  `pc` int(11) NOT NULL,
  `s_less_4h` int(11) NOT NULL,
  `s_less_1d` int(11) NOT NULL,
  `s_less_2d` int(11) NOT NULL,
  `s_less_3d` int(11) NOT NULL,
  `s_less_7d` int(11) NOT NULL,
  `s_more_7d` int(11) NOT NULL,
  `war_less_4h` int(11) NOT NULL,
  `war_less_1d` int(11) NOT NULL,
  `war_less_2d` int(11) NOT NULL,
  `war_less_3d` int(11) NOT NULL,
  `war_less_7d` int(11) NOT NULL,
  `war_more_7d` int(11) NOT NULL,
  `p_less_4h` int(11) NOT NULL,
  `p_less_1d` int(11) NOT NULL,
  `p_less_2d` int(11) NOT NULL,
  `p_less_3d` int(11) NOT NULL,
  `p_less_7d` int(11) NOT NULL,
  `p_more_7d` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mor_normal`
--

INSERT INTO `mor_normal` (`id`, `ba_id`, `location`, `staff`, `shift`, `work_station`, `pc`, `s_less_4h`, `s_less_1d`, `s_less_2d`, `s_less_3d`, `s_less_7d`, `s_more_7d`, `war_less_4h`, `war_less_1d`, `war_less_2d`, `war_less_3d`, `war_less_7d`, `war_more_7d`, `p_less_4h`, `p_less_1d`, `p_less_2d`, `p_less_3d`, `p_less_7d`, `p_more_7d`) VALUES
(35, 23, 'Fasilkom', 4, 4, 6, 10, 3, 2, 6, 4, 4, 9, 2, 3, 6, 8, 5, 1, 5, 8, 2, 6, 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `mor_normal_skill_set`
--

CREATE TABLE IF NOT EXISTS `mor_normal_skill_set` (
`id` int(11) NOT NULL,
  `mor_normal_id` int(11) NOT NULL,
  `skill_set` varchar(140) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mor_normal_skill_set`
--

INSERT INTO `mor_normal_skill_set` (`id`, `mor_normal_id`, `skill_set`) VALUES
(3, 35, 'skilnya keren, suka tijel'),
(4, 35, 'ada satu lagi ni azka, lebih tijel lagi');

-- --------------------------------------------------------

--
-- Table structure for table `mor_normal_work_facilities`
--

CREATE TABLE IF NOT EXISTS `mor_normal_work_facilities` (
`id` int(11) NOT NULL,
  `mor_normal_id` int(11) NOT NULL,
  `work_facility` varchar(140) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mor_normal_work_facilities`
--

INSERT INTO `mor_normal_work_facilities` (`id`, `mor_normal_id`, `work_facility`) VALUES
(10, 35, 'fUKI 2014 keren parah ketuanya parhana');

-- --------------------------------------------------------

--
-- Table structure for table `mor_record`
--

CREATE TABLE IF NOT EXISTS `mor_record` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mor_record`
--

INSERT INTO `mor_record` (`id`, `name`) VALUES
(1, 'Trade blotter from SUMMIT'),
(2, 'Treasury Policy & Procedure');

-- --------------------------------------------------------

--
-- Table structure for table `mor_record_ba`
--

CREATE TABLE IF NOT EXISTS `mor_record_ba` (
`id` int(11) NOT NULL,
  `ba_id` int(20) NOT NULL,
  `mor_record_id` int(11) NOT NULL,
  `rto` varchar(20) NOT NULL,
  `rpo` varchar(20) DEFAULT NULL,
  `media` varchar(10) NOT NULL,
  `current_storage_location` varchar(50) NOT NULL,
  `ownership` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mor_record_ba`
--

INSERT INTO `mor_record_ba` (`id`, `ba_id`, `mor_record_id`, `rto`, `rpo`, `media`, `current_storage_location`, `ownership`) VALUES
(1, 23, 1, '4', '6', '7', '2', '3');

-- --------------------------------------------------------

--
-- Table structure for table `mor_software`
--

CREATE TABLE IF NOT EXISTS `mor_software` (
`id` int(11) NOT NULL,
  `name` varchar(140) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mor_software`
--

INSERT INTO `mor_software` (`id`, `name`) VALUES
(1, 'instagram'),
(2, 'internet'),
(3, 'software a'),
(4, 'software b'),
(5, 'software ini'),
(6, 'software itu'),
(7, 'yang ini'),
(8, 'yang itu'),
(9, 'aplikasi ini'),
(10, 'aplikasi itu');

-- --------------------------------------------------------

--
-- Table structure for table `mor_software_ba`
--

CREATE TABLE IF NOT EXISTS `mor_software_ba` (
`id` int(11) NOT NULL,
  `mor_software_id` int(11) NOT NULL,
  `ba_id` int(11) NOT NULL,
  `rto` varchar(140) NOT NULL,
  `rpo` varchar(140) NOT NULL,
  `alternative_manual_method` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mor_software_ba`
--

INSERT INTO `mor_software_ba` (`id`, `mor_software_id`, `ba_id`, `rto`, `rpo`, `alternative_manual_method`) VALUES
(44, 2, 23, '10', '', 'Fuki 2014'),
(45, 4, 23, '4', '', 'Bem');

-- --------------------------------------------------------

--
-- Table structure for table `name_ba`
--

CREATE TABLE IF NOT EXISTS `name_ba` (
  `id` varchar(20) NOT NULL,
  `ba_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `name_ba`
--

INSERT INTO `name_ba` (`id`, `ba_name`) VALUES
('1', 'TCM-BSM-01\r\n'),
('10', 'TCM-SLRTL-02\r\n'),
('11', 'TCM-SLW-01\r\n'),
('12', 'TCM-SLW-02\r\n'),
('13', 'TCM-SLW-03'),
('14', 'TCM-BM-01'),
('15', 'TCM-BM-02'),
('16', 'TCM-BM-03'),
('17', 'TCM-ECO-01'),
('18', 'TCM-ECO-02'),
('2', 'TCM-BSM-02\r\n'),
('3', 'TCM-BSM-03\r\n'),
('4', 'TCM-NOP\r\n'),
('5', 'TCM-TRFX-01\r\n'),
('6', 'TCM-TRIB-02\r\n'),
('7', 'TCM-TRUB-03\r\n'),
('8', 'TCM-TRSTIR-04\r\n'),
('9', 'TCM-SLRTL-01\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `non_fin_impact_table`
--

CREATE TABLE IF NOT EXISTS `non_fin_impact_table` (
`id` int(11) NOT NULL,
  `type` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `non_fin_impact_table`
--

INSERT INTO `non_fin_impact_table` (`id`, `type`, `description`) VALUES
(1, 'Insignificant ', 'No measureable operational impact'),
(2, 'Minor', 'Minor degradation of operation or service delivery\r\nImpact limited to single area of the business\r\nLocal management intervention is required with locally available resources '),
(3, 'Moderate', 'Substantial degradation of operation or service deliveryImpact to multiple area of the businessSubstantial management intervention is required; may require some possible external assistance  '),
(4, 'Major', 'Significant degradation of operation or service delivery\r\nImpact to multilple and diverse areas of the business, threatening viability of the organisation\r\nSignificant senior management intervention is required; will require significant mobilization of resources including external assistance '),
(5, 'Catastrophic ', 'Widespread and total degradation of operation or service delivery\r\nImpact across critical functions of the organization, threatening the immediate viability of the organization (and introduces doubt on the sustainability) of the organization  \r\nImmediate senior executive and Board intervention required');

-- --------------------------------------------------------

--
-- Table structure for table `notebook_mor_table`
--

CREATE TABLE IF NOT EXISTS `notebook_mor_table` (
`id` int(11) NOT NULL,
  `id_mor_1` int(11) NOT NULL,
  `less_4h` int(11) NOT NULL,
  `less_1d` int(11) NOT NULL,
  `less_2d` int(11) NOT NULL,
  `less_3d` int(11) NOT NULL,
  `less_7d` int(11) NOT NULL,
  `more_7d` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ra_impact`
--

CREATE TABLE IF NOT EXISTS `ra_impact` (
  `id` int(11) NOT NULL,
  `impact` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ra_impact`
--

INSERT INTO `ra_impact` (`id`, `impact`) VALUES
(1, '< 2 hours'),
(2, '2 to 4 hours'),
(3, '4 hours to 1 day'),
(4, '1 day to 3 days'),
(5, '> 3 days');

-- --------------------------------------------------------

--
-- Table structure for table `ra_likelihood`
--

CREATE TABLE IF NOT EXISTS `ra_likelihood` (
  `level` int(11) NOT NULL,
  `frequence` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `probability` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ra_likelihood`
--

INSERT INTO `ra_likelihood` (`level`, `frequence`, `probability`) VALUES
(1, 'Unlikely', '1 in 1000 years'),
(2, 'Less likely', '1 in 100 years'),
(3, 'Likely', '1 per 10 years'),
(4, 'More likely', '1 per Year'),
(5, 'Most Likely', '1 per Month');

-- --------------------------------------------------------

--
-- Table structure for table `ra_vulnerabilities`
--

CREATE TABLE IF NOT EXISTS `ra_vulnerabilities` (
`id` int(11) NOT NULL,
  `ra_id` int(11) NOT NULL,
  `vulnerability` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `risk_assesment`
--

CREATE TABLE IF NOT EXISTS `risk_assesment` (
`id` int(11) NOT NULL,
  `threat` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p` int(11) NOT NULL,
  `i` int(11) NOT NULL,
  `pm` int(11) NOT NULL,
  `im` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `risk_assesment`
--

INSERT INTO `risk_assesment` (`id`, `threat`, `p`, `i`, `pm`, `im`) VALUES
(1, 'Bomb Threat', 4, 3, 3, 2),
(2, 'Earthquake', 4, 1, 4, 1),
(5, 'farhan', 0, 0, 0, 0),
(6, 'Syakir', 1, 2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `staff_mor_table`
--

CREATE TABLE IF NOT EXISTS `staff_mor_table` (
`id` int(11) NOT NULL,
  `id_mor_1` int(11) NOT NULL,
  `less_4h` int(11) NOT NULL,
  `less_1d` int(11) NOT NULL,
  `less_2d` int(11) NOT NULL,
  `less_3d` int(11) NOT NULL,
  `less_7d` int(11) NOT NULL,
  `more_7d` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `role` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `role`, `name`) VALUES
(1, 'admin', 'admin', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `version`
--

CREATE TABLE IF NOT EXISTS `version` (
  `date` date NOT NULL,
  `name_version` varchar(100) NOT NULL,
  `id_ba_version` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `war_mor_table`
--

CREATE TABLE IF NOT EXISTS `war_mor_table` (
`id` int(11) NOT NULL,
  `id_mor_1` int(11) NOT NULL,
  `less_4h` int(11) NOT NULL,
  `less_1d` int(11) NOT NULL,
  `less_2d` int(11) NOT NULL,
  `less_3d` int(11) NOT NULL,
  `less_7d` int(11) NOT NULL,
  `more_7d` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternative_method`
--
ALTER TABLE `alternative_method`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_activity`
--
ALTER TABLE `business_activity`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `business_unit`
--
ALTER TABLE `business_unit`
 ADD PRIMARY KEY (`id`), ADD KEY `id_ba_bu` (`id_ba_bu`);

--
-- Indexes for table `dependencies`
--
ALTER TABLE `dependencies`
 ADD PRIMARY KEY (`id`), ADD KEY `id_bus_act` (`ba_id`);

--
-- Indexes for table `fin_impact_table`
--
ALTER TABLE `fin_impact_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mor_hardware`
--
ALTER TABLE `mor_hardware`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mor_hardware_ba`
--
ALTER TABLE `mor_hardware_ba`
 ADD UNIQUE KEY `ba_id` (`ba_id`,`mor_hardware_id`), ADD UNIQUE KEY `ba_id_2` (`ba_id`,`mor_hardware_id`);

--
-- Indexes for table `mor_non_it_ba`
--
ALTER TABLE `mor_non_it_ba`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ba_id` (`ba_id`,`mor_non_it_id`);

--
-- Indexes for table `mor_normal`
--
ALTER TABLE `mor_normal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mor_normal_skill_set`
--
ALTER TABLE `mor_normal_skill_set`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mor_normal_work_facilities`
--
ALTER TABLE `mor_normal_work_facilities`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mor_record`
--
ALTER TABLE `mor_record`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mor_record_ba`
--
ALTER TABLE `mor_record_ba`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ba_id` (`ba_id`,`mor_record_id`);

--
-- Indexes for table `mor_software`
--
ALTER TABLE `mor_software`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mor_software_ba`
--
ALTER TABLE `mor_software_ba`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `mor_software_id` (`mor_software_id`,`ba_id`);

--
-- Indexes for table `name_ba`
--
ALTER TABLE `name_ba`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `non_fin_impact_table`
--
ALTER TABLE `non_fin_impact_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notebook_mor_table`
--
ALTER TABLE `notebook_mor_table`
 ADD PRIMARY KEY (`id`), ADD KEY `id_mor_1` (`id_mor_1`);

--
-- Indexes for table `ra_vulnerabilities`
--
ALTER TABLE `ra_vulnerabilities`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `risk_assesment`
--
ALTER TABLE `risk_assesment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_mor_table`
--
ALTER TABLE `staff_mor_table`
 ADD PRIMARY KEY (`id`), ADD KEY `id_mor_1` (`id_mor_1`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `version`
--
ALTER TABLE `version`
 ADD UNIQUE KEY `name_version` (`name_version`), ADD KEY `id_ba_version` (`id_ba_version`);

--
-- Indexes for table `war_mor_table`
--
ALTER TABLE `war_mor_table`
 ADD PRIMARY KEY (`id`), ADD KEY `id_mor_1` (`id_mor_1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternative_method`
--
ALTER TABLE `alternative_method`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `business_activity`
--
ALTER TABLE `business_activity`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `business_unit`
--
ALTER TABLE `business_unit`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dependencies`
--
ALTER TABLE `dependencies`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `fin_impact_table`
--
ALTER TABLE `fin_impact_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mor_hardware`
--
ALTER TABLE `mor_hardware`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mor_non_it_ba`
--
ALTER TABLE `mor_non_it_ba`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mor_normal`
--
ALTER TABLE `mor_normal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `mor_normal_skill_set`
--
ALTER TABLE `mor_normal_skill_set`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mor_normal_work_facilities`
--
ALTER TABLE `mor_normal_work_facilities`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mor_record`
--
ALTER TABLE `mor_record`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mor_record_ba`
--
ALTER TABLE `mor_record_ba`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mor_software`
--
ALTER TABLE `mor_software`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mor_software_ba`
--
ALTER TABLE `mor_software_ba`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `non_fin_impact_table`
--
ALTER TABLE `non_fin_impact_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `notebook_mor_table`
--
ALTER TABLE `notebook_mor_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ra_vulnerabilities`
--
ALTER TABLE `ra_vulnerabilities`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `risk_assesment`
--
ALTER TABLE `risk_assesment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `staff_mor_table`
--
ALTER TABLE `staff_mor_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `war_mor_table`
--
ALTER TABLE `war_mor_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `notebook_mor_table`
--
ALTER TABLE `notebook_mor_table`
ADD CONSTRAINT `notebook_mor_table_ibfk_1` FOREIGN KEY (`id_mor_1`) REFERENCES `mor_normal_work_facilities` (`id`);

--
-- Constraints for table `staff_mor_table`
--
ALTER TABLE `staff_mor_table`
ADD CONSTRAINT `staff_mor_table_ibfk_1` FOREIGN KEY (`id_mor_1`) REFERENCES `mor_normal_work_facilities` (`id`);

--
-- Constraints for table `war_mor_table`
--
ALTER TABLE `war_mor_table`
ADD CONSTRAINT `war_mor_table_ibfk_1` FOREIGN KEY (`id_mor_1`) REFERENCES `mor_normal_work_facilities` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
