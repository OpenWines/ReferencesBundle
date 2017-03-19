-- MySQL dump 10.13  Distrib 5.7.13, for osx10.11 (x86_64)
--
-- Host: localhost    Database: openwines
-- ------------------------------------------------------
-- Server version	5.7.13

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
-- Table structure for table `openwines_ref_varietal`
--

DROP TABLE IF EXISTS `openwines_ref_varietal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `openwines_ref_varietal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `family` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `area` int(11) NOT NULL,
  `wikipedia_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wikidata_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_657F7EB177153098` (`code`),
  UNIQUE KEY `UNIQ_657F7EB15E237E06` (`name`),
  UNIQUE KEY `UNIQ_657F7EB127AED2DA` (`wikipedia_url`),
  UNIQUE KEY `UNIQ_657F7EB1C81B5A3` (`wikidata_url`),
  UNIQUE KEY `UNIQ_657F7EB1AC9C95FD` (`image_url`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `openwines_ref_varietal`
--

LOCK TABLES `openwines_ref_varietal` WRITE;
/*!40000 ALTER TABLE `openwines_ref_varietal` DISABLE KEYS */;
INSERT INTO `openwines_ref_varietal` VALUES (1,'Melon_B','melon de Bourgogne',NULL,'Le melon B (ou melon de Bourgogne) est un cépage blanc de cuve français. Cette variété de vigne est originaire du vignoble de Bourgogne ; peu utilisée dans sa région d\'origine, elle est très répandue en Loire-Atlantique sous le nom de muscadet (appellations muscadet, muscadet-sèvre-et-maine, muscadet-côtes-de-grandlieu et muscadet-coteaux-de-la-loire).',11000,'https://fr.wikipedia.org/wiki/Melon_(c%C3%A9page)','https://www.wikidata.org/wiki/Q1417652','https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Melon_de_bourgogne.jpg/280px-Melon_de_bourgogne.jpg','2016-12-14 16:49:14','2016-12-14 16:49:15');
/*!40000 ALTER TABLE `openwines_ref_varietal` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-17 14:39:26
