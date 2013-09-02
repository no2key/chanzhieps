-- add product table.
CREATE TABLE IF NOT EXISTS `xr_product` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `model` char(30) DEFAULT NULL,
  `color` char(20) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `unit` char(20) NOT NULL,
  `price` float(8,2) NOT NULL,
  `promotion` float(8,2) NOT NULL,
  `amount` mediumint(8) unsigned DEFAULT NULL,
  `keywords` varchar(150) NOT NULL,
  `summary` text NOT NULL,
  `content` text NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `views` mediumint(5) unsigned NOT NULL DEFAULT '0',
  `sticky` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `model` (`model`),
  KEY `order` (`order`),
  KEY `views` (`views`),
  KEY `sticky` (`sticky`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

ALTER TABLE `xr_category` ADD `book` VARCHAR( 30 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER `readonly`; 
ALTER TABLE `xr_relation` ADD `book` VARCHAR( 30 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER `type`; 
ALTER TABLE `xr_article` ADD `book` VARCHAR( 30 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER `type`; 
