/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_mediafromftp_log` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id` bigint(20) DEFAULT NULL,
  `user` text,
  `title` text,
  `permalink` text,
  `url` text,
  `filename` text,
  `time` datetime DEFAULT NULL,
  `filetype` text,
  `filesize` text,
  `exif` text,
  `length` text,
  `thumbnail` longtext,
  `mlccategories` longtext,
  `emlcategories` longtext,
  `mlacategories` longtext,
  `mlatags` longtext,
  UNIQUE KEY `meta_id` (`meta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
