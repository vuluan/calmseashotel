/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.25-MariaDB : Database - db_calmseashotel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_calmseashotel` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `db_calmseashotel`;

/*Table structure for table `admin_nqt_groups` */

DROP TABLE IF EXISTS `admin_nqt_groups`;

CREATE TABLE `admin_nqt_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `admin_nqt_groups` */

insert  into `admin_nqt_groups`(`id`,`name`,`permission`,`status`,`created`) values (1,'Root','0|rwd,2|rwd,1|rwd,4|rwd,3|rwd,185|rwd,12|rwd,8|rwd,7|rwd,84|rwd,83|rwd,105|rwd,118|rwd,121|rwd,150|rwd,155|rwd',1,'2012-08-28 14:51:26');

/*Table structure for table `admin_nqt_logs` */

DROP TABLE IF EXISTS `admin_nqt_logs`;

CREATE TABLE `admin_nqt_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `function` varchar(50) NOT NULL,
  `function_id` int(11) NOT NULL,
  `field` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `old_value` text,
  `new_value` text NOT NULL,
  `account` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=436 DEFAULT CHARSET=utf8;

/*Data for the table `admin_nqt_logs` */

insert  into `admin_nqt_logs`(`id`,`function`,`function_id`,`field`,`type`,`old_value`,`new_value`,`account`,`ip`,`created`) values (1,'banners',1,'Add new','Add new','','','admin','::1','2015-12-02 13:31:08'),(2,'banners',1,'title','Update','aaa','aaabbb','admin','::1','2015-12-02 13:33:42'),(3,'banners',1,'Delete','Delete','','','admin','::1','2015-12-02 13:34:14'),(4,'banners',1,'Delete','Delete','','','admin','::1','2015-12-02 13:34:35'),(5,'banners',1,'Delete','Delete','','','admin','::1','2015-12-02 13:35:38'),(6,'banners',1,'Delete','Delete','','','admin','::1','2015-12-02 13:35:57'),(7,'categories',1,'Add new','Add new','','','admin','::1','2015-12-02 13:51:04'),(8,'categories',1,'status','update','1','0','admin','::1','2015-12-02 13:51:09'),(9,'categories',1,'status','update','0','1','admin','::1','2015-12-02 13:51:09'),(10,'categories',1,'Delete','Delete','','','admin','::1','2015-12-02 13:51:13'),(11,'banners',2,'Add new','Add new','','','admin','::1','2015-12-02 13:52:51'),(12,'banners',2,'Delete','Delete','','','admin','::1','2015-12-02 13:52:57'),(13,'banners',3,'Add new','Add new','','','admin','::1','2015-12-02 13:53:47'),(14,'banners',3,'Delete','Delete','','','admin','::1','2015-12-02 14:04:25'),(15,'banners',3,'Delete','Delete','','','admin','::1','2015-12-02 14:04:56'),(16,'banners',3,'Delete','Delete','','','admin','::1','2015-12-02 14:05:09'),(17,'banners',4,'Add new','Add new','','','admin','::1','2015-12-02 14:06:04'),(18,'banners',4,'Delete','Delete','','','admin','::1','2015-12-02 14:06:13'),(19,'banners',4,'Delete','Delete','','','admin','::1','2015-12-02 14:06:30'),(20,'banners',2,'Delete','Delete','','','admin','::1','2015-12-02 14:08:33'),(21,'categories',1,'Delete','Delete','','','admin','::1','2015-12-02 14:08:52'),(22,'admincp_accounts',2,'status','update','1','0','admin','::1','2015-12-02 14:09:19'),(23,'menus',1,'Add new','Add new','','','admin','::1','2015-12-02 14:15:38'),(24,'menus',1,'Delete','Delete','','','admin','::1','2015-12-02 14:15:44'),(25,'menus',1,'Delete','Delete','','','admin','::1','2015-12-02 14:16:13'),(26,'menus',1,'Delete','Delete','','','admin','::1','2015-12-02 14:16:55'),(27,'categories',2,'Add new','Add new','','','admin','::1','2015-12-02 14:25:09'),(28,'news',1,'Add new','Add new','','','admin','::1','2015-12-02 14:25:30'),(29,'news',1,'Delete','Delete','','','admin','::1','2015-12-02 14:25:37'),(30,'categories',2,'Delete','Delete','','','admin','::1','2015-12-02 14:26:45'),(31,'news',1,'Delete','Delete','','','admin','::1','2015-12-02 14:27:06'),(32,'menus',2,'Add new','Add new','','','admin','::1','2015-12-02 14:27:21'),(33,'menus',2,'Delete','Delete','','','admin','::1','2015-12-02 14:27:26'),(34,'banners',5,'Add new','Add new','','','admin','::1','2015-12-02 14:27:50'),(35,'banners',5,'Delete','Delete','','','admin','::1','2015-12-02 14:27:55'),(36,'banners',6,'Add new','Add new','','','admin','::1','2015-12-02 14:29:59'),(37,'banners',6,'Delete','Delete','','','admin','::1','2015-12-02 14:30:07'),(38,'banners',6,'Delete','Delete','','','admin','::1','2015-12-02 14:30:16'),(39,'banners',7,'Add new','Add new','','','admin','::1','2015-12-02 14:30:31'),(40,'banners',5,'Delete','Delete','','','admin','::1','2015-12-02 14:30:37'),(41,'banners',2,'Delete','Delete','','','admin','::1','2015-12-02 14:30:56'),(42,'banners',8,'Add new','Add new','','','admin','::1','2015-12-02 14:31:09'),(43,'banners',8,'Delete','Delete','','','admin','::1','2015-12-02 14:31:16'),(44,'banners',9,'Add new','Add new','','','admin','::1','2015-12-02 14:31:46'),(45,'banners',9,'Delete','Delete','','','admin','::1','2015-12-02 14:31:51'),(46,'banners',8,'Delete','Delete','','','admin','::1','2015-12-02 14:33:17'),(47,'banners',10,'Add new','Add new','','','admin','::1','2015-12-02 14:34:35'),(48,'banners',10,'Delete','Delete','','','admin','::1','2015-12-02 14:34:43'),(49,'banners',10,'Delete','Delete','','','admin','::1','2015-12-02 14:35:04'),(50,'banners',7,'Delete','Delete','','','admin','::1','2015-12-02 14:35:13'),(51,'banners',11,'Add new','Add new','','','admin','::1','2015-12-02 14:35:39'),(52,'banners',11,'Delete','Delete','','','admin','::1','2015-12-02 14:35:46'),(53,'banners',12,'Add new','Add new','','','admin','::1','2015-12-02 14:36:02'),(54,'banners',12,'Delete','Delete','','','admin','::1','2015-12-02 14:36:07'),(55,'banners',12,'Delete','Delete','','','admin','::1','2015-12-02 14:36:59'),(56,'banners',13,'Add new','Add new','','','admin','::1','2015-12-02 14:37:22'),(57,'banners',13,'Delete','Delete','','','admin','::1','2015-12-02 14:37:28'),(58,'banners',13,'Delete','Delete','','','admin','::1','2015-12-02 14:37:36'),(59,'banners',11,'Delete','Delete','','','admin','::1','2015-12-02 14:37:43'),(60,'categories',3,'Add new','Add new','','','admin','::1','2015-12-02 14:38:02'),(61,'categories',3,'Delete','Delete','','','admin','::1','2015-12-02 14:38:12'),(62,'categories',4,'Add new','Add new','','','admin','::1','2015-12-02 14:38:25'),(63,'categories',3,'Delete','Delete','','','admin','::1','2015-12-02 14:38:31'),(64,'categories',5,'Add new','Add new','','','admin','::1','2015-12-02 14:39:04'),(65,'categories',5,'Delete','Delete','','','admin','::1','2015-12-02 14:39:10'),(66,'categories',5,'Delete','Delete','','','admin','::1','2015-12-02 14:39:15'),(67,'categories',6,'Add new','Add new','','','admin','::1','2015-12-02 14:43:15'),(68,'categories',6,'Delete','Delete','','','admin','::1','2015-12-02 14:43:43'),(69,'categories',6,'Delete','Delete','','','admin','::1','2015-12-02 14:43:49'),(70,'news',2,'Add new','Add new','','','admin','::1','2015-12-02 14:48:28'),(71,'categories',2,'Delete','Delete','','','admin','::1','2015-12-02 14:49:53'),(72,'admincp_accounts',4,'Add new','Add new','','','admin','::1','2015-12-02 14:52:42'),(73,'admincp_accounts',4,'status','update','1','0','admin','::1','2015-12-02 14:52:51'),(74,'admincp_accounts',4,'status','update','0','1','admin','::1','2015-12-02 14:52:52'),(75,'admincp_accounts',4,'status','update','1','0','admin','::1','2015-12-02 14:52:52'),(76,'admincp_accounts',4,'status','update','0','1','admin','::1','2015-12-02 14:52:52'),(77,'admincp_accounts',4,'status','update','1','0','admin','::1','2015-12-02 14:57:25'),(78,'admincp_accounts',4,'status','update','0','1','admin','::1','2015-12-02 14:57:26'),(79,'admincp_accounts',4,'status','update','1','0','admin','::1','2015-12-02 14:57:26'),(80,'admincp_accounts',4,'status','update','0','1','admin','::1','2015-12-02 14:57:27'),(81,'admincp_accounts',4,'status','update','1','0','admin','::1','2015-12-02 14:57:28'),(82,'admincp_accounts',4,'status','update','0','1','admin','::1','2015-12-02 14:57:28'),(83,'admincp_accounts',4,'Delete','Delete','','','admin','::1','2015-12-02 14:57:36'),(84,'admincp_accounts',4,'Delete','Delete','','','admin','::1','2015-12-02 14:59:09'),(85,'banners',9,'Delete','Delete','','','admin','::1','2015-12-02 15:00:43'),(86,'admincp_accounts',4,'Delete','Delete','','','admin','::1','2015-12-02 15:01:18'),(87,'admincp_accounts',4,'Delete','Delete','','','admin','::1','2015-12-02 15:09:16'),(88,'admincp_accounts',4,'Delete','Delete','','','admin','::1','2015-12-02 15:10:23'),(89,'admincp_accounts',4,'Delete','Delete','','','admin','::1','2015-12-02 15:14:44'),(90,'admincp_accounts',4,'Delete','Delete','','','admin','::1','2015-12-02 15:15:17'),(91,'admincp_accounts',2,'Delete','Delete','','','admin','::1','2015-12-02 15:19:18'),(92,'admincp_accounts',4,'Delete','Delete','','','admin','::1','2015-12-02 15:20:27'),(93,'categories',4,'Delete','Delete','','','admin','::1','2015-12-02 15:24:34'),(94,'categories',4,'Delete','Delete','','','admin','::1','2015-12-02 15:24:44'),(95,'banners',14,'Add new','Add new','','','admin','::1','2015-12-02 15:25:03'),(96,'banners',7,'Delete','Delete','','','admin','::1','2015-12-02 15:25:10'),(97,'admincp_accounts',4,'Delete','Delete','','','admin','::1','2015-12-02 15:28:23'),(98,'admincp_accounts',4,'Delete','Delete','','','admin','::1','2015-12-02 15:34:17'),(99,'admincp_accounts',4,'Delete','Delete','','','admin','::1','2015-12-02 15:35:23'),(100,'admincp_accounts',4,'Delete','Delete','','','admin','::1','2015-12-02 15:38:24'),(101,'admincp_accounts',4,'Delete','Delete','','','admin','::1','2015-12-02 15:43:00'),(102,'admincp_accounts',4,'status','update','1','0','admin','::1','2015-12-02 15:44:02'),(103,'admincp_accounts',4,'status','update','0','1','admin','::1','2015-12-02 15:44:04'),(104,'admincp_accounts',4,'status','update','1','0','admin','::1','2015-12-02 15:44:04'),(105,'admincp_accounts',4,'status','update','0','1','admin','::1','2015-12-02 15:44:05'),(106,'admincp_accounts',4,'Delete','Delete','','','admin','::1','2015-12-02 15:48:43'),(107,'banners',14,'status','update','1','0','admin','::1','2015-12-30 09:51:18'),(108,'banners',14,'status','update','0','1','admin','::1','2015-12-30 09:51:18'),(109,'banners',14,'status','update','1','0','admin','::1','2015-12-30 09:51:19'),(110,'banners',14,'status','update','0','1','admin','::1','2015-12-30 09:51:19'),(111,'banners',14,'status','update','1','0','admin','::1','2015-12-30 09:51:22'),(112,'banners',14,'status','update','0','1','admin','::1','2015-12-30 09:51:23'),(113,'banners',14,'status','update','1','0','admin','::1','2015-12-30 09:51:23'),(114,'banners',14,'status','update','0','1','admin','::1','2015-12-30 09:51:24'),(115,'banners',14,'status','update','1','0','admin','::1','2015-12-30 09:51:24'),(116,'banners',14,'status','update','0','1','admin','::1','2015-12-30 09:51:24'),(117,'banners',14,'status','update','1','0','admin','::1','2015-12-30 09:51:25'),(118,'banners',14,'status','update','0','1','admin','::1','2015-12-30 09:51:26'),(119,'banners',14,'status','update','1','0','admin','::1','2015-12-30 09:51:26'),(120,'banners',14,'Delete','Delete','','','admin','::1','2015-12-30 09:51:32'),(121,'banners',15,'Add new','Add new','','','admin','::1','2016-01-26 09:21:08'),(122,'banners',15,'Delete','Delete','','','admin','::1','2016-01-27 09:45:09'),(123,'banners',15,'Delete','Delete','','','admin','::1','2016-01-27 09:45:14'),(124,'menus',2,'Delete','Delete','','','admin','::1','2016-02-18 15:07:06'),(125,'menus',1,'Delete','Delete','','','admin','::1','2016-02-18 15:07:26'),(126,'news',3,'Add new','Add new','','','admin','::1','2016-02-18 15:16:27'),(127,'news',4,'Add new','Add new','','','admin','::1','2016-02-18 15:17:16'),(128,'news',5,'Add new','Add new','','','admin','::1','2016-02-18 15:17:38'),(129,'news',6,'Add new','Add new','','','admin','::1','2016-02-18 15:19:44'),(130,'news',7,'Add new','Add new','','','admin','::1','2016-02-18 15:20:10'),(131,'news',6,'status','update','1','0','admin','::1','2016-02-18 15:24:14'),(132,'news',5,'status','update','1','0','admin','::1','2016-02-18 15:24:14'),(133,'news',7,'status','update','1','0','admin','::1','2016-02-18 15:24:14'),(134,'news',4,'status','update','1','0','admin','::1','2016-02-18 15:24:14'),(135,'news',3,'status','update','1','0','admin','::1','2016-02-18 15:24:14'),(136,'news',7,'status','update','0','1','admin','::1','2016-02-18 15:25:02'),(137,'news',6,'status','update','0','1','admin','::1','2016-02-18 15:25:02'),(138,'news',3,'status','update','0','1','admin','::1','2016-02-18 15:25:02'),(139,'news',4,'status','update','0','1','admin','::1','2016-02-18 15:25:02'),(140,'news',5,'status','update','0','1','admin','::1','2016-02-18 15:25:02'),(141,'news',6,'status','update','1','0','admin','::1','2016-02-18 15:25:12'),(142,'news',7,'status','update','1','0','admin','::1','2016-02-18 15:25:12'),(143,'news',4,'status','update','1','0','admin','::1','2016-02-18 15:25:12'),(144,'news',3,'status','update','1','0','admin','::1','2016-02-18 15:25:12'),(145,'news',5,'status','update','1','0','admin','::1','2016-02-18 15:25:12'),(146,'news',3,'status','update','0','1','admin','::1','2016-02-18 15:25:24'),(147,'news',5,'status','update','0','1','admin','::1','2016-02-18 15:25:24'),(148,'news',6,'status','update','0','1','admin','::1','2016-02-18 15:25:24'),(149,'news',7,'status','update','0','1','admin','::1','2016-02-18 15:25:24'),(150,'news',4,'status','update','0','1','admin','::1','2016-02-18 15:25:24'),(151,'news',4,'status','update','1','0','admin','::1','2016-02-18 15:26:38'),(152,'news',7,'status','update','1','0','admin','::1','2016-02-18 15:26:38'),(153,'news',6,'status','update','1','0','admin','::1','2016-02-18 15:26:38'),(154,'news',3,'status','update','1','0','admin','::1','2016-02-18 15:26:38'),(155,'news',5,'status','update','1','0','admin','::1','2016-02-18 15:26:38'),(156,'news',4,'status','update','0','1','admin','::1','2016-02-18 15:26:51'),(157,'news',7,'status','update','0','1','admin','::1','2016-02-18 15:26:51'),(158,'news',3,'status','update','0','1','admin','::1','2016-02-18 15:26:51'),(159,'news',5,'status','update','0','1','admin','::1','2016-02-18 15:26:51'),(160,'news',6,'status','update','0','1','admin','::1','2016-02-18 15:26:51'),(161,'banners',14,'Delete','Delete','','','admin','::1','2016-02-19 09:23:11'),(162,'banners',16,'Add new','Add new','','','admin','::1','2016-02-19 09:24:00'),(163,'banners',16,'Trash','Trash','','','admin','::1','2016-02-19 09:24:10'),(164,'banners',16,'Restore','Restore','','','admin','::1','2016-02-19 09:40:05'),(165,'banners',16,'Trash','Trash','','','admin','::1','2016-02-19 09:40:32'),(166,'banners',16,'Restore','Restore','','','admin','::1','2016-02-19 09:40:39'),(167,'banners',16,'Trash','Trash','','','admin','::1','2016-02-19 09:41:35'),(168,'banners',16,'Restore','Restore','','','admin','::1','2016-02-19 09:41:38'),(169,'banners',16,'Trash','Trash','','','admin','::1','2016-02-19 09:41:47'),(170,'banners',16,'Restore','Restore','','','admin','::1','2016-02-19 09:44:41'),(171,'banners',16,'Restore','Restore','','','admin','::1','2016-02-19 09:44:56'),(172,'banners',16,'Trash','Trash','','','admin','::1','2016-02-19 10:20:52'),(173,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 08:58:56'),(174,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 08:59:01'),(175,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 08:59:07'),(176,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 08:59:16'),(177,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 08:59:20'),(178,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 08:59:38'),(179,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 08:59:45'),(180,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:00:39'),(181,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:00:43'),(182,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:01:03'),(183,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:01:09'),(184,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:01:33'),(185,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:01:37'),(186,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:02:21'),(187,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:02:25'),(188,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:02:55'),(189,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:03:00'),(190,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:04:07'),(191,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:04:11'),(192,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:04:34'),(193,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:04:40'),(194,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:05:02'),(195,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:05:06'),(196,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:06:28'),(197,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:06:32'),(198,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:09:03'),(199,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:10:38'),(200,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:10:48'),(201,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:11:01'),(202,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:11:47'),(203,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:11:50'),(204,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:11:57'),(205,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:12:08'),(206,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:12:14'),(207,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:12:22'),(208,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:12:50'),(209,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:13:02'),(210,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:13:21'),(211,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:13:26'),(212,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:13:42'),(213,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:13:47'),(214,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:14:01'),(215,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:14:13'),(216,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:14:17'),(217,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:14:54'),(218,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:14:58'),(219,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:15:21'),(220,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:15:36'),(221,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:16:40'),(222,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:16:49'),(223,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:17:11'),(224,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:17:19'),(225,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:17:24'),(226,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:17:28'),(227,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:17:37'),(228,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:17:44'),(229,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:18:10'),(230,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:18:13'),(231,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:18:56'),(232,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:19:00'),(233,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:19:16'),(234,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:19:20'),(235,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:19:35'),(236,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:19:38'),(237,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:20:16'),(238,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:20:19'),(239,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:20:52'),(240,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:21:06'),(241,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:21:44'),(242,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:21:59'),(243,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:23:19'),(244,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:23:23'),(245,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:23:31'),(246,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:23:36'),(247,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:24:13'),(248,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:24:18'),(249,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:24:52'),(250,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:24:59'),(251,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:25:31'),(252,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:25:39'),(253,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:26:08'),(254,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:26:15'),(255,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:28:52'),(256,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:28:57'),(257,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:29:04'),(258,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:29:10'),(259,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:29:33'),(260,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:29:37'),(261,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:30:29'),(262,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:30:36'),(263,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:33:31'),(264,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:34:00'),(265,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:34:08'),(266,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:34:17'),(267,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:34:41'),(268,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:34:51'),(269,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:36:08'),(270,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:36:21'),(271,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:36:55'),(272,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:37:00'),(273,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:37:45'),(274,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:37:50'),(275,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:38:01'),(276,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:38:05'),(277,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:38:11'),(278,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:38:16'),(279,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:38:23'),(280,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:38:28'),(281,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:38:34'),(282,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:38:38'),(283,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:38:49'),(284,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:38:52'),(285,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:38:57'),(286,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:39:08'),(287,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:39:12'),(288,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:39:17'),(289,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:39:21'),(290,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:39:26'),(291,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:39:30'),(292,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:39:33'),(293,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:39:37'),(294,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:40:08'),(295,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:40:12'),(296,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:40:18'),(297,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:40:22'),(298,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:40:27'),(299,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:40:31'),(300,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:40:38'),(301,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:40:42'),(302,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:40:53'),(303,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:40:59'),(304,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:41:30'),(305,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:41:36'),(306,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:43:22'),(307,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:43:33'),(308,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:43:49'),(309,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:44:02'),(310,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:44:06'),(311,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 09:44:38'),(312,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 09:47:27'),(313,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:47:48'),(314,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:48:04'),(315,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:48:17'),(316,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:48:27'),(317,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:52:06'),(318,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:52:17'),(319,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:52:25'),(320,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:52:48'),(321,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:52:57'),(322,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:53:01'),(323,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:53:33'),(324,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:53:37'),(325,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:53:51'),(326,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:53:55'),(327,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:54:12'),(328,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:54:18'),(329,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:54:56'),(330,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:55:20'),(331,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:55:25'),(332,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:55:28'),(333,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:56:18'),(334,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:56:40'),(335,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:56:48'),(336,'categories',2,'Restore','Restore','','','admin','::1','2016-02-22 09:57:10'),(337,'categories',2,'Delete','Delete','','','admin','::1','2016-02-22 09:57:16'),(338,'menus',3,'Add new','Add new','','','admin','::1','2016-02-22 10:01:21'),(339,'menus',3,'Delete','Delete','','','admin','::1','2016-02-22 10:01:35'),(340,'menus',3,'Restore','Restore','','','admin','::1','2016-02-22 10:02:53'),(341,'menus',3,'Delete','Delete','','','admin','::1','2016-02-22 10:03:00'),(342,'menus',3,'Restore','Restore','','','admin','::1','2016-02-22 10:03:04'),(343,'menus',3,'Delete','Delete','','','admin','::1','2016-02-22 10:03:11'),(344,'menus',3,'Restore','Restore','','','admin','::1','2016-02-22 10:03:15'),(345,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 10:03:25'),(346,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 10:03:30'),(347,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 10:04:07'),(348,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 10:04:18'),(349,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 10:04:56'),(350,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 10:05:00'),(351,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 10:05:23'),(352,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 10:05:27'),(353,'menus',3,'Delete','Delete','','','admin','::1','2016-02-22 10:05:37'),(354,'menus',3,'Restore','Restore','','','admin','::1','2016-02-22 10:05:40'),(355,'banners',16,'Trash','Trash','','','admin','::1','2016-02-22 10:07:31'),(356,'banners',16,'Restore','Restore','','','admin','::1','2016-02-22 10:07:35'),(357,'news',7,'Restore','Restore','','','admin','::1','2016-02-22 10:09:59'),(358,'news',5,'Restore','Restore','','','admin','::1','2016-02-22 10:09:59'),(359,'news',6,'Restore','Restore','','','admin','::1','2016-02-22 10:09:59'),(360,'news',4,'Restore','Restore','','','admin','::1','2016-02-22 10:09:59'),(361,'news',3,'Restore','Restore','','','admin','::1','2016-02-22 10:09:59'),(362,'news',2,'Restore','Restore','','','admin','::1','2016-02-22 10:09:59'),(363,'news',7,'Delete','Delete','','','admin','::1','2016-02-22 10:10:07'),(364,'news',6,'Delete','Delete','','','admin','::1','2016-02-22 10:10:07'),(365,'news',3,'Delete','Delete','','','admin','::1','2016-02-22 10:10:07'),(366,'news',4,'Delete','Delete','','','admin','::1','2016-02-22 10:10:07'),(367,'news',5,'Delete','Delete','','','admin','::1','2016-02-22 10:10:07'),(368,'news',2,'Delete','Delete','','','admin','::1','2016-02-22 10:10:07'),(369,'news',7,'Restore','Restore','','','admin','::1','2016-02-22 10:10:11'),(370,'news',6,'Restore','Restore','','','admin','::1','2016-02-22 10:10:12'),(371,'news',5,'Restore','Restore','','','admin','::1','2016-02-22 10:10:12'),(372,'news',4,'Restore','Restore','','','admin','::1','2016-02-22 10:10:12'),(373,'news',3,'Restore','Restore','','','admin','::1','2016-02-22 10:10:12'),(374,'news',2,'Restore','Restore','','','admin','::1','2016-02-22 10:10:12'),(375,'admincp_accounts',4,'Restore','Restore','','','admin','::1','2016-02-22 10:22:29'),(376,'admincp_accounts',4,'Restore','Restore','','','admin','::1','2016-02-22 10:23:07'),(377,'admincp_accounts',4,'Restore','Restore','','','admin','::1','2016-02-22 10:25:26'),(378,'admincp_accounts',4,'Trash','Trash','','','admin','::1','2016-02-22 10:26:14'),(379,'admincp_accounts',4,'Restore','Restore','','','admin','::1','2016-02-22 10:26:19'),(380,'admincp_accounts',4,'Trash','Trash','','','admin','::1','2016-02-22 10:26:43'),(381,'admincp_accounts',4,'Restore','Restore','','','admin','::1','2016-02-22 10:27:42'),(382,'admincp_accounts',4,'Trash','Trash','','','admin','::1','2016-02-22 10:28:37'),(383,'admincp_accounts',4,'Restore','Restore','','','admin','::1','2016-02-22 10:30:30'),(384,'admincp_accounts',4,'Trash','Trash','','','admin','::1','2016-02-22 10:31:00'),(385,'admincp_accounts',4,'Restore','Restore','','','admin','::1','2016-02-22 10:31:14'),(386,'admincp_accounts',4,'Trash','Trash','','','admin','::1','2016-02-22 10:33:01'),(387,'admincp_accounts',4,'Restore','Restore','','','admin','::1','2016-02-22 10:33:08'),(388,'admincp_accounts',4,'Trash','Trash','','','admin','::1','2016-02-22 10:35:32'),(389,'admincp_accounts',4,'Restore','Restore','','','admin','::1','2016-02-22 10:35:47'),(390,'admincp_accounts',4,'Trash','Trash','','','admin','::1','2016-02-22 10:37:43'),(391,'admincp_accounts',4,'Restore','Restore','','','admin','::1','2016-02-22 10:38:13'),(392,'admincp_accounts',4,'Trash','Trash','','','admin','::1','2016-02-22 10:39:29'),(393,'admincp_accounts',4,'Restore','Restore','','','admin','::1','2016-02-22 10:39:43'),(394,'admincp_accounts',4,'Trash','Trash','','','admin','::1','2016-02-22 10:40:59'),(395,'admincp_accounts',4,'Restore','Restore','','','admin','::1','2016-02-22 10:41:03'),(396,'admincp_accounts',4,'Trash','Trash','','','admin','::1','2016-02-22 10:47:32'),(397,'admincp_accounts',4,'Restore','Restore','','','admin','::1','2016-02-22 10:48:07'),(398,'admincp_accounts',4,'permission','Update','121|rwd,105|rwd,2|rwd,1|rwd,4|rwd,3|rwd,155|rwd,83|rwd,84|rwd','121|rwd,155|rwd,83|rwd,105|rwd,2|rwd,4|rwd,84|rwd','admin','::1','2016-02-22 10:48:19'),(399,'admincp_accounts',5,'Add new','Add new','','','admin','::1','2016-02-22 10:48:52'),(400,'admincp_accounts',5,'Trash','Trash','','','admin','::1','2016-02-22 10:49:01'),(401,'banners',16,'Trash','Trash','','','kimcuu','::1','2016-02-22 10:49:23'),(402,'admincp_accounts',5,'Restore','Restore','','','kimcuu','::1','2016-02-22 10:50:09'),(403,'banners',16,'Delete','Delete','','','admin','::1','2016-02-22 10:50:46'),(404,'menus',3,'Delete','Delete','','','admin','::1','2016-02-22 10:56:11'),(405,'menus',3,'Restore','Restore','','','admin','::1','2016-02-22 10:56:17'),(406,'menus',3,'Delete','Delete','','','admin','::1','2016-02-22 10:56:28'),(407,'menus',3,'Restore','Restore','','','admin','::1','2016-02-22 10:56:32'),(408,'menus',3,'Delete','Delete','','','admin','::1','2016-02-22 10:56:53'),(409,'menus',3,'Restore','Restore','','','admin','::1','2016-02-22 10:56:58'),(410,'static_pages',1,'status','Update','1','0','admin','::1','2016-02-22 11:13:51'),(411,'static_pages',1,'created','Update','2016-02-22 11:13:11','2016-02-22 11:13:51','admin','::1','2016-02-22 11:13:51'),(412,'static_pages',1,'content','Update','test','help','admin','::1','2016-02-22 11:14:08'),(413,'static_pages',1,'created','Update','2016-02-22 11:13:51','2016-02-22 11:14:08','admin','::1','2016-02-22 11:14:08'),(414,'static_pages',2,'Add new','Add new','','','admin','::1','2016-07-14 14:34:27'),(415,'static_pages',2,'content','Update','<!-- This is just a sample existing content (content can be loaded from a database) -->\n    \n    \n	\n\n	\n\n	\n\n	\n\n\n\n\n\n\n\n    \n\n	\n	\n\n	<div class=\"row clearfix\">\n\n        <div class=\"column full\">\n			 <p class=\"size-21 is-info2\"><i>This is a special report</i></p>\n             <h1 class=\"size-48 is-title1-48 is-title-bold is-upper\">Lorem Ipsum is simply dummy text of the printing industry</h1>\n        </div>\n\n	</div>\n\n<div class=\"row clearfix\">\n		<div class=\"column full\">\n			 <h1 class=\"size-48 is-title1-48 is-title-bold is-upper\" style=\"text-align: center;\">luan test</h1>\n        </div>\n	</div>\n\n	<div class=\"row clearfix\">\n\n		<div class=\"column full\">\n\n            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>\n\n        </div>\n\n	</div>','<!--\r\nThis is just a sample existing content (content can be loaded from a database)\r\n-->\r\n    \r\n    \r\n	\r\n\r\n	\r\n\r\n	\r\n\r\n	\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n    \r\n<div class=\"row clearfix\">        \r\n	<div class=\"column full\"> \r\n		<p class=\"size-21 is-info2\"><br />\r\n			</p></div></div>\r\n<div class=\"row clearfix\">\r\n	<div class=\"column full\">        </div></div>','admin','192.168.33.1','2017-09-21 23:12:04'),(416,'static_pages',2,'created','Update','2016-07-14 14:34:27','2017-09-21 23:12:04','admin','192.168.33.1','2017-09-21 23:12:04'),(417,'news',7,'Trash','Trash','','','admin','::1','2017-10-03 12:13:06'),(418,'news',6,'Trash','Trash','','','admin','::1','2017-10-03 12:13:06'),(419,'news',5,'Trash','Trash','','','admin','::1','2017-10-03 12:13:06'),(420,'news',2,'Trash','Trash','','','admin','::1','2017-10-03 12:13:06'),(421,'news',3,'Trash','Trash','','','admin','::1','2017-10-03 12:13:06'),(422,'news',4,'Trash','Trash','','','admin','::1','2017-10-03 12:13:06'),(423,'news',7,'Delete','Delete','','','admin','::1','2017-10-03 12:13:31'),(424,'news',6,'Delete','Delete','','','admin','::1','2017-10-03 12:13:31'),(425,'news',2,'Delete','Delete','','','admin','::1','2017-10-03 12:13:31'),(426,'news',3,'Delete','Delete','','','admin','::1','2017-10-03 12:13:31'),(427,'news',5,'Delete','Delete','','','admin','::1','2017-10-03 12:13:31'),(428,'news',4,'Delete','Delete','','','admin','::1','2017-10-03 12:13:31'),(429,'menus',4,'Add new','Add new','','','admin','::1','2017-10-07 16:47:59'),(430,'menus',4,'Trash','Trash','','','admin','::1','2017-10-07 16:48:24'),(431,'menus',4,'Delete','Delete','','','admin','::1','2017-10-07 16:48:39'),(432,'categories',2,'Delete','Delete','','','admin','::1','2017-10-07 22:02:44'),(433,'admincp_accounts',2,'password','Update','af03798e4f9010c54d2eb6f386124f7e','e10adc3949ba59abbe56e057f20f883e','admin','::1','2017-10-07 22:03:12'),(434,'admincp_accounts',2,'permission','Update','2|rwd,1|rwd,4|rwd,3|rwd,185|rwd,12|rwd,8|rwd,7|rwd,84|rwd,83|rwd,105|rwd,118|rwd,121|rwd,150|rwd,155|rwd','121|rwd,155|rwd,83|rwd,105|rwd,2|rwd,4|rwd,84|rwd','admin','::1','2017-10-07 22:03:12'),(435,'admincp_accounts',2,'custom_permission','Update','0','1','admin','::1','2017-10-07 22:03:12');

/*Table structure for table `admin_nqt_modules` */

DROP TABLE IF EXISTS `admin_nqt_modules`;

CREATE TABLE `admin_nqt_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `name_function` varchar(50) NOT NULL,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=171 DEFAULT CHARSET=utf8;

