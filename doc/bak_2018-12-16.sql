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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES ('f68b0df9-3780-43e5-8d56-90416e78c105',1,'นายวรัญญู แซ่วะ','-',NULL,NULL,2554,NULL,'0.90','ND','26.89','27.72','ND','ND','ND','Cypermethrin','0.029','Chlorpyrifos','0.33','ND','ND',455009,2028500,455009.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','-','-','-','-','-','2028500'),('e35097ad-0ba6-4d9e-85fa-563192e848a0',2,'นายโอภาส แซ่วะ','-',NULL,NULL,0,NULL,'1.29','ND','30.61','26.44','ND','-','-','-','-','Triazophos','< 0.02','-','-',454951,2028515,454951.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','-','-','-','-','-','2028515'),('0f281043-a9c9-4503-94b5-babd2fb700f5',3,'แปลงในศูนย์','-',NULL,NULL,0,NULL,'0.81','ND','34.87','26.35','ND','ND','ND','Cypermethrin','0.027','Chlorpyrifos','1.82','ND','ND',454903,2028338,454903.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','-','-','-','-','-','2028338'),('ff12a884-cbee-4d57-9047-0e2f08326eef',4,'นายโก๊ะ  แซ่วะ','-',NULL,NULL,2555,NULL,'41.00','ND','41.00','25.17','ND','ND','ND','ND','ND','Chlorpyrifos','0.039','ND','ND',454907,2028320,454907.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','-','-','-','-','-','2028320'),('e8f5eb9a-b466-414f-9a7e-f211aac2c0c1',5,'นายนุ  แซ่วะ','-',NULL,NULL,0,NULL,'32.31','ND','32.31','32.19','ND','Dieldrin','0.041','ND','ND','Chlorpyrifos','0.41','ND','ND',454973,2028383,454973.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','-','-','-','-','-','2028383'),('5eebdf2d-ceaf-48fc-a8aa-10e5db2f8b5c',6,'นายกั๊วะ  แซ่วะ','-',NULL,NULL,0,NULL,'28.44','ND','28.44','31.59','ND','ND','ND','ND','ND','Chlorpyrifos','0.28','ND','ND',454991,2028491,454991.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','-','-','-','-','-','2028491'),('2315ab44-606f-4340-94ef-dd6246d9e4a9',7,'นายเจี๊ยะ เจริญกุลพิวัฒน์','-',NULL,NULL,2556,NULL,'5.50','ND','31.19','29.69','ND','ND','ND','ND','ND','Chlorpyrifos','0.43','ND','ND',450446,2026953,450446.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','-','-','-','-','-','2026953'),('62fdd8bf-7fe0-4b83-8706-f044f151cce9',8,'นายเฒ่า ธาราวโรดม','-',NULL,NULL,0,NULL,'2.75','ND','37.25','22.44','ND','ND','ND','ND','ND','ND','ND','ND','ND',449836,2026919,449836.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','-','-','-','-','-','2026919'),('3a9a7661-52cc-41d4-8596-2c8fdf4d8049',9,'นายชาคริต แซ่วะ','-',NULL,NULL,0,NULL,'3.23','ND','36.98','30.45','ND','ND','ND','ND','ND','ND','ND','ND','ND',455054,2029699,455054.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','-','-','-','-','-','2029699'),('86fb051f-f68e-4189-b46c-abf96147150f',10,'นายแดง เลาวะ','-',NULL,NULL,2557,NULL,'3.86','ND','-','-','-','ND','ND','ND','ND','ND','ND','ND','ND',449635,2026764,449635.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','-','-','-','-','-','2026764'),('bc5eec72-b670-42c2-a2be-f5b5e35775bd',11,'นายยี แซ่ยะ','-',NULL,NULL,0,NULL,'2.00','ND','-','-','-','ND','ND','ND','ND','ND','ND','ND','ND',455374,2027709,455374.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','-','-','-','-','-','2027709'),('9e119c11-2a6b-4230-8f3c-33d1cc9c6224',12,'นายร่ม วิทยาวัฒนกิจ','-',NULL,NULL,0,NULL,'1.72','ND','-','-','-','ND','ND','ND','ND','ND','ND','ND','ND',455977,2029773,455977.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','-','-','-','-','-','2029773'),('881f5982-a724-4d09-9eb0-cbdf324ddee3',14,'นายสุรศักดิ์ แซ่ยะ ','-',NULL,NULL,2558,NULL,'ND','ND','-','-','-','ND','ND','ND','ND','Chlorpyrifos','<0.02','ND','ND',449767,2028105,449767.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','5.78','4.99','0.254','31.19','< 0.010','2028105'),('02b9e558-5817-4ffc-9ce9-7aa2d9b7a6b0',15,'นายจีระ แซ่ยะ  ','-',NULL,NULL,0,NULL,'0.67','ND','-','-','-','ND','ND','ND','ND','Chlorpyrifos','0.03','ND','ND',453767,2029556,453767.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','5.36','5.36','0.326','49.00','< 0.010','2029556'),('c22e7470-0e7f-4ff0-9f02-d8d436dfad14',16,'นายเจี๊ยะ แซ่ยะ ','-',NULL,NULL,0,NULL,'1.36','ND','-','-','-','ND','ND','ND','ND','ND','ND','ND','ND',455657,2029727,455657.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','5.17','15.90','0.701','15.37','ND','2029727'),('624337d0-389b-4ca3-bf3b-98d647a252a3',17,'ศูนย์ฯ ขยายผลฯ ป่ากล้วย','-',NULL,NULL,2559,NULL,'3.62','ND','-','-','-','ND','ND','ND','ND','Chlorpyrifos','0.09','ND','ND',454830,2028371,454830.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','5.80','9.10','0.57','130.02','0.096','2028371'),('454ace84-3667-4a00-be55-400c41d120a2',18,'นายยิ่ง วัฒนกิจ','-',NULL,NULL,0,NULL,'3.26','ND','-','-','-','p,p\'-DDT','0.008','Cypermethrin','0.02','Chlorpyrifos','0.18','ND','ND',455293,2027697,455293.00,NULL,'2018-12-03 08:14:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','5.17','6.46','0.69','142.06','0.080','2027697'),('9b0bdd1e-a785-425d-841e-50a6273fe44d',19,'นายยิ่ง วัฒนกิจ','-',NULL,NULL,0,NULL,'3.12','ND','-','-','-','ND','ND','Cypermethrin','0.02','Chlorpyrifos','0.04','ND','ND',454899,2028558,454899.00,NULL,'2018-12-03 08:14:54',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','5.79','6.62','0.49','27.26','0.035','2028558'),('fa32f4e7-b238-4955-bce3-d7174c1ba254',20,'นายเจี๊ยะ  แซ่วะ','-',NULL,NULL,2560,NULL,'1.6','ND','-','-','-','ND','-','ND','-','Chlorpyrifos','0.1','Methomyl','0.02',455234,2007668,455234.00,NULL,'2018-12-03 08:14:54',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','5.20','7.08','0.42','87.38','0.034','2007668'),('c4451584-559b-4197-9faf-f41d31c07293',21,'นาบกัวะ  แซ่วะ','-',NULL,NULL,0,NULL,'3.45','ND','-','-','-','ND','-','Cypermethrin','0.05','ND','-','ND','-',455271,2029609,455271.00,NULL,'2018-12-03 08:14:54',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','5.57','7.29','0.54','17.62','0.018','2029609'),('60ac6f96-1d1d-4cc3-958b-ec287318ca5a',22,'นายธาวี  แซ่วะ','-',NULL,NULL,0,NULL,'5.83','ND','-','-','-','ND','-','Cypermethrin','0.05','ND','-','ND','-',455298,2029519,455298.00,NULL,'2018-12-03 08:14:54',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','5.36','9.54','0.53','37.26','0.015','2029519'),('9617f8fe-dc5e-4aae-bbe2-600530020bcd',1,'ลำห้วยแม่สอย (ต้นน้ำ)','-',NULL,NULL,2554,NULL,'ND','ND','ND','ND','ND',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',453520,2028881,0.00,NULL,'2018-12-03 08:14:54','23','4.5','ND','1.41','5.57','0.80','0.98','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('a3d39201-f0db-4e2a-b72e-565c516497b0',2,'ลำห้วยแม่สอย (กลางน้ำ)','-',NULL,NULL,0,NULL,'ND','ND','<0.0010','ND','ND',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',454898,2028552,0.00,NULL,'2018-12-03 08:14:54','33','33','<0.0050','5.46','4.35','0.50','<0.40','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('12d93c41-85eb-46f9-9860-aa42476b3b03',3,'ลำห้วยแม่สอย (ปลายน้ำ)','-',NULL,NULL,0,NULL,'ND','ND','ND','ND','ND',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',453663,2029463,0.00,NULL,'2018-12-03 08:14:54','170','170','ND','1.76','5.82','1.30','ND','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('d4085559-88b1-4e5a-9dd2-c33e82a4a14a',4,'ไม่ทราบชื่อ (ต้นน้ำ)','-',NULL,NULL,2555,NULL,'ND','ND','0.0028','ND','ND',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',454135,2028656,0.00,NULL,'2018-12-03 08:14:54','110','27','ND','1.34','4.00','1.92','<0.40','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('9a90dc1e-e9b0-4cfb-afb2-c1679180d1a9',5,'ไม่ทราบชื่อ (กลางน้ำ)','-',NULL,NULL,0,NULL,'ND','ND','0.00134','ND','ND',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',544982,2028179,0.00,NULL,'2018-12-03 08:14:54','700','49','ND','3.40','5.70','2.57','0.80','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('d9cd5e11-7c8e-4685-89fc-e51399668168',6,'ไม่ทราบชื่อ (ปลายน้ำ)','-',NULL,NULL,0,NULL,'ND','ND','ND','ND','ND',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',545494,2027780,0.00,NULL,'2018-12-03 08:14:54','110','70','ND','1.77','6.60','2.27','<0.40','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('e52ec1a6-7060-4599-b2c9-48a2b25a2a6e',7,'ลำห้วยแม่สอย (ต้นน้ำ)','-',NULL,NULL,2556,NULL,'ND','ND','ND','ND','ND',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',450447,2027240,0.00,NULL,'2018-12-03 08:14:54','79','79','ND','1.92','7.00','0.75','0.42','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('73b8ce4f-c0fb-4b94-b947-25dda49446d8',8,'ลำห้วยแม่สอย (กลางน้ำ)','-',NULL,NULL,0,NULL,'ND','ND','ND','ND','ND',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',450365,2026924,0.00,NULL,'2018-12-03 08:14:54','280','220','ND','2.14','7.60','1.30','<0.40','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('d5ac24e5-c0e7-4d6f-a72a-0a1972214e95',9,'ลำน้ำสวนเตโหล่ (ปลายน้ำ)','-',NULL,NULL,0,NULL,'ND','ND','ND','ND','ND',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',449897,2027898,0.00,NULL,'2018-12-03 08:14:54','170','140','ND','2.21','7.60','0.85','<0.40','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('67851845-81a1-432c-a569-da2016b322b7',10,'ไม่ทราบชื่อ (ต้นน้ำ)','-',NULL,NULL,0,NULL,'ND','ND','ND','ND','< 0.0010',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',455061,2029557,0.00,NULL,'2018-12-03 08:14:54','79','49','ND','1.28','7.70','5.19','<0.40','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('197487d3-66f7-46a8-8d43-6ec6241d78bb',11,'ท่อน้ำ (ต้นน้ำ)','-',NULL,NULL,2557,NULL,'0.00122','-','-','-','-',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',449635,2026764,0.00,NULL,'2018-12-03 08:14:54','2300','330','-','3.59','5','0.65','<0.40','0.18','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('d6d303ff-035e-4600-860a-5028b73096ea',12,'ท่อน้ำ (กลางน้ำ)','-',NULL,NULL,0,NULL,'ND','-','-','-','-',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',455476,2027776,0.00,NULL,'2018-12-03 08:14:54','170','110','-','2.29','8.00','0.62','0.93','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('3c5ac580-6aa1-4bb0-9c29-2d89ff8963df',13,'ท่อน้ำ (ปลายน้ำ)','-',NULL,NULL,0,NULL,'ND','-','-','-','-',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',455892,2029744,0.00,NULL,'2018-12-03 08:14:54','3300','3300','-','1.37','5','0.55','<0.40','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('560a1899-ca32-4301-8cf7-f4ce1fbb2db3',14,'ลำห้วยแต๊ะโหล่','-',NULL,NULL,2558,NULL,'ND','-','-','-','-',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',449879,2027921,1386.00,NULL,'2018-12-03 08:14:54','46','46','-','1.26','5.75','0.75','<0.40','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('54e30bf4-8340-4b73-a2eb-9390b657dece',15,'ลำห้วยแม่เตี๊ยะ','-',NULL,NULL,0,NULL,'ND','-','-','-','-',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',455154,2029701,1302.00,NULL,'2018-12-03 08:14:55','210','61','-','1.64','7.75','0.80','<0.40','0.33','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('86bc18e2-fdcd-4c84-bdaf-ea4b2acc1861',16,'ลำห้วยแต๊ะเลี๊ยะ ','-',NULL,NULL,0,NULL,'ND','-','-','-','-',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',453833,2029531,1271.00,NULL,'2018-12-03 08:14:55','79','33','-','3.19','7.39','0.60','2.13','0.20','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('989963d2-a77e-4c78-9648-a2043150c231',17,'น้ำผุดแม่สึก (ต้นน้ำ)','-',NULL,NULL,2559,NULL,'< 0.00100','-','-','-','-',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',454830,2028371,1.00,NULL,'2018-12-03 08:14:55','130','130','-','1.58','7.07','1.00','0.21','1.45','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('807f5129-7ac0-4245-a5a1-b465f8ffd3bf',18,'ห้วยแม่ที (ต้นน้ำ)','-',NULL,NULL,0,NULL,'< 0.00100','-','-','-','-',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',455293,2027697,1.00,NULL,'2018-12-03 08:14:55','13','2.0','-','0.82','7.57','0.96','0.30','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('f9cf2134-8e7e-4ee9-847e-f6c67c33e9c2',19,'ตาน้ำผุด (ต้นน้ำ)','-',NULL,NULL,0,NULL,'< 0.00100','-','-','-','-',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',454899,2028558,1.00,NULL,'2018-12-03 08:14:55','33','33','-','5.21','4.61','0.25','20.22','0.13','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('d3bc41e2-e916-49e1-9f11-42cd6ea06e6f',20,'ลำน้ำแม่สอย','-',NULL,NULL,2560,NULL,'ND','-','-','-','-',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',454761,2028375,1371.00,NULL,'2018-12-03 08:14:55','33','< 1.8','-','2.64','7.70','1.06','< 0.40','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('89da9c38-573f-4a7c-8610-62df568691c5',21,'ลำน้ำแม่ที','-',NULL,NULL,0,NULL,'ND','-','-','-','-',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',455236,2027655,1173.00,NULL,'2018-12-03 08:14:55','79','4.5','-','2.91','9.60','0.28','0.59','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL),('6212ab43-1f3c-486c-b4c4-1cfc626e6a78',22,'ลำตาน้ำผุด','-',NULL,NULL,0,NULL,'ND','-','-','-','-',NULL,'ND',NULL,'ND',NULL,'ND',NULL,'ND',454902,2028553,1358.00,NULL,'2018-12-03 08:14:55','< 1.8','< 1.8','-','6.65','5.20','1.50','2.34','ND','4d001f8e-dec1-4059-9339-2729a694c07e',NULL,NULL,NULL,NULL,NULL,NULL);
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
INSERT INTO `data_sheets` VALUES ('c1d6e1a6-3e47-4a4d-8d4c-c87719d4a4c5','รวมดิน',0,'2018-12-03 08:14:52','2018-12-03 08:14:52','c6a1aa76-30cf-4712-a843-faff9a94bfb7','<tr>\n                                    <th colspan=\"25\" style=\"text-align: center\">ผลการตรวจวิเคราะห์ดิน ปี 2554-2560 โครงการพัฒนาพื้นที่สูงแบบโครงการหลวงป่ากล้วย</th>\n                                </tr>','form2'),('4d001f8e-dec1-4059-9339-2729a694c07e','รวมน้ำ',1,'2018-12-03 08:14:54','2018-12-03 08:14:54','c6a1aa76-30cf-4712-a843-faff9a94bfb7','<tr>\n                                    <th colspan=\"23\" style=\"text-align: center\">ผลการตรวจวิเคราะห์คุณภาพน้ำ ปี 2554-2560 โครงการพัฒนาพื้นที่สูงแบบโครงการหลวงป่ากล้วย</th>\n                                </tr>','form3');
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
INSERT INTO `datas` VALUES ('c6a1aa76-30cf-4712-a843-faff9a94bfb7','1. โครงการฯ ป่ากล้วย54-60-2.xlsx','2018-12-03 08:14:52','2018-12-03 08:14:52','cbafe4c8-b324-4576-b954-34c849c6ecc2',NULL);
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

-- Dump completed on 2018-12-16 13:35:49
