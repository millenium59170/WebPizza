-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: webpizza
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,NULL,'Hawaïenne',NULL,'pizza-hawaienne.jpg',9.50,'pizza'),(2,NULL,'Tomates',NULL,'no_photo.jpg',8.10,'pizza');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;


--
-- Dumping data for table `product_ingredients`
--

LOCK TABLES `product_ingredients` WRITE;
/*!40000 ALTER TABLE `product_ingredients` DISABLE KEYS */;
INSERT INTO `webpizza`.`product_ingredients` (`id_product`, `id_ingredient`) VALUES ('1', '30');
INSERT INTO `webpizza`.`product_ingredients` (`id_product`, `id_ingredient`) VALUES ('1', '28');
INSERT INTO `webpizza`.`product_ingredients` (`id_product`, `id_ingredient`) VALUES ('1', '1');
INSERT INTO `webpizza`.`product_ingredients` (`id_product`, `id_ingredient`) VALUES ('1', '12');
INSERT INTO `webpizza`.`product_ingredients` (`id_product`, `id_ingredient`) VALUES ('2', '18');
INSERT INTO `webpizza`.`product_ingredients` (`id_product`, `id_ingredient`) VALUES ('1', '18');
INSERT INTO `webpizza`.`product_ingredients` (`id_product`, `id_ingredient`) VALUES ('2', '1');
INSERT INTO `webpizza`.`product_ingredients` (`id_product`, `id_ingredient`) VALUES ('2', '9');
INSERT INTO `webpizza`.`product_ingredients` (`id_product`, `id_ingredient`) VALUES ('2', '12');
INSERT INTO `webpizza`.`product_ingredients` (`id_product`, `id_ingredient`) VALUES ('2', '37');
INSERT INTO `webpizza`.`product_ingredients` (`id_product`, `id_ingredient`) VALUES ('2', '62');
/*!40000 ALTER TABLE `product_ingredients` ENABLE KEYS */;
UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-24 18:50:34
