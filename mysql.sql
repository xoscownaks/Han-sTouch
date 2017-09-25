-- MySQL dump 10.16  Distrib 10.1.19-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.19-MariaDB

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
-- Table structure for table `board`
--

DROP TABLE IF EXISTS `board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `board` (
  `board_num` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `board_title` varchar(70) NOT NULL,
  `board_content` text NOT NULL,
  `board_date` datetime NOT NULL,
  `board_id` varchar(20) NOT NULL,
  `board_password` varchar(20) NOT NULL,
  `board_file` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`board_num`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `board`
--

LOCK TABLES `board` WRITE;
/*!40000 ALTER TABLE `board` DISABLE KEYS */;
INSERT INTO `board` VALUES (1,'TEST','this is my first board','2016-12-13 04:56:44','aa','12','win7 SN.txt'),(2,'14','124','2016-12-13 07:36:15','aa','12','한글테스트.txt');
/*!40000 ALTER TABLE `board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buyhistory`
--

DROP TABLE IF EXISTS `buyhistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buyhistory` (
  `buymenu_id` varchar(20) NOT NULL,
  `buymenu_name` varchar(100) NOT NULL,
  `buymenu_num` int(11) NOT NULL,
  `buymenu_date` datetime NOT NULL,
  `buymenu_img` varchar(500) NOT NULL,
  `buymenu_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buyhistory`
--

LOCK TABLES `buyhistory` WRITE;
/*!40000 ALTER TABLE `buyhistory` DISABLE KEYS */;
INSERT INTO `buyhistory` VALUES ('aa','burger2',2,'2016-12-14 14:06:12','src/Mainburger2.png',4000),('aa','crapegg',1,'2016-12-15 02:10:35','src/egg.PNG',5000),('aa','tiramisu',1,'2016-12-15 02:38:55','src/tiramisu.PNG',10000);
/*!40000 ALTER TABLE `buyhistory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `qna_num` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `comment_id` varchar(50) NOT NULL,
  `commnet_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (1,'test','aa','2016-12-15 08:35:43'),(1,'test','aa','2016-12-15 08:48:05'),(2,'ㅈ','aa','2016-12-15 09:07:57'),(3,'치킨을 드세요','TEST','2016-12-15 09:50:54');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods` (
  `menu_name` varchar(100) NOT NULL,
  `menu_img` varchar(500) NOT NULL,
  `menu_price` int(11) NOT NULL,
  `menu_balance` int(11) NOT NULL,
  `menu_calorie` varchar(100) NOT NULL,
  `menu_explain` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES ('coke','src/coke.png',1000,21,'200kcal','가장 맛있는 콜라'),('sprite','src/sprite.png',1000,57,'200kcal','스프라이트가 얼큰하네'),('burger1','src/Mainburger1.png',4000,94,'1500kcal','인생에 한번 볼까 말까 한 햄버거'),('burger2','src/Mainburger2.png',4000,91,'2000kcal','두명 먹다 네명죽어도 모르는 맛'),('burger3','src/Mainburger3.png',4000,99,'1800kcal','이 맛 모르면 간첩'),('burger4','src/Mainburger4.png',4000,98,'1600kcal','죽기 전에 먹어야 할 버거'),('crapegg','src/egg.PNG',5000,99,'100kcal','입 안에서 살살 녹은 부드러운 크래미 계란말이'),('tiramisu','src/tiramisu.PNG',10000,49,'985kcal','이탈리안 장인의 손맛 을 제대로 맛 볼수 있는\r\n환상의 디저트'),('chicken','src/chicken.PNG',10000,20,'2680kcal','입 안에서 살살녹는 바삭한 치킨');
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES ('qw','12'),('하하','123'),('aa','12'),('TEST','1234');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qnaboard`
--

DROP TABLE IF EXISTS `qnaboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `qnaboard` (
  `qna_num` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `qna_title` varchar(100) NOT NULL,
  `qna_content` varchar(500) NOT NULL,
  `qna_date` datetime NOT NULL,
  `qna_id` varchar(50) NOT NULL,
  `qna_password` varchar(50) NOT NULL,
  PRIMARY KEY (`qna_num`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qnaboard`
--

LOCK TABLES `qnaboard` WRITE;
/*!40000 ALTER TABLE `qnaboard` DISABLE KEYS */;
INSERT INTO `qnaboard` VALUES (1,'Test','tt','2016-12-15 08:27:08','aa','12'),(2,'hi','이거 머야','2016-12-15 09:05:39','aa','12'),(3,'이것 좀 알려주세요','저녁으로 무엇을 먹을까요','2016-12-15 09:50:24','TEST','1234');
/*!40000 ALTER TABLE `qnaboard` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-15 22:22:17
