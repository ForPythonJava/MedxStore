/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.5.8-log : Database - medxstore
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`medxstore` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `medxstore`;

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `reg_id` varchar(100) NOT NULL,
  `med_id` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL DEFAULT '1',
  `amount` varchar(100) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'incart',
  `delivery_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `cart` */

insert  into `cart`(`cartid`,`reg_id`,`med_id`,`qty`,`amount`,`order_date`,`status`,`delivery_id`) values (26,'1','1','2','100','2023-08-14','Delivered','1'),(27,'1','3','1','40','2023-08-14','Paid',NULL),(28,'1','1','1','50','2023-08-19','incart',NULL),(29,'1','3','1','40','2023-08-19','incart',NULL);

/*Table structure for table `deliveryboy` */

DROP TABLE IF EXISTS `deliveryboy`;

CREATE TABLE `deliveryboy` (
  `delivery_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `status` varchar(100) DEFAULT 'FREE',
  PRIMARY KEY (`delivery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `deliveryboy` */

insert  into `deliveryboy`(`delivery_id`,`name`,`email`,`phone`,`address`,`status`) values (1,'Vineeth','vineeth@gmail.com','9874563211','Shenoys, Kochi, Ernakulam, Kerala 682035','FREE');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`reg_id`,`email`,`password`,`usertype`,`status`) values (1,'1','manu@gmail.com','123','Patient','Approved'),(2,'1','jyothi@gmail.com','123','Shop','Approved'),(3,'0','admin@gmail.com','admin','Admin','Approved'),(4,'1','vineeth@gmail.com','123','Delivery Boy','Approved'),(5,'2','abc@gmail.com','123','Shop','Pending'),(6,'3','apollo@gmail.com','123','Shop','Approved');

/*Table structure for table `medicine` */

DROP TABLE IF EXISTS `medicine`;

CREATE TABLE `medicine` (
  `med_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `dose` varchar(100) NOT NULL,
  `mfgdate` varchar(100) NOT NULL,
  `expdate` varchar(100) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL,
  `desc` varchar(300) NOT NULL,
  `shopid` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`med_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `medicine` */

insert  into `medicine`(`med_id`,`name`,`dose`,`mfgdate`,`expdate`,`rate`,`stock`,`desc`,`shopid`,`image`) values (1,'Paracetamol','500','2023-08-04','2026-11-27','50','7','Paracetamol is a commonly used medicine that can help treat pain and reduce a high temperature','1','paracetamol-tablets.png'),(3,'Meftal Forte','500','2023-08-04','2026-11-27','40','8','Meftal-Forte Tablet is a combination of two medicines. It is used in the treatment of fever.','1','meftal.jpeg');

/*Table structure for table `patient` */

DROP TABLE IF EXISTS `patient`;

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `patient` */

insert  into `patient`(`patient_id`,`name`,`email`,`phone`,`address`) values (1,'Manu','manu@gmail.com','8089222038','Kochi');

/*Table structure for table `shop` */

DROP TABLE IF EXISTS `shop`;

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `licence` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `shop` */

insert  into `shop`(`shop_id`,`name`,`email`,`phone`,`licence`,`address`,`image`) values (1,'Jyothi Medicals','jyothi@gmail.com','8089222038','JYOT215478','X7GP+F2X, YMCA Junction, Shenoys, Ernakulam, Kerala 682011','shop.png'),(2,'ABC Medicals','abc@gmail.com','9876543210','ABCD123456','Near Kaloor Metro Station,Pillar No:543','shop.png'),(3,'Apollo Pharmacy','apollo@gmail.com','8921500629','APOL654372','Ground Floor, X/1230, Chullickal, Kochi, Kerala 682005','apollo.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
