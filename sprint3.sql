CREATE DATABASE  IF NOT EXISTS `sprint3`;
USE `sprint3`;


CREATE TABLE `projects` (
  `projectId` int(11) NOT NULL AUTO_INCREMENT,
  `projectName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`projectId`),
  UNIQUE KEY `UNIQ_5C93B3A421011221` (`projectName`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `projects` VALUES (18,'777 luck'),(1,'Brave'),(4,'Cinderella and Co'),(6,'Funky stuff'),(5,'Princess and the Frog'),(2,'Snow White and 7 Dwarfs'),(17,'Witch project'),(13,'Красавица и чудовище');

CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `projectId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_BA82C3005E237E06` (`name`),
  KEY `IDX_BA82C3006C9360F7` (`projectId`),
  CONSTRAINT `FK_BA82C3006C9360F7` FOREIGN KEY (`projectId`) REFERENCES `projects` (`projectId`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `employees` VALUES (1,'Evil Queen',2),(2,'Prince Charming',5),(26,'Dwarf crook',2),(31,'Dwarf sleeper',4),(50,'чудовище',4),(58,'Dwarf7',18),(59,'krasata',13),(60,'Motherwitch',17);

