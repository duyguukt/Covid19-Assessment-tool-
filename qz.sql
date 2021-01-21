-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Ara 2020, 12:51:00
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `qz`
--

-- --------------------------------------------------------
-- Tablo için tablo yapısı `admin`
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Tablo döküm verisi `admin`

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'sahikaduygu@gmail.com', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `qno` int(11) NOT NULL,
  `question` text NOT NULL,
  `ans1` text NOT NULL,
  `ans2` text NOT NULL,
  `ans3` text NOT NULL,
  `ans4` text NOT NULL,
  `correct_answer` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `questions`
--

INSERT INTO `questions` (`qid`, `qno`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_answer`) VALUES
(9, 5, 'What is a correct way to add a comment in PHP?', '&lt;!--&hellip;--&gt;^22', '/*&hellip;*/^43', '*\\..\\*^45', '&lt;comment&gt;&hellip;&lt;/comment&gt^5', 39),
(8, 3, 'The PHP syntax is most similar to:', 'Perl and C^2', 'VBscript^2', 'Javascript^7', 'none of these^90', 22),
(7, 2, 'How do you write \"Hello World\" in PHP', 'echo \"Hello World^22', 'Document.Write(\"Hello World^6', '\"Hello Worl^4', 'none of these^100', 67),
(6, 1, 'What does PHP stand for?', 'Personal Hypertext Processor^20\r\n', 'Private Home Page^30', 'Personal Home Page^6', 'PHP: Hypertext Preprocessor^4', 87),
(5, 4, 'How do you get information from a form that is submitted using the &quot;get&quot; method?', '$_GET[];^2', 'Request.Form;^3', 'Request.QueryString;^8', 'none of these^67', 52),
(10, 6, 'When using the POST method, variables are displayed in the URL:', 'True^44', 'False^25', 'Can	 say^5', 'none of these^44', 44),
(11, 7, ' Which of the following function is used to get the size of a file?', 'fopen(^1', 'fread()^7', 'fsize(^7', 'filesize()^2', 33),
(12, 8, 'Which of the following is used to delete a cookie?', 'setcookie()^2', '$_COOKIE variable^2', 'isset() function^4', 'none of the above^3', 32);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `played_on` varchar(225) NOT NULL,
  `datas` int(11) NOT NULL DEFAULT 0,
  `userPassword` varchar(50) DEFAULT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `userSurname` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `email`, `played_on`, `datas`, `userPassword`, `userName`, `userSurname`) VALUES
(80, 'a', '2017-07-31 06:58:18', 0, '123', NULL, NULL),
(81, 'duyguktpci@gmail.com', '2020-12-15 11:28:59', 109, NULL, NULL, NULL),
(82, 'p@gmail.com', '2020-12-10 18:28:30', 245, NULL, NULL, NULL),
(83, 'duygusakika.kitapci@pru.edu.tr', '2020-12-10 18:32:16', 116, NULL, NULL, NULL),
(84, 'sahikaduygu@gmail.com', '2020-12-15 11:11:18', 173, NULL, NULL, NULL),
(85, 'duygufotr@gmail.com', '2020-12-15 11:21:30', 120, NULL, NULL, NULL),
(86, 'duygufot@gmail.com', '2020-12-15 11:31:00', 111, NULL, NULL, NULL),
(87, 'ss@gmail.com', '2020-12-15 11:42:03', 138, NULL, NULL, NULL),
(88, 'r@gmail.com', '2020-12-15 11:47:55', 57, NULL, NULL, NULL),
(89, 'd.kitapci@pru.edu.tr', '2020-12-15 12:19:57', 72, NULL, NULL, NULL),
(90, 'duygufot@gmail.com', '2020-12-15 15:32:02', 111, NULL, NULL, NULL),
(91, 'sahikaduygu@gmail.com', '2020-12-15 15:33:13', 173, NULL, NULL, NULL),
(92, 'i@gmail.com', '2020-12-15 15:43:27', 242, '123', NULL, NULL),
(93, 'kaan@gmail.com', '2020-12-19 11:21:00', 312, '123', NULL, NULL),
(98, 'massakaan@gmail.com', '', 295, '123', 'Kaan', '?engül');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
