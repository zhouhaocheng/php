-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 05 月 08 日 01:34
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `qimo`
--

-- --------------------------------------------------------

--
-- 表的结构 `cj`
--

CREATE TABLE IF NOT EXISTS `cj` (
  `xuehao` int(20) NOT NULL,
  `kmid` int(20) NOT NULL,
  `cj` varchar(20) NOT NULL,
  PRIMARY KEY (`xuehao`,`kmid`),
  KEY `kemuid` (`kmid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cj`
--

INSERT INTO `cj` (`xuehao`, `kmid`, `cj`) VALUES
(71502, 4, '70'),
(71502, 6, '70'),
(71503, 4, '80'),
(71503, 5, '80'),
(150210, 4, '60'),
(7150156, 5, '85'),
(7150156, 7, '92'),
(7150256, 4, '88'),
(7150256, 6, '88');

-- --------------------------------------------------------

--
-- 表的结构 `kemu`
--

CREATE TABLE IF NOT EXISTS `kemu` (
  `kmid` int(20) NOT NULL AUTO_INCREMENT,
  `kmmc` varchar(20) NOT NULL,
  PRIMARY KEY (`kmid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `kemu`
--

INSERT INTO `kemu` (`kmid`, `kmmc`) VALUES
(4, 'openstack'),
(5, 'cisco'),
(6, 'hadoop'),
(7, 'linux');

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `xuehao` int(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `xingbie` varchar(20) DEFAULT NULL,
  `banji` varchar(20) NOT NULL,
  PRIMARY KEY (`xuehao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`xuehao`, `name`, `xingbie`, `banji`) VALUES
(71502, '张三', '男', '1502'),
(71503, '小明', '男', '1503'),
(150210, '小张', '男', '1502'),
(7150114, '李四', '女', '1501'),
(7150156, '王五', '男', '1501'),
(7150256, '红', '女', '1502');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `iphone` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `passwd`, `mail`, `iphone`, `address`) VALUES
(1, 'admin', '1234', '', '', ''),
(2, 'hh', 'hhh', 'hhhh', 'hhhhh', '广州');

--
-- 限制导出的表
--

--
-- 限制表 `cj`
--
ALTER TABLE `cj`
  ADD CONSTRAINT `kemuid` FOREIGN KEY (`kmid`) REFERENCES `kemu` (`kmid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `xuehao` FOREIGN KEY (`xuehao`) REFERENCES `student` (`xuehao`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
