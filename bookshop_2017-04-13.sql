# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Database: bookshop
# Generation Time: 2017-04-13 17:46:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table books
# ------------------------------------------------------------

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `editor` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `category` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;

INSERT INTO `books` (`id`, `name`, `author`, `editor`, `rating`, `category`, `description`, `price`, `photo`)
VALUES
	(1,'The Light Between Oceans','M. l. Stedman','Scribner',5,'Novel','After four harrowing years on the Western Front, Tom Sherbourne returns to Australia and takes a job as the lighthouse keeper on Janus Rock, nearly half a day\'s journey from the coast.',14.99,'1.jpg'),
	(2,'To Kill a Mockingbird','Harper Lee ','Grand Central Publishing',4,'Drama','Now featuring a new introduction by the author, this specially packaged, popularly priced hardcover edition of an American classic (with more than 30 million copies sold) celebrates the 35th anniversary of its original publication.',11.99,'2.jpg'),
	(3,'Fahrenheit 451','Ray Bradbury','Simon & Schuster',5,'Novel','Ray Bradbury\'s internationally acclaimed novel Fahrenheit 451 is a masterwork of twentieth-century literature set in a bleak, dystopian future. ',18.95,'3.jpg'),
	(4,'In Cold Blood','Truman Capote','Vintage Books',5,'Horror','As Truman Capote reconstructs the murder and the investigation that led to the capture, trial, and execution of the killers, he generates both mesmerizing suspense and astonishing empathy. ',20,'4.jpg');

/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