/*Data for the table `admin_nqt_modules` */

insert  into `admin_nqt_modules`(`id`,`name`,`name_function`,`order`,`status`,`created`) values (1,'Manager Account Group','admincp_account_groups',0,0,'2012-08-16 15:53:42'),(2,'Manager Account','admincp_accounts',2,1,'2012-08-16 15:53:42'),(3,'Manager Module','admincp_modules',0,0,'2012-08-16 15:53:42'),(4,'Manager Logs','admincp_logs',1,1,'2012-08-16 15:53:42'),(83,'News Management','news',4,1,'2015-06-14 19:36:38'),(84,'Static Pages Management','static_pages',0,1,'2015-06-14 19:36:38'),(105,'Categories Management','categories',3,1,'2015-06-20 12:51:53'),(121,'Banners Management','banners',6,1,'2015-07-04 22:32:44'),(155,'Menus Management','menus',5,1,'2015-10-28 16:25:37');

/*Table structure for table `admin_nqt_settings` */

DROP TABLE IF EXISTS `admin_nqt_settings`;

CREATE TABLE `admin_nqt_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `admin_nqt_settings` */

insert  into `admin_nqt_settings`(`id`,`slug`,`content`,`modified`) values (1,'title-admincp','aAdmin Control Panel','2015-05-18 13:28:02');

/*Table structure for table `admin_nqt_users` */

DROP TABLE IF EXISTS `admin_nqt_users`;

CREATE TABLE `admin_nqt_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `group_id` int(11) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `custom_permission` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `admin_nqt_users` */

