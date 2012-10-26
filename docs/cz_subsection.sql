-- MySQL dump 10.13  Distrib 5.5.28, for Linux (x86_64)
--
-- Host: localhost    Database: software
-- ------------------------------------------------------
-- Server version	5.5.28-log

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
-- Table structure for table `cz_subsection`
--

DROP TABLE IF EXISTS `cz_subsection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cz_subsection` (
  `subsid` int(10) NOT NULL AUTO_INCREMENT,
  `sid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `deb_keyword` varchar(255) NOT NULL,
  PRIMARY KEY (`subsid`),
  KEY `key_sid` (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cz_subsection`
--

LOCK TABLES `cz_subsection` WRITE;
/*!40000 ALTER TABLE `cz_subsection` DISABLE KEYS */;
INSERT INTO `cz_subsection` VALUES (1,9,'邮件','mail'),(2,9,'图形','graphics'),(3,9,'文本','text'),(4,9,'排版','tex'),(5,9,'新闻','news'),(6,9,'文档','doc'),(7,9,'通讯','comm'),(8,10,'教学','education'),(9,10,'数学','math'),(10,10,'电子','electronics'),(11,10,'科学','science'),(12,10,'统计','gnu-r'),(13,11,'编辑','editor'),(14,11,'调试','debug'),(15,11,'版本控制','vcs'),(16,11,'Haskell','haskell'),(17,11,'Java','java'),(18,11,'Perl','perl'),(19,11,'PHP','php'),(20,11,'Python','python'),(21,11,'OCaml','ocaml'),(22,11,'Objective-C','gnustep'),(23,11,'Ruby','ruby'),(24,11,'Lisp','lisp'),(25,11,'开发','devel'),(26,11,'数据库','database'),(27,11,'Web服务器','zope'),(28,11,'网站','httpd'),(29,11,'库','libdevel'),(30,11,'嵌入式','embedded'),(31,12,'游戏','games'),(32,12,'视频','video'),(33,12,'音乐','sound'),(34,12,'电台','hamradio'),(35,12,'网络','web'),(36,13,'管理','admin'),(37,13,'字体','fonts'),(38,13,'内核','kernel'),(39,13,'工具','utils'),(40,13,'GNOME桌面','gnome'),(41,13,'KDE桌面','kde'),(42,13,'xfce桌面','xfce'),(43,13,'窗口','x11'),(44,13,'终端','shells'),(45,13,'本地化','localization'),(46,13,'输入法','input'),(47,13,'翻译','interpreters,translations'),(48,13,'自检','introspection'),(49,13,'网络','net'),(50,13,'基本系统','base'),(51,14,'系统库','libs'),(52,14,'系统旧库','oldlibs'),(53,14,'元件包','metapackages'),(54,14,'文件系统','otherosfs'),(55,14,'命令行','cli-mono'),(56,14,'杂项','misc');
/*!40000 ALTER TABLE `cz_subsection` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-10-26 16:10:22
