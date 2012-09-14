-- MySQL dump 10.13  Distrib 5.5.27, for Linux (x86_64)
--
-- Host: localhost    Database: software
-- ------------------------------------------------------
-- Server version	5.5.27-log

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

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `software` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `software`;

--
-- Table structure for table `cz_arch`
--

DROP TABLE IF EXISTS `cz_arch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_arch` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_arch`
--

LOCK TABLES `cz_arch` WRITE;
/*!40000 ALTER TABLE `cz_arch` DISABLE KEYS */;
/*!40000 ALTER TABLE `cz_arch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cz_arch_dist`
--

DROP TABLE IF EXISTS `cz_arch_dist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_arch_dist` (
  `aid` int(10) NOT NULL,
  `did` int(10) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  KEY `aid` (`aid`),
  KEY `did` (`did`),
  CONSTRAINT `cz_arch_dist_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `cz_arch` (`aid`),
  CONSTRAINT `cz_arch_dist_ibfk_2` FOREIGN KEY (`did`) REFERENCES `cz_dist` (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_arch_dist`
--

LOCK TABLES `cz_arch_dist` WRITE;
/*!40000 ALTER TABLE `cz_arch_dist` DISABLE KEYS */;
/*!40000 ALTER TABLE `cz_arch_dist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cz_dist`
--

DROP TABLE IF EXISTS `cz_dist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_dist` (
  `did` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`did`),
  KEY `key_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_dist`
--

LOCK TABLES `cz_dist` WRITE;
/*!40000 ALTER TABLE `cz_dist` DISABLE KEYS */;
INSERT INTO `cz_dist` VALUES (4,'Archlinux'),(5,'Centos'),(3,'Debian'),(6,'Debian'),(7,'Deepin'),(8,'Fedora'),(1,'Gentoo'),(9,'Mint'),(10,'Opensuse'),(11,'Puppy'),(12,'Slackware'),(2,'Ubuntu');
/*!40000 ALTER TABLE `cz_dist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cz_dist_detail`
--

DROP TABLE IF EXISTS `cz_dist_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_dist_detail` (
  `did` int(10) NOT NULL,
  `description` text,
  KEY `did` (`did`),
  CONSTRAINT `cz_dist_detail_ibfk_1` FOREIGN KEY (`did`) REFERENCES `cz_dist` (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_dist_detail`
--

LOCK TABLES `cz_dist_detail` WRITE;
/*!40000 ALTER TABLE `cz_dist_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `cz_dist_detail` ENABLE KEYS */;
UNLOCK TABLES;

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
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`fid`),
  KEY `pack_type` (`pack_type`),
  KEY `key_filename` (`filename`),
  CONSTRAINT `cz_file_ibfk_1` FOREIGN KEY (`pack_type`) REFERENCES `cz_pack_type` (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_file`
--

LOCK TABLES `cz_file` WRITE;
/*!40000 ALTER TABLE `cz_file` DISABLE KEYS */;
/*!40000 ALTER TABLE `cz_file` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_pack`
--

LOCK TABLES `cz_pack` WRITE;
/*!40000 ALTER TABLE `cz_pack` DISABLE KEYS */;
INSERT INTO `cz_pack` VALUES (11,1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'firefox','1.0','www.firefox.org','gentoo的firefox','deb'),(12,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'firefox','1.0','www.firefox.org','ubuntu的firefox',''),(13,3,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'firefox','1.0','www.firefox.org','debian的firefox','');
/*!40000 ALTER TABLE `cz_pack` ENABLE KEYS */;
UNLOCK TABLES;

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
  `link` varchar(255) NOT NULL,
  KEY `pid` (`pid`),
  KEY `aid` (`aid`),
  CONSTRAINT `cz_pack_arch_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `cz_pack` (`pid`),
  CONSTRAINT `cz_pack_arch_ibfk_2` FOREIGN KEY (`aid`) REFERENCES `cz_arch` (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_pack_arch`
--

LOCK TABLES `cz_pack_arch` WRITE;
/*!40000 ALTER TABLE `cz_pack_arch` DISABLE KEYS */;
/*!40000 ALTER TABLE `cz_pack_arch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cz_pack_comment`
--

DROP TABLE IF EXISTS `cz_pack_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_pack_comment` (
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
  KEY `key_author` (`author`),
  CONSTRAINT `cz_pack_comment_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `cz_pack` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_pack_comment`
--

LOCK TABLES `cz_pack_comment` WRITE;
/*!40000 ALTER TABLE `cz_pack_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `cz_pack_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cz_pack_depend`
--

DROP TABLE IF EXISTS `cz_pack_depend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_pack_depend` (
  `pid` int(10) NOT NULL,
  `dep` int(10) NOT NULL,
  `version` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_pack_depend`
--

LOCK TABLES `cz_pack_depend` WRITE;
/*!40000 ALTER TABLE `cz_pack_depend` DISABLE KEYS */;
/*!40000 ALTER TABLE `cz_pack_depend` ENABLE KEYS */;
UNLOCK TABLES;

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
  KEY `pid` (`pid`),
  CONSTRAINT `cz_pack_detail_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `cz_pack` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_pack_detail`
--

LOCK TABLES `cz_pack_detail` WRITE;
/*!40000 ALTER TABLE `cz_pack_detail` DISABLE KEYS */;
INSERT INTO `cz_pack_detail` VALUES (11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,'congzhao很帅',NULL),(12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,'congzhao很帅很帅',NULL),(13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,'congzhao最帅',NULL);
/*!40000 ALTER TABLE `cz_pack_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cz_pack_tag`
--

DROP TABLE IF EXISTS `cz_pack_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_pack_tag` (
  `pid` int(10) NOT NULL,
  `top_tag` varchar(127) NOT NULL,
  `sub_tag` varchar(127) DEFAULT NULL,
  KEY `pid` (`pid`),
  KEY `key_top_tag` (`top_tag`),
  KEY `key_sub_tag` (`sub_tag`),
  CONSTRAINT `cz_pack_tag_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `cz_pack` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_pack_tag`
--

LOCK TABLES `cz_pack_tag` WRITE;
/*!40000 ALTER TABLE `cz_pack_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `cz_pack_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cz_pack_type`
--

DROP TABLE IF EXISTS `cz_pack_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_pack_type` (
  `tid` tinyint(3) NOT NULL AUTO_INCREMENT,
  `pack_type` varchar(20) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_pack_type`
--

LOCK TABLES `cz_pack_type` WRITE;
/*!40000 ALTER TABLE `cz_pack_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `cz_pack_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cz_repo`
--

DROP TABLE IF EXISTS `cz_repo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_repo` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `did` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `did` (`did`),
  CONSTRAINT `cz_repo_ibfk_1` FOREIGN KEY (`did`) REFERENCES `cz_dist` (`did`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_repo`
--

LOCK TABLES `cz_repo` WRITE;
/*!40000 ALTER TABLE `cz_repo` DISABLE KEYS */;
INSERT INTO `cz_repo` VALUES (1,1,'repo');
/*!40000 ALTER TABLE `cz_repo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cz_sec_pack`
--

DROP TABLE IF EXISTS `cz_sec_pack`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_sec_pack` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL COMMENT 'section id',
  `pid` int(11) NOT NULL COMMENT 'package id',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `sid` (`sid`),
  CONSTRAINT `cz_sec_pack_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `cz_pack` (`pid`),
  CONSTRAINT `cz_sec_pack_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `cz_section` (`sid`),
  CONSTRAINT `cz_sec_pack_ibfk_3` FOREIGN KEY (`sid`) REFERENCES `cz_section` (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='associate table';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_sec_pack`
--

LOCK TABLES `cz_sec_pack` WRITE;
/*!40000 ALTER TABLE `cz_sec_pack` DISABLE KEYS */;
INSERT INTO `cz_sec_pack` VALUES (4,1,11),(5,2,11),(6,3,11),(7,4,11),(8,6,12),(9,2,12),(10,7,12),(11,1,13);
/*!40000 ALTER TABLE `cz_sec_pack` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cz_section`
--

DROP TABLE IF EXISTS `cz_section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_section` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_section`
--

LOCK TABLES `cz_section` WRITE;
/*!40000 ALTER TABLE `cz_section` DISABLE KEYS */;
INSERT INTO `cz_section` VALUES (1,'recommend'),(2,'office'),(3,'study'),(4,'game'),(5,'passtime'),(6,'system'),(7,'others');
/*!40000 ALTER TABLE `cz_section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cz_user`
--

DROP TABLE IF EXISTS `cz_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL,
  `password` char(40) NOT NULL,
  `salt` char(10) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `key_username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_user`
--

LOCK TABLES `cz_user` WRITE;
/*!40000 ALTER TABLE `cz_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `cz_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-09-15  0:39:29
