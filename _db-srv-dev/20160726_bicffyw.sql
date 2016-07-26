-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2016 at 01:15 AM
-- Server version: 5.5.50
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `np_16019_bicffyw`
--

-- --------------------------------------------------------

--
-- Table structure for table `bic_ffyw_attachment`
--

CREATE TABLE IF NOT EXISTS `bic_ffyw_attachment` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bic_ffyw_attachment`
--

INSERT INTO `bic_ffyw_attachment` (`id`, `title`, `size`, `image`, `caption`, `description`, `created_at`, `updated_at`) VALUES
(7, NULL, '[{"full":{"width":4032,"height":3024}},{"large":{"width":1024,"height":768}},{"thumbnail":{"width":300,"height":225}}]', 'IMG_23731.jpg', NULL, NULL, '2016-07-19 01:22:56', '2016-07-19 01:22:56'),
(10, NULL, '[{"full":{"width":4032,"height":3024}},{"large":{"width":1024,"height":768}},{"thumbnail":{"width":300,"height":225}}]', 'IMG_23721.jpg', NULL, NULL, '2016-07-19 01:26:19', '2016-07-19 01:26:19'),
(14, NULL, '[{"full":{"width":190,"height":135}}]', 'WEEK 5 - Read Between The Lines.png', NULL, NULL, '2016-07-19 10:14:49', '2016-07-19 10:14:49'),
(19, NULL, '[{"full":{"width":900,"height":823}},{"thumbnail":{"width":300,"height":274}}]', 'week5.png', NULL, NULL, '2016-07-21 09:13:26', '2016-07-21 09:13:26'),
(20, NULL, '[{"full":{"width":376,"height":93}}]', 'BGCC_Logo_French.jpg', NULL, NULL, '2016-07-21 09:19:17', '2016-07-21 09:19:17'),
(21, NULL, '[{"full":{"width":500,"height":500}},{"thumbnail":{"width":300,"height":300}}]', 'week-popup.jpg', NULL, NULL, '2016-07-21 15:25:44', '2016-07-21 15:25:44'),
(22, NULL, '[{"full":{"width":900,"height":823}},{"thumbnail":{"width":300,"height":274}}]', 'week-popup.png', NULL, NULL, '2016-07-21 15:27:26', '2016-07-21 15:27:26'),
(25, NULL, '[{"full":{"width":4032,"height":3024}},{"large":{"width":1024,"height":768}},{"medium":{"width":480,"height":360}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_23691.jpg', NULL, NULL, '2016-07-22 10:58:09', '2016-07-22 10:58:09'),
(26, NULL, '[{"full":{"width":3024,"height":4032}},{"large":{"width":768,"height":1024}},{"medium":{"width":360,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_2368.jpg', NULL, NULL, '2016-07-22 10:58:26', '2016-07-22 10:58:26'),
(27, NULL, '[{"full":{"width":3024,"height":4032}},{"large":{"width":768,"height":1024}},{"medium":{"width":360,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_23682.jpg', NULL, NULL, '2016-07-22 10:58:52', '2016-07-22 10:58:52'),
(28, NULL, '[{"full":{"width":3024,"height":4032}},{"large":{"width":768,"height":1024}},{"medium":{"width":360,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_23711.jpg', NULL, NULL, '2016-07-22 10:59:04', '2016-07-22 10:59:04'),
(29, NULL, '[{"full":{"width":4032,"height":3024}},{"large":{"width":1024,"height":768}},{"medium":{"width":480,"height":360}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_23692.jpg', NULL, NULL, '2016-07-22 11:06:27', '2016-07-22 11:06:27'),
(30, NULL, '[{"full":{"width":4032,"height":3024}},{"large":{"width":1024,"height":768}},{"medium":{"width":480,"height":360}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_23693.jpg', NULL, NULL, '2016-07-22 11:07:30', '2016-07-22 11:07:30'),
(31, NULL, '[{"full":{"width":4032,"height":3024}},{"large":{"width":1024,"height":768}},{"medium":{"width":480,"height":360}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_2365.jpg', NULL, NULL, '2016-07-22 11:15:15', '2016-07-22 11:15:15'),
(32, NULL, '[{"full":{"width":4032,"height":3024}},{"large":{"width":1024,"height":768}},{"medium":{"width":480,"height":360}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_23651.jpg', NULL, NULL, '2016-07-22 11:16:37', '2016-07-22 11:16:37'),
(37, NULL, '[{"full":{"width":3024,"height":4032}},{"large":{"width":768,"height":1024}},{"medium":{"width":360,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_2366.jpg', NULL, NULL, '2016-07-22 11:25:25', '2016-07-22 11:25:25'),
(38, NULL, '[{"full":{"width":3024,"height":4032}},{"large":{"width":768,"height":1024}},{"medium":{"width":360,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_23671.jpg', NULL, NULL, '2016-07-22 11:25:48', '2016-07-22 11:25:48'),
(39, NULL, '[{"full":{"width":3024,"height":4032}},{"large":{"width":768,"height":1024}},{"medium":{"width":360,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_23683.jpg', NULL, NULL, '2016-07-22 11:26:12', '2016-07-22 11:26:12'),
(40, NULL, '[{"full":{"width":3024,"height":4032}},{"large":{"width":768,"height":1024}},{"medium":{"width":360,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_23694.jpg', NULL, NULL, '2016-07-22 11:26:39', '2016-07-22 11:26:39'),
(41, NULL, '[{"full":{"width":3024,"height":4032}},{"large":{"width":768,"height":1024}},{"medium":{"width":360,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_2370.jpg', NULL, NULL, '2016-07-22 11:27:12', '2016-07-22 11:27:12'),
(42, NULL, '[{"full":{"width":3024,"height":4032}},{"large":{"width":768,"height":1024}},{"medium":{"width":360,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_23712.jpg', NULL, NULL, '2016-07-22 11:27:44', '2016-07-22 11:27:44'),
(45, NULL, '[{"full":{"width":3024,"height":4032}},{"large":{"width":768,"height":1024}},{"medium":{"width":360,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_23722.jpg', NULL, NULL, '2016-07-22 11:29:08', '2016-07-22 11:29:08'),
(46, NULL, '[{"full":{"width":3024,"height":4032}},{"large":{"width":768,"height":1024}},{"medium":{"width":360,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_23732.jpg', NULL, NULL, '2016-07-22 11:29:32', '2016-07-22 11:29:32'),
(47, NULL, '[{"full":{"width":3024,"height":4032}},{"large":{"width":768,"height":1024}},{"medium":{"width":360,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_2374.jpg', NULL, NULL, '2016-07-22 11:29:50', '2016-07-22 11:29:50'),
(48, NULL, '[{"full":{"width":3024,"height":4032}},{"large":{"width":768,"height":1024}},{"medium":{"width":360,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_2375.jpg', NULL, NULL, '2016-07-22 11:30:18', '2016-07-22 11:30:18'),
(49, NULL, '[{"full":{"width":1000,"height":941}},{"medium":{"width":480,"height":452}},{"thumbnail":{"width":300,"height":300}}]', 'BIC_screenshot1.png', NULL, NULL, '2016-07-22 12:00:47', '2016-07-22 12:00:47'),
(57, NULL, '[{"full":{"width":3024,"height":4032}},{"large":{"width":768,"height":1024}},{"medium":{"width":360,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'IMG_23653.jpg', NULL, NULL, '2016-07-22 16:02:50', '2016-07-22 16:02:50'),
(59, NULL, '[{"full":{"width":500,"height":500}},{"medium":{"width":480,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'week-4-popup1.jpg', NULL, NULL, '2016-07-22 16:22:28', '2016-07-22 16:22:28'),
(60, NULL, '[{"full":{"width":900,"height":823}},{"medium":{"width":480,"height":439}},{"thumbnail":{"width":300,"height":300}}]', 'week5.png', NULL, NULL, '2016-07-22 16:26:20', '2016-07-22 16:26:20'),
(62, NULL, '[{"full":{"width":500,"height":500}},{"medium":{"width":480,"height":480}},{"thumbnail":{"width":300,"height":300}}]', 'week-4-popup.jpg', NULL, NULL, '2016-07-24 07:56:39', '2016-07-24 07:56:39'),
(63, NULL, '[{"full":{"width":900,"height":823}},{"medium":{"width":480,"height":439}},{"thumbnail":{"width":300,"height":300}}]', 'week51.png', NULL, NULL, '2016-07-24 07:59:29', '2016-07-24 07:59:29'),
(64, NULL, '[{"full":{"width":2048,"height":1365}},{"large":{"width":1024,"height":683}},{"medium":{"width":480,"height":320}},{"thumbnail":{"width":300,"height":300}}]', '13692969_546790032196465_8876766310276135361_o.jpg', NULL, NULL, '2016-07-24 10:04:29', '2016-07-24 10:04:29'),
(65, NULL, '[{"full":{"width":960,"height":720}},{"medium":{"width":480,"height":360}},{"thumbnail":{"width":300,"height":300}}]', '13754692_1757849134491898_3748239267418424671_n.jpg', NULL, NULL, '2016-07-26 05:31:50', '2016-07-26 05:31:50'),
(66, NULL, '[{"full":{"width":900,"height":823}},{"medium":{"width":480,"height":439}},{"thumbnail":{"width":300,"height":300}}]', 'week52.png', NULL, NULL, '2016-07-26 05:33:00', '2016-07-26 05:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `bic_ffyw_auth_assignment`
--

CREATE TABLE IF NOT EXISTS `bic_ffyw_auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bic_ffyw_auth_assignment`
--

INSERT INTO `bic_ffyw_auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('administrator', '1', 1468860265),
('administrator', '12', 1469160376),
('administrator', '13', 1469160541),
('administrator', '14', 1469160625),
('administrator', '15', 1469160745),
('administrator', '2', 1468860265),
('standard-member', '10', 1468899120),
('standard-member', '11', 1468899199),
('standard-member', '3', 1468860453),
('standard-member', '4', 1468883586),
('standard-member', '5', 1468883650),
('standard-member', '6', 1468883749),
('standard-member', '7', 1468891258),
('standard-member', '8', 1468891535),
('standard-member', '9', 1468898931);

