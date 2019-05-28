-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2019 at 07:23 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tournamentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `usertype`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Chris Jim Egot', 'jimegot@yahoo.com.ph', '2019-04-08 16:00:00', 'Administrator', '$2y$10$csTMdGnSkNrwJsW/wgIuXOD9d0fTKzjVE.I9K91X5nHGdLnR4YZ3e', NULL, '2019-04-08 16:00:00', '2019-04-08 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagefile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `durations`
--

CREATE TABLE `durations` (
  `id` int(10) UNSIGNED NOT NULL,
  `in_seconds` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_minutes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `durations`
--

INSERT INTO `durations` (`id`, `in_seconds`, `in_minutes`, `created_at`, `updated_at`) VALUES
(1, '1200', '20:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `everydayduration`
--

CREATE TABLE `everydayduration` (
  `id` int(50) NOT NULL,
  `in_seconds` varchar(50) NOT NULL,
  `in_minutes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `everydayduration`
--

INSERT INTO `everydayduration` (`id`, `in_seconds`, `in_minutes`) VALUES
(101, '600', '10:00');

-- --------------------------------------------------------

--
-- Table structure for table `everydayprize`
--

CREATE TABLE `everydayprize` (
  `id` int(50) NOT NULL,
  `totalprize` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `everydayprize`
--

INSERT INTO `everydayprize` (`id`, `totalprize`) VALUES
(101, '8888');

-- --------------------------------------------------------

--
-- Table structure for table `everydayprizemoney`
--

CREATE TABLE `everydayprizemoney` (
  `id` int(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `everydayprizemoney`
--

INSERT INTO `everydayprizemoney` (`id`, `place`, `amount`) VALUES
(101, '1st', '.10'),
(103, '2nd', '.20'),
(103, '3rd', '.30');

-- --------------------------------------------------------

--
-- Table structure for table `everydaytournament`
--

CREATE TABLE `everydaytournament` (
  `id` int(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `blinds` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `everydaytournament`
--

INSERT INTO `everydaytournament` (`id`, `level`, `blinds`, `status`) VALUES
(101, 'Level 1', '10/25', 'active'),
(102, 'Level 2', '25/50', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `manpowerdocs`
--

CREATE TABLE `manpowerdocs` (
  `id` int(10) UNSIGNED NOT NULL,
  `masterfile_id` int(11) NOT NULL,
  `imagename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagefile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masterfile`
--

CREATE TABLE `masterfile` (
  `id` int(10) UNSIGNED NOT NULL,
  `lastname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `placeofbirth` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `civil_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `elem_school` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `elemgrad` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `highschool` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsgrad` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `collegegrad` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sss` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phil` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagibig` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_tel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `datehired` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagefile` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masterfile`
--

INSERT INTO `masterfile` (`id`, `lastname`, `firstname`, `middlename`, `gender`, `birthdate`, `placeofbirth`, `phone`, `email`, `location`, `religion`, `civil_status`, `elem_school`, `elemgrad`, `highschool`, `hsgrad`, `college`, `collegegrad`, `sss`, `phil`, `pagibig`, `tin`, `employee_number`, `card_number`, `company_name`, `company_address`, `company_tel`, `company_email`, `position`, `datehired`, `emp_status`, `created_at`, `updated_at`, `imagename`, `imagefile`) VALUES
(1, 'Egot', 'Chris Jim', 'Singson', 'Male', 'December 3, 1993', 'Palompon, Leyte', '09196393274', 'jimegot@yahoo.com.ph', 'Palompon, Leyte', 'Roman Catholic', 'Single', 'PSCS', '2008', 'NLC', '2012', 'PIT', '2016', '000', '000', '000', '000', '101', '101', 'ASI', 'Cebu', '000', 'ASI', 'Admin', 'Jan 21, 2019', 'Active', '2019-04-08 16:00:00', '2019-04-08 16:00:00', 'defaultimage', '');

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
(3, '2018_11_15_153127_create_manpower_table', 1),
(4, '2018_11_19_173238_add_address_to_manpower_table', 1),
(5, '2018_11_25_144522_add_gender_to_manpower_table', 1),
(6, '2018_12_02_113107_create-educationalinfo-table', 1),
(7, '2018_12_02_115407_create-governmentinfo-table', 1),
(8, '2018_12_02_115649_create-companyinfo-table', 1),
(9, '2018_12_02_160037_create_manpowers_table', 1),
(10, '2018_12_22_202802_add_birthdate_to_manpower_table', 1),
(11, '2018_12_22_203331_add_placeofbirth_to_manpower_table', 1),
(12, '2018_12_30_145444_add_imagename_to_manpower_table', 1),
(13, '2018_12_30_150128_add_imagefile_to_manpower_table', 1),
(14, '2019_01_04_131330_create_banner_table', 1),
(15, '2019_01_25_163955_create__masterfile_table', 1),
(16, '2019_02_01_155333_create_admins_table', 1),
(17, '2019_02_24_103922_create_manpowerdocs_table', 2),
(18, '2019_05_25_085121_create_durations_table', 3);

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
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(50) NOT NULL,
  `players` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `players`) VALUES
(101, 6);

-- --------------------------------------------------------

--
-- Table structure for table `prize`
--

CREATE TABLE `prize` (
  `id` int(50) NOT NULL,
  `totalchips` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prize`
--

INSERT INTO `prize` (`id`, `totalchips`) VALUES
(101, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `prizemoney`
--

CREATE TABLE `prizemoney` (
  `id` int(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prizemoney`
--

INSERT INTO `prizemoney` (`id`, `place`, `amount`) VALUES
(101, '1st', '.29'),
(102, '2nd', '.1865'),
(103, '3rd', '.1375'),
(104, '4th', '.095'),
(105, '5th', '.0775'),
(106, '6th', '.0630'),
(107, '7th', '.0525'),
(108, '8th', '.0415'),
(109, '9th', '.0315'),
(110, '10th', '.0250');

-- --------------------------------------------------------

--
-- Table structure for table `rebuys`
--

CREATE TABLE `rebuys` (
  `id` int(50) NOT NULL,
  `rebuyscost` decimal(50,0) NOT NULL,
  `rebuychipsvalue` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rebuys`
--

INSERT INTO `rebuys` (`id`, `rebuyscost`, `rebuychipsvalue`) VALUES
(101, '10', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `blinds` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`id`, `level`, `blinds`, `status`) VALUES
(101, 'Level 1', '25/50', 'active'),
(102, 'Level 2', '50/100', 'active'),
(103, 'Level 3', '100/200', 'active'),
(104, 'Level 4', '200/400', 'active'),
(105, 'Level 5', '300/600', 'active'),
(106, 'Level 6', '400/800', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usertype` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `usertype`) VALUES
(2, 'Chris Jim Egot', 'sabosidochrisjim@yahoo.com', NULL, '$2y$10$csTMdGnSkNrwJsW/wgIuXOD9d0fTKzjVE.I9K91X5nHGdLnR4YZ3e', 'p71FgbOygfrOcfmtnzPiDb7yRT0PIeSekwkvoJG9NmcpVLzZNsunllzigaC6', '2019-04-08 08:05:47', '2019-04-08 08:05:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `durations`
--
ALTER TABLE `durations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `everydayduration`
--
ALTER TABLE `everydayduration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `everydayprize`
--
ALTER TABLE `everydayprize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `everydaytournament`
--
ALTER TABLE `everydaytournament`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manpowerdocs`
--
ALTER TABLE `manpowerdocs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masterfile`
--
ALTER TABLE `masterfile`
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
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prize`
--
ALTER TABLE `prize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prizemoney`
--
ALTER TABLE `prizemoney`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rebuys`
--
ALTER TABLE `rebuys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `durations`
--
ALTER TABLE `durations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `everydayduration`
--
ALTER TABLE `everydayduration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `everydayprize`
--
ALTER TABLE `everydayprize`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `everydaytournament`
--
ALTER TABLE `everydaytournament`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `manpowerdocs`
--
ALTER TABLE `manpowerdocs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masterfile`
--
ALTER TABLE `masterfile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `prize`
--
ALTER TABLE `prize`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `prizemoney`
--
ALTER TABLE `prizemoney`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `rebuys`
--
ALTER TABLE `rebuys`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
