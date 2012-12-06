-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 12 月 06 日 11:51
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `dds`
--

-- --------------------------------------------------------

--
-- 表的结构 `dds_admin`
--

CREATE TABLE `dds_admin` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) character set utf8 NOT NULL,
  `pwd` varchar(50) character set utf8 NOT NULL,
  `signtime` varchar(50) character set utf8 NOT NULL,
  `logintime` varchar(50) character set utf8 NOT NULL,
  `roleid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `dds_admin`
--

INSERT INTO `dds_admin` (`id`, `name`, `pwd`, `signtime`, `logintime`, `roleid`) VALUES
(1, 'admin', '72812e30873455dcee2ce2d1ee26e4ab', '', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `dds_article`
--

CREATE TABLE `dds_article` (
  `title` varchar(30) character set utf8 NOT NULL,
  `content` text character set utf8 NOT NULL,
  `date` varchar(30) character set utf8 NOT NULL,
  `model` varchar(50) character set utf8 NOT NULL,
  PRIMARY KEY  (`model`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `dds_article`
--

INSERT INTO `dds_article` (`title`, `content`, `date`, `model`) VALUES
('联系我们', '111111111111', '1354765082', 'CONTACT'),
('关于我们', '2222222222', '1354765097', 'ABOUT');

-- --------------------------------------------------------

--
-- 表的结构 `dds_procates`
--

CREATE TABLE `dds_procates` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) character set utf8 NOT NULL,
  `ename` varchar(50) character set utf8 NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- 导出表中的数据 `dds_procates`
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

CREATE TABLE `dds_project` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(50) character set utf8 NOT NULL,
  `pic` varchar(50) character set utf8 NOT NULL,
  `video` varchar(100) character set utf8 NOT NULL,
  `year` varchar(50) character set utf8 NOT NULL,
  `client` varchar(50) character set utf8 NOT NULL,
  `director` varchar(50) character set utf8 NOT NULL,
  `producer` varchar(50) character set utf8 NOT NULL,
  `agency` varchar(50) character set utf8 NOT NULL,
  `date` varchar(50) character set utf8 NOT NULL,
  `product` varchar(50) character set utf8 NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `dds_project`
--

INSERT INTO `dds_project` (`id`, `title`, `pic`, `video`, `year`, `client`, `director`, `producer`, `agency`, `date`, `product`, `sid`) VALUES
(1, 'AQUA', './Uploads/img/20121206/50c07340a992f.jpg', 'DDS FILM', '1999', 'NIVEA', 'Jack LIN', 'DDS FILM', 'TBWA', '1354789696', 'DDS FILM', 1);

-- --------------------------------------------------------

--
-- 表的结构 `dds_team`
--

CREATE TABLE `dds_team` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) character set utf8 NOT NULL,
  `pic` varchar(255) character set utf8 NOT NULL,
  `email` varchar(255) character set utf8 NOT NULL,
  `weibo` varchar(255) character set utf8 NOT NULL,
  `infor` varchar(255) character set utf8 NOT NULL,
  `signtime` varchar(50) character set utf8 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `dds_team`
--

INSERT INTO `dds_team` (`id`, `name`, `pic`, `email`, `weibo`, `infor`, `signtime`) VALUES
(1, 'Jack LIN', './Uploads/img/20121206/50c01a99891dc.jpg', 'jack lin@ddsfilm.com', 'jack lin@ddsfilm.com', 'Administrator ', ''),
(2, 'Screamer', './Uploads/img/20121206/50c01abf031fc.jpg', 'screamer@ddsfilm.com', 'screamer@ddsfilm.com', 'Administrator', ''),
(3, 'terry', './Uploads/img/20121206/50c01add90726.jpg', 'terry@ddsfilm.com', 'terry@ddsfilm.com', 'Administrator', '');
