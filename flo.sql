-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: eu-cdbr-azure-west-a.cloudapp.net    Database: fedjo
-- ------------------------------------------------------
-- Server version	5.5.45-log

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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (11,'stephanie L.','lmfstephy@gmail.com','Fulda','Allemagne','ce que Dieu a uni, nul ne peut séparer!\r\nque Le Tout Puissant illumine votre maison de bohneur et joie.\r\nfelicitation à vous!!','2016-10-13 17:16:21'),(21,'Espérance ','tsague_espe@yahoo.fr','Kampala','Ouganda','Joëlle, Florent, tenez-vous toujours par la main et tenez la main de Jésus. Lui qui est Amour saura parfaire votre amour et vous combler de bonheur!\r\nJe vous souhaite un merveilleux mariage. \r\n\r\nEspérance','2016-10-16 04:06:00'),(31,'Pascaline et Edmond','pascaline.lemofouet@gmail.com','Buch am Buchrain','Allemagne','Joelle et Florent, nous vous souhaitons beaucoup d´amour et de bénédictions et que le Très Haut soit votre guide.','2016-10-17 13:03:42'),(51,'Nguems nguems','estaguems@yahoo.fr ','Québec ','Canada','\r\n\r\nLe mariage est l\'accomplissement d\'un rêve et le commencement de nombreux autres.\r\n\r\nPuissiez-vous connaître tous les deux, année après année, les joies du partage, les plaisirs de l\'amitié et les délices de l\'affection afin que la vie vous apporte sans restriction ce qu\'il y a de meilleur et de plus précieux.\r\n\r\nFélicitations M. et Mme Braaa','2016-10-18 16:26:39'),(61,'Carine & Johnson','jnfapong@yahoo.fr','Regensburg','Allemagne','Felicitation Joelle Et Florent.\r\nPlein de benedictions dans votre couple.','2016-10-19 02:30:15'),(71,'Famille Fankeng Serge\\ Léa ','fankengl@yahoo.fr','Rouen ','France','Félicitations à vous !!!!\r\nQue le Seigneur vous accorde sa grâce afin de vous aider à vivre dans la paix, l\'amour et le pardon.\r\nSoyez Heureux !!!','2016-10-20 00:57:27'),(91,'Elodie Fedjo','elodiefedjo@gmail.com','Douala','Cameroun','Puisse l\'éternel des armées qui a fait maître vôtre amour, bénir votre foyer, afin que vous y connaissiez beaucoup de bonheur et de joie à son service. \r\nRemain blessed','2016-10-20 12:25:35'),(111,'Ismaelle laure FEUDJIO','Lorfedjo@yahoo.fr','Buea','Cameroun','Que la paix du Seigneur règne dans votre couple à jamais. Que le dialogue soit la clé du succès de votre mariage.','2016-10-22 14:22:16');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-24 13:37:50
