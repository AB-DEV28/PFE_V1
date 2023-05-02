-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 03:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfe`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers_users`
--

CREATE TABLE `answers_users` (
  `id_answer_user` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `id_quiz` int(11) NOT NULL,
  `id_pass_quiz` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `answer_case` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers_users`
--

INSERT INTO `answers_users` (`id_answer_user`, `id_user`, `id_question`, `id_quiz`, `id_pass_quiz`, `answer`, `answer_case`) VALUES
(106, 14, 43, 14, 0, 1, 0),
(107, 14, 44, 14, 0, 22, 0),
(108, 14, 45, 14, 0, 222, 0),
(109, 14, 46, 14, 0, 3333, 0),
(110, 14, 43, 14, 0, 1, 1),
(111, 14, 44, 14, 0, 22, 1),
(112, 14, 45, 14, 0, 333, 1),
(113, 14, 46, 14, 0, 3333, 1),
(114, 14, 47, 14, 0, 11111, 1),
(115, 14, 43, 14, 0, 1, 1),
(116, 14, 44, 14, 0, 22, 1),
(117, 14, 45, 14, 0, 333, 1),
(118, 14, 46, 14, 0, 3333, 1),
(119, 14, 47, 14, 0, 11111, 1),
(120, 14, 43, 14, 0, 0, 0),
(121, 14, 44, 14, 0, 0, 0),
(122, 14, 45, 14, 0, 0, 0),
(123, 14, 46, 14, 0, 0, 0),
(124, 14, 48, 14, 0, 22222, 0),
(125, 14, 43, 14, 0, 0, 0),
(126, 14, 44, 14, 0, 0, 0),
(127, 14, 45, 14, 0, 0, 0),
(128, 14, 46, 14, 0, 0, 0),
(129, 14, 48, 14, 0, 11111, 1),
(130, 15, 43, 14, 0, 1, 1),
(131, 15, 44, 14, 0, 22, 1),
(132, 15, 45, 14, 0, 222, 0),
(133, 15, 46, 14, 0, 3333, 1),
(134, 15, 48, 14, 0, 11111, 1),
(135, 14, 43, 14, 0, 1, 1),
(136, 14, 44, 14, 0, 22, 1),
(137, 14, 45, 14, 0, 333, 1),
(138, 14, 46, 14, 0, 3333, 1),
(139, 14, 48, 14, 0, 11111, 1),
(140, 14, 43, 14, 0, 1, 1),
(141, 14, 44, 14, 0, 22, 1),
(142, 14, 45, 14, 0, 333, 1),
(143, 14, 46, 14, 0, 3333, 1),
(144, 14, 48, 14, 0, 11111, 1),
(145, 14, 43, 14, 0, 1, 1),
(146, 14, 44, 14, 0, 11, 0),
(147, 14, 45, 14, 0, 222, 0),
(148, 14, 46, 14, 0, 3333, 1),
(149, 14, 48, 14, 0, 11111, 1),
(150, 14, 43, 14, 0, 2, 0),
(151, 14, 44, 14, 0, 11, 0),
(152, 14, 45, 14, 0, 222, 0),
(153, 14, 46, 14, 0, 3333, 1),
(154, 14, 48, 14, 0, 11111, 1),
(155, 14, 43, 14, 0, 2, 0),
(156, 14, 44, 14, 0, 22, 1),
(157, 14, 45, 14, 0, 222, 0),
(158, 14, 46, 14, 0, 3333, 1),
(159, 14, 48, 14, 0, 11111, 1),
(160, 14, 43, 14, 0, 1, 1),
(161, 14, 44, 14, 0, 22, 1),
(162, 14, 45, 14, 0, 333, 1),
(163, 14, 46, 14, 0, 2222, 0),
(164, 14, 48, 14, 0, 33333, 0),
(165, 14, 43, 14, 78, 1, 1),
(166, 14, 44, 14, 78, 22, 1),
(167, 14, 45, 14, 78, 333, 1),
(168, 14, 46, 14, 78, 3333, 1),
(169, 14, 48, 14, 78, 33333, 0),
(170, 14, 43, 14, 79, 1, 1),
(171, 14, 44, 14, 79, 0, 0),
(172, 14, 45, 14, 79, 222, 0),
(173, 14, 46, 14, 79, 0, 0),
(174, 14, 48, 14, 79, 0, 0),
(175, 14, 43, 14, 80, 2, 0),
(176, 14, 44, 14, 80, 0, 0),
(177, 14, 45, 14, 80, 0, 0),
(178, 14, 46, 14, 80, 0, 0),
(179, 14, 48, 14, 80, 0, 0),
(180, 14, 43, 14, 0, 2, 0),
(181, 14, 44, 14, 0, 0, 0),
(182, 14, 45, 14, 0, 222, 0),
(183, 14, 46, 14, 0, 0, 0),
(184, 14, 48, 14, 0, 22222, 0),
(185, 14, 43, 14, 0, 3, 0),
(186, 14, 44, 14, 0, 11, 0),
(187, 14, 45, 14, 0, 0, 0),
(188, 14, 46, 14, 0, 0, 0),
(189, 14, 48, 14, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'ala', 'ala@gmail.com', '12345'),
(2, 'abdessamed', 'abdessamed@gmail.com', '123456'),
(3, 'islam', 'islam@gmail.com', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `pass_quiz`
--

CREATE TABLE `pass_quiz` (
  `id_pass` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_quiz` int(11) NOT NULL,
  `date` date NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pass_quiz`
--

INSERT INTO `pass_quiz` (`id_pass`, `id_user`, `id_quiz`, `date`, `note`) VALUES
(66, 14, 14, '2023-04-28', -4),
(67, 14, 14, '2023-04-28', 5),
(68, 14, 14, '2023-04-28', 5),
(69, 14, 14, '2023-04-28', -5),
(70, 14, 14, '2023-04-28', -3),
(71, 15, 14, '2023-04-28', 3),
(72, 14, 14, '2023-04-29', 5),
(73, 14, 14, '2023-05-02', 5),
(74, 14, 14, '2023-05-02', 1),
(75, 14, 14, '2023-05-02', -1),
(76, 14, 14, '2023-05-02', 1),
(77, 14, 14, '2023-05-02', 1),
(78, 14, 14, '2023-05-02', 3),
(79, 14, 14, '2023-05-02', -3),
(80, 14, 14, '2023-05-02', 0),
(81, 14, 14, '2023-05-02', -5),
(82, 14, 14, '2023-05-02', -5);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id_question` int(11) NOT NULL,
  `id_quiz` int(11) NOT NULL,
  `title_question` text NOT NULL,
  `ch1` text NOT NULL,
  `ch2` text NOT NULL,
  `ch3` text NOT NULL,
  `ch4` text NOT NULL,
  `answer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id_question`, `id_quiz`, `title_question`, `ch1`, `ch2`, `ch3`, `ch4`, `answer`) VALUES
