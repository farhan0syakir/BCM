-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2015 at 02:55 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bcm`
--

-- --------------------------------------------------------

--
-- Table structure for table `alt_method`
--

CREATE TABLE IF NOT EXISTS `alt_method` (
`id` int(11) NOT NULL,
  `id_bus_act` int(11) NOT NULL,
  `alt_method` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bus_act`
--

CREATE TABLE IF NOT EXISTS `bus_act` (
`id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `less_4h` float NOT NULL,
  `type_less_4h` int(11) NOT NULL,
  `less_1d` float NOT NULL,
  `type_less_1d` int(11) NOT NULL,
  `less_2d` float NOT NULL,
  `type_less_2d` int(11) NOT NULL,
  `less_3d` float NOT NULL,
  `type_less_3d` int(11) NOT NULL,
  `less_7d` float NOT NULL,
  `type_less_7d` int(11) NOT NULL,
  `more_7d` float NOT NULL,
  `type_more_7d` int(11) NOT NULL,
  `non_type_less_4h` int(11) NOT NULL,
  `non_type_less_1d` int(11) NOT NULL,
  `non_type_less_2d` int(11) NOT NULL,
  `non_type_less_3d` int(11) NOT NULL,
  `non_type_less_7d` int(11) NOT NULL,
  `non_type_more_7d` int(11) NOT NULL,
  `critical_time_per` text NOT NULL,
  `rto` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dependencies`
--

CREATE TABLE IF NOT EXISTS `dependencies` (
`id` int(11) NOT NULL,
  `id_bus_act` int(11) NOT NULL,
  `in_part` text NOT NULL,
  `in_rto` int(11) NOT NULL,
  `in_rto_type` varchar(50) NOT NULL,
  `in_arrg` tinyint(1) NOT NULL,
  `ex_part` text NOT NULL,
  `ex_rto` int(11) NOT NULL,
  `ex_rto_type` varchar(50) NOT NULL,
  `ex_arrg` tinyint(1) NOT NULL,
  `type_stream` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Insignificant', '0 - <=  5  Mio (IDR)'),
(2, 'Minor', '5 - <= 10  Mio (IDR)'),
(3, 'Moderate ', '10 -  <= 50 Mio (IDR)'),
(4, 'Major', '50 - <=  100 Mio (IDR)'),
(5, 'Catastrophic', '>  100 Mio (IDR)');

-- --------------------------------------------------------

--
-- Table structure for table `mor_1`
--

CREATE TABLE IF NOT EXISTS `mor_1` (
`id` int(11) NOT NULL,
  `id_bus_act` int(11) NOT NULL,
  `work_facility` text NOT NULL,
  `location` text NOT NULL,
  `staff` int(11) NOT NULL,
  `workstations` int(11) NOT NULL,
  `notebook` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mor_1_data`
--

CREATE TABLE IF NOT EXISTS `mor_1_data` (
`id` int(11) NOT NULL,
  `mor_id` int(11) NOT NULL,
  `skill_set` text NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `name_ba`
--

CREATE TABLE IF NOT EXISTS `name_ba` (
`id` int(11) NOT NULL,
  `ba_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `alt_method`
--
ALTER TABLE `alt_method`
 ADD PRIMARY KEY (`id`), ADD KEY `id_bus_act` (`id_bus_act`);

--
-- Indexes for table `bus_act`
--
ALTER TABLE `bus_act`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dependencies`
--
ALTER TABLE `dependencies`
 ADD PRIMARY KEY (`id`), ADD KEY `id_bus_act` (`id_bus_act`);

--
-- Indexes for table `fin_impact_table`
--
ALTER TABLE `fin_impact_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mor_1`
--
ALTER TABLE `mor_1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mor_1_data`
--
ALTER TABLE `mor_1_data`
 ADD PRIMARY KEY (`id`);

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
-- Indexes for table `staff_mor_table`
--
ALTER TABLE `staff_mor_table`
 ADD PRIMARY KEY (`id`), ADD KEY `id_mor_1` (`id_mor_1`);

--
-- Indexes for table `war_mor_table`
--
ALTER TABLE `war_mor_table`
 ADD PRIMARY KEY (`id`), ADD KEY `id_mor_1` (`id_mor_1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alt_method`
--
ALTER TABLE `alt_method`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bus_act`
--
ALTER TABLE `bus_act`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dependencies`
--
ALTER TABLE `dependencies`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fin_impact_table`
--
ALTER TABLE `fin_impact_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mor_1`
--
ALTER TABLE `mor_1`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mor_1_data`
--
ALTER TABLE `mor_1_data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `name_ba`
--
ALTER TABLE `name_ba`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `staff_mor_table`
--
ALTER TABLE `staff_mor_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `war_mor_table`
--
ALTER TABLE `war_mor_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alt_method`
--
ALTER TABLE `alt_method`
ADD CONSTRAINT `alt_method_ibfk_1` FOREIGN KEY (`id_bus_act`) REFERENCES `bus_act` (`id`);

--
-- Constraints for table `bus_act`
--
ALTER TABLE `bus_act`
ADD CONSTRAINT `bus_act_ibfk_1` FOREIGN KEY (`id`) REFERENCES `name_ba` (`id`);

--
-- Constraints for table `dependencies`
--
ALTER TABLE `dependencies`
ADD CONSTRAINT `dependencies_ibfk_1` FOREIGN KEY (`id_bus_act`) REFERENCES `bus_act` (`id`);

--
-- Constraints for table `notebook_mor_table`
--
ALTER TABLE `notebook_mor_table`
ADD CONSTRAINT `notebook_mor_table_ibfk_1` FOREIGN KEY (`id_mor_1`) REFERENCES `mor_1` (`id`);

--
-- Constraints for table `staff_mor_table`
--
ALTER TABLE `staff_mor_table`
ADD CONSTRAINT `staff_mor_table_ibfk_1` FOREIGN KEY (`id_mor_1`) REFERENCES `mor_1` (`id`);

--
-- Constraints for table `war_mor_table`
--
ALTER TABLE `war_mor_table`
ADD CONSTRAINT `war_mor_table_ibfk_1` FOREIGN KEY (`id_mor_1`) REFERENCES `mor_1` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
