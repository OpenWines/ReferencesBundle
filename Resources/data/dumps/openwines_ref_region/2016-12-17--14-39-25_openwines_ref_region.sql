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
-- Table structure for table `openwines_ref_region`
--

DROP TABLE IF EXISTS `openwines_ref_region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `openwines_ref_region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `departements` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area` double NOT NULL,
  `wikipedia_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wikidata_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_765A9DB377153098` (`code`),
  UNIQUE KEY `UNIQ_765A9DB35E237E06` (`name`),
  UNIQUE KEY `UNIQ_765A9DB3CF7489B2` (`departements`),
  UNIQUE KEY `UNIQ_765A9DB3AC9C95FD` (`image_url`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `openwines_ref_region`
--

LOCK TABLES `openwines_ref_region` WRITE;
/*!40000 ALTER TABLE `openwines_ref_region` DISABLE KEYS */;
INSERT INTO `openwines_ref_region` VALUES (1,'loire','Val de Loire','Le vignoble de la vallée de la Loire, appelé aussi vignoble du Val de Loire ou vignoble ligérien, est une vaste zone de production de vin en France, regroupant plusieurs régions viticoles. Ces régions produisent des vins blancs secs, demi-secs, moelleux, voire liquoreux, des vins rouges le plus souvent légers et des vins rosés ; on trouve également de nombreux vins effervescents. Toutes ces régions sont situées au bord de la Loire et de ses affluents.\nLe vignoble de la Loire comprend une superficie de 70 000 hectares dont 52 000 hectares en VQPRD (AOC et AOVDQS). Les volumes de production donnent 4 millions d\'hectolitres dont 3 millions en VQPRD. Il est délimité en quatre régions de production qui sont le pays nantais, l\'Anjou, la Touraine et le Centre.\nLes cépages utilisés dans la vallée de la Loire sont le cabernet franc N, le grolleau N, le gamay N, le pineau d\'Aunis N, le pinot noir N, le côt N, etc. pour les vins rouges et rosés. Le chenin blanc B, le sauvignon B, le melon B, le chardonnay B, etc. pour les vins blancs.','Loire-Atlantique, Vendée, Maine-et-Loire, Deux-Sèvres, Vienne, Sarthe, Indre, Indre-et-Loire, Loir-et-Cher, Loiret, Cher, Nièvre, Allier, Puy-de-Dôme, Loire',70000,'https://fr.wikipedia.org/wiki/Vignoble_de_la_vall%C3%A9e_de_la_Loire','https://www.wikidata.org/wiki/Q1954580','https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Vignobles_val_de_loire.png/1280px-Vignobles_val_de_loire.png','2016-12-15 06:51:40','2016-12-15 06:51:40');
/*!40000 ALTER TABLE `openwines_ref_region` ENABLE KEYS */;
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
