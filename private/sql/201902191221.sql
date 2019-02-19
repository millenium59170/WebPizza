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
-- Dumping data for table `ingredients`
--

LOCK TABLES `ingredients` WRITE;
/*!40000 ALTER TABLE `ingredients` DISABLE KEYS */;
INSERT INTO `ingredients` VALUES (1,'jambon',0,0),(2,'champignons',0,0),(3,'oeuf',0,0),(4,'lardons',0,0),(5,'chorizo',0,0),(6,'oignons',0,0),(7,'poivron',0,0),(8,'olives',0,0),(9,'crème fraiche',0,0),(10,'reblochon',0,0),(11,'roquefort',0,0),(12,'gruyère',0,0),(13,'parmesan',0,0),(14,'gorgonzola',0,0),(15,'fromage de chèvre',0,0),(16,'merguez',0,0),(17,'artichauts',1,0),(18,'tomates',1,0),(19,'épinards',1,0),(20,'anchois',0,0),(21,'câpres',0,0),(22,'viande de grison',0,0),(23,'épices',0,0),(24,'thon',0,0),(25,'pommes de terre',0,0),(26,'saumon fumé',0,0),(27,'salami',0,0),(28,'mozzarella',0,0),(29,'jambon de parme',0,0),(30,'ananas',0,0),(31,'herbes de provence',0,0),(32,'emmental',0,0),(33,'ricotta',0,0),(34,'feta',0,0),(35,'moules',0,0),(36,'palourdes',0,0),(37,'basilic',1,0),(38,'coquille Saint-Jacques',0,0),(39,'crevettes',0,0),(40,'dorate',0,0),(41,'persillade',1,0),(42,'pomme',1,0),(43,'banane',1,0),(44,'boudin noir',0,0),(45,'kiwi',0,0),(46,'noix',1,0),(47,'sauce bolognaise',0,0),(48,'aubergine',1,0),(49,'brocoli',0,0),(50,'artichaut',1,0),(51,'courgette',1,0),(52,'pignons',0,0),(53,'endive',1,0),(54,'asperge',1,0),(55,'avocat',1,0),(56,'citron',1,0),(57,'bacon',0,0),(58,'pruneau',0,0),(59,'ventrèche',0,0),(60,'chou-fleur',1,0),(61,'paprika',0,0);
/*!40000 ALTER TABLE `ingredients` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-18  6:53:44
