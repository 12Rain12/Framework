create database mvc
charset utf8

DROP TABLE IF EXISTS `framework`.`news`;
CREATE TABLE  `framework`.`news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `text` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;