-- --------------------------------------------------------

--
-- Table structure for table `bic_ffyw_auth_item`
--

CREATE TABLE IF NOT EXISTS `bic_ffyw_auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bic_ffyw_auth_item`
--

INSERT INTO `bic_ffyw_auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('administrator', 1, NULL, NULL, NULL, 1468860265, 1468860265),
('backend-login', 2, 'Login to backend', NULL, NULL, 1468860265, 1468860265),
('standard-member', 1, NULL, NULL, NULL, 1468860265, 1468860265);

-- --------------------------------------------------------

--
-- Table structure for table `bic_ffyw_auth_item_child`
--

CREATE TABLE IF NOT EXISTS `bic_ffyw_auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bic_ffyw_auth_item_child`
--

INSERT INTO `bic_ffyw_auth_item_child` (`parent`, `child`) VALUES
('administrator', 'backend-login'),
('administrator', 'standard-member');

-- --------------------------------------------------------

--
-- Table structure for table `bic_ffyw_auth_rule`
--

CREATE TABLE IF NOT EXISTS `bic_ffyw_auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bic_ffyw_auth_rule`
--

INSERT INTO `bic_ffyw_auth_rule` (`name`, `data`, `created_at`, `updated_at`) VALUES
('isAuthor', 'O:36:"common\\enpii\\components\\NpAuthorRule":3:{s:4:"name";s:8:"isAuthor";s:9:"createdAt";i:1468860265;s:9:"updatedAt";i:1468860265;}', 1468860265, 1468860265);

-- --------------------------------------------------------

--
-- Table structure for table `bic_ffyw_code_block_item`
--

CREATE TABLE IF NOT EXISTS `bic_ffyw_code_block_item` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bic_ffyw_code_block_item`
--

INSERT INTO `bic_ffyw_code_block_item` (`id`, `code`, `content`) VALUES
(1, 'ga-code', '<script>\r\n  (function(i,s,o,g,r,a,m){i[''GoogleAnalyticsObject'']=r;i[r]=i[r]||function(){\r\n  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),\r\n  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)\r\n  })(window,document,''script'',''https://www.google-analytics.com/analytics.js'',''ga'');\r\n\r\n  ga(''create'', ''UA-64247209-1'', ''auto'');\r\n  ga(''send'', ''pageview'');\r\n\r\n</script>');

-- --------------------------------------------------------

--
-- Table structure for table `bic_ffyw_contest_item`
--

