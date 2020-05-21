# ************************************************************
# Database: blog_post
# Generation Time: 2020-05-21 14:25:00 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table authors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `authors`;

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL AUTO_INCREMENT,
  `author_name` varchar(255) DEFAULT NULL,
  `author_location` varchar(255) DEFAULT NULL,
  `author_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;

INSERT INTO `authors` (`author_id`, `author_name`, `author_location`, `author_image`)
VALUES
	(1,'Michael Jordan','USA','mj.jpg'),
	(2,'Leo Messi','Argentina','leo.jpg'),
	(3,'Cristiano Ronaldo','Portugal','ronaldo.jpg'),
	(4,'Diego Maradona','Argentina','diego.jpg'),
	(5,'Neymar Jr','Brazil','neymary.jpg');

/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table blog_post
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blog_post`;

CREATE TABLE `blog_post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `full_desc` text,
  `read_length` int(11) DEFAULT NULL,
  `date_posted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `views` int(11) DEFAULT NULL,
  `seo_done` tinyint(4) DEFAULT '0',
  `category` varchar(255) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

LOCK TABLES `blog_post` WRITE;
/*!40000 ALTER TABLE `blog_post` DISABLE KEYS */;

INSERT INTO `blog_post` (`post_id`, `title`, `full_desc`, `read_length`, `date_posted`, `views`, `seo_done`, `category`, `author_id`, `image`)
VALUES
	(13,'This is blog post title number 13','lorem ipsum',6,'2020-04-19 10:36:16',1,1,'Sound Editing',5,'blog1.jpg'),
	(14,'This is blog post title number 14','lorem ipsum',7,'2020-04-19 10:36:29',1,1,'Sound Editing',4,'blog1.jpg'),
	(21,'This is blog post title number XX','lorem ipsum',6,'2020-05-19 10:47:42',1,1,'Sound Editing',5,'blog1.jpg'),
	(22,'This is blog post title number XX','lorem ipsum',7,'2020-05-19 10:47:42',1,1,'Sound Editing',4,'blog1.jpg'),
	(24,'Blog Post #1','lorem ipsum',3,'2020-05-19 10:47:42',12,0,'Sound Design',3,'blog1.jpg'),
	(26,'This is blog post title number XX','lorem ipsum',6,'2020-05-19 10:47:42',1,1,'Sound Editing',5,'blog1.jpg'),
	(27,'This is blog post title number XX','lorem ipsum',7,'2020-05-19 10:47:42',1,1,'Sound Editing',4,'blog1.jpg'),
	(28,' NEYMAR NEW EDIT2','gtt',2,'2020-05-19 10:47:42',2,1,'Sound Editing',5,'blog1.jpg'),
	(31,'This is blog post title number XX','lorem ipsum',6,'2020-05-19 10:47:42',1,1,'Sound Editing',5,'blog1.jpg'),
	(32,'This is blog post title number XX','lorem ipsum',7,'2020-05-19 10:47:42',1,1,'Sound Editing',4,'blog1.jpg'),
	(33,'This is blog post title number XX','lorem ipsum',5,'2020-05-19 10:47:42',0,1,'Sound Editing',3,'blog1.jpg'),
	(34,'This is blog post title number XX','lorem ipsum',9,'2020-05-19 10:47:42',0,1,'Sound Design',3,'blog1.jpg'),
	(36,'This is blog post title number XX','lorem ipsum',6,'2020-05-19 10:47:42',1,1,'Sound Editing',5,'blog1.jpg'),
	(37,'This is blog post title number XX','lorem ipsum',7,'2020-05-19 10:47:42',1,1,'Sound Editing',4,'blog1.jpg'),
	(38,'This is blog post title number XX','lorem ipsum',5,'2020-05-19 10:47:42',0,1,'Sound Editing',3,'blog1.jpg'),
	(39,'This is blog post title number XX','lorem ipsum',9,'2020-05-19 10:47:42',0,1,'Sound Design',3,'blog1.jpg'),
	(41,'This is blog post title number XX','lorem ipsum',6,'2020-05-19 10:47:42',1,1,'Sound Editing',5,'blog1.jpg'),
	(42,'This is blog post title number XX','lorem ipsum',7,'2020-05-19 10:47:42',1,1,'Sound Editing',4,'blog1.jpg'),
	(43,'This is blog post title number XX','lorem ipsum',5,'2020-05-19 10:47:42',0,1,'Sound Editing',3,'blog1.jpg'),
	(44,'This is blog post title number XX','lorem ipsum',9,'2020-05-19 10:47:42',0,1,'Sound Design',3,'blog1.jpg'),
	(46,'This is blog post title number XX','lorem ipsum',6,'2020-05-19 10:47:42',1,1,'Sound Editing',5,'blog1.jpg'),
	(47,'This is blog post title number XX','lorem ipsum',7,'2020-05-19 10:47:42',1,1,'Sound Editing',4,'blog1.jpg'),
	(48,'This is blog post title number XX','lorem ipsum',5,'2020-05-19 10:47:42',0,1,'Sound Editing',3,'blog1.jpg'),
	(49,'This is blog post title number XX','lorem ipsum',9,'2020-05-19 10:47:42',0,1,'Sound Design',3,'blog1.jpg');

