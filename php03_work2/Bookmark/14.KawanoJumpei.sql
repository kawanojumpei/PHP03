-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2020 年 10 月 25 日 05:55
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `gs_php02`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` text NOT NULL,
  `comment` text NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `url`, `comment`, `indate`) VALUES
(1, 'ブルーロック', 'https://www.amazon.co.jp/%E3%83%96%E3%83%AB%E3%83%BC%E3%83%AD%E3%83%83%E3%82%AF%EF%BC%88%EF%BC%91%EF%BC%91%EF%BC%89-%E9%80%B1%E5%88%8A%E5%B0%91%E5%B9%B4%E3%83%9E%E3%82%AC%E3%82%B8%E3%83%B3%E3%82%B3%E3%83%9F%E3%83%83%E3%82%AF%E3%82%B9-%E9%87%91%E5%9F%8E%E5%AE%97%E5%B9%B8-ebook/dp/B08KQ5NKCR/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&amp;dchild=1&amp;keywords=%E3%83%96%E3%83%AB%E3%83%BC%E3%83%AD%E3%83%83%E3%82%AF&amp;qid=1602927589&amp;sr=8-1', '面白いっす', '2020-10-25 14:48:25'),
(4, '五等分の花嫁', 'https://www.amazon.co.jp/%E4%BA%94%E7%AD%89%E5%88%86%E3%81%AE%E8%8A%B1%E5%AB%81-%E3%83%95%E3%83%AB%E3%82%AB%E3%83%A9%E3%83%BC%E7%89%88%EF%BC%88%EF%BC%91%EF%BC%89-%E9%80%B1%E5%88%8A%E5%B0%91%E5%B9%B4%E3%83%9E%E3%82%AC%E3%82%B8%E3%83%B3%E3%82%B3%E3%83%9F%E3%83%83%E3%82%AF%E3%82%B9-%E6%98%A5%E5%A0%B4%E3%81%AD%E3%81%8E-ebook/dp/B086SSNHQZ/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&dchild=1&keywords=%E3%81%94%E5%BD%93%E5%88%86%E3%81%AE%E8%8A%B1%E3%82%88%E3%82%81+kindle&qid=1603002797&sr=8-1', 'ただただ可愛い。私は三玖が好きです。', '2020-10-18 15:35:21'),
(5, 'ブルージャイアント', 'https://www.amazon.co.jp/BLUE-GIANT%EF%BC%88%EF%BC%91%EF%BC%89-%E3%83%93%E3%83%83%E3%82%B0%E3%82%B3%E3%83%9F%E3%83%83%E3%82%AF%E3%82%B9-%E7%9F%B3%E5%A1%9A%E7%9C%9F%E4%B8%80-ebook/dp/B00GSMDY48/ref=sr_1_2?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&amp;dchild=1&amp;keywords=%E3%83%96%E3%83%AB%E3%83%BC%E3%82%B8%E3%83%A3%E3%82%A4%E3%82%A2%E3%83%B3%E3%83%88&amp;qid=1603003063&amp;sr=8-2', 'ダイの世界一のジャズプレーヤーになるという夢への挑戦が激アツです！です！', '2020-10-25 14:29:24'),
(6, 'ブルーピリオド', 'https://www.amazon.co.jp/%E3%83%96%E3%83%AB%E3%83%BC%E3%83%94%E3%83%AA%E3%82%AA%E3%83%89%EF%BC%88%EF%BC%91%EF%BC%89-%E3%82%A2%E3%83%95%E3%82%BF%E3%83%8C%E3%83%BC%E3%83%B3%E3%82%B3%E3%83%9F%E3%83%83%E3%82%AF%E3%82%B9-%E5%B1%B1%E5%8F%A3%E3%81%A4%E3%81%B0%E3%81%95-ebook/dp/B07873642C/ref=sr_1_2?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&amp;dchild=1&amp;keywords=%E3%83%96%E3%83%AB%E3%83%BC%E3%83%94%E3%83%AA%E3%82%AA%E3%83%89&amp;qid=1603003119&amp;sr=8-2', '東京芸大を目指して絵に目覚める主人公の努力・苦悩をめぐるのが非常に面白い。楽しい。', '2020-10-25 14:48:16'),
(8, 'テスト', 'テスト', 'テスト', '2020-10-25 14:54:44');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;