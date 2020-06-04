# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.26)
# Database: blog_post
# Generation Time: 2020-06-04 22:11:26 +0000
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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;

INSERT INTO `authors` (`author_id`, `author_name`, `author_location`, `author_image`, `created_at`, `updated_at`)
VALUES
	(1,'Michael Jordan','USA','mj.jpg',NULL,NULL),
	(2,'Leo Messi','Argentina','leo.jpg',NULL,NULL),
	(3,'Cristiano Ronaldo','Portugal','ronaldo.jpg',NULL,NULL),
	(4,'Diego Maradona','Argentina','diego.jpg',NULL,NULL),
	(5,'Neymar Jr','Brazil','neymary.jpg',NULL,NULL);

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
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`post_id`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=utf8;

LOCK TABLES `blog_post` WRITE;
/*!40000 ALTER TABLE `blog_post` DISABLE KEYS */;

INSERT INTO `blog_post` (`post_id`, `title`, `full_desc`, `read_length`, `date_posted`, `views`, `seo_done`, `category`, `author_id`, `image`, `updated_at`, `deleted`)
VALUES
	(13,'Why you should not mix and master your own music','Finally, if for no other reason, you should have your music mixed and mastered by someone else so that you can focus on creating more music. If you are not an audio engineer, have never been to school for audio mastering, and have not studied under a master engineer, then it will take you a lot of time to get anything near a professionally mastered track. When you take into consideration all thee other hats you need to wear as a modern day musician , composer, arranger, recorder, marketer, designer, blogger and so on , why add two more huge ones to the stack?',6,'2020-04-19 10:36:16',1154,1,'Mixing',5,'pic1.jpg','2020-04-19 10:36:16',0),
	(14,'Mix some really, really bad live recordings','If you want to really get better at mixing live recordings, I suggest practicing on the worst live recordings you can find (assuming anyone will hand them over). This is the best way to develop your own tricks for dealing with really bad situations, and I guarantee you some of these tricks will find their way into your workflow. Bottom line is that there is no substitute for experience, so use these kinds of opportunities to make your own.',7,'2020-04-19 10:36:29',1544,1,'Mixing',4,'pic2.jpg','2020-04-19 10:36:29',0),
	(21,'Final Words','Are you looking for music production tips? If so, you have come to the right place! \r\nMaybe you just started learning how to use your DAW and need some help getting the sound right. Maybe you are a seasoned producer looking to improve your mixing skills. Whoever you are, I will bet there is at least one tip on this list that will help you get the creative juices flowing.\r\n\r\nHere they are, in no particular order: 25 music production tips:\r\n1.Pan background vocals or you risk a muddy mix.\r\n\r\n2. Follow your delay with a bit of reverb to make it sound more organic.\r\n\r\n3. Compress your reverb return for a thicker sound.\r\n\r\n4. Enable auto-save in your DAW in case of a crash.\r\n\r\n5. Pan out your drums for a wider sound.\r\n\r\n6. Re-balance your volume after all effects have been added.\r\n\r\n7. Place a compressor on your vocal track with a fast attack to control the peaks.\r\n\r\n8. Applying master bus compression during mix down is a good way to ensure a coherence to the signal.\r\n\r\n9. Leave automation as your last step when mixing audio.\r\n\r\n10. Subtractive EQ is a fantastic tool for tightening up low end mids.\r\n\r\n11. Subtractive EQ should be done before the compressor is placed.\r\n\r\n12. Keep your master output level at -6db when mixing audio.\r\n\r\n13. Use a high pass filter. It is the most commonly used tool in mixing.',6,'2020-05-19 10:47:42',6584,1,'Sound Editing',2,'pic3.jpg','2020-05-19 10:47:42',0),
	(22,'The trickiest part of mixing ','When you are mixing live band recordings, the most important thing to remember is that a live record is meant to showcase a band in their best possible light. I also suggest checking out my  Ultimate Guide To Mixing Vocals to balance the vocals properly into your mix. Keep that in mind and you will be on your way to achieving great results.',7,'2020-05-19 10:47:42',154,1,'Sound Editing',5,'pic4.jpg','2020-05-19 10:47:42',0),
	(24,'25 Music Production Tips You Probably  Already Know','Maybe you just started learning how to use your DAW and need some help getting the sound right. Maybe you are a seasoned producer looking to improve your mixing skills. Whoever you are, I will bet there is at least one tip on this list that will help you get the creative juices flow.\r\n\r\nHere they are, in no particular order: 25 music production tips:\r\n1.Pan background vocals or you risk a muddy mix.\r\n\r\n2. Follow your delay with a bit of reverb to make it sound more organic.\r\n\r\n3. Compress your reverb return for a thicker sound.\r\n\r\n4. Enable auto-save in your DAW in case of a crash.\r\n\r\n5. Pan out your drums for a wider sound.\r\n\r\n6. Re-balance your volume after all effects have been added.\r\n\r\n7. Place a compressor on your vocal track with a fast attack to control the peaks.\r\n\r\n8. Applying master bus compression during mix down is a good way to ensure a coherence to the signal.\r\n\r\n9. Leave automation as your last step when mixing audio.\r\n\r\n10. Subtractive EQ is a fantastic tool for tightening up low end mids.\r\n\r\n11. Subtractive EQ should be done before the compressor is placed.\r\n\r\n12. Keep your master output level at -6db when mixing audio.\r\n\r\n13. Use a high pass filter. It is the most commonly used tool in mixing.',3,'2020-05-19 10:47:42',2582,1,'Sound Design',1,'pic5.jpg','2020-05-19 10:47:42',0),
	(26,'Beginners Guide To Mastering','How To Master Your Own Music: The Complete Guide For Beginners\r\n\r\nIf you are thinking about mastering your own music, you might be wondering where to start.\r\n\r\nWhat type of file do you need?\r\n\r\nWhen do you use EQ?\r\n\r\nShould you use a limiter in the middle or at the end?',6,'2020-05-19 10:47:42',32564,1,'Mastering',2,'pic6.jpg','2020-05-19 10:47:42',0),
	(27,'The Top 5 Reasons You Should Not Mix And Master Your Own Music','You have composed and recorded a song all on your own, now why not just mix and master it as well? There are some advantages to doing this, of course. In my experience, however, the disadvantages outweigh them for most musicians. Getting outside help in mixing and mastering your music just makes sense.',7,'2020-05-19 10:47:42',12458,1,'Sound Editing',1,'pic7.jpg','2020-05-19 10:47:42',0),
	(28,'Prepare Your Track','As you mix your track, be sure to leave plenty of headroom. You will want to export your mix to a stereo file with a bit depth of at least 24 and a sample rate of 44.1 kHz or more. Next, you will need to import your file into a brand new session in your DAW.\r\n\r\n2.Look For Weaknesses In The Mix\r\nThis step is all about defining what it is that you want to fix or enhance. The best way to figure this out is to listen to professionally mastered songs that are similar to your track. Compare your song to the samples and listen for anything that sounds strange in your track. You can also use a spectrum analyzer to check for too much, or not enough energy across the song.',2,'2020-05-19 10:47:42',6548,1,'Mastering',5,'pic8.jpg','2020-05-19 10:47:42',0),
	(31,'Add Compression','To avoid over-compressing, start with a ration of 1.5:1 or 2:1. If compression doesn ot improve the overall quality of your track, skip it altogether! Do not go over 4 dB of gain reduction. You can try chaining different compressors in series to add loudness in small steps, or use a multi band compressor to hone in on one frequency range.',6,'2020-05-19 10:47:42',8564,1,'Sound Editing',2,'pic9.jpg','2020-05-19 10:47:42',0),
	(32,'Audio Engineering Has A Steep Learning Curve','Your core skill set might be composing, performing, and recording music. Being able to professionally mix and master music requires years of education, practice and experience. Most engineers have had a diverse career; they may have began as musicians or producers, worked on a variety of projects, gone to school, and learned from the best in order to hone the skills they now have. Great mixing and mastering are skills that are perfected over a long period of time.',7,'2020-05-19 10:47:42',2564,1,'Mixing',4,'pic10.jpg','2020-05-19 10:47:42',0),
	(33,'Are you still with me ?? Lets keep going ','14. Start mixing your kick at -10db.\r\n\r\n15. EQ your effects or you will end up with a muddy mix.\r\n\r\n16. 200-500hz is where mixes get muddy.\r\n\r\n17. Pan your tracks before adding compression.\r\n\r\n18. Start the mix by bringing all faders down to zero.\r\n\r\n19. Use a noise gate to remove unwanted background noise.\r\n\r\n20. Try this in your effects chain in this order: Reverb, 1/4 delay, 2nd reverb. \r\n\r\n21. Feed your bus track into other bus tracks for some funky effects.\r\n\r\n22. Do not place any plugins on the master channel while you are mixing.\r\n\r\n23. Spread your delay bus to wide stereo. This always makes the song feel big.\r\n\r\n24. Use saturation for a more analog feel.\r\n\r\n25. Use guitar rigs on your bass for some awesome sound design. ',5,'2020-05-19 10:47:42',1254,1,'Sound Editing',2,'pic11.jpg','2020-05-19 10:47:42',0),
	(34,'Know another producer who would find this post helpful?','Mixing live band recordings is hard. Really hard. The genre and instruments involved do not really make it harder or easier when you are talking live recording. It takes a lot of time and effort to create a perfectly balanced mix that sounds effortless.\r\n\r\nI have compiled these 7 steps to help you get started. These are tips that I have found work well specifically when mixing music that has been recorded in front of a live audience.',9,'2020-05-19 10:47:42',9546,1,'Sound Design',3,'pic12.jpg','2020-05-19 10:47:42',0),
	(37,'Listening Fatigue','As a music producer, you are likely well aware of listening fatigue. Your ears need time away from making music so you can come back to your music fresh. Producing already puts a huge strain on your ears which can make it very hard to properly mix and master your own music. Without taking the right breaks, it will be very difficult for you to hear if the changes you are applying are truly making your music sound better. A fresh set of ears means that a mix and master engineer will be able to hear what needs to be done to your song when you may not.',7,'2020-05-19 10:47:42',3256,1,'Sound Editing',2,'pic13.jpg','2020-05-19 10:47:42',0),
	(38,'Accept the audio as it is','The thing about mixing live band recordings is that what you have is what you have. You need to come to terms with the limitations of the track and make peace with it. This ensures that you do not get stuck trying to fix things that are not fixable; it allows you to move forward with the mix.\r\n\r\nNext, check each track individually and find the channel that best represents the overall performance. Use this track to lead the rest of your mixing. Make sure every other track follows it is lead and enhances it.',5,'2020-05-19 10:47:42',6598,1,'Sound Editing',3,'pic14.jpg','2020-05-19 10:47:42',0),
	(39,'Focus on Level and Panning (versus EQ and Compression','When you are mixing a live recording, keep in mind that to a certain extent, a live band mixes itself while performing. Signal problems like hums, pops, and clicks can be corrected with a number of different tools (iZotope RX 6 for example).\r\n\r\nBeyond this, assuming you have a decent band, the best tools to use for mixing a live recording are level and panning. I know what you are thinking: what about EQ and compression? They are the go-to processes in studio mixing, however they can do more harm than good when working with a live record because of the bleed inherent in a live recording. Both upwards and downwards expansion are more suitable in a live context, which is where level and panning come into play.\r\n\r\nOne way to think about mixing a bands live recording, is to think of it like mastering. Remember that you are goal, in the end, is to preserve the cohesiveness of the track. Now that doesn ot mean skip eq and compression, what I mean is just change your approach.\r\n\r\n3) Automa',9,'2020-05-19 10:47:42',2589,1,'Sound Design',4,'pic15.jpg','2020-05-19 10:47:42',0),
	(42,'Room Acoustics','Lets be honest. Most of us in-home producers are working in rooms that are not acoustically ideal. Unless you are lucky enough to own a properly treated studio, you will likely be trying some acoustic treatments for your room like bass traps and diffusers. These treatments can help but will not be perfect by any means, which is reason number 3 that a professional mix and master engineer can make a huge difference in the final sound of your music. They have the training and technical understanding which enables them to get a great final product in a variety of settings.',7,'2020-05-19 10:47:42',2458,1,'Sound Editing',2,'pic16.jpg','2020-05-19 10:47:42',0),
	(43,'Automate, Automate and Automate some more','An inevitable consequence of using compression is that unwanted blemishes in the sonic picture will be emphasized. You will need to use other methods to ensure that every note and word is heard. Automation, while it can be painstaking, is a surefire way to get this done.\r\n\r\nPanning automation might be necessary as well, considering that during a live recording on stage, all the microphones are picking up sound from multiple different instruments. Panning automation between phrases makes sense if you need to move an instrument front and centre, for a solo for example, and then put it back where it was afterwards.\r\n\r\nTake your time automating in a live mix; it is worth it!',5,'2020-05-19 10:47:42',2354,1,'Sound Editing',4,'pic17.jpg','2020-05-19 10:47:42',0),
	(44,'Clip Gain and Gating','Some clip gain and gating can help to cut down on automation and speed up the mixing process. Clip-gaining the ambient parts down might be quicker than checking every move. I suggest clip-gaining over gating because when an instrument comes into a mix, so does some spill. Sometimes this spill is unpleasant. Clip-gaining a signal, rather than gating or muting it, preserves some ambience. In this way, when you raise the level gradually, it wont be such a shock.\r\n\r\nGates can be used with a higher close-threshold, but I prefer clip-gaining with automation for bringing levels up and down. Another spot I had use gates is when working with percussive instruments like a kick drum.',9,'2020-05-19 10:47:42',2358,1,'Mixing',3,'pic18.jpg','2020-05-19 10:47:42',0),
	(47,'Unprofessional Masters Ruin Reputations','You know the music industry is incredibly competitive. Your music needs to meet certain quality standards in order to compete with all the other music out there. Having your songs professionally mixed and mastered will help you maintain your reputation as a quality musician and ensure that your tracks meet the standards of audio industry companies.',7,'2020-05-19 10:47:42',12456,1,'Sound Editing',2,'pic19.jpg','2020-05-19 10:47:42',0),
	(48,'Remember the Applause','To mix a live recording well, you will need good quality applause to intersperse between tracks as needed. This is easier said than done. The applause straight off a recorded track is often ruined by noise from the band or the audience. With this in mind, you will either need to create your own applause to feed into the mix, or enhance the applause that has already been recorded.\r\n\r\nTo manufacture applause, consider editing and combining clapping from different songs to create a larger audience or using a sound library. You will need to analyze the applause, check how it flows and tapers, to ensure that it sounds genuine and fits in the overall mix of the record.',5,'2020-05-19 10:47:42',23598,1,'Mastering',3,'pic20.jpg','2020-05-19 10:47:42',0),
	(49,'Be Careful with Ambience','The trickiest part of mixing a live track is improving the ambience, without drawing out unnatural reverbs, delays and modulation. The best advice I have for dealing with this problem is to take your time. When you work on ambience, try to take some time away from the mix and come back with fresh ears. This will allow you to determine if your adjustments were effective, or if they were even necessary in the first place.',9,'2020-05-19 10:47:42',125698,1,'Sound Design',3,'pic12.jpg','2020-05-19 10:47:42',0),
	(56,'The Future Of The Music Industry.','The future of music is not looking too good, that is all. ',2,'2020-05-31 13:36:58',7589,1,'Mixing',1,'pic5.jpg','2020-05-31 13:36:58',0),
	(127,'sdsdsds','sdsdsd',2,'2020-06-02 12:00:45',0,0,'sdsdsd',1,'pic1.jpg','2020-06-02 12:00:45',1),
	(128,'sdsd','sdsd',2,'2020-06-02 12:42:52',0,0,'sdsdsdsd',1,'pic3.jpg','2020-06-02 12:42:52',1),
	(129,'dsdsds','sdsdssd',2,'2020-06-02 12:44:29',0,0,'sdsdsd',1,'pic1.jpg','2020-06-02 12:44:29',1),
	(130,'sdsds','sdsds',2,'2020-06-02 12:47:36',0,0,'sdsdsd',1,'pic2.jpg','2020-06-02 12:47:36',1),
	(131,'sdsd','sdsd',2,'2020-06-02 12:48:49',0,0,'sdsds',1,'pic1.jpg','2020-06-02 12:48:49',1),
	(132,'sdsds','sdsds',2,'2020-06-02 12:49:35',0,0,'sdsdsd',1,'pic1.jpg','2020-06-02 12:49:35',1),
	(133,'asas','asas',2,'2020-06-02 12:51:03',0,1,'asas',1,'pic3.jpg','2020-06-02 12:51:03',1),
	(134,'ssds','sdsd',2,'2020-06-02 12:55:13',0,0,'sdsds',1,'pic1.jpg','2020-06-02 12:55:13',1),
	(135,'dsdsds','sdsds',2,'2020-06-02 12:58:26',0,0,'sdsds',1,'pic1.jpg','2020-06-02 12:58:26',1),
	(136,'zxxxxx','xxxx',2,'2020-06-02 13:01:09',0,0,'xxxxx',1,'pic2.jpg','2020-06-02 13:01:09',1),
	(137,'sdsdsdsd','sdsdsd',2,'2020-06-02 13:04:50',0,1,'sdsdsd',1,'pic1.jpg','2020-06-02 13:04:50',1),
	(138,'ssdsdsdsd','sdsdsd',2,'2020-06-02 13:05:19',0,0,'sdsdsdsd',1,'pic2.jpg','2020-06-02 13:05:19',1),
	(139,'asasa','asas',2,'2020-06-02 15:45:43',0,0,'asasas',1,'pic3.jpg','2020-06-02 15:45:43',1),
	(140,'sssss','sdsds',2,'2020-06-02 15:49:41',0,0,'sss',1,'pic14.jpg','2020-06-02 15:49:41',1),
	(141,'Messi','sdsds',2,'2020-06-02 17:35:49',0,1,'sdsd',1,'pic1.jpg','2020-06-02 17:35:49',1),
	(142,'sdsdsd','sdsd',2,'2020-06-03 02:19:31',0,0,'sdsd',1,'pic1.jpg','2020-06-03 02:19:31',1),
	(143,'sdsd','sds',2,'2020-06-03 17:44:31',0,0,'sdsds',1,'pic1.jpg','2020-06-03 17:44:31',1),
	(144,'sdsd','sdsd',2,'2020-06-03 17:50:37',0,0,'sdsds',1,'pic2.jpg','2020-06-03 17:50:37',1),
	(145,'sdsd','sds',2,'2020-06-03 17:59:29',0,0,'sdsd',1,'pic3.jpg','2020-06-03 17:59:29',1),
	(146,'sdsdsd','sdsd',2,'2020-06-03 18:01:36',0,1,'sdsd',1,'pic2.jpg','2020-06-03 18:01:36',1),
	(147,'sdsd','sdsd',2,'2020-06-03 18:03:08',0,0,'sdsd',1,'pic2.jpg','2020-06-03 18:03:08',1),
	(148,'sdsdsdsdsd','sdsd',2,'2020-06-03 18:08:48',0,1,'sdsds',1,'pic3.jpg','2020-06-03 18:08:48',1),
	(149,'sdsds','sdsd',2,'2020-06-03 18:09:19',0,0,'sdsd',1,'pic1.jpg','2020-06-03 18:09:19',1),
	(150,'sdsdsd','sdsd',2,'2020-06-03 18:10:00',0,1,'sdsd',1,'pic1.jpg','2020-06-03 18:10:00',1),
	(151,'sdsds','sdsd',2,'2020-06-03 18:10:24',0,1,'sdsdsd',1,'pic2.jpg','2020-06-03 18:10:24',1),
	(152,'sdsdsd','sdsd',2,'2020-06-03 18:13:03',0,0,'sdsdsd',1,'pic1.jpg','2020-06-03 18:13:03',1),
	(153,'sdsdsss','sdsd',2,'2020-06-03 18:16:24',0,0,'sdsdsas',1,'pic1.jpg','2020-06-03 18:16:24',1),
	(154,'sdsd','sdsd',2,'2020-06-03 18:19:25',0,1,'sdsd',1,'pic1.jpg','2020-06-03 18:19:25',1),
	(155,'sdsds','sdsd',2,'2020-06-04 10:28:28',0,0,'sdsd',1,'pic1.jpg','2020-06-04 10:28:28',1),
	(156,'sdsd','sdsd',2,'2020-06-04 10:30:17',0,0,'sdsd',1,'pic2.jpg','2020-06-04 10:30:17',1),
	(157,'sdsd','sdsd',2,'2020-06-04 10:31:08',0,0,'sdsd',1,'pic1.jpg','2020-06-04 10:31:08',1),
	(158,'sdsdsd','sds',2,'2020-06-04 10:33:46',0,0,'sdsd',1,'pic1.jpg','2020-06-04 10:33:46',1),
	(159,'sdsd','sdsd',2,'2020-06-04 10:38:25',0,0,'sdsd',1,'pic1.jpg','2020-06-04 10:38:25',1),
	(160,'sdsd','sds',2,'2020-06-04 10:39:04',0,1,'sds',1,'pic1.jpg','2020-06-04 10:39:04',1),
	(161,'sdsd','sdsd',2,'2020-06-04 10:42:25',0,0,'sds',1,'pic1.jpg','2020-06-04 10:42:25',1),
	(162,'sdsdsdd','sdsd',2,'2020-06-04 11:01:29',0,0,'sdsd',1,'pic1.jpg','2020-06-04 11:01:29',1),
	(163,'sdsd','sd',2,'2020-06-04 15:17:31',0,1,'sdsd',1,'pic2.jpg','2020-06-04 15:17:31',1),
	(164,'sdsdd','wewe',2,'2020-06-04 16:10:44',0,0,'Mixing',1,'pic1.jpg','2020-06-04 16:10:44',1);

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
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`),
  KEY `user_id` (`user_id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