insert  into `admin_nqt_users`(`id`,`username`,`password`,`group_id`,`permission`,`custom_permission`,`status`,`delete`,`created`) values (1,'root','53fab80925e21d959402658124f71c36',1,'2|rwd,1|rwd,4|rwd,3|rwd,185|rwd,12|rwd,8|rwd,7|rwd,84|rwd,83|rwd,105|rwd,118|rwd,121|rwd,150|rwd,155|rwd',0,1,0,'2012-08-28 14:52:42'),(2,'admin','e10adc3949ba59abbe56e057f20f883e',1,'121|rwd,155|rwd,83|rwd,105|rwd,2|rwd,4|rwd,84|rwd',1,1,0,'2012-08-28 14:52:59'),(4,'kimcuu','e10adc3949ba59abbe56e057f20f883e',1,'121|rwd,155|rwd,83|rwd,105|rwd,2|rwd,4|rwd,84|rwd',1,1,0,'2015-12-02 14:52:42'),(5,'a','e10adc3949ba59abbe56e057f20f883e',1,'121|rwd,155|rwd,83|rwd,105|rwd,2|rwd,4|rwd,84|rwd',1,1,0,'2016-02-22 10:48:52');

/*Table structure for table `jv-it_banners` */

DROP TABLE IF EXISTS `jv-it_banners`;

