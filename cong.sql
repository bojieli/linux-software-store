-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 09 月 12 日 23:24
-- 服务器版本: 5.5.24
-- PHP 版本: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `software`
--

-- --------------------------------------------------------

--
-- 表的结构 `cz_arch`
--

CREATE TABLE IF NOT EXISTS `cz_arch` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cz_arch_dist`
--

CREATE TABLE IF NOT EXISTS `cz_arch_dist` (
  `aid` int(10) NOT NULL,
  `did` int(10) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  KEY `aid` (`aid`),
  KEY `did` (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `cz_dist`
--

CREATE TABLE IF NOT EXISTS `cz_dist` (
  `did` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`did`),
  KEY `key_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `cz_dist`
--

INSERT INTO `cz_dist` (`did`, `name`) VALUES
(3, 'Debian'),
(1, 'Gentoo'),
(2, 'Ubuntu');

-- --------------------------------------------------------

--
-- 表的结构 `cz_dist_detail`
--

CREATE TABLE IF NOT EXISTS `cz_dist_detail` (
  `did` int(10) NOT NULL,
  `description` text,
  KEY `did` (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `cz_file`
--

CREATE TABLE IF NOT EXISTS `cz_file` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `upload_time` int(10) NOT NULL,
  `pack_type` tinyint(3) NOT NULL,
  `download_count` int(10) NOT NULL DEFAULT '0',
  `file_size` int(10) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`fid`),
  KEY `pack_type` (`pack_type`),
  KEY `key_filename` (`filename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cz_pack`
--

CREATE TABLE IF NOT EXISTS `cz_pack` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `did` int(10) NOT NULL,
  `rid` int(10) NOT NULL,
  `sid` int(10) NOT NULL,
  `filesize` int(10) DEFAULT NULL,
  `install_size` int(10) DEFAULT NULL,
  `rate_total` int(10) DEFAULT NULL,
  `rate_count` int(10) DEFAULT NULL,
  `create_time` int(10) DEFAULT NULL,
  `update_time` int(10) DEFAULT NULL,
  `recommend` tinyint(1) DEFAULT NULL,
  `name` varchar(127) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(127) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extension` varchar(127) COLLATE utf8_unicode_ci NOT NULL COMMENT 'package extension(软件类型)',
  PRIMARY KEY (`pid`),
  KEY `did` (`did`),
  KEY `rid` (`rid`),
  KEY `sid` (`sid`),
  KEY `key_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `cz_pack`
--

INSERT INTO `cz_pack` (`pid`, `did`, `rid`, `sid`, `filesize`, `install_size`, `rate_total`, `rate_count`, `create_time`, `update_time`, `recommend`, `name`, `version`, `url`, `summary`, `extension`) VALUES
(2, 1, 1, 1, 10, 20, 0, 0, 0, 0, 0, 'firefox', '1.0', 'www.firefox.org', '赵聪很帅', 'deb rpm'),
(3, 2, 1, 1, 50, 0, 0, 0, 0, 0, 0, 'android', '2.2', '', '', ''),
(4, 2, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ubuntutweak', '1.0', 'abcd', 'abcd', 'deb');

-- --------------------------------------------------------

--
-- 表的结构 `cz_pack_arch`
--

CREATE TABLE IF NOT EXISTS `cz_pack_arch` (
  `pid` int(10) NOT NULL,
  `aid` int(10) NOT NULL,
  `fid` int(10) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  KEY `pid` (`pid`),
  KEY `aid` (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `cz_pack_comment`
--

CREATE TABLE IF NOT EXISTS `cz_pack_comment` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL,
  `status` enum('show','auditing','deleted') NOT NULL,
  `time` int(10) NOT NULL,
  `rate` int(10) NOT NULL,
  `author` varchar(50) NOT NULL,
  `homepage` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `pid` (`pid`),
  KEY `key_time` (`time`),
  KEY `key_status` (`status`),
  KEY `key_author` (`author`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cz_pack_depend`
--

CREATE TABLE IF NOT EXISTS `cz_pack_depend` (
  `pid` int(10) NOT NULL,
  `dep` int(10) NOT NULL,
  `version` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `cz_pack_detail`
--

CREATE TABLE IF NOT EXISTS `cz_pack_detail` (
  `pid` int(10) NOT NULL,
  `checksum_md5` char(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `checksum_sha1` char(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `checksum_sha256` char(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bug_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `homepage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `license` varchar(127) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maintainer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maintainerUrl` varchar(512) COLLATE utf8_unicode_ci NOT NULL COMMENT 'the url of maintainer',
  `priority` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `icon` blob,
  KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `cz_pack_detail`
--

INSERT INTO `cz_pack_detail` (`pid`, `checksum_md5`, `checksum_sha1`, `checksum_sha256`, `bug_url`, `homepage`, `license`, `maintainer`, `maintainerUrl`, `priority`, `description`, `icon`) VALUES
(2, NULL, NULL, NULL, 'http://www.ackratos.com/', 'www.firefox.org', 'GPL', '赵聪', 'http://www.ackratos.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `cz_pack_tag`
--

CREATE TABLE IF NOT EXISTS `cz_pack_tag` (
  `pid` int(10) NOT NULL,
  `top_tag` varchar(127) NOT NULL,
  `sub_tag` varchar(127) DEFAULT NULL,
  KEY `pid` (`pid`),
  KEY `key_top_tag` (`top_tag`),
  KEY `key_sub_tag` (`sub_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `cz_pack_type`
--

CREATE TABLE IF NOT EXISTS `cz_pack_type` (
  `tid` tinyint(3) NOT NULL AUTO_INCREMENT,
  `pack_type` varchar(20) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cz_repo`
--

CREATE TABLE IF NOT EXISTS `cz_repo` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `did` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `did` (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `cz_repo`
--

INSERT INTO `cz_repo` (`rid`, `did`, `name`) VALUES
(1, 1, 'repo');

-- --------------------------------------------------------

--
-- 表的结构 `cz_section`
--

CREATE TABLE IF NOT EXISTS `cz_section` (
  `sid` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `cz_section`
--

INSERT INTO `cz_section` (`sid`, `name`) VALUES
(0, 'study'),
(1, 'life');

-- --------------------------------------------------------

--
-- 表的结构 `cz_sec_pack`
--

CREATE TABLE IF NOT EXISTS `cz_sec_pack` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL COMMENT 'section id',
  `pid` int(11) NOT NULL COMMENT 'package id',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `sid` (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='associate table' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `cz_sec_pack`
--

INSERT INTO `cz_sec_pack` (`id`, `sid`, `pid`) VALUES
(1, 0, 4),
(2, 0, 2),
(3, 1, 2);

-- --------------------------------------------------------

--
-- 表的结构 `cz_user`
--

CREATE TABLE IF NOT EXISTS `cz_user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL,
  `password` char(40) NOT NULL,
  `salt` char(10) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `key_username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 限制导出的表
--

--
-- 限制表 `cz_arch_dist`
--
ALTER TABLE `cz_arch_dist`
  ADD CONSTRAINT `cz_arch_dist_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `cz_arch` (`aid`),
  ADD CONSTRAINT `cz_arch_dist_ibfk_2` FOREIGN KEY (`did`) REFERENCES `cz_dist` (`did`);

--
-- 限制表 `cz_dist_detail`
--
ALTER TABLE `cz_dist_detail`
  ADD CONSTRAINT `cz_dist_detail_ibfk_1` FOREIGN KEY (`did`) REFERENCES `cz_dist` (`did`);

--
-- 限制表 `cz_file`
--
ALTER TABLE `cz_file`
  ADD CONSTRAINT `cz_file_ibfk_1` FOREIGN KEY (`pack_type`) REFERENCES `cz_pack_type` (`tid`);

--
-- 限制表 `cz_pack`
--
ALTER TABLE `cz_pack`
  ADD CONSTRAINT `cz_pack_ibfk_1` FOREIGN KEY (`did`) REFERENCES `cz_dist` (`did`),
  ADD CONSTRAINT `cz_pack_ibfk_2` FOREIGN KEY (`rid`) REFERENCES `cz_repo` (`rid`),
  ADD CONSTRAINT `cz_pack_ibfk_3` FOREIGN KEY (`sid`) REFERENCES `cz_section` (`sid`);

--
-- 限制表 `cz_pack_arch`
--
ALTER TABLE `cz_pack_arch`
  ADD CONSTRAINT `cz_pack_arch_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `cz_pack` (`pid`),
  ADD CONSTRAINT `cz_pack_arch_ibfk_2` FOREIGN KEY (`aid`) REFERENCES `cz_arch` (`aid`);

--
-- 限制表 `cz_pack_comment`
--
ALTER TABLE `cz_pack_comment`
  ADD CONSTRAINT `cz_pack_comment_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `cz_pack` (`pid`);

--
-- 限制表 `cz_pack_detail`
--
ALTER TABLE `cz_pack_detail`
  ADD CONSTRAINT `cz_pack_detail_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `cz_pack` (`pid`);

--
-- 限制表 `cz_pack_tag`
--
ALTER TABLE `cz_pack_tag`
  ADD CONSTRAINT `cz_pack_tag_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `cz_pack` (`pid`);

--
-- 限制表 `cz_repo`
--
ALTER TABLE `cz_repo`
  ADD CONSTRAINT `cz_repo_ibfk_1` FOREIGN KEY (`did`) REFERENCES `cz_dist` (`did`);

--
-- 限制表 `cz_sec_pack`
--
ALTER TABLE `cz_sec_pack`
  ADD CONSTRAINT `cz_sec_pack_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `cz_pack` (`pid`),
  ADD CONSTRAINT `cz_sec_pack_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `cz_section` (`sid`),
  ADD CONSTRAINT `cz_sec_pack_ibfk_3` FOREIGN KEY (`sid`) REFERENCES `cz_section` (`sid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
