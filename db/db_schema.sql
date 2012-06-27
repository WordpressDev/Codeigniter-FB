CREATE TABLE `fb_terms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `created` datetime NOT NULL,
  `update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `fb_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fbid` varchar(255) NOT NULL,
  `fb_name` varchar(255) NOT NULL DEFAULT '',
  `fb_email` varchar(255) NOT NULL DEFAULT '',
  `created` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `fbid` (`fbid`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `fb_gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fbid` varchar(255) NOT NULL DEFAULT '',
  `votes` int(255) NOT NULL DEFAULT '0',
  `file` varchar(255) NOT NULL DEFAULT '',
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `fb_votes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `fbid` varchar(255) NOT NULL DEFAULT '',
  `created` datetime NOT NULL,
  `ip` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;