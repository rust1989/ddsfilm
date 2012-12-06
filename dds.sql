-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 12 月 06 日 16:26
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `dds`
--

-- --------------------------------------------------------

--
-- 表的结构 `dds_admin`
--

CREATE TABLE IF NOT EXISTS `dds_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pwd` varchar(50) CHARACTER SET utf8 NOT NULL,
  `signtime` varchar(50) CHARACTER SET utf8 NOT NULL,
  `logintime` varchar(50) CHARACTER SET utf8 NOT NULL,
  `roleid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `dds_admin`
--

INSERT INTO `dds_admin` (`id`, `name`, `pwd`, `signtime`, `logintime`, `roleid`) VALUES
(1, 'admin', '72812e30873455dcee2ce2d1ee26e4ab', '', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `dds_article`
--

CREATE TABLE IF NOT EXISTS `dds_article` (
  `title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `date` varchar(30) CHARACTER SET utf8 NOT NULL,
  `model` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`model`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `dds_article`
--

INSERT INTO `dds_article` (`title`, `content`, `date`, `model`) VALUES
('联系我们', '111111111111', '1354765082', 'CONTACT'),
('关于我们', '2222222222', '1354765097', 'ABOUT');

-- --------------------------------------------------------

--
-- 表的结构 `dds_procates`
--

CREATE TABLE IF NOT EXISTS `dds_procates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ename` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `dds_procates`
--

INSERT INTO `dds_procates` (`id`, `name`, `ename`, `pid`) VALUES
(1, '微电影', 'Micro Film', 0),
(2, '电视广告', 'TVC', 0),
(3, '病毒广告', '', 0),
(4, '其他', 'Other', 0);

-- --------------------------------------------------------

--
-- 表的结构 `dds_project`
--

CREATE TABLE IF NOT EXISTS `dds_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pic` varchar(50) CHARACTER SET utf8 NOT NULL,
  `video` varchar(100) CHARACTER SET utf8 NOT NULL,
  `year` varchar(50) CHARACTER SET utf8 NOT NULL,
  `client` varchar(50) CHARACTER SET utf8 NOT NULL,
  `director` varchar(50) CHARACTER SET utf8 NOT NULL,
  `producer` varchar(50) CHARACTER SET utf8 NOT NULL,
  `agency` varchar(50) CHARACTER SET utf8 NOT NULL,
  `date` varchar(50) CHARACTER SET utf8 NOT NULL,
  `product` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- 转存表中的数据 `dds_project`
--

