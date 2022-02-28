-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 21-06-10 10:17
-- 서버 버전: 10.3.22-MariaDB
-- PHP 버전: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `shop11`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `jumun`
--

CREATE TABLE `jumun` (
  `no11` char(10) NOT NULL,
  `member_no11` int(11) DEFAULT NULL,
  `jumunday11` date DEFAULT NULL,
  `product_names11` varchar(255) DEFAULT NULL,
  `product_nums11` int(11) DEFAULT NULL,
  `o_name11` varchar(20) DEFAULT NULL,
  `o_tel11` varchar(11) DEFAULT NULL,
  `o_phone11` varchar(11) DEFAULT NULL,
  `o_email11` varchar(40) DEFAULT NULL,
  `o_zip11` varchar(5) DEFAULT NULL,
  `o_juso11` varchar(100) DEFAULT NULL,
  `r_name11` varchar(20) DEFAULT NULL,
  `r_tel11` varchar(11) DEFAULT NULL,
  `r_phone11` varchar(11) DEFAULT NULL,
  `r_email11` varchar(40) DEFAULT NULL,
  `r_zip11` varchar(5) DEFAULT NULL,
  `r_juso11` varchar(100) DEFAULT NULL,
  `memo11` varchar(255) DEFAULT NULL,
  `pay_method11` tinyint(4) DEFAULT NULL,
  `card_okno11` varchar(10) DEFAULT NULL,
  `card_halbu11` tinyint(4) DEFAULT NULL,
  `card_kind11` tinyint(4) DEFAULT NULL,
  `bank_kind11` tinyint(4) DEFAULT NULL,
  `bank_sender11` varchar(30) DEFAULT NULL,
  `total_cash11` int(11) DEFAULT NULL,
  `state11` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `jumuns`
--

CREATE TABLE `jumuns` (
  `no11` int(11) NOT NULL,
  `jumun_no11` char(10) DEFAULT NULL,
  `product_no11` int(11) DEFAULT NULL,
  `num11` int(11) DEFAULT NULL,
  `price11` int(11) DEFAULT NULL,
  `cash11` int(11) DEFAULT NULL,
  `discount11` tinyint(4) DEFAULT NULL,
  `opts1_no11` int(11) DEFAULT NULL,
  `opts2_no11` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `no11` int(11) NOT NULL,
  `uid11` varchar(20) DEFAULT NULL,
  `pwd11` varchar(20) DEFAULT NULL,
  `name11` varchar(20) DEFAULT NULL,
  `birthday11` date DEFAULT NULL,
  `sm11` tinyint(4) DEFAULT 0,
  `tel11` varchar(11) DEFAULT NULL,
  `phone11` varchar(11) DEFAULT NULL,
  `email11` varchar(40) DEFAULT NULL,
  `zip11` varchar(5) DEFAULT NULL,
  `juso11` varchar(100) DEFAULT NULL,
  `gubun11` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`no11`, `uid11`, `pwd11`, `name11`, `birthday11`, `sm11`, `tel11`, `phone11`, `email11`, `zip11`, `juso11`, `gubun11`) VALUES
(1, 'id1', '5678', '김만수', '1990-01-01', 0, '02 27516250', '01627516850', 'id1@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 1', 0),
(2, 'id2', '1234', '노호진', '1990-01-02', 1, '02 94828426', '01194828126', 'id2@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 2', 0),
(3, 'id3', '1234', '배국수', '1990-01-03', 0, '02 96039758', '01096039258', 'id3@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 3', 0),
(4, 'id4', '1234', '윤서진', '1990-01-04', 0, '02 91844099', '01091844399', 'id4@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 4', 0),
(5, 'id5', '1234', '방미주', '1990-01-05', 1, '02 99755951', '01099755351', 'id5@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 5', 0),
(6, 'id6', '1234', '고형진', '1990-01-06', 0, '02 66762295', '01166762495', 'id6@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 6', 0),
(7, 'id7', '1234', '이청자', '1990-01-07', 0, '02 94877737', '01094877537', 'id7@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 7', 0),
(8, 'id8', '1234', '강상석', '1990-01-08', 0, '02 97185378', '01197185378', 'id8@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 8', 0),
(9, 'id9', '1234', '임규준', '1990-01-09', 1, '02 73292001', '01073292701', 'id9@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 9', 0),
(10, 'id10', '1234', '김경준', '1990-01-10', 0, '02 90606074', '01190606874', 'id10@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 10', 0),
(11, 'id11', '1234', '양재하', '1990-01-11', 0, '02 89916973', '01089926173', 'id11@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 11', 0),
(12, 'id12', '1234', '김준석', '1990-01-12', 0, '02 64527732', '01064537232', 'id12@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 12', 0),
(13, 'id13', '1234', '이자중', '1990-01-13', 0, '02 64735207', '01064745307', 'id13@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 13', 0),
(14, 'id14', '1234', '김미래', '1990-01-13', 1, '02 47845553', '01047855453', 'id14@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 14', 0),
(15, 'id15', '1234', '황장호', '1990-01-15', 0, '02 98539069', '01098569569', 'id15@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 15', 0),
(16, 'id16', '1234', '원정현', '1990-01-16', 0, '02 97913309', '01697973609', 'id16@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 16', 0),
(17, 'id17', '1234', '김성현', '1990-01-17', 0, '02 71524586', '01071584786', 'id17@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 17', 0),
(18, 'id18', '1234', '윤다영', '1990-01-18', 0, '02 46634402', '01046694702', 'id18@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 18', 0),
(19, 'id19', '1234', '손양진', '1990-01-19', 1, '02 93041586', '01093001886', 'id19@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 19', 0),
(20, 'id20', '1234', '서지범', '1990-01-20', 0, '02 29655437', '01029917437', 'id20@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 20', 0),
(21, 'id21', '1234', '최고은', '1990-01-21', 0, '02 95969293', '01098929293', 'id21@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 21', 0),
(22, 'id22', '1234', '현자석', '1990-01-22', 0, '02 45575203', '01046535203', 'id22@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 22', 0),
(23, 'id23', '1234', '고미진', '1990-01-23', 0, '02 39089565', '01034049565', 'id23@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 23', 0),
(24, 'id24', '1234', '임양지', '1990-01-24', 0, '02 47491735', '01045451735', 'id24@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 24', 0),
(25, 'id25', '1234', '박조향', '1990-01-25', 0, '02 29712059', '01027762059', 'id25@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 25', 0),
(26, 'id26', '1234', '고망현', '1990-01-26', 1, '02 17321347', '01116371347', 'id26@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 26', 0),
(27, 'id27', '1234', '이당진', '1990-01-27', 0, '02 32334656', '01035384656', 'id27@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 27', 0),
(28, 'id28', '1234', '박지영', '1990-01-28', 0, '02 32543479', '01034593479', 'id28@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 28', 0),
(29, 'id29', '1234', '이영성', '1990-01-29', 0, '02 22253028', '01023213028', 'id29@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 29', 0),
(30, 'id30', '1234', '박자재', '1990-01-30', 0, '02035664503', '01032624503', 'id30@aaa.com', '13974', '서울 노원구 월계4동 산76 인덕대학 30', 0),

-- --------------------------------------------------------

--
-- 테이블 구조 `opt`
--

CREATE TABLE `opt` (
  `no11` int(11) NOT NULL,
  `name11` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `opts`
--

CREATE TABLE `opts` (
  `no11` int(11) NOT NULL,
  `opt_no11` int(11) DEFAULT NULL,
  `name11` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `product`
--

CREATE TABLE `product` (
  `no11` int(11) NOT NULL,
  `menu11` tinyint(4) DEFAULT NULL,
  `code11` varchar(20) DEFAULT NULL,
  `name11` varchar(255) DEFAULT NULL,
  `coname11` varchar(50) DEFAULT NULL,
  `price11` int(11) DEFAULT NULL,
  `opt1_11` int(11) DEFAULT NULL,
  `opt2_11` int(11) DEFAULT NULL,
  `contents11` text DEFAULT NULL,
  `status11` tinyint(4) DEFAULT NULL,
  `regday11` date DEFAULT NULL,
  `icon_new11` tinyint(4) DEFAULT NULL,
  `icon_hit11` tinyint(4) DEFAULT NULL,
  `icon_sale11` tinyint(4) DEFAULT NULL,
  `discount11` tinyint(4) DEFAULT NULL,
  `image1_11` varchar(255) DEFAULT NULL,
  `image2_11` varchar(255) DEFAULT NULL,
  `image3_11` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `qa`
--

CREATE TABLE `qa` (
  `no11` int(11) NOT NULL,
  `pos1_11` int(11) DEFAULT NULL,
  `pos2_11` varchar(20) DEFAULT NULL,
  `title11` varchar(100) DEFAULT NULL,
  `name11` varchar(20) DEFAULT NULL,
  `email11` varchar(50) DEFAULT NULL,
  `passwd11` varchar(20) DEFAULT NULL,
  `writeday11` date DEFAULT NULL,
  `count11` int(11) DEFAULT NULL,
  `ishtml11` tinyint(4) DEFAULT NULL,
  `contents11` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `jumun`
--
ALTER TABLE `jumun`
  ADD PRIMARY KEY (`no11`);

--
-- 테이블의 인덱스 `jumuns`
--
ALTER TABLE `jumuns`
  ADD PRIMARY KEY (`no11`);

--
-- 테이블의 인덱스 `juso`
--
ALTER TABLE `juso`
  ADD PRIMARY KEY (`no11`);

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`no11`);

--
-- 테이블의 인덱스 `opt`
--
ALTER TABLE `opt`
  ADD PRIMARY KEY (`no11`);

--
-- 테이블의 인덱스 `opts`
--
ALTER TABLE `opts`
  ADD PRIMARY KEY (`no11`);

--
-- 테이블의 인덱스 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`no11`);

--
-- 테이블의 인덱스 `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`no11`);

--
-- 테이블의 인덱스 `sj`
--
ALTER TABLE `sj`
  ADD PRIMARY KEY (`no11`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `jumuns`
--
ALTER TABLE `jumuns`
  MODIFY `no11` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- 테이블의 AUTO_INCREMENT `juso`
--
ALTER TABLE `juso`
  MODIFY `no11` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `no11` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- 테이블의 AUTO_INCREMENT `opt`
--
ALTER TABLE `opt`
  MODIFY `no11` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- 테이블의 AUTO_INCREMENT `opts`
--
ALTER TABLE `opts`
  MODIFY `no11` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- 테이블의 AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `no11` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 테이블의 AUTO_INCREMENT `qa`
--
ALTER TABLE `qa`
  MODIFY `no11` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