/*!40000 ALTER TABLE `blog_post` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comment_rate
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comment_rate`;

CREATE TABLE `comment_rate` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text,
  `rating` int(11) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `user_id` (`user_id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

LOCK TABLES `comment_rate` WRITE;
/*!40000 ALTER TABLE `comment_rate` DISABLE KEYS */;

INSERT INTO `comment_rate` (`comment_id`, `comment_text`, `rating`, `date_added`, `user_id`, `post_id`)
VALUES
	(1,'This is comment number 1',4,'2020-04-19 10:01:54',1,1),
	(2,'This is comment number 2',2,'2020-04-19 10:43:35',5,17),
	(3,'This is comment number 3',3,'2020-04-19 10:43:45',4,12),
	(4,'This is comment number 4',5,'2020-04-19 10:43:57',3,14),
	(5,'This is comment number 5',5,'2020-04-19 10:44:08',2,11);

/*!40000 ALTER TABLE `comment_rate` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `nick_name` varchar(45) DEFAULT NULL,
  `street` varchar(145) DEFAULT NULL,
  `city` varchar(145) DEFAULT NULL,
  `postal_code` char(7) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `country` enum('Canada','USA') DEFAULT 'Canada',
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `age` int(3) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `nick_name`, `street`, `city`, `postal_code`, `province`, `country`, `phone`, `email`, `password`, `age`, `created_at`, `updated_at`)
VALUES
	(46,'Milad','Darani','fffffffff','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','milad.darani@hotmail.com','$2y$10$wZjt.UAltYuaqEfcccA8Nu2TVcD3prHBZNLjilPn1gTB5oE2Gzg.a',34,'2020-05-07 18:53:03','2020-05-07 18:53:03'),
	(47,'Milad','Darani','dsd','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','iamcool@cool.com','$2y$10$vvCRN2FPYDOx4tMcoG0NOeb7z5x7amKsFY9LH7ziemo/LhMc1Rdka',32,'2020-05-07 20:30:08','2020-05-07 20:30:08'),
	(50,'Milad','Darani','sss','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','milad.daranis@hotmail.com','$2y$10$/fvzvgpbh3YEidV7OEwcauA/qF9sDwVcnN8DcmVwH9eRRuY.oo1da',32,'2020-05-07 23:50:49','2020-05-07 23:50:49'),
	(63,'Milad','Darani','sss','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','milad.darani@hotmail.comzz','$2y$10$sYhZEQIuwZ90oyax/NRbYOlnKEPf8.E.3z1UV2UZU/1Z7Du3SHGT.',35,'2020-05-08 01:17:34','2020-05-08 01:17:34'),
	(65,'Milad','Darani','qqw','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','sam@sam.com','$2y$10$bHChDg3jJSnypncczwdnZuoUC49aeEp1uhFdwC2UbLjC0uyocQZmm',35,'2020-05-08 17:02:54','2020-05-08 17:02:54'),
	(68,'Milad','Darani','ass','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','milad.darani@hotmail.comxx','$2y$10$Teuzu.SQmDxkPmZ6K5eQHO5wYsMmgeRkOsaorN6Y/MTUp0o2WtF7q',34,'2020-05-08 17:14:03','2020-05-08 17:14:03'),
	(69,'Milad','Darani','s1','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','milad.darani@hotmail.comxxx','$2y$10$HezyYTl0B9VL8QCt0F8Z1.g59mmto/idj1tLgWLhLWtv.eUwG1i2.',34,'2020-05-08 17:17:02','2020-05-08 17:17:02'),
	(70,'Leo','Messi','The Mesiah','Barcelona','Barcelona','R2J 1L6','Manitoba','Canada','8888624235','leo@messi.com','$2y$10$q.Eknyp7VGI8clicKE9xFO986lBxZEzgLGRY29f9/ekiVHg2ipTSm',35,'2020-05-08 17:18:12','2020-05-08 17:18:12'),
	(71,'Joe','Blow','Joey','Haha st','Winnipeg','R2J1l2','MB','Canada','2048745555','joe@joe.com','$2y$10$EiZ9HHWUl9Uu3klHtNH1yOs.aU.p4yXBQX3UoGZelSqn1b5ZXa9AK',43,'2020-05-08 23:34:10','2020-05-08 23:34:10'),
	(72,'Joe','Blow','Joey','Haha st','Winnipeg','R2J1l2','MB','Canada','2048745555','joe1@joe.com','$2y$10$3z.ZXHuKurBnHFlbATguTOKtj89qZbR1fRRqRUHZu/ebbc0Kopfau',43,'2020-05-08 23:34:56','2020-05-08 23:34:56'),
	(73,'Silad','Darani','The King','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','silad.darani@hotmail.com','$2y$10$.qU0Dhjd3O7h1KUdyec45u1/CQ3As7dNNyPaDjI5sW9gtWCsT6DAe',23,'2020-05-09 09:16:38','2020-05-09 09:16:38'),
	(74,'Heather','Price','HBone','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','hprice888@gmail.com','$2y$10$hN7vuLCYTdt3PV07mo9VSuVjCdv1iM1OHxnm50HHyKgGXg2bn1y4O',35,'2020-05-09 14:14:52','2020-05-09 14:14:52'),
	(75,'Milad','Darani','Man','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','milad@hotmail.com','$2y$10$bVF87ByLY8UniLOB0YwcYuQgd5ORvCSuLehvABq7aFdSd0Wq53atq',35,'2020-05-09 20:57:04','2020-05-09 20:57:04'),
	(76,'Xavier','Darani','Super Duper','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','milad.darani@hotmail.comrrr','$2y$10$MW3GhAcgLpDj.CCRNRRwmeVB9bWdPOYwlQtQR8mGxUx7gg1B2jjJq',35,'2020-05-10 18:20:00','2020-05-10 18:20:00'),
	(77,'reeere','Darani','ererer','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','carmilad.darani@hotmail.com','$2y$10$oP9oBgUGmB5yXBoezEJ51.X3cc7i2Q1YhdS2HFbsfX781uQq81QGa',35,'2020-05-12 14:24:54','2020-05-12 14:24:54'),
	(78,'Mel','Darani','Kooni','10 Humber road','Winnipeg','R2J1l2','MB','Canada','2048745555','joe@joe.ca','$2y$10$DMI/DjwPRKns7voDVGIPAOr7IaF9pDzpqpmEwFJa84zsDFreiIthG',25,'2020-05-19 20:38:09','2020-05-19 20:38:09');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
