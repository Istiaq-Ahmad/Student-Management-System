-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 12:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseCode` varchar(11) NOT NULL,
  `courseName` varchar(100) NOT NULL,
  `Details` varchar(500) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseCode`, `courseName`, `Details`, `created_at`, `updated_at`) VALUES
('CSE110', 'Introduction to Computer Science (CSE)', 'CSE101: Introduction to Computer Science introduces the general topics and subtopics related to computer science. After studying this course, you should have some idea on the influence of Computer Science in your regular life. The main idea of the course is to make you stay up to date with different computer science-related problems and also to make you aware of the solution of this problems.', NULL, NULL),
('CSE111', 'PROGRAMMING LANGUAGE-II', 'This course would be an introduction to data structures, formal specification of syntax, elements of language theory and mathematical preliminaries. Other topics that would be covered are formal languages, structured programming concepts, survey of features of existing high level languages. Students would design and write application using an appropriate language.', NULL, NULL),
('CSE470', 'Software Engineering', 'Course Assessment Methods:  Quizzes, Project and Presentation', '2023-12-08 22:38:43', '2023-12-08 22:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT 3 COMMENT '1:admin, 2:teacher, 3:student, 4:parent',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:not deleted, 1:deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `user_type`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$XKDLYxRUgjT8AyEmFTbPMeXa7q5xlTMNFL.XdbgaMuMHnm7npPmJO', 'vQRQUq3PdHzYAv2PKNlAIQJjnfBBrLlF3OKS9rdlahAjFPTso0sko5gR1CKp', 1, 0, '2023-11-20 13:37:04', '2023-12-07 07:22:10'),
(3, 'Teacher', 'teacher@gmail.com', NULL, '$2y$12$XKDLYxRUgjT8AyEmFTbPMeXa7q5xlTMNFL.XdbgaMuMHnm7npPmJO', '8C8cWqTcvD0Yyj2oMCtJ0GwZdpFwBJNB3ZUr4JdOTNwvhP2DwzCF7CwDa5fi', 2, 0, '2023-11-20 13:37:04', '2023-11-22 13:37:04'),
(4, 'Student', 'student@gmail.com', NULL, '$2y$12$XKDLYxRUgjT8AyEmFTbPMeXa7q5xlTMNFL.XdbgaMuMHnm7npPmJO', 'BYKHvrZSFHlaiVXB71RrAq1GhGokjeqLylCUmYn0JQ6IucGQBaJL8hLAYjP0', 3, 0, '2023-11-20 13:37:04', '2023-11-22 13:37:04'),
(5, 'Parents', 'parent@gmail.com', NULL, '$2y$12$XKDLYxRUgjT8AyEmFTbPMeXa7q5xlTMNFL.XdbgaMuMHnm7npPmJO', 'UqGe2v4gmtXDa2gStjlqRMS3nMLbPloBqBpF6Bj0nR1ejfZQnBp8O7XtYdmW', 4, 0, '2023-11-20 13:37:04', '2023-11-22 13:37:04'),
(6, 'Istiaq', 'istiaq@gmail.com', NULL, '$2y$12$uKBQAHCpbZ0mcjUkftB6ceaDpG750CyhZk9L7gBkwY8FfP62YF6A.', 'rCMDF5fvMFqKasgx0eY5SQZShWKov4RdwIu1n9XAmgCOJVwkNXVZAkNmgXeC', 1, 0, '2023-12-08 10:58:40', '2023-12-08 14:15:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseCode`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