CREATE TABLE `jv-it_banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `status` tinyint(1) DEFAULT '1',
  `delete` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

/*Data for the table `jv-it_banners` */

/*Table structure for table `jv-it_categories` */

DROP TABLE IF EXISTS `jv-it_categories`;

CREATE TABLE `jv-it_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `delete` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `jv-it_categories` */

/*Table structure for table `jv-it_menus` */

DROP TABLE IF EXISTS `jv-it_menus`;

CREATE TABLE `jv-it_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `order` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  `delete` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `jv-it_menus` */

insert  into `jv-it_menus`(`id`,`name`,`url`,`parent_id`,`order`,`status`,`delete`,`created`) values (3,'a','http://localhost/project_template/admincp/menus/update/',0,0,1,0,'2016-02-22 10:01:21');

/*Table structure for table `jv-it_news` */

DROP TABLE IF EXISTS `jv-it_news`;

CREATE TABLE `jv-it_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `highlight` tinyint(1) DEFAULT '1',
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keywords` varchar(255) DEFAULT NULL,
  `seo_description` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `delete` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `jv-it_news` */

/*Table structure for table `jv-it_static_pages` */

DROP TABLE IF EXISTS `jv-it_static_pages`;

CREATE TABLE `jv-it_static_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longblob NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `jv-it_static_pages` */

