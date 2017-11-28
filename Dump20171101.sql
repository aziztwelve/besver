-- MySQL dump 10.13  Distrib 5.7.19, for Linux (i686)
--
-- Host: localhost    Database: scorehub
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `main_not_photos`
--

DROP TABLE IF EXISTS `main_not_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `main_not_photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_create` time NOT NULL,
  `content_main` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content_text` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `main_not_photos`
--

LOCK TABLES `main_not_photos` WRITE;
/*!40000 ALTER TABLE `main_not_photos` DISABLE KEYS */;
INSERT INTO `main_not_photos` VALUES (1,'Wade Shepard , CONTRIBUTOR','Buseness ','12:02:00','If you haven\'t heard about CLI, Terminal or Git, this section is for you.','If you haven\'t heard about CLI, Terminal or Git, this section is for you. If you know how to use the CLI already, you may skip this section.',NULL,NULL,'A few years ago in California, a professional cartoonist, a designer of golf putters, a surfer, and a self-professed geek got together and formed a company. No, this isn’t the start of a bad joke, it’s the very real story of four guys and one good idea — a story of grassroots entrepreneurship and the struggle of the little guy against the tides of global e-commerce.\n\nThese four Californians who couldn’t have been more different bonded together over the simple fact that they were all dads who shared a similar struggle when bathing their babies. They decided that together they would solve this problem, and they set to work developing a specialized pillow that could be inserted into a sink or tub that would hold their babies in place. They called it the Blooming Bath.\n\nThey then patented the product, trademarked it, passed it through all of the required materials and safety tests, and eventually took it to market. Almost immediately, sales and major design awards began rolling in, and, for a moment, it appeared as if these four random dads from California had it made:\n\n\n\"When you can take a problem and solve it, that feels great. And when you can take a problem and solve it for a lot of other people, that feels even better. But when you can take a problem and turn the answer into something that\'s just so darn adorable - well, there\'s just no topping that.\"\n\nPerhaps unfortunately, Chinese counterfeiters also found the Blooming Bath adorable — so darn adorable, in fact, that they decided to copy it and sell it themselves on Amazon and Ebay.\n\n“Unfortunately, the everyday workload of building and running a new business had us overlooking the very large problem of counterfeiters,” Tiffany Pond, the wife of one of the creators of the Blooming Bath explained to me. “These [counterfeits] have popped up by a half dozen different names by thousands of sellers, but all using our photos, designs, and trademarks to market their items. We have a store on Amazon and counterfeits have been able to attach themselves to our page, violating all of our intellectual property.”\n\nNow, the original creators of the Blooming Bath are watching their earnings slip and their reputation get dismantled by forces that are beyond their control. Not only are they losing sales but recipients of inferior-quality fake Blooming Baths are often not aware that they received a counterfeit, and mistakenly conclude that the legitimate product is junk — and often letting the world know about it via word of mouth and reviews.\n\nLike many others, the team behind the Blooming Bath discovered that the source of many of the counterfeits was China and Hong Kong — the origin of 60% of the world’s knock-offs, according to the OECD.\n\n“Why do citizens of China and Hong Kong find it permissible to fraudulently produce and sell anything they think they can get money for?” Pond asked me in exasperation. “They don\'t honor patents, trademarks, copyrights, or anything… Please, I would like to understand. Instead, I am just upset and angry at an entire population.”\n\nPond’s question was not rhetorical. She was expressing a sentiment that has become common among business owners and patent holders in countries like the USA, who are having their products knocked-off on major e-commerce platforms by foreign counterfeiters who seemingly operate with impunity.\n\nBut that doesn’t mean that we’re talking about bad people who are out to destroy the businesses of others when we talk about Chinese counterfeiters. Rather, we’re talking about a completely different manufacturing ecosystem that operates under a different set of rules than in the West. They exist in a world that is virtually devoid of IP restrictions, where anybody can pretty much take the designs of anybody else and reproduce them without a viable threat of repercussions. We’re talking about shanzhai, the grassroots, quasi-underground ecosystem of hundreds of thousands of manufacturers that extend across China. As I\'ve previously covered:\n\nShanzhai literally means “mountain stronghold,” as in the hideout of bandits... In contemporary slang, the word shanzhai began being used to mean “to copy” or “to parody,” and just prior to the Beijing Olympics in 2008 it was applied to knock-off goods. Perhaps as a combination of these two meanings, the term shanzhai is now used for China’s massive copycat industry and the unique network of design and manufacturing that sprouted from it.\n\nOr, as put a little less lovingly by China-scholar Callum Smith on The China Story:\n\nShanzhai, the word means roughly ‘mass-produced imitation goods’, has created a Chinese landscape that is littered with products derided by the media, Chinese and international, as ‘copycat’, ‘guerrilla counterfeits’ and ‘knockoffs’, all the work of thieves.\n\n“Shanzhai started as a copycat. Forget about the respect for intellectual property,” David Li, the co-founder of China’s first makerspace, XinCheJian, told me in a previous interview. “So if someone does one a design, more often than not if it is useful it is going to get copied. The thing is, the whole system is cooperative, based on the concept of gongban, which roughly translates to a public bowl. Meaning, people want to share… So people are starting to share and that turns out to drive the whole industry to move so fast.”\n\n“The thing is, these guys were figuring out how to copy premium goods on a shoestring budget,” said Bunnie Huang, the renown hacker behind cult-classics like the Chumby and Novena. “That\'s the thing that people are missing about what these guys do. They\'re like \'Oh my God, that\'s a terrible iPhone\' and then they\'re like \'Holy shit, he made an iPhone for like five hundred dollars and a ball of string.\'”\n\nIn this ecosystem, there is no concept of intellectual property but also little economic incentive to just copy what someone else does exactly. No, there needs to be some form of innovation in the development process — either improve a feature, add a new capability, twist it into something that can be sold to a new market, or at least make the manufacturing or distribution processes faster or cheaper. In this way, shanzhai can become an incredibly innovative system, as rather than everyone harboring their own little patents in their own non-transparent little boxes, everything is thrown out into the open, people take whatever they want, add to it, and then recontribute what they do back to the collective pot.\n\nBeyond sharing, the fundamental business strategy behind the shanzhai ecosystem is speed and constant adaption. This is a world where just about anything can be made almost instantaneously; a world where a product can be iterated, produced, and then sold around the world within a couple of weeks. Designs can come from fashion magazines, photos on websites like Amazon or Ebay, something someone saw somewhere, or could also be more or less original -- there are no hard rules here, and just about anything that can be sold is made. When sales of one product dries up they are already on to something new. So someone knocking-off Blooming Baths today may have been counterfeiting Forearm Forklifts yesterday; six months ago he may have been making hoverboards; a year before maybe he was making screens for smart phones.\n\nThe versatility of grassroots Chinese manufacturing is something that is truly awesome. I’ve been in relatively small, \"mom and pop\" Shenzhen factories which made everything from cooling fans to wires for speakers to sex toys all in the same place. What they make on any given day is often a crap shoot — the workers come in, are handed photocopied instructions of whatever it is they will be making, and then they go and make it.'),(4,'one','case','00:00:12','Nowadays, many developers are using a virtual machine (VM) to develop dynamic .','1',NULL,NULL,NULL),(5,'two','workhard','00:00:13','You can run a web server, a database server and all your scripts on that virtual.','2',NULL,NULL,NULL),(6,'three','case','00:00:14','You can create many VM instances and work on various projects. If you don\'t , ','3',NULL,NULL,NULL),(7,'four','news','00:00:15','You can even re-create the VM in minutes!\n\nWe call this: \"Virtualization.\"','4',NULL,NULL,NULL),(8,'five','sport','00:00:16','There are many options for virtualization, but the most popular one is .','5',NULL,NULL,NULL);
/*!40000 ALTER TABLE `main_not_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mains`
--

DROP TABLE IF EXISTS `mains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mains` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_create` time NOT NULL,
  `content_main` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mains`
--

LOCK TABLES `mains` WRITE;
/*!40000 ALTER TABLE `mains` DISABLE KEYS */;
INSERT INTO `mains` VALUES (1,'one','news','leo.jpg','00:00:14','There are many options for virtualization, but the most popular one is ','You can even re-create the VM in minutes!\n\nWe call this: \"Virtualization.\"',NULL,NULL),(2,'fbbf','jyt','leo.jpg','00:00:21','jhvh','jhjfk',NULL,NULL),(3,'gdfg','gfd','leo.jpg','00:00:14','fxngh','xfgn',NULL,NULL),(4,'yk','sport','leo.jpg','00:00:12','Forbes Cloud 100: These Rising','Forbes Cloud 100: These Rising Stars Are At Cloud\'s Cutting Edge',NULL,NULL),(10,'du','se','leo.jpg','00:00:14','some promising companies were too small','While many of the leading companies in the cloud appear in the ranks of the first-ever Forbes Cloud 100 list',NULL,NULL),(11,'chor','fur','belived.jpg','00:00:15','but too fast-growing to ignore','All of these companies are strong candidates to join their more mature peers on the Cloud 100 in future years',NULL,NULL),(12,'panj','nu','belived.jpg','15:15:00','dgkerngjireg','eshrsrtjurt6jrt',NULL,NULL);
/*!40000 ALTER TABLE `mains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (24,'2014_10_12_000000_create_users_table',1),(25,'2014_10_12_100000_create_password_resets_table',1),(26,'2017_09_04_134257_create_articles_table',1),(27,'2017_10_04_083409_create_mains_table',1),(28,'2017_10_05_025519_create_sidebars_table',1),(29,'2017_10_06_115705_create_view_coms_table',1),(30,'2017_10_18_042224_create_main_not_photos_table',2),(31,'2017_10_27_223040_create_siderights_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sidebars`
--

DROP TABLE IF EXISTS `sidebars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sidebars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time_create` time NOT NULL,
  `content` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sidebars`
--

LOCK TABLES `sidebars` WRITE;
/*!40000 ALTER TABLE `sidebars` DISABLE KEYS */;
INSERT INTO `sidebars` VALUES (1,'00:00:12','Ищем сокровища в исходном коде Aladdin',NULL,NULL);
/*!40000 ALTER TABLE `sidebars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siderights`
--

DROP TABLE IF EXISTS `siderights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siderights` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time_create` time NOT NULL,
  `content` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siderights`
--

LOCK TABLES `siderights` WRITE;
/*!40000 ALTER TABLE `siderights` DISABLE KEYS */;
INSERT INTO `siderights` VALUES (1,'22:40:00','Шведские журналисты заподозрили хакеров из России в вирусной рассылке писем',NULL,NULL),(2,'22:41:00','В Тамбове собрался  в поддержку Навального',NULL,NULL),(8,'00:00:15','Саакашвили у Верховнойк досрочным выборам президента Украины',NULL,NULL),(9,'00:00:21','В США мужчина oткрыл огонь по людям на вечеринке',NULL,NULL),(10,'00:00:15','По факту гибели контрактника с семьей в Североморске возбуждено дело',NULL,NULL),(11,'00:00:02','\"Локомотив\" в матче премьер-лиги',NULL,NULL),(12,'00:00:21','Telegram за октябрь заблокировал 8,5 тыс. каналов из-за связи с терроризмом',NULL,NULL),(13,'00:00:12','В Иваново  митинга \"носики всунуть в учебники и там долбиться\"',NULL,NULL),(14,'00:00:15','В Киеве по запросу прилетевшего из Барселоны россиянина',NULL,NULL),(15,'00:00:24','Станцию «Крестовский  вход для болельщиков «Зенита»',NULL,NULL),(16,'00:00:13','Рейс Дубай-Петербург  140 пассажиров ночевали в аэропорту',NULL,NULL),(17,'00:00:15','В Одессе неизвестные в  военное имущество части ВСУ',NULL,NULL),(24,'00:00:29','В Берлине  чрезвычайной ситуации из-за урагана \"Герварт\"',NULL,NULL);
/*!40000 ALTER TABLE `siderights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `view_coms`
--

DROP TABLE IF EXISTS `view_coms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `view_coms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `one` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `view_coms`
--

LOCK TABLES `view_coms` WRITE;
/*!40000 ALTER TABLE `view_coms` DISABLE KEYS */;
/*!40000 ALTER TABLE `view_coms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-01  1:24:15
