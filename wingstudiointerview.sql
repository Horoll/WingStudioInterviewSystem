/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.14 : Database - wingstudiointerview
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`wingstudiointerview` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `wingstudiointerview`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `authority` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`id`,`account`,`password`,`authority`) values (1,'admin1','e00cf25ad42683b3df678c61f42c6bda',1),(5,'admin2','c84258e9c39059a89ab77d846ddab909',1),(3,'admin3','32cacb2f994f6b42183a1300d9a3e8d6',1),(4,'admin4','fc1ebc848e31e0a68e868432225e3c82',1),(6,'admin5','26a91342190d515231d7238b0c5438e1',1),(7,'admin6','c6b853d6a7cc7ec49172937f68f446c8',1);

/*Table structure for table `interviews` */

DROP TABLE IF EXISTS `interviews`;

CREATE TABLE `interviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `people_num` int(11) NOT NULL DEFAULT '0' COMMENT '参加这个面试的人数',
  `now_num` int(11) NOT NULL DEFAULT '0' COMMENT '当前喊道哪个号了',
  `group_num` int(11) NOT NULL DEFAULT '1' COMMENT '有几个面试组',
  `group_people` int(11) NOT NULL DEFAULT '1' COMMENT '每组几个面试官',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

/*Data for the table `interviews` */

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `schoolid` varchar(10) NOT NULL COMMENT '学号',
  `sex` varchar(5) NOT NULL,
  `class` varchar(20) DEFAULT NULL,
  `mail` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `group_id` int(11) NOT NULL COMMENT '属于哪个面试',
  `order_id` int(11) NOT NULL COMMENT '面试序号',
  `interview_group` int(11) DEFAULT NULL COMMENT '面试组别',
  `interviewer_name` varchar(50) DEFAULT NULL COMMENT '面试官帐号',
  `grade` float DEFAULT NULL COMMENT '评分',
  `remark` varchar(200) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

/*Data for the table `student` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
