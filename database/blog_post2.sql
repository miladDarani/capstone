-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2020 at 11:01 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `blog_post`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(255) DEFAULT NULL,
  `author_location` varchar(255) DEFAULT NULL,
  `author_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`, `author_location`, `author_image`) VALUES
(1, 'Michael Jordan', 'USA', 'mj.jpg'),
(2, 'Leo Messi', 'Argentina', 'leo.jpg'),
(3, 'Cristiano Ronaldo', 'Portugal', 'ronaldo.jpg'),
(4, 'Diego Maradona', 'Argentina', 'diego.jpg'),
(5, 'Neymar Jr', 'Brazil', 'neymary.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `full_desc` text,
  `read_length` int(11) DEFAULT NULL,
  `date_posted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `views` int(11) DEFAULT NULL,
  `seo_done` tinyint(4) DEFAULT '0',
  `category` varchar(255) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`post_id`, `title`, `full_desc`, `read_length`, `date_posted`, `views`, `seo_done`, `category`, `author_id`) VALUES
(1, 'This is blog post title number 1', 'lorem ipsum', 2, '2020-04-19 10:29:47', 0, 1, 'Sound Design', 1),
(2, 'This is blog post title number 2', 'lorem ipsum', 3, '2020-04-19 10:31:02', 0, 1, 'Sound Design', 1),
(3, 'This is blog post title number 3', 'lorem ipsum', 2, '2020-04-19 10:34:20', 0, 1, 'Sound Design', 1),
(4, 'This is blog post title number 4', 'lorem ipsum', 5, '2020-04-19 10:34:37', 0, 1, 'Sound Design', 3),
(5, 'This is blog post title number 5', 'lorem ipsum', 6, '2020-04-19 10:34:49', 0, 1, 'Sound Editing', 4),
(6, 'This is blog post title number 6', 'lorem ipsum', 7, '2020-04-19 10:35:01', 0, 1, 'Sound Design', 5),
(7, 'This is blog post title number 7', 'lorem ipsum', 8, '2020-04-19 10:35:12', 0, 1, 'Sound Editing', 1),
(8, 'This is blog post title number 8', 'lorem ipsum', 2, '2020-04-19 10:35:25', 0, 1, 'Sound Design', 2),
(9, 'This is blog post title number 9', 'lorem ipsum', 3, '2020-04-19 10:35:35', 0, 1, 'Sound Editing', 3),
(10, 'This is blog post title number 10', 'lorem ipsum', 2, '2020-04-19 10:35:46', 0, 1, 'Sound Editing', 4),
(11, 'This is blog post title number 11', 'lorem ipsum', 4, '2020-04-19 10:35:56', 0, 1, 'Sound Editing', 1),
(12, 'This is blog post title number 12', 'lorem ipsum', 5, '2020-04-19 10:36:07', 0, 1, 'Sound Design', 1),
(13, 'This is blog post title number 13', 'lorem ipsum', 6, '2020-04-19 10:36:16', 0, 1, 'Sound Editing', 5),
(14, 'This is blog post title number 14', 'lorem ipsum', 7, '2020-04-19 10:36:29', 0, 1, 'Sound Editing', 4),
(15, 'This is blog post title number 15', 'lorem ipsum', 4, '2020-04-19 10:37:12', 0, 1, 'Sound Design', 2),
(16, 'This is blog post title number 16', 'lorem ipsum', 5, '2020-04-19 10:37:22', 0, 1, 'Sound Editing', 3),
(17, 'This is blog post title number 17', 'lorem ipsum', 9, '2020-04-19 10:37:31', 0, 1, 'Sound Design', 3),
(18, 'This is blog post title number 18', 'lorem ipsum', 9, '2020-04-19 10:37:39', 0, 1, 'Sound Editing', 2),
(19, 'This is blog post title number 19', 'lorem ipsum', 2, '2020-04-19 10:37:47', 0, 1, 'Sound Design', 2),
(20, 'This is blog post title number 20', 'lorem ipsum', 4, '2020-04-19 10:37:55', 0, 1, 'Sound Editing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment_rate`
--

CREATE TABLE `comment_rate` (
  `comment_id` int(11) NOT NULL,
  `comment_text` text,
  `rating` int(11) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment_rate`
--

INSERT INTO `comment_rate` (`comment_id`, `comment_text`, `rating`, `date_added`, `user_id`, `post_id`) VALUES
(1, 'This is comment number 1', 4, '2020-04-19 10:01:54', 1, 1),
(2, 'This is comment number 2', 2, '2020-04-19 10:43:35', 5, 17),
(3, 'This is comment number 3', 3, '2020-04-19 10:43:45', 4, 12),
(4, 'This is comment number 4', 5, '2020-04-19 10:43:57', 3, 14),
(5, 'This is comment number 5', 5, '2020-04-19 10:44:08', 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `nick_name` varchar(45) DEFAULT NULL,
  `street` varchar(145) DEFAULT NULL,
  `city` varchar(145) DEFAULT NULL,
  `postal_code` char(7) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `country` enum('Canada', 'USA') DEFAULT 'Canada',
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(12) DEFAULT NULL,
  `age` int(3) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `nick_name` , `street`, `city`, `postal_code`, `province`, `country`, `phone`, `email`, `password`, `age`, `created_at`, `updated_at`) VALUES
(1, 'Brad', 'Pitt', 'Pitty', '102 Main St', 'New York', '90210', 'NY', 'USA', '111-222-3333', 'bpitt@hotmail.com', 'Troy', 32, CURRENT_TIMESTAMP , CURRENT_TIMESTAMP),
(2, 'Eva', 'Mendes', 'Mendy','106 Second St', 'New York', '54212', 'NY', 'USA', '333-444-5555', 'emendes@hotmail.com', 'EvA', 33, CURRENT_TIMESTAMP , CURRENT_TIMESTAMP),
(3, 'Angie', 'Jolline','Angel', '1020 Thrid St', 'Los Angeles', '98574', 'NY', 'Canada', '666-777-8888', 'angie@hotmail.com', 'AnGiE323',25,  CURRENT_TIMESTAMP , CURRENT_TIMESTAMP),
(4, 'Mark', 'Wallberg', 'Marky Mark','10223 Fourth St', 'New Orleans', '96325', 'NY', 'Canada', '999-111-0000', 'mark@hotmail.com','Funny992', 33,  CURRENT_TIMESTAMP , CURRENT_TIMESTAMP),
(5, 'Robert', 'De Niro', 'Boss Man','4532 Fifth St', 'Texas', '90210', 'NY', 'USA', '888-555-6666', 'rob@hotmail.com', 'Mafia', 34, CURRENT_TIMESTAMP , CURRENT_TIMESTAMP);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `comment_rate`
--
ALTER TABLE `comment_rate`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `comment_rate`
--
ALTER TABLE `comment_rate`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD CONSTRAINT `blog_post_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`);

--
-- Constraints for table `comment_rate`
--
ALTER TABLE `comment_rate`
  ADD CONSTRAINT `comment_rate_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `comment_rate_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `blog_post` (`post_id`);
