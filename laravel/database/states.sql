-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2017 at 11:08 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bi_be`
--

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state` varchar(50) DEFAULT NULL,
  `abbrv` varchar(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state`, `abbrv`) VALUES
('ALABAMA', 'AL'),
('ARIZONA', 'AZ'),
('ARKANSAS', 'AR'),
('CALIFORNIA', 'CA'),
('COLORADO', 'CO'),
('CONNECTICUT', 'CT'),
('DELAWARE', 'DE'),
('DISTRICT OF COLUMBIA', 'DC'),
('FLORIDA', 'FL'),
('GEORGIA', 'GA'),
('IDAHO', 'ID'),
('ILLINOIS', 'IL'),
('INDIANA', 'IN'),
('IOWA', 'IA'),
('KANSAS', 'KS'),
('KENTUCKY', 'KY'),
('LOUISIANA', 'LA'),
('MAINE', 'ME'),
('MARYLAND', 'MD'),
('MASSACHUSETTS', 'MA'),
('MICHIGAN', 'MI'),
('MINNESOTA', 'MN'),
('MISSISSIPPI', 'MS'),
('MISSOURI', 'MO'),
('MONTANA', 'MT'),
('NEBRASKA', 'NE'),
('NEVADA', 'NV'),
('NEW HAMPSHIRE', 'NH'),
('NEW JERSEY', 'NJ'),
('NEW MEXICO', 'NM'),
('NEW YORK', 'NY'),
('NORTH CAROLINA', 'NC'),
('NORTH DAKOTA', 'ND'),
('OHIO', 'OH'),
('OKLAHOMA', 'OK'),
('OREGON', 'OR'),
('PENNSYLVANIA', 'PA'),
('RHODE ISLAND', 'RI'),
('SOUTH CAROLINA', 'SC'),
('SOUTH DAKOTA', 'SD'),
('TENNESSEE', 'TN'),
('TEXAS', 'TX'),
('UTAH', 'UT'),
('VERMONT', 'VT'),
('VIRGINIA', 'VA'),
('WASHINGTON', 'WA'),
('WEST VIRGINIA', 'WV'),
('WISCONSIN', 'WI'),
('WYOMING', 'WY'),
('PUERTO RICO', 'PR'),
('VIRGIN ISLANDS', 'VI'),
('ALASKA', 'AK'),
('ALBERTA', 'AB'),
('BRITISH COLUMBIA', 'BC'),
('GUAM', 'GU'),
('HAWAII', 'HI'),
('ONTARIO', 'ON'),
('QUEBEC', 'QU'),
('UNITED KINGDOM', 'UK');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