INSERT INTO `dds_project` (`id`, `title`, `pic`, `video`, `year`, `client`, `director`, `producer`, `agency`, `date`, `product`, `sid`) VALUES
(1, 'AQUA', './Uploads/img/20121206/50c07340a992f.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354789696', 'DDS FILM', 1),
(2, 'AQUA', './Uploads/img/20121206/50c0b855f29a6.jpg', '', '2010', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TWBA', '1354807381', 'DDS FILM', 1),
(3, 'AQUA', './Uploads/img/20121206/50c0b8ad5791b.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354807469', 'DDS FILM', 1),
(4, 'AQUA', './Uploads/img/20121206/50c0b8b868b32.jpg', '', '2010', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TWBA', '1354807480', 'DDS FILM', 1),
(5, 'AQUA', './Uploads/img/20121206/50c0b8d8d352d.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354807512', 'DDS FILM', 1),
(6, 'AQUA', './Uploads/img/20121206/50c07340a992f.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354789696', 'DDS FILM', 1),
(7, 'AQUA', './Uploads/img/20121206/50c0b855f29a6.jpg', '', '2010', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TWBA', '1354807381', 'DDS FILM', 1),
(8, 'AQUA', './Uploads/img/20121206/50c0b8ad5791b.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354807469', 'DDS FILM', 1),
(9, 'AQUA', './Uploads/img/20121206/50c0b8b868b32.jpg', '', '2010', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TWBA', '1354807480', 'DDS FILM', 1),
(10, 'AQUA', './Uploads/img/20121206/50c0b8d8d352d.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354807512', 'DDS FILM', 1),
(11, 'AQUA', './Uploads/img/20121206/50c07340a992f.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354789696', 'DDS FILM', 1),
(12, 'AQUA', './Uploads/img/20121206/50c0b855f29a6.jpg', '', '2010', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TWBA', '1354807381', 'DDS FILM', 1),
(13, 'AQUA', './Uploads/img/20121206/50c0b8ad5791b.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354807469', 'DDS FILM', 1),
(14, 'AQUA', './Uploads/img/20121206/50c0b8b868b32.jpg', '', '2010', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TWBA', '1354807480', 'DDS FILM', 1),
(15, 'AQUA', './Uploads/img/20121206/50c0b8d8d352d.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354807512', 'DDS FILM', 1),
(16, 'AQUA', './Uploads/img/20121206/50c07340a992f.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354789696', 'DDS FILM', 1),
(17, 'AQUA', './Uploads/img/20121206/50c0b855f29a6.jpg', '', '2010', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TWBA', '1354807381', 'DDS FILM', 1),
(18, 'AQUA', './Uploads/img/20121206/50c0b8ad5791b.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354807469', 'DDS FILM', 1),
(19, 'AQUA', './Uploads/img/20121206/50c0b8b868b32.jpg', '', '2010', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TWBA', '1354807480', 'DDS FILM', 1),
(20, 'AQUA', './Uploads/img/20121206/50c0b8d8d352d.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354807512', 'DDS FILM', 1),
(21, 'AQUA', './Uploads/img/20121206/50c07340a992f.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354789696', 'DDS FILM', 1),
(22, 'AQUA', './Uploads/img/20121206/50c0b855f29a6.jpg', '', '2010', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TWBA', '1354807381', 'DDS FILM', 1),
(23, 'AQUA', './Uploads/img/20121206/50c0b8ad5791b.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354807469', 'DDS FILM', 1),
(24, 'AQUA', './Uploads/img/20121206/50c0b8b868b32.jpg', '', '2010', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TWBA', '1354807480', 'DDS FILM', 1),
(25, 'AQUA', './Uploads/img/20121206/50c0b8d8d352d.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354807512', 'DDS FILM', 1),
(26, 'AQUA', './Uploads/img/20121206/50c07340a992f.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354789696', 'DDS FILM', 1),
(27, 'AQUA', './Uploads/img/20121206/50c0b855f29a6.jpg', '', '2010', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TWBA', '1354807381', 'DDS FILM', 1),
(28, 'AQUA', './Uploads/img/20121206/50c0b8ad5791b.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354807469', 'DDS FILM', 1),
(29, 'AQUA', './Uploads/img/20121206/50c0b8b868b32.jpg', '', '2010', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TWBA', '1354807480', 'DDS FILM', 1),
(30, 'AQUA', './Uploads/img/20121206/50c0b8d8d352d.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354807512', 'DDS FILM', 1),
(31, 'AQUA', './Uploads/img/20121206/50c07340a992f.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354789696', 'DDS FILM', 1),
(32, 'AQUA', './Uploads/img/20121206/50c0b855f29a6.jpg', '', '2010', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TWBA', '1354807381', 'DDS FILM', 1),
(33, 'AQUA', './Uploads/img/20121206/50c0b8ad5791b.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354807469', 'DDS FILM', 1),
(34, 'AQUA', './Uploads/img/20121206/50c0b8b868b32.jpg', '', '2010', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TWBA', '1354807480', 'DDS FILM', 1),
(35, 'AQUA', './Uploads/img/20121206/50c0b8d8d352d.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354807512', 'DDS FILM', 1);

-- --------------------------------------------------------

--
-- 表的结构 `dds_team`
--

CREATE TABLE IF NOT EXISTS `dds_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pic` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `weibo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `infor` varchar(255) CHARACTER SET utf8 NOT NULL,
  `signtime` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `dds_team`
--

INSERT INTO `dds_team` (`id`, `name`, `pic`, `email`, `weibo`, `infor`, `signtime`) VALUES
(1, 'Jack LIN', './Uploads/img/20121206/50c01a99891dc.jpg', 'jack lin@ddsfilm.com', 'jack lin@ddsfilm.com', 'Administrator ', ''),
(2, 'Screamer', './Uploads/img/20121206/50c01abf031fc.jpg', 'screamer@ddsfilm.com', 'screamer@ddsfilm.com', 'Administrator', ''),
(3, 'terry', './Uploads/img/20121206/50c01add90726.jpg', 'terry@ddsfilm.com', 'terry@ddsfilm.com', 'Administrator', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
