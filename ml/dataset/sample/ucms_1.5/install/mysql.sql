CREATE TABLE `uuu_admin` (
  `id` int(5) NOT NULL auto_increment,
  `username` varchar(15) NOT NULL,
  `kind` tinyint(2) NOT NULL,
  `psd` varchar(32) NOT NULL,
  `lasttime` varchar(12) default NULL,
  `lastip` varchar(20) default NULL,
  `nickname` varchar(20) default NULL,
  `alevel` tinyint(2) default NULL,
  `power` text,
  `asetting` text,
  `ucmsid` varchar(36) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE `uuu_channel` (
  `cid` int(5) NOT NULL auto_increment,
  `fid` int(5) NOT NULL default '0',
  `cname` varchar(50) default NULL,
  `ckind` tinyint(2) NOT NULL,
  `ifshow` tinyint(1) default NULL,
  `ifshownav` tinyint(1) default NULL,
  `ifshowadmin` tinyint(1) default NULL,
  `ifshowleft` tinyint(1) default NULL,
  `newwindow` tinyint(1) default NULL,
  `corder` int(5) default NULL,
  `csetting` text,
  `cvalue` text,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE `uuu_moudle` (
  `id` int(5) NOT NULL auto_increment,
  `cid` int(5) default NULL,
  `fid` varchar(20) default NULL,
  `mname` varchar(20) default NULL,
  `minfo` varchar(100) default NULL,
  `mcontent` text,
  `mkind` int(3) default NULL,
  `morder` int(6) default NULL,
  `ifcreated` tinyint(2) default NULL,
  `ifshow` tinyint(2) default NULL,
  `ifonly` tinyint(2) default NULL,
  `ifadmin` tinyint(2) default NULL,
  `ifmore` tinyint(2) default NULL,
  `hide` tinyint(2) default NULL,
  `ifshowtemp` text,
  `strarray` varchar(250) default NULL,
  `msetting` text,
  `strdefault` varchar(250) default NULL,
  `mfunction` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE `uuu_str` (
  `id` int(8) NOT NULL auto_increment,
  `strcid` int(5) default NULL,
  `strname` varchar(50) default NULL,
  `strvalue` longtext,
  `strinfo` varchar(250) default NULL,
  `strstyle` varchar(250) default NULL,
  `ifshow` tinyint(2) default NULL,
  `ifbind` tinyint(2) default NULL,
  `ifadmin` tinyint(2) default NULL,
  `inputkind` tinyint(3) default NULL,
  `strorder` int(8) default NULL,
  `strarray` varchar(250) default NULL,
  `ssetting` text,
  `strtip` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;