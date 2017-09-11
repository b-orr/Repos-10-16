-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 06, 2017 at 10:25 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pronovos`
--

-- --------------------------------------------------------

--
-- Table structure for table `con_companies`
--

CREATE TABLE `con_companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `location_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `con_companies`
--

INSERT INTO `con_companies` (`id`, `user_id`, `name`, `type`, `location_name`, `phone`, `address`, `city`, `state`, `zip`, `created_at`, `updated_at`) VALUES
(2, 8, 'Test', 'Architect', 'asdfsa', 'sadfsa', 'da', 'fsadfs', 'HW', 'dfssd', '2017-08-07 16:42:48', '2017-08-07 16:53:05'),
(3, 8, 'Struct eng', 'Structural/Engineer', 'asd', 'dfsa', 'df', 'sadfs', 'CO', 'df', '2017-08-07 18:35:55', '2017-08-07 18:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `con_persons`
--

CREATE TABLE `con_persons` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `direct_line` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `cell_phone` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `company_association` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `con_persons`
--

INSERT INTO `con_persons` (`id`, `user_id`, `first_name`, `last_name`, `email`, `title`, `direct_line`, `cell_phone`, `company_association`, `created_at`, `updated_at`) VALUES
(2, 8, 'KG', 'sad', 'klime.sadsgrceski@gmail.com', 'adsfsadf', '123123', '1234353234', 'ASdasfdsa', '2017-08-07 16:42:40', '2017-08-07 16:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `drw_disciplines`
--

CREATE TABLE `drw_disciplines` (
  `id` int(10) UNSIGNED NOT NULL,
  `discipline_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `abbreviation` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drw_drawings`
--

CREATE TABLE `drw_drawings` (
  `id` int(10) UNSIGNED NOT NULL,
  `drw_folder_id` int(11) NOT NULL,
  `drw_upload_id` int(11) NOT NULL,
  `drw_discipline_id` int(11) NOT NULL,
  `drawing_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `revisited_num` int(11) NOT NULL,
  `drawing_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_thumb` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `image_org` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drw_drawings`
--

INSERT INTO `drw_drawings` (`id`, `drw_folder_id`, `drw_upload_id`, `drw_discipline_id`, `drawing_name`, `description`, `revisited_num`, `drawing_date`, `created_at`, `updated_at`, `image_thumb`, `image_org`) VALUES
(70, 1, 4, 0, '——', 'C-100', 0, '0000-00-00', '2017-08-28 19:10:55', '2017-08-28 19:10:55', 'thumb_201708280910490', 'org_201708280910490'),
(71, 1, 4, 0, 'mu', 'SV«1 100', 0, '0000-00-00', '2017-08-28 19:11:01', '2017-08-28 19:11:01', 'thumb_201708280910551', 'org_201708280910551'),
(72, 1, 4, 0, '200215702', 'FWI MAJ-', 0, '0000-00-00', '2017-08-28 19:11:08', '2017-08-28 19:11:08', 'thumb_201708280911012', 'org_201708280911012'),
(73, 1, 4, 0, '——', 'M 0-200', 0, '0000-00-00', '2017-08-28 19:11:14', '2017-08-28 19:11:14', 'thumb_201708280911083', 'org_201708280911083'),
(74, 1, 4, 0, '——', '\"\' C-21 0', 0, '0000-00-00', '2017-08-28 19:11:18', '2017-08-28 19:11:18', 'thumb_201708280911144', 'org_201708280911144'),
(75, 1, 4, 0, '——', 'F C-300', 0, '0000-00-00', '2017-08-28 19:11:23', '2017-08-28 19:11:23', 'thumb_201708280911185', 'org_201708280911185'),
(76, 1, 4, 0, '——', 'F C-310', 0, '0000-00-00', '2017-08-28 19:11:28', '2017-08-28 19:11:28', 'thumb_201708280911236', 'org_201708280911236'),
(77, 1, 4, 0, '—_', '0-320', 0, '0000-00-00', '2017-08-28 19:11:34', '2017-08-28 19:11:34', 'thumb_201708280911287', 'org_201708280911287'),
(78, 1, 4, 0, '——', 'F 0-400', 0, '0000-00-00', '2017-08-28 19:11:40', '2017-08-28 19:11:40', 'thumb_201708280911348', 'org_201708280911348'),
(79, 1, 4, 0, '——', 'F 0-410', 0, '0000-00-00', '2017-08-28 19:11:45', '2017-08-28 19:11:45', 'thumb_201708280911409', 'org_201708280911409'),
(80, 1, 4, 0, '=_M=‘° C-500', 'UTILITY PLAN', 0, '0000-00-00', '2017-08-28 19:11:51', '2017-08-28 19:11:51', 'thumb_2017082809114510', 'org_2017082809114510'),
(81, 1, 4, 0, '——', '51°: C-600', 0, '0000-00-00', '2017-08-28 19:11:56', '2017-08-28 19:11:56', 'thumb_2017082809115111', 'org_2017082809115111'),
(82, 1, 4, 0, 'GRADING PLAN', 'DATE: 514/2012', 0, '0000-00-00', '2017-08-28 19:12:02', '2017-08-28 19:12:02', 'thumb_2017082809115612', 'org_2017082809115612'),
(83, 1, 4, 0, 'C-620', 'GRADING PLAN', 0, '0000-00-00', '2017-08-28 19:12:08', '2017-08-28 19:12:08', 'thumb_2017082809120213', 'org_2017082809120213'),
(84, 1, 4, 0, '——', 'C-700', 0, '0000-00-00', '2017-08-28 19:12:14', '2017-08-28 19:12:14', 'thumb_2017082809120814', 'org_2017082809120814'),
(85, 1, 4, 0, 's: C-710', 'D RAINAG E PLAN', 0, '0000-00-00', '2017-08-28 19:12:21', '2017-08-28 19:12:21', 'thumb_2017082809121415', 'org_2017082809121415'),
(86, 1, 4, 0, '——', 'C-720', 0, '0000-00-00', '2017-08-28 19:12:26', '2017-08-28 19:12:26', 'thumb_2017082809122116', 'org_2017082809122116'),
(87, 1, 4, 0, 'C-730', 'DETAILS', 0, '0000-00-00', '2017-08-28 19:12:31', '2017-08-28 19:12:31', 'thumb_2017082809122617', 'org_2017082809122617'),
(88, 1, 4, 0, '=_M=‘° C-800', 'PAVING PLAN', 0, '0000-00-00', '2017-08-28 19:12:39', '2017-08-28 19:12:39', 'thumb_2017082809123118', 'org_2017082809123118'),
(89, 1, 4, 0, 'PAVING PLAN', 'DATE: 514/2012', 0, '0000-00-00', '2017-08-28 19:12:47', '2017-08-28 19:12:47', 'thumb_2017082809123919', 'org_2017082809123919'),
(90, 1, 4, 0, '——', '1-300-424-5555 0-320', 0, '0000-00-00', '2017-08-28 19:12:54', '2017-08-28 19:12:54', 'thumb_2017082809124820', 'org_2017082809124820'),
(91, 1, 4, 0, '=_M=‘° 0-830', 'SIGNAGE PLAN', 0, '0000-00-00', '2017-08-28 19:13:03', '2017-08-28 19:13:03', 'thumb_2017082809125421', 'org_2017082809125421'),
(92, 1, 4, 0, 'g: 0-840', 'SIGNAGE PLAN', 0, '0000-00-00', '2017-08-28 19:13:11', '2017-08-28 19:13:11', 'thumb_2017082809130322', 'org_2017082809130322');

-- --------------------------------------------------------

--
-- Table structure for table `drw_folders`
--

CREATE TABLE `drw_folders` (
  `id` int(10) UNSIGNED NOT NULL,
  `pj_project_id` int(11) NOT NULL,
  `folder_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `last_change_user_id` int(11) NOT NULL,
  `folder_description` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drw_folders`
--

INSERT INTO `drw_folders` (`id`, `pj_project_id`, `folder_name`, `last_change_user_id`, `folder_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'folder name', 8, '', NULL, '2017-08-28 16:54:07'),
(2, 6, 'Test', 8, 'f', '2017-08-08 11:11:26', '2017-08-08 11:11:26');

