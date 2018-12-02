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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-02 15:37:18
