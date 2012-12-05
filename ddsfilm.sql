-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 12 月 05 日 11:14
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `dds_admin`
--


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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `dds_team`
--

INSERT INTO `dds_team` (`id`, `name`, `pic`, `email`, `weibo`, `infor`, `signtime`) VALUES
(1, '1122', './Uploads/img/20121205/50bf2a6251802.png', '22', '33', '44', '');