insert  into `jv-it_static_pages`(`id`,`title`,`slug`,`content`,`status`,`created`) values (1,'Admin Help','admin-help','help',0,'2016-02-22 11:14:08'),(2,'Content Builder','content-builder','<!--\r\nThis is just a sample existing content (content can be loaded from a database)\r\n-->\r\n    \r\n    \r\n	\r\n\r\n	\r\n\r\n	\r\n\r\n	\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n    \r\n<div class=\"row clearfix\">        \r\n	<div class=\"column full\"> \r\n		<p class=\"size-21 is-info2\"><br />\r\n			</p></div></div>\r\n<div class=\"row clearfix\">\r\n	<div class=\"column full\">        </div></div>',0,'2017-09-21 23:12:04');

/*Table structure for table `tbl_accommodationprice` */

DROP TABLE IF EXISTS `tbl_accommodationprice`;

CREATE TABLE `tbl_accommodationprice` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `accommodationId` bigint(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tbl_accommodationprice` */

/*Table structure for table `tbl_accommodations` */

DROP TABLE IF EXISTS `tbl_accommodations`;

CREATE TABLE `tbl_accommodations` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `images` text,
  `description` text,
  `size` varchar(50) DEFAULT NULL,
  `bedding` varchar(50) DEFAULT NULL,
  `view` varchar(50) DEFAULT NULL,
  `occupancyAdult` int(11) DEFAULT NULL,
  `occupancyChild` int(11) DEFAULT NULL,
  `amenities` text,
  `price` varchar(50) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tbl_accommodations` */

/*Table structure for table `tbl_amenities` */

DROP TABLE IF EXISTS `tbl_amenities`;

CREATE TABLE `tbl_amenities` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tbl_amenities` */

/*Table structure for table `tbl_booking` */

DROP TABLE IF EXISTS `tbl_booking`;

CREATE TABLE `tbl_booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customerName` varchar(50) DEFAULT NULL,
  `customerEmail` varchar(50) DEFAULT NULL,
  `customerPhone` varchar(50) DEFAULT NULL,
  `customerAddress` varchar(50) DEFAULT NULL,
  `fromDate` date DEFAULT NULL,
  `toDate` date DEFAULT NULL,
  `accommodationId` bigint(20) DEFAULT NULL,
  `totalPrice` varchar(50) DEFAULT NULL,
  `detailPrice` text,
  `detailService` text,
  `occupancyAdult` int(11) DEFAULT NULL,
  `occupancyChild` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `createdDate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tbl_booking` */

/*Table structure for table `tbl_promotion` */

DROP TABLE IF EXISTS `tbl_promotion`;

CREATE TABLE `tbl_promotion` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `condition` int(11) DEFAULT NULL,
  `discount` varchar(50) DEFAULT NULL,
  `images` text,
  `discription` text,
  `accommodationId` bigint(20) DEFAULT NULL,
  `createdDate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tbl_promotion` */

/*Table structure for table `tbl_services` */

DROP TABLE IF EXISTS `tbl_services`;

CREATE TABLE `tbl_services` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `images` text,
  `discription` text,
  `price` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tbl_services` */

/*Table structure for table `tbl_utilities` */

DROP TABLE IF EXISTS `tbl_utilities`;

CREATE TABLE `tbl_utilities` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title_vn` varchar(50) DEFAULT NULL,
  `title_en` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `description_vn` text,
  `description_en` text,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tbl_utilities` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;