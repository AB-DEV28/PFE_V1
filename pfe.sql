-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 12:32 PM
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
  `answer` int(11) NOT NULL,
  `answer_case` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers_users`
--

INSERT INTO `answers_users` (`id_answer_user`, `id_user`, `id_question`, `answer`, `answer_case`) VALUES
(1, 0, 1, 1, 0);

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
(1, 0, 14, '2023-04-13', -1);

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
(1, 14, 'question title1', '1', '2', '3', '4', 'ch2'),
(2, 1, 'question title2', '1', '2', '3', '4', 'ch3'),
(4, 2, 'question title1', '1', '2', '3', '4', 'ch1'),
(5, 2, 'question title2', '1', '2', '3', '4', 'ch3'),
(6, 2, 'question title3', '1', '2', '3', '4', 'ch4'),
(22, 23, 'gfh', 'dfgdf', 'dsfg', 'dsfg', 'dfs', 'ch3'),
(23, 23, '', '', '', '', '', 'ch1');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id_quiz` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title_quiz` varchar(255) NOT NULL,
  `url_quiz` varchar(255) NOT NULL,
  `quiz_duration` time NOT NULL,
  `quiz_description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id_quiz`, `id_user`, `title_quiz`, `url_quiz`, `quiz_duration`, `quiz_description`, `image`) VALUES
(14, 14, 'test1', 'https://example.com/test.php?id=14', '00:05:00', 'description1', ''),
(18, 14, 'test 2', 'https://example.com/test.php?id=18', '00:06:00', 'description 2', ''),
(23, 16, 'tett', 'https://example.com/test.php?id=23', '05:05:00', 'dtt', ''),
(24, 14, 'test 5', 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=24', '00:05:00', 'description', ''),
(33, 14, 'test 2', 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=33', '00:13:40', 'dfs', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `email`, `mp`) VALUES
(14, 'test', 'test', 'test@test', '098f6bcd4621d373cade4e832627b4f6'),
(15, 'ala', 'ala', 'ala@ala', 'e88e6128e26eeff4daf1f5db07372784'),
(16, 'younes', 'younes', 'younes@younes', '083af24243207a87b587d00e12cc30ca');

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
  MODIFY `id_answer_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pass_quiz`
--
ALTER TABLE `pass_quiz`
  MODIFY `id_pass` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id_quiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
