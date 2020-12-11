/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.14-MariaDB : Database - brain
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`brain` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `brain`;

/*Table structure for table `albums` */

DROP TABLE IF EXISTS `albums`;

CREATE TABLE `albums` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `band_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `albums` */

insert  into `albums`(`id`,`band_id`,`name`,`slug`,`year`,`created_at`,`updated_at`) values 
(1,1,'Sounding the sevent trumpet','sounding-the-sevent-trumpet','2001','2020-12-11 22:37:01','2020-12-11 22:37:01'),
(2,1,'Walking The Fallen','walking-the-fallen','2003','2020-12-11 22:37:51','2020-12-11 22:37:51'),
(3,1,'City Of Evil','city-of-evil','2005','2020-12-11 22:38:31','2020-12-11 22:38:31'),
(4,2,'Law of The Blade','law-of-the-blade','2002','2020-12-11 22:39:21','2020-12-11 22:39:21'),
(5,2,'Control Demolition','control-demolition','2019','2020-12-11 22:39:44','2020-12-11 22:39:44'),
(6,2,'Chalice of steel','chalice-of-steel','2019','2020-12-11 22:40:04','2020-12-11 22:40:04'),
(7,2,'Steel Bound','steel-bound','2013','2020-12-11 22:40:22','2020-12-11 22:40:22');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
