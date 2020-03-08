-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 3 月 08 日 13:54
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `tangochou`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `tango_table`
--

CREATE TABLE `tango_table` (
  `id` int(12) NOT NULL,
  `omote` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ura` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `indate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `tango_table`
--

INSERT INTO `tango_table` (`id`, `omote`, `ura`, `indate`) VALUES
(1, 'spring', '春', '2020-02-29'),
(2, 'summer', '夏', '2020-02-29'),
(3, 'fall', '秋', '2020-03-05'),
(4, 'winter', '冬', '2020-02-29'),
(5, 'noon', '正午', '2020-02-29'),
(6, 'daytime', '昼間', '2020-02-29'),
(7, 'evening', '夕方', '2020-02-29'),
(8, 'night', '夜', '2020-02-29'),
(9, 'morning', '朝', '2020-03-05'),
(27, 'delete', '削除', '2020-03-07');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `tango_table`
--
ALTER TABLE `tango_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `tango_table`
--
ALTER TABLE `tango_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