-- --------------------------------------------------------

--
-- Table structure for table `drw_uploads`
--

CREATE TABLE `drw_uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `release_desc` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `folder_id` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `processed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drw_uploads`
--

INSERT INTO `drw_uploads` (`id`, `filename`, `release_desc`, `release_date`, `created_at`, `updated_at`, `location`, `folder_id`, `processed`) VALUES
(4, 'QFC UVillage Construction Set - Civil', 'Some release desc', '2017-08-29', '2017-08-28 15:54:22', '2017-08-28 19:13:11', 'http://s3.amazonaws.com/pronovosrubixcube/drawings/QFC+UVillage+Construction+Set+-+Civil.pdf', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `eq_categories`
--

CREATE TABLE `eq_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `allocation_uom` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eq_region_equipment`
--

CREATE TABLE `eq_region_equipment` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `manufacturer` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `upc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `items_per_unit` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `notes` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `forecasted` int(11) NOT NULL,
  `allocated` int(11) NOT NULL,
  `allocated_qty` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eq_sub_categories`
--

CREATE TABLE `eq_sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eq_transfer_equipment`
--

CREATE TABLE `eq_transfer_equipment` (
  `id` int(10) UNSIGNED NOT NULL,
  `transfer_id` int(11) NOT NULL,
  `rental_id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_weight` double(8,2) NOT NULL,
  `tracking_number` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eq_transfer_requests`
