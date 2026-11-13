


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasta`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `pastalist`
--
create database pasta;
use pasta;


CREATE TABLE `pastalist` (
  `code` varchar(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `gazou` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `cakelist`
--

INSERT INTO `pastalist` (`code`, `name`, `price`, `gazou`) VALUES
('F001', 'クリームパスタ', 700, 's1.jpg'),
('F002', '濃厚ナポリタン', 600, 's2.jpg'),
('F003', 'ナポリタン', 600, 's3.jpg'),
('F004', 'たらこクリーム', 1000, 's4.jpg'),
('F005', 'トマトクリーム', 500, 's5.jpg'),
('F006', '４種のチーズピザ', 1200, 'p1.jpg'),
('F007', 'ナスとトマトのピザ', 1200, 'p2.jpg'),
('F008', 'マルゲリータとチキンのハーフピザ', 1400, 'p3.jpg'),
('F009', '定番ミックスピザ', 1000, 'p4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pastalist`
--
ALTER TABLE `pastalist`
  ADD PRIMARY KEY (`code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
