-- MySQL dump 10.13  Distrib 5.5.24, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: software
-- ------------------------------------------------------
-- Server version	5.5.24-0ubuntu0.12.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `software`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `software` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `software`;

--
-- Table structure for table `cz_arch`
--

DROP TABLE IF EXISTS `cz_arch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_arch` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_arch_dist`
--

DROP TABLE IF EXISTS `cz_arch_dist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_arch_dist` (
  `aid` int(10) NOT NULL,
  `did` int(10) NOT NULL,
  `nickname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  KEY `aid` (`aid`),
  KEY `did` (`did`),
  CONSTRAINT `cz_arch_dist_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `cz_arch` (`aid`),
  CONSTRAINT `cz_arch_dist_ibfk_2` FOREIGN KEY (`did`) REFERENCES `cz_dist` (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_dist`
--

DROP TABLE IF EXISTS `cz_dist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_dist` (
  `did` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`did`),
  KEY `key_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_dist_detail`
--

DROP TABLE IF EXISTS `cz_dist_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_dist_detail` (
  `did` int(10) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  KEY `did` (`did`),
  CONSTRAINT `cz_dist_detail_ibfk_1` FOREIGN KEY (`did`) REFERENCES `cz_dist` (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_file`
--

DROP TABLE IF EXISTS `cz_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_file` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `upload_time` int(10) NOT NULL,
  `pack_type` tinyint(3) NOT NULL,
  `download_count` int(10) NOT NULL DEFAULT '0',
  `file_size` int(10) NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`fid`),
  KEY `pack_type` (`pack_type`),
  KEY `key_filename` (`filename`),
  CONSTRAINT `cz_file_ibfk_1` FOREIGN KEY (`pack_type`) REFERENCES `cz_pack_type` (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_pack`
--

DROP TABLE IF EXISTS `cz_pack`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_pack` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `did` int(10) NOT NULL,
  `rid` int(10) NOT NULL,
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
  KEY `key_name` (`name`),
  CONSTRAINT `cz_pack_ibfk_1` FOREIGN KEY (`did`) REFERENCES `cz_dist` (`did`),
  CONSTRAINT `cz_pack_ibfk_2` FOREIGN KEY (`rid`) REFERENCES `cz_repo` (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_pack_arch`
--

DROP TABLE IF EXISTS `cz_pack_arch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_pack_arch` (
  `pid` int(10) NOT NULL,
  `aid` int(10) NOT NULL,
  `fid` int(10) DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  KEY `pid` (`pid`),
  KEY `aid` (`aid`),
  CONSTRAINT `cz_pack_arch_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `cz_pack` (`pid`),
  CONSTRAINT `cz_pack_arch_ibfk_2` FOREIGN KEY (`aid`) REFERENCES `cz_arch` (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_pack_comment`
--

DROP TABLE IF EXISTS `cz_pack_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_pack_comment` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL,
  `status` enum('show','auditing','deleted') COLLATE utf8_unicode_ci NOT NULL,
  `time` int(10) NOT NULL,
  `rate` int(10) NOT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `homepage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `pid` (`pid`),
  KEY `key_time` (`time`),
  KEY `key_status` (`status`),
  KEY `key_author` (`author`),
  CONSTRAINT `cz_pack_comment_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `cz_pack` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_pack_depend`
--

DROP TABLE IF EXISTS `cz_pack_depend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_pack_depend` (
  `pid` int(10) NOT NULL,
  `dep` int(10) NOT NULL,
  `version` varchar(31) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_pack_detail`
--

DROP TABLE IF EXISTS `cz_pack_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_pack_detail` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
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
  `icon` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'DEB Original section',
  `tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'DEB tags',
  `depends` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'DEB depends',
  `suggests` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'DEB suggests',
  `conflicts` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'DEB conflicts',
  `provides` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'DEB provides',
  `replaces` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'DEB replaces',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=477138 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_pack_tag`
--

DROP TABLE IF EXISTS `cz_pack_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_pack_tag` (
  `pid` int(10) NOT NULL,
  `top_tag` varchar(127) COLLATE utf8_unicode_ci NOT NULL,
  `sub_tag` varchar(127) COLLATE utf8_unicode_ci DEFAULT NULL,
  KEY `key_top_tag` (`top_tag`),
  KEY `key_sub_tag` (`sub_tag`),
  KEY `cz_pack_tag_ibfk_1` (`pid`),
  CONSTRAINT `cz_pack_tag_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `cz_pack` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_pack_type`
--

DROP TABLE IF EXISTS `cz_pack_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_pack_type` (
  `tid` tinyint(3) NOT NULL AUTO_INCREMENT,
  `pack_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_repo`
--

DROP TABLE IF EXISTS `cz_repo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_repo` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `did` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `cz_repo_ibfk_1` (`did`),
  CONSTRAINT `cz_repo_ibfk_1` FOREIGN KEY (`did`) REFERENCES `cz_dist` (`did`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_sec_pack`
--

DROP TABLE IF EXISTS `cz_pack_section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_pack_section` (
  `sid` int(11) NOT NULL COMMENT 'section id',
  `subsid` int(11) NOT NULL COMMENT 'subsection id',
  `pid` int(11) NOT NULL COMMENT 'package id',
  KEY `cz_sec_pack_ibfk_1` (`pid`),
  KEY `cz_sec_pack_ibfk_2` (`sid`),
  KEY `cz_sec_pack_ibfk_3` (`subsid`),
  CONSTRAINT `cz_sec_pack_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `cz_pack` (`pid`),
  CONSTRAINT `cz_sec_pack_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `cz_section` (`sid`),
  CONSTRAINT `cz_sec_pack_ibfk_3` FOREIGN KEY (`subsid`) REFERENCES `cz_subsection` (`subsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='associate table';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_section`
--

DROP TABLE IF EXISTS `cz_section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_section` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_subsection`
--

DROP TABLE IF EXISTS `cz_subsection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_subsection` (
  `subsid` int(10) NOT NULL AUTO_INCREMENT,
  `sid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `deb_keyword` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`subsid`),
  KEY `key_sid` (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cz_user`
--

DROP TABLE IF EXISTS `cz_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `key_username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-10-26 14:08:02
