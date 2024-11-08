-- MySQL dump 10.13  Distrib 8.0.39, for Linux (x86_64)
--
-- Host: localhost    Database: assign2db
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctor` (
  `licensenum` char(4) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `licensedate` date NOT NULL,
  `birthdate` date NOT NULL,
  `hosworksat` char(3) DEFAULT NULL,
  `speciality` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`licensenum`),
  KEY `fk_worksat` (`hosworksat`),
  CONSTRAINT `fk_worksat` FOREIGN KEY (`hosworksat`) REFERENCES `hospital` (`hoscode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctor`
--

LOCK TABLES `doctor` WRITE;
/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
INSERT INTO `doctor` VALUES ('AB12','Abby','Smith','2024-06-05','1982-01-13','BBC','Family Medicine'),('BB45','Brendan','Bain','2024-11-22','2015-02-18','BBC','Family Medicine'),('BB87','Meredith','Grey','2001-12-31','2001-12-31','ABC','Respirologist'),('GD56','Joey','Shabado','1960-06-24','1969-06-24','BBC','Podiatrist'),('HT45','Ross','Clooney','1987-06-20','1940-06-22','DDE','Surgeon'),('JK78','Mandy','Webster','1990-09-08','1969-10-11','BBC','Surgeon'),('SE66','Colleen','Aziz','1989-08-24','1999-01-26','ABC','Surgeon'),('YT67','Ben','Spock','1955-02-20','1930-06-11','DDE','Urologist');
/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hospital` (
  `hoscode` char(3) NOT NULL,
  `hosname` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `prov` char(2) NOT NULL,
  `numofbed` smallint NOT NULL,
  `headdoc` char(4) DEFAULT NULL,
  `headdocstartdate` date DEFAULT NULL,
  PRIMARY KEY (`hoscode`),
  KEY `headdoc` (`headdoc`),
  CONSTRAINT `hospital_ibfk_1` FOREIGN KEY (`headdoc`) REFERENCES `doctor` (`licensenum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospital`
--

LOCK TABLES `hospital` WRITE;
/*!40000 ALTER TABLE `hospital` DISABLE KEYS */;
INSERT INTO `hospital` VALUES ('ABC','Victoria','London','ON',1599,'SE66','2004-05-30'),('BBC','St. Joseph','London','ON',1000,'GD56','2010-12-19'),('DDE','Victoria','Victoria','BC',1200,'YT67','2001-06-01'),('EYK','East York','Toronto','ON',1000,'BB87','2022-10-19');
/*!40000 ALTER TABLE `hospital` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `looksafter`
--

DROP TABLE IF EXISTS `looksafter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `looksafter` (
  `licensenum` char(4) NOT NULL,
  `ohipnum` char(9) NOT NULL,
  PRIMARY KEY (`licensenum`,`ohipnum`),
  KEY `ohipnum` (`ohipnum`),
  CONSTRAINT `looksafter_ibfk_1` FOREIGN KEY (`licensenum`) REFERENCES `doctor` (`licensenum`) ON DELETE RESTRICT,
  CONSTRAINT `looksafter_ibfk_2` FOREIGN KEY (`ohipnum`) REFERENCES `patient` (`ohipnum`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `looksafter`
--

LOCK TABLES `looksafter` WRITE;
/*!40000 ALTER TABLE `looksafter` DISABLE KEYS */;
INSERT INTO `looksafter` VALUES ('AB12','110112113'),('GD56','110112113'),('YT67','111222111'),('BB45','111222333'),('JK78','111222333'),('SE66','111222333'),('YT67','111222333'),('GD56','333444555'),('HT45','444555666'),('GD56','667766777'),('JK78','667766777');
/*!40000 ALTER TABLE `looksafter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patient` (
  `ohipnum` char(9) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  PRIMARY KEY (`ohipnum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` VALUES ('110112113','Monica','Geller','1964-05-12'),('111222111','Phoebe','Bing','1959-12-24'),('111222333','Rachel','Green','1962-09-17'),('333444555','Chandler','Geller','1970-06-11'),('444555666','Ross','Geller','1967-08-12'),('667766777','Joey','Bing','1971-06-20');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `patientDoctorBdays`
--

DROP TABLE IF EXISTS `patientDoctorBdays`;
/*!50001 DROP VIEW IF EXISTS `patientDoctorBdays`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `patientDoctorBdays` AS SELECT 
 1 AS `dfirst`,
 1 AS `dlast`,
 1 AS `dbirth`,
 1 AS `pfirst`,
 1 AS `plast`,
 1 AS `pbirth`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `worksAt`
--

DROP TABLE IF EXISTS `worksAt`;
/*!50001 DROP VIEW IF EXISTS `worksAt`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `worksAt` AS SELECT 
 1 AS `worksAtCode`,
 1 AS `worksAtHos`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `patientDoctorBdays`
--

/*!50001 DROP VIEW IF EXISTS `patientDoctorBdays`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `patientDoctorBdays` AS select `d`.`firstname` AS `dfirst`,`d`.`lastname` AS `dlast`,`d`.`birthdate` AS `dbirth`,`p`.`firstname` AS `pfirst`,`p`.`lastname` AS `plast`,`p`.`birthdate` AS `pbirth` from ((`doctor` `d` join `patient` `p`) join `looksafter` `L`) where ((`d`.`licensenum` = `L`.`licensenum`) and (`p`.`ohipnum` = `L`.`ohipnum`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `worksAt`
--

/*!50001 DROP VIEW IF EXISTS `worksAt`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `worksAt` AS select `hospital`.`hoscode` AS `worksAtCode`,`hospital`.`hosname` AS `worksAtHos` from `hospital` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-08 10:01:16
