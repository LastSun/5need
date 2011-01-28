-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2011 年 01 月 27 日 14:08
-- 服务器版本: 5.1.50
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


--
-- 表的结构 `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(20) CHARACTER SET gbk NOT NULL,
  `type` varchar(100) CHARACTER SET gbk NOT NULL,
  `organization` varchar(100) CHARACTER SET gbk NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `data`
--

INSERT INTO `data` (`id`, `city`, `type`, `organization`) VALUES
(1, '北京', '交流', '同校'),
(2, '上海', '学术', '海外'),
(3, '合肥', '实践', ''),
(4, '新疆', '培训', ''),
(5, '你不管', '那谁管', '');

-- --------------------------------------------------------

--
-- 表的结构 `exercise`
--

CREATE TABLE IF NOT EXISTS `exercise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `partake_number` int(100) NOT NULL,
  `attention_number` int(100) NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `start_time` date NOT NULL,
  `finish_time` date NOT NULL,
  `signup_time` date NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `describe` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `exercise`
--

INSERT INTO `exercise` (`id`, `name`, `partake_number`, `attention_number`, `city`, `place`, `start_time`, `finish_time`, `signup_time`, `type`, `organization`, `describe`) VALUES
(1, '开学', 1860, 200, '合肥', '中国科学技术大学', '2011-02-21', '2011-06-24', '2011-02-20', '学术', '中国科大', '这是一个实验，仅此而已～'),
(2, 'asdf', 124, 4324, '北京', 'asdgcxg', '2011-01-21', '2011-01-28', '2011-01-19', 'wer', 'wqr', 'bxcvbxcvb');

-- --------------------------------------------------------

--
-- 表的结构 `personaluser`
--

CREATE TABLE IF NOT EXISTS `personaluser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `school` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `college` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `specialty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(30) NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(50) NOT NULL,
  `education` text COLLATE utf8_unicode_ci NOT NULL,
  `gpa` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `rank` int(5) NOT NULL,
  `publication` text COLLATE utf8_unicode_ci NOT NULL,
  `practice_ex` text COLLATE utf8_unicode_ci NOT NULL,
  `work_ex` text COLLATE utf8_unicode_ci NOT NULL,
  `reward` text COLLATE utf8_unicode_ci NOT NULL,
  `hobby` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `personaluser`
--

INSERT INTO `personaluser` (`id`, `name`, `sex`, `birthdate`, `school`, `college`, `specialty`, `telephone`, `mail`, `phone`, `education`, `gpa`, `rank`, `publication`, `practice_ex`, `work_ex`, `reward`, `hobby`) VALUES
(1, 'adsgasdg', 'as', '2011-01-22', 'sdafasdf', 'asdfasd', 'fasdfasd', 12312312, 'dfadsf', 14124124, 'sadfasdf', '21', 123, 'asdg', 'asdgasg', 'asdfasd', 'gasdgas', 'asdgadsg');
