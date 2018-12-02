CREATE DATABASE  IF NOT EXISTS `cricket_analytics` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cricket_analytics`;
-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: cricket_analytics
-- ------------------------------------------------------
-- Server version	5.6.37

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `match_details`
--

DROP TABLE IF EXISTS `match_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `match_details` (
  `match_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `match_id_fk` int(11) NOT NULL,
  `player_id_fk` int(11) NOT NULL,
  `player_score` int(11) NOT NULL,
  `player_wickets` int(11) NOT NULL,
  `player_balls_bowled` int(11) NOT NULL,
  `player_balls_faced` int(11) NOT NULL,
  PRIMARY KEY (`match_detail_id`),
  KEY `match_id_fk` (`match_id_fk`),
  KEY `player_id_fk` (`player_id_fk`),
  CONSTRAINT `match_details_ibfk_1` FOREIGN KEY (`match_id_fk`) REFERENCES `match_master` (`match_id`),
  CONSTRAINT `match_details_ibfk_2` FOREIGN KEY (`player_id_fk`) REFERENCES `player_master` (`player_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `match_details`
--

LOCK TABLES `match_details` WRITE;
/*!40000 ALTER TABLE `match_details` DISABLE KEYS */;
INSERT INTO `match_details` VALUES (1,1,1,74,3,43,204),(2,1,2,118,1,39,91),(3,1,3,72,5,35,13),(4,1,4,92,3,18,221),(5,1,5,86,4,36,215),(6,1,6,13,10,13,247),(7,1,7,60,9,40,222),(8,1,8,124,4,32,90),(9,1,9,59,4,55,102),(10,1,10,85,3,59,110),(11,1,11,142,5,28,261),(12,1,12,96,7,3,24),(13,1,13,21,5,8,170),(14,1,14,131,6,36,57),(15,1,15,59,3,22,116),(16,1,16,51,2,12,76),(17,1,17,35,6,42,238),(18,1,18,30,0,21,282),(19,1,19,42,3,20,20),(20,1,20,90,3,59,61),(21,1,21,31,1,1,19),(22,1,22,29,2,23,191),(23,2,1,74,3,43,204),(24,2,2,118,1,39,91),(25,2,3,72,5,35,13),(26,2,4,92,3,18,221),(27,2,5,86,4,36,215),(28,2,6,13,10,13,247),(29,2,7,60,9,40,222),(30,2,8,124,4,32,90),(31,2,9,59,4,55,102),(32,2,10,85,3,59,110),(33,2,11,142,5,28,261),(34,2,12,96,7,3,24),(35,2,13,21,5,8,170),(36,2,14,131,6,36,57),(37,2,15,59,3,22,116),(38,2,16,51,2,12,76),(39,2,17,35,6,42,238),(40,2,18,30,0,21,282),(41,2,19,42,3,20,20),(42,2,20,90,3,59,61),(43,2,21,31,1,1,19),(44,2,22,29,2,23,191),(45,4,1,74,3,43,204),(46,4,2,118,1,39,91),(47,4,3,72,5,35,13),(48,4,4,92,3,18,221),(49,4,5,86,4,36,215),(50,4,6,13,10,13,247),(51,4,7,60,9,40,222),(52,4,8,124,4,32,90),(53,4,9,59,4,55,102),(54,4,10,85,3,59,110),(55,4,11,142,5,28,261),(56,4,12,96,7,3,24),(57,4,13,21,5,8,170),(58,4,14,131,6,36,57),(59,4,15,59,3,22,116),(60,4,16,51,2,12,76),(61,4,17,35,6,42,238),(62,4,18,30,0,21,282),(63,4,19,42,3,20,20),(64,4,20,90,3,59,61),(65,4,21,31,1,1,19),(66,4,22,29,2,23,191);
/*!40000 ALTER TABLE `match_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `match_master`
--

DROP TABLE IF EXISTS `match_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `match_master` (
  `match_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id_1_fk` int(11) NOT NULL,
  `team_id_2_fk` int(11) NOT NULL,
  `venue_id_fk` int(11) NOT NULL,
  `score_team_1` int(11) NOT NULL,
  `score_team_2` int(11) NOT NULL,
  `wicket_team_1` int(11) NOT NULL,
  `wicket_team_2` int(11) NOT NULL,
  `match_result` varchar(100) NOT NULL,
  `umpire_id_fk` int(11) NOT NULL,
  `match_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime DEFAULT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`match_id`),
  KEY `umpire_id_fk` (`umpire_id_fk`),
  KEY `team_id_1_fk` (`team_id_1_fk`),
  KEY `team_id_2_fk` (`team_id_2_fk`),
  KEY `venue_id_fk` (`venue_id_fk`),
  CONSTRAINT `match_master_ibfk_1` FOREIGN KEY (`umpire_id_fk`) REFERENCES `match_umpire` (`umpire_id`),
  CONSTRAINT `match_master_ibfk_2` FOREIGN KEY (`team_id_1_fk`) REFERENCES `team_master` (`team_id`),
  CONSTRAINT `match_master_ibfk_3` FOREIGN KEY (`team_id_2_fk`) REFERENCES `team_master` (`team_id`),
  CONSTRAINT `match_master_ibfk_4` FOREIGN KEY (`venue_id_fk`) REFERENCES `venue` (`venue_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `match_master`
--

LOCK TABLES `match_master` WRITE;
/*!40000 ALTER TABLE `match_master` DISABLE KEYS */;
INSERT INTO `match_master` VALUES (1,1,3,1,100,101,1,2,'test',1,'2018-12-02 00:00:00','2018-12-02 01:50:49',NULL,2),(2,1,3,1,100,101,1,2,'test',1,'2018-12-02 00:00:00','2018-12-02 01:50:56',NULL,2),(3,2,3,1,100,101,1,2,'test',1,'2018-12-02 00:00:00','2018-12-02 12:22:57',NULL,-1),(4,2,1,1,100,101,1,2,'test X',1,'2018-12-02 00:00:00','2018-12-02 12:49:51',NULL,2),(5,2,1,1,100,101,1,2,'test X',1,'2018-12-02 00:00:00','2018-12-02 13:18:04',NULL,-1),(6,2,1,1,100,101,1,2,'test X',1,'2018-12-02 00:00:00','2018-12-02 13:18:39',NULL,-1),(7,2,1,1,100,101,1,2,'1test X',1,'2018-12-02 00:00:00','2018-12-02 13:20:18',NULL,-1),(8,2,1,1,100,101,1,2,'Sanzil testX',1,'2018-12-02 00:00:00','2018-12-02 13:20:50',NULL,-1),(9,2,1,1,100,101,1,2,'2Sanzil testX',1,'2018-12-02 00:00:00','2018-12-02 13:21:43',NULL,-1);
/*!40000 ALTER TABLE `match_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `match_umpire`
--

DROP TABLE IF EXISTS `match_umpire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `match_umpire` (
  `umpire_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  PRIMARY KEY (`umpire_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `match_umpire`
--

LOCK TABLES `match_umpire` WRITE;
/*!40000 ALTER TABLE `match_umpire` DISABLE KEYS */;
INSERT INTO `match_umpire` VALUES (1,'fname1','lname1');
/*!40000 ALTER TABLE `match_umpire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player_master`
--

DROP TABLE IF EXISTS `player_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `player_master` (
  `player_id` int(11) NOT NULL AUTO_INCREMENT,
  `player_name` varchar(100) NOT NULL,
  `Player_dob` date NOT NULL,
  `team_id_fk` int(11) NOT NULL,
  `player_nationality` varchar(100) NOT NULL,
  PRIMARY KEY (`player_id`),
  KEY `team_id_fk` (`team_id_fk`),
  CONSTRAINT `player_master_ibfk_1` FOREIGN KEY (`team_id_fk`) REFERENCES `team_master` (`team_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player_master`
--

LOCK TABLES `player_master` WRITE;
/*!40000 ALTER TABLE `player_master` DISABLE KEYS */;
INSERT INTO `player_master` VALUES (1,'John Doe99','1990-01-01',1,'hello world'),(2,'John Doe2','1990-01-02',1,'hello world'),(3,'John Doe3','1990-01-03',1,'hello world'),(4,'John Doe4','1990-01-04',1,'hello world'),(5,'John Doe5','1990-01-05',1,'hello world'),(6,'John Doe6','1990-01-06',1,'hello world'),(7,'John Doe7','1990-01-07',1,'hello world'),(8,'John Doe8','1990-01-08',1,'hello world'),(9,'John Doe9','1990-01-09',1,'hello world'),(10,'John Doe10','1990-01-10',1,'hello world'),(11,'John Doe11','1990-01-11',1,'hello world'),(12,'John Doe12','1990-01-12',2,'hello world'),(13,'John Doe13','1990-01-13',2,'hello world'),(14,'John Doe14','1990-01-14',2,'hello world'),(15,'John Doe15','1990-01-15',2,'hello world'),(16,'John Doe16','1990-01-16',2,'hello world'),(17,'John Doe17','1990-01-17',2,'hello world'),(18,'John Doe18','1990-01-18',2,'hello world'),(19,'John Doe19','1990-01-19',2,'hello world'),(20,'John Doe20','1990-01-20',2,'hello world'),(21,'John Doe21','1990-01-21',2,'hello world'),(22,'John Doe22','1990-01-22',2,'hello world'),(23,'John Doe23','1990-01-23',2,'hello world'),(24,'John Doe24','1990-01-24',2,'hello world'),(25,'John Doe25','1990-01-25',3,'hello world'),(26,'John Doe26','1990-01-26',3,'hello world'),(27,'John Doe27','1990-01-27',3,'hello world'),(28,'John Doe28','1990-01-28',3,'hello world'),(29,'John Doe29','1990-01-29',3,'hello world'),(30,'John Doe30','1990-01-30',3,'hello world'),(31,'John Doe31','1990-01-31',3,'hello world'),(32,'John Doe32','1990-02-01',3,'hello world'),(33,'John Doe33','1990-02-02',3,'hello world'),(34,'John Doe34','1990-02-03',3,'hello world'),(35,'John Doe35','1990-02-04',3,'hello world'),(36,'sanzil','2018-12-05',2,'USA'),(37,'aaa','2018-12-01',4,'aaa'),(38,'James','2000-12-02',3,'USA'),(39,'Aman','2016-02-01',1,'USA 2');
/*!40000 ALTER TABLE `player_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_master`
--

DROP TABLE IF EXISTS `team_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `team_master` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(100) NOT NULL,
  `team_mascot` varchar(100) NOT NULL,
  `team_desc` varchar(1000) NOT NULL,
  `team_ranking` int(11) DEFAULT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_master`
--

LOCK TABLES `team_master` WRITE;
/*!40000 ALTER TABLE `team_master` DISABLE KEYS */;
INSERT INTO `team_master` VALUES (1,'name 1','mascot 1','desc 1',NULL),(2,'name 2','mascot 2','desc 2',NULL),(3,'name 3','mascot 3','desc 3',NULL),(4,'USA','Trump','Desc',1);
/*!40000 ALTER TABLE `team_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_masp_insert_match_detailsster`
--

DROP TABLE IF EXISTS `user_masp_insert_match_detailsster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `user_masp_insert_match_detailsster` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_access` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_masp_insert_match_detailsster`
--

LOCK TABLES `user_masp_insert_match_detailsster` WRITE;
/*!40000 ALTER TABLE `user_masp_insert_match_detailsster` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_masp_insert_match_detailsster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `venue` (
  `venue_id` int(11) NOT NULL AUTO_INCREMENT,
  `venue_name` varchar(50) NOT NULL,
  `venue_city` varchar(50) NOT NULL,
  `venue_capacity` int(11) NOT NULL,
  PRIMARY KEY (`venue_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venue`
--

LOCK TABLES `venue` WRITE;
/*!40000 ALTER TABLE `venue` DISABLE KEYS */;
INSERT INTO `venue` VALUES (1,'New Pitt Venue','Pittsburgh',15232),(2,'name2','city2',10000),(3,'name3','city3',10000),(4,'Venue1','Pitt',100000),(5,'Pitt ven 1','Pittsburgh',15232),(6,'NY Arena','NY',1000000),(7,'qqq','wwww',15232);
/*!40000 ALTER TABLE `venue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cricket_analytics'
--
/*!50003 DROP PROCEDURE IF EXISTS `sp_getAllPlayer` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getAllPlayer`()
BEGIN
	select player_id,player_name,Player_dob,TIMESTAMPDIFF(YEAR, Player_dob, CURDATE()) as age,
    player_nationality, tm.team_name as teamName,tm.team_id as team_id
    from player_master as pm join team_master tm on pm.team_id_fk = tm.team_id;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_getAllTeams` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getAllTeams`()
BEGIN
select team_id,team_name, COALESCE(team_ranking,'NA') as team_ranking from team_master order by team_ranking;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_getAllVenue` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getAllVenue`()
BEGIN
select venue_id,venue_name,venue_city,venue_capacity from venue;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_insert_match_details` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_match_details`(
in m_id int,

in t1_p1_id int,
in t1_p1_score int,
in t1_p1_wickets int,
in t1_p1_balls_bowled int,
in t1_p1_balls_faced int,

in t1_p2_id int,
in t1_p2_score int,
in t1_p2_wickets int,
in t1_p2_balls_bowled int,
in t1_p2_balls_faced int,

in t1_p3_id int,
in t1_p3_score int,
in t1_p3_wickets int,
in t1_p3_balls_bowled int,
in t1_p3_balls_faced int,

in t1_p4_id int,
in t1_p4_score int,
in t1_p4_wickets int,
in t1_p4_balls_bowled int,
in t1_p4_balls_faced int,

in t1_p5_id int,
in t1_p5_score int,
in t1_p5_wickets int,
in t1_p5_balls_bowled int,
in t1_p5_balls_faced int,

in t1_p6_id int,
in t1_p6_score int,
in t1_p6_wickets int,
in t1_p6_balls_bowled int,
in t1_p6_balls_faced int,

in t1_p7_id int,
in t1_p7_score int,
in t1_p7_wickets int,
in t1_p7_balls_bowled int,
in t1_p7_balls_faced int,

in t1_p8_id int,
in t1_p8_score int,
in t1_p8_wickets int,
in t1_p8_balls_bowled int,
in t1_p8_balls_faced int,

in t1_p9_id int,
in t1_p9_score int,
in t1_p9_wickets int,
in t1_p9_balls_bowled int,
in t1_p9_balls_faced int,

in t1_p10_id int,
in t1_p10_score int,
in t1_p10_wickets int,
in t1_p10_balls_bowled int,
in t1_p10_balls_faced int,

in t1_p11_id int,
in t1_p11_score int,
in t1_p11_wickets int,
in t1_p11_balls_bowled int,
in t1_p11_balls_faced int,

in t2_p1_id int,
in t2_p1_score int,
in t2_p1_wickets int,
in t2_p1_balls_bowled int,
in t2_p1_balls_faced int,

in t2_p2_id int,
in t2_p2_score int,
in t2_p2_wickets int,
in t2_p2_balls_bowled int,
in t2_p2_balls_faced int,

in t2_p3_id int,
in t2_p3_score int,
in t2_p3_wickets int,
in t2_p3_balls_bowled int,
in t2_p3_balls_faced int,

in t2_p4_id int,
in t2_p4_score int,
in t2_p4_wickets int,
in t2_p4_balls_bowled int,
in t2_p4_balls_faced int,

in t2_p5_id int,
in t2_p5_score int,
in t2_p5_wickets int,
in t2_p5_balls_bowled int,
in t2_p5_balls_faced int,

in t2_p6_id int,
in t2_p6_score int,
in t2_p6_wickets int,
in t2_p6_balls_bowled int,
in t2_p6_balls_faced int,

in t2_p7_id int,
in t2_p7_score int,
in t2_p7_wickets int,
in t2_p7_balls_bowled int,
in t2_p7_balls_faced int,

in t2_p8_id int,
in t2_p8_score int,
in t2_p8_wickets int,
in t2_p8_balls_bowled int,
in t2_p8_balls_faced int,

in t2_p9_id int,
in t2_p9_score int,
in t2_p9_wickets int,
in t2_p9_balls_bowled int,
in t2_p9_balls_faced int,

in t2_p10_id int,
in t2_p10_score int,
in t2_p10_wickets int,
in t2_p10_balls_bowled int,
in t2_p10_balls_faced int,

in t2_p11_id int,
in t2_p11_score int,
in t2_p11_wickets int,
in t2_p11_balls_bowled int,
in t2_p11_balls_faced int

)
BEGIN

insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p1_id,t1_p1_score,t1_p1_wickets,t1_p1_balls_bowled,t1_p1_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p2_id,t1_p2_score,t1_p2_wickets,t1_p2_balls_bowled,t1_p2_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p3_id,t1_p3_score,t1_p3_wickets,t1_p3_balls_bowled,t1_p3_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p4_id,t1_p4_score,t1_p4_wickets,t1_p4_balls_bowled,t1_p4_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p5_id,t1_p5_score,t1_p5_wickets,t1_p5_balls_bowled,t1_p5_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p6_id,t1_p6_score,t1_p6_wickets,t1_p6_balls_bowled,t1_p6_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p7_id,t1_p7_score,t1_p7_wickets,t1_p7_balls_bowled,t1_p7_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p8_id,t1_p8_score,t1_p8_wickets,t1_p8_balls_bowled,t1_p8_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p9_id,t1_p9_score,t1_p9_wickets,t1_p9_balls_bowled,t1_p9_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p10_id,t1_p10_score,t1_p10_wickets,t1_p10_balls_bowled,t1_p10_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p11_id,t1_p11_score,t1_p11_wickets,t1_p11_balls_bowled,t1_p11_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p1_id,t2_p1_score,t2_p1_wickets,t2_p1_balls_bowled,t2_p1_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p2_id,t2_p2_score,t2_p2_wickets,t2_p2_balls_bowled,t2_p2_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p3_id,t2_p3_score,t2_p3_wickets,t2_p3_balls_bowled,t2_p3_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p4_id,t2_p4_score,t2_p4_wickets,t2_p4_balls_bowled,t2_p4_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p5_id,t2_p5_score,t2_p5_wickets,t2_p5_balls_bowled,t2_p5_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p6_id,t2_p6_score,t2_p6_wickets,t2_p6_balls_bowled,t2_p6_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p7_id,t2_p7_score,t2_p7_wickets,t2_p7_balls_bowled,t2_p7_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p8_id,t2_p8_score,t2_p8_wickets,t2_p8_balls_bowled,t2_p8_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p9_id,t2_p9_score,t2_p9_wickets,t2_p9_balls_bowled,t2_p9_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p10_id,t2_p10_score,t2_p10_wickets,t2_p10_balls_bowled,t2_p10_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p11_id,t2_p11_score,t2_p11_wickets,t2_p11_balls_bowled,t2_p11_balls_faced,m_id);

update match_master set `is_active` = 2
WHERE `match_id` = m_id;

select m_id;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_insert_match_master` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_match_master`(
in  team1_id int,
in team2_id int,
in venue_id int,
in ump_id int,
in m_date varchar(50),
in score_t1 int,
in score_t2 int,
in wicket_1 int,
in wicket_2 int,
in m_result varchar(100)
)
BEGIN

Declare l_active  int default -1;
set l_active = -1;

INSERT INTO `cricket_analytics`.`match_master`
(
`team_id_1_fk`,
`team_id_2_fk`,
`venue_id_fk`,
`score_team_1`,
`score_team_2`,
`wicket_team_1`,
`wicket_team_2`,
`match_result`,
`umpire_id_fk`,
`match_date`,
`created_date`,
`is_active`)
VALUES
(team1_id,team2_id,venue_id,score_t1,score_t2,wicket_1,wicket_2,m_result,ump_id,cast(m_date as date),now(),l_active
);


select match_id from `cricket_analytics`.`match_master` order by match_id desc;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_insert_team` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_team`(in team_name varchar(100), in team_mascot varchar(100), in team_desc varchar(100))
BEGIN
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;
    insert into team_master (team_name,team_mascot,team_desc) values (team_name,team_mascot,team_desc);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_insert_umpire` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_umpire`(IN f_name varchar(50),IN l_name varchar(50))
BEGIN
DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;

	INSERT INTO match_umpire (first_name,last_name) VALUES (f_name,l_name);

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_insert_venue` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_venue`(
in v_name varchar(50),
in city varchar(50),
in cap int
)
BEGIN
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;

INSERT INTO venue (venue_name,venue_city,venue_capacity) VALUES(
v_name,city,cap
);
 
 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_searchPlayerName` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_searchPlayerName`(in stext varchar(100))
BEGIN
select player_id,player_name,Player_dob,TIMESTAMPDIFF(YEAR, Player_dob, CURDATE()) as age,
    player_nationality, tm.team_name as teamName,tm.team_id as team_id
    from player_master as pm join team_master tm on pm.team_id_fk = tm.team_id
        WHERE pm.player_name LIKE '%stext%';
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_player` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_player`(in p_id int,in pname varchar(100), 
in p_dob date, in nat varchar(100))
BEGIN
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;
    
UPDATE `cricket_analytics`.`player_master` 
SET 
    `player_name` = pname,
    `Player_dob` = p_dob,
    `player_nationality` = nat
WHERE
    `player_id` = p_id;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_venue` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_venue`(in vid int, in vname varchar(100), in city varchar(100), in cap int)
BEGIN
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;
    
UPDATE `cricket_analytics`.`venue`
SET
`venue_name` = vname,
`venue_city` = city,
`venue_capacity` = cap
WHERE `venue_id` = vid;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-02 15:42:50
