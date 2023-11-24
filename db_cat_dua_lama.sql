-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: db_cat_dua
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `jenis_tryout_m`
--

DROP TABLE IF EXISTS `jenis_tryout_m`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jenis_tryout_m` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `pilihan_tryout_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_tryout_m`
--

LOCK TABLES `jenis_tryout_m` WRITE;
/*!40000 ALTER TABLE `jenis_tryout_m` DISABLE KEYS */;
INSERT INTO `jenis_tryout_m` VALUES (1,'Test Psikologi','psikologi','Test Psikologi',NULL,'Berisi berbagai jenis try out mulai dari tes kecerdasan, kecermatan dan kepribadian',1,'2023-11-23 07:20:44','2023-11-23 08:02:05'),(2,'Test Akademik','akademik','Test Akademik',NULL,'Berisi berbagai jenis try out semua mapel tes akademik persiapan seleksi anggota POLRI',1,'2023-11-23 07:20:44','2023-11-23 08:02:05'),(3,'Test Lainnya','lainnya','Test Lainnya',NULL,'Berisi paket tryout tes lainnya',1,'2023-11-23 07:20:44','2023-11-23 08:02:05');
/*!40000 ALTER TABLE `jenis_tryout_m` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_admin`
--

DROP TABLE IF EXISTS `m_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `m_admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','guru','siswa') NOT NULL,
  `kon_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kon_id` (`kon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_admin`
--

LOCK TABLES `m_admin` WRITE;
/*!40000 ALTER TABLE `m_admin` DISABLE KEYS */;
INSERT INTO `m_admin` VALUES (1,'admin','46f94c8de14fb36680850768ff1b7f2a','admin',0),(28,'1','46f94c8de14fb36680850768ff1b7f2a','guru',8),(30,'2','46f94c8de14fb36680850768ff1b7f2a','guru',9);
/*!40000 ALTER TABLE `m_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_guru`
--

DROP TABLE IF EXISTS `m_guru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `m_guru` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_guru`
--

LOCK TABLES `m_guru` WRITE;
/*!40000 ALTER TABLE `m_guru` DISABLE KEYS */;
INSERT INTO `m_guru` VALUES (8,'1','Om Jero'),(9,'2','Bayu');
/*!40000 ALTER TABLE `m_guru` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `hapus_guru` AFTER DELETE ON `m_guru` FOR EACH ROW BEGIN
DELETE FROM m_soal WHERE m_soal.id_guru = OLD.id;
DELETE FROM m_admin WHERE m_admin.level = 'guru' AND m_admin.kon_id = OLD.id;
DELETE FROM tr_guru_mapel WHERE tr_guru_mapel.id_guru = OLD.id;
DELETE FROM tr_guru_tes WHERE tr_guru_tes.id_guru = OLD.id;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `m_mapel`
--

DROP TABLE IF EXISTS `m_mapel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `m_mapel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_mapel`
--

LOCK TABLES `m_mapel` WRITE;
/*!40000 ALTER TABLE `m_mapel` DISABLE KEYS */;
INSERT INTO `m_mapel` VALUES (6,'TKPA'),(7,'SAINTEK'),(8,'SOSHUM'),(9,'TKPA 2'),(10,'SAINTEK 2'),(11,'SOSHUM 2');
/*!40000 ALTER TABLE `m_mapel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_siswa`
--

DROP TABLE IF EXISTS `m_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `m_siswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_siswa`
--

LOCK TABLES `m_siswa` WRITE;
/*!40000 ALTER TABLE `m_siswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_siswa` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `hapus_siswa` AFTER DELETE ON `m_siswa` FOR EACH ROW BEGIN
DELETE FROM tr_ikut_ujian WHERE tr_ikut_ujian.id_user = OLD.id;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `m_soal`
--

DROP TABLE IF EXISTS `m_soal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `m_soal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_guru` int NOT NULL,
  `id_mapel` int NOT NULL,
  `bobot` int NOT NULL,
  `file` varchar(150) DEFAULT NULL,
  `tipe_file` varchar(50) DEFAULT NULL,
  `soal` text CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci,
  `opsi_a` text CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci,
  `opsi_b` text CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci,
  `opsi_c` text CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci,
  `opsi_d` text CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci,
  `opsi_e` text CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci,
  `jawaban` varchar(5) DEFAULT NULL,
  `tgl_input` datetime DEFAULT NULL,
  `jml_benar` int DEFAULT NULL,
  `jml_salah` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_guru` (`id_guru`),
  KEY `id_mapel` (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_soal`
--

LOCK TABLES `m_soal` WRITE;
/*!40000 ALTER TABLE `m_soal` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_soal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_user`
--

DROP TABLE IF EXISTS `m_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `m_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `paket` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_user`
--

LOCK TABLES `m_user` WRITE;
/*!40000 ALTER TABLE `m_user` DISABLE KEYS */;
INSERT INTO `m_user` VALUES (1,'usercontoh','9afa58fc62c24e89815d00bd8bde1529','user1@gmail.com','free');
/*!40000 ALTER TABLE `m_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pilihan_tryout_m`
--

DROP TABLE IF EXISTS `pilihan_tryout_m`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pilihan_tryout_m` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pilihan_tryout_m`
--

LOCK TABLES `pilihan_tryout_m` WRITE;
/*!40000 ALTER TABLE `pilihan_tryout_m` DISABLE KEYS */;
INSERT INTO `pilihan_tryout_m` VALUES (1,'Polri','Tryout Polri','2023-11-23 07:14:39','2023-11-23 07:14:39'),(2,'TNI','Tryout TNI','2023-11-23 07:14:39','2023-11-23 07:14:39'),(3,'Kedinasan','Tryout Kedinasan','2023-11-23 07:14:39','2023-11-23 07:14:39'),(4,'CASN','Tryout CASN','2023-11-23 07:14:39','2023-11-23 07:14:39'),(5,'UTBK','Tryout UTBK','2023-11-23 07:14:39','2023-11-23 07:14:39'),(6,'BUMN','Tryout BUMN','2023-11-23 07:14:39','2023-11-23 07:14:39');
/*!40000 ALTER TABLE `pilihan_tryout_m` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tr_guru_mapel`
--

DROP TABLE IF EXISTS `tr_guru_mapel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tr_guru_mapel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_guru` int NOT NULL,
  `id_mapel` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_guru` (`id_guru`),
  KEY `id_mapel` (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_guru_mapel`
--

LOCK TABLES `tr_guru_mapel` WRITE;
/*!40000 ALTER TABLE `tr_guru_mapel` DISABLE KEYS */;
INSERT INTO `tr_guru_mapel` VALUES (23,8,5),(24,8,6),(25,8,7),(26,8,8),(27,9,6),(28,9,7),(29,9,8);
/*!40000 ALTER TABLE `tr_guru_mapel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tr_guru_tes`
--

DROP TABLE IF EXISTS `tr_guru_tes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tr_guru_tes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_guru` int NOT NULL,
  `id_mapel` int NOT NULL,
  `nama_ujian` varchar(200) NOT NULL,
  `jumlah_soal` int NOT NULL,
  `waktu` int NOT NULL,
  `jenis` enum('acak','set') NOT NULL,
  `detil_jenis` varchar(500) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `terlambat` datetime NOT NULL,
  `token` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_guru` (`id_guru`),
  KEY `id_mapel` (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_guru_tes`
--

LOCK TABLES `tr_guru_tes` WRITE;
/*!40000 ALTER TABLE `tr_guru_tes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tr_guru_tes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tr_ikut_ujian`
--

DROP TABLE IF EXISTS `tr_ikut_ujian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tr_ikut_ujian` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_tes` int NOT NULL,
  `id_user` int NOT NULL,
  `list_soal` longtext NOT NULL,
  `list_jawaban` longtext NOT NULL,
  `jml_benar` int NOT NULL,
  `nilai` decimal(10,2) NOT NULL,
  `nilai_bobot` decimal(10,2) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_selesai` datetime NOT NULL,
  `status` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tes` (`id_tes`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_ikut_ujian`
--

LOCK TABLES `tr_ikut_ujian` WRITE;
/*!40000 ALTER TABLE `tr_ikut_ujian` DISABLE KEYS */;
/*!40000 ALTER TABLE `tr_ikut_ujian` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-23 15:04:42
