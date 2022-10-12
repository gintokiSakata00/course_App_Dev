CREATE DATABASE  IF NOT EXISTS `logappgin_gil` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `logappgin_gil`;
-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: logappgin_gil
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `guest`
--

DROP TABLE IF EXISTS `guest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `guest` (
  `guest_id` int NOT NULL AUTO_INCREMENT,
  `Lname` varchar(45) NOT NULL,
  `Fname` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `job` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  `Tlog` varchar(45) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `pin4digit` varchar(45) NOT NULL,
  PRIMARY KEY (`guest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guest`
--

LOCK TABLES `guest` WRITE;
/*!40000 ALTER TABLE `guest` DISABLE KEYS */;
INSERT INTO `guest` VALUES (1,'Padon','Gillbert','tiniguiban','Professor','admin','2022-10-01 19:45:26','Gillbert Padon','1234'),(2,'lopez','janelle','Sta. Monica','chef','member','2022-10-01 20:28:19','janelle lopez','5432'),(3,'delgado','isaac','Massway','student','member','2022-10-01 20:58:52','isaac delgado','6789'),(4,'vallesca','alvin','psu gate','student','member','2022-10-01 20:59:58','alvin vallesca','6372'),(5,'cabitac','john mark','tiniguiban','student','member','2022-10-01 21:02:40','john mark cabitac','3456');
/*!40000 ALTER TABLE `guest` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-01 21:08:07
