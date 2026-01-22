-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2025 at 06:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning1`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_features`
--

CREATE TABLE `about_features` (
  `id` int(11) NOT NULL,
  `about_id` int(11) NOT NULL,
  `feature_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_features`
--

INSERT INTO `about_features` (`id`, `about_id`, `feature_text`) VALUES
(19, 1, 'Skilled Instructors'),
(20, 1, 'Online Classes'),
(21, 1, 'International Certificate'),
(22, 1, 'Online Video'),
(23, 1, 'Flexible Learning'),
(24, 1, 'Career Support');

-- --------------------------------------------------------

--
-- Table structure for table `about_page`
--

CREATE TABLE `about_page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_page`
--

INSERT INTO `about_page` (`id`, `title`, `subtitle`, `description1`, `description2`, `image`) VALUES
(1, 'Welcome to E-LEARNING', 'About Us', 'Our e-learning platform is dedicated to providing quality education to learners of all ages and backgrounds. We offer a wide range of courses across various subjects, delivered by experienced instructors using interactive and engaging methods. Whether you’re a student, professional, or lifelong learner, our platform makes learning flexible and accessible anytime, anywhere.', 'We focus on empowering learners with the skills and knowledge needed to succeed in today’s fast-paced world. Through personalized learning paths, quizzes, and practical projects, users can track their progress and achieve their goals efficiently. Our mission is to make education more inclusive, effective, and enjoyable for everyone.', 'admin/dist/img/coursebanner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `type`, `value`) VALUES
(1, 'Office', '34 street, Royal Park, Gondal, Gujrat'),
(2, 'Mobile', '+91 9988776644'),
(3, 'Email', 'e-learning@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_queries`
--

CREATE TABLE `contact_queries` (
  `id` int(11) NOT NULL,
  `student_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_queries`
--

INSERT INTO `contact_queries` (`id`, `student_name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'rushit vaghasiya', 'rushit@gmail.com', 'software developer', 'this couses charges ?', '2025-09-09 18:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `course_type` varchar(100) DEFAULT NULL,
  `time_duration` varchar(50) DEFAULT NULL,
  `author` varchar(100) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `is_popular` tinyint(1) DEFAULT 0,
  `video_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `category`, `course_type`, `time_duration`, `author`, `image_path`, `is_popular`, `video_url`) VALUES
(1, 'HTML', '', 'Frontend', '3 Weeks', 'Tim berners- lee', 'img/html.jpg', 1, 'https://www.youtube.com/embed/Ut4RpySLM6Y'),
(2, 'CSS', '', 'Frontend', '3 Weeks', 'hakon wium lie', 'img/css.jpg', 1, 'https://www.youtube.com/embed/AP3_V7KXHs4'),
(3, 'JavaScript', '', 'Frontend', '4 Weeks', 'brendan eich', 'img/js.jpg', 1, 'https://www.youtube.com/embed/0vL_EhRMFN0'),
(4, 'PHP', '', 'Backend', '5 Weeks', 'rasmus lerdorf', 'img/php.jpg', 2, 'https://www.youtube.com/embed/2s6mIboARCM'),
(5, 'Python', '', 'Backend', '6 Weeks', 'Guido van rossum', 'img/python.jpg', 2, 'https://www.youtube.com/embed/JdG1cVFyj5A'),
(6, 'SQL', '', 'Database', '4 Weeks', 'raymond F.boyce', 'img/sql.jpg', 2, 'https://www.youtube.com/embed/zbMHLJ0dY4w'),
(7, 'Data Structures', '', 'Core Concept', '5 Weeks', 'pioneer', 'img/ds.jpg', 2, 'https://www.youtube.com/embed/1jCFUv-Xlqo'),
(8, 'Java', '', 'Backend', '6 Weeks', 'james gosling', 'img/java.png', 3, 'https://www.youtube.com/embed/walNht-t2DE'),
(9, 'Kotlin', '', 'Mobile', '5 Weeks', 'Andrey breslav', 'img/kotlin.png', 3, 'https://www.youtube.com/embed/mnkzx3TwbV8'),
(10, 'C++', '', 'Core Concept', '4 Weeks', 'bjarne stronstrup', 'img/c++.png', 3, 'https://www.youtube.com/embed/RSDzvlXmQi4'),
(11, 'C Programming', '', 'Programming', '4 Weeks', 'dennis ritchie', 'img/c.png', 4, 'https://www.youtube.com/embed/IygPoF9Y5O8'),
(12, 'PHP', '', 'Backend', '6 Weeks', 'rasmus lerdorf', 'img/php.jpg', 4, 'https://www.youtube.com/embed/2s6mIboARCM'),
(13, 'SEO Fundamentals', '', 'Digital Marketing', '5 weeks', 'google,bing compnies', 'img/seo.jpg', 4, 'https://www.youtube.com/embed/bLUkIgY8MTE');

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `name`, `image`, `link`, `created_at`) VALUES
(1, 'Web Development', 'img/WebDevelopment2.jpg', 'development.php', '2025-09-18 16:05:10'),
(2, 'Hybrid Learning Model', 'img/Hybrid.jpg', 'hybrid.php', '2025-09-18 16:05:10'),
(3, 'Android App Development', 'img/Android1.jpg', 'application.php', '2025-09-18 16:05:10'),
(4, 'Data Analytics', 'admin/dist/img/business-data-analysis.jpg', 'analytics.php', '2025-09-18 16:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback_text` text NOT NULL,
  `submitted_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `student_name`, `email`, `feedback_text`, `submitted_at`) VALUES
(1, 'rushit vaghasiya', 'rushit@gmail.com', 'this pages feedback msg', '2025-09-09 23:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `email`, `password`, `city`, `mobile`) VALUES
(1, 'rushit vaghasiya', 'rushit@gmail.com', 'rushit vaghasiya', NULL, NULL),
(19, 'rushit', 'admin@gmail.com', 'rushit', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subscribed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `subscribed_at`) VALUES
(1, 'rushit@gmail.com', '2025-09-09 18:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `city`) VALUES
(1, 'rushit vaghasiya', '2d75a833de8a38dff78ffb4183cd8672', '');

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

CREATE TABLE `watch` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) DEFAULT NULL,
  `watched_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `watch`
--

INSERT INTO `watch` (`id`, `student_name`, `course_id`, `course_name`, `watched_at`) VALUES
(24, 'rushit', 11, 'C Programming', '2025-09-26 16:20:07'),
(25, 'rushit vaghasiya', 1, 'HTML', '2025-10-18 20:56:36'),
(26, 'rushit vaghasiya', 1, 'HTML', '2025-10-18 21:01:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_features`
--
ALTER TABLE `about_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_id` (`about_id`);

--
-- Indexes for table `about_page`
--
ALTER TABLE `about_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type` (`type`);

--
-- Indexes for table `contact_queries`
--
ALTER TABLE `contact_queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watch`
--
ALTER TABLE `watch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_features`
--
ALTER TABLE `about_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `about_page`
--
ALTER TABLE `about_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_queries`
--
ALTER TABLE `contact_queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `watch`
--
ALTER TABLE `watch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_features`
--
ALTER TABLE `about_features`
  ADD CONSTRAINT `about_features_ibfk_1` FOREIGN KEY (`about_id`) REFERENCES `about_page` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `watch`
--
ALTER TABLE `watch`
  ADD CONSTRAINT `watch_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
