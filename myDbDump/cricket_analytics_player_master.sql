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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-02 15:37:17