--

CREATE TABLE `eq_transfer_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `pickup_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `shipped_from` int(11) NOT NULL,
  `shipped_to` int(11) NOT NULL,
  `loaded_by` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_contact` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_number` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `freight_line` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `total_weight` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `load_scheduled` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `load_actual` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `load_departure` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eq_trucking_equipment`
--

CREATE TABLE `eq_trucking_equipment` (
  `id` int(10) UNSIGNED NOT NULL,
  `truck_id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_weight` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eq_trucking_requests`
--

CREATE TABLE `eq_trucking_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `pickup_date` date NOT NULL,
  `requested_time` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_date` date NOT NULL,
  `shipped_from` int(11) NOT NULL,
  `shipped_to` int(11) NOT NULL,
  `site_contact` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_contact` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `freight_line` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `size_truck` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `loading_method` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `total_weight` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `page` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `user_id`, `name`, `page`, `position`, `order`, `created_at`, `updated_at`, `type`) VALUES
(5, 8, 'Sample radio field', 'radio', '', 0, '2017-07-24 08:03:46', '2017-07-24 08:03:46', 'radio'),
(6, 8, 'Sample Checkbox', '', '', 0, '2017-07-24 08:04:51', '2017-07-24 08:04:51', 'checkbox'),
(7, 8, 'Sample dropdown single', '', '', 0, '2017-07-24 08:05:28', '2017-07-24 08:05:28', 'dropdown-single'),
(8, 8, 'Dropdown multiple', '', '', 0, '2017-07-24 08:06:07', '2017-07-24 08:06:07', 'dropdown-multiple'),
(9, 8, 'Text input sample', '', '', 0, '2017-07-24 08:06:24', '2017-07-24 08:06:24', 'text'),
(10, 8, 'Textarea example', '', '', 0, '2017-07-24 08:06:45', '2017-07-24 08:06:45', 'textarea'),
(11, 8, 'second radio option', '', '', 0, '2017-07-24 11:55:56', '2017-07-24 11:55:56', 'radio');

-- --------------------------------------------------------

--
-- Table structure for table `fields_records`
--

CREATE TABLE `fields_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `fields_id` int(11) NOT NULL,
  `page_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `value` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fields_records`
