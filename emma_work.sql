-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2022 at 05:12 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emma_work`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_report`
--

DROP TABLE IF EXISTS `daily_report`;
CREATE TABLE IF NOT EXISTS `daily_report` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `client` varchar(100) NOT NULL,
  `contract` varchar(200) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `dailyreport_no` varchar(100) NOT NULL,
  `dailyreport_day` varchar(100) NOT NULL,
  `dailyreport_date` date NOT NULL,
  `general_activities` text NOT NULL,
  `activities_performed_today` text NOT NULL,
  `activities_planned_tomorrow` text NOT NULL,
  `torch_qty` varchar(200) NOT NULL,
  `client_qty` varchar(200) NOT NULL,
  `sub_contractor_qty` varchar(200) NOT NULL,
  `community_qty` varchar(100) NOT NULL,
  `equipment_1` varchar(100) NOT NULL,
  `equipment_2` varchar(100) NOT NULL,
  `equipment_3` varchar(100) NOT NULL,
  `equipment_4` varchar(100) NOT NULL,
  `equipment_5` varchar(100) NOT NULL,
  `equipment_6` varchar(100) NOT NULL,
  `equipment_1_qty` varchar(100) NOT NULL,
  `equipment_2_qty` varchar(100) NOT NULL,
  `equipment_3_qty` varchar(100) NOT NULL,
  `equipment_4_qty` varchar(100) NOT NULL,
  `equipment_5_qty` varchar(100) NOT NULL,
  `equipment_6_qty` varchar(100) NOT NULL,
  `unsafe_act` varchar(200) NOT NULL,
  `unsafe_condition` varchar(200) NOT NULL,
  `accident` varchar(200) NOT NULL,
  `environmental_condition` varchar(200) NOT NULL,
  `others` varchar(200) NOT NULL,
  `miscellaneous_report` text NOT NULL,
  `name_reportby` varchar(200) NOT NULL,
  `name_approvedby` varchar(200) NOT NULL,
  `reportedby_date` date NOT NULL,
  `approvedby_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daily_site_report`
--

DROP TABLE IF EXISTS `daily_site_report`;
CREATE TABLE IF NOT EXISTS `daily_site_report` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `report_date` datetime NOT NULL,
  `title` varchar(100) NOT NULL,
  `client` varchar(200) NOT NULL,
  `nosof_days_onsite` varchar(100) NOT NULL,
  `nosof_personnel` varchar(100) NOT NULL,
  `activities` text NOT NULL,
  `next_plan` varchar(200) NOT NULL,
  `listof_tools` varchar(200) NOT NULL,
  `observation` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_site_report`
--

INSERT INTO `daily_site_report` (`id`, `report_date`, `title`, `client`, `nosof_days_onsite`, `nosof_personnel`, `activities`, `next_plan`, `listof_tools`, `observation`) VALUES
(1, '2022-04-03 00:00:00', 'road', 'kola', '43', '32', 'klskdf', 'kljadls', 'mnskad', 'kjlkj;ldas'),
(2, '2022-04-03 00:00:00', 'road', 'kola', '43', '32', 'klskdf', 'kljadls', 'mnskad', 'endorse by kola'),
(3, '2022-04-03 00:00:00', 'jlklkdlsa', 'jkskad', '89932', '98', 'nxczx', 'cxz', 'xcxz', 'dsjkjds'),
(4, '2022-04-03 00:00:00', 'jlklkdlsa', 'jkskad', '89932', '98', 'nxczx', 'cxz', 'xcxz', 'dsjkjds');

-- --------------------------------------------------------

--
-- Table structure for table `project_report`
--

DROP TABLE IF EXISTS `project_report`;
CREATE TABLE IF NOT EXISTS `project_report` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `contract_name` varchar(100) NOT NULL,
  `work_done` varchar(200) NOT NULL,
  `contract_rep` varchar(200) NOT NULL,
  `client_rep` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_report`
--

INSERT INTO `project_report` (`id`, `contract_name`, `work_done`, `contract_rep`, `client_rep`) VALUES
(1, 'ola', 'jhkdshkf', 'njljclx', 'jksdjlf');

-- --------------------------------------------------------

--
-- Table structure for table `project_weekly_report`
--

DROP TABLE IF EXISTS `project_weekly_report`;
CREATE TABLE IF NOT EXISTS `project_weekly_report` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `contract_name` varchar(100) NOT NULL,
  `project_loc` varchar(200) NOT NULL,
  `work_done` varchar(200) NOT NULL,
  `contracts_name` varchar(100) NOT NULL,
  `sign_date_contract` date NOT NULL,
  `client_rep` varchar(100) NOT NULL,
  `sign_date_client` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_weekly_report`
--

INSERT INTO `project_weekly_report` (`id`, `contract_name`, `project_loc`, `work_done`, `contracts_name`, `sign_date_contract`, `client_rep`, `sign_date_client`) VALUES
(1, 'ksjkaj', 'mklk;lsaf', 'nkljlfa', 'm;lks', '2022-04-03', 'mdasd;l', '2022-04-02'),
(2, 'ksjkaj', 'mklk;lsaf', 'klsk;k', 'm;lks', '2022-04-24', 'mdasd;l', '2022-04-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
