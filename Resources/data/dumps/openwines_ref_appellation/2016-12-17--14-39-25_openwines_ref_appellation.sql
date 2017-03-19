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
-- Table structure for table `openwines_ref_appellation`
--

DROP TABLE IF EXISTS `openwines_ref_appellation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `openwines_ref_appellation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appellation_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area` int(11) NOT NULL,
  `annual_production_quantity` int(11) DEFAULT NULL,
  `soil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wine_sweetness` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wine_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `odg_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `odg_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wikipedia_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wikidata_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `creation_year` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9CFA021F77153098` (`code`),
  UNIQUE KEY `UNIQ_9CFA021F5E237E06` (`name`),
  UNIQUE KEY `UNIQ_9CFA021FAC9C95FD` (`image_url`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `openwines_ref_appellation`
--

LOCK TABLES `openwines_ref_appellation` WRITE;
/*!40000 ALTER TABLE `openwines_ref_appellation` DISABLE KEYS */;
INSERT INTO `openwines_ref_appellation` VALUES (3,'muscadet','Muscadet','Appellation d\'Origine Controlée',8300,727000,'limoneux et sableux:  granite, schiste, argile','dry','white','SDAOC Muscadet','http://www.muscadet-grosplant.fr/','https://fr.wikipedia.org/wiki/Muscadet_(AOC)','https://www.wikidata.org/wiki/Q1954034','Le muscadet est un vin blanc sec d\'appellation d\'origine contrôlée produit principalement en Loire-Atlantique au sud de Nantes, et débordant partiellement sur le Maine-et-Loire et la Vendée. Ce vin du vignoble de la vallée de la Loire est issu d\'un cépage unique, le melon de Bourgogne. Cette appellation est classée AOC depuis 1936 et couvre une superficie d\'environ 8 300 hectares vers l\'an 2016 .\nLe vignoble du muscadet comporte plusieurs appellations : le muscadet-sèvre-et-maine, le muscadet-côtes-de-grandlieu, le muscadet-coteaux-de-la-loire et le muscadet sans dénomination particulière. Le muscadet est un vin sec aux arômes floraux et fruités qui peut être élevé sur lie d\'où il tirera une légère effervescence dite « perlante ». Ce vin s\'accorde particulièrement bien avec les fruits de mer.','https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/AOC_Muscadet%2C_mill%C3%A9sime_2004.jpg/280px-AOC_Muscadet%2C_mill%C3%A9sime_2004.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1936);
/*!40000 ALTER TABLE `openwines_ref_appellation` ENABLE KEYS */;
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
