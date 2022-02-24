-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022 年 2 月 24 日 11:40
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `studyself`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `studyselflogin`
--

CREATE TABLE `studyselflogin` (
  `id` int(11) NOT NULL,
  `field1` varchar(128) COLLATE utf8mb4_bin DEFAULT NULL,
  `field2` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `field3` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `field4` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `identify` varchar(5) COLLATE utf8mb4_bin NOT NULL,
  `is_deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `studyselflogin`
--

INSERT INTO `studyselflogin` (`id`, `field1`, `field2`, `field3`, `field4`, `identify`, `is_deleted`) VALUES
(1, NULL, 'afjafjaifjia@ioajfakof', 'aokfoakfokafokaofkaofkoakoakfo', 'primary_school', '積極型', 0),
(2, NULL, 'afjafjaifjia@ioajfakof', 'aokfoakfoakfokaofkaokfoakfoaf', 'primary_school', '積極型', 0),
(3, NULL, 'afjafjaifjia@ioajfakof', 'kokokaokfoakfoakofkaofkoakfoakfo', 'primary_school', '積極型', 0),
(4, NULL, 'afjafjaifjia@ioajfakof', 'dkoakofkaofkoakfoakfoakofkaf', 'primary_school', '積極型', 0),
(5, NULL, 'afjafjaifjia@ioajfakof', 'oaskofkaokofkaofkoakfoakfoakofa', 'primary_school', '積極型', 0),
(6, NULL, 'afjafjaifjia@ioajfakof', 'oaskoafkfoakofkaofkaofkaokfoakfoakf', 'primary_school', '積極型', 0),
(7, NULL, 'afjafjaifjia@ioajfakof', 'afafafaokgoakokaofkaokfoa', 'primary_school', '積極型', 0),
(8, NULL, 'afokaofkaofkao@oakfoakof', 'afokaofkaofkaofkaof', 'university', '保守型', 0),
(9, NULL, 'afokaofkaofkao@oakfoakof', 'kaokoakfoakfokafka', 'university', '保守型', 0),
(10, NULL, 'afokaofkaofkao@oakfoakof', 'afaffkokoko', 'high_school', '保守型', 0),
(11, NULL, 'afokaofkaof@aokfaofka', 'afokaofkaofkaofkoaf', 'before_primary_school', '保守型', 0),
(12, NULL, 'afakfmafkalkf@oakofkao', 'afafakfakljfklajlafafa', 'high_school', '保守型', 0),
(13, NULL, 'agafafafafa@afafaf', 'afafafafaf', 'junior_high_school', '保守型', 0),
(14, NULL, 'Soakfokafo@oakofkaof', 'afokaofkaofkoakfoakf', 'society', '保守型', 0),
(15, NULL, 'aokofkaokfa@aoakofakf', 'aofkaofkaokoakoakdoakf', 'technical_school', '保守型', 0),
(16, NULL, 'oakdokad@aodkaofk', 'aofkoakfoakofkaofkaofkaofka', 'university', '保守型', 0),
(17, NULL, 'afafafa@afafaavffa', 'afaofkaokfoakofkoakfoakoa', 'high_school', '保守型', 0),
(18, NULL, 'kokokokk@okokoko.bomo', 'kokokokokokokkokokokok', 'university', '保守型', 0),
(19, NULL, 'afafafaf@afoakfoakfo', 'afoakfoakofkaokfaokfoakfa', 'university', '保守型', 0),
(20, NULL, 'afafafafa@afafa', 'afoakgoakgokaofkaokoakofa', 'before_primary_school', '保守型', 0),
(21, NULL, 'afokaofkaofkaf@aokfaokfoa', 'afokaofkaofkoakfoakfoakfoa', 'before_primary_school', '保守型', 0),
(22, NULL, 'sm1889nak@icloud.com', 'S.m.1889.nak', 'university', '保守型', 0),
(23, NULL, 'afoakfoaokaof@aokfoakfoa', 'agaokgoakgoakgoakgoakgoakgoga', 'junior_high_school', '保守型', 0),
(24, NULL, 'afaifjaijfiapafoiaofkafa@afakofakfo', 'afaifjafkaofkaokfaokfoakaf', 'before_primary_school', '保守型', 0),
(25, NULL, 'aefwaeaf@afoakfoakfoaaeaw', 'afafakdfakdlfkalkfdafdasdf', 'before_primary_school', '保守型', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `studyselfnote`
--

CREATE TABLE `studyselfnote` (
  `id` int(12) NOT NULL,
  `notename` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `usepurpose` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `noteindex` longtext COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `studyselfnote`
--

INSERT INTO `studyselfnote` (`id`, `notename`, `usepurpose`, `noteindex`, `created_at`, `updated_at`) VALUES
(44, '国語', 'memorize', NULL, '2022-02-19 16:47:32', '2022-02-23 22:50:43'),
(45, 'aaaa43', 'memorize', NULL, '2022-02-19 16:56:51', '2022-02-21 12:48:52'),
(46, '国語43', 'memorize', NULL, '2022-02-19 17:01:13', '2022-02-19 17:01:19'),
(47, 'aokaokao', 'memorize', NULL, '2022-02-19 17:08:53', '2022-02-19 17:08:53'),
(48, 'aokaokao', 'memorize', NULL, '2022-02-19 17:09:12', '2022-02-19 17:09:12'),
(49, 'aaaa', 'memorize', NULL, '2022-02-21 12:33:29', '2022-02-21 12:33:29'),
(50, 'kokokoaaa', 'memorize', NULL, '2022-02-21 12:37:06', '2022-02-21 12:39:29'),
(51, 'fafafaaf', 'understand', 'Array', '2022-02-21 12:39:50', '2022-02-21 13:16:29'),
(52, 'afafafaf', 'memorize', NULL, '2022-02-21 13:16:51', '2022-02-21 13:19:16'),
(53, 'ここここｋ', 'memorize', NULL, '2022-02-23 22:46:57', '2022-02-23 22:46:57');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `studyselflogin`
--
ALTER TABLE `studyselflogin`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `studyselfnote`
--
ALTER TABLE `studyselfnote`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `studyselflogin`
--
ALTER TABLE `studyselflogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- テーブルの AUTO_INCREMENT `studyselfnote`
--
ALTER TABLE `studyselfnote`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
