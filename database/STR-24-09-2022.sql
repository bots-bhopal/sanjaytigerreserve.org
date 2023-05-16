-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: blueolz8_str
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint NOT NULL,
  `file_extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documents_slug_unique` (`slug`),
  KEY `documents_user_id_foreign` (`user_id`),
  CONSTRAINT `documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` VALUES (1,2,'New Document','new-document','BTR Hindi v2.docx','542d8ead36fb43dc0ffd71ba48443b3b7e3e6980.docx',179576,'docx',0,'2022-01-27 05:29:00','2022-01-28 07:22:53');
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_images`
--

DROP TABLE IF EXISTS `event_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `event_id` bigint unsigned NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_images_event_id_foreign` (`event_id`),
  CONSTRAINT `event_images_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_images`
--

LOCK TABLES `event_images` WRITE;
/*!40000 ALTER TABLE `event_images` DISABLE KEYS */;
INSERT INTO `event_images` VALUES (1,1,'1643280828css.jpg','2022-01-27 05:23:48','2022-01-27 05:23:48'),(2,1,'1643280828HTML5.png','2022-01-27 05:23:48','2022-01-27 05:23:48');
/*!40000 ALTER TABLE `event_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `events_slug_unique` (`slug`),
  KEY `events_user_id_foreign` (`user_id`),
  CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,2,'First Event','first-event','2022-01-27','16:23:00','Bhopal','<p>This is our first event.</p>','1643280828html.png',0,'2022-01-27 05:23:48','2022-01-28 07:22:32');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `original_filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galleries_user_id_foreign` (`user_id`),
  CONSTRAINT `galleries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,2,'str-1','20a7dbe0561e6b72c4a313fca2b83a350fc388b1.jpg','jpg',67435,0,'2022-01-28 06:59:47','2022-01-28 07:06:32'),(2,2,'str-2','b2339d45bb1edbbcd9802204be811a0fc48c5146.jpg','jpg',108379,0,'2022-01-28 06:59:47','2022-01-28 07:06:31'),(3,2,'str-3','2deb291f977b2b6849f67dfc8dbabb0332b80495.jpg','jpg',127569,0,'2022-01-28 06:59:47','2022-01-28 07:06:30'),(4,2,'str-4','20ac785275007d40bef0274a91f25bbc6894bc37.jpg','jpg',159210,0,'2022-01-28 06:59:47','2022-01-28 07:06:29'),(5,2,'str-5','4e57cbbb23bdf78bdb6418db0e235a1e5eb49e9a.jpg','jpg',113841,0,'2022-01-28 06:59:48','2022-01-28 07:06:28'),(6,2,'str-6','18975924cba3272f7c797a87ac7be9c9207ad0a1.jpg','jpg',144969,0,'2022-01-28 07:00:19','2022-01-28 07:06:27'),(7,2,'str-7','d04b0b3eef5674142211692de339169edf531486.jpg','jpg',105990,0,'2022-01-28 07:00:19','2022-01-28 07:06:26'),(8,2,'str-8','4651b30a780b82e39b9e770439cc1575d4c06109.jpg','jpg',169991,0,'2022-01-28 07:00:20','2022-01-28 07:06:26'),(9,2,'str-9','11a2b513ffd5e8068e5446143aa3db72bbebb4c8.jpg','jpg',142628,0,'2022-01-28 07:00:20','2022-01-28 07:06:19'),(10,2,'str-10','8b78bab5e4b57627e9291cb0a59ed86ea391a85f.jpg','jpg',135116,0,'2022-01-28 07:00:21','2022-01-28 07:06:18'),(11,2,'str-11','fd1f2c1dfa3c7b9a3d381250e78ff61719e9a9d9.jpg','jpg',180017,0,'2022-01-28 07:00:45','2022-01-28 07:06:17'),(12,2,'str-12','62f097ecd7b5ffff928b3c063031309778d85a94.jpg','jpg',148447,0,'2022-01-28 07:00:45','2022-01-28 07:06:17'),(13,2,'str-16','0fba965642d61b48e553f4dabbce42d9471584ec.jpg','jpg',178568,1,'2022-01-28 07:01:23','2022-01-28 07:01:23'),(14,2,'str-17','c01b431129753e67d2de01503527f17a047b77fe.jpg','jpg',160419,0,'2022-01-28 07:01:24','2022-01-28 07:06:15'),(15,2,'str-18','d5b1a4eeb5b04095bd9d682773fe3838227bcf1e.jpg','jpg',132744,0,'2022-01-28 07:01:24','2022-01-28 07:06:14'),(16,2,'str-19','6b792409da500eeec11b32a2e6c2573a40625fbf.jpg','jpg',117589,0,'2022-01-28 07:01:24','2022-01-28 07:06:13'),(17,2,'str-20','e196a92f08f0dcfbe4bfbd994d4c7849e7e1b1bd.jpg','jpg',173289,0,'2022-01-28 07:01:25','2022-01-28 07:06:12'),(18,2,'str-23','dbc651dbefea7fb0cf83659b363e5b753650ea1a.jpg','jpg',200727,0,'2022-01-28 07:02:22','2022-01-28 07:06:11'),(19,2,'str-27','f5ac295059272515ea0da49f6a9d557dd6b11503.jpg','jpg',146106,0,'2022-01-28 07:02:22','2022-01-28 07:06:06'),(20,2,'str-31','9877bb6a6522f417727ca673f3729b9461378848.jpg','jpg',90077,0,'2022-01-28 07:02:22','2022-01-28 07:06:05'),(21,2,'str-32','cc017a8e9875b2d7789ca0bebc4eb6740add9477.jpg','jpg',170170,0,'2022-01-28 07:02:23','2022-01-28 07:06:04'),(22,2,'str-33','30bc38326a1518141ab51351b86a1f97d676d86d.jpg','jpg',184351,0,'2022-01-28 07:02:23','2022-01-28 07:06:04'),(23,2,'str-36','32fa0a05ce5e3be900de8ad1bc11ae8be182df59.jpg','jpg',152907,0,'2022-01-28 07:02:24','2022-01-28 07:06:03'),(24,2,'str-37','79794d7f74f8c6e8b556c21f2ca6d5e182c1b774.jpg','jpg',157510,0,'2022-01-28 07:02:24','2022-01-28 07:06:01'),(25,2,'str-38','8f74e8225756f0d776b66975046858240272fbd5.jpg','jpg',173073,0,'2022-01-28 07:02:24','2022-01-28 07:05:59'),(26,2,'str-34','d3ca279d8713937040d227cefcc5c1700be54f22.jpg','jpg',147095,0,'2022-01-28 07:03:29','2022-01-28 07:05:57'),(27,2,'str-35','e0434dd0b6854357c8a68c3a43afd9d33dabc311.jpg','jpg',132094,0,'2022-01-28 07:03:29','2022-01-28 07:05:55'),(28,2,'str-39','c1900207171562a2a873350556959862b995ccc0.jpg','jpg',172037,0,'2022-01-28 07:03:30','2022-01-28 07:05:54'),(29,2,'str-22','d68d4f68c16b749d4ab1cb23972191933c93a6fd.jpg','jpg',186233,0,'2022-01-28 07:04:34','2022-01-28 07:05:37'),(30,2,'str-24','cb9df100b9694477704a6c2bbcc5fee4a7bb4990.jpg','jpg',155780,0,'2022-01-28 07:04:35','2022-01-28 07:05:37'),(31,2,'str-25','1f896b88a389415459ab1901c1dab9270f2aada5.jpg','jpg',179371,0,'2022-01-28 07:04:35','2022-01-28 07:05:35'),(32,2,'str-26','adc40cac2425a65cfb7df17c197535548604fb23.jpg','jpg',179612,0,'2022-01-28 07:04:35','2022-01-28 07:05:35'),(33,2,'str-28','e075d4cb0b7ef7dda19f99d88dd5ec84ba606326.jpg','jpg',180370,0,'2022-01-28 07:04:36','2022-01-28 07:05:34'),(34,2,'str-29','c250f7a3dddd998a92eeababb28bea9f2883c503.jpg','jpg',183657,0,'2022-01-28 07:04:36','2022-01-28 07:05:33'),(35,2,'str-30','d4e258cf11e3ac928ab5996741da63b2dd566cc8.jpg','jpg',169358,0,'2022-01-28 07:04:37','2022-01-28 07:05:32'),(36,2,'str-13','950605141eba54ac4743b19cbf2a3a760fadb95c.JPG','JPG',127801,0,'2022-01-28 07:04:52','2022-01-28 07:05:30'),(37,2,'str-14','30ae567a838986f9af56dc51bf6fd1eee95645c3.jpg','jpg',161831,0,'2022-01-28 07:04:52','2022-01-28 07:05:29'),(38,2,'str-21','e8e0dcef25b05a5374a0a014940c27c93bccb505.jpg','jpg',172317,0,'2022-01-28 07:04:53','2022-01-28 07:05:28');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_03_20_060813_create_galleries_table',1),(6,'2021_07_15_054832_create_tenders_table',1),(7,'2021_07_29_063621_create_trackers_table',1),(8,'2021_07_30_153218_create_documents_table',1),(9,'2021_10_09_152334_create_news_table',1),(10,'2021_10_09_161629_create_news_images_table',1),(11,'2021_12_09_062520_create_events_table',1),(12,'2021_12_09_064502_create_event_images_table',1),(13,'2022_01_20_094518_create_roles_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_slug_unique` (`slug`),
  KEY `news_user_id_foreign` (`user_id`),
  CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,2,'Test news','test-news','2022-01-27','<p>This is our first test news.</p>','1643280779Azadi-ka-Amrut-Mahotsav.jpeg',0,'2022-01-27 05:22:59','2022-02-22 09:34:35');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_images`
--

DROP TABLE IF EXISTS `news_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `news_id` bigint unsigned NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_images_news_id_foreign` (`news_id`),
  CONSTRAINT `news_images_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_images`
--

LOCK TABLES `news_images` WRITE;
/*!40000 ALTER TABLE `news_images` DISABLE KEYS */;
INSERT INTO `news_images` VALUES (1,1,'1643280779angular.jpg','2022-01-27 05:22:59','2022-01-27 05:22:59'),(2,1,'1643280779baghsakha.jpeg','2022-01-27 05:22:59','2022-01-27 05:22:59');
/*!40000 ALTER TABLE `news_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Server Admin','server','2022-01-27 00:05:37','2022-01-27 00:05:37'),(2,'Super Admin','super','2022-01-27 00:05:37','2022-01-27 00:05:37'),(3,'Admin','admin','2022-01-27 00:05:38','2022-01-27 00:05:38');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tenders`
--