LOCK TABLES `comment_rate` WRITE;
/*!40000 ALTER TABLE `comment_rate` DISABLE KEYS */;

INSERT INTO `comment_rate` (`comment_id`, `comment_text`, `rating`, `date_added`, `user_id`, `post_id`, `updated_at`)
VALUES
	(1,'This is comment number 1',4,'2020-04-19 10:01:54',1,1,NULL),
	(2,'This is comment number 2',2,'2020-04-19 10:43:35',5,17,NULL),
	(3,'This is comment number 3',3,'2020-04-19 10:43:45',4,12,NULL),
	(4,'This is comment number 4',5,'2020-04-19 10:43:57',3,14,NULL),
	(5,'This is comment number 5',5,'2020-04-19 10:44:08',2,11,NULL),
	(17,'Some more Comments',NULL,'2020-05-29 00:50:54',46,24,'2020-05-29 00:50:54'),
	(18,'Lets do one more shall we?',NULL,'2020-05-29 00:52:32',46,24,'2020-05-29 00:52:32'),
	(19,'Comment for testing',NULL,'2020-05-29 09:02:21',46,24,'2020-05-29 09:02:21'),
	(20,'This is new user',NULL,'2020-05-29 10:36:17',74,24,'2020-05-29 10:36:17'),
	(21,'Testing some comments ',NULL,'2020-05-29 10:37:19',74,33,'2020-05-29 10:37:19'),
	(22,'This is thee newest comments from tonight',NULL,'2020-05-29 19:46:48',46,24,'2020-05-29 19:46:48'),
	(23,'This is some more testing for comments that have a bit of length to the.',NULL,'2020-05-30 21:47:16',46,26,'2020-05-30 21:47:16'),
	(24,'Sound Comet is a system for instantly mixing music online. With today’s computing power, along with advanced algorithms and machine learning, music can be mixed automatically following the steps that an audio engineer would take.',NULL,'2020-05-30 21:48:21',46,33,'2020-05-30 21:48:21'),
	(25,'Sound Comet is a system for instantly mixing music online. With today’s computing power, along with advanced algorithms and machine learning, music can be mixed automatically following the steps that an audio engineer would take.ccc',NULL,'2020-05-30 21:49:18',46,33,'2020-05-30 21:49:18'),
	(26,'I love Dune, it is the greatest book ever made. Im naming my next kid Dune. ',NULL,'2020-06-01 10:13:42',80,56,'2020-06-01 10:13:42'),
	(27,'Testing some more texts\r\n',NULL,'2020-06-01 16:16:23',74,33,'2020-06-01 16:16:23');

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
  `is_admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `nick_name`, `street`, `city`, `postal_code`, `province`, `country`, `phone`, `email`, `password`, `age`, `created_at`, `updated_at`, `is_admin`)
VALUES
	(46,'Milad','Darani','Popular Milad','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','milad.darani@hotmail.com','$2y$10$wZjt.UAltYuaqEfcccA8Nu2TVcD3prHBZNLjilPn1gTB5oE2Gzg.a',34,'2020-05-07 18:53:03','2020-05-07 18:53:03',1),
	(70,'Leo','Messi','The Mesiah','Barcelona','Barcelona','R2J 1L6','Manitoba','Canada','8888624235','leo@messi.com','$2y$10$q.Eknyp7VGI8clicKE9xFO986lBxZEzgLGRY29f9/ekiVHg2ipTSm',35,'2020-05-08 17:18:12','2020-05-08 17:18:12',0),
	(71,'Joe','Blow','Joey','Haha st','Winnipeg','R2J1l2','MB','Canada','2048745555','joe@joe.com','$2y$10$EiZ9HHWUl9Uu3klHtNH1yOs.aU.p4yXBQX3UoGZelSqn1b5ZXa9AK',43,'2020-05-08 23:34:10','2020-05-08 23:34:10',0),
	(73,'Silad','Darani','The King','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','silad.darani@hotmail.com','$2y$10$.qU0Dhjd3O7h1KUdyec45u1/CQ3As7dNNyPaDjI5sW9gtWCsT6DAe',23,'2020-05-09 09:16:38','2020-05-09 09:16:38',0),
	(75,'Milad','Darani','Man','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','milad@hotmail.com','$2y$10$bVF87ByLY8UniLOB0YwcYuQgd5ORvCSuLehvABq7aFdSd0Wq53atq',35,'2020-05-09 20:57:04','2020-05-09 20:57:04',0),
	(76,'Xavier','Darani','Super Duper','10 Humber Road','Winnipeg','R2J 1L6','Manitoba','Canada','8888624235','milad.darani@hotmail.comrrr','$2y$10$MW3GhAcgLpDj.CCRNRRwmeVB9bWdPOYwlQtQR8mGxUx7gg1B2jjJq',35,'2020-05-10 18:20:00','2020-05-10 18:20:00',0),
	(80,'Steve','George','The Professor','460 Portage Ave','Winnipeg','R2K 1R5','Manitoba','Canada','8005554444','edu@pagerange.com','$2y$10$XUKpXOMoLg8oyn7GKpaHheeguE8Qh64d6hKPGNCbfCWvHqmGdEhxW',43,'2020-06-01 09:59:16','2020-06-01 09:59:16',1),
	(81,'Brent','Scott','Photoshop Wizard','460 Portage Ave','Winnipeg','R2K 1R5','Manitoba','Canada','8005554444','brent@brentscott.com','$2y$10$/zw/ZhazzI0edTZ/IwBFXudy.Ec3UCuws9m5m.DvzMpgJrT..TS8a',40,'2020-06-01 10:15:24','2020-06-01 10:15:24',1);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
