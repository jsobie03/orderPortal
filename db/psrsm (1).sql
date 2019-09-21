-- MariaDB dump 10.17  Distrib 10.4.6-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: psrsm_spos
-- ------------------------------------------------------
-- Server version	10.4.6-MariaDB

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
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `custID` int(6) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `cust_phone` varchar(17) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`custID`),
  UNIQUE KEY `idx_customer_cust_phone_custID` (`cust_phone`,`custID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'Marcia Sobier','9496903001'),(2,'Gary Sobier','9495005524'),(3,'Nicole Sobier','2733443939'),(4,'Parks Owens','5555555555');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `empID` int(6) NOT NULL,
  `emp_name` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`empID`),
  UNIQUE KEY `idx_employee_empID_emp_name` (`empID`,`emp_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (101,'Jon Sobier'),(102,'Karen Batson'),(103,'Karen Hansen'),(104,'Renee Smith'),(307,'Jon Sobier');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `orderID` int(6) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `item_number` int(16) DEFAULT NULL,
  `item_description` varchar(255) COLLATE utf8_bin NOT NULL,
  `custID` int(6) NOT NULL,
  `item_size` varchar(30) COLLATE utf8_bin NOT NULL,
  `item_qty` varchar(40) COLLATE utf8_bin NOT NULL,
  `animal` varchar(40) COLLATE utf8_bin NOT NULL,
  `other_explain` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `empID` int(6) NOT NULL,
  `placedBy` int(6) DEFAULT NULL,
  `placedDate` date DEFAULT NULL,
  `arrivalDate` date DEFAULT NULL,
  `calledDate` date DEFAULT NULL,
  `calledBy` int(6) DEFAULT NULL,
  `pickedUpDate` date DEFAULT NULL,
  `orderOpen` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`orderID`),
  UNIQUE KEY `idx_orders_orderID` (`orderID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'2019-09-07',2147483647,'Test Item',1,'25lbs','3','Dog','',307,307,'2019-09-08','2019-09-11','2019-09-11',101,'2019-09-14',0),(2,'2019-09-08',2147483647,'Test Item 2',2,'40lbs','3','Horse','',307,307,'2019-09-09','2019-09-08','2019-09-08',101,NULL,1),(3,'2019-09-07',2147483647,'Testing',2,'5.5oz','1','Cat','',307,NULL,NULL,'2019-09-08','2019-09-08',101,NULL,1),(4,'2019-09-07',2147483647,'Test item6',4,'12.5oz','12','Cat','',307,NULL,NULL,NULL,NULL,NULL,NULL,1);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'SobierJ','cb581ea9d7f709bd9d186dc2dab9676c','2019-09-07 22:51:36');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'psrsm_spos'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-08 23:00:23
