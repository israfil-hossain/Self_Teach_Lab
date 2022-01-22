-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 03:29 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `self_teach_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_slug`, `blog_image`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Perspiciatis unde omnis iste natus error voluptatem', 'perspiciatis-unde-omnis-iste-natus-error-voluptatem', 'blogs/blog_1.jpeg', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</p>\n\n                            <b>Assumenda</b>\n                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>\n\n                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\n\n                            <ul class=\"ul-no-padding about-ul mb-3\">\n                                <li>Commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Commodo ligula eget dolor. Aenean massa. Port sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>\n                                <li>Dum sociis natoque penatibus et magnis dis parturient montes</li>\n                                <li>Nascetur ridiculus mus, Nulla consequat massa quis enim, Cum sociis natoque penatibus et magnis dis parturient montes</li>\n                                <li>Commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>\n                                <li>Nascetur ridiculus mus, Nulla consequat massa quis enim  </li>\n                                <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus, Nulla consequat massa quis enim </li>\n                                <li>Consectetuer adipiscing elit. Aenean commodo ligula eget dolor</li>\n                                \n                            </ul>\n\n                            <b>Doloremque</b>\n                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>\n\n                            <b>Lorem</b>\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', 1, '2019-01-16 05:16:11', '2022-01-03 10:13:28'),
(2, 'Bit-Coin', 'bit-coin', 'blogs/bitcoin(1).jpg', '<p>THis is bitcoin .&nbsp;</p>', 1, '2022-01-03 11:15:58', '2022-01-03 11:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `icon_class`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Development', 'development', 'fa-chart-line', 1, '2022-01-03 10:13:28', '2022-01-03 10:13:28'),
(2, 'Business', 'business', 'fa-business-time', 1, '2022-01-03 10:13:28', '2022-01-03 10:13:28'),
(3, 'IT & Software', 'IT-software', 'fa-laptop', 1, '2022-01-03 10:13:28', '2022-01-03 10:13:28'),
(4, 'Marketing', 'marketing', 'fa-funnel-dollar', 1, '2022-01-03 10:13:28', '2022-01-03 10:13:28'),
(5, 'Lifestyle', 'lifestyle', 'fa-heartbeat', 1, '2022-01-03 10:13:28', '2022-01-03 10:13:28'),
(6, 'Photography', 'photography', 'fa-camera-retro', 1, '2022-01-03 10:13:28', '2022-01-03 10:13:28'),
(7, 'Health & Fitness', 'health-fitness', 'fa-medkit', 1, '2022-01-03 10:13:28', '2022-01-03 10:13:28'),
(8, 'Teacher Training', 'teacher-training', 'fa-chalkboard-teacher', 1, '2022-01-03 10:13:28', '2022-01-03 10:13:28'),
(9, 'Music', 'music', 'fa-music', 1, '2022-01-03 10:13:28', '2022-01-03 10:13:28'),
(10, 'Academics', 'academics', 'fa-user-graduate', 1, '2022-01-03 10:13:28', '2022-01-03 10:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `instructor_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `instruction_level_id` int(10) UNSIGNED NOT NULL,
  `course_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_video` int(10) UNSIGNED DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `strike_out_price` decimal(8,2) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `instructor_id`, `category_id`, `instruction_level_id`, `course_title`, `course_slug`, `keywords`, `overview`, `course_image`, `thumb_image`, `course_video`, `duration`, `price`, `strike_out_price`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 9, 9, 4, 'Photography - Become a Better Photographer', 'photography-become-a-better-photographer', 'Health,History,Coding,GK,Technology,Future,Space,IQ,IT & Software', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English.</p>\n                   <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don`t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>', 'course/1/1.jpg', 'course/1/thumb_1.jpg', NULL, '2 days', '0.00', '159.00', 1, '2022-01-03 10:13:28', '2022-01-03 10:13:28'),
(2, 1, 3, 2, 'Python', 'python', 'Python,python,Python Programming', '<p>This is Python Course .&nbsp;</p>', NULL, NULL, NULL, '2days', '10000.00', '5000.00', 1, '2022-01-04 23:10:16', '2022-01-04 23:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `course_files`
--

CREATE TABLE `course_files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_extension` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploader_id` int(11) NOT NULL,
  `processed` int(11) NOT NULL DEFAULT 1 COMMENT '0-not processed,1-processed',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_files`
--

INSERT INTO `course_files` (`id`, `file_name`, `file_title`, `file_type`, `file_extension`, `file_size`, `duration`, `file_tag`, `uploader_id`, `processed`, `created_at`, `updated_at`) VALUES
(1, 'sample-15568160485135', 'samplemp3', 'mp3', 'mp3', '4113874', '00:02:49', 'curriculum', 1, 1, 1556816050, 1556816050),
(2, 'sample_15568166868011', 'sample.pdf', 'pdf', 'pdf', '164061', '11', 'curriculum', 1, 1, 1556816686, 1556816686),
(3, 'sample_15568167745496', 'sample.pdf', 'pdf', 'pdf', '164061', '11', 'curriculum_resource', 1, 1, 1556816774, 1556816774),
(4, 'http://www.google.com', 'Google Site', 'link', 'link', '', NULL, 'curriculum_resource_link', 1, 1, 1556816825, 1556816825),
(5, 'http://www.facebook.com', 'Facebook Resource', 'link', 'link', '', NULL, 'curriculum_resource_link', 1, 1, 1556816856, 1556816856);

-- --------------------------------------------------------

--
-- Table structure for table `course_progresses`
--

CREATE TABLE `course_progresses` (
  `progress_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `lecture_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0-incomplete,1-complete',
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_ratings`
--

CREATE TABLE `course_ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `rating` decimal(8,1) NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_taken`
--

CREATE TABLE `course_taken` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_taken`
--

INSERT INTO `course_taken` (`id`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-01-03 10:13:28', '2022-01-03 10:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `course_videos`
--

CREATE TABLE `course_videos` (
  `id` int(11) NOT NULL,
  `video_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_type` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uploader_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `processed` int(11) NOT NULL DEFAULT 1 COMMENT '0-not processed,1-processed',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_videos`
--

INSERT INTO `course_videos` (`id`, `video_title`, `video_name`, `video_type`, `duration`, `image_name`, `video_tag`, `uploader_id`, `course_id`, `processed`, `created_at`, `updated_at`) VALUES
(1, 'raw_1556815948_sample-15568159421897', 'sample.mp4', 'mp4', '00:02:24', 'sample-15568159421897.jpg', 'curriculum', 1, 1, 1, 1556816856, 1556816856);

-- --------------------------------------------------------

--
-- Table structure for table `credits`
--

CREATE TABLE `credits` (
  `id` int(10) UNSIGNED NOT NULL,
  `transaction_id` int(10) UNSIGNED NOT NULL,
  `instructor_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `credit` decimal(10,2) DEFAULT NULL,
  `credits_for` int(11) DEFAULT NULL COMMENT '1-course_cost,2-course_commission',
  `is_admin` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `credits`
--

INSERT INTO `credits` (`id`, `transaction_id`, `instructor_id`, `user_id`, `course_id`, `credit`, `credits_for`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, 1, '0.00', 2, 1, '2022-01-03 10:13:28', '2022-01-03 10:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `curriculum_lectures_quiz`
--

CREATE TABLE `curriculum_lectures_quiz` (
  `lecture_quiz_id` int(11) NOT NULL,
  `section_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contenttext` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_type` int(11) DEFAULT NULL COMMENT '0-video,1-audio,2-document,3-text',
  `sort_order` int(11) DEFAULT NULL,
  `publish` int(11) NOT NULL DEFAULT 0,
  `resources` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `curriculum_lectures_quiz`
--

INSERT INTO `curriculum_lectures_quiz` (`lecture_quiz_id`, `section_id`, `type`, `title`, `description`, `contenttext`, `media`, `media_type`, `sort_order`, `publish`, `resources`, `createdOn`, `updatedOn`) VALUES
(1, 1, NULL, 'Installing a text editor', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don`t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text.</p>', '', '1', 0, 1, 1, '[3]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(2, 1, NULL, 'Adding real content', '<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>', '', '1', 1, 2, 1, '[3]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(3, 1, NULL, 'Creating our index page', '<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>', '', '2', 2, 3, 1, '[4]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(4, 1, NULL, 'Customizing the vendors', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p>', '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don`t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>', NULL, 3, 4, 1, '[5]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(5, 2, NULL, 'Installing a text editor', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don`t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text.</p>', '', '1', 0, 1, 1, '[3]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(6, 2, NULL, 'Adding real content', '<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>', '', '1', 1, 2, 1, '[3]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(7, 2, NULL, 'Creating our index page', '<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>', '', '2', 2, 3, 1, '[4]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(8, 2, NULL, 'Customizing the vendors', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p>', '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don`t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>', NULL, 3, 4, 1, '[5]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(9, 3, NULL, 'Installing a text editor', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don`t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text.</p>', '', '1', 0, 1, 1, '[3]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(10, 3, NULL, 'Adding real content', '<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>', '', '1', 1, 2, 1, '[3]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(11, 3, NULL, 'Creating our index page', '<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>', '', '2', 2, 3, 1, '[4]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(12, 3, NULL, 'Customizing the vendors', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p>', '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don`t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>', NULL, 3, 4, 1, '[5]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(13, 4, NULL, 'Installing a text editor', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don`t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text.</p>', '', '1', 0, 1, 1, '[3]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(14, 4, NULL, 'Adding real content', '<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>', '', '1', 1, 2, 1, '[3]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(15, 4, NULL, 'Creating our index page', '<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>', '', '2', 2, 3, 1, '[4]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(16, 4, NULL, 'Customizing the vendors', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p>', '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don`t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>', NULL, 3, 4, 1, '[5]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(17, 5, NULL, 'Installing a text editor', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don`t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text.</p>', '', '1', 0, 1, 1, '[3]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(18, 5, NULL, 'Adding real content', '<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>', '', '1', 1, 2, 1, '[3]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(19, 5, NULL, 'Creating our index page', '<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>', '', '2', 2, 3, 1, '[4]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(20, 5, NULL, 'Customizing the vendors', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p>', '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don`t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>', NULL, 3, 4, 1, '[5]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(21, 6, NULL, 'Installing a text editor', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don`t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text.</p>', '', '1', 0, 1, 1, '[3]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(22, 6, NULL, 'Adding real content', '<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>', '', '1', 1, 2, 1, '[3]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(23, 6, NULL, 'Creating our index page', '<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>', '', '2', 2, 3, 1, '[4]', '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(24, 6, NULL, 'Customizing the vendors', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p>', '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content, making it look like readable English.</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don`t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn`t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>', NULL, 3, 4, 1, '[5]', '2022-01-03 16:13:28', '2022-01-03 16:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `curriculum_sections`
--

CREATE TABLE `curriculum_sections` (
  `section_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `createdOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `curriculum_sections`
--

INSERT INTO `curriculum_sections` (`section_id`, `course_id`, `title`, `sort_order`, `createdOn`, `updatedOn`) VALUES
(1, 1, 'Introduction', 0, '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(2, 1, 'Neque porro quisquam', 1, '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(3, 1, 'Dignissimos ducimus qui blanditiis praesentium', 2, '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(4, 1, 'Maxime placeat facere possimus', 3, '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(5, 1, 'Molestias excepturi sint occaecati cupiditate', 4, '2022-01-03 16:13:28', '2022-01-03 16:13:28'),
(6, 1, 'Reprehenderit qui in ea voluptate velit esse', 5, '2022-01-03 16:13:28', '2022-01-03 16:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `instruction_levels`
--

CREATE TABLE `instruction_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instruction_levels`
--

INSERT INTO `instruction_levels` (`id`, `level`) VALUES
(1, 'Begineer'),
(2, 'Intermediate'),
(3, 'Advanced'),
(4, 'Comprehensive');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bkash_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_credits` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `user_id`, `first_name`, `last_name`, `instructor_slug`, `contact_email`, `mobile`, `Bkash_id`, `link_facebook`, `link_linkedin`, `link_twitter`, `biography`, `instructor_image`, `total_credits`, `created_at`, `updated_at`) VALUES
(1, 4, 'Israfil', 'Hossain', 'Israfil-Hossain', 'instructor@gmail.com', '+880-1843566251', '+880-1843566251', NULL, NULL, NULL, '<p>Aenean commodo ligula eget dolor. Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, eta rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis. Lorem ipsum dolor sit amet,Aenean commodo ligula eget dolor. Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p><p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, eta rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis. Lorem ipsum dolor sit amet,Aenean commodo ligula eget dolor. Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>', 'instructor/1/angela.jpg', '0.00', '2022-01-03 10:13:28', '2022-01-03 10:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_09_26_121241_create_sessions_table', 1),
(5, '2021_10_09_204231_create_categories_table', 1),
(6, '2021_10_09_204411_create_course_files_table', 1),
(7, '2021_10_09_204504_create_course_videos_table', 1),
(8, '2021_10_09_204548_create_courses_table', 1),
(9, '2021_10_09_204816_create_curriculum_sections_table', 1),
(10, '2021_10_09_204947_create_instruction_levels_table', 1),
(11, '2021_10_09_205127_create_role_user_table', 1),
(12, '2021_10_09_205153_create_roles_table', 1),
(13, '2021_10_09_205302_create_instructors_table', 1),
(14, '2021_10_09_205444_create_payments_table', 1),
(15, '2021_10_09_205803_create_course_ratings_table', 1),
(16, '2021_10_09_205905_create_options_table', 1),
(17, '2021_10_09_205946_create_withdraw_requests_table', 1),
(18, '2021_10_09_210020_create_course_progresses_table', 1),
(19, '2021_10_09_210110_create_blogs_table', 1),
(20, '2021_10_16_221226_create_configs_table', 1),
(21, '2021_11_04_172547_create_curriculum_lectures_quiz_table', 1),
(22, '2021_11_20_075054_create_quizzes_table', 1),
(23, '2021_12_04_152351_create_question_table', 1),
(24, '2021_12_04_152351_create_quiz_table', 1),
(25, '2021_12_04_152401_create_foreign_keys', 1);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `code`, `option_key`, `option_value`) VALUES
(1, 'pageHome', 'banner_title', 'Learn courses online'),
(2, 'pageHome', 'banner_text', 'Learn every topic. On time. Everytime.'),
(3, 'pageHome', 'instructor_text', 'We have more than 3,250 skilled & professional Instructors'),
(4, 'pageHome', 'learn_block_title', 'Learn every topic, everytime.'),
(5, 'pageHome', 'learn_block_text', '\n            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.'),
(6, 'pageAbout', 'content', '<article class=\"container\">\n            <div class=\"row\">\n                <div class=\"col-12\">\n                   <h5 class=\"mt-3 underline-heading\">OUR MISSION IS SIMPLE</h5>\n                   <p>Cobem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla dolor sit amet, consectetuer adipiscing elit. </p>\n                   <p> Aenean commodo ligula eget dolor. Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, eta rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis. Lorem ipsum dolor sit amet,Aenean commodo ligula eget dolor. Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, eta rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis. Lorem ipsum dolor sit amet,</p>\n\n                   <ul class=\"ul-no-padding about-ul\">\n                        <li>Commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Commodo ligula eget dolor. Aenean massa. Port sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>\n                        <li>Dum sociis natoque penatibus et magnis dis parturient montes</li>\n                        <li>Nascetur ridiculus mus, Nulla consequat massa quis enim, Cum sociis natoque penatibus et magnis dis parturient montes</li>\n                        <li>Commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>\n                        <li>Nascetur ridiculus mus, Nulla consequat massa quis enim  </li>\n                        <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus, Nulla consequat massa quis enim </li>\n                        <li>Consectetuer adipiscing elit. Aenean commodo ligula eget dolor</li>\n                        \n                    </ul>\n                </div>\n            </div>\n        </article><article class=\"count-block jumbotron\">\n        <div class=\"container\">\n            <div class=\"row\">\n                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6\">\n                    <h3 class=\"underline-heading\">150</h3>\n                    <h6>COUNTRIES REACHED</h6>\n                </div>\n                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6\">\n                    <h3 class=\"underline-heading\">850</h3>\n                    <h6>COUNTRIES REACHED</h6>\n                </div>\n                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6\">\n                    <h3 class=\"underline-heading\">38300</h3>\n                    <h6>PASSED GRADUATES</h6>\n                </div>\n                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6\">\n                    <h3 class=\"underline-heading\">3400</h3>\n                    <h6>COURSES PUBLISHED</h6>\n                </div>\n            </div>\n        </div>\n    </article><article class=\"about-features-block\">\n    <div class=\"container\">\n        <div class=\"row\">\n            <div class=\"col-12 text-center seperator-head mt-3\">\n                <h3>Why choose Ulearn</h3>\n                <p class=\"mt-3\">Cum doctus civibus efficiantur in imperdiet deterruisset.</p>\n            </div>\n        </div>\n                        <div class=\"row mt-4 mb-5\">\n                                <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">\n                <div class=\"feature-box mx-auto text-center\">\n                    <main>\n                        <i class=\"fas fa-file-signature\"></i>\n                        <div class=\"col-md-12\">\n                            <h6 class=\"instructor-title\">Hi-Tech Learning </h6>\n                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>\n                        </div>\n                    </main>\n                </div>\n            </div>\n                            <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">\n                <div class=\"feature-box mx-auto text-center\">\n                    <main>\n                        <i class=\"fas fa-users-cog\"></i>\n                        <div class=\"col-md-12\">\n                            <h6 class=\"instructor-title\">Course Discussion </h6>\n                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>\n                        </div>\n                    </main>\n                </div>\n            </div>\n                            <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">\n                <div class=\"feature-box mx-auto text-center\">\n                    <main>\n                        <i class=\"fas fa-shield-alt\"></i>\n                        <div class=\"col-md-12\">\n                            <h6 class=\"instructor-title\">Website Security </h6>\n                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>\n                        </div>\n                    </main>\n                </div>\n            </div>\n                            <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">\n                <div class=\"feature-box mx-auto text-center\">\n                    <main>\n                        <i class=\"fas fa-chalkboard-teacher\"></i>\n                        <div class=\"col-md-12\">\n                            <h6 class=\"instructor-title\">Qualified teachers </h6>\n                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>\n                        </div>\n                    </main>\n                </div>\n            </div>\n                            <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">\n                <div class=\"feature-box mx-auto text-center\">\n                    <main>\n                        <i class=\"fas fa-building\"></i>\n                        <div class=\"col-md-12\">\n                            <h6 class=\"instructor-title\">Equiped class rooms </h6>\n                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>\n                        </div>\n                    </main>\n                </div>\n            </div>\n                            <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">\n                <div class=\"feature-box mx-auto text-center\">\n                    <main>\n                        <i class=\"fas fa-digital-tachograph\"></i>\n                        <div class=\"col-md-12\">\n                            <h6 class=\"instructor-title\">Advanced teaching </h6>\n                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>\n                        </div>\n                    </main>\n                </div>\n            </div>\n                            <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">\n                <div class=\"feature-box mx-auto text-center\">\n                    <main>\n                        <i class=\"fas fa-puzzle-piece\"></i>\n                        <div class=\"col-md-12\">\n                            <h6 class=\"instructor-title\">Adavanced study plans </h6>\n                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>\n                        </div>\n                    </main>\n                </div>\n            </div>\n                            <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">\n                <div class=\"feature-box mx-auto text-center\">\n                    <main>\n                        <i class=\"fas fa-bullseye\"></i>\n                        <div class=\"col-md-12\">\n                            <h6 class=\"instructor-title\">Focus on target </h6>\n                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>\n                        </div>\n                    </main>\n                </div>\n            </div>\n                            <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">\n                <div class=\"feature-box mx-auto text-center\">\n                    <main>\n                        <i class=\"fas fa-thumbs-up\"></i>\n                        <div class=\"col-md-12\">\n                            <h6 class=\"instructor-title\">Focus on success </h6>\n                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>\n                        </div>\n                    </main>\n                </div>\n            </div>\n                            <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">\n                <div class=\"feature-box mx-auto text-center\">\n                    <main>\n                        <i class=\"fas fa-tablet-alt\"></i>\n                        <div class=\"col-md-12\">\n                            <h6 class=\"instructor-title\">Responsive Design </h6>\n                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>\n                        </div>\n                    </main>\n                </div>\n            </div>\n                            <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">\n                <div class=\"feature-box mx-auto text-center\">\n                    <main>\n                        <i class=\"fas fa-credit-card\"></i>\n                        <div class=\"col-md-12\">\n                            <h6 class=\"instructor-title\">Payment Gateways </h6>\n                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>\n                        </div>\n                    </main>\n                </div>\n            </div>\n                            <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">\n                <div class=\"feature-box mx-auto text-center\">\n                    <main>\n                        <i class=\"fas fa-search-plus\"></i>\n                        <div class=\"col-md-12\">\n                            <h6 class=\"instructor-title\">SEO Friendly </h6>\n                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>\n                        </div>\n                    </main>\n                </div>\n            </div>\n                        </div>\n    </div>\n</article>'),
(7, 'pageContact', 'telephone', '+61 (800) 123-54323'),
(8, 'pageContact', 'email', 'XYZ@example.com'),
(9, 'pageContact', 'address', '8432 Newyork United States'),
(10, 'pageContact', 'map', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.940622898076!2d-74.00543578509465!3d40.74133204375838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf14f1f51f%3A0xcc1b5ab35bd75df0!2sGoogle!5e0!3m2!1sen!2sin!4v1542693598934\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(11, 'settingGeneral', 'application_name', 'Ulearn'),
(12, 'settingGeneral', 'meta_key', 'Learn courses online'),
(13, 'settingGeneral', 'meta_description', 'Learn every topic. On time. Every time.'),
(14, 'settingGeneral', 'admin_commission', '20'),
(15, 'settingGeneral', 'admin_email', 'admin@ulearn.com'),
(16, 'settingGeneral', 'minimum_withdraw', '100'),
(17, 'settingGeneral', 'header_logo', 'config/logo.png'),
(18, 'settingGeneral', 'fav_icon', 'config/favicon.ico'),
(19, 'settingGeneral', 'footer_logo', 'config/logo_footer.png'),
(20, 'settingPayment', 'username', ''),
(21, 'settingPayment', 'password', ''),
(22, 'settingPayment', 'signature', ''),
(23, 'settingPayment', 'test_mode', '1'),
(24, 'settingPayment', 'is_active', '1'),
(25, 'settingEmail', 'smtp_host', NULL),
(26, 'settingEmail', 'smtp_port', NULL),
(27, 'settingEmail', 'smtp_secure', NULL),
(28, 'settingEmail', 'smtp_username', NULL),
(29, 'settingEmail', 'smtp_password', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(10) UNSIGNED NOT NULL,
  `quiz_code` int(10) UNSIGNED NOT NULL,
  `question` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_option` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secound_option` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_option` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fourth_option` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `quiz_code`, `question`, `first_option`, `secound_option`, `third_option`, `fourth_option`, `result`, `created_at`, `updated_at`, `deleted_at`, `created_by`) VALUES
(1, 1, 'Http Full Meaning', 'Hyper text transfer protocol', 'Hyper text transplant protocol', 'Hyper text transplant protocol', 'Hyper text transplant protocol', 0, '2022-01-03 10:15:18', NULL, NULL, 3),
(2, 2, 'Http Full Meaning', 'Hyper text transfer protocol', 'Hyper text transplant protocol', 'Hyper text transplant protocol', 'Hyper text transplant protocol', 0, '2022-01-03 10:29:44', NULL, NULL, 3),
(3, 3, 'Http Full Meaning', 'Hyper text transfer protocol', 'Hyper text transplant protocol', 'Hyper text transplant protocol', 'Hyper text transplant protocol', 0, '2022-01-03 10:36:12', NULL, NULL, 3),
(4, 4, 'Http Full Meaning', 'Hyper text transfer protocol', 'Hyper text transplant protocol', 'Hyper text transplant protocol', 'Hyper text transplant protocol', 0, '2022-01-03 10:36:42', NULL, NULL, 3),
(5, 5, 'Http Full Meaning', 'Hyper text transfer protocol', 'Hyper text transplant protocol', 'Hyper text transplant protocol', 'Hyper text transplant protocol', 0, '2022-01-03 10:56:31', NULL, NULL, 3),
(6, 6, 'Http Full Meaning', 'Hyper text transfer protocol', 'Hyper text transplant protocol', 'Hyper text transplant protocol', 'Hyper text transplant protocol', 1, '2022-01-03 10:57:57', NULL, NULL, 3),
(7, 7, 'Http Full Meaning', 'Hyper text trans protocol', 'Hyper text transfer protocol', 'Hyper text transplant protocol', 'Hyper text transplant protocol', 2, '2022-01-03 11:03:20', '2022-01-03 11:05:24', NULL, 3),
(8, 8, 'What is CSS ?', 'Cascading Style Sheet', 'Cascadin Style Sheet', 'Cascading Stye Sheet', 'Cascading Style Shee', 1, '2022-01-03 11:11:08', NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(10) UNSIGNED NOT NULL,
  `quiz_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `lavel` tinyint(4) NOT NULL,
  `class_level` tinyint(4) DEFAULT NULL,
  `subject_name` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` mediumint(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `quiz_name`, `type`, `status`, `lavel`, `class_level`, `subject_name`, `created_at`, `updated_at`, `deleted_at`, `created_by`) VALUES
(1, 'null', 1, 1, 0, 1, 0, '2022-01-03 10:15:18', NULL, NULL, 3),
(2, 'null', 1, 1, 0, 1, 0, '2022-01-03 10:29:44', NULL, NULL, 3),
(3, 'null', 1, 1, 0, 1, 0, '2022-01-03 10:36:12', NULL, NULL, 3),
(4, 'null', 1, 1, 0, 1, 0, '2022-01-03 10:36:42', NULL, NULL, 3),
(5, 'null', 1, 1, 0, 1, 0, '2022-01-03 10:56:31', NULL, NULL, 3),
(6, 'null', 1, 1, 1, 1, 0, '2022-01-03 10:57:57', NULL, NULL, 3),
(7, 'null', 2, 1, 0, 1, 1, '2022-01-03 11:03:20', NULL, NULL, 3),
(8, 'null', 2, 1, 0, 2, 2, '2022-01-03 11:11:08', NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` int(11) NOT NULL,
  `qus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_opt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_opt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_opt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'student', 'Student to learn course', '2022-01-03 10:13:27', '2022-01-03 10:13:27'),
(2, 'instructor', 'Instructor to manage course', '2022-01-03 10:13:27', '2022-01-03 10:13:27'),
(3, 'admin', 'Admin to manage the site', '2022-01-03 10:13:27', '2022-01-03 10:13:27'),
(4, 'quizmaster', 'Quizmaster manage Quiz site', '2022-01-03 10:13:27', '2022-01-03 10:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`) VALUES
(2, 3, 2),
(3, 4, 3),
(4, 1, 4),
(5, 2, 4),
(6, 1, 1),
(7, 2, 1),
(8, 1, 5),
(9, 2, 5),
(10, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `course_id`, `amount`, `status`, `payment_method`, `order_details`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '0.00', 'completed', 'paypal_express_checkout', '{\"TOKEN\":\"success\",\"status\":\"succeeded\",\"Timestamp\":1561787415,\"ACK\":\"Success\"}', '2022-01-03 10:13:28', '2022-01-03 10:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `is_active`, `remember_token`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Mansiba', 'Rahman', 'student@gmail.com', '$2y$10$ZY0agCOKLYlscUwyjBWvf.NxDXziIbcxsMrrHab2ojSnDa7kT/tJG', 1, NULL, NULL, '2022-01-03 10:13:27', '2022-01-04 22:51:44'),
(2, 'Admin', 'A', 'admin@gmail.com', '$2y$10$YmCC7SeKIopjJY1nA8/DK.fHRdl0fUEL3UXKjaemnsqwoV3WSzVa2', 1, NULL, NULL, '2022-01-03 10:13:27', '2022-01-03 10:13:27'),
(3, 'Nahid', 'hasan', 'quizmaster@gmail.com', '$2y$10$uJgrRKqxo3CMru9JGO32kuQ3W7yzqx9B7L56Sf0bRFQgnZaxUhrFy', 1, NULL, NULL, '2022-01-03 10:13:27', '2022-01-03 10:13:27'),
(4, 'Israfil', 'Hossain', 'instructor@gmail.com', '$2y$10$U7F6LiWZRv2TEgYik1pmM.goUzArUBxUPKIZ9NXD0grmxSMYqI47y', 1, NULL, NULL, '2022-01-03 10:13:28', '2022-01-03 10:13:28'),
(5, 'Kazi', 'Muktadir', 'kazi@gmail.com', '$2y$10$9YHr1vL94E/e.r/4u0yIf.S8NgThEVr5KwVorMCt3.0.LCkITVqbG', 1, NULL, NULL, '2022-01-04 23:05:15', '2022-01-04 23:05:15'),
(6, 'Abdul', 'Kaium', 'kaium@gmail.com', '$2y$10$dCc8PmxOau9Tbr3EyDywWOA9AG0INYqyXRKFjwQNJP/Usm2dED77q', 1, NULL, NULL, '2022-01-04 23:07:32', '2022-01-04 23:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_requests`
--

CREATE TABLE `withdraw_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `paypal_id` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0-pending,1-processed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_files`
--
ALTER TABLE `course_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_progresses`
--
ALTER TABLE `course_progresses`
  ADD PRIMARY KEY (`progress_id`);

--
-- Indexes for table `course_ratings`
--
ALTER TABLE `course_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_taken`
--
ALTER TABLE `course_taken`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_videos`
--
ALTER TABLE `course_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credits`
--
ALTER TABLE `credits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curriculum_lectures_quiz`
--
ALTER TABLE `curriculum_lectures_quiz`
  ADD PRIMARY KEY (`lecture_quiz_id`);

--
-- Indexes for table `curriculum_sections`
--
ALTER TABLE `curriculum_sections`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `instruction_levels`
--
ALTER TABLE `instruction_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_quiz_code_foreign` (`quiz_code`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_files`
--
ALTER TABLE `course_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_progresses`
--
ALTER TABLE `course_progresses`
  MODIFY `progress_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_ratings`
--
ALTER TABLE `course_ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_taken`
--
ALTER TABLE `course_taken`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_videos`
--
ALTER TABLE `course_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `credits`
--
ALTER TABLE `credits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `curriculum_lectures_quiz`
--
ALTER TABLE `curriculum_lectures_quiz`
  MODIFY `lecture_quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `curriculum_sections`
--
ALTER TABLE `curriculum_sections`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `instruction_levels`
--
ALTER TABLE `instruction_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_quiz_code_foreign` FOREIGN KEY (`quiz_code`) REFERENCES `quiz` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