--

INSERT INTO `fields_records` (`id`, `fields_id`, `page_name`, `order`, `value`, `created_at`, `updated_at`) VALUES
(1, 8, 'Admin - Users', 1, '', '2017-07-24 10:25:58', '2017-07-24 10:25:58'),
(5, 9, 'Admin - Users', 2, '', '2017-07-24 11:22:33', '2017-07-24 11:22:33'),
(6, 5, 'Admin - Users', 2, '', '2017-07-24 11:54:39', '2017-07-24 11:54:39'),
(7, 11, 'Admin - Users', 3, '', '2017-07-24 11:56:21', '2017-07-24 11:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `fields_value`
--

CREATE TABLE `fields_value` (
  `id` int(10) UNSIGNED NOT NULL,
  `fields_id` int(11) NOT NULL,
  `value` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fields_value`
--

INSERT INTO `fields_value` (`id`, `fields_id`, `value`, `created_at`, `updated_at`) VALUES
(3, 1, 'test', '2017-07-10 05:21:55', '2017-07-10 05:21:55'),
(7, 2, 'asdsadasdasd', '2017-07-10 05:45:46', '2017-07-10 05:45:46'),
(12, 4, 'aaaaa', '2017-07-10 07:03:39', '2017-07-10 07:03:39'),
(14, 3, 'aaaaa', '2017-07-10 11:07:30', '2017-07-10 11:07:30'),
(15, 6, 'Option one', '2017-07-24 08:07:37', '2017-07-24 08:07:37'),
(16, 6, 'Option two', '2017-07-24 08:07:43', '2017-07-24 08:07:43'),
(18, 6, 'Three', '2017-07-24 08:08:07', '2017-07-24 08:08:07'),
(19, 8, 'One', '2017-07-24 08:08:13', '2017-07-24 08:08:13'),
(20, 8, 'Two', '2017-07-24 08:08:17', '2017-07-24 08:08:17'),
(21, 8, 'Three', '2017-07-24 08:08:25', '2017-07-24 08:08:25'),
(22, 7, 'One', '2017-07-24 08:08:33', '2017-07-24 08:08:33'),
(23, 7, 'Two', '2017-07-24 08:08:37', '2017-07-24 08:08:37'),
(24, 5, 'One', '2017-07-24 08:08:42', '2017-07-24 08:08:42'),
(25, 5, 'Two', '2017-07-24 08:08:46', '2017-07-24 08:08:46'),
(26, 5, 'Three', '2017-07-24 08:08:53', '2017-07-24 08:08:53'),
(27, 5, 'Four', '2017-07-24 08:09:01', '2017-07-24 08:09:01'),
(28, 10, 'Some text', '2017-07-24 08:09:08', '2017-07-24 08:09:08'),
(30, 9, 'asdasdasd', '2017-07-24 08:41:06', '2017-07-24 08:41:06'),
(31, 11, 'yey', '2017-07-24 11:56:04', '2017-07-24 11:56:04'),
(32, 11, 'yuhu', '2017-07-24 11:56:09', '2017-07-24 11:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_21_130327_update_user_1', 2),
(4, '2017_06_22_073643_create_regions_table', 3),
(5, '2017_07_05_105532_create_EQ_region_equipment', 4),
(6, '2017_07_05_110935_create_EQ_sub_categories', 4),
(7, '2017_07_05_111217_create_EQ_categories', 4),
(8, '2017_07_06_154453_drawings_1', 5),
(9, '2017_07_10_061833_Fields_1', 6),
(10, '2017_07_10_061856_FieldsValues_1', 6),
(11, '2017_07_10_084506_update_user_2', 7),
(12, '2017_07_10_085033_update_user_3', 8),
(13, '2017_07_19_114813_drw_disciplines', 9),
(14, '2017_07_19_115101_drw_folders', 9),
(15, '2017_07_19_115309_drw_uploads', 9),
(16, '2017_07_19_115609_drw_drawings', 9),
(17, '2017_07_20_152851_create_projects_table', 10),
(18, '2017_07_23_220928_create_photos_folder', 11),
(19, '2017_07_24_094114_update_fields_2', 12),
(20, '2017_07_24_110756_create_fields_records_table', 13),
(21, '2017_07_24_131839_update_user_4', 14),
(22, '2017_07_25_184529_pj_photos_subfolders', 15),
(23, '2017_08_02_221834_create_eq_transfer_requests_table', 15),
(24, '2017_08_05_141432_create_eq_trucking_requests', 15),
(25, '2017_08_05_215142_update_category_table', 15),
(26, '2017_08_07_180002_persons', 16),
(27, '2017_08_07_180029_company', 16),
(28, '2017_08_07_193200_project_update', 17),
(29, '2017_08_08_073240_drw_uploads_update', 18),
(30, '2017_08_12_153243_create_eq_transfer_equipment', 19),
(31, '2017_08_12_181908_create_eq_trucking_equipment', 19),
(33, '2017_08_22_100221_bid_results', 20),
(34, '2017_08_28_201034_drawings_update', 21),
(35, '2017_08_28_203417_uploads_update', 22);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pj_bid_results`
--

CREATE TABLE `pj_bid_results` (
  `id` int(10) UNSIGNED NOT NULL,
  `pj_project_id` int(11) NOT NULL,
  `bid_date` date NOT NULL,
  `client` int(11) NOT NULL,
  `scope` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `bid_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `drawing_stage` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `man_day_cost` double(12,2) NOT NULL,
  `bid` double(12,2) NOT NULL,
  `profit` double(12,2) NOT NULL,
  `profit_cost` double(12,2) NOT NULL,
  `csf` double(12,2) NOT NULL,
  `total_csf` double(12,2) NOT NULL,
  `sf` double(12,2) NOT NULL,
  `total_sf` double(12,2) NOT NULL,
  `cy` double(12,2) NOT NULL,
  `total_cy` double(12,2) NOT NULL,
  `lower_bidder` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(12,2) NOT NULL,
  `total_need` double(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pj_bid_results`
--

INSERT INTO `pj_bid_results` (`id`, `pj_project_id`, `bid_date`, `client`, `scope`, `bid_type`, `drawing_stage`, `start_date`, `man_day_cost`, `bid`, `profit`, `profit_cost`, `csf`, `total_csf`, `sf`, `total_sf`, `cy`, `total_cy`, `lower_bidder`, `price`, `total_need`, `created_at`, `updated_at`) VALUES
(4, 8, '2017-08-22', 0, 'Formwork Modified', 'Budget', 'SF', '2017-08-31', 18857.00, 15552544.00, 5225468.00, 0.51, 1552354.00, 10.02, 1254463.00, 12.40, 2225458.00, 6.99, 'Klime', 54565774.00, 4.28, '2017-08-22 08:29:10', '2017-08-22 08:29:10'),
(5, 8, '2017-08-22', 0, 'Formwork Modified', 'Budget', 'SF', '2017-08-31', 18857.00, 15552544.00, 5225468.00, 0.51, 1552354.00, 10.02, 1254463.00, 12.40, 2225458.00, 6.99, 'Klime', 54565774.00, 4.28, '2017-08-22 08:46:36', '2017-08-22 08:46:36'),
(6, 8, '2017-09-22', 0, 'Formwork Modified', 'Budget', 'SF', '2017-08-31', 18857.00, 15552544.00, 5225468.00, 0.51, 1552354.00, 10.02, 1254463.00, 12.40, 2225458.00, 6.99, 'Klime', 54565774.00, 4.28, '2017-08-22 08:46:45', '2017-08-22 08:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `pj_photos_folders`
--

CREATE TABLE `pj_photos_folders` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pj_photos_subfolders`
--

CREATE TABLE `pj_photos_subfolders` (
  `id` int(10) UNSIGNED NOT NULL,
  `folder_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pj_projects`
--

CREATE TABLE `pj_projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `submited_user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `area` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `structure_use` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `structure_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `bid_date` date NOT NULL,
  `bid_time` time NOT NULL,
  `bid_site_address` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `bid_username` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `bid_password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `scope` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `est_date` date NOT NULL,
  `duration_start` int(11) NOT NULL,
  `duration_duration` int(11) NOT NULL,
  `duration_finish` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `architect` int(11) NOT NULL,
  `struct_eng` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `prevailing_wage` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `wrap_up` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `performance_bond` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `op_manager` int(11) NOT NULL,
  `estimator` int(11) NOT NULL,
  `owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pj_projects`
--

INSERT INTO `pj_projects` (`id`, `user_id`, `submited_user_id`, `rating`, `name`, `area`, `address`, `city`, `state`, `zip`, `structure_use`, `structure_type`, `status`, `bid_date`, `bid_time`, `bid_site_address`, `bid_username`, `bid_password`, `scope`, `start_date`, `est_date`, `duration_start`, `duration_duration`, `duration_finish`, `created_at`, `updated_at`, `architect`, `struct_eng`, `description`, `prevailing_wage`, `wrap_up`, `performance_bond`, `op_manager`, `estimator`, `owner`) VALUES
(1, 8, 8, 3, 'Test proj', 0, 'Address', 'City', 'CO', 'zip', 'Correctional Facility', 'High Rise', 'Award', '2017-07-04', '01:01:00', 'bid site address', 'bid username', 'bid password', 'Horizontal & Vertical Form', '2017-07-10', '2017-07-12', 0, 25, 0, '2017-07-19 22:00:00', '2017-08-22 10:38:47', 2, 0, 'qwr', '[Select One]', '[Select One]', '[Select One]', 0, 0, 2),
(6, 8, 8, 3, 'Project name goes here', 0, 'Address', 'City', 'HI', 'zip', 'ATCT', 'Hybrid Garage', 'Award', '2017-08-07', '01:30:00', 'Site address', 'Username', 'pwd', 'Horizontal Form Only', '2017-08-16', '0000-00-00', 1, 2, 3, '2017-08-07 19:35:38', '2017-08-08 08:31:31', 2, 3, 'dddddd', 'No', 'GL Only', 'No', 15, 14, 2),
(7, 8, 8, 4, 'asda', 0, 'asd', '', '[Select One]', '', 'Courthouse', 'Hybrid Garage', 'Award', '2017-08-16', '01:00:00', 'sd', 'asd', '', '[Select One]', '2017-08-17', '0000-00-00', 1, 1, 1, '2017-08-08 08:49:32', '2017-08-08 09:45:09', 2, 3, '', '[Select One]', '[Select One]', '[Select One]', 0, 0, 0),
(8, 8, 8, 4, 'asd', 0, 'asdfgdsa', 'sasds', 'CO', 'asd', 'Correctional Facility', '2', 'Current', '2017-08-07', '02:00:00', 'fsd', 'ads', 'asdfsadsf', 'Horizontal & Vertical Form', '2017-08-10', '1970-01-01', 1, 1, 1, '2017-08-08 09:46:41', '2017-08-22 10:51:21', 2, 3, 'saadfsd', '[Select One]', '[Select One]', '[Select One]', 0, 0, 2),
(9, 8, 8, 3, 'asdads', 0, '', '', '[Select One]', '', '0', '[Select One]', 'Award', '2017-08-10', '02:00:00', 'asd', 'dfs', '', '[Select One]', '2017-08-09', '0000-00-00', 1, 1, 1, '2017-08-08 09:47:24', '2017-08-08 09:48:46', 0, 0, '', '[Select One]', '[Select One]', '[Select One]', 0, 0, 0),
(10, 8, 8, 3, 'asdads', 0, '', '', '[Select One]', '', '0', '[Select One]', 'Current', '2017-08-10', '02:00:00', 'asd', 'dfs', '', '[Select One]', '2017-08-09', '1970-01-01', 1, 1, 1, '2017-08-08 09:47:58', '2017-08-22 10:40:15', 0, 0, '', '[Select One]', '[Select One]', '[Select One]', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(3, 3, 'editiran region', '2017-06-22 08:04:17', '2017-06-22 08:36:17'),
(5, 3, 'klime e mn jak', '2017-06-22 08:06:03', '2017-06-22 08:06:03'),
(7, 3, 'default edit', '2017-06-22 13:54:35', '2017-06-22 13:55:10'),
(8, 3, 'askhdkas dklaskldm', '2017-06-22 13:54:38', '2017-06-22 13:54:38'),
(9, 8, 'Region 1', '2017-06-22 14:00:46', '2017-06-22 14:00:46'),
(10, 8, 'Region 2', '2017-07-10 04:52:51', '2017-07-10 04:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `parent_user_id` int(11) NOT NULL,
  `extraValue` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `company`, `phone1`, `phone2`, `address`, `city`, `state`, `zip`, `last_name`, `title`, `group_id`, `region_id`, `active`, `parent_user_id`, `extraValue`) VALUES
(3, 'Klime', 'klime.grceski@gmail.com', '$2y$10$AklbLOjVnVlCMNZWlHM.uesjQ.KqyMAbI4b2ySRTw1FtyD7AjDIsq', 'RNx4OiqExcSKAhqTyft2z6YdemuShDvTK1TEjEIz8Axdwj2q6Sj0p6Egr38J', '2017-06-18 09:26:36', NULL, 'super', 'Rubix', '075257943', '', 'JNA 83', 'Struga', 'MK', '6330', 'Grceski', '', 0, 0, 0, 0, ''),
(8, 'Klime', 'tenant_user@tenant.com', '$2a$06$gdpCP63FMihiK3DEfApaGuYpBfokWvjVOJUO0SFaIhJZcf/Xy3NwG', '9Z7jcT5eY9xWYIujyTImKfgRMILct0RmKIY0SyI77Jx8g7biuHF8DxtSYnvT', '2017-06-22 14:00:18', '2017-06-22 14:00:18', 'tenant', 'McClone', 'aasd', '', 'asdasd', 'sadas', 'GA', 'dasd', 'Grceski', '', 0, 0, 0, 0, ''),
(14, 'Estimator', 'estimator@tenant.com', '$2a$06$gdpCP63FMihiK3DEfApaGuYpBfokWvjVOJUO0SFaIhJZcf/Xy3NwG', 'fR5E4PvkMuEoFXjS1Q67BYGvdryAtkRoh3MOL0jGGAadCvuQnrya2mk0UdBg', '2017-07-24 11:29:45', '2017-08-07 18:35:07', 'Estimator', '', '', '', '', '', '', '', 'asfdsfsdf', 'Estimator', 0, 9, 1, 8, '{\"8\":\"Two\",\"5\":\"Two\",\"9\":\"klime grceski\",\"11\":\"yuhu\"}'),
(15, 'Op Name', 'assd@asd.com', '$2y$10$lN3R1N.HKuskvwGRYg3GcOJ6E7eg.ksV9VSBTVB185aTE5.kMml/q', NULL, '2017-07-24 11:57:34', '2017-08-07 18:34:47', 'OP Manager', '', '', '', '', '', '', '', 'yytrtr', 'Some Op Manager', 0, 10, 0, 8, '{\"8\":\"One\",\"5\":\"One\",\"9\":\"qwerty\",\"11\":\"yey\"}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `con_companies`
--
ALTER TABLE `con_companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `con_company_user_id_index` (`user_id`);

--
-- Indexes for table `con_persons`
--
ALTER TABLE `con_persons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `con_persons_user_id_index` (`user_id`);

--
-- Indexes for table `drw_disciplines`
--
ALTER TABLE `drw_disciplines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drw_drawings`
--
ALTER TABLE `drw_drawings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drw_folders`
--
ALTER TABLE `drw_folders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drw_uploads`
--
ALTER TABLE `drw_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eq_categories`
--
ALTER TABLE `eq_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eq_region_equipment`
--
ALTER TABLE `eq_region_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eq_sub_categories`
--
ALTER TABLE `eq_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eq_sub_categories_category_id_index` (`category_id`);

--
-- Indexes for table `eq_transfer_equipment`
--
ALTER TABLE `eq_transfer_equipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eq_transfer_equipment_id_index` (`id`);

--
-- Indexes for table `eq_transfer_requests`
--
ALTER TABLE `eq_transfer_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eq_transfer_requests_id_index` (`id`);

--
-- Indexes for table `eq_trucking_equipment`
--
ALTER TABLE `eq_trucking_equipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eq_trucking_equipment_id_index` (`id`);

--
-- Indexes for table `eq_trucking_requests`
--
ALTER TABLE `eq_trucking_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eq_trucking_requests_id_index` (`id`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fields_user_id_index` (`user_id`);

--
-- Indexes for table `fields_records`
--
ALTER TABLE `fields_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fields_records_field_id_index` (`fields_id`);

--
-- Indexes for table `fields_value`
--
ALTER TABLE `fields_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pj_bid_results`
--
ALTER TABLE `pj_bid_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pj_bid_results_id_index` (`id`),
  ADD KEY `pj_bid_results_pj_project_id_index` (`pj_project_id`);

--
-- Indexes for table `pj_photos_folders`
--
ALTER TABLE `pj_photos_folders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pj_photos_subfolders`
--
ALTER TABLE `pj_photos_subfolders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pj_photos_subfolders_folder_id_index` (`folder_id`);

--
-- Indexes for table `pj_projects`
--
ALTER TABLE `pj_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_user_id_index` (`user_id`),
  ADD KEY `projects_submited_user_id_index` (`submited_user_id`),
  ADD KEY `pj_projects_op_manager_index` (`op_manager`),
  ADD KEY `pj_projects_estimator_index` (`estimator`),
  ADD KEY `pj_projects_owner_index` (`owner`),
  ADD KEY `pj_projects_architect_index` (`architect`),
  ADD KEY `pj_projects_struct_eng_index` (`struct_eng`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regions_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_index` (`role`),
  ADD KEY `users_group_id_index` (`group_id`),
  ADD KEY `users_area_id_index` (`region_id`),
  ADD KEY `users_active_index` (`active`),
  ADD KEY `users_parent_user_id_index` (`parent_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `con_companies`
--
ALTER TABLE `con_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `con_persons`
--
ALTER TABLE `con_persons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `drw_disciplines`
--
ALTER TABLE `drw_disciplines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `drw_drawings`
--
ALTER TABLE `drw_drawings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `drw_folders`
--
ALTER TABLE `drw_folders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `drw_uploads`
--
ALTER TABLE `drw_uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `eq_categories`
--
ALTER TABLE `eq_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eq_region_equipment`
--
ALTER TABLE `eq_region_equipment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eq_sub_categories`
--
ALTER TABLE `eq_sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eq_transfer_equipment`
--
ALTER TABLE `eq_transfer_equipment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eq_transfer_requests`
--
ALTER TABLE `eq_transfer_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eq_trucking_equipment`
--
ALTER TABLE `eq_trucking_equipment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eq_trucking_requests`
--
ALTER TABLE `eq_trucking_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `fields_records`
--
ALTER TABLE `fields_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `fields_value`
--
ALTER TABLE `fields_value`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `pj_bid_results`
--
ALTER TABLE `pj_bid_results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pj_photos_folders`
--
ALTER TABLE `pj_photos_folders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pj_photos_subfolders`
--
ALTER TABLE `pj_photos_subfolders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pj_projects`
--
ALTER TABLE `pj_projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