CREATE TABLE IF NOT EXISTS `bic_ffyw_contest_item` (
  `id` int(11) NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `attachment_id` int(11) DEFAULT NULL,
  `locale_id` int(11) DEFAULT '1',
  `popup_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `week_number` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bic_ffyw_contest_item`
--

INSERT INTO `bic_ffyw_contest_item` (`id`, `start_date`, `end_date`, `title`, `description`, `attachment_id`, `locale_id`, `popup_id`, `parent_id`, `week_number`) VALUES
(1, '2016-07-26 04:00:00', '2016-07-27 03:59:59', 'Ask your child what THEY would do if they were a principal for a day...', 'It’s the future and your child is the head of their school. The possibilities are endless! Ask your child to complete the following sentence and upload a photo of their handwritten response: "If I were principal for a day…" ', NULL, 1, NULL, NULL, 1),
(2, '2016-08-16 18:52:00', '2016-08-23 03:59:59', 'Ask your child what they want to be when they grow up…', 'Your kids are more likely to achieve their goals if they write them down, whether that’s a doctor, a rock star, an astronaut, or a baseball player! Ask your child to complete the following sentence and upload a photo of their handwritten response!', NULL, 1, NULL, NULL, 2),
(3, '2016-08-23 18:52:00', '2016-08-30 03:59:59', 'Ask your child to write out "I love handwriting" in 3 languages', 'No matter where you go, handwriting will always be important. Ask your child to write out “I love handwriting” in three different languages and upload a photo of their handwritten response!', NULL, 1, NULL, NULL, 3),
(4, '2016-08-30 18:59:00', '2016-09-06 03:59:59', 'Ask your child to include these 10 words in their next story', 'Creativity is key! Ask your child to include these 10 words in their next story and upload a photo of their masterpiece!', NULL, 1, 59, NULL, 4),
(5, '2016-09-06 19:01:00', '2016-09-13 03:59:59', ' Click the image to enlarge and ask your child to transcribe the handwritten message', 'Good penmanship is important. Click the image to enlarge and ask your child to transcribe the handwritten message, then submit a photo of their handwritten response.', NULL, 1, 60, NULL, 5),
(6, '2016-09-13 04:00:00', '2016-09-20 03:59:59', 'Ask your child what is the first thing they would do when school finishes', 'It''s the last day of school and the bell just rang! Ask your child what is the first thing they would do when school finishes and upload a photo of their handwritten response!', NULL, 1, NULL, NULL, 6),
(7, '2016-08-09 19:50:00', '2016-08-16 03:59:59', 'Demandez à votre enfant ce qu''IL ferait s''il était directeur pour une journée...', 'Vous êtes dans le futur et votre enfant est le directeur de son école. Les possibilités sont infinies! Demandez à votre enfant de compléter la phrase suivante et téléchargez une photo de sa réponse écrite à la main : « Si j''étais directeur ou directrice p', NULL, 3, NULL, 1, 1),
(8, '2016-08-16 18:52:00', '2016-08-23 03:59:59', 'Demandez à votre enfant ce qu''il veut être lorsqu''il sera grand!', 'Vos enfants ont plus de chances d''atteindre leurs objectifs s''ils les écrivent, qu''il s''agisse de devenir médecin, vedette de rock, astronaute ou joueur de baseball professionnel! Demandez à votre enfant de compléter la phrase suivante et téléchargez une ', NULL, 3, NULL, 2, 2),
(9, '2016-08-23 18:52:00', '2016-08-30 03:59:59', 'Demandez à votre enfant d''écrire à la main « J''aime écrire à la main » dans trois langues différentes et téléchargez une photo de sa réponse écrite à la main!', 'Demandez à votre enfant d''écrire à la main « J''aime écrire à la main » dans trois langues différentes et téléchargez une photo de sa réponse écrite à la main!', NULL, 3, NULL, 3, 3),
(10, '2016-08-30 18:59:00', '2016-09-06 03:59:59', 'Demandez à votre enfant d''inclure ces 10 mots dans sa prochaine histoire et téléchargez une photo de son chef d''œuvre!', 'Peu importe où vous allez, écrire à la main sera toujours important. . Demandez à votre enfant d''inclure ces 10 mots dans sa prochaine histoire et téléchargez une photo de son chef d''œuvre!', NULL, 3, NULL, 4, 4),
(11, '2016-09-06 19:01:00', '2016-09-13 03:59:59', 'Demandez à votre enfant de transcrire le message et envoyez une photo de sa réponse écrite à la main', 'La créativité est la clé! Demandez à votre enfant d''inclure ces 10 mots dans sa prochaine histoire et téléchargez une photo de son chef d''œuvre!', NULL, 3, NULL, 5, 5),
(12, '2016-09-13 04:00:00', '2016-09-20 03:59:59', 'Demandez à votre enfant pourquoi il aime être droitier ou gaucher et téléchargez une photo de sa réponse écrite à la main.', 'C''est le dernier jour d''école et la cloche vient juste de sonner! Demandez à votre enfant quelle est la première chose qu''il fera lorsque l''école sera terminée et téléchargez une photo de sa réponse écrite à la main.', NULL, 3, NULL, 6, 6),
(13, '2016-07-26 04:00:00', '2016-07-27 03:59:59', 'Demandez à votre enfant ce qu''IL ferait s''il était directeur pour une journée...', 'Vous êtes dans le futur et votre enfant est le directeur de son école. Les possibilités sont infinies! Demandez à votre enfant de compléter la phrase suivante et téléchargez une photo de sa réponse écrite à la main : « Si j''étais directeur ou directrice p', NULL, 3, NULL, 1, 1),
(14, '2016-07-27 04:00:00', '2016-07-28 03:59:59', 'Ask your child what they want to be when they grow up…', 'Your kids are more likely to achieve their goals if they write them down, whether that’s a doctor, a rock star, an astronaut, or a baseball player! Ask your child to complete the following sentence and upload a photo of their handwritten response!', NULL, 1, NULL, NULL, 2),
(15, '2016-07-27 04:00:00', '2016-07-28 03:59:59', 'Demandez à votre enfant ce qu''il veut être lorsqu''il sera grand!', 'Vos enfants ont plus de chances d''atteindre leurs objectifs s''ils les écrivent, qu''il s''agisse de devenir médecin, vedette de rock, astronaute ou joueur de baseball professionnel! Demandez à votre enfant de compléter la phrase suivante et téléchargez une ', NULL, 3, NULL, 14, 2),
(16, '2016-07-28 04:00:00', '2016-07-29 03:59:59', 'Ask your child to write out "I love handwriting" in 3 languages', 'No matter where you go, handwriting will always be important. Ask your child to write out “I love handwriting” in three different languages and upload a photo of their handwritten response!', NULL, 1, NULL, NULL, 3),
(17, '2016-07-29 00:00:00', '2016-07-29 03:59:59', 'Demandez à votre enfant d''écrire à la main « J''aime écrire à la main » dans trois langues différentes et téléchargez une photo de sa réponse écrite à la main!', 'Demandez à votre enfant d''écrire à la main « J''aime écrire à la main » dans trois langues différentes et téléchargez une photo de sa réponse écrite à la main!', NULL, 3, NULL, 16, 3),
(18, '2016-07-29 04:00:00', '2016-07-30 03:59:59', 'Ask your child to include these 10 words in their next story', 'Creativity is key! Ask your child to include these 10 words in their next story and upload a photo of their masterpiece!', NULL, 1, 62, NULL, 4),
(19, '2016-07-29 04:00:00', '2016-07-30 03:59:59', 'Demandez à votre enfant d''inclure ces 10 mots dans sa prochaine histoire et téléchargez une photo de son chef d''œuvre!', 'Peu importe où vous allez, écrire à la main sera toujours important. . Demandez à votre enfant d''inclure ces 10 mots dans sa prochaine histoire et téléchargez une photo de son chef d''œuvre!', NULL, 3, NULL, 18, 4),
(20, '2016-07-30 04:00:00', '2016-07-31 03:59:59', ' Click the image to enlarge and ask your child to transcribe the handwritten message', 'Good penmanship is important. Click the image to enlarge and ask your child to transcribe the handwritten message, then submit a photo of their handwritten response.', NULL, 1, 63, NULL, 5),
(21, '2016-07-30 04:00:00', '2016-07-31 03:59:59', 'Demandez à votre enfant de transcrire le message et envoyez une photo de sa réponse écrite à la main', 'La créativité est la clé! Demandez à votre enfant d''inclure ces 10 mots dans sa prochaine histoire et téléchargez une photo de son chef d''œuvre!', NULL, 3, NULL, 20, 5),
(22, '2016-07-31 04:00:00', '2016-08-09 03:59:59', 'Ask your child what is the first thing they would do when school finishes', 'It''s the last day of school and the bell just rang! Ask your child what is the first thing they would do when school finishes and upload a photo of their handwritten response!', NULL, 1, NULL, NULL, 6),
(23, '2016-07-31 12:00:00', '2016-08-09 03:59:59', 'Demandez à votre enfant pourquoi il aime être droitier ou gaucher et téléchargez une photo de sa réponse écrite à la main.', 'C''est le dernier jour d''école et la cloche vient juste de sonner! Demandez à votre enfant quelle est la première chose qu''il fera lorsque l''école sera terminée et téléchargez une photo de sa réponse écrite à la main.', NULL, 3, NULL, 22, 6),
(24, '2016-08-09 19:50:00', '2016-08-16 03:59:59', 'Ask your child what THEY would do if they were a principal for a day...', 'It’s the future and your child is the head of their school. The possibilities are endless! Ask your child to complete the following sentence and upload a photo of their handwritten response: "If I were principal for a day…" ', NULL, 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bic_ffyw_contest_session`
--

CREATE TABLE IF NOT EXISTS `bic_ffyw_contest_session` (
  `id` int(11) NOT NULL,
  `contest_item_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `birth_year` datetime DEFAULT NULL,
  `attachment_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `published_at` datetime DEFAULT NULL,
  `creator_id` int(11) NOT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  `is_enabled` tinyint(1) DEFAULT '1',
  `ordering_weight` int(11) DEFAULT NULL,
  `params` text,
  `accepted` int(11) DEFAULT '0',
  `is_winner` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bic_ffyw_contest_session`
--

INSERT INTO `bic_ffyw_contest_session` (`id`, `contest_item_id`, `user_id`, `user_email`, `first_name`, `last_name`, `birth_year`, `attachment_id`, `created_at`, `updated_at`, `published_at`, `creator_id`, `is_deleted`, `is_enabled`, `ordering_weight`, `params`, `accepted`, `is_winner`) VALUES
(2, 1, 4, 'j.bastawrous@gmail.com', 'Jacob', 'D', '2011-07-19 00:00:00', 57, '2016-07-18 23:13:07', '2016-07-18 23:13:07', NULL, 1, 0, 1, NULL, NULL, 1, 0),
(3, 1, 5, 'j@gmail.com', 'Jeremy', 'F', '2010-07-19 00:00:00', 37, '2016-07-18 23:14:11', '2016-07-18 23:14:11', NULL, 1, 0, 1, NULL, NULL, 1, 0),
(4, 1, 6, 'dsasa@gmail.com', 'Jessica', 'S', '2010-07-19 00:00:00', 38, '2016-07-18 23:15:50', '2016-07-18 23:15:50', NULL, 1, 0, 1, NULL, NULL, 1, 0),
(5, 1, 7, 'test@test.com', 'Jack', 'J', '2005-07-19 00:00:00', 39, '2016-07-19 01:20:59', '2016-07-19 01:20:59', NULL, 1, 0, 1, NULL, NULL, 1, 0),
(6, 1, 7, 'test@test.com', 'Abby ', 'H', '2006-07-19 00:00:00', 40, '2016-07-19 01:22:22', '2016-07-19 01:22:22', NULL, 1, 0, 1, NULL, NULL, 1, 0),
(7, 1, 7, 'test@test.com', 'Alex', 'R', '2007-07-19 00:00:00', 41, '2016-07-19 01:22:56', '2016-07-19 01:22:56', NULL, 1, 0, 1, NULL, NULL, 1, 0),
(8, 1, 7, 'test@test.com', 'Lilly', 'H', '2002-07-19 00:00:00', 42, '2016-07-19 01:24:01', '2016-07-19 01:24:01', NULL, 1, 0, 1, NULL, NULL, 1, 0),
(9, 1, 8, 'psimpson@metropolis.ca', 'Jimmy', 'H', '1999-07-19 00:00:00', 45, '2016-07-19 01:25:36', '2016-07-19 01:25:36', NULL, 1, 0, 1, NULL, NULL, 1, 0),
(10, 1, 8, 'psimpson@metropolis.ca', 'Scott', 'S', '2004-07-19 00:00:00', 46, '2016-07-19 01:26:19', '2016-07-19 01:26:19', NULL, 1, 0, 1, NULL, NULL, 1, 0),
(14, 1, 9, 'pthanhlac@gmail.com', 'Ging', 'F', '2002-07-19 00:00:00', 47, '2016-07-19 10:19:30', '2016-07-19 10:19:30', NULL, 1, 0, 1, NULL, NULL, 1, 1),
(15, 1, 9, 'pthanhlac@gmail.com', 'Don', 'F', '2009-07-19 00:00:00', 48, '2016-07-19 10:21:03', '2016-07-19 10:21:03', NULL, 1, 0, 1, NULL, NULL, 1, 0),
(18, 1, 9, 'pthanhlac@gmail.com', 'Tony', 'P', '2002-07-24 00:00:00', 64, '2016-07-24 10:04:29', '2016-07-24 10:04:29', NULL, 1, 0, 1, NULL, NULL, 0, 0),
(19, 1, 3, 'npbtrac@yahoo.com', 'My son', 'T', '2004-07-26 00:00:00', 65, '2016-07-26 05:31:51', '2016-07-26 05:31:51', NULL, 1, 0, 1, NULL, NULL, 0, 0),
(20, 1, 3, 'npbtrac@yahoo.com', 'sadf', 't', '2009-07-26 00:00:00', 66, '2016-07-26 05:33:01', '2016-07-26 05:33:01', NULL, 1, 0, 1, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bic_ffyw_locale`
--

CREATE TABLE IF NOT EXISTS `bic_ffyw_locale` (
  `id` int(11) NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bic_ffyw_locale`
--

INSERT INTO `bic_ffyw_locale` (`id`, `locale`) VALUES
(1, 'en'),
(3, 'fr');

-- --------------------------------------------------------

--
-- Table structure for table `bic_ffyw_migration`
--

CREATE TABLE IF NOT EXISTS `bic_ffyw_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bic_ffyw_migration`
--

INSERT INTO `bic_ffyw_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1468860261),
('m130524_201442_init', 1468860264),
('m160310_045314_rbac_init', 1468860264),
('m160310_045804_user_profile', 1468860264),
('m160310_045911_insert_user', 1468860265),
('m160709_105722_insert_rbac', 1468860265),
('m160712_061238_create_attachment', 1468860265),
('m160712_061239_create_contest_item', 1468860265),
('m160712_065023_create_contest_session', 1468860265),
('m160716_011907_add_accepted_to_contest_session', 1468860265),
('m160718_094225_create_page_item', 1468860265),
('m160718_095418_create_locale', 1468860265),
('m160721_072619_add_contest_item', 1469090444),
('m160723_032445_add_field_is_winner', 1469244973),
('m160724_114704_code_block_item', 1469362373);

-- --------------------------------------------------------

--
-- Table structure for table `bic_ffyw_page_item`
--

CREATE TABLE IF NOT EXISTS `bic_ffyw_page_item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `locale_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `published_at` datetime DEFAULT NULL,
  `creator_id` int(11) NOT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  `is_enabled` tinyint(1) DEFAULT '1',
  `ordering_weight` int(11) DEFAULT NULL,
  `params` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bic_ffyw_page_item`
--

INSERT INTO `bic_ffyw_page_item` (`id`, `name`, `slug`, `code`, `description`, `locale_id`, `created_at`, `updated_at`, `published_at`, `creator_id`, `is_deleted`, `is_enabled`, `ordering_weight`, `params`) VALUES
(1, 'Contest Prizes', 'prize-details', 'prize-details', '<p>One (1) Grand Prize Contest winner will receive $5,000; prize will be awarded as a cheque.</p>\r\n<p>Six (6) Weekly Prize Contest Winners will receive a $150 card (from a National Retailer) and BIC Product Prize pack valued at $50.00 each.</p>', '1', '2016-07-20 11:25:43', '2016-07-20 11:25:43', '2016-07-20 11:25:43', 1, 0, 1, NULL, NULL),
(2, 'Contest Prizes', 'prize-details', 'prize-details', '', '3', '2016-07-20 11:26:35', '2016-07-20 11:26:35', '2016-07-20 11:26:35', 1, 0, 1, NULL, NULL),
(3, 'Tip 1', 'tip-1', 'tip-1', '<p class="p1">There are 14 tips which change daily.<span class="Apple-converted-space">&nbsp; </span>The copy for the "tip" may need the font sized to be reduced in order to fit within the content box, since it''s smaller than the original site.&nbsp;</p>', '1', '2016-07-22 09:15:07', '2016-07-22 09:15:07', '2016-07-22 09:15:07', 1, 0, 1, NULL, NULL),
(4, 'Tip 1', 'tip-1', 'tip-1', '', '3', '2016-07-22 09:15:54', '2016-07-22 09:15:54', '2016-07-22 09:15:54', 1, 0, 1, NULL, NULL),
(5, 'Tip 2', 'tip-2', 'tip-2', '<p>Handwrite a letter together as a family, describing where you hope to be in five years. It&rsquo;s a great keepsake to look back at your children&rsquo;s handwriting and how it has progressed&nbsp;</p>', '1', '2016-07-22 09:30:58', '2016-07-22 09:30:58', '2016-07-22 09:30:58', 1, 0, 1, NULL, NULL),
(6, 'Tip 2', 'tip-2', 'tip-2', '', '3', '2016-07-22 09:31:20', '2016-07-22 09:31:20', '2016-07-22 09:31:20', 1, 0, 1, NULL, NULL),
(7, 'Tip 3', 'tip-3', 'tip-3', '<p>Encourage parents and grandparents to handwrite their children/grandchildren&rsquo;s favourite story in a journal as a keepsake for when the children get older</p>', '1', '2016-07-22 09:32:42', '2016-07-22 09:32:42', '2016-07-22 09:32:42', 1, 0, 1, NULL, NULL),
(8, 'Tip 3', 'tip-3', 'tip-3', '', '3', '2016-07-22 09:33:07', '2016-07-22 09:33:07', '2016-07-22 09:33:07', 1, 0, 1, NULL, NULL),
(9, 'Tip 4', 'tip-4', 'tip-4', '<p>Include a handwritten note in your in your spouse&rsquo;s suitcase before a business trip and your child&rsquo;s lunchbox or overnight bag for their first sleepover</p>', '1', '2016-07-22 09:33:45', '2016-07-22 09:33:45', '2016-07-22 09:33:45', 1, 0, 1, NULL, NULL),
(10, 'Tip 4', 'tip-4', 'tip-4', '', '3', '2016-07-22 09:34:50', '2016-07-22 09:34:50', '2016-07-22 09:34:50', 1, 0, 1, NULL, NULL),
(11, 'Tip 5', 'tip-5', 'tip-5', '<p>Why wait until Valentine&rsquo;s Day? &nbsp;Write a love note to your loved one &ndash; a personal way to show how much you care.</p>', '1', '2016-07-22 09:35:48', '2016-07-22 09:35:48', '2016-07-22 09:35:48', 1, 0, 1, NULL, NULL),
(12, 'Tip 5', 'tip-5', 'tip-5', '', '3', '2016-07-22 09:36:18', '2016-07-22 09:36:18', '2016-07-22 09:36:18', 1, 0, 1, NULL, NULL),
(13, 'Tip 6', 'tip-6', 'tip-6', '<p>Stay connected during family vacations and send postcards to loved ones so they know you were thinking of them and sharing your vacation memories</p>', '1', '2016-07-22 09:36:58', '2016-07-22 09:36:58', '2016-07-22 09:36:58', 1, 0, 1, NULL, NULL),
(14, 'Tip 6', 'tip-6', 'tip-6', '', '3', '2016-07-22 09:37:44', '2016-07-22 09:37:44', '2016-07-22 09:37:44', 1, 0, 1, NULL, NULL),
(15, 'Tip 7', 'tip-7', 'tip-7', '<p>Start a diary or journal to record memorable occasions. Try and write daily about little anecdotes about your day&nbsp;</p>', '1', '2016-07-22 09:39:44', '2016-07-22 09:39:44', '2016-07-22 09:39:44', 1, 0, 1, NULL, NULL),
(16, 'Tip 7', 'tip-7', 'tip-7', '', '3', '2016-07-22 09:40:58', '2016-07-22 09:40:58', '2016-07-22 09:40:58', 1, 0, 1, NULL, NULL),
(17, 'Tip 8', 'tip-8', 'tip-8', '<p>Keep a pen and pad of paper by your bed at night. Write down any ideas you have through the night so you can clear your mind and have restful, worry-free sleep</p>', '1', '2016-07-22 09:41:47', '2016-07-22 09:41:47', '2016-07-22 09:41:47', 1, 0, 1, NULL, NULL),
(18, 'Tip 8', 'tip-8', 'tip-8', '', '3', '2016-07-22 09:43:23', '2016-07-22 09:43:23', '2016-07-22 09:43:23', 1, 0, 1, NULL, NULL),
(19, 'Tip 9', 'tip-9', 'tip-9', '<p>Set aside specific times during the week for writing stories, songs or even jokes. Let your kids use their imaginations.</p>', '1', '2016-07-22 09:44:06', '2016-07-22 09:44:06', '2016-07-22 09:44:06', 1, 0, 1, NULL, NULL),
(20, 'Tip 9', 'tip-9', 'tip-9', '', '3', '2016-07-22 09:45:33', '2016-07-22 09:45:33', '2016-07-22 09:45:33', 1, 0, 1, NULL, NULL),
(21, 'Tip 10', 'tip-10', 'tip-10', '<p>Have an assortment of colorful pens, pencils and markers on hand that will make kids want to spend more time writing.</p>', '1', '2016-07-22 09:47:27', '2016-07-22 09:47:27', '2016-07-22 09:47:27', 1, 0, 1, NULL, NULL),
(22, 'Tip 10', 'tip-10', 'tip-10', '', '3', '2016-07-22 09:49:16', '2016-07-22 09:49:16', '2016-07-22 09:49:16', 1, 0, 1, NULL, NULL),
(23, 'Tip 11', 'tip-11', 'tip-11', '<p>Make writing special for kids with their own personal table, desk, or designated area. Get them excited about their own writing space!</p>', '1', '2016-07-22 09:50:06', '2016-07-22 09:50:06', '2016-07-22 09:50:06', 1, 0, 1, NULL, NULL),
(24, 'Tip 11', 'tip-11', 'tip-11', '', '3', '2016-07-22 09:50:58', '2016-07-22 09:50:58', '2016-07-22 09:50:58', 1, 0, 1, NULL, NULL),
(25, 'Tip 12', 'tip-12', 'tip-12', '<p>Give kids a fun assignment that requires them to write. Make a birthday wish list or write a letter to someone famous.</p>', '1', '2016-07-22 09:52:01', '2016-07-22 09:52:01', '2016-07-22 09:52:01', 1, 0, 1, NULL, NULL),
(26, 'Tip 12', 'tip-12', 'tip-12', '', '3', '2016-07-22 09:54:14', '2016-07-22 09:54:14', '2016-07-22 09:54:14', 1, 0, 1, NULL, NULL),
(27, 'Tip 13', 'tip-13', 'tip-13', '<p>Make up games around writing. Have your kids practice signing their autographs to give to mom or dad.&nbsp;</p>', '1', '2016-07-22 09:55:19', '2016-07-22 09:55:19', '2016-07-22 09:55:19', 1, 0, 1, NULL, NULL),
(28, 'Tip 13', 'tip-13', 'tip-13', '', '3', '2016-07-22 09:56:39', '2016-07-22 09:56:39', '2016-07-22 09:56:39', 1, 0, 1, NULL, NULL),
(29, 'Tip 14', 'tip-14', 'tip-14', '<p>Create a handwritten list to keep track of all the exciting stuff you want to accomplish in life! &nbsp;Encourage family members to add to the list.</p>', '1', '2016-07-22 09:59:27', '2016-07-22 09:59:27', '2016-07-22 09:59:27', 1, 0, 1, NULL, NULL),
(30, 'Tip 14', 'tip-14', 'tip-14', '', '3', '2016-07-22 10:01:23', '2016-07-22 10:01:23', '2016-07-22 10:01:23', 1, 0, 1, NULL, NULL),
(31, 'Browser Outdated', 'out-date-browser', 'out-date-browser', '<p>It looks like your browser is outdated. To access this site, you need to use one of the following browsers:</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Internet Explorer&reg; 9 or higher</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Firefox&reg; 35 or higher</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Google&reg; Chrome 40 or higher</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Opera&reg; 12.14 or higher</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Apple&reg; Safari&trade; 6 or higher (Mac)</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>Please consider upgrading your browser.</p>', '1', '2016-07-24 12:41:16', '2016-07-24 12:41:16', '2016-07-24 12:41:16', 1, 0, 1, NULL, NULL),
(32, 'Version du navigateur obsolète', 'out-date-browser', 'out-date-browser', '<p>Il semble que votre navigateur ne soit plus &agrave; jour. Pour acc&eacute;der &agrave; ce site, vous devez utiliser l&rsquo;une des versions de navigateur suivantes :</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Internet Explorer&reg; 9 ou version plus r&eacute;cente</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Firefox&reg; 35 ou version plus r&eacute;cente</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Google&reg; Chrome 40 ou version plus r&eacute;cente</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Opera&reg; 12.14 ou version plus r&eacute;cente</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Apple&reg; Safari&trade; 6 ou version plus r&eacute;cente (Mac)</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>Veuillez envisager de mettre votre navigateur &agrave; niveau.</p>', '3', '2016-07-24 12:41:59', '2016-07-24 12:41:59', '2016-07-24 12:41:59', 1, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bic_ffyw_user`
--

CREATE TABLE IF NOT EXISTS `bic_ffyw_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `building_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `published_at` datetime DEFAULT NULL,
  `creator_id` int(11) NOT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  `is_enabled` tinyint(1) DEFAULT '1',
  `ordering_weight` int(11) DEFAULT NULL,
  `params` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bic_ffyw_user`
--

INSERT INTO `bic_ffyw_user` (`id`, `username`, `email`, `first_name`, `last_name`, `profile_id`, `parent_id`, `level`, `password_hash`, `password_reset_token`, `auth_key`, `status`, `building_id`, `created_at`, `updated_at`, `published_at`, `creator_id`, `is_deleted`, `is_enabled`, `ordering_weight`, `params`) VALUES
(1, 'appadmin', 'contact@enpii.com', 'Enpii', 'Admin', NULL, NULL, NULL, '$2y$13$bs9XPVS9wth5vcQxiv0IXOMET60X39gr6WUubJzw.ydQgmIZKW23O', NULL, 'ukkBCCR5w1lCp-L42o_cw7SLf-HwfiYr', 10, NULL, '2016-07-18 23:44:24', '0000-00-00 00:00:00', NULL, 0, 0, 1, NULL, NULL),
(2, 'johndoe', 'johndoe@enpii.com', 'John', 'Doe', NULL, NULL, NULL, '$2y$13$Nk8kBeUMmOJmxF1p8rEqeOb6ORCMLtUm/it66p3/RBSOpSum7SZse', NULL, 'caOYp4Od-9kE41I_ESEk7C3EN_2yc2Ma', 10, NULL, '2016-07-18 23:44:25', '0000-00-00 00:00:00', NULL, 0, 0, 1, NULL, NULL),
(3, 'npbtrac@yahoo.com', 'npbtrac@yahoo.com', 'test f', 'Test 2', 1, NULL, NULL, '', NULL, 'z-aGfy1X5EDL79cf_-yZxEicrsONfS_9', 10, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-07-18 16:47:33', 1, 0, 1, NULL, NULL),
(4, 'j.bastawrous@gmail.com', 'j.bastawrous@gmail.com', 'j', 'b', 2, NULL, NULL, '', NULL, 'WX18aKE7uDPBKHcXevei_hlGK-4E7gIC', 10, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-07-18 23:13:06', 1, 0, 1, NULL, NULL),
(5, 'j@gmail.com', 'j@gmail.com', 'dsa', 'dsa', 3, NULL, NULL, '', NULL, 'ZMttY2A7x9dngqhkLsjy2PvdY7VVr7ji', 10, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-07-18 23:14:10', 1, 0, 1, NULL, NULL),
(6, 'dsasa@gmail.com', 'dsasa@gmail.com', 'a', 'd', 4, NULL, NULL, '', NULL, 'rmGQOlxpPvf10yvo7j8YobX_JHBhEA6S', 10, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-07-18 23:15:49', 1, 0, 1, NULL, NULL),
(7, 'test@test.com', 'test@test.com', 'Petra', 'Simpson', 5, NULL, NULL, '', NULL, 'sBlE14LWNT722AShE2nrn03fj6AH3WeN', 10, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-07-19 01:20:58', 1, 0, 1, NULL, NULL),
(8, 'psimpson@metropolis.ca', 'psimpson@metropolis.ca', 'Petra', 'Simpson', 6, NULL, NULL, '', NULL, 'NJEzh1L2rrp-twIGYgPeg-DDGcfvon68', 10, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-07-19 01:25:35', 1, 0, 1, NULL, NULL),
(9, 'pthanhlac@gmail.com', 'pthanhlac@gmail.com', 'Peter', 'Pham', 7, NULL, NULL, '', NULL, 'ArNahtSVWi7X4dc_ks66Y55bKfFDiV6u', 10, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-07-19 03:28:51', 1, 0, 1, NULL, NULL),
(10, 'pthanhlac2@gmail.com', 'pthanhlac2@gmail.com', 'Peter', 'P', 8, NULL, NULL, '', NULL, 'S1yW8xuSzVhR1CzC409p1d4gjw1zV_pl', 10, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-07-19 03:32:00', 1, 0, 1, NULL, NULL),
(11, 'pthanhlac3@gmail.com', 'pthanhlac3@gmail.com', 'Peter', 'P', 9, NULL, NULL, '', NULL, 'OJoYyp4-8YSt9KMx1vFeAkec8LRY8OO1', 10, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-07-19 03:33:19', 1, 0, 1, NULL, NULL),
(12, 'john.bastawrous@matchmg.com', 'john.bastawrous@matchmg.com', 'John', 'Bastawrous', 10, NULL, NULL, '$2y$13$SNzcnFUjYjYmrodexD/KyuuFz5wwFZvGGhQRabS.0dgh5K630aHEu', NULL, 'uLxN3H6U70xOSLaCblKS8krERUeaMBOg', 10, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-07-22 04:06:15', 1, 0, 1, NULL, NULL),
(13, 'Stephanie.Ledda-Chan@matchmg.com', 'Stephanie.Ledda-Chan@matchmg.com', 'Stephanie', 'Ledda-Chan', 11, NULL, NULL, '$2y$13$6XENEnDFdxwRDMwxFBAIlO/5SXbM9zLbFnpOPV8DrfYhKIYwefLDO', NULL, 'QFIlYxefCHIzn3K7ZzeblGAuS7GRzEdI', 10, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-07-22 04:09:00', 1, 0, 1, NULL, NULL),
(14, 'Michael.Jones@matchmg.com', 'Michael.Jones@matchmg.com', 'Michael', 'Jones', 12, NULL, NULL, '$2y$13$UiK7oSQdmn.gbPsXk3iIt.ceiBURLZH2Lmv2bEEfeS5bSFmXf2fWq', NULL, '5gXn7FT2YG3PH0NO26DcZTzN2zdDO6BG', 10, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-07-22 04:10:24', 1, 0, 1, NULL, NULL),
(15, 'kharding@metropolis.ca', 'kharding@metropolis.ca', 'kharding', 'kharding', 13, NULL, NULL, '$2y$13$YyP6vkefKlOOvPcy2ztYqe0OPJxvK5LU3tECcKOdPHBBbhtxMknsm', NULL, 'rOMG-oi50nemwDs-7JR6QzFjLx8ITi0-', 10, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-07-22 04:12:24', 1, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bic_ffyw_user_profile`
--

CREATE TABLE IF NOT EXISTS `bic_ffyw_user_profile` (
  `id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `united` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `parent_first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bic_ffyw_user_profile`
--

INSERT INTO `bic_ffyw_user_profile` (`id`, `address`, `city`, `street`, `province`, `post_code`, `phone_number`, `united`, `date_of_birth`, `parent_first_name`, `parent_last_name`) VALUES
(1, NULL, NULL, NULL, 'New Brunswick', NULL, '9715332904', NULL, '1993-03-04 00:00:00', 'test f', 'Test 2'),
(2, NULL, NULL, NULL, 'Ontario', NULL, '4166666666', NULL, '1991-12-13 00:00:00', 'j', 'b'),
(3, NULL, NULL, NULL, 'Ontario', NULL, '4166665555', NULL, '1944-01-02 00:00:00', 'dsa', 'dsa'),
(4, NULL, NULL, NULL, 'Alberta', NULL, '4165555555', NULL, '1907-03-01 00:00:00', 'a', 'd'),
(5, NULL, NULL, NULL, 'Ontario', NULL, '6475172821', NULL, '1987-11-14 00:00:00', 'Petra', 'Simpson'),
(6, NULL, NULL, NULL, 'Ontario', NULL, '6475172820', NULL, '1987-11-14 00:00:00', 'Petra', 'Simpson'),
(7, NULL, NULL, NULL, 'Manitoba', NULL, '0919231222', NULL, '1908-01-02 00:00:00', 'Peter', 'Pham'),
(8, NULL, NULL, NULL, 'Manitoba', NULL, '0919231222', NULL, '1908-01-02 00:00:00', 'Peter', 'P'),
(9, NULL, NULL, NULL, 'Manitoba', NULL, '0919231222', NULL, '1908-01-02 00:00:00', 'Peter', 'P'),
(10, NULL, NULL, NULL, NULL, NULL, '', NULL, '2016-07-22 00:00:00', NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, '', NULL, '2016-07-22 00:00:00', NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, '', NULL, '2016-07-22 00:00:00', NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, '', NULL, '2016-07-22 00:00:00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bic_ffyw_attachment`
--
ALTER TABLE `bic_ffyw_attachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bic_ffyw_auth_assignment`
--
ALTER TABLE `bic_ffyw_auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `bic_ffyw_auth_item`
--
ALTER TABLE `bic_ffyw_auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `bic_ffyw_auth_item_child`
--
ALTER TABLE `bic_ffyw_auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `bic_ffyw_auth_rule`
--
ALTER TABLE `bic_ffyw_auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `bic_ffyw_code_block_item`
--
ALTER TABLE `bic_ffyw_code_block_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bic_ffyw_contest_item`
--
ALTER TABLE `bic_ffyw_contest_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ContestItem_Attachment` (`attachment_id`);

--
-- Indexes for table `bic_ffyw_contest_session`
--
ALTER TABLE `bic_ffyw_contest_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IX_bic_ffyw_contest_session578d07698eef9_created_at` (`created_at`),
  ADD KEY `IX_bic_ffyw_contest_session578d076991fd2_updated_at` (`updated_at`),
  ADD KEY `IX_bic_ffyw_contest_session578d076994e52_published_at` (`published_at`),
  ADD KEY `IX_bic_ffyw_contest_session578d07699795f_creator_id` (`creator_id`),
  ADD KEY `IX_bic_ffyw_contest_session578d076999fef_is_deleted` (`is_deleted`),
  ADD KEY `IX_bic_ffyw_contest_session578d07699c441_is_enabled` (`is_enabled`),
  ADD KEY `FK_ContestSession_ContestSessionItem_ID` (`contest_item_id`),
  ADD KEY `FK_ContestSession_User_ID` (`user_id`),
  ADD KEY `FK_ContestSession_Attachment_ID` (`attachment_id`);

--
-- Indexes for table `bic_ffyw_locale`
--
ALTER TABLE `bic_ffyw_locale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bic_ffyw_migration`
--
ALTER TABLE `bic_ffyw_migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `bic_ffyw_page_item`
--
ALTER TABLE `bic_ffyw_page_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IX_bic_ffyw_page_item578d0769a5b2e_created_at` (`created_at`),
  ADD KEY `IX_bic_ffyw_page_item578d0769a8ac0_updated_at` (`updated_at`),
  ADD KEY `IX_bic_ffyw_page_item578d0769ac571_published_at` (`published_at`),
  ADD KEY `IX_bic_ffyw_page_item578d0769af1b6_creator_id` (`creator_id`),
  ADD KEY `IX_bic_ffyw_page_item578d0769b2069_is_deleted` (`is_deleted`),
  ADD KEY `IX_bic_ffyw_page_item578d0769b4b36_is_enabled` (`is_enabled`);

--
-- Indexes for table `bic_ffyw_user`
--
ALTER TABLE `bic_ffyw_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `IX_bic_ffyw_user578d07680dfe4_created_at` (`created_at`),
  ADD KEY `IX_bic_ffyw_user578d076811253_updated_at` (`updated_at`),
  ADD KEY `IX_bic_ffyw_user578d07681354a_published_at` (`published_at`),
  ADD KEY `IX_bic_ffyw_user578d076816736_creator_id` (`creator_id`),
  ADD KEY `IX_bic_ffyw_user578d07681968c_is_deleted` (`is_deleted`),
  ADD KEY `IX_bic_ffyw_user578d07681c0af_is_enabled` (`is_enabled`),
  ADD KEY `IX_bic_ffyw_user578d07681f838_username` (`username`),
  ADD KEY `IX_bic_ffyw_user578d0768222f8_email` (`email`),
  ADD KEY `IX_bic_ffyw_user578d076825308_profile_id` (`profile_id`),
  ADD KEY `IX_bic_ffyw_user578d0768281d2_parent_id` (`parent_id`),
  ADD KEY `IX_bic_ffyw_user578d07682b0cf_level` (`level`);

--
-- Indexes for table `bic_ffyw_user_profile`
--
ALTER TABLE `bic_ffyw_user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bic_ffyw_attachment`
--
ALTER TABLE `bic_ffyw_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `bic_ffyw_code_block_item`
--
ALTER TABLE `bic_ffyw_code_block_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bic_ffyw_contest_item`
--
ALTER TABLE `bic_ffyw_contest_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `bic_ffyw_contest_session`
--
ALTER TABLE `bic_ffyw_contest_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `bic_ffyw_locale`
--
ALTER TABLE `bic_ffyw_locale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bic_ffyw_page_item`
--
ALTER TABLE `bic_ffyw_page_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `bic_ffyw_user`
--
ALTER TABLE `bic_ffyw_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `bic_ffyw_user_profile`
--
ALTER TABLE `bic_ffyw_user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bic_ffyw_auth_assignment`
--
ALTER TABLE `bic_ffyw_auth_assignment`
  ADD CONSTRAINT `bic_ffyw_auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `bic_ffyw_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bic_ffyw_auth_item`
--
ALTER TABLE `bic_ffyw_auth_item`
  ADD CONSTRAINT `bic_ffyw_auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `bic_ffyw_auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `bic_ffyw_auth_item_child`
--
ALTER TABLE `bic_ffyw_auth_item_child`
  ADD CONSTRAINT `bic_ffyw_auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `bic_ffyw_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bic_ffyw_auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `bic_ffyw_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bic_ffyw_contest_item`
--
ALTER TABLE `bic_ffyw_contest_item`
  ADD CONSTRAINT `FK_ContestItem_Attachment` FOREIGN KEY (`attachment_id`) REFERENCES `bic_ffyw_attachment` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bic_ffyw_contest_session`
--
ALTER TABLE `bic_ffyw_contest_session`
  ADD CONSTRAINT `FK_ContestSession_Attachment_ID` FOREIGN KEY (`attachment_id`) REFERENCES `bic_ffyw_attachment` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ContestSession_ContestSessionItem_ID` FOREIGN KEY (`contest_item_id`) REFERENCES `bic_ffyw_contest_item` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ContestSession_User_ID` FOREIGN KEY (`user_id`) REFERENCES `bic_ffyw_user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `bic_ffyw_user`
--
ALTER TABLE `bic_ffyw_user`
  ADD CONSTRAINT `FK_User_UserProfile_ID` FOREIGN KEY (`profile_id`) REFERENCES `bic_ffyw_user_profile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
