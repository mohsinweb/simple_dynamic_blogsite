-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 03:07 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(10) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `admin_email`, `admin_name`, `admin_pass`) VALUES
(1, 'admin@gmail.com', 'Mohsin', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'admin2@gmail.com', 'Hasan', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(3) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`) VALUES
(5, 'Moango', 'Mango is the most popular furts'),
(6, 'Post', 'Mango is the most popular furts'),
(7, 'Vagetable', 'we Love Vagetable'),
(8, 'Fasion', 'Fasionable dress is good for nothing');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(255) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_img` varchar(200) NOT NULL,
  `post_author` varchar(100) NOT NULL,
  `post_date` date NOT NULL,
  `post_comment_count` varchar(50) NOT NULL,
  `post_ctg` int(100) NOT NULL,
  `post_summery` varchar(250) NOT NULL,
  `post_tag` varchar(250) NOT NULL,
  `post_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_content`, `post_img`, `post_author`, `post_date`, `post_comment_count`, `post_ctg`, `post_summery`, `post_tag`, `post_status`) VALUES
(1, ' abc', 'srgfdsssssssssssssssssssss', 'C:xampppp	mpphp3A4F.tmp', 'admin', '2022-03-28', '3', 5, 'fddfgad', 'adsfadf', 0),
(2, ' ttrgtggf', 'fdsgsfdgfsd', 'C:xampppp	mpphp87D.tmp', 'admin', '2022-03-28', '3', 7, 'sdfgfdsgfsd', 'sdfgsfdgsfdg', 1),
(3, ' ttrgtggf', 'fdsgsfdgfsd', 'IMG_20190104_181211.jpg', 'admin', '2022-03-28', '3', 7, 'sdfgfdsgfsd', 'sdfgsfdgsfdg', 1),
(4, ' ttrgtggf', 'fdsgsfdgfsd', 'IMG_20190104_181211.jpg', 'admin', '2022-03-28', '3', 7, 'sdfgfdsgfsd', 'sdfgsfdgsfdg', 1),
(5, ' Mohsin IT', 'Mohsin IT is best inovative ic sector', 'IMG_20180616_181722.jpg', 'admin', '2022-03-28', '3', 6, 'Mohsin IT is best inovative ic sector', 'IT/Math/', 0),
(6, ' সংসদে দ্রব্যমূল্য বৃদ্ধির সমালোচনা', 'দ্রব্যমূল্য বৃদ্ধির প্রতিবাদ জানিয়ে জাতীয় সংসদে বক্তব্য দিয়েছেন বিরোধী দলের দুই সদস্য। তাঁরা বলেছেন, বাজারে গেলে মনে হয় না দেশে সরকার আছে। সরকার দ্রব্যমূল্য নিয়ন্ত্রণে আনতে পারেনি।\r\n\r\nআজ সোমবার জাতীয় সংসদের অধিবেশনে পয়েন্ট অব অর্ডারে দাঁড়িয়ে দ্রব্যমূল্য নিয়ে বক্তব্য দেন জাতীয় পার্টির মহাসচিব সাংসদ মুজিবুল হক ও বিএনপি দলীয় সাংসদ হারুনুর রশীদ। ', 'IMG_20220224_192849.jpg', 'admin', '2022-03-28', '3', 8, 'দ্রব্যমূল্য বৃদ্ধির প্রতিবাদ জানিয়ে জাতীয় সংসদে বক্তব্য দিয়েছেন বিরোধী দলের দুই সদস্য। তাঁরা বলেছেন, বাজারে গেলে মনে হয় না দেশে সরকার আছে। সরকার দ্রব্যমূল্য নিয়ন্ত্রণে আনতে পারেনি।', '‘সরকার দ্রব্যমূ', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `post_with_cat`
-- (See below for the actual view)
--
CREATE TABLE `post_with_cat` (
`post_id` int(255)
,`post_title` varchar(100)
,`post_content` longtext
,`post_img` varchar(200)
,`post_author` varchar(100)
,`post_date` date
,`post_comment_count` varchar(50)
,`post_summery` varchar(250)
,`post_tag` varchar(250)
,`post_status` tinyint(3)
,`cat_id` int(3)
,`cat_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `post_with_cat`
--
DROP TABLE IF EXISTS `post_with_cat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `post_with_cat`  AS  select `posts`.`post_id` AS `post_id`,`posts`.`post_title` AS `post_title`,`posts`.`post_content` AS `post_content`,`posts`.`post_img` AS `post_img`,`posts`.`post_author` AS `post_author`,`posts`.`post_date` AS `post_date`,`posts`.`post_comment_count` AS `post_comment_count`,`posts`.`post_summery` AS `post_summery`,`posts`.`post_tag` AS `post_tag`,`posts`.`post_status` AS `post_status`,`category`.`cat_id` AS `cat_id`,`category`.`cat_name` AS `cat_name` from (`posts` join `category` on(`posts`.`post_ctg` = `category`.`cat_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