(2, 1, 'question title2', '1', '2', '3', '4', 'ch3'),
(4, 2, 'question title1', '1', '2', '3', '4', 'ch1'),
(5, 2, 'question title2', '1', '2', '3', '4', 'ch3'),
(6, 2, 'question title3', '1', '2', '3', '4', 'ch4'),
(22, 23, 'gfh', 'dfgdf', 'dsfg', 'dsfg', 'dfs', 'ch3'),
(23, 23, '', '', '', '', '', 'ch1'),
(38, 34, 'question1', '111', '22', '333', '444', 'ch3'),
(43, 14, 'question1', '1', '2', '3', '4', '1'),
(44, 14, 'question11', '11', '22', '33', '33', '22'),
(45, 14, 'question111', '111', '222', '333', '444', '333'),
(46, 14, 'question1111', '1111', '2222', '3333', '3333', '3333'),
(48, 14, 'question11111', '11111', '22222', '33333', '44444', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id_quiz` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title_quiz` varchar(255) NOT NULL,
  `situation_quiz` int(11) NOT NULL,
  `url_quiz` varchar(255) NOT NULL,
  `quiz_duration` time NOT NULL,
  `quiz_description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id_quiz`, `id_user`, `title_quiz`, `situation_quiz`, `url_quiz`, `quiz_duration`, `quiz_description`, `image`) VALUES
(14, 14, 'test1', 0, 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=14', '00:05:00', 'description1', ''),
(18, 14, 'test 2', 0, 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=18', '00:06:00', 'description 2', ''),
(23, 16, 'tett', 0, 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=23', '05:05:00', 'dtt', ''),
(24, 14, 'test 5', 1, 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=24', '00:05:00', 'description', ''),
(33, 14, 'test 2', 0, 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=33', '00:13:40', 'dfs', ''),
(34, 14, 'dfs', 0, 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=34', '00:05:40', 'dsfsd', ''),
(35, 14, '445', 0, 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=35', '00:05:40', '45', ''),
(36, 14, 'fgh', 1, 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=36', '00:05:40', 'fgd', ''),
(37, 14, 'ghdf', 0, 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=37', '00:05:40', 'fdgfd', ''),
(38, 14, 'jb;jn', 0, 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=38', '00:05:40', 'fdgdf', ''),
(39, 14, 'df', 1, 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=39', '00:05:40', 'xcv', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mp` varchar(255) NOT NULL,
  `role_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `email`, `mp`, `role_admin`) VALUES
(14, 'fn_test', 'ln_test', 'test@test', '098f6bcd4621d373cade4e832627b4f6', 0),
(15, 'ala', 'ala', 'ala@ala', 'e88e6128e26eeff4daf1f5db07372784', 0),
(16, 'younes', 'younes', 'younes@younes', '083af24243207a87b587d00e12cc30ca', 0),
(17, 'admin', 'admin', 'admin@admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers_users`
--
ALTER TABLE `answers_users`
  ADD PRIMARY KEY (`id_answer_user`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pass_quiz`
--
ALTER TABLE `pass_quiz`
  ADD PRIMARY KEY (`id_pass`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id_quiz`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers_users`
--
ALTER TABLE `answers_users`
  MODIFY `id_answer_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pass_quiz`
--
ALTER TABLE `pass_quiz`
  MODIFY `id_pass` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id_quiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
