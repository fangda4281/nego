CREATE DATABASE `nego` /*!40100 DEFAULT CHARACTER SET latin1 */;


DROP TABLE IF EXISTS `nego`.`contract`;
CREATE TABLE  `nego`.`contract` (
  `n_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(30) NOT NULL DEFAULT '',
  `info` varchar(512) NOT NULL DEFAULT '',
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `nego`.`friend`;
CREATE TABLE  `nego`.`friend` (
  `u_id` int(10) unsigned NOT NULL DEFAULT '0',
  `f_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `nego`.`invitation`;
CREATE TABLE  `nego`.`invitation` (
  `receiver` int(10) unsigned NOT NULL DEFAULT '0',
  `sender` int(10) unsigned NOT NULL DEFAULT '0',
  `info` varchar(64) NOT NULL DEFAULT '',
  `n_id` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(10) NOT NULL DEFAULT '',
  `role` varchar(10) NOT NULL DEFAULT '',
  `start` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `nego`.`negochat`;
CREATE TABLE  `nego`.`negochat` (
  `n_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `u_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(20) NOT NULL DEFAULT '',
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message` varchar(512) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `nego`.`negomember`;
CREATE TABLE  `nego`.`negomember` (
  `n_id` int(10) unsigned NOT NULL DEFAULT '0',
  `u_id` int(10) unsigned NOT NULL DEFAULT '0',
  `role` varchar(10) NOT NULL DEFAULT '',
  `live` varchar(1) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `nego`.`user`;
CREATE TABLE  `nego`.`user` (
  `u_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `u_name` varchar(20) NOT NULL DEFAULT '',
  `u_pass` varchar(20) NOT NULL DEFAULT '',
  `u_image` varchar(30) NOT NULL DEFAULT '',
  `u_info` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;