DROP TABLE IF EXISTS `tenders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tenders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_date` datetime NOT NULL,
  `original_filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint NOT NULL,
  `file_extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tenders_slug_unique` (`slug`),
  KEY `tenders_user_id_foreign` (`user_id`),
  CONSTRAINT `tenders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenders`
--

LOCK TABLES `tenders` WRITE;
/*!40000 ALTER TABLE `tenders` DISABLE KEYS */;
INSERT INTO `tenders` VALUES (1,2,'New Tender','new-tender','<p>This is new tender.</p>','2022-01-31 18:26:00','Projects-Credentials.xlsx','7264f72570fc33da3e6ab79cb92a5a30e5de871f.xlsx',5359,'xlsx',0,'2022-01-27 05:24:41','2022-02-22 12:03:51');
/*!40000 ALTER TABLE `tenders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trackers`
--

DROP TABLE IF EXISTS `trackers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trackers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `hits` int NOT NULL,
  `visit_date` date NOT NULL,
  `visit_time` time NOT NULL,
  `browser` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trackers`
--

LOCK TABLES `trackers` WRITE;
/*!40000 ALTER TABLE `trackers` DISABLE KEYS */;
/*!40000 ALTER TABLE `trackers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int NOT NULL DEFAULT '3',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Server Admin','botadmin@str.org',NULL,'$2y$10$sd5ZtHvvpRjQYubnzlzNOesV9aZKiqNUYFkDZMdu4t3q5dBaoDFQu',0,NULL,'2022-01-27 00:05:51','2022-01-27 00:05:51'),(2,2,'Super Admin','super@str.org',NULL,'$2y$10$iGE/ijdfdPdaAw2Q6d5mfux08jRyiu3WY/VJ5edqMF1/WHsOqYmfS',0,NULL,'2022-01-27 00:05:51','2022-01-27 01:15:19'),(3,3,'Admin STR','admin@str.org',NULL,'$2y$10$qwWxUKFX3CHHJopDiyfzIuWZlrus09gm3UvgAOVH1SqlY6lPHCfjq',0,NULL,'2022-01-27 00:05:52','2022-01-27 01:40:29'),(4,2,'Super Admin 1','superadmin1@str.org',NULL,'$2y$10$DRHTXtgUtSSdmTTlt8jjp.gD0JAG8mq601DomyIZB/6U.h.WcTZ4G',0,NULL,'2022-01-27 02:19:38','2022-01-27 02:23:09'),(5,2,'Super Admin 2','superadmin2@str.org',NULL,'$2y$10$wsMKIbGHFYxcJB92r6yrY.4uHXXjfRRPzBA5aJFafzKy/f/a/pr2u',0,NULL,'2022-01-27 02:20:32','2022-01-27 02:23:10'),(6,3,'Admin 1','admin1@str.org',NULL,'$2y$10$bTe9XOkZxAQBYjdiK9tIHu9Lc17951DvO3s27cltyqqKG9357Hgda',0,NULL,'2022-01-27 02:21:05','2022-01-27 02:23:16'),(7,3,'Admin 2','admin2@str.org',NULL,'$2y$10$1RE1QuXK2AD9PW2cKusS6O1Knwx.gOVQqXhocUx093PGDjxOpXXDS',0,NULL,'2022-01-27 02:21:35','2022-01-27 02:23:16');
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

-- Dump completed on 2022-09-24 17:31:14
