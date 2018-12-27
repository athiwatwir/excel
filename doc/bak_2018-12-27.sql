-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 103.86.48.105    Database: admin_excel
-- ------------------------------------------------------
-- Server version	5.5.5-10.3.9-MariaDB

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
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` char(36) NOT NULL,
  `seq` int(11) NOT NULL,
  `office_center` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) NOT NULL,
  `farmer_code` varchar(45) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `plant_type` varchar(45) DEFAULT NULL,
  `ppm_as` varchar(45) DEFAULT NULL,
  `ppm_cd` varchar(45) DEFAULT NULL,
  `ppm_pb` varchar(45) DEFAULT NULL,
  `ppm_cr` varchar(45) DEFAULT NULL,
  `ppm_hg` varchar(45) DEFAULT NULL,
  `oc_item` varchar(45) DEFAULT NULL,
  `oc_weight` varchar(45) DEFAULT NULL,
  `py_item` varchar(45) DEFAULT NULL,
  `py_weight` varchar(45) DEFAULT NULL,
  `op_item` varchar(45) DEFAULT NULL,
  `op_weight` varchar(45) DEFAULT NULL,
  `ca_item` varchar(45) DEFAULT NULL,
  `ca_weight` varchar(45) DEFAULT NULL,
  `coordinates_e` int(11) DEFAULT NULL,
  `coordinates_n` int(11) DEFAULT NULL,
  `high` decimal(16,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `coliform` varchar(45) DEFAULT NULL,
  `fecal` varchar(45) DEFAULT NULL,
  `nutrient_cu` varchar(45) DEFAULT NULL,
  `nutrient_ca` varchar(45) DEFAULT NULL,
  `chemical_do` varchar(45) DEFAULT NULL,
  `chemical_bod` varchar(45) DEFAULT NULL,
  `chemical_no3n` varchar(45) DEFAULT NULL,
  `chemical_nh3n` varchar(45) DEFAULT NULL,
  `data_sheet_id` char(36) NOT NULL,
  `gen_ph` varchar(45) DEFAULT NULL,
  `gen_om` varchar(45) DEFAULT NULL,
  `gen_n` varchar(45) DEFAULT NULL,
  `gen_p` varchar(45) DEFAULT NULL,
  `gen_k` varchar(45) DEFAULT NULL,
  `area_number` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_sheets`
--

DROP TABLE IF EXISTS `data_sheets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_sheets` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `seq` int(11) DEFAULT 0,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `data_id` char(36) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `header` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_sheets`
--

LOCK TABLES `data_sheets` WRITE;
/*!40000 ALTER TABLE `data_sheets` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_sheets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datas`
--

DROP TABLE IF EXISTS `datas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datas` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` char(36) NOT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datas`
--

LOCK TABLES `datas` WRITE;
/*!40000 ALTER TABLE `datas` DISABLE KEYS */;
/*!40000 ALTER TABLE `datas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `usercode` varchar(100) DEFAULT NULL,
  `title` varchar(60) DEFAULT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `isactive` enum('Y','N') DEFAULT 'N',
  `gender` enum('F','M') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `verifycode` varchar(255) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `image_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('cbafe4c8-b324-4576-b954-34c849c6ecc2','test@dpo.go.th','ad','ad','ad','$2y$10$y9Vouv5eBnbumleCY81I6.Hdhk8rUjTkUq/WcRkI9SaLLefs0MlLy','admin@excel.com','','N','F','2018-11-28 16:45:32',NULL,'','',NULL),('f332f204-cb67-49fd-934a-5bc7713d34b3','test@dpo.go.th','ad','admin','admin','0000','xxx@xx.xx','0888888888','N','M','2018-11-28 15:40:16',NULL,'','',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-27 12:06:06
