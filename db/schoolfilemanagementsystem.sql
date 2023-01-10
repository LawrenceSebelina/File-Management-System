-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 12:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolfilemanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitylogs`
--

CREATE TABLE `activitylogs` (
  `id` int(11) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activitylogs`
--

INSERT INTO `activitylogs` (`id`, `activity`, `user_type`, `name`, `user_id`, `teacher_id`, `student_id`, `action`, `date`) VALUES
(1, 'Teacher Settings', '', '1234 123 123', 0, 25, 0, 'Update Account Details.', '0000-00-00 00:00:00'),
(2, 'Teacher Settings', '', '123 123 123', 0, 25, 0, 'Update Account Details.', '2022-05-05 19:28:25'),
(3, 'Teacher Settings', 'Teacher', '1234 123 123', 0, 25, 0, 'Update Account Details.', '2022-05-05 19:30:10'),
(4, 'Student Settings', 'Student', 'Pedro Pedro Pedro', 0, 0, 21, 'Update Account Details.', '2022-05-05 19:32:07'),
(5, 'Admin Menu', 'Admin', '  ', 0, 0, 0, 'Update Account Details of Admin: robert c. villanueva.', '2022-05-05 19:55:12'),
(6, 'Admin Menu', 'Admin', 'john  we smith', 0, 0, 4, 'Update Account Details of Admin: new c. 123.', '2022-05-05 20:00:05'),
(7, 'Admin Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Update Account Details of Admin: new c. new.', '2022-05-05 20:12:37'),
(8, 'Admin Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Update Account Details of Admin: jm a. cruz.', '2022-05-05 20:13:03'),
(9, 'Admin Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Update Account Details of Admin: jm a. cruz.', '2022-05-05 20:14:18'),
(10, 'Admin Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Update Account Details of Admin: robert r. villanueva.', '2022-05-05 20:14:36'),
(11, 'Admin Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Update Account Details of Admin: juan a. cruz.', '2022-05-05 20:15:08'),
(12, 'Admin Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Update Account Details of Admin: test1 test11 test1.', '2022-05-05 20:37:20'),
(13, 'Admin Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Update Account Details of Admin: test1 test1 test1.', '2022-05-05 20:46:32'),
(14, 'Admin Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Update Account Details of Admin: test1 test11 test1.', '2022-05-05 20:54:13'),
(15, 'Admin Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Delete Account of Admin: test1 test11 test1.', '2022-05-06 08:37:20'),
(16, 'Admin Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Add New Admin Account: test1 test1 test1.', '2022-05-06 10:10:10'),
(17, 'Admin Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Update Account Details of Admin: test test1 test1.', '2022-05-06 10:12:52'),
(18, 'Student Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Update Account Details of Student: Pedro Pedro Pedro.', '2022-05-06 12:17:14'),
(19, 'Student Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Delete Account of Student: juan c. dela cruz.', '2022-05-06 12:22:38'),
(20, 'Student Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Add New Student Account: student13 student13 student13.', '2022-05-06 12:28:28'),
(21, 'Teacher Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Update Account Details of Teacher: 1234 123 123.', '2022-05-06 12:38:03'),
(22, 'Teacher Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Update Account Details of Teacher: teacher3 teacher3 teacher3.', '2022-05-06 12:43:57'),
(23, 'Teacher Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Delete Account of Teacher: teacher3 teacher3 teacher3.', '2022-05-06 12:44:01'),
(24, 'Teacher Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Add New Teacher Account: teacher13 teacher13 teacher13.', '2022-05-06 12:54:52'),
(25, 'Student Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Delete Material:  adsasda.', '2022-05-06 13:03:41'),
(26, 'Subject Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Update Details of Subject: STEM 31 - Pre Calculus123 - Major.', '2022-05-06 13:14:23'),
(27, 'Subject Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Delete Subject: asd-asd-Major.', '2022-05-06 13:20:27'),
(28, 'Subject Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Add New Subject: we - we - Major.', '2022-05-06 13:25:28'),
(29, 'Course Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Update Details of Course: 1231231232.', '2022-05-06 13:33:43'),
(30, 'Course Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Add New Course: 11.', '2022-05-06 13:41:05'),
(31, 'Student Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Update Details of Department: Test.', '2022-05-06 13:49:51'),
(32, 'Department Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Delete Department: we.', '2022-05-06 13:53:42'),
(33, 'Course Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Add New Course: STEM12.', '2022-05-06 13:54:35'),
(34, 'Admin Menu', 'Admin', 'john  we smith', 4, 0, 0, 'Add New Department: wewew.', '2022-05-06 14:00:05'),
(35, 'Teacher Class Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Delete Class:  1231231232-Pre Calculus123.', '2022-05-06 14:13:23'),
(36, 'Teacher Class Menu', 'Teacher', 'teacher1 teacher1 teacher1', 29, 0, 0, 'Add New Class: STEM12.', '2022-05-06 14:20:33'),
(37, 'Teacher Subject Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Delete Subject: we-we.', '2022-05-06 14:33:18'),
(38, 'Teacher Subject Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Add Subject: 12.', '2022-05-06 14:42:27'),
(39, 'Teacher Class Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Add New Class: ICT-3.', '2022-05-06 14:45:37'),
(40, 'Teacher Subject Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Add Subject: Ethics.', '2022-05-06 14:50:45'),
(41, 'Teacher Subject Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Delete Subject: STEM 31 - Pre Calculus123.', '2022-05-06 14:51:26'),
(42, 'Teacher Subject Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Add Subject: ITEC101 - Computer Programming.', '2022-05-06 14:53:52'),
(43, 'Teacher Class Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Add New Class: 1231231232 - Computer Prog 1.', '2022-05-06 14:55:35'),
(44, 'Teacher Class Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Delete Class:  1231231232 - Computer Prog 1.', '2022-05-06 14:55:49'),
(45, 'Teacher Class Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Add New Class: 1231231232 - Computer Prog 1.', '2022-05-06 15:26:29'),
(46, 'Teacher Student Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Add New Student: Pedro Pedro Pedro.', '2022-05-06 15:33:48'),
(47, 'Teacher Class Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Add New Class: 1231231232 - Computer Programming.', '2022-05-06 15:38:12'),
(48, 'Teacher Class Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Delete Class:  1231231232 - Computer Programming.', '2022-05-06 15:40:20'),
(49, 'Teacher Subject Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Add Subject: STEM 31 - Pre Calculus123.', '2022-05-06 15:41:57'),
(50, 'Teacher Subject Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Delete Subject: STEM 131 - Pre Calculus123.', '2022-05-06 15:44:35'),
(51, 'Teacher Class Info Menu', 'Teacher', '', 0, 0, 0, 'Delete Student:  Pedro Pedro Pedro.', '2022-05-06 15:55:14'),
(52, 'Teacher Student Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Add New Student: Pedro Pedro Pedro.', '2022-05-06 15:55:27'),
(53, 'Teacher Class Info Student Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Delete Student:  student13 student13 student13.', '2022-05-06 15:56:42'),
(54, 'Teacher Class Info Student Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Add New Student: student13 student13 student13.', '2022-05-06 15:56:56'),
(55, 'Teacher Class Info File Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Add New File: Screenshot.', '2022-05-06 16:05:23'),
(56, 'Teacher Class Info File Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Add New File: test.', '2022-05-06 16:12:00'),
(57, 'Teacher Class Info File Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Delete File:  test.', '2022-05-06 16:12:04'),
(58, 'Teacher Student Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Add New Student: student1 student1 student1.', '2022-05-06 16:35:44'),
(59, 'Teacher Student Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Delete Student: student1 student1 student1.', '2022-05-06 16:43:08'),
(60, 'Teacher Student Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Add New Student: student2 student2 student2.', '2022-05-06 16:43:22'),
(61, 'Teacher Student Menu', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Delete Student: student2 student2 student2.', '2022-05-06 16:43:25'),
(62, 'Teacher Settings', 'Teacher', 'teacher1 teacher teacher1', 0, 29, 0, 'Update Account Details.', '2022-05-06 17:03:54'),
(63, 'Teacher Settings', 'Teacher', 'teacher1 teacher1 teacher1', 0, 29, 0, 'Update Own Account Details.', '2022-05-06 17:05:01'),
(64, 'Student Settings', 'Student', 'student1 student12 student1', 0, 0, 23, 'Update Own Account Details.', '2022-05-06 17:32:39'),
(65, 'Admin Settings', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Own Account Details.', '2022-05-06 18:33:02'),
(66, 'Student Settings', 'Student', 'student1 student12 student1', 0, 0, 23, 'Update Own Account Details.', '2022-05-06 19:08:36'),
(67, 'Student Settings', 'Student', 'student1 student12 student1', 0, 0, 23, 'Update Own Account Details.', '2022-05-06 19:10:42'),
(68, 'Student Settings', 'Student', 'student1 student12 student1', 0, 0, 23, 'Update Own Account Details.', '2022-05-06 19:47:16'),
(69, 'Student Settings', 'Student', 'student1 student12 student1', 0, 0, 23, 'Update Own Account Details.', '2022-05-06 19:48:12'),
(70, 'Student Settings', 'Student', 'student1 student12 student1', 0, 0, 23, 'Update Own Account Details.', '2022-05-06 19:48:26'),
(71, 'Student Settings', 'Student', 'student1 student12 student1', 0, 0, 23, 'Update Own Account Details.', '2022-05-06 19:48:40'),
(72, 'Student Settings', 'Student', 'student1 student12 student1', 0, 0, 23, 'Update Own Account Details.', '2022-05-06 19:48:47'),
(73, 'Student Settings', 'Student', 'student1 student12 student1', 0, 0, 23, 'Update Own Account Details.', '2022-05-06 19:49:18'),
(74, 'Student Settings', 'Student', 'student1 student12 student1', 0, 0, 23, 'Update Own Account Details.', '2022-05-06 19:49:36'),
(75, 'Student Settings', 'Student', 'student1 student12 student1', 0, 0, 23, 'Update Own Account Details.', '2022-05-06 19:51:17'),
(76, 'Student Settings', 'Student', 'student1 student12 student1', 0, 0, 23, 'Update Own Account Details.', '2022-05-06 19:51:18'),
(77, 'Admin Settings', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Own Account Details.', '2022-05-06 19:53:23'),
(78, 'Admin Settings', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Own Account Details.', '2022-05-06 19:53:38'),
(79, 'Admin Settings', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Own Account Details.', '2022-05-06 20:07:39'),
(80, 'Admin Settings', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Own Account Details.', '2022-05-06 20:07:52'),
(81, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student12 student1.', '2022-05-06 20:08:10'),
(82, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student12 student1.', '2022-05-06 20:13:59'),
(83, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student12 student1.', '2022-05-06 20:14:17'),
(84, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student12 student1.', '2022-05-06 20:15:33'),
(85, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student12 student1.', '2022-05-06 20:16:30'),
(86, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student12 student1.', '2022-05-06 20:18:00'),
(87, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student12 student1.', '2022-05-06 20:18:37'),
(88, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student12 student1.', '2022-05-06 20:20:24'),
(89, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student12 student1.', '2022-05-06 20:20:29'),
(90, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student12 student1.', '2022-05-06 20:20:36'),
(91, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student12 student1.', '2022-05-06 20:20:40'),
(92, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student12 student1.', '2022-05-06 20:24:01'),
(93, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student12 student1.', '2022-05-06 20:27:08'),
(94, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student12 student1.', '2022-05-06 20:27:13'),
(95, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student1 student1.', '2022-05-06 20:31:51'),
(96, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student1 student1.', '2022-05-06 20:32:01'),
(97, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student1 student1.', '2022-05-06 20:33:38'),
(98, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Student: student1 student1 student1.', '2022-05-06 20:33:42'),
(99, 'Teacher Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Teacher: teacher1 teacher1 teacher1.', '2022-05-06 20:37:17'),
(100, 'Teacher Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Teacher: teacher1 teacher1 teacher1.', '2022-05-06 20:37:24'),
(101, 'Teacher Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Teacher: teacher1 teacher1 teacher1.', '2022-05-06 20:37:27'),
(102, 'Teacher Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Teacher: teacher1 teacher1 teacher1.', '2022-05-06 20:37:31'),
(103, 'Teacher Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Teacher: teacher1 teacher1 teacher1.', '2022-05-06 20:37:37'),
(104, 'Teacher Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Teacher: teacher2 teacher2 teacher2.', '2022-05-06 20:37:43'),
(105, 'Teacher Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Teacher: 123 123 123.', '2022-05-06 20:37:52'),
(106, 'Teacher Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Teacher: 1231 123 123.', '2022-05-06 20:37:59'),
(107, 'Teacher Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Teacher: teacher1 teacher1 teacher1.', '2022-05-06 20:38:21'),
(108, 'Teacher Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Teacher: teacher1 teacher1 teacher1.', '2022-05-06 20:38:26'),
(109, 'Admin Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Admin: robert r. villanueva.', '2022-05-06 20:41:27'),
(110, 'Admin Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Admin: robert r. villanueva.', '2022-05-06 20:41:31'),
(111, 'Admin Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Admin: robert r. villanueva.', '2022-05-06 20:41:35'),
(112, 'Admin Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Admin: robert r. villanueva.', '2022-05-06 20:42:15'),
(113, 'Admin Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Admin: robert r. villanueva.', '2022-05-06 20:42:18'),
(114, 'Admin Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Admin: robert r. villanueva.', '2022-05-06 20:42:28'),
(115, 'Admin Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Admin: robert r. villanueva.', '2022-05-06 20:42:31'),
(116, 'Admin Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Admin: robert r. villanueva.', '2022-05-06 20:42:33'),
(117, 'Admin Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Account Details of Admin: robert r. villanueva.', '2022-05-06 20:42:36'),
(118, 'Student Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Add New Student Account: Juan A. Dela Cruz.', '2022-05-07 15:06:45'),
(119, 'Department Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Department: wewew.', '2022-05-07 15:25:21'),
(120, 'Department Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Department: TVL/ICT.', '2022-05-07 15:25:31'),
(121, 'Department Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Department: School of Arts And Sciences.', '2022-05-07 15:25:34'),
(122, 'Department Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Department: Test.', '2022-05-07 15:25:36'),
(123, 'Admin Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Add New Department: DIIT.', '2022-05-07 15:28:36'),
(124, 'Admin Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Add New Department: DM.', '2022-05-07 15:28:59'),
(125, 'Admin Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Add New Department: DTE.', '2022-05-07 15:34:34'),
(126, 'Admin Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Add New Department: DAS.', '2022-05-07 15:36:16'),
(127, 'Department Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Details of Department: DM.', '2022-05-07 15:41:32'),
(128, 'Department Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Details of Department: DTE.', '2022-05-07 15:43:07'),
(129, 'Department Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Details of Department: DTE.', '2022-05-07 15:43:37'),
(130, 'Course Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Course: 1231231232.', '2022-05-07 15:50:40'),
(131, 'Course Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Course: GAS2.', '2022-05-07 15:50:43'),
(132, 'Course Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Course: GAS.', '2022-05-07 15:50:45'),
(133, 'Course Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Course: ICT-3.', '2022-05-07 15:50:48'),
(134, 'Course Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Course: 123123123213.', '2022-05-07 15:50:51'),
(135, 'Course Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Course: 11.', '2022-05-07 15:50:54'),
(136, 'Course Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Course: STEM12.', '2022-05-07 15:50:57'),
(137, 'Subject Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Subject: we - we - Major.', '2022-05-07 15:51:28'),
(138, 'Subject Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Subject: STEM 131 - Pre Calculus123 - Major.', '2022-05-07 15:51:31'),
(139, 'Subject Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Subject: GNED-11 - Ethics - Minor.', '2022-05-07 15:51:34'),
(140, 'Subject Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Subject: ITEC101 - Computer Programming - Major.', '2022-05-07 15:51:37'),
(141, 'Subject Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Subject: ICT 078 - Computer Prog 1 - Major.', '2022-05-07 15:51:41'),
(142, 'Subject Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Delete Subject: STEM 31 - Pre Calculus123 - Major.', '2022-05-07 15:51:44'),
(143, 'Subject Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Add New Subject: GNED 02 - Ethics - Minor.', '2022-05-07 15:57:19'),
(144, 'Subject Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Add New Subject: GNED 05 - Purposive Communication - Minor.', '2022-05-07 15:57:36'),
(145, 'Subject Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Add New Subject: GNED 11 - Kontekstwalisadong Komunikasyon sa Filipino - Minor.', '2022-05-07 15:58:16'),
(146, 'Subject Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Add New Subject: COSC 50 - Discrete Structure - Major.', '2022-05-07 15:58:30'),
(147, 'Subject Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Add New Subject: DCIT 21 - Introduction to Computing - Major.', '2022-05-07 15:59:09'),
(148, 'Subject Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Add New Subject: CIT 22 - Computer Programming 1 - Major.', '2022-05-07 15:59:21'),
(149, 'Subject Menu', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Details of Subject: DCIT 22 - Computer Programming 1 - Major.', '2022-05-07 15:59:27'),
(150, 'Admin Settings', 'Admin', 'john  c. smith', 4, 0, 0, 'Update Own Account Details.', '2022-05-07 15:59:46'),
(151, 'Admin Settings', 'Admin', 'John C. Smith', 4, 0, 0, 'Update Own Account Details.', '2022-05-07 16:00:01'),
(152, 'Subject Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Subject: FITT 1 - Movement Enhancement - Minor.', '2022-05-07 16:00:28'),
(153, 'Subject Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Subject: NSTP 1 - National Service Training Program 1 - Minor.', '2022-05-07 16:00:41'),
(154, 'Subject Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Subject: CvSU 101 - Institutional Orientation - Minor.', '2022-05-07 16:00:55'),
(155, 'Subject Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Subject: GNED 01 - Art Appreciation - Minor.', '2022-05-07 16:01:17'),
(156, 'Subject Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Subject: GNED 06 - Science, Technology, and Society - Minor.', '2022-05-07 16:01:41'),
(157, 'Subject Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Subject: GNED 14	 - Panitikang Panlipunan - Minor.', '2022-05-07 16:01:56'),
(158, 'Subject Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Subject: GNED 03	 - Mathematics in the Modern World	 - Minor.', '2022-05-07 16:02:07'),
(159, 'Subject Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Subject: DCIT 23 - Computer Programming 2	 - Major.', '2022-05-07 16:02:26'),
(160, 'Subject Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Subject: ITEC 50	 - Web System and Technologies 1	 - Major.', '2022-05-07 16:02:35'),
(161, 'Subject Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Subject: FITT 2	 - Fitness Exercise - Minor.', '2022-05-07 16:02:50'),
(162, 'Subject Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Subject: NSTP 2	 - National Service Training Program 2	 - Major.', '2022-05-07 16:03:03'),
(163, 'Subject Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Update Details of Subject: NSTP 2	 - National Service Training Program 2	 - Minor.', '2022-05-07 16:03:08'),
(164, 'Course Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Course: BSIT-1C.', '2022-05-07 16:06:04'),
(165, 'Course Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Course: BSBM-1A.', '2022-05-07 16:06:35'),
(166, 'Course Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Course: BSBM-3C.', '2022-05-07 16:13:47'),
(167, 'Course Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Course: BSHM-1A.', '2022-05-07 16:14:40'),
(168, 'Course Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Update Details of Course: BSBM-3C.', '2022-05-07 16:15:49'),
(169, 'Course Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Update Details of Course: BSBM-1A.', '2022-05-07 16:15:54'),
(170, 'Course Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Update Details of Course: BSIT-1C.', '2022-05-07 16:15:57'),
(171, 'Course Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Course: BSE.', '2022-05-07 16:16:21'),
(172, 'Course Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Update Details of Course: BSE-1A.', '2022-05-07 16:16:38'),
(173, 'Course Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Course: BSE-1B.', '2022-05-07 16:19:11'),
(174, 'Course Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Update Details of Course: BSE-1B.', '2022-05-07 16:19:17'),
(175, 'Course Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Update Details of Course: BSE-1B.', '2022-05-07 16:19:22'),
(176, 'Course Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Course: BSIT-4C.', '2022-05-07 16:19:37'),
(177, 'Admin Settings', 'Admin', 'John C. Smith', 4, 0, 0, 'Update Own Account Details.', '2022-05-07 16:23:32'),
(178, 'Admin Settings', 'Admin', 'John C. Smith', 4, 0, 0, 'Update Own Account Details.', '2022-05-07 16:23:41'),
(179, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Delete Account of Student: student13 student13 student13.', '2022-05-07 16:24:00'),
(180, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Delete Account of Student: Pedro Pedro Pedro.', '2022-05-07 16:24:03'),
(181, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Delete Account of Student: student1 student1 student1.', '2022-05-07 16:24:05'),
(182, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Delete Account of Student: student2 student2 student2.', '2022-05-07 16:24:07'),
(183, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Delete Account of Student: student3 student3 student3.', '2022-05-07 16:24:10'),
(184, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Delete Account of Student: student4 student4 student4.', '2022-05-07 16:24:12'),
(185, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Delete Account of Student: student5 student5 student5.', '2022-05-07 16:24:15'),
(186, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Delete Account of Student: student6 student6 student6.', '2022-05-07 16:24:17'),
(187, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Delete Account of Student: student7 student7 student7.', '2022-05-07 16:24:20'),
(188, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Delete Account of Student: student8 student8 student8.', '2022-05-07 16:24:22'),
(189, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Student Account:  Mary Anne Yashmin G. Lozana.', '2022-05-07 16:26:08'),
(190, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Student Account: Algin Mae R. Nedia.', '2022-05-07 16:26:53'),
(191, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Student Account: Jeremy A. De Leon.', '2022-05-07 16:27:35'),
(192, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Student Account: Mark Ivann C. Ceferidad.', '2022-05-07 16:28:18'),
(193, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Student Account: Paula M. Farcon.', '2022-05-07 16:28:51'),
(194, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Student Account: Jim Dhaicer G. Restrivera.', '2022-05-07 16:29:30'),
(195, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Student Account: Amiel Zyrus M. Cano.', '2022-05-07 16:30:07'),
(196, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Student Account: Kenneth John V. Saracho.', '2022-05-07 16:30:58'),
(197, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Student Account: Mark Anthony D. Lara.', '2022-05-07 16:31:47'),
(198, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Student Account: Pamela N/A Lopez.', '2022-05-07 16:32:20'),
(199, 'Student Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Student Account: Eldrine John  T. Rosales.', '2022-05-07 16:33:10'),
(200, 'Admin Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Delete Account of Admin: test test1 test1.', '2022-05-07 16:33:30'),
(201, 'Admin Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Delete Account of Admin: new c. new.', '2022-05-07 16:33:33'),
(202, 'Admin Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Delete Account of Admin: juan a. cruz.', '2022-05-07 16:33:39'),
(203, 'Admin Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Delete Account of Admin: robert r. villanueva.', '2022-05-07 16:33:42'),
(204, 'Admin Menu', 'Admin', 'John C. Smith', 4, 0, 0, 'Add New Admin Account: John Mark A. Ofrancia.', '2022-05-07 16:34:09'),
(205, 'Admin Settings', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Update Own Account Details.', '2022-05-07 16:34:29'),
(206, 'Admin Settings', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Update Own Account Details.', '2022-05-07 16:34:31'),
(207, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Account of Teacher: teacher6 teacher6 teacher6.', '2022-05-07 16:38:49'),
(208, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Account of Teacher: teacher13 teacher13 teacher13.', '2022-05-07 16:38:52'),
(209, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Account of Teacher: teacher5 teacher5 teacher5.', '2022-05-07 16:39:19'),
(210, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Account of Teacher: teacher3 teacher3 teacher3.', '2022-05-07 16:39:22'),
(211, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Account of Teacher: 123 123 123.', '2022-05-07 16:39:25'),
(212, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Account of Teacher: 1234 123 123.', '2022-05-07 16:39:28'),
(213, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Account of Teacher: 1231 123 123.', '2022-05-07 16:39:31'),
(214, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Account of Teacher: eye eye eye.', '2022-05-07 16:39:33'),
(215, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Account of Teacher: 123 123 123.', '2022-05-07 16:39:36'),
(216, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Account of Teacher: teacher1 teacher1 teacher1.', '2022-05-07 16:39:38'),
(217, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Account of Teacher: teacher2 teacher2 teacher2.', '2022-05-07 16:39:48'),
(218, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Add New Teacher Account: Pedro A, Santos.', '2022-05-07 16:40:33'),
(219, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Update Account Details of Teacher: Pedro A, Santos.', '2022-05-07 16:41:43'),
(220, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Add New Teacher Account: Regene G.   Hernandez.', '2022-05-07 16:44:59'),
(221, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Add New Teacher Account: Ma. Victoria D. Fernandez.', '2022-05-07 16:45:38'),
(222, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Add New Teacher Account: Janine B. Bacosmo.', '2022-05-07 16:45:59'),
(223, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Add New Teacher Account: Richard L. Hernandez.', '2022-05-07 16:46:23'),
(224, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Add New Teacher Account: Carlo Emil B. Manabo.', '2022-05-07 16:47:27'),
(225, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Add New Teacher Account: Joan L. Fortuna.', '2022-05-07 16:47:54'),
(226, 'Admin Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Add New Admin Account: John A. Smith.', '2022-05-07 16:56:21'),
(227, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Add New Teacher Account: Maria Andrea C. Francia.', '2022-05-07 16:58:07'),
(228, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Add New Teacher Account: Still John F. Reyes.', '2022-05-07 17:04:05'),
(229, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Add New Teacher Account: Jocelyn B. Siochi.', '2022-05-07 17:11:11'),
(230, 'Teacher Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Add New Teacher Account: Omega R. Gresola.', '2022-05-07 17:11:41'),
(231, 'Student Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Material:  Green.', '2022-05-07 17:14:03'),
(232, 'Student Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Material:  Blue.', '2022-05-07 17:14:07'),
(233, 'Student Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Material:  Yellow.', '2022-05-07 17:14:11'),
(234, 'Student Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Material:  .', '2022-05-07 17:14:14'),
(235, 'Student Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Material:  asd.', '2022-05-07 17:14:18'),
(236, 'Student Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Material:  asd.', '2022-05-07 17:14:21'),
(237, 'Student Menu', 'Admin', 'Lawrence Mark C. Sebelina', 4, 0, 0, 'Delete Material:  Screenshot.', '2022-05-07 17:14:27'),
(238, 'Teacher Subject Menu', 'Teacher', 'Pedro A, Santos', 0, 36, 0, 'Add Subject: GNED 02 - Ethics.', '2022-05-07 17:15:59'),
(239, 'Teacher Subject Menu', 'Teacher', 'Pedro A, Santos', 0, 36, 0, 'Add Subject: GNED 05 - Purposive Communication.', '2022-05-07 17:16:04'),
(240, 'Teacher Subject Menu', 'Teacher', 'Pedro A, Santos', 0, 36, 0, 'Add Subject: GNED 11 - Kontekstwalisadong Komunikasyon sa Filipino.', '2022-05-07 17:16:11'),
(241, 'Teacher Subject Menu', 'Teacher', 'Pedro A, Santos', 0, 36, 0, 'Add Subject: COSC 50 - Discrete Structure.', '2022-05-07 17:16:17'),
(242, 'Teacher Subject Menu', 'Teacher', 'Pedro A, Santos', 0, 36, 0, 'Add Subject: DCIT 21 - Introduction to Computing.', '2022-05-07 17:16:23'),
(243, 'Teacher Subject Menu', 'Teacher', 'Pedro A, Santos', 0, 36, 0, 'Add Subject: FITT 1 - Movement Enhancement.', '2022-05-07 17:16:29'),
(244, 'Teacher Subject Menu', 'Teacher', 'Pedro A, Santos', 0, 36, 0, 'Add Subject: NSTP 1 - National Service Training Program 1.', '2022-05-07 17:16:33'),
(245, 'Teacher Subject Menu', 'Teacher', 'Pedro A, Santos', 0, 36, 0, 'Add Subject: CvSU 101 - Institutional Orientation.', '2022-05-07 17:16:39'),
(246, 'Teacher Class Menu', 'Teacher', 'Pedro A, Santos', 0, 36, 0, 'Add New Class: BSIT-4C - Ethics.', '2022-05-07 17:16:48'),
(247, 'Teacher Class Menu', 'Teacher', 'Pedro A, Santos', 0, 36, 0, 'Add New Class: BSIT-4C - Purposive Communication.', '2022-05-07 17:16:58'),
(248, 'Teacher Settings', 'Teacher', 'Pedro A. Santos', 0, 36, 0, 'Update Own Account Details.', '2022-05-07 17:21:47'),
(249, 'Teacher Class Menu', 'Teacher', 'Pedro A. Santos', 0, 36, 0, 'Add New Class: BSBM-3C - Discrete Structure.', '2022-05-07 17:24:32'),
(250, 'Teacher Student Menu', 'Teacher', 'Pedro A. Santos', 0, 36, 0, 'Add New Student: Mark Anthony D. Lara.', '2022-05-07 17:27:48'),
(251, 'Teacher Student Menu', 'Teacher', 'Pedro A. Santos', 0, 36, 0, 'Add New Student: Kenneth John V. Saracho.', '2022-05-07 17:28:18'),
(252, 'Teacher Student Menu', 'Teacher', 'Pedro A. Santos', 0, 36, 0, 'Add New Student: Amiel Zyrus M. Cano.', '2022-05-07 17:28:21'),
(253, 'Teacher Class Info Student Menu', 'Teacher', 'Pedro A. Santos', 0, 36, 0, 'Add New Student: Mark Anthony D. Lara.', '2022-05-07 17:28:28'),
(254, 'Teacher Class Info Student Menu', 'Teacher', 'Pedro A. Santos', 0, 36, 0, 'Add New Student: Kenneth John V. Saracho.', '2022-05-07 17:28:32'),
(255, 'Teacher Class Info Student Menu', 'Teacher', 'Pedro A. Santos', 0, 36, 0, 'Add New Student: Amiel Zyrus M. Cano.', '2022-05-07 17:30:23'),
(256, 'Teacher Class Info File Menu', 'Teacher', 'Pedro Pedro Pedro', 0, 36, 0, 'Add New File: Sample PDF.', '2022-05-07 17:39:10'),
(257, 'Teacher Class Info File Menu', 'Teacher', 'Pedro Pedro Pedro', 0, 36, 0, 'Add New File: Sample Excel.', '2022-05-07 17:39:37'),
(258, 'Teacher Class Info File Menu', 'Teacher', 'Pedro Pedro Pedro', 0, 36, 0, 'Add New File: Sample Power Point.', '2022-05-07 17:40:22'),
(259, 'Teacher Class Info File Menu', 'Teacher', 'Pedro Pedro Pedro', 0, 36, 0, 'Add New File: Sample Document.', '2022-05-07 17:40:36'),
(260, 'Teacher Student Menu', 'Teacher', 'Pedro A. Santos', 0, 36, 0, 'Add New Student: Juan A. Dela Cruz.', '2022-05-07 17:40:53'),
(261, 'Teacher Class Info Student Menu', 'Teacher', 'Pedro A. Santos', 0, 36, 0, 'Add New Student: Juan A. Dela Cruz.', '2022-05-07 17:41:17'),
(262, 'Teacher Class Menu', 'Teacher', 'Pedro A. Santos', 0, 36, 0, 'Delete Class:  BSBM-3C - Discrete Structure.', '2022-05-07 17:43:53'),
(263, 'Teacher Student Menu', 'Teacher', 'Pedro A. Santos', 0, 36, 0, 'Add New Student: Eldrine John  T. Rosales.', '2022-05-07 17:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `course_id`, `subject_id`, `teacher_id`, `student_id`, `date`) VALUES
(11, 'ICT-3', 'Computer Prog 1', '24', 0, '2022-05-05 18:48:55'),
(10, 'GAS', 'Computer Prog 1', '24', 0, '2022-05-05 18:48:55'),
(12, 'ICT-3', 'Pre Calculus123', '25', 0, '2022-05-05 18:48:55'),
(13, '123123123213', 'Computer Prog 1', '25', 0, '2022-05-05 18:48:55'),
(14, '123123123213', 'Pre Calculus123', '25', 0, '2022-05-05 18:48:55'),
(17, 'STEM12', 'Computer Prog 1', '29', 0, '2022-05-06 14:20:33'),
(16, 'ICT-3', 'Computer Programming', '29', 0, '2022-05-06 14:13:17'),
(18, 'ICT-3', 'Pre Calculus123', '29', 0, '2022-05-06 14:45:37'),
(20, '1231231232', 'Computer Prog 1', '29', 0, '2022-05-06 15:26:29'),
(22, 'BSIT-4C', 'Ethics', '36', 0, '2022-05-07 17:16:48'),
(23, 'BSIT-4C', 'Purposive Communication', '36', 0, '2022-05-07 17:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `cys` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `cys`, `department`, `major`, `date`) VALUES
(20, 'BSHM-1A', 'Department of Management', 'Hotel Management', '2022-05-07 16:14:40'),
(19, 'BSBM-3C', 'Department of Industial and Information Technology', 'Human Resource', '2022-05-07 16:13:47'),
(18, 'BSBM-1A', 'Department of Management', 'Marketing Management', '2022-05-07 16:06:35'),
(17, 'BSIT-1C', 'Department of Industial and Information Technology', 'Information Technology', '2022-05-07 16:06:04'),
(21, 'BSE-1A', 'Department of Teacher Education', 'Science', '2022-05-07 16:16:21'),
(22, 'BSE-1B', 'Department of Teacher Education', 'Math', '2022-05-07 16:19:11'),
(23, 'BSIT-4C', 'Department of Industial and Information Technology', 'Information Technology', '2022-05-07 16:19:37');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(11) NOT NULL,
  `incharge` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `incharge`, `title`, `department`, `date`) VALUES
(11, 'Ms. Regene Hernandez', 'Department of Industial and Information Technology', 'DIIT', '2022-05-07 15:28:36'),
(12, 'Ms. Maria Andrea Francia', 'Department of Management', 'DM', '2022-05-07 15:28:59'),
(13, 'Ms. Jocelyn Siochi', 'Department of Teacher Education', 'DTE', '2022-05-07 15:34:34'),
(14, 'Ms.', 'Department of Arts and Sciences', 'DAS', '2022-05-07 15:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` int(11) NOT NULL,
  `floc` varchar(500) NOT NULL,
  `fdatein` datetime NOT NULL DEFAULT current_timestamp(),
  `fdesc` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `floc`, `fdatein`, `fdesc`, `teacher_id`, `class_id`, `fname`) VALUES
(75, 'uploads/9377_File_samplepdf.pdf', '2022-05-07 17:39:10', 'Sample PDF', 36, 23, 'Sample PDF'),
(76, 'uploads/2729_File_samplexsl.xlsx', '2022-05-07 17:39:37', 'Sample Excel', 36, 23, 'Sample Excel'),
(77, 'uploads/5772_File_sampleppt.pptx', '2022-05-07 17:40:22', 'Sample Power Point', 36, 23, 'Sample Power Point'),
(78, 'uploads/2526_File_sampledocs.docx', '2022-05-07 17:40:36', 'Sample Document', 36, 23, 'Sample Document');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `cys` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `firstname`, `lastname`, `middle_name`, `cys`, `subject_id`, `teacher_id`, `username`, `password`, `location`, `date`) VALUES
(42, 'Mark Anthony', 'Lara', 'D.', '', '', 0, 'anthony', '204036a1ef6e7360e536300ea78c6aeb4a9333dd', 'uploads/student-default-img.png', '2022-05-07 16:31:47'),
(41, 'Kenneth John', 'Saracho', 'V.', '', '', 0, 'kenneth', '204036a1ef6e7360e536300ea78c6aeb4a9333dd', 'uploads/student-default-img.png', '2022-05-07 16:30:58'),
(40, 'Amiel Zyrus', 'Cano', 'M.', '', '', 0, 'amiel', '204036a1ef6e7360e536300ea78c6aeb4a9333dd', 'uploads/student-default-img.png', '2022-05-07 16:30:07'),
(39, 'Jim Dhaicer', 'Restrivera', 'G.', '', '', 0, 'jim', '204036a1ef6e7360e536300ea78c6aeb4a9333dd', 'uploads/student-default-img.png', '2022-05-07 16:29:30'),
(38, 'Paula', 'Farcon', 'M.', '', '', 0, 'paula', '204036a1ef6e7360e536300ea78c6aeb4a9333dd', 'uploads/student-default-img.png', '2022-05-07 16:28:51'),
(37, 'Mark Ivann', 'Ceferidad', 'C.', '', '', 0, 'ivan', '204036a1ef6e7360e536300ea78c6aeb4a9333dd', 'uploads/student-default-img.png', '2022-05-07 16:28:18'),
(36, 'Jeremy', 'De Leon', 'A.', '', '', 0, 'jem', '204036a1ef6e7360e536300ea78c6aeb4a9333dd', 'uploads/student-default-img.png', '2022-05-07 16:27:35'),
(35, 'Algin Mae', 'Nedia', 'R.', '', '', 0, 'algin', '204036a1ef6e7360e536300ea78c6aeb4a9333dd', 'uploads/student-default-img.png', '2022-05-07 16:26:53'),
(34, ' Mary Anne Yashmin', 'Lozana', 'G.', '', '', 0, 'yash', '204036a1ef6e7360e536300ea78c6aeb4a9333dd', 'uploads/student-default-img.png', '2022-05-07 16:26:08'),
(33, 'Juan', 'Dela Cruz', 'A.', '', '', 0, 'student', '204036a1ef6e7360e536300ea78c6aeb4a9333dd', 'uploads/student-default-img.png', '2022-05-07 15:06:45'),
(43, 'Pamela', 'Lopez', 'N/A', '', '', 0, 'pamela', '204036a1ef6e7360e536300ea78c6aeb4a9333dd', 'uploads/student-default-img.png', '2022-05-07 16:32:20'),
(44, 'Eldrine John', 'Rosales', ' T.', '', '', 0, 'eldrine', '204036a1ef6e7360e536300ea78c6aeb4a9333dd', 'uploads/student-default-img.png', '2022-05-07 16:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_title`, `category`, `date`) VALUES
(17, 'GNED 02', 'Ethics', 'Minor', '2022-05-07 15:57:19'),
(18, 'GNED 05', 'Purposive Communication', 'Minor', '2022-05-07 15:57:36'),
(19, 'GNED 11', 'Kontekstwalisadong Komunikasyon sa Filipino', 'Minor', '2022-05-07 15:58:16'),
(20, 'COSC 50', 'Discrete Structure', 'Major', '2022-05-07 15:58:30'),
(21, 'DCIT 21', 'Introduction to Computing', 'Major', '2022-05-07 15:59:09'),
(22, 'DCIT 22', 'Computer Programming 1', 'Major', '2022-05-07 15:59:21'),
(23, 'FITT 1', 'Movement Enhancement', 'Minor', '2022-05-07 16:00:28'),
(24, 'NSTP 1', 'National Service Training Program 1', 'Minor', '2022-05-07 16:00:41'),
(25, 'CvSU 101', 'Institutional Orientation', 'Minor', '2022-05-07 16:00:55'),
(26, 'GNED 01', 'Art Appreciation', 'Minor', '2022-05-07 16:01:17'),
(27, 'GNED 06', 'Science, Technology, and Society', 'Minor', '2022-05-07 16:01:41'),
(28, 'GNED 14	', 'Panitikang Panlipunan', 'Minor', '2022-05-07 16:01:56'),
(29, 'GNED 03	', 'Mathematics in the Modern World	', 'Minor', '2022-05-07 16:02:07'),
(30, 'DCIT 23', 'Computer Programming 2	', 'Major', '2022-05-07 16:02:26'),
(31, 'ITEC 50	', 'Web System and Technologies 1	', 'Major', '2022-05-07 16:02:35'),
(32, 'FITT 2	', 'Fitness Exercise', 'Minor', '2022-05-07 16:02:50'),
(33, 'NSTP 2	', 'National Service Training Program 2	', 'Minor', '2022-05-07 16:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `sws`
--

CREATE TABLE `sws` (
  `sws_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `cys` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sws`
--

INSERT INTO `sws` (`sws_id`, `student_id`, `teacher_id`, `cys`, `subject_id`, `class_id`, `date`) VALUES
(74, 22, 25, 'ICT-3', 'Pre Calculus123', 12, '2022-05-05 18:51:33'),
(73, 21, 24, 'ICT-3', 'Computer Prog 1', 11, '2022-05-05 18:51:33'),
(72, 22, 24, 'ICT-3', 'Computer Prog 1', 11, '2022-05-05 18:51:33'),
(78, 32, 29, 'STEM12', 'Computer Prog 1', 17, '2022-05-06 15:56:56'),
(77, 21, 29, 'STEM12', 'Computer Prog 1', 17, '2022-05-06 15:55:27'),
(79, 42, 36, 'BSIT-4C', 'Purposive Communication', 23, '2022-05-07 17:28:28'),
(80, 41, 36, 'BSIT-4C', 'Purposive Communication', 23, '2022-05-07 17:28:32'),
(81, 40, 36, 'BSIT-4C', 'Purposive Communication', 23, '2022-05-07 17:30:23'),
(82, 33, 36, 'BSIT-4C', 'Purposive Communication', 23, '2022-05-07 17:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `sy`
--

CREATE TABLE `sy` (
  `sy_id` int(11) NOT NULL,
  `sy` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sy`
--

INSERT INTO `sy` (`sy_id`, `sy`, `date`) VALUES
(3, '2012-2013', '2022-05-05 18:52:18'),
(5, 't', '2022-05-05 18:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `username`, `password`, `firstname`, `lastname`, `middlename`, `department`, `student_id`, `location`, `date`) VALUES
(36, 'teacher', '4a82cb6db537ef6c5b53d144854e146de79502e8', 'Pedro', 'Santos', 'A.', 'Department of Industial and Information Technology', 0, 'uploads/teacher-default-img.png', '2022-05-07 00:00:00'),
(37, 'regene', '4a82cb6db537ef6c5b53d144854e146de79502e8', 'Regene', ' Hernandez', 'G. ', 'Department of Industial and Information Technology', 0, 'uploads/teacher-default-img.png', '2022-05-07 00:00:00'),
(38, 'mavictoria', '4a82cb6db537ef6c5b53d144854e146de79502e8', 'Ma. Victoria', 'Fernandez', 'D.', 'Department of Industial and Information Technology', 0, 'uploads/teacher-default-img.png', '2022-05-07 00:00:00'),
(39, 'janine', '4a82cb6db537ef6c5b53d144854e146de79502e8', 'Janine', 'Bacosmo', 'B.', 'Department of Industial and Information Technology', 0, 'uploads/teacher-default-img.png', '2022-05-07 00:00:00'),
(40, 'richard', '4a82cb6db537ef6c5b53d144854e146de79502e8', 'Richard', 'Hernandez', 'L.', 'Department of Industial and Information Technology', 0, 'uploads/teacher-default-img.png', '2022-05-07 00:00:00'),
(41, 'carlo', '4a82cb6db537ef6c5b53d144854e146de79502e8', 'Carlo Emil', 'Manabo', 'B.', 'Department of Management', 0, 'uploads/teacher-default-img.png', '2022-05-07 00:00:00'),
(42, 'joan', '4a82cb6db537ef6c5b53d144854e146de79502e8', 'Joan', 'Fortuna', 'L.', 'Department of Management', 0, 'uploads/teacher-default-img.png', '2022-05-07 00:00:00'),
(43, 'andrea', '4a82cb6db537ef6c5b53d144854e146de79502e8', 'Maria Andrea', 'Francia', 'C.', 'Department of Management', 0, 'uploads/teacher-default-img.png', '2022-05-07 00:00:00'),
(44, 'stilljohn', '4a82cb6db537ef6c5b53d144854e146de79502e8', 'Still John', 'Reyes', 'F.', 'Department of Teacher Education', 0, 'uploads/teacher-default-img.png', '2022-05-07 17:04:05'),
(45, 'jocelyn', '4a82cb6db537ef6c5b53d144854e146de79502e8', 'Jocelyn', 'Siochi', 'B.', 'Department of Teacher Education', 0, 'uploads/teacher-default-img.png', '2022-05-07 17:11:11'),
(46, 'omega', '4a82cb6db537ef6c5b53d144854e146de79502e8', 'Omega', 'Gresola', 'R.', 'Department of Teacher Education', 0, 'uploads/teacher-default-img.png', '2022-05-07 17:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_student`
--

CREATE TABLE `teacher_student` (
  `teacher_student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_student`
--

INSERT INTO `teacher_student` (`teacher_student_id`, `teacher_id`, `student_id`, `date`) VALUES
(8, 2, 17, '2022-05-05 18:53:03'),
(19, 1, 20, '2022-05-05 18:53:03'),
(20, 1, 21, '2022-05-05 18:53:03'),
(10, 17, 17, '2022-05-05 18:53:03'),
(14, 0, 0, '2022-05-05 18:53:03'),
(15, 0, 0, '2022-05-05 18:53:03'),
(16, 0, 0, '2022-05-05 18:53:03'),
(21, 24, 22, '2022-05-05 18:53:03'),
(22, 24, 21, '2022-05-05 18:53:03'),
(23, 25, 22, '2022-05-05 18:53:03'),
(24, 0, 22, '2022-05-05 18:53:03'),
(25, 29, 32, '2022-05-06 14:57:29'),
(26, 29, 21, '2022-05-06 15:33:28'),
(29, 36, 42, '2022-05-07 17:27:48'),
(30, 36, 41, '2022-05-07 17:28:18'),
(31, 36, 40, '2022-05-07 17:28:21'),
(32, 36, 33, '2022-05-07 17:40:53'),
(33, 36, 44, '2022-05-07 17:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject`
--

CREATE TABLE `teacher_subject` (
  `teacher_subject_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_subject`
--

INSERT INTO `teacher_subject` (`teacher_subject_id`, `subject_id`, `teacher_id`, `date`) VALUES
(38, 8, 25, '2022-05-05 18:53:20'),
(37, 7, 25, '2022-05-05 18:53:20'),
(33, 7, 1, '2022-05-05 18:53:20'),
(45, 5, 29, '2022-05-06 15:41:57'),
(44, 8, 29, '2022-05-06 14:53:52'),
(40, 7, 29, '2022-05-06 14:31:36'),
(43, 10, 29, '2022-05-06 14:50:45'),
(46, 17, 36, '2022-05-07 17:15:59'),
(47, 18, 36, '2022-05-07 17:16:04'),
(48, 19, 36, '2022-05-07 17:16:11'),
(49, 20, 36, '2022-05-07 17:16:17'),
(50, 21, 36, '2022-05-07 17:16:23'),
(51, 23, 36, '2022-05-07 17:16:29'),
(52, 24, 36, '2022-05-07 17:16:33'),
(53, 25, 36, '2022-05-07 17:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `location`, `date`) VALUES
(4, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Lawrence Mark', 'C.', 'Sebelina', 'uploads/admin-default-img.png', '2022-05-05 18:53:54'),
(15, 'johnmark', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'John Mark', 'A.', 'Ofrancia', 'uploads/admin-default-img.png', '2022-05-07 16:34:09'),
(16, 'test', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'John', 'A.', 'Smith', 'uploads/admin-default-img.png', '2022-05-07 16:56:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylogs`
--
ALTER TABLE `activitylogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `sws`
--
ALTER TABLE `sws`
  ADD PRIMARY KEY (`sws_id`);

--
-- Indexes for table `sy`
--
ALTER TABLE `sy`
  ADD PRIMARY KEY (`sy_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_student`
--
ALTER TABLE `teacher_student`
  ADD PRIMARY KEY (`teacher_student_id`);

--
-- Indexes for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  ADD PRIMARY KEY (`teacher_subject_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylogs`
--
ALTER TABLE `activitylogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sws`
--
ALTER TABLE `sws`
  MODIFY `sws_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `sy`
--
ALTER TABLE `sy`
  MODIFY `sy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `teacher_student`
--
ALTER TABLE `teacher_student`
  MODIFY `teacher_student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  MODIFY `teacher_subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
