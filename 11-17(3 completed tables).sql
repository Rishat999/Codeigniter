/*
SQLyog Community v12.4.3 (64 bit)
MySQL - 10.1.32-MariaDB : Database - skimmofruu848
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`skimmofruu848` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `skimmofruu848`;

/*Table structure for table `vlad_docs` */

DROP TABLE IF EXISTS `vlad_docs`;

CREATE TABLE `vlad_docs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `urgent_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `shared_type` enum('single','shared') COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filename` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `vlad_docs` */

insert  into `vlad_docs`(`id`,`number`,`name`,`description`,`type`,`created_at`,`urgent_type`,`status`,`shared_type`,`url`,`filename`) values 
(1,3,'codeigniter_tutorial.pdf','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2018-06-30','2018-06-30','2018-06-30',NULL,NULL,NULL,NULL),
(2,1,'3w5.pdf','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2018-07-05',NULL,'2018-07-04',NULL,NULL,NULL,NULL),
(3,1,'4tg.pdf','afdsfasdfasdf','2018-07-05',NULL,'2018-07-04',NULL,NULL,NULL,NULL),
(4,3,'5kjhgf.pdf','wyyefdxgdr document is good\nvery good','2018-07-05','2018-07-05','2018-07-04',NULL,NULL,NULL,NULL),
(5,4,'6iyhgbv.pdf','wyyefdxgdr document is good','2018-07-05','2018-07-05','2018-07-04',NULL,NULL,NULL,NULL),
(102,11,'doc1','111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111','article','2018-11-16','urgent','active','single','ci.invoice.com/uploads/main_files/How to get Magento Certified in 30 days.pdf','How to get Magento Certified in 30 days.pdf'),
(103,11,'doc1','111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111','article','2018-11-16','urgent','active','single','ci.invoice.com/uploads/main_files/Magento- Beginner\'s Guide, 2nd Edition.pdf','Magento- Beginner\'s Guide, 2nd Edition.pdf'),
(104,5,'doc1','122222222222222222222','article','2018-11-16','very urgent','active','single','ci.invoice.com/uploads/main_files/How to get Magento Certified in 30 days.pdf','How to get Magento Certified in 30 days.pdf'),
(105,5,'doc1','122222222222222222222','article','2018-11-16','very urgent','active','single','ci.invoice.com/uploads/main_files/Magento- Beginner\'s Guide, 2nd Edition.pdf','Magento- Beginner\'s Guide, 2nd Edition.pdf'),
(106,6,'doc6','00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000','conference','2018-11-16','very urgent','active','single','ci.invoice.com/uploads/main_files/Magento PHP Developers Guide.pdf','Magento PHP Developers Guide.pdf'),
(107,6,'doc6','00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000','conference','2018-11-16','very urgent','active','single','ci.invoice.com/uploads/main_files/Magento Designers Guide.pdf','Magento Designers Guide.pdf'),
(108,6,'doc6','00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000','conference','2018-11-16','very urgent','active','single','ci.invoice.com/uploads/main_files/Magento- Beginner\'s Guide, 2nd Edition.pdf','Magento- Beginner\'s Guide, 2nd Edition.pdf');

/*Table structure for table `vlad_related_docs` */

DROP TABLE IF EXISTS `vlad_related_docs`;

CREATE TABLE `vlad_related_docs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

/*Data for the table `vlad_related_docs` */

insert  into `vlad_related_docs`(`id`,`number`,`name`,`url`) values 
(14,555,'Magento PHP Developers Guide.pdf','ci.invoice.com/uploads/related_files/Magento PHP Developers Guide.pdf'),
(15,11,'Magento PHP Developers Guide.pdf','ci.invoice.com/uploads/related_files/Magento PHP Developers Guide.pdf'),
(16,11,'Magento Designers Guide.pdf','ci.invoice.com/uploads/related_files/Magento Designers Guide.pdf'),
(17,5,'Magento Designers Guide.pdf','ci.invoice.com/uploads/related_files/Magento Designers Guide.pdf'),
(18,5,'Magento PHP Developers Guide.pdf','ci.invoice.com/uploads/related_files/Magento PHP Developers Guide.pdf'),
(19,6,'_Professional WordPress_3rd Edition.pdf','ci.invoice.com/uploads/related_files/_Professional WordPress_3rd Edition.pdf'),
(20,6,'_Wordpress-3.8_user_guide.pdf','ci.invoice.com/uploads/related_files/_Wordpress-3.8_user_guide.pdf');

/*Table structure for table `vlad_users` */

DROP TABLE IF EXISTS `vlad_users`;

CREATE TABLE `vlad_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `registered_at` date NOT NULL,
  `availability` enum('available','unavailable') COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `vlad_users` */

insert  into `vlad_users`(`id`,`name`,`email_address`,`password`,`role`,`registered_at`,`availability`,`level`) values 
(1,'Apple1','applepopov803@gmail.com','202cb962ac59075b964b07152d234b70','admin','2018-06-30','available',5),
(13,'Dean Office User','1@1.com','202cb962ac59075b964b07152d234b70','Dean Office','2018-11-16','available',4),
(14,'Data Entry User','2@2.com','202cb962ac59075b964b07152d234b70','Data Entry','2018-11-16','available',4),
(15,'Dean User','3@3.com','202cb962ac59075b964b07152d234b70','Dean','2018-11-16','available',3),
(16,'Asst.Dean for administration affairs User','5@5.com','202cb962ac59075b964b07152d234b70','Asst. Dean for administration affairs','2018-11-16','available',2),
(17,'Asst.Dean for scientific affair User','6@6.com','202cb962ac59075b964b07152d234b70','Asst. Dean for scientific affair','2018-11-16','available',2),
(18,'Scientific Departments User','8@8.com','202cb962ac59075b964b07152d234b70','Scientific Departments','2018-11-16','available',2),
(19,'HR User','8@8.com','202cb962ac59075b964b07152d234b70','HR','2018-11-16','available',1),
(20,'Financial User','9@9.com','202cb962ac59075b964b07152d234b70','Financial','2018-11-16','available',1),
(21,'Qos User','10@10.com','202cb962ac59075b964b07152d234b70','Qos','2018-11-16','available',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
