-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: accessa_logistics
-- ------------------------------------------------------
-- Server version	5.7.33

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
-- Table structure for table `areas`
--

DROP TABLE IF EXISTS `areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_area` varchar(100) DEFAULT NULL,
  `clave_int` varchar(20) DEFAULT NULL,
  `ext_phone` varchar(10) DEFAULT NULL,
  `gerente` varchar(150) DEFAULT NULL,
  `date_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areas`
--

LOCK TABLES `areas` WRITE;
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` VALUES (1,'Tecnologias de la información','TIM','11500','Juan Pedro','2022-12-14 22:36:51'),(2,'Contabilidad','COM','11200','Juan Carlos','2022-12-14 22:37:24'),(3,'Recursos humanos','RHM','11100','Nayeli Gomez','2022-12-14 22:37:48');
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleados` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria y autoincremental del empleado',
  `full_name` varchar(250) NOT NULL COMMENT 'Nombre completo del empleado',
  `alias` varchar(100) NOT NULL COMMENT 'Nombre de usuario del empleado nombre corto',
  `email` varchar(150) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `date_admission` date DEFAULT NULL,
  `salary` float DEFAULT NULL,
  `password` varchar(250) NOT NULL,
  `area` int(11) NOT NULL COMMENT 'Llave foranea a tabla de areas',
  `perfil` int(11) NOT NULL COMMENT 'Llave foranea a la tabla de perfiles',
  `date_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `borrado` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `empleados_areas_FK` (`area`),
  KEY `empleados_perfiles_FK` (`perfil`),
  CONSTRAINT `empleados_areas_FK` FOREIGN KEY (`area`) REFERENCES `areas` (`id`),
  CONSTRAINT `empleados_perfiles_FK` FOREIGN KEY (`perfil`) REFERENCES `perfiles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (1,'Juan Carlos Gutierrez Martinez','JUCAGM','jc.gumar96@gmail.com','1996-08-26','Conocido Colima Col.','5531464285','2023-01-15',35000,'Jswedf$12',1,3,'2022-12-14 22:40:48',0);
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfiles`
--

DROP TABLE IF EXISTS `perfiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `clave_int` varchar(10) DEFAULT NULL,
  `salary_min` float DEFAULT NULL,
  `salary_max` float DEFAULT NULL,
  `date_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles`
--

LOCK TABLES `perfiles` WRITE;
/*!40000 ALTER TABLE `perfiles` DISABLE KEYS */;
INSERT INTO `perfiles` VALUES (1,'Desarrollador','DEM',15000,20000,'2022-12-14 22:38:11'),(2,'Analista sistemas','ASM',10000,15000,'2022-12-14 22:38:36'),(3,'Tester','TEM',8000,11000,'2022-12-14 22:38:53');
/*!40000 ALTER TABLE `perfiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'accessa_logistics'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-14 18:17:09
