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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-02 15:37:18
